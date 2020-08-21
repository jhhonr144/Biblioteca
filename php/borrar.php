<?php
include_once 'add.php';
$isbn = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_SPECIAL_CHARS);
$var=new add();
$var->borrar($isbn);
?>