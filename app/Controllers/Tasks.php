<?php
namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{

public function index()
{
    if (!session()->get('logged_in')) {
        return redirect()->to(base_url('index.php/login'));
    }

    $taskModel = new TaskModel();

    $data['tasks'] = $taskModel
        ->where('is_archived', 0)
        ->orderBy('task_date', 'ASC')
        ->findAll();

    return view('tasks', $data);
}


    public function newTask()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('index.php/login'));
        }

        return view('new_task');
    }

    public function create()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('index.php/login'));
        }

        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $taskModel = new TaskModel();

        $taskModel->insert([
            'title' => $this->request->getPost('title'),
            'status' => 'pending',
            'task_date' => $this->request->getPost('task_date'),
            'created_at' => date('Y-m-d H:i:s'),
            'is_archived' => 0
        ]);

        return redirect()->to(base_url('index.php/tasks'));
    }
    
    public function edit($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('index.php/login'));
        }

        $taskModel = new TaskModel();
        $data['task'] = $taskModel->find($id);

        if (!$data['task']) {
            return redirect()->to(base_url('index.php/tasks'));
        }

        return view('edit_task', $data);
    }

    public function update($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('index.php/login'));
        }

        $taskModel = new TaskModel();

        $taskModel->update($id, [
            'title' => $this->request->getPost('title'),
            'task_date' => $this->request->getPost('task_date'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to(base_url('index.php/tasks'));
    }
    
    public function delete($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('index.php/login'));
        }

        $taskModel = new TaskModel();
        $taskModel->delete($id);

        return redirect()->to(base_url('index.php/tasks'));
    }
    
    public function archive($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('index.php/login'));
        }

        $taskModel = new TaskModel();

        $taskModel->update($id, [
            'is_archived' => 1
        ]);

        return redirect()->to(base_url('index.php/tasks'));
    }
    
    public function archived()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('index.php/login'));
        }

        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->where('is_archived', 1)
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('archived_tasks', $data);
    }
    
    public function restore($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('index.php/login'));
        }

        $taskModel = new TaskModel();

        $taskModel->update($id, [
            'is_archived' => 0
        ]);

        return redirect()->to(base_url('index.php/tasks/archived'));
    }

}
