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
        <div class="container">
            <h1>NANE</h1>
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="<?php echo base_url().'/actualizar'?>">
                        <input type="text" id="idNombre" name= "idNombre" hidden="">
                        <label for ="nombreLibro">Nombre del libro</label>
                        <input type="text" name="nombreLibro" id="nombreLibro" class="form control">
                        <br>
                        <label for ="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form control">
                        <br>
                        <label for ="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form control">
                        <br>
                        <label for ="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form control">
                        <br>
                        <label for ="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form control">
                        <br>
                        <label for ="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form control">
                        <br>
                        <button class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
