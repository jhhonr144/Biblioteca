<?php
include_once '../clase/Perso.php';
include_once './add.php';

$nombre = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_SPECIAL_CHARS);
$cedula = filter_input(INPUT_GET, 's', FILTER_SANITIZE_SPECIAL_CHARS);
$telefono = filter_input(INPUT_GET, 'd', FILTER_SANITIZE_SPECIAL_CHARS);
$correo = filter_input(INPUT_GET, 'f', FILTER_SANITIZE_SPECIAL_CHARS);
$clave = filter_input(INPUT_GET, 'g', FILTER_SANITIZE_SPECIAL_CHARS);
$p = new Perso();
$p->setNombre($nombre);
$p->setCedula($cedula);
$p->setCelular($telefono);
$p->setCorreo($correo);
$p->setClave(sha1($clave));

//echo var_dump($ob); para mostrar el obgeto usamo para validar s esta llegando
if( isset($_session)) {session_start();}
$_SESSION['p'] = serialize($p);
$listo = new add();
$r=$listo->p();
if($r==0) {
 echo "<div id='est' class='btn btn-success'>  <strong>Bien!</strong>  REGUISTRADO.
  <button type='button' onclick=".'"document.getElementById('."'iniciar'".").style.display='none'".'"'." class='btn btn-danger'><a href='#inicio'>ok</a></button>
</div>";

}
else{  
    echo "<div id='est' class='alert alert-danger'>
  <strong>Danger!</strong> ESTE CORREO YA ESTABA REGUISTRADO.
  <button type='button' onclick=".'alert("quisiera enfocar el nombre :(")" class='."'btn btn-danger'>ok</button>
</div>";
    }
?>