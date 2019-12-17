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
            '/img/'.$ruta.'/img11.jpg',
            '/img/'.$ruta.'/img12.jpg',
            '/img/'.$ruta.'/img13.jpg'
        ]
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>