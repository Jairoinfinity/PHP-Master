<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master - @yield("titulo")</title>
</head>
<body>
    @section("header")
            CABECERA DE LA WEB (Master)
    @show

    <div class="container">
        @yield("content")
    </div>

    @section("footer")
            PIE DE LA WEB (Master)
    @show
</body>
</html>