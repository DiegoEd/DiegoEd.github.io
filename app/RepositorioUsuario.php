<?php
class RepositorioUsuario {
	public static function obtener_todos($conexion) {
		$usuarios = array();
		if (isset($conexion)) {
			try {
				include_once 'Usuario.class.php';
				$sql = "SELECT * FROM usuario";
				$sentencia = $conexion->prepare($sql);
				$sentencia->execute();
				$resultado = $sentencia->fetchAll();
				if (count($resultado)) {
					foreach ($resultado as $fila) {
						$usuarios[] = new Usuario($fila['id'], $fila['nombre'], $fila['email'], $fila['clave'], $fila['fecha_registro'], $fila['activo']);
					}
				} else {
					print 'No hay usuarios';
				}
			} catch (PDOException $ex) {
				print "ERROR: ". $ex->getMessage();
			}
		}
		return $usuarios;
	}

	public static function obtener_numero_usuarios($conexion) {
		$total_usuarios = null;
		if (isset($conexion)) {
			try {
				 $sql = "SELECT COUNT(*) AS total FROM usuario";
				 $sentencia = $conexion->prepare($sql);
				 $sentencia->execute();
				 $resultado = $sentencia->fetch();
				 $total_usuarios = $resultado['total'];
			} catch(Exception $ex) {
				print "ERROR: ". $ex->getMessage();
			}
		}
		return $total_usuarios;
	}

	public static function insertar_usuario($usuario, $conexion) {
		$usuario_insertado = false;
		if (isset($conexion)) {
			try {
				$sql = "INSERT INTO usuario(nombre, email, clave, fecha_registro, activo) VALUES(:nombre, :email, :clave, NOW(), 1)";
				$sentencia = $conexion->prepare($sql);
				$sentencia->bindParam(':nombre', $usuario->get_nombre(), PDO::PARAM_STR);
				$sentencia->bindParam(':email', $usuario->get_email(), PDO::PARAM_STR);
				$sentencia->bindParam(':clave', $usuario->get_clave(), PDO::PARAM_STR);
				$usuario_insertado = $sentencia->execute();
			} catch(PDOException $ex) {
				print 'ERROR: '. $ex->getMessage();
			}
		}
		return $usuario_insertado;
	}

	public static function nombre_existe($nombre, $conexion) {
		$nombre_existe = true;
		if (isset($conexion)) {
			try {
				$sql = "SELECT * FROM usuario WHERE nombre = :nombre";
				$sentencia = $conexion->prepare($sql);
				$sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
				$sentencia->execute();
				$resultado = $sentencia->fetchAll();
				if (count($resultado)) {
					$nombre_existe = true;
				} else {
					$nombre_existe = false;
				}
			} catch(PDOException $ex) {
				print 'ERROR: '. $ex->getMessage();
			}
		}
		return $nombre_existe;
	}

	public static function email_existe($email, $conexion) {
		$email_existe = true;
		if (isset($conexion)) {
			try {
				$sql = "SELECT * FROM usuario WHERE email = :email";
				$sentencia = $conexion->prepare($sql);
				$sentencia->bindParam(':email', $email, PDO::PARAM_STR);
				$sentencia->execute();
				$resultado = $sentencia->fetchAll();
				if (count($resultado)) {
					$email_existe = true;
				} else {
					$email_existe = false;
				}
			} catch(PDOException $ex) {
				print 'ERROR: '. $ex->getMessage();
			}
		}
		return $email_existe;
	}

	public static function obtener_usuario_por_email($email, $conexion) {
		$usuario = null;
		if (isset($conexion)) {
			try {
				include_once 'Usuario.php';
				$sql = "SELECT * FROM usuario WHERE email = :email";
				$sentencia = $conexion->prepare($sql);
				$sentencia->bindParam(':email', $email, PDO::PARAM_STR);
				$sentencia->execute();
				$resultado = $sentencia->fetch();
				if (!empty($resultado)) {
					$usuario = new Usuario($resultado['id'], $resultado['nombre'], $resultado['email'], $resultado['clave'], $resultado['fecha_registro'], $resultado['activo']);
				}
			} catch(PDOException $ex) {
				print 'ERROR: '. $ex->getMessage();
			}
		}
		return $usuario;
	}
}
?>