@extends('layouts.main')
@section('title','Limousine Bruxelles - Voiture avec chauffeur privé à Bruxelles')
@section('content')

<div id="inner-header">
<img src="{{asset('images/banner/banner1.jpg')}}" alt ="" />
</div>

<section id="inner-title">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="inner-title-content">
<h2>Chauffeur privé</h2>
<ul class="breadcrumb">
<li> <a href="{{route('index')}}">Acceuil </a></li>
<li><a href="{{route('chauffeur')}}"> Chauffeur privé</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div class="gap-40"></div>

	
<section id="about-page">
<div class="container">
<div class="row">

<div class="col-md-6 wow slideInRight"><br><br>
<h3 class="page-content-title">Service chauffeur privé pour vos déplacements à Bruxelles !</h3>
<p>Limousine Bruxelles vous propose des véhicules de luxe avec chauffeurs de prestige expérimentés et bien formés, pour tous vos besoins privés et professionnels.</p>

<p>Vous avez besoin de visiter la ville ou d’un déplacement professionnel, nos chauffeurs sont à votre disposition. Ils vous accompagnent lors de tous vos événements spécifiques : mariage, événements sportifs et culturels, séminaires d’entreprise, etc.</p>

<p>Le service de chauffeur privé Limousine Bruxelles assure tous vos déplacements en Belgique et dans toute l’Europe.</p>
</div>

<div class="col-md-6 wow slideInRight">
<img class="img-responsive" src="{{asset('images/about-us1.jpg')}}" alt="" />
</div>
</div>

<div class="gap-40"></div>
</div>
</section>

<section id="features">
<div class="container">
<div class="row">
<div class="col-sm-6 wow fadeInLeft">
<div class="feature-image">
<img class="img-responsive" src="{{asset('images/driver.jpg')}}" alt="feature img" title="" />
</div>
</div>

<div class="col-sm-6 wow fadeInRight">
<div class="feature-wrapper">
<div class="feature-content-wrapper">
<h2>Les avantages d'un chauffeur privé</h2>
<p>Nos chauffeurs sont bien formés sur les points essentiels pour une conduite professionnelle et souple:</p>

<div class="feature-box clearfix">
<div class="feature-icon pull-left">
<i class="fa fa-thumbs-o-up"></i>
</div>
<div class="feature-box-content">
<h3>Confort</h3>
<p>Chauffeur professionnel polyglotte assurant un trajet confortable.</p>
</div>
</div>

<div class="feature-box clearfix">
<div class="feature-icon pull-left">
<i class="fa fa-clock-o"></i>
</div>
<div class="feature-box-content">
<h3>Ponctualité</h3>
<p>Haute disponibilité aux créneaux à forte demande.</p>
</div>
</div>

<div class="feature-box clearfix">
<div class="feature-icon pull-left">
<i class="fa fa-lock"></i>			
</div>			
<div class="feature-box-content">			
<h3>Sécurité</h3>			
<p>Chauffeur expérimenté avec une conduite sécurisée.</p>			
</div>	 		
</div>	

<div class="feature-box clearfix">			
<div class="feature-icon pull-left">		
<i class="fa fa-smile-o"></i>			
</div>			
<div class="feature-box-content">			
<h3>Courtoisie</h3>			
<p>Accueil soigné et personnalisé avec une conduite agréable.</p>			
</div>			
</div>			
</div>   		
</div>   		
</div>    		
</div>
</div>
</section>


<section id="about-page">
<div class="container">
<div class="row">
<div class="col-md-6 wow slideInRight animated">
<br>
<br>
<h3 class="page-content-title">Un chauffeur privé à votre disposition partout à Bruxelles !</h3>

<div class="gap-20"></div>

<p>Dès votre arrivée à Bruxelles, notre chauffeur privé vous accueillera à l’aéroport ou à la gare et vous conduira à votre destination.</p>

<p>De l’aéroport à l’hôtel, notre chauffeur privé vous guidera et vous ramènera à votre disposition en toute sécurité. Il vous accompagnera lors de vos séminaires, réunions et visites touristiques.</p>

<p>Notre équipe sera à votre disposition tout au long de votre séjour.</p>
</div>

<div class="portfolio-slider-wrapper">
<div class="col-md-6 wow slideInRight animated">
<img src="{{asset('images/airport.jpg')}}" alt="Service limousine, Chauffeur privé bruxelles, Location de voiture avec chauffeur" title="Limousine Bruxelles - Location voiture de luxe bruxelles">
</div>
</div>
</div>
<div class="gap-40"></div>
</div>
</section>


 @endsection