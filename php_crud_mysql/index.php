<?php include("db.php") ?>

<?php include("includes/header.php") ?>


<div class="container p-4 ">
<div class= "row align-items-start">

    <div class="col-md-4">

    <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

    <div class="card card-body">
        <form action="save.php" method="POST">
            <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Escriba Nombre " autofocus>
</div>
<div class="form-group">
                <input type="text" name="direccion" class="form-control" placeholder="Escriba direccion" autofocus>
                </div>
                <div class="form-group">
                <input type="numeber" name="dni" class="form-control" placeholder="Escriba Dni " autofocus>
                </div>
                
                <div class="form-group">
                Condicion Iva
                <select type="select" name="condicionIva" class="form-control" placeholder="Escriba Iva" autofocus>
                <option  value="A">A</option>
                <option  value="B">B</option>
                <option value="C">C</option>
                
                </select>
                </div>

                <div class="form-group">
                <input type="numeber" name="nroFactura" class="form-control" placeholder="Escriba Numero de Factura " autofocus>
                </div>
                <div class="form-group">
                <input type="numeber" name="importe" class="form-control" placeholder="Importe" autofocus>
            </div>
            <input type="submit" class="btn btn-success btn-block" name="save" value="resultados">
        </form>
</div>
    </div>
    
              <div  class="row align-items-end">
    <img class="img-fluid" src="images.jpg" class="mn-auto">
</div>

    </div>
</div>

