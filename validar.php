<?php
$user=$_POST['user'];
$psw=$_POST['pasw'];

function encrypt($string, $key) {
    $result = '';
    for($i=0; $i<strlen($string); $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key))-1, 1);
        $char = chr(ord($char)+ord($keychar));
        $result.=$char;
    }
    return base64_encode($result);
}
//$psw=md5($psw);
if ($user=="" or $psw== "" )
{
Print "<meta http-equiv='refresh' content='0;
url=index.html'>";
}
/*if ($user=! " " and $pasw== " ")
{
Print "<meta http-equiv='refresh' content='0;
url=index.html'>";
}*/
else
{
include('bd.php');
$sql="select *from usuario where Usuario='$user' and Contraseña='$psw' and Estatus=1;";

$consulta=mysql_query($sql);
$cuantos=mysql_num_rows($consulta);
for($y=0;$y<$cuantos;$y++){
$idu=mysql_result($consulta,$y,'id');
$n=mysql_result($consulta,$y,'Nivel');
}
if($cuantos==0)
{
Print "<meta http-equiv='refresh' content='0;
url=index.html'>";
}
else
{
setCookie ('idu',$idu);
setCookie ('accesos',1);
session_start();
$_SESSION['idu']=$idu;
$_SESSION['accesos']=1;
$hash= encrypt ($idu,"AlberttHDZ");
$hash_= encrypt ($n,"AlberttHDZ");
Print "<meta http-equiv='refresh' content='0;
url=index.php?id=$hash&N=$hash_'>";
}
}
//////////////////////////////////////////////
?>