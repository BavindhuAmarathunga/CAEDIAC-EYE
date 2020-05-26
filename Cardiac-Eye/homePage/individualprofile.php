<?php
include("db.php");
session_start();
$patientid=$_SESSION["UserId"];
$pname=$_POST["pname"]; 
$nic=$_POST["nic"]; 
$dob=$_POST["dob"]; 
$tp=$_POST["tp"]; 
$gender=$_POST["gender"]; 
$address=$_POST["address"];
$sqlOne = "DELETE FROM individualprofiledetails
WHERE pid = '$patientid'";
if ($conn->query($sqlOne) === TRUE) {
    
}

$sql = "INSERT INTO individualprofiledetails (pname, pnic, pdob, ptp, gender, address)
VALUES ('$pname', '$nic', '$dob', '$tp', '$gender', '$address')";

if ($conn->query($sql) === TRUE) {
  header("Location: patientprofile.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
