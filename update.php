<?php include("./templates/head.php") ?>
<?php 
     include("db.php");
     $id=$_GET['id'];
     $query= "SELECT * FROM `mochilas` WHERE  id=$id";
     $result = mysqli_query($connect, $query);
     if (mysqli_num_rows($result)==1) {
        $row = mysqli_fetch_array($result);
        $nombre=$row['nombre'];
        $presio=$row['presio'];
     }
?>
<div class="card body">
    <form action="update.php?id=<?php echo $id ?>" method="post">
        <div class="texPrincipalForm">
            <h2>MOCHILAS</h2>
        </div>
        <div class="form-group">
            <label for="inputNombre">Ingresa el nombre</label>
            <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="Name"
                aria-describedby="helpId" value="<?php echo $nombre ?>">
        </div>
        <div class="form-group">
            <label for="inputPresio">Ingresa el presio</label>
            <input  type="number" name="presio" id="inputPresio" class="form-control" placeholder="Presio"
                aria-describedby="helpId" value="<?php echo $presio ?>">
        </div>
        <input class="btn btn-success primary" type="submit" value="Send">
        <a class="btn btn-primary" href="index.php" role="button">CANCELAR</a>
    </form>
</div>
<?php
    if ($_POST) {
        $nombre=$_POST['nombre'];
        $presio=$_POST['presio'];
        $query = "UPDATE `mochilas` SET `nombre`='$nombre',`presio`='$presio' WHERE id=$id";
        $result = mysqli_query($connect, $query);
        if (isset($result)) {
            header("Location: index.php");
        }
    }
?>
<?php include("./templates/footer.php") ?>