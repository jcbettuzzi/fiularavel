@extends('layouts.default3')
<!-- ecran = CreMajmotdepasse.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('content')
@if (count($errors) > 0)
					<div class="text-danger" >                  
					Attention : 
					@foreach ($errors->all() as $error)
							{{ $error }}<br>
					@endforeach
					</div>
@endif

<section class="py-5">
<div class="container">
@if ($MajCreation ==1)
	<h1 class="hero-heading mb-0">Modifer votre mot de passe</h1>
@else
	<h1 class="hero-heading mb-0">Création de votre mot de passe</h1>
@endif

<p class="text-muted mb-5">Bonjour {{ $nomprenom }}  ({{ $email }} )</p>

<form method="POST" action="{{ url('/MettreAjourMotdePasse') }}">   

<div class="mb-4">
                <div class="row">
                  <div class="col">
                    <label class="form-label" for="inputPassword"> Mot de passe</label>
                  </div>                  
                </div>
                <input class="form-control" name="inputPassword" id="inputPassword" placeholder="Mot de passe" type="password"  data-msg="Entrez votre mot de passe" >                
              </div>
              <div class="mb-4">
                <div class="row">
                  <div class="col">
                    <label class="form-label" for="inputPasswordConfirme"> Mot de passe à confirmer</label>
                  </div>                  
                </div>
                <input class="form-control" name="inputPasswordConfirme" id="inputPasswordConfirme" placeholder="Mot de passe" type="password"  data-msg="Entrez votre mot de passe" >                
              </div>
              <!-- Submit-->
              <div class="d-grid">
                <button class="btn btn-lg btn-primary" type="submit" name="submitbutton" value="majmotdepasse">Mettre à jour son mot de passe</button>                
              </div>
			  

<input type="hidden" name="nomprenom" value="{{ $nomprenom }}">
<input type="hidden" name="email" value="{{ $email }}">
<input type="hidden" name="uuid" value="{{ $uuid }}">
<input type="hidden" name="MajCreation" value="{{ $MajCreation }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>
</div>
</section>
@endsection

