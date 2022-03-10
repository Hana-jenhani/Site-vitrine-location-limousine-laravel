@extends('layouts.main')
@section('title','Limousine Bruxelles - Voiture avec chauffeur privé à Bruxelles')
@section('content')
@section('css')
<style>
	.success_message {
    background-color: #eb2c33;
    color: #fff;
    padding: 1.1em 2.2em 1.05em;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 30px;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert-danger {
    color: #ffffff;
    background-color: #17ec1eab;
    border-color: #ffffff;
}
</style>
@endsection




<div id="inner-header">
<img src="{{asset('images/banner/banner4.jpg')}}" alt ="" />
</div>

	
<section id="inner-title">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="inner-title-content">
<h2>Devis gratuit</h2>
<ul class="breadcrumb">
<li> <a href="{{route('index')}}">Acceuil </a></li>
<li><a href="{{route('devis')}}"> Devis gratuit</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>

<div class="gap-40"></div>

<section id="Contact-page">
<div class="container">	
<div class="row">		
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">			
    @include('layouts.notification')             
<div class="contact-form">				
<h3>Demande devis gratuit</h3>					
<form action="{{route('contact.SendMaildevis')}}" method="post">					
    {!! csrf_field() !!}						 
<div class="row">	

<div class="col-md-12">							
<div class="form-group">								
<label>Nom</label>									
<input class="form-control" name="name" id="name" placeholder="" type="text" required>
</div>																
</div>	

<div class="col-md-6">							
<div class="form-group">								
<label>Email</label>									
<input class="form-control" name="email" id="email" placeholder="" type="email" required>
</div>
</div>

<div class="col-md-6">							
<div class="form-group">								
<label>Téléphone</label>									
<input class="form-control" name="tel" id="tel" placeholder="" required>
</div>
</div>

<div class="col-md-6">							
<div class="form-group">								
<label>Date début</label>									
<input  id="datetimepicker" class="form-control" type="text"  name="dated"placeholder=""  required>	
</div>
</div>

<div class="col-md-6">
<div class="form-group ">
<label>Date fin</label>
<input  id="datetimepicker1" class="form-control" type="text" name="datef" placeholder=""  required>
</div>
</div>
</div>

<div class="form-group">						
<label>Message</label>						
<textarea class="form-control" name="comments" id="comments" placeholder="" rows="8" required></textarea>	
</div>
<br>						

<div class="">
@if(env('GOOGLE_RECAPTCHA_KEY'))
<div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
</div>
@if($errors->has('g-recaptcha-response'))
<label style="color: red;" class="error">{{ $errors->first('g-recaptcha-response') }}</label>
@endif
@endif
</div>

<div><br>
<button class="btn btn-primary" id="submit" name="submit" type="submit">Envoyez</button> 
</div>
</form>
</div>
</div> 

				
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="contact-info">
<h3>Nos Coordonnées</h3>
<br>
<p><i class="fa fa-phone"></i> +32 489 00 15 30</p>
<p><i class="fa fa-envelope-o"></i>  info@limousinebruxelles.be</p>
<p><i class="fa fa-globe"></i> www.limousinebruxelles.be</p>
</div>
</div>
</div>
</div>
</section>
@endsection
@section('js')
<script src='https://www.google.com/recaptcha/api.js'></script>
<script >
	
	jQuery('#datetimepicker').datetimepicker();
    jQuery('#datetimepicker1').datetimepicker();

	
</script>
@endsection


