<?php // conexão com o servidor
$conect = mysql_connect("130.211.75.60", "root", "root");

// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");

// Caso a conexão seja aprovada, então conecta o Banco de Dados.
$sql = mysql_select_db("Hidroponia");

?>      