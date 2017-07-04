<?php
/*include_once 'app/ControlSesion.inc.php';
include_once 'app/config.inc.php';*/
?>

<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Este botón despliega la barra de navegación</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo SERVIDOR ?>" class="navbar-brand">NextSoft</a>
		</div>
		<div class="navbar-collapse collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo "#" ?>"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Noticias</a></li>
				<li><a href="<?php echo "#" ?>"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Preguntas</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
				if (ControlSesion::sesion_iniciada()) {
				?>
				<li><a href="<?php echo RUTA_LOGOUT ?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar sesión</a></li>
				<?php
				} else {
				?>
				<li><a href="<?php echo RUTA_REGISTRO ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Registro</a></li>
				<li><a href="<?php echo RUTA_LOGIN ?>"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar sesión</a></li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>
</nav>