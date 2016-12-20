<?php
include("c_telalogin.php");

$objeto = new Tela;
$objeto -> fillTitle("MAXNOTE");
$objeto -> showLogo();
$objeto -> showFormLogin("index.php");
$objeto -> close();
?>