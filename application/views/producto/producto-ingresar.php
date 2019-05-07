<div class="container jumbotron mt-3">
	<?php echo validation_errors(); ?>
	<?php echo form_open('producto_controlador/form_cargar_producto',['role'=>'form']); ?>
	<!-- Para adjuntar archivos form_open_multipart 
	entype: es necesario inclurila en el envio de archivos adjuntos:enctype="multipart/form_data"-->
	<?php
		$lista['0']='Seleccione categoria';
		foreach ($categorias as $row){
			$lista[$row->categoria_id]=$row->categoria_desc;
		}
		echo form_dropdown('categoria', $lista,'0','class="form-control"');
	?>
	<?php echo form_input(['name'=>'imagen','id'=>'imagen', 'type'=>'file','value'=>setvalue('imagen')]); ?>
