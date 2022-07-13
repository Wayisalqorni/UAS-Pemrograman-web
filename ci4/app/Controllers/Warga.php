<?php 
 
namespace App\Controllers; 
 
use App\Models\WargalModel; 
 
class Warga extends BaseController 
{     
    public function index()      
    {
        $title = 'Daftar Warga';         
        $model = new WargalModel();         
        $Warga = $model->findAll();         
        return view('Warga/index', compact('Warga', 'title'));     
    } 
} 