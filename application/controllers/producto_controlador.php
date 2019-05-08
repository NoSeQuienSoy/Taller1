<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Producto_controlador extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
    }
	
	public function index()
	{
		$this->load->view('plantillas/head');
		$this->load->view('navbar/administrador-navbar');
		$this->load->view('producto/producto-ingresar');
		$this->load->view('plantillas/footer');
	}

    public function insertar_producto()
    {
		//reglas
	 $this->form_validation->set_rules('nombre', 'Nombre del producto', 'required');
	 $this->form_validation->set_rules('nomcientifico', 'Nombre cientifico', 'required');
	 $this->form_validation->set_rules('stock', 'Stock del producto', 'required');
     $this->form_validation->set_rules('imagen','Seleccionar una imagen', 'callback_validar_imagen');
	 $this->form_validation->set_rules('precio', 'Precio', 'required');
	 
		//mensajes
		$this->form_validation->set_message('required','El campo %s es oblligatio.');

     if($this->form_validation->run() == FALSE){
      $this->form_cargar_libro();
     }else{
      $this-guardar_libro();
    }
	}

    // public function select_validate($categoria)
    // {
     // if($categoria==0){
      // $this->form_validation->set_message('select_validate', 'Seleccione una categoria';
      // return false;
     // }else{
      // return true;
     // }
    // }

    // public function validar_imagen($imagen)
    // {
     // //Verifica que se ingreso una imagen
     // $nombre_imagen = $_FILES['imagen']['name'];//Obtene el nombre de la imagen
     // if(empty($nombre_imagen))
     // {
      // $this->form_validation->set_message('validar_imagen','Seleccionar una imagen');
      // return false;
     // }else{
      // return true;
     // }
    // }

    // public function guardar_libro()
    // {
     // $config['upload_path']='.upload/imagenes_libro';
     // $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
     // $config['remove_spaces'] = TRUE;
     // $config['max_size']='1024';

     // $this->load->library('upload', $config);

     // if(!~this->upload->do_upload('imagen'))
     // {
      // echo "<script type=text/javascript\>alert('No se pudo cargar el archivo')</script>";
     // } else {
      // $data = array(
      // 'libro_imagen'=> $FILES['imagen']['name'],
      // 'libro_categoria'=> $this->input->post('categoria'),
      // 'libro_estado'=>1);
     // $this->load->model('libro_model');
     // $this->libro_model->guardar_libro($data);
     // redirect('libro_controlador/form_cargar_libro');
    // }
   // }
}