<!-- <nav>
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
 -->
<div id="mobile-demo" class="side z-depth-1 col s3 blue">
	<a href="home.php">
		<div class="col s12 center-align white-text">
			<h4>MySql Admin</h4>
		</div>
	</a>
	<div class="col s12">
		<ul class="collapsible">
			<?php
				$admin->listar_databases();
			?>
		</ul>
	</div>
</div>