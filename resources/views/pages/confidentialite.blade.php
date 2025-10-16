@extends('layouts.defaultFiu')
<!-- ecran = confidnetialite.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('content')

<div class="boxRadiusTopLeft row items-center justify-content-center" style="position: relative; min-height: 80vh; margin-top: 100px; background-color: rgb(241, 154, 96);">
   <div class="boxRadiusTopLeft items-center justify-content-center">
      <div style="color: white; z-index: 1; text-align: center; width: 80%;">
         <h1 class="mainTitleCoworking font-l" style="font-family: Azo-Sans-Uber;">POLITIQUE DE CONFIDENTIALITÉ</h1>
         <p class="titleWhatCoworking font-m">Version 1.01 du 01/03/2023</p>
      </div>
   </div>
</div>
<div class="flex-wrap-row" style="height: 100%;">
   <div class="col-4">
      <div style="position: sticky; top: 10%;">
         <ul class="listCoworking" style="font-size: 2.6rem; display: flex; flex-direction: column; list-style-type: none; padding-right: 5%; padding-left: 5%; margin-top: 10.5%; line-height: 1.1;">
            <li style="color: rgb(165, 165, 165);"><a href="#titleOne" class="item" onclick="handleClick(this)">1. Qui collecte les données à caractere personnel ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleTwo" class="item" onclick="handleClick(this)">2. Quelles sont les finalités de la collecte de vos données personnelles et quelles sont nos raisons ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleThree" class="item" onclick="handleClick(this)">3. Origine des donnees collectees par la société</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleFour" class="item" onclick="handleClick(this)">4. A qui vos données sont elles transmises ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleFive" class="item" onclick="handleClick(this)">5. Quels sont mes droits sur les données ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleSix" class="item" onclick="handleClick(this)">6. Quel est le sort de mes données apres mon décès ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleSeven" class="item" onclick="handleClick(this)">7. Mes données sont elle envoyées hors de l’ue ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleEight" class="item" onclick="handleClick(this)">8. Combien de temps mes données sont-elles conservees ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleNine" class="item" onclick="handleClick(this)">9. Quelles mesures de sécurité sont prises pour protéger mes données ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleTen" class="item" onclick="handleClick(this)">10. Que faut-il savoir des données collectees par les réseaux sociaux ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleEleven" class="item" onclick="handleClick(this)">11. Des données sur les mineurs de moins de 16 ans sont elles collectees ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleTwelve" class="item" onclick="handleClick(this)">12. Vais-je recevoir des sollicitations commerciales ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleThirteen" class="item" onclick="handleClick(this)">13. Est-ce que la société utilise des cookies, tags et traceurs ?</a></li>
            <li style="color: rgb(165, 165, 165);"><a href="#titleFithteen" class="item" onclick="handleClick(this)">15. Comment contacter la société ?</a></li>
         </ul>
      </div>
   </div>
   <div class="col-8">
      <div style="padding-left: 5%; padding-right: 5%; margin-top: 6%;">
         <p class="font-m"><b>FLEX IN USE</b> société par actions simplifiée au capital de 1.800 €, immatriculée au RCS de Paris sous le numéro 893 340 125 et ayant son siège social au 25 rue de Ponthieu à 75008 Paris, est une agence immobilière dont le numéro de carte professionnelle transaction délivrée par Chambre de commerce et d’industrie sous le numéro CPI 9201 2024 000 000 089.</p>
         <p class="font-m">La Société édite une plateforme de renseignement et de mise en relation entre loueurs et preneurs de locaux à usage de bureaux, accessible à l’adresse www.flexinuse.fr (ci-après le « <b>Site</b> » ou la « <b>Plateforme</b> »), permettant un accès à différents services (ci-après les « <b>Services</b> »).</p>
         <p class="font-m">Dans une volonté de transparence avec ses clients et utilisateurs du Site, elle a mis en place une politique reprenant l’ensemble de ces traitements, des finalités poursuivies par ces derniers ainsi que des moyens d’actions à la disposition des individus afin qu’ils puissent au mieux exercer leurs droits.</p>
         <p class="font-m">Pour toute information complémentaire sur la protection des données personnelles, nous vous invitons à consulter le site :<a class="font-m" href="https://www.cnil.fr/" style="font-family: Abril-Text;">https://www.cnil.fr/</a></p>
         <p class="font-m">La présente politique de confidentialité est liée aux conditions générales d’utilisation et de vente accessibles ici (<a class="font-m" href="/cgu" style="font-family: Abril-Text;">https://flexinuse.fr/cgu</a>)</p>
         <p class="font-m">Pour délivrer ses Services, la Société collecte des données à caractère personnel sur les individus (ci-après « <b>les Clients</b> » ou les « <b>Utilisateurs</b> ») ou « <b>Vous</b> » « <b>vos</b> » « <b>votre</b> »). La collecte de données s’effectue sur le site internet de La Société.</p>
         <p class="font-m">Le présent document a pour objet de vous dispenser une information complète sur l’usage qui est opéré par La Société des données à caractère personnel de ses clients.</p>
         <p class="font-m">La Société, en tant que Responsable de traitement, s’engage à respecter les dispositions du règlement (UE) n°2016/679 du 27 avril 2016 relatif à la protection des données à caractère personnel.</p>
         <p class="font-m">Dans les formulaires de collecte de données à caractère personnel sur le site ou au format papier, le Client est notamment informé du caractère obligatoire ou non de la collecte de données. En cas de non fourniture d’un champ de données obligatoire, La Société ne pourra accomplir ses prestations.</p>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleOne">1. QUI COLLECTE LES DONNÉES À CARACTERE PERSONNEL ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <h3 class="font-m">1.1. Responsable de traitement</h3>
         <p class="font-m">De manière générale, la Société qui collecte les données à caractère personnel et met en œuvre les traitements de données est :</p>
         <p class="font-m"><b>FLEX IN USE</b> société par actions simplifiée au capital de 1.800 €, immatriculée au RCS de Paris sous le numéro 893 340 125 et ayant son siège social au 25 rue de Ponthieu à 75008 Paris adresse mail : info@flexinuse.fr</p>
         <h3 class="font-m">1.2. Les autres responsable de traitement</h3>
         <p class="font-m">Cependant lors de votre visite sur le site internet, d’autres sociétés sont susceptibles de collecter des données à caractère personnel vous concernant. Ces sociétés peuvent éditer des cookies, traceurs ou tags évoqués au point dédié des présentes ci-après.</p>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleTwo">2. QUELLES SONT LES FINALITÉS DE LA COLLECTE DE VOS DONNÉES PERSONNELLES ET QUELLES SONT NOS RAISONS ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <h3 class="font-m">2.1 BASE JURIDIQUE DES TRAITEMENTS</h3>
         <p class="font-m">La Société n'est autorisée à utiliser les données personnelles de Utilisateurs du Site uniquement dans la mesure où elle dispose d'une base légale valable pouvant être :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>l'exécution d'un contrat (par exemple pour traiter et exécuter un mandat sur le Site, ou pour ouvrir et gérer un compte Utilisateur/Client sur le Site), ou ;</li>
            <li>l’exécution d’une obligation légale (ex : conservation de factures), ou ;</li>
            <li>lorsque cela est dans l’intérêt légitime de La Société, ou ;</li>
            <li>Lorsque l’Utilisateur a donné son consentement.</li>
         </ul>
         <p class="font-m">Un " intérêt légitime " de La Société ne doit pas aller à l'encontre des droits et libertés des Utilisateurs. Parmi les exemples d'intérêts légitimes mentionnés dans le RGPD figurent la prévention de la fraude, le marketing direct.</p>
         <p class="font-m">Les bases juridiques applicables pour chaque traitement de données sont précisées dans le tableau ci-après</p>
         <h3 class="font-m">2.2 LES TRAITEMENTS DE DONNEES MIS EN ŒUVRE PAR LA SOCIÉTÉ</h3>
         <p class="font-m">La Société est amenée à collecter et à enregistrer des données à caractère personnel de ses clients pour effectuer les traitements suivants :</p>
         <p class="font-m"><b>Pourquoi nous utilisons vos données à caractère personnel ?</b></p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>Gestion du compte client, des mandats ;</li>
            <li>Gestion des opérations de paiement</li>
            <li>Gestion de la relation client (téléphone / tchat / email), du suivi des services</li>
            <li>Gestion de la satisfaction client (Recueil des avis clients sur les services proposés) ;</li>
            <li>Lutte contre la fraude lors du paiement des services et gestion des impayés ;</li>
            <li>Opérations de statistiques, d’analyse, de profilage, de sélection et de segmentation des clients afin d’améliorer la connaissance des clients ;</li>
            <li>Envoi d’offres commerciales ciblées par voie électronique ( email, notifications mobiles, SMS)</li>
            <li>Affichage de publicités sur support digital (encarts publicitaires sur des sites tiers ; encarts publicitaires sur les réseaux sociaux)</li>
            <li>Envoi d’offres commerciales ciblées par voie postale</li>
            <li>Personnalisation des sites (mobile et desktop) et applications selon les affinités de l’Utilisateur ;</li>
            <li>Mesure de fréquentation des sites (mobile et desktop) et applications mobiles ;</li>
            <li>Mise à disposition d’outils de partage sur les réseaux sociaux ;</li>
            <li>Mise en place de jeux concours et publicitaires ;</li>
            <li>Partage d’informations avec des partenaires commerciaux (listés plus bas)</li>
            <li>Enrichissement de la base de données clients auprès de partenaires tiers</li>
            <li>Sécurité des sites internet et des applications mobiles</li>
            <li>Accessibilité du site internet pour les personnes ayant un handicap</li>
            <li>Transmission de données aux autorités administratives et aux forces de l’ordre</li>
         </ul>
         <p class="font-m"><b>Quels sont nos raisons /Bases légales ?</b></p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>Exécution du contrat passé entre un Client et La Société</li>
            <li>Intérêt légitime de La Société de fournir un espace client pour gérer les Services souscrits et les annonces consultées</li>
            <li>Exécution du contrat passé entre un Client et La Société</li>
            <li>Exécution du contrat passé entre un Client et La Société ou à l'exécution de mesures précontractuelles prises à la demande de celui-ci</li>
            <li>Intérêt légitime de la Société afin d’améliorer les produits et le service fourni par a Société et de recueillir la satisfaction client</li>
            <li>Exécution du contrat passé entre un Client et La Société</li>
            <li>Intérêt légitime de La Société de s’assurer de la véracité et l’authenticité des transactions</li>
            <li>Intérêt légitime de La Société de mieux connaître ses clients et d’adapter ses offres aux clients (sous réserve de l’absence d’opposition du Client auprès de La Société)</li>
            <li>Consentement du Client</li>
            <li>Exception au consentement pour les personnes déjà clientes de La Société et qui sont contactées pour des produits et services analogues</li>
            <li>Intérêt légitime de La Société pour les opérations d’identification du Client en ligne (onboarding) (sous réserve de l’absence d’opposition du Client auprès de La Société</li>
            <li>Consentement du Client au dépôt des cookies / tags pour l’affichage des publicités</li>
            <li>Intérêt légitime pour les envois de prospection sur support papier (sous réserve de l’absence d’opposition du Client auprès de La Société)</li>
            <li>Consentement du Client</li>
            <li>Intérêt légitime de La Société de faire des offres promotionnelles</li>
            <li>Exécution du contrat passé entre un Client et La Société</li>
            <li>Consentement du Client pour les opérations à des fins de prospection par voie électronique par des partenaires</li>
            <li>Intérêt légitime de La Société pour les opérations de prospection de partenaires par voie postale ou par téléphone) (sous réserve de l’absence d’opposition du Client auprès de La Société)</li>
            <li>Intérêt légitime de La Société de disposer de données exactes et mises à jour et d’améliorer la connaissance Client</li>
            <li>Intérêt légitime de La Société d’assurer la sécurité et la confidentialité des données traitées</li>
            <li>Obligation légale issue du décret n° 2019-768 du 24 juillet 2019 relatif à l'accessibilité aux personnes handicapées des services de communication au public en ligne</li>
            <li>Obligations légales / Réquisitions judiciaires et administratives</li>
         </ul>
         <table style="border: 1px solid;" class="font-xs">
            <tr>
               <th style="padding-left: 2%; padding-right: 2%; border-bottom: 1px solid black; border-right: 1px solid black;">Finalité</th>
               <th style="padding-left: 2%; padding-right: 2%; border-bottom: 1px solid black;">Base légale</th>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Gestion du compte client, des mandats ;</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Exécution du contrat passé entre un Client et La Société</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Gestion des opérations de paiement</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime de La Société de fournir un espace client pour gérer les Services souscrits et les annonces consultées</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Gestion de la relation client (téléphone / tchat / email), du suivi des services</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Exécution du contrat passé entre un Client et La Société</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Gestion de la satisfaction client (Recueil des avis clients sur les services proposés) ;</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Exécution du contrat passé entre un Client et La Société ou à l'exécution de mesures précontractuelles prises à la demande de celui-ci</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Lutte contre la fraude lors du paiement des services et gestion des impayés&nbsp;;</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime de la Société afin d’améliorer les produits et le service fourni par a Société et de recueillir la satisfaction client</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Opérations de statistiques, d’analyse, de profilage, de sélection et de segmentation des clients afin d’améliorer la connaissance des clients ;</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Exécution du contrat passé entre un Client et La Société</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Envoi d’offres commerciales ciblées par voie électronique ( email, notifications mobiles, SMS)</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime de La Société de s’assurer de la véracité et l’authenticité des transactions</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Affichage de publicités sur support digital (encarts publicitaires sur des sites tiers ; encarts publicitaires sur les réseaux sociaux)</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime de La Société de mieux connaître ses clients et d’adapter ses offres aux clients (sous réserve de l’absence d’opposition du Client auprès de La Société)</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Envoi d’offres commerciales ciblées par voie postale</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;"></td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Personnalisation des sites (mobile et desktop) et applications selon les affinités de l’Utilisateur ;</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Consentement du Client</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Mesure de fréquentation des sites (mobile et desktop) et applications mobiles ;</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Exception au consentement pour les personnes déjà clientes de La Société et qui sont contactées pour des produits et services analogues</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Mise à disposition d’outils de partage sur les réseaux sociaux&nbsp;;</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime de La Société pour les opérations d’identification du Client en ligne (onboarding) (sous réserve de l’absence d’opposition du Client auprès de La Société</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Mise en place de jeux concours et publicitaires ;</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; vertical-align: top;">Consentement du Client au dépôt des cookies / tags pour l’affichage des publicités</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Partage d’informations avec des partenaires commerciaux (listés plus bas)</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime pour les envois de prospection sur support papier (sous réserve de l’absence d’opposition du Client auprès de La Société)</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Enrichissement de la base de données clients auprès de partenaires tiers</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Consentement du Client</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Sécurité des sites internet et des applications mobiles</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime de La Société de faire des offres promotionnelles</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Accessibilité du site internet pour les personnes ayant un handicap</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Exécution du contrat passé entre un Client et La Société</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">Transmission de données aux autorités administratives et aux forces de l’ordre</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Consentement du Client pour les opérations à des fins de prospection par voie électronique par des partenaires</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-right: 1px solid black;"></td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime de La Société pour les opérations de prospection de partenaires par voie postale ou par téléphone) (sous réserve de l’absence d’opposition du Client auprès de La Société)</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-right: 1px solid black;"></td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime de La Société de disposer de données exactes et mises à jour et d’améliorer la connaissance Client</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-right: 1px solid black;"></td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Intérêt légitime de La Société d’assurer la sécurité et la confidentialité des données traitées</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-right: 1px solid black;"></td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-bottom: 1px solid black;">Obligation légale issue du décret n° 2019-768 du 24 juillet 2019 relatif à l'accessibilité aux personnes handicapées des services de communication au public en ligne</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center; border-right: 1px solid black;"></td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Obligations légales / Réquisitions judiciaires et administratives</td>
            </tr>
         </table>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleThree">3. ORIGINE DES DONNEES COLLECTEES PAR LA SOCIÉTÉ</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <p class="font-m">La Société collecte les données directement auprès de ses Clients/Utilisateurs lors de l’utilisation de ses sites internet (création du compte, navigation, contact avec les équipes de la Société…)</p>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleFour">4. A QUI VOS DONNÉES SONT ELLES TRANSMISES ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <p class="font-m">Vos données sont transmises à des partenaires de La Société qui peuvent traiter les données pour leur compte (ce sont des destinataires) ou uniquement pour le compte et selon les instructions de La Société (ce sont des sous-traitants).</p>
         <h3 class="font-m">4.1. Les Destinataires de données de La Société</h3>
         <p class="font-m">Les destinataires des données sont :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>Les autorités de police dans le cadre des réquisitions judiciaires concernant la lutte contre la fraude</li>
            <li class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
               <p>Les partenaires commerciaux et les régies marketing et publicitaires :</p>
               <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
                  <li>
                     Les catégories de partenaires permettant à La Société d’afficher ses offres commerciales sont :
                     <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
                        <li>
                           Sociétés d’Affiliation marketing, et en particulier la société « HUBSPOT » dont la politique de confidentialité est accessible ici :
                           <div style="font-size: 20px; overflow-wrap: break-word;"> https://legal.hubspot.com/fr/privacy-policy?_conv_v=vi%3A1*sc%3A2*cs%3A1676998919*fs%3A1673279803*pv%3A3*seg%3A%7B10031564.1%7D*exp%3A%7B100330256.%7Bv.1003131869-g.%7B%7D%7D-100332110.%7Bv.1003136471-g.%7B%7D%7D%7D*ps%3A1673279803&amp;_conv_s=si%3A2*sh%3A1676998919065-0.829061287909139*pv%3A1&amp;hubs_content=www.hubspot.fr/&amp;hubs_content-cta=Politique%20de%20confidentialit%C3%A9</div>
                        </li>
                        <li>Réseaux sociaux (Facebook ; Pinterest ; Instagram)</li>
                        <li>Régies marketing et publicitaires (ex:Google Ads)</li>
                     </ul>
                  </li>
               </ul>
            </li>
         </ul>
         <h3 class="font-m">4.2. Les sous-traitants de La Société</h3>
         <p class="font-m">La Société fait également appel à des sous-traitants pour les opérations suivantes :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>la lutte contre la fraude et le recouvrement des impayés</li>
            <li>La gestion des appels téléphoniques, leurs enregistrements éventuels et l’envoi de courriers postaux</li>
            <li>La personnalisation des contenus des sites et applications mobile</li>
            <li>La réalisation d’opérations de maintenance et de développement techniques du site internet, des applications interne et du système d’information La Société.</li>
            <li>Le recueil des avis clients</li>
            <li>L’expédition des emails de prospection commerciale et des notifications mobiles</li>
         </ul>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleFive">5. QUELS SONT MES DROITS SUR LES DONNÉES</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <h3 class="font-m">5.1. Quels sont mes droits ?</h3>
         <p class="font-m">Toute personne peut exercer les droits suivants auprès de la Société :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>Un droits d’accès</li>
            <li>Un droit de rectification,</li>
            <li>Un droit d’opposition et d’effacement au traitement de ses données</li>
            <li>Un droit d’opposition au profilage</li>
            <li>Un droit à la limitation du traitement,</li>
            <li>Un droit à la portabilité de ses données</li>
            <li>Un droit au retrait de son consentement.</li>
         </ul>
         <h3 class="font-m">5.2. Comment les exercer ?</h3>
         <p class="font-m">Ces droits peuvent être exercés auprès de La Société qui a collecté les données à caractère personnel de la manière suivante :</p>
         <p class="font-m">Par voie postale, en nous écrivant à l’adresse suivante :</p>
         <p class="font-m"><b>FLEX IN USE</b> société par actions simplifiée au capital de 1.800 €, immatriculée au RCS de Paris sous le numéro 893 340 125 et ayant son siège social au 25 rue de Ponthieu à 75008 Paris adresse mail : info@flexinuse.fr</p>
         <p class="font-m">La demande doit être accompagnée d’un justificatif d’identité.</p>
         <p class="font-m">La Société adresse une réponse dans un délai d’1 mois après l’exercice du droit. Dans certains cas, liés à la complexité de la demande ou du nombre de demande, ce délai peut être prolongé de 2 mois.</p>
         <h3 class="font-m">5.3. Quelles sont les conséquences de l’exercice du droit d’opposition au profilage ? </h3>
         <p class="font-m">En cas de l’exercice d’un droit d’opposition au profilage marketing, l’utilisateur est informé qu’il continuera à recevoir des sollicitations commerciales mais celles-ci seront moins pertinentes et ne seront plus ciblées selon ses centres d’intérêts de la personne.</p>
         <h3 class="font-m">5.4. Que faire ensuite ?</h3>
         <p class="font-m">En cas de non réponse ou de réponse non satisfaisante, la personne concernée a la faculté de saisir l’autorité de contrôle de son pays de résidence :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>En France, la CNIL :<a class="font-m" href="https://www.cnil.fr/" style="font-family: Abril-Text;">https://www.cnil.fr/</a></li>
         </ul>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleSix">6. QUEL EST LE SORT DE MES DONNÉES APRES MON DÉCÈS ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <p class="font-m">L’Utilisateur peut formuler des directives relatives à la conservation, à l'effacement et à la communication de ses données à caractère personnel après son décès conformément à l’article 40-1 de la loi 78-17 du 6 janvier 1978. Ces directives peuvent être générales ou particulières.</p>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleSeven">7. MES DONNÉES SONT ELLE ENVOYÉES HORS DE L’UE ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <p class="font-m">Vous êtes informé que des données à caractère personnel vous concernant peuvent être transmises pour les besoins des finalités définies ci-dessus à des sociétés situées dans des pays hors de l’Union Européenne et ne présentant pas un niveau de protection adéquat en ce qui concerne la protection des données personnelles.</p>
         <p class="font-m">Préalablement au transfert hors Union Européenne, et conformément à la règlementation en vigueur, la Société mets en œuvre toutes les procédures requises pour obtenir les garanties nécessaires à la sécurisation de tels transferts.</p>
         <p class="font-m">Des transferts hors Union Européenne peuvent être réalisés notamment dans le cadre des activités suivantes :</p>
         <table style="border: 1px solid;" class="font-xs">
            <tr>
               <th style="padding-left: 2%; padding-right: 2%;">Activité</th>
               <th style="padding-left: 2%; padding-right: 2%;">Pays de destination des données</th>
               <th style="padding-left: 2%; padding-right: 2%;">Encadrement du transfert de données</th>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Exploitation des données vers les réseaux sociaux</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Etats-Unis</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Clauses contractuelles types</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Suivi de la navigation</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Etats-Unis </td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Clauses contractuelles types</td>
            </tr>
            <tr>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Marketing HUBSPOT</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Etats-Unis</td>
               <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Clauses contractuelles types</td>
            </tr>
         </table>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleEight">8. COMBIEN DE TEMPS MES DONNÉES SONT-ELLES CONSERVEES ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <p class="font-m">La Société a déterminé des règles précises concernant la durée de conservation des données à caractère personnel des Utilisateurs.</p>
         <h3 class="font-m">8.1. Règles générales concernant la gestion de la relation commerciale : </h3>
         <p class="font-m">Les données des clients et des prospects sont conservées pendant une durée de 3 ans. Le point de départ de la durée de conservation constitue la dernière activation de son compte par le Client sur le Site.</p>
         <h3 class="font-m">8.2. Règles spécifiques concernant certains traitements de données : </h3>
         <p class="font-m">Pour certains types de traitement, la conservation des données fait l’objet de durées de conservation spécifiques.</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>Les consignes concernant la lutte contre la fraude sont conservées 5 ans.</li>
            <li>Les factures liés aux achats sont conservées 5 ans.</li>
         </ul>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleNine">9. QUELLES MESURES DE SÉCURITÉ SONT PRISES POUR PROTÉGER MES DONNÉES ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <h3 class="font-m">9.1. Règles générales </h3>
         <p class="font-m">En tant que responsable de traitement, La Société, prend toutes les précautions utiles pour préserver la sécurité et la confidentialité des données et notamment, empêcher qu’elles soient déformées, endommagées, ou que des tiers non autorisés y aient accès.</p>
         <p class="font-m">La Société a déployé un système de sécurité robuste afin d’assurer une sécurité effective des données collectées et de détecter les violations de données. Cela inclut la sécurité physique des bâtiments abritant les systèmes sur lesquels sont hébergées les données, la sécurité du système informatique pour empêcher l'accès externe à vos données, et le fait de disposer des copies sécurisées de vos données. Lorsqu’elle recourt à des sous-traitants, La Société s’assure du respect par ceux-ci des règles liées à la protection des données.</p>
         <p class="font-m">Enfin, lorsque La Société détecte une violation de données à caractère personnel susceptible d’engendrer un risque élevé pour vos droits et libertés, vous serez informé de cette violation dans les meilleurs délais.</p>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleTen">10. QUE FAUT-IL SAVOIR DES DONNÉES COLLECTEES PAR LES RÉSEAUX SOCIAUX ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <p class="font-m">La Société vous propose de recourir aux réseaux sociaux pour améliorer la relation commerciale (ex : Facebook messenger), partager des contenus ( ex : les boutons « partager » de Facebook, Instagram ou Twitter), vous proposer des offres publicitaires ciblées sur ces réseaux (ex : Facebook Custom Audience ou Pinterest) ou vous permettre une authentification simplifiée au moyen d’un social connect (ex : Facebook connect).</p>
         <p class="font-m">L’utilisation des réseaux sociaux pour interagir avec La Société est susceptible d’entrainer des échanges de données entre La Société et ces réseaux sociaux.</p>
         <p class="font-m">Par exemple, si vous êtes connecté au réseau social Facebook sur votre ordinateur et que vous consultez une page du site de La Société, Facebook est susceptible de collecter cette information. De même, si vous cliquez sur le bouton « tweeter » sur une page du site La Société, twitter collectera cette information.</p>
         <p class="font-m">Sur Instagram, lorsque que vous exprimez votre consentement au moyen du hastag « #fiu » ou « #flexinuse », vous consentez à ce que La Société traite les informations de votre post (commentaire et/ ou photo ) à des fins promotionnelles et marketing.</p>
         <p class="font-m">La Société vous invite à consulter les politiques de gestion des données personnelles des différents réseaux sociaux pour avoir connaissance des données personnelles pouvant être transmises par ceux-ci.</p>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleEleven">11. DES DONNÉES SUR LES MINEURS DE MOINS DE 16 ANS SONT ELLES COLLECTEES ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <p class="font-m">Conformément aux conditions générales de vente, il est nécessaire d’avoir 18 ans pour créer un compte sur le Site de La Société.</p>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleTwelve">12. VAIS-JE RECEVOIR DES SOLLICITATIONS COMMERCIALES ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <h3 class="font-m">12.1. Principes applicables à La Société </h3>
         <p class="font-m">La Société utilise vos coordonnées pour vous adresser des publicités ciblées notamment par email, courrier postal, sms, notification sur smartphone ou sur navigateur internet, sur les réseaux sociaux ou des sites internet tiers.</p>
         <p class="font-m">Dans ce cadre, La Société s’engage à respecter les règles applicables à chaque canal de prospection.</p>
         <h3 class="font-m">12.2. Prospection par email et sms</h3>
         <p class="font-m">La Société respecte les règles édictées par la directive 2002/58/CE du 12 juillet 2002 qui prévoit le recueil préalable express du consentement de l’Utilisateur pour l’envoi de prospection commerciale par voie électronique (e-mail ou SMS).</p>
         <p class="font-m">Ainsi, lors de la création de votre compte sur le site, il vous est expressément demandé votre consentement :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>pour recevoir des offres de La Société par email </li>
            <li>pour recevoir des offres des partenaires de La Société auxquels vos coordonnées seraient transmises </li>
            <li>pour recevoir des offres de La Société par sms </li>
         </ul>
         <p class="font-m">La Société ne vous adressera pas de sollicitations personnalisées par email ou sms si vous n’y avez pas consenti.</p>
         <p class="font-m">Il existe une exception dans l’hypothèse où l’Utilisateur, sans avoir donné son consentement préalable, peut cependant être démarché dès lors qu’il est déjà client de La Société et que l’objet de la prospection est de proposer des produits ou services analogues.</p>
         <p class="font-m">Dans tous les cas, l’Utilisateur a la possibilité de s’opposer à la réception de ces sollicitions en effectuant les actions suivantes :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>Lors de la création du compte, cocher à « non » les cases liées à la prospection ; </li>
            <li>Pour l’email, en  cliquant sur le lien de désabonnement prévu dans chaque email ou en se rendant sur son compte dans la rubrique newsletter ; </li>
            <li>Pour le sms, en envoyant un stop SMS au numéro indiqué dans celui-ci ou en se rendant sur son compte dans la rubrique newsletter ; </li>
            <li>En se connectant sur son compte La Société et en accédant aux préférences de communication lui permettant de gérer ses abonnements ; </li>
            <li>En contactant le service client ou le délégué à la protection des données. </li>
         </ul>
         <h3 class="font-m">12.3. Affichage de publicités digitales personnalisées </h3>
         <p class="font-m">Un visiteurs des sites La Société est susceptible de voir des publicités pour les produits et services de la Société sur des sites tiers ou des réseaux sociaux (Facebook ; Instagram . Pinterest).</p>
         <p class="font-m">L’affichage de publicités sur les réseaux sociaux est effectué au moyen des critères de ciblage proposé par ces plateformes. La Société peut également transmettre certaines données pseudonymisées (ex : email hashé) pour améliorer le ciblage.</p>
         <p class="font-m">Si vous ne souhaitez pas faire l’objet de ce type de traitement, il convient de refuser les cookies et tags publicitaires sur le site de La Société et sur les sites tiers.</p>
         <p class="font-m">Vous pouvez également paramétrer l’affichage des publicités personnalisées dans les préférences de confidentialité des réseaux sociaux.</p>
         <p class="font-m">Vous pouvez vous opposer à ce type de traitement en consultant l’article ci-dessous dédié aux cookies.</p>
         <h3 class="font-m">12.4. Notifications sur les applications mobiles et sur les navigateurs internet</h3>
         <p class="font-m">Lors de la première visite sur le site La Société ou lors de l’ouverture de l’application mobile La Société sur votre smartphone, vous devez donner l’autorisation à la réception de notifications mobiles ou « Push ».</p>
         <h3 class="font-m">12.5. Prospection commerciale par téléphone </h3>
         <p class="font-m">La Société a la possibilité de vous contacter par téléphone pour vous proposer des offres sur des produits ou services. Vos coordonnées téléphoniques peuvent également être transmises à des partenaires de La Société (liste des partenaires au 3.1 de la présente politique). Si vous ne souhaitez pas être sollicité, vous avez la possibilité de vous inscrire sur la liste d’opposition au démarchage téléphonique accessible sur le site www.bloctel.gouv.fr ou d’exercer votre droit d’opposition auprès de La Société.</p>
         <h3 class="font-m">12.6. Prospection commerciale par voie postale </h3>
         <p class="font-m">La Société ou ses partenaires peuvent vous adresser des sollicitations par voie postale. Vous pouvez vous y opposer à tout moment en exerçant votre droit d’opposition conformément au point 4 de la présente politique de protection des données.</p>
      </div>
      <h2 class="bigTitleCoworking font-m" id="titleThirteen">13. EST-CE QUE LA SOCIÉTÉ UTILISE DES COOKIES, TAGS ET TRACEURS</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <p class="font-m">Lors de l’utilisation de notre Service, des informations relatives à la navigation de votre terminal (ordinateur, tablette, smartphone, etc.), sont susceptibles d'être enregistrées dans des fichiers "Cookies" déposés sur votre terminal, sous réserve des choix que vous auriez exprimés concernant les Cookies et que vous pouvez modifier à tout moment.</p>
         <h3 class="font-m">13.1. QU’EST-CE QU’UN COOKIE ?</h3>
         <p class="font-m">Le terme cookie englobe plusieurs technologies permettant d’opérer un suivi de navigation ou une analyse comportementale de l’internaute. Ces technologies sont multiples et en constante évolution. Il existe notamment, les cookies, tag, pixel, code Javascript.</p>
         <p class="font-m">Le cookie est un petit fichier texte enregistré par le navigateur de votre ordinateur, tablette ou smartphone et qui permet de conserver des données utilisateur afin de faciliter la navigation et de permettre certaines fonctionnalités.</p>
         <p class="font-m">Il existe deux types de cookies :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>les cookies first party, déposés par La Société pour les besoins de la navigation et du fonctionnement du site ; </li>
            <li>des cookies third party déposés par des sociétés partenaires tierces afin d’identifier vos centres d’intérêt et de vous adresser des offres personnalisées. Ces cookies third party sont directement gérés par les sociétés qui les éditent et qui doivent également respecter la règlementation sur la protection des données. </li>
         </ul>
         <p class="font-m">Le cookie est enregistré sur votre ordinateur lorsque vous consultez le site internet de La Société ou lorsque vous consultez un email de La Société.</p>
         <h3 class="font-m">13.2. POUR QUELLES RAISONS DES COOKIES, TAGS ET TRACEURS SONT UTILISES ? </h3>
         <p class="font-m"><u>Les Cookies que La Société émet sur le site et l’application mobile nous permettent :</u></p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>d'établir des statistiques et volumes de fréquentation et d'utilisation des diverses éléments composant nos services. A ce titre, nous avons recours à des cookies de mesure d’audience. </li>
            <li>d'adapter la présentation de notre Site selon le terminal utilisé; </li>
            <li>d’adapter la présentation de notre Site selon les affinités de chaque utilisateur ;</li>
            <li>de mémoriser des informations relatives à un formulaire que vous avez rempli sur notre Site (inscription ou accès à votre compte, service souscrit, etc.) ;</li>
            <li>de vous permettre d'accéder à des espaces réservés et personnels de notre Site, tels que votre compte, grâce à des identifiants ;</li>
            <li>de mettre en œuvre des mesures de sécurité, par exemple lorsqu’il vous est demandé de vous connecter à nouveau à votre compte après un certain laps de temps ;</li>
            <li>partager des informations avec des annonceurs sur d’autres sites internet pour vos proposer des annonces publicitaires pertinentes et en adéquation avec vos centres d’intérêts. A ce titre, nous avons recours à des cookies publicitaires ;</li>
            <li>partager des informations sur les réseaux sociaux. A ce titre, nous avons recours à des cookies permettant de partager sur ces réseaux ;</li>
            <li>de disposer de statistiques de délivrabilité, d’ouverture et de lecture des newsletters adressées par email.</li>
         </ul>
         <h3 class="font-m">13.3. QUELS SONT LES COOKIES UTILISES SUR LES SERVICES DE LA SOCIÉTÉ </h3>
         <p class="font-m">L’article 82 de la loi informatique et libertés prévoit le recueil préalable du consentement explicite de l’Utilisateur au dépôt des cookies sur le terminal d’un utilisateur. Ce même article prévoit cependant que certains cookies sont exonérés de consentement lorsque ils ont (1) pour finalité exclusive de permettre ou faciliter la communication par voie électronique (2) sont strictement nécessaires à la fourniture d’un service de communication en ligne à la demande expresse de l’utilisateur.</p>
         <h3 class="font-m">13.4. Liste des cookies utilisés nécessitant un consentement de l’Utilisateur </h3>
         <p class="font-m">Les cookies nécessitant un consentement sont utilisés pour les finalités suivantes :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>La personnalisation du site et de l’applications le profil de l’utilisateur ;- La fréquentation du site ; </li>
            <li>Le partage de données avec les réseaux sociaux pour les fonctionnalités sociales (facebook connect ; bouton partage …) ; </li>
            <li>L’affichage de publicités personnalisées sur le site de La Société et des sites tiers et la mesure de performance.</li>
         </ul>
         <h3 class="font-m">13.5. Liste des cookies utilisés exemptés du consentement de l’Utilisateur</h3>
         <h3 class="font-m">13.5.1 Cookies déposés des le chargement du site internet et avant tout consentement</h3>
         <div style="overflow-x: auto;">
            <table style="border: 1px solid; border-collapse: collapse;" class="font-xs">
               <tr style="border: 1px solid;">
                  <th style="padding-left: 2%; padding-right: 2%;">Nom du cookie</th>
                  <th style="padding-left: 2%; padding-right: 2%;">Emetteur</th>
                  <th style="padding-left: 2%; padding-right: 2%;">Finalité du Cookie</th>
                  <th>Justification d’exemption</th>
               </tr>
               <tr>
                  <td style="text-align: center;">Aa_lastcampaign</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Adobe Analytics</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Mesure d’audience Adobe Analytics : Donne le dernier horodatage lorsque le navigateur a visité le site web. Permet de mesure de l’audience, page par page et de lister les pages à partir desquelles un lien a été suivi pour demander la page courante (parfois nommé « referrer ») que ce soit interne ou externe au site, par page et agrégée de manière journalière.</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Mesure d’audience exemptée.</td>
               </tr>
               <tr style="border: 1px solid black;">
                  <td style="text-align: center;">aa_lastTimeStamp</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Adobe Analytics</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Mesure d’audience Adobe Analytics. Permet de mesure de l’audience, page par page et de lister les pages à partir desquelles un lien a été suivi pour demander la page courante (parfois nommé « referrer ») que ce soit interne ou externe au site, par page et agrégée de manière journalière.</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Mesure d’audience exemptée.</td>
               </tr>
               <tr>
                  <td style="text-align: center;">TC_PRIVACY</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Trust Commander </td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Le cookie TC_PRIVACY est posé dès qu’un utilisateur donne explicitement ou non son consentement : soit en interagissant avec la bannière de Privacy (ex : clic sur le bouton « j’accepte les cookies »), soit en continuant la navigation sur le site, soit en fonction de configurations personnalisées (scroll ou clic sur la page d’arrivée par exemple).</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Traceurs conservant le choix exprimé par les utilisateurs sur le dépôt de traceurs”</td>
               </tr>
            </table>
         </div>
         <h3 class="font-m">14.5.2 Cookies supplémentaires déposés aprés le refus de l'internaute ayant cliquer sur "continuer sans accepter"</h3>
         <div style="overflow-x: auto;">
            <table style="border: 1px solid; border-collapse: collapse;" class="font-xs">
               <tr>
                  <th style="padding-left: 2%; padding-right: 2%;">Nom du cookie</th>
                  <th style="padding-left: 2%; padding-right: 2%;">Emetteur</th>
                  <th style="padding-left: 2%; padding-right: 2%;">Finalité du Cookie</th>
                  <th>Justification d’exemption</th>
               </tr>
               <tr>
                  <td style="text-align: center;">TC_PRIVACY</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Trust Commander </td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Le cookie TC_PRIVACY est posé dès qu’un utilisateur donne explicitement ou non son consentement : soit en interagissant avec la bannière de Privacy (ex : clic sur le bouton « j’accepte les cookies »), soit en continuant la navigation sur le site, soit en fonction de configurations personnalisées (scroll ou clic sur la page d’arrivée par exemple).</td>
                  <td style="padding-left: 2%; padding-right: 2%; text-align: center;">Traceurs conservant le choix exprimé par les utilisateurs sur le dépôt de traceurs”</td>
               </tr>
            </table>
         </div>
         <h3 class="font-m">14.6. COMMENT PARAMETRER LE DEPOT DES COOKIES, TAGS ET TRACEURS ?</h3>
         <p class="font-m">Vous pouvez faire le choix à tout moment d'exprimer et de modifier vos souhaits en matière de cookies, par les moyens décrits ci-dessous.</p>
         <h3 class="font-m">14.6.1. Paramétrage des cookies avec un outil proposé par La Société</h3>
         <p class="font-m">Afin de se conformer à la règlementation, la Société utilise un outil permettant à l’internaute de paramétrer le dépôt des cookies lors de sa connexion sur le site www.flexinuse.fr ou sur l’application mobile.</p>
         <h3 class="font-m">14.6.2. Paramétrage de votre logiciel de navigation</h3>
         <p class="font-m">Vous pouvez configurer votre logiciel de navigation de manière à ce que des cookies soient enregistrés dans votre terminal ou, au contraire, qu'ils soient rejetés, soit systématiquement, soit selon leur émetteur. Vous pouvez également configurer votre logiciel de navigation de manière à ce que l'acceptation ou le refus des cookies vous soient proposés ponctuellement, avant qu'un cookie soit susceptible d'être enregistré dans votre terminal.</p>
         <h3 class="font-m">14.6.3. Paramétrage du système d’exploitation de votre smartphone</h3>
         <p class="font-m">Vous avez la possibilité de contrôler le dépôt des Cookies sur votre smartphone dans les règles du système d’exploitation.</p>
      </div>
      <h2 id="titleFithteen" class="font-m">15. COMMENT CONTACTER LA SOCIÉTÉ ?</h2>
      <div style="padding-left: 5%; padding-right: 5%;">
         <p class="font-m">Vous avez la possibilité de contacter La Société :</p>
         <p class="font-m"><b>FLEX IN USE</b> société par actions simplifiée au capital de 1.800 €, immatriculée au RCS de Paris sous le numéro 893 340 125 et ayant son siège social au 25 rue de Ponthieu à 75008 Paris</p>
         <p class="font-m">adresse mail : info@flexinuse.fr</p>
         <p class="font-m">Pour mieux connaître vos droits, rendez-vous sur le site de votre autorité de contrôle :</p>
         <ul class="font-m" style="gap: 15px; display: flex; flex-direction: column;">
            <li>En France, la CNIL :<a class="font-m" href="https://www.cnil.fr/" style="font-family: Abril-Text;">https://www.cnil.fr/</a></li>
         </ul>
      </div>
   </div>
</div>

@endsection

@section('scripts')
<script>
  //handleClick
  function handleClick(event) {
    let originalArrayMenuItemCluster = document.getElementsByClassName('item')
    let convertedArrayCluster = Array.from(originalArrayMenuItemCluster)

    convertedArrayCluster.map(value => value.classList.remove('black-li-cluster'))

    //event.currentTarget.classList.toggle('black-li-cluster')
    event.classList.toggle('black-li-cluster')
  }
</script>
@endsection