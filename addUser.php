<form method="post">
    <label>Nome:</label><br>
    <input type="text" name="nome"><br>
    <label>coisa 1</label><br>
    <input type="text" name="coisa1"><br>
    <label>coisa2:</label><br>
    <input type="text" name="coisa2"><br>
    <input type="submit" name="add" value="Adicionar">
</form>

<a href="index.php">Voltar</a>
<?php

require_once "conexao.php";

if (isset($_POST["add"])){
  $nome = $_POST["nome"];
  $coisa1 = $_POST["coisa1"];
  $coisa2 = $_POST["coisa2"];

  // "pessoas" é o nome da tabela
  //statement
  $stmt = $db->prepare("INSERT INTO pessoas (nome, coisa1, coisa2) VALUES (:nome , :coisa1, :coisa2)");
  $stmt->bindValue(":nome", $nome, SQLITE3_TEXT);
  $stmt->bindValue(":coisa1", $coisa1, SQLITE3_TEXT);
  $stmt->bindValue(":coisa2", $coisa2, SQLITE3_INTEGER);
  $stmt->execute();
}

$db->close();
?>

