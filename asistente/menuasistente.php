<? 
include "../includes/lib.php";
include "../includes/conf.inc";
beginSession('A');
imprimeEncabezado();
aplicaEstilo();
$link=conectaBD();
$idponente=$_SESSION['YACOMASVARS']['asiid'];
$userQuery = 'SELECT nombrep,apellidos FROM asistente WHERE id="'.$idponente.'"';
$userRecords = mysql_query($userQuery) or err("No se pudo checar el login asistente".mysql_errno($userRecords));
$p = mysql_fetch_array($userRecords);
$msg='Asistentes<br><small>Bienvenido '.$p['nombrep'].' '.$p['apellidos'].'</small>';
print '<P class="yacomas_login">Login: '.$_SESSION['YACOMASVARS']['asilogin'].'&nbsp;<a class="precaucion" href=signout.php>Desconectarme</a></P>';
imprimeCajaTop("100",$msg);
print '<hr>';
retorno();
print '<font size=+1 color=#000000 face=arial>
<a href="asistente.php?opc=1">Modificar mis datos</a> <br><br>
<a href="asistente.php?opc=2">Listar eventos programados</a> <br><br>
<a href="asistente.php?opc=3">Listar/Inscribirme a talleres y tutoriales</a> <br><br>
<a href="asistente.php?opc=4">Listar/Darme de baja de talleres y tutoriales registrados</a> <br><br>
<a href="asistente.php?opc=6">Imprimir hoja de registro</a><br><br>
';
print '<hr>';
print '<a href="asistente.php?opc=5">Encuestas </a> <br><br>';
print '</font>';

imprimeCajaBottom();
imprimePie();?>
