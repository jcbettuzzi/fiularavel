@extends('layouts.defaultFiu')
<!-- ecran = testCaptcha.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('content')

<div style="margin-top: 90px;">
                <form class="form" id="booking-form" method="POST" action="{{ url('/postTestCapcha123ABC') }}" autocomplete="off">
                        <div class="wd-100 row">
                          <input
                            style=" margin: 10px 0px; "
                            type="text"
                            class="baseInput inputAzolight wd-50 heightLabelFormContactProperty"
                            placeholder="Prénom"
                            name="Prenom"
                            id="Prenom"
                            value="{{ old('Prenom') }}"
                          />
                          <input
                            style=" margin: 10px 0px; "
                            type="text"
                            class="baseInput inputAzolight wd-50 heightLabelFormContactProperty"
                            placeholder="Nom"
                            name="nom" 
                            id="nom"
                            value="{{ old('nom') }}"
                          />
                        </div>
                        <input
                          type="text"
                          class="baseInput inputAzolight heightLabelFormContactProperty wd-100"
                          placeholder="E-mail"
                          style=" margin-top: 0; "
                          name="email" 
                          id="email"
                          value="{{ old('email') }}"
                        />
                        <input class="baseInput inputAzolight heightLabelFormContactProperty wd-100" type="text" name="Telephone" id="Telephone" placeholder="Numéro de téléphone" value="{{ old('Telephone') }}" >
                        <div class="g-recaptcha" data-sitekey="6Lf4YZIqAAAAAFYwczoGIRD_OHKRVWp0r5yWBEGx"></div>
                        <br/>
                        <!--<input type="submit" value="Submit">-->
                        <button
                          class="buttonFormProperty justify-content-center items-center content-center heightLabelFormContactProperty"
                          style=" fontSize: 1.8rem; "
                          type="submit" 
                          name="submit"  
                          value="contactergestionnaire"
                        >
                          test
                        </button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <a                    
                      class="gris-fonce fontSizeConditionOneAdProperty"                      
                      style=" margin: 10px 0px 0px 0px; color: #A5A5A5; line-height: 1.2em; "
                    >
                      En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous prenez
                      connaissance de notre politique de confidentialité. Vous pouvez vous désinscrire à tout moment à l’aide des
                      liens de désinscription. Vos données personnelles collectées sont uniquement destinées à fiu et seront
                      uniquement exploitées dans le cadre de la soumission effective d’un formulaire du site.​
                    </a>
                </form>
</div>

@endsection

@section('scripts')
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
@endsection