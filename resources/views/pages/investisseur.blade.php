@extends('layouts.defaultFiu')
<!-- ecran = investisseur.blade.php   -->


@section('title')
  Investir dans des bureaux à fort potentiel – Flex In Use
@endsection


@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection


@section('metaDescription')
  fiu – Flex In Use vous accompagne dans l'investissement de bureaux adaptés à votre stratégie : locaux bruts, immeubles à restructurer, surfaces à potentiel.
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
              alt="Discussion d'équipe autour d’un ordinateur dans un espace de coworking pour investir dans des bureaux"
              src="{{ asset('assets/img/investir_bureaux.webp')}}"
              class="object-center object-cover pointer-events-none boxRadiusTopLeft heightCustomSearchLeft"              
              style="object-fit:cover;object-position:center;width:100%;"
            />
          </div>
          <div class="col-6" style="background-color: #56bffa;position: relative; overflow: hidden;">
            <div class="items-center justify-content-center ht-100">
              <div style="display: inline-block;color: black;line-height: 5em;" class="widthPartOneInvest">
                <h1
                  style="margin-bottom: 0px; font-family: Azo-Sans-Uber;line-height: 100%;"                  
                  class="font-l"
                  id="modifyFont-l-titleCardPage"
                >
                  Investir dans des actifs immobiliers adaptés à vos objectifs
                </h1>
                <p
                  style="line-height: 1.2em;"                  
                  class="font-m"
                  id="modifyFont-m-1"
                >
                    Vous souhaitez investir dans des bureaux, des plateaux professionnels ou des espaces de travail à revaloriser ? fiu – Flex In Use accompagne les investisseurs dans l’acquisition de bureaux adaptés à leur stratégie immobilière : locaux à fort potentiel, surfaces brutes à transformer, immeubles de bureaux à repositionner.
                </p>
              </div>
            </div>
            <div
              style="position: absolute; top: -0.5%; left: 5%; width: 17%;"              
              id="modifyTopEmojiOneCustomPage"
            >
              <img src="{{ asset('assets/img/emoji-one-CustomSearch.png')}}" width="181.59px" height="169.69px" alt="Visage violet souriant avec queue de cheval, yeux fermés" />
            </div>
          </div>
        </div>
        <div class="flex-wrap-row" style="padding-bottom: 0!important;">
          <div class="col-6">
            <div style="padding-left: 10%; padding-right: 10%; margin-top: 6%;">
              <h2
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-l"
                id="modifyFont-l-blockCardPage"
              >
                Des opportunités d’investissement ciblées
              </h2>
              <p
                style="line-height: 1.2em; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-2"
              >
                fiu – Flex in Use identifie et sélectionne des opportunités d’investissement dans des bureaux à haut potentiel : locaux mixtes, plateaux tertiaires, immeubles à restructurer. 
                Chaque bien est analysé selon des critères essentiels à un investissement immobilier professionnel performant :
              </p>
              <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;"> 
                <li>Localisation stratégique</li>
                <li>Accessibilité des transports</li>
                <li>Configuration des espaces</li>
                <li>Flexibilité et potentiel de transformation</li>
              </ul>
              <h2
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-l"
                id="modifyFont-l-blockCardPage"
              >
                Un accompagnement sur-mesure pour investir dans des bureaux
              </h2>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                De l’étude du projet à la signature de l’acte, fiu vous guide à chaque étape de votre investissement. Notre équipe vous aide à structurer une stratégie d’acquisition qu’il s’agisse de :
              </p>
              <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
                <li>Valorisation patrimoniale,</li>
                <li>Revente avec plus-value,</li>
                <li>Portage immobilier ou exploitation</li>
              </ul>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                Notre accompagnement intègre votre stratégie d’investissement globale ainsi que votre profil de risque, qu’il soit core, core+, value-added ou opportuniste.
              </p>
              <h2
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-l"
                id="modifyFont-l-blockCardPage"
              >
                Investir selon les usages réels du marché
              </h2>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                Grâce à notre compréhension fine des usages professionnels, nous croisons les attentes des utilisateurs et les contraintes techniques. 
                Ainsi, vous investissez dans des actifs adaptés aux pratiques actuelles, avec un vrai potentiel d’occupation, et non simplement dans des mètres carrés.
              </p>
              <h2
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-l"
                id="modifyFont-l-blockCardPage"
              >
                Comment accéder aux opportunités d’investissement ?
              </h2>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 8%;"                
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                Pour des raisons de confidentialité et compte tenu du caractère unique de chaque actif, nos opportunités d’investissement sont exclusivement réservées à nos clients inscrits. Nous vous invitons à nous contacter afin d’obtenir un accès personnalisé à ces offres.
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
            
            Investir dans l'immobilier
          </p>
        </div>
        @if(session('errorForm'))
                        <br>
                        <p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;padding-left: 6%; padding-right: 6%;" >
                          {{ session('errorForm') }}
                        </p>
        @endif
        <form class="form" id="recsurmesure" method="POST" action="{{ url('/investirImmo') }}" autocomplete="off">
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
        
</div>

<div class="row textAlignBlocLogoInvest" style="border-top: 1px solid #DDDDDD;">
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

@endsection

@section('scripts')

  <script type="text/javascript">
    //$(document).ready(function(){
      //-initialize the javascript
      // App.init();
      // App.formElements();
    //});
  let element1 = document.getElementById('modifyFont-l-titleCardPage')
  if (element1.classList.contains('font-l')) {
    element1.classList.replace('font-l', 'font-l-redirectCTA-safari')
  }
  //modifyFont-l-blockCardPage
  let element2 = document.getElementById('font-l')
  if (element2.classList.contains('font-l')) {
    element2.classList.replace('font-l', 'font-l-redirectCTA-safari')
  }
  </script>

<!-- Organization (entreprise) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "https://flexinuse.fr/#organization",
  "name": "fiu – Flex In Use",
  "url": "https://flexinuse.fr/",
  "telephone": "+33755537147",
  "email": "contact@flexinuse.fr",
  "logo": {
    "@type": "ImageObject",
    "url": "https://flexinuse.fr/assets/img/logo-fiu@2x.png",
    "width": 168,
    "height": 80
  },
  "image": {
    "@type": "ImageObject",
    "url": "https://flexinuse.fr/assets/img/homepage-test5.png"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "25 rue de Ponthieu",
    "postalCode": "75008",
    "addressLocality": "Paris",
    "addressRegion": "Île-de-France",
    "addressCountry": "FR"
  },
  "sameAs": [
    "https://www.linkedin.com/company/fiuflexinuse/",
    "https://www.instagram.com/fiu_flexinuse.fr/",
    "https://www.facebook.com/profile.php?id=100089726257268",
    "https://www.youtube.com/@fiu_flexinuse/featured"
  ]
}
</script>

<!-- WebSite + SearchAction -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "@id": "https://flexinuse.fr/#website",
  "url": "https://flexinuse.fr/",
  "name": "fiu – Flex In Use",
  "inLanguage": "fr-FR",
  "publisher": { "@id": "https://flexinuse.fr/#organization" },
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://flexinuse.fr/recherche?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<!-- WebPage (Investir) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://flexinuse.fr/investir#webpage",
  "url": "https://flexinuse.fr/investir",
  "name": "Investir | fiu – Flex In Use",
  "isPartOf": { "@id": "https://flexinuse.fr/#website" },
  "inLanguage": "fr-FR",
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://flexinuse.fr/assets/img/homepage-test5.png"
  }
}
</script>

@endsection
