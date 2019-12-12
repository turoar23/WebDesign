<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-alicante';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Alicante',
        'ubicacion' => 'Alicante',
        'final-obra' => 'Marzo de 2018',
        'plazo' => '10 meses',
        'metros' => '400 m²',
        'n-plantas' => 'Sotano + baja',
        'portada' => '/img/'.$ruta.'/portada.JPG',
        'img' => [
            '/img/'.$ruta.'/img14.JPG',
            '/img/'.$ruta.'/img1.jpg',
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.jpg',
            '/img/'.$ruta.'/img4.jpg',
            '/img/'.$ruta.'/img5.jpg',
            '/img/'.$ruta.'/img6.JPG',
            '/img/'.$ruta.'/img7.JPG',
            '/img/'.$ruta.'/img8.JPG',
            '/img/'.$ruta.'/img9.JPG',
            '/img/'.$ruta.'/img10.JPG',
            '/img/'.$ruta.'/img11.JPG',
            '/img/'.$ruta.'/img12.JPG',
            '/img/'.$ruta.'/img13.JPG'
        ]
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>