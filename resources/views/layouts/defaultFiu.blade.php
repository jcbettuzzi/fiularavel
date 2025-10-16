<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('metaDescription')" />
        @yield('ogImagePrincipale')
        <link rel="icon" href="{{ asset('assets/img/favicon.png')}}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('canonical')
        <link rel="stylesheet" href="{{ asset('assets/css/testStyleFiu.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('assets/css/fontTestFiu.css')}}" type="text/css"/>
        <meta name="msvalidate.01" content="CA621AC563E900BFF750A7D28243A1D1" />
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo getenv('captchaSiteKey'); ?>"></script>
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
          'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PFWXM2S7');</script> 
        <!-- End Google Tag Manager -->
        <style>
          /*
          #marginTopMentionFooter{
            margin-top: 180px !important;
          }
          */
          :modal {
              background-color: white;
              border: 2px solid burlywood;
              border-radius: 5px;
            }

            dialog::backdrop {
              background: rgba(0,0,0,0.5);
            }

            dialog::-webkit-scrollbar{
              width: 7px;
              background-color: transparent;
            }

            dialog::-webkit-scrollbar-thumb{
              background: #b3b3b3;
              border-radius: 6px;
            }

            dialog::-webkit-scrollbar-thumb:hover{
              background: grey;
            }

            .topConnexion{
              top: 15%;
            }

            @media only screen and (max-width: 765px){
              .topConnexion{
                top: 0;
              }
              dialog::-webkit-scrollbar{
                width: 0px;
                background-color: transparent;
              }
            }

            .grecaptcha-badge{
              display: none;
            }

            @media only screen and (max-width: 1200px){
              .footerMobileDisplay{
                display: flex;
                gap: 3%;
              }
            }
        </style>
        <style>
        ul.typeSpaceWork {
          position: relative;
        }

        ul.typeSpaceWork li {
          display: inline-block;
          /*width: 160px;
          height: 60px;
          background: #39CCCC;*/
          text-align: center;
          line-height: 60px;
          color: #fff;
          position: relative;
          overflow: hidden;
          cursor: pointer;
        }

        ul.typeSpaceWork li:hover {
          background: #F0F0F0;
        }

        .slider {
          display: block;
          position: absolute;
          bottom: 0;
          left: 0;
          height: 4px;
          background: yellow;
          transition: all 0.5s;
        }
        /*  Ripple */

        .ripple {
          width: 0;
          height: 0;
          border-radius: 50%;
          /*background: rgba(255, 255, 255, 0.4);*/
          background: #A5A5A5;
          transform: scale(0);
          position: absolute;
          opacity: 1;
        }

        .rippleEffect {
          animation: rippleDrop .3s linear;
        }

        @keyframes rippleDrop {
          100% {
            transform: scale(2);
            opacity: 0;
          }
        }
        </style>
        <style>
          .minWidthImgSearch{
            min-width: 19vw;
          }
          @media screen and (min-width: 769px) and (max-width: 1200px){
            .minWidthImgSearch{
              min-width: 47vw;
            }
          }
          @media only screen and (max-width: 768px){
            .minWidthImgSearch{
              min-width: 95.75vw;
            }
          }

          .min_HeightOneAdDestop{
              min-height: 290px;
          }
          @media screen and (min-width: 1200px) and (max-width: 1237px){
            .min_HeightOneAdDestop{
              min-height: 313px;
            }
          }

          .partNbPosteMobileSurfaceLoyer{
            display: none;
          }
          @media only screen and (max-width: 1200px){
            .partNbPosteMobileSurfaceLoyer{
              display: block;
            }
          }
        </style>
        <style>
          .widthMesRecherches{
            width: 330px !important;
          }
          .mesRecherches-content-space-between {
            display: flex;
            justify-content: space-between;
          }
          .marginRightAfficherLesAnnoncesMesRecherches{
            margin-right: 3%;
          }
          .afficherPartTypeEspaceMobile{
            display: none;
          }
          @media only screen and (max-width: 1200px){
            .widthMesRecherches{
              width: 250px !important;
            }
            .mesRecherches-content-space-between {
              justify-content: unset;
            }
            .paddingLeftButtonMesRechercheMobile{
              padding-left: 5%;
            }
            .fontSizeReinitiliserMesRecherchesMobile{
              font-size: 19px;
            }
            .fontSizeAfficherAnnoncesMobile{
              font-size: 15px;
            }
            .marginRightAfficherLesAnnoncesMesRecherches{
              margin-right: 3.5%;
            }
            .minWidthPartButtonMesRecherches{
              min-width: 250px;
            }
            .textAlignMesRechercheMenuTitleMobile{
              text-align: center;
            }
            .afficherPartTypeEspaceMobile{
              display: block;
            }
          }
        </style>
        <style>
          .submenu-toggle {
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 8px;
            background-color: #eee;
            display: inline-block;
          }

          .submenu-toggle:hover {
            background-color: #ddd;
          }

          .submenu {
            display: none;
            flex-direction: column;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 8px;
            padding: 8px;
          }

          .submenu li {
            list-style: none;
            margin: 5px 0;
          }

          .submenu li a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border-radius: 6px;
            display: block;
          }

          .submenu li a:hover {
            background-color: #f0f0f0;
          }

          .submenu-toggle.open + .submenu {
            display: flex;
          }

          @media (max-width: 1200px) {
            .bloc-link-overlay {
              flex-direction: column;
            }
          }
        </style>
        @yield('custom_css')
    </head>

    <body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFWXM2S7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="headerContainer" style="z-index: 5;">
        <div class="headerNav">
            <a href="{{ url('/') }}">
              <div class="logoResponsiveHeader">
                  <img src="{{ asset('assets/img/logo-fiu@2x.png')}}" alt="logo fiu" width="84" height="40" class="cursorPointer" />
              </div>
            </a>
            <div class="tooltip destop-hideShow-header">
            <a class='headerLink'>
                <span style=" float: left; padding-top: 3%;">
                Trouver un bureau &nbsp;
                </span>
                <span
                style="float: right; padding-top: 2.5%;"
                >
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>
                </span>
            </a>
            <div class="tooltiptext minWidth-WindowsMenuFindDestop" style="gap: 15px;display: flex;text-align: left;flex-direction: column;left: 32%;">
                <a class="headerLink" style="margin-top: 8px;textAlign: left;white-space: nowrap;background-color: #F8D14F;border-radius: 20px;padding-top: 2%; padding-bottom: 2%;" href="{{ url('/location-bureau-entreprise') }}">
                  <span style="margin-left: 7%;margin-right: 7%;">Commencer ma recherche</span>
                </a>
                <a class="headerLink" style=" text-align: left; margin-left: 7%; margin-right: 7%;" href="{{ url('/location-bureaux') }}">
                    Location de bureau
                </a>
                <a class="headerLink" style="text-align: left; margin-left: 7%; margin-right: 7%;" href="{{ url('/coworking') }}">
                    Coworking
                </a>
                <a class="headerLink" style="text-align: left; margin-left: 7%; margin-right: 7%;" href="{{ url('/achat-de-bureau') }}">
                    Achat de bureau
                </a>
                <a class="headerLink" style="margin-bottom: 8px;text-align: left; margin-left: 7%; margin-right: 7%;" href="{{ url('/investir') }}">
                    Investissement
                </a>
            </div>
            </div>
            <a href="{{ url('/recherche-sur-mesure') }}" class="headerLink destop-hideShow-header">
                Recherche sur mesure
            </a>
            @include('layouts.mes-recherches')
        </div>
        <div class="publishDiv items-center justify-content-space-between">
            <div style="margin-right: 5%;"> 
            <p style="margin: 0;white-space:nowrap;" class="headerLinkAnnonce">Nous appeler</p> 
            <a style="margin: 0;white-space:nowrap;" class="headerLinkAnnonce" href="tel:+33755537147">07 55 53 71 47</a>
            </div>
            
            <div class="destop-hideShow-header" style="width: 50%;">
                  
                    <a class="headerLinkAnnonce" href="{{ url('/publier-une-annonce') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                    <span style="padding-left: 1%; white-space: nowrap;">Publier une annonce</span>
                    </a>
                  
            </div>
            
            @if(Session::get('usersigne')==0)
            <button class="buttonConnexion azoSansBoldLabel destop-hideShow-header" id="modalconnexion">
                Connexion
            </button>
            @else
            <button class="buttonConnexion azoSansBoldLabel destop-hideShow-header" id="modalconnexion" style="display: none;">
                Connexion
            </button>
            @endif
            
            @if(Session::get('usersigne')==1)
            <div class="tooltip destop-hideShow-header">
              <button
                class="buttonConnexion azoSansBoldLabel items-center"
                style="
                  gap: 10px;
                  width: 100px;
                  height: 51px;
                  margin-top: 0;
                "
              >
                <img src="{{asset('assets/img/Icon-feather-menu.jpg')}}" style="width:27px;height:18px;" alt="trois traits noirs" />
                <img src="{{ asset('assets/img/smile-purple-flower.png')}}" style="width: 100%;height: 100%;" />
              </button>
              <div
                class="tooltiptext"
                style="
                  gap: 35px;
                  display: flex;
                  text-align: left;
                  flex-direction: column;
                "
              >
                
                  <a class="headerLink" style=" margin-top: 24px; text-align: left; margin-left: 10%; " href="{{ url('profile') }}">
                    Mon profil
                  </a>
                
                  <a class="headerLink" style=" text-align: left; margin-left: 10%; " href="{{ url('mes-favoris') }}">
                    Favoris
                  </a>

                  <a class="headerLink" style=" text-align: left; margin-left: 10%; " href="{{ url('mes-demandes') }}">
                    Mes recherches
                  </a>

                  <a
                    class="headerLink"
                    style=" text-align: left; margin-left: 10%; margin-bottom: 10%; "
                    href="{{ url('logout') }}"
                  >
                    Déconnexion
                  </a>
              </div>
            </div>
            @endif
            

        </div>
        
        <div class="overlay" id="style" style="background-color: white;">
            <a class="closebtn" onClick="closeNav()">
            &times;
            </a>
            <div style="position: absolute;top: 1%;left: 3%;">
                <img src={{ asset('assets/img/logo-fiu@2x.png')}} alt="fiu" width={83} height={40} className="cursorPointer" href="/" />
            </div>
            <div class="overlay-content">
            <div class="bloc-link-overlay">
                <a style="background-color: #F8D14F;border-radius: 20px;padding-top: 2%; padding-bottom: 2%;" class="headerLink" href="{{ url('/location-bureau-entreprise') }}" >Commencer ma recherche</a>
                <a class="headerLink" href="{{ url('/location-bureaux') }}">Location de bureau</a>
                <a class="headerLink" href="{{ url('/achat-de-bureau') }}">Achat de bureau</a>
                <a class="headerLink" href="{{ url('/investir') }}">Investissement</a>
                <a class="headerLink" href="{{ url('/coworking') }}">Coworking</a>
                <a class="headerLink" href="{{ url('/recherche-sur-mesure') }}" >Recherche sur mesure</a>
                {{--
                <div style="padding: 14px; text-decoration: none; font-size: 20px; color: black; display: block; font-weight: bold;">
                  <span class="submenu-toggle" onclick="this.classList.toggle('open')">Mes recherches ▾</span>
                  <ul class="submenu">
                    <li><a href="#">Web</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div>
                --}}
                <a class="headerLink" id="mesRecherchesMobile">Mes recherches</a>
            </div>
            </div>
            <div class="footer-overlay">
            <div class="part-1-footer-overlay">
                
                <a class="headerLinkAnnonce" style="padding-left: '5%'; display: flex;" href="{{ url('/publier-une-annonce') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg> 
                    <span style="paddingLeft: 0.9%; ">Publier une annonce</span>
                </a>
                
                

                
                <!-- Quand utilisateur déconnecté -->
                @if(Session::get('usersigne')==0)  
                <button
                    class="buttonConnexion azoSansBoldLabel"
                    style="
                    width: 160px;
                    font-size: 1.8rem;
                    margin-left: 5%;
                    border-style: groove;
                    margin-top: 1%;
                    "
                    id="modalconnexionMobile"   
                >
                    Connexion
                </button>
                @else
                <button
                    class="buttonConnexion azoSansBoldLabel"
                    style="
                    width: 160px;
                    font-size: 1.8rem;
                    margin-left: 5%;
                    border-style: groove;
                    margin-top: 1%;
                    display: none;
                    "
                    id="modalconnexionMobile"   
                >
                    Connexion
                </button>
                @endif
                
                <!-------------------------------->
                

                <!-- Quand utilisateur connecté -->
                @if(Session::get('usersigne')==1)
                  
                <div class="wd-100">
                    <button
                        class="buttonConnexion azoSansBoldLabel  items-center marginTopSpaceMember"
                        style="
                        gap: 10%;
                        margin-left: 5%;
                        border-style: groove;
                        width: 133px;
                        "
                    >
                        <a href="{{ url('profile') }}" class="azoSansBoldLabel" style="font-size: 16px;">Espace Client</a>
                        <img src="{{ asset('assets/img/avatarProfile.png')}}" style="width: 20%;">
                    </button>
                    <a
                    class="headerLink paddingTopLogout"
                    href="{{ url('logout') }}"
                    style=" margin-left: 5%; margin-bottom: 2%; "
                    >
                    Déconnexion
                    </a>
                </div>
                
                @endif  
                <!-------------------------------->

                <!-- Quand admin connecté -->
                {{--   
                        <a className="headerLink" onClick="logAsMe" style=" margin-left: 5%; margin-bottom: 2%; ">
                        Retour à mon compte
                        </a>
                --}} 
                <!-------------------------------->
                </div>
                
            </div>
            <div class="borderOverlaySocialNetwork partOverlaySocialNetwork">                                
                <a target="_blank" href='https://www.instagram.com/fiu_flexinuse.fr/'>
                  <img src="{{ asset('assets/img/logo-instagram.png') }}" alt="instagram" width={25} height={25} />
                </a>
                <a href='https://www.facebook.com/profile.php?id=100089726257268' target="_blank">
                  <img src="{{ asset('assets/img/logo-facebook.png') }}" alt="facebook" width={13.39} height={25} />
                </a>
                <a href='https://www.linkedin.com/company/fiuflexinuse/' target="_blank">
                  <img src="{{ asset('assets/img/logo-linkedin.png') }}" alt="linkedin" width={21.72} height={25} />
                </a>
                <a href='https://www.youtube.com/@fiu_flexinuse/featured' target="_blank">
                  <img src="{{ asset('assets/img/logo-youtube.png') }}" alt="youtube" width={33} height={25} />
                </a>                
            </div>
            </div>
            <span
              style="cursor: pointer; padding-right: 2%;"
              onClick="openNav()"
              class="mobile-burger-header items-center"
            >
              <img src="{{asset('assets/img/Icon-feather-menu.jpg')}}" style="width:27px;height:18px;" alt="trois traits noirs" />
            </span>
        
                <!-- </div>  bettuzzi -->
                <!-- </div> -->
        </div>
        
        <dialog id="favDialogConnexion" class="bg-blanc topConnexion" style=" left: 50%; position: absolute; border-radius: 8px; border: 1px solid #707070; justify-content: flex-start; transform: translate(-50%); padding: 0;margin:0; " >
          <div class="column bg-blanc widthModalConnexion heightMobileModalConnexion  " id="modifyMarginTopModalConnexion" style="display: flex; border-radius: 10px 10px 8px 8px; justify-content: flex-start; margin-bottom: 2%;">
            <div class="wd-100" style="border-radius: 8px; background-color: rgb(255, 255, 255);">
              <div class="row wd-100 bg-vert-fort blanc justify-content-space-between" style="align-items: center; justify-content: center; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <p class="wd-10"></p>
                <p class="wd-90 items-center justify-content-center font-xs"> Connexion</p>
                <div class="wd-10 closeConnexion" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"></path></svg>
              </div>
            </div>
            <div class="column" style="padding: 6%;">
            <form  method="POST" action="{{ url('/FIULogin') }}">
              <div class="column" style="gap: 20px;">
                  <h3 class="font-xs">Bienvenue chez fiu.</h3>
                  <p id="messageDemandeError" style="color: red;font-size: 2.5rem;margin:0;"></p>
                  <div class="row">
                    @if(session('errorConnexionAccount'))
                        <div style="font-size: 2.5rem; font-weight: bold;color: red;padding-bottom: 4%;">
                            {{ session('errorConnexionAccount') }}
                        </div>
                    @endif
                  </div>
                  <div class="column wd-100">
                  <label>Votre email *</label><input class="baseInput asoSansRegular wd-100 " type="text" name="inputEMAIL"></div>
                  <div><label>Votre mot de passe *</label><input class="baseInput asoSansRegular wd-100 " type="password" placeholder="....." name="inputPassword"></div>
                </div>
                <div class="forgotPassword"><a class="asoSansRegular" style="font-size: 2rem; margin-top: 10px;"><u> Mot de passe oublié ?</u></a></div>
                <div class="connectWithEmailOnly wd-100 buttonSave items-center" style="width: 100%; margin-top: 30px;justify-content: center;">Connexion avec un code email</div>
                <button class="wd-100 buttonSave" style="width: 100%; margin-top: 30px;" type="submit" name="submitbutton" value="Sesigner">Connexion</button></div>
                <hr style="border-width:0.5 px;border-width: 0px 0px thin;border-style: solid;border-color: rgba(0, 0, 0, 0.12);">
                <div class="row wd-100" style="padding-left: 6%; padding-top: 15px; padding-bottom: 15px;" id="modalCreateAccount">
                  <a class="asoSansRegular">Vous êtes nouveaux ? <u>Créez votre compte</u></a>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="demandeID" id="hiddenDemandeID">
              </div>
            </form>
            </div>
            </div>
          </div> 
        </dialog>

        <dialog id="favDialogCreateAccount" class="bg-blanc topConnexion" style=" left: 50%; position: absolute; border-radius: 8px; border: 1px solid #707070; justify-content: flex-start; transform: translate(-50%); padding: 0;margin:0; " >
           <div class="column bg-blanc widthModalConnexion heightMobileModalConnexion  " id="modifyMarginTopModalConnexion" style="display: flex; border-radius: 10px 10px 8px 8px; justify-content: flex-start; margin-bottom: 2%;">
            <div style="border-radius: 8px; background-color: rgb(255, 255, 255);">
              <div class="row wd-100 bg-vert-fort blanc" style="align-items: center; border-top-left-radius: 8px; border-top-right-radius: 8px; border: 1px solid rgb(112, 112, 112);">
                <p class="wd-10"></p><p class="wd-90 items-center justify-content-center" style="font-size: 2rem; font-family: azo-sans-web, sans-serif; font-weight: bold;"> Publiez votre annonce sur fiu. </p>
                <div class="wd-10 closeCreateAccount" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"></path></svg>
              </div>
            </div>
            <div class="column" style="padding-left: 6%; padding-right: 6%; padding-bottom: 40px;">
              <div class="row" style="padding-top: 1%;">
                <h3 style="font-size: 2.5rem; font-weight: bold; margin-top: 2%; margin-bottom: 0px; font-family: abril-text;">Bienvenue chez fiu.</h3>
                <div style="margin-left: auto; padding-top: 2%; width: 14%;">
                  <img src="{{asset('assets/img/Groupe-391.png')}}" style="width: 100%;" alt="trois étoiles">
                </div>
              </div>
              <div id="errorModalAccountCreate" class="row">
                @if(session('errorCreateAccount'))
                    <div style="font-size: 2.5rem; font-weight: bold;color: red;padding-bottom: 4%;">
                        {{ session('errorCreateAccount') }}
                    </div>
                @endif
              </div>
              <form method="POST" action="{{ url('/registerCodeMdp') }}">
              @csrf  
              <div class="row wd-100" style="gap: 20px;">
                <div class="wd-50"><label>Prénom *</label><input class="baseInput asoSansRegular wd-100 " type="text" name="inputPRENOM" placeholder="prenom" value="{{ old('inputPRENOM') }}"></div>
                <div class="wd-50"><label>Nom *</label><input class="baseInput asoSansRegular wd-100 " type="text" name="inputNOM" value="{{ old('inputNOM') }}"></div></div>
                <div style="padding-bottom: 2%;"><label>Votre email *</label><input class="baseInput asoSansRegular wd-100 " type="email" name="inputEMAIL" value="{{ old('inputEMAIL') }}"></div>
                <div><label>Votre organisation</label><input class="baseInput asoSansRegular wd-100 " type="text" name="inputOrganisation" value="{{ old('inputOrganisation') }}"></div>
                <div style="padding-bottom: 2%;"><label>Votre téléphone *</label><input class="baseInput asoSansRegular wd-100 " name="inputTelephone" value="{{ old('inputTelephone') }}"></div> 
                <button class="buttonSave createOneAccount" style="width: 100%; margin-top: 2%; border: none;" type="submit" name="submitbutton" value="Avecuncode">Créer un compte</button></div>
                <hr style="border-width:0.5 px;border-width: 0px 0px thin;border-style: solid;border-color: rgba(0, 0, 0, 0.12);">
                <div class="column wd-100" style="padding: 15px 6%;">
                  <a class="asoSansRegular connexionFromCreateAccount">Vous avez déjà un compte ? <u>Connexion</u></a>
                  <p style="color: rgb(165, 165, 165); line-height: 1em; margin-bottom: 2%; font-size: 1.2rem; font-family: Azo Sans, sans-serif;">En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous prenez connaissance de <u>notre politique de confidentialité</u>. Vous pouvez vous désinscrire à tout moment à l’aide des liens de désinscription. Vos données personnelles collectées sont uniquement destinées à fiu et seront uniquement exploitées dans le cadre de la soumission effective d’un formulaire du site.</p>
                </div>
              </div>
              {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
              </form>
            </div>
            </div>
            </div>     
        </dialog>


        <dialog id="favDialogRegisterNumber" class="bg-blanc topConnexion" style=" left: 50%; position: absolute; border-radius: 8px; border: 1px solid #707070; justify-content: flex-start; transform: translate(-50%); padding: 0;margin:0; " >
          <div class="column bg-blanc widthModalConnexion heightMobileModalConnexion  " id="modifyMarginTopModalConnexion" style="display: flex; border-radius: 10px 10px 8px 8px; justify-content: flex-start; margin-bottom: 2%;">
            <div class="row wd-100 bg-vert-fort blanc" style="align-items: center; border-top-left-radius: 8px; border-top-right-radius: 8px; border: 1px solid rgb(112, 112, 112);">
                <p class="wd-10"></p><p class="wd-90 items-center justify-content-center" style="font-size: 2rem; font-family: azo-sans-web, sans-serif; font-weight: bold;"> Validation du compte fiu </p>
                <div class="wd-10 closeRegisterNumber" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"></path></svg>
              </div>
            </div>
              <div class="column" style="padding-left: 6%; padding-right: 6%; padding-bottom: 40px;">
              <div class="row wd-100" style="gap: 20px;">
                <div class="column wd-100">
                  @if(session('errorValidationCode'))
                      <div style="font-size: 2.5rem; font-weight: bold;color: red;padding-top: 5%;">
                          {{ session('errorValidationCode') }}
                      </div>
                  @endif
                  <label style="margin-top:15%;margin-bottom: 10%;">Bonjour,</label>
                  <label style="margin-bottom:15%;">Veuillez saisir le code que vous avez reçu par mail.</label>
                </div>
              </div>
              <form method="POST" action="{{ url('/CreerVotrecompteaveclecode') }}">
              <div class="row wd-100" style="gap: 20px;">
                <div class="column wd-100">
                  <label>Code :</label><input class="baseInput asoSansRegular wd-100" name="inputCode" id="inputCode" placeholder="Entrez votre code ici" autocomplete="off" required data-msg="Entrez votre code"  ></div>
                </div>
              <div class="row wd-100" style="gap: 20px;">
                <button class="buttonSave" style="width: 100%; margin-top: 2%; border: none;" type="submit" name="submitbutton" value="Senregistrer">Valider votre compte</button></div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </div>
              </form>
              </div>
        </dialog>


        <dialog id="favDialogFinalMessage" class="bg-blanc topConnexion" style=" left: 50%; position: absolute; border-radius: 8px; border: 1px solid #707070; justify-content: flex-start; transform: translate(-50%); padding: 0;margin:0; " >
          <div class="column bg-blanc widthModalConnexion heightMobileModalConnexion  " id="modifyMarginTopModalConnexion" style="display: flex; border-radius: 10px 10px 8px 8px; justify-content: flex-start; margin-bottom: 2%;">
            <div class="row wd-100 bg-vert-fort blanc" style="align-items: center; border-top-left-radius: 8px; border-top-right-radius: 8px; border: 1px solid rgb(112, 112, 112);">
                <p class="wd-10"></p><p class="wd-90 items-center justify-content-center" style="font-size: 2rem; font-family: azo-sans-web, sans-serif; font-weight: bold;"> Finalisez votre inscription </p>
                <div class="wd-10 closeRegisterNumber" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"></path></svg>
              </div>
            </div>
              <div class="column" style="padding-left: 6%; padding-right: 6%; padding-bottom: 40px;">
              <div class="row wd-100" style="gap: 20px;">
                <div class="column wd-100">
                  <label style="margin-top:15%;margin-bottom: 10%;">Félicitations ! Votre compte Fiu a bien été créé.</label>
                  <p style="font-size: 2rem; font-family: azo-sans-web, sans-serif;">Un email a été envoyé à votre.email@mail.com </p>
                  <p style="font-size: 2rem; font-family: azo-sans-web, sans-serif;">Merci de confirmer votre inscription en cliquant sur le lien inclus dans ce mail.</p>
                </div>
              </div>
              </div>
        </dialog>


        <dialog id="favDialogMotForget" class="bg-blanc topConnexion" style=" left: 50%; position: absolute; border-radius: 8px; border: 1px solid #707070; justify-content: flex-start; transform: translate(-50%); padding: 0;margin:0; " >
          <div class="column bg-blanc widthModalConnexion heightMobileModalConnexion  " id="modifyMarginTopModalConnexion" style="display: flex; border-radius: 10px 10px 8px 8px; justify-content: flex-start; margin-bottom: 2%;">
            <div class="row wd-100 bg-vert-fort blanc" style="align-items: center; border-top-left-radius: 8px; border-top-right-radius: 8px; border: 1px solid rgb(112, 112, 112);">
                <p class="wd-10"></p><p class="wd-90 items-center justify-content-center" style="font-size: 2rem; font-family: azo-sans-web, sans-serif; font-weight: bold;"> Mot de passe oublié ? </p>
                <div class="wd-10" id="closeForgotPassword" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"></path></svg>
            </div>
            </div>
              <div class="column" style="padding-left: 6%; padding-right: 6%; padding-bottom: 40px;">
              <form  method="POST" action="{{ url('/FIULogin') }}">
              @csrf
              <div class="row wd-100" style="gap: 20px;">
                @if(session('errorMdpForget'))
                <div class="column wd-100">
                      <div style="font-size: 2.5rem; font-weight: bold;color: red;padding-top: 5%;">
                          {{ session('errorMdpForget') }}
                      </div>
                </div>
                @endif
              </div>
              <div class="row wd-100" style="gap: 20px;">
                <div class="column wd-100">
                  <label style="margin-top:10%;margin-bottom: 2%;">Pour récuperer son mot de passe oublié, entrer votre email :</label><input class="baseInput asoSansRegular wd-100" name="inputEMAIL" id="inputEMAIL" placeholder="Entrez votre email ici" autocomplete="off" required data-msg="Entrez votre email"  ></div>
                </div>
                <div class="column wd-100">
                  <button class="wd-100 buttonSave" style="width: 100%; margin-top: 30px;" type="submit" name="submitbutton" value="Motdepasseoublie">Envoyer</button></div>
                </div>
              </div>
              </form>
          </div>
        </dialog>


        <dialog id="favDialogConnexionEmailOnly" class="bg-blanc topConnexion" style=" left: 50%; position: absolute; border-radius: 8px; border: 1px solid #707070; justify-content: flex-start; transform: translate(-50%); padding: 0;margin:0; " >
          <div class="column bg-blanc widthModalConnexion heightMobileModalConnexion  " id="modifyMarginTopModalConnexion" style="display: flex; border-radius: 10px 10px 8px 8px; justify-content: flex-start; margin-bottom: 2%;">
            <div class="row wd-100 bg-vert-fort blanc" style="align-items: center; border-top-left-radius: 8px; border-top-right-radius: 8px; border: 1px solid rgb(112, 112, 112);">
                <p class="wd-10"></p><p class="wd-90 items-center justify-content-center" style="font-size: 2rem; font-family: azo-sans-web, sans-serif; font-weight: bold;"> Se connecter avec votre email uniquement</p>
                <div class="wd-10 closeConnexionEmailOnly" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"></path></svg>
              </div>
            </div>
              @if(session('errorEmailOnly'))
                <div class="column wd-100">
                      <div style="font-size: 2.5rem; font-weight: bold;color: red;padding-top: 5%;">
                          {{ session('errorEmailOnly') }}
                      </div>
                </div>
              @endif
              <div class="column" style="padding-left: 6%; padding-right: 6%; padding-bottom: 40px;">
              <form  method="POST" action="{{ url('/connectEmailOnly') }}">
                @csrf
              <div class="row wd-100" style="gap: 20px;">
                  <div class="column wd-100">
                    <label style="margin-top:10%;margin-bottom: 2%;">Entrer votre email :</label><input class="baseInput asoSansRegular wd-100" name="inputEMAIL" id="inputEMAIL" placeholder="Entrez votre email ici" autocomplete="off" required data-msg="Entrez votre email"  ></div>
                  </div>
                  <div class="column wd-100">
                    <button class="wd-100 buttonSave" style="width: 100%; margin-top: 30px;" type="submit" name="submitbutton" value="Motdepasseoublie">Envoyer</button></div>
                  </div>
                  <input type="hidden" name="DemandeIDconnEmailOnly" id="secondHiddenDemandeID">
              </div>
              </form>
              </div>
        </dialog>


        <dialog id="favDialogCodeValiderEmailOnly" class="bg-blanc topConnexion" style=" left: 50%; position: absolute; border-radius: 8px; border: 1px solid #707070; justify-content: flex-start; transform: translate(-50%); padding: 0;margin:0; " >
          <div class="column bg-blanc widthModalConnexion heightMobileModalConnexion  " id="modifyMarginTopModalConnexion" style="display: flex; border-radius: 10px 10px 8px 8px; justify-content: flex-start; margin-bottom: 2%;">
            <div class="row wd-100 bg-vert-fort blanc" style="align-items: center; border-top-left-radius: 8px; border-top-right-radius: 8px; border: 1px solid rgb(112, 112, 112);">
                <p class="wd-10"></p><p class="wd-90 items-center justify-content-center" style="font-size: 2rem; font-family: azo-sans-web, sans-serif; font-weight: bold;"> Code à valider </p>
                <div class="wd-10 closeCodeValidationConnexionOnlyEmail" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"></path></svg>
              </div>
            </div>
              <div class="column" style="padding-left: 6%; padding-right: 6%; padding-bottom: 40px;">
              <form  method="POST" action="{{ url('/validerCodeConnexionEmailOnly') }}">
              @csrf
              @if(session('errorCodeValidationEmailConnexion'))
              <div class="row wd-100" style="gap: 20px;">
                    <div class="column wd-100">
                          <div style="font-size: 2.5rem; font-weight: bold;color: red;padding-top: 5%;">
                              {{ session('errorCodeValidationEmailConnexion') }}
                          </div>
                    </div>
              </div>
              @endif
              <div class="row wd-100" style="gap: 20px;">
                  <div class="column wd-100">
                    <label style="margin-top:6%;margin-bottom: 2%;">Entrer votre code reçu par email:</label><input class="baseInput asoSansRegular wd-100" name="codeValidation" id="codeValidation" placeholder="Entrez votre code ici" autocomplete="off" required data-msg="Entrez votre code"  ></div>
                  </div>
                  <div class="column wd-100">
                    <button class="wd-100 buttonSave" style="width: 100%; margin-top: 30px;" type="submit" name="submitbutton">Envoyer</button></div>
                  </div>
                  <input type="hidden" name="DemandeIDValidationCodeConnEmail" id="thirdHiddenDemandeID">
              </div>
              </form>
              </div>
        </dialog>

        <dialog id="favDialogMesRecherchesMobile" class="bg-blanc topConnexion" style=" left: 50%; position: absolute; border-radius: 8px; border: 1px solid #707070; justify-content: flex-start; transform: translate(-50%); padding: 0;margin:0; " >
          <div class="column bg-blanc widthModalConnexion heightMobileModalConnexion  " id="modifyMarginTopModalConnexion" style="display: flex; border-radius: 10px 10px 8px 8px; justify-content: flex-start; margin-bottom: 2%;">
            <div class="row wd-100 bg-vert-fort blanc" style="align-items: center; border-top-left-radius: 8px; border-top-right-radius: 8px; border: 1px solid rgb(112, 112, 112);">
                <p class="wd-10"></p><p class="wd-90 items-center justify-content-center" style="font-size: 2rem; font-family: azo-sans-web, sans-serif; font-weight: bold;"> Mes recherches </p>
                <div class="wd-10 closeMesRecherchesMobiles" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"></path></svg>
              </div>
            </div>
              <div class="column" style="padding-left: 6%; padding-right: 6%; padding-bottom: 40px;">
              <div class="colum" style="gap: 20px;">
                @if(Session::get('usersigne')==1 && isset($mesRechercheUserFiu))
                  <ul style="list-style: none; padding: 6%;" class="typeSpaceWork">
                    @foreach($mesRechercheUserFiu['data']['result'] as $uneRechercheUserFiu)
                      @if($uneRechercheUserFiu['demande_active'] == 1)
                      <li style="width: 100%; color: black; text-align: left;">
                        <input class="form-check-input" type="checkbox" id="demande-{{$uneRechercheUserFiu['demande_id']}}" style="margin-right: 7%;" value="{{$uneRechercheUserFiu['demande_id']}}">
                        <label class="form-check-label" for="demande-{{$uneRechercheUserFiu['demande_id']}}">
                          {{$uneRechercheUserFiu['nomRecherche']}} ({{$uneRechercheUserFiu['demande_id']}})
                        </label>
                      </li>
                      @endif
                    @endforeach
                    @empty($mesRechercheUserFiu['data']['result'])
                      <p style="font-size: 1.5rem;">Contactez votre consultant pour les recherches.</p>
                    @endempty
                  </ul>
                @endif
                  <div class="wd-100 items-center mesRecherches-content-space-between paddingLeftButtonMesRechercheMobile minWidthPartButtonMesRecherches">
                    <button class="buttonSaveStepper fontSizeAfficherAnnoncesMobile" style="width: 100%; border: none;" id="resultRechercheFiuUser-3">
                      Afficher les annonces
                    </button>
                  </div>
              </div>
              </div>
        </dialog>

                        
            @yield('content')


                        
        
        
    <div
      style="
        left: 0px;
        right: 0px;
        bottom: 0px;
        color: #000;
        position: relative;
        background-color: #FFF6F0;
        width:100%;
      "
    >
    {{--
      <div
        style="
          display: flex;
          flex-direction: column;
        "
        class="margin-allBlocFooter"
      >
        <div
          style="
            margin-top: 5px;
            margin-bottom: 3px;
            display: flex;
            align-content: center;
          "
          class="testFooter"
        >
          <div class="part-title-logo-footer">
            <div class="title-findIdealOffice width-part-findIdealOffice">
              <h3 class="title-ideal-office-footer">
                <span style="display: block;white-space: nowrap;">Trouvez votre</span>
                <span>bureau idéal</span>
              </h3>
            </div>
            <div class="logoFooter width-part-logoFooter">
              <img src="{{ asset('assets/img/logo-fiu@2x.png')}}" alt="logo-fiu" width={90} height={59.52} />
            </div>
            <div class="socialNetwork">
                <a target="_blank" href='https://www.instagram.com/fiu_flexinuse.fr/'>
                  <img src="{{ asset('assets/img/logo-instagram.png') }}" alt="instagram" width={25} height={25} />
                </a>
                <a href='https://www.facebook.com/profile.php?id=100089726257268' target="_blank">
                  <img src="{{ asset('assets/img/logo-facebook.png') }}" alt="facebook" width={13.39} height={25} />
                </a>
                <a href='https://www.linkedin.com/company/fiuflexinuse/' target="_blank">
                  <img src="{{ asset('assets/img/logo-linkedin.png') }}" alt="linkedin" width={21.72} height={25} />
                </a>
                <a href='https://www.youtube.com/@fiu_flexinuse/featured' target="_blank">
                  <img src="{{ asset('assets/img/logo-youtube.png') }}" alt="youtube" width={33} height={25} />
                </a>
            </div>
          </div>

          <div class="destop-menuRent">
            <div class="test-1">
            <h5 style="white-space:nowrap;margin-bottom: 0;" class="azoSansBold">
              Location de bureaux
            </h5>
            <a class="azoSansLight" href="{{ url('/location-bureau-entreprise')}}">
                    Trouver un bureau
            </a>
            
            <a class="azoSansLight" href="{{ url('/recherche-sur-mesure') }}">
                    Recherche sur mesure
            </a>
            <a class="azoSansLight" href="{{ url('/guideducoworking') }}">
                    Coworking
            </a>
            <a class="azoSansLight" href="{{ url('/location-bureau-paris') }}">
                    Location bureau Paris
            </a>            
            <a class="azoSansLight" target="_blank" href="{{ url('/blog') }}" >
                    Blog
            </a>
             <!-- href='https://blog.flexinuse.fr/' -->
            </div>
          <div class="destop-menuAbout">
            <div class="test-2">
            <h5 style=" margin-bottom: 0; " class="azoSansBold">
              À propos
            </h5>
            <a class="azoSansLight" href="{{ url('/qui-sommes-nous') }}" style="white-space: nowrap;">Qui sommes-nous?</a>
            <a class="azoSansLight" href="{{ url('/platefome-location-bureau') }}">Le Concept</a>
            <a class="azoSansLight" href="{{ url('/engagements-rse') }}">Engagement RSE</a>
            <a class="azoSansLight" href="{{ url('/contact') }}">Nous rejoindre</a>
            </div>
          </div>
          <!-- Debut accordion-->
          <div class="accordion-footer">
              <div class="tab" style="width: 100%;">
                <input type="checkbox" name="accordion-1" id="cb1">
                <label for="cb1" class="tab__label">Location de bureaux</label>
                <div class="tab__content">
                  <div style="display: flex; flex-direction: column; padding-left: 1.5%; gap: 1em; padding-bottom: 2%;">
                    <a class="azoSansLight" target="_blank" href='#' style="padding-top:1%;">
                        Trouver un bureau
                    </a>
                    
                    <a class="azoSansLight" target="_blank" href="{{ url('/publier-une-annonce') }}">
                            Publier une annonce
                    </a>
                    
                    <a class="azoSansLight" target="_blank" href='#'>
                            Recherche sur mesure
                    </a>
                    <a class="azoSansLight" target="_blank" href='#'>
                            Coworking
                    </a>
                    <a class="azoSansLight" target="_blank" href='#'>
                            Location bureau Paris
                    </a>                    
                    <a class="azoSansLight" target="_blank" href="{{ url('/blog') }}" >
                    Blog
            </a>
             <!-- href='https://blog.flexinuse.fr/' -->
                  </div>
                </div>
              </div>
              <div class="tab" style="width: 100%;">
                <input type="checkbox" name="accordion-1" id="cb2">
                <label for="cb2" class="tab__label">A propos</label>
                <div class="tab__content">
                  <div style="display: flex; flex-direction: column; padding-left: 1.5%; gap: 1em; padding-bottom: 2%;">
                    <a class="azoSansLight" href="{{ url('/qui-sommes-nous') }}">Qui sommes-nous?</a>
                    <a class="azoSansLight" href="{{ url('/platefome-location-bureau') }}">Le Concept</a>
                    <a class="azoSansLight" href="{{ url('/engagements-rse') }}">Engagement RSE</a>
                    <a class="azoSansLight" href="{{ url('/contact') }}">Nous rejoindre</a>
                  </div>
                </div>
              </div>
              <div class="tab" style="width: 100%;">
                <input type="checkbox" name="accordion-1" id="cb3">
                <label for="cb3" class="tab__label">Nous contacter</label>
                <div class="tab__content">
                  <div style="display: flex; flex-direction: column; padding-left: 1.5%; gap: 1em; padding-bottom: 2%;">
                    <a class="azoSansLight" href="{{ url('/contact') }}">Nous écrire</a>
                    <a class="azoSansLight" href="{{ url('/contact') }}">Nous appeler</a>
                  </div>
                </div>
              </div>
          </div>
          <!-- Fin accordion -->
          <!-- Debut newsletter mobile -->
          <div class="newsletter-mobile">
              <h5 style="margin-bottom: 15px; margin-top: 15px;" class="azoSansBold">
                Recevez notre newsletter
              </h5>
              
              <p id="p2" style="display: none">Ce deuxième paragraphe également</p>
              <form id="inscrirenewslettermobile" method="POST" action="{{ url('/inscrirenewsletterNumber3/') }}" >
                      <input type="text" 
                      class="inputEmail"
                      placeholder="Adresse e-mail"
                      style="height: 65px;"
                       name="emaillettermobile" id="emaillettermobile" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="recaptchaToken3" id="recaptchaToken3">                          
                      <button 
                       style="height: 65px;color: #fff;border-radius: 8px;text-transform: none;background-color: #000;font-family: azo-sans-web,sans-serif;font-weight: 900;font-size: 2.2rem;"
                        type="button"  value="ajoutemaillettermobile" id="ajoutemaillettermobile">                        
                        S'abonner
                      </button>                       
              </form>
              
              <p style="color: #A5A5A5;line-height: 1em;margin-bottom: 2%;" class="azoSansLight">
                En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous
                prenez connaissance de
                <a href="{{ url('/confidentialite') }}">
                  <u>notre politique de confidentialité</u>
                </a>
                . Vous pouvez vous désinscrire à tout moment à l’aide des liens de désinscription. Vos données
                personnelles collectées sont uniquement destinées à fiu et seront uniquement exploitées dans le cadre de
                la soumission effective d’un formulaire du site.
              </p>
          </div>
          <!-- Fin newsletter mobile -->
          <div style="gap: 1em;display: flex;flex-direction: column;" class="width-margin-partContactNewletters-Footer">
            <div class="test-1">
            <h5 style="margin-bottom: 0px;" class="azoSansBold destop-contactFooter">
              Nous contacter
            </h5>
            <a className="azoSansLight destop-contactFooter" href="{{ url('/contact') }}">Nous écrire</a>
            <a className="azoSansLight destop-contactFooter" href="{{ url('/contact') }}">Nous appelez</a>
            <br />
            <div class="wd-100 mobile-menuFooter">
              <FooterMenu title="Location de bureaux" services={location} ></FooterMenu>
              <FooterMenu title="À propos" services={about} ></FooterMenu>
              <FooterMenu title="Nous contacter" services={contact} ></FooterMenu>
            </div>
            <div style="gap: 1;width: 100%;display: flex;flex-direction: column;">
              <h5 style="margin-bottom: 15px; margin-top: 15px;" class="azoSansBold">
                Recevez notre newsletter
              </h5>              
                <p id="p1" style="display: none">Ce deuxième paragraphe également</p>
              <form id="inscrirenewsletter" method="POST" action="{{ url('/inscrirenewsletterNumber2/') }}" >
                      <input type="text" 
                      class="inputEmail"
                      placeholder="Adresse e-mail"
                      style="height: 65px;"
                       name="emailletter" id="emailletter" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="recaptchaToken2" id="recaptchaToken2">                       
                      <button 
                      style="height: 65px;color: #fff;border-radius: 8px;text-transform: none;background-color: #000;font-family: azo-sans-web,sans-serif;font-weight: 900;font-size: 2.2rem;"
                        type="button"  value="ajoutemailletter" id="ajoutemailletter">                        
                        S'abonner
                      </button>                       
              </form>

              <p
                style="
                  color: #A5A5A5;
                  line-height: 1em;
                  margin-bottom: 2%;
                "
                class="azoSansLight"
              >
                En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous
                prenez connaissance de
                <a href="{{ url('/confidentialite') }}">
                  <u>notre politique de confidentialité</u>
                </a>
                . Vous pouvez vous désinscrire à tout moment à l’aide des liens de désinscription. Vos données
                personnelles collectées sont uniquement destinées à fiu et seront uniquement exploitées dans le cadre de
                la soumission effective d’un formulaire du site.
              </p>
            </div>
            </div>
            <div class="mobileSocialNetwork-footer">
              <div
                style="
                  gap: 10%;
                  display: flex;
                "
                class="justify-content-center"
              >
             
             
                <a target="_blank" href='https://www.instagram.com/fiu_flexinuse.fr/'>
                  <img src="{{ asset('assets/img/logo-instagram.png') }}" alt="instagram" width={25} height={25} />
                </a>
                <a href='https://www.facebook.com/profile.php?id=100089726257268' target="_blank">
                  <img src="{{ asset('assets/img/logo-facebook.png') }}" alt="facebook" width={13.39} height={25} />
                </a>
                <a href='https://www.linkedin.com/company/fiuflexinuse/' target="_blank">
                  <img src="{{ asset('assets/img/logo-linkedin.png') }}" alt="linkedin" width={21.72} height={25} />
                </a>
                <a href='https://www.youtube.com/@fiu_flexinuse/featured' target="_blank">
                  <img src="{{ asset('assets/img/logo-youtube.png') }}" alt="youtube" width={33} height={25} />
                </a>
             
              </div>
            </div>
          </div>
        </div>
      </div>
      --}}
      @if(request()->segment(1) != "location-bureau-entreprise" && request()->segment(1) != "profile" && request()->segment(1) != "mes-favoris")
        @include('layouts.footer')
      @endif
      @php
        $showTestId = in_array(request()->segment(1), ['location-bureau-entreprise', 'profile', 'mes-favoris']);
      @endphp
      <!--Debut test-->
      <div
          style="
            margin-top: 2px;
            /*margin-bottom: 2px;*/
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: center;
            border-top-style: solid;
            border-top-width: 0.5px;
            border-color: rgba(0, 0, 0, 0.12);
          "
          class="mentions-footer"
          <?php
            if($showTestId){
              echo 'id="marginTopMentionFooter"';
            }
          ?>  
          
      >
          
          <div style="margin-top: 16px;margin-bottom: 16px;width:100%;text-align: center;" class="mentions-footer footerMobileDisplay">
          <a class="a-footer" style="padding-left: 1%;"> © 2025 fiu. Tous droits réservés </a>
          
          <a class="a-footer" href="{{ url('/mentionslegales') }}" style="padding-left: 1%;padding-right: 1%;">Mentions légales</a>
          
          
          <a class="a-footer" href="{{ url('/confidentialite') }}" style="padding-left: 1%;padding-right: 1%;">Confidentialité</a>
          
          <a class="a-footer" href="{{ url('/cgu') }}">Conditions générales</a>
        
          <a class="a-footer" href="{{ url('/sitemap.xml') }}" style="padding-left: 1%;padding-right: 1%;">Plan du site</a>
          </div>
        
      </div>
      <!--Fin test -->
    </div>
    <!--<script src="{{ asset('assets/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @yield('scripts')
    @if(request()->segment(1) != "location-bureau-entreprise" && request()->segment(1) != "profile" && request()->segment(1) != "mes-favoris")
    <script>    
        //let imputmailletter=document.getElementById("emailletter");
        $('#emailletter').keypress(function(event){
          var keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13'){
            event.preventDefault();           
            document.getElementById("ajoutemailletter").click();	
          }
        });        
        $('#ajoutemailletter').click(function () {
          
        //verifier si le mail est valide
        const emailInput = document.getElementById('emailletter').value;

        // Regex pour valider le format d'une adresse e-mail
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (emailRegex.test(emailInput)) {
                //Adresse e-mail valide
        }else {
                var messageErrorEmail = 'Adresse e-mail invalide.';
                let p1 = document.getElementById("p1");                   
                p1.style.display = "block";  
                p1.innerText = messageErrorEmail;
                return;
        }                             
        var form = $('#inscrirenewsletter');
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
          let p1 = document.getElementById("p1");                   
          p1.style.display = "block";  
          p1.innerText =res;           
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
        //let imputmailletter=document.getElementById("emaillettermobile");
        $('#emaillettermobile').keypress(function(event){
          var keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13'){
            event.preventDefault();           
            document.getElementById("ajoutemaillettermobile").click();	
          }
        });        
        $('#ajoutemaillettermobile').click(function () {                              
        var form = $('#inscrirenewslettermobile');
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
          let p2 = document.getElementById("p2");                   
          p2.style.display = "block";  
          p2.innerText =res;           
        })
        .fail((error) => {
          var err = eval("(" + error.responseText + ")");
          console.log(error.responseText);
          //$('.alert-danger').text(err.message);
          //$('.alert-danger').removeClass('d-none');
        });
      });
    </script>
    @endif
    <script>
      
      function openNav() {
        //alert("button was clicked");
        if(document.getElementById("style") != null){
          document.getElementById("style").setAttribute("id", "myNav");
        }
        if(document.getElementById("hiddenMyNav") != null){
          document.getElementById("hiddenMyNav").setAttribute("id", "myNav");
        }
      }

      function closeNav() {
        document.getElementById("myNav").setAttribute("id", "hiddenMyNav");
      }


      
      
    </script>
    <script>
      //Modal connexion  
      const modalOptionConnexion = document.getElementById('modalconnexion')
      const modalOptionConnexionMobile = document.getElementById('modalconnexionMobile')
      const favDialogConnexion = document.getElementById('favDialogConnexion')
      const favDialogMotForget = document.getElementById('favDialogMotForget')
      

       modalOptionConnexion.addEventListener('click', () => {
        favDialogConnexion.showModal()
      })

      modalOptionConnexionMobile.addEventListener('click', () => {
        favDialogConnexion.showModal()
      })

      const modalCreateAccount = document.getElementById('modalCreateAccount')
      const favDialogCreateAccount = document.getElementById('favDialogCreateAccount')

      // jcb bettuzzi
      modalCreateAccount.addEventListener('click', () => {
        favDialogConnexion.close()
        favDialogCreateAccount.showModal()
      })

      const buttonCloseConnexion = document.querySelector('.closeConnexion')

      buttonCloseConnexion.addEventListener('click', () => {
        favDialogConnexion.close()
      })

      const buttonCloseCreateAccount = document.querySelector('.closeCreateAccount')

      buttonCloseCreateAccount.addEventListener('click', () => {
        favDialogCreateAccount.close()
      })

      const connexionFromCreateAccount = document.querySelector('.connexionFromCreateAccount')
      // jcb bettuzzi
      connexionFromCreateAccount.addEventListener('click', () => {
        favDialogCreateAccount.close()
        favDialogConnexion.showModal()
      })

      //favDialogRegisterNumber
      const createOneAccount = document.querySelector('.createOneAccount')
      const favDialogRegisterNumber = document.getElementById('favDialogRegisterNumber')
      // jcb bettuzzi
      //createOneAccount.addEventListener('click', () => {
      //  favDialogCreateAccount.close()
      //  favDialogRegisterNumber.showModal()
      //})


      const closeRegisterNumber = document.querySelector('.closeRegisterNumber')

      closeRegisterNumber.addEventListener('click', () => {
        favDialogRegisterNumber.close()
      })

      /*
      const modalFelicitation = document.getElementById('resultatFelicitation')
      const favDialogFinalMessage = document.getElementById('favDialogFinalMessage')
      modalFelicitation.addEventListener('click', () => {
        favDialogFinalMessage.showModal()
      })
      */

      
      const forgotPassword = document.querySelector('.forgotPassword')
      forgotPassword.addEventListener('click', () => {
        favDialogConnexion.close()
        favDialogMotForget.showModal()
      })

      
      const closeForgotPassword = document.getElementById('closeForgotPassword')
      closeForgotPassword.addEventListener('click', () => {
        favDialogMotForget.close()
      })


      //connectWithEmailOnly
      const favDialogConnexionEmailOnly = document.getElementById('favDialogConnexionEmailOnly')
      const connectWithEmailOnly = document.querySelector('.connectWithEmailOnly')
      connectWithEmailOnly.addEventListener('click', () => {
        favDialogConnexion.close()
        favDialogConnexionEmailOnly.showModal()
      })
        
        

    </script>
    <script>
      var baseUrl = '{{ url('/') }}/';

    </script>
    <script>
      function htmlspecialchars(str) {
          return $('<div/>').text(str).html();
      }
    </script>
    <script>
      function containsNumber(str) {
        // Check if the string contains only digit
        return /^\d+$/.test(str);
      }
      function containsLettersAndNumbers(str) {
          // Check if the string contains at least one letter
          var hasLetter = /[a-zA-Z]/.test(str);
          
          // Check if the string contains at least one number
          var hasNumber = /\d/.test(str);
          
          // Return true if both conditions are met
          return hasLetter && hasNumber;
      }
      function validatePostcode(postcode){
          let codepostal = postcode.substr(0, 6);
          var Reg = new RegExp(/^(?:0[1-9]|[1-8]\d|9[0-8])\d{3}$/i);
          return Reg.test(codepostal);
      }
      
      function reformatAddress(textInput){
        const input = textInput.toString();

        // Utilisation d'une regex pour extraire les composants de l'adresse
        const regex = /^(\d+),([^,]+),([^,]+),[^,]+,[^,]+,([^,]+),(\d{5})$/;

        // Appliquer la regex pour obtenir les différents composants
        const match = input.match(regex);

        if (match) {
          const streetNumber = match[1];
          const streetName = match[2];
          const city = match[3];
          const country = match[4];
          const postalCode = match[5];

          // Formater l'adresse dans le format souhaité
          const reformattedAddress = `${streetNumber} ${streetName}, ${postalCode} ${city}, ${country}`;

          return reformattedAddress;
        }
      }

      function transformeChaineEnMajuscule(ligneAdresse) {
        // Fonction pour supprimer les accents
        function supprimerAccent(str) {
            return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        }

        ligneAdresse = supprimerAccent(ligneAdresse);

        // Remplacer certains caractères par un espace
        const carMisABlanc = ["-", "'", "’", ","];
        carMisABlanc.forEach(char => {
            ligneAdresse = ligneAdresse.split(char).join(" ");
        });

        // Convertir en majuscules
        ligneAdresse = ligneAdresse.toUpperCase();

        // Remplacer les espaces consécutifs par un seul espace
        ligneAdresse = ligneAdresse.replace(/\s+/g, " ");

        return ligneAdresse;
      }

    </script>
    @if(request()->segment(1) != "location-bureau-entreprise" && request()->segment(1) != "profile" && request()->segment(1) != "mes-favoris")
    <script>
      
      // Fonction pour mettre à jour le token
      function refreshRecaptchaToken() {
          grecaptcha.ready(function () {
            grecaptcha.execute('<?php echo getenv('captchaSiteKey'); ?>', { action: 'inscrirenewsletterNumber2' }).then(function (token) {
                document.getElementById('recaptchaToken2').value = token;
            });
            grecaptcha.execute('<?php echo getenv('captchaSiteKey'); ?>', { action: 'inscrirenewsletterNumber3' }).then(function (token) {
                document.getElementById('recaptchaToken3').value = token;
            });
          });
      }


      // Ajoutez un événement sur le bouton
      document.getElementById('ajoutemailletter').addEventListener('click', function () {
          refreshRecaptchaToken();
      });

      //ajoutemaillettermobile
      document.getElementById('ajoutemaillettermobile').addEventListener('click', function () {
          refreshRecaptchaToken();
      });


      

      //Générer un token au chargement initial de la page
      refreshRecaptchaToken();
      
      
      
    </script>
    @endif
    <script>
      let sessionErrorCreateAccount = '{{ session('errorCreateAccount') }}';
      if(sessionErrorCreateAccount !== ''){
        document.getElementById('favDialogCreateAccount').showModal();
      }
      let sessionErrorConnexionAccount = '{{ session('errorConnexionAccount') }}';
      if(sessionErrorConnexionAccount !== ''){
        document.getElementById('favDialogConnexion').showModal();
      }
      let sessionValidateNumber = '{{ session('ValidateNumberRegister') }}';
      if(sessionValidateNumber == true){
        document.getElementById('favDialogRegisterNumber').showModal();
      }
      //errorValidationCode
      let sessionErrorValidationCode = '{{ session('errorValidationCode') }}';
      if(sessionErrorValidationCode !== ''){
        document.getElementById('favDialogRegisterNumber').showModal();
      }

      //errorMdpForget
      let sessionErrorMdpForget = '{{ session('errorMdpForget') }}';
      if(sessionErrorMdpForget !== ''){
        document.getElementById('favDialogMotForget').showModal();
      }

      //favDialogCodeValiderEmailOnly
      let sessionValiderCodeEmailOnlyConnexion = '{{ session('validerCodeEmailOnlyConnexion') }}';
      if(sessionValiderCodeEmailOnlyConnexion !== ''){
        document.getElementById('favDialogConnexionEmailOnly').close();
        document.getElementById('favDialogCodeValiderEmailOnly').showModal();
        let sessionthirdHiddenDemandeID = '{{ session('thirdHiddenDemandeID') }}';console.log('sessionthirdHiddenDemandeID :'+sessionthirdHiddenDemandeID)
        document.getElementById('thirdHiddenDemandeID').value = sessionthirdHiddenDemandeID
      }

      //errorEmailOnly
      let sessionErrorEmailOnly = '{{ session('errorEmailOnly') }}';
      if(sessionErrorEmailOnly !== ''){
        document.getElementById('favDialogConnexionEmailOnly').showModal();
      }

      //errorCodeValidationEmailConnexion
      let sessionErrorCodeValidationEmailConnexion = '{{ session('errorCodeValidationEmailConnexion') }}';
      if(sessionErrorCodeValidationEmailConnexion !== ''){
        document.getElementById('favDialogCodeValiderEmailOnly').showModal();
      }

      const buttonCloseConnexionEmailOnly = document.querySelector('.closeConnexionEmailOnly')

      buttonCloseConnexionEmailOnly.addEventListener('click', () => {
        document.getElementById('favDialogConnexionEmailOnly').close();
      })


      const buttonCodeValidationConnexionOnlyEmail = document.querySelector('.closeCodeValidationConnexionOnlyEmail')
      buttonCodeValidationConnexionOnlyEmail.addEventListener('click', () => {
        document.getElementById('favDialogCodeValiderEmailOnly').close();
      })

      //mesRecherchesMobile
      document.getElementById('mesRecherchesMobile').addEventListener('click', function () {
          document.getElementById('favDialogMesRecherchesMobile').showModal();
      });

      //closeMesRecherchesMobiles
      const buttoncloseMesRecherchesMobiles = document.querySelector('.closeMesRecherchesMobiles')
      buttoncloseMesRecherchesMobiles.addEventListener('click', () => {
        document.getElementById('favDialogMesRecherchesMobile').close();
      })

    </script>
    <script>
       const urlDemandeConnexion = new URL(window.location.href);
       const paramDemandeConnexionUrl = urlDemandeConnexion.searchParams.get('showConnexionDemande')
       const param_2_demConnexionUrl = urlDemandeConnexion.searchParams.get('demandeID')
       if(paramDemandeConnexionUrl == 'true'){
          favDialogConnexion.showModal()
          document.getElementById('messageDemandeError').innerText = "Veuillez vous connecter pour voir la demande."
          document.getElementById('hiddenDemandeID').value = param_2_demConnexionUrl
          document.getElementById('secondHiddenDemandeID').value = param_2_demConnexionUrl
       }
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('resultRechercheFiuUser-2')?.addEventListener('click', function () {
          let selectedDemandes = [];
          document.querySelectorAll('input[id^="demande-"]:checked').forEach(cb => {
            selectedDemandes.push(cb.value);
          });

          if (selectedDemandes.length > 0) {
            const params = new URLSearchParams();
            params.set('demandeID', selectedDemandes.join(',')); // 👈 valeurs séparées par virgule
            window.location.href = `{{ url('/location-bureau-entreprise') }}?${params.toString()}`;
          }
        });
        document.getElementById('resultRechercheFiuUser-3')?.addEventListener('click', function () {
          let selectedDemandes = [];
          document.querySelectorAll('input[id^="demande-"]:checked').forEach(cb => {
            selectedDemandes.push(cb.value);
          });

          if (selectedDemandes.length > 0) {
            const params = new URLSearchParams();
            params.set('demandeID', selectedDemandes.join(',')); // 👈 valeurs séparées par virgule
            window.location.href = `{{ url('/location-bureau-entreprise') }}?${params.toString()}`;
          }
        });
      });
    </script>
    </body>
</html>
