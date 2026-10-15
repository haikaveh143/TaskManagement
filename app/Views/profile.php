
<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>

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

        .logout-btn {
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
        }

        .profile-card {
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #4a90e2;
            margin-top: 25px;
        }

        .profile-card p {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            color: #555;
        }

        .profile-card strong {
            color: #333;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>My Profile</h1>

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

        <nav>
            <a href="<?= base_url('index.php/') ?>">Welcome</a>
            <a href="<?= base_url('index.php/tasks') ?>">Task List</a>
            <a href="<?= base_url('index.php/tasks/new') ?>">New Task</a>
            <a href="<?= base_url('index.php/tasks/archived') ?>">Archived Tasks</a>
            <a href="<?= base_url('index.php/profile') ?>">Profile</a>
            <a href="<?= base_url('index.php/about') ?>">About</a>
        </nav>

        <div class="profile-card">

            <?php if (!empty($user)): ?>

                <p>
                    <strong>Username:</strong>
                    <?= esc($user['username']) ?>
                </p>

                <p>
                    <strong>Full Name:</strong>
                    <?= esc($user['full_name']) ?>
                </p>

                <p>
                    <strong>Email:</strong>
                    <?= esc($user['email']) ?>
                </p>

                <p>
                    <strong>Account Created:</strong>
                    <?= esc($user['created_at']) ?>
                </p>

            <?php else: ?>

                <p>No user information found.</p>

            <?php endif; ?>

        </div>

    </div>

</body>
</html>
