<?php
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
        'final-obra' => 'Julio de 2017',
        'plazo' => '5 meses',
        'metros' => '250 m²',
        'n-plantas' => 'Sotano + baja',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>