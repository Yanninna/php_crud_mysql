<?php
include("db.php");
$nombre = '';
$direccion= '';

$condicionIva= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM clientes  WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $direccion = $row['direccion'];
    
    $condicionIva = $row['condicionIva'];
   
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $row['nombre'];
  $direccion = $row['direccion'];
  
  $condicionIva = $row['condicionIva'];
 
 
  $query = "UPDATE cliente   set nombre = '$nombre',
   direccion = '$direccion',  condicionIva = '$condicionIva', 
   nroFactura = '$nroFactura', importe = '$importe', WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">

      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

        <div class="form-group">
        <input name="nombre" type="text" class="form-control"
           value="<?php echo $nombre; ?>" placeholder="Update nombre">
        </div>
        <div class="form-group">
        <input name="direccion" type="text" class="form-control" <?php echo $direccion;?>
        placeholder="Update direccion">
        </div>
        <div class="form-group">
        <input name="condicionIva" type="text" class="form-control" <?php echo $condicionIva;?>
        placeholder="Update condicionIva">
        </div>
        <button class="btn-success" name="update">
          Update
     </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>