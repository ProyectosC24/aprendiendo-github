<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Registro</title>
        <link rel="icon"  type="image/x-icon" href="{!! asset('flecha_cadena.png') !!}">
        <!-- Fonts -->

        <!-- Styles -->
        <style>
                body {
                background-image:url(assets/Fondo-Catálogo-WEB-2024.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed; 
                background-size: 100% 100%;                
                }
               
                /*div {
                border: 1px solid black;
                margin-top: 250px;
                margin-bottom: 100px;
                margin-right: 170px;
                margin-left: 100px;
                height: auto;
                background-color: lightblue;
                }*/
                .center {
                margin-top: 50px;
                padding: 100px 0;
                text-align: center;
                font-family: Arial; 
                }
                .btn {
                border: none; 
                color: black; 
                padding: 14px 28px; 
                cursor: pointer; 
                border-radius: 5px; 
                text-decoration: none;
                font-size:5vw;
                }
                .success {
                font-family: italic; 
                background-color: white; 
                border: 2px solid #ff671f;
                } 
                .success:hover {
                font-family: italic; 
                background-color: #ff671f; 
                color: white;
                }
               
        </style>
    </head>
    <body>
        <div class="center">
            <h1 style="font-size:8vw;">¡EXPO VENTA ANIVERSARIO!</h1>
                <br>  
                <a class="btn success" href="{{route('registros.index')}}">Registrate</a>
        </div>
    </body>
    <script>

    </script>
</html>