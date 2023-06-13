<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>ADMIN</title>
</head>
<main class="bg-light h-100 container p-2 d-flex flex-wrap justify-content-center">
<div class="card m-4 col-4">
  <h5 class="card-header">Gestión de Usuarios</h5>
  <div class="card-body">

    <p class="card-text">Alta baja modificación de usuarios</p>
    <a href="<?php echo base_url('usuarios')?>" class="btn btn-primary">Ver detalle</a>
  </div>
</div>
<div class="card m-4 col-4">
  <h5 class="card-header">Gestión de  Productos</h5>
  <div class="card-body">
  
    <p class="card-text">Cargar nuevos productos, actualizar stock</p>
    <p class="card-text">Eliminar, modificar y cambiar detalles de productos</p>

    <a href="<?php echo base_url('listaProductosAdmin')?>" class="btn btn-primary">Ver detalle</a>
  </div>
</div>
<div class="card m-4 col-4">
  <h5 class="card-header">Consultas</h5>
  <div class="card-body">
    <h5 class="card-title">Consultas y contacto</h5>
    <p class="card-text">Listado de nuevas consultas, historial de consultas</p>
    <a href="<?php echo base_url('consultas')?>" class="btn btn-primary">Ver detalle</a>
  </div>
</div>

<div class="card m-4 col-4">
  <h5 class="card-header">Ventas</h5>
  <div class="card-body">
    <h5 class="card-title">Consultas y ventas realizadas</h5>
    <p class="card-text">Listado de nuevas ventas - historial de ventas</p>
    <a href="<?php echo base_url('ventas')?>" class="btn btn-primary">Ver detalle</a>
  </div>
</div>
</main>
</html>