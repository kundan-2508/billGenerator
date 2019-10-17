<?php

include_once "../dbh.inc.php";

$query = "CREATE TABLE admins(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(30) NOT NULL,
	Gender ENUM ('Female','Male'),
	Email VARCHAR(30) UNIQUE NOT NULL,
	Mobile CHAR(10) NOT NULL,
	Username VARCHAR(30) UNIQUE NOT NULL,
	Password CHAR(40) NOT NULL,
	RegisteredOn TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

mysqli_query($conn,$query) or die("Oops! something went wrong");

?>