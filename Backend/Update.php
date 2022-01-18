<?php
include ('connection.php');
$id = $_POST['id'];
$name = $_POST['name'];
$date = $_POST['date'];
$status = $_POST['status'];

$update = "update task set name='$name', date='$date', ending='$status' where id='$id'";
echo $update;
$resul = mysqli_query(conectar(), $update);

if ($resul){
    Header("Location: ../index.php");
}
