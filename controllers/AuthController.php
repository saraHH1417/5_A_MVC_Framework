<?php

namespace app\controllers;
use app\core\controller;
use app\models\RegisterModel;


class AuthController extends controller
{
    public function login()
    {
        $this->setLayout('Auth');
        return $this->render('login');
    }

    public function register($request)
    {
        $registerModel = new RegisterModel();

        if($request->isPost()) {

            $registerModel->loadData($request->getBody());


            if($registerModel->validate() && $registerModel->register()) {
                return 'success';
            }
            return $this->render('register', [
                'model' => $registerModel
            ]);

        }
        $this->setLayout('Auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}