<?php
 namespace App\Models;

 use CodeIgniter\Model;
 
 class ProductModel extends Model
 {
   protected $table = 'productos';
  protected $primaryKey = 'id';
 protected $allowedFields = ['nombre_producto', 'precio_unitario','stock','imagen_producto','activo'];
   
 }


 

?>