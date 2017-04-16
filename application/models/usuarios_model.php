<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model  {

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
	public function insertarUsuario($data){

		$this->db->insert("login",$data);

		if($this->db->affected_rows()>0){

			return true;
		}else{

			return false;
		}
		
} 

	public function borrarUsuario($data){

		$this->db->delete("login",$data);

		if($this->db->affected_rows()>0){

			return true;
		}else{

			return false;
		}
		
}   

	public function actualizarUsuario($id,$data){


        $this->db->where('idLogin',$id);
        $this->db->update('login', $data); 

		if($this->db->affected_rows()>0){
			return true;
		}else{

			return false;
		}
		
}    



}

