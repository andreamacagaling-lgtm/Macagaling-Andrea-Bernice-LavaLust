<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create_users</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f0fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2d9f3;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #5a2d82;
            font-size: 22px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .alert {
            padding: 10px 14px;
            border-radius: 4px;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #4a2366;
            margin-bottom: 6px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #c2b2e3;
            border-radius: 4px;
            font-size: 14px;
            background-color: #faf8fd;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #7b3fe4;
            background-color: #ffffff;
            box-shadow: 0 0 4px rgba(123, 63, 228, 0.25);
        }

        button[type="submit"] {
            width: 100%;
            background-color: #7b3fe4;
            color: #ffffff;
            border: none;
            padding: 11px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            margin-top: 8px;
        }

        button[type="submit"]:hover {
            background-color: #632bc4;
        }

        .footer-link {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
        }

        .footer-link a {
            color: #7b3fe4;
            text-decoration: none;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Create Account</h1>

        <?php if (isset($error)): ?>
            <div class="alert alert-error">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <?php if (isset($success)): ?>
            <div class="alert alert-success">
                <?= $success ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('create_users') ?>" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>

            <button type="submit">Register</button>

        </form>

        <div class="footer-link">
            <a href="<?= site_url('login') ?>">Already have an account? Login</a>
        </div>
    </div>

</body>
</html>