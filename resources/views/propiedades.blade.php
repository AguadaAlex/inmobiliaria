@extends('plantilla')

@section('content')

<h1>Propiedades</h1>
<div class="container">

    <div class="card-deck">
    @foreach ($propiedades as $item) 
    
    <div class="card">
      <div class="contenedor-imagen mx-1">
        
        <img src="/img/{{$item->foto}}" class="card-img-top img-fluid imagen-propiedad" width="100"/>
          <a href="#" class="enlace">
            <div class="middle">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
              ver Propiedad
            </button>
              <!-- <div class="text">Ver Propiedad</div> -->
            </a>
            </div>
      </div>
        
        <div class="card-body">
          <h5 class="card-title">{{$item->calle}}</h5>
          <p class="card-text">{{$item->observaciones}}</p>
          <ul id="menu">
            <li>
              <i class="fas fa-shower"></i>{{$item->cantambientes}}
            </li>
            <li>
            <i class="fas fa-grip-lines-vertical"></i>
               

            </li>
            <li>
            <i class="fas fa-box"></i>

            </li>
           
          </ul>  

        
          <hr>
          <p class="card-text">
            <h2>
              <!-- <i class="fas fa-bold"></i> -->
              
              {{$item->precio}}$
          </h2>
        </p>
        </div>
      </div>
    
    @endforeach 
      
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
@endsection