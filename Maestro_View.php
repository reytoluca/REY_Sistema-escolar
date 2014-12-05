<?php
error_reporting(0);
$idu=$_COOKIE['idu'];
$acceso=$_COOKIE['accesos'];
if($idu=="" or $acceso=="")
{
    Print "<meta http-equiv='refresh' content='0;
url=index.html'>";
}
SESSION_START();
$idu2=$_SESSION['idu'];
$acceso2=$_SESSION['accesos'];
if($idu2=="" or $acceso2=="")
{
    Print "<meta http-equiv='refresh' content='0;
url=index.html'>";
}

require_once('header_.php');
require('Materia.php');
require_once('bd.php');
$materia= new Materia();
if(isset($_GET['lv'])){
$id = $_GET['lv'];
}else{
    $id = 0;
}
//echo $id;
echo "<h1><div algn='center'>Materias Asignadas!!</h1></div>";
if(isset($_REQUEST['NV'])){
    $NV = $_REQUEST['NV'];
}else{
    $NV = 0;
}

//echo $NV;


$materia->MuestraMaterias($id);

require_once('menu_.php');