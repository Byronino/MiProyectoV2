<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Listado de Autores</title>
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
              //print_r("data");
              $name=$aux['users'][0]['nombreAutor'];
              print_r($aux);
              //print_r($name);
            }
            else{
              //print_r("no data");
              $name="";
            }
          }
            ?>
<?php
          if ($estadoLog){
            ?>
            <div class="container">
                <h1>Ingresa un nuevo Autor</h1>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" action="<?php echo base_url().'/crear_autor' ?>">
                            <label for="nombreAutor">Nombre Autor</label>
                            <input type="text" name="nombreAutor" id="nombreAutor" class="form-control" value=<?php echo $name?>>

                        
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