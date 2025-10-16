<?php
$API_KEY = getenv('GOOGLE_API_KEY');
$REST_API = getenv('REST_API_URL');
$fiuLaravel = getenv('UrlFiuLaravel');
?>
@extends('layouts.defaultFiu')
<!-- ecran = searchEngineFiu.blade.php   -->


@section('title')
  moteur de recherche Fiu
@endsection

@section('pagetitle')

@endsection

@section('custom_css')
<style>


:modal {
  background-color: white;
  border: 2px solid burlywood;
  border-radius: 5px;
}

dialog::backdrop {
  background: rgba(0,0,0,0.5);
}

  
</style>
<style>
  .carousel {
    position: relative;
    box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
    height:100%;
}

.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 100%;
}


.carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
}



.carousel-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
}

.carousel-item img {
    display: block;
    height: auto;
    max-width: 100%;
    height: 100%;
}




.carousel-control {
    background: rgba(0, 0, 0, 0.28);
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    /*z-index: 10;*/
}

.carousel-control.prev {
    left: 2%;
}

.carousel-control.next {
    right: 2%;
}

.carousel-control:hover {
    background: rgba(0, 0, 0, 0.8);
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3 {
    display: block;
}



.carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    /*z-index: 10;*/
}

.carousel-indicators li {
    display: inline-block;
    margin: 0 5px;
}



.carousel-bullet {
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 35px;
}

.carousel-bullet:hover {
    color: #aaaaaa;
}



#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #428bca;
}



#title {
    width: 100%;
    position: absolute;
    padding: 0px;
    margin: 0px auto;
    text-align: center;
    font-size: 27px;
    color: rgba(255, 255, 255, 1);
    font-family: 'Open Sans', sans-serif;
    z-index: 9999;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
}
</style>
<style>
  .maxHeightOneAdDestop{
    max-height: 290px;
  }

  @media only screen and (max-width: 765px){
    .maxHeightOneAdDestop{
      max-height: none;
    }
  }
</style>
<style>
ul.typeSpaceWork {
  position: relative;
}

ul.typeSpaceWork li {
  display: inline-block;
  /*width: 160px;
  height: 60px;
  background: #39CCCC;*/
  text-align: center;
  line-height: 60px;
  color: #fff;
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

ul.typeSpaceWork li:hover {
  background: #F0F0F0;
}

.slider {
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  height: 4px;
  background: yellow;
  transition: all 0.5s;
}
/*  Ripple */

.ripple {
  width: 0;
  height: 0;
  border-radius: 50%;
  /*background: rgba(255, 255, 255, 0.4);*/
  background: #A5A5A5;
  transform: scale(0);
  position: absolute;
  opacity: 1;
}

.rippleEffect {
  animation: rippleDrop .3s linear;
}

@keyframes rippleDrop {
  100% {
    transform: scale(2);
    opacity: 0;
  }
}
</style>
@endsection

@section('content')



<div
      class="row wd-100 items-center navBarDiv"
      style="
        gap: 1em;
        display: flex;
        padding: 10px 0 10px 5%;
        position: fixed;
        margin-top: 90px;
        background-color: #fff;
        z-index: 2;
      "
    >
      <div class="wd-20 items-center mobile-withSearchBarFindOneDestop">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
        <input
          id="placeInput"
          class="asoSansRegular col-12"
          style="
            border: none;
            height: 70px;
            outline: none;
          "
          placeholder="Ville, Code Postal, Rue"
        />
          <!--debut si divisible -->
          <span >
            <!--<KeyboardArrowDownIcon style=" font-size: 200%; " />-->
          </span>
          <!--fin si divisible -->  
      </div>
      
      <div
        style="
          height: 72px;
          border-left: 1px solid #DDDDDD;
          padding-left: 1%;
        "
        class="items-center tooltipOfficeType hideFindOneDestopMenu"
      >
        <a class="asoSansRegular items-center asoSansRegular" style=" white-space: nowrap; ">
          Type d'espace de travail
          <svg xmlns="http://www.w3.org/2000/svg" height="17" viewBox="0 0 24 24" width="17"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path></svg>
        </a>
        <div
          class="tooltipOfficeTypetext"
          style="
            gap: 0px;
            display: flex;
            flex-direction: column;
            width: 245px;
          "
        >
        <div style="padding: 5%;">
          <ul style="list-style: none;padding: 0;" class="typeSpaceWork">
            <li style="width: 100%; color: black; text-align: left;">
              <input class="form-check-input" type="checkbox" id="bureau" style="margin-right: 7%;" value="2">
              <label class="form-check-label ml-3" for="bureau">
                    Bureaux
              </label>
            </li>
            <li style="width: 100%; color: black; text-align: left;">
              <input class="form-check-input" type="checkbox" id="coworking" style="margin-right: 7%;" value="1">
              <label class="form-check-label ml-3" for="coworking">
                    Coworking
              </label>
            </li>
          </ul>
        </div>
        </div>
      </div>
      <div
        class="tooltipCapacity items-center hideFindOneDestopMenu"
        style="
          height: 72px;
          border-left: 1px solid #DDDDDD;
        "
      >
        <a
          class="justify-content-center items-center circleMenuItemFindADestop"
          style="
            width: 185px;
            height: 44px;
            padding: 3%;
            margin-left: 5%;
            border-radius: 31px;
            background-color: #F7F7F7;
          "
        >
          Postes / Superficie
        </a>
    
        <div
          class="tooltipCapacitytext"
          style="
            padding: 0 10% 10% 10%;
            display: flex;
            text-align: left;
            flex-direction: column;
            width: 451px;
          "
        >
          <div
            class="row wd-100 justify-content-center"
            style="
              gap: 0.5em;
              margin: 2em 2em 1.5em 2em;
            "
          >
            <div class="column" style=" width: 48%; ">
              <a class="azoSansBold">Nombre minimum</a>
              <input
                type="number"
                min="0"
                placeholder="1 poste"
                class="baseInput"
                value=""
                id="posteMin"

              />
            </div>
            <div class="column wd-50" style=" width: 48%; ">
              <a class="azoSansBold">Nombre maximum</a>
              <input
                type="number"
                min="0"
                placeholder="+50 postes"
                class="baseInput"
                value=""
                id="posteMax"
              />
            </div>
          </div>
          <!-- Debut test superficie -->
          <div class="row wd-100 justify-content-center" style="gap: 0.5em; margin-bottom: 2em;">
              <div class="column" style="width: 48%;">
                <label>Surface minimum</label>
                <input
                  min="0"
                  type="number"
                  placeholder="0 m²"
                  class="baseInput"
                  value=""
                  id="surfaceMin"
                />
              </div>
              <div class="column wd-50" style="width: 48%;">
                <label>Surface maximum</label>
                <input
                  min="0"
                  type="number"
                  class="baseInput"
                  placeholder="2 000 + m²"
                  value=""
                  id="surfaceMax"
                />
              </div>
          </div>
          <!-- Fin test superficie -->
          <div class="wd-100 items-center justify-content-space-between ">
            <a
              class="buttonBackStepper gris-fonce"
              style=" margin-left: 2%; margin-top: 2%; " 
              id="resetPoste"
            >
              Réinitialiser
            </a>
            <button
              class="buttonSaveStepper asoSansRegular"
              style=" margin-right: 0%; width: 53%; padding: 0; border: 0; height: 58px; "
              id="ButtonPosteSuperficie"
            >
              Afficher les annonces 
            </button>
          </div>
        </div>
    
      </div>
      <div class="items-center tooltipDisponibility hideFindOneDestopMenu">
        <a
          class="justify-content-center items-center circleMenuItemFindADestop"
          style="
            width: 185px;
            height: 44px;
            border-radius: 31px;
            background-color: #F7F7F7;
          "
        >
          Disponibilité
        </a>
        <div class="tooltipDisponibilitytext" style="display: flex; margin-top: 2%; padding: 0px 10%; flex-direction: column;">
          <div class="column wd-100" style="margin-top: 2%; padding-top: 3%;">
            <a class="azoSansBold"> Date de disponibilité</a>
            <input min="0" type="date" placeholder="JJ / MM / AA" class="baseInput asoSansRegular wd-100"  id="startDate" value="">
          </div>
          <div class="row wd-100 justify-content-center" style="gap: 1em; margin: 1em;"></div>
          <div class="row items-center justify-content-space-between" style="margin-bottom: 5%;">
            <div class="col-5">
              <a class="buttonBackStepper gris-fonce col-6" style="margin-left: 0%; padding-left: 5%;" id="resetDispo">Réinitialiser</a>
            </div>
            <div class="col-7">
              <button class="buttonSaveStepper asoSansRegular col-6" style="margin-right: 0%; width: 100%; white-space: pre; border: none;" id="buttonDate">Afficher les annonces</button>
            </div>
          </div>
        </div>
      </div>
      <div
        class="items-center tooltipRent hideFindOneDestopMenu"
        style="
          height: 72px;
        "
      >
        <a
          class="asoSansRegular justify-content-center items-center wd-100 circleMenuItemFindADestop"
          style="
            width: 185px;
            height: 43px;
            padding: 3%;
            margin-left: 5%;
            border-radius: 31px;
            background-color: #F7F7F7;
          "
        >
          Loyer mensuel
        </a>
        <div
          class="tooltipRenttext"
          style="
            padding: 0 12% 12% 12%;
            display: flex;
            text-align: left;
            flex-direction: column;
            width: 467px;
          "
        >
          <div
            class="row wd-100 justify-content-center"
            style="
              gap: 0.5em;
              margin: 2em 2em 1em 2em;
              padding-left: 1%;
              padding-right: 1%;
            "
          >
            <div class="column wd-50">
              <a class="azoSansBold">Loyer minimum</a>
              <input
                min="0"
                type="number"
                placeholder="0 €"
                value=""
                class="baseInput"
                id="rentMin"
              />
            </div>
            <div class="column wd-50">
              <a class="azoSansBold">Loyer maximum</a>
              <input
                min="0"
                type="number"
                class="baseInput"
                value=""
                placeholder="50 000+ €"
                id="rentMax"
              />
            </div>
          </div>
          <div class="wd-100 items-center justify-content-space-between ">
            <a
              class="buttonBackStepper gris-fonce"
              style=" margin-left: 2%; margin-top: 2%;"
              id="resetRent"
            >
              Réinitialiser
            </a>
            <button
              class="buttonSaveStepper asoSansRegular"
              style=" margin-right: 0%; width: 56%; border: none; "
              id="buttonRent"
            >
              Afficher les annonces
            </button>
          </div>
        </div>
      </div>
      <div class="wd-10 items-center hideFindOneDestopMenu tooltipOption">
        <a
          class="asoSansRegular justify-content-center items-center circleMenuItemFindADestop"
          style="
            width: 97px;
            height: 43px;
            padding: 3%;
            margin-left: 5%;
            border-radius: 31px;
            background-color: #F7F7F7;
          "
          id="modalOptionDestop"
        >
          Options
        </a>
        
        
         
            <!--Debut modal options -->     
        <dialog 
              id="favDialog"
              class="bg-blanc col-6 col-md-10 col-s-12"
              style="
                left: 50%;
                position: absolute;
                border-radius: 8px;
                border: 1px solid #707070;
                justify-content: flex-start;
                transform: translate(-50%);
                padding: 0;
              "
            >
              <div
                class="row wd-100 bg-vert-fort blanc justify-content-space-between"
                style="
                  align-items: center;
                  border-top-left-radius: 8px;
                  border-top-right-radius: 8px;
                  border: 1px solid #707070;
                "
              >
                <p class="wd-10"></p>
                <p
                  class="wd-90 items-center justify-content-center"
                  style=" margin: 1.5em; font-family: azo-sans-web; font-size: 18px; font-weight: 700; "
                >
                  Options
                </p>
                <div class="wd-10 cursorPointer">
                    <div id="hideModalDestop">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#ffffff"/></svg>
                    </div>
                </div>
              </div>
              <div class="column" style=" padding: 6%; ">                      
                <div class="column" style=" gap: 20px; ">
                  <h3 class="titleCreatePropertyH5">Type de contrat</h3>
                  <div class="flex-wrap-row">
                    <ul style="list-style: none;margin:0;" class="col-12 typeSpaceWork">
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="prestationService1" style="margin-top:1%;margin-right:2%;" value="1">
                          <label class="form-check-label ml-3" for="prestationService1" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Prestation de service
                          </label>
                        </div>
                      </li>
                      <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="sousLocation" style="margin-top:1%;margin-right:2%;" value="2">
                          <label class="form-check-label ml-3" for="sousLocation" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Sous-location
                          </label>
                        </div>
                      </li>
                    </ul>
                    <ul style="list-style: none;margin:0;" class="col-12 typeSpaceWork">
                    <li class="col-6" style="color:black;text-align: left;">
                        <div class="col-12" style="color:black;text-align: left;">
                          <input class="form-check-input modalCheckbox" type="checkbox" id="bailDerogatoire" style="margin-top:1%;margin-right:2%;" value="3">
                          <label class="form-check-label ml-3" for="bailDerogatoire" style="font-family: azo-sans-web, sans-serif; font-size: 1.8rem; font-weight: 500;">
                            Bail dérogatoire
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!--<Divider />-->
                </div>
                <!--<Divider />-->
                <div class="column">
                  <h3 class="titleCreatePropertyH5">Services inclus</h3>
                  <ul style="list-style: none;" class="col-12">
                </div>
                <div id="serviceBase">
                </div>
              </div>
              <div class="wd-100 items-center justify-content-space-between bg-vert-fort" style=" height: 100; ">
                <a
                  class="buttonBackStepper buttonUnderlineFindADestop"
                  style=" margin-left: 5%; margin-top: 2%;"
                  id="resetService"
                >
                  Réinitialiser
                </a>
                <button
                  style=" margin-right: 5%; border: none; "
                  class="buttonSaveStepper buttonBlackToWhite"
                  id="serviceButton"
                >
                  Afficher les annonces
                </button>
              </div>
            </div>
            <div id="serviceBase">
            </div>
            <!--Fin modal options -->
        </dialog>
        
      </div>
      <div
        style="
          height: 72px;
          border-left: 1px solid #DDDDDD;
          padding-left: 3%;
        "
        class="items-center tooltipOfficeType hideShowFilterFindOneDestop"
      >
        <a style=" display: flex; ">
          <Image src="/Groupe-282.png" width="22.03px" height="21.81px" />
          <span style=" padding-top: 0.5%; font-size: 1.9rem; ">Filtrer</span>
        </a>
        <div>
          <!--
          <Modal
            open="open"
            onClose="handleClose"
            keepMounted
            style=" overflow: auto; display: flex; "
            class="scrollbar"
          >
            <OptionsModal
              params="params"
              setParams={setParams}
              infos="infos"
              handleClose={handleClose}
            />
          </Modal>
          <Modal
            open={openMobile}
            onClose={handleCloseMobile}
            keepMounted
            style=" overflow: auto; display: flex; "
            class="scrollbar"
          >
            <OptionsModalMobile
              params={params}
              setParams={setParams}
              infos={infos}
              handleClose={handleCloseMobile}
            />
          </Modal>
          -->
        </div>
          <!-- Debut test The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <p>Some text in the Modal..</p>
            </div>

          </div>
          <!-- Fin test The Modal -->
      </div>
    </div>
    <div class="row wd-100">
          <div
            class="column col-6 col-m-12 marginTopAroundPartFindADestop"
            style="
              padding: 1% 2% 1% 2%;
            "
          >
            <h1 class="font-m"> Location de bureaux et coworking </h1>
            <div class="row wd-100 justify-content-space-between menuFilter-destop">
              <p class="row" style=" margin: 1em 0; font-family: azo-sans-web; font-size: 18px; ">
                Île de France : <b style=" marginLeft: 5px; "> count annonces </b>
              </p>
              <div class="row  justify-content-center gapContentFilterFindADestop items-center">
                <a
                  class="cursorPointer asoSansRegular filterDisplay"
                  style=" white-space: nowrap; "
                  id="pertinence"
                >
                  Pertinence
                </a>
                <a
                  class="cursorPointer asoSansRegular filterDisplay"
                  style=" white-space: nowrap; "
                  id="recent"
                >
                  Le plus récent
                </a>
                <a
                  class="cursorPointer asoSansRegular filterDisplay"
                  style=" white-space: nowrap; "
                  id="moinsCher"
                >
                  Le moins cher
                </a>
              </div>
            </div>
            <!-- debut tri mobile -->
            <div class="menuFilter-mobile">
              <p class="row" style=" margin: 1em 0; font-family: azo-sans-web; font-size: 18px; ">
                <b style=" margin-left: 5px; "> count annonces </b>
              </p>
              <div
                style="
                  height: 72px;
                  margin-left: auto;
                "
                class="items-center tooltipOfficeType"
              >
                <a style=" padding-bottom: 1%; ">
                  Tri: pertinence
                  <!--<KeyboardArrowDownIcon />-->
                </a>
                <div
                  class="tooltipOfficeTypetext"
                  style="
                    gap: 0px;
                    display: flex;
                    flex-direction: column;
                  "
                >
                  
                    <div className="column" key="order.id">
                      <!--
                      <MenuItem key="order.id" class="col-6 col-m-6 col-s-6">
                        <Checkbox checked="false" />
                        <ListItemText primary="order.label" />
                      </MenuItem>
                      -->
                    </div>
                  
                </div>
              </div>
            </div>
            <!-- fin -->
            
              
            <div
              class="propertyThumbnail"
              style="
                    margin-top: 2%;
              "
            >
            </div>
            <div id="pagination-container"></div>
            
          </div>
          <div
            class="column col-6 col-m-0 col-s-0 position-fixed"
            style="
              margin-left: 50%;
              margin-top: 8%;
            "
          >
          <div id="map_2" style="height: 810px;"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 bg-blanc paddingContentTextCategory position-relative" id="partTextLocationCoworking">
              {!! $textLocation !!}
        </div>
      </div>
      @endsection
      
@section('scripts')
  <script  src="https://maps.googleapis.com/maps/api/js?key=<?= $API_KEY ?>&libraries=places&callback=initAutocomplete&loading=async" async defer></script>
  <script>
    let count = 26; // Example count
    const limit = 25; // Example limit
    let pageNumber = 1; // Current page number
    let pageMax = Math.ceil(count / limit); // Maximum page number

    function prevPage() {
        if (pageNumber > 1) {
            pageNumber--;
            renderPagination()
            rechercheProperty()
        }
    }

    function nextPage() {
        if (pageNumber < pageMax) {
            pageNumber++;
            renderPagination()
            rechercheProperty()
        }
    }

    function goFirstPage() {
        pageNumber = 1;
        renderPagination()
        rechercheProperty()
    }

    function goLastPage() {
        pageNumber = pageMax;
        renderPagination();
        rechercheProperty()
    }

    function updateCount(newCount) {
        count = newCount;
        pageMax = Math.ceil((count / limit))
        renderPagination();
    }

    function renderPagination() {
        const container = document.getElementById('pagination-container');
        container.innerHTML = '';
      console.log("count:", count, "pageMax:", pageMax, "pageNumber:", pageNumber)
        if (count > limit) {
            const div = document.createElement('div');
            div.className = 'justify-content-center';

            if (pageNumber !== 1) {
                const imgPrev = document.createElement('img');
                imgPrev.src = `<?= $fiuLaravel ?>/assets/img/round-arrow-left.png`;
                imgPrev.width = 30;
                imgPrev.height = 30;
                imgPrev.onclick = prevPage;
                div.appendChild(imgPrev);

                const firstPageLink = document.createElement('a');
                firstPageLink.innerText = '1';
                firstPageLink.onclick = goFirstPage;
                div.appendChild(firstPageLink);

                if (pageNumber !== 2 && pageNumber !== 3) {
                    const dots = document.createElement('a');
                    dots.innerText = '...';
                    div.appendChild(dots);
                }
            }

            if (pageNumber !== 1 && pageNumber - 1 !== 1) {
                const prevPageLink = document.createElement('a');
                prevPageLink.innerText = pageNumber - 1;
                prevPageLink.onclick = prevPage;
                div.appendChild(prevPageLink);
            }

            const currentPageDiv = document.createElement('div');
            currentPageDiv.className = 'pagination items-center';
            const currentPageLink = document.createElement('a');
            currentPageLink.innerText = pageNumber;
            currentPageDiv.appendChild(currentPageLink);
            div.appendChild(currentPageDiv);

            if (pageNumber !== pageMax) {
                if (pageMax !== pageNumber + 1) {
                    const nextPageLink = document.createElement('a');
                    nextPageLink.innerText = pageNumber + 1;
                    nextPageLink.onclick = nextPage;
                    div.appendChild(nextPageLink);
                }

                if (pageNumber !== pageMax - 1 && pageNumber !== pageMax - 2) {
                    const dots = document.createElement('a');
                    dots.innerText = '...';
                    div.appendChild(dots);
                }

                const lastPageLink = document.createElement('a');
                lastPageLink.innerText = pageMax;
                lastPageLink.onclick = goLastPage;
                div.appendChild(lastPageLink);

                const imgNext = document.createElement('img');
                imgNext.src = `<?= $fiuLaravel ?>/assets/img/round-arrow-right.png`;
                imgNext.width = 30;
                imgNext.height = 30;
                imgNext.onclick = nextPage;
                div.appendChild(imgNext);
            }
            offset = (pageNumber - 1) * limit;
            container.appendChild(div);
        }
    }

      document.addEventListener('DOMContentLoaded', function() {
        let selectedServiceIds = []
        async function fetchData() {
          let servicesData

          try {
            const response = await fetch('<?= $REST_API ?>infosOffre')
            servicesData = await response.json()
            const serviceTypes = servicesData.data.serviceTypes

            serviceTypes.forEach(type => {
              const container = document.getElementById('serviceBase')
              const typeContainer = document.createElement('div')
              typeContainer.className = 'service-type-container'

              const typeName = document.createElement('h4')
              typeName.textContent = type.libelle_serviceTypeFiu
              typeName.className = 'titleCreatePropertyH4 abrilTextBold';
              typeContainer.appendChild(typeName)

              const list = document.createElement('ul')
              list.style.listStyle = 'none'
              list.className = 'col-12 typeSpaceWork'

              //ajout de checkbox services
              type.services.forEach(service => {
                const listItem = document.createElement('li')
                listItem.className = 'col-6'
                listItem.style.color = 'black'
                listItem.style.textAlign = 'left'
                listItem.style.heigth = '45px'
                listItem.style.display = 'flex'
                listItem.style.alignItems = 'center'

                const input = document.createElement('input')
                input.className = 'form-check-input modalCheckbox'
                input.type = 'checkbox'
                input.id = service.id_serviceFiu
                input.style.marginTop = '1%'
                input.style.marginRight = '2%'

                input.addEventListener('change', function() {
                  if (this.checked) {
                    if (!selectedServiceIds.includes(this.id)) {
                      selectedServiceIds.push(this.id)
                    }
                  } else {
                    selectedServiceIds = selectedServiceIds.filter(id => id !== this.id)
                  }
                })
                const label = document.createElement('label')
                label.className = 'form-check-label ml-3'
                label.style.fontFamily = 'azo-sans-web, sans-serif'
                label.style.fontSize = '1.8rem'
                label.style.fontWeight = '500'
                label.setAttribute('for', service.id_serviceFiu)
                label.textContent = service.libelle_serviceFiu

                listItem.appendChild(input)
                listItem.appendChild(label)
                list.appendChild(listItem)
              })

              typeContainer.appendChild(list)
              container.appendChild(typeContainer)
            })
          } catch (error) {
            console.error('Erreur lors du chargement des données:', error)
            // TODO: remove
            // if (env = dev) {
            //   alert('Erreur lors du chargement des données:', error)
            // }
          }
        }
        fetchData()
        renderPagination()
        document.getElementById('resetService').addEventListener('click', function() {
          document.querySelectorAll('.modalCheckbox').forEach(checkbox => {
            checkbox.checked = false
          })
          count = 1000
          selectedServiceIds = []
          service=""
          leaseType=[]
          rechercheProperty()
        })
        document.querySelector('#serviceButton').addEventListener('click', function() {
          service = selectedServiceIds
          favDialog.close()
          rechercheProperty()
        })
      })
    document.querySelectorAll('#prestationService1, #sousLocation, #bailDerogatoire').forEach(checkbox => {
      checkbox.addEventListener('change', function() {
        if (this.checked) {
          if (!leaseType.includes(this.value)) {
            leaseType.push(this.value)
          }
        } else {
          leaseType = leaseType.filter(value => value !== this.value)
        }
      })
    })

    const elementDate = document.getElementById('buttonDate')
    elementDate.addEventListener("click", () => {
      startDate = document.getElementById("startDate").value
      rechercheProperty()
    })

    function resultSearchHtml(item, index) {
      //console.log(JSON.stringify(index) + ": " + JSON.stringify(item));
      console.log(JSON.stringify(index) + ": " + JSON.stringify(item.offres_id));
      var elementOneOffre = document.querySelector(".propertyThumbnail");
      var arrayPhotoOffre = item.allPlanAndPhoto;
      //var allImageByOffreID = arrayPhotoOffre.forEach(AllImageHTML);
      var arrayControlLabel = item.arrayControlLabel;
      //arrayControlLabel.forEach(addCssControlLabel);
      var arrayLabelwithFor = item.arrayLabelwithFor;
      //arrayLabelwithFor.forEach(addCssLabelwithFor);
      var concatArrayControlLabelAndArrayLabelwithFor = item.concatArrayControlLabelAndArrayLabelwithFor;
      concatArrayControlLabelAndArrayLabelwithFor.forEach(addCsstestLabelControlFor);
      insertCss(".carousel" + item.testIndex + " {position: relative; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64); height:100%;} " +
          ".carousel-inner" + item.testIndex + " {position: relative; overflow: hidden; width: 100%; height: 100%;} " +
          ".carousel-open" + item.testIndex + ":checked + .carousel-item" + item.testIndex + " {position: static; opacity: 100;} " +
          ".carousel-item" + item.testIndex + " {position: absolute; opacity: 0; -webkit-transition: opacity 0.6s ease-out; transition: opacity 0.6s ease-out;} " +
          ".carousel-item" + item.testIndex + " img {display: block; height: auto; max-width: 100%; height: 100%;} " +
          ".carousel-indicators" + item.testIndex + " {list-style: none; margin: 0; padding: 0; position: absolute; bottom: 2%; left: 0; right: 0; text-align: center;} " +
          ".carousel-indicators" + item.testIndex + " li {display: inline-block; margin: 0 5px;} " +
          ".carousel-bullet" + item.testIndex + " {color: #fff; cursor: pointer; display: block; font-size: 35px;} " +
          ".carousel-bullet" + item.testIndex + ":hover {color: #aaaaaa;}");

      var urlOneOffre = `<?= $fiuLaravel ?>/location-bureau-entreprise/undefined/${item.offres_id}`

      elementOneOffre.insertAdjacentHTML("afterbegin",`
        <div class="wd-100 part-oneAdDestop maxHeightOneAdDestop" style="border-radius: 15px;border: 1px solid #DDDDDD;margin-bottom: 2%;min-height:290px;">
              <div class="col-5 blocSliderPhotoThumbnail"> 
                  <div style="position: relative;" class="row wd-100 justify-content-space-between items-center imgRadiusLeft imgRadiusRightMobile heightImageSliderFindADestop"> 
                      <!-- Debut test carousel 2-->
                      <div class="carousel${JSON.stringify(item.testIndex)} imgRadiusLeft imgRadiusRightMobile">
                          <div class="carousel-inner${JSON.stringify(item.testIndex)} imgRadiusLeft imgRadiusRightMobile">
                              ${item.carrouselImage}
                              ${JSON.stringify(item.htmlLabelFor)}
                              <ol class="carousel-indicators${JSON.stringify(item.testIndex)}">
                                  ${JSON.stringify(item.htmlCarouselOl)}
                              </ol>
                          </div>
                      </div>
                      <!-- Fin test carousel 2 -->
                  </div>
              </div>
              <div class="column col-7" style="padding: 20px;" onclick="window.location='${urlOneOffre}';">
                  <div class="row">
                      <a class="azoSansBold vert" style=" font-size: 1.7rem; padding-right: 10%; "> ${item.nomprogramme} • ${item.nbPoste} postes • ${item.surfaceTotaleBureau} m² </a>
                      <div style="margin-left: auto;"> </div>
                  </div>
                  <a href="#">
                      <p class="abrilTextRegular" style=" font-size: 2.6rem; margin-top: 0; margin-bottom: 0; ">${item.nomprogramme} </p>
                      <p style=" font-size: 1.5rem; font-weight: 500; font-style: normal; font-family: azo-sans-web,sans-serif; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical; "> ${item.descriptionBien} </p>
                  </a>
                  <div class="row justify-content-space-between items-center" style=" margin-top: auto; ">
                          <div class=" bg-vert items-center justify-content-space-between" style=" gap: 5; width: 124; height: 31; padding: 2%; border-radius: 20px; border: none; ">
                              <img src="<?= $fiuLaravel ?>/assets/img/smiling-pastille.png" width="24" height="20">
                              <p class="pastilleAnnonces">Nouveau</p> </div> </a><div class="column" style=" justify-content: flex-end; ">
                              <a href="#"> </a>
                              <a style=" font-size: 1.6rem; text-decoration: none; align-self: flex-end; text-align: right; ">
                                  <b>${item.LoyerAnnuelCalcule/12} €</b> HT / mois
                              </a>
                              <a style=" font-size: 1.6rem; text-decoration: none; align-self: flex-end; text-align: right; "> ${item.LoyerAnnuelCalcule/item.nbPoste} € HT/ poste </a>
                          </div> 
                      </div> 
                  </div> 
              </div>
        </div>`
      )
      //let slideIndex = 1;
      //insertCss(".mySlides"+JSON.stringify(item.testIndex)+" {display: block;}");
      //showSlides(slideIndex,JSON.stringify(item.testIndex));
      //initialiseDots(item.testIndex);
    }

    const elementRent = document.getElementById('buttonRent')
    elementRent.addEventListener("click", () => {
      rentMin = document.getElementById("rentMin").value
      rentMax = document.getElementById("rentMax").value
      rechercheProperty()
    })

    const element = document.getElementById('ButtonPosteSuperficie')
    element.addEventListener("click", () => {
      surfaceMin = document.getElementById("surfaceMin").value
      surfaceMax = document.getElementById("surfaceMax").value
      posteMin = document.getElementById("posteMin").value
      posteMax = document.getElementById("posteMax").value
      rechercheProperty()
    })
    
    let autocomplete
    let value_place = ''
    let surfaceMin = ''
    let surfaceMax = ''
    let posteMin = ''
    let posteMax = ''
    let rentMin = ''
    let rentMax = ''
    let startDate = ''
    let tri = ''
    let service = ''
    let newCount = 0
    let leaseType = []
    let officeTypes = []

    document.querySelectorAll('#bureau, #coworking').forEach(checkbox => {
      checkbox.addEventListener('change', function() {
        if (this.checked) {
          if (!officeTypes.includes(this.value)) {
            officeTypes.push(this.value)
          }
        } else {
          officeTypes = officeTypes.filter(value => value !== this.value)
        }
        rechercheProperty()
      })
    })


    //boutton reset pour la recherche
    document.getElementById('resetRent').addEventListener('click', function() {
      resetRentMin = document.getElementById('rentMin').value = ""
      resetRentMax = document.getElementById('rentMax').value = ""
      rentMin = ""
      rentMax = ""
      rechercheProperty()
    })
    document.getElementById('resetPoste').addEventListener('click', function() {
      resetposteMin = document.getElementById('posteMin').value = ""
      resetPosteMax = document.getElementById('posteMax').value = ""
      resetsurfaceMin = document.getElementById('surfaceMin').value = ""
      resetsurfaceMax = document.getElementById('surfaceMax').value = ""
      posteMin = ""
      posteMax = ""
      surfaceMin = ""
      surfaceMax = ""
      rechercheProperty()
    })
    document.getElementById('resetDispo').addEventListener('click', function() {
      disponibilité = document.getElementById('startDate').value= ""
      startDate = ""
      rechercheProperty()
    })
    document.getElementById('pertinence').addEventListener('click', function() {
      rechercheProperty()
      tri=""
    })
    document.getElementById('recent').addEventListener('click', function() {
      rechercheProperty()
      tri ="sortBy=createdAt&order=asc"
    })
    document.getElementById('moinsCher').addEventListener('click', function() {
      rechercheProperty()
      tri="sortBy=rent&order=asc"
    })


    function initAutocomplete() {
        const input = document.getElementById("placeInput")
        if(window.location.href.indexOf("location-bureau-paris-1") != -1){
          //75001 Paris, France
          input.value = "75001 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-2") != -1){
          //75002 Paris, France
          input.value = "75002 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-3") != -1){
          //75003 Paris, France
          input.value = "75003 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-4") != -1){
          //75004 Paris, France
          input.value = "75004 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-5") != -1){
          //75005 Paris, France
          input.value = "75005 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-6") != -1){
          //75006 Paris, France
          input.value = "75006 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-7") != -1){
          //75007 Paris, France
          input.value = "75007 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-8") != -1){
          //75008 Paris, France
          input.value = "75008 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-9") != -1){
          //75009 Paris, France
          input.value = "75009 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-10") != -1){
          //75010 Paris, France
          input.value = "75010 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-11") != -1){
          //75011 Paris, France
          input.value = "75011 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-12") != -1){
          //75012 Paris, France
          input.value = "75012 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-13") != -1){
          //75013 Paris, France
          input.value = "75013 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-14") != -1){
          //75014 Paris, France
          input.value = "75014 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-15") != -1){
          //75015 Paris, France
          input.value = "75015 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-16") != -1){
          //75016 Paris, France
          input.value = "75016 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-17") != -1){
          //75017 Paris, France
          input.value = "75017 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-18") != -1){
          //75018 Paris, France
          input.value = "75018 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-19") != -1){
          //75019 Paris, France
          input.value = "75019 Paris, France"
        }
        if(window.location.href.indexOf("location-bureau-paris-20") != -1){
          //75020 Paris, France
          input.value = "75020 Paris, France"
        }
        const options = {
            componentRestrictions: { country: 'fr' },
            fields: ['address_components', 'geometry.location', 'place_id', 'formatted_address'],
        }
        autocomplete = new google.maps.places.Autocomplete(input, options)
        autocomplete.addListener("place_changed", onPlaceChange)

        // Initialize map after autocomplete
        initMap()

        if(window.location.href.indexOf("location-bureau-paris-1") != -1){
          rechercheProperty()
        }
        input.addEventListener('input', function() {
        if (this.value === '') {
          value_place = ''
          rechercheProperty()
        }
      })
    }

    function rechercheProperty() {  
      let arrayQuery = []
      let urlBase = `<?= $REST_API ?>search?`
      let changeManuallyValue = false
      
      if(value_place == ''){
        if(window.location.href.indexOf("location-bureau-paris-1") != -1){
            //75001 Paris, France
            arrayQuery.push(`zipCode=75001`)
        }
        if(window.location.href.indexOf("location-bureau-paris-2") != -1){
            //75002 Paris, France
            arrayQuery.push(`zipCode=75002`)
        }
        if(window.location.href.indexOf("location-bureau-paris-3") != -1){
            //75003 Paris, France
            arrayQuery.push(`zipCode=75003`)
        }
        if(window.location.href.indexOf("location-bureau-paris-4") != -1){
            //75004 Paris, France
            arrayQuery.push(`zipCode=75004`)
        }
        if(window.location.href.indexOf("location-bureau-paris-5") != -1){
            //75005 Paris, France
            arrayQuery.push(`zipCode=75005`)
        }
        if(window.location.href.indexOf("location-bureau-paris-6") != -1){
            //75006 Paris, France
            arrayQuery.push(`zipCode=75006`)
        }
        if(window.location.href.indexOf("location-bureau-paris-7") != -1){
            //75007 Paris, France
            arrayQuery.push(`zipCode=75007`)
        }
        if(window.location.href.indexOf("location-bureau-paris-8") != -1){
            //75008 Paris, France
            arrayQuery.push(`zipCode=75008`)
        }
        if(window.location.href.indexOf("location-bureau-paris-9") != -1){
            //75009 Paris, France
            arrayQuery.push(`zipCode=75009`)
        }
        if(window.location.href.indexOf("location-bureau-paris-10") != -1){
            //75010 Paris, France
            arrayQuery.push(`zipCode=75010`)
        }
        if(window.location.href.indexOf("location-bureau-paris-11") != -1){
            //75011 Paris, France
            arrayQuery.push(`zipCode=75011`)
        }
        if(window.location.href.indexOf("location-bureau-paris-12") != -1){
            //75012 Paris, France
            arrayQuery.push(`zipCode=75012`)
        }
        if(window.location.href.indexOf("location-bureau-paris-13") != -1){
            //75013 Paris, France
            arrayQuery.push(`zipCode=75013`)
        }
        if(window.location.href.indexOf("location-bureau-paris-14") != -1){
            //75014 Paris, France
            arrayQuery.push(`zipCode=75014`)
        }
        if(window.location.href.indexOf("location-bureau-paris-15") != -1){
            //75015 Paris, France
            arrayQuery.push(`zipCode=75015`)
        }
        if(window.location.href.indexOf("location-bureau-paris-16") != -1){
            //75016 Paris, France
            arrayQuery.push(`zipCode=75016`)
        }
        if(window.location.href.indexOf("location-bureau-paris-17") != -1){
            //75017 Paris, France
            arrayQuery.push(`zipCode=75017`)
        }
        if(window.location.href.indexOf("location-bureau-paris-18") != -1){
            //75018 Paris, France
            arrayQuery.push(`zipCode=75018`)
        }
        if(window.location.href.indexOf("location-bureau-paris-19") != -1){
            //75019 Paris, France
            arrayQuery.push(`zipCode=75019`)
        }
        if(window.location.href.indexOf("location-bureau-paris-20") != -1){
            //75020 Paris, France
            arrayQuery.push(`zipCode=75020`)
        }
      }
      if(value_place !== ''){
          arrayQuery.push(value_place)
          changeManuallyValue = true
          let partTextLocationCoworking = document.querySelector('#partTextLocationCoworking');
          if(partTextLocationCoworking !== null){
            var nodeList = document.querySelectorAll("#partTextLocationCoworking");
            if(nodeList.length >0){
                    for (let i = 0; i < nodeList.length; i++) {
                      nodeList[i].remove(); //on supprime la recherche précédente car on peut rentrer qu'une seule ville ou code postal
                    }
            }
          }
      }
      if(tri !== ''){
          arrayQuery.push(tri)
          changeManuallyValue = true
      }
      if(leaseType.length > 0){
          arrayQuery.push(`leaseTypes=${leaseType.join(',')}`)
          changeManuallyValue = true
      }
      if(officeTypes.length > 0){
          arrayQuery.push(`officeTypes=${officeTypes.join(',')}`)
          changeManuallyValue = true
      }
      if(service.length > 0){
          arrayQuery.push(`services=${service}`)
          changeManuallyValue = true
        }
      if(surfaceMin !== ''){
          arrayQuery.push(`surfaceMin=${surfaceMin}`)
          changeManuallyValue = true
      }
      if(surfaceMax !== ''){
          arrayQuery.push(`surfaceMax=${surfaceMax}`)
          changeManuallyValue = true
      }
      if(posteMin !== ''){
          arrayQuery.push(`capacityMin=${posteMin}`)
          changeManuallyValue = true
      }
      if(posteMax !== ''){
          arrayQuery.push(`capacityMax=${posteMax}`)
          changeManuallyValue = true
      }
      if(rentMin !== ''){
          arrayQuery.push(`rentMin=${rentMin}`)
          changeManuallyValue = true
      }
      if(rentMax !== ''){
          arrayQuery.push(`rentMax=${rentMax}`)
          changeManuallyValue = true
      }
      if(startDate !== ''){
          arrayQuery.push(`startDate=${startDate}`)
          changeManuallyValue = true
      }
      if(offset !== ''){
          arrayQuery.push(`offset=${offset}`)
      }
      const queryString = arrayQuery.join('&')
      const url = urlBase + queryString
      if(changeManuallyValue == true){
        if(window.location.href.indexOf("location-bureau-paris-1") != -1 || window.location.href.indexOf("location-bureau-paris-2") != -1 || window.location.href.indexOf("location-bureau-paris-3") != -1 || window.location.href.indexOf("location-bureau-paris-4") != -1 || window.location.href.indexOf("location-bureau-paris-5") != -1 || window.location.href.indexOf("location-bureau-paris-6") != -1 || window.location.href.indexOf("location-bureau-paris-7") != -1 || window.location.href.indexOf("location-bureau-paris-8") != -1 || window.location.href.indexOf("location-bureau-paris-9") != -1 || window.location.href.indexOf("location-bureau-paris-10") != -1 || window.location.href.indexOf("location-bureau-paris-11") != -1 || window.location.href.indexOf("location-bureau-paris-12") != -1 || window.location.href.indexOf("location-bureau-paris-13") != -1 || window.location.href.indexOf("location-bureau-paris-14") != -1 || window.location.href.indexOf("location-bureau-paris-15") != -1 || window.location.href.indexOf("location-bureau-paris-16") != -1 || window.location.href.indexOf("location-bureau-paris-17") != -1 || window.location.href.indexOf("location-bureau-paris-18") != -1 || window.location.href.indexOf("location-bureau-paris-19") != -1 || window.location.href.indexOf("location-bureau-paris-20") != -1){
            // replace current URL with newURL
            history.pushState({}, null, `<?= $fiuLaravel ?>/location-bureau-entreprise`);
        }
      }
      console.log("url après recherche: ", url)
      fetch(url, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
        })
        .then(response => response.json())
        .then(data => {
            let properties = data.data.data
            updateMarkers(properties)
            newCount = data.data.numberTotalResult
            updateCount(newCount)
             var nodeList = document.querySelectorAll(".part-oneAdDestop");
            if(nodeList.length >0){
              for (let i = 0; i < nodeList.length; i++) {
                nodeList[i].remove(); //on supprime la recherche précédente
              }
            }
            properties.forEach(resultSearchHtml)
        })
    }

    function onPlaceChange() {
        const place = autocomplete.getPlace()

        if(place.address_components[0].types[0] == "postal_code"){
          value_place = `zipCode=${place.address_components[0].long_name}`

        } else if(place.address_components[0].types[0] == "locality"){
          value_place = `city=${place.address_components[0].long_name}`

        } else {
          value_place = `address=${place.formatted_address}&radius=500`
        }
        rechercheProperty()
    }

    let map
    let markers = []

    async function initMap() {
      const position = { lat: 48.856613, lng: 2.352222 }
      const { Map } = await google.maps.importLibrary("maps")
      const { AdvancedMarkerElement } = await google.maps.importLibrary("marker")

      map = new Map(document.getElementById("map_2"), {
          zoom: 12,
          center: position,
          mapId: "DEMO_MAP_ID",
      })
      rechercheProperty()
    }

    function updateMarkers(properties) {
      class CustomHtmlMarker extends google.maps.OverlayView {
        constructor(position, map, loyerMensuel, offres_id) {

            super()
            this.position = position
            this.map = map
            this.div = null
            this.loyerMensuel = loyerMensuel
            this.offres_id = offres_id
            this.setMap(map)
        }

        onAdd() {
            const div = document.createElement('div')
            div.style.position = 'absolute'
            console.log("this.offres_id: ", this.offres_id)
            div.innerHTML = `<a href="<?= $fiuLaravel ?>/location-bureau-entreprise/undefined/${this.offres_id}" class="bg-blanc items-center justify-content-center btnMap" style="z-index: 6">${this.loyerMensuel}€</a>`
            this.getPanes().overlayMouseTarget.appendChild(div)
            this.div = div
        }

        draw() {
            const overlayProjection = this.getProjection()
            const position = overlayProjection.fromLatLngToDivPixel(this.position)
            const div = this.div
            div.style.left = position.x + 'px'
            div.style.top = position.y + 'px'
        }

        onRemove() {
          if (this.div) {
              this.div.parentNode.removeChild(this.div)
              this.div = null
          }
        }
      }

      // Clear existing markers
      markers.forEach(marker => marker.setMap(null))
      markers = []

      // Add new markers
      properties.forEach(property => {
          if (property.latitude && property.longitude) {
              const position = new google.maps.LatLng(parseFloat(property.latitude), parseFloat(property.longitude))
              const loyerMensuel = Math.round(property.LoyerAnnuelCalcule / 12)
              const offres_id = property.offres_id
              const customMarker = new CustomHtmlMarker(position, map, loyerMensuel, offres_id)
              markers.push(customMarker)
          }
      })
    }
      
    const modalOptionDestop = document.getElementById('modalOptionDestop')
    const favDialog = document.getElementById('favDialog')
    const number = document.getElementById('number')
    const btn = document.querySelector(".btn")

    modalOptionDestop.addEventListener('click', () => {
      favDialog.showModal()
    })

    document.getElementById('hideModalDestop').onclick = function() { 
      favDialog.close()  
    }

    

    function addCssControlLabel(item, index){
      //#carousel-1:checked
      //insertCss("#mySlides"+indexResult+" {display: block;}");
      insertCss("."+item+" {display: block;}");
      insertCss("."+item+" {color: #428bca;}");
      insertCss(".carousel-indicators li:nth-child("+index+") .carousel-bullet"+" {color: #428bca;}");
      //console.log('item: '+item);
      //console.log('index: '+index);
    }


    function addCssLabelwithFor(item, index){
      //#carousel-1:checked
      insertCss("#"+item+":checked {display: block;}")
    }

    function addCsstestLabelControlFor(item, index){
      let splitItem = item.split(';')
      calcIndex = index + 1
      //#carousel-1:checked ~ .control-1
      insertCss("#"+splitItem[1]+":checked ~ ."+splitItem[0]+" {display: block;}")
      //#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet
      insertCss("#"+splitItem[1]+":checked ~ ."+splitItem[0]+" ~ .carousel-indicators"+splitItem[2]+" li:nth-child("+calcIndex+") .carousel-bullet"+splitItem[2]+" {color: #428bca;}")
    }

    function insertCss( code ) {
      var style = document.createElement('style')
      style.type = 'text/css'
      if (style.styleSheet) {
          // IE
          style.styleSheet.cssText = code
      } else {
          // Other browsers
          style.innerHTML = code
      }
      document.getElementsByTagName("head")[0].appendChild( style )
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    //on met un timeout pour attendre que les DOM soit chargé
    setTimeout(() => {
      $("ul li").click(function(e) {
        // make sure we cannot click the slider
        if ($(this).hasClass('slider')) {
          return;
        }

        /* Add the slider movement */

        // what tab was pressed
        var whatTab = $(this).index();

        // Work out how far the slider needs to go
        var howFar = 160 * whatTab;

        $(".slider").css({
          left: howFar + "px"
        });

        /* Add the ripple */

        // Remove olds ones
        $(".ripple").remove();

        // Setup
        var posX = $(this).offset().left,
            posY = $(this).offset().top,
            buttonWidth = $(this).width(),
            buttonHeight = $(this).height();

        // Add the element
        $(this).prepend("<span class='ripple'></span>");

        // Make it round!
        if (buttonWidth >= buttonHeight) {
          buttonHeight = buttonWidth;
        } else {
          buttonWidth = buttonHeight;
        }

        // Get the center of the element
        var x = e.pageX - posX - buttonWidth / 2;
        var y = e.pageY - posY - buttonHeight / 2;

        // Add the ripples CSS and start the animation
        $(".ripple").css({
          width: buttonWidth,
          height: buttonHeight,
          top: y + 'px',
          left: x + 'px'
        }).addClass("rippleEffect");
      });
    }, 500);
  </script>
  <script>
    /*
    if(window.location.href.indexOf("location-bureau-paris-1") != -1){
      let partTextLocationCoworking = document.querySelector('.partTextLocationCoworking');console.log('partTextLocationCoworking :'+partTextLocationCoworking)
      if(partTextLocationCoworking == null){
        document.querySelector('#partTextLocationCoworking').insertAdjacentHTML("afterbegin", ` <div> <h2 class="font-m">Location bureaux Paris 1</h2> <p class="font-xs">La location de bureau dans le 1er arrondissement de Paris offre une multitude d'avantages pour votre entreprise, allant au-delà de la simple acquisition d'un espace de travail. Voici pourquoi ce quartier prestigieux est un choix judicieux :</p> <ul class="font-xs"> <li>Image de marque inégalée : Opter pour une location de bureau dans le 1er arrondissement vous permet d'associer votre entreprise à l'histoire et à la culture de Paris. La proximité du Louvre, du Palais Royal et d'autres sites iconiques renforce instantanément votre image de marque.</li> <li>Accès facile aux partenaires et clients : L'emplacement central du 1er arrondissement facilite les rencontres avec des partenaires commerciaux, des clients et des institutions gouvernementales. Vos rendez-vous se dérouleront dans un cadre prestigieux.</li> <li>Diversité des activités : Ce quartier dynamique abrite une variété de boutiques de luxe, de restaurants étoilés, de galeries d'art, et de théâtres. Cela offre des opportunités uniques pour le divertissement et le réseautage de vos employés.</li> <li>Atmosphère de créativité : L'effervescence culturelle du 1er arrondissement peut stimuler la créativité de vos équipes. Les inspirations artistiques et historiques se trouvent à chaque coin de rue.</li> </ul> <h2 class="font-m">Accessibilité exceptionnelle par les transports en commun</h2> <p class="font-xs">La location de bureau dans le 1er arrondissement est rendue encore plus attrayante grâce à son accessibilité sans pareille par les transports en commun. Voici les principales lignes de métro et de RER qui desservent ce quartier :</p> <p class="font-xs">Métro lignes 1, 8 et 12: Les stations de métro Concorde vous relient directement à des quartiers clés de Paris. La ligne 1 est la plus fréquentée et offre un accès rapide à de nombreux sites.</p> <p class="font-xs">Métro ligne 4 : La station Les Halles de la ligne 4 est un nœud de transport majeur, offrant des connexions faciles vers d'autres lignes de métro.</p> <p class="font-xs">Métro lignes 7 et 14 : La station Pyramide des lignes 7 et 14 offre un accès supplémentaire.</p> <p class="font-xs">RER A - B - D : La station Châtelet-Les Halles est l'une des plus grandes gares souterraines d'Europe, connectant le 1er arrondissement à des destinations en banlieue et au-delà.</p> <p class="font-xs">Cette connectivité exceptionnelle facilite les déplacements de vos employés, partenaires et clients vers votre location de bureau dans le 1er arrondissement.</p> <h2 class="font-m">Coûts de location de bureau à Paris 1</h2> <p class="font-xs">Les <u>coûts de location</u> de bureau dans le 1er arrondissement varient en fonction de plusieurs facteurs, notamment la taille de l'espace et les services inclus. Voici un aperçu des prix de location de bureau par m² par an constatés dans le quartier :</p> <ul class="font-xs"> <li>Bureau neuf ou rénové : Les prix de location de bureau pour des espaces neufs ou rénovés se situent généralement entre 610 € HT HC par m² par an (loyer bas) et 790 € HT HC par m² par an (loyer haut).</li> <li>Bureau à l’état d'usage : Les locations de bureaux dans cet état sont plus abordables, allant de 470 € HT HC par m² par an (loyer bas) à 650 € HT HC par m² par an (loyer haut).</li> </ul> <p class="font-xs">En ce qui concerne la location de bureau par poste de travail par mois, voici les prix constatés à Paris 1 :</p> <ul class="font-xs"> <li>Prix bas : À partir de 365 € HT par poste de travail par mois.</li> <li>Prix moyen : Environ 500 € HT par poste de travail par mois.</li> <li>Prix premium : Dépassant les 900 € HT par poste de travail par mois pour des espaces haut de gamme.</li> </ul> <p class="font-xs">La location de bureau dans le 1er arrondissement de Paris offre une position centrale, une image de marque renforcée, une accessibilité exceptionnelle et une diversité gastronomique, bien que les coûts puissent varier en fonction du type d'espace choisi. Ce quartier reste un choix privilégié pour les entreprises souhaitant bénéficier de la renommée et de l'effervescence de Paris.</p> <p class="font-m"><b>FAQ :</b></p> <ul class="font-xs" style="list-style-type: decimal;"> <li style="font-weight: bold;"> <div style="display: block;"><b>Pourquoi choisir la location de bureau dans le 1er arrondissement de Paris pour mon entreprise?</b></div> <div style="font-weight: normal; padding-top: 0.5%; padding-bottom: 0.5%;">Opter pour un bureau dans le 1er arrondissement offre une image de marque inégalée grâce à sa proximité avec des sites emblématiques tels que le Louvre et le Palais Royal. De plus, son emplacement central facilite les rencontres professionnelles et offre une diversité d'activités pour le divertissement et le réseautage.</div> </li> <li style="font-weight: bold;"> <div style="display: block;"><b>Quels sont les avantages en termes d'accessibilité offerts par la location de bureau dans le 1er arrondissement ?</b></div> <div style="font-weight: normal; padding-top: 0.5%; padding-bottom: 0.5%;">Le 1er arrondissement bénéficie d'une accessibilité exceptionnelle par les transports en commun, avec des stations de métro telles que Concorde, Les Halles, et Pyramide, ainsi que la grande gare souterraine Châtelet-Les Halles desservant les lignes de RER A, B, et D. Cette connectivité facilite les déplacements de vos employés, partenaires et clients.</div> </li> <li style="font-weight: bold;"> <div style="display: block;"><b>Quels sont les coûts associés à la location de bureau dans le 1er arrondissement de Paris?</b></div> <div style="font-weight: normal; padding-top: 0.5%; padding-bottom: 0.5%;">Les coûts varient en fonction de la taille et de l'état de l'espace. Les prix par m² par an vont de 470 € HT HC à 790 € HT HC, selon que le bureau est à l'état d'usage ou neuf/rénové. Pour la location par poste de travail par mois, les prix varient de 365 € HT pour des espaces basiques à plus de 900 € HT pour des espaces haut de gamme.</div> </li> </ul> </div> `);
      }
    }
    */
   /*
      let partTextLocationCoworking = document.querySelector('.partTextLocationCoworking');console.log('partTextLocationCoworking :'+partTextLocationCoworking)
      if(partTextLocationCoworking !== null){
      var nodeList = document.querySelectorAll(".part-oneAdDestop");
        if(nodeList.length >0){
                for (let i = 0; i < nodeList.length; i++) {
                  nodeList[i].remove(); //on supprime la recherche précédente
                }
        }
      }
   */
  </script>
@endsection
