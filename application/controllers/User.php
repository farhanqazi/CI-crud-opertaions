<?php

/**
 * 
 */
class User extends CI_controller
{

	function index()
	{
		$this->load->model("User_model");
		$users = $this->User_model->all();
		$data = array();
		$data['users'] = $users;
		$this->load->view("lists",$data);
	}

	function create()
	{
		$this->load->model("User_model");
		$this->form_validation->set_rules("name","Name","required");
		$this->form_validation->set_rules("email","Email","required|valid_email");
		if($this->form_validation->run() == false)
		{
			$this->load->view("create");
		}
		else
		{
			$formArray = array();
			$formArray['name'] = $this->input->post("name");
			$formArray['email'] = $this->input->post("email");
			$formArray['date'] = date('Y-m-d');
			$this->User_model->create($formArray);
			$this->session->set_flashdata("success","Record Save successfully");
			redirect(base_url().'index.php/user/index');
		}
		
	}

	function edit($user_id)
	{
		$this->load->model("User_model");
		$user = $this->User_model->getUser($user_id);
		$data = array();
		$data['user'] = $user;

		$this->form_validation->set_rules("name","Name","required");
		$this->form_validation->set_rules("email","Email","required|valid_email");

		if($this->form_validation->run() == false)
		{
			$this->load->view('edit',$data);
		}
		else
		{
			$formArray = array();
			$formArray['name'] = $this->input->post("name");
			$formArray['email'] = $this->input->post("email");
			$formArray['date'] = date('Y-m-d');
			$this->User_model->updateUser($user_id,$formArray);
			$this->session->set_flashdata("updated","Record Updated successfully");
			redirect(base_url().'index.php/user/index');
		}
	}

	function delete($user_id)
	{
		$this->load->model("User_model");
		$user = $this->User_model->getUser($user_id);
		if(empty($user))
		{
			$this->session->set_flashdata("failure","Record Not Found");
			redirect(base_url().'index.php/user/index');
		}
		else
		{
			$this->load->model("User_model");
			$this->User_model->deleteUser($user_id);
			$this->session->set_flashdata("deleted","Record Deleted successfully");
			redirect(base_url().'index.php/user/index');	
		}
		
	}
	
}
?>