<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/passive-vehouse-dolores';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Passive Dolores',
        'ubicacion' => 'Dolores',
        'final-obra' => 'Abril de 2018',
        'plazo' => '12 meses',
        'metros' => '380 m²',
        'n-plantas' => 'Baja + 1',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => [
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.jpg',
            '/img/'.$ruta.'/img4.jpg',
            '/img/'.$ruta.'/img5.jpg',
            '/img/'.$ruta.'/img6.jpg',
            '/img/'.$ruta.'/img7.jpg',
            '/img/'.$ruta.'/img8.jpg',
            '/img/'.$ruta.'/img9.jpg'
        ]
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>