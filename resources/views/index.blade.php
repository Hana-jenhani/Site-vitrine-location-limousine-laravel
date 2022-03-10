
@extends('layouts.main')
@section('title','Limousine Bruxelles - Voiture avec chauffeur privé à Bruxelles')
@section('content')
	
	


<section id="home">	
<div id="main-slide" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#main-slide" data-slide-to="0" class="active"></li>		
<li data-target="#main-slide" data-slide-to="1"></li>			
<li data-target="#main-slide" data-slide-to="2"></li>			  	
<li data-target="#main-slide" data-slide-to="3"></li>			    
</ol>			    
			    
			
<div class="carousel-inner">			
<div class="item active">			    
<img class="img-responsive" src="{{asset('images/slider/bg1.jpg')}}" alt="slider">			    	
<div class="slider-content">                  
<div class="col-md-12 text-center">                      
<h2 class="animated2">                    	
<strong> LIMOUSINE BRUXELLES</strong>                        	
</h2>
<h3 class="animated3">                          
<span>LOCATION LIMOUSINE DE LUXE</span>                            	
</h3>                           
<p class="animated4"><a href="{{route('a-propos')}}" class="slider btn btn-primary">QUI SOMMES NOUS?</a></p>
</div>
</div>
</div>

<div class="item">
<img class="img-responsive" src="{{asset('images/slider/bg2.jpg')}}" alt="slider">
<div class="slider-content">
<div class="col-md-12 text-center">
<h2 class="animated4">
<span>OPTEZ POUR LE <strong>LUXE</strong></span>
</h2>
<p class="animated6"><a href="{{route('service')}}" class="slider btn btn-primary">NOS SERVICES</a></p>	     
</div>
</div>
</div>

<div class="item">			    
<img class="img-responsive" src="{{asset('images/slider/bg3.jpg')}}" alt="slider">			    	
<div class="slider-content">                    
<div class="col-md-12 text-center">                        
<h2 class="animated7">                            
<strong>LIMOUSINE BRUXELLES</strong>                                 
</h2>                            
<h3 class="animated8">                            
<span>LOCATION DE VOITURE DE LUXE À BRUXELLES</span>                            	
</h3>                            		
<div class="">
<a class="animated4 slider btn btn-primary btn-min-block" href="{{route('contact')}}">CONTACTEZ-NOUS</a><a class="animated4 slider btn btn-default btn-min-block" href="{{route('vehicule')}}">NOTRE FLOTTE</a>
</div>                                 
</div>                        
</div>                    
</div>			    

<div class="item">               
<img class="img-responsive" src="{{asset('images/slider/bg3.jpg')}}" alt="slider">			        
<div class="slider-content">                    
<div class="col-md-12 text-center">                        
<h2 class="animated7">                            
<strong>OPTEZ POUR LE PRESTIGE</strong>                                
</h2>                            
<div class="">                           		
<a class="animated4 slider btn btn-primary btn-min-block" href="{{route('vehicule')}}">VOIR FLOTTE</a>         </div>                               
</div>
</div>
</div>
</div>


			
<a class="left carousel-control" href="#main-slide" data-slide="prev">
<span><i class="fa fa-angle-left"></i></span>
</a>
<a class="right carousel-control" href="#main-slide" data-slide="next">
<span><i class="fa fa-angle-right"></i></span>
</a>
</div>  	
</section>
    


<section id="service" class="wow fadeInUp">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3">
<div class="service-content">
<a href="#."><span class="service-icon"><i class="fa fa-plane img-circle wow flipInX animated"></i></span></a>
<p style="padding-top: 35px">A Bruxelles et dans toute l’Europe, Limousine Bruxelles se charge de vos transferts...</p>
<a href= "{{route('service')}}"> Plus de services </a>
</div>
</div>

<div class="col-md-3 col-sm-3">
<div class="service-content">
<a href="#."><span class="service-icon"><i class="img-circle wow flipInX animated"><img src="images/icon1.png"></i></span></a>
<p style="padding-top: 35px">Nous mettons à votre disposition des véhicules selon vos demandes.</p>
<a href= "{{route('service')}}"> Plus de services </a>
</div>
</div>

<div class="col-md-3 col-sm-3">				
<div class="service-content">					
<a href="#."><span class="service-icon"><i class="fa fa-road img-circle wow flipInX animated"></i></span></a>
<p style="padding-top: 35px" >Excursions et visites touristiques avec ou sans guide...</p>
<a href= "{{route('service')}}"> Plus de services </a>
</div>
</div>

<div class="col-md-3 col-sm-3">				
<div class="service-content last">					
<a href="#."><span class="service-icon"><i class="fa fa-magic img-circle wow flipInX animated"></i></span></a>	 <p style="padding-top: 35px">Oganisation de vos évènements ou cérémonies...</p>
<a href= "{{route('service')}}"> Plus de services </a>				   
</div>					  
</div>					
				
</div>
</div>
</div>
</section>


<section id="features">   
<div class="container">    	
<div class="row">    		
<div class="col-sm-6 wow fadeInLeft">    			
<div class="feature-image">    				
<img class="img-responsive" src="{{asset('images/feature-mock.jpg')}}" alt="feature img" title="" />
</div>     				   					
</div>   			

<div class="col-sm-6 wow fadeInRight">    			
<div class="feature-wrapper">    				
<div class="feature-content-wrapper">	    				
<h2>Nos Visites</h2>	    					
<p>Faites-vous plaisir avec un véhicule d’exception.<br>	    					
Découvrez la Belgique avec notre service de tour de ville ! Nous sommes fiers de vous fournir un service personnalisé pour vous faire découvrir la Belgique et ces attraits touristiques</p>

<div class="feature-box clearfix">							
<div class="feature-icon pull-left">				                
<i class="fa fa-road"></i>				                    
</div>				                
<div class="feature-box-content">				                
<h3>Tour de ville</h3>					               
<p>Avec un service personnalisé, nous serons prêts à vous satisfaire et vous faire découvrir, la Belgique et tous ses coins touristiques....</p>
</div>
</div>

<div class="feature-box clearfix">
<div class="feature-icon pull-left">
<i class="fa fa-road"></i>
</div>
<div class="feature-box-content">
<h3>Circuit Bruxelles</h3>
<p>Limousine Bruxelles vous propose une journée ou une demi-journée à Bruxelles pour découvrir ses monuments historiques et... </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section> 

     
<section id="portfolio">
<div class="container">
<div class="row wow bounceIn">
<div class="col-md-12">
<div class='text-center'>
<h2 class="title"><span>Notre flotte</span></h2>
</div>
</div>
</div>

<div class='row wow fadeInUp'>
<div class='col-lg-12'>
<div class="carousel slide" id="portfolio-carousel">
<div class="carousel-inner">

<div class="item  active">
<div class="row">

<div class="col-xs-6 col-sm-3 col-md-3">   
<div class="thumbnail">
<div class="caption">
<div class="caption-content">
<span>
<a data-rel="prettyPhoto" href="{{asset('images/portfolio/port1.jpg')}}">
<i class="fa fa-search"></i>              
</a>
<a href="{{route('vehicule')}}" class=""><i class="fa fa-link"></i></a>
</span>
<h3>Limousine Bruxelles</h3>
<p>Location de voiture de luxe à Bruxelles.</p>
</div>
</div>
<img src="{{asset('images/portfolio/portfolio1.jpg')}}" alt="portfolio">
</div>
</div>   

<div class="col-xs-6 col-sm-3 col-md-3">   
<div class="thumbnail">				
<div class="caption">					
<div class="caption-content">						
<span>							
<a data-rel="prettyPhoto" href="{{asset('images/portfolio/port2.jpg')}}">
<i class="fa fa-search"></i>								              
</a>																
<a href="{{route('vehicule')}}"class="">
<i class="fa fa-link"></i>								
</a>																
</span>								
<h3>Limousine Bruxelles</h3>
<p>Location de voiture de luxe à Bruxelles.</p>
</div>
</div>
<img src="{{asset('images/portfolio/portfolio2.jpg')}}" alt="portfolio">
</div>
</div>

<div class="col-xs-6 col-sm-3 col-md-3">   
<div class="thumbnail">
<div class="caption">
<div class="caption-content">
<span>
<a data-rel="prettyPhoto" href="{{asset('images/portfolio/port3.jpg')}}">
<i class="fa fa-search"></i>              
</a>
<a href="{{route('vehicule')}}" class="">
<i class="fa fa-link"></i></a>
</span>
<h3>Limousine Bruxelles</h3>									        
<p>Location de voiture de luxe à Bruxelles.</p>									        
</div>								    	
</div>								    
<img src="{{asset('images/portfolio/portfolio3.jpg')}}" alt="portfolio">								   
</div>								
</div>							

<div class="col-xs-6 col-sm-3 col-md-3">  							
<div class="thumbnail">							 
<div class="caption">								
<div class="caption-content">								    
<span>								    	
<a data-rel="prettyPhoto" href="{{asset('images/portfolio/port4.jpg')}}">
<i class="fa fa-search"></i>              
</a>									    	
<a href="{{route('vehicule')}}" class="">
<i class="fa fa-link"></i></a>
</span>
<h3>Limousine Bruxelles</h3>
<p>Location de voiture de luxe à Bruxelles.</p>
</div>
</div>
<img src="{{asset('images/portfolio/portfolio4.jpg')}}" alt="portfolio">
</div>
</div>
</div>
</div>
</div>
</section>
 
    
<section id="blog-service">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class='text-center'>
<h2 class="title wow bounceIn"><span>À propos Limousine Bruxelles</span></h2>
</div>
</div>

	   	 		
<div class="row">
<div class="col-md-6 wow slideInLeft">
<img class="img-responsive" src="{{asset('images/about-us.jpg')}}" alt="" />
</div>
<div class="col-md-6 wow slideInRight">
<h4> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> Limousine Bruxelles </a> </h4>
<p>Confortablement installé dans une voiture haut de gamme, limousine Bruxelles s'engage envers vous, pour vous satisfaire lors de tous vos déplacements en Belgique comme à l’étranger. <br> <br>


Nos chauffeurs expérimentés et professionnels sont à votre disposition pour vous servir. <br><br>

Limousine Bruxelles fera de vos déplacements, un moment agréable..</p>
<div class="gap-20"></div>

<h4>Nous sommes à votre service pour tout événement à savoir :</h4>
<ul class="circle">
<li>Évènements professionnels.
</li>
<li>Séminaires d’entreprises,
</li>
<li>Anniversaires, </li>
<li>Mariages</li>
</ul>
<a href="{{route('a-propos')}}"> --> Lire la suite </a>
</div>
</div>
</div>
</div>
</section>
   

<section id="action">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2>NOS ENGAGEMENTS</h2>
<h3>Une équipe de conducteurs professionnels et expérimentés sont à votre disposition pour répondre à vos attentes.</h3>
<a class="action btn btn-primary btn-min-block" href="{{route('contact')}}">CONTACTEZ-NOUS</a>
</div>
</div>
</div>    
</section>  
	
	@endsection