<?php include("./templates/head.php") ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="card">
                <form action="save.php" method="post">
                    <div class="texPrincipalForm">
                        <h2>MOCHILAS</h2>
                    </div>
                    <div class="form-group">
                        <label for="inputNombre">Ingresa el nombre</label>
                        <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="Name"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="inputPresio">Ingresa el presio</label>
                        <input require="true" type="number" name="presio" id="inputPresio" class="form-control" placeholder="Presio"
                            aria-describedby="helpId">
                    </div>
                    <input class="btn btn-primary send" type="submit" value="Send">
                </form>
            </div>
        </div>
        <div class="col-7">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PRESIO</th>
                        <th>OPERACIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("db.php");
                        $query= "SELECT * FROM mochilas";
                        $result = mysqli_query($connect, $query);
                        while ($row = mysqli_fetch_array($result)) {?>
                    <tr>
                        <td>
                            <?php echo $row["id"]?>
                        </td>
                        <td>
                            <?php echo $row["nombre"]?>
                        </td>
                        <td>
                            <?php echo "$".$row["presio"]?>
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="">
                                <a name="" id="" class="btn btn-primary delete"
                                    href="delete.php?id=<?php echo $row['id']?>" role="button">DELETE</a>
                                <a name="" id="" class="btn btn-primary update"
                                    href="update.php?id=<?php echo $row['id']?>" role="button">UPDATE</a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("./templates/footer.php") ?>