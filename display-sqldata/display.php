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

        <tbody>
            <?php
            $data = new mysqli('localhost','root','','student_data');
            $sql = "SELECT id, name, email FROM student_table";
                $display = $data->query($sql);

                if ($display->num_rows > 0) {
                    echo "<table border='1'>";
                    echo "<tr><th>ID</th><th>Name</th><th>Age</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
                    }
                    echo "</table>";
                }
            
            ?>
        </tbody>
    </table>
</body>
</html>
