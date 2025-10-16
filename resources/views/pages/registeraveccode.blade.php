@extends('layouts.default3')
<!-- ecran = registeraveccode.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection



@section('content')

<div class="container-fluid px-3">
      <div class="row min-vh-100">
        
        <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">          
          <div class="w-100 py-5 px-md-5 px-xxl-6 position-relative">
          
            <div class="mb-5"><img class="img-fluid mb-3" src="{{ url('assets/img/logo-fiu.jpg') }}" alt="..." style="max-width: 4rem;">
              <h2>Bienvenue</h2>
              @if (count($errors) > 0)
					<div class="text-danger" >                  
					Attention : 
					@foreach ($errors->all() as $error)
							{{ $error }}<br>
					@endforeach
					</div>
        @endif
            </div>
            <form method="POST" action="{{ url('/CreerVotrecompteAvecCode') }}">   
                
                <div class="mb-4">
                        <label class="form-label" for="inputNOM"> Nom</label>
                        <input class="form-control" name="inputNOM" id="inputNOM" placeholder="nom" autocomplete="off" required data-msg="Entrez votre nom" value="{{  $inputNOM }}" >                        
                </div>
                <div class="mb-4">
                        <label class="form-label" for="inputPRENOM"> Prénom</label>
                        <input class="form-control" name="inputPRENOM" id="inputPRENOM" placeholder="prénom" autocomplete="off" required data-msg="Entrez votre prénom" value="{{  $inputPRENOM }}" >                        
                </div>                                    
                <div class="mb-4">
                    <label class="form-label" for="inputEMAIL"> Email Adresse</label>
                    <input class="form-control" name="inputEMAIL" id="inputEMAIL" type="email" placeholder="nom@societe.com" autocomplete="off" required data-msg="Entrez votre email" value="{{  $inputEMAIL }}" >
                </div>
              
              <div class="mb-4">
                <div class="row">
                  <div class="col">
                    <label class="form-label" for="inputPassword"> Mot de passe</label>
                  </div>                  
                </div>
                <input class="form-control" name="inputPassword" id="inputPassword" placeholder="Mot de passe" type="password"  data-msg="Entrez votre mot de passe" value="{{  $inputPassword }}">                
              </div>
              <div class="mb-4">
                <div class="row">
                  <div class="col">
                    <label class="form-label" for="inputPasswordConfirme"> Mot de passe à confirmer</label>
                  </div>                  
                </div>
                <input class="form-control" name="inputPasswordConfirme" id="inputPasswordConfirme" placeholder="Mot de passe" type="password"  data-msg="Entrez votre mot de passe" value="{{  $inputPasswordConfirme }}">                
              </div>
              <!-- Submit-->
              <div class="d-grid">
                <button class="btn btn-lg btn-primary" type="submit" name="submitbutton" value="Senregistrer">S'enregistrer</button>                
              </div>
                                   
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            
          </div>
        </div>
        <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
          <!-- Image backgroundFiU.jpg -->
          
          <div class="bg-cover h-100 me-n3" style="background-image: {{ url('assets/img/backgroundFiU.jpg') }};"></div> 
        </div>
      </div>
    </div>


@endsection