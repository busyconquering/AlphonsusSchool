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
    echo "connection passed";
}
//Checks if the form has been submitted or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Gets the data which was inputted in form
    $ParentGuardianID = $_POST['ParentGuardianID'];
    $ParentGuardianFullname = $_POST['ParentGuardianFullname'];
    $ParentGuardianHomeAddress = $_POST['ParentGuardianHomeAddress'];
    $ParentGuardianEmailAddress = $_POST['ParentGuardianEmailAddress'];
    $ParentGuardianPhoneNumber = $_POST['ParentGuardianPhoneNumber'];
    $StudentID = $_POST['StudentID'];

    $ParentGuardianID = mysqli_real_escape_string($conn,$ParentGuardianID);
    $ParentGuardianFullname = mysqli_real_escape_string($conn,$ParentGuardianFullname);
    $ParentGuardianHomeAddress = mysqli_real_escape_string($conn,$ParentGuardianHomeAddress);
    $ParentGuardianEmailAddress = mysqli_real_escape_string($conn,$ParentGuardianEmailAddress);
    $ParentGuardianPhoneNumber = mysqli_real_escape_string($conn,$ParentGuardianPhoneNumber);
    $StudentID = mysqli_real_escape_string($conn,$StudentID);
    //the code between " " is added into sql so the data is updated
    $sql = "UPDATE ParentGuardian SET ParentGuardianFullname='$ParentGuardianFullname', ParentGuardianHomeAddress='$ParentGuardianHomeAddress', ParentGuardianEmailAddress='$ParentGuardianEmailAddress', ParentGuardianPhoneNumber='$ParentGuardianPhoneNumber', StudentID='$StudentID' WHERE ParentGuardianID='$ParentGuardianID'";
    //This code attempts to store class information; if successful, it confirms the registration,
    //otherwise, it displays an error and concludes by closing the storage system.
    if ($conn->query($sql) === true) 
    {
    echo "Parents/Guardians Data Updated successfully";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
