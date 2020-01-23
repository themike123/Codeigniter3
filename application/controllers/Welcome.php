<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	//Declare path layout base
	private $layout_base = 'layout/base';

	public function index()
	{
		$this->load->view($this->layout_base);
	}
}
