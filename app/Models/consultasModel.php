<?php 
namespace App\Models;

use CodeIgniter\Model;

class consultasModel extends Model{
    protected $table = 'consultas';
    protected $primaryKey='id';
    protected $allowedFields=['nombre','apellido','email','mensaje'];
}