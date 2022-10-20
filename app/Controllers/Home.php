<?php



namespace App\Controllers;
use App\Models\autorModel;
use App\Models\libroModel;
use App\Models\generoModel;
use App\Models\editorialModel;


class Home extends BaseController
{

    /*public function index()
    {
        $db = \Config\Database::connect();
        $objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);
        $users = $objetito->findAll();
        $users2= $objetito2->findAll();
        $users3= $objetito3->findAll();
        $users4= $objetito4->findAll();
        //$users = $objetito->query("SELECT * FROM libro");
        $data['listaLibro']=$users;
        $data['listaAutor']=$users2;
        $data['listaEditorial']=$users3;
        $data['listaGenero']=$users4;
        //print_r($data);
        return view('paginas/crud',$data);
        
    }*/

    /*public function index()
    {
        $db = \Config\Database::connect();
        $objetito = new autorModel($db);
        $users = $objetito->findAll();
        $data['listaAutor']=$users;
        //print_r($users);
        return view('welcome_message',$data);
        
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

    public function saludos(){
        $db = \Config\Database::connect();
        $objetito = new autorModel($db);

        //$data = [
        //    'nombreAutor' => 'darth vader',
        //];
        
        //$objetito->insert($data);



        $users = $objetito->findAll();
        $data['listaAutor']=$users;
        //print_r($users);
        
        return view('paginas/practicanding',$data);
    }

    public function gatitos()
    {
        $db = \Config\Database::connect();
        $objetito = new autorModel($db);
        $users = $objetito->findAll();
        $data['listaAutor']=$users;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('paginas/oops',$data);
        echo view('paginas/footer');
        
    }

    

    public function ingreso_libro()
    {
        $db = \Config\Database::connect();
        $objetito = new libroModel($db);
        $users = $objetito->findAll();
        $data['listaAutor']=$users;
        //print_r($users);
        return view('paginas/ingreso_libro',$data);
        
    }

    public function insertar_libro(){
        $db = \Config\Database::connect();
        $model = new libroModel($db);
        $request = \Config\Services::request();
        $data= array(
            "nombreLibro" => $this->request->getPost('nombreLibro'),
            "autorID" => $this->request->getPost('autorID'),
            "generoLibroID" => $this->request->getPost('generoLibroID'),
            "editorialID" => $this->request->getPost('editorialID'),
            "importancia" => $this->request->getPost('importancia'),
        );
        return view('paginas/ingreso_libro');

    
    }
    public function enviarPost(){
        $db = \Config\Database::connect();
        $model = new libroModel($db);
        $data= array(
            "nombreLibro" => $this->request->getPost('nombreLibro'),
            "autorID" => $this->request->getPost('autorID'),
            "generoLibroID" => $this->request->getPost('generoLibroID'),
            "editorialID" => $this->request->getPost('editorialID'),
            "importancia" => $this->request->getPost('importancia'),
        );
        print_r($_POST);
        $model->insert($data);
        return view('paginas/ingreso_libro',$data);
    }

    public function crear(){
        $db = \Config\Database::connect();
        $model = new libroModel($db);

        $data =[
            "nombreLibro" => $this->request->getPost('nombreLibro'),
            "autorID" => $this->request->getPost('autorID'),
            "generoLibroID" => $this->request->getPost('generoLibroID'),
            "editorialID" => $this->request->getPost('editorialID'),
            "importancia" => $this->request->getPost('importancia'),
            
        ];
        print_r($_POST);
        $respuesta=$model->insert($data);
        if($respuesta >0){
            return redirect()->to(base_url().'/')->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
        
    }
    public function ver_autor()
    {
        $db = \Config\Database::connect();
        $objetito = new autorModel($db);
        $users = $objetito->findAll();
        $data['listaAutor']=$users;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('paginas/agregarAutor',$data);
        echo view('paginas/footer');
        
    }


    public function agregar_autor()
    {
        $db = \Config\Database::connect();
        $objetito = new autorModel($db);
        $users = $objetito->findAll();
        $data['listaAutor']=$users;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('formularios/formularioAutor',$data);
        //echo view('paginas/agregarAutor',$data);
        echo view('paginas/footer');
        
    }
    public function crear_autor(){
        $db = \Config\Database::connect();
        $model = new autorModel($db);

        $data =[
            
            "autorID" => $this->request->getPost('autorID'),
            "nombreAutor" => $this->request->getPost('nombreAutor'),
            
        ];
        //$respuesta=$model->insert($data);
        //return view('paginas/agregarAutor',$data);
        if($model->insert($data)===false){
            $aux=$model->errors();
            $data2['listaError']=$aux;
            //echo view('paginas/errores',$data2);
            $db = \Config\Database::connect();
            $objetito = new autorModel($db);
            $users = $objetito->findAll();
            $data['listaAutor']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            echo view('paginas/gif',$data2);
            echo view('formularios/formularioAutor',$data);
            //echo view('paginas/agregarAutor',$data);
            echo view('paginas/footer');
            //var_dump($model->errors());
        }
        else{
            echo view('paginas/felicidades');
            $db = \Config\Database::connect();
            $objetito = new autorModel($db);
            $users = $objetito->findAll();
            $data['listaAutor']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            //echo view('formularios/formularioAutor',$data);
            echo view('paginas/agregarAutor',$data);
            echo view('paginas/footer');
        }
        //$respuesta=1;
        //if($respuesta >0){
        //    return redirect()->to(base_url().'/')->with('mensaje','1');
        //}
        //else{
         //   return redirect()->to(base_url().'/')->with('mensaje','0');
        //}
        
        
    }

    public function ver_genero()
    {
        $db = \Config\Database::connect();
        $objetito = new generoModel($db);
        $users = $objetito->findAll();
        $data['listaGenero']=$users;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('paginas/agregarGenero',$data);
        echo view('paginas/footer');
        
    }
    public function agregar_genero()
    {
        $db = \Config\Database::connect();
        $objetito = new generoModel($db);
        $users = $objetito->findAll();
        $data['listaGenero']=$users;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('formularios/formularioGenero',$data);
        //echo view('paginas/agregarGenero',$data);
        echo view('paginas/footer');
        
    }
    public function crear_genero(){
        $db = \Config\Database::connect();
        $model = new generoModel($db);

        $data =[
            
            "generoLibroID" => $this->request->getPost('generoLibroID'),
            "nombreGenero" => $this->request->getPost('nombreGenero'),
            
        ];
        if($model->insert($data)===false){
            $aux=$model->errors();
            $data2['listaError']=$aux;
            //echo view('paginas/errores',$data2);
            $db = \Config\Database::connect();
            $objetito = new generoModel($db);
            $users = $objetito->findAll();
            $data['listaGenero']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            echo view('paginas/gif',$data2);
            echo view('formularios/formularioGenero',$data);
            //echo view('paginas/agregarGenero',$data);
            echo view('paginas/footer');
            //var_dump($model->errors());
        }
        else{
            echo view('paginas/felicidades');
            $db = \Config\Database::connect();
        $objetito = new generoModel($db);
        $users = $objetito->findAll();
        $data['listaGenero']=$users;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioGenero',$data);
        echo view('paginas/agregarGenero',$data);
        echo view('paginas/footer');
        }
        
        
    }
    public function ver_editorial()
    {
        $db = \Config\Database::connect();
        $objetito = new editorialModel($db);
        $users = $objetito->findAll();
        $data['listaEditorial']=$users;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioEditorial',$data);
        echo view('paginas/agregarEditorial',$data);
        echo view('paginas/footer');
        
    }

    public function agregar_editorial()
    {
        $db = \Config\Database::connect();
        $objetito = new editorialModel($db);
        $users = $objetito->findAll();
        $data['listaEditorial']=$users;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('formularios/formularioEditorial',$data);
        //echo view('paginas/agregarEditorial',$data);
        echo view('paginas/footer');
        
    }
    public function crear_editorial(){
        $db = \Config\Database::connect();
        $model = new editorialModel($db);

        $data =[
            
            "editorialID" => $this->request->getPost('editorialID'),
            "nombreEditorial" => $this->request->getPost('nombreEditorial'),
            
        ];
        if($model->insert($data)===false){
            $aux=$model->errors();
            $data2['listaError']=$aux;
            //echo view('paginas/errores',$data2);
            $db = \Config\Database::connect();
            $objetito = new editorialModel($db);
            $users = $objetito->findAll();
            $data['listaEditorial']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            echo view('paginas/gif',$data2);
            echo view('formularios/formularioEditorial',$data);
            //echo view('paginas/agregarEditorial',$data);
            echo view('paginas/footer');
            //var_dump($model->errors());
        }
        else{
            echo view('paginas/felicidades');
            $db = \Config\Database::connect();
            $objetito = new editorialModel($db);
            $users = $objetito->findAll();
            $data['listaEditorial']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            //echo view('formularios/formularioEditorial',$data);
            echo view('paginas/agregarEditorial',$data);
            echo view('paginas/footer');
        }
        
        
    }
    public function ver_libro()
    {
        
        $db = \Config\Database::connect();
        $objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);

        $builder = $db->table('autor');
        $builder->select("nombreAutor");
        $builder->join('libro','libro.autorID=autor.autorID');
        $query = $builder->get();

        $users = $objetito->findAll();
        $users2= $objetito2->findAll();
        $users3= $objetito3->findAll();
        $users4= $objetito4->findAll();
        //$users = $objetito->query("SELECT * FROM libro");
        $data['listaLibro']=$users;
        $data['listaAutor']=$users2;
        $data['listaEditorial']=$users3;
        $data['listaGenero']=$users4;

        


        //$builder = $db->table('autor');
        //$builder->select("nombreAutor");
        //$builder->join('libro','libro.autorID=autor.autorID');
        //$query = $builder->get();
        //echo json_encode($query->getResult());
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioLibro',$data);
        echo view('paginas/agregarLibro',$data);
        echo view('paginas/footer');
        
    }
    public function agregar_libro()
    {
        
        $db = \Config\Database::connect();
        $objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);

        $builder = $db->table('autor');
        $builder->select("nombreAutor");
        $builder->join('libro','libro.autorID=autor.autorID');
        $query = $builder->get();

        $users = $objetito->findAll();
        $users2= $objetito2->findAll();
        $users3= $objetito3->findAll();
        $users4= $objetito4->findAll();
        //$users = $objetito->query("SELECT * FROM libro");
        $data['listaLibro']=$users;
        $data['listaAutor']=$users2;
        $data['listaEditorial']=$users3;
        $data['listaGenero']=$users4;

        


        //$builder = $db->table('autor');
        //$builder->select("nombreAutor");
        //$builder->join('libro','libro.autorID=autor.autorID');
        //$query = $builder->get();
        //echo json_encode($query->getResult());
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('formularios/formularioLibro',$data);
        //echo view('paginas/agregarLibro',$data);
        echo view('paginas/footer');
        
    }

    public function crear_libro(){
        $db = \Config\Database::connect();
        $model = new libroModel($db);

        $data =[
            "nombreLibro" => $this->request->getPost('nombreLibro'),
            "autorID" => $this->request->getPost('autorID'),
            "generoLibroID" => $this->request->getPost('generoLibroID'),
            "editorialID" => $this->request->getPost('editorialID'),
            "importancia" => $this->request->getPost('importancia'),
            
        ];
        //print_r($_POST);
        if($model->insert($data)===false){
            $aux=$model->errors();
            $data2['listaError']=$aux;
            //echo view('paginas/errores',$data2);
            //var_dump($model->errors());
            $db = \Config\Database::connect();
        $objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);


        $users = $objetito->findAll();
        $users2= $objetito2->findAll();
        $users3= $objetito3->findAll();
        $users4= $objetito4->findAll();
        //$users = $objetito->query("SELECT * FROM libro");
        $data['listaLibro']=$users;
        $data['listaAutor']=$users2;
        $data['listaEditorial']=$users3;
        $data['listaGenero']=$users4;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('paginas/gif',$data2);
        echo view('formularios/formularioLibro',$data);
        //echo view('paginas/agregarLibro',$data);
        echo view('paginas/footer');
        }
        else{
            echo view('paginas/felicidades');
            $db = \Config\Database::connect();
        $objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);


        $users = $objetito->findAll();
        $users2= $objetito2->findAll();
        $users3= $objetito3->findAll();
        $users4= $objetito4->findAll();
        //$users = $objetito->query("SELECT * FROM libro");
        $data['listaLibro']=$users;
        $data['listaAutor']=$users2;
        $data['listaEditorial']=$users3;
        $data['listaGenero']=$users4;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioLibro',$data);
        echo view('paginas/agregarLibro',$data);
        echo view('paginas/footer');
        }
        

        
    }

    public function logout(){
        $session = session();
        session_destroy();
        return redirect()->to(base_url().'/');
    }

    public function ver_perfil(){
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('paginas/perfil');
        echo view('paginas/footer');
    
    }
    public function borrar_libro(){
        $db = \Config\Database::connect();
		$userModel=new libroModel($db);
		$request= \Config\Services::request();
        
		$id=$request->getPostGet('id');
        //print_r("asdasdasddas");
        //print_r($id);
       
		$userModel->delete($id);
		
		$objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);


        $users = $objetito->findAll();
        $users2= $objetito2->findAll();
        $users3= $objetito3->findAll();
        $users4= $objetito4->findAll();
        //$users = $objetito->query("SELECT * FROM libro");
        $data['listaLibro']=$users;
        $data['listaAutor']=$users2;
        $data['listaEditorial']=$users3;
        $data['listaGenero']=$users4;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioLibro',$data);
        echo view('paginas/agregarLibro',$data);
        echo view('paginas/footer');

	}



    public function editar_libro(){
        $db = \Config\Database::connect();
		$userModel=new libroModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
		$users=$userModel->find([$id]);
		$users=array('users'=>$users);
		//$estructura=view('estructura/header').view('estructura/body',$users);
		//$estructura=view('estructura/header').view('estructura/formulario',$users);
		//return $estructura;
        $objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);
        //print_r($id);

        $users = $objetito->findAll();
        $users2= $objetito2->findAll();
        $users3= $objetito3->findAll();
        $users4= $objetito4->findAll();
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);
        //$users = $objetito->query("SELECT * FROM libro");
        $data['listaLibro']=$users;
        $data['listaAutor']=$users2;
        $data['listaEditorial']=$users3;
        $data['listaGenero']=$users4;
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioLibro',$data);
        echo view('formularios/formularioLibro',$data);
        echo view('paginas/footer');

	}
}
