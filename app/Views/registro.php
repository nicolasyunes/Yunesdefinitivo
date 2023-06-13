<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    
    <title>Formulario de Registro</title>
</head>
<body class="bg-light">
    <div class="container text-center my-5">
        <h2>Registrarse</h2>
    </div>
    
    <form class="form-container container col-6" method="post" action="<?=site_url('/registrar') ?>">
        <label class="form-label col-6 " for="nombre">Nombre:</label>
        <input class="form-control col-6" type="text" value="<?= old('nombre');?>"  id="nombre" name="nombre" required><br>

        <label class="form-label" for="email">Email:</label>
        <input class="form-control" type="email" id="email" name="email" required><br>

        <label class="form-label" for="password">Contraseña:</label>
        <input class="form-control" type="password" id="password"  name="password" required><br>

       
        <input type="submit" class="btn btn-primary mb-4" value="Registrarse">
        <?php
            if(session('mensaje')){?>
                <div class="alert alert-danger">
                <?php 
                   echo session('mensaje');
                
                ?>
                </div>
            <?php } ?>
    </form>
</body>
</html>