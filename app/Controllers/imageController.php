<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\autorModel;
use App\Models\libroModel;
use App\Models\generoModel;
use App\Models\editorialModel;
class imageController extends Controller
{

    public function image($image=null)
    {
        if ($image) {
            
            $path = 'ProyectoTangananaEdition/images/' . $image;
        
            $finfo = new \finfo(FILEINFO_MIME);
            
            $type = $finfo->file($path);
            
            header("Content-Type: $type");
            header("Content-Length: " . filesize($path));
            
            readfile($path);
            exit;
        }
    }
    
}

