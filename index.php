<?php
include("c_tela.php");

$objeto = new Tela;
$objeto -> fillTitle("MAXNOTE");
$objeto -> showLogo();
$objeto -> showFormLogin("index.php");
$objeto -> close();
?>