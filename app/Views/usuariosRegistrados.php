<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    
    <title>Usuarios Registrados</title>
</head>
<body>
    <div class="container-fluid">
       
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Activo</th>
      <th scope="col">Rol</th>
      <th scope="col">Activar/desactivar</th>
    </tr>
  </thead>
  <tbody>
  <?php if($usuarios):?>
    <?php foreach($usuarios as $usuario):?>
    <tr>
      <th scope="row"><?=$usuario['id'] ?></th>
      <td><?=$usuario['nombre'] ?></td>

      <td><?=$usuario['email'] ?></td>
      <td><?=$usuario['activo'] ?></td>
      <td><?=$usuario['id_perfil'] ?></td>
        
      
      <?php if ($usuario['activo'] =="1"): ?>
      <td> <a href="<?=base_url('desactivarUsuario'.$usuario['id'])?>" class="btn btn-danger" type="button">Desactivar Usuario</a>
          <?php else: ?>
          <td> <a href="<?=base_url('activarUsuario'.$usuario['id'])?>" class="btn btn-primary" type="button">Activar Usuario</a>
        </td>
       <?php endif ?>
    </tr>
    <?php endforeach ?>
    <?php endif ?>
  </tbody>
</table>
    </div>
</body>
</html>