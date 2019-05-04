<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo_controlador extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('head/head');
		$this->load->view('navbar/navbar-inicio');
		$this->load->view('header/header-inicio');
		$this->load->view('contenido/contenido-inicio');
		$this->load->view('footer/footer');
	}

	public function contacto()
	{
		$this->load->view('head/head');
		$this->load->view('navbar/navbar-inicio');
		$this->load->view('contenido/contenido-contacto');
		$this->load->view('footer/footer');
	}
}