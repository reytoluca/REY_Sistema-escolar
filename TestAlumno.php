<script src="jquery.min.js"></script>

<?php

require('Alumno.php');
require_once('bd.php');
require('header.php');
$alumno = new Alumno();

echo $id=$_GET['grupo'];
echo $id=$_POST['grupo'];

echo $ida=$_GET['alumno'];
echo $ida=$_POST['alumno'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero=$_POST["alumno"];

    $count = count($numero);
    for ($i = 0; $i < $count; $i++) {
     $alumno->createGrupoAlumno($id,$numero[$i]);
    }
}

//echo $accion=$_REQUEST['accion'];
echo $id=$_GET['grupo'];
echo $id=$_POST['grupo'];

echo $ida=$_GET['alumno'];
echo $ida=$_POST['alumno'];
    switch($accion)
    {
        case 0:
            $alumno->seleccionaGrupo($id);
            //$alumno->deleteGrupoAlumno($id,$ida);
            $alumno->deleteGrupoAlumno($id,$ida);
            break;

        case 1:

            $alumno->seleccionaGrupo($id);
            $alumno->deleteGrupoAlumno($id,$ida);
            break;
        case 2:

            $alumno->deleteGrupoAlumno($id,$ida);
            break;



}


?>
<?php require('footer.php'); ?>