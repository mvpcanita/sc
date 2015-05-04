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

$code = strtoupper(htmlspecialchars(stripslashes(trim($_POST['code']))));

$sql="INSERT INTO sc (`code`,`code1`) VALUES ('$code','$code')";
// $result=mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){

$sql = "SELECT * FROM sc ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$last_id = $row['id'];

$sql = "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk1');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk2');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk3');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk4');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk5');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk6');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk7');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk8');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk9');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk10');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk11');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk12');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk13');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk14');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk15');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk16');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk17');";
$sql .= "INSERT INTO sd (sid,weekdescription)
VALUES ('$last_id','wk18');";

if (mysqli_multi_query($conn,$sql) === TRUE) {
    // echo "New records created successfully";
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

$nav="information";
$file = "/sc/scimd.php?id=".$last_id."#".$nav;
echo '<script type="text/javascript">window.location.assign("'.$file.'")</script>';
}else {
mysqli_close($conn);
echo '<script type="text/javascript">alert("Duplicate code")</script>';
$file = "scimdsplash.php";
echo '<script type="text/javascript">window.location.assign("'.$file.'")</script>';	
}
?>