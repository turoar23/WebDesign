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
            '/img/'.$ruta.'/img10.jpg'
        ]
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>