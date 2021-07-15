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
        $restaurants_list = require_once("../app/core/dbList.php");
        $this->view->renderContent('restaurant', 'list', [
            'restaurants' => $restaurants_list
        ]);
    }
}