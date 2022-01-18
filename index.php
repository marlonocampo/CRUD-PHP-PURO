<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Frontend/bootstrap/css/bootstrap.min.css">
    <title>Task</title>

</head>
<body>
<div class="container">
    <div class="row justify-content">
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-header">
                    Insert Task
                </div>
                <div class="card-body">
                    <?php
                    ?>
                    <form action="Backend/Insert.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input name="name"
                                   id="name"
                                   type="text"
                                   class="form-control"
                                   placeholder="Ingrese name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="date">Date</label>
                            <input
                                    name="date"
                                    id="date"
                                    type="date"
                                    class="form-control"
                                    placeholder="Ingrese date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="estado">Status</label>
                            <input name="status"
                                   type="text"
                                   id="estado"
                                   class="form-control"
                                   placeholder="Ingrese estado">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">
                    List Task
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">FECHA</th>
                            <th scope="col">TERMINADO</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        include('Backend/connection.php');
                        $sql = "select * from task";
                        $resultado = mysqli_query(conectar(), $sql);
                        while ($dato = mysqli_fetch_array($resultado)) {
                            ?>
                            <tr>
                                <th scope='row'> <?php echo $dato['id'] ?> </th>
                                <td> <?php echo $dato['name'] ?> </td>
                                <td> <?php echo $dato['date'] ?> </td>
                                <td> <?php echo $dato['ending'] ?> </td>
                                <td>
                                    <a href="Backend/Edit.php?id=<?php echo $dato['id'] ?>"> Editar</a>
                                    <a href="Backend/Delete.php?id=<?php echo $dato['id'] ?>"> Eliminar</a>
                                </td>
                                <td></td>
                            </tr>
                            <?php
                        }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="Frontend/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>