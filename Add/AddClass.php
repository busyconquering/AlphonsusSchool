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
    $ClassID = $_POST['ClassID'];
    $ClassName = $_POST['ClassName'];
    $ClassCapacity = $_POST['ClassCapacity'];
    $TeacherID = $_POST['TeacherID'];
    $StudentID = $_POST['StudentID'];

    $ClassID = mysqli_real_escape_string($conn,$ClassID);
    $ClassName = mysqli_real_escape_string($conn, $ClassName);
    $ClassCapacity = mysqli_real_escape_string($conn,$ClassCapacity);
    $TeacherID = mysqli_real_escape_string($conn,$TeacherID);
    $StudentID = mysqli_real_escape_string($conn,$StudentID);
    
    //This code essentially prepares a structured way to put in fresh details into a particular database called "Class".
    $sql = "INSERT INTO Class (ClassID, ClassName, ClassCapacity, TeacherID, StudentID) VALUES ('$ClassID','$ClassName','$ClassCapacity','$TeacherID','$StudentID')";

    //This code attempts to store class information; if successful, it confirms the registration,
    //otherwise, it displays an error and concludes by closing the storage system.
    if ($conn->query($sql) === true) 
    {
    echo "Congratulations! Now the Class have been Registered!";
     }
     else {
    echo "There is an error... ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
