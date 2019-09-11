@extends('plantilla')

@section('content')
<!-- CAROUSEL DE IMAGENES -->
<div class="wrapper">


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('img/destacados4.gif')}}" class="d-block w-300" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/destacados3.jpg')}}" class="d-block w-200" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/destacados1.jpg')}}" class="d-block w-200" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
<!-- DESCRIPCION -->
<div>
    <h1 id="quienesSomos">Quienes somos</h1>
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