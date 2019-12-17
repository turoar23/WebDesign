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
            '/img/'.$ruta.'/img12.jpg'
        ]
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>