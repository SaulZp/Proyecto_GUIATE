<?php
error_reporting(0);
session_start();

$con=mysql_connect("localhost","root","");
mysql_select_db("mapa",$con);

mysql_query("UPDATE materias set e18='1' WHERE matricula='$_SESSION[username]'",$con);

header("Location: mapa.php");
?>