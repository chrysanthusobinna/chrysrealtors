<?php


if(!isset($_SESSION["user"]))
{
 header("location: ../index.php?notif_err=Login+to+Continue!");
 exit();
}

$logged_user			=	$_SESSION["user"];

$query_logged_user_info	=	mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE email_address='$logged_user'"));
$logged_user_id							=			$query_logged_user_info['id'];

$profile_picture						=			$query_logged_user_info['profile_picture'];
$first_name								=			$query_logged_user_info['first_name'];
$last_name								=			$query_logged_user_info['last_name'];
$phone_number							=			$query_logged_user_info['phone_number'];
$address								=			$query_logged_user_info['address'];

$logged_user_password					=			$query_logged_user_info['password'];


?>
