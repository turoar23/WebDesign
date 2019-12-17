<?php
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-viviendas/atico-elda';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Ático Elda',
        'ubicacion' => 'Elda',
        'final-obra' => 'Julio de 2019',
        'plazo' => '3 meses',
        'metros' => '250 m²',
        'n-plantas' => 'Duplex',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => [
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.jpg',
            '/img/'.$ruta.'/img4.jpg'
        ]
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>