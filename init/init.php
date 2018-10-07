<meta charset="utf-8">
<?php

	include('class/Admin.php');

	$admin = new Admin;

	$admin->valid_login();
	$admin->db_connect($_SESSION['host'], $_SESSION['db_name'], $_SESSION['port'], $_SESSION['user'], $_SESSION['pass']);