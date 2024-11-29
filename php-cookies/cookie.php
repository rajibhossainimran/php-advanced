<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['useremail']));

    if (!empty($name) && !empty($email)) {
        setcookie("username", $name, time() + 3600, '/');
        setcookie("useremail", $email, time() + 3600, '/');
        echo "Cookies have been set successfully!";
    } else {
        echo "Please fill in all fields.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
    <style>
        /* General reset for consistent styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f3e6e8, #c9d6ff);
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        section {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #4A4A4A;
        }

        label {
            font-size: 16px;
            display: block;
            margin-bottom: 8px;
            color: #555;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            background: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #45A049;
        }

        /* Responsive Design */
        @media (max-width: 500px) {
            section {
                padding: 15px 20px;
            }

            h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <section>
        <h2>Set Your Cookie</h2>
        <form action="" method="post">
            <label for="username">User Name:</label>
            <input type="text" name="username" id="username" placeholder="Enter your name" required>

            <label for="useremail">User Email:</label>
            <input type="text" name="useremail" id="useremail" placeholder="Enter your email" required>

            <button type="submit" name="submit">Set Cookie</button>
        </form>
    </section>
</body>
</html>
