<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conecion
 *
 * @author Usuario
 */
class conecion {
    

    function __construct() {
        
    }
    public function Guardame() {
        
        $usuario = 'root';
        $pass = '';
$conexion = new PDO('mysql:host=localhost;dbname=libreria', $usuario, $pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }

}
