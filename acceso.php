<?php
function decode_get($string)
{
$cad=explode("?",$string);
$string=$cad[1];
$string=base64_decode($string);
$control="tic";
$string=str_replace($control,"","$string");
$cad_get=explode("&",$string);
foreach($cad_get as $value)
{
$val_get=explode("=",$value);
$_GET[$val_get[0]]=UTF8_decode($val_get[1]);
}
}

if($_GET)
{
decode_get($_SERVER["REQUEST_URI"]);
$idu= addslashes($_GET['id']);
    //$idu=$_GET['id'];
if($idu=="")
{
$msg="";
Print "<meta http-equiv='refresh' content='0;
url=index.html'>";
}
else 
{
setCookie ('id',$idu);
setCookie ('acceso',1);
session_start();
$_SESSION['id']=$idu;
$_SESSION['acceso']=1;
Print "<meta http-equiv='refresh' content='0;
url=index.php'>";
}
}
?>
