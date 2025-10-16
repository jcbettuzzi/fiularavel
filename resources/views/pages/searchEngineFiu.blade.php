<?php
$API_KEY = getenv('GOOGLE_API_KEY');
if($textLocationOrCoworking !== ''){
  $arrayBaseNameLocationCoworking = $textLocationOrCoworking['allUrl'];
}
?>
@extends('layouts.defaultFiu')
<!-- ecran = searchEngineFiu.blade.php   -->


@section('title')
  @if($textLocationOrCoworking !== '')
    @if(in_array(basename(Request::url()),$arrayBaseNameLocationCoworking))
      <?php setlocale(LC_TIME, 'fr_FR.UTF-8');
      $date = new DateTime(); 
      $mois = $date->format('F');$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE, null, null, 'MMMM');
      $mois = $formatter->format($date);
      $annee = date("Y");
      $concatMoisAnnee = $mois.' '.$annee;
      $newTitle_1 = str_replace('MM_AAAA',$concatMoisAnnee,$textLocationOrCoworking['title']);
      $newTitle_2 = str_replace('flexinuse.fr',$_SERVER['HTTP_HOST'],$newTitle_1);
      echo $newTitle_2;
      ?>
    @endif
  @else
    Trouvez le bureau idéal pour votre entreprise - Louez sur fiu !
  @endif
@endsection

@section('canonical')
  @if($textLocationOrCoworking !== '')
    @if(in_array(basename(Request::url()),$arrayBaseNameLocationCoworking))
      <link rel="canonical" href="{{ url()->current() }}" />   
    @endif
  @endif
@endsection

@section('metaDescription')
  @if($textLocationOrCoworking !== '')
    @if(in_array(basename(Request::url()),$arrayBaseNameLocationCoworking))
      <?php 
        $newTexte = str_replace('flexinuse.fr',$_SERVER['HTTP_HOST'],$textLocationOrCoworking['description']);
        echo $newTexte;
      ?>
    @endif
  @else
    Vous cherchez une location de bureau professionnel ? Chez fiu nous proposons des bureaux entièrement équipés à louer. Découvrez nos annonces dès maintenant !
  @endif
@endsection

@section('pagetitle')

@endsection

@section('custom_css')
<style>


:modal {
  background-color: white;
  border: 2px solid burlywood;
  border-radius: 5px;
}

dialog::backdrop {
  background: rgba(0,0,0,0.5);
}

  
</style>
<style>
  .carousel {
    position: relative;
    box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
    height:100%;
}

.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 100%;
}


.carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
}



.carousel-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
}

.carousel-item img {
    display: block;
    height: auto;
    max-width: 100%;
    height: 100%;
}




.carousel-control {
    background: rgba(0, 0, 0, 0.28);
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    /*z-index: 10;*/
}

.carousel-control.prev {
    left: 2%;
}

.carousel-control.next {
    right: 2%;
}

.carousel-control:hover {
    background: rgba(0, 0, 0, 0.8);
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3 {
    display: block;
}



.carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    /*z-index: 10;*/
}

.carousel-indicators li {
    display: inline-block;
    margin: 0 5px;
}



.carousel-bullet {
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 35px;
}

.carousel-bullet:hover {
    color: #aaaaaa;
}



#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #428bca;
}



#title {
    width: 100%;
    position: absolute;
    padding: 0px;
    margin: 0px auto;
    text-align: center;
    font-size: 27px;
    color: rgba(255, 255, 255, 1);
    font-family: 'Open Sans', sans-serif;
    z-index: 9999;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
}
</style>
<style>
  .maxHeightOneAdDestop{
    max-height: 290px;
  }

  @media only screen and (max-width: 765px){
    .maxHeightOneAdDestop{
      max-height: none;
    }
  }
</style>
@endsection

@section('content')

<dialog 
              id="favDialog"
              class="bg-blanc col-6 col-md-10 col-s-12"
              style="
                left: 50%;
                position: absolute;
                border-radius: 8px;
                border: 1px solid #707070;
                justify-content: flex-start;
                transform: translate(-50%);
                padding: 0;
              "
            >
              <div
                class="row wd-100 bg-vert-fort blanc justify-content-space-between"
                style="
                  align-items: center;
                  border-top-left-radius: 8px;
                  border-top-right-radius: 8px;
                  border: 1px solid #707070;
                "
              >
                <p class="wd-10"></p>
                <p
                  class="wd-90 items-center justify-content-center"
                  style=" margin: 1.5em; font-family: azo-sans-web; font-size: 18px; font-weight: 700; "
                >
                  Options
                </p>
                <div class="wd-10 cursorPointer">
                    <div id="hideModalDestop">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"/></svg>
                    </div>
                </div>
              </div>
              <div class="column" style=" padding: 6%; ">                      
                <div class="column" style=" gap: 20px; ">
                  <div class="afficherPartTypeEspaceMobile">
                    <h3 class="titleCreatePropertyH5" style="padding-bottom: 3%;">Type d'espace de travail</h3>
                    <ul style="list-style: none;margin:0;" class="col-12 typeSpaceWork">
                      <li style="width: 100%; color: black; text-align: left;">
                        <input class="form-check-input" type="checkbox" id="bureau" style="margin-right: 2%;" value="2">
                        <label class="form-check-label ml-3" for="bureau" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                              Bureaux
                        </label>
                      </li>
                      <li style="width: 100%; color: black; text-align: left;">
                        <input class="form-check-input" type="checkbox" id="coworking" style="margin-right: 2%;" value="1">
                        <label class="form-check-label ml-3" for="coworking" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                              Coworking
                        </label>
                      </li>
                    </ul>
                  </div>
                  <h3 class="titleCreatePropertyH5">Type de contrat</h3>
                  <div class="flex-wrap-row">
                    <ul style="list-style: none;margin:0;" class="col-12 typeSpaceWork">
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="prestationService1" style="margin-top:1%;margin-right:2%;" value="1">
                          <label class="form-check-label ml-3" for="prestationService1" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Bail commercial
                          </label>
                        </div>
                      </li>
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="sousLocation" style="margin-top:1%;margin-right:2%;" value="2">
                          <label class="form-check-label ml-3" for="sousLocation" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Bail Precaire
                          </label>
                        </div>
                      </li>
                    </ul>
                    <ul style="list-style: none;margin:0;" class="col-12 typeSpaceWork">
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="bailDerogatoire" style="margin-top:1%;margin-right:2%;" value="3">
                          <label class="form-check-label ml-3" for="bailDerogatoire" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Bail dérogatoire
                          </label>
                        </div>
                      </li>
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="prestationService1" style="margin-top:1%;margin-right:2%;" value="4">
                          <label class="form-check-label ml-3" for="prestationService1" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Bail Contrat Prestation Service
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!--<Divider />-->
                </div>
                <!--Debut test nbposte-->
                <div class="column partNbPosteMobileSurfaceLoyer">
                  <div class="column justify-content-center" style=" gap: 0.5em; margin: 2em 2em 1.5em 2em; ">
                    <div class="column" style=" width: 48%; ">
                      <a class="azoSansBold">Nombre minimum</a>
                      <input
                        type="number"
                        min="0"
                        placeholder="1 poste"
                        class="baseInput"
                        value=""
                        id="posteMinMobile"

                      />
                    </div>
                    <div class="column wd-50" style=" width: 48%; ">
                      <a class="azoSansBold">Nombre maximum</a>
                      <input
                        type="number"
                        min="0"
                        placeholder="+50 postes"
                        class="baseInput"
                        value=""
                        id="posteMaxMobile"
                      />
                    </div>
                  </div>
                  <div class="column justify-content-center" style=" gap: 0.5em; margin: 2em 2em 1.5em 2em; ">
                    <div class="column" style="width: 48%;">
                      <label>Surface minimum</label>
                      <input
                        min="0"
                        type="number"
                        placeholder="0 m²"
                        class="baseInput"
                        value=""
                        id="surfaceMinMobile"
                      />
                    </div>
                    <div class="column wd-50" style="width: 48%;">
                      <label>Surface maximum</label>
                      <input
                        min="0"
                        type="number"
                        class="baseInput"
                        placeholder="2 000 + m²"
                        value=""
                        id="surfaceMaxMobile"
                      />
                    </div>
                  </div>
                  <div class="column justify-content-center" style=" gap: 0.5em; margin: 2em 2em 1.5em 2em; ">
                    <div class="column wd-50">
                      <a class="azoSansBold">Loyer minimum</a>
                      <input
                        min="0"
                        type="number"
                        placeholder="0 €"
                        value=""
                        class="baseInput"
                        id="rentMinMobile"
                      />
                    </div>
                    <div class="column wd-50">
                      <a class="azoSansBold">Loyer maximum</a>
                      <input
                        min="0"
                        type="number"
                        class="baseInput"
                        value=""
                        placeholder="50 000+ €"
                        id="rentMaxMobile"
                      />
                    </div>
                  </div>
                </div>
                <!--Fin test nbposte -->
                <!--<Divider />-->
                <div class="column">
                  <h3 class="titleCreatePropertyH5">Services inclus</h3>
                  <ul style="list-style: none;" class="col-12"></ul>
                </div>
                <div id="serviceBase">
                </div>
              </div>
              <div class="wd-100 items-center justify-content-space-between bg-vert-fort" style=" height: 100; ">
                <a
                  class="buttonBackStepper buttonUnderlineFindADestop"
                  style=" margin-left: 5%; margin-top: 2%;"
                  id="resetService"
                >
                  Réinitialiser
                </a>
                <button
                  style=" margin-right: 5%; border: none; "
                  class="buttonSaveStepper buttonBlackToWhite"
                  id="serviceButton"
                >
                  Afficher les annonces
                </button>
              </div>
            
            <!-- </div> bettuzzi -->
            <div id="serviceBase">
            </div>
            <!--Fin modal options -->
</dialog>

<div
      class="row wd-100 items-center navBarDiv"
      style="
        gap: 1em;
        display: flex;
        padding: 10px 0 10px 5%;
        position: fixed;
        margin-top: 90px;
        background-color: #fff;
        z-index: 2;
      "
    >
      <div class="wd-20 items-center mobile-withSearchBarFindOneDestop">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
        <input
          id="placeInput"
          class="asoSansRegular col-12"
          style="
            border: none;
            height: 70px;
            outline: none;
          "
          placeholder="Ville, Code Postal, Rue"
        />
          <!--debut si divisible -->
          <span >
            <!--<KeyboardArrowDownIcon style=" font-size: 200%; " />-->
          </span>
          <!--fin si divisible -->  
      </div>
      
      @if(isset($mesRechercheUserFiu))
      @if(Session::get('usersigne')==1)
      <div
        style="
          height: 72px;
          border-left: 1px solid #DDDDDD;
          padding-left: 1%;
        "
        class="items-center tooltipOfficeType"
      >
        <a class="asoSansRegular items-center asoSansRegular textAlignMesRechercheMenuTitleMobile" style=" white-space: nowrap; ">
          Mes recherches
          <svg xmlns="http://www.w3.org/2000/svg" height="17" viewBox="0 0 24 24" width="17"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path></svg>
        </a>
        <div
          class="tooltipOfficeTypetext widthMesRecherches"
          style="
            gap: 0px;
            display: flex;
            flex-direction: column;
          "
        >
        <div style="padding: 5%;">
          <ul style="list-style: none;padding: 0;" class="typeSpaceWork">
                  @foreach($mesRechercheUserFiu['data']['result'] as $uneRechercheUserFiu)
                    @if($uneRechercheUserFiu['demande_active'] == 1)
                    <li style="width: 100%; color: black; text-align: left;">
                      <input class="form-check-input" type="checkbox" id="demande-{{$uneRechercheUserFiu['demande_id']}}" style="margin-right: 7%;" value="{{$uneRechercheUserFiu['demande_id']}}">
                      <label class="form-check-label ml-3" for="demande-{{$uneRechercheUserFiu['demande_id']}}">
                            {{$uneRechercheUserFiu['nomRecherche']}} ({{$uneRechercheUserFiu['demande_id']}})
                      </label>
                    </li>
                    @endif
                  @endforeach
                  @empty($mesRechercheUserFiu['data']['result'])
                    <p style="font-size: 1.5rem;">Contactez votre consultant pour les recherches.</p>
                  @endempty
          </ul>
        </div>
        <div class="wd-100 items-center mesRecherches-content-space-between paddingLeftButtonMesRechercheMobile minWidthPartButtonMesRecherches">
            <a
              class="buttonBackStepper gris-fonce fontSizeReinitiliserMesRecherchesMobile"
              style=" margin-left: 5%; margin-top: 2%; " 
              id="resetRechercheFiuUser"
            >
              Réinitialiser
            </a>
            <button
              class="buttonSaveStepper asoSansRegular fontSizeAfficherAnnoncesMobile marginRightAfficherLesAnnoncesMesRecherches"
              style="width: 53%; padding: 0; border: 0; height: 58px; "
              id="resultRechercheFiuUser"
            >
              Afficher les annonces 
            </button>
        </div>
        </div>
      </div>
      @endif
      @endif
      <div
        style="
          height: 72px;
          border-left: 1px solid #DDDDDD;
          padding-left: 1%;
        "
        class="items-center tooltipOfficeType hideFindOneDestopMenu"
      >
        <a class="asoSansRegular items-center asoSansRegular" style=" white-space: nowrap; ">
          Type d'espace de travail
          <svg xmlns="http://www.w3.org/2000/svg" height="17" viewBox="0 0 24 24" width="17"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path></svg>
        </a>
        <div
          class="tooltipOfficeTypetext"
          style="
            gap: 0px;
            display: flex;
            flex-direction: column;
            width: 245px;
          "
        >
        <div style="padding: 5%;">
          <ul style="list-style: none;padding: 0;" class="typeSpaceWork">
            <li style="width: 100%; color: black; text-align: left;">
              <input class="form-check-input" type="checkbox" id="bureau" style="margin-right: 7%;" value="2">
              <label class="form-check-label ml-3" for="bureau">
                    Bureaux
              </label>
            </li>
            <li style="width: 100%; color: black; text-align: left;">
              <input class="form-check-input" type="checkbox" id="coworking" style="margin-right: 7%;" value="1">
              <label class="form-check-label ml-3" for="coworking">
                    Coworking
              </label>
            </li>
          </ul>
        </div>
        </div>
      </div>
      <div
        class="tooltipCapacity items-center hideFindOneDestopMenu"
        style="
          height: 72px;
          border-left: 1px solid #DDDDDD;
        "
      >
        <a
          class="justify-content-center items-center circleMenuItemFindADestop"
          style="
            width: 185px;
            height: 44px;
            padding: 3%;
            margin-left: 5%;
            border-radius: 31px;
            background-color: #F7F7F7;
          "
        >
          Postes / Superficie
        </a>
    
        <div
          class="tooltipCapacitytext"
          style="
            padding: 0 10% 10% 10%;
            display: flex;
            text-align: left;
            flex-direction: column;
            width: 451px;
          "
        >
          <div
            class="row wd-100 justify-content-center"
            style="
              gap: 0.5em;
              margin: 2em 2em 1.5em 2em;
            "
          >
            <div class="column" style=" width: 48%; ">
              <a class="azoSansBold">Nombre minimum</a>
              <input
                type="number"
                min="0"
                placeholder="1 poste"
                class="baseInput"
                value=""
                id="posteMin"

              />
            </div>
            <div class="column wd-50" style=" width: 48%; ">
              <a class="azoSansBold">Nombre maximum</a>
              <input
                type="number"
                min="0"
                placeholder="+50 postes"
                class="baseInput"
                value=""
                id="posteMax"
              />
            </div>
          </div>
          <!-- Debut test superficie -->
          <div class="row wd-100 justify-content-center" style="gap: 0.5em; margin-bottom: 2em;">
              <div class="column" style="width: 48%;">
                <label>Surface minimum</label>
                <input
                  min="0"
                  type="number"
                  placeholder="0 m²"
                  class="baseInput"
                  value=""
                  id="surfaceMin"
                />
              </div>
              <div class="column wd-50" style="width: 48%;">
                <label>Surface maximum</label>
                <input
                  min="0"
                  type="number"
                  class="baseInput"
                  placeholder="2 000 + m²"
                  value=""
                  id="surfaceMax"
                />
              </div>
          </div>
          <!-- Fin test superficie -->
          <div class="wd-100 items-center justify-content-space-between ">
            <a
              class="buttonBackStepper gris-fonce"
              style=" margin-left: 2%; margin-top: 2%; " 
              id="resetPoste"
            >
              Réinitialiser
            </a>
            <button
              class="buttonSaveStepper asoSansRegular"
              style=" margin-right: 0%; width: 53%; padding: 0; border: 0; height: 58px; "
              id="ButtonPosteSuperficie"
            >
              Afficher les annonces 
            </button>
          </div>
        </div>
    
      </div>
      <div class="items-center tooltipDisponibility hideFindOneDestopMenu">
        <a
          class="justify-content-center items-center circleMenuItemFindADestop"
          style="
            width: 185px;
            height: 44px;
            border-radius: 31px;
            background-color: #F7F7F7;
          "
        >
          Disponibilité
        </a>
        <div class="tooltipDisponibilitytext" style="display: flex; margin-top: 2%; padding: 0px 10%; flex-direction: column;">
          <div class="column wd-100" style="margin-top: 2%; padding-top: 3%;">
            <a class="azoSansBold"> Date de disponibilité</a>
            <input min="0" type="date" placeholder="JJ / MM / AA" class="baseInput asoSansRegular wd-100"  id="startDate" value="">
          </div>
          <div class="row wd-100 justify-content-center" style="gap: 1em; margin: 1em;"></div>
          <div class="row items-center justify-content-space-between" style="margin-bottom: 5%;">
            <div class="col-5">
              <a class="buttonBackStepper gris-fonce col-6" style="margin-left: 0%; padding-left: 5%;" id="resetDispo">Réinitialiser</a>
            </div>
            <div class="col-7">
              <button class="buttonSaveStepper asoSansRegular col-6" style="margin-right: 0%; width: 100%; white-space: pre; border: none;" id="buttonDate">Afficher les annonces</button>
            </div>
          </div>
        </div>
      </div>
      <div
        class="items-center tooltipRent hideFindOneDestopMenu"
        style="
          height: 72px;
        "
      >
        <a
          class="asoSansRegular justify-content-center items-center wd-100 circleMenuItemFindADestop"
          style="
            width: 185px;
            height: 43px;
            padding: 3%;
            margin-left: 5%;
            border-radius: 31px;
            background-color: #F7F7F7;
          "
        >
          Loyer mensuel
        </a>
        <div
          class="tooltipRenttext"
          style="
            padding: 0 12% 12% 12%;
            display: flex;
            text-align: left;
            flex-direction: column;
            width: 467px;
          "
        >
          <div
            class="row wd-100 justify-content-center"
            style="
              gap: 0.5em;
              margin: 2em 2em 1em 2em;
              padding-left: 1%;
              padding-right: 1%;
            "
          >
            <div class="column wd-50">
              <a class="azoSansBold">Loyer minimum</a>
              <input
                min="0"
                type="number"
                placeholder="0 €"
                value=""
                class="baseInput"
                id="rentMin"
              />
            </div>
            <div class="column wd-50">
              <a class="azoSansBold">Loyer maximum</a>
              <input
                min="0"
                type="number"
                class="baseInput"
                value=""
                placeholder="50 000+ €"
                id="rentMax"
              />
            </div>
          </div>
          <div class="wd-100 items-center justify-content-space-between ">
            <a
              class="buttonBackStepper gris-fonce"
              style=" margin-left: 2%; margin-top: 2%;"
              id="resetRent"
            >
              Réinitialiser
            </a>
            <button
              class="buttonSaveStepper asoSansRegular"
              style=" margin-right: 0%; width: 56%; border: none; "
              id="buttonRent"
            >
              Afficher les annonces
            </button>
          </div>
        </div>
      </div>
      <div class="wd-10 items-center hideFindOneDestopMenu tooltipOption">
        <a
          class="asoSansRegular justify-content-center items-center circleMenuItemFindADestop"
          style="
            width: 97px;
            height: 43px;
            padding: 3%;
            margin-left: 5%;
            border-radius: 31px;
            background-color: #F7F7F7;
          "
          id="modalOptionDestop"
        >
          Options
        </a>
        
        
         
            <!--Debut modal options -->
        {{--     
        <dialog 
              id="favDialog"
              class="bg-blanc col-6 col-md-10 col-s-12"
              style="
                left: 50%;
                position: absolute;
                border-radius: 8px;
                border: 1px solid #707070;
                justify-content: flex-start;
                transform: translate(-50%);
                padding: 0;
              "
            >
              <div
                class="row wd-100 bg-vert-fort blanc justify-content-space-between"
                style="
                  align-items: center;
                  border-top-left-radius: 8px;
                  border-top-right-radius: 8px;
                  border: 1px solid #707070;
                "
              >
                <p class="wd-10"></p>
                <p
                  class="wd-90 items-center justify-content-center"
                  style=" margin: 1.5em; font-family: azo-sans-web; font-size: 18px; font-weight: 700; "
                >
                  Options
                </p>
                <div class="wd-10 cursorPointer">
                    <div id="hideModalDestop">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"/></svg>
                    </div>
                </div>
              </div>
              <div class="column" style=" padding: 6%; ">                      
                <div class="column" style=" gap: 20px; ">
                  <h3 class="titleCreatePropertyH5">Type de contrat</h3>
                  <div class="flex-wrap-row">
                    <ul style="list-style: none;margin:0;" class="col-12 typeSpaceWork">
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="prestationService1" style="margin-top:1%;margin-right:2%;" value="1">
                          <label class="form-check-label ml-3" for="prestationService1" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Bail commercial
                          </label>
                        </div>
                      </li>
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="sousLocation" style="margin-top:1%;margin-right:2%;" value="2">
                          <label class="form-check-label ml-3" for="sousLocation" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Bail Precaire
                          </label>
                        </div>
                      </li>
                    </ul>
                    <ul style="list-style: none;margin:0;" class="col-12 typeSpaceWork">
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="bailDerogatoire" style="margin-top:1%;margin-right:2%;" value="3">
                          <label class="form-check-label ml-3" for="bailDerogatoire" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Bail dérogatoire
                          </label>
                        </div>
                      </li>
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="prestationService1" style="margin-top:1%;margin-right:2%;" value="4">
                          <label class="form-check-label ml-3" for="prestationService1" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Bail Contrat Prestation Service
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!--<Divider />-->
                </div>
                <!--<Divider />-->
                <div class="column">
                  <h3 class="titleCreatePropertyH5">Services inclus</h3>
                  <ul style="list-style: none;" class="col-12"></ul>
                </div>
                <div id="serviceBase">
                </div>
              </div>
              <div class="wd-100 items-center justify-content-space-between bg-vert-fort" style=" height: 100; ">
                <a
                  class="buttonBackStepper buttonUnderlineFindADestop"
                  style=" margin-left: 5%; margin-top: 2%;"
                  id="resetService"
                >
                  Réinitialiser
                </a>
                <button
                  style=" margin-right: 5%; border: none; "
                  class="buttonSaveStepper buttonBlackToWhite"
                  id="serviceButton"
                >
                  Afficher les annonces
                </button>
              </div>
            
            <!-- </div> bettuzzi -->
            <div id="serviceBase">
            </div>
            <!--Fin modal options -->
        </dialog>
        --}}
      </div>
      <div
        style="
          height: 72px;
          border-left: 1px solid #DDDDDD;
          padding-left: 3%;
        "
        class="items-center tooltipOfficeType hideShowFilterFindOneDestop"
      >
        <a style=" display: flex; " id="modalOptionDestop2">
          <img  src="{{url('/assets/img/Groupe-282.png')}}"   width="22.03px" height="21.81px" alt="icône noire représentant une balance stylisée avec plusieurs niveaux, évoquant un système de filtrage ou des options de tri" />
          <span style=" padding-top: 0.5%; font-size: 1.9rem; ">Filtrer</span>
        </a>
        <div>
          <!--
          <Modal
            open="open"
            onClose="handleClose"
            keepMounted
            style=" overflow: auto; display: flex; "
            class="scrollbar"
          >
            <OptionsModal
              params="params"
              setParams={setParams}
              infos="infos"
              handleClose={handleClose}
            />
          </Modal>
          <Modal
            open={openMobile}
            onClose={handleCloseMobile}
            keepMounted
            style=" overflow: auto; display: flex; "
            class="scrollbar"
          >
            <OptionsModalMobile
              params={params}
              setParams={setParams}
              infos={infos}
              handleClose={handleCloseMobile}
            />
          </Modal>
          -->
        </div>
          <!-- Debut test The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <p>Some text in the Modal..</p>
            </div>

          </div>
          <!-- Fin test The Modal -->
      </div>
    </div>
    <div class="row wd-100">
          <div
            class="column col-6 col-m-12 marginTopAroundPartFindADestop"
            style="
              padding: 1% 2% 1% 2%;
              min-height: 100vh;
            "
          >
            <h1 class="font-m"> Location de bureaux et coworking </h1>
            <div class="row wd-100 justify-content-space-between menuFilter-destop">
              <p class="row" style=" margin: 1em 0; font-family: azo-sans-web; font-size: 18px; ">
                Île de France : <b style=" marginLeft: 5px; " id="countOffres"> count annonces </b>
              </p>
              <div class="row  justify-content-center gapContentFilterFindADestop items-center">
                <a
                  class="cursorPointer asoSansRegular filterDisplay"
                  style=" white-space: nowrap; "
                  id="pertinence"
                >
                  Pertinence
                </a>
                <a
                  class="cursorPointer asoSansRegular filterDisplay"
                  style=" white-space: nowrap; "
                  id="recent"
                >
                  Le plus récent
                </a>
                <a
                  class="cursorPointer asoSansRegular filterDisplay"
                  style=" white-space: nowrap; "
                  id="moinsCher"
                >
                  Le moins cher
                </a>
              </div>
            </div>
            <!-- debut tri mobile -->
            <div class="menuFilter-mobile">
              <p class="row" style=" margin: 1em 0; font-family: azo-sans-web; font-size: 18px; ">
                <b style=" margin-left: 5px; " id="countOffresMobile"> count annonces </b>
              </p>
              <div
                style="
                  height: 72px;
                  margin-left: auto;
                "
                class="items-center tooltipOfficeType"
              >
                <a style=" padding-bottom: 1%; ">
                  Tri: pertinence
                  <!--<KeyboardArrowDownIcon />-->
                </a>
                <div
                  class="tooltipOfficeTypetext"
                  style="
                    gap: 0px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                  "
                >
                  
                    <div class="column">
                      <!--
                      <MenuItem key="order.id" class="col-6 col-m-6 col-s-6">
                        <Checkbox checked="false" />
                        <ListItemText primary="order.label" />
                      </MenuItem>
                      -->
                      
                      <a
                        class="cursorPointer asoSansRegular filterDisplay"
                        style=" white-space: nowrap; "
                        id="pertinence"
                      >
                        Pertinence
                      </a>
                      <a
                        class="cursorPointer asoSansRegular filterDisplay"
                        style=" white-space: nowrap; "
                        id="recentMobile"
                      >
                        Le plus récent
                      </a>
                      <a
                        class="cursorPointer asoSansRegular filterDisplay"
                        style=" white-space: nowrap; "
                        id="moinsCherMobile"
                      >
                        Le moins cher
                      </a>
                      
                    </div>
                  
                </div>
              </div>
            </div>
            <!-- fin -->
            
              
            <div
              class="propertyThumbnail"
              style="
                    margin-top: 2%;
              "
            >
            </div>
            <div id="pagination-container"></div>
            
          </div>
          <div
            class="column col-6 col-m-0 col-s-0 position-fixed"
            style="
              margin-left: 50%;
              margin-top: 8%;
            "
          >
          <div id="map_2" style="height: 100vh;"></div>
        </div>
      </div>
      <input type="hidden" id="verifResult" value="0">
      @if($textLocationOrCoworking !== '')
      <div class="row">
        <div class="col-12 bg-blanc paddingContentTextCategory position-relative" id="partTextLocationCoworking">
              {!! $textLocationOrCoworking['content'] !!}
        </div>
      </div>
      @endif
      @endsection
      
@section('scripts')
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhuR1erE3ZS9EEgqm9-czUxo6uPQbR5k8&libraries=places&callback=initAutocomplete&loading=async" type="text/javascript">
  </script>
  <script>
    let count = 26; // Example count
    const limit = 25; // Example limit
    let pageNumber = 1; // Current page number
    let pageMax = Math.ceil(count / limit); // Maximum page number

    function prevPage() {
        if (pageNumber > 1) {
            pageNumber--;
            renderPagination()
            rechercheProperty()
        }
    }

    function nextPage() {
        if (pageNumber < pageMax) {
            pageNumber++;
            renderPagination()
            rechercheProperty()
        }
    }

    function goFirstPage() {
        pageNumber = 1;
        renderPagination()
        rechercheProperty()
    }

    function goLastPage() {
        pageNumber = pageMax;
        renderPagination();
        rechercheProperty()
    }

    function updateCount(newCount) {
        count = newCount;
        pageMax = Math.ceil((count / limit))
        renderPagination();
    }

    function renderPagination() {
        const container = document.getElementById('pagination-container');
        container.innerHTML = '';
      // console.log("count:", count, "pageMax:", pageMax, "pageNumber:", pageNumber)
        if (count > limit) {
            const div = document.createElement('div');
            div.className = 'justify-content-center';

            if (pageNumber !== 1) {
                const imgPrev = document.createElement('img');
                imgPrev.src = `{{url('/assets/img/round-arrow-left.png')}}`;
                imgPrev.width = 30;
                imgPrev.height = 30;
                imgPrev.onclick = prevPage;
                div.appendChild(imgPrev);

                const firstPageLink = document.createElement('a');
                firstPageLink.innerText = '1';
                firstPageLink.onclick = goFirstPage;
                div.appendChild(firstPageLink);

                if (pageNumber !== 2 && pageNumber !== 3) {
                    const dots = document.createElement('a');
                    dots.innerText = '...';
                    div.appendChild(dots);
                }
            }

            if (pageNumber !== 1 && pageNumber - 1 !== 1) {
                const prevPageLink = document.createElement('a');
                prevPageLink.innerText = pageNumber - 1;
                prevPageLink.onclick = prevPage;
                div.appendChild(prevPageLink);
            }

            const currentPageDiv = document.createElement('div');
            currentPageDiv.className = 'pagination items-center';
            const currentPageLink = document.createElement('a');
            currentPageLink.innerText = pageNumber;
            currentPageDiv.appendChild(currentPageLink);
            div.appendChild(currentPageDiv);

            if (pageNumber !== pageMax) {
                if (pageMax !== pageNumber + 1) {
                    const nextPageLink = document.createElement('a');
                    nextPageLink.innerText = pageNumber + 1;
                    nextPageLink.onclick = nextPage;
                    div.appendChild(nextPageLink);
                }

                if (pageNumber !== pageMax - 1 && pageNumber !== pageMax - 2) {
                    const dots = document.createElement('a');
                    dots.innerText = '...';
                    div.appendChild(dots);
                }

                const lastPageLink = document.createElement('a');
                lastPageLink.innerText = pageMax;
                lastPageLink.onclick = goLastPage;
                div.appendChild(lastPageLink);

                const imgNext = document.createElement('img');
                imgNext.src = `{{url('/assets/img/round-arrow-right.png')}}`;
                imgNext.width = 30;
                imgNext.height = 30;
                imgNext.onclick = nextPage;
                div.appendChild(imgNext);
            }
            offset = (pageNumber - 1) * limit;
            container.appendChild(div);
        }
    }

      document.addEventListener('DOMContentLoaded', function() {
        let selectedServiceIds = []
        async function fetchData() {
          let servicesData

          try {
            const response = await fetch(baseUrl+'area/infosOffre')
            servicesData = await response.json()
            const serviceTypes = servicesData.data.serviceTypes

            serviceTypes.forEach(type => {
              const container = document.getElementById('serviceBase')
              const typeContainer = document.createElement('div')
              typeContainer.className = 'service-type-container'

              const typeName = document.createElement('p')
              typeName.textContent = type.libelle_serviceTypeFiu
              typeName.className = 'titleCreatePropertyH4 abrilTextBold';
              typeContainer.appendChild(typeName)

              const list = document.createElement('ul')
              list.style.listStyle = 'none'
              list.className = 'col-12 typeSpaceWork'

              //ajout de checkbox services
              type.services.forEach(service => {
                const listItem = document.createElement('li')
                listItem.className = 'col-6'
                listItem.style.color = 'black'
                listItem.style.textAlign = 'left'
                listItem.style.heigth = '45px'
                listItem.style.display = 'flex'
                listItem.style.alignItems = 'center'

                const input = document.createElement('input')
                input.className = 'form-check-input modalCheckbox'
                input.type = 'checkbox'
                input.id = service.id_serviceFiu
                input.style.marginTop = '1%'
                input.style.marginRight = '2%'

                input.addEventListener('change', function() {
                  if (this.checked) {
                    if (!selectedServiceIds.includes(this.id)) {
                      selectedServiceIds.push(this.id)
                    }
                  } else {
                    selectedServiceIds = selectedServiceIds.filter(id => id !== this.id)
                  }
                })
                const label = document.createElement('label')
                label.className = 'form-check-label ml-3'
                label.style.fontFamily = 'azo-sans-web, sans-serif'
                label.style.fontSize = '1.8rem'
                label.style.fontWeight = '500'
                label.setAttribute('for', service.id_serviceFiu)
                label.textContent = service.libelle_serviceFiu

                listItem.appendChild(input)
                listItem.appendChild(label)
                list.appendChild(listItem)
              })

              typeContainer.appendChild(list)
              container.appendChild(typeContainer)
            })
          } catch (error) {
            console.error('Erreur lors du chargement des données:', error)
            // TODO: remove
            // if (env = dev) {
            //   alert('Erreur lors du chargement des données:', error)
            // }
          }
        }
        fetchData()
        renderPagination()
        document.getElementById('resetService').addEventListener('click', function() {
          document.querySelectorAll('.modalCheckbox').forEach(checkbox => {
            checkbox.checked = false
          })
          count = 1000
          selectedServiceIds = []
          service=""
          leaseType=[]
          posteMinMobile = document.getElementById("posteMinMobile").value = ""
          posteMaxMobile = document.getElementById("posteMaxMobile").value = ""
          surfaceMinMobile = document.getElementById("surfaceMinMobile").value = ""
          surfaceMaxMobile = document.getElementById("surfaceMaxMobile").value = ""
          rentMinMobile = document.getElementById("rentMinMobile").value = ""
          rentMaxMobile = document.getElementById("rentMaxMobile").value = ""
          if (window.innerWidth < 1200){ // si l'écran est responsive car le filtre bureau et coworking apparait dans Options en responsive
            document.getElementById('bureau').checked = false 
            document.getElementById('coworking').checked = false
            officeTypes = []
          }
          rechercheProperty()
        })
        document.querySelector('#serviceButton').addEventListener('click', function() {
          service = selectedServiceIds
          posteMinMobile = document.getElementById("posteMinMobile").value
          posteMaxMobile = document.getElementById("posteMaxMobile").value
          surfaceMinMobile = document.getElementById("surfaceMinMobile").value
          surfaceMaxMobile = document.getElementById("surfaceMaxMobile").value
          rentMinMobile = document.getElementById("rentMinMobile").value
          rentMaxMobile = document.getElementById("rentMaxMobile").value
          favDialog.close()
          rechercheProperty()
        })
      })
    document.querySelectorAll('#prestationService1, #sousLocation, #bailDerogatoire').forEach(checkbox => {
      checkbox.addEventListener('change', function() {
        if (this.checked) {
          if (!leaseType.includes(this.value)) {
            leaseType.push(this.value)
          }
        } else {
          leaseType = leaseType.filter(value => value !== this.value)
        }
      })
    })

    const elementDate = document.getElementById('buttonDate')
    elementDate.addEventListener("click", () => {
      startDate = document.getElementById("startDate").value
      rechercheProperty()
    })

    function resultSearchHtml(item, index) {
      //console.log(JSON.stringify(index) + ": " + JSON.stringify(item));
      // console.log(JSON.stringify(index) + ": " + JSON.stringify(item.offres_id));
      var elementOneOffre = document.querySelector(".propertyThumbnail");
      var arrayPhotoOffre = item.allPlanAndPhoto;
      //var allImageByOffreID = arrayPhotoOffre.forEach(AllImageHTML);
      var arrayControlLabel = item.arrayControlLabel;
      //arrayControlLabel.forEach(addCssControlLabel);
      var arrayLabelwithFor = item.arrayLabelwithFor;
      //arrayLabelwithFor.forEach(addCssLabelwithFor);
      var concatArrayControlLabelAndArrayLabelwithFor = item.concatArrayControlLabelAndArrayLabelwithFor;
      concatArrayControlLabelAndArrayLabelwithFor.forEach(addCsstestLabelControlFor);
      insertCss(".carousel" + item.testIndex + " {position: relative; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64); height:100%;} " +
          ".carousel-inner" + item.testIndex + " {position: relative; overflow: hidden; width: 100%; height: 100%;} " +
          ".carousel-open" + item.testIndex + ":checked + .carousel-item" + item.testIndex + " {position: static; opacity: 100;} " +
          ".carousel-item" + item.testIndex + " {position: absolute; opacity: 0; -webkit-transition: opacity 0.6s ease-out; transition: opacity 0.6s ease-out;} " +
          ".carousel-item" + item.testIndex + " img {display: block; height: auto; max-width: 100%; height: 100%;} " +
          ".carousel-indicators" + item.testIndex + " {list-style: none; margin: 0; padding: 0; position: absolute; bottom: 2%; left: 0; right: 0; text-align: center;} " +
          ".carousel-indicators" + item.testIndex + " li {display: inline-block; margin: 0 5px;} " +
          ".carousel-bullet" + item.testIndex + " {color: #fff; cursor: pointer; display: block; font-size: 35px;} " +
          ".carousel-bullet" + item.testIndex + ":hover {color: #aaaaaa;}");


      if(item.FIU_Rec_Detail_Euro_HTparMois > 0){
        if(item.FIU_Rec__DetailApartirde_parmois == 1){ var aPartir = "À partir de" }else{ var aPartir = "" }
        var LoyerEuroParMois = `<div style=" font-size: 1.6rem; text-decoration: none; align-self: flex-end; text-align: right;font-family: azo-sans-web, sans-serif; "><b>${aPartir} ${item.FIU_Rec_Detail_Euro_HTparMois.toLocaleString('fr-FR')} €</b> HT / mois</div>`
      }else{
        var LoyerEuroParMois = "";
      }
      if(item.FIU_Rec_DEtail_Euro_HTparPoste > 0){
        var loyerEuroParPoste = `<div style=" font-size: 1.6rem; text-decoration: none; align-self: flex-end; text-align: right;font-family: azo-sans-web, sans-serif; ">${item.FIU_Rec_DEtail_Euro_HTparPoste.toLocaleString('fr-FR')} € HT/ poste</div>`
      }else{
        var loyerEuroParPoste = "";
      }
      if(item.FIU_Rec_DEtail_Euro_m2parAN > 0){
        var loyerEuroParMetrecarreParAns = `<div style=" font-size: 1.6rem; text-decoration: none; align-self: flex-end; text-align: right;font-family: azo-sans-web, sans-serif; ">${item.FIU_Rec_DEtail_Euro_m2parAN.toLocaleString('fr-FR')} € HT / m² / an</div>`
      }else{
        var loyerEuroParMetrecarreParAns = "";
      }
      var userContactId = "{{ Session::get('fiuContactID')}}"
      var stringContactIdOffrefavoris = item.contactIdOffrefavoris
      var fillHeartOffre = "rgba(255,255,255,0.4)"
      if(stringContactIdOffrefavoris != null){
        var arrayContactidfavOffre = stringContactIdOffrefavoris.split(',')
        if(arrayContactidfavOffre.includes(userContactId)){
          fillHeartOffre = "pink"
        }
      }
      var emoticonHeart = ""
      var userSigne = "{{ Session::get('usersigne')}}"
      if(userSigne != ""){
        //var emoticonHeart = '<svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519"> <g id="Favoris" transform="translate(0.75 0.75)"> <path id="Icon_feather-heart" data-name="Icon feather-heart" d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z" transform="translate(-2.323 -4.497)" fill='+fillHeartOffre+' stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/> </g> </svg>'
        var FiuID = "{{Session::get('fiuID')}}"
        var OffreID = item.offres_id
        if(fillHeartOffre == "pink"){
          var baseUrl = "{{ url('modifyFavorisOffre') }}";
          var emoticonHeart = `
              <div href="${baseUrl}/${FiuID}/${OffreID}/1"
                data-url="${baseUrl}/${FiuID}/${OffreID}/1"
                class="cursorPointer enregistrerFav envoyerModifFavorisFiu"
                id="pinkheartpart"
                style="font: 22px azo-sans-web, sans-serif;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519">
                    <g id="Favoris" transform="translate(0.75 0.75)">
                        <path id="Icon_feather-heart" data-name="Icon feather-heart"
                              d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z"
                              transform="translate(-2.323 -4.497)"
                              fill="${fillHeartOffre}" stroke="#000" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="1.5">
                        </path>
                    </g>
                </svg>
              </div>
          `;
        }else{
          var baseUrl = "{{ url('modifyFavorisOffre') }}";
          var emoticonHeart = `
              <div href="${baseUrl}/${FiuID}/${OffreID}/0"
                data-url="${baseUrl}/${FiuID}/${OffreID}/0"
                class="cursorPointer enregistrerFav envoyerModifFavorisFiu"
                id="whiteheartpart"
                style="font: 22px azo-sans-web, sans-serif;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519">
                    <g id="Favoris" transform="translate(0.75 0.75)">
                        <path id="Icon_feather-heart" data-name="Icon feather-heart"
                              d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z"
                              transform="translate(-2.323 -4.497)"
                              fill="${fillHeartOffre}" stroke="#000" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="1.5">
                        </path>
                    </g>
                </svg>
              </div>
          `;
        }
      }
      let thedetail_Type_bureau = "";
      let thetitre_Annonce = "";
      let theVenteAnnuelCalculee ="";
      if(item.offreType_id == 2){
        thedetail_Type_bureau = item.listedesnatures +" - "+ Number(item.surfaceTotaleCom).toLocaleString('fr-FR', { minimumFractionDigits: 0, maximumFractionDigits: 0 }) +" m²";
        thetitre_Annonce = item.AdresseComplete;
        theVenteAnnuelCalculee = "<b>Prix vente :</b> "+Number(item.VenteAnnuelCalculee).toLocaleString('fr-FR', { minimumFractionDigits: 0, maximumFractionDigits: 0 })+" €";
      }else{
        thedetail_Type_bureau = item.FIU_Rec_Detail_Type_bureau;
        thetitre_Annonce = item.FIU_Rec__Titre_Annonce;
        theVenteAnnuelCalculee = "";
      }
      
      
      elementOneOffre.insertAdjacentHTML("afterbegin",`
        <div class="wd-100 part-oneAdDestop maxHeightOneAdDestop min_HeightOneAdDestop" style="border-radius: 15px;border: 1px solid #DDDDDD;margin-bottom: 2%;">
              <div class="col-5 blocSliderPhotoThumbnail">
                <a href="${item.onclickUrlFiu}" target="_blank"> 
                  <div style="position: relative;" class="row wd-100 justify-content-space-between items-center imgRadiusLeft imgRadiusRightMobile heightImageSliderFindADestop"> 
                      <!-- Debut test carousel 2-->
                      <div class="carousel${JSON.stringify(item.testIndex)} imgRadiusLeft imgRadiusRightMobile">
                          <div class="carousel-inner${JSON.stringify(item.testIndex)} imgRadiusLeft imgRadiusRightMobile">
                              ${item.carrouselImage}
                              ${JSON.stringify(item.htmlLabelFor)}
                              <ol class="carousel-indicators${JSON.stringify(item.testIndex)}">
                                  ${item.htmlCarouselOl}
                              </ol>
                          </div>
                      </div>
                      <!-- Fin test carousel 2 -->
                  </div>
                </a>
              </div>
              <a href="${item.onclickUrlFiu}" target="_blank" class="col-7">
              <div class="column col-12" style="padding: 20px; height:100%;">
                
                  <div class="row">
                      <p class="azoSansBold vert" style=" font-size: 1.7rem; padding-right: 10%;margin:0; ">${thedetail_Type_bureau}</p>
                      <div style="margin-left: auto;">${emoticonHeart}</div>
                  </div>
                  <div>
                      <p class="abrilTextRegular" style=" font-size: 2.6rem; margin-top: 0; margin-bottom: 0; ">${thetitre_Annonce}</p>
                      <p style=" font-size: 1.5rem; font-weight: 500; font-style: normal; font-family: azo-sans-web,sans-serif; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical; "> ${item.descriptionBien} </p>
                  </div>
                  <div class="row justify-content-space-between items-center" style=" margin-top: auto; ">
                          <div class=" bg-vert items-center justify-content-space-between" style=" gap: 5; width: 124; height: 31; padding: 2%; border-radius: 20px; border: none; ">
                              <img src="{{url('/assets/img/smiling-pastille.png')}}" width="24" height="20">
                              <p class="pastilleAnnonces">Nouveau</p> </div> <div class="column" style=" justify-content: flex-end; ">
                              ${LoyerEuroParMois}
                              ${loyerEuroParPoste}
                              ${loyerEuroParMetrecarreParAns}
                              ${theVenteAnnuelCalculee} 
                          </div> 
                      </div> 
                  </div>
                 
              </div>
              </a>
        </div>`
      )

      let inputCacheResultSearch = document.getElementById('verifResult');
      inputCacheResultSearch.value = '1'; //sa signifie qu'il a au moins un resultat trouvé
      //let slideIndex = 1;
      //insertCss(".mySlides"+JSON.stringify(item.testIndex)+" {display: block;}");
      //showSlides(slideIndex,JSON.stringify(item.testIndex));
      //initialiseDots(item.testIndex);
    }

    const elementRent = document.getElementById('buttonRent')
    elementRent.addEventListener("click", () => {
      rentMin = document.getElementById("rentMin").value
      rentMax = document.getElementById("rentMax").value
      rechercheProperty()
    })

    const element = document.getElementById('ButtonPosteSuperficie')
    element.addEventListener("click", () => {
      surfaceMin = document.getElementById("surfaceMin").value
      surfaceMax = document.getElementById("surfaceMax").value
      posteMin = document.getElementById("posteMin").value
      posteMax = document.getElementById("posteMax").value
      rechercheProperty()
    })
    
    let autocomplete
    let value_place = ''
    let surfaceMin = ''
    let surfaceMax = ''
    let surfaceMinMobile = ''
    let surfaceMaxMobile = ''
    let posteMin = ''
    let posteMax = ''
    let posteMinMobile = ''
    let posteMaxMobile = ''
    let rentMin = ''
    let rentMax = ''
    let rentMinMobile = ''
    let rentMaxMobile = ''
    let startDate = ''
    let tri = ''
    let service = ''
    let newCount = 0
    let leaseType = []
    let officeTypes = []
    let buttonResetClicked = false;
    globalThis.OldVarUrl = ''; //url pour conserver ancienne url
    let selectedValuesMesRecherches = []

    //Debut part bouton mes recherches
    const urlDemandeSearch = new URL(window.location.href);
    const paramDemandeIdUrl = urlDemandeSearch.searchParams.get('demandeID');
    var userConnected = "{{ Session::get('usersigne')}}"
    if(userConnected != ""){
      document.getElementById("resultRechercheFiuUser").addEventListener("click", function () {
      // Sélectionne tous les input dont l'id commence par "demande-" ET qui sont cochés
      const checkboxesMesRecherches = document.querySelectorAll("input[type='checkbox'][id^='demande-']:checked");

      // Récupère toutes les valeurs
      selectedValuesMesRecherches = Array.from(checkboxesMesRecherches).map(cb => cb.value);

      // Affiche dans la console (ou fais autre chose avec)
      console.log("Valeurs cochées des demandes :", selectedValuesMesRecherches);

      buttonResetClicked = true;
      rechercheProperty()

      });

      
      if(paramDemandeIdUrl != null){
        selectedValuesMesRecherches.push(paramDemandeIdUrl)
      }

      const checkboxesMesRecherche = document.querySelectorAll("input[type='checkbox'][id^='demande-']");

      document.getElementById('resetRechercheFiuUser').addEventListener('click', function() {
        checkboxesMesRecherche.forEach((checkbox) => {
          checkbox.checked = false;
        });
        buttonResetClicked = true;
        selectedValuesMesRecherches = [];
        rechercheProperty()
      })
      
    }else{
      if(paramDemandeIdUrl != null){
        favDialogConnexion.showModal()
        window.location.href = "{{url('/')}}"+"?showConnexionDemande=true&demandeID="+paramDemandeIdUrl
      }
    }
    //Fin part bouton mes recherches

    document.querySelectorAll('#bureau, #coworking').forEach(checkbox => {
      checkbox.addEventListener('change', function() {
        if (this.checked) {
          if (!officeTypes.includes(this.value)) {
            officeTypes.push(this.value)
          }
        } else {
          officeTypes = officeTypes.filter(value => value !== this.value)
        }
        rechercheProperty()
      })
    })


    //boutton reset pour la recherche
    document.getElementById('resetRent').addEventListener('click', function() {
      resetRentMin = document.getElementById('rentMin').value = ""
      resetRentMax = document.getElementById('rentMax').value = ""
      rentMin = ""
      rentMax = ""
      buttonResetClicked = true;
      rechercheProperty()
    })
    document.getElementById('resetPoste').addEventListener('click', function() {
      resetposteMin = document.getElementById('posteMin').value = ""
      resetPosteMax = document.getElementById('posteMax').value = ""
      resetsurfaceMin = document.getElementById('surfaceMin').value = ""
      resetsurfaceMax = document.getElementById('surfaceMax').value = ""
      posteMin = ""
      posteMax = ""
      surfaceMin = ""
      surfaceMax = ""
      if(window.location.href.indexOf("nbPostes=") != -1){
        // replace current URL with newURL, on remet l'url de base car la recherche depuis la page d'accueil envoie des paramètres dans l'url
        history.pushState({}, null, baseUrl+`location-bureau-entreprise`);
      }
      buttonResetClicked = true;
      rechercheProperty()
    })
    document.getElementById('resetDispo').addEventListener('click', function() {
      disponibilité = document.getElementById('startDate').value= ""
      startDate = ""
      buttonResetClicked = true;
      rechercheProperty()
    })
    document.getElementById('pertinence').addEventListener('click', function() {
      tri=""
      rechercheProperty()
    })
    document.getElementById('recent').addEventListener('click', function() {
      tri ="sortBy=createdAt&order=asc"
      rechercheProperty()
    })
    document.getElementById('moinsCher').addEventListener('click', function() {
      tri="sortBy=rent&order=asc"
      rechercheProperty()
    })
    document.getElementById('recentMobile').addEventListener('click', function() {
      tri ="sortBy=createdAt&order=asc"
      rechercheProperty()
    })
    document.getElementById('moinsCherMobile').addEventListener('click', function() {
      tri="sortBy=rent&order=asc"
      rechercheProperty()
    })


    function initAutocomplete() {
        const input = document.getElementById("placeInput")
        if(window.location.href.indexOf("location-bureau-paris-1") != -1 || window.location.href.indexOf("coworking-paris-1") != -1){
          //75001 Paris, France
          input.value = "75001 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-2") != -1 || window.location.href.indexOf("coworking-paris-2") != -1){
          //75002 Paris, France
          input.value = "75002 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-3") != -1 || window.location.href.indexOf("coworking-paris-3") != -1){
          //75003 Paris, France
          input.value = "75003 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-4") != -1 || window.location.href.indexOf("coworking-paris-4") != -1){
          //75004 Paris, France
          input.value = "75004 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-5") != -1 || window.location.href.indexOf("coworking-paris-5") != -1){
          //75005 Paris, France
          input.value = "75005 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-6") != -1 || window.location.href.indexOf("coworking-paris-6") != -1){
          //75006 Paris, France
          input.value = "75006 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-7") != -1 || window.location.href.indexOf("coworking-paris-7") != -1){
          //75007 Paris, France
          input.value = "75007 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-8") != -1 || window.location.href.indexOf("coworking-paris-8") != -1){
          //75008 Paris, France
          input.value = "75008 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-9") != -1 || window.location.href.indexOf("coworking-paris-9") != -1){
          //75009 Paris, France
          input.value = "75009 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-10") != -1 || window.location.href.indexOf("coworking-paris-10") != -1){
          //75010 Paris, France
          input.value = "75010 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-11") != -1 || window.location.href.indexOf("coworking-paris-11") != -1){
          //75011 Paris, France
          input.value = "75011 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-12") != -1 || window.location.href.indexOf("coworking-paris-12") != -1){
          //75012 Paris, France
          input.value = "75012 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-13") != -1 || window.location.href.indexOf("coworking-paris-13") != -1){
          //75013 Paris, France
          input.value = "75013 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-14") != -1 || window.location.href.indexOf("coworking-paris-14") != -1){
          //75014 Paris, France
          input.value = "75014 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-15") != -1 || window.location.href.indexOf("coworking-paris-15") != -1){
          //75015 Paris, France
          input.value = "75015 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-16") != -1 || window.location.href.indexOf("coworking-paris-16") != -1){
          //75016 Paris, France
          input.value = "75016 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-17") != -1 || window.location.href.indexOf("coworking-paris-17") != -1){
          //75017 Paris, France
          input.value = "75017 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-18") != -1 || window.location.href.indexOf("coworking-paris-18") != -1){
          //75018 Paris, France
          input.value = "75018 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-19") != -1 || window.location.href.indexOf("coworking-paris-19") != -1){
          //75019 Paris, France
          input.value = "75019 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-20") != -1 || window.location.href.indexOf("coworking-paris-20") != -1){
          //75020 Paris, France
          input.value = "75020 Paris, France"
        }
        if(window.location.href.indexOf("coworking-saint-lazare-paris") != -1 || window.location.href.indexOf("location-saint-lazare") != -1){
          //Saint Lazare, Paris, France
          input.value = "Saint Lazare, Paris, France"
        }
        if(window.location.href.indexOf("coworking-gare-lyon-paris") != -1 || window.location.href.indexOf("location-gare-de-lyon") != -1){
          //Place Louis Armand, Paris, France
          input.value = "Place Louis Armand, Paris, France"
        }
        if(window.location.href.indexOf("coworking-montparnasse-paris") != -1 || window.location.href.indexOf("location-montparnasse-paris") != -1){
          //17 Boulevard de Vaugirard, Paris, France
          input.value = "17 Boulevard de Vaugirard, Paris, France"
        }
        if(window.location.href.indexOf("coworking-boulogne-billancourt-paris") != -1 || window.location.href.indexOf("location-boulogne-billancourt") != -1){
          //92100 Paris, France
          input.value = "92100 Paris, France"
        }
        if(window.location.href.indexOf("coworking-levallois-perret") != -1 || window.location.href.indexOf("location-levallois-perret") != -1){
          //92300 Paris, France
          input.value = "92300 Paris, France"
        }
        if(window.location.href.indexOf("coworking-republique-paris") != -1 || window.location.href.indexOf("location-republique") != -1){
          //Place de la République, Paris, France
          input.value = "Place de la République, Paris, France"
        }
        if(window.location.href.indexOf("coworking-gare-du-nord-paris") != -1 || window.location.href.indexOf("location-gare-du-nord") != -1){
          //18 Rue de Dunkerque, 75010 Paris, France
          input.value = "18 Rue de Dunkerque, 75010 Paris, France"
        }
        if(window.location.href.indexOf("city=") != -1){
          let curentUrl = window.location.search;
          let urlParams = new URLSearchParams(curentUrl);
          let cityParams = urlParams.get('city')
          input.value = cityParams
        }
        if(window.location.href.indexOf("zipCode=") != -1){
          let curentUrl = window.location.search;
          let urlParams = new URLSearchParams(curentUrl);
          let codepostalParams = urlParams.get('zipCode')
          input.value = codepostalParams
        }
        if(window.location.href.indexOf("address=") != -1){
          let curentUrl = window.location.search;
          let urlParams = new URLSearchParams(curentUrl);
          let adressParams = urlParams.get('address')
          input.value = adressParams
        }
        const options = {
            componentRestrictions: { country: 'fr' },
            fields: ['address_components', 'geometry.location', 'place_id', 'formatted_address'],
        }
        autocomplete = new google.maps.places.Autocomplete(input, options)
        autocomplete.addListener("place_changed", onPlaceChange)

        // Initialize map after autocomplete
        initMap()

        input.addEventListener('input', function() {
        if (this.value === '') {
          value_place = ''
          rechercheProperty()
        }
      })
    }

    function rechercheProperty() {  
      let arrayQuery = []; // console.log('value_place: '+value_place)
      let urlBase = baseUrl+`area/search?`
      let changeManuallyValue = false
      let userfiuID = "{{Session::get('fiuID')}}"
      let useruuID = "{{Session::get('uuID')}}"
      
      if(value_place == ''){
        if(window.location.href.indexOf("location-bureau-paris-1") != -1){
            //75001 Paris, France
            arrayQuery.push(`zipCode=75001`)
        }
        if(window.location.href.indexOf("location-bureau-paris-2") != -1){
            //75002 Paris, France
            arrayQuery.push(`zipCode=75002`)
        }
        if(window.location.href.indexOf("location-bureau-paris-3") != -1){
            //75003 Paris, France
            arrayQuery.push(`zipCode=75003`)
        }
        if(window.location.href.indexOf("location-bureau-paris-4") != -1){
            //75004 Paris, France
            arrayQuery.push(`zipCode=75004`)
        }
        if(window.location.href.indexOf("location-bureau-paris-5") != -1){
            //75005 Paris, France
            arrayQuery.push(`zipCode=75005`)
        }
        if(window.location.href.indexOf("location-bureau-paris-6") != -1){
            //75006 Paris, France
            arrayQuery.push(`zipCode=75006`)
        }
        if(window.location.href.indexOf("location-bureau-paris-7") != -1){
            //75007 Paris, France
            arrayQuery.push(`zipCode=75007`)
        }
        if(window.location.href.indexOf("location-bureau-paris-8") != -1){
            //75008 Paris, France
            arrayQuery.push(`zipCode=75008`)
        }
        if(window.location.href.indexOf("location-bureau-paris-9") != -1){
            //75009 Paris, France
            arrayQuery.push(`zipCode=75009`)
        }
        if(window.location.href.indexOf("location-bureau-paris-10") != -1){
            //75010 Paris, France
            arrayQuery.push(`zipCode=75010`)
        }
        if(window.location.href.indexOf("location-bureau-paris-11") != -1){
            //75011 Paris, France
            arrayQuery.push(`zipCode=75011`)
        }
        if(window.location.href.indexOf("location-bureau-paris-12") != -1){
            //75012 Paris, France
            arrayQuery.push(`zipCode=75012`)
        }
        if(window.location.href.indexOf("location-bureau-paris-13") != -1){
            //75013 Paris, France
            arrayQuery.push(`zipCode=75013`)
        }
        if(window.location.href.indexOf("location-bureau-paris-14") != -1){
            //75014 Paris, France
            arrayQuery.push(`zipCode=75014`)
        }
        if(window.location.href.indexOf("location-bureau-paris-15") != -1){
            //75015 Paris, France
            arrayQuery.push(`zipCode=75015`)
        }
        if(window.location.href.indexOf("location-bureau-paris-16") != -1){
            //75016 Paris, France
            arrayQuery.push(`zipCode=75016`)
        }
        if(window.location.href.indexOf("location-bureau-paris-17") != -1){
            //75017 Paris, France
            arrayQuery.push(`zipCode=75017`)
        }
        if(window.location.href.indexOf("location-bureau-paris-18") != -1){
            //75018 Paris, France
            arrayQuery.push(`zipCode=75018`)
        }
        if(window.location.href.indexOf("location-bureau-paris-19") != -1){
            //75019 Paris, France
            arrayQuery.push(`zipCode=75019`)
        }
        if(window.location.href.indexOf("location-bureau-paris-20") != -1){
            //75020 Paris, France
            arrayQuery.push(`zipCode=75020`)
        }
        if(window.location.href.indexOf("location-boulogne-billancourt") != -1){
            //92100 Paris, France
            arrayQuery.push(`zipCode=92100`)
        }
        if(window.location.href.indexOf("location-gare-du-nord") != -1){
            let urlAdresseCoworking = encodeURI("18 Rue de Dunkerque 75010 Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=2`)
        }
        if(window.location.href.indexOf("location-gare-de-lyon") != -1){
            let urlAdresseCoworking = encodeURI("Pl. Louis Armand 75012 Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=2`)
        }
        if(window.location.href.indexOf("location-levallois-perret") != -1){
            arrayQuery.push(`zipCode=92300`)
        }
        if(window.location.href.indexOf("location-montparnasse") != -1){
            let urlAdresseCoworking = encodeURI("17 Boulevard de Vaugirard 75015 Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=2`)
        }
        if(window.location.href.indexOf("location-republique") != -1){
            let urlAdresseCoworking = encodeURI("Place de la République Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=2`)
        }
        if(window.location.href.indexOf("location-saint-lazare") != -1){
            let urlAdresseCoworking = encodeURI("13 Rue d'Amsterdam 75008 Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=2`)
        }
        if(window.location.href.indexOf("coworking-saint-lazare-paris") != -1){
            let urlAdresseCoworking = encodeURI("13 Rue d'Amsterdam 75008 Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-gare-lyon-paris") != -1){
            let urlAdresseCoworking = encodeURI("Pl. Louis Armand 75012 Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-montparnasse-paris") != -1){
            let urlAdresseCoworking = encodeURI("17 Boulevard de Vaugirard 75015 Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-boulogne-billancourt-paris") != -1){
            arrayQuery.push(`zipCode=92100`)
        }
        if(window.location.href.indexOf("coworking-levallois-perret") != -1){
            arrayQuery.push(`zipCode=92300`)
        }
        if(window.location.href.indexOf("coworking-republique-paris") != -1){
            let urlAdresseCoworking = encodeURI("Place de la République Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-gare-du-nord-paris") != -1){
            let urlAdresseCoworking = encodeURI("18 Rue de Dunkerque 75010 Paris")
            arrayQuery.push(`address=${urlAdresseCoworking}&radius=500&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-1") != -1){
            //75001 Paris, France
            arrayQuery.push(`zipCode=75001&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-2") != -1){
            //75002 Paris, France
            arrayQuery.push(`zipCode=75002&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-3") != -1){
            //75003 Paris, France
            arrayQuery.push(`zipCode=75003&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-4") != -1){
            //75004 Paris, France
            arrayQuery.push(`zipCode=75004&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-5") != -1){
            //75005 Paris, France
            arrayQuery.push(`zipCode=75005&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-6") != -1){
            //75006 Paris, France
            arrayQuery.push(`zipCode=75006&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-7") != -1){
            //75007 Paris, France
            arrayQuery.push(`zipCode=75007&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-8") != -1){
            //75008 Paris, France
            arrayQuery.push(`zipCode=75008&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-9") != -1){
            //75009 Paris, France
            arrayQuery.push(`zipCode=75009&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-10") != -1){
            //75010 Paris, France
            arrayQuery.push(`zipCode=75010&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-11") != -1){
            //75011 Paris, France
            arrayQuery.push(`zipCode=75011&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-12") != -1){
            //75012 Paris, France
            arrayQuery.push(`zipCode=75012&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-13") != -1){
            //75013 Paris, France
            arrayQuery.push(`zipCode=75013&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-14") != -1){
            //75014 Paris, France
            arrayQuery.push(`zipCode=75014&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-15") != -1){
            //75015 Paris, France
            arrayQuery.push(`zipCode=75015&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-16") != -1){
            //75016 Paris, France
            arrayQuery.push(`zipCode=75016&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-17") != -1){
            //75017 Paris, France
            arrayQuery.push(`zipCode=75017&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-18") != -1){
            //75018 Paris, France
            arrayQuery.push(`zipCode=75018&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-19") != -1){
            //75019 Paris, France
            arrayQuery.push(`zipCode=75019&officeTypes=1`)
        }
        if(window.location.href.indexOf("coworking-paris-20") != -1){
            //75020 Paris, France
            arrayQuery.push(`zipCode=75020&officeTypes=1`)
        }
      }
      if(value_place !== ''){
          arrayQuery.push(value_place)
          changeManuallyValue = true
          let partTextLocationCoworking = document.querySelector('#partTextLocationCoworking');
          if(partTextLocationCoworking !== null){
            var nodeList = document.querySelectorAll("#partTextLocationCoworking");
            if(nodeList.length >0){
                    for (let i = 0; i < nodeList.length; i++) {
                      nodeList[i].remove(); //on supprime le texte de la recherche précédente
                    }
            }
          }
      }
      if(window.location.href.indexOf("nbPostes=") != -1){
          let curentUrl = window.location.search
          let urlParams = new URLSearchParams(curentUrl);
          let nbPostesParamsMin = urlParams.get('nbPostes')
          arrayQuery.push(`capacityMin=${nbPostesParamsMin}`)
          document.getElementById('posteMin').setAttribute('value',nbPostesParamsMin);
      }
      let inputPlaceVal = document.getElementById("placeInput").value; //console.log('inputPlaceVal : ',inputPlaceVal)
      if(inputPlaceVal.length !== 0){
        //console.log('test123')
        //let typeCodepostal = false;
        /*
        if(containsNumber(inputPlaceVal.substr(0, 7)) == true){
          arrayQuery.push(`zipCode=${inputPlaceVal}`)
          let typeCodepostal = true;
        }
        */
        if(window.location.href.indexOf("zipCode=") != -1){
          if(validatePostcode(inputPlaceVal)){
            //typeCodepostal = true;            
            arrayQuery.push(`zipCode=${inputPlaceVal}`)
          }
        }
        /*
        if(containsLettersAndNumbers(inputPlaceVal) == true){
          //if adress
          console.log('validatePostcode(inputPlaceVal): '+validatePostcode(inputPlaceVal))
          if(validatePostcode(inputPlaceVal) == 'false'){
            let arrayAdress = inputPlaceVal.split(',');console.log('arrayAdress: ',arrayAdress)
            let formatAdress = arrayAdress[0]+arrayAdress[1];console.log('formatAdress: ',formatAdress)
            let adressEncode = encodeURI(formatAdress);
            //let adressEncode = encodeURI("45 rue de l'Est 92100 Boulogne Billancourt")
            arrayQuery.push(`address=${adressEncode}&radius=500`)
          }
        }else{
           let hasLetter = /[a-zA-Z]/.test(inputPlaceVal);
           if(hasLetter == true){
             //if city
             arrayQuery.push(`city=${inputPlaceVal}`)
           }
        }
        */
       console.log(window.location.href)
        if(window.location.href.indexOf("address=") != -1){
          if(containsLettersAndNumbers(inputPlaceVal) == true){
            //if adress
            //console.log('validatePostcode(inputPlaceVal): '+validatePostcode(inputPlaceVal))
            if(validatePostcode(inputPlaceVal) === false){
              let arrayAdress = inputPlaceVal.split(',');//console.log('arrayAdress: ',arrayAdress)
              // Add a check to prevent an error if there is no comma
              let formatAdress = arrayAdress.length > 1 ? arrayAdress[0] + arrayAdress[1] : inputPlaceVal;//console.log('formatAdress: ',formatAdress)
              let adressEncode = encodeURI(formatAdress);
              //let adressEncode = encodeURI("45 rue de l'Est 92100 Boulogne Billancourt")
              //arrayQuery.push(`address=${adressEncode}&radius=500`)
              arrayQuery.push(`address=${adressEncode}`)
            }
          }
        }
        if(window.location.href.indexOf("city=") != -1){
          let hasLetter = /[a-zA-Z]/.test(inputPlaceVal);          
           if(hasLetter == true){
             //if city
             arrayQuery.push(`city=${inputPlaceVal}`)
           }
        }
      }
      /* en test car bug quand reset*/
      if(buttonResetClicked === true){
        valueposteMin = document.getElementById('posteMin').value
        valuePosteMax = document.getElementById('posteMax').value
        valueStartDate = document.getElementById('startDate').value
        valueSurfaceMin = document.getElementById('surfaceMin').value
        valueSurfaceMax = document.getElementById('surfaceMax').value
        valueRentMin = document.getElementById('rentMin').value
        valueRentMax = document.getElementById('rentMax').value
        if((valueposteMin.length == 0 && valuePosteMax.length == 0 && valueSurfaceMin == 0 && valueSurfaceMax == 0) || valueStartDate.length == 0 || (valueRentMin.length == 0 || valueRentMax.length == 0)){
            //console.log('test après reset')
            //console.log('current valuePosteMin et Max: ',valueposteMin,valuePosteMax)
            let inputPlaceVal = document.getElementById("placeInput").value;//console.log('inputPlaceVal : ',inputPlaceVal)
            if(validatePostcode(inputPlaceVal)){
              //typeCodepostal = true;
              arrayQuery.push(`zipCode=${inputPlaceVal}`)
            }
            if(containsLettersAndNumbers(inputPlaceVal) == true){
              //if adress
              //console.log('validatePostcode(inputPlaceVal): '+validatePostcode(inputPlaceVal))
              if(typeof(validatePostcode(inputPlaceVal)) === false){
                let arrayAdress = inputPlaceVal.split(',');//console.log('arrayAdress: ',arrayAdress)
                let formatAdress = arrayAdress[0]+arrayAdress[1];//console.log('formatAdress: ',formatAdress)
                let adressEncode = encodeURI(formatAdress);
                //let adressEncode = encodeURI("45 rue de l'Est 92100 Boulogne Billancourt")
                arrayQuery.push(`address=${adressEncode}&radius=500`)
              }
              const regexAdresse = /^[0-9]+\s+[A-Za-zÀ-ÖØ-öø-ÿ\-\' ]+,\s+[0-9]{5}\s+[A-Za-zÀ-ÖØ-öø-ÿ\-\' ]+,\s+[A-Za-zÀ-ÖØ-öø-ÿ\-\' ]+$/;
              //console.log('test après reset part 2',regexAdresse.test(inputPlaceVal))
              if((regexAdresse.test(inputPlaceVal)) === true){
                  let arrayAdress = inputPlaceVal.split(',');//console.log('arrayAdress: ',arrayAdress)
                  let formatAdress = arrayAdress[0]+arrayAdress[1];//console.log('formatAdress: ',formatAdress)
                  let adressEncode = encodeURI(formatAdress);
                  //let adressEncode = encodeURI("45 rue de l'Est 92100 Boulogne Billancourt")
                  arrayQuery.push(`address=${adressEncode}&radius=500`)
              }
            }else{
              let hasLetter = /[a-zA-Z]/.test(inputPlaceVal);
              if(hasLetter == true){
                //if city
                arrayQuery.push(`city=${inputPlaceVal}`)
              }
            }
        }
      }
      /**/    
      if(tri !== ''){
          arrayQuery.push(tri)
          changeManuallyValue = true
      }
      if(leaseType.length > 0){
          arrayQuery.push(`leaseTypes=${leaseType.join(',')}`)
          changeManuallyValue = true
      }
      if(officeTypes.length > 0){
          arrayQuery.push(`officeTypes=${officeTypes.join(',')}`)
          changeManuallyValue = true
      }
      if(service.length > 0){
          arrayQuery.push(`services=${service}`)
          changeManuallyValue = true
        }
      if(surfaceMin !== ''){
          arrayQuery.push(`surfaceMin=${surfaceMin}`)
          changeManuallyValue = true
      }
      if(surfaceMax !== ''){
          arrayQuery.push(`surfaceMax=${surfaceMax}`)
          changeManuallyValue = true
      }
      if(surfaceMinMobile !== ''){
          arrayQuery.push(`surfaceMin=${surfaceMinMobile}`)
          changeManuallyValue = true
      }
      if(surfaceMaxMobile !== ''){
          arrayQuery.push(`surfaceMax=${surfaceMaxMobile}`)
          changeManuallyValue = true
      }
      if(posteMin !== ''){
        if(window.location.href.indexOf("nbPostes=") == -1){ // si c'est pas une recherche depuis la page d'accueil 
          arrayQuery.push(`capacityMin=${posteMin}`)
          changeManuallyValue = true
        }
      }
      if(posteMax !== ''){
          arrayQuery.push(`capacityMax=${posteMax}`)
          changeManuallyValue = true
      }
      if(posteMinMobile !== ''){
        if(window.location.href.indexOf("nbPostes=") == -1){ // si c'est pas une recherche depuis la page d'accueil 
          arrayQuery.push(`capacityMin=${posteMinMobile}`)
          changeManuallyValue = true
        }
      }
      if(posteMaxMobile !== ''){
          arrayQuery.push(`capacityMax=${posteMaxMobile}`)
          changeManuallyValue = true
      }
      if(rentMin !== ''){
          arrayQuery.push(`rentMin=${rentMin}`)
          changeManuallyValue = true
      }
      if(rentMax !== ''){
          arrayQuery.push(`rentMax=${rentMax}`)
          changeManuallyValue = true
      }
      if(rentMinMobile !== ''){
          arrayQuery.push(`rentMin=${rentMinMobile}`)
          changeManuallyValue = true
      }
      if(rentMaxMobile !== ''){
          arrayQuery.push(`rentMax=${rentMaxMobile}`)
          changeManuallyValue = true
      }
      if(startDate !== ''){
          arrayQuery.push(`startDate=${startDate}`)
          changeManuallyValue = true
      }
      if(selectedValuesMesRecherches.length > 0){
          arrayQuery.push(`demandeID=${selectedValuesMesRecherches.join(',')}`)
          changeManuallyValue = true
      }
      if(offset !== ''){
          arrayQuery.push(`offset=${offset}`)
      }
      if(userfiuID !== ''){
          arrayQuery.push(`userfiuID=${userfiuID}`)
      }
      if(useruuID !== ''){
          arrayQuery.push(`useruuID=${useruuID}`)
      }
      const queryString = arrayQuery.join('&')
      const url = urlBase + queryString
      if(changeManuallyValue == true){
        if(window.location.href.indexOf("location-bureau-paris-1") != -1 || window.location.href.indexOf("location-bureau-paris-2") != -1 || window.location.href.indexOf("location-bureau-paris-3") != -1 || window.location.href.indexOf("location-bureau-paris-4") != -1 || window.location.href.indexOf("location-bureau-paris-5") != -1 || window.location.href.indexOf("location-bureau-paris-6") != -1 || window.location.href.indexOf("location-bureau-paris-7") != -1 || window.location.href.indexOf("location-bureau-paris-8") != -1 || window.location.href.indexOf("location-bureau-paris-9") != -1 || window.location.href.indexOf("location-bureau-paris-10") != -1 || window.location.href.indexOf("location-bureau-paris-11") != -1 || window.location.href.indexOf("location-bureau-paris-12") != -1 || window.location.href.indexOf("location-bureau-paris-13") != -1 || window.location.href.indexOf("location-bureau-paris-14") != -1 || window.location.href.indexOf("location-bureau-paris-15") != -1 || window.location.href.indexOf("location-bureau-paris-16") != -1 || window.location.href.indexOf("location-bureau-paris-17") != -1 || window.location.href.indexOf("location-bureau-paris-18") != -1 || window.location.href.indexOf("location-bureau-paris-19") != -1 || window.location.href.indexOf("location-bureau-paris-20") != -1 || window.location.href.indexOf("location-boulogne-billancourt") != -1 || window.location.href.indexOf("location-gare-du-nord") != -1 || window.location.href.indexOf("location-gare-de-lyon") != -1 || window.location.href.indexOf("location-levallois-perret") != -1 || window.location.href.indexOf("location-montparnasse") != -1 || window.location.href.indexOf("location-republique") != -1 || window.location.href.indexOf("location-saint-lazare") != -1 || window.location.href.indexOf("coworking-saint-lazare-paris") != -1 || window.location.href.indexOf("coworking-gare-lyon-paris") != -1 || window.location.href.indexOf("coworking-montparnasse-paris") != -1 || window.location.href.indexOf("coworking-boulogne-billancourt-paris") != -1 || window.location.href.indexOf("coworking-levallois-perret") != -1 || window.location.href.indexOf("coworking-republique-paris") != -1 || window.location.href.indexOf("coworking-gare-du-nord-paris") != -1 || window.location.href.indexOf("coworking-paris-1") != -1 || window.location.href.indexOf("coworking-paris-2") != -1 || window.location.href.indexOf("coworking-paris-3") != -1 || window.location.href.indexOf("coworking-paris-4") != -1 || window.location.href.indexOf("coworking-paris-5") != -1 || window.location.href.indexOf("coworking-paris-6") != -1 || window.location.href.indexOf("coworking-paris-7") != -1 || window.location.href.indexOf("coworking-paris-8") != -1 || window.location.href.indexOf("coworking-paris-9") != -1 || window.location.href.indexOf("coworking-paris-10") != -1 || window.location.href.indexOf("coworking-paris-11") != -1 || window.location.href.indexOf("coworking-paris-12") != -1 || window.location.href.indexOf("coworking-paris-13") != -1 || window.location.href.indexOf("coworking-paris-14") != -1 || window.location.href.indexOf("coworking-paris-15") != -1 || window.location.href.indexOf("coworking-paris-16") != -1 || window.location.href.indexOf("coworking-paris-17") != -1 || window.location.href.indexOf("coworking-paris-18") != -1 || window.location.href.indexOf("coworking-paris-19") != -1 || window.location.href.indexOf("coworking-paris-20") != -1 || window.location.href.indexOf("coworking-saint-lazare-paris") != -1 || window.location.href.indexOf("coworking-gare-lyon-paris") != -1 || window.location.href.indexOf("coworking-montparnasse-paris") != -1 || window.location.href.indexOf("coworking-boulogne-billancourt-paris") != -1 || window.location.href.indexOf("coworking-levallois-perret") != -1 || window.location.href.indexOf("coworking-republique-paris") != -1 || window.location.href.indexOf("coworking-gare-du-nord-paris") != -1 || window.location.href.indexOf("city=") != -1 || window.location.href.indexOf("zipCode=") != -1){
            // replace current URL with newURL
            history.pushState({}, null, baseUrl+`location-bureau-entreprise`);
        }
      }
      console.log("url après recherche: ", url)
      globalThis.OldVarUrl = url
      let arraycontactIdOffrefavoris_old
      //Attention !! Debut part result#01 search identique à "Debut part result#02"
      fetch(url, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
        })
        .then(response => response.json())
        .then(data => {
            let properties = data.data.data
            arraycontactIdOffrefavoris_old = properties.map(oneitem_old => oneitem_old.contactIdOffrefavoris);
            console.log("arraycontactIdOffrefavoris_old: "+arraycontactIdOffrefavoris_old)
            //sessionStorage.setItem("oldResultSearch", properties);
            updateMarkers(properties)
            newCount = data.data.numberTotalResult
            updateCount(newCount)
             var nodeList = document.querySelectorAll(".part-oneAdDestop");
            if(nodeList.length >0){
              for (let i = 0; i < nodeList.length; i++) {
                nodeList[i].remove(); //on supprime la recherche précédente
              }
            }
            properties.reverse().forEach(resultSearchHtml) //on reverse ici car la liste est inversée à cause de la pagination ?
            //console.log("properties: ", properties)
            document.getElementById("countOffres").innerHTML = "&nbsp;"+String(newCount)+"&nbsp; annonces"
            document.getElementById("countOffresMobile").innerHTML = "&nbsp;"+String(newCount)+"&nbsp; annonces"
            if(newCount < 2){
              document.getElementById("countOffres").innerHTML = "&nbsp;"+String(newCount)+"&nbsp; annonce"
              document.getElementById("countOffresMobile").innerHTML = "&nbsp;"+String(newCount)+"&nbsp; annonce"
            }
            if(properties.length === 0){
              let nameFiu = "<?php echo str_replace("&", " ", getenv('nameFiu')); ?>";
              let inputCacheResultSearch = document.getElementById('verifResult');
              inputCacheResultSearch.value = '0'; //sa signifie qu'il y a aucun resultat trouvé
              var partOneOffre = document.querySelector(".propertyThumbnail");
              partOneOffre.insertAdjacentHTML("afterbegin",`
                <div class="part-oneAdDestop" style="flex-direction: column;">
                <div><br></div>
                <div class="row"><h3 class="font-xs" style="text-align:center;">Il n'y a pas de résultat pour votre recherche. Vous pouvez créer une alerte pour être informé des nouvelles annonces.</h3></div>
                <div class="row wd-100 bg-violet blanc boxRadiusTopLeft" style=" position: relative;margin-top: 2%; ">
                  <div class="column wd-100" style="
                      padding-left: 8%;
                      padding-top: 2%;
                      min-height: 463px;
                      padding-bottom: 3%;
                      ">
                      <h4 class="mb-1p abrilTextRegular"> Besoin d'aide pour votre recherche de bureau ? </h4>
                      <p class="font-m wd-50 asoSansRegularBase" style="
                        margin-top: 0;
                        ">
                        Pas de panique&nbsp;! <b>${nameFiu}</b> vous aide à identifier vos besoins, orienter votre recherche et trouver la
                        perle rare&nbsp;!
                      </p>
                      <link href="{'/recherche-sur-mesure'}">
                      <a class="vert-fort" id="wordCustomSearch" style="font-family: azo-sans-uber, sans-serif; font-size: 1.8rem; display: flex; margin-bottom: 1em; font-weight: 100; align-items: center; align-content: center; color: rgb(28, 65, 81);">
                        <svg xmlns="http://www.w3.org/2000/svg" id="right-arrow-svg" height="24" viewBox="0 0 24 24" width="24" fill="#1C4151">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4z"></path>
                        </svg>
                        Recherche sur mesure
                      </a>
                      <div class="emojiFindADestop">
                        <img src="{{ asset('assets/img/220506-FiU-Personnages-08.png') }}" style="width: 100%;">
                      </div>
                  </div>
                </div>
                </div>`)
            }
        })
      //Attention !! Fin part result#01 search identique à "Fin part result#02"

        var userCurrent = "{{ Session::get('fiuID')}}"
        //Debut verif result search
        /*
        if(userCurrent != ""){
          let arraycontactIdOffrefavoris_new
          setInterval(function () {
            fetch(url, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                },
            })
            .then(response => response.json())
            .then(data => {
                let propertiesNew = data.data.data
                arraycontactIdOffrefavoris_new = propertiesNew.map(oneitem_new => oneitem_new.contactIdOffrefavoris);
                console.log("arraycontactIdOffrefavoris_new: "+arraycontactIdOffrefavoris_new)
                if(areArraysDeepEqual(arraycontactIdOffrefavoris_new,arraycontactIdOffrefavoris_old) == false){
                  //Debut test refresh
                  //Attention !! Debut part result#02 search identique à "Debut part result#01"
                    fetch(globalThis.OldVarUrl, {
                          method: 'GET',
                          headers: {
                              'Content-Type': 'application/json'
                          },
                      })
                      .then(response => response.json())
                      .then(data => {
                          let properties = data.data.data
                          arraycontactIdOffrefavoris_old = properties.map(oneitem_old => oneitem_old.contactIdOffrefavoris);
                          console.log("arraycontactIdOffrefavoris_old: "+arraycontactIdOffrefavoris_old)
                          updateMarkers(properties)
                          newCount = data.data.numberTotalResult
                          updateCount(newCount)
                          var nodeList = document.querySelectorAll(".part-oneAdDestop");
                          if(nodeList.length >0){
                            for (let i = 0; i < nodeList.length; i++) {
                              nodeList[i].remove(); //on supprime la recherche précédente
                            }
                          }
                          properties.reverse().forEach(resultSearchHtml) //on reverse ici car la liste est inversée à cause de la pagination ?
                          //console.log("properties: ", properties)
                          document.getElementById("countOffres").innerHTML = "&nbsp;"+String(newCount)+"&nbsp; annonces"
                          document.getElementById("countOffresMobile").innerHTML = "&nbsp;"+String(newCount)+"&nbsp; annonces"
                          if(newCount < 2){
                            document.getElementById("countOffres").innerHTML = "&nbsp;"+String(newCount)+"&nbsp; annonce"
                            document.getElementById("countOffresMobile").innerHTML = "&nbsp;"+String(newCount)+"&nbsp; annonce"
                          }
                          if(properties.length === 0){
                            var partOneOffre = document.querySelector(".propertyThumbnail");
                            partOneOffre.insertAdjacentHTML("afterbegin",`
                              <div class="part-oneAdDestop" style="flex-direction: column;">
                              <div class="row"><h3 class="font-xs" style="text-align:center;">Il n'y a pas de résultat pour votre recherche. Vous pouvez créer une alerte pour être informé des nouvelles annonces.</h3></div>
                              <div class="row wd-100 bg-violet blanc boxRadiusTopLeft" style=" position: relative;margin-top: 2%; ">
                                <div class="column wd-100" style="
                                    padding-left: 8%;
                                    padding-top: 2%;
                                    min-height: 463px;
                                    padding-bottom: 3%;
                                    ">
                                    <h4 class="mb-1p abrilTextRegular"> Besoin d'aide pour votre recherche de bureau ? </h4>
                                    <p class="font-m wd-50 asoSansRegularBase" style="
                                      margin-top: 0;
                                      ">
                                      Pas de panique&nbsp;! <b>fiu</b> vous aide à identifier vos besoins, orienter votre recherche et trouver la
                                      perle rare&nbsp;!
                                    </p>
                                    <link href="{'/recherche-sur-mesure'}">
                                    <a class="vert-fort" id="wordCustomSearch" style="font-family: azo-sans-uber, sans-serif; font-size: 1.8rem; display: flex; margin-bottom: 1em; font-weight: 100; align-items: center; align-content: center; color: rgb(28, 65, 81);">
                                      <svg xmlns="http://www.w3.org/2000/svg" id="right-arrow-svg" height="24" viewBox="0 0 24 24" width="24" fill="#1C4151">
                                          <path d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4z"></path>
                                      </svg>
                                      Recherche sur mesure
                                    </a>
                                    <div class="emojiFindADestop">
                                      <img src="{{ asset('assets/img/220506-FiU-Personnages-08.png') }}" style="width: 100%;">
                                    </div>
                                </div>
                              </div>
                              </div>`)
                          }
                    })
                  //Attention !! Fin part result#02 search identique à "Fin part result#01"
                  //Fin test refresh
                  arraycontactIdOffrefavoris_old = arraycontactIdOffrefavoris_new
                }
            })
          }, 2000); // Vérifie toutes les 2 secondes
        }
        */
        //Fin verif result search


  
    }

    function onPlaceChange() {
        const place = autocomplete.getPlace()

        if(place.address_components[0].types[0] == "postal_code"){
          value_place = `zipCode=${place.address_components[0].long_name}`

        } else if(place.address_components[0].types[0] == "locality" || place.address_components[1].types[0] == "locality"){
          //value_place = `city=${place.address_components[0].long_name}`
          let textelongNames2 = place.address_components.map(component => component.long_name)
          let codesPostaux = textelongNames2.toString().match(/\b\d{5}\b/g);console.log("codesPostaux: "+codesPostaux)
          if(codesPostaux !== null){
            value_place = `zipCode=${codesPostaux}`
          }else{
            let theCity = transformeChaineEnMajuscule(place.address_components[0].long_name)
            value_place = `city=${theCity}`
          }

        } else {
          //let arrayAdress = place.formatted_address.split(',');
          const longNames = place.address_components.map(component => component.long_name)
          let arrayAdress = reformatAddress(longNames).split(',');console.log("arrayAdress: "+arrayAdress)
          // Add a check to prevent an error if there is no comma
          let formatAdress = arrayAdress.length > 1 ? arrayAdress[0] + arrayAdress[1] : inputPlaceVal;
          let adressEncode = encodeURI(formatAdress);
          //value_place = `address=${adressEncode}&radius=500`
          value_place = `address=${adressEncode}`
        }
        rechercheProperty()
    }

    let map
    let markers = []

    async function initMap() {
      const position = { lat: 48.856613, lng: 2.352222 }
      const { Map } = await google.maps.importLibrary("maps")
      const { AdvancedMarkerElement } = await google.maps.importLibrary("marker")

      map = new Map(document.getElementById("map_2"), {
          zoom: 12,
          center: position,
          mapId: "DEMO_MAP_ID",
      })
      rechercheProperty()
    }

    function updateMarkers(properties) {
      class CustomHtmlMarker extends google.maps.OverlayView {
        constructor(position, map, loyerMensuel, offres_id) {

            super()
            this.position = position
            this.map = map
            this.div = null
            this.loyerMensuel = loyerMensuel
            this.offres_id = offres_id
            this.setMap(map)
        }

        onAdd() {
            const div = document.createElement('div')
            div.style.position = 'absolute'
            //console.log("this.offres_id: ", this.offres_id)
            let urlHref = baseUrl+`location-bureau-entreprise/undefined/${this.offres_id}`
            div.innerHTML = `<a href="${urlHref}" class="bg-blanc items-center justify-content-center btnMap" style="z-index: 6">${this.loyerMensuel.toLocaleString('fr-FR')} €</a>`
            this.getPanes().overlayMouseTarget.appendChild(div)
            this.div = div
        }

        draw() {
            const overlayProjection = this.getProjection()
            const position = overlayProjection.fromLatLngToDivPixel(this.position)
            const div = this.div
            div.style.left = position.x + 'px'
            div.style.top = position.y + 'px'
        }

        onRemove() {
          if (this.div) {
              this.div.parentNode.removeChild(this.div)
              this.div = null
          }
        }
      }

      // Clear existing markers
      markers.forEach(marker => marker.setMap(null))
      markers = []

      // Add new markers
      properties.forEach(property => {
          if (property.latitude && property.longitude) {
              const position = new google.maps.LatLng(parseFloat(property.latitude), parseFloat(property.longitude))
              //const loyerMensuel = Math.round(property.LoyerAnnuelCalcule / 12)
              const loyerMensuel = property.FIU_Rec_Detail_Euro_HTparMois
              const offres_id = property.offres_id
              const customMarker = new CustomHtmlMarker(position, map, loyerMensuel, offres_id)
              markers.push(customMarker)
          }
      })
    }
      
    const modalOptionDestop = document.getElementById('modalOptionDestop')
    const modalOptionDestop2 = document.getElementById('modalOptionDestop2')
    const favDialog = document.getElementById('favDialog')
    const number = document.getElementById('number')
    const btn = document.querySelector(".btn")

    modalOptionDestop.addEventListener('click', () => {
      favDialog.showModal()
    })

    modalOptionDestop2.addEventListener('click', () => {
      favDialog.showModal()
    })

    document.getElementById('hideModalDestop').onclick = function() { 
      favDialog.close()  
    }

    

    function addCssControlLabel(item, index){
      //#carousel-1:checked
      //insertCss("#mySlides"+indexResult+" {display: block;}");
      insertCss("."+item+" {display: block;}");
      insertCss("."+item+" {color: #428bca;}");
      insertCss(".carousel-indicators li:nth-child("+index+") .carousel-bullet"+" {color: #428bca;}");
      //console.log('item: '+item);
      //console.log('index: '+index);
    }


    function addCssLabelwithFor(item, index){
      //#carousel-1:checked
      insertCss("#"+item+":checked {display: block;}")
    }

    function addCsstestLabelControlFor(item, index){
      let splitItem = item.split(';')
      calcIndex = index + 1
      //#carousel-1:checked ~ .control-1
      insertCss("#"+splitItem[1]+":checked ~ ."+splitItem[0]+" {display: block;}")
      //#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet
      insertCss("#"+splitItem[1]+":checked ~ ."+splitItem[0]+" ~ .carousel-indicators"+splitItem[2]+" li:nth-child("+calcIndex+") .carousel-bullet"+splitItem[2]+" {color: #428bca;}")
    }

    function insertCss( code ) {
      var style = document.createElement('style')
      style.type = 'text/css'
      if (style.styleSheet) {
          // IE
          style.styleSheet.cssText = code
      } else {
          // Other browsers
          style.innerHTML = code
      }
      document.getElementsByTagName("head")[0].appendChild( style )
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    //on met un timeout pour attendre que les DOM soit chargé
    setTimeout(() => {
      $(".typeSpaceWork li").click(function(e) {
        // make sure we cannot click the slider
        if ($(this).hasClass('slider')) {
          return;
        }

        /* Add the slider movement */

        // what tab was pressed
        var whatTab = $(this).index();

        // Work out how far the slider needs to go
        var howFar = 160 * whatTab;

        $(".slider").css({
          left: howFar + "px"
        });

        /* Add the ripple */

        // Remove olds ones
        $(".ripple").remove();

        // Setup
        var posX = $(this).offset().left,
            posY = $(this).offset().top,
            buttonWidth = $(this).width(),
            buttonHeight = $(this).height();

        // Add the element
        $(this).prepend("<span class='ripple'></span>");

        // Make it round!
        if (buttonWidth >= buttonHeight) {
          buttonHeight = buttonWidth;
        } else {
          buttonWidth = buttonHeight;
        }

        // Get the center of the element
        var x = e.pageX - posX - buttonWidth / 2;
        var y = e.pageY - posY - buttonHeight / 2;

        // Add the ripples CSS and start the animation
        $(".ripple").css({
          width: buttonWidth,
          height: buttonHeight,
          top: y + 'px',
          left: x + 'px'
        }).addClass("rippleEffect");
      });
    }, 500);
  </script>
  <script>
    function deepEqual(obj1, obj2) {
      if (obj1 === obj2) return true;
      if (typeof obj1 !== "object" || typeof obj2 !== "object" || obj1 === null || obj2 === null) return false;

      let keys1 = Object.keys(obj1);
      let keys2 = Object.keys(obj2);
      if (keys1.length !== keys2.length) return false;

      return keys1.every(key => deepEqual(obj1[key], obj2[key]));
    }

    function areArraysDeepEqual(arr1, arr2) {
        if (arr1.length !== arr2.length) return false;
        return arr1.every((item, index) => deepEqual(item, arr2[index]));
    }
  </script>
  <script>
    
    /*
    document.addEventListener("click", function(event) {
        if (event.target.closest(".envoyerModifFavorisFiu")) {  
            event.preventDefault(); // Bloque la redirection

            let link = event.target.closest(".envoyerModifFavorisFiu");
            let url2 = link.getAttribute("data-url");

            fetch(url2)
                .then(response => response.json()) // Convertir la réponse en JSON
                .then(data => {
                    if (data.success) {
                        //alert(data.message);
                        // Optionnel : Modifier l'icône en fonction de l'action
                        let element = document.querySelector('.enregistrerFav');
                        let id = element.id;console.log('element.id '+id)
                        let iconeFav = "";
                        if(id === "pinkheartpart"){
                          let oldUrl = element.dataset.url;
                          let newUrl = oldUrl.replace(/\/0$/, '/1');console.log(newUrl);
                          element.dataset.url = newUrl;
                          iconeFav = `
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519">
                                    <g id="Favoris" transform="translate(0.75 0.75)">
                                        <path id="Icon_feather-heart" data-name="Icon feather-heart"
                                              d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z"
                                              transform="translate(-2.323 -4.497)"
                                              fill="white" stroke="#000" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5">
                                        </path>
                                    </g>
                                </svg>
                          `
                        }else{
                          let oldUrl = element.dataset.url;
                          let newUrl = oldUrl.replace(/\/1$/, '/0');console.log(newUrl);
                          element.dataset.url = newUrl;
                          iconeFav = `
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519">
                                    <g id="Favoris" transform="translate(0.75 0.75)">
                                        <path id="Icon_feather-heart" data-name="Icon feather-heart"
                                              d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z"
                                              transform="translate(-2.323 -4.497)"
                                              fill="pink" stroke="#000" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5">
                                        </path>
                                    </g>
                                </svg>
                          `
                        }
                        document.querySelector('.enregistrerFav').innerHTML = '';console.log('enregistrerFav innerHTML iconeFav:'+iconeFav)
                        document.querySelector('.enregistrerFav').innerHTML = iconeFav;
                        //document.querySelector('.enregistrerFav').insertAdjacentHTML("afterbegin",iconeFav);
                    } else {
                        alert("Erreur : " + data.error);
                    }
                })
                .catch(error => {
                    alert("Erreur lors de la requête.");
                    console.error(error);
                });
        }
    });
    */

    document.addEventListener("click", function(event) {
    const clickedFav = event.target.closest(".envoyerModifFavorisFiu");

    if (clickedFav) {
        event.preventDefault();

        const url2 = clickedFav.getAttribute("data-url");

        fetch(url2)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let id = clickedFav.id;
                    let iconeFav = "";

                    // Modifier le data-url et l'icône selon l'état actuel
                    let oldUrl = clickedFav.dataset.url;
                    let newUrl;

                    if (id === "pinkheartpart") {
                        newUrl = oldUrl.replace(/\/1$/, '/0');
                        iconeFav = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519">
                                <g transform="translate(0.75 0.75)">
                                    <path d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z"
                                        transform="translate(-2.323 -4.497)"
                                        fill="white" stroke="#000" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" />
                                </g>
                            </svg>
                        `;
                        clickedFav.id = "whiteheartpart"; // changer dynamiquement l'id
                    } else {
                        newUrl = oldUrl.replace(/\/0$/, '/1');
                        iconeFav = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.452" height="21.519" viewBox="0 0 24.452 21.519">
                                <g transform="translate(0.75 0.75)">
                                    <path d="M23.506,6.267a6.039,6.039,0,0,0-8.543,0L13.8,7.431,12.635,6.267A6.041,6.041,0,1,0,4.092,14.81l1.164,1.164L13.8,24.516l8.543-8.543,1.164-1.164a6.039,6.039,0,0,0,0-8.543Z"
                                        transform="translate(-2.323 -4.497)"
                                        fill="pink" stroke="#000" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" />
                                </g>
                            </svg>
                        `;
                        clickedFav.id = "pinkheartpart";
                    }

                    // Mettre à jour le data-url et rafraîchir le contenu
                    clickedFav.dataset.url = newUrl;
                    clickedFav.innerHTML = iconeFav;

                } else {
                    alert("Erreur : " + data.error);
                }
            })
            .catch(error => {
                alert("Erreur lors de la requête.");
                console.error(error);
            });
    }
    });
    
  </script>
  <script>
      const verifResult = document.getElementById('verifResult');

      // Observer les changements d'attributs, en particulier 'value'
      const observer = new MutationObserver(() => {
        if (verifResult.value === '0') {
          console.log('La valeur de verifResult est 0 en temps réel (via MutationObserver)');
          const mentionFooterDiv = document.getElementById('marginTopMentionFooter');
          // Modifier le margin-top en JavaScript
          mentionFooterDiv.style.marginTop = '180px';
        }
      });

      observer.observe(verifResult, { attributes: true, attributeFilter: ['value'] });
  </script>
  </div>

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://flexinuse.fr/#organization",
      "name": "fiu - Flex In Use",
      "legalName": "FLEX IN USE",
      "url": "https://flexinuse.fr/",
      "logo": {
        "@type": "ImageObject",
        "@id": "https://flexinuse.fr/#logo",
        "url": "https://flexinuse.fr/assets/img/logo-fiu%402x.png"
      },
      "telephone": "+33755537147",
      "email": "contact@flexinuse.fr",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "25 rue de Ponthieu",
        "addressLocality": "Paris",
        "postalCode": "75008",
        "addressCountry": "FR"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "contactType": "customer service",
          "telephone": "+33755537147",
          "email": "contact@flexinuse.fr",
          "areaServed": "FR",
          "availableLanguage": ["fr"]
        }
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://flexinuse.fr/#website",
      "name": "fiu - flexinuse.fr",
      "url": "https://flexinuse.fr/",
      "publisher": { "@id": "https://flexinuse.fr/#organization" },
      "inLanguage": "fr-FR"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://flexinuse.fr/coworking-paris-8#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Accueil",
          "item": "https://flexinuse.fr/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Coworking",
          "item": "https://flexinuse.fr/coworking"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Coworking Paris 8",
          "item": "https://flexinuse.fr/coworking-paris-8"
        }
      ]
    },
    {
      "@type": "CollectionPage",
      "@id": "https://flexinuse.fr/coworking-paris-8#webpage",
      "url": "https://flexinuse.fr/coworking-paris-8",
      "name": "Tous les coworkings à Paris 8",
      "headline": "Tous les coworkings à Paris 8 en septembre 2025",
      "isPartOf": { "@id": "https://flexinuse.fr/#website" },
      "publisher": { "@id": "https://flexinuse.fr/#organization" },
      "inLanguage": "fr-FR",
      "breadcrumb": { "@id": "https://flexinuse.fr/coworking-paris-8#breadcrumb" },
      "about": {
        "@type": "AdministrativeArea",
        "name": "8e arrondissement de Paris (75008)",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Paris",
          "postalCode": "75008",
          "addressCountry": "FR"
        }
      },
      "description": "Sélection d'espaces de coworking dans le 8e arrondissement : quartier central près des Champs‑Élysées, nombreuses stations de métro (Franklin‑Roosevelt, Saint‑Philippe‑du‑Roule, Madeleine, Miromesnil, etc.). Tarifs observés : autour de 750 € / poste / mois en moyenne, avec des options en open space dès ~500 € selon les services inclus."
    },
    {
      "@type": "FAQPage",
      "@id": "https://flexinuse.fr/coworking-paris-8#faq",
      "inLanguage": "fr-FR",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Pourquoi le 8e arrondissement de Paris est-il attrayant pour les entreprises en coworking ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "C'est un quartier prestigieux et dynamique, proche des Champs‑Élysées et bien desservi, avec de nombreux restaurants, cafés et espaces verts (ex. Parc Monceau), idéal pour recevoir des clients et faciliter les déplacements."
          }
        },
        {
          "@type": "Question",
          "name": "Quels sont les tarifs moyens pour un espace de coworking dans le 8e arrondissement de Paris ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Comptez environ 750 € par mois et par poste en moyenne. Les premiers prix en open space démarrent généralement aux alentours de 500 €, selon l’emplacement et les services inclus."
          }
        }
      ]
    }
  ]
}
</script>
@endsection
  
