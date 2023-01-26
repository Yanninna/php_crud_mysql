<?php

include("db.php");

$registros=mysqli_query($conexion, "select * from clientes
                        where dni='$_REQUEST[dni]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
  mysqli_query($conexion,"delete from clientes where dni='$_REQUEST[dni]'") or
    die("Problemas en el select:".mysqli_error($conexion));
  echo "Se efectuó el borrado del cliente con dicho dni.";
}
else
{
  echo "No existe un cliente con ese dni.";
}
mysqli_close($conexion);
?>

