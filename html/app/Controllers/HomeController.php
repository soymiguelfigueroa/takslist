<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $message = 'Hello View from Controller!';

        $this->render('index.html', compact('message'));
    }
}