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

	echo "registro Guardado";


}else{
	echo "Error al guardar";
}



}



}
