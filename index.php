<?php
    if (isset($_REQUEST["id"]))
        $id = $_REQUEST["id"];
    else
        $id = "inicio";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ABC ERP">
    <meta name="author" content="arkabytes">
    <link rel="shortcut icon" href="logo.ico">

    <title>ABC ERP | arkabytes</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <li <?php if ($id == "inicio") echo "class='active'"; ?>><a href="?id=inicio">Inicio</a></li>
            <li><a href="#">Demo</a></li>
            <li <?php if ($id == "caracteristicas") echo "class='active'"; ?>><a href="?id=caracteristicas">Características</a></li>
            <li <?php if ($id == "galeria") echo "class='active'"; ?>><a href="?id=galeria">Galería</a></li>
            <li><a href="https://github.com/arkabytes/abc/wiki">Soporte</a></li>
            <li <?php if ($id == "contacto") echo "class='active'"; ?>><a href="?id=contacto">Contacto</a></li>
        </ul>
        <h3 class="text-muted"><img width="50" src="logo2.png"/> ABC</h3>
    </div>
    <?php
        include($id . ".php");
    ?>
    <div class="footer">
        <a href="http://github.com/arkabytes/abc" title="el proyecto en GitHub"><img src="github32.png"/></a>
        <span style="float:right">&copy; arkabytes 2017</span>
    </div>

</div> <!-- /container -->
</body>
</html>
    