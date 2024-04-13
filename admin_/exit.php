<?php
include("../set.php");

unset($_SESSION["admin"]);
session_destroy();

header("location: ../index.php");

?>