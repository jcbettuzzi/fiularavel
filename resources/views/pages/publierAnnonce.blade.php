@extends('layouts.defaultFiu')
<!-- ecran = publierAnnonce.blade.php   -->
@section('title')
Déposer votre annonce de bureau flex à louer sur fiu
@endsection


@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection


@section('metaDescription')
Trouver des locataires pour votre bureau flexible, avec fiu c’est simple et rapide. On vous connecte avec les candidats qualifiés. Créez votre annonce !
@endsection


@section('pagetitle')
Fiu Laravel
@endsection

@section('custom_css')
<style>
.imgpersomaquette14{
  width: 80%;
  height: 80%;
}
.imgpersomaquette4{
  width: 80%;
  height: 80%;
}
.imgPersMaquette6-2{
  width: 75%;
  height: 75%;
}
.paddingLeftRightpublishModal{
  padding-left: 2.5%;
  padding-right: 2.5%;
}
@media only screen and (max-width: 1200px) {
  .imgPersMaquette6-2{
    width: 60%;
    height: 60%;
  }
  .iosimgpersomaquette4{
    width: 200px !important;
    height: 201px !important;
  }
  .iosimgpersomaquette14{
    width: 100% !important;
    height: 100% !important;
  }
  .paddingLeftRightpublishModal{
    padding-left: 0;
    padding-right: 0;
  }
}

@media only screen and (max-width: 500px){
  .iosimgpersomaquette14{
    width: 150% !important;
    height: 150% !important;
  }
  
}
</style>
@endsection

@section('content')

<div class="column blanc items-center justify-content-center boxRadiusTopLeft" style=" height: 81vh; margin-top: 90px; position: relative; overflow: hidden; " >
   <div style=" width: 100%; height: 100%; position: absolute; " > <img src="{{ asset('assets/img/AdobeStock_486563669.png')}}" alt="une femme qui dirige une réunion" class="object-center object-cover pointer-events-none" style=" object-fit:cover; object-position: center; width:100%;height:100%;"> </div>
   <h1 style=" margin-bottom: 0px;z-index: 1;" {{-- className={isIos ? 'font-l-redirectCTA-safari' : 'font-l'} --}} class="font-l" id="modifyFont-l-titleCardPage" > Publiez une annonce </h1> <p {{--className={isIos ? 'safari-ios-font-m-verbatimCTA' : 'font-m'} --}} class="font-m" style=" margin-top: 1%;z-index: 1; " id="modifyFont-m-titleCardPage" > Et trouvez votre locataire idéal en un clin d'oeil ! </p> <div {{-- className={isIos ? 'emoji-1-titleCardPage-ios' : ''} --}} class="perso14publishAd" style=" position: absolute; top: -6%; right: -2%; " id="modifyEmoji-1-titleCardPage" > <!--<Image alt={''} src="/emoji-1-publish.png" width="334px" height="334px" />--> <img src="{{ asset('assets/img/Persos-maquettes-14.png')}}" class="imgpersomaquette14" id="id_imgpersomaquette14" alt="personnage jaune de frome arrondis, l'air heureux"> 
</div>
<div //className={isIos ? 'emoji-2-titleCardPage-ios' : ''} class="Persosmaquettes4publish" style=" position: absolute; bottom: -10%; left: 1%; " id="modifyEmoji-2-titleCardPage" > <!--<Image alt={''} src="/emoji-2-publish.png" width="320px" height="321px" />--> <img src="{{ asset('assets/img/Persos-maquettes-4-2.png')}}" width="320px" height="321px" class="imgpersomaquette4" id="id_imgpersomaquette4" alt="personnage bleu content et determiné"> </div> </div> 
<div class="row wd-100" style=" flex-wrap: wrap; ">
   <div class="col-6 col-m-12 col-s-12 justify-content-center">
      <div class="wd-100 column justify-content-center items-center content-center" style=" height: 100%; background-color: #9E9DFF; position: relative; overflow: hidden; " >
         <div class="wd-100" style=" gap: 50px; padding: 10%; margin-bottom: 14%; " > <h2 style=" width: 100%; color: #000; text-align: left; //fontSize: '5rem', line-height: 1.2em; margin-top: 0%; margin-bottom: 0px; "  {{--class={isIos ? 'font-l-redirectCTA-safari' : 'font-l'} --}} class="font-l" id="modifyFont-l-blockCardPage" > Vous avez des bureaux à louer ? </h2> <p {{-- class={isIos ? 'safari-ios-font-m-verbatimCTA' : 'font-m'} --}} class="font-m" style=" margin-bottom: 0px; " id="modifyFont-m-blockCardPage-1" > La première étape commence avec vous, ouvrez votre compte <b>fiu</b> ! </p> <p {{-- class={isIos ? 'safari-ios-font-m-verbatimCTA' : 'font-m'} --}} class="font-m" style=" margin-top: 2%; line-height: 1.2em; " id="modifyFont-m-blockCardPage-2" > C'est parti, réunissez toutes les informations relatives à votre bureau flex (adresse, dimensions, description, services, conditions, tarif, photos) et réfléchissez à ce qui rend votre espace bureau unique. <br></br>Besoin d'un coup de pouce ? Contactez l'un de nos experts, il vous aidera à révéler votre bien sous son meilleur jour ! </p> <a href="{{ url('/contact') }}"><button style=" width: 250px; font-size: 2rem; color: #fff; padding-top: 15px; height: auto; padding-left: 18px; padding-right: 18px; padding-bottom: 15px; font-weight: 900; border-radius: 100px; text-transform: none; font-family: azo-sans-web, sans-serif; border: none; " class="buttonContactExpert" > Contacter un expert </button></a> </div>
         <div //class={isIos ? 'emoji-3-titleCardPage-ios' : ''} class="persoMaquette6publish" style=" position: absolute; bottom: -8%; right: -4%; " id="modifyEmoji-3-titleCardPage" > {{-- 
         <Image alt={''} src="/Persos-maquettes-6.png" width="320px" height="320px" />
         --}} <img src="{{ asset('assets/img/Persos-maquettes-6-2.png') }}" width="320px" height="320px" class="imgPersMaquette6-2" alt="personnage orange regardant sur le côté, avec des boucles d'oreilles"> 
      </div>
   </div>
</div>
<div class="col-6 col-m-12 col-s-12 bg-vert content-center justify-content-center" style=" display: flex; align-items: baseline; padding-top: 3.5%;padding-bottom: 2.5%; " >
   <div class="column items-center content-center justify-content-center col-11 paddingLeftRightpublishModal">
      <div style=" background-color: #fff; border-radius: 8px;" class="col-9">
         <div class="row wd-100 bg-vert-fort blanc items-center justify-content-center" style=" alignItems: center; border-top-left-radius: 8px; border-top-right-radius: 8px; border: 1px solid #707070; height: 70px; " id="nomDiv" >
            <p class="wd-100 items-center justify-content-center" style=" font-size: 2rem;fontFamily: azo-sans-web, sans-serif;" > Publiez votre annonce sur fiu </p>
         </div>
         @if(session('errorForm')) <br> 
         <p class="text-secondary" style="font-size: 28px; color: red; text-decoration-line: underline;margin-top:0;padding-left: 6%; padding-right: 6%;" > {{ session('errorForm') }} </p>
         @endif 
        <form class="form" id="recsurmesure" method="POST" action="{{ url('/postPublierUneAnnonce') }}" autocomplete="off">
         <div class="column" style=" padding-left: 6%; padding-right: 6%; gap: 20px; padding-bottom: 40px; margin-top: 2.5%; " >
            <div style=" gap: 6px; display: flex; flex-flow: column;">
               <div class="col-12"><p class="text-secondary" style="font-size: 28px; color: black;margin-top:0;font-weight: bold; font-family: azo-sans-web, bold;" >Bienvenue chez fiu</p></div>
               <div class="col-12"> <label>Votre prénom *</label> <input class="baseInput asoSansRegular wd-100" type="text" placeholder="Prénom" name="Prenom" id="Prenom" value="{{ old('Prenom') }}" /> </div>
               <div class="col-12"> <label>Votre nom *</label> <input class="baseInput asoSansRegular wd-100" type="text" placeholder="Nom" name="nom" id="nom" value="{{ old('nom') }}" /> </div>
               <div class="col-12"> <label>Votre email *</label> <input class="baseInput asoSansRegular wd-100" type="text" placeholder="E-mail" name="email" id="email" value="{{ old('email') }}" /> </div>
               <div class="col-12"> <label>Votre téléphone *</label> <input class="baseInput inputAzolight heightLabelFormContactProperty wd-100" type="text" name="Telephone" id="Telephone" placeholder="Numéro de téléphone" value="{{ old('Telephone') }}" > </div>
            </div>
            <button class="buttonSave buttonSendSearchCustom" style=" width: 100%;border: none;" type="submit" name="submit" value="recherchesurmesure" > Continuer </button> <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
         </div>
         <hr style="border-width:0.5 px;border-width: 0px 0px thin;border-style: solid;border-color: rgba(0, 0, 0, 0.12);">
         <div class="row wd-100" style="padding-left: 6%; padding-top: 15px; padding-bottom: 20px;" id="publierAnnonceCreateAccountModal">
                  <a class="asoSansRegular">Vous êtes nouveaux ? <u>Créez votre compte</u></a>
          </div>
        </form>
      </div>
   </div>
</div>
</div>

<div class="row">
   <div style=" gap: 50; width: 100%; display: flex; align-items: center; flex-direction: row; align-content: center; justify-content: center; backgroundColor: white; flex-wrap: wrap; margin-top: 3%; margin-bottom: 3%; " >
      <p class="col-3 col-md-12 col-s-12 partTheyFindOffice-textAlign fontSubTitle marginTopInheritMobile" style=" color: black; margin-left: 40px; align-content: center; line-height: 1.2em; margin-top: 0px; margin-bottom: 0px; " id="modifyFontSubTitleCustomPage" > <span class="sentenceTheyFindOffice-destop">Ils ont trouvé</span> <span class="sentenceTheyFindOffice-destop">leur bureau idéal</span> <span class="sentenceTheyFindOffice-destop"> sur <b><?php echo str_replace("&", " ", getenv('nameFiu')); ?>.</b> </span> <span class="sentenceTheyFindOffice-mobile">Ils ont trouvé leur bureau idéal</span> <span class="sentenceTheyFindOffice-mobile"> sur <b>fiu.</b> </span> </p>
      <div class="col-7 col-md-12 col-s-12 padding-LogoTheyFindOffice hideShowScroll" style=" gap: 30px; display: flex; text-align: center; align-content: center; " >
         <div class="minWidthImageClientCTA"> <img alt='logo de BIRKENSTOCK' src="{{ asset('assets/img/BIRKENSTOCK.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthImageClientCTA"> <img alt='logo de DOTT' src="{{ asset('assets/img/DOTT.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthImageClientCTA"> <img alt='logo de HOMELOOP' src="{{ asset('assets/img/HOMELOOP-copie.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthImageClientCTA"> <img alt='logo de FLINK' src="{{ asset('assets/img/FLINK.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthImageClientCTA"> <img alt='logo de NHOA-ENERGY' src="{{ asset('assets/img/NHOA-ENERGY.png')}}" style="width:100%; height:100%;" /> </div>
         <div class="minWidthImageClientCTA"> <img alt='logo de SMARTRENTING' src="{{ asset('assets/img/SMARTRENTING.png')}}" style="width:100%; height:100%;" /> </div>
      </div>
   </div>
</div>

@endsection

@section('scripts')

<script>
// Fonction pour détecter si l'utilisateur est sur iOS
function isIOS() {
    //return /Mac|iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    //return /(Mac|iPhone|iPod|iPad)/i.test(navigator.userAgent)
    return /Mac|iPhone|iPod|iPad/i.test(navigator.userAgent)
}
  
if (isIOS()) {
  //console.log('isIOS')
  let element = document.getElementById('modifyFont-m-titleCardPage')
  if (element.classList.contains('font-m"')) {
      element.classList.replace('font-m', 'safari-ios-font-m-verbatimCTA')
  }
  let element2 = document.getElementById('modifyEmoji-1-titleCardPage')
  if (element2.classList.contains('perso14publishAd')) {
      element2.classList.replace('perso14publishAd', 'emoji-1-titleCardPage-ios')
  }
  let element3 = document.getElementById('modifyEmoji-2-titleCardPage')
  if (element3.classList.contains('Persosmaquettes4publish')) {
    //emoji-2-titleCardPage-ios
    element3.classList.replace('Persosmaquettes4publish', 'emoji-2-titleCardPage-ios')
  }
  let element4 = document.getElementById('modifyEmoji-3-titleCardPage')
  if (element4.classList.contains('persoMaquette6publish')) {
    element4.classList.replace('persoMaquette6publish', 'emoji-3-titleCardPage-ios')
  }
  let element5 = document.getElementById('modifyFont-l-titleCardPage')
  if (element5.classList.contains('font-l')) {
    element5.classList.replace('font-l', 'font-l-redirectCTA-safari')
  }
  //modifyFont-m-titleCardPage
  let element6 = document.getElementById('modifyFont-m-titleCardPage')
  if (element6.classList.contains('font-m')) {
    element6.classList.replace('font-m', 'safari-ios-font-m-verbatimCTA')
  }
  //id_imgpersomaquette4
  let element7 = document.getElementById('id_imgpersomaquette4')
  if (element7.classList.contains('imgpersomaquette4')) {
    element7.classList.replace('imgpersomaquette4', 'iosimgpersomaquette4')
  }
  //id_imgpersomaquette14
  let element8 = document.getElementById('id_imgpersomaquette14')
  if (element8.classList.contains('imgpersomaquette14')) {
    element8.classList.replace('imgpersomaquette14', 'iosimgpersomaquette14')
  }
  //modifyFont-l-blockCardPage
  let element9 = document.getElementById('font-l')
  if (element9.classList.contains('font-l')) {
    element9.classList.replace('font-l', 'font-l-redirectCTA-safari')
  }
}

const modalPublierAnnonceCreateAccount = document.getElementById('publierAnnonceCreateAccountModal')
const favDialogCreateAccount_2 = document.getElementById('favDialogCreateAccount')

      
modalPublierAnnonceCreateAccount.addEventListener('click', () => {
        //favDialogConnexion.close()
        favDialogCreateAccount_2.showModal()
})
</script>

@endsection