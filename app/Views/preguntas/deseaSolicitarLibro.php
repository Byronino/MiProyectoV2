<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Bienvenido a la libreria</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
    <body> 
        
        <div class="container-fluid" style="background-color:grey">
        <br><br><br><br><br>
        <div class="row">
                <div class="col-1">

        </div>
            <div class="col-5" style="background-color:white;border:solid;border-radius:20px">
            <h1> Desea Solicitar el libro <?php echo $aux['users'][0]['nombreLibro']; ?>? </h1>

            </div>
            <div class="col-1">

            </div>
            <div class="col-4">
            <img src="<?php echo base_url(); ?>/images/solicitud.jpeg" alt="Michi" width="100%" height="300" style="border:solid;border-radius:20px">

            </div>
            <div class="col-2">

            </div>
        </div>
        <div class="row">
        <div class="col-1">
        
        </div>
            <div class="col-4">
            <a type="button" class="btn btn-info" href="<?php echo base_url(); ?>/Home/crear_solicitud_libro?idLibro=<?php echo $aux['users'][0]['libroID']; ?>"><h4 style="color:white">Solicitar</h4></a>

            </div>
            <div class="col-4">
            <a  type="button" class="btn btn-warning" href="/ProyectoTangananaEdition/Home/solicitar_Libro"><h4 style="color:white">volver </h4></a>

            </div>
            <div class="col-2">

            </div>
        </div>

        

    </body>
</html>