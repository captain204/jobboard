<?php
class Jobs_model extends CI_Model{

	/*
	* Get all Jobs
	*/

	public function get_jobs(){

		$this->db->select('*');
		$this->db->from('jobs');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_jobs_details($id){

		$this->db->select('*');
		$this->db->from('jobs');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();


		 $data = array(
		 	'first_name' => $this->input->post('first_name'),
		 	'last_name' => $this->input->post('last_name'),
		 	'email' => $this->input->post('email'),
		 	'username' => $this->input->post('username'),
		 	'password' => md5($this->input->post('password')), 
		);

		$insert = $this->db->insert('users',$data);
		return $insert;
	}


	public function apply_jobs(){
		$data = array(
			'Firstname' => $this->input->post('first_name'),
			'Lastname'  => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'location' =>$this->input->post('location'),
		);

		$insert = $this->db->insert('applications',$data);
		return $insert;

	}

	public function get_categories(){
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_recent(){
		$this->db->select('*');
		$this->db->from('jobs');
		$this->db->order_by('id','desc');
		$this->db->limit('4');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_search(){
		$match = $this->input->post('search');
		$this->db->select('*');
		$this->db->from('jobs');
		$this->db->or_like('Title',$match);
		$this->db->or_like('Location',$match);
		$this->db->or_like('company',$match);
		$this->db->or_like('description',$match);
		$this->db->where("(Title= '$match' OR Location='$match' OR company ='$match')");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_category($id){

		$this->db->where('id',$id);
		$query = $this->db->get('category');
		return $query->row();

	}


	public function get_jobs_bycategory($categoryid){

		$this->db->where('category_id',$categoryid);
		$query = $this->db->get('jobs');
		return $query->result();

	}

}
?>