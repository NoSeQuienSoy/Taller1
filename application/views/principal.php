<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Titulo -->
    <title>Primera Parte</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap Local-->
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css');?>">
  </head>
  <body>
    <!-- Practico 2 -->
    <h1>Esto es un encabezado h1</h1>
    <h2>Esto es un encabezado h2</h2>
    <h4>Esto es un encabezado h4</h4>
    <div class="encabezado">
      <header>
        <h1>Mi sitio web</h6>
        <nav>Barra de navegacion</nav>
      </header>
      <nav>
        <ul>
          <a href=”https://codeigniter.com/”>CodeIgniter </a>
        </ul>
      </nav>
      <section>
        <article>
          <p><?php echo base_url('assets/css/bootstrap.min.css');?></p>
        </article>
      </section>
    </div>
    <!-- Practico 2 -->
    <img src="<?php echo base_url('assets/img/946932a9e73f464150c327a2c9d48b98.jpg');?>" alt="meme" width="128" height="128" />
    <hr>
    <ul>
      <li>elemento 1</li>
      <li>elemento 2</li>
      <ul>
        <li><a href="<?php echo base_url('application/controllers/Welcome');?>"><span style="color:blue;font-weight:bold">elemento 2.1</span></a></li>
        <li>elemento 2.2</li>
      </ul>
      <li>elemento 3</li>
    </ul>
    <hr>
    <!-- br es un tag para cortar un parrafo -->
    <!-- div divisor y muy util en boostrap -->
    <!-- hr es un divisor (una linea negra por toda la pantalla) -->
    <!-- span cambia la fuente de la letra -->
    <!-- Ejercicio 2 -->
    <footer>
      <div class="row">
        <div class="col">Hola </div>
        <div class="col">Que </div>
        <div class="col">Haces  </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>