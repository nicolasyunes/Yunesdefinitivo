<?php
 namespace App\Models;

 use CodeIgniter\Model;
 
 class CabeceraModel extends Model
 {
   protected $table = 'cabecera';
  protected $primaryKey = 'id';
 protected $allowedFields = ['fecha', 'usuario_id','total_venta'];
   
 }


 

?>