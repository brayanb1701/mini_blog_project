<?php 
//-- variables para conectarse a la base de datos
$action=$_POST["action"];
$id=$_POST["id"];
$imagen=$_POST["imagen"];
$servidor	= 'localhost';
						$base_datos	= 'proyecto';
						$tabla	= 'posts';
						$usr_sistema	= 'root';
						$pass_sistema	= 'coinsda'; 
						$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
						if (!$conexion){
							header ("Location: index.php?mensaje=error de conexion.");
							exit(); 
						}
						else{
						if($action=="p"){
							$sql2="UPDATE proyecto.posts SET activo='S' WHERE id=$id";
							$sql2 = mysqli_query($conexion, $sql2); 
							header ("Location: revisar.php?mensaje=Publicado con exito.");
							exit(); 
										}
						else if($action=="e"){
							$sql2="DELETE FROM proyecto.posts WHERE id=$id";
							$sql2 = mysqli_query($conexion, $sql2); 
							if($imagen!="" || $imagen!=NULL){
							unlink('images/$imagen');
							}
							header ("Location: revisar.php?mensaje=Eliminado con exito.");
							exit(); 	
						}
						}



?>
