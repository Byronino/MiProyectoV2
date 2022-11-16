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
            ];
            $userModel->save($data);
            return redirect()->to('/signin');
        }else{
            $email = \Config\Services::email();
            $email->setTo( $this->request->getVar('email'));
            $email->setFrom('byron.cortes@alumnos.upla.cl', 'Confirm Registration');
            
            $email->setSubject("asunto");
            $email->setMessage("mensaje de prueba");
            if ($email->send()) 
            {
                echo 'Email successfully sent';
            } 
            else 
            {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }
            $data['validation'] = $this->validator;

            echo view('signup', $data);
        }

          
    }
  
}