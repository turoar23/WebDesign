<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-lomabada';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Loma Bada',
        'ubicacion' => 'Petrer',
        'final-obra' => 'Julio de 2017',
        'plazo' => '5 meses',
        'metros' => '250 m²',
        'n-plantas' => 'Sotano + baja',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => [
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.jpg',
            '/img/'.$ruta.'/img4.jpg',
            '/img/'.$ruta.'/img5.jpg',
            '/img/'.$ruta.'/img6.jpg',
            '/img/'.$ruta.'/img7.jpg',
        ]
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>