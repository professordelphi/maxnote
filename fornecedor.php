<?php
include("c_tela_geral.php");

$objeto = new TelaGeral;
$objeto -> fillTitle("MAXNOTE");
$objeto -> showLogo();
$objeto -> showFormGeral("fornecedor.php");
$objeto -> close();
?>