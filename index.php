<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Grupo VSALDIVAR	</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h3>BIENVENIDO</h3>
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php
		include 'conexion.php';
		$sql="Select * from productos";
		$re=mysql_query($sql)or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
			?>
            
            
			<div class="producto">
			<center>
				<img src="./imagenes/<?php echo $f['imagen'];?>"><br>
<span><?php echo $f['nombre'];?></span><br>
				<a href="./detalles.php?id=<?php echo $f['id'];?>">ver</a>
			</center>
		</div>
        <?php
		
		
		
		}
		?>


			
	
		

		
	</section>
</body>
</html>