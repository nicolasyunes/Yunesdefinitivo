<?php
 namespace App\Models;

 use CodeIgniter\Model;
 
 class DetalleModel extends Model
 {
   protected $table = 'detalle';
  protected $primaryKey = 'id';
 protected $allowedFields = [ 'venta_id','producto_id','cantidad','precio'];
   
 }


 

?>