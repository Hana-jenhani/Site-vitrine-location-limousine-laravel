@extends('layouts.main')
@section('title','Limousine Bruxelles - Voiture avec chauffeur privé à Bruxelles')
@section('content')

	<div id="inner-header">
	<img src="{{asset('images/banner/banner2.png')}}" alt ="" />
	</div>

	
	<section id="inner-title">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="inner-title-content">
    <h2>Services</h2>
	<ul class="breadcrumb">
	<li> <a href="{{route('index')}}">Acceuil </a></li>
	<li><a href="{{route('service')}}"> Services</a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</section>
	

	<div class="gap-40"></div>

	
	<section id="service-page">
	<div class="container">
	<div class="row">
	<div class="col-md-6 wow slideInLeft">
	<img class="img-responsive" src="{{asset('images/service.jpg')}}" alt="" /><br>
	<img class="img-responsive" src="{{asset('images/service1.jpg')}}" alt="" />
	</div>
				
	<div class="col-md-6 wow slideInRight">
	<h3 class="page-content-title"></h3>
	<p>Notre position au centre de Bruxelles, la capitale de l'Europe est un atout pour l'organisation de tous vos différents événements et voyages. Nous offrons un service de chauffeur VIP en Belgique & dans le Benelux avec différents chauffeurs en fonction des exigences de chaque client.<br><br>

Transport de groupe, événements corporatifs, sommets des visites officielles et des délégations, nous nous occupons de votre transport et de vos événements, dans le monde entier.<br><br>

Limousine Bruxelles propose un service sur mesure de location de voiture avec chauffeur pour tous vos besoins. Vous pouvez facilement réserver un véhicule de luxe avec chauffeur pour quelques heures à plusieurs jours pour vos voyages privés ou professionnels.<br><br>

Pour les grands événements, un coordinateur de Limousine Bruxelles sera sur place pour coordonner le déroulement de l'événement en temps réel et de surveiller les services. Aussi, il est la personne de contact pour le représentant du client sur place afin de garantir une communication efficace.</p>
<p><strong>Voyages d'affaires: </strong> Groupes de séminaires, congrès, Excursions, conventions, incentives, Visite d'affaires.</p>
<p><strong>Transferts et navettes :  </strong> Nous assurons le transport entre les hôtels, centre de congrès, d'affaires et tous les départs et les transferts vers tous les aéroports et les gares.</p>
	<div class="gap-20"></div>
	<p>Nos déplacements en partance de la Belgique et/ou en provenance de l’étranger se font à partir :<p>
	<ul class="circle">
	<li>du domicile vers aéroport, hôtel, gare,
	</li>
	<li>du domicile vers lieu de travail,
	</li>
	<li>du lieu de travail vers autre lieu de travail, </li>
	<li>du lieu de travail vers domicile,.</li>
	<li>des excursions et visites,</li>
	<li>des lieux d’événements et cérémonies,</li>
	<p>Nous mettons à votre disposition des véhicules selon vos demandes et mettons tout en œuvre pour nous charger du transfert.</p>
	</ul>
	</div>
	</div>


	<div class="row">
	<div class="col-md-12">
	<div class="text-center">
	<h2 class="title"><span>Nos Services</span></h2>
	</div>
	</div>
	<div class="col-md-4 col-sm-4 wow flipInX" data-delay="100">
	<div class="service-box">
	<a href="#"><span class="service-icon pull-left"><i class="fa fa-plane"></i></span></a>
	<div class="service-box-content">
	<h3>A Bruxelles et dans toute l’Europe, Limousine Bruxelles se charge de vos transferts</h3>
						    
	</div>
	</div>
	</div>
	<div class="col-md-4 col-sm-4 wow flipInY" data-delay="100">
	<div class="service-box">
	<a href="#"><span class="service-icon pull-left"><img src="images/iconn.png"></span></a>
	<div class="service-box-content">
	<h3>En partance de Bruxelles ou en provenance de l’étranger, Limousine Bruxelles vous accompage à votre destination(aéroports, gares,hôtels, …)</h3>
						    
	</div>
	</div>
	</div>

	<div class="col-md-4 col-sm-4 wow flipInX" data-delay="100">
	<div class="service-box">
	<a href="#"><span class="service-icon pull-left"><img src="images/icon3.png"></span></a>
	<div class="service-box-content">
	<h3>Nous mettons à votre disposition des véhicules selon vos demandes</h3>				    
	</div>
	</div>
	</div>
    </div>

    <div class="gap-20"></div>

	<div class="row">
	<div class="col-md-4 col-sm-4 wow flipInY" data-delay="100">
	<div class="service-box">
	<a href="#"><span class="service-icon pull-left"><i class="fa fa-road"></i></span></a>
	<div class="service-box-content">
	<h3>Excursions et visites touristiques avec ou sans guide</h3>				
	</div>
	</div>
	</div>
	<div class="col-md-4 col-sm-4 wow flipInX" data-delay="100">
	<div class="service-box">
	<a href="#"><span class="service-icon pull-left"><i class="fa fa-magic"></i></span></a>
	<div class="service-box-content">
	<h3>Oganisation de vos évènements ou cérémonies</h3>					    
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>
	@endsection