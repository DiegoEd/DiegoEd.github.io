<?php
if ($_SERVER['SERVER_NAME'] == "nextsoft.cf" || $_SERVER['SERVER_NAME'] == "www.nextsoft.cf") {
	define('SERVIDOR', 'http://www.nextsoft.cf');
	define('NOMBRE_SERVIDOR', 'localhost');
	define('NOMBRE_USUARIO', 'diego94');
	define('PASSWORD', 'mysql');
	define('NOMBRE_BD', 'empresa');
} else {
	define('SERVIDOR', 'http://localhost/Empresa');
	define('NOMBRE_SERVIDOR', 'localhost');
	define('NOMBRE_USUARIO', 'root');
	define('PASSWORD', '');
	define('NOMBRE_BD', 'empresa');
}

define('RUTA_REGISTRO', SERVIDOR. '/vistas/registro.php');;
define('RUTA_LOGIN', SERVIDOR. '/vistas/login.php');
define('RUTA_LOGOUT', SERVIDOR. '/vistas/logout.php');
//define('RUTA_ENTRADA', SERVIDOR. '/entrada');

define('RUTA_CSS', SERVIDOR. '/css/');
define('RUTA_JS', SERVIDOR. '/js/');
?>