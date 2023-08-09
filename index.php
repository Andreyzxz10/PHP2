<?php

include './FormPersonal.php';
    $nombres = 'ANDREY';
    $apellidos = 'BENITEZ';
    $fecha_nacimiento = '20';
    $documento = '101002563';
    $tipo_documento = 'CC';
    $telefono = '3226958525';
    $direccion = 'CR80A #80C 32';
    $ciudad = 'BOGOTA';
    $email = 'ANDREY@GMAIL.COM';
    
$userBasics = new FormPersonal($nombres,$apellidos,$fecha_nacimiento,$documento,$tipo_documento,$telefono,$direccion,$ciudad,$email);

echo $userBasics->getDataUser();

