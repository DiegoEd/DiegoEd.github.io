<?php
include_once '../app/ControlSesion.php';
include_once '../app/config.php';

ControlSesion::cerrar_sesion();
header('location:'. SERVIDOR, true, 301)
?>