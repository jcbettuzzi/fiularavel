@extends('layouts.defaultFiu')
<!-- ecran = contact.blade.php   -->
@section('title')
   Contacter fiu, l'expert en location de bureaux flexibles
@endsection

@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('metaDescription')
 Vous avez des questions ? Vous souhaitez un accompagnement personnalisé ? Contactez fiu pour trouver et louer votre espace de bureau flexible tout compris.
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('custom_css')

@endsection
@section('content')

<div class="flex-wrap-row height-firstBloc-contact" style="width: 100%; padding-top: 90px; padding-bottom: 0px;">
   <div class="boxRadiusTopLeft height-left-blocFirst-contact col-6" style="background-color: rgb(246, 206, 222); position: relative;">
      <div style="position: absolute; top: 5%; left: -7.5%;">
        <img src="{{ asset('assets/img/Persos-15.png')}}" height="100%" width="100%" alt="personnage violet avec un air étonné, avec des interrogations" />
      </div>
      <div class="items-center justify-content-center" style="height: 100%;">
         <div style="padding-left: 20%; padding-right: 20%;">
            <h1 class="font-l" style="margin-top: 0px; line-height: 1.2em; white-space: nowrap;">Une question <br>vous taraude ?</h1>
            <p class="font-m"><strong><?php echo str_replace("&", " ", getenv('nameFiu')); ?></strong> est là pour vous !</p>
         </div>
      </div>
      <div style="top: 72%; right: 10%; position: absolute;">
        <img src="{{ asset('assets/img/contact.png')}}" height="100%" width="100%" alt="personnage vert en train de téléphoner" />
      </div>
   </div>
   <div class="col-6" style="padding-bottom: 5%; background-color: white;">
      <div style="padding-left: 10%; padding-right: 10%;">
         <p class="font-s" style="margin-bottom: 2%;">Remplissez le formulaire ou contactez-nous directement par email ou par téléphone</p>
         <div class="flex-wrap-row">
            <div class="wd-50" style="font-size: 2rem; font-family: azo-sans-web, sans-serif;">
               <p>25 rue de Ponthieu</p>
               <p>75008 Paris</p>
               <p><a href="tel:+33755537147" style="font-family: Abril-Text;">+33(0)7 55 53 71 47</a></p>
               <p><a href="mailto:contact@flexinuse.fr" style="font-family: Abril-Text;">contact@flexinuse.fr</a></p>
               <div class="row" style="gap: 9%; padding-bottom: 10%;">
                <a target="_blank" href="https://www.instagram.com/fiu_flexinuse.fr/">
                  <img src="{{ asset('assets/img/logo-instagram.png')}}" alt="instagram" width="25px" height="25px" />
                </span>
              </a>
              <a target="_blank" href="https://www.facebook.com/profile.php?id=100089726257268">
                <img src="{{ asset('assets/img/logo-facebook.png')}}" alt="facebook" width="13.39px" height="25px" />
              </a>
              <a target="_blank" href="https://www.linkedin.com/company/fiu-flexinuse/about/?viewAsMember=true">
                <img src="{{ asset('assets/img/logo-linkedin.png')}}" alt="linkedin" width="21.72px" height="25px" />
              </a>
              <a target="_blank" href="https://www.youtube.com/@fiu_flexinuse/featured">
                <img src="{{ asset('assets/img/logo-youtube.png')}}" alt="youtube" width="33px" height="25px" />
              </a>
            </div>
            </div>
            <div class="col-6" id="ContactDiv" >            
            <form class="form" id="prendrecontact" method="POST" action="{{ url('/prendrecontact') }}" autocomplete="off">  
            
               <div class="profileBlockDiv" style="gap: 2%; width: 100%;">
                  <div class="profileInputBlock" style="width: 49%;"><label>Prénom *</label><input class="baseInput inputAzolight" type="text"  
                              style="margin-top: 3%;"
                              placeholder="Prénom"
                              name="Prenom"
                              id="Prenom"                
                              value="{{ old('Prenom') }}"
                              >
                  </div>
                  <div class="profileInputBlock" style="width: 49%;"><label>Nom *</label><input class="baseInput inputAzolight" type="text" 
                          style="margin-top: 3%;"
                          placeholder="Nom"
                          name="nom" 
                          id="nom"
                          value="{{ old('nom') }}"
                          >
                  </div>
               </div>
               <div class="profileBlockDiv" style="gap: 2%;">
                  <div class="profileInputBlock" style="width: 100%;"><label>Votre email *</label><input class="baseInput" type="text" 
                          style="width: 100%; margin-top: 3%;"
                          placeholder="E-mail"                          
                          name="email" 
                          id="email"
                          value="{{ old('email') }}"
                          >
                  </div>
               </div>
               <div class="profileBlockDiv" style="gap: 2%;">
                  <div class="profileInputBlock" style="width: 100%;">
                     <label>Votre numéro de téléphone *</label>
                     <div class=" react-tel-input " style="padding-left: 0px; width: 100%;">
                        <input class="baseInput inputAzolight heightLabelFormContactProperty wd-100" type="text"                                    
                                   name="Telephone" id="Telephone" placeholder="Numéro de téléphone" value="{{ old('Telephone') }}" 
                                    >
                     </div>
                  </div>
               </div>
               <div class="profileBlockDiv" style="gap: 2%;">
                  <div class="profileInputBlock" style="width: 100%;">
                  
                     <label>Sujet *</label>
                     <select style="height: 47px;text-align: center;border-radius: 8px; background-color: #fff; border: 1px solid #DDDDDD;font-size: 1.5rem;margin-top: 2%;"
                        name="choixprojet" 
                        id="choixprojet"                        
                     >
                        <option value="1"  {{ old('choixprojet') == 1 ? 'selected' : '' }}>Trouver un bureau</option>
                        <option value="2" {{ old('choixprojet') == 2 ? 'selected' : '' }}>Publier une annonce</option>
                        <option value="3" {{ old('choixprojet') == 3 ? 'selected' : '' }}>Recherche sur mesure</option>
                        <option value="4" {{ old('choixprojet') == 4 ? 'selected' : '' }}>Mon compte</option>
                        <option value="5" {{ old('choixprojet') == 5 ? 'selected' : '' }}>Autres</option>
                     </select>
                  </div>
               </div>
               <div class="profileBlockDiv" style="gap: 2%;">
                  <div class="profileInputBlock" style="width: 100%;"><label>Votre projet *</label><textarea rows="8" cols="33" 
                       style="border: 1px solid rgb(221, 221, 221); border-radius: 8px; margin-top: 3%;"
                        name="projet" 
                        id="projet"
                        value="{{ old('projet') }}"
                       ></textarea></div>
               </div>
               @if(session('errorForm'))
                        <br>
                        <p class="text-secondary" style="font-size: 20px; color: red; text-decoration-line: underline;margin-top:0;" >
                          {{ session('errorForm') }}
                        </p>
            @endif
               <button 
                     style="width: 150px; font-size: 2.2rem; color: rgb(255, 255, 255); 
                             padding: 15px 18px; height: auto; font-weight: 900; border-radius: 13px; 
                             text-transform: none; background-color: rgb(0, 0, 0); font-family: azo-sans-web, sans-serif; margin-top: 2%;"
                     type="submit" 
                     name="submit"  
                     value="prendreUncontact"
                     >Envoyer</button>
               <input type="hidden" name="_token" value="{{ csrf_token() }}">                        
            </form> 
            </div>
         </div>
      </div>
   </div>
</div>


@endsection

@section('scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://flexinuse.fr/#organization",
      "name": "fiu – Flex In Use",
      "url": "https://flexinuse.fr",
      "telephone": "+33755537147",
      "email": "contact@flexinuse.fr",
      "logo": {
        "@type": "ImageObject",
        "url": "https://flexinuse.fr/assets/img/logo-fiu%402x.png"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "25 Rue de Ponthieu",
        "postalCode": "75008",
        "addressLocality": "Paris",
        "addressRegion": "Île-de-France",
        "addressCountry": "FR"
      },
      "sameAs": [
        "https://fr.linkedin.com/company/fiuflexinuse",
        "https://www.instagram.com/fiu_flexinuse.fr/",
        "https://www.facebook.com/profile.php?id=100089726257268",
        "https://www.youtube.com/@fiu_flexinuse"
      ],
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "contactType": "service client",
          "telephone": "+33755537147",
          "email": "contact@flexinuse.fr",
          "availableLanguage": "fr-FR",
          "areaServed": "FR"
        },
        {
          "@type": "ContactPoint",
          "contactType": "commercial",
          "telephone": "+33755537147",
          "email": "contact@flexinuse.fr",
          "availableLanguage": "fr-FR",
          "areaServed": "FR"
        }
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://flexinuse.fr/#website",
      "url": "https://flexinuse.fr",
      "name": "fiu – Flex In Use",
      "publisher": { "@id": "https://flexinuse.fr/#organization" },
      "inLanguage": "fr-FR"
    },
    {
      "@type": ["WebPage", "ContactPage"],
      "@id": "https://flexinuse.fr/contact#webpage",
      "url": "https://flexinuse.fr/contact",
      "name": "Contacter fiu, l’expert en location de bureaux flexibles",
      "isPartOf": { "@id": "https://flexinuse.fr/#website" },
      "inLanguage": "fr-FR",
      "description": "Remplissez le formulaire ou contactez-nous directement par email ou par téléphone."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://flexinuse.fr/contact#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://flexinuse.fr" },
        { "@type": "ListItem", "position": 2, "name": "Contact", "item": "https://flexinuse.fr/contact" }
      ]
    }
  ]
}
</script>

@endsection