<script src="jquery.min.js"></script>
<?php
require('bd.php');
require ('Alumno.php');
require ('header.php');
$alumno = new Alumno();
$id_grupo = $_POST['idg'];
//echo $id_grupo."GRUPO";
$sql004 = "SELECT * FROM grupo WHERE id = $id_grupo";
$result004 = mysql_query($sql004)or die("No se ejecuta consulta $sql004");
$existe = mysql_num_rows($result004);
if ($existe > 0)
{
    $nombre = $id_grupo ." ) ";
    $nombre .= mysql_result($result004, 0, 'nombre');
    //$nombre .= " " . mysql_result($result04, 0, 'ApellidoMaterno');
    //$nombre .= " " . mysql_result($result04, 0, 'nombre');
    $nombre = utf8_decode($nombre);
    echo "<br>Grupo Seleccionado: <strong>".$nombre."</strong>";
}
echo "<div class=table-responsive>";
echo "<table class=\"table table-striped\">";
echo "<tr><td colspan=2 align=center><strong>Alumnos Asignados</strong></td></tr>";
$sql01 = "SELECT * FROM grupo_alumno WHERE id_grupo = $id_grupo GROUP BY id_alumno";
//echo $sql01;
$result01 = mysql_query($sql01)or die("Error $sql01");
while($field = mysql_fetch_array($result01)){
    $id = $field['id_alumno'];

    $sql04 = "SELECT * FROM usuario WHERE id = $id";

    $result04 = mysql_query($sql04)or die("No se ejecuta consulta 777 $sql04");
    $nombres = utf8_decode(mysql_result($result04,0,'Nombre'));
    $app_2 = utf8_decode(mysql_result($result04,0,'ApellidoPaterno'));
    $apm_2 = utf8_decode(mysql_result($result04,0,'ApellidoMaterno'));
    echo "<tr><td><b>$app_2 $apm_2 $nombres</b></td><td><a href=TestAlumno.php?accion=2&grupo=$id_grupo&alumno=$id>Eliminar</a></td></tr>";
}
echo "</table>";
echo "</div>";
//$alumno->deleteGrupoAlumno($id_grupo,$id);
$alumno->asignarAlumnoGrupo($id_grupo);

require ('footer.php');
?>

















