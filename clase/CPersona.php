<?php 
include_once 'CPersona.php';
class CPersona {
   private $nombre="";
   private $cedula=0;
   private $celular=0;
   private $correo="";
   private $clave="";
   
    function __construct() {
   }
   
   function getNombre() {
       return $this->nombre;
   }

   function getCedula() {
       return $this->cedula;
   }

   function getCelular() {
       return $this->celular;
   }

   function getCorreo() {
       return $this->correo;
   }

   function getClave() {
       return $this->clave;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setCedula($cedula) {
       $this->cedula = $cedula;
   }

   function setCelular($celular) {
       $this->celular = $celular;
   }

   function setCorreo($correo) {
       $this->correo = $correo;
   }

   function setClave($clave) {
       $this->clave = $clave;
   }
}
?>