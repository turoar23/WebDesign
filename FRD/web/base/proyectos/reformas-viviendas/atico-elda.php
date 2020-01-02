<?php
    include_once('../../comun/language.php');
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-viviendas/atico-elda';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 10; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Ático Elda',
        'ubicacion' => 'Elda',
        'final-obra' => getTexto('Julio de 2019'),
        'plazo' => '3 '.getTexto('meses'),
        'metros' => '250 m²',
        'n-plantas' => getTexto('Dúplex'),
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>