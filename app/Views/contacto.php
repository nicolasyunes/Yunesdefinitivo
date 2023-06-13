<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/contacto.css">
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <title></title>
</head>

<body>
  <section class="img-responsive p-0 m-0 ">
    <img src="assets/img/contact.jpeg" alt="">
  </section>
  <section class="container-info mt-5 p-5 d-flex row">
    <div class="col-lg-3 col-sm-12 d-flex d-column ">
      <div class="icono">
        <i class="fa-solid fa-address-card p-2"> </i>

      </div>
      <div class="titulo mb-3">
        Información
      </div>
      <div class="descripcion">
        <p>Razón Social: GLOBAL3D</p>
        <p>Representante Legal: NICOLAS YUNES</p>

      </div>
    </div>
    <div class="col-lg-3 col-sm-12  d-flex d-column div ">
      <div class="icono">
        <i class="fa-solid fa-phone"></i>
      </div>
      <div class="titulo mb-3">
        tel
      </div>
      <div class="descripcion">
        <p>+543794012194</p>
        <p>+543794758303</p>
      </div>

    </div>
    <div class="col-lg-3 col-sm-12  d-flex d-column div">
      <div class="icono">
        <i class="fa-sharp fa-solid fa-location-dot"></i>
      </div>
      <div class="titulo mb-3">
        Ubicación
      </div>
      <div class="descripcion">
        <p>Miguel del Corro 5210
        <p>Corrientes, Argentina</p>
        </p>

      </div>

    </div>

  </section>
  <section class="form-container my-0">
    <div class="col1   p-3">
      <div class="titulo">
        <h2>Contacto</h2>
      </div>

      <div class="container-form">
        <?php $session = session() ?>
        <?php if ($session): ?>
          <?php $rol = 'usuario' ?>
          <form action="<?= base_url('agregar') ?>" method="post">
            <?php $session = session() ?>





            <div class="mb-2">
              <label for="nombre">Nombre</label>
              <input type="text" value="<?= $session->nombre ?>" class="form-control" name="nombre">
              <div class="text-danger">
                <?= session('errors.nombre') ?>
              </div>
            </div>

            <div class="mb-2">
              <label for="email">Email</label>
              <input type="text" value="<?= $session->email ?>" class="form-control" name="email">
              <div class="text-danger">
              
              </div>
            </div>
            <div class="mb-2">
              <label id="mensaje_label" for="mensaje" class="required"></label>
              <textarea id="mensaje" name="mensaje" rows="5" class="form-control"></textarea>
              <div class="text-danger">
                <?= session('errors.mensaje') ?>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>

          </form>
        <?php else: ?>
          <?php $rol = 'visitante' ?>
          <form action="<?= base_url('agregar') ?>" method="post">


            <div class="mb-2">
              <label for="nombre">nombre</label>
              <input type="text" class="form-control" name="nombre">
              <div class="text-danger">
                <?= session('errors.nombre') ?>
              </div>
            </div>

            <div class="mb-2">
              <label for="email">email</label>
              <input type="text" class="form-control" name="email">
              <div class="text-danger">
                <?= session('errors.email') ?>
              </div>
            </div>
            <div class="mb-2">
              <label id="mensaje_label" for="mensaje" class="required"></label>
              <textarea id="mensaje" name="mensaje" rows="5" class="form-control"></textarea>
              <div class="text-danger">
                <?= session('errors.mensaje') ?>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>

          </form>
        <?php endif ?>
      </div>
    </div>


  </section>
  <section class="redes container">
    <div class="titulo-redes">Seguinos en nuestras redes</div>
    <div class="items-redes">
      <div>
        <a href="https://api.whatsapp.com/send/?phone=543794012194&text&type=phone_number&app_absent=0">
          <i class="fa-brands fa-square-whatsapp"></i>
        </a>

      </div>

      <div>
        <a href="https://www.facebook.com/nicolas.yunes1/">
          <i class="fa-brands fa-facebook"></i>
        </a>
      </div>

      <div>
        <a href="https://www.instagram.com/global3d_corrientes/">
          <i class="fa-brands fa-square-instagram"></i>
        </a>

      </div>

      <div>
        <a href="https://twitter.com/">
          <i class="fa-brands fa-square-twitter"></i>
        </a>
      </div>
    </div>


  </section>
  <section class="mapa m-0  p-0">
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="100%" height="100%" id="gmap_canvas"
          src="https://maps.google.com/maps?q=corrientes miguel del corro 5210&t=&z=10&ie=UTF8&iwloc=&output=embed"
          frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>

        <br>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            height: 100%;
            width: 100%;
          }
        </style>
        <a href="https://embedgooglemap.2yu.co/"></a>
        <style>
          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            filter: saturate(40%);
            height: 500px;
            width: 100%;
          }
        </style>
      </div>
    </div>
  </section>

</body>

</html>