@extends('layouts.defaultFiu')
<!-- ecran = rechercheSurMesure.blade.php   -->


@section('title')
  fiu trouve pour vous votre solution de bureau flexible
@endsection

@section('metaDescription')
  Grâce à la recherche sur mesure fiu se charge de trouver à votre place le bureau flexible idéal pour votre entreprise. Testez le talent de nos experts !
@endsection


@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection


@section('pagetitle')

@endsection

@section('custom_css')
<style>
.widthPartOneInvest{
    width: 60%;
}
@media only screen and (min-width: 1200px) and (max-width: 1513px){
    .widthPartOneInvest{
        width: 77%;
    }
}
@media only screen and (max-width: 1200px) {
    .minWidthLogoInvest {
        min-width: 20%;
    }
    .textAlignBlocLogoInvest{
        text-align: center;
        width: 100%;
    }
}
.marginLeftSmallModalForm{
  margin-left: 16%;
}

@media only screen and (max-width: 1200px) {
    .marginLeftSmallModalForm{
      margin-left: 0;
    }
}
</style>
@endsection

@section('content')

<div class="flex-wrap-row bloc-one-custom" style="margin-top: 90px;">
          <div class="col-6 boxRadiusTopLeft" style="position: relative";>
            <img              
              alt="cta-who-are-we"
              src="{{ asset('assets/img/AdobeStock_167781326.jpeg')}}"
              class="object-center object-cover pointer-events-none boxRadiusTopLeft heightCustomSearchLeft"              
              style="object-fit:cover;object-position:center;width:100%;"
            />
          </div>
          <div class="col-6" style="background-color: #F6CEDE;position: relative; overflow: hidden;">
            <div class="items-center justify-content-center ht-100">
              <div style="display: inline-block;color: black;line-height: 5em;width: 60%;">
                <h1
                  style="margin-bottom: 0px; font-family: Azo-Sans-Uber;"                  
                  class="font-l"
                  id="modifyFontCustomPage-1"
                >
                  Recherche<span style="display: block; padding-top: 2%;">SUR-MESURE</span>
                </h1>
                <p
                  style="line-height: 1.2em;"                  
                  class="font-m"
                  id="modifyFont-m-1"
                >
                  Vous recherchez des espaces de travail, bureaux privés, plateaux opérés… <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> vous
                  aide à trouver votre bureau idéal
                </p>
              </div>
            </div>
            <div
              style="position: absolute; top: -0.5%; left: 5%; width: 17%;"              
              id="modifyTopEmojiOneCustomPage"
            >
              <img src="{{ asset('assets/img/emoji-one-CustomSearch.png')}}" width="181.59px" height="169.69px" alt="personnage violet souriant avec une queue de cheval" />
            </div>
            <div style="position: absolute; bottom: 2%;right: 8%; width: 14%;">
              <img src="{{ asset('assets/img/emoji-two-CustomSearch.png')}}" width="159.73px" height="210.72px" alt="personnage violet souriant avec une queue de cheval" />
            </div>
          </div>
        </div>
        <div class="flex-wrap-row" style="padding-bottom: 0!important;">
          <div class="col-6">
            <div style="padding-left: 10%; padding-right: 10%; margin-top: 6%;">
              <h1
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-l"
                id="modifyFontCustomPage-2"
              >
                <span style="display: block;">Une offre clé en main</span> pour votre bureau
              </h1>
              <p
                style="line-height: 1.2em; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-2"
              >
                Vous initiez vos recherches ? Vous avez du mal à vous orienter dans une jungle de propositions parfois
                peu comparables ?
              </p>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                Vous manquez de temps pour formuler vos besoins, écrire la recette de votre bureau idéal, très peu pour
                vous… Scroller, sélectionner, shortlister encore moins !
              </p>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-4"
              >
                Laissez-vous guider par l'un de nos conseillers <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong>. Dites-lui qui vous êtes, il vous
                proposera une sélection qui vous ressemble et il vous accompagnera jusqu'à votre emménagement.
              </p>
              <p
                style=" line-height: 1.2em; margin-top: 2%;"                
                class="font-custom-p"
                id="modifyFont-m-5"
              >
                Indiquez vos coordonnées pour être contacté dans la foulée !
              </p>
            </div>
          </div>
          <div class="col-6">
          {{--   ************************************** debut form *********************** --}}
    <div
      class="column bg-blanc col-8 col-m-12 col-s-12 marginLeftSmallModalForm"
      style="
        border-radius: 8px;
        justify-content: flex-start;
        box-shadow: rgb(0 0 0 / 10%) 0px 5px 15px;
        margin-top: 6%;
      "
    >
      <div style=" background-color: #fff; border-radius: 8px;">
        <div
          class="row wd-100 bg-vert-fort blanc items-center justify-content-center"
          style="
            alignItems: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            border: 1px solid #707070;
            height: 70px;
          "
          id="nomDiv"
        >
          <p
            class="wd-100 items-center justify-content-center"
            style=" font-size: 2rem;fontFamily: azo-sans-web, sans-serif;" 
          >
            
            Recherche sur mesure
          </p>
        </div>
        @if(session('errorForm'))
                        <br>
                        <p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;" >
                          {{ session('errorForm') }}
                        </p>
        @endif
        <form class="form" id="recsurmesure" method="POST" action="{{ url('/rechercheSurMesuredemande') }}" autocomplete="off">
        <div
          class="column"
          style=" padding-left: 6%; padding-right: 6%; gap: 20px; padding-bottom: 40px; margin-top: 2.5%; "
        >
          <div style=" gap: 6px; display: flex; flex-flow: column;">
            <div class="col-12">
              <label>Votre prénom *</label>
              <input
                class="baseInput asoSansRegular wd-100"
                type="text"
                placeholder="Prénom"
                name="Prenom"
                id="Prenom"                
                value="{{ old('Prenom') }}"
              />
            </div>
            <div class="col-12">
              <label>Votre nom *</label>
              <input
                class="baseInput asoSansRegular wd-100"
                type="text"                
                placeholder="Nom"
                name="nom" 
                id="nom"
                value="{{ old('nom') }}"
              />
            </div>
            <div class="col-12">
              <label>Votre email *</label>
              <input
                class="baseInput asoSansRegular wd-100"
                type="text"
                placeholder="E-mail"                          
                name="email" 
                id="email"
                value="{{ old('email') }}"
              />
            </div>
            <div class="col-12">
              <label>Votre téléphone *</label>              
              <input class="baseInput inputAzolight heightLabelFormContactProperty wd-100" type="text" name="Telephone" id="Telephone" placeholder="Numéro de téléphone" value="{{ old('Telephone') }}" >  
            </div>
            <div class="col-12">
              <label>Quelques mots sur votre besoin *</label>
              <textarea
                class="col-12 baseInput ht-20"
                style="height: 102px;"
                name="besoin" 
                id="besoin"
              >
                {{ old('besoin') }}
              </textarea>
            </div>
          </div>
          <button
            class="buttonSave buttonSendSearchCustom"
            style=" width: 100%;border: none;"
            type="submit" 
            name="submit"  
            value="recherchesurmesure"
          >
            Envoyer            
          </button>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">                        
        </div>
        </form>
      </div>      
    </div>
    
<!--
</div>
        </div>-->
        
        <div
          class="row partAdIdealOffice"
          style="justify-content: center; gap: 1.5%; padding-right: 2%; padding-left: 2%; margin-bottom: 1%;"
        >
        
        </div>
</div>

<div class="row textAlignBlocLogoInvest" style="border-top: 1px solid #DDDDDD;border-bottom: 1px solid #DDDDDD;margin-top:0.5%;">
   <div style=" gap: 50; width: 100%; display: flex; align-items: center; flex-direction: row; align-content: center; justify-content: center; backgroundColor: white; flex-wrap: wrap; margin-top: 3%; margin-bottom: 3%; " class="textAlignBlocLogoInvest">
      <p class="col-3 col-md-12 col-s-12 partTheyFindOffice-textAlign fontSubTitle marginTopInheritMobile" style=" color: black;align-content: center; line-height: 1.2em; margin-top: 0px; margin-bottom: 0px; " id="modifyFontSubTitleCustomPage" > <span class="sentenceTheyFindOffice-destop">Ils ont trouvé</span> <span class="sentenceTheyFindOffice-destop">leur bureau idéal</span> <span class="sentenceTheyFindOffice-destop"> sur <b><?php echo str_replace("&", " ", getenv('nameFiu')); ?>.</b> </span> <span class="sentenceTheyFindOffice-mobile">Ils ont trouvé leur bureau idéal</span> <span class="sentenceTheyFindOffice-mobile"> sur <b>fiu.</b> </span> </p>
      <div class="col-7 col-md-12 col-s-12 padding-LogoTheyFindOffice hideShowScroll" style=" gap: 30px; display: flex; text-align: center; align-content: center; " >
         <div class="minWidthLogoInvest"> <img alt='logo de BIRKENSTOCK' src="{{ asset('assets/img/BIRKENSTOCK.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthLogoInvest"> <img alt='logo de DOTT' src="{{ asset('assets/img/DOTT.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthLogoInvest"> <img alt='logo de HOMELOOP' src="{{ asset('assets/img/HOMELOOP-copie.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthLogoInvest"> <img alt='logo de FLINK' src="{{ asset('assets/img/FLINK.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthLogoInvest"> <img alt='logo de NHOA-ENERGY' src="{{ asset('assets/img/NHOA-ENERGY.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthLogoInvest"> <img alt='logo de SMARTRENTING' src="{{ asset('assets/img/SMARTRENTING.png')}}" style="width:100%; height:100%;" /> </div>
      </div>
   </div>
</div>
<div class="flex-wrap-row">
  <div class="col-12">
    <div class="row" style="padding-left: 5%; padding-right: 5%; margin-bottom: 1.5%;">
              <h1
                style="font-family: Azo-Sans-Uber; margin-bottom: 0px;"               
                class="font-l"
                id="modifyFontCustomPage-3"
              >
                Votre bureau idéal se trouve sur fiu !
              </h1>
    </div>
  </div>
  <div
            class="flex-wrap-row partAdIdealOffice col-12"
            style="justify-content: center; gap: 1.5%; padding-right: 2%; padding-left: 2%; margin-bottom: 1%;"
  >
  
              @if(!is_null($allOffres))
                @foreach($allOffres as $oneOffre)
                  <div
                    class="cardDisplayProperty imgRadiusTop bg-blanc"
                    style="
                      max-width: 418px;
                      max-height: 650;
                      border: 1px solid #DDDDDD;
                      cursor: pointer;
                    "
                    <?php
                      if(!is_null($oneOffre['FIU_Rec__Titre_Annonce'])){
                              // Normalize the string
                              $normalized = Normalizer::normalize($oneOffre['FIU_Rec__Titre_Annonce'], Normalizer::FORM_D);
                                        
                              // Remove diacritics (accents)
                              $cleaned = preg_replace('/[\p{M}]/u', '', $normalized);
                                        
                              // Replace non-alphanumeric characters with spaces
                              $cleaned = preg_replace('/[^a-zA-Z0-9 ]/', ' ', $cleaned);
                                      
                              // Replace consecutive spaces with hyphens
                              $cleaned = preg_replace('/\s+/', '-', $cleaned);
                              //$cleanUrl = $this->normalizeUrl($oneRecord['FIU_Rec__Titre_Annonce']);
                              $urlCleaned = $cleaned;
                      }elseif(!is_null($oneOffre['FIU_Rec_Detail_Type_bureau']) && is_null($oneOffre['FIU_Rec__Titre_Annonce'])){
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
              
                    onclick="window.location.href='{{ url('/location-bureau-entreprise/'.$cleaned.'/'.$oneOffre['offres_id']) }}';"
                  >
                    <div style="maxHeight: 419px;">
                      <img src="{{ asset('recupereimageDocumentID/'.$oneOffre['offres_id'].'/0')}}" class="imgRadiusTop" style="width:418px;height:400px;"/>
                    </div>
                    <div class="bg-blanc addPaddingBottomOnContentProperty" style=" padding-left: 7%; padding-top: 8%; padding-right: 8%; ">
                      <a class="azoSansBold vert" style="fontSize: 1.8rem;">
                        {{$oneOffre['FIU_Rec__Titre_Annonce']}}
                      </a>

                      <h5 class="abrilTextRegular" style=" font-size: 2.5rem; margin-top: 0; margin-bottom: 0; ">
                        {{$oneOffre['AdresseComplete']}}
                      </h5>
                    </div>
                    <div style=" padding-left: 7%; padding-right: 8%; " class="priceContentClass">
                      @if($oneOffre['FIU_Rec_Detail_Euro_HTparMois'] > 0)
                      <span class="asoSansRegular" style=" font-size: 2rem;" >
                        <b>
                          @if($oneOffre['FIU_Rec__DetailApartirde_parmois'] == 1)
                            À partir de
                          @endif
                          {{number_format($oneOffre['FIU_Rec_Detail_Euro_HTparMois'], 0, ',', ' ')}} € 
                        </b>
                        HT / mois
                      </span>
                      @endif
                      @if($oneOffre['FIU_Rec_DEtail_Euro_HTparPoste'] > 0)
                      <p
                        style="
                          margin-top: 0%;font-family: azo-sans-web;
                          font-size: 2rem;
                        "
                      >
                        {{ number_format($oneOffre['FIU_Rec_DEtail_Euro_HTparPoste'], 0, ',', ' ') }} € HT /
                        poste
                      </p>
                      @endif
                      @if($oneOffre['FIU_Rec_DEtail_Euro_m2parAN'] > 0)
                      <p
                        style="
                          margin-top: 0%;font-family: azo-sans-web;
                          font-size: 2rem;
                        "
                      >
                        {{ number_format($oneOffre['FIU_Rec_DEtail_Euro_m2parAN'], 0, ',', ' ') }}€ HT / m² / an
                      </p>
                      @endif
                    </div>
                  </div>
                @endforeach
              @endif
  </div>
@endsection

@section('scripts')

  <script type="text/javascript">
    $(document).ready(function(){
      //-initialize the javascript
      // App.init();
      // App.formElements();
    });
  </script>

@endsection
