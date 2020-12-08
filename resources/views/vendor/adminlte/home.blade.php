
@extends('adminlte::layouts.app')

@section('content')
<!-- <img src="img/BeretaTeam7.jpg" content="width=device-width, initial-scale=1">-->
<div id="animacion" >
    <img class="novisible elevation-5" src="img/ezgif.com-optimize.gif"  content="width=device-width, initial-scale=1" width="1000" height="600">
		<img class="visible elevation-5" src="img/young-man-in-sportswear-an-exercise-class-in-gym (1).jpg" content="width=device-width, initial-scale=1" width="1000" height="600" >
             
	</div>
<style>
    
    #animacion{padding:0;
	margin:0 auto;
	height: 364px;
	width: 960px;}
 
#animacion img{ position:absolute;
	top: 0;
	-moz-transition: all 1s ease-in-out;
	-webkit-transition: all 1s ease-in-out;
	-o-transition: all 1s ease-in-out;
	transition: all 1s ease-in-out;}
 
#animacion img.novisible{
	opacity:0;
	filter:alpha(opacity=0);}
 
#animacion:hover img.novisible{
	opacity:1;
	filter:alpha(opacity=100);}
 
#animacion:hover img.visible {
	opacity:0;
	filter:alpha(opacity=0);}
 
#animacion img.visible:hover {
	opacity:0;
	filter:alpha(opacity=0);}
.imagen:hover{
border-radius:50%;
-webkit-border-radius:50%;
box-shadow: 0px 0px 15px 15px #ec731e;
-webkit-box-shadow: 0px 0px 15px 15px #ec731e;
transform: rotate(360deg);
-webkit-transform: rotate(360deg);
}
    </style>
<!--<section class="content">
      <div class="container-fluid">
         Small boxes (Stat box) 
        <div class="row">
          <a class="col-6" href="#">
             small box 
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fas fa-plus-square"></i></h3>
                <p>Ingresar nueva Infraccion</p>
              </div>
              <div class="icon">
                <i class="fas fa-car-side"></i>
              </div>
                <div class="small-box-footer"><i class="fas fa-circle"></i></div>
            </div>
          </a>
           ./col 
          <a class="col-6" href="#">
             small box 
            <div class="small-box bg-success">
              <div class="inner">
                <h3><i class="fas fa-clipboard-list"></i></h3>
                
                <p>Infraciones acumuladas del día</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <div class="small-box-footer"><i class="fas fa-circle"></i></div>
            </div>
          </a>
        </div>
        <div class="row">
           ./col 
          <a class="col-6" href="#">
             small box 
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><i class="fas fa-balance-scale"></i></h3>
                <p>Fundamentos legales</p>
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <div class="small-box-footer"><i class="fas fa-circle"></i></div>
            </div>
          </a>
           ./col 
          <a class="col-6" href="#">
             small box 
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3><i class="fas fa-print"></i></h3>

                <p>Reimprimir infracción</p>
              </div>
              <div class="icon">
               <i class="fas fa-print"></i>
              </div>
              <div class="small-box-footer"><i class="fas fa-circle"></i></div>
            </div>
          </a>
           ./col 
        </div>
        
        <div class="row d-flex justify-content-center">
            
            <a class="col-6 text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <h1 style="color:#999999; text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);"><i class="fas fa-power-off"></i></h1>
                    
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
            </form>
        </div>
         /.row 
         Main row 
     
      </div> /.container-fluid 
    </section>-->

   
@endsection
