<?php

namespace app\controllers;

use app\core\Session;
use app\core\View;

class MainController
{
    private Session $session;
    private View $view;

    public function __construct()
    {
        $this->session = Session::getInstance();
        $this->view = new View();
    }

    public function main()
    {
        $this->view->renderContent('main', 'main');
    }
}

