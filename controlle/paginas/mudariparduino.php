
<?php

include'../config/conn.php';

$strSQL = "UPDATE usuarios set iparduino='" . $_POST["ip"] . "',portarduino='" . $_POST["port"] . "' where  id=1";
mysql_query($strSQL) or die(mysql_error());
$id = mysql_real_escape_string( );
echo ("Teste ".":".$_SESSION['UsuarioID']);
session_destroy();

 
$sql = "SELECT `id`, `nome`,`senha`, `nivel`, `residencia`, `usuario`, `email`, `iparduino`,`portarduino` FROM `usuarios` WHERE id=1";
$query = mysql_query($sql);
if (mysql_num_rows($query) != 1) {
// Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
    header("Location: 404.html");
    exit;
} else {
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

//    echo ("ID".":".$id."\n");
//    echo ("IP: ".$_SESSION['UsuarioIpArduino'].":".$_SESSION['UsuarioPortArduino']);
    header("Location: logado.php");
    

    exit;


}



//$_SESSION['UsuarioPortArduino'] = $_POST["port"];
//$_SESSION['UsuarioIpArduino'] = $_POST["ip"];




//header("Location:logado.php");




?>
