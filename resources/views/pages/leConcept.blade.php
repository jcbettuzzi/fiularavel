@extends('layouts.defaultFiu')
<!-- ecran = leConcept.blade.php   -->
@section('title')
  Louez un bureau professionnel avec la plateforme fiu : le concept
@endsection

@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('metaDescription')
  Trouver et louer un espace de bureau adapté à votre usage en 1 clic, la plateforme fiu vous met en relation avec les meilleurs espaces. Découvrez fiu !
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('custom_css')
<style>
  .img-left-part-2-concept{
    width: 600px;
    height: 700px;
  }
  @media only screen and (max-width: 600px){
    .img-left-part-2-concept{
      width: 100%;
      height: 100%;
    }
  }
</style>
@endsection
@section('content')

<section class="py-5">
  <div>
    <div class="flex-wrap-row bloc-one-custom" style="margin-top: 90px;
    ">
      <div class="col-6 boxRadiusTopLeft" style="position: relative;">
        <img
          alt="cta-who-are-we"
          src="{{ asset('assets/img/photo-concept-bloc-1.png')}}"
          class="object-center object-cover pointer-events-none boxRadiusTopLeft heightCustomSearchLeft"
          layout="fill"
          style=" object-fit:cover; object-position: center; width:100%;"
        />
      </div>
      <div class="col-6" style="background-color: #F19A60; position: relative; overflow: hidden;">
        <div class="items-center justify-content-center ht-100">
          <div style="display: inline-block;color: black;line-height: 5em;width: 60%;">
            <div style="right: -7%; position: absolute; top: 15%;">
              <img src="{{ asset('assets/img/emoji-1-bloc-1-concept.png')}}" width="220px" height="220px" alt="personnage rose mécontent qui tire la langue" />
            </div>
            <div class="items-center justify-content-center" style=" height: 100%">
              <div style=" display: block">
                <h1 style=" padding-top: 15%; margin-bottom: 10px" class="font-l">
                  Le concept
                </h1>
                <p style=" margin-top: 0px" class="font-m">
                  Comment ça marche, <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> ?
                </p>
              </div>
            </div>
            <div
              style="
                left: 5%;
                position: absolute;
                bottom: -6%;
            "
            >
              <img src="{{ asset('assets/img/cta-contact-yellow-eyelash.png')}}" width="120px" height="120px" alt="personnage jaune souriant qui regarde vers la droite avec de longs cils" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="flex-wrap-row"
      style="
        width: 100%;
        margin-top: 0.5%;
    "
    >
      <div class="col-6 part-two-left-concept">
        <h3
          style="
            color: #1C4151;
            margin-bottom: 0px;;
            font-family: azo-sans-web; sans-serif;
            fontWeight: 600;
            margin-top: 5%;
        "
          class="font-m"
        >
          Notre constat
        </h3>
        <h2 style=" margin-top: 2%; line-height: 1.2em" class="fontSubTitle">
          Le bureau <br />
          est un lieu de vie
        </h2>
        <p style=" line-height: 1.2em" class="font-m-whoAreWe">
          Il constitue un critère d'épanouissement des équipes, il véhicule l'image de votre société, auprès de vos
          collaborateurs, clients et partenaires. Pour remplir pleinement ses fonctions et vous donner le retour sur
          investissement il doit être opérationnel et statuaire.
        </p>
        <p style=" line-height: 1.2em" class="font-m-whoAreWe">
          L'offre est pléthorique entre les offreurs individuels, les grands groupes qui vous proposent uniquement sur
          les biens propres.
        </p>
        <p style=" line-height: 1.2em" class="font-m-whoAreWe">
          La recherche est chronophage, la lecture des offres pas toujours évidente, elle requiert des connaissances
          métier. Il faut souvent agir tout en posant les bonnes questions.
        </p>
      </div>
      <div class="justify-content-center col-6" style=" padding-top: 5%; position: relative; ">
        <div style=" display: inline-block;">
          <img src="{{asset('assets/img/photo-2-bloc-2-concept-A.png')}}" style="border-radius: 35px;" class="img-left-part-2-concept" alt="jeune femme debout tenant des feuilles, prenant la parole lors d’une réunion d’équipe en entreprise, entourée de collègues attentifs">
        </div>
      </div>
    </div>
  </div>
  <div class="part-title-goal-concept">
    <h3 class="title-goal-concept">Notre objectif</h3>
  </div>
  <div
    class="flex-wrap-row"
    style="
      width: 100%;
      margin-top: 3.5%;
      justify-content: center;
      gap: 1.5%;
    "
  >
    <div
    style="
      background-color: #9E9DFF;
      border-radius: 30px;
      text-align: center;
      height: 50vh;
    "
    class="targetWidth"
    >
    <div style=" margin-top: 10%">
      <img src="{{asset('assets/img/Groupe_569.png')}}" width="80px" height="78px" alt="emoji souriant et content" />
    </div>
    <h4 style=" margin-bottom: 0px; margin-top: 3%" class="font-title-goal-concept">
      Centraliser
    </h4>
    <p
      style="
        padding-left: 6%;
        padding-right: 6%;
        padding-bottom: 7%;
        line-height: 1.2em;
        margin-top: 7%;
    "
      class="font-m-whoAreWe"
    >
      Centraliser l'ensemble des offres de Paris et Île de France
    </p>
  </div>
  <div
    style="
      background-color: #7DD175;
      border-radius: 30px;
      text-align: center;
      height: 50vh;
  "
    class="targetWidth"
  >
    <div style=" margin-top: 10%">
      <img src="{{asset('assets/img/Groupe_563.png')}}" width="80px" height="78px" alt="emoji qui fait un clin d'œil" />
    </div>

    <h4 style=" margin-bottom: 0px; margin-top: 3%;" class="font-title-goal-concept">
      Simplifier
    </h4>
    <p
      style="
        padding-left: 6%;
        padding-right: 6%;
        padding-bottom: 7%;
        line-height: 1.2em;
        margin-top: 7%;
    "
      class="font-m-whoAreWe"
    >
      Simplifier la recherche afin de vous proposer un maximum d'options pertinentes en un minimum de temps
    </p>
  </div>
  <div
    style="
      background-color: #F6CEDE; border-radius: 30px; text-align: center; height: 50vh"
    class="targetWidth"
  >
    <div style=" margin-top: 10%">
      <img src="{{asset('assets/img/Groupe_567.png')}}" width="80px" height="78px" alt="emoji qui tire la langue" />
    </div>

    <h4 style=" margin-bottom: 0px; margin-top: 3%" class="font-title-goal-concept">
      Digitaliser
    </h4>
    <p
      style="
        padding-left: 6%;
        padding-right: 6%;
        padding-bottom: 7%;
        line-height: 1.2em;
        margin-top: 7%;
    "
      class="font-m-whoAreWe"
    >
      Digitaliser votre parcours afin de vous donner accès aux annonces au moment et à l'endroit où vous le souhaitez
    </p>
  </div>
  <div
    style="
      background-color: #F8D14F;
      border-radius: 30px;
      text-align: center;
      height: 50vh;
  "
    class="targetWidth"
  >
    <div style=" margin-top: 10%">
      <img src="{{asset('assets/img/Groupe_565.png')}}" width="80px" height="78px" alt="emoji avec un air apaisé" />
    </div>
    <h4 style=" margin-bottom: 0px; margin-top: 3%" class="font-title-goal-concept">
      Humaniser
    </h4>
    <p
      style="
        padding-left: 6%;
        padding-right: 6%;
        padding-bottom: 7%;
        line-height: 1.2em;
        margin-top: 7%;
    "
      class="font-m-whoAreWe"
    >
      Humaniser votre recherche en complétant votre parcours digital par l'accompagnement d'un expert
    </p>
  </div>
    <div
      style="
        height: 100%;
        width: 100%;
        border: fill;
        display: flex;
        align-items: center;
        align-content: center;
        flex-direction: column;
        border-top-leftRadius: 80;
        justify-content: center;
        background-color: #1C4151;
        text-align: center;
        margin-top: 5%;
    "
    >
      <p style=" color: #52C550; margin-top: 5%; font-family: azo-sans-web" class="font-m">
        Notre concept
      </p>
      <p
        style="
          text-transform: uppercase;
          color: white;
          margin-top: 0px;
          margin-bottom: 0px;
          font-family: azo-sans-uber; sans-serif;
      "
        class="fontSubTitle"
      >
        nous sommes <u>la</u> place de marché <br /> pour la location de bureaux opérés
      </p>
      <p
        style="
          color: white;
          padding-left: 25%;
          padding-right: 25%;
      "
        class="font-m"
      >
        Une place de marché où vous êtes sûr de trouver une réponse adaptée et où vous pouvez revenir pour faire
        évoluer votre lieu de travail selon les besoins de votre activité, votre budget, vos aspirations, votre mode
        de travail, votre métier, le secteur de votre entreprise, la nature de vos collaborateurs.
      </p>
      <a href="{{ url('/location-bureau-entreprise') }}" style="margin-bottom:7%;">
      <button
        style="
          font-size:2.2rem;
          padding-top:15px;
          height:auto;
          padding-left:18px;
          padding-right:18px;
          padding-bottom:15px;
          font-weight:900;
          border-radius:100px;
          text-transform:none;
          font-family:azo-sans-web, sans-serif;
          margin-bottom:7%;
          border:none
      "
        class="boutonBureauIdeal"
      >
        Trouvez votre bureau idéal
      </button>
      </a>
    </div>
  </div>
</section>

@endsection

@section('scripts')
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

<!-- WebPage (Plateforme Location Bureau) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://flexinuse.fr/platefome-location-bureau#webpage",
  "url": "https://flexinuse.fr/platefome-location-bureau",
  "name": "Plateforme de location de bureaux | fiu – Flex In Use",
  "isPartOf": { "@id": "https://flexinuse.fr/#website" },
  "inLanguage": "fr-FR",
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://flexinuse.fr/assets/img/homepage-test5.png"
  }
}
</script>

@endsection