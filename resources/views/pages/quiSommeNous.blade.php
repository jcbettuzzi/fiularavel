@extends('layouts.defaultFiu')
<!-- ecran = quiSommeNous.blade.php   -->
@section('title')
  fiu – Flex In Use – Experts en espaces de travail à Paris
@endsection


@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection


@section('metaDescription')
  Chez fiu, nous facilitons la location de bureaux flexibles pour les entreprises. Découvrez l’équipe d’experts qui vous accompagne dans vos recherches !  
@endsection

@section('pagetitle')
  Fiu Laravel
@endsection

@section('custom_css')
<style>
  
@media only screen and (max-width: 1200px){
    .reduceByTwoEmoticon{
        transform: scale(0.5);
    }
    .reduceEmoticonLessByTwo{
        transform: scale(0.5);
    }
}

</style>
@endsection

@section('content')

<section class="py-5">
  <div class="bloc-1-whoAreWe-left">
    <div class="flex-wrap-row bloc-one-custom" style="margin-top: 90px;">
      <div class="col-6 boxRadiusTopLeft" style="position: relative";>
        <img
          alt="cta-who-are-we"
          src="{{ asset('assets/img/photoWhoAreWe-bloc-1.png')}}"
          class="object-center object-cover pointer-events-none boxRadiusTopLeft heightCustomSearchLeft"
          layout="fill"
          style=" object-fit:cover; object-position: center; width:100%;"
        />
      </div>
      <div class="col-6" style="background-color: #9E9DFF; position: relative; overflow: hidden;">
        <div class="items-center justify-content-center ht-100">
          <div style="display: inline-block; color: black; line-height: 5em; width: 60%;">
            <div style=" position: absolute; top: 5%; right: 5%; transform: rotate(-10deg)">
              <img src="{{ asset('assets/img//emoji-bloc-1-whoAreWe.png')}}" width="206px" height="206px" alt="personnage jaune de forme arrondi avec des lunettes" />
            </div>
            <div class="items-center justify-content-center" style=" height: 100%">
              <div style=" dispay: inline-block">
                <div
                  style="
                    line-height: '0.95em';
                    font-family: azo-sans-uber; sans-serif;
                    font-weight: bold;
                    font-size: rem;
                "
                  id="modifyLineHeight-whoAreWePage"
                >
                  <h1
                    style="paddingLeft: 20%"
                    id="modifyFont-l-whoAreWePage"
                    class="font-l"
                  >
                    Qui <br/><br/> sommes-nous ?
                  </h1>
                </div>
                <p
                  class="font-m"
                  style=" marginTop: 0px; paddingLeft: 20%; addingRight: 20%"
                  id="modifyFont-m-whoAreWePage-1"
                >
                  De jeunes professionnels venus de différents univers qui se sont reconnus chez <b><?php echo str_replace("&", " ", getenv('nameFiu')); ?></b>. Ils y ont
                  trouvé de l'intérêt, de la motivation, de la curiosité.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="flex-wrap-row"
    style="
      width: 100%;
      margin-top: 5%;
    "
  >
    <div class="col-6 textBloc-2-WhoAreWe">
      <h2
        style=" lineH-height: 1.2em; margin-bottom: 0px; margin-top: 0px "
        id="modifyFontSubTitle-whoAreWePage-1"
        class="font-m"
      >
        <div style=" white-space: nowrap ">Une équipe d'experts</div>
        <span style=" white-space: nowrap ">formée à l'immobilier</span>
      </h2>
      <p
        style=" lineH-height: 1.2em; margin-top: 3%; margin-bottom: 0px "
        id="modifyFont-m-whoAreWePage-2"
        class="font-m"
      >
        Une équipe faite d'une diversité de profils, qui se retrouve autour d'un métier passion. Ils y exercent leur
        créativité, constamment en éveil, ils trouvent pour vous des pépites , nouveaux bureaux, nouveaux quartiers,
        nouvelles tendances...
      </p>
      <p
        class="font-m"
        style=" lineH-height: 1.2em; margin-top: '2%'; margin-bottom: '0px' "
        id="modifyFont-m-whoAreWePage-3"
      >
        Les échanges quotidiens qu'ils entretiennent avec les offreurs et les preneurs les éclairent sur les
        attentes de chacun et font émerger les nouveaux usages.
      </p>
      <p
        style=" lineH-height: 1.2em; margin-top: '2%' "
        id="modifyFont-m-whoAreWePage-4"
        class="font-m"
      >
        Travailler chez <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong>, c'est aimer trouver des solutions en toute transparence pour les
        interlocuteurs. C'est penser que le digital est un outil ultra efficient lorqu'on l'exploite tout en
        conservant l'analyse et l'expertise qui font la différence chez <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong>.
      </p>
      <a href="{{ url('/contact') }}">
      <button
        style="width:210px;
        font-size:2.2rem;
        color:#fff;
        background-color:#000000;
        padding-top:15px;
        height:auto;
        padding-left:18px;
        padding-right:18px;
        padding-bottom:15px;
        font-weight:900;
        border-radius:100px;
        text-transform:none;
        font-family:azo-sans-web, sans-serif;
        border:none"
      >
        Nous contacter
      </button>
      </a>
    </div>
    <div class="col-6 justify-content-center" >
      <div style=" display: inline-block; ">
        <img src="{{asset('assets/img/photo2WhoAreWe-3.png')}}" style=" object-fit: cover; object-position: center center; border-radius: 50px;max-width: 490px;width: 100%;height: 653.33px;" alt="réunion d’équipe dans une salle de travail moderne et épurée, avec six coworkers en pleine discussion autour d’une table ronde">
      </div>
    </div>
  </div>
  <div
    class="row"
    style="
      width: 100%;
      height: 601px;
      margin-top: 2.5%;
    "
  >
    <div
      style="
        height: 601;
        width: 100%;
        border: fill;
        display: flex;
        align-items: center;
        align-content: center;
        flex-direction: column;
        border-top-left-radius: 80px;
        border-top-right-radius: 80px;
        justify-content: center;
        background-color: #1C4151;
      "
    >
      <div class="row wd-100" style=" text-align: center ">
        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img//emoji-1-bloc-3-whoAreWe.png')}}" width="257px" height="257px" class="reduceByTwoEmoticon" alt="personnage bleu souriant et determiné" />
        </div>

        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img//emoji-2-bloc-3-whoAreWe.png')}}" width="142px" height="176px" class="reduceByTwoEmoticon" alt="personnage jaune portant une paire de lunette" />
        </div>

        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img//emoji-3-bloc-3-whoAreWe.png')}}" width="255px" height="255px" class="reduceByTwoEmoticon" alt="personnage vert avec un air fatigué" />
        </div>

        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img/emoji-4-bloc-3-whoAreWe.png')}}" width="150px" height="175px" class="reduceByTwoEmoticon" alt="personnage rose de forme ovale avec les yeux fermés" />
        </div>

        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img/emoji-5-bloc-3-whoAreWe.png')}}" width="255px" height="255px" class="reduceEmoticonLessByTwo" alt="personnage orange souriant avec des boucles d'oreilles" />
        </div>
      </div>

      <h2
        style="
          color: white;
          padding-top: 0px;
          padding-bottom: 0px;
          margin-top: 0px;
          margin-bottom: 0px;
          text-align: center;
        "
        id="modifyFontSubTitle-whoAreWePage-2"
        class="font-l"
      >
        Nous sommes comme vous, tous différents !
      </h2>

      <div class="row wd-100" style=" text-align: center ">
        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img/emoji-6-bloc-3-whoAreWe.png')}}" width="235px" height="235px" class="reduceByTwoEmoticon" alt="personange vert souriant qui écoute de la musique" />
        </div>

        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img/emoji-7-bloc-3-whoAreWe.png')}}" width="255px" height="255px" class="reduceByTwoEmoticon" alt="personnage violet avec des lunettes de soleil et un chapeau" />
        </div>

        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img/emoji-8-bloc-3-whoAreWe.png')}}" width="255px" height="255px" class="reduceByTwoEmoticon" alt="personange rose avec un air content" />
        </div>

        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img/emoji-9-bloc-3-whoAreWe.png')}}" width="120px" height="150px" class="reduceByTwoEmoticon" alt="personnage bleu avec un air déterminé et qui porte un casque sur la tête" />
        </div>

        <div
          style="
            width: 20%;
          "
          class="items-center justify-content-center"
        >
          <img src="{{asset('assets/img/emoji-10-bloc-3-whoAreWe.png')}}" width="255px" height="255px" class="reduceEmoticonLessByTwo" alt="personnage jaune de forme ovale avec un air silencieux" />
        </div>
      </div>
    </div>
  </div>

  <div
    class="flex-wrap-row"
    style="
      margin-top: 2.5%;
      margin-bottom: 2.5%;
    "
  >
    <div class="col-4 photoBloc-3-whoAreWe">
      <img src="{{asset('assets/img/Groupe-573.png')}}" width="270px" height="270px" alt="personnage rose sur fond vert avec un air heureux" />
    </div>

    <div class="col-6">
      <div class="text-bloc-3-whoAreWe-align">
        <p
          style=" color: #FA9B22; margin-top: 0px "
          id="modifyFont-m-whoAreWePage-5"
          class="font-l"
        >
          Portrait
        </p>
        <h2  id="modifyFontSubTitle-whoAreWePage-3" class="font-l">
          à la rencontre de Victor
        </h2>
        <p
          style=" lineH-height: 1.2em "
          id="modifyFont-m-whoAreWePage-6"
          class="font-m"
        >
          Acount Manager chez <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> depuis 2 ans, je suis issu du monde des startups parisiennes où
          j'ai travaillé en tant que Business Développer et Account Manager, je me suis très tôt passionné pour la
          tech et l'immobilier.
        </p>
        <p
          style=" lineH-height: 1.2em "
          id="modifyFont-m-whoAreWePage-7"
          class="font-m"
        >
          Si j'ai rejoint <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong>, c'est pour me concentrer sur le secteur <i>flex</i>. En effet, j'ai
          assisté et contribué à l'origine du projet <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> : suite à une réflexion en interne, nous
          avons décidé de proposer une nouvelle expérience capable de fédérer l'ensemble des acteurs du <i>flex</i>
          au sein d'un outil digital simple et agile, c'est ainsi que <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> est né.
        </p>
        <p
          style=" lineH-height: 1.2em "
          id="modifyFont-m-whoAreWePage-8"
          class="font-m"
        >
          La preuve que chez <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong>, une idée peut rapidement se transformer en projet et un projet en
          réalité !
        </p>
        <p
          style=" lineH-height: 1.2em "
          id="modifyFont-m-whoAreWePage-9"
          class="font-m"
        >
          Ma mission au quotidien consiste à répondre efficacement au grand nombre de demandes entrantes, qu'elles
          viennent d'utilisateurs ou de propriétaires d'espaces. Une fois une demande entrée sur la plateforme, il
          s'opère une double analyse, à la fois automatisée et humaine afin d'apporter la meilleure des solutions.
          Vous l'aurez compris la gestion de projets n'a de secret pour moi, ce qui me permet de me focaliser sur
          l'analyse et de vous apporter une grande valeur ajoutée. Ce que j'aime chez <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> c'est
          l'expérience digitale centrée sur l'humain.
        </p>
        <p
          style=" lineH-height: 1.2em "
          id="modifyFont-m-whoAreWePage-10"
          class="font-m"
        >
          Si <?php echo str_replace("&", " ", getenv('nameFiu')); ?> n'existait pas, je l'inventerais !
        </p>
      </div>
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
                <img src="{{ asset('assets/img/cta-contact-yellow-eyelash.png')}}" width="100%" height="100%" alt="Œil stylisé jaune fermé avec longs cils noirs visibles" />
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
              <form id="inscrirenewsletterQuisommeNous" method="POST" action="{{ url('/inscrirenewsletter/') }}" style="gap: 10px; display: flex;">
                      <input type="text"                      
                      class="inputEmail inputEmailContact highHeightInputContactCTAForm"                    
                      placeholder="Adresse e-mail"
                      style=" font-family: Azo Sans, sans-serif; "                      
                       name="emailletterQuisommeNous" id="emailletterAccueilQuisommeNous" >
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
                        type="button"  value="ajoutemailletterQuisommeNous" id="ajoutemailletterQuisommeNous">                        
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
</section>

@endsection

@section('scripts')
<script>    
        //let imputmailletter=document.getElementById("emailletter");
        $('#emailletterAccueilQuisommeNous').keypress(function(event){
          var keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13'){
            event.preventDefault();           
            document.getElementById("ajoutemailletter").click();	
          }
        });        
        $('#ajoutemailletterQuisommeNous').click(function () {                              
        var form = $('#inscrirenewsletterQuisommeNous');
        var data = form.serialize();

        $.ajax( {
            type: "POST",
            url: form.attr( 'action' ),
            data: data,
            async: false,
          })
        .done((response) => {
          console.log(response);
          var res = response.toString();
          let p4 = document.getElementById("p4");                   
          p4.style.display = "block";  
          p4.innerText =res;           
        })
        .fail((error) => {
          var err = eval("(" + error.responseText + ")");
          console.log(error.responseText);
          //$('.alert-danger').text(err.message);
          //$('.alert-danger').removeClass('d-none');
        });
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

<!-- WebPage (Qui sommes-nous) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://flexinuse.fr/qui-sommes-nous#webpage",
  "url": "https://flexinuse.fr/qui-sommes-nous",
  "name": "Qui sommes-nous ? | fiu – Flex In Use",
  "isPartOf": { "@id": "https://flexinuse.fr/#website" },
  "inLanguage": "fr-FR",
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://flexinuse.fr/assets/img/homepage-test5.png"
  }
}
</script>

@endsection