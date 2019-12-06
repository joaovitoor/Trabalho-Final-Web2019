<?php

    include "banco.php";

    function titulo(){
        echo "Dados dos Estados";
    }

    function principal(){
        $link = conectar();
        $sql = "select * from estado";
        $resp = mysqli_query($link, $sql);
        $estados = mysqli_fetch_all($resp);
        include "lista_form.php";
    }
    include "template.php";