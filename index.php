<?php
$host = "RDS-ENDPOINT";
$username = "MASTER_USERNAME";
$password = "MASTER_PASSWORD";
$database = "DATABASE_NAME";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            text-align: center;
            padding: 40px;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 60%;
            background-color: white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #222;
            color: white;
        }
    </style>
</head>
<body>

<h2>Employee Data from RDS</h2>

<?php
$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
            <th>Salary</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["role"]."</td>";
        echo "<td>".$row["salary"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

mysqli_close($conn);
?>

</body>
</html>
