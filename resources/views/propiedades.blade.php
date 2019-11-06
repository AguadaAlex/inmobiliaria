@extends('plantilla')

@section('content')

<h1>Propiedades</h1>
<div class="container">

    <div class="card-deck">
    @foreach ($propiedades as $item) 
    <div class="card">
    <div class="contenedor-imagen">
        
        <img src="/img/{{$item->foto}}" class="card-img-top img-fluid imagen-propiedad" width="100"/>
    </div>
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    
    @endforeach 
      
    </div>
</div>
@endsection