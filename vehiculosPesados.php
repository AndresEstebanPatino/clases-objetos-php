<?php


class Camion{  //creamos la clase carro, nuestra plantilla

    // atributos, comportamiento
    
    var $ruedas;   //le dimos atributos
    var $color;
    var $motor;
    
    //método constructor
    function __construct() //le dimos un estado inicial con el constructor
    {
        
        $this->ruedas = 8;
        $this->color = 'Gris';
        $this->motor = 2600;
    
    }
        
    }

?>