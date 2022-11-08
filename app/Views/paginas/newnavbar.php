<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>Bienvenido a la libreria</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Navbar</title>
</head>
    <body>
    <?php
                $session = session();
                $estadoLog= false;
                if(isset($session)){
                    if($session->has('isLoggedIn')){
                    if($session->isLoggedIn){
                        $estadoLog = true;
                        $tipo=$session->get('type'); 
                    }
                    }
                }
            ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="background-color: black;border-radius: 30px">
            <a class="navbar-brand" href="/ProyectoTangananaEdition/Home/gatitos"><h3 style="color:white">Noticias</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="/ProyectoTangananaEdition/Home/index"><h4 style="color:white">Home</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" ><h4 style="color:white"></h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" ><h4 style="color:white"></h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" ><h4 style="color:white">Tablas</h4></a>
                </li>
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="True"style="color:white " >
                <h4></h4>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown  " style="background-color:black">
                    <li><a class="nav-link" href="/ProyectoTangananaEdition/Home/ver_libro"><h5 style="color:white">Libros</h5></a></li>
                    <li><a class="nav-link" href="/ProyectoTangananaEdition/Home/ver_autor"><h5 style="color:white">Autores</h5></a></li>
                    <li><a class="nav-link" href="/ProyectoTangananaEdition/Home/ver_genero"><h5 style="color:white">Generos</h5></a></li>
                    <li><a class="nav-link" href="/ProyectoTangananaEdition/Home/ver_editorial"><h5 style="color:white">Editoriales</h5></a></li>
                </ul>
                </li>
                <?php
                if($estadoLog&& $tipo==1){?>
                <li class="nav-item">
                    <a class="nav-link" ><h4 style="color:white"></h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" ><h4 style="color:white"></h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" ><h4 style="color:white">Agregar</h4></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="True"style="color:white">
                <h4></h4>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:black">
                    <li><a class="nav-link" href="/ProyectoTangananaEdition/Home/agregar_libro"><h5 style="color:white">Libros</h5></a></li>
                    <li><a class="nav-link" href="/ProyectoTangananaEdition/Home/agregar_autor"><h5 style="color:white">Autores</h5></a></li>
                    <li><a class="nav-link" href="/ProyectoTangananaEdition/Home/agregar_genero"><h5 style="color:white">Generos</h5></a></li>
                    <li><a class="nav-link" href="/ProyectoTangananaEdition/Home/agregar_editorial"><h5 style="color:white">Editoriales</h5></a></li>
                </ul>
                </li>
                <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
                <li class="nav-item">
              <a class="nav-link"href="/ProyectoTangananaEdition/Home/ver_perfil"> <h4 style="color:white">Perfil</h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>

           
            <li class="nav-item">
            <a class="nav-link" style="color:white; border: 4px solid; background-color:black;border-radius:10px;
              padding:10px 25px;text-allign:right"
               href="/ProyectoTangananaEdition/Home/logout">LogOut</a>
            </li>
            
            <?php
                }
              
                if($estadoLog&& $tipo==0){?>
                 </li>
                <li class="nav-item">
              <a class="nav-link"href="/ProyectoTangananaEdition/Home/ver_perfil"> <h4 style="color:white">Perfil</h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>

           
            <li class="nav-item">
            <a class="nav-link" style="color:white; border: 4px solid; background-color:black;border-radius:10px;
              padding:10px 25px;text-allign:right"
               href="/ProyectoTangananaEdition/Home/logout">LogOut</a>
            </li>

          <?php
                }
                else{?>
                <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li><li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li>
                <li class="nav-item">
              <a class="nav-link" style="color:white; border: 4px solid; background-color:black;border-radius:10px;
              padding:10px 25px;text-allign:right"
               href="/ProyectoTangananaEdition/SignupController/index">SignUp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ><h4 style="color:white"></h4></a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" style="color:white; border: 4px solid; background-color:black;border-radius:10px;
              padding:10px 25px;text-allign:right"
               href="/ProyectoTangananaEdition/SigninController/index">Login</a>
            </li>


                 <?php
          }?>

            </ul>

            
            


        </div>
    </nav>


    </body>
</html>