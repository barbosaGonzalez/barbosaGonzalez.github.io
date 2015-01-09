<?php
include('../conexion.php');
$consulta=mysql_query("select * from productos order by nombre",$conexion);

$nro_reg=mysql_num_rows($consulta);

if ($nro_reg==0){
	echo '<script>alert("No se han encontrado productos para mostrar");</script>';
}

$reg_por_pagina=4;
if (isset($_GET['num'])){
	$nro_pagina=$_GET['num'];	
}else{
	$nro_pagina=1;
}
if (is_numeric($nro_pagina))
	$inicio=(($nro_pagina-1)*$reg_por_pagina);
else
	$inicio=0;

	$consulta=mysql_query("select * from productos order by nombre limit  $inicio,$reg_por_pagina",$conexion);
	$can_paginas=ceil($nro_reg/$reg_por_pagina);
?>

<?php include('../plantilla/head.php');?>
<center>
        Buscar:&nbsp;<form id="form1" name="form1" method="post" action="">
        <input type="text" name="buscar" id="buscar" />
            <input class="boton negro redondo" type="submit" name="Aceptar" id="Aceptar" value="Enviar" />
        </form>
		<div id ="paginador" align="center">
        <a href="cargarproductos.php">Agregar nuevo producto</a>
		</div>
        <h1>Buscar productos para edici&oacute;n</h1>
    </center>
<div class="contenedor">

	<?php 
	
	while($filas= mysql_fetch_array($consulta)) {	
		$id=$filas['id'];
		$imagen=$filas['imagen'];
		$nombre=$filas['nombre'];
		$desc=$filas['descripcion'];
		$precio=$filas['precio'];
		$enStock=$filas['cuanto_hay'];
		$fecha=$filas['fecha'];
	
	?> 
	<div class="caja">
	    <h5><?php echo $nombre?></h5>
		<img src="<?php echo '../'.$imagen?>" width="100" height="90">
		<p>$<?php echo $precio?></p>
		<form action="editar.php" method="post" name="compra">
              	<input name="id2" type="hidden" value="<?php echo $id; ?>" />
                <input name="imagen2" type="hidden" value="<?php echo $imagen; ?>" />
                <input name="nombre2" type="hidden" value="<?php echo $nombre; ?>" />
                <input name="desc2" type="hidden" value="<?php echo $desc; ?>" />
                <input name="precio2" type="hidden" value="<?php echo $precio; ?>" />
                <input name="cantidad2" type="hidden" value="<?php echo $enStock; ?>" />
                <input name="fecha2" type="hidden" value="<?php echo $fecha; ?>" />
              	<input class="boton negro redondo" name="Editar" type="submit" value="Editar" />
          </form>
          <form action="borrar.php" method="post">
          	<input name="id" type="hidden" value="<?php echo $id; ?>" />
          	<input class="boton negro redondo" name="Borrar" type="submit" value="Borrar" />
          </form>
	 </div>
	<?php
	}	
	
	?>
	
</div>

<div id ="paginador" align="center">
<?php 
	
	if($nro_pagina>1)
   		echo "<a href='buscar.php?num=".($nro_pagina-1)."'>Anterior</a> ";

	for ($i=1;$i<=$can_paginas;$i++){
		if ($i==$nro_pagina)
			echo "<span>$i </span> ";
			//echo $i."  ";
		else
    		echo "<a href='buscar.php?num=$i'>$i</a> ";
   
	}
	if($nro_pagina<$can_paginas)
   		echo "<a href='buscar.php?num=".($nro_pagina+1)."'>Siguiente</a> ";
?>
</div>
<?php include('../plantilla/footer.php');?>