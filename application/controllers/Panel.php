<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	function __construct(){

	parent::__construct();
	$this->load->database();
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
		$this->load->view('panel_view');
		$this->load->view('footer');


$this->load->model('login_model');

if($_POST){

if($this->login_model->login($_POST["correo"],$_POST["contrasena"])){
	redirect('home_panel');
	}else{
redirect('Uruario_no_existe');
		//redirect(base_url() );
	}	
	
}




}

public function cerrarsesion(){
$this->session->sess_destroy();
header('Location: ' . base_url());

}



}

?>

