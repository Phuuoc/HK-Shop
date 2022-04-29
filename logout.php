<?php
	session_start();
	session_destroy();
	// div
	header('location: index.php');
?>