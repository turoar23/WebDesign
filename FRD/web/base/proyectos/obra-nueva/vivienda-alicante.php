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
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => [
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.jpg',
            '/img/'.$ruta.'/img4.jpg',
            '/img/'.$ruta.'/img5.jpg',
            '/img/'.$ruta.'/img6.jpg',
            '/img/'.$ruta.'/img7.jpg',
            '/img/'.$ruta.'/img8.jpg',
            '/img/'.$ruta.'/img9.jpg',
            '/img/'.$ruta.'/img10.jpg',
            '/img/'.$ruta.'/img11.jpg',
            '/img/'.$ruta.'/img12.jpg',
            '/img/'.$ruta.'/img13.jpg',
            '/img/'.$ruta.'/img14.jpg',
            '/img/'.$ruta.'/img15.jpg',
            '/img/'.$ruta.'/img16.jpg'
        ]
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>