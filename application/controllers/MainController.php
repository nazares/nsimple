<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Hello!');
    }

    public function aboutAction()
    {
        $this->view->render('A Simple PHP MVC Framework');
    }
}
