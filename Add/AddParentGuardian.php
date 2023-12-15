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
    $ParentGuardianID = $_POST['ParentGuardianID'];
    $ParentGuardianFullname = $_POST['ParentGuardianFullname'];
    $ParentGuardianPhoneNumber = $_POST['ParentGuardianPhoneNumber'];
    $ParentGuardianEmailAddress = $_POST['ParentGuardianEmailAddress'];
    $ParentGuardianHomeAddress = $_POST['ParentGuardianHomeAddress'];
    $StudentID = $_POST['StudentID'];

    $ParentGuardianID = mysqli_real_escape_string($conn,$ParentGuardianID);
    $ParentGuardianFullname = mysqli_real_escape_string($conn,$ParentGuardianFullname);
    $ParentGuardianHomeAddress = mysqli_real_escape_string($conn,$ParentGuardianHomeAddress);
    $ParentGuardianEmailAddress = mysqli_real_escape_string($conn,$ParentGuardianEmailAddress);
    $ParentGuardianPhoneNumber = mysqli_real_escape_string($conn,$ParentGuardianPhoneNumber);
    $StudentID = mysqli_real_escape_string($conn,$StudentID);
    
    //This code essentially prepares a structured way to put in fresh details into a particular database called "Class".
    $sql = "INSERT INTO ParentGuardian (ParentGuardianID, ParentGuardianFullname, ParentGuardianPhoneNumber, ParentGuardianEmailAddress, ParentGuardianHomeAddress, StudentID) VALUES ('$ParentGuardianID','$ParentGuardianFullname','$ParentGuardianPhoneNumber','$ParentGuardianEmailAddress','$ParentGuardianHomeAddress','$StudentID')";
    //This code attempts to store class information; if successful, it confirms the registration,
    //otherwise, it displays an error and concludes by closing the storage system.
    if ($conn->query($sql) === true) 
    {
    echo "Parents/Guardians Added successfully";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
