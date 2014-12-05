<?php
require ('header.php'); 
?>
    <div class="page-header">
        <h1><p align="center">Sistema de Control Escolar</p></h1>
      </div>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="img/l.jpg" data-slide-to="0" class="active"></li>
          <li data-target="img/l.jpg" data-slide-to="1"></li>
          <li data-target="img/l.jpg" data-slide-to="2"></li>
        </ol>
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
?>
    <?php
    function decrypt($string, $key) {
        $result = '';
        $string = base64_decode($string);
        for($i=0; $i<strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key))-1, 1);
            $char = chr(ord($char)-ord($keychar));
            $result.=$char;
        }
        return $result;
    }
    $a=$_GET['id'];
    $b=$_GET['N'];
    $y = decrypt($a=$_GET['id'],"AlberttHDZ");
    $x = decrypt($b=$_GET['N'],"AlberttHDZ");
    if ($x ==2)
    {
    require('bd.php');
    $sql="SELECT *FROM Usuario where id=$y and Nivel=$x";
    $consult=mysql_query($sql);
    $num_rows=mysql_num_rows($consult);
    $Idc=mysql_result($consult,0,'id');
    $Niv=mysql_result($consult,0,'Nivel');

    Print "<meta http-equiv='refresh' content='0;
    url=Maestro_View.php?lv=$Idc&NV=$Niv'>";
    }
    else
    {
    echo "";
    }
    ?>
        <!--<div class="carousel-inner">
          <div class="item active">
            <img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
          </div>
          <div class="item">
            <img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
          </div>
          <div class="item">
            <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>-->
<?php
require ('footer.php');
?>