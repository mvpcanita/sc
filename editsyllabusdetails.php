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
$sid = $_POST['sid'];
$nav = $_GET['nav'];
$period = $_POST['period'];
$weeknumber =$_POST['weeknumber'];
$weekdescription = $_POST['weekdescription'];

$weeknumber = trim(preg_replace('/<!--.*?-->/s', '', $weeknumber));

$learningoutcomes = trim(preg_replace('/<!--.*?-->/s','',$_POST['learningoutcomes']));
$topics = trim(preg_replace('/<!--.*?-->/s','',$_POST['topics']));
$methodology = trim(preg_replace('/<!--.*?-->/s','',$_POST['methodology']));
$resources = trim(preg_replace('/<!--.*?-->/s','',$_POST['resources']));
$assessments = trim(preg_replace('/<!--.*?-->/s','',$_POST['assessments']));
// echo $sid;echo $weekdescription;


$sql = "UPDATE sd SET weeknumber='$weeknumber',learningoutcomes='$learningoutcomes',topics='$topics',methodology='$methodology',resources='$resources',assessments='$assessments',period='$period' 
WHERE weekdescription='$weekdescription' AND sid='$sid'";

$result = mysqli_query($conn,$sql);
// $nav = "wk1";
// $row = mysqli_fetch_assoc($result);
mysqli_close($conn);
$nav;
$file = "/sc/scimd.php?id=".$sid."#".$nav;
echo '<script type="text/javascript">window.location.assign("'.$file.'")</script>';
?>