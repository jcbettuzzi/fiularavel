@extends('layouts.defaultFiu')
<!-- ecran = rse.blade.php   -->


@section('title')
  accueil
@endsection

@section('pagetitle')

@endsection

@section('custom_css')

@endsection


@section('content')

<div class="flex-wrap-row bloc-one-rse" style=" margin-top: 90px; ">
          <div class="col-6 boxRadiusTopLeft" style=" position: relative; ">
            <img
              //width="950"
              //height="850"
              //priority
              alt="plusieurs personnes qui marche devant l'entrée du bâtiment"
              src="{{ asset('assets/img/AdobeStock_210325865.png')}}"
              class="object-center object-cover pointer-events-none boxRadiusTopLeft"
              //layout="fill"
              //objectFit="cover"
              //objectPosition="center"
              style="object-fit:cover;object-position:center;width:100%;height:100%;"
            />
          </div>
          <div class="col-6" style=" background-color: #1C4151; position: relative; overflow: hidden; ">
            <div class="items-center justify-content-center ht-100">
              <div style=" display: inline-block; color: white; ">
                <p style=" font-family: azo-sans-uber; margin-bottom: 0; " class="font-l">
                  NOS
                </p>
                <h1 style=" font-family: azo-sans-uber; margin-top: 2%; margin-bottom: 0; " class="font-l">
                  ENGAGEMENTS RSE
                </h1>
                <p class="font-m">L'humain, la planète, les pratiques</p>
              </div>
            </div>
            <div style=" position: absolute; top: 3%; ">
              <img src="{{ asset('assets/img/emoji-1-rse.png')}}" width="250px" height="250px" />
            </div>
            <div style=" position: absolute; bottom: -6%; right: 5%; ">
              <img src="{{ asset('assets/img/emoji-2-rse.png')}}" width="250px" height="250px" />
            </div>
          </div>
        </div>
        
        <div style=" padding-left: 5%; padding-right: 5%; ">
          <div class="row" style=" height: 100%; text-align: center; ">
            <div class="col-12">
              <p
                style="
                  padding-left: 6%;
                  padding-right: 6%;
                  padding-top: 1%;
                  padding-bottom: 1%;
                  line-height: 1.2em;
                "
                class="font-m"
              >
                Au-delà de la prise de conscience d'une urgence écologique mondiale, les stratégies RSE font désormais
                partie intégrante de la vie des entreprises. Nos engagements portent sur trois piliers, l'humain, la
                planète et les pratiques.
              </p>
            </div>
          </div>
          <div class="flex-wrap-row" style=" height: 100%; padding-bottom: 1%; ">
            <div
              style="
                display: inline-block;
                font-size: 5rem;
                font-weight: 900;
                padding-left: 5%;
                line-height: 1.3em;
              "
              class="fontSubTitle"
            >
              <h2 style=" margin-bottom: 0; font-family: azo-sans-uber; font-weight: 400; ">
                UN LIEU DE TRAVAIL, UN SERVICE <br /> ET DES CONSEILS ÉTHIQUES
              </h2>
            </div>
          </div>
          <div class="flex-wrap-row" style=" height: 100%; ">
            <div class="col-6">
              <div style=" padding-left: 10%; padding-right: 2%; ">
                <p style=" margin-bottom: 0; " class="font-m">
                  Intégrité, transparence, protection des données et confidentialité
                </p>
                <p class="font-m-whoAreWe">
                  Chez <strong>fiu</strong> , nous avons à cœur de fonctionner en toute transparence, que ce soit à
                  l'égard de nos collaborateurs, clients ou partenaires.
                </p>
                <p class="font-m-whoAreWe">
                  Notre business model est clair, notre approche est centrée sur le client, qu'il s'agisse
                  d'utilisateurs qui recherchent un espace ou qui en proposent un.
                </p>
                <p class="font-m-whoAreWe">
                  Nous nous attachons à apporter de la valeur à chacun de nos utilisateurs en proposant un
                  accompagnement personnalisé associé à des conseils d'experts. La qualité de service est un élément
                  moteur de l'entreprise.
                </p>
                <p class="font-m-whoAreWe">
                  Nous sommes une société à taille humaine où les canaux de communication sont ouverts et directs. Nous
                  pratiquons une information loyale.
                </p>
                <p class="font-m-whoAreWe">
                  Les données que nous utilisons sont protégées et demeurent confidentielles, dans le respect de la vie
                  privée. <b>fiu</b> dispose d'une équipe de développeurs dédiée qui garantit à la fois la sécurité des
                  données et le bon fonctionnement du site.
                </p>
              </div>
            </div>
            <div class="col-6">
              <!-- Debut bloc left -->
                <div class="items-center justify-content-center" style=" padding-top: 5%; position: relative; ">
                    <div style=" display: inline-block; ">
                        <img src="{{ asset('assets/img/AdobeStock_285697469.png') }}" style="width: 100%; height: 100%; " />
                        <p style=" padding-top: 5%; " class="font-m-whoAreWe">
                        Vous avez des questions ?
                        </p>
                        <button
                        style="
                            width: 210px;
                            font-size: 2.2rem;
                            color: #fff;
                            padding-top: 15px;
                            height: auto;
                            padding-left: 18px;
                            padding-right: 18px;
                            padding-bottom: 15px;
                            font-weight: 900;
                            border-radius: 100px;
                            text-transform: none;
                            font-family: azo-sans-web, sans-serif;
                            border: none;
                        "
                        class="buttonContactRse"
                        >
                        Contactez-nous
                        </button>
                        <div style=" position: absolute; bottom: -8%; left: 60%; ">
                        <img src="{{ asset('assets/img/emoji-3-rse.png') }}" width="100%" height="100%" />
                        </div>
                    </div>
                </div>
              <!-- Fin bloc left -->
            </div>
          </div>
          <div class="flex-wrap-row" style=" padding-bottom: 1em; ">
            <div class="col-6">
              <p
                style="
                  padding-left: 9%;
                  padding-right: 9%;
                  padding-top: 0%;
                  margin-bottom: -16px;
                "
                class="fontSubTitle"
              >
                Diversité, équité, égalité des chances et développement personnel
              </p>
            </div>
          </div>
          <div class="flex-wrap-row">
            <div class="col-6">
              <div style=" padding-left: 9%; padding-right: 2%; " class="font-m-whoAreWe">
                <p>
                  Notre ambition au sein de <b>fiu</b> est d'agir en employeur responsable, de soutenir la diversité,
                  l'équité, l'égalité des chances, de favoriser l'employabilité des collaborateurs et prioriser la
                  santé, la sécurité et le bien-être au travail.
                </p>
                <p>Nous avons donc identifié les points d’attention suivants :</p>
                <ul>
                  <li>Favoriser la collaboration entre les services</li>
                  <li style=" margin-top: 2%; margin-bottom: 2%; ">
                    Communiquer régulièrement auprès des collaborateurs sur les actions mises en œuvre
                  </li>
                  <li>Assurer l'exemplarité de la gouvernance</li>
                  <li style=" margin-top: 2%; margin-bottom: 2%; ">
                    Adopter un comportement citoyen et contribuer aux causes qui nous sont chères
                  </li>
                  <li>Donner les ressources et outils nécessaires à nos collaborateurs pour réaliser leurs missions</li>
                  <li style=" margin-top: 2%; margin-bottom: 2%; ">
                    Mettre en place des processus qui consolident les actions de nos collaborateurs
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-6">
              <div style=" padding-left: 9%; padding-right: 9%; ">
                <ul style=" padding-left: 9%; padding-right: 10%; " class="font-m-whoAreWe">
                  <li>
                    Proposer des perspectives d'évolution et des moyens pour y parvenir (programme de formation,
                    expérience, ouverture sur de nouveaux sujets)
                  </li>
                  <li style=" margin-top: 2%; margin-bottom: 2%; ">
                    S'assurer que l'entreprise soit juste envers l'ensemble des salariés
                  </li>
                  <li>Offrir un environnement de travail sécurisé et sécurisant</li>
                </ul>
                <div class="row">
                  <div
                    class="col-11"
                    style="
                      height: 433px;
                      background-color: #1C4151;
                      border-radius: 25px;
                      margin-left: 5%;
                      margin-right: 5%;
                      padding-left: 5%;
                      padding-right: 5%;
                      position: relative;
                    "
                  >
                    <div class="items-center justify-content-center ht-100">
                      <div style=" display: inline-block; text-align: center; " class="font-m-whoAreWe">
                        <p
                          style=" color: #7DD175; font-family: azo-sans-web; font-size: 3rem; font-weight: bold; "
                        >
                          L'objectif
                        </p>
                        <p style=" color: white; padding: 6%; line-height: 1.2em; ">
                          Établir des conditions de travail équilibrées et justes, un dialogue social, répondre aux
                          thématiques de santé et de sécurité, promouvoir le développement du capital humain, donner du
                          sens au travail.
                        </p>
                      </div>
                    </div>
                    <div style=" position: absolute; top: 5%; left: 14%; ">
                      <img src="{{ asset('assets/img/etoileGrandRse.png') }}" width="25.57px" height="25.61px" />
                    </div>
                    <div style=" position: absolute; top: 10%; right: 8%; ">
                      <img src="{{ asset('assets/img/etoileGrandRse.png') }}" width="25.57px" height="25.61px" />
                    </div>
                    <div style=" position: absolute; top: 20%; right: 17%; ">
                      <img src="{{ asset('assets/img/etoileGrandRse.png') }}" width="18.33px" height="18.35px" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex-wrap-row">
            <div class="col-6">
              <div style=" padding-left: 9%; padding-right: 9%; ">
                <p style=" margin-bottom: 0.5em; " class="fontSubTitle">
                  Politique des droits de l'homme
                </p>
                <p class="font-m-whoAreWe">
                  <strong>fiu</strong> réserve une place centrale à cette question dans sa gouvernance en menant une
                  politique stricte sur le respect des droits, l’identification et la prévention des risques, la gestion
                  des conflits, la remédiation… Le sujet est également abordé dans notre plan de formation afin de
                  s’assurer que l’ensemble des collaborateurs soient informés.
                </p>
              </div>
            </div>
            <div class="col-6 items-center justify-content-center">
              <div>
                <img src="{{ asset('assets/img/emoji4-rse.png') }}" width="350px" height="350px" />
              </div>
            </div>
          </div>
          
        </div>
        <div style=" background-color: #FFF6F0; height: 100%; ">
          
          <div style=" padding: 1% 5% 5% 5%; ">
            <div style=" line-height: 1.3em; " class="fontSubTitle">
              <h2
                class="fontSubTitle"
                style="
                  font-family: azo-sans-uber;
                  margin-bottom: 0.5em;
                  padding-top: 3.5%;
                  padding-left: 4%;
                  padding-right: 4%;
                "
              >
                Un comportement respectueux <br /> de l'environnement
              </h2>
            </div>
            <div style=" line-height: 1.3em; color: #7DD175; font-weight: bold; " class="font-m-whoAreWe">
              <p style=" margin-top: 0; padding-left: 4%; padding-right: 4%; ">
                Nos actions pour limiter l'impact de l'activité de l'entreprise sur l'environnement, contribuer au
                développement local, déployer une politique d'achats responsable :
              </p>
            </div>
            <div class="flex-wrap-row">
              <div class="col-6">
                <p style=" padding-left: 8%; padding-right: 8%; margin-bottom: 0; " class="fontSubTitle">
                  Déplacements
                </p>
                <p style=" padding-left: 8%; padding-right: 8%; margin-top: 0.5em; " class="font-m-whoAreWe">
                  Nous favorisons les transports en commun et « doux » au-delà de ces recommandations, nous avons pris
                  la décision de mettre fin à l'utilisation véhicules (voiture ou deux roues) thermiques. Ainsi,
                  <b>fiu</b> ne fait plus l'acquisition de ce type de véhicule depuis septembre 2022.
                </p>
                <p style=" padding-left: 8%; padding-right: 8%; margin-bottom: 0; " class="fontSubTitle">
                  Consommation énergétique
                </p>
                <p style=" padding-left: 8%; padding-right: 8%; margin-top: 0.5em; " class="font-m-whoAreWe">
                  Nous pratiquons une veille énergétique et mettons en place les mesures nécessaires dans le but de
                  réduire notre consommation tout en préservant le confort de nos équipes.
                </p>
              </div>
              <div class="col-6">
                <p style=" padding-left: 8%; padding-right: 8%; margin-bottom: 0; " class="fontSubTitle">
                  Achats durables et gestion des déchets
                </p>
                <p style=" padding-left: 8%; padding-right: 8%; margin-top: 0.5em; " class="font-m-whoAreWe">
                  Nous priorisons une consommation locale et à faible émission de carbone pour nos achats du quotidien
                  mais également nos investissements plus lourds (bureautique, mobilier, véhicules etc…).
                </p>
                <p style=" padding-left: 8%; padding-right: 8%; " class="font-m-whoAreWe">
                  Nous prenons soin de trier nos déchets (papier, carton, plastique, canettes, cartouches imprimantes,
                  piles, ampoules, café moulu, verre etc…)
                </p>
                <p style=" padding-left: 8%; padding-right: 8%; " class="font-m-whoAreWe">
                  Nous avons mis en place un partenariat avec Les joyeux recycleurs qui viennent collecter le contenu de
                  chacune de nos « boxes » pour se charger du recyclage. Nous recyclons environ 20 kilos de déchets
                  chaque mois qui se transforment en t-shirts, bacs à fleurs, bouteilles ou compost selon leur nature !
                </p>
              </div>
            </div>
            
          </div>
        </div>

        
        <div style=" padding: 3% 5% 5% 5%; ">
          <div class="flex-wrap-row" style=" height: 100%; padding-bottom: 1%; ">
            <div
              style="
                display: inline-block;
                // fontWeight: '900',
                padding-left: 5%:
                line-height: 1.3em;
              "
              class="font-l"
            >
              <h2 style=" margin-top: 0; margin-bottom: 0; font-family: azo-sans-uber; ">
                DES PRATIQUES RESPECTUEUSES DES CODES DE LA PROFESSION ET DE LA LÉGISLATION EN VIGUEUR
              </h2>
            </div>
          </div>
          <div class="flex-wrap-row" style=" height: 100%; ">
            <div class="col-6">
              <div style=" padding-left: 10%; padding-right: 10%; ">
                <p style=" margin-bottom: 0; " class="fontSubTitle">
                  Programme de conformité à la législation anticorruption
                </p>
                <p class="font-m-whoAreWe">
                  Nous avons intégré la procédure d'identification et de vérification d'identité de nos clients KYC
                  (Know Your Customer). Cette procédure concerne tout type d'entreprise qui souhaite intégrer un
                  utilisateur comme client, notre profession est particulièrement visée par cette obligation. En effet,
                  en appliquant les vérifications nous luttons pour éviter les relations commerciales avec des personnes
                  liées au terrorisme, à la corruption ou au blanchiment de capitaux, entre autres.
                </p>
                <p class="font-m-whoAreWe">
                  Nous respectons des droits de propriété intellectuelle, grâce au respect de la propriété́
                  intellectuelle, nous nous donnons les moyens d'agir contre les contrefacteurs et les pratiques
                  déloyales.
                </p>
                <p style=" marginBottom: '0' " class="fontSubTitle">
                  Respect des signalements internes
                </p>
                <p class="font-m-whoAreWe">
                  Nous avons mis en place des procédures de signalements internes qui couvrent l'ensemble de nos
                  obligations et plus encore. De la violation des données (RGPD) jusqu'au signalement Tracfin.
                </p>
              </div>
            </div>

            <div class="col-6" style=" position: relative; ">
              <!-- Debut bloc left 2 -->
              <div class="items-center justify-content-center" style=" padding-top: 5%; position: relative; ">
                    <div style=" display: inline-block; ">
                        <img src="{{ asset('assets/img/AdobeStock_220104112.png') }}" width="100%" height="100%" />
                        <p style=" padding-top: 5%; " class="font-m-whoAreWe">
                        Vous avez des questions ?
                        </p>
                        <button
                        //onClick={redirectToContact}
                        style="
                            width: 210;
                            font-size: 2.2rem;
                            color: #fff;
                            padding-top: 15px;
                            height: auto;
                            padding-left: 18px;
                            padding-right: 18px;
                            padding-bottom: 15px;
                            font-weight: 900;
                            border-radius: 100px;
                            text-transform: none;
                            font-family: azo-sans-web, sans-serif;
                            border: none;
                        "
                        class="buttonContactRse"
                        >
                        Contactez-nous
                        </button>
                        <div style=" position: absolute; bottom: -8%; left: 60%; ">
                        <Image src="{{ asset('assets/img/emoji-3-rse.png') }}" width="100%" height="100%" />
                        </div>
                    </div>
                </div>
              <!-- Fin bloc left 2 -->
            </div>
          </div>
        </div>
@endsection


@section('scripts')
@endsection