<?php

include_once "../include/dbh.inc.php";
include_once "../fpdf/fpdf.php";
include_once "../captions/captions.php";

	$vechNo =  $_POST['vechNo'];
	$vechType = $_POST['vechType'];
	$charges = $_POST['charges'];
	$material = $_POST['material'];
	$partyRef = $_POST['partyRef'];
	$payment = $_POST['payment'];
	$driver = $_POST['driver'];
	$grossWeight = $_POST['grossWeight'];
	$tareWeight = $_POST['tareWeight'];
	$netWeight = $_POST['netWeight'];


	// Inserting into database
	if(empty($vechNo) || empty($charges))
	{
		echo "Please fill all the fields";
	}
	else
	{
		$sql = "INSERT INTO customerRecordTable (
							vechNo, vechType,charges,material, partyRef, driver, grossWeight,tareWeight,netWeight)
							VALUES ('$vechNo', '$vechType','$charges','$material','$partyRef','$driver','$grossWeight',
							'tareWeight','netWeight')";
		if(mysqli_query($conn,$sql)) 
		{
			echo "Saved successfully";
		}
		else
		{
			echo "Something went wrong,Please try again";
		}
	}


// making pdf based on input data

/*	function makePdf(){
		//declare Variables
		$serialNo = serialNo;
		$charges = charges;
		$payment = payment;
		$vechNo = vechNo;
		$vechType = vechType;
		$material = material;
		$partyRef = partyRef;
		$driver = driver;
		$grossWeight = grossWeight;
		$tareWeight = tareWeight;
		$netWeight = netWeight;
		$shopAddressLineOne = shopAddressLineOne;
		$shopAddressLineTwo = shopAddressLineTwo;
		$shopAddressAdditionalTitle = shopAddressAdditionalTitle;
		$colon = ": ";
		$chargesSymbol = " /-";
		$vechTypeInWheeler = " WEELER";
		$weightInKg = " Kg";

		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->Ln(10);
		$pdf->SetFont('Times','',14);
		$pdf->Cell(190,8,$shopAddressLineOne,0,1,'C');
		$pdf->Cell(190,8,$shopAddressLineTwo,0,1,'C');
		$pdf->SetFont('Times','B',10);
		$pdf->Cell(190,8,$shopAddressAdditionalTitle,'B',1,'C');
		$pdf->Ln(12);

		// printing first row
		$pdf->Cell(5);
		$pdf->Cell(25,8,$serialNo,0,0,'L');
		$pdf->Cell(25,8,$colon."00123",0,0,'L');
		$pdf->Cell(15);
		$pdf->Cell(25,8,$vechNo,0,0,'L');
		$pdf->Cell(25,8,$colon."MH12SB 3915",0,0,'L');
		$pdf->Cell(15);
		$pdf->Cell(25,8,$vechType,0,0,'L');
		$pdf->Cell(25,8,$colon."14".$vechTypeInWheeler,0,1,'L');
		// printing second row
		$pdf->Cell(5);
		$pdf->Cell(25,8,$charges,0,0,'L');
		$pdf->Cell(25,8,$colon."100".$chargesSymbol,0,0,'L');
		$pdf->Cell(15);
		$pdf->Cell(25,8,$material,0,0,'L');
		$pdf->Cell(25,8,$colon."",0,0,'L');
		$pdf->Cell(15);
		$pdf->Cell(25,8,$partyRef,0,0,'L');
		$pdf->Cell(25,8,$colon."",0,1,'L');

		// printing third row
		$pdf->Cell(5);
		$pdf->Cell(25,8,$payment,0,0,'L');
		$pdf->Cell(25,8,$colon."Cash",0,0,'L');
		$pdf->Cell(80);
		$pdf->Cell(25,8,$driver,0,0,'L');
		$pdf->Cell(25,8,$colon."OUT",0,1,'L');

		// printing date
		$pdf->Ln(5);
		$pdf->Cell(190,8,date("d-m-Y"),0,1,'C');
		$pdf->Ln(5);

		//Printing weight section first row
		$pdf->Cell(5);
		$pdf->Cell(40,8,$grossWeight,0,0,'L');
		$pdf->Cell(5,8,$colon,0,0,'L');
		$pdf->Cell(5);
		$pdf->Cell(40,8,"42860".$weightInKg,0,0,'L');
		$pdf->Cell(40,8,date("d-m-Y").",".date("h:i"),0,1,'L');

		//Printing weight section second row
		$pdf->Cell(5);
		$pdf->Cell(40,8,$tareWeight,0,0,'L');
		$pdf->Cell(5,8,$colon,0,0,'L');
		$pdf->Cell(5);
		$pdf->Cell(40,8,"12850".$weightInKg,0,0,'L');
		$pdf->Cell(40,8,date("d-m-Y").",".date("h:i"),0,1,'L');

		//Printing weight section third row
		$pdf->Cell(5);
		$pdf->Cell(40,8,$netWeight,0,0,'L');
		$pdf->Cell(5,8,$colon,0,0,'L');
		$pdf->Cell(5);
		$pdf->Cell(40,8,"30010".$weightInKg,0,1,'L');

		//line break at the last
		$pdf->Ln(8);
		$pdf->Cell(190,0,"",'B',0,'C');

		$pdf->Output();		
	}*/

?>