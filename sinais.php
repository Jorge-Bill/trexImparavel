<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>Sinais</title>
<!-- Bootstrap -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="css/estilos.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        </head>
        <body>
            <div class="container-fluid">
                <div class="row">
                <a class="link-invisivel " href="#conteudo" id="topo">Ir direto para o conteúdo</a>
                    <?php include("nav.php");?>
                    <?php include("header.php");?>
                    <?php include("artsinais.php");?>
                    <?php include("navlateral.php");?>
                    <?php include("footer.php");?>
                </div>      
            </div> 
        </body>

</html>