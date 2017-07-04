<?php
include_once '../app/config.php';
include_once '../app/Conexion.php';
include_once '../app/Usuario.php';
include_once '../app/RepositorioUsuario.php';
include_once '../app/ValidadorRegistro.php';
include_once '../app/Redireccion.php';
include_once '../app/ControlSesion.php';

if (isset($_POST['enviar'])) {
	Conexion::abrir_conexion();
	$validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'], $_POST['clave1'], $_POST['clave2'], Conexion::obtener_conexion());
	if ($validador->registro_valido()) {
		$usuario = new Usuario('', $validador->obtener_nombre(), $validador->obtener_email(), password_hash($validador->obtener_clave(), PASSWORD_DEFAULT), '', '');
		$usuario_insertado = @RepositorioUsuario::insertar_usuario($usuario, Conexion::obtener_conexion());
		if ($usuario_insertado) {
			Redireccion::redirigir(SERVIDOR);
		}
	}
	Conexion::cerrar_conexion();
}

$titulo = 'Registro';

include_once '../plantillas/documento-apertura.php';
include_once '../plantillas/navbar.php';
?>

<div class="container">
	<div class="jumbotron">
		<h1 class="text-center">Formulario de registro</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-center">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Instrucciones</h3>
				</div>
				<div class="panel-body">
					<br>
					<p class="text-justify">Para unirte al blog de Diego, introduce tu nombre de usuario, tu email y una contraseña. El email que escribas deber ser real ya que lo necesitarás para gestionar tu cuenta. Te recomendamos que uses una contraseña que contenga letras minúsculas, mayúsculas, números y símbolos.</p>
					<br>
					<a href="#">¿Ya tienes cuenta?</a>
					<br>
					<a href="#">¿Olvidaste tu contraseña?</a>
					<br>
					<br>
				</div>
			</div>
		</div>
		<div class="col-md-6 text-center">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Introduce tus datos</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="<?php echo RUTA_REGISTRO ?>">
						<div class="form-group">
							<label>Nombre de usuario</label>
							<input type="text" class="form-control" name="nombre" placeholder="desarrollador_novato">
							<?php
							if (isset($_POST['enviar'])) {
								$validador->mostrar_error_nombre();
							}
							?>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" placeholder="usuario@hotmail.com">
							<?php
							if (isset($_POST['enviar'])) {
								$validador->mostrar_error_email();
							}
							?>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" class="form-control" name="clave1">
							<?php
							if (isset($_POST['enviar'])) {
								$validador->mostrar_error_clave1();
							}
							?>
						</div>
						<div class="form-group">
							<label>Repite la contraseña</label>
							<input type="password" class="form-control" name="clave2">
							<?php
							if (isset($_POST['enviar'])) {
								$validador->mostrar_error_clave2();
							}
							?>
						</div>
						<br>
						<button type="reset" class="btn btn-default btn-primary">Limpiar formulario</button>
						<br>
						<br>
						<button type="submit" class="btn btn-default btn-primary" name="enviar">Enviar datos</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include_once '../plantillas/documento-cierre.php';
?>