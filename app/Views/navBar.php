<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/navBar.css">

    <title>Nav</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-bar">
        <div class="container mx-4">
            <a class="navbar-brand" href="#!">
                <img src="assets/img/logoGlobal.png" width="100%" alt="" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="my-2 collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item"><a class="nav-link " aria-current="page"
                            href="<?php echo base_url('/') ?>">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('quienesSomos') ?>">Quienes
                            somos</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="<?php echo base_url('comercializacion') ?>">Comercializacion</a></li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('contacto') ?>">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('terminosyuso') ?>">Términos y
                            Usos</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('catalogo') ?>">Catalogo</a></li>

                    <?php $session = session(); ?>
                    <?php if (session()->get('isAdmin')): ?>
    
                                <li class="nav-item"><a class="nav-link"
                                href="<?php echo base_url('admin') ?>">ADMIN</a></li>
                    <?php endif; ?>
                    <?php if (session()->get('logged_in')): ?>
                        <!-- Opciones del navbar para usuarios autenticados -->

                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('carrito') ?>">Carrito</a></li>
                        

                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('logout') ?>">Logout</a></li>
                    <?php else: ?>
                        <!-- Opciones del navbar para usuarios no autenticados -->
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login') ?>">Iniciar sesion</a>
                        </li>
                        <li class="nav-item"><a class="nav-link"
                                href="<?php echo base_url('registroForm') ?>">Registrarse</a></li>

                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </nav>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>