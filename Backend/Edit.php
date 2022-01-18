<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Frontend/bootstrap/css/bootstrap.min.css">
    <title>Editar</title>
    <?php include('connection.php') ?>
</head>
<body>
<?php
    $idedit = $_GET['id'];
    $select = "select * from task where id='$idedit'";
    $res = mysqli_query(conectar(), $select);
    $dato = mysqli_fetch_array($res);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <div class="h4">
                        Edit
                    </div>
                </div>
                <div class="card-body">
                    <form action="Update.php" method="post">
                        <input value="<?php echo $dato['id']?>"  name="id" type="hidden">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input
                                   value="<?php echo $dato['name']?>"
                                   name="name"
                                   id="name"
                                   type="text"
                                   class="form-control"
                                   placeholder="Ingrese name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="date">Date</label>
                            <input
                                    value="<?php echo $dato['date']?>"
                                    name="date"
                                    id="date"
                                    type="date"
                                    class="form-control"
                                    placeholder="Ingrese date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="estado">Status</label>
                            <input
                                   value="<?php echo $dato['ending']?>"
                                   name="status"
                                   type="text"
                                   id="estado"
                                   class="form-control"
                                   placeholder="Ingrese estado">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Acutalizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/Frontend/bootstrap/js/bootstrap.min.js"></script>
</div>

</body>
</html>