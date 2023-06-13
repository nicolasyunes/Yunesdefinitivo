<h4>Detalles de la factura <?=$facturaUsuario['id']  ?> </h4>
<h4>Fecha <?=$facturaUsuario['fecha']  ?> </h4>

<div class="card">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col">ID Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio unitario</th>
     
    </tr>
  </thead>
  <tbody>
 
    <?php foreach($detalleFactura as $key=>$value):?>
    <tr>
      <th><?=$value['id'] ?></th>
       
     
      <th>
    <?php foreach($productos as $prod):?>
        
                <?php if($prod['id'] ==  $value['producto_id']){?>
                    
                    <?= $prod['nombre_producto']?>
                
                
                <?php }?>
            <?php endforeach;?>

      </th>
      <th><?=$value['cantidad'] ?></th>
      <th>$ <?=$value['precio'] ?></th>
      
    </tr>
    <?php endforeach;?>
    
  </tbody>
</table>
<h4>Total Factura $ <?=$facturaUsuario['total_venta'] ?></h4>

<a href="ventas">Volver</a>
</div>