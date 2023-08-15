<?php
include "connection.php";
$id = $_GET["id"];
?>


<?php
require('./fpdf/fpdf.php');

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 14);





//Cell(width , height , text , border , end line , [align] )
$pdf->Cell(130, 5, 'Bus Management System', 0, 0);
$pdf->Cell(59, 5, 'INVOICE', 0, 1); //end of line
$pdf->Cell(10, 5, '', 0, 1);

//set font to arial, regular, 12pt
$pdf->SetFont('Arial', '', 12);






$sql = "SELECT * FROM `payment` WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);



$rr = $row["driver_id"];
$sqlDriver = "SELECT * FROM `driver` WHERE driver_id = '$rr'";
$resultDriver = mysqli_query($conn, $sqlDriver);
$rowDriver = mysqli_fetch_assoc($resultDriver);





$currentDate = date("Y-m-d"); // Format: Year-Month-Day (e.g., 2023-08-15)



$pdf->Cell(130, 5, 'Dumki, Patuakhali', 0, 0);
$pdf->Cell(59, 5, '', 0, 1); //end of line

$pdf->Cell(130, 5, '', 0, 0);
$pdf->Cell(25, 5, 'Date', 0, 0);
$pdf->Cell(34, 5, $currentDate, 0, 1); //end of line

$pdf->Cell(130, 5, 'Phone [+8801711223344]', 0, 0);
$pdf->Cell(25, 5, 'Invoice #', 0, 0);
$pdf->Cell(34, 5, '[' . $row["id"] . ']', 0, 1); //end of line

$pdf->Cell(130, 5, 'Fax [+12345678]', 0, 0);
$pdf->Cell(25, 5, 'Customer ID', 0, 0);
$pdf->Cell(34, 5, '[' . $row["driver_id"] . ']', 0, 1); //end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0, 1); //end of line

//billing address
$pdf->Cell(100, 5, 'Bill to', 0, 1); //end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, 'Name: ' . $rowDriver["driver_name"] . '', 1, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, 'Address: ' . $rowDriver["address"] . '', 1, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, 'Contact: ' . $rowDriver["contact"] . '', 1, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '', 0, 1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0, 1); //end of line

//invoice contents
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(110, 5, 'Description', 1, 0);
$pdf->Cell(45, 5, 'Month, Year', 1, 0);
$pdf->Cell(34, 5, 'Amount', 1, 1); //end of line

$pdf->SetFont('Arial', '', 12);

//Numbers are right-aligned so we give 'R' after new line parameter



$pdf->Cell(110, 5, 'Salary', 1, 0);
$pdf->Cell(45, 5, '' . $row["month"] . ', '.$row["year"].'', 1, 0);
$pdf->Cell(34, 5, '' . $row["salary"] . '', 1, 1, 'R'); //end of line

//summary
$pdf->Cell(110, 5, '', 0, 0);
$pdf->Cell(45, 5, 'Total', 0, 0);
$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(30, 5, '' . $row["salary"] . '', 1, 1, 'R'); //end of line



// Output the PDF to the browser
$pdf->Output();
?>