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

			<!-- Caixa de Login -->
			<br>
			<div class="col s10 m8 l6 offset-s1 offset-m2 offset-l3 white">
				
				<!-- Titulo da caixa -->
				<div class="col s12 center-align">
					<h2>Mysql Admin</h2>
				</div>

				<!-- Inputs -->
				<div class="col s12">

					<form action="actions/efetuar_login.php" method="post" autocomplete="off">
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" name="tx_user" id="tx_user" required>
							<label for="tx_user">Usuário</label>
						</div>
						<div class="input-field">
							<i class="material-icons prefix">lock</i>
							<input type="password" name="tx_pass" id="tx_pass" required>
							<label for="tx_pass">Senha</label>
						</div>
						<div class="input-field">
							<i class="material-icons prefix">dialpad</i>
							<input type="number" name="nr_port" id="nr_port" required>
							<label for="nr_port">Porta Mysql</label>
						</div>
						<div class="input-field">
							<button class="btn col s6 offset-s3">Enviar</button>
						</div><br><br>
					</form>

				</div>

			</div>

		</div>
		<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>