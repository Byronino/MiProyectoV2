<!DOCTYPE html>
<html lang="en">
<head>
	<title id="Description">Bienvenido a la libreria</title>
	<link rel="stylesheet" href="https://www.jqwidgets.com/jquery-widgets-demo/jqwidgets/styles/jqx.base.css" type="text/css" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/jqwidgets/jqxbarcode.js"></script>
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/jqwidgets/jqxqrcode.js"></script>
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/scripts/demos.js"></script>
	<style>
	</style>
	<script type="text/javascript">
		window.onload = function () {
			const qrcodes = [...document.querySelectorAll('.qrcode')];
			for (let i = 0; i < qrcodes.length; i++) {
				const qrcodeElement = qrcodes[i];
				const renderAs = qrcodeElement.getAttribute('render-as') || 'svg';
				const displayLabel = qrcodeElement.hasAttribute('display-label') ? true : false;
				const value = qrcodeElement.getAttribute('value');
				const labelPosition = qrcodeElement.getAttribute('label-position') || 'bottom';
				const errorLevel = qrcodeElement.getAttribute('error-level') || 'L';
				const embedImage = qrcodeElement.getAttribute('embed-image') || '';
				// create Barcode component
				new jqxQRcode(qrcodeElement, {
					renderAs: renderAs,
					value: value,
					errorLevel: errorLevel,
					labelPosition: labelPosition,
					embedImage: embedImage,
					imageWidth: 40,
					imageHeight: 60,
					displayLabel: displayLabel
				});
			}
		}
	</script>
</head>
<body>
<div class="module qrcode-container">
			
		<div class="container">
        <div class="row">

            <div class="col-1">
           
            </div>
            <div class="col-10">
            <img src="<?php echo base_url(); ?>/images/elmo.gif" alt="Michi" width="100%" height="300">

            </div>
            <div class="col-1">
           
            </div>
        </div>
        <div class="row">
            <h1><p><u>Contenido Web</u></p></h1>
        </div>
        <div class="row">
        <div class="card" style="width: 22rem;">
            <img src="https://teatroamil.cl/media/images/yuxsXyAm.2e16d0ba.fill-1154x770.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">El tono es ingenuo pero de manera algo engañosa, porque al mismo tiempo contiene bien dosificados arranques de humor socarrón y puntudo para la delicia de los mayores</p>
            </div>
        </div>
        <div class="card" style="width: 22rem;">
            <img src="http://formacionib.org/noticias/IMG/arton2280.jpg?1580320661" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">La vida de un crítico es sencilla en muchos aspectos, arriesgamos poco, y tenemos poder sobre aquellos que ofrecen su trabajo y su servicio a nuestro juicio.</p>
            </div>
        </div>
        <div class="card" style="width: 22rem;">
            <img src="https://cdn.verbub.com/images/esto-esta-muy-a-como-dicen-los-chavos-221422.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Como dicen los lolos</p>
            </div>
        </div>
        
            
        </div>
        <div class="row">
            <h1><p><u>Mas contenido Web</u></p></h1>
        </div>
        <div class="row">
        <div class="card" style="width: 22rem;">
            <img src="https://i1.sndcdn.com/avatars-000342155287-3aw4j1-t500x500.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bottom-Text</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Arriba</a>
            </div>
            </div>
            <div class="card" style="width: 22rem;">
            <img src="https://i1.sndcdn.com/avatars-000342155287-3aw4j1-t500x500.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Place-Holder</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Más arriba</a>
            </div>
            </div>
            <div class="card" style="width: 22rem;">
            <img src="https://i1.sndcdn.com/avatars-000342155287-3aw4j1-t500x500.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Lorem ipsum</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">:3</a>
            </div>
            </div>
        </div>
		<div class="row">
            <h1><p><u> Consejos para leer un libro correctamente y no rendirse a mitad de camino</u></p></h1>
        </div>
        <div class="row">
			<div class="p-3">
				<div class="container-fluid" style="width: 22rem;">
					<h5 class="card-title">3 tips para leer libros por semana</h5>
					<div class="qrcode" value="https://www.youtube.com/watch?v=lQ7i7uhNWLM&ab_channel=LaP%C3%ADldoraM%C3%A1gica" label-position="top" label-font-size="20" label-color="red"
							label-font="helvetica" line-color="darkblue"></div>
					</div>
				</div>
			</div>
			<div class="p-3">
				<div class="container-fluid" style="width: 22rem;">
					<h5 class="card-title">Como leer libros de forma efectiva</h5>
					<div class="qrcode" value="https://www.youtube.com/watch?v=q1wxYd6LCpo&ab_channel=LaP%C3%ADldoraM%C3%A1gica" label-position="top" label-font-size="20" label-color="red"
							label-font="helvetica" line-color="darkblue"></div>
					</div>
				</div>
			</div>
        </div>
    
       
        

    </body>
</html>

