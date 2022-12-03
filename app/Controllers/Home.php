<?php



namespace App\Controllers;
use App\Models\autorModel;
use App\Models\libroModel;
use App\Models\generoModel;
use App\Models\editorialModel;
use App\Models\solicitudModel;
use App\Models\UserModel;


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
        echo view('paginas/oops2',$data);
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
        $db = \Config\Database::connect();
        $session = session();
        $id= $session->get('id');
        $model=new UserModel($db);
        $users =$model->dataLibro($id);
        $data['listaUsuario']=$users;
        //print_r($id);
        //print_r($users[0]['id']);
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('paginas/perfil2',$data);
        echo view('paginas/footer');
    
    }
    public function cambiar_perfil(){
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('paginas/perfil');
        echo view('paginas/footer');
    
    }
    
    
    public function borrar_autor(){
        $db = \Config\Database::connect();
		$userModel=new autorModel($db);
		$request= \Config\Services::request();
        
		$id=$request->getPostGet('id');
        //print_r("asdasdasddas");
        //print_r($id);
       
		$userModel->delete($id);
		if($userModel->delete($id)===false){
            echo view('paginas/error_borrar_autor');
        }
        else{
            echo view('paginas/felicidades2');
        }
		
            $objetito = new autorModel($db);
            $users = $objetito->findAll();
            $data['listaAutor']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            //echo view('formularios/formularioAutor',$data);
            echo view('paginas/agregarAutor',$data);
            echo view('paginas/footer');

	}


    /*public function editar_libro(){
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

	}*/
    public function enviarEditarAutor(){
        $db = \Config\Database::connect();
        $userModel= new autorModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);
		$objetito2= new autorModel($db);
        $users2= $objetito2->findAll();
        $data['listaAutor']=$users2;
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('formularios/formularioAutorEditar',$data);
        echo view('paginas/footer');


    }
    public function editar_autor(){
        $db = \Config\Database::connect();
        $model= new autorModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$model->find([$id]);
        $userAux=$model->find([$id]);
        $userAux=array('users'=>$userAux);
		$objetito2= new autorModel($db);
        $users2= $objetito2->findAll();
        $data['listaAutor']=$users2;
        $data['aux']=$userAux;
        
        //print_r($data['aux']['users'][0]['autorID']);

        $data2 =[
            
            "autorID" => $data['aux']['users'][0]['autorID'],
            "nombreAutor" => $this->request->getPost('nombreAutor'),
            
        ];
        //print_r($data2);
        //$respuesta=$model->insert($data);
        //return view('paginas/agregarAutor',$data);
        if($model->replace($data2)===false){
            
            $aux=$model->errors();
            $data['listaError']=$aux;
            //echo view('paginas/errores',$data2);
            $db = \Config\Database::connect();
            $objetito = new autorModel($db);
            $users = $objetito->findAll();
            $data['listaAutor']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            echo view('paginas/gif',$data);
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


    public function upload_image(){
    
        if($imageFile=$this->request->getFile('image')){
          
            if($imageFile->isValid() && !$imageFile->hasMoved()){
            
                $validated = $this->validate([
                    'image'=>[
                        'uploaded[image]',
                        'mime_in[image,image/png,image/jpg,image/gif,image/jpeg]'
                    ]
                ]);

                if($validated){
                    //echo "ok";
                    
                }
                else{
                    var_dump($this->validator->listErrors());
                    return false;
                }
                //$newName = $imageFile->getRandomName();
                $session = session();
                $name= $session->get('name');
                $newName = $imageFile->getName().".jpg";
                $db = \Config\Database::connect();
                $model= new UserModel($db);
                $data =[
            
                    "photo" => $newName,
                    
                    
                ];
                $path="C:/xampp/htdocs/ProyectoTangananaEdition/images";
                //echo WRITEPATH;
                $imageFile->move($path,$newName);
                $db = \Config\Database::connect();
                $session = session();
                $id= $session->get('id');
                $res=$model->update($id,$data);
                $model=new UserModel($db);
                $users =$model->dataLibro($id);
                $data['listaUsuario']=$users;
                echo view('paginas/header');
                echo view('paginas/newnavbar');
                echo view('paginas/perfil2',$data);
                echo view('paginas/footer');
            }

        }
    }

    public function preguntaBorrarAutor(){
        $db = \Config\Database::connect();
        $userModel= new autorModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);
		$objetito2= new autorModel($db);
        $users2= $objetito2->findAll();
        $data['listaAutor']=$users2;
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('preguntas/deseaborrarautor',$data);
        echo view('paginas/footer');
    }
    //funciones de editar y borrar genero--------------------------------------------------------------
    public function preguntaBorrarGenero(){
        $db = \Config\Database::connect();
        $userModel= new generoModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);
		$objetito2= new generoModel($db);
        $users2= $objetito2->findAll();
        $data['listaGenero']=$users2;
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('preguntas/deseaborrargenero',$data);
        echo view('paginas/footer');
    }

    public function borrar_genero(){
        $db = \Config\Database::connect();
		$userModel=new generoModel($db);
		$request= \Config\Services::request();
        
		$id=$request->getPostGet('id');
        //print_r("asdasdasddas");
        //print_r($id);
       
		$userModel->delete($id);
		if($userModel->delete($id)===false){
            echo view('paginas/error_borrar_autor');
        }
        else{
            echo view('paginas/felicidades2');
        }
		
            $objetito = new generoModel($db);
            $users = $objetito->findAll();
            $data['listaGenero']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            //echo view('formularios/formularioAutor',$data);
            echo view('paginas/agregarGenero',$data);
            echo view('paginas/footer');

	}

    public function enviarEditarGenero(){
        $db = \Config\Database::connect();
        $userModel= new generoModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);
		$objetito2= new generoModel($db);
        $users2= $objetito2->findAll();
        $data['listaGenero']=$users2;
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('formularios/formularioGeneroEditar',$data);
        echo view('paginas/footer');


    }


    public function editar_genero(){
        $db = \Config\Database::connect();
        $model= new generoModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$model->find([$id]);
        $userAux=$model->find([$id]);
        $userAux=array('users'=>$userAux);
		$objetito2= new generoModel($db);
        $users2= $objetito2->findAll();
        $data['listaGenero']=$users2;
        $data['aux']=$userAux;
        
        //print_r($data['aux']['users'][0]['autorID']);

        $data2 =[
            
            "generoLibroID" => $data['aux']['users'][0]['generoLibroID'],
            "nombreGenero" => $this->request->getPost('nombreGenero'),
            
        ];
        //print_r($data2);
        //$respuesta=$model->insert($data);
        //return view('paginas/agregarAutor',$data);
        if($model->replace($data2)===false){
            
            $aux=$model->errors();
            $data['listaError']=$aux;
            //echo view('paginas/errores',$data2);
            $db = \Config\Database::connect();
            $objetito = new generoModel($db);
            $users = $objetito->findAll();
            $data['listaGenero']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            echo view('paginas/gif',$data);
            echo view('formularios/formularioGenero',$data);
            //echo view('paginas/agregarAutor',$data);
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
            //echo view('formularios/formularioAutor',$data);
            echo view('paginas/agregarGenero',$data);
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




    //funciones de editar y borrar editorial--------------------------------------------------------------
    public function preguntaBorrarEditorial(){
        $db = \Config\Database::connect();
        $userModel= new editorialModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);
		$objetito2= new editorialModel($db);
        $users2= $objetito2->findAll();
        $data['listaEditorial']=$users2;
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('preguntas/deseaborrareditorial',$data);
        echo view('paginas/footer');
    }

    public function borrar_editorial(){
        $db = \Config\Database::connect();
		$userModel=new editorialModel($db);
		$request= \Config\Services::request();
        
		$id=$request->getPostGet('id');
        //print_r("asdasdasddas");
        //print_r($id);
       
		$userModel->delete($id);
		if($userModel->delete($id)===false){
            echo view('paginas/error_borrar_autor');
        }
        else{
            echo view('paginas/felicidades2');
        }
		
            $objetito = new editorialModel($db);
            $users = $objetito->findAll();
            $data['listaEditorial']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            //echo view('formularios/formularioAutor',$data);
            echo view('paginas/agregarEditorial',$data);
            echo view('paginas/footer');

	}

    public function enviarEditarEditorial(){
        $db = \Config\Database::connect();
        $userModel= new editorialModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);
		$objetito2= new editorialModel($db);
        $users2= $objetito2->findAll();
        $data['listaEditorial']=$users2;
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('formularios/formularioEditorialEditar',$data);
        echo view('paginas/footer');


    }


    public function editar_editorial(){
        $db = \Config\Database::connect();
        $model= new editorialModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$model->find([$id]);
        $userAux=$model->find([$id]);
        $userAux=array('users'=>$userAux);
		$objetito2= new editorialModel($db);
        $users2= $objetito2->findAll();
        $data['listaEditorial']=$users2;
        $data['aux']=$userAux;
        
        //print_r($data['aux']['users'][0]['autorID']);

        $data2 =[
            
            "editorialID" => $data['aux']['users'][0]['editorialID'],
            "nombreEditorial" => $this->request->getPost('nombreEditorial'),
            
        ];
        //print_r($data2);
        //$respuesta=$model->insert($data);
        //return view('paginas/agregarAutor',$data);
        if($model->replace($data2)===false){
            
            $aux=$model->errors();
            $data['listaError']=$aux;
            //echo view('paginas/errores',$data2);
            $db = \Config\Database::connect();
            $objetito = new editorialModel($db);
            $users = $objetito->findAll();
            $data['listaEditorial']=$users;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            echo view('paginas/gif',$data);
            echo view('formularios/formularioEditorial',$data);
            //echo view('paginas/agregarAutor',$data);
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
            //echo view('formularios/formularioAutor',$data);
            echo view('paginas/agregarEditorial',$data);
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

    public function preguntaBorrarLibro(){
        $db = \Config\Database::connect();
        $userModel= new libroModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);


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
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('preguntas/deseaborrarLibro',$data);
        echo view('paginas/footer');
    }

    

    public function enviarEditarLibro(){
        $db = \Config\Database::connect();
        $userModel= new libroModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);

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
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('formularios/formularioLibroEditar',$data);
        echo view('paginas/footer');


    }


    public function editar_libro(){
        $db = \Config\Database::connect();
        $model= new libroModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$model->find([$id]);
        $userAux=$model->find([$id]);
        $userAux=array('users'=>$userAux);


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
        $data['aux']=$userAux;
        
        //print_r($data['aux']);

        $data2 =[
            
            "libroID" => $data['aux']['users'][0]['libroID'],
            "nombreLibro" => $this->request->getPost('nombreLibro'),
            "autorID"=>$this->request->getPost("autorID"),
            "generoLibroID"=>$this->request->getPost('generoLibroID'),
            "editorialID"=>$this->request->getPost('editorialID'),
            "importancia"=>$this->request->getPost('importancia'),
            
        ];
        //print_r($data2);
        //$respuesta=$model->insert($data);
        //return view('paginas/agregarAutor',$data);
        if($model->replace($data2)===false){
            
            $aux=$model->errors();
            $data['listaError']=$aux;
            //echo view('paginas/errores',$data2);
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
        $data['aux']=$userAux;
            
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            echo view('paginas/gif',$data);
            echo view('formularios/formularioLibro',$data);
            //echo view('paginas/agregarAutor',$data);
            echo view('paginas/footer');
            //var_dump($model->errors());
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
            $data['aux']=$userAux;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            //echo view('formularios/formularioAutor',$data);
            echo view('paginas/agregarLibro',$data);
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
    public function enviarGraficoLibro1(){
        $db = \Config\Database::connect();
        $userModel= new libroModel($db);
		$request= \Config\Services::request();
		/*$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);*/


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
        //$data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('graficos/graficoLibro1',$data);
        echo view('paginas/footer');
    }

    public function enviarGraficoLibro2(){
        $db = \Config\Database::connect();
        $userModel= new libroModel($db);
		$request= \Config\Services::request();
		/*$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);*/


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
        //$data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('graficos/graficoLibro2',$data);
        echo view('paginas/footer');
    }

    public function enviarGraficoLibro3(){
        $db = \Config\Database::connect();
        $userModel= new libroModel($db);
		$request= \Config\Services::request();
		/*$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);*/


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
        //$data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('graficos/graficoLibro3',$data);
        echo view('paginas/footer');
    }

    public function enviarGraficoLibro4(){
        $db = \Config\Database::connect();
        $userModel= new libroModel($db);
		$request= \Config\Services::request();
		/*$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);*/


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
        //$data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('graficos/graficoLibro4',$data);
        echo view('paginas/footer');
    }

    public function enviarGraficoLibro5(){
        $db = \Config\Database::connect();
        $userModel= new libroModel($db);
		$request= \Config\Services::request();
		/*$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);*/
        $user = $userModel->grafico5();

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
        $data['datoGrafico']=$user;
        //print_r($user);
        //$data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('graficos/graficoLibro5',$data);
        echo view('paginas/footer');
    }



    public function solicitar_libro()
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
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        echo view('solicitudes/solicitarLibro',$data);
        //echo view('paginas/agregarLibro',$data);
        echo view('paginas/footer');
        
    }

    public function enviarSolicitarLibro(){
        $db = \Config\Database::connect();
        $userModel= new libroModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);

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
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('preguntas/deseaSolicitarLibro',$data);
        echo view('paginas/footer');


    }

    public function crear_solicitud_libro2(){
        $db = \Config\Database::connect();
		$model=new libroModel($db);
        $solicitud=new solicitudModel($db);
		$request= \Config\Services::request();
        $session = session();
		$idLibro=$request->getPostGet('idLibro');
        $idUser=$session->get('id');
        //print_r("asdasdasddas");
        
       
		//$userModel->delete($id);
		
		$objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);
        $objetito5= new solicitudModel($db);
        $users = $objetito->findAll();
        $datos['listaLibro']=$users;
        foreach($datos['listaLibro'] as $item):
            if($item['libroID']===$idLibro){
                $pedidos=$item['pedidos'];
            }
            //print_r($item['pedidos']);
        endforeach;
        //$pedidos='5';
        
        $data =[
            "userID" => $idUser,
            "libroID" => $idLibro,  
        ];

        if($solicitud->insert($data)===false){
            $pedidos=$pedidos;
        }
        else{
            $pedidos=$pedidos+1;
        }
        
        $data2 = [
            "pedidos"  => $pedidos,
        ];
        $res=$model->update($idLibro,$data2);
        
        

        $db = \Config\Database::connect();
		$userModel=new libroModel($db);
        $solicitud=new solicitudModel($db);
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
        echo view('solicitudes/solicitarLibro',$data);
        echo view('paginas/footer');

	}

    public function crear_solicitud_libro(){
        $db = \Config\Database::connect();
		$model=new libroModel($db);
        $model2=new solicitudModel($db);
        $solicitud=new solicitudModel($db);
		$request= \Config\Services::request();
        $session = session();
		$idLibro=$request->getPostGet('idLibro');
        $idUser=$session->get('id');
        //print_r("asdasdasddas");
        
       
		//$userModel->delete($id);
		
		$objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);
        $objetito5= new solicitudModel($db);
        $users = $objetito->findAll();
        $users2=$objetito5->findALL();
        $datos['listaLibro']=$users;
        $datos['listaSolicitud']=$users2;
        foreach($datos['listaLibro'] as $item):
            if($item['libroID']===$idLibro){
                $pedidos=$item['pedidos'];
            }
            //print_r($item['pedidos']);
        endforeach;
        //$pedidos='5';
        
        $data =[
            "userID" => $idUser,
            "libroID" => $idLibro, 
            "cantidad"=>1 
        ];
        
        if($solicitud->insert($data)===false){
            $pedidos=$pedidos;
            foreach($datos['listaSolicitud'] as $sol):
                if($sol['userID']===$idUser && $sol['libroID']===$idLibro && $sol['estado']==='0'){
                    $pedidos=$pedidos+1;
                    $data2 = [
                        "pedidos"  => $pedidos,
                        
                    ];
                    $data3=[
                        //"libroID"=>$idLibro,
                        "estado" => '1',
                        "cantidad" =>1,
                    ];
                    $res=$model->update($idLibro,$data2);
                    $model2->where('userID',$idUser);
                    $model2->where('libroID',$idLibro);
                    $res2=$model2->update($idUser,$data3);//esta linea no funciona
                }
                else if($sol['userID']===$idUser && $sol['libroID']===$idLibro && $sol['estado']==='1'){
                    $pedidos=$pedidos+1;
                    $data2 = [
                        "pedidos"  => $pedidos,
                        
                    ];
                    $data3=[
                        //"libroID"=>$idLibro,
                        "estado" => '1',
                        "cantidad" =>$sol['cantidad']+1,
                    ];
                    $res=$model->update($idLibro,$data2);
                    $model2->where('userID',$idUser);
                    $model2->where('libroID',$idLibro);
                    $res2=$model2->update($idUser,$data3);
                }
            endforeach;
        }
        else{
            $pedidos=$pedidos+1;
        }
        
        $data2 = [
            "pedidos"  => $pedidos,
        ];
        $res=$model->update($idLibro,$data2);

        
        

        $db = \Config\Database::connect();
		$userModel=new libroModel($db);
        $solicitud=new solicitudModel($db);
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
        echo view('solicitudes/solicitarLibro',$data);
        echo view('paginas/footer');

	}

    public function devolver_libro()
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


        $session = session();
        $id= $session->get('id');
        $model=new UserModel($db);
        $users5 =$model->dataLibro($id);
        $data['listaUsuario']=$users5;




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
        echo view('solicitudes/devolverLibro',$data);
        //echo view('paginas/agregarLibro',$data);
        echo view('paginas/footer');
        
    }


    public function enviarDevolverLibro(){
        $db = \Config\Database::connect();
        $userModel= new libroModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
        $users=$userModel->find([$id]);
        $userAux=$userModel->find([$id]);
        $userAux=array('users'=>$userAux);

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
        $data['aux']=$userAux;
        echo view('paginas/header');
        echo view('paginas/newnavbar');
        //echo view('formularios/formularioAutor',$data);
        echo view('preguntas/deseaDevolverLibro',$data);
        echo view('paginas/footer');


    }


    public function crear_devolver_libro(){
        $db = \Config\Database::connect();
		$model=new libroModel($db);
        $model2=new solicitudModel($db);
        $solicitud=new solicitudModel($db);
		$request= \Config\Services::request();
        $session = session();
		$idLibro=$request->getPostGet('idLibro');
        $idUser=$session->get('id');
        //print_r("asdasdasddas");
        
       
		//$userModel->delete($id);
		
		$objetito = new libroModel($db);
        $objetito2= new autorModel($db);
        $objetito3= new editorialModel($db);
        $objetito4= new generoModel($db);
        $objetito5= new solicitudModel($db);
        $users = $objetito->findAll();
        $users2=$objetito5->findALL();
        $datos['listaLibro']=$users;
        $datos['listaSolicitud']=$users2;
        foreach($datos['listaLibro'] as $item):
            if($item['libroID']===$idLibro){
                $pedidos=$item['pedidos'];
            }
            //print_r($item['pedidos']);
        endforeach;

        
        foreach($datos['listaSolicitud'] as $sol):
            
            if($sol['userID']===$idUser && $sol['libroID']===$idLibro && $sol['cantidad']==='1'){
                
                $pedidos=$pedidos-1;
                $data2 = [
                    "pedidos"  => $pedidos,    
                ];
                $data3=[
                    //"libroID"=>$idLibro,
                    "estado" => '0',
                    "cantidad" =>0,
                ];
                $res=$model->update($idLibro,$data2);
                $model2->where('userID',$idUser);
                $model2->where('libroID',$idLibro);
                $res2=$model2->update($idUser,$data3);
            }

            else if($sol['userID']===$idUser && $sol['libroID']===$idLibro && $sol['cantidad']>'1'){
                $pedidos=$pedidos-1;
                $data2 = [
                    "pedidos"  => $pedidos,    
                ];
                $data3=[
                    //"libroID"=>$idLibro,
                    "cantidad" =>$sol['cantidad']-1,
                ];
                $res=$model->update($idLibro,$data2);
                $model2->where('userID',$idUser);
                $model2->where('libroID',$idLibro);
                $res2=$model2->update($idUser,$data3);
            }
        endforeach;
        
        

        $db = \Config\Database::connect();
		$userModel=new libroModel($db);
        $solicitud=new solicitudModel($db);
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
        echo view('paginas/newindex',$data);
        echo view('paginas/footer');

	}

}
