
<?php
ob_start();
session_start();
include_once "../include/dbh.inc.php";
include_once "../fpdf/fpdf.php";
include_once "../captions/captions.php";

	$serialNo = $_POST['serialNo'];
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
							vechNo, vechType,charges,material, partyRef,payment, driver, grossWeight,tareWeight,netWeight)
							VALUES ('$vechNo', '$vechType','$charges','$material','$partyRef','$payment','$driver','$grossWeight',
							'$tareWeight','$netWeight')";
		if(mysqli_query($conn,$sql)) 
		{
			//echo $serialNo;
		
	      	$sql="SELECT *FROM customerRecordTable WHERE Id = '$serialNo'";
	      	if ($result=mysqli_query($conn,$sql))
			{
			  // Fetch everything
				
			  while ($row=mysqli_fetch_assoc($result))
			    {
			    	// showing current inserted data
			    	$_SESSION['serialNo'] = $row['Id'];
			    	$_SESSION['vechNo'] = $row['vechNo'];
			    	$_SESSION['vechType'] = $row['vechType'];
			    	$_SESSION['charges'] = $row['charges'];
			    	$_SESSION['material'] = $row['material'];
			    	$_SESSION['partyRef'] = $row['partyRef'];
			    	$_SESSION['payment'] = $row['payment'];
			    	$_SESSION['driver'] = $row['driver'];
			    	$_SESSION['grossWeight'] = $row['grossWeight'];
			    	//$_SESSION['grossWeightTime'] = $row['grossWeightTime'];
			    	$_SESSION['tareWeight'] = $row['tareWeight'];
			    	//$_SESSION['tareWeightTime'] = $row['tareWeightTime'];
			    	$_SESSION['netWeight'] = $row['netWeight'];
			    	echo "success";

			    }
			  // Free result set
			  mysqli_free_result($result);
			}
			else
			{
				echo "Something Went Wrong..try again";
			}
			      

		}
		else
		{
			echo "Unable to print,Please try again";
		}
	}
?>