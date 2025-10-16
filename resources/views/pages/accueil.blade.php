<?php
$API_KEY = getenv('GOOGLE_API_KEY');
?>
@extends('layouts.defaultFiu')
<!-- ecran = accueil.blade.php   -->


@section('title')
  Bureau à louer : Toutes les annonces sont sur fiu
@endsection

@section('metaDescription')
  Location de bureau privé, coworking, bureau opéré, bureau partagé... toutes les offres de bureau se trouvent chez Fiu. Trouvez votre bureau idéal en 1 clic !
@endsection

@section('canonical')
  <link rel="canonical" href="{{ url('/') }}" />
@endsection

@section('ogImagePrincipale')
<meta property="og:image" content="{{ asset('assets/img/homepage-test5.png')}}"/>
@endsection

@section('pagetitle')

@endsection

@section('custom_css')
<style>
  .smilePurple{
    width: 152.25px;
    height: 150px;
  }

  .margin-icon-loupe{
    margin:5%;
  }

  .imgAccueilPart1{
    width: 24vw;
    height: 73vh;
    object-fit: cover;
    object-position: bottom 76% right 38%;
    border-radius: 10%;
    padding-top: 5%;
  }

  .heightAccueilPart1{
    height: 80vh;
  }

  .widthLeftAccueilPart1{
    width: 55%;
  }

  @media only screen and (max-width: 1200px){
    .margin-icon-loupe{
      margin: 0 auto;
    }
    .heightAccueilPart1{
      height: auto;
      text-align: center;
    }
    .imgAccueilPart1{
      width: 100%;
      height: 100%;
      border-top-left-radius: 10vw;
      border-top-right-radius: 10vw;
    }
    .widthLeftAccueilPart1{
      width: 90%;
    }
    .paddingMobileTitleAccueil{
      padding-left: 6%;
    }
    .marginCenterTextAccueilPart1{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .marginButtonAccueilPart1{
      margin-left: auto;
      margin-right: auto;
    }
  }

  @media only screen and (max-width: 768px){
    .smilePurple{
      width: 100%;
      height: 100%;
    }
  }

  .bloc-button-first-part-home{
    display: flex;
    gap: 2%;
  }

  @media only screen and (min-width: 1200px) and (max-width: 1289px){
    .bloc-button-first-part-home{
      min-width: 500px;
    }
  }
  @media only screen and (max-width: 1200px){
    .bloc-button-first-part-home{
      display: grid;
      row-gap: 8%;
    }
  }

  
  :target {
    scroll-margin-top: 70rem;
  }

  .paddingLeftRightButtonPodcast{
    padding-right: 10%;
    padding-left: 7.5%;
  }

  .widthPartBeforeFooter{
    width: 73%;
  }

  @media only screen and (max-width: 1200px){
    .paddingLeftRightButtonPodcast{
      padding-right: 2%;
      padding-left: 1.5%;
    }
    .widthPartBeforeFooter{
      width: 95%;
    }
    .marginBottomUL{
      margin-bottom: 0;
    }
    .marginZeroUL{
      margin: 0;
    }
  }
  
</style>

@endsection


@section('content')


    <div style="background-color: #FFF6F0;margin-top: 100px;" class="flex-wrap-row heightAccueilPart1">
    
      <div class="col-8 col-m-12 col-s-12 items-center justify-content-center">
            
            <div class="widthLeftAccueilPart1">
            <p class="font-m" style="margin-bottom: 6%;color:red;">
            @if (count($errors) > 0)                                 
                  Attention : 
                  @foreach ($errors->all() as $error)
                      {{ $error }}
                  @endforeach                  
            @endif
            </p>
            <h1 style="
                  color: black;
                  width: 100%;
                  line-height: 1em;
                  padding-bottom: 1.5%;
                " class="fontMainTitle" id="fontMainTitleModify">
                Le plus court chemin vers votre bureau
            </h1>
            <p class="font-m" style="margin-bottom: 6%;">Découvrez tous les bureaux du marché et trouvez votre bureau idéal.</p>
            <p class="font-m" style="margin-bottom: 6%;">
            @if (count($errors) > 0)                                 
                  Attention : 
                  @foreach ($errors->all() as $error)
                      {{ $error }}
                  @endforeach                  
            @endif
            </p>
            <div class="bloc-button-first-part-home">
              <button class="items-center marginButtonAccueilPart1"  type="button" onclick="location.href='{{ url('/location-bureau-entreprise') }}'" style="color: #000;
                  height: 100%;
                  font-size: 2rem;
                  overflow: hidden;
                  pointer-events: auto;
                  background-color: #F8D14F;
                  border-radius: 50px;
                  border:none;
                  white-space: nowrap;
                  padding-right: 4%;
                  padding-left: 3%;
              ">
                <h4 style=" font-size: 2rem;padding-right: 10px; ">
                      C'est parti !
                </h4>
                <img src="https://flexinuse.fr/assets/img/loupe.png" style="width:25px;height:25px;" class="margin-icon-loupe" alt="loupe noire">
              </button>
              <a href="#podcast">
                <button class="items-center marginButtonAccueilPart1 paddingLeftRightButtonPodcast"  type="button" style="color: #000;
                    height: 100%;
                    font-size: 2rem;
                    overflow: hidden;
                    pointer-events: auto;
                    background-color: #9E9DFF;
                    border-radius: 50px;
                    border:none;
                    white-space: nowrap;
                ">
                  <h4 style=" font-size: 2rem; ">
                        Notre podcast
                  </h4>
                  <img src="{{ asset('assets/img/4373396.png') }}" style="width:25px;height:25px;" class="margin-icon-loupe" alt="casque noir podcast">
                </button>
              </a>
            </div>
            </div>

      </div>
      <div class="col-4 col-m-12 col-s-12 items-center">
        <div style="aspect-ratio: 1 / 0.75;width: 85%;position: relative;margin: 0 auto;">
          <img src="{{ asset('assets/img/homepage-test5.png')}}" class="imgAccueilPart1" alt="trois personnes regardant un ordinateur dans un espace de coworking">
        </div>
      </div>
    </div>
    <div style=" position: relative; display: flex; ">
          
          <a href="{{ url('/location-bureau-entreprise') }}" target="_blank" style=" margin-right: 20%; margin-top: 2%; margin-bottom: 3%; margin-left: 6%; ">
            <h2
              style="margin: 0;"
              class="font-l"
            >
              Trouvez votre bureau idéal avec <?php echo str_replace("&", " ", getenv('nameFiu')); ?>
            </h2>
          </a>
    </div>
    <div style=" margin-left: 5%; margin-right: 5%; ">
        <div
            style="
                  gap: 4.5em;
                  width: 100%;
                  display: flex;
                  flex-direction: row;
                  direction: ltr;
                  padding-bottom: 1rem;
                  padding-left: 1%;
                  padding-right: 1%;
            "
            class="hideShowScroll"
        >
            <div class="imgRadiusTop ideal-office-window">
            <div style=" position: relative; " class="minHeightImage-idealOfficeWindow">
                <img
                    alt="imageAlt"
                    src="{{ asset('assets/img/card-img-3.png')}}"
                    //width={566}
                    //height={480}
                    class="imgRadiusTop"
                    //layout="fill"
                    style="object-fit: cover;object-position: center;width:100%;height:380px;"
                />
            </div>
            <div
                style="
                padding-right: 2.5%;
                padding-left: 2.5%%;
                "
            >
                <h3
                style="
                    margin-left: 5%;
                    text-align: left;
                    margin-top: 6%;
                    margin-bottom: 0px;
                    line-height: 1.3em;
                "
                class="titleBlocFindWorkspace fontSubTitle"
                id="smallTitleFindWorkspace"
                >
                  Bureau indépendant
                </h3>
                <p
                class="font-s"
                style="
                    width: 100%;
                    text-align: left;
                    padding-right: 5%;
                    padding-left: 5%;
                    margin-top: 1.5%;
                    line-height: 1.3em;
                "
                >
                  Trouvez l'espace de travail parfait pour vous avec notre sélection de bureaux privés
                </p>
            </div>
            <div style=" padding-left: 3.5%; margin-top: auto; ">
                {{--<Link href={redirectURL}>--}}
                <a
                    style="
                    font-family: azo-sans-uber, sans-serif;
                    margin-left: 20px;
                    display: flex;
                    margin-bottom: 1.3em;
                    font-weight: 100;
                    align-items: center;
                    align-content: center;
                    "
                    class="discover-arrow font-xs"
                    href="{{ url('/location-bureaux') }}"
                >
                    <div style=" padding-right: 2%; ">
                        <img src="{{ asset('assets/img/Icon-fleche.png')}}" width="26.31px" height="11.61px" alt="flèche noire vers la droite" />
                    </div>
                    Découvrir
                </a>
                {{--</Link>--}}
            </div>
            </div>
            <div class="imgRadiusTop ideal-office-window">
            <div style=" position: relative; " class="minHeightImage-idealOfficeWindow">
                <img
                    alt="imageAlt"
                    src="{{ asset('assets/img/card-img-2.png')}}"
                    //width={566}
                    //height={480}
                    class="imgRadiusTop"
                    //layout="fill"
                    style="object-fit: cover;object-position: center;width:100%;height:380px;"
                />
            </div>
            <div
                style="
                padding-right: 2.5%;
                padding-left: 2.5%%;
                "
            >
                <h3
                style="
                    margin-left: 5%;
                    text-align: left;
                    margin-top: 6%;
                    margin-bottom: 0px;
                    line-height: 1.3em;
                "
                class="titleBlocFindWorkspace fontSubTitle"
                id="smallTitleFindWorkspace-2"
                >
                  Bureaux avec espace extérieur
                </h3>
                <p
                class="font-s"
                style="
                    width: 100%;
                    text-align: left;
                    padding-right: 5%;
                    padding-left: 5%;
                    margin-top: 1.5%;
                    line-height: 1.3em;
                "
                >
                  Découvrez nos bureaux avec un espace extérieur pour travailler en plein air.
                </p>
            </div>
            <div style=" padding-left: 3.5%; margin-top: auto; ">
                {{--<Link href={redirectURL}>--}}
                <a
                    style="
                    font-family: azo-sans-uber, sans-serif;
                    margin-left: 20px;
                    display: flex;
                    margin-bottom: 1.3em;
                    font-weight: 100;
                    align-items: center;
                    align-content: center;
                    "
                    class="discover-arrow font-xs"
                    href="{{ url('/location-bureau-entreprise') }}"
                >
                    <div style=" padding-right: 2%; ">
                        <img src="{{ asset('assets/img/Icon-fleche.png')}}" width="26.31px" height="11.61px" alt="flèche noire vers la droite" />
                    </div>
                    Découvrir
                </a>
                {{--</Link>--}}
            </div>
            </div> 
            <div class="imgRadiusTop ideal-office-window">
            <div style=" position: relative; " class="minHeightImage-idealOfficeWindow">
                <img
                    alt="imageAlt"
                    src="{{ asset('assets/img/card-img-1.png')}}"
                    //width={566}
                    //height={480}
                    class="imgRadiusTop"
                    //layout="fill"
                    style="object-fit: cover;object-position: center;width:100%;height:380px;"
                />
            </div>
            <div
                style="
                padding-right: 2.5%;
                padding-left: 2.5%%;
                "
            >
                <h3
                style="
                    margin-left: 5%;
                    text-align: left;
                    margin-top: 6%;
                    margin-bottom: 0px;
                    line-height: 1.3em;
                "
                class="titleBlocFindWorkspace fontSubTitle"
                id="smallTitleFindWorkspace-3"
                >
                  Bureaux en coworking
                </h3>
                <p
                class="font-s"
                style="
                    width: 100%;
                    text-align: left;
                    padding-right: 5%;
                    padding-left: 5%;
                    margin-top: 1.5%;
                    line-height: 1.3em;
                "
                >
                  Venez explorer notre choix de bureaux en coworking et rejoignez une communauté professionnelle collaborative.
                </p>
            </div>
            <div style=" padding-left: 3.5%; margin-top: auto; ">
                {{--<Link href={redirectURL}>--}}
                <a
                    style="
                    font-family: azo-sans-uber, sans-serif;
                    margin-left: 20px;
                    display: flex;
                    margin-bottom: 1.3em;
                    font-weight: 100;
                    align-items: center;
                    align-content: center;
                    "
                    class="discover-arrow font-xs"
                    href="{{ url('/coworking') }}"
                >
                    <div style=" padding-right: 2%; ">
                        <img src="{{ asset('assets/img/Icon-fleche.png')}}" width="26.31px" height="11.61px" alt="flèche noire vers la droite" />
                    </div>
                    Découvrir
                </a>
                {{--</Link>--}}
            </div>
            </div>  
        </div>
        <div class="flex-wrap-row" style="margin-top:4%;">
          <div class="col-7" >
            <h4 style="margin-top: 0;padding-left: 5%;">Découvrez notre podcast Fiu talk</h4>
            <p class="font-m" style="padding-left: 5%;padding-right: 5%;">
              Notre podcast fiu talk donne la parole aux acteurs de l'immobilier d'entreprise et aux utilisateurs des bureaux
              opérés et espaces de coworking. Les opérateurs partagent leur vision du marché et les tendances à venir, tandis que les clients utilisateurs
              racontent leur quotidien dans ses nouveaux espaces de travail flexibles.
            </p>
            <p class="font-m" style="padding-left: 5%;padding-right: 5%;">Un podcast incontournable pour comprendre l'évolution des bureaux et anticiper le futur du travail.</p>
            <p class="font-m" style="padding-left: 5%;padding-right: 5%;">Pour ce deuxième épisode de fiu talk, nous recevons <a href="https://www.comeandwork.com/" style="font-family: Abril-Text;text-decoration: underline;" class="font-m" target="_blank">Come and Work</a> et <a href="https://www.vona.eu/" style="font-family: Abril-Text;text-decoration: underline;" class="font-m" target="_blank">Vona</a>.</p>
            <p class="font-m" style="padding-left: 5%;padding-right: 5%;">Disponible sur toutes les plateformes !</p>
          </div>
          <div class="col-5 items-center">
              <div style="width: 100%;">
                <div style="width: 50%;margin: 0 auto;">
                  <iframe name="Ausha Podcast Player" frameborder="0" loading="lazy" id="ausha-FqC4" height="700" style="border: none; width:100%; height:700px" src="https://player.ausha.co/?showId=edenKH3Nv4pw&color=%23751CBF&display=vertical&playlist=true&v=3&playerId=ausha-FqC4"></iframe><script src="https://player.ausha.co/ausha-player.js"></script>
                </div>
              </div>
          </div>
        </div>
        <div style="width: 100%;margin-top:3%;" id="podcast">
              <a href="https://linktr.ee/fiu_talk" target="_blank">
                <button class="items-center marginButtonAccueilPart1"  type="button" style="color: #000;
                          height: 100%;
                          font-size: 2rem;
                          overflow: hidden;
                          pointer-events: auto;
                          background-color: #9E9DFF;
                          border-radius: 50px;
                          border:none;
                          white-space: nowrap;
                          padding-right: 3%;
                          padding-left: 3%;
                          margin: 0 auto;
              ">
                    <h4 style=" font-size: 2rem;padding-right: 10px; ">
                      Ecouter
                    </h4>
                </button>
              </a>
        </div>
        <div
          style="
              width: 100%;
              height: auto;
              display: flex;
              margin-top: 3%;
              flex-direction: column;
              justify-content: flex-start;
              position: relative;
              overflow: hidden;
          "
        >
            <div class="browse-ad">
              <div
                style="
                  font-size: 3rem;
                  width: 100%;
                  display: flex;
                  flex-direction: row;
                "
              >
                <div class="emoji-w-16 emoji-browse-ad">
                  <img  width="100%" height="100%" src="{{ asset('assets/img/blue-bean.png')}}" alt="personnage bleu souriant qui lève les yeux au ciel" />
                </div>
              </div>
              <p class="font-m" style=" align-items: center; width: 88%; ">
                Parcourez les annonces, <br /> votre bureau vous attend, nous
                <span style=" white-space: nowrap; ">aussi !</span>
              </p>
                <a href="{{ url('/location-bureau-entreprise') }}">
                  <button
                    style="
                      font-size: 2.2rem;
                      color: #fff;
                      padding-top: 20px;
                      height: auto;
                      padding-left: 30px;
                      padding-right: 30px;
                      padding-bottom: 20px;
                      font-weight: 900;
                      border-radius: 100px;
                      text-transform: none;
                      font-family: azo-sans-web, sans-serif;
                      border: none;
                      white-space: nowrap;
                      width: 100%;
                    "
                    class="width-all-office buttonAllOffice fontInput"
                  >
                    Tous les bureaux
                  </button>
                </a>
            </div>
          </div>
        </div>
    </div>
    <div
      style="
        width: 100%;
        border: fill;
        display: flex;
        align-items: center;
        align-content: center;
        flex-direction: column;
        border-top-left-radius: 80px;
        justify-content: center;
        background-color: #1C4151;
      "
    >
      <h2
        class="font-l"
        style="
          width: 60%;
          color: #fff;
          text-align: center;
          align-content: center;
          margin-top: 8%;
          font-family: Azo-Sans-Uber;
          margin-bottom: 0px;
        "
        id="modifyFontLHowCTA"
      >
        Location de bureaux à paris : Comment ça marche ?
      </h2>
      <p
        class="font-m"
        style="
          width: 50%;
          height: auto;
          color: #fff;
          text-align: center;
        "
      >
        <b><?php echo str_replace("&", " ", getenv('nameFiu')); ?></b> vous donne ses astuces pour rendre votre recherche efficace et fructueuse. L'ensemble des offres du
        marché est à portée de clic, nos conseillers aussi !
      </p>
      <a href="{{ url('/platefome-location-bureau') }}" style="margin-bottom: 5%;">
        <button class="buttonMore buttonKnowMoreHowCTA fontInput" style=" border: none; ">
          En savoir plus
        </button>
      </a>
    </div>
    <div class="row" style=" flex-wrap: wrap; ">
      <div
        class="col-6 col-m-12 col-s-12"
        style="
          display: flex;
          align-items: center;
          align-content: center;
          flex-direction: column;
          background-color: #F6CEDE;
          position: relative;
        "
      >
        <div
          style="
            width: 100%;
            gap: 50px;
            padding: 14% 23.5% 7% 23.5%;
          "
        >
          <h3 style="width:100%;color:#000;text-align:left;line-height:1.2em;font-family:Azo-Sans-Uber;margin-top:0px" class="font-l" id="smallTitleBlocFourWelcome">Vous recherchez un nouveau <span style="white-space:nowrap">bureau ?</span></h3>
          <p class="font-m" style="color:#000;line-height:1.2em" id="smallTextBlocFourWelcome-1">
            <span style="display:block;padding-bottom:1%">
              <b>fiu !</b> Vous êtes sur <u>le</u> site qui réunit toutes les offres de bureau en 1 clic, juste le temps de dire <b>fiu</b> et c'est 
              <span style="white-space:nowrap">fait !</span>
            </span>Envie d'en discuter ? Nos conseillers sont là pour <span style="white-space:nowrap">vous !</span>
          </p>
          <a href="{{ url('/recherche-sur-mesure') }}">
            <button class="buttonRedirectCTA fontInput">Recherche sur mesure</button>
          </a>
        </div>
          <div
            style="
              position: absolute;
              bottom: -4%;
              right: 12%;
            "
            class="width-emoji-redirectCTA"
          >
            <img src="{{ asset('assets/img//tongue-blue-bonnet.png')}}" height="100%" width="100%" alt="personnage bleu qui tire la langue avec un bonnet" />
          </div>
      </div>
      <div
        class="col-6 col-m-12 col-s-12"
        style="
          display: flex;
          align-items: center;
          align-content: center;
          flex-direction: column;
          background-color: #F19A60;
          position: relative;
        "
      >
        <div
          style="
            width: 100%;
            gap: 50px;
            padding: 14% 23.5% 7% 23.5%;
          "
        >
        <h3 style="width:100%;color:#000;text-align:left;line-height:1.2em;font-family:Azo-Sans-Uber;margin-top:0px" class="font-l" id="smallTitleBlocFourWelcome-2">Vous avez des bureaux à <span style="white-space:nowrap">louer ?</span></h3>
        <p class="font-m" style="color:#000;line-height:1.2em" id="smallTextBlocFourWelcome-2"><span style="display:block;padding-bottom:1%">Vous êtes bien tombé ! Publiez votre annonce, <b><?php echo str_replace("&", " ", getenv('nameFiu')); ?></b> trouve vos futurs clients et vous met en relation.</span>Munissez-vous de tous les détails, sélectionnez de belles photos ou vidéos et c'est parti ! Il vous suffit de quelques minutes pour déposer votre annonce.</p>
          <a href="{{ url('/publier-une-annonce') }}">
            <button class="buttonRedirectCTA fontInput">Publier mon annonce</button>
          </a>
        </div>
        <div
          style="
            right: 5%;
            top: 10%;
            position: absolute;
          "
          class="width-emoji-redirectCTA"
        >
          <img  src="{{ asset('assets/img/cool-pink-bean.png')}}" height="100%" width="100%" alt="personnage rose souriant portant des lunettes de soleil" />
        </div>
      </div>
    </div>
    <div
      class="column bg-blanc content-center justify-content-center items-center paddingInlinePartWhoAreWeCTA"
      style="
        padding-top: 4%;
        padding-bottom: 5%;
        text-align: center;
      "
    >
      <div class="row" style=" flex-wrap: wrap; ">
        <div class="col-4 col-m-12 col-s-12" style="display: flex; align-items: center; flex-direction: column;">
          <h4
            class="font-l"
            style="
              color: #000;
              margin-bottom: 0.5em;
              font-family: Azo-Sans-Uber;
            "
            id="modifyFontWhoAreWeCTA-1"
          >
            Flexibilité
          </h4>
          <p
            class="font-m"
            style="
              width: 90%;
              color: #000;
              padding-left: 3%;
              padding-right: 3%;
            "
            id="modififyFontWhoAreWeCTA-1-text"
          >
            <span style=" display: block; padding-bottom: 2%; ">
              Chez <b><?php echo str_replace("&", " ", getenv('nameFiu')); ?></b> les bureaux sont flexibles et nous aussi ! Vous devez assurer le confort de vos équipes et
              répondre à des besoins en constante évolution.
            </span>
            Ici, vous avez le droit de changer quand vous le souhaitez, nous vous accompagnons dans vos démarches et
            adressons vos nouvelles attentes.
          </p>
        </div>
        <div class="col-4 col-m-12 col-s-12" style="display: flex; align-items: center; flex-direction: column;">
          <h4
            class="font-l"
            style="
              color: #000;
              margin-bottom: 0.5em;
              fontFamily: Azo-Sans-Uber;
            "
            id="modifyFontWhoAreWeCTA-2"
          >
            Service
          </h4>
          <p
            class="font-m"
            style="
              width: 90%;
              color: #000;
              padding-left: 3%;
              padding-right: 3%;
            "
            id="modififyFontWhoAreWeCTA-2-text"
          >
            <span style=" display: block; padding-bottom: 2%; ">
              Le parcours digital c'est génial ! Surtout quand il y a une équipe d'experts qui le fait fonctionner et à
              qui on peut s'adresser…
            </span>
            Les annonces sont vérifiées, la mise en relation facilitée, nous sommes là pour vous faire profiter de notre
            savoir-faire métier et de notre réseau.
          </p>
        </div>
        <div class="col-4 col-m-12 col-s-12" style="display: flex; align-items: center; flex-direction: column;">
          <h4
            class="font-l"
            style="
              color: #000;
              margin-bottom: 0.5em;
              font-family: Azo-Sans-Uber;
            "
            id="modifyFontWhoAreWeCTA-3"
          >
            Diversité
          </h4>
          <p
            class="font-m"
            style="
              width: 90%;
              color: #000;
              padding-left: 3%;
              padding-right: 3%;
            "
            id="modififyFontWhoAreWeCTA-3-text"
          >
            Nous sommes indépendants des grands groupes. Ainsi <b><?php echo str_replace("&", " ", getenv('nameFiu')); ?></b> regroupe pour vous TOUTES les annonces
            présentes sur le marché liées à la location de bureaux (bureau privé, coworking, open space, par nombre de
            postes, par superficie, par service, par localisation…).
          </p>
        </div>
      </div>
        <a href="{{ url('/qui-sommes-nous') }}">
          <button class="buttonMore buttonWhoAreWeCTA fontInput" style=" border: none; ">
            En savoir plus
          </button>
        </a>
    </div>
    <div
      style="
        display: flex;
        height: auto;
        flex-wrap: wrap;
      "
      class="wd-100"
    >
      <div
        style="
          background-color: #1C4151;
          position: relative;
          overflow: hidden;
        "
        class="col-6 col-m-12 col-s-12 heightResultShort-part items-center justify-content-center"
      >
        <div class="col-12 items-center justify-content-center">
          <div
            class="fontSizeShort"
            style="display: block; margin-top: 9%; margin-bottom: 9%; padding-left: 15%; padding-right: 15%;color: white;"
            id="modifyFontResultShortCTA-1"
          >
            <p
              class="fontSizeShortTitle"
              style=" color: white; font-family: Azo Sans, sans-serif; "
              id="modififyFontResultShortCTA-1-title"
            >
              En bref :
            </p>
            <p style=" color: white; margin-bottom: 0; line-height: 1.2em; "> <div style=" white-space: pre-line; "> <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> expert des </div> bureaux opérés </p>
            <p style=" color: white; margin-top: 4%; margin-bottom: 4%; line-height: 1.2em; "> <div style=" white-space: pre-line; "> <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> approche digitale </div> <u>et</u> humaine </p>
            <p style=" color: white; margin-top: 0; line-height: 1.2em; "> <div style=" white-space: pre-line;"> <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> réunit <u>toutes</u> les </div> annonces </p>
            
            <a href="{{ url('/qui-sommes-nous') }}">
              <button
                  class="buttonMore buttonResultShortCTA fontInput"
                  style=" width: 208px; margin-top: 0px; border: none; "
              >
                  En savoir plus
              </button>
            </a>
            
          </div>
        </div>
        <div class="emoji-1-PartEnBref">
          <img src="{{ asset('assets/img/Persos-maquettes-9.png')}}" height="121%" width="100%" layout="fill" objectFit="cover" alt="personnage orange qui regarde sur le côté qui sourit avec une casquette" />
        </div>
        <div class="emoji-2-PartEnBref">
          <img src="{{ asset('assets/img/perso-5.png')}}" height="100%" width="100%" alt="personnage rose qui ferme les yeux" />
        </div>
        <div class="emoji-3-PartEnBref">
          <img src="{{ asset('assets/img/Persos-maquettes-2.png')}}" height="100%" width="100%" alt="personnage orange qui regarde sur le côté qui sourit avec une fleur sur le côté de la tête" />
        </div>
        <div class="emoji-5-PartEnBref">
          <img  src="{{ asset('assets/img/perso-9.png')}}" height="100%" width="100%" alt="personnage jaune souraint avec des lunettes" />
        </div>
      </div>

      <div
        style="
          background-color: #7DD175;
          position: relative;
        "
        class="col-6 col-m-12 col-s-12 heightResultShort-part justify-content-center"
      >
        <div class="col-12 items-center justify-content-center">
          <div style=" display: block; margin-top: 13%; margin-bottom: 13%; ">
          <p class="fontSizeShortTitle" style=" color: black; font-family: Azo Sans, sans-serif; " id="modififyFontResultShortCTA-2-title" > Le résultat ? </p>
          <p style=" color: black; margin-top: 0; line-height: 1.1em;white-space: pre-line;margin:0; " class="fontSizeResult" id="modifyFontResultShortCTA-2" > Chez <strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> </p>
          <div style=" white-space: pre-line;margin:0; " class="fontSizeResult" id="modifyFontResultShortCTA-2-bis-1">il y a plus de choix,</div> 
          <div style=" white-space: pre-line;margin:0; " class="fontSizeResult" id="modifyFontResultShortCTA-2-bis-2">plus de conseil</div> 
          <div style=" white-space: pre-line;margin:0; " class="fontSizeResult" id="modifyFontResultShortCTA-2-bis-3">et vous trouvez</div> 
          <p style="margin:0;" class="fontSizeResult" id="modifyFontResultShortCTA-2-bis-4">plus vite ! </p>
          </div>
        </div>

        
        <div style=" position: absolute; bottom: 17%; right: 7%; ">
          <img src="{{ asset('assets/img/etoileBlocResultat-2.png')}}" height="72px" width="122px" alt="groupe d'étoiles" />
        </div>
      </div>
    </div>
    <div
      style="
        gap: 50;
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: row;
        alignContent: center;
        justify-content: center;
        background-color: white;
        flex-wrap: wrap;
        margin-top: 3%;
        margin-bottom: 3%;
      "
    >
      <p
        class="col-3 col-md-12 col-s-12 partTheyFindOffice-textAlign fontSubTitle marginTopInheritMobile"
        style="
          color: black;
          margin-left: 40px;
          align-content: center;
          line-height: 1.2em;
          margin-top: 0;
          margin-bottom: 0;
        "
        id="modifyFontSubTitleCustomPage"
      >
        <span class="sentenceTheyFindOffice-destop">Ils ont trouvé</span>
        <span class="sentenceTheyFindOffice-destop">leur bureau idéal</span>
        <span class="sentenceTheyFindOffice-destop">
          sur <b>flex in use.</b>
        </span>
        <span class="sentenceTheyFindOffice-mobile">Ils ont trouvé leur bureau idéal</span>
        <span class="sentenceTheyFindOffice-mobile">
          sur <b>fiu.</b>
        </span>
      </p>
      <div
        class="col-7 col-md-12 col-s-12 padding-LogoTheyFindOffice hideShowScroll"
        style="
          gap: 30px;
          display: flex;
          text-align: center;
          align-content: center;
          overflow: auto;
        "
      >
        <div class="minWidthImageClientCTA">
          <Image alt="logo de BIRKENSTOCK" src="{{ asset('assets/img/BIRKENSTOCK.png')}}" width="150" height="75" />
        </div>
        <div class="minWidthImageClientCTA">
          <Image alt="logo de DOTT" src="{{ asset('assets/img/DOTT.png')}}" width="150" height="75" />
        </div>
        <div class="minWidthImageClientCTA">
          <Image alt='logo de HOMELOOP' src="{{ asset('assets/img/HOMELOOP-copie.png')}}" width="150" height="75" />
        </div>
        <div class="minWidthImageClientCTA">
          <Image alt='logo de FLINK' src="{{ asset('assets/img/FLINK.png')}}" width="150" height="75" />
        </div>
        <div class="minWidthImageClientCTA">
          <Image alt='logo de NHOA-ENERGY' src="{{ asset('assets/img/NHOA-ENERGY.png')}}" width="150" height="75" />
        </div>
        <div class="minWidthImageClientCTA">
          <Image alt='logo de SMARTRENTING' src="{{ asset('assets/img/SMARTRENTING.png')}}" width="150" height="75" />
        </div>
      </div>
    </div>
    <div
      style="
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        background-color: #77BCE0;
        position: relative;
      "
      class="heightPartTestimony"
    >
      <div
        style="
          gap: 7%;
          width: 90%;
          display: flex;
          flex-direction: row;
          align-items: center;
          align-content: center;
          justify-content: center;
          margin-top: 10%;
          margin-bottom: 10%;
        "
      >
        <div>
          <p
            class="font-m"
            style="
              display: flex;
              justify-content: center;
              font-family: azo-sans-web, sans-serif;
            "
            id="modifyFont-m-VerbatimCTA-1"
          >
            Ce que nos clients disent de nous :
          </p>
          <div class="fontSubTitle" id="modifyFontSubTitleVerbatimCTA">
            <p style="display:flex;justify-content:center;font-family:abril-text, serif;text-align:center;padding-left:15%;padding-right:15%;margin-top:2%;margin-bottom:0;line-height:1.2em">Victor a été réactif et toujours de bon conseil tout au long du processus de recherche, de la sélection d’espaces, à l’organisation des visites jusqu’à la négociation commerciale et la signature du contrat. Nous sommes aujourd’hui des heureux locataires, au sein d’un espace à notre image.</p> 
          </div>
          <h3
            class="font-m"
            style="
              display: flex;
              justify-content: center;
              font-family: azo-sans-web, sans-serif;
              margin-bottom: 0;
            "
            id="modifyFont-m-VerbatimCTA-2"
          >
            <b> Vincent PEDRON </b>
          </h3>
          <p
            class="font-m"
            style="
              display: flex;
              justify-content: center;
              font-family: azo-sans-web, sans-serif;
              margin-top: 0;
            "
            id="modifyFont-m-VerbatimCTA-3"
          >
            Business Manager, Winside
          </p>
        </div>
      </div>
      <div class="starTestimonialHomepage-big">
        <img src="{{ asset('assets/img/etoileBlocBleu-1.png')}}" width="48" height="48" alt="étoile noire" />
      </div>
      <div class="starTestimonialHomepage-small">
        <img src="{{ asset('assets/img/etoileBlocBleu-2.png')}}" width="30" height="30" alt="étoile noire pleine" />
      </div>
      <div
        style=" position: absolute; bottom: -6%; right: 10%; "
        class="emoji-w-16"
        id="modifyEmojiVerbatimCTA"
      >
        <img src="{{ asset('assets/img/orange-heart-eyes.png')}}" width="100%" height="100%" alt="personnage orange souriant avec des cœurs dans les yeux" />
      </div>
    </div>

    <div style="display: flex ; align-items: center; flex-direction: column; justify-content: center; /* background-color: #77BCE0; */ position: relative; margin: 0 auto;" class="widthPartBeforeFooter">
      <h1 style=" margin-bottom: 0.5em; line-height: 1em;margin-top: 3%; " class="fontMainTitle" id="modifyFontTitleArticlesCTA">
        Comment la location de bureau redessine-t-elle nos espaces de travail ?
      </h1>
      <p class="font-m">
        L’évolution des espaces de travail est un élément clé de la transformation professionnelle moderne. La location de bureau émerge comme une solution dynamique, offrant flexibilité et adaptation à une ère où les modes de travail sont en constante évolution. Que ce soit pour louer un bureau à Paris, opter pour un espace de coworking, ou choisir un type de bail adapté à ses besoins, la location de bureau offre de nombreux avantages aux professionnels qui souhaitent redéfinir leur environnement de travail.
      </p>
      <h2 class="font-l" style="text-align: left;width: 100%;">L’ère de la transformation professionnelle</h2>
      <h3 class="font-m" id="modifyFont-m-VerbatimCTA-2" style="text-align: left;width: 100%;"> Révolution des modes de travail</h3>
      <p class="font-m">
        Les modes de travail traditionnels, basés sur le présentiel, la hiérarchie et la rigidité sont de plus en plus remis en question. Les travailleurs d’aujourd’hui recherchent davantage de flexibilité, d’autonomie, de créativité, et de sens dans leur activité professionnelle. Ils aspirent à des environnements de travail qui favorisent leur épanouissement, leur motivation, leur engagement, et leur productivité. Les entreprises, de leur côté, doivent faire face à des marchés de plus en plus concurrentiels. Elles doivent être capables de s’adapter rapidement aux changements et de se différencier. Pour cela, elles ont besoin de collaborateurs compétents, innovants et réactifs. Ces besoins et ces aspirations convergent vers une nouvelle ère des modes de travail, qui repose sur des principes tels que :
      </p>
      <ul class="font-m">
        <li>
            Le télétravail : Le télétravail implique de travailler à distance grâce aux technologies de l'information et offre divers avantages. Il permet la réduction des coûts, des déplacements et de l'empreinte écologique tout en améliorant la qualité de vie, la flexibilité et l'équilibre entre vie professionnelle et personnelle. De plus, il stimule la créativité, l'autonomie et favorise l'accès à des talents variés et qualifiés, promouvant ainsi l'inclusion et la diversité.
        </li>
        <li>
          Le travail hybride : Le travail hybride combine à la fois le télétravail et le travail en présentiel en fonction des besoins et des préférences individuelles. Cette approche vise à préserver les liens sociaux, la cohésion d'équipe et la culture d'entreprise tout en permettant une collaboration efficace. Cependant, il requiert une coordination adéquate, une communication efficace et une confiance mutuelle pour fonctionner efficacement.
        </li>
        <li>
          Le travail flexible : Le travail flexible donne aux collaborateurs la liberté de choisir leurs horaires, leurs rythmes et leurs modalités de travail. Cette approche renforce la motivation, la satisfaction et la performance des employés en leur offrant plus de contrôle sur leur expérience professionnelle. Cependant, pour être efficace, elle nécessite une gestion minutieuse du temps, une organisation rigoureuse et une évaluation régulière, ainsi qu'une reconnaissance équitable.
        </li>
        <li>
          <a href="https://blog.flexinuse.fr/coworking-un-avantage-pour-le-travail-collaboratif" class="font-m" style="font-family: Abril-Text;text-decoration: underline;">Le travail collaboratif</a> : favorise le partage, l'échange, la coopération et la co-création entre les collaborateurs, que ce soit au sein ou au-delà de l'entreprise. En favorisant ces interactions, il stimule l'innovation, la créativité et la diversité des compétences en tirant parti des complémentarités et des feedbacks. Pour fonctionner efficacement, il requiert une vision commune, des objectifs clairs, des règles de fonctionnement bien définies et des outils adaptés.
        </li>
      </ul>
      <p class="font-m">
        Ces nouvelles tendances des modes de travail ont un impact direct sur les espaces de travail, qui doivent se reconfigurer pour répondre à ces nouveaux besoins et à ces nouvelles attentes.
      </p>
      <h3 class="font-m" id="modifyFont-m-VerbatimCTA-2" style="text-align: left;width: 100%;">Reconfigurer les espaces : flexibilité et adaptabilité</h3>
      <p class="font-m">
        Les bureaux à louer se distinguent par leur capacité à s’adapter aux besoins changeants des entreprises. Leur flexibilité redéfinit la manière dont les espaces de travail sont conçus et utilisés, offrant des environnements évolutifs et personnalisables.
      </p>
      <p class="font-m">
        La location de bureau offre une flexibilité et une économie pour son espace de travail, en fonction de ses besoins et de ses opportunités. Elle permet de s’adapter au marché, de réduire les coûts immobiliers, et de ne pas s’engager sur le long terme. Elle permet aussi de personnaliser son environnement de travail, en fonction de ses goûts et de ses objectifs. Elle permet ainsi de favoriser le bien-être, la productivité, l’innovation, la cohésion, et la fidélisation.
      </p>
      <p class="font-m">
        Les bureaux à louer se distinguent par leur capacité à s’adapter aux besoins changeants des entreprises. Leur flexibilité redéfinit la manière dont les espaces de travail sont conçus et utilisés, offrant des environnements évolutifs et personnalisables. Les professionnels peuvent ainsi moduler leur espace en fonction de leurs projets, de leur budget, et de leurs préférences. Les bureaux à louer offrent également la possibilité de changer d’emplacement facilement, ce qui permet de se rapprocher de ses clients, de ses partenaires, ou de ses collaborateurs.
      </p>
      <h3 class="font-m" id="modifyFont-m-VerbatimCTA-2" style="text-align: left;width: 100%;">Les différents types de baux</h3>
      <p class="font-m">
        La location de bureau à Paris offre la possibilité de choisir la durée, la superficie, l’emplacement, et les services associés, s’alignant ainsi avec différents types de bail tels que le bail précaire, le bail commercial, le contrat de prestation de service, le bail dérogatoire, et la sous-location. 
      </p>
      <ul class="font-m">
        <li>
          <a href="https://flexinuse.fr/guide/leguide-du-bail-commercial" target="_blank" class="font-m" style="font-family: Abril-Text;text-decoration: underline;">Le bail commercial</a> : le bail commercial est un contrat de location régulier entre un propriétaire et un locataire pour une durée déterminée. Il établit les conditions de location d'un bien immobilier, telles que la durée, le loyer et les responsabilités des parties concernées.
        </li>
        <li>
          <a href="https://flexinuse.fr/guide/leguide-du-bail-derogatoire" target="_blank" class="font-m" style="font-family: Abril-Text;text-decoration: underline;">Le bail dérogatoire</a> : le bail dérogatoire, dure au maximum 3 ans et peut être résilié plus tôt, contrairement au bail précaire qui dépend d'événements comme la démolition ou les travaux pour se terminer. Au-delà de 3 ans, il est assimilé à un bail commercial. Il est utilisé pour une occupation temporaire sans que le locataire bénéficie de certains droits propres au bail commercial.
        </li>
        <li>
          <a href="https://flexinuse.fr/guide/leguide-contrat-de-prestation-de-services" target="_blank" class="font-m" style="font-family: Abril-Text;text-decoration: underline;">Le contrat de prestation de services</a> : ce contrat, plus flexible que le bail commercial, offre une variété de services. Autrefois réservé aux indépendants, le coworking attire désormais nombre d'entreprises. La possibilité de résilier rapidement et l'accès à une solution prête à l'emploi séduisent de plus en plus d'entreprises.
        </li>
        <li>
          <a href="https://flexinuse.fr/guide/leguide-de-la-sous-location" target="_blank" class="font-m" style="font-family: Abril-Text;text-decoration: underline;">La sous-location</a> : la sous-location survient lorsque le locataire d'un bien loué décide de louer une partie ou la totalité du bien à un tiers. Cela se fait généralement avec l'accord du propriétaire, mais le locataire reste responsable envers le propriétaire initial pour le paiement du loyer et le respect des termes du bail initial.
        </li>
        <li>
          <a href="https://flexinuse.fr/guide/leguide-du-bail-professionnel" target="_blank" class="font-m" style="font-family: Abril-Text;text-decoration: underline;">Le bail professionnel</a> est un contrat de location pour les activités non commerciales, notamment les professions libérales. Il dure au moins 6 ans, sans droit au renouvellement, et permet au locataire de résilier avec un préavis de 6 mois. Flexible et adaptable, il repose sur la liberté contractuelle pour fixer les conditions (loyer, charges, entretien) 
        </li>
      </ul>
      <h3 class="font-m" id="modifyFont-m-VerbatimCTA-2" style="text-align: left;width: 100%;">Le Coworking : un espace de travail convivial et innovant</h3>
      <p class="font-m">
        Le <a href="https://flexinuse.fr/guideducoworking" class="font-m" style="font-family: Abril-Text;text-decoration: underline;">coworking</a> émerge comme une alternative dynamique pour les professionnels à la recherche de lieux de travail flexibles. Il favorise la collaboration, l'échange d'idées et la création d'écosystèmes professionnels. Ce mode de travail partagé entre professionnels de divers secteurs offre des avantages multiples : réduction des coûts, accès à des services de qualité, stimulation de la créativité et de l'autonomie. Il facilite également l'accès à un réseau diversifié, favorise la coopération et la co-création.
      </p>
      <p class="font-m">
        Ce cadre convivial et stimulant du coworking encourage la diversité, la solidarité et la confiance, créant ainsi une culture d'entreprise axée sur la collaboration et l'innovation. Cet espace répond aux besoins des professionnels en quête de flexibilité et de collaboration, offrant un environnement propice à la productivité et au bien-être.
      </p>
      <h3 class="font-m" id="modifyFont-m-VerbatimCTA-2" style="text-align: left;width: 100%;">Personnalisation et collaboration : écosystèmes de travail évolutifs</h3>
      <p class="font-m">
        Les bureaux opérés et les espaces de travail flexibles permettent une personnalisation accrue tout en favorisant la collaboration. Ces écosystèmes évolutifs offrent un terreau propice à l’innovation et à la synergie entre individus et entreprises. Les professionnels peuvent ainsi adapter leur espace de travail à leur image, à leur culture, et à leurs valeurs, tout en bénéficiant de l’expertise, du soutien, et de la visibilité d’une communauté professionnelle. Les bureaux opérés et les espaces de travail flexibles offrent également des opportunités de formation, de mentorat, et de networking, favorisant le développement des compétences et des opportunités d’affaires.
      </p>
      <h3 class="font-m" id="modifyFont-m-VerbatimCTA-2" style="text-align: left;width: 100%;">Perspectives et défis de la location de bureau à Paris</h3>
      <p class="font-m">
        La location de bureau offre des perspectives d’évolution et de croissance pour les professionnels et les entreprises, en leur permettant de s’adapter aux changements du marché, de se différencier, de se renouveler, et de se transformer. La location de bureau permet ainsi de :
      </p>
      <ul class="font-m">
        <li>Explorer de nouveaux marchés et de nouveaux secteurs en louant des bureaux dans des zones stratégiques, proches des clients, des partenaires ou des concurrents.</li>
        <li>Développer son réseau, sa notoriété, sa visibilité, en louant des bureaux dans des lieux prestigieux, attractifs ou innovants, qui renforcent l’image de marque et la réputation de l’entreprise.</li>
        <li>Saisir des opportunités, des collaborations en louant des bureaux dans des écosystèmes professionnels dynamiques, tels que des incubateurs qui favorisent les rencontres, les échanges, et les alliances.</li>
      </ul>
      <p class="font-m">
        La location de bureau offre donc des perspectives d’évolution et de croissance pour les professionnels et les entreprises, en leur permettant de se diversifier, de se positionner, de se renforcer, et de se démarquer.
      </p>
      <p class="font-m">
        La <a href="https://flexinuse.fr/location-bureau-paris" class="font-m" style="font-family: Abril-Text;text-decoration: underline;">location de bureau</a> est une solution qui redessine nos espaces de travail, offrant des avantages aux professionnels qui souhaitent s’adapter à la transformation professionnelle moderne. Que ce soit pour louer un bureau à Paris, opter pour un espace de coworking, ou choisir un type de bail adapté à ses besoins, la location de bureau offre une opportunité de se démarquer, de se développer, et de s’épanouir pour votre entreprise.
      </p>
    </div>

    <div style="display: flex ;flex-direction: column; justify-content: center; /* background-color: #77BCE0; */ position: relative; margin: 0 auto;padding-bottom: 3%;" class="widthPartBeforeFooter">
          <h4 style="margin-bottom:0;">Louer ses bureaux</h4>
          <div style="display: flex;gap: 7%;flex-wrap: wrap;" class="flex-direction-coworking-location">
            <div class="col-3">
                <ul class="font-m marginBottomUL" style="list-style: none;padding: 0;">
                  <li><a href="location-bureau-paris-1" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 1</a></li>
                  <li><a href="location-bureau-paris-2" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 2</a></li>
                  <li><a href="location-bureau-paris-3" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 3</a></li>
                  <li><a href="location-bureau-paris-4" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 4</a></li>
                  <li><a href="location-bureau-paris-5" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 5</a></li>
                  <li><a href="location-bureau-paris-6" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 6</a></li>
                  <li><a href="location-bureau-paris-7"style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 7</a></li>
                </ul>
            </div>
            <div class="col-3">
                <ul class="font-m marginZeroUL" style="list-style: none;padding: 0;">
                  <li><a href="location-bureau-paris-8" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 8</a></li>
                  <li><a href="location-bureau-paris-9" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 9</a></li>
                  <li><a href="location-bureau-paris-10" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 10</a></li>
                  <li><a href="location-bureau-paris-11" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 11</a></li>
                  <li><a href="location-bureau-paris-12" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 12</a></li>
                  <li><a href="location-bureau-paris-13" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 13</a></li>
                  <li><a href="location-bureau-paris-14" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 14</a></li>
                </ul>
            </div>
            <div class="col-4">
                <ul class="font-m marginZeroUL" style="list-style: none;padding: 0;">
                  <li><a href="location-bureau-paris-15" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 15</a></li>
                  <li><a href="location-bureau-paris-16" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 16</a></li>
                  <li><a href="location-bureau-paris-17" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 17</a></li>
                  <li><a href="location-bureau-paris-18" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 18</a></li>
                  <li><a href="location-bureau-paris-19" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 19</a></li>
                  <li><a href="location-bureau-paris-20" style="font-family: Abril-Text;" class="font-m">Location de bureau Paris 20</a></li>
                  <li><a href="location-boulogne-billancourt" style="font-family: Abril-Text;" class="font-m">Location de bureau Boulogne Billancourt</a></li>
                </ul>
            </div>
          </div>
          <div style="display: flex;gap: 7%;flex-wrap: wrap;" class="flex-direction-coworking-location">
            <div class="col-4">
                <ul class="font-m marginZeroUL" style="list-style: none;padding: 0;">
                  <li><a href="location-gare-du-nord" style="font-family: Abril-Text;" class="font-m">Location de bureau Gare du Nord</a></li>
                  <li><a href="location-gare-de-lyon" style="font-family: Abril-Text;" class="font-m">Location de bureau Gare de Lyon</a></li>
                  <li><a href="location-levallois-perret" style="font-family: Abril-Text;" class="font-m">Location de bureau Levallois Perret</a></li>
                  <li><a href="location-montparnasse" style="font-family: Abril-Text;" class="font-m">Location de bureau Montparnasse</a></li>
                  <li><a href="location-republique" style="font-family: Abril-Text;" class="font-m">Location de bureau République</a></li>
                  <li><a href="location-saint-lazare" style="font-family: Abril-Text;" class="font-m">Location de bureau Saint Lazare</a></li>
                </ul>
            </div>
          </div>
          <h4 style="margin-bottom:0;">Espaces de coworking</h4>
          <div style="display: flex;gap: 7%;flex-wrap: wrap;" class="flex-direction-coworking-location">
            <div class="col-3">
              <ul class="font-m marginBottomUL" style="list-style: none;padding: 0;">
                <li><a href="coworking-paris-1" style="font-family: Abril-Text;" class="font-m">Coworking Paris 1</a></li>
                <li><a href="coworking-paris-2" style="font-family: Abril-Text;" class="font-m">Coworking Paris 2</a></li>
                <li><a href="coworking-paris-3" style="font-family: Abril-Text;" class="font-m">Coworking Paris 3</a></li>
                <li><a href="coworking-paris-4" style="font-family: Abril-Text;" class="font-m">Coworking Paris 4</a></li>
                <li><a href="coworking-paris-5" style="font-family: Abril-Text;" class="font-m">Coworking Paris 5</a></li>
                <li><a href="coworking-paris-6" style="font-family: Abril-Text;" class="font-m">Coworking Paris 6</a></li>
                <li><a href="coworking-paris-7" style="font-family: Abril-Text;" class="font-m">Coworking Paris 7</a></li>
              </ul>
            </div>
            <div class="col-3">
              <ul class="font-m marginZeroUL" style="list-style: none;padding: 0;">
                <li><a href="coworking-paris-8" style="font-family: Abril-Text;" class="font-m">Coworking Paris 8</a></li>
                <li><a href="coworking-paris-9" style="font-family: Abril-Text;" class="font-m">Coworking Paris 9</a></li>
                <li><a href="coworking-paris-10" style="font-family: Abril-Text;" class="font-m">Coworking Paris 10</a></li>
                <li><a href="coworking-paris-11" style="font-family: Abril-Text;" class="font-m">Coworking Paris 11</a></li>
                <li><a href="coworking-paris-12" style="font-family: Abril-Text;" class="font-m">Coworking Paris 12</a></li>
                <li><a href="coworking-paris-13" style="font-family: Abril-Text;" class="font-m">Coworking Paris 13</a></li>
                <li><a href="coworking-paris-14" style="font-family: Abril-Text;" class="font-m">Coworking Paris 14</a></li>
              </ul>
            </div>
            <div class="col-3">
              <ul class="font-m marginZeroUL" style="list-style: none;padding: 0;">
                <li><a href="coworking-paris-15" style="font-family: Abril-Text;" class="font-m">Coworking Paris 15</a></li>
                <li><a href="coworking-paris-16" style="font-family: Abril-Text;" class="font-m">Coworking Paris 16</a></li>
                <li><a href="coworking-paris-17" style="font-family: Abril-Text;" class="font-m">Coworking Paris 17</a></li>
                <li><a href="coworking-paris-18" style="font-family: Abril-Text;" class="font-m">Coworking Paris 18</a></li>
                <li><a href="coworking-paris-19" style="font-family: Abril-Text;" class="font-m">Coworking Paris 19</a></li>
                <li><a href="coworking-paris-20" style="font-family: Abril-Text;" class="font-m">Coworking Paris 20</a></li>
                <li><a href="coworking-levallois-perret" style="font-family: Abril-Text;" class="font-m">Coworking Levallois</a></li>
              </ul>
            </div>
          </div>
          <div style="display: flex;gap: 7%;flex-wrap: wrap;" class="flex-direction-coworking-location">
            <div class="col-4">
              <ul class="font-m marginZeroUL" style="list-style: none;padding: 0;">
                <li><a href="coworking-saint-lazare-paris" style="font-family: Abril-Text;" class="font-m">Coworking Saint-Lazare Paris</a></li>
                <li><a href="coworking-gare-lyon-paris" style="font-family: Abril-Text;" class="font-m">Coworking Gare de Lyon Paris</a></li>
                <li><a href="coworking-montparnasse-paris" style="font-family: Abril-Text;" class="font-m">Coworking Montparnasse Paris</a></li>
                <li><a href="coworking-boulogne-billancourt-paris" style="font-family: Abril-Text;" class="font-m">Coworking Boulogne-Billancourt</a></li>
                <li><a href="coworking-republique-paris" style="font-family: Abril-Text;" class="font-m">Coworking République Paris</a></li>
                <li><a href="coworking-gare-du-nord-paris" style="font-family: Abril-Text;" class="font-m">Coworking Gare du Nord Paris</a></li>
              </ul>
            </div>
          </div>
    </div>
    
@endsection


@section('scripts')

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhuR1erE3ZS9EEgqm9-czUxo6uPQbR5k8&libraries=places&callback=initAutocomplete&loading=async" type="text/javascript">
  </script>
  <script>
    let value_place = ""
    function SubmitSearch() {
        const combien = document.getElementById("combien");

        if (combien.value && value_place) {
            const url = `{{ url('/location-bureau-entreprise?nbPostes=${combien.value}&${value_place}') }}`;
            window.location.href = url.replace("amp;", ''); // replace("amp;", '') is used to remove the amp; from the url
        } else if (combien.value) {
            const url = `{{ url('/location-bureau-entreprise?nbPostes=${combien.value}') }}`;
            window.location.href = url;
        } else if (value_place) {
            const url = `{{ url('/location-bureau-entreprise?${value_place}') }}`;
            window.location.href = url;
        }
        
        if(combien.value === '' && value_place === ''){
          window.location.href = `{{ url('/location-bureau-entreprise') }}`;
        }
    }
    function initAutocomplete() {
      const input = document.getElementById("placeInput")
      const options = {
          componentRestrictions: { country: 'fr' },
          fields: ['address_components', 'geometry.location', 'place_id', 'formatted_address'],
      }
      autocomplete = new google.maps.places.Autocomplete(input, options)
      autocomplete.addListener("place_changed", onPlaceChange)
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
          //value_place = `address=${place.formatted_address}&radius=500`
          const longNames = place.address_components.map(component => component.long_name)
          let arrayAdress = reformatAddress(longNames).split(',');
          value_place = `address=${arrayAdress}`
        }
        console.log(value_place)
    }
  </script>
  <script>
      // Fonction pour détecter si l'utilisateur est sur iOS
      function isIOS() {
          //return /Mac|iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
          //return /(Mac|iPhone|iPod|iPad)/i.test(navigator.userAgent)
          return /Mac|iPhone|iPod|iPad/i.test(navigator.userAgent)
      }
  </script>
  <script>
    //fontMainTitleModify
    if (isIOS()) {
      //console.log('isIOS')
      let element = document.getElementById('fontMainTitleModify')
      if (element.classList.contains('fontMainTitle')) {
          element.classList.replace('fontMainTitle', 'fontMainTitle-safari-ios')
      }
      let element2 = document.getElementById('smallTitleFindWorkspace')
      if (element2.classList.contains('fontSubTitle')) {
          element2.classList.replace('fontSubTitle', 'safari-ios-fontSubTitle')
      }
      let element3 = document.getElementById('smallTitleBlocFourWelcome')
      if(element3.classList.contains('font-l')){
          element3.classList.replace('font-l', 'font-l-redirectCTA-safari')
      }
      let element4 = document.getElementById('smallTextBlocFourWelcome-1')
      if(element4.classList.contains('font-m')){
          element4.classList.replace('font-m', 'font-m-redirectCTA-safari')
      }
      let element5 = document.getElementById('modifyFontLHowCTA')
      if(element5.classList.contains('font-l')){
          element5.classList.replace('font-l', 'font-l-redirectCTA-safari')
      }
      let element6 = document.getElementById('modifyFontWhoAreWeCTA-1')
      if(element6.classList.contains('font-l')){
          element6.classList.replace('font-l', 'font-l-redirectCTA-safari')
      }
      //modififyFontWhoAreWeCTA-1-text
      let element7 = document.getElementById('modififyFontWhoAreWeCTA-1-text')
      if(element7.classList.contains('font-m')){
          element7.classList.replace('font-m', 'font-m-redirectCTA-safari')
      }
      //modifyFontWhoAreWeCTA-2
      let element8 = document.getElementById('modifyFontWhoAreWeCTA-2')
      if(element8.classList.contains('font-l')){
          element8.classList.replace('font-l', 'font-l-redirectCTA-safari')
      }
      //modififyFontWhoAreWeCTA-2-text
      let element9 = document.getElementById('modififyFontWhoAreWeCTA-2-text')
      if(element9.classList.contains('font-m')){
          element9.classList.replace('font-m', 'font-m-redirectCTA-safari')
      }
      //modifyFontWhoAreWeCTA-3
      let element10 = document.getElementById('modifyFontWhoAreWeCTA-3')
      if(element10.classList.contains('font-l')){
          element10.classList.replace('font-l', 'font-l-redirectCTA-safari')
      }
      //modififyFontWhoAreWeCTA-3-text
      let element11 = document.getElementById('modififyFontWhoAreWeCTA-3-text')
      if(element11.classList.contains('font-m')){
          element11.classList.replace('font-m', 'font-m-redirectCTA-safari')
      }
      //modifyFontResultShortCTA-1
      let element12 = document.getElementById('modifyFontResultShortCTA-1')
      if(element12.classList.contains('fontSizeShort')){
          element12.classList.replace('fontSizeShort', 'fontSizeShort-safari')
      }
      //modififyFontResultShortCTA-1-title
      let element13 = document.getElementById('modififyFontResultShortCTA-1-title')
      if(element13.classList.contains('fontSizeShortTitle')){
          element13.classList.replace('fontSizeShortTitle', 'fontSizeShortTitle-safari')
      }
      //modififyFontResultShortCTA-2-title
      let element14 = document.getElementById('modififyFontResultShortCTA-2-title')
      if(element14.classList.contains('fontSizeShortTitle')){
          element14.classList.replace('fontSizeShortTitle', 'fontSizeShortTitle-safari')
      }
      //modifyFontResultShortCTA-2
      let element15 = document.getElementById('modifyFontResultShortCTA-2')
      if(element15.classList.contains('fontSizeResult')){
          element15.classList.replace('fontSizeResult', 'fontSizeResult-safari')
      }
      //modifyFontSubTitleCustomPage
      let element16 = document.getElementById('modifyFontSubTitleCustomPage')
      if(element16.classList.contains('fontSubTitle')){
          element16.classList.replace('fontSubTitle', 'safari-ios-fontSubTitle')
      }
      //modifyFont-m-VerbatimCTA-1
      let element17 = document.getElementById('modifyFont-m-VerbatimCTA-1')
      if(element17.classList.contains('font-m')){
          element17.classList.replace('font-m', 'safari-ios-font-m-verbatimCTA')
      }
      //modifyFontSubTitleVerbatimCTA
      let element18 = document.getElementById('modifyFontSubTitleVerbatimCTA')
      if(element18.classList.contains('fontSubTitle')){
          element18.classList.replace('fontSubTitle', 'safari-ios-fontSubTitle')
      }
      //modifyFont-m-VerbatimCTA-2
      let element19 = document.getElementById('modifyFont-m-VerbatimCTA-2')
      if(element19.classList.contains('font-m')){
          element19.classList.replace('font-m', 'safari-ios-font-m-verbatimCTA')
      }
      //modifyFont-m-VerbatimCTA-3
      let element20 = document.getElementById('modifyFont-m-VerbatimCTA-3')
      if(element20.classList.contains('font-m')){
          element20.classList.replace('font-m', 'safari-ios-font-m-verbatimCTA')
      }
      //modifyEmojiVerbatimCTA
      let element21 = document.getElementById('modifyEmojiVerbatimCTA')
      //if(element21.classList.contains('font-m')){
      document.getElementById('modifyEmojiVerbatimCTA').classList.add('safari-ios-widthEmoji-verbatimCTA');
      //}
      //modifyFontTitleArticlesCTA
      let element22 = document.getElementById('modifyFontTitleArticlesCTA')
      if(element22.classList.contains('fontMainTitle')){
          element22.classList.replace('fontMainTitle', 'fontMainTitle-safari-ios')
      }
      //modifyFontContactCTAFormTitle
      let element23 = document.getElementById('modifyFontContactCTAFormTitle')
      if(element23.classList.contains('fontContactTitle')){
          element23.classList.replace('fontContactTitle', 'fontContactTitle-safari')
      }
      //modifyFont-m-ContactCTAForm
      let element24 = document.getElementById('modifyFont-m-ContactCTAForm')
      if(element24.classList.contains('font-m')){
          element24.classList.replace('font-m', 'safari-ios-font-m-verbatimCTA')
      }
      let element25 = document.getElementById('smallTextBlocFourWelcome-2')
      if(element25.classList.contains('font-m')){
          element25.classList.replace('font-m', 'font-m-redirectCTA-safari')
      }
      let element26 = document.getElementById('modifyFontResultShortCTA-2-bis-1')
      if(element26.classList.contains('fontSizeResult')){
          element26.classList.replace('fontSizeResult', 'fontSizeResult-safari')
      }
      let element27 = document.getElementById('modifyFontResultShortCTA-2-bis-2')
      if(element27.classList.contains('fontSizeResult')){
          element27.classList.replace('fontSizeResult', 'fontSizeResult-safari')
      }
      let element28 = document.getElementById('modifyFontResultShortCTA-2-bis-3')
      if(element28.classList.contains('fontSizeResult')){
          element28.classList.replace('fontSizeResult', 'fontSizeResult-safari')
      }
      let element29 = document.getElementById('modifyFontResultShortCTA-2-bis-4')
      if(element29.classList.contains('fontSizeResult')){
          element29.classList.replace('fontSizeResult', 'fontSizeResult-safari')
      }
      let element30 = document.getElementById('smallTitleFindWorkspace-2')
      if (element30.classList.contains('fontSubTitle')) {
          element30.classList.replace('fontSubTitle', 'safari-ios-fontSubTitle')
      }
      let element31 = document.getElementById('smallTitleFindWorkspace-3')
      if (element31.classList.contains('fontSubTitle')) {
          element31.classList.replace('fontSubTitle', 'safari-ios-fontSubTitle')
      }
      let element32 = document.getElementById('modifyFontLHowCTA')
      if (element32.classList.contains('font-l')) {
          element32.classList.replace('font-l', 'font-l-redirectCTA-safari')
      }
      let element33 = document.getElementById('smallTitleBlocFourWelcome-2')
      if(element33.classList.contains('font-l')){
          element33.classList.replace('font-l', 'font-l-redirectCTA-safari')
      }
    }
  </script>
  <script>    
        //let imputmailletter=document.getElementById("emailletter");
        $('#emailletterAccueil').keypress(function(event){
          var keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13'){
            event.preventDefault();           
            document.getElementById("ajoutemailletter").click();	
          }
        });        
        $('#ajoutemailletterAccueil').click(function () {
        //verifier si le mail est valide
        const emailInput = document.getElementById('emailletterAccueil').value;

        // Regex pour valider le format d'une adresse e-mail
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (emailRegex.test(emailInput)) {
                //Adresse e-mail valide
        }else {
                var messageErrorEmail = 'Adresse e-mail invalide.';
                let p4 = document.getElementById("p4");                   
                p4.style.display = "block";  
                p4.innerText = messageErrorEmail;
                return;
        }
                                      
        var form = $('#inscrirenewsletterAccueil');
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
  <script>
    // Fonction pour mettre à jour le token
    function refreshRecaptchaTokenAccueil() {
          grecaptcha.ready(function () {
            grecaptcha.execute('<?php echo getenv('captchaSiteKey'); ?>', { action: 'inscrirenewsletter' }).then(function (token) {
                  document.getElementById('recaptchaToken').value = token;
            });
          });
    }

    //ajoutemailletterAccueil
    document.getElementById('ajoutemailletterAccueil').addEventListener('click', function () {
        refreshRecaptchaTokenAccueil();
    });

    //Générer un token au chargement initial de la page
    refreshRecaptchaTokenAccueil();
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

<!-- WebPage (Accueil) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://flexinuse.fr/#webpage",
  "url": "https://flexinuse.fr/",
  "name": "fiu – Flex In Use",
  "isPartOf": { "@id": "https://flexinuse.fr/#website" },
  "inLanguage": "fr-FR",
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://flexinuse.fr/assets/img/homepage-test5.png"
  }
}
</script>
@endsection