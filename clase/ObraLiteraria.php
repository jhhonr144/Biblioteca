<?php
include_once 'Obra.php';
class ObraLiteraria extends Obra {
    private $genero="";
    private $pais="";
  
    function __construct() {
           }

    function getGenero() {
        return $this->genero;
    }

    function getPais() {
        return $this->pais;
    }

        function setGenero($genero) {
        $this->genero = $genero;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }
}
