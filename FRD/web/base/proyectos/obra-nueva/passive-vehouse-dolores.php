<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/passive-vehouse-dolores';
    // Definicion de atributos
    $datos = [
        'nombre' => 'Passive Vehouse',
        'img' => [
            '/img/'.$ruta.'/img1.jpg',
            '/img/'.$ruta.'/img2.jpg'
        ]
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>