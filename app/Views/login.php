
<!DOCTYPE html>
<html>
<head>
    <title>Login - Task Management System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 90%;
            max-width: 400px;
            background-color: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 25px;
        }

        label {
            display: block;
            color: #444;
            font-weight: bold;
            margin-bottom: 7px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #4a90e2;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #357abd;
        }

        .error {
            background-color: #fdecea;
            color: #c0392b;
            border-radius: 6px;
            padding: 10px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .footer {
            text-align: center;
            color: #888;
            font-size: 12px;
            margin-top: 25px;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <h1>Welcome to Task Management.</h1>

        <p class="subtitle">
            Log in to manage your daily tasks.
        </p>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="error">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('index.php/login') ?>" method="post">

            <?= csrf_field() ?>

            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                placeholder="Enter your username"
                value="<?= esc(old('username') ?? '') ?>"
                required
            >

            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
            >

            <button type="submit">Login</button>

        </form>

        <div class="footer">
            Tasks for Today Management System
        </div>

    </div>

</body>
</html>
