<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-monovar-1-altura';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Monóvar 1 Alt',
        'ubicacion' => 'Monóvar',
        'final-obra' => 'Agosto de 2019',
        'plazo' => '10 meses',
        'metros' => '230 m²',
        'n-plantas' => 'Baja',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => [
            '/img/'.$ruta.'/img1.jpg',
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.JPG',
            '/img/'.$ruta.'/img4.jpg',
            '/img/'.$ruta.'/img5.jpg',
            '/img/'.$ruta.'/img6.jpg',
            '/img/'.$ruta.'/img7.jpg'
        ]
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>