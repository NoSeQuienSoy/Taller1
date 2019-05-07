<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/icons/leaf2.svg'); ?>" height="20" width="20"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ejemplo_controlador');?>">Inicio </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('contacto');?>"><img src="<?php echo base_url('assets/icons/phone-call.svg'); ?>" height="15" width="15"> Contacto</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url('tienda');?>"><img src="<?php echo base_url('assets/icons/shopping-bag.svg'); ?>" height="15" width="15"> Tienda <span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<div class="nav-item dropdown">
			<button class="btn btn-success dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Ingresar
			</button>
			<div class="dropdown-menu">
				<form class="px-4 py-3">
					<div class="form-group">
						<label for="exampleDropdownFormEmail1">Email</label>
						<input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@ejemplo.com">
					</div>
					<div class="form-group">
						<label for="exampleDropdownFormPassword1">Contraseña</label>
						<input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="dropdownCheck">
						<label class="form-check-label" for="dropdownCheck">
							Recuerdame
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Ingresar</button>
				</form>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">¿Olvidaste tu contraseña?</a>
			</div>
		</div>
		<a href="<?php echo base_url('registrarse');?>" class="btn btn-primary" role="button" id="regis"><img src="<?php echo base_url('assets/icons/enter.svg'); ?>" height="15" width="15"> Registrarse</a>
		
	</div>
</nav>
<!-- Fin del NavBar -->