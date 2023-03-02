<!DOCTYPE html>
<html lang="en">
<head>
	<body bgcolor="#5F9EA0">
		
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mi ejercicio CRUD</title>
	</body>
<script>
	
	function eliminar(id)
	{
		if(confirm("¿ Estas seguro de eliminar el registro ?"))
		{
			window.location = "index.php?ideliminar=" + id;
		}
	}

	function modificar(id)
	{
		window.location = "index.php?idmodificar=" + id;
	}
</script>

</head>

<table class="table table-bordered table-sm" cellspacing="0" width="100%">
<header class="bg-info bg-gradient text-white">
            <div class="container px-4 text-center">
<body>	

<h1>Categorias</h1>
<center>
	<form action="index.php" id="frminsertar" name="frminsertar" method="post">
		
		<br>
		<label for="">Nombre: </label>
		<input type="text" id="txtnombre" name="txtnombre" value="<?php echo @$buscar_mod[0][1]; ?>" style="width: 11%;
		border: none; outline: none; background: #e6e6fa; border-bottom: 3px solid">
		<br>
		<br>
		<label for="">Fecha: </label>
		<input type="date" id="txtfecha" name="txtfecha" value="<?php echo @$buscar_mod[0][2]; ?>" style="width: 11%;
		border: none; outline: none; background: #e6e6fa; border-bottom: 3px solid">
		<br>
		<br>
		<input type="submit" id="btninsertar" name="btninsertar" value="<?php if(isset($_GET['idmodificar']))
		{ 
			echo 'Modificar';
		}
		else
		{
			echo 'Insertar';
		}
		 ?>">
		 </center>
	</form>
	
	<br><br>
	<center>
	<form action="index.php" id="frmbuscar" name="frmbuscar" method="post">
		<label for="">Buscar: </label>
		<input type="text" id="txtbuscar" name="txtbuscar" style="width: 11%;
		border: none; outline: none; background: #e6e6fa; border-bottom: 1px solid">
		<input type="submit" id="btnbuscar" name="btnbuscar" value="Buscar" >
		<br><br>
		<table border="3" align="center"  style="background-color: #C0C0C0;">
			<tr>
				<td align="center" height="50" width="150"  bgcolor="00FFFF">Número</td>
				<td align="center"  height="50" width="150" bgcolor="00FFFF">Nombre</td>
				<td align="center" height="50" width="150"  bgcolor="00FFFF">Fecha</td>
				<td bgcolor="00FF00" style="border-right: 1px solid;" colspan="2" align="center">Accion</td>
			</tr>
			<?php echo $datos; ?>
		</table>
	</form>
	</center>
	
	
</body>
</html>