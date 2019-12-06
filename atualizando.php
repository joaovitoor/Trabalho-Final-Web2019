<?php

    include 'banco.php';

    $id = $_REQUEST["id_estado"];
    $nome = $_REQUEST["nome"];
    $uf = $_REQUEST["uf"];
    $regiao = $_REQUEST["regiao"];
    $total_pop = $_REQUEST["total_pop"];
    $homens_pop = $_REQUEST["homens_pop"];
    $mulheres_pop = $_REQUEST["mulheres_pop"];

    $link = conectar();
    $sql = "update estado set nome = '$nome', uf = '$uf', regiao = '$regiao', total_pop = '$total_pop', homens_pop = '$homens_pop', mulheres_pop = '$mulheres_pop' where id_estado = $id";

    $resp = mysqli_query($link, $sql);

    if(!$resp){
        echo "erro na consulta $sql";
        echo mysqli_error($link);
        mysqli_close($link);
        die();
    }else{
        header("location: lista.php");
    }