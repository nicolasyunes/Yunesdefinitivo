<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Nuevo producto</title>
</head>
<main class="bg-light h-100">
    
<form class="p-5" enctype="multipart/form-data" method="post" action="<?=site_url('/guardarProducto') ?>">
      <div class="form-group">
        <label for="nombre">Nombre del producto</label>
        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto">
      </div>

      <div class="form-group">
        <label for="precio">Precio unitario</label>
        <input type="number" class="form-control" id="precio_unitario" name="precio_unitario">
      </div>

      <div class="form-group">
        <label for="imagen">Imagen del producto</label>
        <input type="file" name="imagen_producto" id="imagen_producto" accept="image/*" required>

      </div>

      <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock">
      </div>

      <button type="submit" class="btn btn-primary my-3" >Guardar</button>
    </form>
</main>
</html>