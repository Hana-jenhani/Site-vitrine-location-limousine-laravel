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
<h2>À propos</h2>
<ul class="breadcrumb">
<li> <a href="{{route('index')}}">Acceuil </a></li>
<li><a href="{{route('a-propos')}}"> À propos</a></li>
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
<div class="col-md-6 wow slideInLeft">
<div class="portfolio-slider-wrapper">
<ul id="portfolio-slider">
<li><img src="{{asset('images/about-us2.jpg')}}" alt=""/></li>
<li><img src="{{asset('images/about-us3.jpg')}}" alt=""/></li>
<li><img src="{{asset('images/about-us4.jpg')}}" alt=""/></li>
<li><img src="{{asset('images/about-us5.jpg')}}" alt=""/></li>
<li><img src="{{asset('images/about-us6.jpg')}}" alt=""></li>
<li><img src="{{asset('images/about-us7.jpg')}}" alt=""/></li>
</ul>
</div>
</div>
<div class="col-md-6 wow slideInRight">
<h3 class="page-content-title">Qui sommes nous?</h3>
<p>Confortablement installé dans une voiture haut de gamme, limousine Bruxelles s'engage envers vous, pour vous satisfaire lors de tous vos déplacements en Belgique comme à l’étranger.<br><br>

Nos chauffeurs expérimentés et professionnels sont à votre disposition pour vous servir.<br><br>

Limousine Bruxelles fera de vos déplacements, un moment agréable.</p>
<div class="gap-20"></div>
<h4>Nous sommes à votre service pour tout événement à savoir :</h4>
<ul class="circle">
<li>Évènements professionnels,
</li>
<li>Séminaires d’entreprises, 
</li>
<li>Anniversaires, </li>
<li>Mariages</li>
</ul>
</div>
</div>

<div class="row">
<div class="col-md-12 wow bounceIn">
<div class='text-center'>
<h2 class="title"><span>Nos Services</span></h2>
</div>
</div>

<section id="service" class="wow fadeInUp">
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-3">
<div class="service-content">
<a href="#."><span class="service-icon"><i class="fa fa-plane img-circle wow flipInX animated"></i></span></a>
<p style="padding-top: 35px">A Bruxelles et dans toute l’Europe, Limousine Bruxelles se charge de vos transferts...</p>
<a href="">Plus de Services</a>
</div>
</div>

<div class="col-md-3 col-sm-3">
<div class="service-content">
<a href="#."><span class="service-icon"><i class="img-circle wow flipInX animated"><img src="images/icon1.png"></i></span></a>
<p style="padding-top: 35px" >Nous mettons à votre disposition des véhicules selon vos demandes...</p>
<a href="">Plus de Services</a>
</div>
</div>

<div class="col-md-3 col-sm-3">
<div class="service-content">
<a href="#."><span class="service-icon"><i class="fa fa-road img-circle wow flipInX animated"></i></span></a>
<p style="padding-top: 35px" >Excursions et visites touristiques avec ou sans guide...</p>
<a href="">Plus de Services</a>
</div>
</div>

<div class="col-md-3 col-sm-3">
<div class="service-content last">
<a href="#."><span class="service-icon"><i class="fa fa-magic img-circle wow flipInX animated"></i></span></a>
<p style="padding-top: 35px">Oganisation de vos évènements ou cérémonies...</p>
<a href="">Plus de Services</a>
</div>
</div>

</div>
</div>
</section>

</div>
</div>
</section>
</section>
@endsection