<?php

    include 'banco.php';
    $link = conectar();
    $sql = "select sum(homens_pop), sum(mulheres_pop) from estado";
    $resp = mysqli_query($link, $sql);
    $dad = mysqli_fetch_all($resp);
    foreach($dad as $d);
    


    $dados = array();
    $dados[] = array("key" => "Meninos", "y" => $d[0], "cor" => "blue");
    $dados[] = array("key" => "Meninas", "y" => $d[1], "cor" => "pink");

    echo json_encode($dados);