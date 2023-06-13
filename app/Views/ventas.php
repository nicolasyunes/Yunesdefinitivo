<div class="container bg-light">
       <h2>VENTAS REALIZADAS</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">N°Factura</th>
      <th scope="col">Email</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha de emision</th>
      <th scope="col">Monto Total</th>
      <th scope="col">Ver detalle</th>
      
    </tr>
  </thead>
  <tbody>



    <?php foreach($factura as $key=>$detalleValue):?>
    <tr>
      <td><?=$detalleValue['id']  ?></td>
      
      <td>
          <?php foreach($usuario as $key=>$usuarioValue):?>
            

              <?php if($usuarioValue['id'] == $detalleValue['usuario_id']){?>
                
                <?= $usuarioValue['id']?>
                
              <?php }?>
          <?php endforeach?>
      </td>
      <td>
        <?php foreach($usuario as $key=>$usuarioValue):?>
          
                <?php if($usuarioValue['id']==$detalleValue['usuario_id']){?>
                 
                    <?= $usuarioValue['nombre']?>
                  
                  
                <?php }?>
            <?php endforeach?>
      </td>
      <td>
          <?=$detalleValue['fecha']?>
      </td>
      <td>$
      <?=$detalleValue['total_venta']?>
      </td>
      <td>
        <a href="<?=base_url('detalleFactura'.$detalleValue['id']) ?>">Ver Detalle</a>
      </td>
      
       
    </tr>
    <?php endforeach ?>
    
  </tbody>
</table>
    </div>