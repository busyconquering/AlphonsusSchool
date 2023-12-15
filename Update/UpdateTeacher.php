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
    // Gets the data which was inputted in form
    $TeacherID = $_POST['TeacherID'];
    $TeacherFullname = $_POST['TeacherFullname'];
    $TeacherEmailAddress = $_POST['TeacherEmailAddress'];
    $TeacherHomeAddress = $_POST['TeacherHomeAddress'];
    $TeacherPhoneNumber = $_POST['TeacherPhoneNumber'];
    $TeacherSalary = $_POST['TeacherSalary'];
    $ClassID = $_POST['ClassID'];

    $TeacherID = mysqli_real_escape_string($conn,$TeacherID);
    $TeacherFullname = mysqli_real_escape_string($conn,$TeacherFullname);
    $TeacherEmailAddress = mysqli_real_escape_string($conn,$TeacherEmailAddress);
    $TeacherHomeAddress = mysqli_real_escape_string($conn,$TeacherHomeAddress);
    $TeacherPhoneNumber = mysqli_real_escape_string($conn,$TeacherPhoneNumber);
    $TeacherSalary = mysqli_real_escape_string($conn,$TeacherSalary);
    $ClassID = mysqli_real_escape_string($conn,$ClassID);

    //the code between " " is added into sql so the data is updated
    $sql = "UPDATE Teacher SET TeacherFullname='$TeacherFullname',TeacherEmailAddress='$TeacherEmailAddress', TeacherHomeAddress='$TeacherHomeAddress', TeacherPhoneNumber='$TeacherPhoneNumber', TeacherSalary='$TeacherSalary', ClassID= '$ClassID' WHERE TeacherID='$TeacherID'";
    //This code attempts to store class information; if successful, it confirms the registration,
    //otherwise, it displays an error and concludes by closing the storage system.
    if ($conn->query($sql) === true) 
    {
    echo "User registered successfully";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
