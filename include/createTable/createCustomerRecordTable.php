<?php

include_once "../dbh.inc.php";

$query = "CREATE TABLE customerRecordTable(
	Id INT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	vechNo VARCHAR(30) NOT NULL,
	vechType VARCHAR(30),
	charges INT NOT NULL,
	material VARCHAR(30),
	partyRef VARCHAR(30),
	driver VARCHAR(30),
	grossWeight INT,
	grossWeightTime VARCHAR(30),
	tareWeightTime VARCHAR(30),
	tareWeight INT,
	netWeight INT, 
	SubmittedOn TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

mysqli_query($conn,$query) or die("Oops! something went wrong");

?>