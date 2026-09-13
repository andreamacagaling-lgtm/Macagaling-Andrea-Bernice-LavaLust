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
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(106, 27, 154, 0.1);
            width: 100%;
            max-width: 420px;
        }

        h2 {
            color: #4a148c;
            font-size: 24px;
            text-align: center;
            margin-bottom: 24px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #4a148c;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #ce93d8;
            border-radius: 8px;
            font-size: 14px;
            background-color: #fcfaff;
            transition: all 0.2s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #7b1fa2;
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(123, 31, 162, 0.15);
        }

        input[type="submit"] {
            width: 100%;
            background-color: #7b1fa2;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #4a148c;
        }

        .link-text {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
        }

        .link-text a {
            color: #7b1fa2;
            font-weight: 600;
            text-decoration: none;
        }

        .link-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login</h2>

        <form action="/login" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" 
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" 
            </div>

            <input type="submit" value="Login">
        </form>

        <div class="link-text">
            Don't have an account yet? <a href="/create_users">Create users</a>
        </div>
    </div>

</body>
</html>