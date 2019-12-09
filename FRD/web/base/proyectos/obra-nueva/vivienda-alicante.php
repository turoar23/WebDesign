<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-alicante';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda',
        'img' => [
            '/img/'.$ruta.'/img1.jpg',
            '/img/'.$ruta.'/img2.jpg'
        ]
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template2.php';
?>