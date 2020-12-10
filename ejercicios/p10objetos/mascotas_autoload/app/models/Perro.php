<?php

namespace App\Models;

class Perro
{
    private $_color;
    private $_nombre;
    private $_hablidad; // de 0 a 100
    private $_sociabilidad;

    public function __construct($nombre, $color)
    {
        $this->_nombre = $nombre;
        $this->_color = $color;
    }


    public function ladra()
    {
        echo $this . ": ¡Guau!<br/>";
    }
    public function __toString()
    {
        return $this->_nombre;
    }
}
