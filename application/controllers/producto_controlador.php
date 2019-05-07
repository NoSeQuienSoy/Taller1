<?php
  class Producto_controldor extends CI_Controller
  {
    public function __construct()
    {
      parent::__contruct();
    }

    public function insertar_producto()
    {
      // faltan mas reglas
     $this->form_validation->setrules('categoria','Seleccionar Categoria','required|callback_select_validate');
     $this->form_validation->set_rules('imagen','Seleccionar una imagen', 'callback_validar_imagen');

     if($this->form_validation->run() == FALSE){
      $this->form_cargar_libro();
     }else{
      $this-guardar_libro();
    }

    public function select_validate($categoria)
    {
     if($categoria==0){
      $this->form_validation->set_message('select_validate', 'Seleccione una categoria';
      return false;
     }else{
      return true;
     }
    }

    public function validar_imagen($imagen)
    {
     //Verifica que se ingreso una imagen
     $nombre_imagen = $_FILES['imagen']['name'];//Obtene el nombre de la imagen
     if(empty($nombre_imagen))
     {
      $this->form_validation->set_message('validar_imagen','Seleccionar una imagen');
      return false;
     }else{
      return true;
     }
    }

    public function guardar_libro()
    {
     $config['upload_path']='.upload/imagenes_libro';
     $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
     $config['remove_spaces'] = TRUE;
     $config['max_size']='1024';

     $this->load->library('upload', $config);

     if(!~this->upload->do_upload('imagen'))
     {
      echo "<script type=text/javascript\>alert('No se pudo cargar el archivo')</script>";
     } else {
      $data = array(
      'libro_imagen'=> $FILES['imagen']['name'],
      'libro_categoria'=> $this->input->post('categoria'),
      'libro_estado'=>1);
     $this->load->model('libro_model');
     $this->libro_model->guardar_libro($data);
     redirect('libro_controlador/form_cargar_libro');
    }
   }
  }
?>
