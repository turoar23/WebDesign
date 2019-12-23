<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-alicante';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 29; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Alicante',
        'ubicacion' => 'Alicante',
        'final-obra' => 'Marzo de 2018',
        'plazo' => '10 meses',
        'metros' => '400 m²',
        'n-plantas' => 'Sotano + baja',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>