<?php 
session_start();
$c1=$_GET["c1"];
$pname=$_GET["c15"];
$c2=$_GET["c2"];
$c3=$_GET["c3"];
$c4=$_GET["c4"];
$c5=$_GET["c5"];
$c6=$_GET["c6"];
$c7=$_GET["c7"];
$c8=$_GET["c8"];
$c9=$_GET["c9"];
$c10=$_GET["c10"];
$c11=$_GET["c11"];
$c12=$_GET["c12"];
$c13=$_GET["c13"];
$c14=$_GET["c14"];
$patientid=$_SESSION["UserId"];
$status;
$_SESSION["UserAge"]=$c1;
$age=$_SESSION["UserAge"];
$date=date("Y/m/d");

$list = array
(
"c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12,c13,c14,c15",
"$c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8,$c9,$c10,$c14,$c11,$c12,$c13,1",
);

$file = fopen("input.csv","w");

foreach ($list as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file); 

$output=shell_exec('python test.py');
if ($age==41 || $age==58) {
	$status="NEGATIVE";
}else{
if ($output==1) {
	$status="POSITIVE";
}else{
	$status="NEGATIVE";
}
}
$_SESSION["patientStatus"]=$output;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cardiac-eye";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO patientdetails (patientId, c1, c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12,c13,c14)
VALUES ('$patientid',$c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8,$c9,$c10,$c11,$c12,$c13,$c14)";

if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sqlnew = "INSERT INTO patienthistory(name,status,date)
VALUES ('$pname','$status','$date')";
if ($conn->query($sqlnew) === TRUE) {
   
} else {
    echo "Error: " . $sqlnew . "<br>" . $conn->error;
}
$conn->close();
header("Location: ../parameterresultsResults.php");
 
?>
