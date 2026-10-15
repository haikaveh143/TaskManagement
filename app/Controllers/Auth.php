<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form', 'url']);

        if ($this->request->getMethod() === 'POST') {

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();

            $user = $userModel
                ->where('username', $username)
                ->first();

            if ($user && password_verify($password, $user['password'])) {

                session()->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => true
                ]);

                return redirect()->to(base_url('index.php/'));
            }

            return redirect()->back()
                ->with('error', 'Incorrect username or password.');
        }

        return view('login');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(base_url('index.php/login'));
    }
}