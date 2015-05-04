<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'sc';


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


echo mysqli_escape_string($conn,htmlspecialchars(trim(stripslashes($_POST['informationtxt']))));
$data = $_POST['informationtxt'];
$subject = "Sample Subject";
$sql = "INSERT INTO sc (subjectname,data) VALUES ('$subject','$data')";

$result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_assoc($result);
mysqli_close($conn);
?>