<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Bienvenido a la libreria</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>Listado de libros</title>
</head>
<body>






    <div class="container">
        
        <h2>Listado de libros</h2>
     
       
                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                        <th scope="col">id Libro</th>
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
                            <td><?php echo $item['libroID'];?></td>
                            <td><?php echo $item['nombreLibro'];?></td>
                            <td><?php echo $item['autorID'];?></td>
                            <td><?php echo $item['generoLibroID'];?></td>
                            <td><?php echo $item['editorialID'];?></td>
                            <td><?php echo $item['importancia'];?></td>
                            <td><a href="<?php echo base_url(); ?>" class="btn btn-warning" role="button" ><i class="fa fa-trash"></i></a></td>

                            <td><a href="<?php echo base_url(); ?>/Home/borrar_libro?id=<?php echo $item['libroID']; ?>"class="btn btn-danger" role="button" ><i class="fa fa-pencil"></i></a></td>
    
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

