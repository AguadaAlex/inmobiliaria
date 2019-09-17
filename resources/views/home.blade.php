@extends('plantilla')

@section('content')



<div id="SLIDE_BG">
  <!-- CONTENEDOR DE FILTRO FORMULARIO -->
  <div class="bordesRedondo">
    <h1 class="text-center">¿Que desea hacer?</h1>
    <div class="text-center">
  
      <!--  FORMULARIO -->
      <form class="">
          <input class="button2 mb-3 mr-2"type="button" value="Alquilar">
          <input class="button1" type="button" value="Comprar">
          <!-- <button class="button1">Comprar</button> -->
          <div class="form-inline justify-content-center py-3">
            <div class="">
              
                  <select class="mt-3" id="country" name="country">
                        <option value="none" disabled selected hidden>Selecciona una Propiedad</option>
                        @foreach($tipos as $tipo)
                        <option value="au">{{$tipo->nombre}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="mx-2">
    
              <select class="mt-3 " id="" name="country">
                    <option value="none" disabled selected hidden>Selecciona una localidad</option>
                    @foreach($localidades as $localidad)
                    <option value="au">{{$localidad->nombre}}</option>
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
<!-- CAROUSEL DE IMAGENES -->
<div class="wrapper">

</div> 
<!-- DESCRIPCION -->
<div>
    <h2 id="quienesSomos">Quienes somos</h1>
<p>
						 La importancia que otorgamos a nuestros emprendimientos avalan la idea
						de ser una empresa l&iacute;der en el sector inmobiliario de la ciudad de La Plata.
					</p>
					<p>
						 Somos una organizaci&oacute;n de vanguardia que se preocupa por la continua adaptaci&oacute;n
						de sus servicios, desarrollando y evaluando proyectos de inversi&oacute;n inmobiliarios,
						con el objetivo de ofrecer la m&aacute;s amplia gama de posibilidades a nuestros clientes.         
					</p>	 
				
					<p>	 
						 Madelon Inmobiliaria incorpora en forma permanente nuevos proyectos inmobiliarios.
					</p>
					<p>	
						Opci&oacute;n de inversi&oacute;n al inicio de obra, en construcci&oacute;n o con las unidades
						listas para habitar.
					</p>
					<p>
						 Negocio de pozo o primera vivienda.
					</p>	 
					<p>
						 Edificios a estrenar en las mejores zonas y m&aacute;s buscadas de la ciudad.						
					</p>
</div>
@endsection