<meta charset="utf-8">
<?php

	$root = $_SERVER['DOCUMENT_ROOT'];

	$root = explode('/root',$root);
	$root = $root[0].'/mysql_admin/';

	include($root.'/class/Admin.php');
	include($root.'/class/Banco.php');

	$admin = new Admin;

	$admin->valid_login();
	$pdo = $admin->db_connect($_SESSION['host'], $_SESSION['db_name'], $_SESSION['port'], $_SESSION['user'], $_SESSION['pass']);
	$admin->setPdo($pdo);