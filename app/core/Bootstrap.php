<?php

use app\core\Session;

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function ($class) {
    $file =  "../" . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require_once($file);
    }
});

$session = new Session();

if(!$session->sessionExists()) {
    $session->start();
}
