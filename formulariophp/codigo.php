<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{
		$base=mysql_select_db('pruebabecent');
		if(!$base){
			echo" Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	if (isset($_POST)) {
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$cedula=$_POST['cedula'];
	    $email=$_POST['email'];
		
		//hacemos la sentencia de sql
		$sql="INSERT INTO datos VALUES('$nombre',
									   '$apellido',
									   '$cedula',
									   '$email)"; 
		//ejecutamos la sentencia de sql
		$ejecutar=mysql_query($sql);
		//verificamos la ejecucion
		if(!$ejecutar){
			echo"Hubo Algun Error";
		}
		else {
			echo"Datos Guardados Correctamente<br><a href='registro.php'>Volver</a>";
		}

	}
					   
?>

