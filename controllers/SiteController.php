<?php

namespace app\controllers;
use sarahh1417\phpmvc\Application;
use sarahh1417\phpmvc\Controller;
use sarahh1417\phpmvc\Request;
use sarahh1417\phpmvc\Response;
use app\models\contactForm;


class SiteController extends Controller
{
    public function home()
    {
        $params = [
            "name" => " Dear User"
        ];
        return $this->render('home' , $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if($request->isPost())
        {
            $contact->loadData($request->getBody());
            if($contact->validate() and $contact->send())
            {
                Application::$app->session->setFlash("success" , "Thanks for contacting us");
                return $response->redirect("/contact");
            }
        }
        return $this->render('/contact' , ["model" => $contact]);
    }
}