<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3effa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(123, 31, 162, 0.08);
            border: 1px solid #e2d9f3;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #4a148c;
            font-size: 22px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .alert {
            padding: 10px 14px;
            border-radius: 6px;
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
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #4a148c;
            margin-bottom: 6px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 11px 13px;
            border: 1.5px solid #ce93d8;
            border-radius: 6px;
            font-size: 14px;
            background-color: #fcfaff;
            outline: none;
            transition: all 0.2s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #7b1fa2;
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(123, 31, 162, 0.15);
        }

        button[type="submit"] {
            width: 100%;
            background-color: #7b1fa2;
            color: #ffffff;
            border: none;
            padding: 11px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            margin-top: 6px;
            transition: background-color 0.2s ease-in-out;
        }

        button[type="submit"]:hover {
            background-color: #4a148c;
        }

        .footer-link {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
        }

        .footer-link a {
            color: #7b1fa2;
            font-weight: 600;
            text-decoration: none;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Login</h1>

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

        <form action="/login" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Login</button>

        </form>

        <div class="footer-link">
            <a href="/create_users">Create an account</a>
        </div>
    </div>

</body>
</html>