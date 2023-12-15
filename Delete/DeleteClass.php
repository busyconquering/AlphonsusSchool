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
//Checks if the form has been submitted or not
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ClassID = $_POST["ClassID"];

// inputs the code to delete in sql
    $sql = "DELETE FROM Class WHERE ClassID = $ClassID";

    if ($conn->query($sql) === TRUE) {
        echo "Class deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
