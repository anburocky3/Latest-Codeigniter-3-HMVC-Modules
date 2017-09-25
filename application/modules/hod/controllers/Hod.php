<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* HODController
*/
class Hod extends MX_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		echo "WE";
		// $this->load->view('welcome', $data);
	}
}

/* End of file HODController.php */
/* Location: ./application/modules/hod/controller/HODController.php */