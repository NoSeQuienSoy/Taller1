<?php
 class Usuario_modelo extends CI_Model
 {
   function __construct()
   {
     parent::__construct();
   }

   public function guardar_usuario($data)
   {
     $this->db->insert('usuario',$data)
   }
 }
 ?>
