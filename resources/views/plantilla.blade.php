<!DOCTYPE html>
<html lang="en">
<head>
    @include('modulos/head')
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
    @include('modulos/script')
</body>
</html>