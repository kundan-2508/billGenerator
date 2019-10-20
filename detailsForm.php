<?php
ob_start();
session_start();
	include_once "include/dbh.inc.php";

	//Fetch last serial No from Database
	$sql = "SELECT MAX(Id) FROM customerRecordTable";
	if ($result=mysqli_query($conn,$sql)){
		while($row = mysqli_fetch_array($result)) {
			$currentSerialNo =  $row[0]+1;
		}
		//echo $result;
	}
	else{
		echo "Serial No Not rendered";
	}
?>


<!-- header section -->
<form action="#" method="POST" id = "customerDetailsForm">
	<div class="container">
		<div class="row">
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-sm-10 col-md-10 col-lg-10 customer-details-card">
				<div class="row">
					<h4><?php echo shopAddressLineOne ?></h4>
					<h4><?php echo shopAddressLineTwo ?></<h4>
					<h6><?php echo shopAddressAdditionalTitle ?></h6>
					<div style="border-bottom: 1px dotted black;margin-bottom: 6px;"></div>
				</div>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>

<!-- form field section -->
	<div class="container">
		<div class="row">
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-sm-10 col-md-10 col-lg-10 customer-details-card">
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo serialNo;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name = "serialNo" id="serialNo" value = "<?php echo $currentSerialNo; ?>" class="form-control" readonly>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo vechNo;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id="vechNo" class="form-control">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo vechType;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id="vechType" class="form-control">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo charges;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id="charges" class="form-control">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo material;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id="material" class="form-control">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo partyRef;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id="partyRef" class="form-control">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo payment;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id="payment" class="form-control">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo driver;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id="driver" class="form-control">
					</div>
				</div>
				<br>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
<!-- weight field section -->

	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-md-5 col-lg-5"></div>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<b><?php echo date("d-m-Y") ?><b>
			</div>
			<div class="col-sm-5 col-md-5 col-lg-5"></div>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-sm-10 col-md-10 col-lg-10 customer-details-card">
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo grossWeight;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id="grossWeight" class="form-control">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<b><?php echo date("d-m-Y").",".date("h:i"); ?><b>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo tareWeight;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id = "tareWeight" class="form-control">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<b><?php echo date("d-m-Y").",".date("h:i"); ?><b>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo netWeight;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" id = "netWeight" class="form-control" readonly>
					</div>
				</div>
				<br>
				<div class="row">
					<div style="border-bottom: 1px dotted black;margin-bottom: 6px;"></div>
				</div>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
	<br>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4"></div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<input type="submit" name = "saveCustomerDetailsButton" id = "saveCustomerDetailsButton" class="btn btn-primary form-control" value="<?php echo saveAndPrint; ?>">
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4"></div>
	</div>

</form>
<div class="container" style="display: none;">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4"></div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<input type="submit" id="printMe" class="btn btn-primary form-control" value="<?php echo printReciept; ?>"
			onclick="printReciept('printableArea')">
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4"></div>
	</div>
</div>


<!-- printitng data -->

<div style="display: none;">
	<div id = "printableArea">
		<!-- header section -->

		<div class="container">
			<div class="row">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-10 col-md-10 col-lg-10 customer-details-card">
					<div class="row">
						<h4><?php echo shopAddressLineOne ?></h4>
						<h4><?php echo shopAddressLineTwo ?></<h4>
						<h6><?php echo shopAddressAdditionalTitle ?></h6>
						<div style="border-bottom: 1px dotted black;margin-bottom: 6px;"></div>
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>
		</div>

		<!-- form field section -->
		<div class="container">
			<div class="row">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-10 col-md-10 col-lg-10 customer-details-card">
					<div class="row">
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo serialNo ?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['serialNo']; ?>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo vechNo;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['vechNo']; ?>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo vechType;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['vechType']; ?>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo charges;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['charges'];?>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo material;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['material'];?>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo partyRef;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['partyRef'];?>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo payment;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['payment'];?>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4">
							
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo driver;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['driver'];?>
						</div>
					</div>
					<br>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>
		</div>
		<!-- weight field section -->

		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-md-5 col-lg-5"></div>
				<div class="col-sm-2 col-md-2 col-lg-2">
					<b><?php echo date("d-m-Y") ?><b>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5"></div>
			</div>
		</div>
		<br>

		<div class="container">
			<div class="row">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-10 col-md-10 col-lg-10 customer-details-card">
					<div class="row">
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo grossWeight;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['grossWeight'];?>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<b><?php echo date("d-m-Y").",".date("h:i"); ?><b>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo tareWeight;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['tareWeight'];?>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<b><?php echo date("d-m-Y").",".date("h:i"); ?><b>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label for=""><?php echo netWeight;?> :</label>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<?php echo $_SESSION['netWeight'];?>
						</div>
					</div>
					<br>
					<div class="row">
						<div style="border-bottom: 1px dotted black;margin-bottom: 6px;"></div>
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>
		</div>
		<br>
	</div>
</div>

<?php


//session_destroy();
//unset($_SESSION['charges']);
?>
	
