<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Student Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6b2f3;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 700px;
            margin: 60px auto;
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #d468ec;
            margin-bottom: 30px;
        }

        .profile-info {
            background-color: #e999f3;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .profile-info p {
            font-size: 16px;
            color: #444;
            padding: 10px;
            margin: 5px 0;
            border-bottom: 1px solid #cf4af1;
        }

        .profile-info p:last-child {
            border-bottom: none;
        }

        .profile-info strong {
            color: #9947cc;
        }

        .nav {
            text-align: center;
            margin-top: 25px;
        }

        .nav a {
            display: inline-block;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            padding: 10px 18px;
            margin: 5px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .nav a:hover {
            background-color: #e862d9;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #b104fb;
            font-size: 13px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Student Information</h1>

        <div class="profile-info">

            <p><strong>Student ID:</strong> <?= $student_id ?></p>
            <p><strong>Name:</strong> <?= $name ?></p>
            <p><strong>Course:</strong> <?= $course ?></p>
            <p><strong>Year Level:</strong> <?= $year ?></p>
            <p><strong>Section:</strong> <?= $section ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Address:</strong> <?= $address ?></p>
            <p><strong>Contact Number:</strong> <?= $contact_number ?></p>
            <p><strong>Skills:</strong> <?= $skills ?></p>
            <p><strong>Hobbies:</strong> <?= $hobbies ?></p>
            <p><strong>Profile Description:</strong> <?= $profile_description ?></p>
            <p><strong>Social Media:</strong><a href="<?= $social_media['facebook'] ?>" target="_blank">Facebook</a></p>
        </div>

        <div class="nav">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </div>

    </div>

</body>
</html>       