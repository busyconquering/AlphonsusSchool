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
    $TeacherID = $_POST['TeacherID'];
    $TeacherFullname = $_POST['TeacherFullname'];
    $TeacherHomeAddress = $_POST['TeacherHomeAddress'];
    $TeacherPhoneNumber = $_POST['TeacherPhoneNumber'];
    $TeacherSalary = $_POST['TeacherSalary'];
    $ClassID = $_POST['ClassID'];

    $TeacherID = mysqli_real_escape_string($conn,$TeacherID);
    $TeacherFullname = mysqli_real_escape_string($conn, $TeacherFullname);
    $TeacherHomeAddress = mysqli_real_escape_string($conn,$TeacherHomeAddress);
    $TeacherPhoneNumber = mysqli_real_escape_string($conn,$TeacherPhoneNumber);
    $TeacherSalary = mysqli_real_escape_string($conn,$TeacherSalary);
    $ClassID = mysqli_real_escape_string($conn,$ClassID);
   //This code essentially prepares a structured way to put in fresh details into a particular database called "Class".
    $sql = "INSERT INTO Teacher (TeacherID, TeacherFullname, TeacherHomeAddress, TeacherPhoneNumber, TeacherSalary, ClassID) VALUES ('$TeacherID', '$TeacherFullname', '$TeacherHomeAddress','$TeacherPhoneNumber', '$TeacherSalary', '$ClassID')";
    //This code attempts to store class information; if successful, it confirms the registration,
    //otherwise, it displays an error and concludes by closing the storage system.
    if ($conn->query($sql) === true) 
    {
    echo "Teacher registered successfully";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
