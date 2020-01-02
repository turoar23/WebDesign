<?php
    include_once('../../comun/language.php');
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-lomabada';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 17; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Loma Bada',
        'ubicacion' => 'Petrer',
        'final-obra' => getTexto('Julio de 2017'),
        'plazo' => '5 '.getTexto('meses'),
        'metros' => '250 m²',
        'n-plantas' => getTexto('Sótano').' + '.getTexto('baja'),
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>