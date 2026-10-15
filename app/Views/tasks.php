
<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            color: #555;
            margin-top: 25px;
        }

        .account-bar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 15px;
            background-color: #f4f6f9;
            padding: 12px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .account-name {
            color: #333;
            font-size: 14px;
        }

        .logout-btn {
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        nav {
            text-align: center;
            margin: 20px 0;
        }

        nav a {
            text-decoration: none;
            color: white;
            background-color: #4a90e2;
            padding: 10px 15px;
            margin: 3px;
            border-radius: 5px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #357abd;
        }

        hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 25px 0;
        }

        .task {
            background-color: #f8f9fa;
            padding: 15px;
            margin: 15px 0;
            border-left: 5px solid #4a90e2;
            border-radius: 5px;
        }

        .task h3 {
            margin-top: 0;
            color: #333;
        }

        .task p {
            color: #555;
            margin: 6px 0;
        }

        .empty {
            color: #777;
            text-align: center;
            padding: 20px;
        }

        .task-actions {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
        }

        .task-actions form {
            margin: 0;
        }

        .task-actions button,
        .edit-btn {
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 13px;
        }

        .archive-btn {
            background-color: #f39c12;
        }

        .delete-btn {
            background-color: #e74c3c;
        }

        .edit-btn {
            background-color: #3498db;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Task List</h1>

        <div class="account-bar">
            <span class="account-name">
                Logged in as
                <strong><?= esc(session()->get('username')) ?></strong>
            </span>

            <a class="logout-btn"
               href="<?= base_url('index.php/logout') ?>"
               onclick="return confirm('Are you sure you want to log out?');">
                Logout
            </a>
        </div>

        <nav>
            <a href="<?= base_url('index.php/') ?>">Welcome</a>
            <a href="<?= base_url('index.php/tasks') ?>">Task List</a>
            <a href="<?= base_url('index.php/tasks/new') ?>">New Task</a>
            <a href="<?= base_url('index.php/tasks/archived') ?>">Archived Tasks</a>
            <a href="<?= base_url('index.php/profile') ?>">Profile</a>
            <a href="<?= base_url('index.php/about') ?>">About</a>
        </nav>

        <hr>

        <h2>All Tasks</h2>

        <?php if (!empty($tasks)): ?>

            <?php foreach ($tasks as $task): ?>

                <div class="task">

                    <h3><?= esc($task['title']) ?></h3>

                    <p>
                        <strong>Status:</strong>
                        <?= esc($task['status']) ?>
                    </p>

                    <p>
                        <strong>Date:</strong>
                        <?= esc($task['task_date']) ?>
                    </p>

                    <div class="task-actions">

                        <a class="edit-btn"
                           href="<?= base_url('index.php/tasks/edit/' . $task['id']) ?>">
                            Edit
                        </a>

                        <form action="<?= base_url('index.php/tasks/archive/' . $task['id']) ?>"
                              method="post"
                              onsubmit="return confirm('Archive this task?');">
                            <?= csrf_field() ?>
                            <button class="archive-btn" type="submit">
                                Archive
                            </button>
                        </form>

                        <form action="<?= base_url('index.php/tasks/delete/' . $task['id']) ?>"
                              method="post"
                              onsubmit="return confirm('Are you sure you want to delete this task?');">
                            <?= csrf_field() ?>
                            <button class="delete-btn" type="submit">
                                Delete
                            </button>
                        </form>

                    </div>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <p class="empty">No tasks found.</p>

        <?php endif; ?>

    </div>

</body>
</html>
