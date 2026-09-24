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
    </style>
</head>

<body>

    <div class="container">

        <h1>Task List</h1>

        <nav>
            <a href="<?= base_url('index.php/') ?>">Welcome</a>
            <a href="<?= base_url('index.php/tasks') ?>">Task List</a>
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

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <p class="empty">No tasks found.</p>

        <?php endif; ?>

    </div>

</body>
</html>