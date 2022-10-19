<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		// panggil library "session"
		$this->load->library("session");
		// panggil helper "url"
		$this->load->helper('url');

		if($this->session->userdata('ka-19') == "")
		{
			redirect("https://google.com");
		}
		else
		{
			$this->load->view('dashboard');
		}		
	}

	function view()
	{
		// panggil library "session"
		$this->load->library("session");
		// panggil helper "url"
		$this->load->helper('url');

		if($this->session->userdata('ka-19') == "")
		{
			redirect("https://google.com");
		}
		else
		{
			echo "Tampilan View";
		}		
	}
}
