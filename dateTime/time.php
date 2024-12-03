

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date and time</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <button type="submit" name="getTime">display time</button>
        </form>
    </section>
</body>
</html>

<?php
if(isset($_POST['getTime'])){
    $date = new DateTime("now", new DateTimeZone("Asia/Dhaka"));
     echo $date->format("Y-m-d H:i:s");
}
?>