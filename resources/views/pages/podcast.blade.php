@extends('layouts.defaultFiu')
<!-- ecran = podcast.blade.php   -->


@section('title')
  fiu talk : le podcast sur l’immobilier d’entreprise
@endsection

@section('metaDescription')
  Découvrez fiu talk, le podcast qui fait parler le bureau : tendances, récits d’acteurs du tertiaire et réflexions sur les nouveaux usages du lieu de travail.
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
          <div class="col-6" style="background-color: #F19A60;position: relative; overflow: hidden;">
            <div class="items-center justify-content-center ht-100">
              <div style="display: inline-block;color: black;line-height: 5em;width: 60%;">
                <h1
                  style="margin-bottom: 0px; font-family: Azo-Sans-Uber;"                  
                  class="font-l"
                  id="modifyFontCustomPage-1"
                >
                  fiu talk, le podcast qui<span style="display: block; padding-top: 2%;">fait parler le bureau</span>
                </h1>
                <p
                  style="line-height: 1.2em;"                  
                  class="font-m"
                  id="modifyFont-m-1"
                >
                  Un podcast incontournable pour comprendre l’évolution des bureaux et anticiper le futur du
                  travail.
                </p>
              </div>
            </div>
            
          </div>
        </div>
        <div class="flex-wrap-row" style="padding-bottom: 0!important;">
          <div class="col-12">
            <div style="padding-left: 10%; padding-right: 10%; margin-top: 6%;">
              <h1
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-l"
                id="modifyFontCustomPage-2"
              >
                fiu talk : le podcast qui explore l’immobilier d’entreprise et
                les nouvelles façons de travailler
              </h1>
              <p
                style="line-height: 1.2em; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-2"
              >
                Notre podcast fiu talk donne la parole aux acteurs de l'immobilier d'entreprise et aux
                utilisateurs des bureaux opérés et espaces de coworking. Les opérateurs partagent leur
                vision du marché et les tendances à venir, tandis que les clients utilisateurs racontent leur
                quotidien dans leurs nouveaux espaces de travail flexibles.
              </p>
              <h2
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-m"
                id="modifyFontCustomPage-2"
              >
                Un podcast né de l’ADN de fiu - Flex In Use
              </h2>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                Chez fiu - Flex In Use, nous pensons que le bureau est bien plus qu’un simple lieu de travail.
                C’est un levier stratégique, un facteur d’engagement, un symbole de culture d’entreprise.
                C’est aussi un outil d’agilité qui doit s’adapter aux mutations permanentes du monde
                professionnel. C’est dans cette logique que fiu talk est né : pour prolonger notre mission
                au-delà de la mise en relation entre propriétaires et utilisateurs de bureaux. Le podcast
                s’inscrit dans notre vision globale de l’immobilier : un secteur vivant, en mouvement, au
                cœur des enjeux de flexibilité, d’identité, de performance et d’impact.
              </p>
              <h2
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                class="font-m"
                id="modifyFontCustomPage-2"
              >
                Plongez dans l’univers de fiu talk
              </h2>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"                
                class="font-custom-p"
                id="modifyFont-m-4"
              >
                Chaque épisode de fiu talk est une invitation à s’asseoir à notre table, à écouter des
                parcours inspirants, des points de vue qui questionnent le monde du travail et les espaces
                qui l’abritent. Ici, pas de jargon, pas de mise en scène : juste des échanges vrais, vivants,
                enregistrés comme si vous étiez avec nous.
              </p>
              <p
                style=" line-height: 1.2em; margin-top: 2%;"                
                class="font-custom-p"
                id="modifyFont-m-5"
              >
                Les deux premiers épisodes de fiu talk sont disponibles à l’écoute, directement sur cette
                page. Que vous soyez au bureau, dans un train ou sur une terrasse, fiu talk vous
                accompagne partout.
              </p>
              <p
                style=" line-height: 1.2em; margin-top: 2%;"                
                class="font-custom-p"
                id="modifyFont-m-5"
              >
              Vous préférez écouter via votre plateforme habituelle ? Le podcast est également accessible
              sur Spotify, Amazon Music, Deezer et YouTube.
              </p>
            </div>
          </div>
          <div class="flex-wrap-row" style="padding-bottom: 0!important;">
            <div style="padding-left: 10%; padding-right: 10%;">
            <div class="col-9">
              <h2
                  style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                  class="font-m"
                  id="modifyFontCustomPage-2"
              >
                  Découvrez nos épisodes de fiu talk
              </h2>
              <p
                  style=" line-height: 1.2em; margin-top: 2%;"                
                  class="font-custom-p"
                  id="modifyFont-m-5"
              >
                Depuis son lancement, fiu Talk a accueilli des invités qui, chacun à leur manière, réinventent
                l’usage du bureau. Dans notre premier épisode, nous avons rencontré l’équipe de <a href="https://www.deskeo.com/fr/" target="_blank" style="font-family: Abril-Text;text-decoration: underline;" class="font-m">Deskeo</a>,
                acteur majeur du bureau flexible, pour parler sur-mesure, agilité immobilière et
                personnalisation des espaces professionnels. Puis, cap sur <a href="https://beetogreen.com/" target="_blank" style="font-family: Abril-Text;text-decoration: underline;" class="font-m">BeeToGreen</a>, une structure
                engagée qui lie mobilité et transition écologique.
              </p>
              <p
                  style=" line-height: 1.2em; margin-top: 2%;"                
                  class="font-custom-p"
                  id="modifyFont-m-5"
              >
                Notre deuxième épisode nous a conduits chez <a href="https://www.comeandwork.com/" target="_blank" style="font-family: Abril-Text;text-decoration: underline;" class="font-m">Come and Work</a>, acteur du bureau opéré
                conçu pour accueillir les professionnels en mouvement, ainsi qu'à la rencontre de
                l'entreprise <a href="https://www.vona.eu/" target="_blank" style="font-family: Abril-Text;text-decoration: underline;" class="font-m">Vona</a>, cabinet de conseil indépendant en cybergouvernance.
              </p>
              <h2
                  style="font-family: Azo-Sans-Uber; line-height: 1.2em;"                
                  class="font-m"
                  id="modifyFontCustomPage-2"
              >
                  Restez à l’écoute de fiu talk
              </h2>
              <p
                  style=" line-height: 1.2em; margin-top: 2%;"                
                  class="font-custom-p"
                  id="modifyFont-m-5"
              >
                Pour ne manquer aucun épisode de fiu talk, abonnez-vous à notre newsletter ou
                suivez-nous sur les réseaux sociaux de fiu - Flex In Use.
              </p>
              <a href="https://linktr.ee/fiu_talk" target="_blank"> <button class="items-center marginButtonAccueilPart1" type="button" style="color: #000; height: 100%; font-size: 2rem; overflow: hidden; pointer-events: auto; background-color: #9E9DFF; border-radius: 50px; border:none; white-space: nowrap; padding-right: 3%; padding-left: 3%; margin: 0 auto; "> <h4 style=" font-size: 2rem;padding-right: 10px; "> Ecouter </h4> </button> </a>
            </div>
            <div class="col-3">
                <iframe name="Ausha Podcast Player" frameborder="0" loading="lazy" id="ausha-jifd" height="420" style="border: none; width:100%; height:420px" src="https://player.ausha.co/?showId=edenKH3Nv4pw&color=%23751CBF&playlist=true&v=3&playerId=ausha-jifd"></iframe><script src="https://player.ausha.co/ausha-player.js"></script>
            </div>
            </div>
          </div>
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

<!-- WebPage (Podcast) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://flexinuse.fr/podcast#webpage",
  "url": "https://flexinuse.fr/podcast",
  "name": "Podcast | fiu – Flex In Use",
  "isPartOf": { "@id": "https://flexinuse.fr/#website" },
  "inLanguage": "fr-FR",
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://flexinuse.fr/assets/img/homepage-test5.png"
  }
}
</script>

@endsection
