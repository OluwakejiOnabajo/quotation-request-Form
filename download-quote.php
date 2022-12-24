<?php
      $ref_no = $_GET['ref'];
      
$host = "localhost"; // Host name 
$user = "root"; // User 
$password = ""; // Password 
$dbname = "quotation"; // Database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

        include_once('fpdf182/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    $this->SetFont('Helvetica','B',18);
     $this->Cell(0,20,'Price Quote Request',0,0,'C');
    $this->Ln(10);

    // Logo
    // $this->Image('images/avatar.jpg',140,8,20);
    // $this->SetFont('Helvetica','B',13);
    // Title

    $this->SetFont('Helvetica','B',13);
    $this->Cell(0,13,'List of all Quote Items',0,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Helvetica','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

    $this->Ln(5);
    $this->SetFont('Helvetica','',8);
    $this->Cell(0,10,'Copyright '.Date('Y').' All rights reserved | Organization',0,0,'C');
}
}
 
$display_heading = array('description'=> 'Description', 'code'=> 'Code', 'quantity'=> 'Quantity');
 
$result = mysqli_query($conn, "SELECT description, code, quantity FROM quote_items WHERE ref_no = ".$ref_no) or die("Oop's! Something went wrong. Please contact the support team for help"); //die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM quote_items WHERE field != 'ref_no' and field != 'id' and field != 'date_added'");
 
$pdf = new PDF();

//set author
$pdf->SetAuthor(' Author | author web');
$pdf->SetTitle('List of all items needed');
//header
$pdf->AddPage('L');
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Helvetica','B',10);
foreach($header as $heading) {
$pdf->Cell(38.5,10,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Helvetica','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(38.5,10,$column,1);
}
$pdf->Output();

?>