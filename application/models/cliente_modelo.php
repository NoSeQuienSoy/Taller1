<?php 
/**
  *
  */
 class Cliente_modelo extends CI_Model
 {

 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function guardar_cliente($data)
 	{
 		$this->db->insert('cliente',$data);
 	}

 	public function guardar_usuario($data)
 	{
 		$this->db->insert('usuario',$data);
 	}

	// public function select_categoria(){
		// $query = this->db->get('categoria_producto');
		// return $query->result();
	// }

 }
?>
