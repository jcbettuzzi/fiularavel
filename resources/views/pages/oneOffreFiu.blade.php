<?php
$API_KEY = getenv('GOOGLE_API_KEY');
?>
@extends('layouts.defaultFiu')
<!-- ecran = oneOffreFiu.blade.php   -->


@section('title')
{{ $offres['FIU_Rec_Detail_Type_bureau'] }}
@endsection

@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('metaDescription')
<?php 
if (strlen($offres['FIU_Rec_Detail_Type_bureau'])>0){
  $tab = explode('-',$offres['FIU_Rec_Detail_Type_bureau']);
  $firstPart = $tab[0].' '.$tab[1].' - '.$offres['AdresseComplete']; 
  $maxCharact = 320-strlen($firstPart);
  echo $tab[0].' '.$tab[1].' - '.$offres['AdresseComplete'].' - '.substr($offres['descriptionBien'], 0, $maxCharact); 
}else{
  echo $offres['AdresseComplete']; 
}
  
?>
@endsection

@section('ogImagePrincipale')
<meta property="og:image" content="{{ asset('recupereimageDocumentID/'.$offres['offres_id'].'/0')}}"/>
@endsection

@section('pagetitle')

@endsection

@section('custom_css')
<style>
  /**Debut test accordion une offre */
  :root {
    --primary: #227093;
    --secondary: #ff5252;
    --background: #eee;
    --highlight: #ffda79;
    /* Theme color */
    --theme: var(--primary);
  }
  *, *::before, *::after {
    box-sizing: border-box;
  }
  /*
  body {
    display: grid;
    place-content: center;
    grid-template-columns: repeat(auto-fit, min(100%, 30rem));
    min-height: 100vh;
    place-items: start;
    gap: 1rem;
    margin: 0;
    padding: 1rem;
    color: var(--primary);
    background: var(--background);
  }
  */

  /* Core styles/functionality */
  .tab_2 input {
    position: absolute;
    opacity: 0;
    z-index: -1;
  }
  .tab__content_2 {
    max-height: 0;
    overflow: hidden;
    transition: all 0.35s;
  }
  .tab_2 input:checked ~ .tab__content_2 {
    /*max-height: 10rem;*/
    max-height: 100%;
  }

  /* Visual styles */
  .accordionOne {
    border-radius: 0.5rem;
    overflow: hidden;
  }
  .tab__label_2,
  .tab__close {
    display: flex;
    color: black;
    cursor: pointer;
  }
  .tab__label_2 {
    justify-content: space-between;
    padding: 1rem;
  }
  .tab__label_2::after {
    content: "\276F";
    width: 1em;
    height: 1em;
    text-align: center;
    transform: rotate(90deg);
    transition: all 0.35s;
  }
  .tab_2 input:checked + .tab__label_2::after {
    transform: rotate(270deg);
  }
  .tab__content_2 p {
    margin: 0;
    padding: 1rem;
  }
  .tab__close {
    justify-content: flex-end;
    padding: 0.5rem 1rem;
    font-size: 0.75rem;
  }
  .accordionOn--radio {
    --theme: var(--secondary);
  }



  @keyframes bounce {
    25% {
      transform: rotate(90deg) translate(.25rem);
    }
    75% {
      transform: rotate(90deg) translate(-.25rem);
    }
  }
  /**Fin test accordion une offre */
</style>
<style>
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  .active, .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }

  .enregistrerFav:hover {
    text-decoration: underline;
    text-underline-offset: 5px;
    text-decoration-thickness: 2px; 
  }
</style>
<style>
  .underline-on-hover:hover {
  		text-decoration: underline;
	}
  .marginLeftBoutonVideo{
    margin-left: 19%;
  }
  @media only screen and (max-width: 768px){
    .marginLeftBoutonVideo{
      margin-left: 0;
    }
  }
</style>

@endsection

@section('content')

    <div class="mobileSliderDetailAd" style="margin-top: 90px;">
        <!--Debut carousel mobile -->
        <!-- width="400px" -->
        <!-- height="300px" -->
        
              
        <div
          style="
            position: relative;
            min-height: 292px;
          "
          class="row wd-100 justify-content-space-between items-center imgRadiusLeft imgRadiusRightMobile heightImageSliderFindADestop"
        >
          @foreach($Images as $keyOffreDoc => $UneOffreDocuments)
            <img
              
              src="{{ asset('recupereimageDocumentID/'.$offres['offres_id'].'/'.$UneOffreDocuments['offredocument_id'].'')}}"
              class="object-center object-cover pointer-events-none mySlides fade"
              style="object-fit: cover;object-position: center;width:100%;min-height: 292px;"
              onclick="currentSlide({{$keyOffreDoc+1}})"
              alt="{{ $offres['FIU_Rec__Titre_Annonce'] }}"
            />
          @endforeach
          <div style="position: absolute;left: 0;">
            <img src="{{ asset('assets/img/round-arrow-left.png')}}" onclick="plusSlides(-1)" style="width:30px;height:30px;" alt="Flèche de gauche"/>
          </div>
          <div style="position: absolute;bottom: 5%;width: 100%;text-align: center;">
            @foreach($Images as $keyOffreDoc => $UneOffreDocuments)
              @if($keyOffreDoc == 0)
                <span class="dot active" onclick="currentSlide({{$keyOffreDoc+1}})"></span>
              @else
                <span class="dot" onclick="currentSlide({{$keyOffreDoc+1}})"></span>
              @endif
            @endforeach 
          </div>
            <div style="position: absolute;right: 0;">
              <img width={30} height={30} src="{{ asset('assets/img/round-arrow-right.png')}}" onclick="plusSlides(1)" alt="Flèche de droite"/>
            </div>
        </div>
        <!--Fin carousel mobile-->
    </div>
        <div
          class="row marginTopLeftPartDetailAd"
          style="
            //marginTop: '90px',
            margin-right: 3%;
          "
        >
          <div
            class="col-8 col-m-8 col-s-12 column"
            style="
              padding: 2.5% 3%;
            "
          >
            <div class="sliderDestopDetailAd">
              <!-- Debut carousel destop -->
              <div class="row wd-100">
                <div class="column wd-20 items-center" style="max-height: 450px;overflow: hidden;overflow-y: scroll;scrollbar-width: none;" id="sliderVerticallyContain">
                  <img width="30" height="30" src="{{ asset('assets/img/round-arrow-left.png')}}" style="position: absolute;top: 11%; rotate: 84deg;" onclick="plusSlides2(-1)" id="prevImgSlide" alt="Flèche de gauche"/>
                    @foreach($Images as $keyOffreDoc => $UneOffreDocuments)
                        <div
                          class="row wd-100 items-center justify-content-center"
                          style="
                            //height: 25%;
                            padding: 2%;
                            position: relative;
                          "
                          onclick="currentSlide2({{$keyOffreDoc+1}})"
                        >
                        <!-- Slider sur le cote -->
                          <img
                          src="{{ asset('recupereimageDocumentID/'.$offres['offres_id'].'/'.$UneOffreDocuments['offredocument_id'].'')}}"
                            class="carousel-image active"
                            style="width: 88%;"
                            alt="Image secondaire"
                          />
                        </div>
                    @endforeach
                  <img width="30" height="30" src="{{ asset('assets/img/round-arrow-right.png')}}" style="rotate: 84deg;position:absolute;bottom:32%;" onclick="plusSlides2(1)" id="nextImgSlide" alt="Flèche de droite"/>
                </div>
                <!-- Image principale -->
                <div class="column wd-80" style="max-height: 80vh;">
                  @foreach($Images as $keyOffreDoc => $UneOffreDocuments)
                    <div class="column wd-100 justify-content-center content-center" style="height: 100%;">
                      <img
                        class="image-carousel-transition mySlides2 fade"
                        src="{{ asset('recupereimageGrandeDocumentID/'.$offres['offres_id'].'/'.$UneOffreDocuments['offredocument_id'].'')}}"
                        style="object-fit: cover;object-position: center bottom;width:48vw;height: 100%;"
                        alt="Image principale"
                      />
                    </div>
                  @endforeach
                </div>
              </div>
              <!-- Fin carousel destop -->
            </div>
            @if(!is_null($offres['video']))
            <div class="col-12">
              <div style="margin-top: 3%;" class="marginLeftBoutonVideo">
                <div style="gap: 2%;" class="items-center">
                  <a href="{{$offres['video']['lien_offresMedia']}}" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 512 512" fill="#000" role="img" aria-labelledby="logo play"> <title id="logo play">logo play</title> <circle cx="256" cy="256" r="256" fill="#f0f0f0"/> <path d="M208 160v192l144-96-144-96z" fill="#000"/> </svg>
                  </a>
                  <p class="font-m">Découvrez ces bureaux en vidéo</p>
                </div>
              </div>
            </div>
            @endif
            <div class="col-0 col-m-0 col-s-12 bg-blanc" style=" border-radius: 20px; ">
              <div class="labelFormButton">
                <!--
                <div
                  class="items-center"
                  
                >
                  Partager <IosShareIcon />
                </div>
                -->
                <div
                  class="items-center"
                >
                  @if(Session::get('usersigne')==1)                                  
                    @if($offres['AjouterFavori']==1)
                    <div>
                      <a href="{{ url('/AjouterOffrefavori/'.$offres['offres_id']) }}" class="cursorPointer enregistrerFav" style="font: 22px azo-sans-web, sans-serif;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519"> <g id="Favoris" transform="translate(0.75 0.75)"> <path id="Icon_feather-heart" data-name="Icon feather-heart" d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z" transform="translate(-2.323 -4.497)" fill="rgba(255,255,255,0.4)" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/> </g> </svg>
                      </a>
                    </div>
                    @else
                    <div>
                      <a href="{{ url('/SupprimerOffrefavori/'.$offres['offres_id']) }}" class="cursorPointer enregistrerFav" style="font: 22px azo-sans-web, sans-serif;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519"> <g id="Favoris" transform="translate(0.75 0.75)"> <path id="Icon_feather-heart" data-name="Icon feather-heart" d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z" transform="translate(-2.323 -4.497)" fill="pink" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/> </g> </svg>
                      </a>
                    </div>
                    @endif
                  @endif
                </div>
              </div>
              <div
                style=" position: relative; background-color: white; border-radius: 20px; "
                class="col-10 col-s-12 col-m-10"
              >
              
                <!-- Debut formContactProperty mobile-->
          <div style=" position: relative; background-color: white; border-radius: 20px; " class="col-10 col-s-12 col-m-10">
            
              <div class="column wd-100 " style="
                  padding: 7%;
                  border-radius: 20px;
                  border: #DDDDDD 1px solid;
                ">

                  <?php 
                    if (!is_null($Leclient['errorMess'])){                      
                      echo '<br><p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;">'.$Leclient['errorMess'].'</p>';
                      
                    }
                    if (!is_null($Leclient['Message'])){                      
                      echo '<br><p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;" >'.$Leclient['Message'].'</p>';
                      
                    }
                  ?>
                  @if(session('errorForm'))
                        <br>
                        <p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;" >
                          {{ session('errorForm') }}
                        </p>
                  @endif
                <a class="azoSansBold vert">
                  @if($offres['offreType_id'] ==2) {{ $offres['listedesnatures'] }} - {{ number_format($offres['surfaceTotaleCom'], 0, ',', ' ') }} m² @else {{ $offres['FIU_Rec__Titre_Annonce'] }} - {{ $offres['surfaceTotaleBureau'] }} m2 @endif
                </a>
                <h3 class="font-s abrilTextRegular" style=" margin: 0; ">
                  {{ $offres['AdresseComplete'] }}
                </h3>
                <div class="column" style=" margin-top: 7%; margin-bottom: 7%; ">
                    @if($offres['FIU_Rec_Detail_Euro_HTparMois'] > 0)
                      <h4 class="asoSansRegular" style=" font-size: 2.7rem; margin: 0; ">
                        <b>
                          @if($offres['FIU_Rec__DetailApartirde_parmois'] == 1)
                            À partir de
                          @endif
                          {{ number_format($offres['FIU_Rec_Detail_Euro_HTparMois'], 0, ',', ' ') }} €
                        </b> 
                        HT / mois 
                      </h4>
                    @endif
                    @if($offres['FIU_Rec_DEtail_Euro_HTparPoste'] > 0)
                      <h5 class="asoSansRegular" style=" margin: 0; ">
                        {{ number_format($offres['FIU_Rec_DEtail_Euro_HTparPoste'], 0, ',', ' ') }} € HT / poste
                      </h5>
                    @endif
                    @if($offres['FIU_Rec_DEtail_Euro_m2parAN'] > 0)
                      <h5 class="asoSansRegular" style=" margin: 0; ">
                      {{ number_format($offres['FIU_Rec_DEtail_Euro_m2parAN'], 0, ',', ' ') }} € HT / m² / an
                      </h5>
                    @endif
                    @if($offres['offreType_id'] ==2)
                      <h5 class="asoSansRegular" style=" margin: 0; ">
                        <b>Prix vente : </b>
                        {{ number_format($offres['VenteAnnuelCalculee'], 0, ',', ' ') }} €
                      </h5>
                    @endif
                </div>
                <div class="column wd-100">                  
                  <form class="form" id="booking-form" method="POST" action="{{ url('/contacterlegestionnaire3') }}" autocomplete="off">
                      @if($FiuID == null)
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
                      @endif
                        <button
                          class="buttonFormProperty justify-content-center items-center content-center heightLabelFormContactProperty"
                          style=" fontSize: 1.8rem; "
                          type="submit" 
                          name="submit"
                          id="contactergestionnaireSubmitMobile"  
                          value="contactergestionnaire"
                        >
                          Contacter le gestionnaire
                        </button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="offreID" value="{{ $offres['offres_id'] }}">
                        <input type="hidden" name="refRbmg" value="{{ $offres['ref_rbmg'] }}">
                        <input type="hidden" name="FiuID" value="{{ $FiuID }}">
                        <input type="hidden" name="recaptchaToken6" id="recaptchaToken6">
                    
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
              </div>
              
            <div class="emojiOneAdProperty">
              <img src="{{ asset('assets/img/220506-FiU-Personnages-34.png')}}" width="146px" height="205px">
            </div>
          </div>
                <!-- Fin formContactProperty mobile-->
                <div class="emojiOneAdProperty">
                  <img src="{{ asset('assets/img/220506-FiU-Personnages-34.png')}}" width="100px" height="125px" />
                </div>
              </div>
            </div>
            <!-- Debut description block -->
              <div
                  class="column wd-100"
                  style="
                    padding: 2%;
                  "
              >
                <h6 style=" margin-bottom: 0px; " class="font-s gris-fonce">
                  REF {{ $offres['ref_rbmg'] }}
                </h6>
                <h1 style=" marginBottom: 0px; " class="font-l">
                  @if($offres['offreType_id'] ==2) {{ $offres['nomprogramme'] }} @else {{ $offres['FIU_Rec__Titre_Annonce'] }} @endif
                </h1>
                <p class="items-center font-m" style=" white-space: pre-line; ">
                  {{ $offres['descriptionBien'] }}
                </p>
              </div>
            <!-- Fin description block -->
            <div class="column wd-90" style=" margin-left: 2%; margin-bottom: 4%; ">
              <!-- Debut test accordion -->
              <div class="accordionOne">
              <hr style="border-width: 0px 0px thin; border-style: solid; border-color: rgba(0, 0, 0, 0.12);"/>
              <div class="tab_2">
                <input type="checkbox" name="accordion-1" id="cb1-one">
                <label class="AnnoncesToggleTitle fontSubTitle tab__label_2" for="cb1-one" style="margin-top:2%;margin-bottom:2%;font-weight: unset;font-family: unset;padding-left:0;">Services inclus</label>
                <div class="tab__content_2">
                  <div class="row wd-100 flex-wrap-row">
                      <div class="colmun col-6 col-m-6 col-s-12 abrilTextRegular">
                        <h3 class="font-s"> Service(s) de base </h3>
                        @if(isset($Servicedebase))
                            @foreach ($Servicedebase as $unservice) 
                              <p class="asoSansRegularServices mtb-5px font-s">{{ $unservice }}</p>
                            @endforeach
                        @endif
                      </div>
                      <div class="colmun col-6 col-m-6 col-s-12 abrilTextRegular">
                        <h3 class="font-s"> Equipement(s) </h3>
                        @if(isset($ServiceEquipement))
                          @foreach ($ServiceEquipement as $unservice)
                            <p class="asoSansRegularServices mtb-5px font-s">{{ $unservice }}</p>
                          @endforeach
                        @endif
                      </div>
                      <div class="colmun col-6 col-m-6 col-s-12 abrilTextRegular">
                        <h3 class="font-s"> Confort </h3>
                        @if(isset($ServiceConfort))
                          @foreach ($ServiceConfort as $unservice) 
                            <p class="asoSansRegularServices mtb-5px font-s">{{ $unservice }}</p>
                          @endforeach
                        @endif
                      </div>
                      <div class="colmun col-6 col-m-6 col-s-12 abrilTextRegular">
                        <h3 class="font-s"> Sécurité </h3>
                        @if(isset($ServiceSecurite))
                          @foreach ($ServiceSecurite as $unservice)
                            <p class="asoSansRegularServices mtb-5px font-s">{{ $unservice }}</p>
                          @endforeach
                        @endif
                      </div>
                  </div>
                </div>
              </div>
            @if($offres['offreType_id'] !=2)
              <hr style="border-width: 0px 0px thin; border-style: solid; border-color: rgba(0, 0, 0, 0.12);"/>
              <div class="tab_2">
                <input type="checkbox" name="accordion-1" id="cb2-one">
                <label for="cb2-one" class="AnnoncesToggleTitle fontSubTitle tab__label_2" style="margin-top:2%;margin-bottom:2%;font-weight: unset;font-family: unset;padding-left:0;"> Contrat et conditions d'entrée</label>
                <div class="tab__content_2">
                  <div class="row wd-100 flex-wrap-row">
                    <div class="column col-6 col-m-12 col-s-12 pr-5pr">
                      <h5 class="font-s"> CONTRAT </h5>
                    <div>
                    @if(isset($LesBaux))
                      @foreach ($LesBaux as $unBail)     
                      
                      <p class="bold asoSansRegularServices font-s">{{ $unBail['titre'] }}
                         
                        @if($unBail['titre'] == "Bail Commercial") 
                          <a href="https://flexinuse.fr/guide/leguide-du-bail-commercial" target="_blank" class="underline-on-hover">(En savoir plus)</a> 
                        @elseif($unBail['titre'] == "Contrat de Prestation de service")
                          <a href="https://flexinuse.fr/guide/leguide-contrat-de-prestation-de-services" target="_blank" class="underline-on-hover">(En savoir plus)</a>
                        @elseif($unBail['titre'] == "Bail dérogatoire")
                          <a href="https://flexinuse.fr/guide/leguide-du-bail-derogatoire" target="_blank" class="underline-on-hover">(En savoir plus)</a>
                        @elseif($unBail['titre'] == "Contrat de Sous-location")
                          <a href="https://flexinuse.fr/guide/leguide-de-la-sous-location" target="_blank" class="underline-on-hover">(En savoir plus)</a>
                        @endif
                        
                      </p>                 
                      <p class="asoSansRegularServices font-s">{{ $unBail['texte'] }}</p>                 
                      @endforeach
                    @endif
                    <p style="font-size: 9px;">Les informations sur les risques auquels ce bien est exposé sont disponibles sur le site Géorisques: <a href = "https://www.georisques.gouv.fr/" style="font-size: 9px" target="_blank">www.georisques.gouv.fr</a></p>
                  </div>
                </div>
                  <div class="column col-6 pr-5pr">
                    <h5 class="bold asoSansRegularServices font-s"> CONDITIONS D'ENTRÉE </h5>
                    <div class="row justify-content-space-between font-s" style="gap: 3%;">
                      <p class="bold asoSansRegularServices mtb-5px"> Dépot de garantie </p>
                      <p class="asoSansRegularServices mtb-5px" style="white-space: nowrap;"> {{ $offres['depotGarantie'] }} mois </p>
                    </div>
                    <div class="row justify-content-space-between font-s" style="gap: 3%;">
                      <p class="bold asoSansRegularServices mtb-5px"> Durée d'engagement minimum</p>
                      <p class="asoSansRegularServices mtb-5px" style="white-space: nowrap;"> {{ $offres['DureEngagementminimum'] }} mois </p>
                    </div>
                    <div class="row justify-content-space-between font-s" style="gap: 3%;">
                      <p class="bold asoSansRegularServices mtb-5px"> Durée d'engagement maximum</p>
                      <p class="asoSansRegularServices mtb-5px" style="white-space: nowrap;"> {{ $offres['DureEngagementmaximum'] }} mois </p>
                    </div>
                    <div class="row justify-content-space-between font-s" style="gap: 3%;">
                      <p class="bold asoSansRegularServices mtb-5px"> Durée du préavis </p>
                      <p class="asoSansRegularServices mtb-5px" style="white-space: nowrap;"> {{ $offres['preavis'] }} mois </p>
                    </div>
                    <div class="row justify-content-space-between font-s" style="gap: 3%;">
                      <p class="bold asoSansRegularServices mtb-5px"> Date disponibilité </p>
                      <p class="asoSansRegularServices mtb-5px" style="white-space: nowrap;">{{ $offres['datedisponibilite'] }}</p>
                    </div>
                    @if($offres['honoraires'])
                    <!-- <div class="row justify-content-space-between font-s" style="gap: 3%; align-items: center;"> -->
                      <h5 class="bold asoSansRegularServices font-s" style="padding: 1rem; margin-bottom: 1,67em;">HONORAIRES</h5>
                      <p class="asoSansRegularServices font-s">{{ $offres['honoraires'] }}</p>
                    <!-- </div> -->
                    @endif
                  </div>
                </div>
              </div>
              </div>
            @endif
              <hr style="border-width: 0px 0px thin; border-style: solid; border-color: rgba(0, 0, 0, 0.12);"/>
              <div class="tab_2">
                <input type="checkbox" name="accordion-1" id="cb4-one">
                <label for="cb4-one" class="AnnoncesToggleTitle fontSubTitle tab__label_2" style="margin-top:2%;margin-bottom:2%;font-weight: unset;font-family: unset;padding-left:0;">  Tableau des surfaces </label>
                <div class="tab__content_2">
                    <!--Debut tableau surface -->
                    <div class="wd-100 flex-wrap-row" style="overflow-x:auto;">
                        <table style="border-collapse: collapse;width: 100%">
                            @if(!empty($Surfaces))
                              @foreach($Surfaces as $indexUneSurface => $UneSurfaces)
                                      @if($indexUneSurface == 0)
                                        <tr style="color: black;background-color: #A5A5A5A5;">
                                          @foreach($UneSurfaces as $value)
                                            <th class="bold asoSansRegularServices font-xs" style="border: 1px solid black;">{{$value}}</th>
                                          @endforeach
                                        </tr>
                                      @else
                                      <tr>
                                          @if(array_search('Commerce', $UneSurfaces) == false)
                                           @foreach($UneSurfaces as $value)
                                            <td style="text-align: center;border: 1px solid black;" class="font-s asoSansRegularServices">{{$value}}</td>
                                           @endforeach
                                          @endif
                                      </tr>
                                      @endif
                              @endforeach
                            @endif
                        </table>
                    </div>
                    <!--Fin tableau surface -->
                    <?php 
                    if ($offres['ParkingInterieur']> 0){
                      echo "<p class='font-xs'>Parking Intérieur : ".$offres['ParkingInterieur'].'</p>';
                    }else{
                      echo "<p class='font-xs'>Parking Intérieur : 0 </p>";
                    }
                    if ($offres['ParkingExterieur']> 0){                      
                      echo "<br><p class='font-xs'>Parking Extérieur : ".$offres['ParkingExterieur'].'</p>';
                    }else{
                      echo "<br><p class='font-xs'>Parking Extérieur : 0</p>";
                    }
                    if (!is_null($offres['DivisibleSurface'])){
                      echo "<br><p class='font-xs'>".$offres['DivisibleSurface']."</p>";
                    }
                    
                    if (!is_null($offres['DivisiblePoste'])){
                      echo "<br><p class='font-xs'>".$offres['DivisiblePoste']."</p>";
                    }                                        
                    ?>
                </div>
              </div>
              <hr style="border-width: 0px 0px thin; border-style: solid; border-color: rgba(0, 0, 0, 0.12);"/>
              <div class="tab_2">
                <input type="checkbox" name="accordion-1" id="cb3-one">
                <label for="cb3-one" class="AnnoncesToggleTitle fontSubTitle tab__label_2" style="margin-top:2%;margin-bottom:2%;font-weight: unset;font-family: unset;padding-left:0;">  Localisation et accessibilité </label>
                <div class="tab__content_2">
                  <div class="wd-100">
                      <!-- Debut map -->
                      <div id="map" style="height: 500px;"></div>
                      <!-- Fin map -->
                  </div>
                  <div class="wd-100 flex-wrap-row">
                    <div class="column col-6 col-s-12">
                      <h5 class="font-s"> DÉTAILS DE L'ESPACE DE TRAVAIL </h5>
                      @if(isset($Detailespacedetravail))              
                        @foreach ($Detailespacedetravail as $cle => $valeur)                       
                          <div class="row justify-content-space-between font-s">
                            <p class="bold asoSansRegularServices mtb-5px"> {{ $cle }} </p>
                            <p class="asoSansRegularServices mtb-5px"> {{ $valeur }} </p>
                          </div>
                        @endforeach
                      @endif
                    </div>
                    <div class="column col-6 col-s-12">
                      <div class="paddingLeftAcess">
                        <h5 class="font-s marginBottomTitleAccess"> ACCÈS </h5>
                        <div>
                          <p class="font-s asoSansRegularServices" style="margin-top: 1%; margin-bottom: 3%;">{!! $offres['desserte'] !!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <!-- Fin test accordion -->
            </div>
          </div>
          <div
            class="col-4 col-m-4 col-s-0 bg-blanc position-fixed"
            style="
              margin-left: 67%;
            "
          >
            <div class="labelFormButton" style=" padding-right: 20%; padding-top: 5%; ">
              <!--
              <div
                class="items-center"
              >
                Partager <IosShareIcon />
              </div>
              -->
              <div
                class="items-center"
              >
                @if(Session::get('usersigne')==1)                                  
                  @if($offres['AjouterFavori']==1)
                  <div>
                    <a href="{{ url('/AjouterOffrefavori/'.$offres['offres_id']) }}" class="cursorPointer enregistrerFav" style="font: 22px azo-sans-web, sans-serif;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519"> <g id="Favoris" transform="translate(0.75 0.75)"> <path id="Icon_feather-heart" data-name="Icon feather-heart" d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z" transform="translate(-2.323 -4.497)" fill="rgba(255,255,255,0.4)" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/> </g> </svg>
                    </a>
                  </div>
                  @else
                  <div>
                    <a href="{{ url('/SupprimerOffrefavori/'.$offres['offres_id']) }}" class="cursorPointer enregistrerFav" style="font: 22px azo-sans-web, sans-serif;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519"> <g id="Favoris" transform="translate(0.75 0.75)"> <path id="Icon_feather-heart" data-name="Icon feather-heart" d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z" transform="translate(-2.323 -4.497)" fill="pink" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/> </g> </svg>
                    </a>
                  </div>
                  @endif
                @endif
              </div>
            </div>
            <div
              style=" position: relative; background-color: white; border-radius: 20px; "
              class="col-10 col-s-12 col-m-10"
            >
              <!-- Debut formContactProperty -->
                <div
                  class="column wd-100 "
                  style="
                    padding: 7%;
                    border-radius: 20px;
                    border: #DDDDDD 1px solid;
                  "
                >
                  <?php 
                    if (!is_null($Leclient['errorMess'])){                      
                      echo '<br><p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;">'.$Leclient['errorMess'].'</p>';
                      
                    }
                    if (!is_null($Leclient['Message'])){                      
                      echo '<br><p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;" >'.$Leclient['Message'].'</p>';
                      
                    }
                  ?>
                  @if(session('errorForm'))
                        <br>
                        <p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;" >
                          {{ session('errorForm') }}
                        </p>
                  @endif
                  <a class="azoSansBold vert">
                    {{ $offres['FIU_Rec_Detail_Type_bureau'] }}
                    @if($offres['offreType_id'] ==2) {{ $offres['listedesnatures'] }} - {{ number_format($offres['surfaceTotaleCom'], 0, ',', ' ') }} m² @endif
                  </a>
                  <h3 class="font-s abrilTextRegular" style=" margin: 0; ">
                    {{ $offres['AdresseComplete'] }}
                  </h3>
                  <div class="column" style=" margin-top: 7%; margin-bottom: 7%; ">
                    @if($offres['FIU_Rec_Detail_Euro_HTparMois'] > 0)
                      <h4 class="asoSansRegular" style=" font-size: 2.7rem; margin: 0; ">
                        <b>
                          @if($offres['FIU_Rec__DetailApartirde_parmois'] == 1)
                           À partir de
                          @endif
                          {{ number_format($offres['FIU_Rec_Detail_Euro_HTparMois'], 0, ',', ' ') }} €
                        </b> 
                        HT / mois 
                      </h4>
                    @endif
                    @if($offres['FIU_Rec_DEtail_Euro_HTparPoste'] > 0)
                      <h5 class="asoSansRegular" style=" margin: 0; ">
                        {{ number_format($offres['FIU_Rec_DEtail_Euro_HTparPoste'], 0, ',', ' ') }} € HT / poste
                      </h5>
                    @endif
                    @if($offres['FIU_Rec_DEtail_Euro_m2parAN'] > 0)
                      <h5 class="asoSansRegular" style=" margin: 0; ">
                      {{ number_format($offres['FIU_Rec_DEtail_Euro_m2parAN'], 0, ',', ' ') }} € HT / m² / an
                      </h5>
                    @endif
                    @if($offres['offreType_id'] ==2)
                      <h5 class="asoSansRegular" style=" margin: 0; ">
                        <b>Prix vente : </b>
                        {{ number_format($offres['VenteAnnuelCalculee'], 0, ',', ' ') }} €
                      </h5>
                    @endif
                  </div>
                  <div class="column wd-100">
                    <form class="form" id="booking-form" method="POST" action="{{ url('/contacterlegestionnaire3') }}" autocomplete="off">
                      @if($FiuID == null)
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
                      @endif
                        <button
                          class="buttonFormProperty justify-content-center items-center content-center heightLabelFormContactProperty"
                          style=" fontSize: 1.8rem; "
                          type="submit" 
                          name="submit"
                          id="contactergestionnaireSubmit"  
                          value="contactergestionnaire"
                        >
                          Contacter le gestionnaire
                        </button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="offreID" value="{{ $offres['offres_id'] }}">
                        <input type="hidden" name="refRbmg" value="{{ $offres['ref_rbmg'] }}">
                        <input type="hidden" name="FiuID" value="{{ $FiuID }}">
                        <input type="hidden" name="recaptchaToken5" id="recaptchaToken5">
                    
                    <a
                      class="gris-fonce fontSizeConditionOneAdProperty"
                      style=" margin: 10px 0px 0px 0px; color: #A5A5A5; line-height: 1.2em; "
                    >
                      En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous prenez
                      connaissance de notre politique de confidentialité. Vous pouvez vous désinscrire à tout moment à l’aide des
                      liens de désinscription. Vos données personnelles collectées sont uniquement destinées à fiu et seront
                      uniquement exploitées dans le cadre de la soumission effective d’un formulaire du site.​Ce site est protégé par reCAPTCHA.
                    </a>
                    </form>
                  </div>
                </div>
              <!-- Fin formContactProperty-->
              <div class="emojiOneAdProperty">
                <img src="{{ asset('assets/img/220506-FiU-Personnages-34.png')}}" width="146px" height="205px" />
              </div>
            </div>
          </div>
        </div>
        <div
          class="column wd-100 bg-blanc position-relative"
          style="
            z-index: 1;
          "
        >
          <h4
            style="
              margin-left: 5%;
              margin-bottom: 1%;
            "
          >
            Vous aimerez aussi
          </h4>
          <div class="displayOtherProperty bg-blanc cancelJustifyContent-mobile" style="overflow-x: auto;justify-content: left;">
            @foreach($ListeDesoffres as $UneOffre)
              <div style=" min-width: 318px;border: 1px solid #DDDDDD; " class="imgRadiusTop addPositionRelativeOnProperty">
                <div class="cardDisplayProperty imgRadiusTop bg-blanc" style="
                  max-width: 418px;
                  max-height: 650;
                  cursor: pointer;
                "
                  <?php
                    if(!is_null($UneOffre['FIU_Rec__Titre_Annonce'])){
                            // Normalize the string
                            $normalized = Normalizer::normalize($UneOffre['FIU_Rec__Titre_Annonce'], Normalizer::FORM_D);
                                      
                            // Remove diacritics (accents)
                            $cleaned = preg_replace('/[\p{M}]/u', '', $normalized);
                                      
                            // Replace non-alphanumeric characters with spaces
                            $cleaned = preg_replace('/[^a-zA-Z0-9 ]/', ' ', $cleaned);
                                    
                            // Replace consecutive spaces with hyphens
                            $cleaned = preg_replace('/\s+/', '-', $cleaned);
                            //$cleanUrl = $this->normalizeUrl($oneRecord['FIU_Rec__Titre_Annonce']);
                            $urlCleaned = $cleaned;
                    }elseif(!is_null($UneOffre['FIU_Rec_Detail_Type_bureau']) && is_null($UneOffre['FIU_Rec__Titre_Annonce'])){
                            // Normalize the string
                            $normalized = Normalizer::normalize($UneOffre['FIU_Rec_Detail_Type_bureau'], Normalizer::FORM_D);
                                      
                            // Remove diacritics (accents)
                            $cleaned = preg_replace('/[\p{M}]/u', '', $normalized);
                                      
                            // Replace non-alphanumeric characters with spaces
                            $cleaned = preg_replace('/[^a-zA-Z0-9 ]/', ' ', $cleaned);
                                    
                            // Replace consecutive spaces with hyphens
                            $cleaned = preg_replace('/\s+/', '-', $cleaned);
                            //$cleanUrl = $this->normalizeUrl($oneRecord['FIU_Rec_Detail_Type_bureau']);
                            $urlCleaned = $cleaned;
                    }else{
                            $urlCleaned = "undefined";
                    }
                  ?>
                  onclick="window.location.href='{{ url('/location-bureau-entreprise/'.$urlCleaned.'/'.$UneOffre['offres_id']) }}';"
                >
                  <div style="maxHeight: 419px;">
                    <img src="{{ asset('recupereimageDocumentID/'.$UneOffre['offres_id'].'/0')}}" class="imgRadiusTop" style="width:100%;height:400px;object-fit: cover;object-position: center center;">
                  </div>
                  <div class="bg-blanc addPaddingBottomOnContentProperty" style=" padding-left: 7%; padding-top: 8%; padding-right: 8%; ">
                    <a class="azoSansBold vert" style="fontSize: 1.8rem;">
                      {{ $UneOffre['FIU_Rec__Titre_Annonce'] }}
                    </a>

                    <h5 class="abrilTextRegular" style=" font-size: 2.5rem; margin-top: 0; margin-bottom: 0; ">
                      {{ $UneOffre['AdresseComplete'] }}
                    </h5>
                  </div>
                  <div style=" padding-left: 7%; padding-right: 8%; " class="priceContentClass">
                    @if($UneOffre['FIU_Rec_Detail_Euro_HTparMois'] > 0)
                      <span class="asoSansRegular" style=" font-size: 2rem;">
                        <b>
                          @if($UneOffre['FIU_Rec__DetailApartirde_parmois'] == 1)
                            À partir de
                          @endif
                          {{ number_format($UneOffre['FIU_Rec_Detail_Euro_HTparMois'], 0, ',', ' ') }} € 
                        </b>
                        HT / mois
                      </span>
                    @endif
                    @if($UneOffre['FIU_Rec_DEtail_Euro_HTparPoste'] > 0)
                      <p style="
                          margin-top: 0%;font-family: azo-sans-web;
                          font-size: 2rem;
                        ">
                        {{ number_format($UneOffre['FIU_Rec_DEtail_Euro_HTparPoste'], 0, ',', ' ') }} € HT /
                        poste
                      </p>
                    @endif
                    @if($UneOffre['FIU_Rec_DEtail_Euro_m2parAN'] > 0)
                      <p style="
                          margin-top: 0%;font-family: azo-sans-web;
                          font-size: 2rem;
                        ">
                         {{ number_format($UneOffre['FIU_Rec_DEtail_Euro_m2parAN'], 0, ',', ' ') }} € HT / m² / an
                      </p>
                    @endif
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          </div>
          <div class="row wd-100 bg-violet blanc boxRadiusTopLeft" style=" position: relative; ">
            <div
              class="column wd-100"
              style="
                padding-left: 8%;
                padding-top: 2%;
                min-height: 463px;
                padding-bottom: 3%;
              "
            >
              <h4 class="mb-1p abrilTextRegular"> Besoin d'aide pour votre recherche de bureau ? </h4>
              <p
                class="font-m wd-50 asoSansRegularBase"
                style="
                  margin-top: 0;
                "
              >
                Pas de panique ! <b>fiu</b> vous aide à identifier vos besoins, orienter votre recherche et trouver la
                perle rare !
              </p>
              <a   href="{{ url('/recherche-sur-mesure') }}">
                <button
                  class="buttonMore fontInput"
                  style="
                    min-width: 318px;
                  "
                >
                  Recherche sur mesure
                </button>
                  </a>
              <div class="emojiFindADestop">
                <img src="{{ asset('assets/img/220506-FiU-Personnages-08.png')}}" style="width: 100%;" />
              </div>
            </div>
          </div>
        </div>

@endsection

@section('scripts')

  <script type="text/javascript">
    /*
    $(document).ready(function(){
      //-initialize the javascript
      App.init();
      App.formElements();
    });
    */
  </script>
  <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
      }

      let slideIndex2 = 1;
      showSlides2(slideIndex2);

      function plusSlides2(n) {
        showSlides2(slideIndex2 += n);
      }

      function currentSlide2(n) {
        showSlides2(slideIndex2 = n);
      }

      function showSlides2(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides2");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex2 = 1}    
        if (n < 1) {slideIndex2 = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex2-1].style.display = "block";console.log('slideIndex2: '+slideIndex2);  
        dots[slideIndex2-1].className += " active";
      }
  </script>
  
   <!-- google map api  -->
   <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhuR1erE3ZS9EEgqm9-czUxo6uPQbR5k8&callback=initMap" type="text/javascript">
    </script>
    <script>
    function initMap() {
      //prepareFiltreMap();
      //console.log("testdgfhdhdhdhfgh")
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: { lat: {{$offres['latitude'] }}, lng: {{$offres['longitude']}} }, //new google.maps.LatLng(point),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });

      const infoWindow = new google.maps.InfoWindow();
      var markers = new Array();
      var marker = new google.maps.Marker({
        map: map,
        position: {{ $offres['positionMAP'] }},
        title:  {!! json_encode($offres['adresseMAP']) !!}                                 
      });                                
      markers.push(marker);

    }


  </script>

  <script>

    document.getElementById("prevImgSlide").addEventListener("click", prev);

    function prev(){
        document.getElementById('sliderVerticallyContain').scrollTop -= 128;
    }

    document.getElementById("nextImgSlide").addEventListener("click", next);

    function next()
    {
        console.log('next 123');
        //document.getElementById('sliderVerticallyContain').scrollLeft += 270;
        //document.getElementById('sliderVerticallyContain').scrollBy(0, 100);
        //document.getElementById('sliderVerticallyContain').scrollTo(0, 100);
        document.getElementById('sliderVerticallyContain').scrollTop += 128;
    }

  </script>

  <script>
      grecaptcha.ready(function () {
            grecaptcha.execute('<?php echo getenv('captchaSiteKey'); ?>', { action: 'contacterlegestionnaire3' }).then(function(token) {
              // Ajoutez le jeton dans un champ caché de votre formulaire
              document.getElementById('recaptchaToken5').value = token;
              document.getElementById('recaptchaToken6').value = token;
            });
      });
  </script>

<!-- Variables et fonctions php pour les schemas -->
<?php
header('Content-Type: text/html; charset=utf-8');

//Helpers généraux
function defini($v) { return isset($v) ? $v : null; } //renvoie null si non défini
function num($v)    { return is_numeric($v) ? 0 + $v : null; } //force number ou null

//Helper UTF-8 (évite JSON_ERROR_UTF8)
function to_utf8_deep($v) {
    if (is_array($v)) {
        foreach ($v as $k => $val) $v[$k] = to_utf8_deep($val);
        return $v;
    }
    if (is_string($v)) {
        if (!mb_check_encoding($v, 'UTF-8')) $v = mb_convert_encoding($v, 'UTF-8', 'auto');
        //retire BOM & caractères invisibles gênants
        $v = preg_replace('/\x{FEFF}|\x{200B}|\x{00A0}/u', ' ', $v);
    }
    return $v;
}

//Slug d’URL à partir du titre
$schemaBureaux = preg_replace('/\s*-\s*/', '-', (string)$offres["FIU_Rec__Titre_Annonce"]);
$schemaBureaux = str_replace(' ', '-', $schemaBureaux);

//Fonctions d’étage
function etage_label($v) {
    $v = trim((string)$v);
    if ($v === '') return null;
    $map = ['RDC'=>'RDC','RDJ'=>'RDJ','SOUS-SOL'=>'Sous-sol','SS'=>'Sous-sol'];
    if (isset($map[$v])) return $map[$v];
    if (is_numeric($v)) { $n=(int)$v; return $n === 1 ? '1er' : $n.'e'; }
    return $v;
}
function slug($v) {
    $s = strtolower(trim((string)$v));
    $s = preg_replace('/[^a-z0-9]+/i', '-', $s);
    return trim($s, '-');
}

//URLs de base / IDs
$baseUrl   = "https://flexinuse.fr/location-bureau-entreprise/".defini($schemaBureaux)."/". defini($offres['offres_id']);
$pageUrl   = $baseUrl;
$placeId   = $baseUrl."#place";
$productId = $baseUrl."#product";
$offerId   = $baseUrl."#offer";

//Données dérivées/propres
$desserte = isset($offres['desserte']) ? str_replace('<br />', ',', (string)$offres['desserte']) : null;

//Image principale: essaie champs communs, sinon fallback par convention
function best_image_url($offres) {
    foreach (['image', 'image_url', 'imagePrincipale', 'image_principale_url'] as $k) {
        if (!empty($offres[$k]) && filter_var($offres[$k], FILTER_VALIDATE_URL)) return $offres[$k];
    }
    if (!empty($offres['offres_id'])) {
        return "https://flexinuse.fr/images/offres/" . rawurlencode($offres['offres_id']) . ".jpg";
    }
    return "https://flexinuse.fr/assets/img/placeholder.jpg";
}
$mainImage = best_image_url($offres);

//Collecte des étages uniques + tri naturel
$arrayEtages = [];
if (!empty($Surfaces) && is_array($Surfaces)) {
    foreach ($Surfaces as $row) {
        $lvl = isset($row[0]) ? trim((string)$row[0]) : '';
        if ($lvl === '' || strtoupper($lvl) === 'NIVEAU') continue;
        if (!in_array($lvl, $arrayEtages, true)) $arrayEtages[] = $lvl;
    }
}
natsort($arrayEtages);
$arrayEtages = array_values($arrayEtages);
$etages = implode(', ', $arrayEtages);

$serviceInclus = $offres['prestationImmeuble'];
$serviceInclus = preg_split('/\R/', $serviceInclus);

//Stockage dans un tableau afin de générer automatiquement les services
$amenityFeature = [];
if (!empty($serviceInclus)) {
    foreach ($serviceInclus as $service) {
        $service = trim($service);
        if ($service === '') continue;

        $amenityFeature[] = [
            "@type" => "LocationFeatureSpecification",
            "name"  => $service,
            "value" => true
        ];
    }
}

//Construit les places enfants (plateaux) & products de plateau
$containsPlaces   = [];
$plateauxProducts = [];


if (!empty($Surfaces) && is_array($Surfaces)) {
    foreach ($Surfaces as $uneSurface) {
        $lvlRaw   = isset($uneSurface[0]) ? trim((string)$uneSurface[0]) : '';
        $surfM2   = isset($uneSurface[3]) ? $uneSurface[3] : null;
        $nbPostes = isset($uneSurface[4]) ? $uneSurface[4] : null;
        $dispo    = isset($uneSurface[6]) ? $uneSurface[6] : null;
        if ($lvlRaw === '' || strtoupper($lvlRaw) === 'NIVEAU') continue;

        $sku = $offres['offres_id'].'-'.$uneSurface[0].'-'.$uneSurface[3];
        $etageTaille = $uneSurface[0].'-'.$uneSurface[3];
        $lvlLabel = etage_label($lvlRaw);
        $plateauId = $baseUrl."#".$etageTaille;
        $productPlateauId = $baseUrl."#product-plateau-".$etageTaille;
        $offerPlateauId = $baseUrl."#offer-plateau-".$etageTaille;

        //Place enfant
        $containsPlaces[] = [
            "@type" => "Place",
            "@id" => $plateauId,
            "name" => "Plateau " . $lvlLabel,
            "additionalProperty" => array_values(array_filter([
                [ "@type" => "PropertyValue", "name" => "Étage", "value" => defini($lvlRaw) ],
                [ "@type" => "PropertyValue", "name" => "Surface (m²)", "value" => num($surfM2) ],
                [ "@type" => "PropertyValue", "name" => "Nombre de postes", "value" => num($nbPostes) ],
                [ "@type" => "PropertyValue", "name" => "Disponibilité", "value" => defini($dispo) ],
            ], fn($x) => $x["value"] !== null && $x["value"] !== "" ))
        ];

        //Product par plateau
        $plateauxProducts[] = [
            "@type" => "Product",
            "@id"   => $productPlateauId,
            "sku" => $sku,
            "name"  => "Plateau ".$lvlLabel." – ".(defini($offres['FIU_Rec__Titre_Annonce'])),
            "category" => $offres['nomprogramme'],
            "isRelatedTo" => [ "@id" => $plateauId ],
            "size" => [
                "@type" => "QuantitativeValue",
                "value" => $uneSurface[3],
                "unitCode" => "MTK"
            ],
            "offers" => [
                "@type" => "Offer",
                "@id" => $offerPlateauId,
                "businessFunction" => "http://purl.org/goodrelations/v1#LeaseOut",
                "priceSpecification" => [
                    "@type" => "UnitPriceSpecification",
                    "name"  => "Prix HT par poste",
                    "price" => num($offres['FIU_Rec_DEtail_Euro_HTparPoste'] ?? null),
                    "priceCurrency" => "EUR",
                    "unitText" => "poste/mois",
                    "valueAddedTaxIncluded" => false
                ],
                "availability" => "https://schema.org/InStock",
                "availabilityStarts" => $offres['datedisponibilitesurface'],
                "seller" => [ "@id" => "https://flexinuse.fr/#organization" ]
            ]
        ];
    }
}

//Graph principal
$data = [
    "@context" => "https://schema.org",
    "@graph" => array_merge([

        //Organization
        [
            "@type" => "Organization",
            "@id" => "https://flexinuse.fr/#organization",
            "name" => "fiu – Flex In Use",
            "url" => "https://flexinuse.fr",
            "telephone" => "+33755537147",
            "email" => "contact@flexinuse.fr",
            "logo" => [
              "type" => "ImageObject",
              "url" => "https://flexinuse.fr/assets/img/logo-fiu@2x.png",
              "width" => 168,
              "height" => 80 
            ],
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "25 Rue de Ponthieu",
                "postalCode" => "75008",
                "addressLocality" => "Paris",
                "addressRegion" => "Île-de-France",
                "addressCountry" => "FR"
            ],
            "sameAs" => [
              "https://www.linkedin.com/company/fiuflexinuse/",
              "https://www.instagram.com/fiu_flexinuse.fr/",
              "https://www.facebook.com/profile.php?id=100089726257268",
              "https://www.youtube.com/@fiu_flexinuse/featured"
            ]

        ],
        // WebSite + SearchAction
        [
          "type" => "Website",
          "@id" => "https://flexinuse.fr/#website",
          "url" => "https://flexinuse.fr",
          "name" => "fiu – Flex In Use",
          "publisher" => [ "@id" => "https://flexinuse.fr/#organization" ],
          "potentialAction" => [
            "@type" => "SearchAction",
            "target" => "https://flexinuse.fr/recherche?q={search_term_string}",
            "query-input" => "required name=search_term_string"
          ]

        ],
        //Place global (sans sku/offers/floorSize)
        [
            "@type" => "Place",
            "@id"   => $placeId,
            "name"  => $offres["FIU_Rec__Titre_Annonce"],
            "image" => [
              "@type" => "ImageObject",
              "url" => "https://flexinuse.fr/assets/img/homepage-test5.png"
            ],
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => defini($offres['AdresseComplete']),
                "postalCode" => defini($offres['codepostal']),
                "addressLocality" => defini($offres['nomville']),
                "addressRegion" => "Île-de-France",
                "addressCountry" => "FR"
            ],
            "identifier" => [
                "@type" => "PropertyValue",
                "propertyID" => "REF_RBMG",
                "value" => defini($offres['ref_rbmg'])
            ],
            "geo" => [
              "@type" => "GeoCoordinates",
              "latitude" => $offres['latitude'],
              "longitude" => $offres['longitude']
            ],
            "amenityFeature" => $amenityFeature,
            "additionalProperty" => array_values(array_filter([
                [ "@type" => "PropertyValue", "name" => "Nombre de postes", "value" => num($offres['nbPoste'] ?? null) ],
                [ "@type" => "PropertyValue", "name" => "Surface par poste (m²)", "value" => 7 ],
                [ "@type" => "PropertyValue", "name" => "Liste des étages", "value" => $etages ],
                [ "@type" => "PropertyValue", "name" => "Type d'espace", "value" => defini($offres['FIU_Rec_Detail_Type_bureau'] ?? null) ],
                [ "@type" => "PropertyValue", "name" => "Contrat", "value" => "Bail commercial ou Contrat de prestation de service" ],
                [ "@type" => "PropertyValue", "name" => "Dépôt de garantie", "value" => defini($offres['depotGarantie'] ?? null) ],
                [ "@type" => "PropertyValue", "name" => "Durée d'engagement minimum (mois)", "value" => num($offres['DureEngagementminimum'] ?? null) ],
                [ "@type" => "PropertyValue", "name" => "Durée d'engagement maximum (mois)", "value" => num($offres['DureEngagementmaximum'] ?? null) ],
                [ "@type" => "PropertyValue", "name" => "Préavis (mois)", "value" => num($offres['preavis'] ?? null) ],
                [ "@type" => "PropertyValue", "name" => "Parkings intérieurs", "value" => num($offres['ParkingInterieur'] ?? null) ],
                [ "@type" => "PropertyValue", "name" => "Parkings extérieurs", "value" => num($offres['ParkingExterieur'] ?? null) ],
                [ "@type" => "PropertyValue", "name" => "Accès transports", "value" => defini($desserte) ],
            ], fn($x) => $x["value"] !== null && $x["value"] !== "" )),
            "containsPlace" => $containsPlaces
        ],

        //Product global + Offer
        [
            "@type" => "Product",
            "@id" => $productId,
            "name" => $offres["FIU_Rec__Titre_Annonce"],
            "description" => $offres['descriptionBien'],
            "category" => $offres['nomprogramme'],
            "image" => "https://flexinuse.fr/recupereImageID/".$offres['offres_id']."/317291",
            "brand" => [ "@type" => "Brand", "name" => "fiu – Flex In Use" ],
            "sku" => defini($offres['offres_id']),
            "isRelatedTo" => [ "@id" => $placeId ],
            "size" => array_values(array_filter([
                [
                    "@type" => "QuantitativeValue",
                    "value" => num($offres['surfaceTotaleCom'] ?? null),
                    "unitCode" => "MTK"
                ]
            ], fn($x) => isset($x["value"]) && $x["value"] !== null )),
            "offers" => [
                "@type" => "Offer",
                "@id" => $offerId,
                "url" => $pageUrl,
                "category" => $offres['nomprogramme'],
                "businessFunction" => "http://purl.org/goodrelations/v1#LeaseOut",
                "price" => num($offres['LoyerAnnuelCalcule'] ?? null),
                "priceCurrency" => "EUR",
                "priceSpecification" => array_values(array_filter([
                    [
                        "@type" => "UnitPriceSpecification",
                        "name"  => "Loyer mensuel HT",
                        "price" => num($offres['LoyerMensuelParmoisFIU'] ?? null),
                        "priceCurrency" => "EUR",
                        "unitCode" => "MON",
                        "valueAddedTaxIncluded" => false
                    ],
                    [
                        "@type" => "UnitPriceSpecification",
                        "name"  => "Prix HT par poste (indicatif)",
                        "price" => num($offres['LoyerMensuelParposteFIU'] ?? null),
                        "priceCurrency" => "EUR",
                        "unitText" => "poste/mois",
                        "valueAddedTaxIncluded" => false
                    ]
                ], fn($x) => isset($x["price"]) && $x["price"] !== null )),
                "availability" => "https://schema.org/InStock",
                "availabilityStarts" => $offres['datedisponibilitesurface'],
                "leaseLength" => array_values(array_filter([
                    [
                        "@type" => "QuantitativeValue",
                        "minValue" => num($offres['DureEngagementminimum'] ?? null),
                        "maxValue" => num($offres['DureEngagementmaximum'] ?? null),
                        "unitCode" => "MON"
                    ]
                ], fn($x) => isset($x["minValue"]) || isset($x["maxValue"]) )),
                "seller" => [ "@id" => "https://flexinuse.fr/#organization" ]
            ]
        ],

        //Breadcrumbs
        [
            "@type" => "BreadcrumbList",
            "@id"   => $pageUrl . "#breadcrumbs",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Location de bureaux",
                    "item" => "https://flexinuse.fr/location-bureau-entreprise"
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Bureaux privatifs – " . (defini($offres['nomville']) ?? "Paris"),
                    "item" => $pageUrl
                ]
            ]
        ],

        // Webpage
        [
          "type" => "Webpage",
          "@id" => $baseUrl."#webpage",
          "url" => $baseUrl,
          "name" => $offres["FIU_Rec__Titre_Annonce"],
          "isPartOf" => [
            "@id" => $baseUrl."#website"
          ],
          "breadcrumb" => [
            "@id" => $baseUrl."#breadcrumbs"
          ],
          "primaryImageOfPage" => [
            "@type" => "ImageObject",
            "url" => "https://flexinuse.fr/recureimageDocumentID/".$offres['offres_id']."/317291"
          ]
        ]

    ], $plateauxProducts) //+Products des plateaux
];

//Nettoyage + encodage JSON
$data = to_utf8_deep($data);

//Encode avec options + substitution UTF-8
$json = json_encode(
    $data,
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE
);

//Vérifie les erreurs d’encodage
if ($json === false) {
    // Ne mets PAS du JSON cassé dans le <script> si échec :
    echo "<!-- JSON-LD encode error: " . json_last_error_msg() . " -->\n";

    //Petit rapport lisible en HTML (uniquement en dev)
    // echo "<pre style='color:#b00;background:#fee;padding:8px;border:1px solid #b00'>";
    // echo "ÉCHEC json_encode(): " . json_last_error_msg() . "\n";
    // echo "Indice: souvent JSON_ERROR_UTF8 => champ avec caractères non-UTF-8.\n";
    // echo "Essaye de var_dump des champs texte suspects (adresse, ville, desserte...).\n";
    // echo "</pre>";
} else {
    //Émission du JSON-LD valide
    echo '<script type="application/ld+json">'.$json.'</script>';

    //Mode debug (affiche le JSON rendu sur la page pour vérification)
    // if (!empty($_GET['debug'])) {
    //     echo "<pre style='white-space:pre-wrap;background:#f6f8fa;padding:10px;border:1px solid #ddd;margin-top:8px'>";
    //     echo htmlspecialchars($json, ENT_NOQUOTES, 'UTF-8');
    //     echo "</pre>";
    // }
}

//Test de variable
// echo $var;
// print_r($array);
?>

@endsection
