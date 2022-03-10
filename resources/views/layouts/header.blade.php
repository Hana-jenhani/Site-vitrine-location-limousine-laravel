	<header id="header" class="navbar-fixed-top main-nav" role="banner">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="top-info">
	<ul class="pull-right">
	<li><i class="fa fa-phone"></i> Appelez-nous: +32 489 00 15 30</li>
	<li><i class="fa fa-envelope"></i> info@limousinebruxelles.be</li>
							
	<li class="social-icon">
	<a id="tooltip1" data-toggle="tooltip" data-placement="top" title="Français"  href="{{route('index')}}">
	<img src="{{asset('images/fr.png')}}">
	</a>
	<a id="tooltip2" data-toggle="tooltip" data-placement="top" title="Anglais" href="{{route('index')}}">
	<img src="{{asset('images/en.png')}}">
	</a>
	</li>
	</ul>
	</div>

					
	<div class="navbar-header">				
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">				    
	<span class="sr-only">Toggle navigation</span>				        
	<span class="icon-bar"></span>				        
	<span class="icon-bar"></span>				       
	<span class="icon-bar"></span>				        
	</button>
	<a class="navbar-brand" href="{{route('index')}}">				   
	<img class="img-responsive" src="{{asset('images/logo.png')}}" alt="logo">	    	
	</a>                    
	</div>				

	<nav class="collapse navbar-collapse clearfix" role="navigation">
	<ul class="nav navbar-nav navbar-right">
	<li class="<?= (Route::current()->getName() == 'index') ? 'active' : '' ?>">
	<a href="{{route('index')}}">Acceuil</a>							
	</li>
	<li class="<?= (Route::current()->getName() == 'a-propos') ? 'active' : '' ?>" ><a href="{{route('a-propos')}}">À propos</a></li>
	<li class="<?= (Route::current()->getName() == 'service') ? 'active' : '' ?>"><a href="{{route('service')}}">Services</a></li>
	<li class="<?= (Route::current()->getName() == 'visite') ? 'active' : '' ?>">
	<a href="{{route('visite')}}">Visites</a>
	</li>
	<li class="<?= (Route::current()->getName() == 'vehicule') ? 'active' : '' ?>">
	<a href="{{route('vehicule')}}">Vehicule</a>
	</li>
	<li class="<?= (Route::current()->getName() == 'chauffeur') ? 'active' : '' ?>">
	<a href="{{route('chauffeur')}}">Chauffeur privé </a>
	</li>
    <li class="<?= (Route::current()->getName() == 'devis') ? 'active' : '' ?>">
	<a href="{{route('devis')}}">Devis gratuit </a>
	</li>
	<li class="<?= (Route::current()->getName() == 'reservation') ? 'active' : '' ?>">
	<a href="{{route('reservation')}}" >Réservation</a>
	</li>
    <li class="<?= (Route::current()->getName() == 'contact') ? 'active' : '' ?>"><a href="{{route('contact')}}">Contact</a>
    </li>
	</ul>
	</nav>
<div class="site-search">
<div class="container">					
<input type="text" placeholder="type what you want and enter">
<span class="close">&times;</span>
</div>					
</div>
</div>
</div>
</div>
</header>
