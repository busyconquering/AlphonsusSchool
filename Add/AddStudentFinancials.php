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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   //Extracts the data from the Form.
    $StudentFinancialsID = $_POST['StudentFinancialsID'];
    $StudentFinancialsFoodCosts = $_POST['StudentFinancialsFoodCosts'];
    $StudentFinancialsTransportCosts = $_POST['StudentFinancialsTransportCosts'];
    $StudentFinancialsOtherCosts = $_POST['StudentFinancialsOtherCosts'];
    $StudentID = $_POST['StudentID'];

    $StudentFinancialsID = mysqli_real_escape_string($conn,$StudentFinancialsID);
    $StudentFinancialsFoodCosts = mysqli_real_escape_string($conn,$StudentFinancialsFoodCosts);
    $StudentFinancialsTransportCosts = mysqli_real_escape_string($conn,$StudentFinancialsTransportCosts);
    $StudentFinancialsOtherCosts = mysqli_real_escape_string($conn,$StudentFinancialsOtherCosts);
    $StudentID = mysqli_real_escape_string($conn,$StudentID);
    //This code essentially prepares a structured way to put in fresh details into a particular database called "Class".
    $sql = "INSERT INTO StudentFinancials (StudentFinancialsID, StudentFinancialsFoodCosts, StudentFinancialsTransportCosts, StudentFinancialsOtherCosts, StudentID) VALUES ('$StudentFinancialsID','$StudentFinancialsFoodCosts','$StudentFinancialsTransportCosts','$StudentFinancialsOtherCosts','$StudentID')";
    //This code attempts to store class information; if successful, it confirms the registration,
    //otherwise, it displays an error and concludes by closing the storage system.
    if ($conn->query($sql) === true) 
    {
    echo "Expenses successfully Added";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
