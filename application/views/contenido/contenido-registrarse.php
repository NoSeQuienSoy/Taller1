<div class="container jumbotron mt-3">
	<?php echo validation_errors(); ?>
	<?php echo form_open('cliente_controlador/registrar_cliente',['role'=>'form']); ?>
	<!-- Para adjuntar archivos form_open_multipart
	entype: es necesario inclurila en el envio de archivos adjuntos:enctype="multipart/form_data"-->
	<div class="form-row">
		<div class="col-md-4">
			<img src="<?php echo base_url('assets/img/img-user.png'); ?>" alt="avatar" class="img-thumbnail mb-3 mx-auto d-block" width="100" height="100">
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="customFileLang" lang="es">

				<label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
			</div>
		</div>
		<div class="col-md-8">
			<!-- <div class="form-group">
											<label for="exampleFormControlInput1">Nombre de usuario</label>
											<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alias">
			</div>
			<div class="invalid-feedback">
											Please choose a username.
			</div> -->
			<label for="validationCustomUsername">Nombre y apellido</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupPrepend">@</span>
				</div>
				<?php echo form_input(['name'=>'nomyape','id'=>'nomyape','class'=>'form-control','placeholder'=>'Ingrese su nombre y apellido','autofocus'=>'autofocus','aria-describedby'=>'inputGroupPrepend','value'=>set_value('nomyape')]); ?>
				<!-- <input type="text" class="form-control" id="validationCustomUsername" placeholder="Alias" aria-describedby="inputGroupPrepend" required> -->
				<div class="invalid-feedback">
					Please choose a username.
				</div>
			</div>
			<label class="mt-2">Género</label>
			<div>
				<?php echo form_radio('genero', 'H', FALSE); ?>
				<label class="">Hombre</label>
			</div>
			<div>
				<?php echo form_radio('genero', 'F', FALSE); ?>
				<label class="">Mujer</label>
			</div>
			<div>
				<?php echo form_radio('genero', 'O', FALSE); ?>
				<label class="">Otro</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="validationDefault02">Dirección de correo</label>
		<?php echo form_input(['name'=>'email','id'=>'email','type'=>'email','class'=>'form-control','placeholder'=>'nombre@ejemplo.com','aria-describedby'=>'inputGroupPrepend','value'=>set_value('email')]); ?><!--
		<input type="email" class="form-control" id="validationDefault02" aria-describedby="inputGroupPrepend" placeholder="nombre@ejemplo.com" required> -->
	</div>
	<div class="form-group">
		<label for="validationDefault03">Contraseña</label>
		<?php echo form_input(['name'=>'contrasenia','id'=>'contrasenia','type'=>'password','class'=>'form-control','placeholder'=>'Ingrese contraseña','aria-describedby'=>'inputGroupPrepend','value'=>set_value('contrasenia')]); ?><!--
		<input type="password" id="validationDefault03" class="form-control w-50" aria-describedby="passwordHelpBlock" placeholder="Contraseña" required> -->
		<small id="passwordHelpBlock" class="form-text text-muted">
		Su contraseña debe tener de 8 a 20 caracteres de largo contener letras, numeros y no debe contener espacios, caracteres especiales o emojis.
		</small>
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">Repetir contraseña</label>
		<?php echo form_input(['name'=>'contraconf','id'=>'contraconf','type'=>'password','class'=>'form-control','placeholder'=>'Repita su contraseña','aria-describedby'=>'inputGroupPrepend','value'=>set_value('contraconf')]); ?><!--
		<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Repetir contraseña" required> -->
	</div>
	<div class="custom-control custom-checkbox mb-3">
		<input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
		<label class="custom-control-label" for="customControlValidation1">Acepto las condiciones de uso y privacidad</label>
		<div class="invalid-feedback">Example invalid feedback text</div>
	</div>
	<?php echo form_submit('Registrarse','Registrarse',"class='btn btn-primary'"); ?>
	<!-- <input class="btn btn-primary" type="submit" value="Registrarse"> -->
	<?php echo form_close();?>
</div>
