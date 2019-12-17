<?php
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-viviendas/apartamento-san-juan-n2';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Apartamento San Juan 2',
        'ubicacion' => 'San Juan',
        'final-obra' => 'Mayo de 2018',
        'plazo' => '4 meses',
        'metros' => '85 m²',
        'n-plantas' => '1 planta',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => [
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.jpg',
            '/img/'.$ruta.'/img4.jpg',
            '/img/'.$ruta.'/img5.jpg',
            '/img/'.$ruta.'/img6.jpg',
            '/img/'.$ruta.'/img7.jpg'
        ]
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>