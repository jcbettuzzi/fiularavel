<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/testStyleFiu.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('assets/css/fontTestFiu.css')}}" type="text/css"/>
        @yield('custom_css')
    </head>

    <body>

        <div class="headerContainer" style="z-index: 5;">
        <div class="headerNav">
            <Link href="/">
            <div class="logoResponsiveHeader">
                <img src="{{ asset('assets/img/logo-fiu@2x.png')}}" alt="logo fiu" width="84" height="40" class="cursorPointer" />
            </div>
            </Link>
            <div class="tooltip destop-hideShow-header">
            
            <a class='headerLink'>
                <span style=" float: left; padding-top: 3%;" >
                Trouver un bureau &nbsp;
                </span>
                <span
                style="float: right; padding-top: 2.5%;"                
                >                
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>
                </span>
            </a>
            <div class="tooltiptext minWidth-WindowsMenuFindDestop" style="gap: 15px;display: flex;text-align: left;flex-direction: column;left: 32%;">
                <a class="headerLink" style="margin-top: 8px;textAlign: left;margin-left: 7%;margin-right: 7%;white-space: nowrap;" href="/location-bureau-entreprise">
                    Commencer ma recherche
                </a>
                <a class="headerLink" style=" text-align: left; margin-left: 7%; margin-right: 7%;" href="/location-bureaux">
                    Location de bureau
                </a>
                <a class="headerLink" style="margin-bottom: 8px; text-align: left; margin-left: 7%; marginRight: 7%;" href="/coworking">
                    Coworking
                </a>
            </div>
            </div>

            <Link href="/recherche-sur-mesure">            
            <a class="headerLink destop-hideShow-header">
                Recherche sur mesure
            </a>
            </Link>
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
                    <span style="padding-left: 1%; white-space: nowrap;">Publier une annonce 66</span>
                    </a>
                </div>
            </Link>
            <button class="buttonConnexion azoSansBoldLabel destop-hideShow-header" id="myBtn">
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
                
                <!-------------------------------->

                <!-- Quand admin connecté -->
            
                <!-------------------------------->
                </div>
                
            </div>
            <div class="borderOverlaySocialNetwork partOverlaySocialNetwork">
                
                <a target="_blank" href='https://www.instagram.com/fiu_flexinuse.fr/'>
                    <Image src="/logo-instagram.png" alt="instagram" width={25} height={25} />
                </a>
                
                <Link href='https://www.facebook.com/profile.php?id=100089726257268'>
                <a target="_blank">
                    <Image src="/logo-facebook.png" alt="facebook" width={13.39} height={25} />
                </a>
                </Link>
                <Link href='https://www.linkedin.com/company/fiu-flexinuse/about/?viewAsMember=true'>
                <a target="_blank">
                    <Image src="/logo-linkedin.png" alt="linkedin" width={21.72} height={25} />
                </a>
                </Link>
                <Link href='https://www.youtube.com/@fiu_flexinuse/featured'>
                <a target="_blank">
                    <Image src="/logo-youtube.png" alt="youtube" width={21.72} height={25} />
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
              <Link href='https://www.instagram.com/fiu_flexinuse.fr/'>
                <a target="_blank">
                  <img src="{{ asset('assets/img/logo-instagram.png') }}" alt="instagram" width={25} height={25} />
                </a>
              </Link>
              <Link href='https://www.facebook.com/profile.php?id=100089726257268'>
                <a target="_blank">
                  <img src="{{ asset('assets/img/logo-facebook.png') }}" alt="facebook" width={13.39} height={25} />
                </a>
              </Link>
              <Link href='https://www.linkedin.com/company/fiu-flexinuse/about/?viewAsMember=true'>
                <a target="_blank">
                  <img src="{{ asset('assets/img/logo-linkedin.png') }}" alt="linkedin" width={21.72} height={25} />
                </a>
              </Link>
              <Link href='https://www.youtube.com/@fiu_flexinuse/featured'>
                <a target="_blank">
                  <img src="{{ asset('assets/img/logo-youtube.png') }}" alt="youtube" width={33} height={25} />
                </a>
              </Link>
            </div>
          </div>

          <div class="destop-menuRent">
            <div class="test-1">
            <h5 style="white-space:nowrap;margin-bottom: 0;" class="azoSansBold">
              Location de bureaux
            </h5>
            <a class="azoSansLight" target="_blank" href='#'>
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
      
          <div class="destop-menuAbout">
            <div class="test-2">
            <h5 style=" margin-bottom: 0; " class="azoSansBold">
              À propos
            </h5>
            <a class="azoSansLight" style="white-space: nowrap;">Qui sommes-nous?</a>
            <a class="azoSansLight">Le Concept</a>
            <a class="azoSansLight">Engagement RSE</a>
            <a class="azoSansLight">Nous rejoindre</a>
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
                    <a class="azoSansLight">Nous écrire</a>
                    <a class="azoSansLight">Nous appeler</a>
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
              <input class="inputEmail" type="text" placeholder="Adresse e-mail" style="height: 65px;" />
              
              <button
                style="
                  height: 65px;
                  color: #fff;
                  border-radius: 8px;
                  text-transform: none;
                  background-color: #000;
                  font-family: azo-sans-web,sans-serif;
                  font-weight: 900;
                  font-size: 2.2rem;
                "
              >
              
                S'abonner
              </button>
              <p style="color: #A5A5A5;line-height: 1em;margin-bottom: 2%;"class="azoSansLight">
                En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous
                prenez connaissance de{' '}
                <a href={'/confidentialite'}>
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
            <a className="azoSansLight destop-contactFooter">Nous écrire</a>
            <a className="azoSansLight destop-contactFooter">Nous appelez</a>
            
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
              <input
                class="inputEmail"
                type="text"
                placeholder="Adresse e-mail"
                style="
                  height: 65px;
                "
              />
            
              <button
                style="height: 65px;color: #fff;border-radius: 8px;text-transform: none;background-color: #000;font-family: azo-sans-web,sans-serif;font-weight: 900;font-size: 2.2rem;">
            
                S'abonner
              </button>
              <p
                style="
                  color: #A5A5A5;
                  line-height: 1em;
                  margin-bottom: 2%;
                "
                class="azoSansLight"
              >
                En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous
                prenez connaissance de{' '}
                <a href={'/confidentialite'}>
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
          
          <a class="a-footer">Mentions légales</a>
          
          
          <a class="a-footer">Confidentialité</a>
          
          <a class="a-footer">Conditions générales</a>
        
          <a class="a-footer">Plan du site</a>
          </div>
        
      </div>
      <!--Fin test -->
    </div>
    
    @yield('scripts')
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


      //Debut modal

      //-------------------------------------------------------------------//


      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }


      //-------------------------------------------------------------------//

      //Fin modal
      
    </script>
    </body>
</html>
