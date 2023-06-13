<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <title></title>
</head>
<main>
    <div class="container m-2 bg-light text-lg-center">
        <h2>Carrito</h2>
        <?php
        $session = session();
        $cart = \Config\Services::cart();
        $cart = $cart->contents();

         
        ?>
    



        <tbody>

           
                
                <table class="table table-light table-bordered">

                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                           
                        
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <!--    leer registros-->

                        <?php foreach ($cart as $key=> $item): ?>

                            <tr>
                               
                            <td>
                        <?= $item['id']; ?>
                    </td>
                    <td>
                        <?= $item['name']; ?>
                    </td>
                    <td>
                      $  <?= $item['price']; ?>
                    </td>
                    <td>
                        <?= $item['qty']; ?>
                    </td>


                    <td>
                    <a href="<?= base_url('eliminarElemento'.$item['rowid'])?>" class="btn btn-sm btn-danger">Eliminar</a>

                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
           
        </tbody>
        <a href="<?= base_url('eliminarTodos')?>" class="btn btn-sm btn-danger m-2">Eliminar todos</a>
        <a href="<?= base_url('confirmarCompra')?>" class="btn btn-sm btn-success m-2">Confirmar compra</a>
        <a href="<?= base_url('catalogo')?>" class="btn btn-sm btn-primary m-2">Seguir  comprando</a>

    </div>




</main>

</html>