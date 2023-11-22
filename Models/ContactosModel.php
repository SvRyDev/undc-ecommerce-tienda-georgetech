<?php 

class ContactosModel extends Mysql{

	public $stringNombre ;
	public $stringEmail;
	public $stringTelefono;
	public $stringMensaje;

	public function selectContactos()
	{
		$sql = "SELECT id, nombre, email, DATE_FORMAT(datecreated, '%d/%m/%Y') as fecha
				, telefono FROM contacto ORDER BY id DESC";
		$request = $this->select_all($sql);
		return $request;
	}

	public function selectMensaje(int $idmensaje){
		$sql = "SELECT id, nombre, email, DATE_FORMAT(datecreated, '%d/%m/%Y') as fecha, telefono, mensaje
				FROM contacto WHERE id = {$idmensaje}";
		$request = $this->select($sql);
		return $request;
	}

	public function insertMensaje(string $nombre, string $email, string $telefono,  string $mensaje){
		$this->stringNombre = $nombre;
		$this->stringEmail = $email;
		$this->stringTelefono = $telefono;
		$this->stringMensaje = $mensaje;
		$sql = "INSERT INTO contacto(nombre, email, telefono, mensaje) VALUES (?,?,?,?)";
		$arrData = array($this->stringNombre, $this->stringEmail, $this->stringTelefono, $this->stringMensaje);
        	$request_insert = $this->insert($sql,$arrData);		
	        return $request_insert;
	}
}
 ?>