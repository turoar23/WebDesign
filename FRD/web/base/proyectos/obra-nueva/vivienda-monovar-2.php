<?php
    include_once('../../comun/language.php');
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-monovar-2';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 26; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Monóvar 2',
        'ubicacion' => 'Monóvar',
        'final-obra' => getTexto('Agosto de 2019'),
        'plazo' => '10 '.getTexto('meses'),
        'metros' => '230 m²',
        'n-plantas' => getTexto('Baja'),
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>