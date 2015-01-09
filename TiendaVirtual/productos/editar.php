<?php
include('../conexion.php');
include('../plantilla/head.php'); 
$id=$_POST['id2'];
$imagen=$_POST['imagen2'];
$nombre=$_POST['nombre2'];
$desc=$_POST['desc2'];
$cantidad=$_POST['cantidad2'];
$precio=$_POST['precio2'];
$fecha=$_POST['fecha2'];
?>
<div class="confirmarPedido">
<form action="recibirEditar.php" method="post" enctype="multipart/form-data" id="form1">
  <table width="200" border="0">
    <tr>
      <td>ImagenNueva:</td>
      <td><label for="Imagen2"></label>
      <input type="file" name="imagen2" id="imagen" /></td>
    </tr>
    <tr>
      <td>Imagen:</td>
      <td><label for="imagen"></label>
      <img src="<?php echo '../'.$imagen; ?>" alt="" width="70" height="60" /></td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <input name="id" type="hidden" value="<?php echo $id ?>" />
      <td><input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>"/></td>
    </tr>
    <tr>
      <td>Descripción:</td>
      <td><input type="text" name="desc" id="desc" value="<?php echo $desc ?>"/></td>
    </tr>
    <tr>
      <td>EnStock:</td>
      <td><input type="text" name="cantidad" id="cantidad" value="<?php echo $cantidad ?>"/></td>
    </tr>
    <tr>
      <td>Precio:</td>
      <td><input type="text" name="precio" id="precio" value="<?php echo $precio ?>"/></td>
    </tr>
    <tr>
      <td>Fecha:</td>
      <td><input type="text" name="fecha" id="fecha" value="<?php  echo $fecha ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input class="boton negro redondo" type="submit" name="button" id="button" value="Modificar" /></td>
    </tr>
  </table>
</form>
</div>
<?php include('../plantilla/footer.php');?>