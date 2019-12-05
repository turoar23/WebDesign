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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="/assets/css/all.css"> <!--load all styles -->
  <link rel="stylesheet" href="https://use.typekit.net/fme5ecn.css">

  <link rel="stylesheet" media="(max-width:800px)" href="css/style-small.css">
  <link rel="stylesheet" media="(min-width:801px)" href="css/style-large.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="img/favicon.png">

</head>
<body>
  <?php include("comun/header.php"); ?>
  <main>
    <!--<div class = "top-image">
      
    </div>-->
    <div class = "gallery-top">
      <div class = "wrap g-img1">
        <img src="img/img1.JPG" />
        <div class = "wrap-text">
          <a href="">Texto</a>
        </div>
      </div>
      <img class ="g-img2" src="img/img2.JPG" />
    </div>
    <div class = "main-body">
      <div class = "text proyectos">
        <span class = "text-categories" id = "on">OBRA NUEVA</span>
        <span class = "text-categories" id = "rl">REFORMAS LOCALES</span>
        <span class = "text-categories" id = "rv">REFORMAS VIVIENDAS</span>
      </div>
      <div class = "text frd">
        <span class = "text-categories" id = "qs">QUIENES SOMOS</span>
      </div>
      <div class = "text contacto">
        <div class = "m2">
          <span class = "text-categories" id = "co">CONTACTO</span>
        </div><div class = "m2">
          <span class = "text-categories" id = "de">DONDE ESTAMOS</span>
        </div>
      </div>
      <div class = "main-gallery">
        <div id = "principal" class = "main-index active">
          <img class ="g-img3" src="img/img3.jpg" />
          <img class ="g-img4" src="img/img4.jpg" />
          <img class ="g-img5" src="img/img5.JPG" />
          <img class ="g-img6" src="img/img6.png" />
        </div>
        <!-- Proyectos -->
        <div id = "obra-nueva" class = "main-index">
          <div class = "efecto">
            <img lazy="img/proyectos/obra-nueva/passive-vehouse-dolores/portada.jpg" />
            <div class = "efecto-texto">
              <a href = "/proyectos/obra-nueva/passive-vehouse-dolores.php" class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
          <div class = "efecto">
            <img lazy="img/proyectos/obra-nueva/vivienda-alicante/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante<h4>
              </a>
            </div>
          </div>
          <div class = "efecto">
            <img lazy="img/proyectos/obra-nueva/vivienda-lomabada/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
          <div class = "efecto">
            <img lazy="img/proyectos/obra-nueva/vivienda-monovar-1-altura/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
          <div class = "efecto">
            <img lazy="img/proyectos/obra-nueva/vivienda-monovar-3-alturas/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
        </div>
        <div id = "reformas-locales" class = "main-index">
          <div class = "efecto">
            <img lazy="img/proyectos/reformas-locales/clinica-dental-kident/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
          <div class = "efecto">
            <img lazy="img/proyectos/reformas-locales/pasteleria-la-confiteria/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
        </div>
        <div id = "reformas-viviendas" class = "main-index">
          <div class = "efecto">
            <img lazy="img/proyectos/reformas-viviendas/apartamento-san-juan-n1/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
          <div class = "efecto">
            <img lazy="img/proyectos/reformas-viviendas/apartamento-san-juan-n2/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
          <div class = "efecto">
            <img lazy="img/proyectos/reformas-viviendas/atico-elda/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
          <div class = "efecto">
            <img lazy="img/proyectos/reformas-viviendas/piso-elda/portada.jpg" />
            <div class = "efecto-texto">
              <a class = "cuadro">
                <h3>Casa señorial</h3>
                <h4>Alicante</h4>
              </a>
            </div>
          </div>
        </div>
        <!-- frd -->
        <div id = "quienes-somos" class = "frd-categorias hide card">
          <div class = "contenido-izquierda">
            <div class = "content">
              <img src="/img/proyectos/obra-nueva/passive-vehouse-dolores/portada.jpg" alt="Los Angeles">
            </div>
			    </div>
			    <div class = "contenido-derecha">
            <div class = "content">
              <div class = "content-texto">
                <h3>FRD</h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus ornare diam sit amet elementum. Aliquam ac leo faucibus, aliquet elit et, dapibus sapien. Sed mollis mauris vel nulla ultricies, vitae aliquam nulla pulvinar. Phasellus vitae mi sed ante auctor molestie id et quam. Aenean ac ipsum a diam condimentum eleifend vel id metus. Vivamus varius sed lectus at dapibus. Ut imperdiet congue lectus, non interdum tortor aliquet varius. Vestibulum condimentum nibh vel metus vehicula porta. Praesent magna mi, blandit eu vestibulum at, consectetur in eros. Vivamus non ante eu risus malesuada aliquet a id tellus. Integer pellentesque quam sed felis ornare, a sodales orci feugiat. Duis at mi felis. Ut porta, ipsum dapibus tempus sagittis, erat metus molestie nibh, vel luctus enim quam vel diam.
              </div>
            </div>
			    </div>
        </div>
        <!-- Contacto -->
        <div id = "contacto" class = "frd-categorias hide card">
          <div class = "contenido-izquierda">
            <div class = "content">
              <img src="/img/proyectos/obra-nueva/passive-vehouse-dolores/portada.jpg" alt="Los Angeles">
            </div>
			    </div>
			    <div class = "contenido-derecha">
            <div class = "content">
              <div class = "content-texto">
                <h3>Email</h3>
                <i class = "far fa-envelope"></i> example@example.com
                <h3>Teléfono</h3>
                <i class = "fas fa-phone-alt"></i> +34 689 68 96 89
              </div>
            </div>
			    </div>
        </div>
        <div id = "donde-estamos" class = "frd-categorias hide card">
          <div class = "contenido-izquierda">
            <div class = "content">
              <div class = "content-texto">
                <h3>Alicante</h3>
                C/Francisco Alonso,57, Bajo, 03600. ELDA
              </div>
            </div>
			    </div>
			    <div class = "contenido-derecha">
            <div class = "content">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3123.463653341408!2d-0.7907523846619963!3d38.47694197963764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63c5297c458409%3A0x44c1aa01a4b8db99!2sCalle%20Francisco%20Alonso%2C%2057%2C%2003600%20Elda%2C%20Alicante!5e0!3m2!1ses!2ses!4v1575576039305!5m2!1ses!2ses" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
			    </div>
        </div>
        <!-- -->
      </div>
    </div>
  </main>
<!-- End Document -->
</body>

<script src="js/jquery-3.4.1.min.js"></script>

<script src="js/custom.js"></script>

</html>
