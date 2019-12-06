<?php

    include 'banco.php';

    $id = $_REQUEST["id"];
    $sql = "delete from estado where id_estado = $id";

    $link = conectar();
    $resp = mysqli_query($link, $sql);
    if(!$resp){
        echo "erro na consulta $sql";
        echo mysqli_error($link);
        mysqli_close($link);
        die();
    }else{
        header("location: lista.php");
    }