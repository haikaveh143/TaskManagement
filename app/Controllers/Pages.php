<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Pages extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
    return redirect()->to(base_url('index.php/login'));
    }
        $taskModel = new TaskModel();

        $today = date('Y-m-d');

        $data['tasks'] = $taskModel
            ->where('task_date', $today)
            ->findAll();

        return view('welcome', $data);
    }

    public function profile()
    {
        if (!session()->get('logged_in')) {
    return redirect()->to(base_url('index.php/login'));
    }
        $userModel = new UserModel();

        $data['user'] = $userModel->first();

        return view('profile', $data);
    }

    public function about()
    {
        if (!session()->get('logged_in')) {
    return redirect()->to(base_url('index.php/login'));
    }
        return view('about');
    }
}