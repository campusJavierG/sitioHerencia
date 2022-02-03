<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sitio herencia</title>
</head>
<body>
<?php
require_once('./padre/Animal.php');
require_once('./hija/Gato.php');
require_once('./hija/Perro.php');
    //INSTACIAR CLASES
    $perro1=new Perro();
    $perro1->comer();
    $gato1= new Gato();
    $gato1->comer();
    $perro1->mostrarDormir();
    $gato1->mostrarDormir();



?>
</body>
</html>
