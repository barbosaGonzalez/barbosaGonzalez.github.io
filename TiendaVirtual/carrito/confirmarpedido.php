<?php include('../conexion.php'); include('../plantilla/head.php');?>
<center>
<h1>Confirmar pedido</h1>
<div class="confirmarPedido">
<form id="form1" name="form1" method="post" action="finalizarpedido.php">
<table width="283" border="0">
  <tr>
    <td colspan="5" align="center"> LISTADO DE SUS COMPRAS</td>
  </tr>
  <tr>
    <td width="43" bgcolor="#CCCCCC">PRODUCTO</td>
    <td width="43" bgcolor="#CCCCCC">PRECIO</td>
    <td width="43" bgcolor="#CCCCCC">CANTIDAD</td>
    <td width="126" colspan="2" bgcolor="#CCCCCC">SUBTOTAL</td>
  </tr>
  <?php
 session_start();
 $mi_carrito=$_SESSION['carrito'];
      if (isset($mi_carrito)){
	    $total=0;
		for ($i=0;$i<count($mi_carrito);$i++){
			if($mi_carrito[$i]<>NULL)
			{
   ?>
  <tr>
    <td><?php echo $mi_carrito[$i]['nombre'] ?></td>
    <td>$<?php echo $mi_carrito[$i]['precio']  ?></td>
    <td><?php echo $mi_carrito[$i]['cantidad'] ?></td>
    <?php 
		$subtotal=$mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
	    $total=$total+$subtotal;
	?>
    <td>$<?php echo $subtotal ?>
    </td>
    <td>&nbsp;</td>
  </tr>
  <?php 
			}
	  }
  }
  ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#CCCCCC">TOTAL    </td>
    <td colspan="2">$<?php if (isset($total)) echo $total ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;
      </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#CCCCCC"><strong>Datos del comprador</strong></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4">&nbsp;</td>
    </tr>
  <tr>
    <td>Nombre:</td>
    <td colspan="4"><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre" /></td>
    </tr>
  <tr>
    <td>Dirección:</td>
    <td colspan="4"><input type="text" name="direccion" id="direccion" /></td>
    </tr>
  <tr>
    <td>Tel:</td>
    <td colspan="4"><input type="text" name="tel" id="tel" /></td>
    </tr>
  <tr>
    <td>e-mail:</td>
    <td colspan="4"><input type="text" name="correo" id="correo" /></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input class="boton negro redondo" type="submit" name="confirmarPedido" id="confirmarPedido" value="Comprar" /></td>
    <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
</div>
</center>
<?php include('../plantilla/footer.php');?>