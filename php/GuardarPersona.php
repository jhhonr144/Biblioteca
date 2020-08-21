<?php
include_once '../clase/Perso.php';
include_once 'conecion.php';
class guaGuardarPersona {
    function __construct() {        
    }
      public function p() {
        
        $conexion = new conecion();
        $p = new Perso();        
          $p = unserialize($_SESSION['p']);
          
         $sentencia = $conexion->Guardame()->prepare('SELECT count(1) FROM presona where correo="'.$p->getCorreo().'"');
        $sentencia->execute();
          foreach ($sentencia as $fila) {
            if ($fila['count(1)']>0) {
                return 1;
            }
          }      
        $conexion->Guardame()->exec("INSERT INTO presona (cedula,nombre,celular,correo,clave,hora,fecha)"
                . " VALUES ('" . $p->getCedula(). "','" . $p->getNombre() . "', '" . $p->getCelular() . "', '"
                . $p->getCorreo() . "', '" . $p->getClave() . "',curdate(),curtime())");
        return 0;
    }

}
