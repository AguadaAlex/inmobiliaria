@extends('plantilla')

@section('content')



<div id="SLIDE_BG" >
  <!-- CONTENEDOR DE FILTRO FORMULARIO -->
  <div class="bordesRedondo">
    <h1 class="text-center">¿Que desea hacer?</h1>
    <div class="text-center ">
  
      <!--  FORMULARIO -->
      <form action="/propiedades" id="formulario" method="post">
        {{csrf_field() }}
          <input id="alq"type="button" value="Alquilar " name="Alquilar" onclick="activarAlq()" >
          <input id="comp"  type="button" value="Comprar" name ="Comprar" onclick="activarComp()"  >
          <!-- <button class="button1">Comprar</button> -->
          <div class="form-inline justify-content-center py-3">
            <div class="">
              
                  <select class="mt-3" id="" name="tipo_id">
                        <option value="none" disabled selected hidden>Selecciona una Propiedad</option>
                        @foreach($tipos as $tipo)
                        <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="mx-2">
    
              <select class="mt-3 "  name="localidad_id">
                <option value="none" disabled selected hidden>Selecciona una localidad</option>
                @foreach($localidades as $localidad)
                    <option value="{{$localidad->id}}">{{$localidad->nombre}}</option>
                    @endforeach
              </select>
            </div>
          </div>
          <div class="mx-3">
            <button class="btn btn-danger">
              enviar
            </button>
          </div>
        </form>
      </div>
  </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('js/controlarFocus.js')}}"></script>
@endsection