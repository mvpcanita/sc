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

$id = "4";
$sql = "SELECT * FROM sc WHERE id='$id'";

$result = mysqli_query($conn,$sql);

$sql1 = "SELECT * FROM sd WHERE sid='$id'";
$result1 = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM sd WHERE sid='$id' LIMIT 1";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$index = $row2['id'];//index of the 1st row of the result set in sd

  ?>
  <!DOCTYPE html>
  <html lang="en" debug="false">
  <div id="FirebugChannel" style="display: none;">FB_deactivate</div>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


  <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <link href="scmid.css" rel="stylesheet">

      <script src="ckeditor/ckeditor.js"></script>
 
      <script type="text/javascript">

// <!--
//     function toggle_visibility(id) {
//        var e = document.getElementById(id);
//        if(e.style.display == 'block'){

//           e.style.display = 'none';
//           e.style.visibility = 'hidden';
//            // $('a').click(slow,function(e){$('#outcomes').fadeOut('slow');});
         
//         }
//        else{
//           e.style.display = 'block';
//           e.style.visibility = 'visible';
//           // $('outcomes').fadeIn('slow');
//         }
//     }
// //-->
 </script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <script language="javascript"> 
    function save() 
    { 
        var div_content = document.getElementById("editor1").innerHTML; 
        document.forms["informationfrm"].informationtxt.value += div_content;
        document.forms["informationfrm"].submit();
        // location.href = "savesyllabus.php?c=" + div_content ,"tab";     
    } 
    function edit(){
// var fields = ["title","code","credits","prerequisite","description","outcomes","requiredreading"];
// var count = fields.length;
//       for(i=0; i<count;i++){
//         var frmfield = fields[i];
//         var editorfield = "editor"+fields[i];
//      document.forms["informationfrm"].frmfield.value += document.getElementById(editorfield).innerHTML;
//      }
     
         
          document.forms["informationfrm"].title.value += document.getElementById("editortitle").innerHTML;
          document.forms["informationfrm"].code.value += document.getElementById("editorcode").innerHTML;
          document.forms["informationfrm"].credits.value += document.getElementById("editorcredits").innerHTML;
          document.forms["informationfrm"].prerequisite.value += document.getElementById("editorprerequisite").innerHTML;
          document.forms["informationfrm"].description.value +=document.getElementById("editordescription").innerHTML;
          document.forms["informationfrm"].outcomes.value += document.getElementById("editoroutcomes").innerHTML;
          document.forms["informationfrm"].requiredreading.value += document.getElementById("editorrequiredreading").innerHTML;
          document.forms["informationfrm"].suggestedreading.value += document.getElementById("editorsuggestedreading").innerHTML;
          document.forms["informationfrm"].courserequirements.value += document.getElementById("editorcourserequirements").innerHTML;
          document.forms["informationfrm"].gradingsystem.value += document.getElementById("editorgradingsystem").innerHTML;
          document.forms["informationfrm"].policy.value += document.getElementById("editorpolicy").innerHTML;
          document.forms["informationfrm"].consultationhours.value += document.getElementById("editorconsultationhours").innerHTML;
    
             document.forms["informationfrm"].submit();
    }
    function edit1(w){
     
       document.forms[w+"frm"].weeknumber.value += document.getElementById("editorweeknumber"+w).innerHTML;
       document.forms[w+"frm"].learningoutcomes.value += document.getElementById("editorlearningoutcomes"+w).innerHTML;
       document.forms[w+"frm"].topics.value += document.getElementById("editortopics"+w).innerHTML;
       document.forms[w+"frm"].methodology.value += document.getElementById("editormethodology"+w).innerHTML;
       document.forms[w+"frm"].resources.value += document.getElementById("editorresources"+w).innerHTML;
        document.forms[w+"frm"].assessments.value += document.getElementById("editorassessments"+w).innerHTML;
        document.forms[w+"frm"].submit();
    }
  
</script> 

 <script>
window.onload = function(){  

    var url = document.location.toString();
    // alert(url);
    if (url.match('#')) {
      
      $('.nav a[href=#' + url.split('#')[1] + ']').tab('show');
      location.hash ='';
   }

    // $('.nav a[href=#' + url.split('=')[2] + ']').tab('show');
    // location.hash ='';
} 

    </script>

</head>
<body>
<nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SCMiD</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#" onclick="test()">Save</a></li>
              <li><a href="tabletopdf.php?id=<?php echo $id;?>">Preview</a></li>
              <li><a href="tabletopdf1.php?id=<?php echo $id;?>">Download</a></li>
              <li><a href="#contact">Print</a></li>
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
   
  <div>
     <ul class="nav nav-tabs content-tabs" role="tablist" >
        <li role="presentation" class="active" ><a href="#information" data-toggle="tab">Information</a></li>
     
        <li role="presentation"><a href="#wk1" data-toggle="tab">WK1</a></li>
        <li role="presentation"><a href="#wk2" data-toggle="tab">WK2</a></li>
        <li role="presentation"><a href="#wk3" data-toggle="tab">WK3</a></li>
        <li role="presentation"><a href="#wk4" data-toggle="tab">WK4</a></li>
        <li role="presentation"><a href="#wk5" data-toggle="tab">WK5</a></li>
        <li role="presentation"><a href="#wk6" data-toggle="tab">WK6</a></li>
        <li role="presentation"><a href="#wk7" data-toggle="tab">WK7</a></li>
        <li role="presentation"><a href="#wk8" data-toggle="tab">WK8</a></li>
        <li role="presentation"><a href="#wk9" data-toggle="tab">WK9</a></li>
        <li role="presentation"><a href="#wk10" data-toggle="tab">WK10</a></li>
        <li role="presentation"><a href="#wk11" data-toggle="tab">WK11</a></li>
        <li role="presentation"><a href="#wk12" data-toggle="tab">WK12</a></li>
        <li role="presentation"><a href="#wk13" data-toggle="tab">WK13</a></li>
        <li role="presentation"><a href="#wk14" data-toggle="tab">WK14</a></li>
        <li role="presentation"><a href="#wk15" data-toggle="tab">WK15</a></li>
        <li role="presentation"><a href="#wk16" data-toggle="tab">WK16</a></li>
        <li role="presentation"><a href="#wk17" data-toggle="tab">WK17</a></li>
        <li role="presentation"><a href="#wk18" data-toggle="tab">WK18</a></li>
         </ul>
      
<div class="col-md-2 pull-left" style="width:180px">
        <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Control Panel</h3>
            </div>
          <div class="panel-body">
            <ul style="padding:1px;">
              <li data-toggle="tab" role="presentation">Learning Outcomes</li>
              <li>Blooms Taxonomy</li>
              
            <ul >
              <li class="active">  <a href="#remember"  data-toggle="tab">Remember</a></li>
             <li><a href="#understand"  data-toggle="tab">Understand</a></li>
              <li><a href="#apply"  data-toggle="tab">Apply</a></li>
              <li><a href="#analyze"  data-toggle="tab">Analyze</a></li>
              <li><a href="#evaluate"  data-toggle="tab">Evaluate</a></li>
              <li><a href="#create"  data-toggle="tab">Create</a></li>
            </ul>
          
              <li>Resources</li>
              <li>Grading</li>
            </ul>

          </div>
        </div>
</div>
<div class="col-md-3 main-content pull-right">
<div class="tab-content">

<div class="well well-align tab-pane fade in active"  id="remember" >
  <h4>Remember - retrieve knowledge from long-term memory</h4>
    <p><u>Sample Verbs</u></p>
        <p><span style="color:#00f">Define | Describe | Label | List | Match | Recall | Recognize | State | Arrange | Collect | Describe | Identify | Locate | Name 
</span></p>


    <p><u>Example</u></p>
      <ul>
        <li>List the steps for task analysis</li>
        <li>Name the symptoms of Parkinson Disease</li>
        <li>Define the term progress as used by military strategist</li>
      </ul>
      <p><u>Assessment type</u></p>
      <ul>
        <li>Fill in the blanks</li>
        <li>Multiple Choice</li>
        <li>Labelling Diagrams</li>
        <li>Reciting</li>
      </ul>
      <p><u>Example</u></p>
      <p>Asking students about the definition of sustainability given by the Bruntland Commission</p>
      <p><u>Activity</u></p>
      <ul>
        <li>Lectures</li>
        <li>Discussions</li>
        <li>Case Studies</li>
        <li>Writing</li>
        <li>Labs</li>
        <li>Group Projects</li>
      </ul>
         <p><u>Example</u></p>
      <p>Conducting a lecture about diffferent definitions of sustainability</p>
      </ul> 
      </div>

<div class="well well-align tab-pane fade in" id="understand">
  <h4>Understand - construct meaning from instructional messages, including oral, written, graphic communication</h4>
    <p><u>Sample Verbs</u></p>
        <p><span style="color:#00f">Classify | Compare | Discuss | Exemplify | Explain | Identify | Illustrate | Infer | Interpret | Predict | Report | Review | Summarize | Translate | Associate 
| Classify | Contrast | Distinguish | Explain | Exemplify | Interpret


</span></p>

    <p><u>Example</u></p>
      <ul>
        <li>Summarize the main points of political argument.</li>
        <li>Identify the concepts used in organizational development.</li>
        <li>Summarize the email etiquettes for business communication.</li>
      </ul>
    <p><u>Assessment type</u></p>
      <ul>
       <li>Oral/written exam questions</li>
       <li>Concept maps</li>
       <li>Summarizing</li>
       <li>Comparing and/or contrasting</li>
       <li>Classifying or categorizing</li>
       <li>Paraphrasing</li>
       <li>Explaining and/or elaborating</li>
      </ul>
      <p><u>Example</u></p>
      <p>Asking students to illustrate the process of how melamine affects human kidneys.</p>
      <p><u>Activity</u></p>
      <ul>
        <li>Lectures</li>
        <li>Discussions</li>
        <li>Case Studies</li>
        <li>Writing</li>
        <li>Labs</li>
        <li>Group Projects</li>
      </ul>
         <p><u>Example</u></p>
      <p>Conducting a discussion about how melamine affects human kidneys after lecturing about its molecular structures.</p>
      </ul> 
</div>

<div class="well well-align tab-pane fade in"  id="apply">
  <h4>Apply - carry out/use procedure in a given situation</h4>
    <p><u>Sample Verbs</u></p>
        <p><span style="color:#00f">Apply | Change | Choose | Demonstrate | Execute | Implement | Prepare | Solve | Use | Calculate | Classify | Construct | Examine |Illustrate | Predict
</span></p> 

    <p><u>Example</u></p>
      <ul>
        <li>Use MS PowerPoint to create an interactive presentation.</li>
        <li>Illustrate the main constructs of social learning theory.</li>
        <li>Establish a set of rules that can be used to mitigate spam in small office settings.</li>
      </ul>
       <p><u>Assessment type</u></p>
      <ul>
        <li>Problem sets</li>
        <li>Performances</li>
        <li>Labs</li>
        <li>Prototype presentations</li>
        <li>Simulations</li>
      </ul>
      <p><u>Example</u></p>
      <p>Conducting a lab for students to apply their understanding of microbiology to identify an unknown bacteria.</p>
      <p><u>Activity</u></p>
      <ul>
        <li>Lectures</li>
        <li>Discussions</li>
        <li>Case Studies</li>
        <li>Writing</li>
        <li>Labs</li>
        <li>Group Projects</li>
      </ul>
         <p><u>Example</u></p>
      <p>Conducting an experiment on the signal transmission of nerve fibers in frogs.</p>
      </ul> 
      </div>

<div class="well well-align tab-pane fade in"  id="analyze">
  <h4>Analyze - break material into constituent parts; determine how parts relate to one another and to an overall structure</h4>
    <p><u>Sample Verbs</u></p>
        <p><span style="color:#00f">Analyse | Attribute | Debate | Differentiate | Distinguish | Examine | Organize | Research | Calculate | Compare | Contrast | Deconstruct | Discriminate | Outline
</span></p> 

    <p><u>Example</u></p>
      <ul>
        <li>Identify different logical and structural components of an argument.</li>
        <li>Differentiate between constructivism and social learning theory.</li>
        <li>Compare and contrast the strengths and weaknesses of a political debate by employing linguistic analysis.</li>
      </ul>

       <p><u>Assessment type</u></p>
      <ul>
        <li>Lectures</li>
        <li>Discussions</li>
        <li>Case studies</li>
        <li>Labs</li>
        <li>Group projects</li>
      </ul>
      <p><u>Example</u></p>
      <p>Developing a case study about the financial crisis of 2008 to let students analyse its global impact.</p>
      <p><u>Activity</u></p>
      <ul>
        <li>Lectures</li>
        <li>Discussions</li>
        <li>Case Studies</li>
        <li>Writing</li>
        <li>Labs</li>
        <li>Group Projects</li>
      </ul>
         <p><u>Example</u></p>
      <p>Asking students to analyse theh global impact of the 2008 financial crisis and write an essay about it.</p>
      </ul> 
      </div>



<div class="well well-align tab-pane fade in"  id="evaluate">
  <h4>Evaluate - make judgements based on criteria and standards</h4>
    <p><u>Sample Verbs</u></p>
        <p><span style="color:#00f">Appraise | Check | Critique | Judge | Argue | Conclude | Estimate | Evaluate | Justify | Prove | Recommend
</span></p> 

    <p><u>Example</u></p>
      <ul>
        <li>Effectively evaluate research designs, methods, and conclusions.</li>
        <li>Assess their own strengths, weaknesses and omissions.</li>
        <li>Prove the validity of financial reports using XYZ analysis</li>
      </ul>
      <p><u>Assessment type</u></p>
      <ul>
        <li>Journals</li>
        <li>Diaries</li>
        <li>Critiques</li>
        <li>Problem sets</li>
        <li>Product reviews</li>
        <li>Case studies</li>
        <li>Research project reports</li>
        <li>Research project presentations</li>
        <li>Research project self-assessments</li>
        <li>Research project peer assessments</li>
      </ul>
      <p><u>Example</u></p>
      <p>Requesting students to compose a personal journal for their group projects, which includes literature review, team dynamics and progress</p>
      <p><u>Activity</u></p>
      <ul>
        <li>Lectures</li>
        <li>Discussions</li>
        <li>Case Studies</li>
        <li>Writing</li>
        <li>Labs</li>
        <li>Group Projects</li>
      </ul>
         <p><u>Example</u></p>
      <p>Conducting a discussion about the post-1997 societal development of Hong Kong.</p>
      </ul>
      </div>

<div class="well well-align tab-pane fade in"  id="create">
  <h4>Create - put elements together fo form coherent or functional whole; reorganize elements into a new pattern or structure</h4>
    <p><u>Sample Verbs</u></p>
        <p><span style="color:#00f">Compose | Construct | Create | Design | Develop | Formulate | Generate | Invent | Make | Organize | Plan | Produce | Propose | Assemble | Substitute
</span></p> 

    <p><u>Example</u></p>
      <ul>
        <li>Effectively communicate both formally and informally through speaking, writing and listening.</li>
        <li>Adjust future performance in light of their self-assessments.</li>
        <li>Write a company operation manual to reduce energy consumption.</li>
      </ul>
      <p><u>Assessment type</u></p>
      <ul>
        <li>Research project reports</li>
        <li>Research project presentations</li>
        <li>Research project self-assessments</li>
        <li>Research project peer assessments</li>
        <li>Musical compositions</li>
        <li>Performances</li>
        <li>Essays</li>
        <li>Business plans</li>
        <li>Website designs</li>
        <li>Prototype presentations</li>
        <li>Set designs</li>
      </ul>
      <p><u>Example</u></p>
      <p>Asking students to design a business plan for a declining business in Hong Kong.</p>
      <p><u>Activity</u></p>
      <ul>
        <li>Lectures</li>
        <li>Discussions</li>
        <li>Case Studies</li>
        <li>Writing</li>
        <li>Labs</li>
        <li>Group Projects</li>
      </ul>
         <p><u>Example</u></p>
      <p>Asking students to design a business plan for a declining business in Hong Kong</p>
      </ul>
      </div>

  </div>
</div>
<div class="col-md-7" >
  <div class="tab-content">

 <div id="information" class="main-tab  tab-pane fade in active">
      <!--   <h3 class="editable" data-can-delete="true" tabindex="0">information</h3> -->
      <?php 
          $fields = array("title","code","credits","prerequisite","description","outcomes","requiredreading","suggestedreading","courserequirements","gradingsystem","policy","consultationhours");
          $countfields = count($fields);

          if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result); 

            for($ctr=0; $ctr<$countfields;$ctr++){
               $value = $fields[$ctr];
                echo strtoupper($value).":";

              ?>
        
          <div id='<?php echo "editor".$fields[$ctr];?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $row[$value];?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fields[$ctr];?>' );
        </script>
        <?php } ?>

        <form name="informationfrm" id="informationfrm" method="POST" action="editsyllabus.php">
          <input type="hidden" name="id" value=<?php echo $row['id'];?>>
          <?php for($ctr=0; $ctr<$countfields;$ctr++){
               $value = $fields[$ctr];
                 ?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $value;?>" value='<?php echo $row[$value];?>'></textarea>
        <?php } ?>
        <label for="dateInput">Date of Effectivity</label>
        <input type="date" id="dateInput" class="form-control" name="dateofeffectivity" value="<?php echo $row['dateofeffectivity'];?>" required>
       <!--  <textarea name="informationtxt" style="display:none;visibility:none;"></textarea> -->
        <button value="save" class="btn btn-primary" onclick="edit()">Edit</button>
      
      </form>

      <?php } ?>
</div> 
        
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk1'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk1" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk1";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk1";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk1";?>frm" id="<?php echo "wk1";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk1">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk1";?>')">Edit</button>
         </form>
    
   
  </div>
  <?php 
        //} ?>

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk2'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk2" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk2";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk2";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk2";?>frm" id="<?php echo "wk2";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk2">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk2";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->
 
<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk3'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk3" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk3";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk3";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk3";?>frm" id="<?php echo "wk3";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk3">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk3";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk4'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk4" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk4";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk4";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk4";?>frm" id="<?php echo "wk4";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk4">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk4";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk5'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk5" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk5";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk5";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk5";?>frm" id="<?php echo "wk5";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk5">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk5";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk6'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk6" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk6";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk6";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk6";?>frm" id="<?php echo "wk6";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk6">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk6";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk7'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk7" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk7";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk7";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk7";?>frm" id="<?php echo "wk7";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk7">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk7";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk8'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk8" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk8";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk8";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk8";?>frm" id="<?php echo "wk8";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk8">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk8";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk9'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk9" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk9";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk9";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk9";?>frm" id="<?php echo "wk9";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk9">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk9";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk10'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk10" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk10";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk10";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "w10";?>frm" id="<?php echo "wk10";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk10">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk10";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->


<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk11'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk11" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk11";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk11";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk11";?>frm" id="<?php echo "wk11";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk11">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk11";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk12'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk12" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk12";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk12";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk12";?>frm" id="<?php echo "wk12";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk12">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk12";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk13'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk13" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk13";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk13";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk13";?>frm" id="<?php echo "wk13";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk13">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk13";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk14'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk14" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk14";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk14";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk14";?>frm" id="<?php echo "wk14";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk14">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk14";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk15'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk15" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk15";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk15";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk15";?>frm" id="<?php echo "wk15";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk15">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk15";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk16'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk16" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk16";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk16";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk16";?>frm" id="<?php echo "wk16";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk16">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk16";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->

<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk17'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk17" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo "editor".$fieldvalue."wk17";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo "editor".$fieldvalue."wk17";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk17";?>frm" id="<?php echo "wk17";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk17">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk17";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->


<!--S -->
 <?php 
            $sql3 = "SELECT * FROM sd WHERE sid='$id' AND weekdescription='wk18'";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
        ?>
  <div id="wk18" class="main-tab  tab-pane fade in">
  <?php 
// if(mysqli_num_rows($result1)>0){
//       while($row2=mysqli_fetch_assoc($result1)){
                $sid = $row2['sid'];
                // $id = $row2['id'];
              
      $fields1 = array("weeknumber","learningoutcomes","topics","methodology","resources","assessments");
      $count1 = count($fields1);
                  // if($index == $id) {
        for($ctr1=0;$ctr1<$count1;$ctr1++){
          $fieldvalue = $fields1[$ctr1];
          echo strtoupper($fieldvalue);
          $value1 = $row3[$fieldvalue];
          ?>
          <div id='<?php echo $fieldvalue."wk18";?>' contenteditable="true" 
          class="editableHtml cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" 
          tabindex="0" spellcheck="false" role="textbox" 
          aria-label="Rich Text Editor, editor3" title="Rich Text Editor,editor3"  
          aria-describedby="cke_94" style="position: relative;"><?php echo $value1;?></div>
        <script>
            CKEDITOR.disableAutoInline = true;
            var editor = CKEDITOR.inline( '<?php echo $fieldvalue."wk18";?>' );
        </script>

      
       <?php }

   //   $index=$index+1;  break; }
   // }?>

       <?php //} ?>
      <form name="<?php echo "wk18";?>frm" id="<?php echo "wk18";?>frm" method="POST" action="editsyllabusdetails.php?nav=wk18">
          <input type="hidden" name="weekdescription" value=<?php echo $row3['weekdescription'];?>>
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="hidden" name="sid" value=<?php echo $sid;?>>
          <?php $count1 = count($fields1);
                    for($ctr1=0;$ctr1<$count1;$ctr1++){
                      $fieldvalue = $fields1[$ctr1];?>
        <textarea style="display:none;visibility:none;" type="hidden" name="<?php echo $fieldvalue;?>" value='<?php echo $value1;?>'></textarea>
                      <?php } ?>
        <button value="save" class="btn btn-primary" onclick="edit1('<?php echo "wk18";?>')">Edit</button>
         </form>
    
   
  </div>
<!-- F -->


</div>
 <?php
            mysqli_close($conn); 
            ?>
          </body>
            </html>
           

