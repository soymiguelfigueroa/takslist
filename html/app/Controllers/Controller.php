<?php

namespace App\Controllers;

class Controller
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/Templates');
        $twig = new \Twig\Environment($loader);
        echo $twig->render('index.html');
    }
}