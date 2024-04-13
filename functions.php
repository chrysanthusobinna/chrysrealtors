<?php


			function clean_input($string)
			{
				
			global $conn;
			$string=trim($string);
			return $conn->real_escape_string($string);
			}
		 
			
			
			function clean_output($string)
			{	
			$string=stripslashes($string);
			return htmlentities($string);	
			}


			// Function to set flash message
			function setFlashMessage($message, $type) {
					$_SESSION['flash_message'] = array(
					'message' => $message,
					'type' => $type
				);
			}


			// Function to get and clear flash message
			function getFlashMessage() {
				if (isset($_SESSION['flash_message'])) {
					$message = $_SESSION['flash_message'];
					unset($_SESSION['flash_message']);
					return $message;
					} else {
					return '';
				}
			}

 
			function pluralize($count, $singular, $plural) {
				if ($count == 1) {
					return $singular;
				}
				else 
				{
					return $plural;
				}
			}

 
	
?>