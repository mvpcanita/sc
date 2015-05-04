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

$searchtxt="";

if (isset($_POST['submit'])) {
$searchtxt = test_input($_POST['searchtxt']);

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($searchtxt ==""){
$sql = "SELECT * FROM sc ORDER BY code ASC";
$result = mysqli_query($conn,$sql);

}else{

$sql = "SELECT * FROM sc WHERE `code1`='$searchtxt'";
$result = mysqli_query($conn,$sql);	
}
?>
<!DOCTYPE html5>
<html lang=en>
<head>

 <link href="css/bootstrap.min.css" rel="stylesheet"/>
   <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <script>
   function save(){
var selectedItem = $("#modal-body" ).text();

alert (selectedItem);
   	// window.location = 'createsyllabus.php';
   }
</script>
   </head>
<body>
   <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
        	 <a class="navbar-brand" href="#">Syllabus Creator for Math and IT Department</a>
        </div>
 
          <form name="search" class="navbar-form navbar-right" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" name="searchtxt" class="form-control" placeholder="type code here">
            <input type="submit" name='submit' value="search"><!-- <span class="glyphicon glyphicon-search"></span> -->
          </form>
         
    </div>
    </nav>
    <div class="container">
    	<div class="col-md-3">
    <h3 style=>Select a Course or<h3>
    </div>
<button type="button"  style="margin-top:20px;" class="btn btn-info btn-md" data-toggle="modal" data-target="#subject">Add Subject</button>
<table class="table table-striped table-hover">
                  <thead>
                    <tr class="info">
                      
                 
                      <th>Code</th>
                      <th>Title</th>
                    <th>Last Update</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                 
                        if (mysqli_num_rows($result) > 0) {
               
                         while($row = mysqli_fetch_assoc($result)) {
                         
                       
                        echo "<tr class='success'><td><a href='scimd.php?id=".$row['id']."'>".$row["code"]."</a></td>";
                        echo "<td> ".$row["title"]."</td>";
                        echo "<td> ".$row["time"]."</td>";
                            
                          }?>
                      </tr>
                        <?php }  ?>

                     </tbody>
                 </table>
             </div>
             <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="subject" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Syllabus</h4>
      </div>
      <div class="modal-body">
        <form name="createcourse" method="POST" action="createsyllabus.php">
          <div class="form-group">
            <label for="code" class="control-label">Type a Course Code Here</label>
            <input type="text" class="form-control" id="code" name="code">
          </div>
    
      </div>
      <div class="modal-footer">
      	<input type="submit" value="Save" name="Save" class="btn btn-primary" >
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
      </div>
    </div>

  </div>
</div>
</body>

</html>