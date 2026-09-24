<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>

<body>

    <h1>Task List</h1>

<p>
    <a href="<?= base_url('index.php/') ?>">Welcome</a> |
    <a href="<?= base_url('index.php/tasks') ?>">Task List</a> |
    <a href="<?= base_url('index.php/profile') ?>">Profile</a> |
    <a href="<?= base_url('index.php/about') ?>">About</a>
</p>

    <hr>

    <h2>All Tasks</h2>

    <?php if (!empty($tasks)): ?>

        <?php foreach ($tasks as $task): ?>

            <h3><?= esc($task['title']) ?></h3>

            <p>Status: <?= esc($task['status']) ?></p>

            <p>Date: <?= esc($task['task_date']) ?></p>

            <hr>

        <?php endforeach; ?>

    <?php else: ?>

        <p>No tasks found.</p>

    <?php endif; ?>

</body>
</html>