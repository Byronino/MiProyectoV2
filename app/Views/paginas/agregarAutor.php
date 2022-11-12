
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

    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

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
        $tipo=$session->get('type'); 
      }
    }
  }
?>
<div class="container">
    
        <h2>Listado de Autores</h2>
     
       
                    <table class="table table-dark table-striped" id="TablaAutor">
                        <thead>
                        <tr>
                            <th scope="col">ID Autor</th>
                            <th scope="col">Nombre del Autor</th>
                            <?php
                            if ($estadoLog&& $tipo==1){?>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                                <?php
                            }
                            ?>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($listaAutor as $item):?>
                            <tr>
                            
                            <td><?php echo $item['autorID'];?></td>
                            <td><?php echo $item['nombreAutor'];?></td>
                            <?php if ($estadoLog&& $tipo==1){?>
                                <td><a href="<?php echo base_url(); ?>/Home/enviarEditarAutor?id=<?php echo $item['autorID']; ?>" class="btn btn-warning" role="button" ><i class="fa fa-trash"></i></a></td>

                                <td><a href="<?php echo base_url(); ?>/Home/preguntaBorrarAutor?id=<?php echo $item['autorID']; ?>"class="btn btn-danger" role="button" ><i class="fa fa-pencil"></i></a></td>
                                
                            
                                <?php
                            }
                            ?>
                    
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>



                    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>                        
    <script>

        //var tabla= document.querySelector("#tablaLibro")

        //var dataTable = new DataTable(tablaLibro);
        //let table = new DataTable('#tablaLibro', {paging: false,
    //scrollY: 400
    // options
//});
    b =new DataTable( '#TablaAutor', {
    paging: false,
    scrollY:        200,
    deferRender:    true,
    scroller:       true
} );
    </script>
   
</body>
</html>