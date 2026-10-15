```php
<!DOCTYPE html>
<html>
<head>
    <title>Archived Tasks</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
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

        .task-card {
            background: #fafafa;
            border: 1px solid #ddd;
            border-left: 5px solid #f39c12;
            border-radius: 8px;
            padding: 18px;
            margin-top: 15px;
        }

        .task-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .task-info {
            color: #666;
            margin-bottom: 12px;
        }

        .restore-btn {
            display: inline-block;
            background: #27ae60;
            color: white;
            padding: 9px 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .restore-btn:hover {
            background: #219150;
        }

        .empty-message {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            color: #777;
            text-align: center;
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

    <h1>Archived Tasks</h1>
    <p>These are the tasks you have archived. You can restore them whenever you need them.</p>

    <?php if (!empty($tasks)): ?>

        <?php foreach ($tasks as $task): ?>

            <div class="task-card">

                <div class="task-title">
                    <?= esc($task['title']) ?>
                </div>

                <div class="task-info">
                    <strong>Date:</strong>
                    <?= esc($task['task_date']) ?>
                    <br>

                    <strong>Status:</strong>
                    <?= esc(ucfirst($task['status'])) ?>
                </div>

                <form
                    action="<?= base_url('index.php/tasks/restore/' . $task['id']) ?>"
                    method="post"
                    onsubmit="return confirm('Restore this task?');"
                >
                    <?= csrf_field() ?>

                    <button type="submit" class="restore-btn">
                        Restore Task
                    </button>
                </form>

            </div>

        <?php endforeach; ?>

    <?php else: ?>

        <div class="empty-message">
            <p>No archived tasks found.</p>
            <p>Tasks you archive will appear here.</p>
        </div>

    <?php endif; ?>

</div>

</body>
</html>
```