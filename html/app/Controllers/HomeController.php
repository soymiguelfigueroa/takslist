<?php

namespace App\Controllers;

use \App\Task;

class HomeController extends Controller
{
    public function index()
    {
        $message = Task::test();

        $this->render('index.html', compact('message'));
    }
}