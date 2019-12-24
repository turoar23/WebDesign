<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/vivienda-monovar-1';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 21; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Vivienda Monóvar 1',
        'ubicacion' => 'Monóvar',
        'final-obra' => 'Febrero de 2018',
        'plazo' => '9 meses',
        'metros' => '290 m²',
        'n-plantas' => 'Sotano + baja + 1 planta',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>