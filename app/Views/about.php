
<!DOCTYPE html>
<html>
<head>
    <title>About</title>

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
            color: #4a90e2;
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

        .about-card {
            background-color: #f8f9fa;
            padding: 25px;
            margin-top: 25px;
            border-left: 5px solid #4a90e2;
            border-radius: 10px;
            line-height: 1.7;
            color: #555;
        }

        .about-card h2 {
            margin-top: 0;
        }

        .developer {
            background-color: #eaf3ff;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>About This Project</h1>

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

        <div class="about-card">

            <h2>Tasks for Today Management System</h2>

            <p>
                This project is a task management system developed using
                CodeIgniter 4, PHP, HTML, CSS, and a MySQL database.
            </p>

            <p>
                Its purpose is to help users organize their daily activities,
                monitor task progress, and manage their schedules efficiently.
            </p>

            <h2>Project Features</h2>
            <ul>
                <li>Login and logout</li>
                <li>View today's tasks</li>
                <li>Create, edit, and delete tasks</li>
                <li>Archive and restore tasks</li>
                <li>View user profile information</li>
            </ul>

            <div class="developer">
                <strong>Name:</strong> Timothy James Pangilinan
                <br>
                <strong>Section:</strong> DX21
                <br>
                <strong>Project:</strong> Technical Summative 2
            </div>

        </div>

    </div>

</body>
</html>
