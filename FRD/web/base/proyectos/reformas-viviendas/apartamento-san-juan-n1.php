<?php
include_once('../../comun/language.php');
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-viviendas/apartamento-san-juan-n1';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 12; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Apartamento San Juan 1',
        'ubicacion' => 'San Juan',
        'final-obra' => getTexto('Enero de 2018'),
        'plazo' => '3 '.getTexto('meses'),
        'metros' => '100 m²',
        'n-plantas' => '1 '.getTexto('planta'),
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img 
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>