<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    require('vehiculos.php');
    require('vehiculosPesados.php');

    $mazda = new Carro();  //instanciamos el objeto
    $renault = new Carro();

    $mazda->arrancar();

    $mazda->establecer_color('rojo', 'Mazda');
    $renault->establecer_color('amarillo', 'Renault');
   //var_dump($mazda);      //y lo imprimimos
//-------------------------------------------------------

    $foton = new Camion();

    var_dump($foton);

?>

    

</body>
</html>