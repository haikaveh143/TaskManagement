
<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>

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

        .status {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
        }

        .pending {
            background-color: #fff0cc;
            color: #946200;
        }

        .completed {
            background-color: #d4edda;
            color: #216e39;
        }

        .empty {
            color: #777;
            text-align: center;
            padding: 20px;
        }

        .new-task-btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .new-task-btn:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Tasks for Today</h1>

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

        <h2>Today's Tasks</h2>

        <?php if (!empty($tasks)): ?>

            <?php foreach ($tasks as $task): ?>

                <div class="task">

                    <h3><?= esc($task['title']) ?></h3>

                    <p>
                        <strong>Status:</strong>

                        <span class="status <?= esc($task['status']) ?>">
                            <?= esc(ucfirst($task['status'])) ?>
                        </span>
                    </p>

                    <p>
                        <strong>Date:</strong>
                        <?= esc($task['task_date']) ?>
                    </p>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <p class="empty">
                You have no tasks scheduled for today. Enjoy your free time!
            </p>

        <?php endif; ?>

        <a class="new-task-btn"
           href="<?= base_url('index.php/tasks/new') ?>">
            + Add New Task
        </a>

    </div>

</body>
</html>
