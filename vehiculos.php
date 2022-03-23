<?php

class Carro{  //creamos la clase carro, nuestra plantilla

// atributos, comportamiento

var $ruedas;   //le dimos atributos
var $color;
var $motor;

//método constructor
function __construct() //le dimos un estado inicial con el constructor
{
    
    $this->ruedas = 4;
    $this->color = '';
    $this->motor = 1600;

}

function arrancar(){  //le damo un comportamiento

    echo 'Estoy arrancando';
}


function establecer_color($color_carro, $nombre_carro){

    $this->color = $color_carro;

    echo '<br> ' . 'El color del carro ' . $nombre_carro . ' es: ' . $color_carro . '<br>';

}

}

