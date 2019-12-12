<?php
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-viviendas/piso-elda';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Piso Elda',
        'ubicacion' => 'Elda',
        'final-obra' => 'Diciembre de 2016',
        'plazo' => '4 meses',
        'metros' => '190 m²',
        'n-plantas' => '1 planta',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => [
            '/img/'.$ruta.'/portada.jpg',
        ]
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>