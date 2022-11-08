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
    <div class="container" style="background-color:#D9D9D9;">
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
                    <div class="row">

                        <div class="col-3">

                        </div>
                        <div class="col-8">
                        <h1>Bienvenido señor/a
                                <?php $session = session(); echo " : ".$session->get('name');?>
                            </h1>

                        </div>
                        <div class="col-1">

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-3">
                    
                        </div>
                        <div class="col-8">
                        <?php $nombre=$session->get('name');?>
                        <img src="<?php echo base_url()?>/images/<?php echo $nombre ?>.jpg" width="600px" height="500" style="border:solid;border-radius:20px">
                        </div>
                        <div class="col-1">
                    
                        </div>
                    </div>
                    
                    
                <?php
                }
                else{?>
                
        <div class="row">

            <div class="col-3">
           
            </div>
            <div class="col-8">
                <h1>    Bienvenido a la librería</h1>

            </div>
            <div class="col-1">
           
            </div>
        </div>

        <div class="row">

            <div class="col-3">
           
            </div>
            <div class="col-8">
            <img src="https://http2.mlstatic.com/D_NQ_NP_624499-MLC44842915071_022021-O.jpg" width="600px" height="500" style="border:solid;border-radius:20px">
            
            </div>
            <div class="col-1">
           
            </div>
        </div>
        

        <?php
        }
    
        ?>
   

        
         
            
            <br>    
        </div>
                
        

    </body>
</html>