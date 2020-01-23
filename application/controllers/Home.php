<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	//Declare path layout base
	private $layout_base = 'layout/base';

	public function index()
	{

		$this->load->library('rssfeed');
		$news_siler = $this->rssfeed->getNationalSlider(3);
		$mas_vistas = $this->rssfeed->getMasVistas(10);
		$reforma = $this->rssfeed->getNacionalReforma(10);
		$elpais = $this->rssfeed->getNacionalElpais(10);

		$twetts = $this->rssfeed->getTwetts(3);
		$internacional = $this->rssfeed->getInternacional(5);

		//$economia = $this->rssfeed->getEcoExpansion(2);
		//$expansion = $this->rssfeed->getTecExpansion(2);

		$data['view']='home/index';
		$data['tittle']='Home';
		$data['active_home']=1;
		$data['slider']=$news_siler;
		$data['mas_vistas']=$mas_vistas;
		$data['reforma']=$reforma;
		$data['elpais']=$elpais;
		$data['twetts']=$twetts;
		$data['internacional']=$internacional;
		//$data['economia']=$economia;
		//$data['expansion']=$expansion;

		$this->load->view($this->layout_base,$data);
	}

	public function economia()
	{

		$this->load->library('rssfeed');

		$mas_vistas = $this->rssfeed->getMasVistas(10);
		$reforma = $this->rssfeed->getNacionalReforma(10);		

		$twetts = $this->rssfeed->getTwetts(3);
		$internacional = $this->rssfeed->getInternacional(5);

		//$economia = $this->rssfeed->getEcoExpansion(2);		

		$data['view']='home/index';
		$data['tittle']='Home';
		$data['active_eco']=1;		
		$data['mas_vistas']=$mas_vistas;
		$data['reforma']=$reforma;		
		$data['twetts']=$twetts;
		$data['internacional']=$internacional;
		//$data['economia']=$economia;
		//$data['expansion']=$expansion;

		$this->load->view($this->layout_base,$data);
	}
}