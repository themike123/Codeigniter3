<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	//Declare path layout base
	private $layout_base = 'layout/base';

	public function index()
	{
		$data['view']='home/index';
		$data['tittle']='Home';

		$this->load->view($this->layout_base,$data);
	}
}