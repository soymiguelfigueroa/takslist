<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $message = 'Hello from controller';

        $this->render('index.html', compact('message'));
    }
}