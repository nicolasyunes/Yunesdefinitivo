<head>

    <link href="assets/catalogo.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">



</head>




<section class="container-cards container-fluid ">
<?php $session=session(); ?>
<?php helper(['form','url','cart']); ?>
        <?php $session=session(); ?>
    <?php foreach ($productos as $prod): ?>
        <div class="card  item">
            <?php
            echo form_open('agregarCarrito');
            echo form_hidden('id', $prod['id']);
            echo form_hidden('price', $prod['precio_unitario']);
            echo form_hidden('name', $prod['nombre_producto']);

            ?>
           
           <img class="img-responsive " src="<?= base_url() ?>assets/img/productos/<?= $prod['imagen_producto']; ?>">

            <div class="card-body">
                <h5 class="card-title">
                    <?= $prod['nombre_producto']; ?>
                </h5>
                <p class="card-text">
                    <?= $prod['precio_unitario']; ?>
                </p>
                <?php if (session()->get('logged_in')): ?>

                    <button class="btn btn-primary btn-sm" type="submit">Agregar</button>
                <?php  endif; ?>
            </div>
            <?php echo form_close(); ?>
        </div>




    <?php endforeach; ?>

        

</section>