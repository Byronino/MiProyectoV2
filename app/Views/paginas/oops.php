<!DOCTYPE html>
<html lang="en">
<head>
	<title id="Description">QRcode demo.</title>
	<link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
	<script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="../../jqwidgets/jqxbarcode.js"></script>
	<script type="text/javascript" src="../../jqwidgets/jqxqrcode.js"></script>
	<script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="../../../scripts/demos.js"></script>
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
	<div id="">
		<section>
			<div>
				<h2>A QR Code is a type of two-dimensional barcode that representing data in a visual, machine-readable
					form.</h2>
				<div class="module">
					<p>
						QR codes are ideal components for programmatically encoding data.
						They are often cused to ontain data for a locator, identifier, or tracker that points to a
						website or application.
					</p>
				</div>
			</div>
		</section>
		<section>
			<h2>QR Code rendering modes</h2>
			<div class="module">
				<p>
					QR Codes can be rendered as an &lt;svg> and &lt;canvas> element.<br />
					Using the <b>svg</b> rendering mode is recommended as the QR Code doesn't lose quality when it is
					zoomed.
				</p>
			</div>
			<div class="module qrcode-container">
				<div render-as="svg" value="SVG RENDER"></div>
				<div render-as="canvas" value="CANVAS REN"></div>
			</div>
		</section>
		<section>
			<h2>QR Code Encoding Modes</h2>
			<div class="module">
				<p>
					The qrcode element supports the following encoding modes:
				<ul>
					<li>
						<b>Numeric</b>
					</li>
					<li>
						<b>Alphanumeric</b>
					</li>
					<li>
						<b>Byte / Binary</b>
					</li>
					<li>
						<b>Kanji</b>
					</li>
				</ul>
				</p>
			</div>
			<div class="module qrcode-container">
				<div class="qrcode" value="こんにちは世界" display-label="true" label-position="top" label-font-size="20">
				</div>
				<div class="qrcode" value="HELLO WORLD" display-label="true" label-position="top" label-font-size="20">
				</div>
			</div>
		</section>
		<section>
			<h2>QR Code Error Correction Levels</h2>
			<div class="module">
				<p>
					The QR Code component supports all four error correction levels: <b>L</b>, <b>M</b>, <b>Q</b>, and
					<b>H</b>.<br>
					The higher the Error Correction Level, the higher is the amount of data that can be retrieved if
					part of the QR Code is damaged or hidden.
				</p>
			</div>
			<div class="module qrcode-container">
				<div>
					<h4><b>L</b> level encoding of <b>"Hello world"</b></h4>
					<div class="qrcode" value="Hello world" error-level="L"></div>
				</div>
				<div>
					<h4><b>H</b> level encoding of <b>"Hello world"</b></h4>
					<div class="qrcode" value="Hello world" error-level="H"></div>
				</div>
			</div>
		</section>
		<section>
			<h2>QR Code Embed Image</h2>
			<div class="module">
				<p>
					When the Error Correction Level is sufficiently high, it is possible to embed an Image inside the QR
					Code.<br>
					The maximum size of the image depends on the Error Correction Level and the QR Code value.
				</p>
			</div>
			<div class="module qrcode-container">
				<div class="qrcode" value="GITHUB.COM"
					embed-image="https://cdn3.iconfinder.com/data/icons/inficons/512/github.png" image-width="40px"
					image-height="40px"></div>
				<div class="qrcode" value="ANGULAR.IO"
					embed-image="https://angular.io/assets/images/logos/angular/angular.svg" image-width="60px"
					image-height="60px"></div>
		</section>
		<section>
			<h2>Appearance</h2>
			<div class="module">
				<p>The QR Code's color, background color and square dimensions can be customized by their respective
					properties.</p>
				<p>The label of the QR Code can be set to visible or hidden with <b>displayLabel</b>.
					Its color, font, size, margins and position can be customized by their respective properties.</p>
			</div>
			<div class="module qrcode-container">
				<div class="qrcode" value="HTMLELEMENTS.COM" label-position="top" label-font-size="15"
					label-color="orange" label-font="arial" line-color="orange" display-label="true"></div>
				<div class="qrcode" value="JQWIDGETS.COM" label-position="top" label-font-size="20" label-color="red"
					label-font="helvetica" line-color="darkblue" display-label="true"></div>
			</div>
		</section>
		<section>
			<h2>Demo</h2>
			<div class="module">
			</div>
			<div id="barcode-demo-container" class="module">
				<div class="card-container">
					<div class="card-body">
						<h3>Rock Concert</h3>
						<img height="170" alt="Rock Concert"
							src="https://upload.wikimedia.org/wikipedia/commons/0/05/Interior_del_estadio_Ruca_Che.JPG" />
						<h4>For more information:</h4>
					</div>
					<div class="card-footer">
						<div class="qrcode" value="Rock Concert" square-width="6"></div>
					</div>
				</div>
				<div class="card-container">
					<div class="card-body">
						<h3>7-day Spa Vacation</h3>
						<img height="170" alt="Spa massage"
							src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Taj_Spa_4.jpg" />
						<h4>For more information:</h4>
					</div>
					<div class="card-footer">
						<div class="qrcode" value="Spa Vacation" square-width="6"></div>
					</div>
				</div>
				<div class="card-container">
					<div class="card-body">
						<h3>10-day Skiing Holiday</h3>
						<img height="170" alt="Skiing village"
							src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Ruka_Village_%288361909910%29.jpg/1280px-Ruka_Village_%288361909910%29.jpg" />
						<h4>For more information:</h4>
					</div>
					<div class="card-footer">
						<div class="qrcode" value="Skiing Holiday" square-width="6"></div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div style="position: absolute; bottom: 5px; right: 5px;">
		<a href="https://www.jqwidgets.com/" alt="https://www.jqwidgets.com/"><img alt="https://www.jqwidgets.com/"
				title="https://www.jqwidgets.com/"
				src="https://www.jqwidgets.com/wp-content/design/i/logo-jqwidgets.png" /></a>
	</div>
</body>
</html>