<?php
require_once 'cdn.html';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php</title>
    <link rel="icon" href="img/pngegg.png" />
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <style>
        #naz {
            background-color: #e6ebdd;
        }

        #fondo {
            background-color: #8993c1;
        }

        #loginform {
            background-color: #FFFFFF;
            border: 1px solid #ccc;
            box-shadow: 0px 2px .5px 1px #ccc;
        }
    </style>
    <!-- Navbar -->
    <nav id="naz" class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="img/php.png">
                <img src="img/pngegg.png" height="60" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
            </a>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- BIenevenido -->
            <div class="  col-8">
                <h2 style="font-family: 'Open Sans', sans-serif;font-size: 40px;">Bienvenido</h2>
            </div>
        </div>
    </nav><!-- Collapsible wrapper -->
</head>

<body id="fondo">
    <br>

    <div class="container">
        <div id="titulo" class="offset-2 col-8">
            <h1 style="font-family: 'Open Sans', sans-serif;font-size: 40px;">¿Que te gustaria aprender o hacer?</h1>
        </div>
        <br>
        <div class="row">

            <div id="container" class="  col-4">
                <br>
                <a href="infophp.php"> <img src="img/cphp.png" alt="" height="250px" width="250px" style=" background-repeat: no-repeat;
                    background-position: 50%;
                    border-radius: 50%;
                    box-shadow: 4px 5px 12px black;
                    background-size: 100% auto;"></a>
                <h2 style="font-family: 'Roboto', sans-serif;  "> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Todo sobre<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP</h2>
            </div>
            <div id="container" class=" col-4">
                <br>

                <a href="IDE.php"> <img src="img/IDE.png" alt="" height="250px" width="250px" style=" background-repeat: no-repeat;
                    background-position: 50%;
                    border-radius: 50%;
                    box-shadow: 4px 8px 12px black;
                    background-size: 100% auto;"></a>
                <h2 style="font-family: 'Roboto', sans-serif; "> <br> &nbsp;&nbsp; &nbsp;Mejores IDE's<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Para PHP</h2>
            </div>
            <div id="container" class="col-4">
                <br>
                <a href="test.html"> <img src="img/qz.jpg" alt="" height="250px" width="250px" style=" background-repeat: no-repeat;
                    background-position: 50%;
                    border-radius: 50%;
                    box-shadow: 4px 8px 12px black;
                    background-size: 100% auto;"></a>
                <h2 style="font-family: 'Roboto', sans-serif;"> <br> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TEST sobre<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;PHP</h2>
            </div>
        </div><!-- ROW -->
    </div><!-- Containerr -->
    <footer>
        <hr>
        <center>
            <p>Copyright © Alberto De La Rosa Tovar</p>
        </center>
    </footer>
</body>

</html>