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
            <img src="<?php echo base_url()?>/images/sanscrito.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Un algoritmo descifra la gramática del sánscrito después de 2.500 años</p>
            </div>
        </div>
        <div class="card" style="width: 22rem;">
            <img src="<?php echo base_url()?>/images/1800.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Biografía de '1984', la novela que mejor sintetizó los terrores del siglo XX en Europa
'El ministerio de la verdad', de Dorian Lynskey, da las claves para entender la actualidad de la 'biblia' de Orwell contra la tentación totalitaria y contra los populismos</p>
            </div>
        </div>
        <div class="card" style="width: 22rem;">
        <img src="<?php echo base_url()?>/images/rafa.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                <p class="card-text">Los textos taurinos de Rafael Sánchez Ferlosio: "Los españoles se llevan a la plaza de toros lo más despreciable que tienen". Un volumen reúne los textos que, a lo ancho de medio siglo, escribió de corridas de toros, sobre lo que ocurre alrededor de ellas y sobre lo que hay más allá de la condición del entendido</p>
            </div>
        </div>
        
            
        </div>
        <div class="row">
            <h1><p><u>Mas contenido Web</u></p></h1>
        </div>
        <div class="row">
        <div class="card" style="width: 22rem;">
            <img src="<?php echo base_url()?>/images/libros.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">'STAR WARS' ESTOS SON LOS MEJORES LIBROS DE LA SAGA</h5>
                <p class="card-text">Hoy os traemos una guía completita de todos los libros y cómics que debes leer si eres fan de 'Star Wars'. ¿Preparados para un último viaje a una galaxia muy, muy lejana...?</p>
                <a href="https://www.fotogramas.es/noticias-cine/g30725537/star-wars-mejores-libros-comics-universo-expandido/" class="btn btn-primary">Visitar sitio</a>
            </div>
            </div>
            <div class="card" style="width: 22rem;">
            <img src="<?php echo base_url()?>/images/libros2.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">¿Cuáles son los libros más vendidos y leídos actualmente?</h5>
                <p class="card-text">Si te gusta estar al tanto de los últimos best sellers y la actualidad literaria o si quieres regalar un libro e ir a lo seguro, lo que necesitas es conocer cuáles son los libros más vendidos.</p>
                <a href="https://www.casadellibro.com/libros-mas-vendidos" class="btn btn-primary">Visitar sitio</a>
            </div>
            </div>
            <div class="card" style="width: 22rem;">
            <img src="<?php echo base_url()?>/images/libros3.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Los 20 audiolibros en español más vendidos</h5>
                <p class="card-text">Descarga los audiolibros de los que todo el mundo habla y descubre por qué son los más vendidos y un fenómeno del que tienes que formar parte.</p>
                <a href="https://www.casadellibro.com/libros-mas-vendidos" class="btn btn-primary">Visitar Sitio</a>
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

