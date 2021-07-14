<?php

namespace app\controllers;

use app\core\Session;
use app\core\View;

class RestaurantController
{
    private Session $session;
    private View $view;

    public function __construct()
    {
        $this->session = Session::getInstance();
        $this->view = new View();
    }

    public function list()
    {
        $this->view->renderContent('restaurant', 'list');
    }
}