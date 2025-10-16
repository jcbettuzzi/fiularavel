@extends('layouts.default3')
<!-- ecran = sesigner.blade.php   -->
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
            <form  method="POST" action="{{ url('/FIULogin') }}">
              <div class="mb-4">
                <label class="form-label" for="inputEMAIL"> Email Adresse</label>
                <input class="form-control" name="inputEMAIL" id="inputEMAIL" type="email" placeholder="nom@societe.com" autocomplete="off" required data-msg="Please enter your email" value="{{  $inputEMAIL }}" >
              </div>
              
              <div class="mb-4">
                <div class="row">
                  <div class="col">
                    <label class="form-label" for="inputPassword"> Mot de passe</label>
                  </div>
                  
                </div>
                <input class="form-control" name="inputPassword" id="inputPassword" placeholder="Mot de passe" type="password"  data-msg="Entrez votre mot de passe">
                
              </div>
              <!--
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" id="loginRemember" type="checkbox">
                  <label class="form-check-label text-muted" for="loginRemember"> <span class="text-sm">Remember me for 30 days</span></label>
                </div>
              </div>
-->
              <!-- Submit-->
              <div class="d-grid">
                <button class="btn btn-lg btn-primary" type="submit" name="submitbutton" value="Sesigner">Se Signer</button>                
              </div>
<!--
              <div class="col-auto"><a class="form-text small text-primary" href="#">Mot de passe oublié ?</a></div>
              <div class="col-auto"><button class="btn btn-link form-text small" type="submit"href="#">Mot de passe oublié ?</button></div>
              -->
              <hr class="my-4">
              <button  class="btn btn-link  text-muted " type="submit" name="submitbutton" value="Motdepasseoublie">Mot de passe oublié ?</button>
              <button  class="btn btn-link  text-muted " type="submit" name="submitbutton" value="Sesigneravecunlien">S'authentifer avec un lien dans votre messagerie.</button>
              <button  class="btn btn-link  text-muted " type="submit" name="submitbutton" value="Sesigneravecuncode">S'authentifer avec un code dans votre messagerie.</button>
              
              <!--<hr class="my-3 hr-text letter-spacing-2" data-content="OU">-->
<!--
              <div class="d-grid gap-2">
                <button class="btn btn btn-outline-primary btn-social"><i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Facebook</span></button>
                <button class="btn btn btn-outline-muted btn-social"><i class="fa-2x fa-google fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Google</span></button>
              </div>
              
-->
    <hr class="my-4">
    
              <p class="text-center"><small class="text-muted text-center">Vous êtes nouveau ?  <a href="{{ url('registerCodeMdp') }}">Créer votre compte              </a></small></p>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            
          </div>
        </div>
        <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
          <!-- Image-->
          <div class="bg-cover h-100 me-n3" style="background-image: {{ url('assets/img/backgroundFiU.jpg') }};"></div>
        </div>
      </div>
    </div>


@endsection