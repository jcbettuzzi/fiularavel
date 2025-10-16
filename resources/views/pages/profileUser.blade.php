<?php
$API_KEY = getenv('GOOGLE_API_KEY');
?>
@extends('layouts.defaultFiu')
<!-- ecran = profileUser.blade.php   -->


@section('title')
  Mon profil et mon organisation, optimisez votre expérience, complétez votre profil professionnel. 
@endsection

@section('metaDescription')
Mon profil et mon organisation, optimisez votre expérience, complétez votre profil professionnel. Complétez votre profil en ajoutant par exemple le nom de votre société, et le nombre de salariés. Cela nous permettra de mieux vous connaître et d'adapter nos services à vos besoins spécifiques.Ensemble, faisons équipe pour la réussite de votre projet !
@endsection

@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
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
              background-color: black;
              color: white;
              border-right: 1px solid #DDDDDD;
            "
            href="{{ url('profile') }}"
          >
            Mon Compte
          </a>
        
  </div>
  <div>
    <div class="profileBlock" style="margin-bottom: 50px;">
      <div class="wd-20 hideProfilePart-mobile">
        <div class="profileSideBar">
            <div class="a-sidebar-active items-center">
                <div>
                    <a class="a-sidebar">Mon profil</a>
                </div>
            </div>
            <!--<div class="a-sidebar items-center">item</div>-->
        </div>
      </div>
      <div
        class="column col-10 col-m-12 col-s-12 paddingRightProfilePage-Destop"
        style="
          gap: 50px;
          display: flex;
        "
      >
        <div
          id="detail"
          class="row"
          style="
            border: 1px solid #DDDDDD;
          "
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
                    <h4> Mon profil </h4>
                    </section>
                </div>
                <form method="POST" action="{{ url('/updateProfileUser') }}">
                @csrf
                <div class="profileInputBlock">
                    @if(session('errorUpdateProfileFiu'))
                        <div style="font-size: 2.5rem; font-weight: bold;color: red;padding-bottom: 4%;">
                            {{ session('errorUpdateProfileFiu') }}
                        </div>
                    @endif
                    <div class="profileImagediv">
                    <!-- 
                    <a
                        class="asoSansRegular"
                    >
                        <u>Modifier ma photo</u>
                    </a>
                    -->
                    </div>
                    <div
                    class="profileBlockDiv"
                    style="
                        gap: 2%;
                    "
                    >
                    <div class="profileInputBlock">
                        <label class="azoSansBoldLabel" htmlFor="firstname">
                        Prénom
                        </label>
                        <input
                        placeholder="Prenom"
                        class="inputProfile width-small-profileMobile"
                        type="text"
                        id="firstname"
                        name="firstname"
                        value="{{$user['data']['acccountFiu']['prenom']}}"
                        />
                    </div>
                    <div class="profileInputBlock">
                        <label class="azoSansBoldLabel" htmlFor="lastname">
                        Nom
                        </label>
                        <input
                        placeholder="Nom"
                        class="inputProfile width-small-profileMobile"
                        type="text"
                        id="lastname"
                        name="lastname"
                        value="{{$user['data']['acccountFiu']['nom']}}"
                        />
                    </div>
                    </div>
                    <div
                    class="profileBlockDiv"
                    style="
                        gap: 2%;
                    "
                    >
                    <div
                        class="profileInputBlock"
                        style="
                        gap: 5%;
                        "
                    >
                        <label class="azoSansBoldLabel" htmlFor="email">
                        Adresse e-mail
                        </label>
                        <input
                        class="inputProfile width-small-profileMobile"
                        type="text"
                        id="email"
                        name="email"
                        value="{{$user['data']['acccountFiu']['email']}}"
                        style="background-color: #f3f3f3;"
                        disabled
                        />
                    </div>
                    <div class="profileInputBlock">
                        <label class="azoSansBoldLabel" htmlFor="phone">
                        Téléphone
                        </label>
                        <input
                        placeholder="adresse@email.com"
                        class="inputProfile width-small-profileMobile"
                        type="text"
                        id="tel"
                        name="telephone"
                        value="{{$user['data']['client']['telephone']}}"
                        />
                    </div>
                    </div>
                    <div
                    class="profileBlockDiv"
                    style="
                        gap: 2%;
                    "
                    >
                    <div class="profileInputBlock">
                        <label class="azoSansBoldLabel" htmlFor="password">
                        Mot de passe
                        </label>
                        <input
                        placeholder="•••••••••••••"
                        class="inputProfile width-small-profileMobile"
                        type="password"
                        name="passwordNumber1"
                        id="password"
                        />
                    </div>
                    <div class="profileInputBlock">
                        <label class="azoSansBoldLabel" htmlFor="validate-password">
                        Confirmation du mot de passe
                        </label>
                        <input
                        placeholder="•••••••••••••"
                        class="inputProfile width-small-profileMobile"
                        type="password"
                        name="passwordNumber2"
                        id="validate-password"
                        />
                    </div>
                    </div>
                    
                    <input type="hidden" name="contacttelephone_id" value="{{$user['data']['client']['contacttelephone_id']}}">
                    <input type="hidden" name="contactmail_id" value="{{$user['data']['client']['contactmail_id']}}">
                    <input type="hidden" name="contact_id" value="{{$user['data']['client']['contactid']}}">
                    <input type="hidden" name="fiuid" value="{{$user['data']['client']['fiuid']}}">
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                    <button class="buttonSave" style=" margin-top: 2em; " type="submit">
                    Enregistrer
                    </button>
                    <a class="asoSansRegular" style=" font-size: 2rem; margin-top: 5%; " href="{{ url('Supprimerlecompte') }}">
                    <u> Supprimer mon compte </u>
                    </a>
                </div>
                </form>
            </div>
          <!-- Fin test 2 -->
          <div class="profileCommentContainer hideProfilePart-mobile">
            <div
              class="boxRadiusTopLeftComment bg-vert-fort blanc azoSansLight"
              style="
                padding: 0% 10% 30%;
                position: relative;
              "
            >
              <h5
                class="abrilTextRegular"
                style="
                  font-size: 2.6rem;
                "
              >
                Optimisez votre expérience : <br /> compléter votre profil professionnel !
              </h5>
              <p class="asoSansRegular">
                Complétez votre profil en ajoutant par exemple le nom de votre société, et le nombre de salariés. Cela
                nous permettra de mieux vous connaître et d'adapter nos services à vos besoins spécifiques.
                <br /> Ensemble, faisons équipe pour la réussite de votre projet !
              </p>
              <div
                style="
                  right: -3%;
                  position: absolute;
                  bottom: -6%;
                "
              >
                {{--<Image src={'/happy-purple-profile.png'} height="160.07px" width="181px" />--}}
                <img src="{{ asset('assets/img/220506-FiU-Personnages-24.png') }}" height="160.07px" width="181px">
              </div>
            </div>
          </div>
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
    /*
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
    */
  </script>
  
  


@endsection
