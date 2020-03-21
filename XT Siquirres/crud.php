<?php

/*
Creación de la clase artículos para el mantenimiento de la tabla Artículos de la base de datos Extreme Tech Siquirres.
*/

class articulos {


	function insertarArt($descripcion, $marca, $precio, $categoria, $existencias, $foto, $descuento, $fechaMod, $cedUsuarioMod) : bool
	{

	include("conexion.php");
	$conexion = conectar();
	$consulta = "INSERT INTO Articulos (Descripcion, Marca, Precio, Categoria, Existencias, Foto, Descuento, Fecha_Modificacion, Ced_UsuarioModificador) VALUES('$descripcion, $marca, $precio, $categoria, $existencias, $foto, $descuento, $fechaMod, $cedUsuarioMod')";
	$resultado = $conexion->query($consulta);

	return ($consulta->connect_errno) ? false : true;
	}


	function modificarArt($codigo, $descripcion, $marca, $precio, $categoria, $existencias, $foto, $descuento, $fechaMod, $cedUsuarioMod) : bool
	{

	include("conexion.php");
	$conexion = conectar();
	$consulta = "UPDATE Articulos SET Descripcion = $descripcion, Marca = $marca, Precio = $precio, Categoria = $categoria, Existencias = $existencias, Foto = $foto, Descuento = $descuento, Fecha_Modificacion = $fechaMod, Ced_UsuarioModificador = $cedUsuarioMod WHERE Codigo = $codigo";
	$resultado = $conexion->query($consulta);

	return ($consulta->connect_errno) ? false : true;
	}


	function eliminarArt($codigo) : bool
	{

	include("conexion.php");
	$conexion = conectar();
	$consulta = "DELETE FROM Articulos WHERE Codigo = $codigo";
	$resultado = $conexion->query($consulta);

	return ($consulta->connect_errno) ? false : true;
	}
}

/* --Function de prueba--

	function prueba()
	{

	include("conexion.php");
	$conexion = conectar();
	$sql = "SELECT Codigo, Marca, Precio FROM Articulos";
	$result = $conexion->query($sql);

	var_dump($result->num_rows);
		while($row = $result->fetch_assoc()){

			echo '********** ' . $row['Codigo'] . ' ' . $row['Marca'] . ' ' . $row['Precio'] . PHP_EOL;
		}
	} 
*/


/*
Creación de la clase usuarios para el mantenimiento de la tabla Usuarios de la base de datos Extreme Tech Siquirres.
*/

class usuarios {


	function insertarUsu($cedula, $nombre, $foto, $correo, $contraseña, $descripcion, $fechaCrea, $fechaMod, $cedUsuarioCrea) : bool
	{

	include("conexion.php");
	$conexion = conectar();
	$consulta = "INSERT INTO Usuarios (Cedula, Nombre_Completo, Foto, Correo, Contraseña, Descripcion, Fecha_Creacion, Fecha_Modificacion, Ced_UsuarioCreador) VALUES('$cedula, $nombre, $foto, $correo, $contraseña, $descripcion, $fechaCrea, $fechaMod, $cedUsuarioCrea')";
	$resultado = $conexion->query($consulta);

	return ($consulta->connect_errno) ? false : true;
	}


	function modificarUsu($cedula, $nombre, $foto, $correo, $contraseña, $descripcion, $fechaCrea, $fechaMod, $cedUsuarioCrea) : bool
	{

	include("conexion.php");
	$conexion = conectar();
	$consulta = "UPDATE Usuarios SET Nombre_Completo = $nombre, Foto = $foto, Correo = $correo, Contraseña = $contraseña, Descripcion = $descripcion, Fecha_Creacion = $fechaCrea, Fecha_Modificacion = $fechaMod, Ced_UsuarioCreador = $cedUsuarioCrea WHERE Cedula = $cedula";
	$resultado = $conexion->query($consulta);

	return ($consulta->connect_errno) ? false : true;
	}


	function eliminarUsu($cedula) : bool
	{

	include("conexion.php");
	$conexion = conectar();
	$consulta = "DELETE FROM Usuarios WHERE Cedula = $cedula";
	$resultado = $conexion->query($consulta);

	return ($consulta->connect_errno) ? false : true;
	}
}
