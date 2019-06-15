<?php
class Manage extends CI_controller{

	public function index(){


		$data['main_content'] ='users';
		$this->load->view('layouts/main_two',$data);
	}
}

?>