<?php



    echo "<div class=table-responsive>";
    echo "<table class=\"table table-striped\">";
    echo "<form action=TestMateria.php method=Get>";
    echo "<tr><td colspan=2>Asignar Nuevas Materias</td></tr>";
    echo "<tr><td>Materia: </td><td><select id=materia name=materia>";
    $sql01 = "SELECT * FROM materia WHERE estatus = 1 ORDER BY nombre ASC";
    $result01 = mysql_query($sql01)or die("Error $sql01");
    while($field = mysql_fetch_array($result01)){
        $id_materia = $field['id'];
        $opcion = $field['nombre'];

        $sql03="SELECT * FROM maestro_materia WHERE id_maestro = $id_maestro AND id_materia = $id_materia";
        echo "<br>".$sql03;
        $result03 = mysql_query($sql03)or die("No se ejecuta consulta $sql03");
        $existe = mysql_num_rows($result03);
        if($existe > 0){
            echo "<option value=0>No Disponible</option>";
        }else{
            echo "<option value=$id_materia>$opcion</option>";
        }
    }
    echo "</select></td></tr>";

    echo "<input type=hidden id=maestro name=maestro value=$id_maestro>";
    echo "<tr><td colspan=2 align=center><input type=submit value=Agregar></td></tr>";

    echo "</form>";
    echo "</table>";
    echo "</div>";

?>



