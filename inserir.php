<?php

    include 'banco.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    
        $link = conectar();
        $nome = $_POST['nome'];
        $uf = $_POST['uf'];
        $regiao = $_POST['regiao'];
        $total_pop = $_POST['total_pop'];
        $homens_pop = $_POST['homens_pop'];
        $mulheres_pop = $_POST['mulheres_pop'];
        $sql = "insert into estado(nome, uf, regiao, total_pop, homens_pop, mulheres_pop) values('$nome', '$uf', '$regiao', '$total_pop', '$homens_pop', '$mulheres_pop')";

        if(mysqli_query($link, $sql)){

            header('location:lista.php');
            die();

        }else{
            error_log(mysqli_error($link));
        }
    }    
    
    function titulo(){
        echo "Cadastro dos Estados";
    }

    function principal(){
            if(array_key_exists('id', $_GET)){
                $id_estado = $_GET['id'];
                $link = conectar();
                $sql = "select * from estado where id_estado = $id_estado";
                $resp = mysqli_query($link, $sql);
                $linha = mysqli_fetch_assoc($resp);
            }else{
                $linha = ["nome" => "", "uf" => "", "regiao" => "", "total_pop" => "", "homens_pop" => "", "mulheres_pop" => ""];
            }
            include "inserir_form.php";
    }
    include "template.php";

    
