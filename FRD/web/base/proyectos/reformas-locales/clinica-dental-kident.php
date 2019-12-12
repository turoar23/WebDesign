<?php
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-locales/clinica-dental-kident';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Clínica Dental',
        'ubicacion' => 'Villena',
        'final-obra' => 'Octubre de 2019',
        'plazo' => '3 meses',
        'metros' => '190 m²',
        'n-plantas' => 'Baja',
        'portada' => '/img/'.$ruta.'/portada.JPG',
        'img' => [
            '/img/'.$ruta.'/img1.jpg',
            '/img/'.$ruta.'/img2.JPG',
            '/img/'.$ruta.'/img3.jpg',
            '/img/'.$ruta.'/img4.jpg',
            '/img/'.$ruta.'/img5.jpg',
            '/img/'.$ruta.'/img6.jpg',
        ]
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>