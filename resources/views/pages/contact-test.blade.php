@extends('layouts.defaultFiu')
<!-- ecran = contact.blade.php   -->
@section('title')
  Fiu
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
        <img src="{{ asset('assets/img/Persos-15.png')}}" height="100%" width="100%" />
      </div>
      <div class="items-center justify-content-center" style="height: 100%;">
         <div style="padding-left: 20%; padding-right: 20%;">
            <h1 class="font-l" style="margin-top: 0px; line-height: 1.2em; white-space: nowrap;">Une question <br>vous taraude ?</h1>
            <p class="font-m"><strong>fiu</strong> est là pour vous !</p>
         </div>
      </div>
      <div style="top: 72%; right: 10%; position: absolute;">
        <img src="{{ asset('assets/img/contact.png')}}" height="100%" width="100%" />
      </div>
   </div>
   <div class="col-6" style="padding-bottom: 5%; background-color: white;">
      <div style="padding-left: 10%; padding-right: 10%;">
         <p class="font-s" style="margin-bottom: 2%;">Remplissez le formulaire ou contactez-nous directement par email ou par téléphone</p>
         <div class="flex-wrap-row">
            <div class="wd-50" style="font-size: 2rem; font-family: azo-sans-web, sans-serif;">
               <p>128 rue La Boétie​</p>
               <p>75008 Paris</p>
               <p><a href="tel:+33755537147" style="font-family: Abril-Text;">+33(0)7 55 53 71 47</a></p>
               <p><a href="mailto:contact@flexinuse.com" style="font-family: Abril-Text;">contact@flexinuse.fr</a></p>
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
            <div class="col-6">
               <div class="profileBlockDiv" style="gap: 2%; width: 100%;">
                  <div class="profileInputBlock" style="width: 49%;"><label>Prénom *</label><input class="baseInput inputAzolight" type="text" id="firstname" style="margin-top: 3%;"></div>
                  <div class="profileInputBlock" style="width: 49%;"><label>Nom *</label><input class="baseInput inputAzolight" type="text" id="name" style="margin-top: 3%;"></div>
               </div>
               <div class="profileBlockDiv" style="gap: 2%;">
                  <div class="profileInputBlock" style="width: 100%;"><label>Votre email *</label><input class="baseInput" type="text" id="email" style="width: 100%; margin-top: 3%;"></div>
               </div>
               <div class="profileBlockDiv" style="gap: 2%;">
                  <div class="profileInputBlock" style="width: 100%;">
                     <label>Votre numéro de téléphone *</label>
                     <div class=" react-tel-input " style="padding-left: 0px; width: 100%;">
                        <input class="baseInput inputAzolight heightLabelFormContactProperty wd-100" type="text" name="Telephone" id="Telephone" placeholder="Numéro de téléphone" >
                     </div>
                  </div>
               </div>
               <div class="profileBlockDiv" style="gap: 2%;">
                  <div class="profileInputBlock" style="width: 100%;">
                     <label>Sujet *</label>
                     <select style="height: 47px;text-align: center;border-radius: 8px; background-color: #fff; border: 1px solid #DDDDDD;font-size: 1.5rem;margin-top: 2%;">
                        <option value="#">Trouver un bureau</option>
                        <option value="#">Publier une annonce</option>
                        <option value="#">Recherche sur mesure</option>
                        <option value="#">Mon compte</option>
                        <option value="#">Autres</option>
                     </select>
                  </div>
               </div>
               <div class="profileBlockDiv" style="gap: 2%;">
                  <div class="profileInputBlock" style="width: 100%;"><label>Votre projet *</label><textarea rows="8" cols="33" style="border: 1px solid rgb(221, 221, 221); border-radius: 8px; margin-top: 3%;"></textarea></div>
               </div>
               <button style="width: 150px; font-size: 2.2rem; color: rgb(255, 255, 255); padding: 15px 18px; height: auto; font-weight: 900; border-radius: 13px; text-transform: none; background-color: rgb(0, 0, 0); font-family: azo-sans-web, sans-serif; margin-top: 2%;">Envoyer</button>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="wd-100" style="height: 400px; position: relative;">
   <!--<div class="wd-100">-->
        <img
            alt="plusieurs personnes qui marche devant l'entrée du bâtiment"
            src="{{ asset('assets/img/googleMapContact.png')}}"
            class="object-center object-cover pointer-events-none"
            style="object-fit:cover;object-position:center;width:100%;height:100%;"
          />
    <!--</div>-->
</div>

@endsection