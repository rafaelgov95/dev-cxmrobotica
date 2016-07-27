<?php

$cebolinha = $_POST['cebolinha'];
$salsinha = $_POST['salsinha'];
$rucula = $_POST['rucula'];
$alface = $_POST['alface'];
//
//if (!($nome) || !($email) || !($telefone)){
//	print "Preencha todos os campos!"; exit();
//Abrindo Conexao com o banco de dados
include '../../../config/conn.php';
//$cebolinha = mysql_real_escape_string($cebolinha);
//$salsinha = mysql_real_escape_string($salsinha);
//$rucula = mysql_real_escape_string($rucula);
//$alface = mysql_real_escape_string($alface);
$insert = mysql_query("insert into verdura (salsinha,cebolinha,rucula,alface,date) values ('{$salsinha}','{$cebolinha}','{$rucula}','{$alface}',now())");
mysql_close($conexao);
if ($insert) {
    print "Cadastro Realizado!";
} else {
    print "Erro ao Cadastrar!";
}
?>