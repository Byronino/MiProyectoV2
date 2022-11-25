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

            <div class="col-1">
           
            </div>
            <div class="col-5">
            <label class="mt-2" for="age">Foto de perfil</label>
            </div>
            <div class="col-6">

            </div>
        </div>
        <div class="row">
        <div class="col-1">

         </div>
           <div class="col-5">
                <div class="container">
                <img src="<?php echo base_url(); ?>/images/elmo.gif" alt="Michi" width="100%" height="300"></div>
            </div>
            <div class="col-6">
                <?php $nombre=$session->get('name');?>
                <div class="row">Nombre: <?php $session = session(); echo $session->get('name');?> </div>
                <div class="row">Email: <?php $session = session(); echo $session->get('email');?>  </div>
                <div class="row">Tipo: <?php $session = session(); echo $session->get('type');?> </div>
                
                <div class="row"><img src="<?php echo base_url(); ?>/images/white.jpg" alt="Michi" width="100%" height="130"></div>
                <div class="row"> </div>
                <form action="<?= base_url()?>/Home/upload_image" enctype="multipart/form-data" method="post">
                <div class="row"><input class="form-comtrol" type="file" enctype="multipart/form-data" name='image'></div>
                <div class="row"><input type="submit" class="btn btn-primary mt-3 float-end" value="enviar"> </div>
                


           
            </div>
</div>
</body>
</html>