<?php

class Cliente_controlador extends CI_Controller
{
	public function __contruct()
	{
		parent::__contruct();
	}

	public function registrarse()
	{
		$this->load->view('plantillas/head');
		$this->load->view('navbar/navbar-inicio');
		$this->load->view('contenido/contenido-registrarse');
		$this->load->view('plantillas/footer');
	}

 public function registrar_cliente()
 {
  $this->form_validation->set_rules('nomyape','Nombre y apellido del cliente','required');
  $this->form_validation->set_rules('email','dirección de correo electronico','required|valid_email');
		//luego se pone is_unique[personas.mail]
  $this->form_validation->set_rules('contrasenia','Contraseña	','required|min_length[8]|trim');
  $this->form_validation->set_rules('contraconf','Confirmar contraseña','required|trim|matches[contrasenia]');
  $this->form_validation->set_rules('genero','Genero','required');

  // Mensaje de validacion

  $this->form_validation->set_message('required', 'El Campo %s es obligatorio.');
  $this->form_validation->set_message('valid_email', 'El Campo %s es obligatorio.');
  $this->form_validation->set_message('is_unique', 'Tu %s ya ha sido ingresado.');
  $this->form_validation->set_message('min_lenght', 'El campo %s debe contener como minimo %d .');
  $this->form_validation->set_message('valid_email', 'El Campo %s es obligatorio.');
  $this->form_validation->set_message('matches', 'Las contraseñas no coinciden.');

  if($this->form_validation->run() ==FALSE)
  {
  	$this->registrarse();
  }else
  {
  	// echo"datos correctos"; die;
  	$this->insertar_cliente();
  }
 }

 public function insertar_cliente()
 {
 	$cliente = array(
		'mail' => $this->input->post('email'),
		'contrasenia' => base64_encode($this->input->post('contrasenia')),
		'nomyape'=>$this->input->post('nomyape'),
		'genero'=>$this->input->post('genero'),
		'estado'=>TRUE,
		'id_perfil'=>2,
		 // 2 es cliente y 1 administrador
 	);

 	$this->load->model('cliente_modelo');
 	$this->cliente_modelo->guardar_cliente($cliente);
 	$id_persona = $this->db->insert_id();

	// $this->usuario_controlador->guardar_usuario($id_persona);
 	$usuario = array(
 		'mail'=>$this->input->post('email'),
 		'contrasenia'=>base64_encode($this->input->post('contrasenia')),
 		'id_persona'=>$id_persona,
		'estado'=>TRUE,
		'id_perfil'=>'2'
 	);
 	$this->cliente_modelo->guardar_usuario($usuario);

 	redirect('usuario_controlador');
 }
 // public function insertar_producto()
 // {
 //  $this->form_validation->setrules('categoria','Seleccionar Categoria','required|callback_select_validate');
 //  $this->form_validation->set_rules('imagen','Seleccionar una imagen', 'callback_validar_imagen');
 //
 //  if($this->form_validation->run() == FALSE){
 //   $this->form_cargar_libro();
 //  }else{
 //   $this-guardar_libro();
 // }
 // public function select_validate($categoria)
 // {
 //  if($categoria==0){
 //   $this->form_validation->set_message('select_validate', 'Seleccione una categoria';
 //   return false;
 //  }else{
 //   return true;
 //  }
 // }
 // public function validar_imagen($imagen)
 // {
 //  //Verifica que se ingreso una imagen
 //  $nombre_imagen = $_FILES['imagen']['name'];//Obtene el nombre de la imagen
 //  if(empty($nombre_imagen))
 //  {
 //   $this->form_validation->set_message('validar_imagen','Seleccionar una imagen');
 //   return false;
 //  }else{
 //   return true;
 //  }
 // }
 // public function guardar_libro()
 // {
 //  $config['upload_path']='.upload/imagenes_libro';
 //  $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
 //  $config['remove_spaces'] = TRUE;
 //  $config['max_size']='1024';
 //
 //  $this->load->library('upload', $config);
 //
 //  if(!~this->upload->do_upload('imagen')){
 //   echo "<script tupe=\"text/javascript\>alert('No s epudo cargar el archivo');</script>";
 //  }else{
 //   $data = array(
 //   'libro_imagen => $FILES['imagen']['name'],
 //   'libro_categoria'=> $this->input->post('categoria'),
 //   'libro_estado' =>1
 //   );
 //  $this->load->model('libro_model');
 //  $this->libro_model->guardar_libro($data);
 //  redirect('libro_controlador/form_cargar_libro');
 // }
}
?>
