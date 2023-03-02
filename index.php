<?php 
		// Importo el archivo de la clase de conexion a la BD
		require 'controlador/controlador.php';
		// Crear al objeto de la clase BD_PDO
		$obj = new Categorias();
		// Linea que ejecuta la instruccion sql en la BD
		if (isset($_POST['btninsertar'])) 
		{
			$nombre = $_POST['txtnombre'];
			$fecha = $_POST['txtfecha'];
			if ($_POST['btninsertar']=='Insertar') 
			{
				$obj->Insertar($nombre,$fecha);
			}
			elseif ($_POST['btninsertar']=='Modificar') 
			{
				$obj->Ejecutar_Instruccion("update categorias set Nombre='$nombre', Fecha='$fecha' where id_categoria");
			}
			
		}
		
        elseif (isset($_GET['ideliminar'])) 
		{		
			$ideliminar = $_GET['ideliminar'];
			$obj->ideliminar($ideliminar);
		}
		elseif (isset($_GET['idmodificar'])) 
		{		
			$idmodificar = $_GET['idmodificar'];
			$buscar_mod = $obj->idmodificar($idmodificar);
		}

		if (isset($_POST['btnbuscar'])) 
		{
			$buscar = $_POST['txtbuscar'];
			$result = $obj->Buscar($buscar);
			$datos = $obj->Tabla_gen($result);
		}
		else
		{
			$result = $obj->Buscar_todo();
			$datos = $obj->Tabla_gen($result);
		}
	
		// LInea que muestra el contenido de la variable $result
		//var_dump($result);

		require 'vista/vista.php';
 	?>