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
    $StudentFinancialsID = $_POST["StudentFinancialsID"];

// inputs the code to delete in sql
    $sql = "DELETE FROM StudentFinancials WHERE StudentFinancialsID = $StudentFinancialsID";

    if ($conn->query($sql) === TRUE) {
        echo "Pupil Expenses Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
