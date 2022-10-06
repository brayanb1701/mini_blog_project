<?php
$user=$_REQUEST["usuario"];
$pass=$_REQUEST["pass"];
if($user!="admin" || $pass!="administrador1234"){
	header ("Location: admin.php?mensaje=Datos incorrectos.");
	exit(); 
}
else{
	ini_set('session.gc_maxlifetime',3600);  // 1 hora
session_start();
error_reporting(E_ALL);
ob_start();
$_SESSION["usuario"] = $user;
header ("Location: revisar.php?mensaje=Entrada exitosa.");
	exit(); 
}
?>