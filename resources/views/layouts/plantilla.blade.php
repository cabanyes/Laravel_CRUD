<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Documento sin titulo</title>



    <style>
        .imagenCabecera {

            float: right;
            padding-right: 150px;
            width: 150px;
        }

        .cabecera {
            text-align: center;
            font-size: x-large;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-bottom: 100px;
            color: #FF0;

        }

        .contenido form, table {

            width: 500px;
            margin: 0 auto;
        }

        .pie {
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 0.7em;
            margin-bottom: 15px;
        }
    </style>

</head>

<body>

    <div class="cabecera">

        @yield("cabecera")
        <img src="/images/niño.jpg" class="imagenCabecera" />
    </div>


    <div class="contenido">

        @yield("contenido")
    </div>

    <div class="pie">
        @yield("pie")

        El rey que amaba a su pueblo. Todos los derechos reservados

    </div>

</body>

</html>