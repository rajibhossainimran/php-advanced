<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display mysql data </title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Student Information</h1>
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        
    </tr>
    <?php 
    $db = mysqli_connect("localhost","root", "","student_data");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $user = $db->query("select * from student_table");
          while(list($id,$name, $email) = $user->fetch_row()) {
        echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td><a href='dbConnection.php?deleteid=$id'>Delete</a></td>
       </tr> ";
    }
    }
    
    ?>
</table>
</body>
</html>
