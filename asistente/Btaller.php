<?
include "../includes/lib.php";
include "../includes/conf.inc";
beginSession('A');
$idasistente=$_SESSION['YACOMASVARS']['asiid'];
$link=conectaBD();
	$tok = strtok ($_GET['vact']," ");
	$idevento=$tok;
	$tok = strtok (" ");
	$regresa=$tok;
	$Query_elimina= "DELETE FROM  inscribe 
			   WHERE id_evento="."'".$idevento."' AND id_asistente="."'".$idasistente."'";
	$elimina_registro= mysql_query($Query_elimina) or err("No se pudo dar de baja la inscripcion al taller ".mysql_errno($elimina_registro));
	$regresar='Location: '.$regresa;

	header($regresar);
?>
