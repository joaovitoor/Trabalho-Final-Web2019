<?php

    include 'configBanco.php';

    function conectar()
    {
        global $host, $usuario, $senha, $banco;
        static $link = null;

        if($link == null)
        {
            
            $link = mysqli_connect($host,$usuario,$senha);
            if(!$link)
            {
               
                echo mysqli_error($link);
                die();
            }

            
            if(!mysqli_select_db($link, $banco))
            {
               
                echo mysqli_error($link);
                mysqli_close($link);
                die();
            }
        }
        return $link;
    }

    