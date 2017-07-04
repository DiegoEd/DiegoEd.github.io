<?php
class Usuario {
	private $id;
	private $nombre;
	private $email;
	private $clave;
	private $fecha_registro;
	private $activo;

	public function __construct($id, $nombre, $email, $clave, $fecha_registro, $activo) {
		$this->id = $id;
		$this->nombre = $nombre;
		$this->email = $email;
		$this->clave = $clave;
		$this->fecha_registro = $fecha_registro;
		$this->activo = $activo;
	}

	public function get_id() {
		return $this->id;
	}

	public function get_nombre() {
		return $this->nombre;
	}

	public function get_email() {
		return $this->email;
	}

	public function get_clave() {
		return $this->clave;
	}

	public function get_fecha_registro() {
		return $this->fecha_registro;
	}

	public function get_activo() {
		return $this->activo;
	}

	public function set_nombre($nombre) {
		$this->nombre = $nombre;
	}

	public function set_email($email) {
		$this->email = $email;
	}

	public function set_clave($clave) {
		$this->clave = $clave;
	}

	public function set_activo($activo) {
		$this->activo = $activo;
	}
}
?>