<?php
 
 
ob_start();
include 'banco.php';
$link = conectar();
$sql = "select * from estado";
$resp = mysqli_query($link, $sql);
if($resp){
    echo "<hr>";
    echo "<h1>Registro dos Estados</h1><br>";
    $dados = mysqli_fetch_assoc($resp);
    while($dados){
        
         echo "Nome: {$dados['nome']} <br>";
         echo "UF: {$dados['uf']} <br>";
         echo "Região: {$dados['regiao']} <br>";
         echo "População Total: {$dados['total_pop']} <br>";
         echo "Total Mulheres: {$dados['mulheres_pop']} <br>";
         echo "Total Homens: {$dados['homens_pop']} <br>";
         echo "<br></hr>";

        $dados = mysqli_fetch_assoc($resp);
    }
    
}else{
    mysqli_error($link);
}
mysqli_close($link);
$p = ob_get_clean();
 
 
require_once __DIR__ . '/vendor/autoload.php';
$arquivo = "RegistroEstados.pdf";
 
$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);
 
$mpdf->WriteHTML($p);


$mpdf->Output($arquivo, 'D');
