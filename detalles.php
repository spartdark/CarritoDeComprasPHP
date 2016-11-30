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
		<h1>Deatalles</h1>
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php
		include 'conexion.php';
		$sql="Select * from productos where id=".$_GET['id'];
		$re=mysql_query($sql)or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
			?>
            
            
			
			<center>
			<img src="./imagenes/<?php echo $f['imagen'];?>"><br>
<span><?php echo $f['nombre'];?></span><br>
<span>Precio:  <?php echo $f['precio'];?></span><br>
<a href="./carritodecompras.php?id=<?php echo $f['id'];?>">Añadir al carrito de compras</a>
<a href="./index.php">    Regresar</a>
			</center>
		
        <?php
		
		
		
		}
		?>


			
	
		

		
	</section>
</body>
</html>