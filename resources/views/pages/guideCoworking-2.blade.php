@extends('layouts.defaultFiu')
<!-- ecran = guideDuCoworking.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('content')

<div class="flex-wrap-row bloc-one-rse" style="margin-top:90px">
   <div class="items-center justify-content-center col-6" style="position:relative">
      <!--<div class="boxRadiusTopLeft"> -->
            <img
              alt="plusieurs personnes qui marche devant l'entrée du bâtiment"
              src="{{ asset('assets/img/coworking-paris.png')}}"
              class="object-center object-cover pointer-events-none boxRadiusTopLeft"
              style="object-fit:cover;object-position:center;width:100%;height:100%;"
            />
      <!--</div> -->
   </div>
   <div class="col-6 items-center justify-content-center" style="background-color:#FFF6F0;position:relative">
      <div style="color:white;z-index:1;text-align:center">
         <h1 style="font-family:Azo-Sans-Uber;color:black;line-height:1" class="font-l"><span style="display:block;text-align:left">Le guide</span><span style="display:block;text-align:left">du coworking :</span><span style="display:block;text-align:left">ce qu'il faut</span><span style="display:block;text-align:left">savoir</span></h1>
      </div>
      <div style="position:absolute;top:1%;left:5%" class="width-emoji-redirectCTA">
         <img src="{{ asset('assets/img/perso-5.png')}}" height="80%" width="80%" />
      </div>
      <div style="position:absolute;bottom:0;right:5%;rotate:-9deg" class="width-emoji-redirectCTA">
         <img src="{{ asset('assets/img/Persos-18.png')}}" width="100%" height="100%" />
      </div>
   </div>
</div>
<div class="flex-wrap-row" style="height:100%">
   <div class="col-10 marginContentCoworking">
      <h2 class="fontSubTitle" id="histoire-coworking" style="padding-top:1.7%">L’histoire du coworking</h2>
      <div style="padding-left:5%;padding-right:5%">
         <h3 class="font-m-whoAreWe">Une nouvelle approche des bureaux</h3>
         <p class="font-m-whoAreWe">C’est à Berlin en 1995, l’ouverture du C-base marque le début d’une approche novatrice de l’aménagement des bureaux. Initialement appelé “hackerspace”, son concept visait à rassembler des passionnés de la technologie afin qu’ils puissent collaborer et partager leurs idées dans un environnement ouvert flexible. Jusque là sans nom officiel, c’est en 1999 que Bernie de Koven, créateur de jeu et écrivain américain, décide de conceptualiser cette nouvelle manière de travailler et lui donne le nom de “coworking”.</p>
         <h3 class="font-m-whoAreWe">La Silicon Valley amplifie la tendance du coworking</h3>
         <p class="font-m-whoAreWe">C’est en 2005 dans la Silicon Valley que le premier espace de coworking ouvre ses portes. Ce nouveau mode de travail rompt avec la froideur et l’impersonnalité des bureaux traditionnels et devient vite populaire. Le coworking attire et gagne peu à peu le monde entier. C’est en 2008 que l’association Silicon Sentier ouvre “La cantine”, premier espace de coworking français à Paris.</p>
      </div>
   </div>
   <div class="flex-wrap-row wd-100 bg-violet boxRadiusTopLeft" style="padding-left:8%;padding-top:2%;min-height:463px;padding-bottom:3%;position:relative;background-color:rgb(246, 206, 222)">
      <div class="col-9">
         <h3 class="font-m-whoAreWe" style="margin-left:15%;margin-right:15%">Le coworking aujourd’hui</h3>
         <p class="font-m-whoAreWe" style="margin-left:15%;margin-right:15%">Le coworking est devenu une véritable révolution dans le monde du travail. Il offre une communauté dynamique où les idées fusionnent, les projets naissent et les collaborations fructueuses s'épanouissent. Cette approche collaborative répond aux besoins de travailleurs en quête de flexibilité, de liberté et d'opportunités de réseautage, définissant ainsi la notion traditionnelle de bureau. Le coworking, bien plus qu'une tendance, est une expérience professionnelle enrichissante et valorisante. Le marché du coworking s’est vu augmenter de       20% en 2022.</p>
      </div>
      <div class="col-3 items-center justify-content-center">
         <div style="z-index:0" class="emoji-today-coworking">
            <img src="{{ asset('assets/img/Persos-maquettes-9.png')}}" height="100%" width="100%" />
         </div>
      </div>
   </div>
   <div class="col-10 marginContentCoworking">
      <h2 class="fontSubTitle" id="avantage-coworking">Les avantages du coworking</h2>
      <div style="padding-left:5%;padding-right:5%">
         <p class="font-m-whoAreWe">Le coworking offre une multitude d'avantages, qui  séduisent de plus en plus d'entrepreneurs et de professionnels. Voici les cinq principaux avantages de travailler dans un espace de coworking :</p>
         <ul style="gap:15px;display:flex;flex-direction:column;list-style-type:none" class="font-m-whoAreWe">
            <li><b>Flexibilité :</b></li>
            <li>Les espaces de coworking proposent une variété d'options de location, allant des bureaux privés aux postes de travail partagés. Cette flexibilité permet aux entreprises de s'adapter facilement à leurs besoins en espace, que ce soit pour une équipe en croissance ou des besoins ponctuels de réunion.</li>
            <li><b>Réseau professionnel :</b></li>
            <li>Réseau professionnel : Travailler dans un espace de coworking vous donne l'opportunité de rencontrer des professionnels de différents secteurs, facilitant ainsi le réseautage et l'échange d'idées.</li>
            <li><b>Économies de coûts :</b></li>
            <li>Louer des bureaux traditionnels peut être très coûteux. Les espaces de coworking offrent une alternative abordable, car les charges sont partagées entre les occupants. Cela permet aux entreprises de réaliser des économies significatives tout en bénéficiant d'un environnement professionnel de haute qualité.</li>
            <li><b>Infrastructures et services :</b></li>
            <li>Les espaces de coworking sont équipés d'infrastructures modernes et de services pratiques tels que l'accès à Internet haut débit, des salles de réunion bien équipées, et des espaces de détente. Ces commodités améliorent la productivité et le confort des travailleurs.</li>
            <li><b>Ambiance créative :</b></li>
            <li>Les espaces de coworking reflètent cette atmosphère inspirante en offrant un environnement propice à la créativité et à l'innovation. Travailler dans un tel cadre peut stimuler la motivation et encourager les idées novatrices.</li>
         </ul>
      </div>
      <h2 class="fontSubTitle" id="avantage-coworking">Les différents types d'espaces de coworking</h2>
      <div style="padding-left:5%;padding-right:5%;margin-bottom:2.5%">
         <p class="font-m-whoAreWe">Le terme coworking peut prendre différentes formes d’espaces dans lequel les collaborateurs peuvent se retrouver :</p>
      </div>
   </div>
   <div class="flex-wrap-row wd-100">
      <div class="col-5 height-partImage-typeCoworking" style="position:relative">
            <img
              alt="plusieurs personnes qui marche devant l'entrée du bâtiment"
              src="{{ asset('assets/img/cafe-coworking.png')}}"
              class="object-center object-cover pointer-events-none"
              style="object-fit:cover;object-position:center;width:100%;height:100%;"
            />
      </div>
      <div class="col-7 marginTypeCoworkingContent-mobile">
         <div class="col-9 col-m-10 col-s-10" style="margin-left:8%">
            <h3 class="font-m-whoAreWe" style="margin-top:0">Le café coworking : </h3>
            <p class="font-m-whoAreWe">Le café coworking est une alternative  moderne et flexible pour les travailleurs indépendants, les freelances et les nomades numériques. Il permet aux individus de louer un poste de travail pour une durée adaptée à leurs besoins, que ce soit à l'heure ou à la journée. Ces cafés offrent une atmosphère conviviale et propice à la créativité, avec la possibilité de rencontrer d'autres professionnels et d'échanger des idées. Les forfaits flexibles permettent aux utilisateurs de payer uniquement pour le temps qu'ils utilisent, ce qui les rend plus abordables et pratiques que la location traditionnelle de bureaux.</p>
         </div>
      </div>
   </div>
   <div class="flex-wrap-row wd-100" style="margin-top:3%;flex-wrap:wrap-reverse">
      <div class="col-7 marginTypeCoworkingContent-mobile">
         <div class="col-9 col-m-10 col-s-10" style="margin-left:8%">
            <h3 class="font-m-whoAreWe" style="margin-top:0">Le coliving : </h3>
            <p class="font-m-whoAreWe">Le coliving est un concept novateur qui réunit le lieu de travail et le lieu de vie dans un même espace. Les colivings proposent à la fois des logements privés et des espaces de travail partagés. Les résidents peuvent vivre dans des appartements ou des chambres privées tout en bénéficiant d'accès à des bureaux et des équipements de travail. Ces espaces sont souvent dotés d'espaces communs où les personnes peuvent se rencontrer, échanger des idées et même se divertir ensemble. Les colivings favorisent une ambiance communautaire et stimulante, idéale pour les personnes souhaitant concilier travail et vie sociale.</p>
         </div>
      </div>
      <div class="col-5 height-partImage-typeCoworking" style="position:relative">
         <img
              alt="plusieurs personnes qui marche devant l'entrée du bâtiment"
              src="{{ asset('assets/img/espace-collectif-coworking-paris.png')}}"
              class="object-center object-cover pointer-events-none"
              style="object-fit:cover;object-position:center;width:100%;height:100%;"
         />
      </div>
   </div>
   <div class="flex-wrap-row wd-100" style="margin-top:3%">
      <div class="col-5 height-partImage-typeCoworking" style="position:relative">
         <img
              alt="plusieurs personnes qui marche devant l'entrée du bâtiment"
              src="{{ asset('assets/img/poste-de-travail-dedie-coworking-paris.png')}}"
              class="object-center object-cover pointer-events-none"
              style="object-fit:cover;object-position:center;width:100%;height:100%;"
         />
      </div>
      <div class="col-7 marginTypeCoworkingContent-mobile">
         <div class="col-9 col-m-10 col-s-10" style="margin-left:8%">
            <h3 class="font-m-whoAreWe" style="margin-top:0">Le centre d’affaires :</h3>
            <p class="font-m-whoAreWe">Le centre d'affaires est un espace professionnel entièrement équipé et géré par une entreprise spécialisée. Il propose une gamme complète de services pour répondre aux besoins des entreprises, des entrepreneurs et des travailleurs indépendants. Ces espaces fournissent des bureaux meublés, une connexion Internet haut débit, des imprimantes, des salles de réunion et parfois même des services de secrétariat. Les centres d'affaires offrent une solution clé en main pour les entreprises qui cherchent à s'installer rapidement sans avoir à gérer les aspects logistiques et administratifs liés à un bureau traditionnel.</p>
         </div>
      </div>
   </div>
   <div class="flex-wrap-row wd-100" style="margin-top:3%;flex-wrap:wrap-reverse">
      <div class="col-7 marginTypeCoworkingContent-mobile">
         <div class="col-9 col-m-10 col-s-10" style="margin-left:8%">
            <h3 class="font-m-whoAreWe" style="margin-top:0">Les ultra-premium :</h3>
            <p class="font-m-whoAreWe">Certains espaces de coworking se démarquent en proposant des installations ultra-premium et un niveau de service haut de gamme. Ces espaces visent à offrir une expérience exceptionnelle à leurs utilisateurs en mettant l'accent sur le bien-être et le confort. Ils fournissent des aménagements de qualité supérieure, des équipements de pointe, des espaces de détente et de relaxation, ainsi que des services personnalisés. Les utilisateurs des espaces ultra-premium peuvent bénéficier d'une atmosphère luxueuse et inspirante, ce qui en fait un choix privilégié pour ceux qui recherchent une expérience de coworking haut de gamme. Cependant, ces espaces premium peuvent être plus coûteux que les options standard de coworking en raison des prestations supplémentaires qu'ils offrent.</p>
         </div>
      </div>
      <div class="col-5 height-partImage-typeCoworking" style="position:relative">
         <img
              alt="plusieurs personnes qui marche devant l'entrée du bâtiment"
              src="{{ asset('assets/img/ultra-premium-coworking.png')}}"
              class="object-center object-cover pointer-events-none"
              style="object-fit:cover;object-position:center;width:100%;height:100%;"
         />
      </div>
   </div>
   <div class="col-10 marginContentCoworking">
      <div style="padding-left:5%;padding-right:5%">
         <p class="font-m-whoAreWe">Dans un espace de coworking, le contrat le plus courant est le  contrat de prestation de service. Ce contrat établit une relation formelle entre le coworker et le gestionnaire de l'espace. Il stipule les services offerts par l'espace de coworking, tels que l'accès aux bureaux partagés, aux salles de réunion, à l'internet haut débit, et éventuellement à des services complémentaires comme l'impression et la fourniture de café. Le contrat de prestation de service fixe également les conditions financières. En signant ce contrat, les coworkers s'engagent à respecter les règles internes de l'espace, à maintenir un environnement de travail convivial, et à contribuer à l'esprit de collaboration propre au coworking.</p>
      </div>
   </div>
   <div class="col-10 marginContentCoworking">
      <h2 class="fontSubTitle" id="histoire-coworking" style="padding-top:1.7%">Le coworking, oui mais pour qui ?</h2>
      <div style="padding-left:5%;padding-right:5%">
         <p class="font-m-whoAreWe">Le coworking est devenu une option privilégiée pour une variété d'entreprises, qu'elles soient de petite, moyenne ou grande envergure.</p>
         <p class="font-m-whoAreWe">Les PME, en quête de flexibilité et d'optimisation de leurs ressources, trouvent dans le coworking une solution idéale. Ces entreprises peuvent ainsi éviter les contraintes liées aux baux commerciaux à long terme et bénéficier d'un environnement professionnel fonctionnel et inspirant. En optant pour le coworking, elles accèdent à des espaces de travail bien équipés, propices au développement de leur activité, tout en intégrant une communauté de professionnels dynamique qui favorise l'échange et le partage d'expériences.</p>
         <p class="font-m-whoAreWe">De leur côté, les grands groupes ont également été séduits par les avantages du coworking. Ces entreprises établies cherchent souvent à encourager la créativité et l'innovation au sein de leurs équipes. En investissant dans des espaces de coworking, elles permettent à leurs collaborateurs de sortir de leur environnement habituel et de se connecter avec d'autres professionnels aux compétences variées. Le coworking devient alors un moyen de créer des hubs d'innovation au cœur de l'écosystème entrepreneurial, facilitant ainsi le développement de projets novateurs et l'exploration de nouvelles opportunités de croissance.</p>
         <p class="font-m-whoAreWe">Quant aux start-ups, elles trouvent dans le coworking une plateforme idéale pour démarrer leurs activités avec souplesse et sans lourds investissements. Ces jeunes entreprises en phase de croissance peuvent ainsi éviter les coûts fixes liés à la location de bureaux traditionnels, leur permettant de se concentrer pleinement sur le développement de leur produit ou service. Le coworking offre également un environnement propice au networking, essentiel pour ces start-ups en quête de partenariats stratégiques et de financements.</p>
      </div>
   </div>
   <div class="col-10 marginContentCoworking">
      <h2 class="fontSubTitle" id="histoire-coworking" style="padding-top:1.7%">Les prestations qu'offre le coworking</h2>
      <div style="padding-left:5%;padding-right:5%">
         <p class="font-m-whoAreWe">Le coworking offre de nombreux  services  qui peuvent être choisis en fonction des besoins de chaque entreprise. Le bénéfice pour l’entreprise est que tout est inclus en un seul contrat. C’est un gain de temps et d’énergie pour les entreprises qui n’ont plus besoin de faire appel à différents prestataires. Voici les prestations les plus demandées qu’offre le coworking :</p>
         <ul style="gap:15px;display:flex;flex-direction:column;list-style-type:square" class="font-m-whoAreWe">
            <li>vidéoprojecteur et paperboard mis à disposition dans les salles de réunions</li>
            <li>un espace de restauration entièrement équipé (frigo, micro-ondes, foodtruck…)</li>
            <li>des espaces détentes (mobilier, café, jeux…)</li>
            <li>un service de téléphonie </li>
            <li>des services annexes (accueil, salle de sport, ménage, pressing…)</li>
         </ul>
      </div>
   </div>
   <div class="col-10" style="margin-left:15%;margin-right:15%;position:relative;height:80vh">
      <img
              alt="plusieurs personnes qui marche devant l'entrée du bâtiment"
              src="{{ asset('assets/img/amenagement-bureau-prive-coworking-paris.png')}}"
              class="object-center object-cover pointer-events-none"
              style="object-fit:cover;object-position:center;width:100%;height:100%;"
      />
   </div>
   <div class="col-10 marginContentCoworking">
      <h2 class="fontSubTitle" id="histoire-coworking" style="padding-top:1.7%">Comment choisir son espace de coworking ?</h2>
      <div style="padding-left:5%;padding-right:5%">
         <p class="font-m-whoAreWe">Choisir le bon espace de coworking est une décision importante qui peut influencer considérablement votre expérience professionnelle. Pour trouver l'espace idéal qui correspond à vos besoins et à votre style de travail, voici quelques conseils pratiques à prendre en compte.</p>
         <p class="font-m-whoAreWe">Tout d'abord, évaluez vos besoins spécifiques. Réfléchissez à la taille de l'équipe, à vos équipements essentiels, et aux services dont vous avez besoin au quotidien. Cherchez un espace qui offre la flexibilité nécessaire pour s'adapter à l'évolution de votre entreprise, que ce soit pour agrandir ou réduire votre espace de travail.</p>
         <p class="font-m-whoAreWe">Ensuite, observez l'emplacement de l'espace de coworking. Optez pour un lieu facilement accessible et bien desservi par les transports en commun, afin de faciliter vos déplacements quotidiens. La proximité de restaurants, cafés, et commerces est également un avantage pour vos pauses et vos moments de détente.</p>
         <p class="font-m-whoAreWe">Assurez-vous de visiter l'espace de coworking en personne. Cela vous permettra d'évaluer l'ambiance générale, l'aménagement des bureaux, et la convivialité de la communauté présente. Ressentez l'énergie du lieu et voyez si cela correspond à l'atmosphère de travail que vous recherchez.</p>
         <p class="font-m-whoAreWe">N'oubliez pas de prendre en compte les services et les équipements proposés par l'espace de coworking. Des connexions Internet rapides et stables sont essentielles pour une productivité optimale. Vérifiez aussi la disponibilité de salles de réunion bien équipées si vous en avez besoin régulièrement.</p>
         <p class="font-m-whoAreWe">Enfin, comparez les tarifs et les formules d'abonnement proposées par différents espaces de coworking. Trouvez un équilibre entre vos besoins, votre budget et les avantages offerts par chaque espace.</p>
         <p class="font-m-whoAreWe">En prenant en compte ces éléments, vous serez en mesure de choisir un espace de coworking qui répondra parfaitement à vos attentes, vous permettant ainsi de travailler dans un environnement épanouissant et collaboratif.</p>
      </div>
   </div>
   <div class="col-10" style="margin-left:15%;margin-right:15%;position:relative;height:80vh">
      <div>
         <span style="box-sizing:border-box;display:block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:absolute;top:0;left:0;bottom:0;right:0">
            <img alt="espace coworking paris" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="fill" class="object-center object-cover pointer-events-none" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%;object-fit:cover;object-position:center">
            <noscript><img alt="espace coworking paris" sizes="100vw" srcSet="/_next/image?url=%2F_bureau-privatif-coworking-paris.jpeg&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_bureau-privatif-coworking-paris.jpeg&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_bureau-privatif-coworking-paris.jpeg&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_bureau-privatif-coworking-paris.jpeg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_bureau-privatif-coworking-paris.jpeg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_bureau-privatif-coworking-paris.jpeg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_bureau-privatif-coworking-paris.jpeg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_bureau-privatif-coworking-paris.jpeg&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=%2F_bureau-privatif-coworking-paris.jpeg&amp;w=3840&amp;q=75" decoding="async" data-nimg="fill" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%;object-fit:cover;object-position:center" class="object-center object-cover pointer-events-none" loading="lazy"/></noscript>
         </span>
      </div>
      <img
              alt="plusieurs personnes qui marche devant l'entrée du bâtiment"
              src="{{ asset('assets/img/_bureau-privatif-coworking-paris.png')}}"
              class="object-center object-cover pointer-events-none"
              style="object-fit:cover;object-position:center;width:100%;height:100%;"
      />
   </div>
   <div class="col-10 marginContentCoworking">
      <h2 class="fontSubTitle" id="histoire-coworking" style="padding-top:1.7%">(Cyber) sécurité et coworking</h2>
      <div style="padding-left:5%;padding-right:5%">
         <p class="font-m-whoAreWe">Un espace de coworking est soumis à la législation relative aux ERT (Espace Recevant des Travailleurs). Il est dans l'obligation de mettre à disposition des locaux qui respectent certaines dispositions réglementaires :</p>
         <ul style="gap:15px;display:flex;flex-direction:column;list-style-type:square" class="font-m-whoAreWe">
            <li>Accessibilité des bâtiments aux personnes handicapées ;</li>
            <li>Mise en conformité des installations électriques et des voies de secours ;</li>
            <li>Respect des normes en matière de sécurité incendie.</li>
         </ul>
         <p class="font-m-whoAreWe">La cybersécurité est aussi un sujet prioritaire pour les entreprises qui travaillent en coworking. C'est particulièrement vrai pour les entreprises qui innovent dans des secteurs de pointe (fintech, greentech, biotech, proptech…). Les espaces de coworking sont particulièrement sensibilisés aux risques de cyberattaques, car leur responsabilité peut être directement engagée en cas de problème. Chaque entreprise dispose de réseaux privés en espace de coworking. Cela permet une plus grande confidentialité des données.</p>
      </div>
   </div>
   <div class="col-10 marginContentCoworking">
      <h2 class="fontSubTitle" id="histoire-coworking" style="padding-top:1.7%">Trouvez le coworking idéal</h2>
      <div style="padding-left:5%;padding-right:5%">
         <p class="font-m-whoAreWe">À Paris, le choix est vaste parmi les centaines d'espaces de coworking disponibles, mais certains brillent par la qualité de leurs prestations Voici une liste d’espaces de coworking qui devraient vous plaire :</p>
      </div>
   </div>
   <div class="flex-wrap-row col-10 marginContentCoworking">
      <div class="col-6" style="padding-left:5%;padding-right:5%">
         <ul style="gap:15px;display:flex;flex-direction:column;list-style-type:none" class="font-m-whoAreWe marginBottomCityCoworkingLeft">
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-1">Coworking Paris 1</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-2">Coworking Paris 2</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-3">Coworking Paris 3</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-4">Coworking Paris 4</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-5">Coworking Paris 5</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-6">Coworking Paris 6</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-7">Coworking Paris 7</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-8">Coworking Paris 8</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-9">Coworking Paris 9</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-10">Coworking Paris 10</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-11">Coworking Paris 11</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-12">Coworking Paris 12</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-13">Coworking Paris 13</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-14">Coworking Paris 14</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-15">Coworking Paris 15</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-16">Coworking Paris 16</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-17">Coworking Paris 17</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-18">Coworking Paris 18</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-19">Coworking Paris 19</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-paris-20">Coworking Paris 20</a></li>
         </ul>
      </div>
      <div class="col-6" style="padding-left:5%;padding-right:5%">
         <ul style="gap:15px;display:flex;flex-direction:column;list-style-type:none" class="font-m-whoAreWe marginTopCityCoworkingRight">
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-gare-lyon-paris">Coworking gare de lyon</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-montparnasse-paris">Coworking montparnasse</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-saint-lazare-paris">Coworking saint lazare</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-gare-du-nord-paris">Coworking Paris gare du nord</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-boulogne-billancourt-paris">Coworking boulogne billancourt</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-levallois-perret">Coworking levallois</a></li>
            <li><a class="font-m-whoAreWe abrilTextRegular" href="/coworking-republique-paris">Coworking République</a></li>
         </ul>
      </div>
   </div>
</div>
<div class="row wd-100 bg-violet blanc boxRadiusTopLeft" style="position:relative">
   <div class="column wd-100 justify-content-center" style="padding-left:8%;padding-top:2%;min-height:463px;padding-bottom:3%;position:relative">
      <h3 class="fontSubTitle abrilTextRegular mb-1p"> Besoin d'aide pour votre recherche de bureau ? </h3>
      <p class="font-m-whoAreWe wd-50 asoSansRegularBase" style="margin-top:0">Pas de panique&nbsp;! <b>fiu</b> vous aide à identifier vos besoins, orienter votre recherche et trouver la perle rare&nbsp;!</p>
      <button class="buttonMore buttonSearchPartHelp fontInput"> Recherche sur mesure </button>
   </div>
   <div class="emoji-w-16 top-emojiNeedHelp" style="z-index:0;position:absolute;right:5%">
      <img src="{{ asset('assets/img/emojiNeedHelp.png')}}" width="100%" height="100%" />
   </div>
</div>


    


@endsection