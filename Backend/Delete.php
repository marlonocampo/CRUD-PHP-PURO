<?php
include ('connection.php');
$id = $_GET['id'];
$sql = "delete from task where id='$id'";
$resul = mysqli_query(conectar(), $sql);

if ($resul){
    Header("Location: ../index.php");
}