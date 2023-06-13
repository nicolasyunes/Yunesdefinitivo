<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <div class="container bg-light  ">
        <h2>Lista de productos</h2>
        <table class="table container col bg-light ">
            <a type="button" class="btn btn-primary" href="<?= base_url('/agregarProducto')   ?> ">Agregar Producto</a>
        <thead class="thead-dark" >
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>



            </tr>
        </thead>
        <tbody>
    
            <?php foreach($productos as $prod):?>
                <?php if($prod['activo']==1):?>
                <tr >
          
                <td><?= $prod['id'];?></td>
                <td><?= $prod['nombre_producto'];?></td>
                <td><?= $prod['precio_unitario'];?></td>
                <td><?= $prod['stock'];?></td>

                <td><img class="img-thumbnail" src="<?=base_url()?>assets/img/productos/<?=$prod['imagen_producto'];  ?>" width="100" alt=""></td>
                <td>
            <a href="<?=base_url('borrar/'.$prod['id']);?>" type="button" class="btn btn-outline-danger  m-2">Borrar</button>
            <a href="<?=base_url('modificar/'.$prod['id']);?>" type="button" class="btn  btn-outline-success m-2 ">Editar</button>
            </td>

                </tr>

                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
</table>

    </div>
   

   
  
</body>
</html>