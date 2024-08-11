<?php
require('fpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a new PDF document
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    // Add title
    $pdf->Cell(0, 10, 'Texas Sales and Use Tax Resale Certificate', 0, 1, 'C');
    $pdf->Ln(10);

    // Set font for the form data
    $pdf->SetFont('Arial', '', 12);

    // Capture form data
    $purchaserName = $_POST['purchaserName'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $cityStateZip = $_POST['cityStateZip'];
    $permitNumber = $_POST['permitNumber'];
    $outOfStateRetailerNumber = $_POST['outOfStateRetailerNumber'];
    $sellerName = $_POST['sellerName'];
    $sellerAddress = $_POST['sellerAddress'];
    $sellerCityStateZip = $_POST['sellerCityStateZip'];
    $itemDescription = $_POST['itemDescription'];
    $businessActivity = $_POST['businessActivity'];
    $purchaserTitle = $_POST['purchaserTitle'];
    $date = $_POST['date'];

    // Populate the PDF with form data
    $pdf->Cell(0, 10, "Name of Purchaser: $purchaserName", 0, 1);
    $pdf->Cell(0, 10, "Phone: $phone", 0, 1);
    $pdf->Cell(0, 10, "Address: $address", 0, 1);
    $pdf->Cell(0, 10, "City, State, ZIP: $cityStateZip", 0, 1);
    $pdf->Cell(0, 10, "Permit Number: $permitNumber", 0, 1);
    $pdf->Cell(0, 10, "Out-of-State Retailer Number (RFC): $outOfStateRetailerNumber", 0, 1);
    $pdf->Cell(0, 10, "Vendor: $sellerName", 0, 1);
    $pdf->Cell(0, 10, "Vendor's Street Address: $sellerAddress", 0, 1);
    $pdf->Cell(0, 10, "Vendor's City, State, ZIP: $sellerCityStateZip", 0, 1);
    $pdf->Cell(0, 10, "Description of Items to be Purchased: $itemDescription", 0, 1);
    $pdf->Cell(0, 10, "Business Activity: $businessActivity", 0, 1);
    $pdf->Cell(0, 10, "Purchaser Title: $purchaserTitle", 0, 1);
    $pdf->Cell(0, 10, "Date: $date", 0, 1);

    // Output the PDF for download
    $pdf->Output('D', 'Texas_Resale_Certificate.pdf');
}
?>
