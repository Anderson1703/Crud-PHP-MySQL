
<?php
    include("db.php");
    if (isset($_POST)) {

        $nombre=$_POST["nombre"];
        $presio=$_POST["presio"];

        $query = "INSERT INTO `mochilas`(`nombre`, `presio`) VALUES ('$nombre','$presio')";
        $consulta = mysqli_query($connect,$query);
        if (isset($consulta)) {
           header("Location: index.php");
        }
    }
?>