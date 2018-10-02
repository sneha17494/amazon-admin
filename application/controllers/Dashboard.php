<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('securelogin')){
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/navigation');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/include/footer');
		}else{
			$this->session->set_flashdata('response',"<p style='text-align: center;font-size: 15px;color: #d61d1d;'>Please Login.</p>");
			redirect('welcome');
		}
	}
}

?>