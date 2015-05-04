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
require_once('tcpdf/tcpdf.php');
$id = $_GET['id'];
$sql="SELECT * FROM sc WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$sql1="SELECT * FROM sd WHERE sid='$id'";
$result1 = mysqli_query($conn,$sql1);


$description = $row['description'];
$title = $row['title'];

$code = $row['code'];
$credits = $row['credits'];
$prerequisite = $row['prerequisite'];
$outcomes = $row['outcomes'];
$requiredreading =  $row['requiredreading'];
$suggestedreading = $row['suggestedreading'];
$courserequirements = $row['courserequirements'];
$gradingsystem = $row['gradingsystem'];
$policy = $row['policy'];
$consultationhours = $row['consultationhours'];
$dateofeffectivity = $row['dateofeffectivity'];
$html ='<p align="center"><img src="feulogo1.png" style="width:300px;height:75px;"></p>   
<table border="1" cellspacing="3" cellpadding="0" width="760">
    <tr>
        <td width="140" height="10" colspan="3" >Course Title</td>      
        <td width="240" height="10" colspan="3" align="center" >'.$title.'</td>  
        <td width="140" height="10" colspan="2" >Course Code</td>
        <td width="240" height="10" colspan="2" align="center">'.$code.'</td>
    </tr>    
    <tr>
        <td width="140" colspan="3">Credits</td>
        <td width="240" colspan="3" align="center">'.$credits.'</td>
        <td width="140" colspan="2">Course Prerequisite</td>
         <td width="240" colspan="2" align="center">'.$prerequisite.'</td>  
    </tr>
    <tr>
        <td width="760" colspan="10">'.$description.'</td>
      
    </tr>
    <tr>
        <td width="100" colspan="2">Course Outcomes</td>
        <td width="660" colspan="8">'.$outcomes.'</td>
    </tr>
   
    <tr>
        
                    <td width="60" align="center"><b>Time Frame Week/Day</b></td>
                    <td width="140" colspan="3" align="center"><b>Learning Outcomes</b></td>
                    <td width="140" align="center"><b>Topics</b></td>
                    <td width="140" colspan="2" align="center"><b>Methodology</b></td>
                    <td width="140" colspan="2" align="center"><b>Resources</b></td>
                    <td width="140" align="center"><b>Assessment</b></td>
               
    </tr>';

    while($row1 = mysqli_fetch_assoc($result1)){ 
        if($row1['weeknumber']!=""){
         $html .= '<tr>
        <td width="60">' . $row1['weeknumber'] . '</td>
        <td width="140" colspan="3">' . $row1['learningoutcomes'] . '</td>
        <td width="140" >' . $row1['topics'] . '</td>
        <td width="140" colspan="2">' . $row1['methodology'] . '</td>
        <td width="140" colspan="2">' . $row1['resources'] . '</td>
        <td width="140" >' . $row1['assessments'] . '</td>
    </tr>';
        }if($row1['period']=="Prelim" || $row1['period']=="Midterm" || $row1['period']=="Finals"){
            $html.='<tr><td width="760" colspan="10" align="center">'.$row1['period'].'</td></tr>';
        }
}

$html .= '</table>
    <p><b>D. Required Reading:</b></p>
    <span style="text-indent:10px">'.$requiredreading.'</span>
    <p><b>E. Suggested Reading:</b></p>
    <span style="text-indent:10px">'.$suggestedreading.'<span>
    <p><b>F. Course Requirements:</b></p>
    <span>'.$courserequirements.'<span>
    <p><b>G. Grading System:</b></p>
    <span>'.$gradingsystem.'</span>
    <p><b>H. Classroom:</b></p>
    <span>'.$policy.'</span>
    <p><b>I. Consultation Hours:</b></p>
    <span>'.$consultationhours.'</span>
    <p><b>Date of Effectivity:</b>'.$dateofeffectivity.'</p>';

// $html = <<<EOD
// <p align="center"><img src="feulogo1.png" style="width:225px;height:75px;"></p>   
// <table border="1" cellspacing="3" cellpadding="0" width="760">
//     <tr>
//         <td width="140" height="10" colspan="3" >Course Title</td>      
//         <td width="240" height="10" colspan="3" align="center" >$title</td>  
//         <td width="140" height="10" colspan="2"  >Course Code</td>
//         <td width="240" height="10" colspan="2" align="center">$code</td>
//     </tr>    
//     <tr>
//         <td width="140" colspan="3">Credits</td>
//         <td width="240" colspan="3" align="center">$credits</td>
//         <td width="140" colspan="2" >Course Prerequisite</td>
//          <td width="240" colspan="2" align="center">$prerequisite</td>  
//     </tr>
//     <tr>
//         <td width="760" colspan="10">$description</td>
      
//     </tr>
//     <tr>
//         <td width="100" colspan="2">Course Outcomes</td>
//         <td width="660" colspan="8">$outcomes</td>
//     </tr>
   
//     <tr>
        
//                     <td width="60" align="center">Time Frame Week/Day</td>
//                     <td width="140" colspan="3" align="center">Learning Outcomes</td>
//                     <td width="140" align="center">Topics</td>
//                     <td width="140" colspan="2" align="center">Methodology</td>
//                     <td width="140" colspan="2" align="center">Resources</td>
//                     <td width="140" align="center">Assessment</td>
               
//     </tr>
         

// </table>
//     <p><b>D. Required Reading:</b></p>
//     <span style="text-indent:10px">$requiredreading</span>
//     <p><b>E. Suggested Reading:</b></p>
//     <span style="text-indent:10px">$suggestedreading<span>
//     <p><b>F. Course Requirements:</b></p>
//     <span>$courserequirements<span>
//     <p><b>G. Grading System:</b></p>
//     <span>$gradingsystem</span>
//     <p><b>H. Classroom:</b></p>
//     <span>$policy</span>
//     <p><b>I. Consultation Hours:</b></p>
//     <span>$consultationhours</span>
//     <p><b>Date of Effectivity:</b>$dateofeffectivity</p>
// EOD;
$html1 = <<<EOD
$html
EOD;

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// $this->SetHeaderMargin(5);
// $this->SetFooterMargin(18);
// $this->setMargins(10, 40, 10);
$pdf->SetCreator('SYLLABUS_CREATOR');
$pdf->SetAuthor('Malu Mariano');
$pdf->SetTitle(rtrim(ltrim($title,'<p>'),'</p>'));
$pdf->SetSubject(rtrim(ltrim($code,'<p>'),'</p>'));
$pdf->SetKeywords('TCPDF','PDF',$title,$code);
$pdf->SetFont('times', '', 12, '', 'false');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
$pdf->AddPage('L','A4');
$pdf->writeHTML($html1, true, false, true, false, '');
// $pdf->AddPage();
// $pdf->writeHTML($html1, true, false, true, false, '');

$js = <<<EOD
app.alert('JavaScript Popup Example', 3, 0, 'Welcome');
var cResponse = app.response({
    cQuestion: 'How are you today?',
    cTitle: 'Your Health Status',
    cDefault: 'Fine',
    cLabel: 'Response:'
});
if (cResponse == null) {
    app.alert('Thanks for trying anyway.', 3, 0, 'Result');
} else {
    app.alert('You responded, "'+cResponse+'", to the health question.', 3, 0, 'Result');
}
EOD;
// force print dialog
$js.= 'print(true);';

// set javascript
$pdf->IncludeJS($js);

// ---------------------------------------------------------

//Close and output PDF document

$pdf->Output(rtrim(ltrim($code,'<p>'),'</p>')."."."pdf",'D');
?>