<?php
// A sess�o precisa ser iniciada em cada p�gina diferente
if (!isset($_SESSION))
    session_start();

$nivel_necessario = 2;

// Verifica se n�o h� a vari�vel da sess�o que identifica o usu�rio
if (!isset($_SESSION['UsuarioID']) OR ( $_SESSION['UsuarioNivel'] < $nivel_necessario)) {
    // Destr�i a sess�o por seguran�a
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: ../../index.php");
    exit;
}
?>

<html lang="en">
    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script language='javascript'>
            var txt = "  \|/ Relatorio Para Hidroponia \|/ ";
            var veloc = 1000;
            var refr = null;
            function rotulo_title() {
                document.title = txt;
                txt = txt.substring(1, txt.length) + txt.charAt(0);
                refr = setTimeout("rotulo_title()", veloc);
            }
            rotulo_title();
        </script>
        <link rel="stylesheet" href="../../style/css/bootstrap.min.css">
        <link href="../../style/css/theme.css" rel="stylesheet">

        <link href="../../style/css/carousel.css" rel="stylesheet">

        <link rel="stylesheet" href="../../style/css/bootstrap-theme.min.css">
        <link href="../../style/assets/js/ie10-viewport-bug-workaround.js" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../../style/css/justified-nav.css" rel="stylesheet">
        <link href="../../style/css/carousel.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]>
        <script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../style/assets/js/ie-emulation-modes-warning.js"></script>

        <script src="../../style/js/html5shiv.min.js"></script>
        <script src="../../style/js/respond.min.js"></script>

    </head>

    <body  role="document" style="background-color: #009688">
        <form method="POST" action="mudariparduino.php">
            <!-- ********************************************************* -->
            <nav class="navbar navbar-inverse success navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"
                           style="font-style: italic;font-family: 'Century Schoolbook L'; font-size:40px ; color: white">HidropoNect</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false"><?php echo($_SESSION['UsuarioIpArduino'] . ":" . $_SESSION['UsuarioPortArduino']); ?>
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#mudarip" data-toggle="modal">Mudar IP</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator"class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" style="margin-right: -50px">
                            <li><a>User: <?php echo($_SESSION['UsuarioNome']); ?></a></li>
                            <li><a href="../../logout.php" class="glyphicon glyphicon-off ">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal" id="mudarip"> <!-- link between the <li> above this div tag -->
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Registrar-se</h4>
                        </div>
                        <form method="POST" action="mudariparduino.php" id="MudarIp">
                            <div class="modal-body">
                                <!-- ****** <div id="msgDisplay"> is used to display messages returned by the AJAX script ***** -->
                                <div id="msgDisplay"></div>
                                <div class="bs-example">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="" aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" placeholder="Novo IP"
                                               name="ip" id="txt_ip">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="" aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" placeholder="Nova Porta"
                                               name="port" id="txt_port">

                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-xs-offset-2 col-xs-10">
                                            <button type="submit" class="btn btn-primary pull-right"
                                                    name="btn_ip" id="btn_Ip">Mudar
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- END of login screen-->
        </form>

        <div class="container">
            <div class="panel panel-primary " style="margin-top: 17px; margin-top: 40px;box-shadow: 15px 15px 15px 1px #0F3131, -15px 15px 15px 1px #0F3131;
                 -webkit-box-shadow: -20px -20px -20px #0F3131, -15px 15px 15px #0F3131;
                 -moz-box-shadow:  20px 15px 15px #0F3131, 20px -20px 20px #0F3131;">
                <div class="panel-heading">
                    <h3 class="">Painel de Controle</h3>
                </div>
                <nav>
                    <ul class="nav nav-justified">
                        <li class="dropdown">
                            <a href="#" style="color: #000" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Controle Geral                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="../graficos/Controle-Geral/index.php" target="interno">Visualizar Geral</a>-->
                                <!--<li><a href="../graficos/Controle-Geral/index2.php" target="interno">TESTE</a>-->
                                <!--<li><a href="#" target="interno">Grafico de Comparação</a>-->
                                <!--                         
                                                            <li><a href="#">Separated link</a></li>
                                                            <li><a href="#">One more separated link</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" style="color: #000" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Gŕaficos
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="../graficos/Controle-Temperatura/dynamic-update/" target="interno">Grafico Atual</a>-->
                                <!--<li><a href="../graficos/Controle-Temperatura/basic-line/" target="interno">Grafico Simples</a>-->
                                <li><a href="../graficos/Controle-Temperatura/compare/" target="interno">Gráfico Lúmes X Temperatura ºC</a>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" style="color: #000"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Planejamento
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="../graficos/Controle-Ph/dynamic-update/index.htm" target="interno">Grafico Atual</a>-->
                                <!--<li><a href="../graficos/Controle-Ph/basic-line/" target="interno">Grafico Simples</a>-->
                                <!--<li><a href="../graficos/Controle-Ph/compare/" target="interno">Grafico de Comparação</a>-->
                                <!--                         
                                                            <li><a href="#">Separated link</a></li>
                                                            <li><a href="#">One more separated link</a></li>-->
                            </ul>
                        </li>

                        <!--                        <li class="dropdown">
                                                    <a href="#" style="color: #000"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                                       aria-expanded="false">Controle PPM
                                                        <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="../graficos/Controle-PPM/dynamic-update/" target="interno">Grafico Atual</a>
                                                        <li><a href="../graficos/Controle-PPM/basic-line/" target="interno">Grafico Simples</a>
                                                        <li><a href="../graficos/Controle-PPM/compare/" target="interno">Grafico de Comparação</a>
                                                                                     
                                                                                        <li><a href="#">Separated link</a></li>
                                                                                        <li><a href="#">One more separated link</a></li>
                                                    </ul>
                                                </li>
                        
                                                <li class="dropdown">
                                                    <a href="#"style="color: #000" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                                       aria-expanded="false">Controle AC
                                                        <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="../graficos/Controle-AC/dynamic-update/" target="interno">Grafico Atual</a>
                                                        <li><a href="../graficos/Controle-AC/basic-line/" target="interno">Grafico Simples</a>
                                                        <li><a href="../graficos/Controle-AC/compare/" target="interno">Grafico de Comparação</a>
                                                                                     
                                                                                        <li><a href="#">Separated link</a></li>
                                                                                        <li><a href="#">One more separated link</a></li>
                                                    </ul>
                                                </li>-->

                        <li class="dropdown">
                            <a href="#" style="color: #000" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Produção
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="../graficos/Controle-Producao/column/" target="interno">Grafico Atual</a>-->
                                <li><a href="../graficos/Controle-Producao/basic-line/" target="interno">Grafico Simples</a>
                                <!--<li><a href="../graficos/Controle-Producao//compare/" target="interno">Grafico de Comparação</a>-->
                                <!--                         
                                                            <li><a href="#">Separated link</a></li>
                                                            <li><a href="#">One more separated link</a></li>-->
                            </ul>
                        </li>

                    </ul>
                </nav>
                <div class="container" style="height:auto;width:auto ;border: none">
                    <div class="embed-responsive embed-responsive-4by3" style="height: 350px;;width:auto">

                        <iframe class="embed-responsive-item" src="../../bemvindo.php" name="interno"></iframe>
                    </div>
                </div>

                <!--        <div id="embed">-->
                <!--            <iframe src="bemvindo.php" name="interno"-->
                <!--                    style="width: 100%; padding: 0px;margin: 0; border: none; display: block;height:0px; overflow: hidden;"></iframe>-->
                <!--        </div>-->


            </div><!-- /container -->
            
                <div align="center" >
            <br>                <p style="color: #FFF ">&copy; 2016 Rafael Viana Company, Inc.</p>
                </div>
            <script src="../../style/js/jquery.min.js"></script>
            <script src="../../style/js/bootstrap.min.js"></script>
            <script src="../../style/js/customjs.js"></script>
            <script src="../../style/assets/js/holder.mim.js"></script>
            <script type="text/javascript">$(".nav a").on("click", function () {
                $(".nav").find(".active").removeClass("active");
                $(this).parent().addClass("active");
            });
            </script>
    </body>
</html>