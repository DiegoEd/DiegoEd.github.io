<?php
include_once 'app/config.php';
include_once 'app/ControlSesion.php';

include_once 'plantillas/documento-apertura.php';
include_once 'plantillas/navbar.php';
?>

<div class="jumbotron" id="inicio">
	<div class="block">
		<div class="container">
			<h1>BIENVENIDOS A NEXTSOFT</h1>
		</div>
	</div>
	<div class="block">
		<div class="container">
			<p>Empresa dedicada al desarrollo y soporte de software.</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="panel panel-default text-center">
				<div class="panel-heading" id="carlos">
				</div>
				<div class="panel-body">
					<img src="img/playa.jpg" class="panel-profile-img">
					<h4>Carlos Alberto Céspedes Soliz</h4>
					<p>Ingeniero en Sistemas</p>
					<p>Co-fundador de NextSoft</p>
					<p>Contacto: 77778888</p>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="panel panel-default text-center">
				<div class="panel-heading text-center" id="diego">
				</div>
				<div class="panel-body">
					<img src="img/salchichas.jpg" class="panel-profile-img">
					<h4>Diego Eduardo Aguilera Cassal</h4>
					<p>Ingeniero en Sistemas</p>
					<p>Co-fundador de NextSoft</p>
					<p>Contacto: 77779999</p>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">Últimas noticias</h1>
				</div>
				<div class="panel-body text-center">
					<div class="panel panel-default">
						<div class="panel-body">
							<h1>Foto Scan</h1>
							<div class="row">
								<div class="col-md-4">
									<img src="img/fotoscan.png" id="news-img">
								</div>
								<div class="col-md-8">
									<p>NextSoft anuncia el lanzamiento de su nueva aplicación Foto Scan.</p>
									<p>El proyecto Foto Scan es de código libre. El propósito de este proyecto desarrollado para plataformas móviles Android es la de poner tener un mejor manejo de las imágenes que los usuarios manejan ....</p>
								</div>
							</div>
							<a href="#" class="btn btn-default btn-news">Seguir leyendo</a>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<h1>Inauguración de NextSoft</h1>
							<p>Nos complace anunciar la apertura de nuestra compañía para el desarrollo de software. Ha sido un proceso complicado pero valió la pena. Gracias a todas las personas que forman parte de este proyecto el cual tiene ya definido sus primeros objetivos y ....</p>
							<a href="#" class="btn btn-default btn-news">Seguir leyendo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include_once 'plantillas/documento-cierre.php';
?>