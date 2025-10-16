<?php
$API_KEY = getenv('GOOGLE_API_KEY');
?>
@extends('layouts.defaultFiu')
<!-- ecran = blogOne.blade.php   -->


@section('title')
  {{$oneBlog['title']}}
@endsection

@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('metaDescription')
  {{ $oneBlog['meta_desc'] }}
@endsection

@section('ogImagePrincipale')
<meta property="og:image" content="{{ asset('assets/img/homepage-test5.png')}}"/>
@endsection

@section('pagetitle')

@endsection

@section('custom_css')
<style>
.contentBody{
    color: #000;
    font-family: abril-text;
    font-size: 22px !important;
    font-style: normal;
    font-weight: 400;
    line-height: 30px;
}

h1{
    color: #000;
    font-family: azo-sans-uber;
    font-size: 50px;
    font-style: normal;
    font-weight: 400;
    line-height: 50px;
}

h2{
    font-size: 40px;
    font-weight: 500;
    line-height: 50px;
    font-family: azo-sans-uber;
}

h3{
    color: #000;
    font-family: azo-sans;
    font-size: 30px !important;
    font-style: normal;
    font-weight: 700;
    line-height: 38px;
}

.maxWidthAllContent{
  max-width: calc(100% - 300px); 
}

@media (max-width: 767px) {
    h1 {
        font-size: 40px;
        line-height: 40px;
    }
}

@media (max-width: 680px) {
    h1 {
        font-size: 30px;
        line-height: 30px;
    }
}

@media (max-width: 991px){
    .contentBody{
      font-size: 24px !important;
      line-height: 34px;
    }
}

@media (max-width: 767px) {
    .contentBody {
        font-size: 18px !important;
        line-height: 25px;
    }
}

@media (max-width: 991px) {
    h2 {
        font-family: azo-sans;
        font-size: 40px;
        line-height: 40px;
    }
}

@media (max-width: 767px) {
    h2 {
        font-size: 30px;
        line-height: 32px;
    }
}

@media (max-width: 1440px) {
  .maxWidthAllContent{
    max-width: calc(100% - 30px); 
  }
}

@media (max-width: 1200px) {
  .justifyContentSametheme{
    justify-content: center; 
  }
}

</style>
@endsection


@section('content')
<div style="max-width: 1750px; padding: 0 3%; margin: 0 auto;margin-top: 90px;">
    <div style="display: block; margin: 0 auto;width: 100%;" class="maxWidthAllContent">
        {{--
        <div class="blog-header blog-header--post" style="background-image: url('{{$oneBlog['imageLargeChemin']}}');height: 60vh;background-position: 50%; background-repeat: no-repeat; background-size: cover; border-top-left-radius: 30px; border-top-right-radius: 30px; margin-top: 50px;">
        </div>
        --}}
        <img src="{{url($oneBlog['imageLargeChemin'])}}" @if(!is_null($oneBlog['titreimage'])) alt="{{$oneBlog['titreimage']}}" @endif class="blog-header blog-header--post" style="height: 60vh;background-position: 50%; background-repeat: no-repeat; background-size: cover; border-top-left-radius: 30px; border-top-right-radius: 30px; margin-top: 50px;object-fit: cover; object-position: center; width: 100%;">
        <ul style="display: flex;list-style-type: none;padding-left: 0;padding-top: 1.5%;flex-wrap: wrap;">
          <li>
            @if(Request::is('blog/*'))
              <a href="{{url('blog')}}" style="color: #000; font-size: 18px; font-style: normal; font-weight: 300;text-align: left; text-transform: capitalize;">Blog</a>
            @else
            <a href="{{url('guide')}}" style="color: #000; font-size: 18px; font-style: normal; font-weight: 300;text-align: left; text-transform: capitalize;">Guide</a> 
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="15.741" viewBox="295 939.63 9 15.741" style="height: 12px; margin: 0 8px; width: 12px;"><path d="m301.287 947.497-5.956-5.952a1.12 1.12 0 0 1 0-1.588 1.134 1.134 0 0 1 1.593 0l6.749 6.743c.426.427.436 1.111.033 1.552l-6.777 6.79c-.22.22-.51.328-.797.328a1.12 1.12 0 0 1-.797-1.917l5.952-5.956Z" fill-rule="evenodd" data-name="Icon ionic-ios-arrow-forward"></path></svg>
          </li>
          <li>
            @foreach($oneBlog['categoryOfBlog'] as $keyNameCategory => $namecategory)
              @if($keyNameCategory == count($oneBlog['categoryOfBlog'])-1)
                <a href="{{url('tag/'.$oneBlog['catogory_blog_slug'][$keyNameCategory])}}" style="color: #000; font-size: 18px; font-style: normal; font-weight: 300;text-align: left; text-transform: capitalize;"><?php echo $namecategory; ?></a>
              @else
                <a href="{{url('tag/'.$oneBlog['catogory_blog_slug'][$keyNameCategory])}}" style="color: #000; font-size: 18px; font-style: normal; font-weight: 300;text-align: left; text-transform: capitalize;"><?php echo $namecategory.','; ?></a>
              @endif
            @endforeach
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="15.741" viewBox="295 939.63 9 15.741" style="height: 12px; margin: 0 8px; width: 12px;"><path d="m301.287 947.497-5.956-5.952a1.12 1.12 0 0 1 0-1.588 1.134 1.134 0 0 1 1.593 0l6.749 6.743c.426.427.436 1.111.033 1.552l-6.777 6.79c-.22.22-.51.328-.797.328a1.12 1.12 0 0 1-.797-1.917l5.952-5.956Z" fill-rule="evenodd" data-name="Icon ionic-ios-arrow-forward"></path></svg>
          </li>
          <li>
            @if(Request::is('blog/*'))
              <a href="{{url('blog/'.$oneBlog['slug'])}}" style="color: #000; font-size: 18px; font-style: normal; font-weight: 300;text-align: left; text-transform: capitalize;">{{$oneBlog['title']}}</a>
            @else
              <a href="{{url('guide/'.$oneBlog['slug'])}}" style="color: #000; font-size: 18px; font-style: normal; font-weight: 300;text-align: left; text-transform: capitalize;">{{$oneBlog['title']}}</a>
            @endif
          </li>
        </ul>
        <div style="color: #000; font-family: azo-sans; font-size: 18px; font-style: normal; font-weight: 300; line-height: 25px;padding-top: 2%; padding-bottom: 2%;">Publié le
          <?php setlocale(LC_TIME, 'fr_FR.UTF-8');
            $date = new DateTime(); 
            $mois = $date->format('F');$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE, null, null, 'MMMM');
            $mois = $formatter->format($date);
            $annee = date("Y");
            $jour = date("d");
            $concatJourMoisAnnee = $jour.' '.$mois.' '.$annee;
            echo $concatJourMoisAnnee;
          ?>
        </div>
        <div style="padding-bottom:2%;">
          @foreach($oneBlog['categoryOfBlog'] as $keyNameCategory => $namecategory)
              <a href="{{url('tag/'.$oneBlog['catogory_blog_slug'][$keyNameCategory])}}" style="background: #7dd175; border: 1px solid #7dd175; border-radius: 31px;font-size: 14px !important;line-height: 28px !important;padding: .8rem .8rem .8rem;">{{$namecategory}}</a>
          @endforeach
        </div>
        <div class="contentBody" style="padding-bottom: 5%;">
          <?php
            if (str_starts_with($oneBlog['post_body'], '<h2>')) {
              $oneBlog['post_body'] = $oneBlog['post_body'] = preg_replace('/<h2>(.*?)<\/h2>/', '<h1>$1</h1>', $oneBlog['post_body'],1);
            }
          ?>
          {!! $oneBlog['post_body'] !!}
        </div>
    </div>     
</div>
<hr>
<div style="max-width: 1750px; padding: 0 3%; margin: 0 auto;margin-top: 90px;">
  <h2>SUR LE MÊME THÈME</h2>
  <div style="gap: 2%;" class="flex-wrap-row justifyContentSametheme" >
          @foreach($oneBlog['suggestionOneBlog'] as $oneSuggestion)
            @if($oneSuggestion['areaproduction'] == 1)
              @if($oneSuggestion['blog_posts_id'] !== $oneBlog['blog_posts_id'])
                <div class="cardDisplayProperty imgRadiusTop bg-blanc" style="
                  max-width: 24vw;
                  max-height: 650;
                  cursor: pointer;
                  box-shadow: 0 11px 30px rgba(154, 161, 177, .2);
                  min-width: 318px;
                  margin-bottom: 8%;
                "
                >
                  <div style="maxHeight: 419px;">
                    <img src="{{$oneSuggestion['imageLargePathOneSuggestion']}}" class="imgRadiusTop" style="width:100%;height:400px;object-fit: cover;object-position: center center;" alt="{{$oneSuggestion['titreimage']}}">
                  </div>
                  <div class="bg-blanc addPaddingBottomOnContentProperty" style=" padding-left: 7%; padding-top: 8%; padding-right: 8%; ">
                    @foreach($oneBlog['categoryOfBlog'] as $keyNameCategory => $namecategory)
                      <a href="{{url('tag/'.$oneBlog['catogory_blog_slug'][$keyNameCategory])}}" style="background: #7dd175; border: 1px solid #7dd175; border-radius: 31px;font-size: 14px !important;line-height: 28px !important;padding: .8rem .8rem .8rem;">{{$namecategory}}</a>
                    @endforeach
                    <h3 style=" color: #000; font-family: Azo Sans, sans-serif; font-size: 28px; font-style: normal; font-weight: 800; line-height: inherit; text-align: left; ">
                      {{$oneSuggestion['title']}}
                    </h3>
                    <a style="
                      font-family: azo-sans-uber, sans-serif;
                      display: flex;
                      margin-bottom: 1.3em;
                      font-weight: 100;
                      align-items: center;
                      align-content: center;
                      padding-top: 4%;
                      " 
                      class="discover-arrow font-xs"
                      @if(Request::is('blog/*')) 
                      href="{{ url('/blog/'.$oneSuggestion['slug']) }}"
                      @else
                      href="{{ url('/guide/'.$oneSuggestion['slug']) }}"
                      @endif
                    >
                      <div style=" padding-right: 2%; ">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26.311" height="11.61" viewBox="0 7.448 26.311 11.61">
                            <path d="m21.166 18.73 4.83-4.687c.21-.203.315-.479.315-.783v-.014c0-.304-.105-.58-.314-.784l-4.83-4.686a1.034 1.034 0 0 0-1.511 0 1.157 1.157 0 0 0 0 1.58l2.903 2.778H1.074c-.595 0-1.074.5-1.074 1.119 0 .63.48 1.12 1.07 1.12h21.485l-2.903 2.776a1.157 1.157 0 0 0 0 1.581c.42.437 1.095.437 1.514 0Z" fill="black" fill-rule="evenodd" data-name="Icon ionic-md-arrow-round-forward"></path>
                          </svg>
                      </div>
                      Découvrir
                    </a>
                  </div>
                </div>
              @endif
            @endif
          @endforeach
  </div>
</div>
<div
    style="
      height: 100%;
      position: relative;
      background-color: #000;
      border-top-left-radius: 80px;
    "
    class="wd-100"
>
      <div class="unionRightLeftContact wd-100">
        <div class="wd-40 leftPartContact">
          <div class="topContactTitle blocEmojiAndMessage">
            <div style=" display: block; position: relative; ">
              <div class="emojiContact">
                <img src="{{ asset('assets/img/cta-contact-yellow-eyelash.png')}}" width="100%" height="100%" alt="personnage jaune souriant qui regarde vers la droite avec de longs cils" />
              </div>

              <div style=" position: relative; ">
                <h2
                  style="
                    color: #fff;
                    font-family: abril-text;
                    line-height: 1.2em;
                  "
                  class="fontContactTitle"
                  id="modifyFontContactCTAFormTitle"
                >
                  <div class="textLeftContactPartOne">On reste</div>
                  <div class="textLeftContactPartTwo">en contact ?</div>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="wd-60 rightPartContact">
          <div class="items-center justify-content-center contentRightContact">
            <label id="p4" style=" color: #fff;display: none; ">Ce deuxième paragraphe également</label>
            <div class="widthPartInputContact">
              <form id="inscrirenewsletterAccueil" method="POST" action="{{ url('/inscrirenewsletter/') }}" style="gap: 10px; display: flex;">
                      <input type="text"                      
                      class="inputEmail inputEmailContact highHeightInputContactCTAForm"                    
                      placeholder="Adresse e-mail"
                      style=" font-family: Azo Sans, sans-serif; "                      
                       name="emailletterAccueil" id="emailletterAccueil" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">                      
                      <button 
                        class="button buttonFollowerContact highHeightInputContactCTAForm"
                        style="
                              color: #000;
                              border-radius: 8px;
                              text-transform: none;
                              background-color: #9E9DFF;
                              font-family: azo-sans-web,sans-serif;
                              font-weight: 900;
                              font-size: 2rem;
                              z-index: 1;
                              border: none;
                            "
                        type="button"  value="ajoutemailletterAccueil" id="ajoutemailletterAccueil">                        
                        S'abonner
                      </button>                       
              </form>
            </div>
            <p
              class="wd-50 font-m"
              style="
                color: #fff;
                line-height: 1.2em;
                margin-bottom: 0.5%;
              "
              id="modifyFont-m-ContactCTAForm"
            >
              Inscrivez-vous à notre newsletter pour être informé.e de nos trouvailles, nos astuces et conseils, l’actu
              des bureaux opérés
            </p>
            <p
              class="wd-50"
              style="
                color: #A5A5A5;
                line-height: 1em;
                margin-bottom: 2%;
                z-index: 1;
                font-size: 1.2rem;
                font-family: Azo Sans, sans-serif;
              "
            >
              En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous
              prenez connaissance de <u>notre politique de confidentialité</u>. Vous pouvez vous désinscrire à tout
              moment à l’aide des liens de désinscription. Vos données personnelles collectées sont uniquement destinées
              à fiu et seront uniquement exploitées dans le cadre de la soumission effective d’un formulaire du site.
            </p>
          </div>
        </div>
      </div>
      <div class="starContactOne">
        <img  src="{{ asset('assets/img/etoileContact-1.png')}}" width="28" height="28" alt="Quatre traits blancs formant un petit X" />
      </div>
      <div class="starContactTwo">
        <img src="{{ asset('assets/img/etoileContact-2.png')}}" width="48" height="48" alt="Quatre traits blancs formant un grand X" />
      </div>
</div> 
@endsection

<!-- Variables php pour schema.org -->
<?php
//Obtenir la catégorie
$segment = request()->segment(1);

$categorieSlug = implode('', $oneBlog['catogory_blog_slug']);

$categorieNom = implode('', $oneBlog['categoryOfBlog']);

//Mise en place du bon format
$posted_at = new DateTime($oneBlog['posted_at'], new DateTimeZone("+02:00"));
$posted_at = $posted_at->format("Y-m-d\TH:i:sP");

$updated_at = new DateTime($oneBlog['updated_at'], new DateTimeZone("+02:00"));
$updated_at = $updated_at->format("Y-m-d\TH:i:sP");

$articleSelection = json_encode($oneBlog['categoryOfBlog']);

//Test de variable
// echo $var;
// print_r($array);
?>

@section('scripts')

@if($segment === 'blog')
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
      "telephone": "+33 7 55 53 71 47",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "25 rue de Ponthieu",
        "postalCode": "75008",
        "addressLocality": "Paris",
        "addressCountry": "FR"
      },
      "sameAs": [
        "https://www.instagram.com/fiu_flexinuse.fr/",
        "https://www.facebook.com/profile.php?id=100089726257268",
        "https://www.linkedin.com/company/fiuflexinuse/",
        "https://www.youtube.com/@fiu_flexinuse/featured"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://flexinuse.fr/#website",
      "url": "https://flexinuse.fr/",
      "name": "fiu"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://flexinuse.fr/blog/<?= $oneBlog['slug'] ?>#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Blog",
          "item": "https://flexinuse.fr/blog"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "<?= $categorieNom ?>",
          "item": "https://flexinuse.fr/tag/<?= $categorieSlug ?>"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "<?= $oneBlog['title'] ?>",
          "item": "https://flexinuse.fr/blog/<?= $oneBlog['slug'] ?>"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://flexinuse.fr/blog/<?= $oneBlog['slug'] ?>#webpage",
      "url": "https://flexinuse.fr/blog/<?= $oneBlog['slug'] ?>",
      "name": "<?= $oneBlog['title'] ?>",
      "inLanguage": "fr-FR",
      "isPartOf": { "@id": "https://flexinuse.fr/#website" },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "<?= $oneBlog['imageLargeChemin'] ?>"
      },
      "datePublished": "<?= $posted_at ?>",
      "dateModified": "<?= $updated_at ?>",
      "breadcrumb": { "@id": "https://flexinuse.fr/blog/<?= $oneBlog['slug'] ?>#breadcrumb" }
    },
    {
      "@type": "BlogPosting",
      "@id": "https://flexinuse.fr/blog/<?= $oneBlog['slug'] ?>#article",
      "url": "https://flexinuse.fr/blog/<?= $oneBlog['slug'] ?>",
      "headline": "<?= $oneBlog['title'] ?>",
      "description": "<?= $oneBlog['meta_desc'] ?>",
      "image": [
        {
          "@type": "ImageObject",
          "url": "<?= $oneBlog['imageLargeChemin'] ?>"
        },
        "https://flexinuse.fr/assets/img/logo-fiu%402x.png"
      ],
      "datePublished": "<?= $posted_at ?>",
      "dateModified": "<?= $updated_at ?>",
      "author": { "@type": "Organization", "name": "fiu - Flex In Use", "@id": "https://flexinuse.fr/#organization" },
      "publisher": { "@id": "https://flexinuse.fr/#organization" },
      "mainEntityOfPage": { "@id": "https://flexinuse.fr/blog/<?= $oneBlog['slug'] ?>#webpage" },
      "articleSection": "<?= $oneBlog['title'] ?>",
      "inLanguage": "fr-FR",
      "isPartOf": { "@id": "https://flexinuse.fr/#website" },
      "copyrightHolder": { "@id": "https://flexinuse.fr/#organization" },
      "copyrightYear": 2025
    }
  ]
}
</script>
@endif

@if($segment === 'guide')
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
        "streetAddress": "25 Rue de Ponthieu",
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
    },
    {
      "@type": "WebSite",
      "@id": "https://flexinuse.fr/#website",
      "url": "https://flexinuse.fr",
      "name": "fiu – Flex In Use",
      "publisher": { "@id": "https://flexinuse.fr/#organization" },
      "inLanguage": "fr-FR",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://flexinuse.fr/recherche?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://flexinuse.fr/guide/<?= $oneBlog['slug'] ?>#webpage",
      "url": "https://flexinuse.fr/guide/<?= $oneBlog['slug'] ?>",
      "name": "<?= $oneBlog['title'] ?>",
      "isPartOf": { "@id": "https://flexinuse.fr/#website" },
      "inLanguage": "fr-FR",
      "datePublished": "<?= $posted_at ?>",
      "dateModified": "<?= $updated_at ?>",
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "<?= $oneBlog['imageLargeChemin'] ?>"
      }
    },
    {
      "@type": "BlogPosting",
      "@id": "https://flexinuse.fr/guide/<?= $oneBlog['slug'] ?>#article",
      "mainEntityOfPage": { "@id": "https://flexinuse.fr/guide/<?= $oneBlog['slug'] ?>#webpage" },
      "headline": "<?= $oneBlog['title'] ?>",
      "description": "<?= $oneBlog['meta_desc'] ?>",
      "image": [
        "<?= $oneBlog['imageLargeChemin'] ?>"
      ],
      "author": { "@id": "https://flexinuse.fr/#organization" },
      "publisher": { "@id": "https://flexinuse.fr/#organization" },
      "datePublished": "<?= $posted_at ?>",
      "dateModified": "<?= $updated_at ?>",
      "inLanguage": "fr-FR",
      "articleSection": <?= $articleSelection ?>
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://flexinuse.fr/guide/<?= $oneBlog['slug'] ?>#breadcrumbs",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Guide",
          "item": "https://flexinuse.fr/guide"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "<?= $oneBlog['title'] ?>",
          "item": "https://flexinuse.fr/guide/<?= $oneBlog['slug'] ?>"
        }
      ]
    }
  ]
}
</script>
@endif

@endsection