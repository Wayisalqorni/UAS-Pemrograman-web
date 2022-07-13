<?php 
 
namespace App\Models; 
 
use CodeIgniter\Model; 
 
class WargalModel extends Model 
{     
    protected $table = 'Warga';     
    protected $primaryKey = 'id';     
    protected $useAutoIncrement = true;     
    protected $allowedFields = ['nik', 'nama', 'kelamin', 'alamat', 'no_rumah', 'status', 'created_at', 'updated_at']; 
 
}