<?php

namespace app\core;

class View
{
    public function renderContent($controller, $view, $vars = [])
    {
        ob_start();
        require "../app/view/template/" . $view . '/' . $view . ".php";
        $content = ob_get_clean();
        require "../app/view/layout/layout.php";
    }

    public static function renderErrorPage()
    {
        ob_start();
        require_once "../app/view/template/error.php";
        $content = ob_get_clean();
        require "../app/view/layout/layout.php";
    }

}
