<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model  {

	function __construct(){

	parent::__construct();

}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login($correo,$contrasena)
	{



$resultado = $this->db->query("SELECT a.nombre,a.correo,a.contrasena,b.nombre as tipo
							FROM login a
							INNER JOIN login_tipo b on a.tipo=b.idLogin
							WHERE a.activo=1 
							AND a.correo='$correo' AND a.contrasena='$contrasena' LIMIT 1;");


if($resultado->num_rows()>0){

foreach ($resultado->result_array() as $row)
{

$usuario_data = array(
   'nombre' => $row['nombre'],
   'tipo' => $row['tipo'],
   'logueado' => TRUE
);
$this->session->set_userdata($usuario_data);

}

return true;

}else{
	return false;
}

	}


    
public function totalUsuarios(){


$query="SELECT count(*) as total from login Limit 1";
$resultado=$this->db->query($query);



foreach ($resultado->result_array() as $row)
{
return $row['total'];
}
}


public function listarUsuarios($empezar_desde,$cantidadPorPagina,$tipo){    
if($tipo=="Maestro"){
return $this->db->query("SELECT idLogin,nombre FROM login limit $empezar_desde,$cantidadPorPagina");
}
if($tipo=="Administrador"){
return $this->db->query("SELECT idLogin,nombre FROM login where tipo !=1 limit $empezar_desde,$cantidadPorPagina"); 
}

}

public function cargaDetalleUsuarios($id){
$resultado = $this->db->query("SELECT * FROM login where idLogin=$id limit 1");  
return $resultado;
}



}

