<?php
include_once '../clase/ObraLiteraria.php';
include_once 'add.php';
$isbn = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_SPECIAL_CHARS);
$titulo = filter_input(INPUT_GET, 's', FILTER_SANITIZE_SPECIAL_CHARS);
$numero = filter_input(INPUT_GET, 'd', FILTER_SANITIZE_SPECIAL_CHARS);
$cantidad = filter_input(INPUT_GET, 'f', FILTER_SANITIZE_SPECIAL_CHARS);
$compra = filter_input(INPUT_GET, 'g', FILTER_SANITIZE_SPECIAL_CHARS);
$venta = filter_input(INPUT_GET, 'h', FILTER_SANITIZE_SPECIAL_CHARS);
$ano = filter_input(INPUT_GET, 'j', FILTER_SANITIZE_SPECIAL_CHARS);
$impuesto = filter_input(INPUT_GET, 'k', FILTER_SANITIZE_SPECIAL_CHARS);
$genero = filter_input(INPUT_GET, 'l', FILTER_SANITIZE_SPECIAL_CHARS);
$pais = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_SPECIAL_CHARS);
$ob = new ObraLiteraria();
$ob->setGenero($genero);
$ob->setPais($pais);
$ob->setIsbn($isbn);
$ob->setTitulo($titulo);
$ob->setNpagina($numero);
$ob->setCantidad($cantidad);
$ob->setCompra($compra);
$ob->setVenta($venta);
$ob->setPublicado($ano);
$ob->setImpuesto($impuesto);

//echo var_dump($ob); para mostrar el obgeto usamo para validar s esta llegando
if( isset($_session)) {session_start();}
$_SESSION['ol'] = serialize($ob);
$listo = new add();
$r=$listo->l();

if($r==0) {
 echo "<div id='est' class='btn btn-success'>  <strong>Bien!</strong> ESTE IBNS REGUISTRADO.
  <button type='button' onclick=".'"actu();document.getElementById('."'est'".").style.display='none'".'"'." class='btn btn-danger'>ok</button>
</div>";
 $listo->mostrarol();
}
else{   echo "<div id='est' class='alert alert-danger'>
  <strong>Danger!</strong> ESTE IBNS YA ESTABA REGUISTRADO.
  <button type='button' onclick=".'"actu();document.getElementById('."'est'".").style.display='none'".'"'." class='btn btn-danger'>ok</button>
</div>";}
?>