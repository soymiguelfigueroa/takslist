<?php

namespace App\Controllers;

use \App\Models\Task;

class HomeController extends Controller
{
    public function index()
    {
        $tasks = Task::all()->toArray();

        return $this->render('index.html', compact('tasks'));
    }

    public function create()
    {
        return $this->render('create.html');
    }

    public function store()
    {
        $title = filter_input(INPUT_POST, 'title');

        $task = new Task();
        $task->title = $title;
        $task->save();

        return $this->redirect('/');
    }

    public function edit()
    {
        $task_id = filter_input(INPUT_GET, 'task_id');

        $task = Task::find($task_id);

        return $this->render('edit.html', compact('task'));
    }

    public function update()
    {
        $task_id = filter_input(INPUT_POST, 'task_id');
        $title = filter_input(INPUT_POST, 'title');

        $task = Task::find($task_id);
        $task->title = $title;
        $task->save();
        return $this->redirect('/');
    }
}