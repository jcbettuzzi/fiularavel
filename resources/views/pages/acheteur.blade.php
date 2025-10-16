@extends('layouts.defaultFiu')
<!-- ecran = acheteur.blade.php   -->


@section('title')
  Acheter des bureaux pour votre entreprise – Flex In Use
@endsection


@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection


@section('metaDescription')
  fiu – Flex In Use vous aide à acheter des bureaux adaptés à votre activité, vos usages et votre budget. Recherche sur-mesure et accompagnement complet.
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
              alt="Réunion d’équipe pour un projet d’achat de bureaux autour d’une table dans un bureau moderne en verre"
              src="{{ asset('assets/img/acheter_bureaux.webp')}}"
              class="object-center object-cover pointer-events-none boxRadiusTopLeft heightCustomSearchLeft"              
              style="object-fit:cover;object-position:center;width:100%;"
            />
          </div>
          <div class="col-6" style="background-color: #78d776;position: relative; overflow: hidden;">
            <div class="items-center justify-content-center ht-100">
              <div style="display: inline-block;color: black;line-height: 5em;" class="widthPartOneInvest">
                <h1
                  style="margin-bottom: 0px; font-family: Azo-Sans-Uber;line-height: 100%;"                  
                  class="font-l"
                  id="modifyFont-l-titleCardPage"
                >
                    Acheter des bureaux adaptés à votre entreprise
                </h1>
                <p
                  style="line-height: 1.2em;"                  
                  class="font-m"
                  id="modifyFont-m-1"
                >
                    Vous souhaitez acheter un espace de travail pour y installer vos équipes ? fiu – Flex In Use vous aide à acheter des bureaux en accord avec votre mode de fonctionnement, vos ambitions et votre budget.
                </p>
              </div>
            </div>
            <div
              style="position: absolute; top: -0.5%; left: 5%; width: 17%;"              
              id="modifyTopEmojiOneCustomPage"
            >
              <img src="{{ asset('assets/img/emoji-one-CustomSearch.png')}}" width="181.59px" height="169.69px" alt="personnage violet souriant avec une queue de cheval" />
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
                Une recherche immobilière centrée sur votre usage
              </h2>
              <p
                style="line-height: 1.2em; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-2"
              >
                fiu – Flex In Use commence par analyser votre activité, votre manière de travailler, vos envies d’aménagement et vos perspectives d’évolution. Cette compréhension permet de cibler des bureaux à acheter qui répondent à vos usages professionnels, à court et moyen terme.
              </p>
              <h2
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-l"
                id="modifyFont-l-blockCardPage"
              >
                Des bureaux à acheter avec un fort potentiel
              </h2>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                Nous sélectionnons des bureaux pour entreprise bien situés, bien conçus, avec un fort potentiel d’usage. Que vous souhaitiez acheter un plateau nu à réaménager ou un espace de bureaux prêt à l’emploi, nous veillons à trouver un bon équilibre entre prix, surface, localisation et potentiel d’aménagement.
              </p>
              <h2
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-l"
                id="modifyFont-l-blockCardPage"
              >
                Un accompagnement complet pour l’achat de vos bureaux
              </h2>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                fiu – Flex In Use vous accompagne à chaque étape de votre achat de bureaux professionnels. Nous vous aidons à définir vos critères, organisons les visites, facilitons les échanges avec les partenaires (architectes, bureaux d’études, AMO), et assurons le suivi jusqu’à la finalisation de l’achat.
              </p>
              <h2
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-l"
                id="modifyFont-l-blockCardPage"
              >
                Comment accéder aux offres de bureaux à la vente ?
              </h2>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 8%;"                
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                En raison du caractère spécifique et confidentiel de chaque bien, nos offres de bureaux à la vente sont exclusivement accessibles à nos clients inscrits. Nous vous invitons à nous contacter afin d’obtenir un accès personnalisé à ces opportunités.
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
            
            Acheter vos futurs bureaux
          </p>
        </div>
        @if(session('errorForm'))
                        <br>
                        <p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;padding-left: 6%; padding-right: 6%;" >
                          {{ session('errorForm') }}
                        </p>
        @endif
        <form class="form" id="recsurmesure" method="POST" action="{{ url('/acheterBureau') }}" autocomplete="off">
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://flexinuse.fr/#organization",
      "name": "fiu – Flex In Use",
      "url": "https://flexinuse.fr",
      "telephone": "+33755537147",
      "email": "contact@flexinuse.fr",
      "logo": {
        "@type": "ImageObject",
        "url": "https://flexinuse.fr/assets/img/logo-fiu%402x.png"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "25 Rue de Ponthieu",
        "postalCode": "75008",
        "addressLocality": "Paris",
        "addressRegion": "Île-de-France",
        "addressCountry": "FR"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "contactType": "service client",
          "telephone": "+33755537147",
          "email": "contact@flexinuse.fr",
          "availableLanguage": ["fr-FR"],
          "areaServed": "FR"
        }
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://flexinuse.fr/#website",
      "url": "https://flexinuse.fr",
      "name": "fiu – Flex In Use",
      "publisher": { "@id": "https://flexinuse.fr/#organization" },
      "inLanguage": "fr-FR"
    },
    {
      "@type": "Service",
      "@id": "https://flexinuse.fr/#service-achat",
      "name": "Accompagnement à l’achat de bureaux pour entreprises",
      "serviceType": "Conseil & recherche d’actifs – Achat de bureaux",
      "provider": { "@id": "https://flexinuse.fr/#organization" },
      "areaServed": [
        { "@type": "AdministrativeArea", "name": "Île-de-France" },
        { "@type": "Country", "name": "FR" }
      ],
      "audience": { "@type": "BusinessAudience", "audienceType": "Entreprises" },
      "potentialAction": {
        "@type": "CommunicateAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://flexinuse.fr/contact"
        }
      },
      "termsOfService": "https://flexinuse.fr/cgu"
    },
    {
      "@type": ["WebPage","AboutPage"],
      "@id": "https://flexinuse.fr/achat-de-bureau#webpage",
      "url": "https://flexinuse.fr/achat-de-bureau",
      "name": "Acheter des bureaux adaptés à votre entreprise",
      "isPartOf": { "@id": "https://flexinuse.fr/#website" },
      "about": { "@id": "https://flexinuse.fr/#service-achat" },
      "inLanguage": "fr-FR",
      "description": "fiu – Flex In Use vous accompagne pour acheter des bureaux adaptés à vos usages : analyse de vos besoins, sélection d’actifs à fort potentiel, organisation des visites et suivi jusqu’à la finalisation de l’achat.",
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "https://flexinuse.fr/assets/img/acheter_bureaux.webp"
      },
      "hasPart": [
        {
          "@type": "CreativeWork",
          "name": "Une recherche immobilière centrée sur votre usage",
          "description": "Analyse de l’activité, des modes de travail, des envies d’aménagement et des perspectives d’évolution pour cibler des bureaux à acheter en adéquation avec vos usages."
        },
        {
          "@type": "CreativeWork",
          "name": "Des bureaux à acheter avec un fort potentiel",
          "description": "Sélection d’actifs bien situés et bien conçus – plateaux nus à réaménager ou espaces prêts à l’emploi – en recherchant le bon équilibre prix/surface/localisation/potentiel."
        },
        {
          "@type": "CreativeWork",
          "name": "Un accompagnement complet pour l’achat",
          "description": "Définition des critères, organisation des visites, coordination des partenaires (architectes, bureaux d’études, AMO) et suivi jusqu’à la finalisation de l’achat."
        },
        {
          "@type": "CreativeWork",
          "name": "Comment accéder aux offres à la vente ?",
          "description": "Accès réservé aux clients inscrits compte tenu du caractère spécifique et confidentiel des biens ; prise de contact recommandée pour un accès personnalisé."
        }
      ],
      "image": [
        "https://flexinuse.fr/assets/img/acheter_bureaux.webp"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://flexinuse.fr/achat-de-bureau#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://flexinuse.fr" },
        { "@type": "ListItem", "position": 2, "name": "Achat de bureau", "item": "https://flexinuse.fr/achat-de-bureau" }
      ]
    }
  ]
}
</script>

@endsection
