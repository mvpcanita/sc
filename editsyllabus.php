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
 

$id = $_POST['id'];

$title =$_POST['title'];

$title = trim(preg_replace('/<!--.*?-->/s', '', $title));

$code = strtoupper(trim(preg_replace('/<!--.*?-->/s','',$_POST['code'])));
$credits = trim(preg_replace('/<!--.*?-->/s','',$_POST['credits']));
$prerequisite = trim(preg_replace('/<!--.*?-->/s','',$_POST['prerequisite']));
$description = trim(preg_replace('/<!--.*?-->/s','',$_POST['description']));
$outcomes = trim(preg_replace('/<!--.*?-->/s','',$_POST['outcomes']));
$requiredreading = trim(preg_replace('/<!--.*?-->/s','',$_POST['requiredreading']));
$suggestedreading = trim(preg_replace('/<!--.*?-->/s','',$_POST['suggestedreading']));
$courserequirements = trim(preg_replace('/<!--.*?-->/s','',$_POST['courserequirements']));
$gradingsystem = trim(preg_replace('/<!--.*?-->/s','',$_POST['gradingsystem']));
$policy = trim(preg_replace('/<!--.*?-->/s','',$_POST['policy']));
$consultationhours = trim(preg_replace('/<!--.*?-->/s','',$_POST['consultationhours']));
$dateofeffectivity = $_POST['dateofeffectivity'];
$code1 = strtoupper(rtrim(ltrim($code,"<p>"),"</p>"));


$sql = "UPDATE sc SET title='$title',code='$code',credits='$credits',prerequisite='$prerequisite',
description='$description',outcomes='$outcomes',requiredreading='$requiredreading',
suggestedreading='$suggestedreading',courserequirements='$courserequirements', gradingsystem='$gradingsystem',
policy='$policy',consultationhours='$consultationhours',dateofeffectivity='$dateofeffectivity',code1='$code1' 
WHERE id='$id'";

$result = mysqli_query($conn,$sql);
$nav = "information";
// $row = mysqli_fetch_assoc($result);
mysqli_close($conn);
$nav;
$file = "/sc/scimd.php?id=".$id."#".$nav;
echo '<script type="text/javascript">window.location.assign("'.$file.'")</script>';
?>