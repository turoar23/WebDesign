<?php
    // Ruta del proyecto
    $ruta = 'proyectos/obra-nueva/passive-vehouse-dolores';
    // Datos de las imagenes
    $img = array();
    for($i = 0; $i <= 20; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Passive House Dolores',
        'ubicacion' => 'Dolores',
        'final-obra' => 'Abril de 2018',
        'plazo' => '12 meses',
        'metros' => '380 m²',
        'n-plantas' => 'Baja + 1',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>
