<?php
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-locales/pasteleria-la-confiteria';
    // Definicion de atributos
    $datos = [
        'nombre' => 'La confiteria',
        'ubicacion' => 'El Altet',
        'final-obra' => 'Febrero de 2018',
        'plazo' => '3 semanas',
        'metros' => '75 m²',
        'n-plantas' => 'Baja',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => [
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.jpg',
            '/img/'.$ruta.'/img4.jpg',
            '/img/'.$ruta.'/img5.jpg'
        ]
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>