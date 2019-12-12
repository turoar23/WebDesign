<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-monovar-3-alturas';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Monóvar 2 Alt',
        'ubicacion' => 'Monóvar',
        'final-obra' => 'Febrero de 2018',
        'plazo' => '9 meses',
        'metros' => '290 m²',
        'n-plantas' => 'Sotano + baja + 1 planta',
        'portada' => '/img/'.$ruta.'/portada.JPG',
        'img' => [
            '/img/'.$ruta.'/img1.jpg',
            '/img/'.$ruta.'/img2.jpg',
            '/img/'.$ruta.'/img3.JPG',
            '/img/'.$ruta.'/img4.JPG',
            '/img/'.$ruta.'/img5.JPG',
            '/img/'.$ruta.'/img6.JPG',
            '/img/'.$ruta.'/img7.JPG',
            '/img/'.$ruta.'/img8.JPG',
            '/img/'.$ruta.'/img9.JPG',
            '/img/'.$ruta.'/img10.JPG',
            '/img/'.$ruta.'/img11.JPG',
            '/img/'.$ruta.'/img12.JPG',
        ]
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>