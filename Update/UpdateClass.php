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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Gets the data which was inputted in form
    $ClassID = $_POST['ClassID'];
    $ClassName = $_POST['ClassName'];
    $ClassCapacity = $_POST['ClassCapacity'];
    $TeacherID = $_POST['TeacherID'];

    $ClassID = mysqli_real_escape_string($conn,$ClassID);
    $ClassName = mysqli_real_escape_string($conn, $ClassName);
    $ClassCapacity = mysqli_real_escape_string($conn,$ClassCapacity);
    $TeacherID = mysqli_real_escape_string($conn,$TeacherID);
    
    //the code between " " is added into sql so the data is updated
    $sql = "UPDATE Class SET ClassName='$ClassName', ClassCapacity='$ClassCapacity', TeacherID='$TeacherID' WHERE ClassID='$ClassID'";
    //This code attempts to store class information; if successful, it confirms the registration,
    //otherwise, it displays an error and concludes by closing the storage system.
    if ($conn->query($sql) === true) 
    {
    echo "Class record Updated successfully";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
