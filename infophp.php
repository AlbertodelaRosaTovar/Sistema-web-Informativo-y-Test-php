<?php
require_once "cdn.html";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1" name="viewport">

    <meta content="open source x/html and css templates" lang="en" name="Description">

    <meta content="mlp design" name="author">

    <meta content="index, follow" name="robots">
    </meta>
    <title>
        PHP
    </title>
    <link href="img/pngegg.png" rel="icon" />
    <link href="stilos.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    </link>
    <style>
        #naz {
            background-color: #e6ebdd
        }

        #fondo {
            background-color: #8993c1;
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
                <h2 style="font-family: 'Open Sans', sans-serif;font-size: 40px;">Todo sobre PHP</h2>
            </div>
        </div>
    </nav><!-- Collapsible wrapper -->
</head>

<body id="fondo">
    <!--start wrapper-->
    <div id="wrapper">
        <!--start body-->
        <div id="body">
            <!--start header-->
            <!--start containter-->
            <div id="container">
                <!--start content-->
                <div id="content">
                    <!--post item-->
                    <div class="container">
                        <div class="row">
                            <div class="col-0">

                            </div>
                            <div class="col-12 offset-1">
                                <div class="item">
                                    <h1 style=" box-shadow: 0px 1px 12px ghostwhite;  ">
                                        ¿Qué es PHP?
                                    </h1>
                                    <img style="border-radius: 50%; box-shadow: 2px 2px 3px black;" src="img/q.jpg" width="245" height="200" align="left" alt="">
                                    <p>
                                        PHP es el lenguaje de programación para el desarrollo del backend más popular. También uno de los lenguajes más usados, cómo se refleja en todos los índices globales.
                                    </p>
                                    <p>
                                        Con PHP puedes desarrollar sitios y aplicaciones de todo tipo. PHP es el motor además de los CMS más populares, como WordPress, Joomla, Drupal o Magento, entre muchos otros. En PHP también encontramos frameworks potentes y muy usados como Laravel o Symfony.
                                    </p>
                                    <p>Una de las ventajas de PHP es su facilidad de uso. Cualquier persona con muy pocos conocimientos puede comenzar a usar PHP para el desarrollo de páginas web. Sin embargo, esa misma ventaja también puede ser un inconveniente, pues si no se dispone de la debida formación es fácil caer en malas prácticas. </p>
                                    <br>
                                    <br>
                                    <h1 style=" box-shadow: 0px 1px 12px beige;">
                                        Lenguaje de Backend más popular
                                    </h1>
                                    <p>PHP es el lenguaje más popular para el desarrollo backend, es decir, es la tecnología más usada en lo que respecta a lenguajes del lado del servidor.</p>
                                    <p>El motivo de este éxito no es solo la facilidad con la que PHP permite desarrollar páginas, sino también formar parte del stack de tecnologías más habitual en Internet: LAMP (Linux, Apache, MySQL y PHP).</p>

                                    <h1 style=" box-shadow: 0px 1px 12px beige;">
                                        Breve Historia de PHP
                                    </h1>
                                    <p>PHP es un lenguaje de programación que ya acumula una dilatada historia, en relación a la breve existencia de Internet, puesto que ha pasado por distintos estados, siempre creciendo en funcionalidades, rendimiento y herramientas disponibles en el lenguaje.</p>
                                    <p>La madurez de PHP podemos decir que se alcanzó con PHP 5. Esta versión tenía una
                                        orientación a objetos robusta, necesaria para el desarrollo de aplicaciones grandes y
                                        mantenibles. A lo largo de las versiones de PHP 5 fueron incorporándose más y más
                                        características como los namespaces o traits que posicionaron a PHP como un lenguaje
                                        orientado a objetos a la altura de los más avanzados. Gracias también a estas mejoras
                                        pudo ver la luz una de las herramientas más populares en el ecosistema de PHP, como
                                        es su gestor de dependencias Composer.</p>


                                    <h1 style=" box-shadow: 0px 1px 12px beige;">Plataformas de desarrollo de PHP</h1>
                                    <img style="border-radius: 10%; box-shadow: 2px 2px 3px black;" src="img/edi.jpg" width="245" height="200" align="right" alt="">
                                    <p>Para desarrollar sitios en PHP necesitamos instalar en nuestro ordenador todos los programas necesarios para trabajar: un servidor web, el propio PHP y generalmente una base de datos como MySQL o cualquier otra.</p>

                                    <p>Contar con todos los programas necesarios para desarrollar en PHP es sencillo, pero existen innumerables posibilidades, dependiendo de nuestro ordenador y de las necesidades del software que estemos creando. </p>

                                    <h1 style=" box-shadow: 0px 1px 12px beige;">Plataformas para despliegue de sitios y aplicaciones PHP</h1>
                                    <p>En lo que respecta al despliegue de aplicaciones PHP, es decir, los sistemas donde van a estar en producción, disponibles para los usuarios visitantes, la plataforma más habitual es Linux. Los motivos son diversos, pero podríamos destacar la estabilidad del sistema, pero además que al ser software libre no es necesario pagar por una licencia.</p>
                                    <p>Lo que puede cambiar a gustos de los administradores es el servidor web donde se van a publicar los sitios. Los servidores más importantes para PHP son Apache y Nginx. Apache es la opción más habitual y la que nos ofrece más posibilidades de configuración. Nginx por su parte es un servidor más ligero, que se usa muy comúnmente cuando se desea optimizar PHP y conseguir sitios un poco más veloces.</p>
                                    <h1 style=" box-shadow: 0px 1px 12px beige;">API de funciones de PHP</h1>
                                    <p>Uno de los puntos fuertes de PHP es su API de funciones. Dentro del núcleo de PHP
                                        encuentras funciones para hacer todo tipo de operaciones y trabajar con una cantidad
                                        enorme de recursos.</p>
                                    <p>En PHP encuentras funciones para trabajar con cualquiera de las bases de datos
                                        populares, el sistema de archivos, envío de email, conexiones con otros servidores por
                                        medio de FTP o HTTP, etc. También tiene funciones más específicas por ejemplo para el
                                        tratamiento de imágenes, creación de PDF, tratamiento de XML, abstracción de base de
                                        datos y mucho más.</p>
                                    <img style="border-radius: 10%; box-shadow: 2px 2px 3px black;" src="img/api.png" width="600" height="150" align="center" alt="">
                                    <br>
                                    <br>
                                    <br>
                                    <h1 style=" box-shadow: 0px 1px 12px beige;">¿Es PHP un lenguaje inseguro?</h1>
                                    <p>También PHP es capaz de usarse de muchas maneras y algunas cuestiones como el montaje de sentencias SQL pueden provocar fácilmente inyecciones de SQL, así como el mostrar ciertas variables en la página podrían causar ataques XSS. Muchas aplicaciones PHP adolecen de estos problemas de seguridad, pero lo cierto es que PHP sí que ofrece todos los mecanismos para conseguir protegerse ante estos problemas.</p>
                                    <p>Por ejemplo podemos sanitizar todos los textos que se vuelquen en una página, sobre todo aquellos que provengan de las entradas del usuario y montar las sentencias SQL bindeando parámetros por medio de las funciones de acceso a los motores de base de datos o PDO.</p>
                                    <p>Por tanto, tener un agujero de seguridad por inyección de SQL o la posibilidad de crear ataques XSS no es un problema derivado del lenguaje sino del desarrollador. El problema de seguridad no está realmente en PHP, sino en cómo se usa, y todos los lenguajes se pueden usar incorrectamente, no solo PHP.</p>
                                    <h1 style=" box-shadow: 0px 1px 12px beige;">Bases de datos con PHP</h1>
                                    <img style="border-radius: 50%; box-shadow: 2px 2px 3px black;" src="img/db.png" width="245" height="200" align="left" alt="">
                                    <p>PHP soporta una enorme cantidad de bases de datos distintas. Por supuesto, todas las populares están soportadas, como MySQL, PostgreSQL, MariaDB, MS SQL, Oracle y muchas más.</p>
                                    <p>Existen funciones nativas para trabajar con cualquiera de las bases de datos más populares. Pero además podemos usar PDO que es una capa de abstracción del acceso a los datos, que permite usar las mismas funciones de PHP para el acceso a diferentes bases de datos.</p>
                                    <br><br> <br><br> <br><br>


                                    <h1 style=" box-shadow: 0px 1px 12px beige;">Sesiones y PHP</h1>
                                    <p>Las sesiones ofrecen un pegamento que permite unir un conjunto de páginas web para
                                        que se comporten como una aplicación única. No es el único soporte que podemos usar
                                        para poder crear aplicaciones web y almacenar información, pero sí es el más sencillo de
                                        implementar, ya que el propio lenguaje PHP ofrece de manera nativa.</p>
                                    <p>Existe una variable superglobal llamada $_SESSION, que consiste en un array asociativo
                                        que sirve para almacenar datos de sesión y acceder a las variables almacenadas. Ese
                                        array mantiene todos los datos de la sesión, pero antes es necesario inicializar la sesión
                                        con la función:</p>
                                    <img src="img/sesi.png" alt="" style="border-radius: 10%">
                                    <br>
                                    <br>

                                    <h1 style=" box-shadow: 0px 1px 12px beige;">Upload php</h1>
                                    <p>Upload de archivos PHP para subir archivos al servidor web, de modo que los
                                        clientes puedan acceder a los archivos cargados por ellos mismos o por otros
                                        usuarios.</p>
                                    <p>El upload de archivos o la carga de archivos es una de las tareas que podemos hacer en
                                        la programación backend. PHP dispone de un mecanismo sencillo para hacer el upload
                                        de los ficheros, que técnicamente no reviste ninguna dificultad, aunque en esta área lo
                                        más importante es que la programación sea suficientemente segura.</p>
                                    <h1 style=" box-shadow: 0px 1px 12px beige;">Envío de email con PHP</h1>
                                    <p>Si queremos enviar emails desde el servidor, como respuesta a las acciones del
                                        usuario, debemos usar programación Backend. Con PHP es muy sencillo.</p>
                                    <p>En PHP existe una función llamada mail() que se encarga de hacer el trabajo del envío del
                                        email. Para ello es necesario que el servidor tenga configurado una pasarela de envío con
                                        SMTP.</p>
                                    <p>La función mail permite enviar correos de manera sencilla, sin embargo, si necesitamos
                                        mayores funcionalidades, existen librerías más potentes como PHP Mailer, o podemos
                                        usar servicios de terceros.</p>
                                    <h1 style=" box-shadow: 0px 1px 12px beige;">Arrays en PHP</h1>
                                    <p>Los arrays, arreglos, matrices o vectores son estructuras de datos disponibles en
                                        PHP y la mayoría de los lenguajes de programación. Básicamente se trata de un
                                        contenedor que tiene diversas casillas para añadir datos en cada una de ellas.</p>
                                    <p>PHP dispone de dos tipos de arrays: los arrays comunes y los arrays asociativos.</p>
                                    <p>Los arrays comunes son los que tienen índices numéricos:</p>
                                    <img src="img/a.png" alt="" style="border-radius: 10%">
                                    <br>
                                    <br>
                                    <p>Los arrays asociativos, que en muchos lenguajes se llaman colecciones, son los que tienen índices numéricos.</p>
                                    <img src="img/a1.png" style="border-radius: 10%">

                                </div>

                            </div>
                            <br>
                            <br>
                            <br>
                            <div class=" offset-7 col-8">
                                <a href="index.php"> <button class="btn btn-secondary">Volver</button></a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end of content-->
            </div>
            <!--end of container-->
        </div>
        <!--end of body-->
        <!--fin -->
        <br>
        <br>
        <footer class=" text-center text-white">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.7);">
                © 2022 Copyright:
                <a>
                    Alberto De La Rosa
                </a>
            </div>
            <!-- Copyright -->
        </footer>
</body>

</html>