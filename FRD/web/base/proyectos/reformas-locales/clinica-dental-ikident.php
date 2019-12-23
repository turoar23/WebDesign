<?php
    // Ruta del proyecto
    $ruta = 'proyectos/reformas-locales/clinica-dental-ikident';
    // Datos de las imagenes
    $img = array();
    for($i = 1; $i <= 16; $i++){
        array_push($img,'/img/'.$ruta.'/img'.$i.'.jpg');
    }
    // Definicion de atributos
    $datos = [
        'nombre' => 'Clínica Dental Ikident',
        'ubicacion' => 'Villena',
        'final-obra' => 'Octubre de 2019',
        'plazo' => '3 meses',
        'metros' => '190 m²',
        'n-plantas' => 'Baja',
        'portada' => '/img/'.$ruta.'/portada.jpg',
        'img' => $img
        
    ];
    // Incluimos la plantilla
    include $_SERVER["DOCUMENT_ROOT"].'/proyectos/comun/template.php';
?>