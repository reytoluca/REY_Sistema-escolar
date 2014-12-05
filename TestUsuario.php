<?php

    require ('Usuario.php');
    require ('bd.php');
    require ('header.php');
//Creacion de un Objeto
    $usuario = new Usuario();



    if (isset($_POST['submit'])) {
                switch($_POST['submit']){
            case "Registrar":
                echo "<div class=\"alert alert-danger\" role=alert>";
                //echo "<br>Bot&oacute;n: " . $_POST['submit'];
                echo "Registro correcto...";
                echo "</div>";
                $usuario->createUsuario("$_POST[nombre]","$_POST[apellidop]","$_POST[apellidom]",$_POST['nivel']);
                break;
            case "Borrar":
                echo "<div class=\"alert alert-info\" role=alert>";
                //echo "<br>Bot&oacute;n: " . $_POST['submit'];
                echo "Eliminaci&oacute;n correcta;";
                echo "</div>";
                $usuario->deleteUsuario($_POST['idb']);
                break;
            case "Modificar":
                echo "<div class=\"alert alert-success\" role=alert>";
                //echo "<br>Bot&oacute;n: " . $_POST['submit'];
                echo "Modificaci&oacute;n correcta";
                echo "</div>";
                $usuario->updateUsuario($_POST['idm'],"$_POST[nombre]","$_POST[apellidop]","$_POST[apellidom]",$_POST['nivel']);
                break;
            case "Buscar":
                echo "<div class=\"alert alert-warning\" role=alert>";
                //echo "<br>Bot&oacute;n: " . $_POST['submit'];
                echo "Registros Encontrados...";
                echo "</div>";
                $usuario->readUsuarioS($_POST['idbuscar']);
                break;
        }

    }




    echo "
        <div class=table-responsive>
            <form name=alumno action=TestUsuario.php method=Post>
                <table class=\"table table-bordered\">
                    <tr> <td>Nombre(s):</td><td><input type=text name=nombre  placeholder='Nombre Completo'> </input></td> </tr>
                    <tr> <td>Apellido Paterno:</td><td><input type=text name=apellidop  placeholder='Apellido Paterno'> </input></td> </tr>
                    <tr> <td>Apellido Materno:</td><td><input type=text name=apellidom  placeholder='Apellido Materno'> </input></td> </tr>
                    <tr><td>Nivel:</td><td><select name=nivel>
                        <option value=1> Administrador</option>
                        <option value=2> Maestro</option>
                        <option value=3> Alumno</option>
                        </select> <input type=submit name=submit value=Registrar></td></tr>
                    <tr><td colspan=2 align=center>
                    </td></tr>
                    <tr><td>ID: <input type=text name=idm placeholder='Clave'></td><td><input type=submit name=submit value=Modificar > </input></td></tr>

                    <tr><td>ID: <input type=text name=idb placeholder='Clave'></td><td><input type=submit name=submit value=Borrar > </input></td></tr>
                    <tr><td>Buscar: <input type=text name=idbuscar placeholder='Clave del Usuario'></td><td><input type=submit name=submit value=Buscar> </input></td></tr>

                </table>
            </form>
        </div>
    ";

    $usuario->readUsuarioG();

    require ('footer.php');
?>