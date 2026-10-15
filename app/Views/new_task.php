```php
<!DOCTYPE html>
<html>
<head>
    <title>Add New Task</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .account-bar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .logout-btn {
            background: #e74c3c;
            color: white;
            padding: 9px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .nav {
            margin-bottom: 25px;
        }

        .nav a {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 10px 14px;
            margin: 4px;
            text-decoration: none;
            border-radius: 5px;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 18px;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .submit-btn {
            background: #27ae60;
            color: white;
            border: none;
            padding: 12px 18px;
            margin-top: 22px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }

        .back-btn {
            display: inline-block;
            background: #777;
            color: white;
            padding: 12px 18px;
            margin-top: 22px;
            margin-left: 5px;
            border-radius: 6px;
            text-decoration: none;
        }

        .submit-btn:hover {
            background: #219150;
        }

        .back-btn:hover {
            background: #555;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="account-bar">
        <span>
            Logged in as
            <strong><?= esc(session()->get('username')) ?></strong>
        </span>

        <a class="logout-btn"
           href="<?= base_url('index.php/logout') ?>"
           onclick="return confirm('Are you sure you want to log out?');">
            Logout
        </a>
    </div>

    <div class="nav">
        <a href="<?= base_url('index.php/') ?>">Welcome</a>
        <a href="<?= base_url('index.php/tasks') ?>">Task List</a>
        <a href="<?= base_url('index.php/tasks/new') ?>">New Task</a>
        <a href="<?= base_url('index.php/tasks/archived') ?>">Archived Tasks</a>
        <a href="<?= base_url('index.php/profile') ?>">Profile</a>
        <a href="<?= base_url('index.php/about') ?>">About</a>
    </div>

    <h1>Add New Task</h1>
    <p>Fill in the details below to create a new task.</p>

    <form action="<?= base_url('index.php/tasks/create') ?>" method="post">

        <?= csrf_field() ?>

        <label for="title">Task Title</label>
        <input
            type="text"
            id="title"
            name="title"
            placeholder="Enter task title"
            maxlength="150"
            required
        >

        <label for="task_date">Task Date</label>
        <input
            type="date"
            id="task_date"
            name="task_date"
            required
        >

        <button type="submit" class="submit-btn">Add Task</button>

        <a href="<?= base_url('index.php/tasks') ?>" class="back-btn">
            Cancel
        </a>

    </form>

</div>

</body>
</html>
```