<?php
    function conectar(){
        $connection = mysqli_connect('localhost','root', '');
        mysqli_select_db( $connection,'list');
        mysqli_query($connection,"SET NAME 'utf8'");
        return $connection;
    }
?>