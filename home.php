<?php include_once('init/init.php'); ?>
<!DOCTYPE html>
<html class="blue darken-2" lang="pt-br">
	<head>
		<link href="css/material_icons.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<meta charset="UTF-8">
		<title>Login | Mysql Admin</title>
	</head>
	<body>
		<div class="content row">

			<?php
				include_once('components/side.php');
			?>

		</div>
		<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
			$(document).ready(function(){
				$('.sidenav').sidenav();
			});
        </script>
	</body>
</html>