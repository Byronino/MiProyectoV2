<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\autorModel;
use App\Models\libroModel;
use App\Models\generoModel;
use App\Models\editorialModel;
class ProfileController extends Controller
{
    /*public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }*/

    public function index()
    {
        $db = \Config\Database::connect();
        $objetito = new autorModel($db);
        $users = $objetito->findAll();
        $data['listaAutor']=$users;
        //print_r($users);
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('paginas/newindex',$data);
        echo view('paginas/footer');
        
    }
}