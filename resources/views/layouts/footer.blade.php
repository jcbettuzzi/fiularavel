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
          <div class="destop-menuRent" style="margin: 0 auto;padding-left:0 !important;">
            <div class="test-1" style="padding-left:0 !important;padding-right: 2%;">
                <h5 style="white-space:nowrap;margin-bottom: 0;" class="azoSansBold">Trouver un bureau</h5>
                <a href="{{ url('/location-bureau-entreprise') }}" target="_blank" class="azoSansLight">Commencer ma recherche</a>
                <a href="{{ url('/location-bureaux') }}" target="_blank" class="azoSansLight">Location de bureau</a>
                <a href="{{ url('/coworking') }}" target="_blank" class="azoSansLight">Coworking</a>
                <a href="{{ url('/achat-de-bureau') }}" target="_blank" class="azoSansLight">Achat de bureau</a>
                <a href="{{ url('/investir') }}" target="_blank" class="azoSansLight">Investissement</a>
                <div class="socialNetwork" style="margin-top: 105px;">
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
            <div class="test-1">
            <h5 style="white-space:nowrap;margin-bottom: 0;" class="azoSansBold">
              Bureaux
            </h5>
            
            <a class="azoSansLight" href="{{ url('/recherche-sur-mesure') }}" style="white-space:nowrap;">
                    Recherche sur mesure
            </a>
            <a class="azoSansLight" href="{{ url('/guideducoworking') }}">
                    Coworking Paris
            </a>
            <a class="azoSansLight" href="{{ url('/location-bureau-paris') }}">
                    Location bureau Paris
            </a>            
            <a class="azoSansLight" target="_blank" href="{{ url('/blog') }}" >
                    Blog
            </a>
            <a class="azoSansLight" target="_blank" href="{{ url('/guide') }}" >
                    Guide
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
            <a class="azoSansLight" href="{{ url('/podcast') }}">Podcast</a>
            </div>
          </div>
          <!-- Debut menu mobile -->
          <div class="menu-footer-mobile">
            <h5 style="white-space:nowrap;margin-bottom: 0;" class="azoSansBold">Trouver un bureau</h5>
            <ul style="list-style: none;padding: 0;">
              <li><a class="azoSansLight" href="{{ url('/location-bureau-entreprise') }}" target="_blank">Commencer ma recherche</a></li>
              <li><a class="azoSansLight" href="{{ url('/platefome-location-bureau') }}" target="_blank">Location de bureau</a></li>
              <li><a class="azoSansLight" href="{{ url('/coworking') }}" target="_blank">Coworking</a></li>
              <li><a class="azoSansLight" href="{{ url('/achat-de-bureau') }}" target="_blank">Achat de bureau</a></li>
              <li><a class="azoSansLight" href="{{ url('/investir') }}" target="_blank">Investissement</a></li>
            </ul>
            <h5 style="white-space:nowrap;margin-bottom: 0;" class="azoSansBold">
              Bureaux
            </h5>
            <ul style="list-style: none;padding: 0;">
              <li><a class="azoSansLight" href="{{ url('/recherche-sur-mesure') }}" style="white-space:nowrap;">Recherche sur mesure</a></li>
              <li><a class="azoSansLight" href="{{ url('/guideducoworking') }}">Coworking Paris</a></li>
              <li><a class="azoSansLight" href="{{ url('/location-bureau-paris') }}">Location bureau Paris</a></li>
              <li><a class="azoSansLight" target="_blank" href="{{ url('/blog') }}" >Blog</a></li>
              <li><a class="azoSansLight" target="_blank" href="{{ url('/guide') }}" >Guide</a></li>
            </ul>
            <h5 style=" margin-bottom: 0; " class="azoSansBold">
              À propos
            </h5>
            <ul style="list-style: none;padding: 0;">
              <li><a class="azoSansLight" href="{{ url('/qui-sommes-nous') }}" style="white-space: nowrap;">Qui sommes-nous?</a></li>
              <li><a class="azoSansLight" href="{{ url('/platefome-location-bureau') }}">Le Concept</a></li>
              <li><a class="azoSansLight" href="{{ url('/engagements-rse') }}">Engagement RSE</a></li>
              <li><a class="azoSansLight" href="{{ url('/contact') }}">Nous rejoindre</a></li>
              <li><a class="azoSansLight" href="{{ url('/podcast') }}">Podcast</a></li>
            </ul>
            <h5 style=" margin-bottom: 0; " class="azoSansBold">
              Nous contacter
            </h5>
            <ul style="list-style: none;padding: 0;">
              <li><a class="azoSansLight" href="{{ url('/contact') }}">Nous écrire</a></li>
              <li><a class="azoSansLight" href="{{ url('/contact') }}">Nous appelez</a></li>
            </ul>
          </div>
          <!-- Fin menu mobile -->
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
                      style="height: 65px;width: 100%;"
                       name="emaillettermobile" id="emaillettermobile" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="recaptchaToken3" id="recaptchaToken3">                          
                      <button 
                       style="height: 65px;color: #fff;border-radius: 8px;text-transform: none;background-color: #000;font-family: azo-sans-web,sans-serif;font-weight: 900;font-size: 2.2rem;width: 100%;margin-top: 1%;"
                        type="button"  value="ajoutemaillettermobile" id="ajoutemaillettermobile">                        
                        S'abonner
                      </button>                       
              </form>
              
          </div>
          <!-- Fin newsletter mobile -->
          <div style="gap: 1em;display: flex;flex-direction: column;" class="width-margin-partContactNewletters-Footer">
            <div class="test-1">
            <h5 style="margin-bottom: 0px;white-space: nowrap;" class="azoSansBold destop-contactFooter">
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
                      class="inputEmail widthInputMail"
                      placeholder="Adresse e-mail"
                      style="height: 65px;"
                       name="emailletter" id="emailletter" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="recaptchaToken2" id="recaptchaToken2">                       
                      <button 
                      style="height: 65px;color: #fff;border-radius: 8px;text-transform: none;background-color: #000;font-family: azo-sans-web,sans-serif;font-weight: 900;font-size: 2.2rem;width:100%;margin-top: 3%;margin-bottom: 8%;"
                        type="button"  value="ajoutemailletter" id="ajoutemailletter">                        
                        S'abonner
                      </button>                       
              </form>

              
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