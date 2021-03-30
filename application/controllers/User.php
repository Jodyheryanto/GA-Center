<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('DataPhone');
	}
	
	public function login()
    {
        $this->load->view('User/Login');
    }

	public function index()
	{
		$this->load->view('User/Header');
		$this->load->view('User/Content');
		$this->load->view('User/Footer');
	}

	public function ephone()
	{
		$data['ephone'] = $this->DataPhone->printPhone();
		$this->load->view('User/Header');
		$this->load->view('User/TablePhone', $data);
		$this->load->view('User/Footer');
	}

	public function request()
	{
		$this->load->view('User/Header');
		$this->load->view('User/InputRequest');
		$this->load->view('User/Footer');
	}

	public function about()
	{
		$this->load->view('User/Header');
		$this->load->view('User/ContentAbout');
		$this->load->view('User/Footer');
	}
}
