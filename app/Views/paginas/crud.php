
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Listado de libros</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/ProyectoTangananaEdition/Home/gatitos">Gatitos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="/ProyectoTangananaEdition/Home/index">Ingresar Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProyectoTangananaEdition/Home/agregar_autor">Ver Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProyectoTangananaEdition/Home/agregar_genero">Ver generos literarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProyectoTangananaEdition/Home/agregar_editorial">Ver Editoriales</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <h1>Ingrese un nuevo Libro 
        <?php $session = session(); echo "Señor : ".$session->get('name');?>
         </h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/crear' ?>">
                    <label for="nombreLibro">Nombre Libro</label>
                    <input type="text" name="nombreLibro" id="nombreLibro" class="form-control">

                    <!--<label for="autorID">ID Autor</label>
                    <input type="text" name="autorID" id="autorID" class="form-control">-->
                    <div class="form-group">
                      <label for="autorID">Seleccione un autor</label>
                      <select class="form-control" id="autorID" name="autorID">
                      <?php foreach($listaAutor as $item):?>
                        <tr>
                          <option value="<?php echo $item['autorID'];?>"><?php echo $item['autorID'];?> </option>
                      </tr>
                      <?php endforeach;?>

                      </select>
                    </div>

                    <div class="form-group">
                      <label for="autorID">Seleccione una editorial</label>
                      <select class="form-control" id="editorialID" name="editorialID">
                      <?php foreach($listaEditorial as $item):?>
                        <tr>
                          <option value="<?php echo $item['editorialID'];?>"><?php echo $item['editorialID'];?> </option>
                      </tr>
                      <?php endforeach;?>

                      </select>
                    </div>

                    <div class="form-group">
                      <label for="generoLibroID">Seleccione un genero</label>
                      <select class="form-control" id="generoLibroID" name="generoLibroID">
                      <?php foreach($listaGenero as $item):?>
                        <tr>
                          <option value="<?php echo $item['generoLibroID'];?>"><?php echo $item['generoLibroID'];?> </option>
                      </tr>
                      <?php endforeach;?>

                      </select>
                    </div>
                    <!--<label for="generoLibroID">ID genero Libro</label>
                    <input type="text" name="generoLibroID" id="generoLibroID" class="form-control">

                    <label for="editorialID">ID Editorial</label>
                    <input type="text" name="editorialID" id="editorialID" class="form-control">

                    <label for="importancia">Importancia</label>
                    <input type="text" name="importancia" id="importancia" class="form-control">-->
                
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <hr>
        <h2>Listado de libros</h2>
     
       
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nombre del libro</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Importancia</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($listaLibro as $item):?>
                            <tr>
                            <td><?php echo $item['nombreLibro'];?></td>
                            <td><?php echo $item['autorID'];?></td>
                            <td><?php echo $item['generoLibroID'];?></td>
                            <td><?php echo $item['editorialID'];?></td>
                            <td><?php echo $item['importancia'];?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>




    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
</body>
</html>



                    <label for="autorID">ID Autor</label>
                    <input type="text" name="autorID" id="autorID" class="form-control">
                    
                    <label for="generoLibroID">ID genero Libro</label>
                    <input type="text" name="generoLibroID" id="generoLibroID" class="form-control">

                    <label for="editorialID">ID Editorial</label>
                    <input type="text" name="editorialID" id="editorialID" class="form-control">

                    
                
                    <br>
                    <button class="btn btn-primary">Guardar</button>