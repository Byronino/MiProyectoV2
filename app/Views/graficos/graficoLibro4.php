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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>


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





    <div class="container">
        
        <h2>Grafico 4</h2>
        <div class="row">
            <div class="col-2">
                
            </div>
            <div class="col-8">
            <?php 
                        $con = new mysqli('localhost','root','','biblioteca');
                        /*$query = $con->query("
                        SELECT nombregenero,count(libro.generolibroid) AS contadorgenero
                        FROM libro JOIN generolibro WHERE libro.generoLibroID = generolibro.generoLibroID
                        GROUP BY nombregenero;
                        ");*/
                        $query = $con->query("
                        SELECT nombreLibro, importancia 
                        FROM libro;
                        ");

                        foreach($query as $data)
                        {
                            $month[] = $data['importancia'];
                            $amount[] = $data['nombreLibro'];
                        }

                        ?>

                    <div>
                        <canvas id="myChart"></canvas>
                    </div>

            </div>
            <div class="col-2"></div>
        </div>

                    

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script>
    const labels = <?php echo json_encode($amount) ?>;

    const data = {
        labels: labels,
        datasets: [{
        label: 'Importancia de cada libro',
        backgroundColor: [
                '#50CB5B',
                '#50B8CB',
                '#D35935',
                '#3541D3',
                '#C235D3',
                '#D33584'
            ],
        borderColor: '#000000',
        data: <?php echo json_encode($month) ?>,
        }]
    };

    const config = {
            type: 'polarArea',
            data: data,
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };
    </script>

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
 

    <script>

        var tabla= document.querySelector("#tablaLibro")

        var dataTable = new DataTable(tablaLibro);
    </script>

</body>
</html>

