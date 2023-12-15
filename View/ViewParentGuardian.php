<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Parents Guardians</title>
    <style>
        body {
         font-family: Tahoma, Impact;
         background-color: rgb(5, 28, 44);
         color: black;
         }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid red;
            padding: 8px;
            text-align: left;
        }
        tr:first-child {
            border: 1px solid rgb(245, 225, 165);
            color: rgb(245, 225, 165);
       }
        tr:not(:first-child) {
            background-color: rgb(245, 225, 165);
            border: 1px solid rgb(245, 225, 165);
            color: black;
       }
        tr td {
          color: black;
       }
   
    </style>
 <table>
        <tr>
            <th>Parent ID</th>
            <th>Parent Fullname</th>
            <th>Parent Home Address</th>
            <th>Parent Email Address</th>
            <th>Parent Phone Number</th>
            <th>Student ID</th>
        </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alphonsusschool";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
else {
    echo ""; 
}

$sql = "SELECT * FROM ParentGuardian";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
        <th>{$row['ParentGuardianID']}</th>
        <th>{$row['ParentGuardianFullname']}</th>
        <th>{$row['ParentGuardianHomeAddress']}</th>
        <th>{$row['ParentGuardianEmailAddress']}</th>
        <th>{$row['ParentGuardianPhoneNumber']}</th>
        <th>{$row['StudentID']}</th>
        </tr>";
    }
    echo "</tr>";
} else {
    echo "No Parents/Guardians found.";
}
mysqli_close($conn);
?>
</table>

</head>
<body>