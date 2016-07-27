
<!DOCTYPE HTML>
<html lag="pt-BR">
<body>

<?php
// Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
    header("Location: index.php");
    exit;
}
include '../config/conn.php';

$email = mysql_real_escape_string($_POST['email']);
$senha = mysql_real_escape_string($_POST['senha']);

// Valida��o do usu�rio/senha digitados
$sql = "SELECT `id`, `nome`,`senha`, `nivel`, `residencia`, `usuario`, `email`, `iparduino`,`portarduino` FROM `usuarios` WHERE (`email` = '" . $email . "') AND (`senha` = '" . sha1($senha) . "') AND (`ativo` = 1) LIMIT 1";
$query = mysql_query($sql);
if (mysql_num_rows($query) != 1) {
// Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
    header("Location: ../../404.html");
    exit;
} else {
// Salva os dados encontados na vari�vel $resultado
    $resultado = mysql_fetch_assoc($query);

// Se a sess�o n�o existir, inicia uma
    if (!isset($_SESSION)) session_start();

// Salva os dados encontrados na sess�o
    $_SESSION['UsuarioID'] = $resultado['id'];
    $_SESSION['UsuarioNome'] = $resultado['nome'];
    $_SESSION['UsuarioEmail'] = $resultado['email'];
    $_SESSION['UsuarioNivel'] = $resultado['nivel'];
    $_SESSION['UsuarioUsuario'] = $resultado['usuario'];
    $_SESSION['UsuarioResidencia'] = $resultado['residencia'];
    $_SESSION['UsuarioPortArduino'] = $resultado['portarduino'];
    $_SESSION['UsuarioIpArduino'] = $resultado['iparduino'];
    $_SESSION['UsuarioSenha'] = $resultado['senha'];

    echo $email;
// Redireciona o visitante

        header("Location:logado.php");
    exit;
}

?>

</body>
</html>
