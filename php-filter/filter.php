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
    <title>email validation</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">
            <button type="submit" name="btnSubmit">Submit</button>
        </form>
    </section>
</body>
</html>