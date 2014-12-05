<?php
    require('Usuario.php');
    class Alumno extends Usuario{

        private $grupo;
        private $id;
        private $nombre;
        private $avatar;
        private $orden;
        private $estatus;
        public function asignaralumnoGrupo($id_grupo){
            echo "<div class=table-responsive>";
            echo "<table class=\"table table-striped\">";
            echo "<form action=TestAlumno.php method=POST id=alumnos>";
            echo "<tr><td colspan=2>Asignar Nuevos Alumnos</td></tr>";
            echo "<tr><td>Alumnos:</td></tr>";
            $sql01 = "SELECT * FROM usuario WHERE estatus = 1 and nivel =3 ORDER BY nombre ASC";
            $result01 = mysql_query($sql01)or die("Error $sql01");

            while($field = mysql_fetch_array($result01))
            {
                $id_alumno = $field['id'];
                $opcion = ($field['Nombre']).' '.($field['ApellidoPaterno']).' '.($field['ApellidoMaterno']);
                $sql03="SELECT * FROM grupo_alumno WHERE id_grupo = $id_grupo AND id_alumno = $id_alumno ";
                $result03 = mysql_query($sql03)or die("No se ejecuta consulta $sql03");
                //$existe=mysql_num_rows($result03);
                echo "<br><tr><td>$opcion</td><td><input type='checkbox' name='alumno[]' value='$id_alumno'></td></tr>";



            }

            echo "<input type=hidden id=accion name=accion value=1>";
            echo "<input type=hidden id=grupo name=grupo value=$id_grupo>";

            echo "<tr><td colspan=2 align=center><input type=submit value=Agregar></td></tr>";
            echo "</form>";
            echo "</table>";
            echo "</div>";

        }
        public function asignarGrupoAlumno(){
            echo "<br>Asignar Grupo";
        }

        public function createGrupoAlumno($grupo_id, $alumno_id){

            if ($alumno_id > 0){
                echo $insert01 = "INSERT INTO grupo_alumno (id_grupo, id_alumno)
                                  VALUES('$grupo_id','$alumno_id')";
                $execute01 = mysql_query($insert01) or die("Error  $insert01");

                echo $update01 = "UPDATE usuario SET Estatus=$grupo_id where id=$alumno_id";

                $execute01 = mysql_query($update01) or die ("Error update!!!!!!!! $update01");
            }
        }
        //Eliminacion de grupoalumno
        public function deleteGrupoAlumno($grupo_id, $alumno_id){
            if ($alumno_id > 0){
                echo $delete01 = "DELETE FROM grupo_alumno WHERE id_grupo = $grupo_id AND id_alumno = $alumno_id";

                echo $delete01 = mysql_query($delete01) or die("Error Eliminacion  $delete01");

                echo $update001 = "UPDATE usuario SET Estatus=1 where id=$alumno_id";
                $execute001 = mysql_query($update001) or die ("Error update $update001");


            }
        }

        //Primer metodo en ejecucion...
        public function seleccionaGrupo($grupo){
            echo "<div class=table-responsive>";
            echo "<form action=ajax_2.php method=Post name=grupo id=grupo target='_self'>";//Variable id_grupo
            echo "<table class=\"table table-striped\">";

            echo "<tr><td>Grupo: </td><td><select name=idg>";
            $sql02 = "SELECT * FROM grupo WHERE estatus = 1 order by nombre ASC";
            $result02 = mysql_query($sql02)or die("Error $sql02");
            if ($grupo != 0){
                $sql04 = "SELECT * FROM grupo WHERE id = $grupo";
                $result04 = mysql_query($sql04)or die("No se ejecuta consulta $sql04");
                $nombre = $grupo." ) ";
                $nombre .= mysql_result($result04,0,'nombre');
                //$nombre .= " ".mysql_result($result04,0,'ApellidoMaterno');
                //$nombre .= " ".mysql_result($result04,0,'Nombre');
                $nombre = utf8_decode($nombre);
                echo "<option value=$grupo>$nombre</option>";
                //echo "<input type='hidden' name='grupo' value='$nombre'>";
            }
            while($field = mysql_fetch_array($result02)){
                $id_grupo = utf8_decode($field['id']);
                $opcion = utf8_decode($field['id'].") ".$field['nombre']);
                if ($grupo != $id_grupo)
                    echo "<option value=$id_grupo>$opcion</option>";
                //echo "<input type='hidden' name='grupo2' value='$opcion'>";
            }
            echo "</select></td></tr>";

            echo "<tr><td colspan=2 align=center><input type=submit id=submit value=Seleccionar></td></tr>";
            echo "</table>";




            echo "</form>";
            echo "</div>";
        }


    }


?>