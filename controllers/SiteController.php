<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            "name" => "zari"
        ];
        return $this->render('home' , $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }
    public function handleContact($request)
    {
        $body = $request->getBody();
//                echo '<pre>';
//        echo var_dump($body);
//        echo '</pre>';
//        exit;
        return "handling submitted data";
    }
}