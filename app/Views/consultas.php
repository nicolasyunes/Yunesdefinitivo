<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    
    <title>consultas </title>
</head>
<body>
    <div class="container-fluid">
       
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
       
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($consultas as $prod):?>
       
        <tr >
  
        <td><?= $prod['id'];?></td>
        <td><?= $prod['nombre'];?></td>
        <td><?= $prod['apellido'];?></td>
        <td><?= $prod['mensaje'];?></td>

       
        <td>
        <a href="<?=base_url('borrar/'.$prod['id']);?>" type="button" class="btn btn-outline-danger  m-2">Borrar</button>
      
    </td>

        </tr>

       
    <?php endforeach; ?>
</table>
    </div>
</body>
</html>