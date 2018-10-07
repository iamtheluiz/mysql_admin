<nav>
	<div class="nav-wrapper blue darken-4">
	<a href="#!" class="brand-logo">Logo</a>
	<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	<ul class="right hide-on-med-and-down">
		<li><a href="actions/logout.php">Sair</a></li>
	</ul>
	</div>
</nav>
<div id="mobile-demo" class="sidenav col s3 white">
	<a href="home.php">
		<div class="col s12">
			
		</div>
	</a>
</div>

<div id="mobile-demo" class="side z-depth-3 col s3 white hide-on-med-and-down">
	<a href="home.php">
		<div class="col s12 center-align">
			<h4>MySql Admin</h4>
		</div>
	</a>
	<div class="col s12">
		<ul class="collapsible">
			<?php
				$admin->listar_databases();
			?>
		</ul>
		<!-- <ul class="collection with-header">
			<li class="collection-header"><i class="material-icons">storage</i>Banco de Dados</li>
			<?php
				//$admin->listar_databases();
			?>
		</ul> -->
	</div>
</div>