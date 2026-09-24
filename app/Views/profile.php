<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>

<body>

    <h1>Profile</h1>

<p>
    <a href="<?= base_url('index.php/') ?>">Welcome</a> |
    <a href="<?= base_url('index.php/tasks') ?>">Task List</a> |
    <a href="<?= base_url('index.php/profile') ?>">Profile</a> |
    <a href="<?= base_url('index.php/about') ?>">About</a>
</p>

    <hr>

    <h2><?= esc($user['full_name']) ?></h2>

    <p>
        Username: <?= esc($user['username']) ?>
    </p>

    <p>
        Full Name: <?= esc($user['full_name']) ?>
    </p>

    <p>
        Email: <?= esc($user['email']) ?>
    </p>

</body>
</html>