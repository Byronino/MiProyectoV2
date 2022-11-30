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
    <title></title>
</head>
    <body>
    <?php
 
        use App\Models\autorModel;
        use App\Models\libroModel;
        use App\Models\generoModel;
        use App\Models\editorialModel;
        use App\Models\solicitudModel;
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

<div class="container">
    <div class="row">
    <img src="<?php echo base_url(); ?>/images/white.jpg" alt="Michi" width="100%" height="20">
        
    </div>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-8"style="background-color:white;border:solid;border-radius:20px">
            <div class="row">
            <img src="<?php echo base_url(); ?>/images/white.jpg" alt="Michi" width="100%" height="10">

            </div>
            <div class="row">
                <div class="col-4">
                    <?php $nombre=$session->get('name');?>
                    <img src="<?php echo base_url()?>/images/<?php echo $nombre ?>.jpg" width="200px" height="200" style="border:solid;border-radius:20px">
                    
                </div>
                <div class="col-3">
                <img src="<?php echo base_url(); ?>/images/white.jpg" alt="Michi" width="100%" height="10">

                <div class="row">Nombre: <?php $session = session(); echo $session->get('name');?> </div>
                <div class="row">Email: <?php $session = session(); echo $session->get('email');?>  </div>
                
                <?php 
                 $id=$session->get('id');
                 //print_r($id);
                 $db = \Config\Database::connect();
                 $userModel=new libroModel($db);
                 $solicitud=new solicitudModel($db);
                 $objetito2= new autorModel($db);
                 $objetito3= new editorialModel($db);
                 $objetito4= new generoModel($db);
                 $users2= $objetito2->findAll();
                 $users3= $objetito3->findAll();
                 $users4= $objetito4->findAll();
                 $users = $userModel->findAll();
                 $users6= $solicitud->findAll();
                 $data['listaLibro']=$users;
                 $data['listaSolicitud']=$users6;
                 $data['listaAutor']=$users2;
                $data['listaEditorial']=$users3;
                $data['listaGenero']=$users4;
                 $contador=0;
                 foreach($data['listaSolicitud'] as $item):
                    if($item['userID']===$id){
                        $contador=$contador+1;
                    }
                 endforeach;
                ?>


                <div class="row">Libros pedidos: <?php echo $contador?>  </div>



                <?php 
                $tipo=$session->get('type');
                if($tipo==='0'){?>
                    <div class="row">Tipo: Usuario </div>
                <?php } 
                else{?> 
                    <div class="row">Tipo: Administrador </div>
                <?php }?>
                <div class="row">
                <img src="<?php echo base_url(); ?>/images/white.jpg" alt="Michi" width="100%" height="15">

                </div>
                <div class="row">           
                    <a type="button" class="btn btn-info" href="<?php echo base_url(); ?>/Home/cambiar_perfil"><h4 style="color:white">Cambiar foto de perfil</h4></a>
                </div>
                </div>
            </div>    
            <div class="row">
            <img src="<?php echo base_url(); ?>/images/white.jpg" alt="Michi" width="100%" height="10">

            </div>   
        </div>
        <div class="col-1">
           
        </div>
    </div>
    <img src="<?php echo base_url(); ?>/images/white.jpg" alt="Michi" width="100%" height="10">

    <div class="container">
        
        <h2>Listado de libros pedidos</h2>
     
       
                    <table class="table table-dark table-striped" id="tablaLibro">
                        <thead>
                        <tr>
                            <th scope="col">id Libro</th>
                            <th scope="col">Nombre del libro</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Importancia</th>
                            
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['listaLibro'] as $item):?>
                            <tr>
                            <?php foreach ($data['listaSolicitud'] as $sol):
                                if($sol['libroID']===$item['libroID'] && $sol['userID']===$id){?>
                                    <td><?php echo $item['libroID'];?></td>
                                    <td><?php echo $item['nombreLibro'];?></td>
                                <?php foreach ($data['listaAutor'] as $autor):
                                if($autor['autorID']===$item['autorID']){?>
                                    <td> <?php echo $autor['nombreAutor'];?> </td>
                                <?php
                                }

                                endforeach;
                                ?>
                            <?php foreach ($data['listaGenero'] as $genero):
                                if($genero['generoLibroID']===$item['generoLibroID']){?>
                                    <td> <?php echo $genero['nombreGenero'];?> </td>
                                <?php
                                }

                                endforeach;
                                ?>
                            <?php foreach ($data['listaEditorial'] as $editorial):
                                if($editorial['editorialID']===$item['editorialID']){?>
                                    <td> <?php echo $editorial['nombreEditorial'];?> </td>
                                <?php
                                }

                                endforeach;
                                ?>
                            <td><?php echo $item['importancia'];?></td>
                                <?php
                                }

                                endforeach;
                                ?>
                            
                            
                            
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>

                   

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
<script>

//var tabla= document.querySelector("#tablaLibro")

//var dataTable = new DataTable(tablaLibro);
//let table = new DataTable('#tablaLibro', {paging: false,
//scrollY: 400
// options
//});
a =new DataTable( '#tablaLibro', {
paging: false,
scrollY:        200,
deferRender:    true,
scroller:       true
} );
</script>

 
        
</div>
</body>
</html>