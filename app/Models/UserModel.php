<?php
 namespace App\Models;

 use CodeIgniter\Model;
 
 class UserModel extends Model
 {
   protected $table = 'usuarios';
   protected $allowedFields = ['nombre','email', 'password','activo','id_perfil'];
   protected $primaryKey = 'id';
 }

?>