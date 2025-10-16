<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/testStyleFiu.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('assets/css/fontTestFiu.css')}}" type="text/css"/>
        <style>
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
            }
        </style>
        @yield('custom_css')
    </head>

    <body>

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
                <a class="headerLink" style="margin-top: 8px;textAlign: left;margin-left: 7%;margin-right: 7%;white-space: nowrap;" href="{{ url('/location-bureau-entreprise') }}">
                    Commencer ma recherche
                </a>
                <a class="headerLink" style=" text-align: left; margin-left: 7%; margin-right: 7%;" href="{{ url('/location-bureaux') }}">
                    Location de bureau
                </a>
                <a class="headerLink" style="margin-bottom: 8px; text-align: left; margin-left: 7%; marginRight: 7%;" href="{{ url('/coworking') }}">
                    Coworking
                </a>
            </div>
            </div>
            <a href="{{ url('/recherche-sur-mesure') }}" class="headerLink destop-hideShow-header">
                Recherche sur mesure
            </a>
        </div>
        <div class="publishDiv items-center justify-content-space-between">
            <div style="margin-right: 5%;"> 
            <p style="margin: 0;white-space:nowrap;" class="headerLinkAnnonce">Nous appeler</p> 
            <p style="margin: 0;white-space:nowrap;" class="headerLinkAnnonce">07 55 53 71 47</p>
            </div>
            <Link href="/deposer-une-annonce">
                <div class="destop-hideShow-header" style="width: 50%;">
                    <a class="headerLinkAnnonce">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                    <span style="padding-left: 1%; white-space: nowrap;">Publier une annonce</span>
                    </a>
                </div>
            </Link>
            <button class="buttonConnexion azoSansBoldLabel destop-hideShow-header" id="modalconnexion">
                Connexion
            </button>

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
                <a class="headerLink" href="/location-bureau-entreprise">Commencer ma recherche</a>
                <a class="headerLink " href="/location-bureaux">Location de bureau</a>
                <a class="headerLink" href="/coworking">Coworking</a>
                <a class="headerLink" href="/recherche-sur-mesure">Recherche sur mesure</a>
            </div>
            </div>
            <div class="footer-overlay">
            <div class="part-1-footer-overlay">
                <Link href="/deposer-une-annonce/creation">
                <a class="headerLinkAnnonce" style="padding-left: '5%'; display: flex;">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg> 
                    <span style="paddingLeft: 0.9%; ">Publier une annonce</span>
                </a>
                </Link>

                
                <!-- Quand utilisateur déconnecté -->
                   
                <button
                    class="buttonConnexion azoSansBoldLabel"
                    //onClick="handleOpen()"
                    style="
                    width: 160px;
                    font-size: 1.8rem;
                    margin-left: 5%;
                    border-style: groove;
                    margin-top: 1%;
                    "   
                >
                    Connexion
                </button>
                
                <!-------------------------------->
                

                <!-- Quand utilisateur connecté -->
                {{--  
                <div class="wd-100">
                    <Link href={'/mon-compte/mon-profil'}>
                    <button
                        class="buttonConnexion azoSansBoldLabel  items-center marginTopSpaceMember"
                        style="
                        gap: 10%;
                        margin-left: 5%;
                        border-style: groove;
                        "
                    >
                        Espace Client
                        <img src="{{ asset('assets/img/avatarProfile.png')}}" style="width: 20%;">
                    </button>
                    </Link>
                    <a
                    class="headerLink paddingTopLogout"
                    onClick="logout"
                    style=" margin-left: 5%; margin-bottom: 2%; "
                    >
                    Déconnexion
                    </a>
                </div>
                --}}  
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
                <Link href="https://www.instagram.com/fiu_flexinuse.fr/">
                <a target="_blank">
                    <Image src="{{ asset('assets/img/logo-instagram.png') }}" alt="instagram" width={25} height={25} />
                </a>
                </Link>
                <Link href='https://www.facebook.com/profile.php?id=100089726257268'>
                <a target="_blank">
                    <Image src="{{ asset('assets/img/logo-facebook.png') }}" alt="facebook" width={13.39} height={25} />
                </a>
                </Link>
                <Link href='https://www.linkedin.com/company/fiu-flexinuse/about/?viewAsMember=true'>
                <a target="_blank">
                    <Image src="{{ asset('assets/img/logo-linkedin.png') }}" alt="linkedin" width={21.72} height={25} />
                </a>
                </Link>
                <Link href='https://www.youtube.com/@fiu_flexinuse/featured'>
                <a target="_blank">
                    <Image src="{{ asset('assets/img/logo-youtube.png') }}" width={21.72} height={25} />
                </a>
                </Link>
            </div>
            </div>
            <span
              style="cursor: pointer; padding-right: 2%;"
              onClick="openNav()"
              class="mobile-burger-header items-center"
            >
              <img src="{{asset('assets/img/Icon-feather-menu.jpg')}}" style="width:27px;height:18px;" />
            </span>
        </div>
        </div>
        
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
              <div class="column" style="gap: 20px;">
                  <h3 class="font-xs">Bienvenue chez fiu.</h3><div class="column wd-100">
                  <label>Votre email *</label><input class="baseInput asoSansRegular wd-100 " type="text"></div>
                  <div><label>Votre mot de passe *</label><input class="baseInput asoSansRegular wd-100 " type="password" placeholder="....."></div>
                </div><a class="asoSansRegular" style="font-size: 2rem; margin-top: 10px;"><u> Mot de passe oublié ?</u></a>
                <button class="wd-100 buttonSave" style="width: 100%; margin-top: 30px;">Connexion</button></div>
                <hr style="border-width:0.5 px;border-width: 0px 0px thin;border-style: solid;border-color: rgba(0, 0, 0, 0.12);">
                <div class="row wd-100" style="padding-left: 6%; padding-top: 15px; padding-bottom: 15px;" id="modalCreateAccount">
                  <a class="asoSansRegular">Vous êtes nouveaux ? <u>Créez votre compte</u></a>
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
                  <img src="{{asset('assets/img/Groupe-391.png')}}" style="width: 100%;">
                </div>
              </div>
              <div class="row wd-100" style="gap: 20px;">
                <div class="wd-50"><label>Prénom *</label><input class="baseInput asoSansRegular wd-100 " type="text"></div>
                <div class="wd-50"><label>Nom *</label><input class="baseInput asoSansRegular wd-100 " type="text"></div></div><div style="padding-bottom: 2%;"><label>Votre email *</label><input class="baseInput asoSansRegular wd-100 " type="text"></div>
                <div><label>Votre mot de passe *</label><input class="baseInput asoSansRegular wd-100 " type="password"></div>
                <div><label>Confirmez votre mot de passe *</label><input class="baseInput asoSansRegular wd-100 " type="password"></div>
                <button class="buttonSave createOneAccount" style="width: 100%; margin-top: 2%; border: none;">Créer un compte</button></div>
                <hr style="border-width:0.5 px;border-width: 0px 0px thin;border-style: solid;border-color: rgba(0, 0, 0, 0.12);">
                <div class="column wd-100" style="padding: 15px 6%;">
                  <a class="asoSansRegular connexionFromCreateAccount">Vous avez déjà un compte ? <u>Connexion</u></a>
                  <p style="color: rgb(165, 165, 165); line-height: 1em; margin-bottom: 2%; font-size: 1.2rem; font-family: Azo Sans, sans-serif;">En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous prenez connaissance de <u>notre politique de confidentialité</u>. Vous pouvez vous désinscrire à tout moment à l’aide des liens de désinscription. Vos données personnelles collectées sont uniquement destinées à fiu et seront uniquement exploitées dans le cadre de la soumission effective d’un formulaire du site.</p>
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
                  <label style="margin-top:15%;margin-bottom: 10%;">Bonjour test test</label>
                  <label style="margin-bottom:15%;">Veuillez saisir le code que vous avez reçu par mail.</label>
                </div>
              </div>
              <div class="row wd-100" style="gap: 20px;">
                <div class="column wd-100">
                  <label>Code :</label><input class="baseInput asoSansRegular wd-100" name="inputCode" id="inputCode" placeholder="Entrez votre code ici" autocomplete="off" required data-msg="Entrez votre code"  ></div>
                </div>
              <div class="row wd-100" style="gap: 20px;">
                <button class="buttonSave" style="width: 100%; margin-top: 2%; border: none;" type="submit" name="submitbutton" value="Senregistrer">Valider votre compte</button></div>
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
              <Image src="{{ asset('assets/img/logo-fiu@2x.png')}}" alt="logo-fiu" width={90} height={59.52} />
            </div>
            <div class="socialNetwork">
                <a target="_blank" href='https://www.instagram.com/fiu_flexinuse.fr/'>
                  <img src="{{ asset('assets/img/logo-instagram.png') }}" alt="instagram" width={25} height={25} />
                </a>
                <a href='https://www.facebook.com/profile.php?id=100089726257268' target="_blank">
                  <img src="{{ asset('assets/img/logo-facebook.png') }}" alt="facebook" width={13.39} height={25} />
                </a>
                <a href='https://www.linkedin.com/company/fiu-flexinuse/about/?viewAsMember=true' target="_blank">
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
            <a class="azoSansLight" href="{{ url('/deposer-une-annonce') }}">
                    Publier une annonce
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
            <a class="azoSansLight" target="_blank" href='https://blog.flexinuse.fr/'>
                    Blog
            </a>
            </div>
          <div class="destop-menuAbout">
            <div class="test-2">
            <h5 style=" margin-bottom: 0; " class="azoSansBold">
              À propos
            </h5>
            <a class="azoSansLight" href="{{ url('/qui-sommes-nous') }}" style="white-space: nowrap;">Qui sommes-nous?</a>
            <a class="azoSansLight" href="{{ url('/platefome-location-bureau') }}">Le Concept</a>
            <a class="azoSansLight" href="{{ url('/engagements-rse') }}">Engagement RSE</a>
            <a class="azoSansLight" href="{{ url('/nous-rejoindre') }}">Nous rejoindre</a>
            </div>
          </div>
          <!-- Debut accordion-->
          <div class="accordion-footer">
              <div class="tab">
                <input type="checkbox" name="accordion-1" id="cb1">
                <label for="cb1" class="tab__label">Location de bureaux</label>
                <div class="tab__content">
                  <div style="display: flex; flex-direction: column; padding-left: 1.5%; gap: 1em; padding-bottom: 2%;">
                    <a class="azoSansLight" target="_blank" href='#' style="padding-top:1%;">
                        Trouver un bureau
                    </a>
                    <a class="azoSansLight" target="_blank" href='#'>
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
                    <a class="azoSansLight" target="_blank" href='https://blog.flexinuse.fr/'>
                            Blog
                    </a>
                  </div>
                </div>
              </div>
              <div class="tab">
                <input type="checkbox" name="accordion-1" id="cb2">
                <label for="cb2" class="tab__label">A propos</label>
                <div class="tab__content">
                  <div style="display: flex; flex-direction: column; padding-left: 1.5%; gap: 1em; padding-bottom: 2%;">
                    <a class="azoSansLight">Qui sommes-nous?</a>
                    <a class="azoSansLight">Le Concept</a>
                    <a class="azoSansLight">Engagement RSE</a>
                    <a class="azoSansLight">Nous rejoindre</a>
                  </div>
                </div>
              </div>
              <div class="tab">
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
              <form id="inscrirenewslettermobile" method="POST" action="{{ url('/inscrirenewsletter/') }}" >
                      <input type="text" 
                      class="inputEmail"
                      placeholder="Adresse e-mail"
                      style="height: 65px;"
                       name="emaillettermobile" id="emaillettermobile" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">                      
                      <button 
                       style="height: 65px;color: #fff;border-radius: 8px;text-transform: none;background-color: #000;font-family: azo-sans-web,sans-serif;font-weight: 900;font-size: 2.2rem;"
                        type="button"  value="ajoutemaillettermobile" id="ajoutemaillettermobile">                        
                        S'abonner
                      </button>                       
              </form>
              
              <p style="color: #A5A5A5;line-height: 1em;margin-bottom: 2%;"class="azoSansLight">
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
              <FooterMenu title="Location de bureaux" services={location} />
              <FooterMenu title="À propos" services={about} />
              <FooterMenu title="Nous contacter" services={contact} />
            </div>
            <div style="gap: 1;width: 100%;display: flex;flex-direction: column;">
              <h5 style="margin-bottom: 15px; margin-top: 15px;" class="azoSansBold">
                Recevez notre newsletter
              </h5>              
                <p id="p1" style="display: none">Ce deuxième paragraphe également</p>
              <form id="inscrirenewsletter" method="POST" action="{{ url('/inscrirenewsletter/') }}" >
                      <input type="text" 
                      class="inputEmail"
                      placeholder="Adresse e-mail"
                      style="height: 65px;"
                       name="emailletter" id="emailletter" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">                      
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
                <Link href='https://www.instagram.com/fiu_flexinuse.fr/'>
                  <a target="_blank">
                    <img src="{{ asset('assets/img/logo-instagram.png')}}" alt="instagram" width={25} height={25} />
                  </a>
                </Link>
                <Link href='https://www.facebook.com/profile.php?id=100089726257268'>
                  <a target="_blank">
                    <img src="{{ asset('assets/img/logo-facebook.png')}}" alt="facebook" width={13.39} height={25} />
                  </a>
                </Link>
                <Link href='https://www.linkedin.com/company/fiu-flexinuse/about/?viewAsMember=true'>
                  <a target="_blank">
                    <img src="{{ asset('assets/img/logo-linkedin.png')}}" alt="linkedin" width={21.72} height={25} />
                  </a>
                </Link>
                <Link href='https://www.youtube.com/@fiu_flexinuse/featured'>
                  <a target="_blank">
                    <img src="{{ asset('assets/img/logo-youtube.png')}}" alt="youtube" width={33} height={25} />
                  </a>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Debut test-->
      <div
          style="
            margin-top: 2px;
            margin-bottom: 2px;
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: center;
            border-top-style: solid;
            border-top-width: 0.5px;
            border-color: rgba(0, 0, 0, 0.12);
          "
          class="mentions-footer"
      >
          
          <div style="margin-top: 16px;margin-bottom: 16px;display: flex;gap: 3%;width: 67%;" class="mentions-footer">
          <a class="a-footer"> © 2023 fiu. Tous droits réservés </a>
          
          <a class="a-footer" href="{{ url('/mentionslegales') }}">Mentions légales</a>
          
          
          <a class="a-footer" href="{{ url('/confidentialite') }}">Confidentialité</a>
          
          <a class="a-footer" href="{{ url('/cgu') }}">Conditions générales</a>
        
          <a class="a-footer">Plan du site</a>
          </div>
        
      </div>
      <!--Fin test -->
    </div>
    <!--<script src="{{ asset('assets/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @yield('scripts')
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
      const favDialogConnexion = document.getElementById('favDialogConnexion')
      

      modalOptionConnexion.addEventListener('click', () => {
        favDialogConnexion.showModal()
      })

      const modalCreateAccount = document.getElementById('modalCreateAccount')
      const favDialogCreateAccount = document.getElementById('favDialogCreateAccount')

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

      connexionFromCreateAccount.addEventListener('click', () => {
        favDialogCreateAccount.close()
        favDialogConnexion.showModal()
      })

      //favDialogRegisterNumber
      const createOneAccount = document.querySelector('.createOneAccount')
      const favDialogRegisterNumber = document.getElementById('favDialogRegisterNumber')

      createOneAccount.addEventListener('click', () => {
        favDialogCreateAccount.close()
        favDialogRegisterNumber.showModal()
      })


      const closeRegisterNumber = document.querySelector('.closeRegisterNumber')

      closeRegisterNumber.addEventListener('click', () => {
        favDialogRegisterNumber.close()
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
    </script>
    </body>
</html>
