<?php
$API_KEY = getenv('GOOGLE_API_KEY');
?>
@extends('layouts.defaultFiu')
<!-- ecran = offreFavoris.blade.php   -->


@section('title')
  Mes Favoris
@endsection


@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection


@section('metaDescription')

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

  .overlayOffreFav {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0);
    pointer-events: all;
    z-index: 1;
    background-color: rgba(255, 255, 255, 0.2);
  }
</style>

@endsection

@section('content')

  <div class="row navBarDiv wd-100 items-center content-center justify-content-center hideShowScroll cancelJustifyContent-mobile">
      
          <a
            class="profileNavBar items-center justify-content-center"
            style="
              height: 100%;
              border-left: 1px solid #DDDDDD;
              min-width: 200px;
            "
            href="{{ url('mes-demandes') }}"
          >
            Mes recherches
          </a>
          <a
            class="profileNavBar items-center justify-content-center"
            style="
              height: 100%;
              border-left: 1px solid #DDDDDD;
              min-width: 200px;
              background-color: black;
              color: white;
            "
            href="{{ url('mes-favoris') }}"
          >
            Favoris
          </a>
          <a
            class="profileNavBar items-center justify-content-center"
            style="
              height: 100%;
              border-left: 1px solid #DDDDDD;
              min-width: 200px;
              border-right: 1px solid #DDDDDD;
            "
            href="{{ url('profile') }}"
          >
            Mon Compte
          </a>
        
  </div>
  <div style="min-height: 100vh;">
    <div class="profileBlock" style="margin-bottom: 50px;">
      <div
        class="column col-12 col-m-12 col-s-12 paddingRightProfilePage-Destop"
        style="
          gap: 50px;
          display: flex;
        "
      >
        <div
          id="detail"
          class="row"
          {{--
          style="
            border: 1px solid #DDDDDD;
          "
          --}}
        >
          <!-- Debut test 2 -->
          <div
                class="profileBlockContainer col-7 col-m-12 col-s-12"
                style="
                    margin-right: 3%;
                "
            >
                <div>
                    <section id="profile">
                    <h4> Mes offres favorites</h4>
                    </section>
                </div>
                <div style="display: flex ; flex-wrap: wrap;">
                  @foreach($allOffresFav as $oneFav)
                  <div class="col-3">
                    <div class="displayOtherProperty bg-blanc cancelJustifyContent-mobile" style="overflow-x: auto;justify-content: left;">
                              <div style="border: 1px solid #DDDDDD; " class="imgRadiusTop addPositionRelativeOnProperty">
                              @if($oneFav['offrestatut_id'] == 2)
                                <div class="overlayOffreFav"></div>
                              @endif
                    <div class="cardDisplayProperty imgRadiusTop bg-blanc" style="
                      max-width: 418px;
                      max-height: 650;
                      cursor: pointer;
                    "
                      <?php
                        if(!is_null($oneFav['FIU_Rec__Titre_Annonce'])){
                                // Normalize the string
                                $normalized = Normalizer::normalize($oneFav['FIU_Rec__Titre_Annonce'], Normalizer::FORM_D);
                                          
                                // Remove diacritics (accents)
                                $cleaned = preg_replace('/[\p{M}]/u', '', $normalized);
                                          
                                // Replace non-alphanumeric characters with spaces
                                $cleaned = preg_replace('/[^a-zA-Z0-9 ]/', ' ', $cleaned);
                                        
                                // Replace consecutive spaces with hyphens
                                $cleaned = preg_replace('/\s+/', '-', $cleaned);
                                //$cleanUrl = $this->normalizeUrl($oneRecord['FIU_Rec__Titre_Annonce']);
                                $urlCleaned = $cleaned;
                        }elseif(!is_null($oneFav['FIU_Rec_Detail_Type_bureau']) && is_null($oneFav['FIU_Rec__Titre_Annonce'])){
                                // Normalize the string
                                $normalized = Normalizer::normalize($oneFav['FIU_Rec_Detail_Type_bureau'], Normalizer::FORM_D);
                                          
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
                    onclick="window.location.href='{{ url('/location-bureau-entreprise/'.$urlCleaned.'/'.$oneFav['offres_id']) }}';">
                      @if($oneFav['offrestatut_id'] == 2)
                      <div style="maxHeight: 419px;position: relative;display: flex ; align-items: center; justify-content: center;">
                        <img src="{{ asset('recupereimageDocumentID/'.$oneFav['offres_id'].'/0')}}" class="imgRadiusTop" style="width:100%;height:400px;object-fit: cover;object-position: center center;filter: brightness(0.2) saturate(84%) invert(19%) sepia(45%) saturate(418%) hue-rotate(153deg) brightness(87%) contrast(99%);">
                        <p style="position:absolute;font-size: 2.5rem;color: white;text-transform: uppercase;">Annonce Archivée</p>
                      </div>
                      @else
                      <div style="maxHeight: 419px;">
                        <img src="{{ asset('recupereimageDocumentID/'.$oneFav['offres_id'].'/0')}}" class="imgRadiusTop" style="width:100%;height:400px;object-fit: cover;object-position: center center;">
                      </div>
                      @endif
                      <div class="bg-blanc addPaddingBottomOnContentProperty" style=" padding-left: 7%; padding-top: 8%; padding-right: 8%; ">
                        <a class="azoSansBold vert" style="fontSize: 1.8rem;">
                        {{ $oneFav['FIU_Rec_Detail_Type_bureau'] }}
                        </a>

                        <h5 class="abrilTextRegular" style=" font-size: 2.5rem; margin-top: 0; margin-bottom: 0; ">
                          {{ $oneFav['AdresseComplete'] }}
                        </h5>
                      </div>
                      <div style=" padding-left: 7%; padding-right: 8%; " class="priceContentClass">
                          @if($oneFav['FIU_Rec_Detail_Euro_HTparMois'] > 0)
                            <span class="asoSansRegular" style=" font-size: 2rem;">
                              <b>
                                @if($oneFav['FIU_Rec__DetailApartirde_parmois'] == 1)
                                  À partir de
                                @endif
                                {{ number_format($oneFav['FIU_Rec_Detail_Euro_HTparMois'], 0, ',', ' ') }} € 
                              </b>
                              HT / mois
                            </span>
                          @endif
                          @if($oneFav['FIU_Rec_DEtail_Euro_HTparPoste'] > 0)
                            <p style="
                                margin-top: 0%;font-family: azo-sans-web;
                                font-size: 2rem;
                              ">
                              {{ number_format($oneFav['FIU_Rec_DEtail_Euro_HTparPoste'], 0, ',', ' ') }} € HT /
                              poste
                            </p>
                          @endif
                          @if($oneFav['FIU_Rec_DEtail_Euro_m2parAN'] > 0)
                            <p style="
                                margin-top: 0%;font-family: azo-sans-web;
                                font-size: 2rem;
                              ">
                              {{ number_format($oneFav['FIU_Rec_DEtail_Euro_m2parAN'], 0, ',', ' ') }} € HT / m² / an
                            </p>
                          @endif
                      </div>
                      <div style="margin: 0 auto;">
                        <a href="{{ url('/SupprimerOffrefavori/'.$oneFav['offres_id']) }}"> 
                          <button style="color: white; height: 36px; font-size: 2rem; overflow: hidden; pointer-events: auto; background-color: grey; border-radius: 50px; border: none; white-space: nowrap; padding-right: 4%; padding-left: 4%;margin-bottom: 3%;"> 
                            Supprimer de ma liste favoris 
                          </button> 
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              @empty($allOffresFav))
                   <div style="font-size: 3rem;">Vous n'avez aucune offre en favoris.</div>     
              @endempty
                        </div>
            </div>
          <!-- Fin test 2 -->
          
        </div>
        {{--
        <div
          id="detail-orga"
          style="
            border: 1px solid #DDDDDD;
          "
        >
          <OrganisationDetailsBlock user={user} setUser={setUser} />
        </div>
        <div
          id="notification"
          style="
            border: 1px solid #DDDDDD;
          "
        >
          <NotificactionSetting user={user.notification} setUser={setUser} />
        </div>
        --}}
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
    $(".buttonSave").click(function() {
      $.ajax({
          url: "/updateProfileUser",
          type: "POST",
          //data: { nom: "John" },
          error: function(xhr) {
              if (xhr.status === 419) {
                  alert("Erreur 419 : Votre session a expiré !");
                  //window.location.reload(); // Recharger la page
                  window.location.href = baseUrl+"/sessionExpire";
              }
          }
      });
    });
  </script>
  
  


@endsection
