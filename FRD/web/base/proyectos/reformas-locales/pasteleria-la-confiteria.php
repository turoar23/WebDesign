<?php
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-locales/pasteleria-la-confiteria';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 5; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Pastelería La confiteria',
        'ubicacion' => 'El Altet',
        'final-obra' => 'Febrero de 2018',
        'plazo' => '3 semanas',
        'metros' => '75 m²',
        'n-plantas' => 'Baja',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>