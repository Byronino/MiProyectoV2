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
            'nombreCompleto'=> 'required',
           
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'type'     => $this->request->getVar('type'),
                'nombreCompleto' => $this->request->getVar('nombreCompleto'),
                'photo'    => 'default.jpg',
            ];
            $userModel->save($data);
            $email = \Config\Services::email();
            $email->setTo( $this->request->getVar('email'));
            $email->setFrom('byron.cortes@alumnos.upla.cl', 'Confirm Registration');
            
            $email->setSubject("Bienvenido a la libreria");
            $email->setMessage(
                "<!DOCTYPE html>".
                "<html lang='es'>".
                "<head>".
                "<meta charset='utf-8'>".
                "<title>holi</title>".
                "</head>".
                "<body style='background-color: black '>".
                "<table style='max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;'>".
                "<tr>".
                "<td style='background-color: #ecf0f1; text-align: left; padding: 0'>".
                "<a href='https://www.facebook.com/PokemonTrujillo/'>".
                "<img width='20%' style='display:block; margin: 1.5% 3%' src=''>".
                "</a>".
                "</td>".
                "</tr>".
                "<tr>".
                "<td style='padding: 0'>".
                "<img style='padding: 0; display: block' src='https://www.fotosdememes.com/wp-content/uploads/2021/09/Bienvenidos-al-Himalaya.jpg' width='100%'>".
                "</td>".
                "</tr>".
                "<tr>".
                "<td style='background-color: #ecf0f1'>".
                "<div style='color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif'>".
                "<h2 style='color: #e67e22; margin: 0 0 7px'>Hola Lector!</h2>".
                "<p style='margin: 2px; font-size: 15px'>".
                "<br><br><h2 style='color:rgba(44, 74, 139, 0.938)'>Ya tienes tu cuenta de la librería!</h2>".
                "<ul style='font-size: 15px;  margin: 10px 0'>".
                "<center><img src='https://img.freepik.com/vector-premium/ilustracion-logo-libreria-aislado-blanco_101884-1489.jpg'width='200' height='150'></center>".
                "</ul>".
                "<div style='width: 100%;margin:20px 0; display: inline-block;text-align: center'>".
                "<br><br><h2 style='color:rgba(44, 74, 139, 0.938)'>Ahora disfruta de tu lectura y no te rompas una neurona si nos sabes como hacerlo</h2>".
                "<img src='https://i.kym-cdn.com/photos/images/facebook/001/261/628/47b.jpg'width='100%' height='300' style='border-radius:1rem'>".
                "</div>".
                "<div style='width: 100%; text-align: center'>".
                "<a style='text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db'>Ir a la página</a>".
                "</div>".
                "</div>".
                "</td>".
                "</tr>".
                "</table>".
                "</body>".
                "</html>"
            );
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