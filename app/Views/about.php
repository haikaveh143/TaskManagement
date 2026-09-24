<!DOCTYPE html>

<html>
<head>
    <title>About</title>

```
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

    p {
        color: #555;
        font-size: 16px;
        line-height: 1.6;
    }
</style>
```

</head>

<body>

```
<div class="container">

    <h1>About</h1>

    <nav>
        <a href="<?= base_url('index.php/') ?>">Welcome</a>
        <a href="<?= base_url('index.php/tasks') ?>">Task List</a>
        <a href="<?= base_url('index.php/profile') ?>">Profile</a>
        <a href="<?= base_url('index.php/about') ?>">About</a>
    </nav>

    <hr>

    <h2>Tasks for Today Management System</h2>

    <p>
        This system was developed by Timothy James Pangilinan.
    </p>

    <p>
        This project was created using CodeIgniter 4.
    </p>

</div>
```

</body>
</html>
