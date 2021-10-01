<?php

namespace app\core;

use http\Params;

class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    /**
     * @param Request $request
     */
    public function __construct(\app\core\Request $request , Response $response)
        // we can both put the name space or remove it in the cunstroctor parentheses because namespaces are the same here
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path,$callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
//        echo "<pre>";
//        echo gettype($_SERVER);
//        echo var_dump($_SERVER);
//        echo "</pre>";
//        exit;

        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false) {
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }

        if(is_string($callback)) {
            return $this->renderView($callback);
        }
        if(is_array($callback)) {
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }
        return call_user_func($callback , $this->request);
    }

    public function renderView($view , $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view , $params);
        return str_replace("{{content}}" , $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view , $params)
    {
        foreach ($params as $key=> $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }
}
