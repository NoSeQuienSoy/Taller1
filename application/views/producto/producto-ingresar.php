<div class="container jumbotron mt-3">
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('producto_controlador/form_cargar_producto',['role'=>'form']); ?>
	<!-- Para adjuntar archivos form_open_multipart
	entype: es necesario inclurila en el envio de archivos adjuntos:enctype="multipart/form_data"-->
	<label>Nombre de producto </label>
	<?php echo form_input(['name'=>'nombre','id'=>'nombre','class'=>'form-control','placeholder'=>'Nombre de planta', 'value'=>set_value('nombre')]); ?>
	<label>Nombre cientifico </label>
	<?php echo form_input(['name'=>'nomcientifico','id'=>'nomcientifico','class'=>'form-control','placeholder'=>'Nombre cientifico','value'=>set_value('nomcientifico')]); ?>
	<label>Stock</label>
	<?php echo form_input(['name'=>'stock','id'=>'stock','class'=>'form-control','placeholder'=>'Cantidad de producto','value'=>set_value('stock')]); ?>
	<label>Imagen</label>
	<?php echo form_input(['name'=>'imagen','id'=>'imagen', 'type'=>'file','value'=>set_value('imagen')]); ?>
	<label>Precio</label>
	<?php echo form_input(['name'=>'precio','id'=>'precio','class'=>'form-control', 'placeholder'=>'Precio del producto','value'=>set_value('precio')]); ?>
</div>
