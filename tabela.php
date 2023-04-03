<?php

require_once "conexao.php";

// Cria a tabela caso ainda n exista
//SQL não é case sensitive - tanto faz MAIÚSCULA E MINÚSCULA no comando


// SE EU QUISER ADD MAIS UMA CATEGORIA NÃO ESQUECER DE ADD AQUI TAMMBÉM !!!!!!!!
$db->exec("CREATE TABLE IF NOT EXISTS pessoas (id INTEGER PRIMARY KEY, nome TEXT, coisa1 TEXT, coisa2 TEXT)");

$db->close();
?>
<a href="index.php"> Voltar </a>