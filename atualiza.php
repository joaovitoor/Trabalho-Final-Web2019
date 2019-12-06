<?php
    
    include 'banco.php';

    function titulo(){
        echo "Editar";
    }

    function principal(){
        $id = $_REQUEST["id"];
        $link = conectar();
        $sql = "select * from estado where id_estado = $id";
        $resp = mysqli_query($link, $sql);
        $linha = mysqli_fetch_assoc($resp);
        include 'inserir2_form.php';
        
    }
    include 'template.php';