<?php

// A sess�o precisa ser iniciada em cada p�gina diferente
if (!isset($_SESSION)) session_start();

$nivel_necessario = 2;

// Verifica se n�o h� a vari�vel da sess�o que identifica o usu�rio
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
    // Destr�i a sess�o por seguran�a
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: index.php");
    exit;
}
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <script language='javascript'>var txt = "SMART HOUSE GAR";
        var veloc = 1000;
        var refr = null;
        function rotulo_title() {
            document.title = txt;
            txt = txt.substring(1, txt.length) + txt.charAt(0);
            refr = setTimeout("rotulo_title()", veloc);
        }
        rotulo_title();</script>

    <script type="text/javascript" src="style/js/jquery.responsiveiframe.js"></script>
    <script type="text/javascript">
        var ir = responsiveIframe();
        ir.allowResponsiveEmbedding();
    </script>

    <script src="style/js/bootstrap.min.js"></script>
    <script src="style/js/customjs.js"></script>
    <script src="style/js/holder.mim.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <script src="style/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="style/js/ie-emulation-modes-warning.js"></script>

    <script src="style/js/html5shiv.min.js"></script>
    <script src="style/js/respond.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="style/js/ie10-viewport-bug-workaround.js" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/css/justified-nav.css" rel="stylesheet">

</head>
<body>
<div class="jumbotron" align="center">
<h1 class=""> Olá, <a class="text-info"> <?php echo($_SESSION['UsuarioUsuario']); ?></a></h1>


            <h2 class=" alert-danger">Seja Bem vindo ao HidropoNekt!<h2/>
            </div>
    <script src="style/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>










