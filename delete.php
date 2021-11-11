<?php 
    include("db.php");
    if ($_GET) {
        $id=$_GET['id'];
        $query="DELETE FROM `mochilas` WHERE id=$id";
        $consulta = mysqli_query($connect,$query);
        if (isset($consulta)) {
            header("Location: index.php");
        }
    }
?>