<?php
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-viviendas/apartamento-san-juan-n1';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Apartamento San Juan 1',
        'ubicacion' => 'San Juan',
        'final-obra' => 'Enero de 2018',
        'plazo' => '3 meses',
        'metros' => '100 m²',
        'n-plantas' => '1 planta',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => [
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.jpg',
            '/img/'.$ruta.'/img4.jpg',
            '/img/'.$ruta.'/img5.jpg',
            '/img/'.$ruta.'/img6.jpg'
        ]
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>