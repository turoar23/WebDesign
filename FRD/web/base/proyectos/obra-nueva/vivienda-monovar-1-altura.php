<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-monovar-1-altura';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Monóvar 1 Altura',
        'ubicacion' => 'Monóvar',
        'final-obra' => 'Agosto de 2019',
        'plazo' => '10 meses',
        'metros' => '230 m²',
        'n-plantas' => 'Baja',
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
            '/img/'.$ruta.'/img11.jpg'
        ]
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>