<?php
    include_once('../../comun/language.php');
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-viviendas/piso-elda';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 12; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Piso Elda',
        'ubicacion' => 'Elda',
        'final-obra' => getTexto('Diciembre de 2016'),
        'plazo' => '4 '.getTexto('meses'),
        'metros' => '190 m²',
        'n-plantas' => '1 '.getTexto('planta'),
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>