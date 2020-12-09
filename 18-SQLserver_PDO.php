<?php

$con = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS2;ConnectionPooling=0", "sa", "root"); //ConnectionPoling=0 é obrigatorio

$stmt = $con->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);  //Ja gera as diversas linhas de codigo so select, cada linha é um aray da tabela, ou seja, uma linha


echo    '<table style="border: 2px solid #FF760C;">
    <caption><strong>Tabela do Banco</strong></caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Senha</th>
                <th>Data</th>
            </tr>
        </thead>';

foreach ($result as $linha) {
    echo "<tr>";
    foreach ($linha as $coluna => $valor) {
        echo '<td style="border-bottom: 1px solid #8395a7;
            border-right: 1px solid #8395a7;">';
        echo $valor;
        echo "</td>";
    }
    echo "</tr>";
}

echo  "</table><br><br><br><h1>Itens</h1>";



foreach ($result as $linha) {

    foreach ($linha as $coluna => $valor) {
        echo "<strong>".$coluna."</strong>= ".$valor."<br>";
    }

    echo "<hr>";
}

/*
    <table>
        <thead>
            <tr>
                <th>Nome do Usuário</th>
                <th>Idade</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['age'] ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
</table>
*/

?>