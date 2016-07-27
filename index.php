<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script language='javascript'>var txt ="Coxim Robótica - UFMS ";
            var veloc = 1000;
            var refr = null;
            function rotulo_title() {
                document.title = txt;
                txt = txt.substring(1, txt.length) + txt.charAt(0);
                refr = setTimeout("rotulo_title()", veloc);
            }
            rotulo_title();</script>
        <link rel="stylesheet" href="style/css/bootstrap.min.css">
        <link href="style/css/theme.css" rel="stylesheet">

        <link href="style/css/carousel.css" rel="stylesheet">

        <link rel="stylesheet" href="style/css/bootstrap-theme.min.css">
        <link href="style/assets/js/ie10-viewport-bug-workaround.js" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="style/css/justified-nav.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]>
        <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="style/assets/js/ie-emulation-modes-warning.js"></script>

        <script src="style/js/html5shiv.min.js"></script>
        <script src="style/js/respond.min.js"></script>

    </head>


    <body style="background-color:#009688;"role="document"> 
        <form method="POST" action="controlle/paginas/validacao.php">
            <!-- ********************************************************* -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" style="font-style: italic;font-family: 'Century Schoolbook L'; font-size:40px ; color: white">Coxim Robótica</a>

                    </div>
                    <div id="navbar" class="navbar-collapse collapse">

                        <ul class="nav navbar-nav navbar-right">
                            <!-- ***** The sign in link makes a connection with the dialog promot.
                                   This is very importent to understand the relationip
                                     between href="#signmein" data-toggle="modal"	and the dialog box  ***** -->
                            <li><a style="color: #FFF" href="#signmein" data-toggle="modal" class="glyphicon glyphicon-user ">Login</a></li>

                        </ul>
                    </div>

                </div>
            </nav>

            <!-- ***************************** END: popup login screen **************************************** -->
            <div class="modal" id="signmein"> <!-- link between the <li> above this div tag -->
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Login</h4>
                        </div>
                        <form method="POST" action="controlle/paginas/validacao.php">
                            <!--                    id="loginForm"-->
                            <div class="modal-body">

                                <!-- ****** <div id="msgDisplay"> is used to display messages returned by the AJAX script ***** -->
                                <div id="msgDisplay"></div>
                                <div class="bs-example">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                        <input type="text" class="form-control"
                                               name="email" placeholder="Email" id="txUsuario" maxlength="25">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                        <input type="password" class="form-control" placeholder="Password"
                                               name="senha" id="txSenha">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-xs-offset-2 col-xs-10">
                                            <button type="submit" class="btn btn-success pull-right"
                                                    >Entrar
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
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="public/img/wp.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <!--                                          <h1>Palavras.</h1>-->
                                                                      <!--<p>Agrião e alface. Salada garantida.</p>-->
                                                                      <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="public/img/wp.jpg">
                    <div class="container">
                        <div class="carousel-caption">
                            <!--<h1>fdafas.</h1>-->
                           <!--<p>Agrião e alface. Salada garantida.</p>-->
                            <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- /.carousel 
    
    
            <!-- Marketing messaging and featurettes
            ================================================== 
            <!-- Wrap the rest of the page in another container to center all the content. -->
            <br>
            <br>
 

            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="syle/assets/js/vendor/jquery.min.js"><\/script>')</script>
            <script src="style/dist/js/bootstrap.min.js"></script>
            <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
            <script src="style/assets/js/vendor/holder.min.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="style/assets/js/ie10-viewport-bug-workaround.js"></script>

    </body>
</html>
