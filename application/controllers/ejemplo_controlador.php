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

	public function __contruct()
	{
		parent::__contruct();
	}
	public function index()
	{
		$this->load->view('plantillas/head');
		$this->load->view('navbar/navbar-inicio');
		$this->load->view('header/header-inicio');
		$this->load->view('contenido/contenido-inicio');
		$this->load->view('plantillas/footer');
	}

	public function contacto()
	{
		$this->load->view('plantillas/head');
		$this->load->view('navbar/navbar-contacto');
		$this->load->view('header/header-contacto');
		$this->load->view('contenido/contenido-contacto');
		$this->load->view('plantillas/footer');
	}

	// public function registrarse()
	// {
	// 	$this->load->view('plantillas/head');
	// 	$this->load->view('navbar/navbar-inicio');
	// 	$this->load->view('contenido/contenido-registrarse');
	// 	$this->load->view('plantillas/footer');
	// }

	public function tienda()
	{
		$this->load->view('plantillas/head');
		$this->load->view('navbar/navbar-tienda');
		$this->load->view('header/header-tienda');
		$this->load->view('contenido/contenido-tienda');
		$this->load->view('plantillas/footer');
	}

	public function terminos()
	{
		$this->load->view('plantillas/head');
		$this->load->view('navbar/navbar-inicio');
		$this->load->view('contenido/contenido-terminos');
		$this->load->view('plantillas/footer');
	}

	public function quienesSomos()
	{
		$this->load->view('plantillas/head');
		$this->load->view('navbar/navbar-inicio');
		$this->load->view('contenido/contenido-quienesSomos');
		$this->load->view('plantillas/footer');
	}

	public function guardar_usuario($p_id_persona)
	{
		$usuario = array(
	 		'mail'=>$this->input->post('mail'),
	 		'password'=>base64_encode($this->input->post('password')),
	 		'idCliente'=>$p_id_persona
	 	);

		$this->usuario_model->guardar_usuario($usuario);
	}
}
