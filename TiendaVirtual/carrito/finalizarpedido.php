<?php 
session_start();
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['tel'];
$email=$_POST['correo'];
$mi_carrito=$_SESSION['carrito'];
$saludo='Gracias por tu compra '.$nombre.'.\n
 Tu transaccion ha finalizado y te hemos enviado un recibo de tu compra por correo electronico.\n
Un operario de nuestra tienda de contactara contigo\n
Saludos cordiales';
$pedido='<h3>Gracias por tu compra.<br></h3><h4>'.$nombre.'</h4>
 Tu transaccion ha finalizado.<br>
Un operario de nuestra tienda de contactara contigo<br>
Saludos cordiales
<br><br>
Datos del cliente:
<br>Telefono: '.$telefono.'<br>
Direccion: '.$direccion.'<br>
E-mail: '.$email.'<br><br>';
 	if(isset($mi_carrito)){
		$total=0;
		$pedido.='
		<table width="520" height="160" border="0" align="center">
		  <tr>
			<td colspan="5" align="center">Listado de sus compras</td>
		  </tr>
		  <tr>
			<td width="213" bgcolor="#00CC00"><strong>PRODUCTO</strong></td>
			<td width="87" bgcolor="#00CC00"><strong>PRECIO</strong></td>
			<td width="77" bgcolor="#00CC00"><strong>CANTIDAD</strong></td>
			<td colspan="2" bgcolor="#00CC00"><strong>SUBTOTAL</strong></td>
		  </tr>
		';
		for($i=0;$i<count($mi_carrito);$i++){	
		if($mi_carrito[$i]<>null)
		{
			$subtotal = ($mi_carrito[$i]['precio'])*($mi_carrito[$i]['cantidad']);
			$total = $total+$subtotal;
			$pedido.='
			<tr align="center">
				<td bgcolor="#00FF66">'.$mi_carrito[$i]['nombre'].'</td>
				<td bgcolor="#00FF66">'.$mi_carrito[$i]['precio'].'</td>
				<td bgcolor="#00FF66">'.$mi_carrito[$i]['cantidad'].'</td>
				<td bgcolor="#00FF66">'.$subtotal.'</td>
		  	</tr>
			';
	 	}
		}
		$pedido.='<tr align="center"><td colspan="5" bgcolor="#00FF66">Total: '.$total.'</td></tr></table>';
echo "<script language='javascript'>alert(\"Gracias por tu compra ".$nombre.".\\nTu transaccion ha finalizado y te hemos enviado un recibo de tu compra por correo electronico.\\nUn operario de nuestra tienda se contactara contigo.\\nSaludos cordiales.\");</script>";
// Varios destinatarios
$para  = $email . ', '; // atención a la coma
$para .= 'torby@outlook.com';

// título
$título = 'Compra realizada';

// mensaje
$mensaje = $pedido;

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras= 'From: tiendaonline@example.com'.'\r\n'.'Reply-To: tiendaonline@example.com'.'\r\n'.'X-Mailer: PHP/'.phpversion();

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
	}
	session_destroy();
?>
<html>
    <head>
    	<meta http-equiv="refresh" content="0; url=../index.php">
    </head>
</html>
