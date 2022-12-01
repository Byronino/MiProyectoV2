<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SignupController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'type'          => 'required',
           
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'type'     => $this->request->getVar('type'),
                'photo'    => 1,
            ];
            $userModel->save($data);
            $email = \Config\Services::email();
            $email->setTo( $this->request->getVar('email'));
            $email->setFrom('byron.cortes@alumnos.upla.cl', 'Confirm Registration');
            
            $email->setSubject("Bienvenido a la libreria");
            $email->setMessage("<!doctype html>".
            "<html lang='en'>".
              "<head>".
                
                "<meta charset='utf-8'>".
                "<meta name='viewport' content='width=device-width, initial-scale=1'>".
            
                
                "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>".
            
                "<title>Ladder</title>".
              "</head>".
              "<body>".
                "<div class container>".
                    "<div class='container' style='background-color:rgb(255, 255, 255)' >".
"<div class='row'>".
"<div class='col-2'>".
"</div>".
"<div class='col-1'>".
"<img src='https://img.freepik.com/vector-premium/ilustracion-logo-libreria-aislado-blanco_101884-1489.jpg'width='150' height='150'>".
"</div>".
"<div class='col-3'>".
"<h1 style='color:rgba(255, 255, 255, 0.938)'></h1>".
"</div>".
"<div class='col-6'>".
"<br><br><h3 style='color:rgba(0, 0, 0, 0.938)'>Hola, estimado usuario</h3>".
"</div>".

"</div>".
"</div>".
"<div class='container' style='background-color:rgb(255, 255, 255)' >".
"<div class='row'>".
"<div class='col-3'>".
"</div>".
"<div class='col-6'>".
"<img src='https://www.fotosdememes.com/wp-content/uploads/2021/09/Bienvenidos-al-Himalaya.jpg'width='100%' height='300' style='border-radius:1rem'>".
"</div>".
"<div class='col-6'>".
"</div>".
"</div>".
"</div>".
"<div class='container' style='background-color:rgb(255, 255, 255)' >".
"<div class='row'>".
"<div class='col-4'>".
"</div>".
"<div class='col-5'>".
"<br><br><h2 style='color:rgba(44, 74, 139, 0.938)'>Ya tienes tu cuenta de la librería!</h2>".
"</div>".
"<div class='col-6'>".
"</div>".
"</div>".
"</div>".
"<div class='container' style='background-color:rgb(255, 255, 255)' >".
"<div class='row'>".
"<div class='col-5'>".
"</div>".
"<div class='col-5'>".
"<br><button type='button' class='btn btn-info'><h2 style='color:rgba(255, 255, 255, 0.938)'>Acceder</h2></button>".
"</div>".
"<div class='col-6'>".
"</div>".
"</div>".
"</div>".
"</div>".
"</body>".
"</html>");
            if ($email->send()) 
            {
                echo 'Email successfully sent';
            } 
            else 
            {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }
            return redirect()->to('/signin');
        }else{
            
            $data['validation'] = $this->validator;

            echo view('signup', $data);
        }

          
    }
  
}