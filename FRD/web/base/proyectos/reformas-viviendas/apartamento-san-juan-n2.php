<?php
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-viviendas/apartamento-san-juan-n2';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 12; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Apartamento San Juan 2',
        'ubicacion' => 'San Juan',
        'final-obra' => 'Mayo de 2018',
        'plazo' => '4 meses',
        'metros' => '85 m²',
        'n-plantas' => '1 planta',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>