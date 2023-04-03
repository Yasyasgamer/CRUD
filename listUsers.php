<?php
require_once 'conexao.php';

// Selecionar todos os usuários
$results = $db->query('SELECT * FROM pessoas');

// Exibir todos os usuários em uma tabela HTML
echo '<table>';
//trr é linha --- th é coluna
echo '<tr><th>ID</th><th>Nome</th><th>coisa1</th><th>coisa2</th></tr>';
while ($row = $results->fetchArray()) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['nome'] . '</td>';
    echo '<td>' . $row['coisa1'] . '</td>';
    echo '<td>' . $row['coisa2'] . '</td>';
    echo '</tr>';
}
echo '</table>';

$db->close();
?>

<a href='index.php'>Voltar</a>