<?php
    include_once('../../comun/language.php');
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-vega-baja';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 11; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Vega Baja',
        'ubicacion' => 'Vega Baja',
        'final-obra' => getTexto('Febrero 2020'),
        'plazo' => '12 '.getTexto('meses'),
        'metros' => '230 m²',
        'n-plantas' => getTexto('Baja'),
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>