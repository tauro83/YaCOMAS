<?php
include "../includes/conf.inc";
include "../includes/lib.php";
beginSession('A');
$idasistente=$_SESSION['YACOMASVARS']['asiid'];
imprimeEncabezado();
aplicaEstilo();
print '<p class="yacomas_login">Login: '.$_SESSION['YACOMASVARS']['asilogin'].'&nbsp;<a class="precaucion" href=signout.php>Desconectarme</a></P>';
imprimeCajaTop('100','Encuestas'); 
retorno();
include "poll.php";
retorno();
print '<center>';
print '<input type="button" value="Volver al menu" onClick=location.href="'.$fslpath.$rootpath.'/asistente/menuasistente.php">
</center>';
imprimeCajaBottom();
retorno();
retorno();
imprimePie();
?>