<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="card card-body">
<div class="container p-4">
<div class="row">
    <div class="col-md-4">

    <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      <?php include("includes/footer.php")?>
<div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Dni</th>
            <th>iva</th>
            <th>N° Factura</th>
            <th>Importe</th>
          </tr>
        </thead>

        <tbody>
             
          <?php
          $query = "SELECT * FROM clientes join facturas;";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['dni']; ?></td>
            <td><?php echo $row['condicionIva']; ?></td>
            <td><?php echo $row['nroFactura'];?></td>
            <td><?php echo $row['importe'];?></td>
           
            
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>


      <?php include("includes/footer.php") ?>