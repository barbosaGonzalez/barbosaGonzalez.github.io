<?php 
$host="localhost";
$user="root";
$pass="";
$db="tiendadreamweaver";
$conexion = mysql_connect($host, $user, $pass)or die('No hay conexion a la base de datos'.mysql_error());
$db = mysql_select_db($db, $conexion) or die('No existe la base de datos');

define ('BASE_URL','http://localhost/TiendaVirtual/');

function base_url($cad){
	return BASE_URL.$cad;
};
function ActualizarStock($id,$can)
{
	$consulta="select * from productos where id=$id";
	$res=mysql_query($consulta);
	$fila=mysql_fetch_array($res);
	$enStock=$fila['cuanto_hay'];// obtengo la cantidad en stock
//le paso el id del producto y la cantidad comprada
//Escribo en mi base de datos
 if (isset($id))
   {
    $can=$enStock-$can;
	$cad="UPDATE productos set cuanto_hay='$can' where id=$id";
    mysql_query($cad);
	//echo $cad;
	echo '<script>alert("Registro actualizado con &eacute;xito!.");</script>';
   }
}
?>
      
<?php 
function EncotrarReg($id)
{
	$consulta="select * from productos where id=$id";
	$res=mysql_query($consulta);
	$fila=mysql_fetch_array($res);
	return $fila;
}
?>

<?php 
function grabarCambios($id,$nom,$des,$precio,$cuanto_hay,$imagen,$fecha)
{

//Escribo en mi base de datos
 if (isset($id))
   {
    $cad="UPDATE productos set nombre='$nom',
	      descripcion='$des',
		  precio='$precio',
		  cuanto_hay='$cuanto_hay',
		  imagen='$imagen',
		  fecha='$fecha' where id=$id";
    mysql_query($cad);
	//echo $cad;
	echo '<script>alert("Registro actualizado con &eacute;xito!.");</script>';
   }
}

function borrar($id)
{
	$sql="delete from productos where id=$id";
	mysql_query($sql);
	echo '<script>alert("Registro eliminado con &eacute;xito!.");</script>';
}
?>


