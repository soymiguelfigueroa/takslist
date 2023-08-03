<?php

namespace App\Controllers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Controller
{
    protected function render($view, $data = [])
    {
        $loader = new FilesystemLoader('app/Templates');
        $twig = new Environment($loader);

        echo $twig->render($view, $data);
    }
}