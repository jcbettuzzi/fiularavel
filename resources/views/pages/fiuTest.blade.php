@extends('layouts.defaultFiu')
<!-- ecran = fiuTest.blade.php   -->

<!-- first commit devnew04 -->

@section('title')
  bailleur
@endsection

@section('pagetitle')

@endsection

@section('custom_css')

@endsection

@section('content')

<div class="flex-wrap-row bloc-one-custom" style="margin-top: 90px;">
          <div class="col-6 boxRadiusTopLeft" style="position: relative";>
            <img
              //width="1050"
              //height="850"
              //priority
              alt="cta-who-are-we"
              src="{{ asset('assets/img/AdobeStock_167781326.jpeg')}}"
              class="object-center object-cover pointer-events-none boxRadiusTopLeft heightCustomSearchLeft"
              //layout="fill"
              //objectFit="cover"
              //objectPosition="center"
              style="object-fit:cover;object-position:center;width:100%;"
            />
          </div>
          <div class="col-6" style="background-color: #F6CEDE;position: relative; overflow: hidden;">
            <div class="items-center justify-content-center ht-100">
              <div style="display: inline-block;color: black;line-height: 5em;width: 60%;">
                <h1
                  style="margin-bottom: 0px; font-family: Azo-Sans-Uber;"
                  {{-- className={isIos ? 'font-l-redirectCTA-safari' : 'font-l'} --}}
                  class="font-l"
                  id="modifyFontCustomPage-1"
                >
                  Recherche<span style="display: block; padding-top: 2%;">SUR-MESURE</span>
                </h1>
                <p
                  style="line-height: 1.2em;"
                  {{-- className={isIos ? 'safari-ios-font-m-verbatimCTA' : 'font-m'} --}}
                  class="font-m"
                  id="modifyFont-m-1"
                >
                  Vous recherchez des espaces de travail, bureaux privés, plateaux opérés… <strong>fiu</strong> vous
                  aide à trouver votre bureau idéal
                </p>
              </div>
            </div>
            <div
              style="position: absolute; top: -0.5%; left: 5%; width: 17%;"
              {{-- className={isIos ? 'ios-EmojiOneTop' : ''} --}}
              id="modifyTopEmojiOneCustomPage"
            >
              <img src="{{ asset('assets/img/emoji-one-CustomSearch.png')}}" width="181.59px" height="169.69px" />
            </div>
            <div style="position: absolute; bottom: 2%;right: 8%; width: 14%;">
              <img src="{{ asset('assets/img/emoji-two-CustomSearch.png')}}" width="159.73px" height="210.72px" />
            </div>
          </div>
        </div>
        <div class="flex-wrap-row" style="padding-bottom: 0!important;">
          <div class="col-6">
            <div style="padding-left: 10%; padding-right: 10%; margin-top: 6%;">
              <h1
                style="font-family: Azo-Sans-Uber; line-height: 1.2em;"
                {{-- className={isIos ? 'font-l-redirectCTA-safari' : 'font-l'} --}}
                class="font-l"
                id="modifyFontCustomPage-2"
              >
                <span style="display: block;">Une offre clé en main</span> pour votre bureau
              </h1>
              <p
                style="line-height: 1.2em; margin-bottom: 0px;"
                {{-- className={isIos ? 'safari-ios-font-m-verbatimCTA' : 'font-custom-p'} --}}
                class="font-custom-p"
                id="modifyFont-m-2"
              >
                Vous initiez vos recherches ? Vous avez du mal à vous orienter dans une jungle de propositions parfois
                peu comparables ?
              </p>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"
                {{-- className={isIos ? 'safari-ios-font-m-verbatimCTA' : 'font-custom-p'} --}}
                class="font-custom-p"
                id="modifyFont-m-3"
              >
                Vous manquez de temps pour formuler vos besoins, écrire la recette de votre bureau idéal, très peu pour
                vous… Scroller, sélectionner, shortlister encore moins !
              </p>
              <p
                style="line-height: 1.2em; margin-top: 2%; margin-bottom: 0px;"
                {{--className={isIos ? 'safari-ios-font-m-verbatimCTA' : 'font-custom-p'}--}}
                class="font-custom-p"
                id="modifyFont-m-4"
              >
                Laissez-vous guider par l'un de nos conseillers <strong>fiu</strong>. Dites-lui qui vous êtes, il vous
                proposera une sélection qui vous ressemble et il vous accompagnera jusqu'à votre emménagement.
              </p>
              <p
                style=" line-height: 1.2em; margin-top: 2%;"
                {{-- className={isIos ? 'safari-ios-font-m-verbatimCTA' : 'font-custom-p'} --}}
                class="font-custom-p"
                id="modifyFont-m-5"
              >
                Indiquez vos coordonnées pour être contacté dans la foulée !
              </p>
            </div>
          </div>
          <div class="col-6">
    <div
      class="column bg-blanc wd-70"
      style="
        border-radius: 8px;
        justify-content: flex-start;
        box-shadow: rgb(0 0 0 / 10%) 0px 5px 15px;
        margin-left: 16%;
        margin-top: 6%;
      "
    >
      <div style=" background-color: #fff; border-radius: 8px;">
        <div
          class="row wd-100 bg-vert-fort blanc items-center justify-content-center"
          style="
            alignItems: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            border: 1px solid #707070;
            height: 70px;
          "
        >
          <p
            class="wd-100 items-center justify-content-center"
            style=" font-size: 2rem;fontFamily: azo-sans-web, sans-serif;" 
          >
            
            Recherche sur mesure
          </p>
        </div>
        <div
          class="column"
          style=" padding-left: 6%; padding-right: 6%; gap: 20px; padding-bottom: 40px; margin-top: 2.5%; "
        >
          <div style=" gap: 6px; display: flex; flex-flow: column;">
            <div class="col-12">
              <label>Votre prénom *</label>
              <input
                class="baseInput asoSansRegular wd-100"
                type="text"
                value="firstName"
              />
            </div>
            <div class="col-12">
              <label>Votre nom *</label>
              <input
                class="baseInput asoSansRegular wd-100"
                type="text"
                value="lastName"
              />
            </div>
            <div class="col-12">
              <label>Votre email *</label>
              <input
                class="baseInput asoSansRegular wd-100"
                type="text"
              />
            </div>
            <div class="col-12">
              <label>Votre téléphone *</label>
              {{-- 
              <PhoneInput
                country={'fr'}
                value={phoneNumber}
                onlyCountries={['fr']}
                countryCodeEditable={false}
                containerClass={'inputAzolight'}
                onChange={e => {
                  setPhoneNumber(e)
                }}
                inputClass={'baseInput inputAzolight wd-100'}
                inputStyle={{ width: '100%', overflow: 'hidden' }}
                onKeyDown={(e: React.KeyboardEvent<HTMLInputElement>) => {
                  if (e.key == '0' && (phoneNumber === '' || phoneNumber === '33')) {
                    e.preventDefault()
                  }
                }}
              />
              --}}
            </div>
            <div class="col-12">
              <label>Quelques mots sur votre besoin *</label>
              <textarea
                class="col-12 baseInput ht-20"
                style="height: 102px;"
              >
              </textarea>
            </div>
          </div>
          <button
            class="buttonSave buttonSendSearchCustom"
            style=" width: 100%;border: none;"
          >
            Envoyer
            {{--<CheckCircleOutlineIcon sx={{ fontSize: '1.4em' }} />--}}
          </button>
        </div>
      </div>
    </div>
<!--
</div>
        </div>-->
        {{-- 
        <div class="row" style="border-top: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD;">
          <ClientsCTA backColor="white" colorText="black" />
        </div>
        --}}
        <div
          class="row partAdIdealOffice"
          style="justify-content: center; gap: 1.5%; padding-right: 2%; padding-left: 2%; margin-bottom: 1%;"
        >
        {{--
          {suggested.map((property: Property, index: number) => (
            <>
              {index > 3 ? (
                <></>
              ) : (
                <div
                  className="imgRadiusTop effectHoverProperty searchCustomMadeProperty"
                  style={{ position: 'relative', border: '1px solid #DDDDDD' }}
                >
                  <PropertyCard property={property} />
                  <div style={{ position: 'absolute', top: '5%', right: '7%' }}>
                    <Image src="/Favoris.png" width="30px" height="26.06px" />
                  </div>
                </div>
              )}
            </>
          ))}
          --}}
        </div>
</div>
<div class="row" style="border-top: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD;">
  <div
      style="
        gap: 50;
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: row;
        align-content: center;
        justify-content: center;
        backgroundColor: white;
        flex-wrap: wrap;
        margin-top: 3%;
        margin-bottom: 3%;
      "
    >
      <p
        class="col-3 col-md-12 col-s-12 partTheyFindOffice-textAlign fontSubTitle marginTopInheritMobile"
        style="
          color: black;
          margin-left: 40px;
          align-content: center;
          line-height: 1.2em;
          margin-top: 0px;
          margin-bottom: 0px;
        "
        id="modifyFontSubTitleCustomPage"
      >
        <span class="sentenceTheyFindOffice-destop">Ils ont trouvé</span>
        <span class="sentenceTheyFindOffice-destop">leur bureau idéal</span>
        <span class="sentenceTheyFindOffice-destop">
          sur <b>fiu.</b>
        </span>
        <span class="sentenceTheyFindOffice-mobile">Ils ont trouvé leur bureau idéal</span>
        <span class="sentenceTheyFindOffice-mobile">
          sur <b>fiu.</b>
        </span>
      </p>
      <div
        class="col-7 col-md-12 col-s-12 padding-LogoTheyFindOffice hideShowScroll"
        style="
          gap: 30px;
          display: flex;
          text-align: center;
          align-content: center;
        "
      >
        <div class="minWidthImageClientCTA">
          <img alt='logo de BIRKENSTOCK' src="https://leasefit.fr/_next/image?url=%2FBIRKENSTOCK.jpg&w=640&q=75" style="width:100%; height:100%;" />
        </div>
        <div class="minWidthImageClientCTA">
          <img alt='logo de DOTT' src="https://leasefit.fr/_next/image?url=%2FDOTT.jpg&w=640&q=75" style="width:100%; height:100%;" />
        </div>
        <div class="minWidthImageClientCTA">
          <img alt='logo de HOMELOOP' src="https://leasefit.fr/_next/image?url=%2FHOMELOOP-copie.jpg&w=828&q=75" style="width:100%; height:100%;" />
        </div>
        <div class="minWidthImageClientCTA">
          <img alt='logo de FLINK' src="https://leasefit.fr/_next/image?url=%2FFLINK.jpg&w=828&q=75" style="width:100%; height:100%;" />
        </div>
        <div class="minWidthImageClientCTA">
          <img alt='logo de NHOA-ENERGY' src="https://leasefit.fr/_next/image?url=%2FNHOA-ENERGY.jpg&w=828&q=75" style="width:100%; height:100%;" />
        </div>
        <div class="minWidthImageClientCTA">
          <img alt='logo de SMARTRENTING' src="https://leasefit.fr/_next/image?url=%2FSMARTRENTING.jpg&w=828&q=75" style="width:100%; height:100%;" />
        </div>
      </div>
    </div>
</div>
<div class="flex-wrap-row">
  <div class="col-12">
    <div class="row" style="padding-left: 5%; padding-right: 5%; margin-bottom: 1.5%;">
              <h1
                style="font-family: Azo-Sans-Uber; margin-bottom: 0px;"
                {{-- className={isIos ? 'font-l-redirectCTA-safari' : 'font-l'} --}}
                class="font-l"
                id="modifyFontCustomPage-3"
              >
                Votre bureau idéal se trouve sur fiu !
              </h1>
    </div>
  </div>
  <div
            class="row partAdIdealOffice"
            style="justify-content: center; gap: 1.5%; padding-right: 2%; padding-left: 2%; margin-bottom: 1%;"
  >
              <div
                class="cardDisplayProperty imgRadiusTop bg-blanc"
                style="
                  max-width: 418px;
                  max-height: 650;
                  border: 1px solid #DDDDDD;
                  cursor: pointer;
                "
              >
                <div style="maxHeight: 419px;">
                  <img src="https://leasefit.fr/_next/image?url=https%3A%2F%2Fapi.leasefit.fr%2Fapi%2Fpublic%2FimageProperty%2Fdisplay%2Fdb0bb779-bbd3-4bf8-af8c-d13da4d284c4&w=640&q=75" class="imgRadiusTop" style="width:418px;height:400px;"/>
                </div>
                <div class="bg-blanc addPaddingBottomOnContentProperty" style=" padding-left: 7%; padding-top: 8%; padding-right: 8%; ">
                  <a class="azoSansBold vert" style="fontSize: 1.8rem;">
                    test &#x2022; test postes &#x2022;{' '}
                    test m²
                  </a>

                  <h5 class="abrilTextRegular" style=" font-size: 2.5rem; margin-top: 0; margin-bottom: 0; ">
                    test titre
                  </h5>
                </div>
                <div style=" padding-left: 7%; padding-right: 8%; " class="priceContentClass">
                  <span class="asoSansRegular" style=" font-size: 2rem;" >
                    <b>test € </b>HT / mois
                  </span>
                  <p
                    style="
                      margin-top: 0%;font-family: azo-sans-web;
                      font-size: 2rem;
                    "
                  >
                    test € HT /
                    poste
                  </p>
                </div>
              </div>
  </div>
@endsection

@section('scripts')

  <script type="text/javascript">
    $(document).ready(function(){
      //-initialize the javascript
      App.init();
      App.formElements();
    });
  </script>

@endsection
