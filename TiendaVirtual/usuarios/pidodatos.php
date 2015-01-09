<?php include('../conexion.php'); include('../plantilla/head.php');?>
<center><div class="pidoDatos">
<form id="form1" name="form1" method="post" action="login.php">
  <p>
    <label for="user">Usuario:</label>
    <input type="text" name="user" id="user" />
    <label for="pass">Pasword:</label>
    <input type="password" name="pass" id="pass" />
    <p><input class="boton negro redondo" type="submit" name="button" id="button" value="Entrar" /></p>
  </p>
</form>
</div>
</center>
<?php include('../plantilla/footer.php');?>