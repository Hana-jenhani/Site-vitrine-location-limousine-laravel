@extends('layouts.main')
@section('title','Limousine Bruxelles - Voiture avec chauffeur privé à Bruxelles')
@section('content')
	
	<div id="inner-header">
	<img src="{{asset('images/banner/banner5.jpg')}}" alt ="" />
	</div>

	
	<section id="inner-title">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="inner-title-content">
	<h2>Nos Véhicules</h2>
	<ul class="breadcrumb">
	<li> <a href="{{route('index')}}">Acceuil </a></li>
	<li><a href="{{route('vehicule')}}"> Nos Véhicules</a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</section>


	<div class="gap-40"></div>
   
	
	<section id="portfolio-page">
	<div class="container">
	<div class="row text-center">
	<div class="col-md-12"  id="isotope-filter">
	<a data-filter="*" href="#" class="active">All</a>
	<a data-filter=".web-design" href="#" class="">Mercedes Classe E</a>
	<a data-filter=".development" href="#" class="">Mercedes Classe S</a>
	<a data-filter=".joomla" href="#" class="">Viano</a>
	<a data-filter=".word" href="#" class="">Sprinter</a>
	<a data-filter=".wordpress" href="#" class="">Bus</a>
	</div>
	</div>


	<div class='row wow fadeInUp'>
<div class='col-lg-12'>
<div class="carousel slide" id="portfolio-carousel">
<div class="carousel-inner">
<div class="item  active">


		    <div class="row">
			<div id="isotope" class="isotope portfolio-page-items">

			<div class="col-sm-3 web-design ">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
				<span>
            <a data-rel="prettyPhoto" href="{{asset('images/portfolio/port1.jpg')}}" >
            <i class="fa fa-search"></i>
            </a>
             </span>
			</div>
			</div>
            <div class="image-thumb">
            <img src= "{{asset('images/portfolio/portfolio1.jpg')}}" alt="">
			</div>
			</div>


			<div class="col-sm-3 development">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
            <span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg64.jpg')}}" height="390px;">
			<i class="fa fa-search"></i>
		    </a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio64.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 joomla">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg51.jpg')}}">
			<i class="fa fa-search"></i>
		    </a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio51.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 word">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg41.jpg')}}"><i class="fa fa-search"></i></a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio41.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 joomla">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg5.jpg')}}">
			<i class="fa fa-search"></i>
		    </a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio5.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 word">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg42.jpg')}}">
			<i class="fa fa-search"></i>
		    </a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio-bg42.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 joomla">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg3 (2).jpg')}}">
			<i class="fa fa-search"></i>
		    </a></span>
			</div>
			</div>
            <div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio3.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 development">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto"  href="{{asset('images/portfolio/portfolio-bg6.jpg')}}">
			<i class="fa fa-search"></i>
		    </a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio6.jpg')}}" alt="">
			</div>
			</div>

			
			
			<div class="col-sm-3 development">
				<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg61.jpg')}}">
			<i class="fa fa-search"></i>
		    </a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio61.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 development">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto"  href="{{asset('images/portfolio/port2.jpg')}}">
			<i class="fa fa-search"></i>
			</a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio2.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 development">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto"  href="{{asset('images/portfolio/portfolio-bg63.jpg')}}">
			<i class="fa fa-search"></i>
			</a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio63.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 development">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">				
			<span><a data-rel="prettyPhoto"   href="{{asset('images/portfolio/portfolio-bg62.jpg')}}">
			<i class="fa fa-search"></i>
		    </a></span>					
			</div>							
			</div>
			<div class="image-thumb">						
			<img src="{{asset('images/portfolio/portfolio62.jpg')}}" alt="">	
			</div>								
			</div>		

			<div class="col-sm-3 development">
			<div class="portfolio-overlay">			
			<div class="portfolio-overlay-btn">						
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg65.jpg')}}">
			<i class="fa fa-search"></i>
		    </a>	</span>				
			</div>				
			</div>			
			<div class="image-thumb">			
			<img src="{{asset('images/portfolio/portfolio65.jpg')}}" alt="">				
			</div>			
			</div>		

			<div class="col-sm-3 development">		
			<div class="portfolio-overlay">			
			<div class="portfolio-overlay-btn">				
			<span><a data-rel="prettyPhoto"  href="{{asset('images/portfolio/portfolio-bg66.jpg')}}">
			<i class="fa fa-search"></i>
		    </a></span>				
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio66.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 wordpress">
			<div class="portfolio-overlay">			
			<div class="portfolio-overlay-btn">				
			<span><a data-rel="prettyPhoto"  href="{{asset('images/portfolio/portfolio-bg71.jpg')}}">
			<i class="fa fa-search"></i>
		    </a>	</span>			
			</div>				
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio71.jpg')}}" alt="">
			</div>
			</div>	

			<div class="col-sm-3 wordpress">		
			<div class="portfolio-overlay">			
			<div class="portfolio-overlay-btn">				
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg72.jpg')}}">					
			<i class="fa fa-search"></i>
		    </a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio72.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 wordpress">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg73.jpg')}}">
			<i class="fa fa-search"></i></a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio73.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 wordpress">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg74.jpg')}}">
			<i class="fa fa-search"></i></a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio74.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 wordpress">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg75.jpg')}}">
			<i class="fa fa-search"></i></a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio-bg75.jpg')}}" alt="">
			</div>
			</div>

            
			<div class="col-sm-3 wordpress">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			<span><a data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-bg76.jpg')}}">
			<i class="fa fa-search"></i></a></span>
			</div>
			</div>
			<div class="image-thumb">
			<img src="{{asset('images/portfolio/portfolio-bg76.jpg')}}" alt="">
			</div>
			</div>

			<div class="col-sm-3 ">
			<div class="portfolio-overlay">
			<div class="portfolio-overlay-btn">
			</div>
			</div>
			<div class="image-thumb">
				  <p style="padding-left: 22px; padding-top: 45px;">
							Limousine Bruxelles vous propose également ses transports en Minibus &amp;           pour des groupes allant de 8 à 50 places. Ce service s’adresse aux groupes voulant visiter la capitale belge et ses monuments attractifs. Nos visites guidées en transport sur mesure, se font non seulement dans la région de Bruxelles-Capitale mais aussi dans l’entièreté du territoire belge.Nos autocars sont tous équipés d’une télévision, de WC, d’une radio AM/FM, de lecteur de CDs, de soute à bagages et de l'airco.</p>

			</div>			
	</div>

    </div>
	</div>
	</div>
	</section>
	@endsection
	@section('js')
<script src='https://www.google.com/recaptcha/api.js'></script>

@endsection 