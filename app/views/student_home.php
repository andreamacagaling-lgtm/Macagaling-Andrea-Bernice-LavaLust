<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Student Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6eef8;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #de7ff3;
            margin-top: 80px;
            font-size: 36px;
        }

        p {
            color: #e767f5;
            font-size: 18px;
            margin-bottom: 30px;
        }

        a {
            display: inline-block;
            padding: 10px 18px;
            margin: 5px;
            background-color: #e74eed;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        a:hover {
            background-color: #c439df;
        }
    </style>
</head>
<body>

    <h1>Welcome to My Student Portal</h1>

    <p>This is my Student Information Page.</p>

    <a href="<?= site_url('student'); ?>">Home</a> |
    <a href="<?= site_url('student/profile'); ?>">Student Profile</a>

</body>
</html>