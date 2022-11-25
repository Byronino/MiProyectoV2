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
        
</div>
</body>
</html>