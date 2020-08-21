<?php
include_once 'add.php';
include_once '../clase/Perso.php';
$correo = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_SPECIAL_CHARS);
$clave = filter_input(INPUT_GET, 's', FILTER_SANITIZE_SPECIAL_CHARS);
$p = new Perso();
$p->setCorreo($correo);
$p->setClave(sha1($clave));

if( isset($_session)) {session_start();}
$_SESSION['veri'] = serialize($p);
$listo = new add();
$r=$listo->es();
echo $r;
echo '<div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a onclick="actu()" href="#inicio">salir</a></li></ul>
                    </div>';

?>