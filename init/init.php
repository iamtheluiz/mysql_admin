<meta charset="utf-8">
<?php

	$root = $_SERVER['DOCUMENT_ROOT'];

	include($root.'/class/Admin.php');

	$admin = new Admin;

	$admin->valid_login();
	$pdo = $admin->db_connect($_SESSION['host'], $_SESSION['db_name'], $_SESSION['port'], $_SESSION['user'], $_SESSION['pass']);
	$admin->setPdo($pdo);