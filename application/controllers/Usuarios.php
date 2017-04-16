<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

public function __construct(){

parent::__construct();

$this->load->model('Usuarios_model');
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
	public function index()
	{
		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->model('login_model');


$total=$this->login_model->totalUsuarios();
$tipo=$this->session->userdata('tipo');


$array=array('totalRegistros'=>$total,'tipo'=>$tipo);


	$this->load->view('usuarios_view',$array);
	$this->load->view('footer');
	}

public function nuevoUsuario(){

$nombre=$this->input->post("agregarNombre");

$array=array("nombre"=>$nombre);

if($this->Usuarios_model->insertarUsuario($array)){
echo "Usuario Agregado con exito";

}else{
	echo "Error al agregar";
}
}

public function eliminarUsuario(){
$id=$this->input->post("borrarNombre");

$array=array("idLogin"=>$id);

if($this->Usuarios_model->borrarUsuario($array)){
echo "Usuario Borrado con exito";
}else{
	echo "Error al borrar";
}
}

public function actualizarUsuario(){
$id=$this->input->post("id");
$nombre=$this->input->post("nombre");
$email=$this->input->post("email");
$contrasena=$this->input->post("contrasena");
$tipo=$this->input->post("tipo");
$activo=$this->input->post("activo");

$array=array(
        	"nombre"=>$nombre,
 			"correo"=>$email,
 			"contrasena"=>$contrasena,
 			"tipo"=>$tipo,
 			"activo"=>$activo
			 );

if($this->Usuarios_model->actualizarUsuario($id,$array)){
echo "Usuario Actualizado con exito";
}else{
	echo "Error al Actualizar";
}
}
}
