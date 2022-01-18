<?php
include('connection.php');
$name = $_POST['name'];
$date = $_POST['date'];
$status = $_POST['status'];


$insert = "insert into task (name,date,ending) values ('$name','$date','$status')";

$query = mysqli_query(conectar(), $insert);
echo $insert;

if ($query) {
    Header("Location: ../index.php");
}else{
    echo ("Error en insertar Datos!");
}
?>