<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('DataPhone');
    }

	public function index()
	{
        if($this->input->post('email') === "admin" && $this->input->post('password') === "admin"){
            $this->load->view('Admin/Header');
            $this->load->view('Admin/Content');
            $this->load->view('Admin/Footer');
        }else{
            redirect('User');
        }
    }

	public function ephone()
	{
		$data['ephone'] = $this->DataPhone->printPhone();
		$this->load->view('Admin/Header');
		$this->load->view('Admin/TablePhone', $data);
		$this->load->view('Admin/Footer');
	}

	public function InsertPhone()
	{
		$this->load->view('Admin/Header');
		$this->load->view('Admin/InputPhone');
		$this->load->view('Admin/Footer');
	}

	public function InsDbPhone()
    {
		$this->DataPhone->saveData();
		$this->session->set_flashdata('msg', 'You success insert the data!');
        redirect('Admin/ephone');
	}

	public function DelDbPhone($id)
    {
		$this->DataPhone->DelData($id);
		$this->session->set_flashdata('msg', 'You success delete the data!');
        redirect('Admin/ephone');
	}
	
	public function ChangePhone($id){
		$data['ephone'] = $this->DataPhone->printPhoneId($id);
		$this->load->view('Admin/Header');
		$this->load->view('Admin/ChangePhoneV', $data);
		$this->load->view('Admin/Footer');
	}

	public function ChangeDbPhone($id)
    {
		$this->DataPhone->ChangeData($id);
		$this->session->set_flashdata('msg', 'You success change the data!');
		redirect('Admin/ephone');
    }

	public function request()
	{
		$this->load->view('Admin/Header');
		$this->load->view('Admin/InputRequest');
		$this->load->view('Admin/Footer');
	}

	public function about()
	{
		$this->load->view('Admin/Header');
		$this->load->view('Admin/ContentAbout');
		$this->load->view('Admin/Footer');
    }
}
