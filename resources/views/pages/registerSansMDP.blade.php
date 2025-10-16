@extends('layouts.default3')
<!-- ecran = registerSansMDP.blade.php   -->
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
            <form method="POST" action="{{ url('/registerSansMDP') }}">   
                
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-4">
                      <label class="form-label" for="inputNOM">Nom *</label>
                      <input class="form-control" type="text" name="inputNOM" id="inputNOM" placeholder="Entrez votre nom" required="required" value="{{  $inputNOM }}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-4">
                      <label class="form-label" for="inputPRENOM">Prénom *</label>
                      <input class="form-control" type="text" name="inputPRENOM" id="inputPRENOM" placeholder="Entrez votre prénom" required="required" value="{{  $inputPRENOM }}">
                    </div>
                  </div>
                </div>

                
                
                <div class="mb-4">
                    <label class="form-label" for="inputOrganisation"> Votre organisation *</label>
                    <input class="form-control" name="inputOrganisation" id="inputOrganisation"  placeholder="organisation" autocomplete="off" required data-msg="Organisation" value="{{  $inputOrganisation }}" >
                </div>                              
                <div class="mb-4">
                    <label class="form-label" for="inputEMAIL"> Votre email * </label>
                    <input class="form-control" name="inputEMAIL" id="inputEMAIL" type="email" placeholder="nom@societe.com" autocomplete="off" required data-msg="Please enter your email" value="{{  $inputEMAIL }}" >
                </div>
              <!--   https://github.com/victorybiz/laravel-tel-input  -->
              <!--   https://github.com/giggsey/libphonenumber-for-php  -->
              <div class="mb-4">
                <div class="row">
                  <div class="col">
                    <label class="form-label" for="inputTelephone"> Votre téléphone *</label>
                  </div>                  
                </div>
                <input class="form-control" name="inputTelephone" id="inputTelephone"    data-msg="Entrez votre téléphone" value="{{  $inputTelephone }}">                
              </div>
              
              <!-- Submit-->
              <div class="d-grid">
                <button class="btn btn-lg btn-primary" type="submit" name="submitbutton" value="Continuer">Continuer</button>                
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