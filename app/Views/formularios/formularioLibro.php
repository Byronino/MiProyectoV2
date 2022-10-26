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

<?php
  $session = session();
  $estadoLog= false;
  if(isset($session)){
    if($session->has('isLoggedIn')){
      if($session->isLoggedIn){
        $estadoLog = true;
      }
    }
  }
?>
<?php

          if($estadoLog){
            ?>
            <?php 
            if(isset($aux)){
              print_r("data");
              $name=$aux['users'][0]['nombreLibro'];
              $autor=$aux['users'][0]['autorID'];
              $importancia=$aux['users'][0]['importancia'];
              //print_r($aux);
              //print_r($name);
            }
            else{
              //print_r("no data");
              $name="";
              $importancia=1;
            }
            ?>

           <div class="container">
                <h1>Ingrese un nuevo Libro 
                <?php $session = session(); echo "Señor : ".$session->get('name');?>
                </h1>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" action="<?php echo base_url().'/crear_libro' ?>">
                        <label for="nombreLibro">Nombre Libro</label>
                            <input type="text" name="nombreLibro" id="nombreLibro" class="form-control" value=<?php echo $name?>>

                        <div class="form-group">
                            <label for="autorID">Seleccione un autor</label>
                            <select class="form-control" id="autorID" name="autorID">
                            <?php foreach($listaAutor as $item):?>
                                <tr>
                                <?php 
                                  if(isset($aux)){print_r("aiuraa");?>
                                  
                                    <option value="gato"><?php echo $item['nombreAutor'];?> </option>
                                   <?php
                                  }
                                  else{print_r("???????????");?>

                                    <option value="<?php echo $item['autorID'];?>"><?php echo $item['nombreAutor'];?> </option>

                                   <?php 
                                  }
                                  ?>
                            </tr>
                            <?php endforeach;?>

                            </select>
                            </div>

                            <div class="form-group">
                            <label for="autorID">Seleccione una editorial</label>
                            <select class="form-control" id="editorialID" name="editorialID">
                            <?php foreach($listaEditorial as $item):?>
                                <tr>
                                <option value="<?php echo $item['editorialID'];?>"><?php echo $item['nombreEditorial'];?> </option>
                            </tr>
                            <?php endforeach;?>

                            </select>
                            </div>

                            <div class="form-group">
                            <label for="generoLibroID">Seleccione un genero</label>
                            <select class="form-control" id="generoLibroID" name="generoLibroID">
                            <?php foreach($listaGenero as $item):?>
                                <tr>
                                <option value="<?php echo $item['generoLibroID'];?>"><?php echo $item['nombreGenero'];?> </option>
                            </tr>
                            <?php endforeach;?>

                            </select>
                            </div>
                            <label for="importancia">Importancia</label>
                            <input type="text" name="importancia" id="importancia" class="form-control" value=<?php echo $importancia?>>
                            <br>
                            
                            <button class="btn btn-primary">Guardar</button>
                            
                        </form>
                    </div>
                </div>
                <hr>
            <?php
          }
          ?>

    
        


    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
</body>
</html>

