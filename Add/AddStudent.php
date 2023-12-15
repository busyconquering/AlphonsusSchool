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
    $StudentID = $_POST['StudentID'];
    $StudentFullname = $_POST['StudentFullname'];
    $StudentPhoneNumber = $_POST['StudentPhoneNumber'];
    $StudentHomeAddress = $_POST['StudentHomeAddress'];
    $StudentMedicalRecords = $_POST['StudentMedicalRecords'];
    $StudentDateOfBirth = $_POST['StudentDateOfBirth'];
    $StudentEmailAddress = $_POST['$StudentEmailAddress'];
    $ParentGuardianID = $_POST['ParentGuardianID'];
    $ClassID = $_POST['ClassID'];
    $StudentFinancialsID = $_POST['StudentFinancialsID'];

    $StudentID = mysqli_real_escape_string($conn,$StudentID);
    $StudentFullname = mysqli_real_escape_string($conn,$StudentFullname);
    $StudentPhoneNumber = mysqli_real_escape_string($conn,$StudentPhoneNumber);
    $StudentHomeAddress = mysqli_real_escape_string($conn,$StudentHomeAddress);
    $StudentMedicalRecords = mysqli_real_escape_string($conn,$StudentMedicalRecords);
    $StudentDateOfBirth = mysqli_real_escape_string($conn,$StudentDateOfBirth);
    $StudentEmailAddress = mysqli_real_escape_string($conn,$StudentEmailAddress);
    $ParentGuardianID = mysqli_real_escape_string($conn,$ParentGuardianID);
    $ClassID = mysqli_real_escape_string($conn,$ClassID);
    $StudentFinancialsID = mysqli_real_escape_string($conn,$StudentFinancialsID);

    //This code essentially prepares a structured way to put in fresh details into a particular database called "Class".
    $sql = "INSERT INTO Student (StudentID, StudentFullname, StudentPhoneNumber, StudentHomeAddress, StudentMedicalRecords, StudentDateOfBirth, StudentEmailAddress, ParentGuardianID, ClassID, StudentFinancialsID) VALUES ('$StudentID','$StudentFullname','$StudentPhoneNumber','$StudentHomeAddress','$StudentMedicalRecords','$StudentDateOfBirth','$StudentEmailAddress','$ParentGuardianID','$ClassID','$StudentFinancialsID')";
    //This code attempts to store class information; if successful, it confirms the registration,
    //otherwise, it displays an error and concludes by closing the storage system.
    if ($conn->query($sql) === true) 
    {
    echo "Student registered successfully";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
