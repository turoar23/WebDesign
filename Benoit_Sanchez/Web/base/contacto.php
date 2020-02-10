<!DOCTYPE html>
<html lang="es">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Benoit Sanchez</title>
  <meta name="description" content="">
  <meta name="author" content="Arturo J. Zambrano P.">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="/assets/css/all.css" rel="stylesheet"> <!--load all styles -->
  
  <link rel="stylesheet" media="(max-width: 800px)" href="css/style-small.css">
  <link rel="stylesheet" media="(min-width: 801px)" href="css/style-large.css">

  <link rel="stylesheet" media="(min-width:801px)" href="css/efecto.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="img/favicon.png">

</head>
<body>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class = "content">
  <?php include("comun/header.php"); ?>
    <div class = "team content-left">
      <!--<div class = "logo2">
        <img src="/img/logo2.png">
      </div>-->
      <div class="panel-heading">
        <!-- Contacto -->
        <?php
          if($_POST["submit"]) {
            $recipient="benoit@bsarquitectos.es";
            $subject="Mensaje desde página web";
            $sender=$_POST["sender"];
            $senderEmail=$_POST["senderEmail"];
            $message=$_POST["message"];
            $mailBody="Nombre: $sender\nEmail: $senderEmail\n\n$message";
            mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
            $thankYou="<p>'Gracias, su mensaje ha sido enviado.</p>";
          }
        ?>
        <div id = "contacto" class = "frd-categorias hide card">
          <form method="post" action="" class="form-contact content-texto">
            <h2>Empieza tu proyecto con nosotros</h2>
            <label for="exampleEmailInput">Nombre</label>
            <input class="u-full-width" type="text" placeholder="Nombre" id="exampleEmailInput" name="sender">
            <div class="row">
              <div class="six columns">
                <label for="exampleEmailInput">Correo</label>
                <input class="u-full-width" type="email" placeholder="ejemplo@email.com" id="exampleEmailInput" name="senderEmail">
              </div>
              <div class="six columns">
                <label for="exampleEmailInput">Teléfono</label>
                <input class="u-full-width" type="tel" placeholder="(+34) ..." id="exampleEmailInput" name="phone">
              </div>
            </div>
            <label for="exampleMessage">Mensaje</label>
            <textarea class="u-full-width" placeholder="Hola ..." id="exampleMessage"></textarea>
            <input class="btn" type="submit" name="submit" value="Enviar">
          </form>
        </div>
        <div class="info">  
          <p><i class = "far fa-envelope"></i><a href="mailto:benoit@bsarquitectos.es"> benoit@bsarquitectos.es</a></p>
          <p><i class = "fas fa-phone-alt"></i><a href="tel:+34655364816"> +34 655 364 816</a></p>
        </div>
      </div>
    </div>
    <div class = "team-img content-right">
      <img src="/img/contacto2.png">
    </div>
  </div>
<?php include('comun/footer.php');?>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
<script src="js/jquery-3.4.1.min.js"></script>

<script src="js/custom.js"></script>

</html>
