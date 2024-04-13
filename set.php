<?php
	session_start();
	ob_start();
	date_default_timezone_set("Europe/London");

    
	// Database connection parameters
	$host				= "localhost"; // Host name
	$db_username 		= "root"; // MySQL username
	$db_password		= ""; // MySQL password
	$database			= "myrealestate"; // Database name

	// Attempt to establish a connection to the database
	$conn = new mysqli($host, $db_username, $db_password, $database);

	// Check the connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

 

		$company_name                   =   "RealtorChrys";
		$company_address                =   "Victoria Park, Manchester, M14 5LX";
		$company_emailaddress           =   "info@realtor-chrys.com";
		$company_phonenumber            =   " 776 509 3130";
		$currency						=	"&#163;";

		$site_admin_username 			=	"Admin";
		$site_admin_password 			=	"00000000";


?>