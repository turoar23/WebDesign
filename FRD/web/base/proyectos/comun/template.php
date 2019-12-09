<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>FRD</title>
  <meta name="description" content="">
  <meta name="author" content="Arturo J. Zambrano P.">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
  <link rel="stylesheet" href="/css/carousel.css">

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/assets/css/all.css"> <!--load all styles -->
  <link rel="stylesheet" href="https://use.typekit.net/fme5ecn.css">

  <link rel="stylesheet" media="(max-width:800px)" href="/css/style-small.css">
  <link rel="stylesheet" media="(min-width:801px)" href="/css/style-large.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/img/favicon.png">

</head>
<body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/comun/header.php"); ?>
	<main class = "container-proyectos">
		<div class="container">
  			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    			<!-- Indicators -->
    			<ol class="carousel-indicators">
					<?php 
						for($i = 0;$i < count($datos['img']); $i++){
							$cadena = '<li data-target="#myCarousel" data-slide-to='.$i;
							if($i == 0)
								$cadena = $cadena.' class="active"';
							print $cadena.'></li>';
						}
					?>
    			</ol>
    			<!-- Wrapper for slides -->
    			<div class="carousel-inner">
					<?php
						for($i = 0;$i < count($datos['img']); $i++){
							if($i == 0){
								print '<div class="item active">';
							}else
								print '<div class="item">';
							print '<img src="'.$datos['img'][$i].'" style="width:100%;">
							</div>';
						}
					?>
	    		</div>	
    			<!-- Left and right controls -->
    			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      				<span class="glyphicon glyphicon-chevron-left"></span>
      				<span class="sr-only">Previous</span>
    			</a>
    			<a class="right carousel-control" href="#myCarousel" data-slide="next">
      				<span class="glyphicon glyphicon-chevron-right"></span>
      				<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class = "descripcion" style = "width:100%;">
			<h1><?php echo $datos['nombre']; ?></h1>
			<div class = "contenido-izquierda" style = "width:100%;">
				<div class = "content">
					<div class = "tabla">
						<div class = "fila">
							<span class = "info-izq">Provincia</span>
							<span class = "info-der">Alicante</span>
						</div>
						<div class = "fila">
							<span class = "info-izq">Localidad</span>
							<span class = "info-der">Dolores</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

<script src="/js/jquery-3.4.1.min.js"></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>

<script src="/js/carousel.js"></script>
<script src="/js/custom.js"></script>

</html>
