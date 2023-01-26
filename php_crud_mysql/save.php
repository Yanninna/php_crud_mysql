
<?php
$conexion=mysqli_connect("localhost","root","","cliente") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into clientes(nombre,direccion,dni,condicionIva) values
 ('$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[dni]','$_REQUEST[condicionIva]')") or
  die("Problemas en el select".mysqli_error($conexion));



mysqli_query($conexion,"insert into facturas(nroFactura,importe) values
 ('$_REQUEST[nroFactura]','$_REQUEST[importe]')") or
  die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);


$_SESSION['message'] = 'Saved Successfully';
$_SESSION['message_type'] = 'success';
header("Location: index.php");

?>