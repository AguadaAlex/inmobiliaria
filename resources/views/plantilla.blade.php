<!DOCTYPE html>
<html lang="en">
<head>
    @include('modulos/head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container">
            @include('modulos/cabecera')
        </div>
    </section>
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>
    <section>
        <div class="container">
            @include('modulos/pie')
        </div>

    </section>    
</body>
</html>