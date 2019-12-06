
<div class="grid-container">
    <table>
        <tr>
            <th>Id Estado</th>
            <th>Estado</th>
            <th>UF</th>
            <th>Região</th>
            <th>População Total</th>
            <th>Total de Homens</th>
            <th>Total Mulheres</th>
        </tr>
        <?php foreach($estados as $e): ?>
            <tr>
                <td><?=$e[0]?></td>
                <td><?=$e[1]?></td>
                <td><?=$e[2]?></td>
                <td><?=$e[3]?></td>
                <td><?=$e[4]?></td>
                <td><?=$e[5]?></td>
                <td><?=$e[6]?></td>
                <td><a href="atualiza.php?id=<?=$e[0]?>">Editar</a></td>
                <td><a href="apaga.php?id=<?=$e[0]?>">Apagar</a></td>
               
            </tr>
        <?php endforeach; ?>
    </table>    
</div>


            