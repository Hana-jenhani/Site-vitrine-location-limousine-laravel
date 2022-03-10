@extends('layouts.main')
@section('title','Limousine Bruxelles - Voiture avec chauffeur privé à Bruxelles')
@section('content')



	<div id="inner-header">
	<img src="{{asset('images/banner/banner4.jpg')}}" alt ="" />
	</div>

	
	<section id="inner-title">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="inner-title-content">
	<h2>Visites</h2>
	<ul class="breadcrumb">
	<li> <a href="{{route('index')}}">Acceuil </a></li>
	<li><a href="{{route('visite')}}">Nos Visites</a></li>		           
	</ul>
	</div>
	</div>
	</div>
	</div>
	</section>
	

	<div class="gap-40"></div>

	<section id="faq-page">
	<div class="container">
	<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<h3 class="widget-title">
	Faites-vous plaisir avec un véhicule d’exception.
	</h3>
	<div class="panel-group" id="accordion">
	<div class="panel panel-default">
	<div class="panel-heading">
	<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> Nos visites </a> </h4>
	</div>
	<div id="collapseOne" class="panel-collapse collapse in">
	<div class="panel-body">
	<p> Découvrez la Belgique avec notre service de tour de ville ! Nous sommes fiers de vous fournir un service personnalisé pour vous faire découvrir la Belgique et ces attraits touristiques </p>
	</div>
	</div>
	</div>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h4 class="panel-title"> <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">Circuit Bruxelles </a> </h4>
	</div>
	<div id="collapseTwo" class="panel-collapse collapse">
	<div class="panel-body">
	<p>Limousine Bruxelles vous propose une journée ou une demi-journée à Bruxelles pour découvrir ses monuments historiques et ses institutions européennes</p>
	</div>
	</div>
    </div>              
	</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<div class="row">
	<img src="{{asset('images/aa.jpg')}}" alt="Limousine Bruxelles - Nos visites - Vtc Belgique" title="Limousine Bruxelles - Nos visites">
	</div>
	</div>
	</div>
    </div>
	</section>




@endsection