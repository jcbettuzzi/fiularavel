@extends('layouts.default3')
<!-- ecran = sesigneraveccode.blade.php   -->
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
            <form method="POST" action="{{ url('/Sesigneraveclecode') }}">  
            Bonjour {{$nomprenom}} <br/>
            Veuillez saisir le code que vous avez reçu par mail.({{$email}})
                <div class="mb-4">
                        <label class="form-label" for="inputCode"> Code</label>
                        <input class="form-control" name="inputCode" id="inputCode" placeholder="Code" autocomplete="off" required data-msg="Entrez votre code"  >                        
                </div>
                
              <!-- Submit-->
              <div class="d-grid">
                <button class="btn btn-lg btn-primary" type="submit" name="submitbutton" value="Senregistrer">S'authentifier</button>                
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