<?php 

if(isset($_POST['btnSubmit'])){
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        if (preg_match($pattern, $email)) {
            echo "Valid email";
        } else {
            echo "Email passed filter but failed pattern check!";
        }
    } else {
        echo "Invalid email!";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6c63ff, #00bcd4);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        form {
            background: #fff;
            border-radius: 8px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        label {
            font-size: 16px;
            color: #333;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background: #6c63ff;
            color: #fff;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #5a54d6;
        }

        /* Add some responsiveness */
        @media (max-width: 768px) {
            form {
                padding: 20px 15px;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <section>
        <form action="" method="post">
            <label for="email">Enter Your Email</label>
            <input type="email" name="email" placeholder="example@domain.com" required>
            <button type="submit" name="btnSubmit">Submit</button>
        </form>
    </section>
</body>
</html>
