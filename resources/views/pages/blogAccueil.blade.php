<?php
$API_KEY = getenv('GOOGLE_API_KEY');
?>
@extends('layouts.defaultFiu')
<!-- ecran = blogAccueil.blade.php   -->


@section('title')
  @if(Request::is('blog'))
    blog Fiu : votre guide de la location de bureau
  @else
    Guide complet sur la location de bureaux
  @endif 
@endsection

@section('metaDescription')
  @if(Request::is('blog'))
    Découvrez toutes les tendances de la location de bureau et du coworking: Bureau opéré, bureau partagé, bail précaire, espace de coworking: avantages, inconvénients, prix... Start'up, PME.
  @else
    Découvrez tout ce qu'il faut savoir sur la location de bureaux : types de baux, obligations légales et conseils pratiques pour réussir votre location de bureau
  @endif
@endsection


@section('canonical')
  @if(Request::is('blog'))
  <link rel="canonical" href="{{ url('/blog') }}" />
  @else
  <link rel="canonical" href="{{ url('/guide') }}" />
  @endif
@endsection

@section('ogImagePrincipale')
<meta property="og:image" content="{{ asset('assets/img/homepage-test5.png')}}"/>
@endsection

@section('pagetitle')

@endsection

@section('custom_css')
<link rel="stylesheet" href="{{ asset('assets/css/pagination.css')}}" type="text/css"/>
<style>
  .containerResult{
    display: flex;
    flex-direction: row;
  }

  .maxWidthSearchBlog{
    max-width: 26vw;
  }

  .gapPartOneResult{
    gap: 4%;
  }

  .maxWidthFirstPartBlog{
    max-width: calc(100% - 300px);
  }

  .marginLeftSearchBlog{
    margin-left: 3%;
  }

  @media (max-width: 1200px) {
    .containerResult{
      display: flex;
      flex-direction: column-reverse;
    }
    .maxWidthSearchBlog{
      max-width: 100vw;
    }
    .centerOneResult{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .gapPartOneResult{
      gap: 4%;
    }

    .maxWidthFirstPartBlog{
      max-width: calc(100% - 30px);
    }

    .marginLeftSearchBlog{
      margin-left: 0;
    }

  }

  @media only screen and (max-width: 1271px) and (min-width: 1200px){
    .marginTopFormat{
      margin-top: 9%;
    }
  }
</style>
<style>
  ul, li {
            list-style: none;
        }

        #wrapper {
            width: 900px;
            margin: 20px auto;
        }

        .data-container {
            margin-top: 20px;
        }

        .data-container ul {
            padding: 0;
            margin: 0;
        }

        .data-container li {
            margin-bottom: 5px;
            padding: 5px 10px;
            background: #eee;
            color: #666;
        }
</style>
@endsection


@section('content')
<div>
    <div style="background-color: #FFF6F0;margin-top: 90px;position: relative;overflow: hidden;">
        <div style="display: block; margin: 0 auto;width: 100%;" class="maxWidthFirstPartBlog">
            <div style="padding-top:4%;" class="flex-wrap-row" id="randomArticle">
                
            </div>
        </div>
        <img src="{{ asset('assets/img/emojiBlog.png')}}" width="5%" style="position:absolute;right: -1%;top: 25%;transform: rotate(-22deg);" alt="personnage rose souriant">
    </div>
    <div style="background-color: white;padding-left: 8%;padding-right: 8%;padding-top: 7%;" class="containerResult">
        <div class="col-8">
          <div style="display:flex;flex-wrap: wrap;" class="col-12 gapPartOneResult" id="data-container">
          </div>
          <div class="col-12" id="pagination-container" style="display: flex;justify-content: center;margin-bottom: 2%;"></div>
        </div>
        <div class="col-4">
        <div class="cardDisplayProperty maxWidthSearchBlog marginLeftSearchBlog" style="
                  max-height: 650;
                  cursor: pointer;
                  border: 1px solid #DDDDDD;
                  min-width: 318px;
                  margin-bottom: 2%;
                  background: #1c4151;
                  border-top-left-radius: 32px;
                "
                >
                  <div class="addPaddingBottomOnContentProperty" style=" padding-left: 7%; padding-top: 8%; padding-right: 8%; ">
                    {{--
                    <div class="items-center mobile-withSearchBarFindOneDestop" style="border: 1px solid #fff;border-radius: 40px;">
                      <img src="{{asset('assets/img/SearchBlogIcon.webp')}}" style="padding-left: 6%;">
                      <input id="placeInput" class="asoSansRegular col-12 pac-target-input" style=" border: none; height: 70px; outline: none; width: 90%; padding: 20px 28px 18px 2%; background: transparent; color: white; " placeholder="Rechercher" autocomplete="off">  
                    </div>
                    --}}
                    <h3 class="abrilTextRegular vert" style=" font-size: 2.5rem; margin-top: 8%; margin-bottom: 0; ">
                      Suivez nos actus !
                    </h3>
                    <div style="display: flex;gap: 5%;margin-top: 5%;">
                      <a href="https://www.linkedin.com/company/fiuflexinuse/"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" style="fill: #fff; display: inline-block; height: 30px; width: 30px;"><g id="LinkedIn In1_layer"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></g></svg></a>
                      <a href="https://www.facebook.com/people/Fiu-flexinusefr/100089726257268/"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" style="fill: #fff; display: inline-block; height: 30px; width: 30px;"><g id="Facebook F2_layer"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></g></svg></a>
                      <a href="https://www.instagram.com/fiu_flexinuse.fr/"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" style="fill: #fff; display: inline-block; height: 30px; width: 30px;"><g id="Instagram3_layer"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></g></svg></a>
                    </div>
                    <h3 class="abrilTextRegular vert" style=" font-size: 2.5rem; margin-top: 17%; ">
                      Catégories
                    </h3>
                    <ul style="padding-left: 0;">
                      @foreach($allCategoryBlog as $categoryBlog)
                        @if(Request::is('blog'))
                          @if($categoryBlog["blog_id"] == 1) 
                            <li style="border-bottom: 1px solid; color: #fff; display: inline-block; font-family: azo-sans; font-size: 18px; font-style: normal; font-weight: 300; line-height: 26px; padding: 0 0 9px; text-align: left; width: 100%;margin-bottom: 5%;"><a href="{{url('tag/'.$categoryBlog['slug'])}}">{{$categoryBlog['category_name']}}</a></li>
                          @endif
                        @else
                          @if($categoryBlog["blog_id"] == 2) 
                            <li style="border-bottom: 1px solid; color: #fff; display: inline-block; font-family: azo-sans; font-size: 18px; font-style: normal; font-weight: 300; line-height: 26px; padding: 0 0 9px; text-align: left; width: 100%;margin-bottom: 5%;"><a href="{{url('tag/'.$categoryBlog['slug'])}}">{{$categoryBlog['category_name']}}</a></li>
                          @endif
                        @endif  
                      @endforeach
                    </ul>
                  </div>
                </div>
        </div>
              
</div>
<div
    style="
      height: 100%;
      position: relative;
      background-color: #000;
      border-top-left-radius: 80px;
    "
    class="wd-100"
>
      <div class="unionRightLeftContact wd-100">
        <div class="wd-40 leftPartContact">
          <div class="topContactTitle blocEmojiAndMessage">
            <div style=" display: block; position: relative; ">
              <div class="emojiContact">
                <img src="{{ asset('assets/img/cta-contact-yellow-eyelash.png')}}" width="100%" height="100%" alt="personnage jaune souriant qui regarde vers la droite avec de longs cils" />
              </div>

              <div style=" position: relative; ">
                <h2
                  style="
                    color: #fff;
                    font-family: abril-text;
                    line-height: 1.2em;
                  "
                  class="fontContactTitle"
                  id="modifyFontContactCTAFormTitle"
                >
                  <div class="textLeftContactPartOne">On reste</div>
                  <div class="textLeftContactPartTwo">en contact ?</div>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="wd-60 rightPartContact">
          <div class="items-center justify-content-center contentRightContact">
            <label id="p4" style=" color: #fff;display: none; ">Ce deuxième paragraphe également</label>
            <div class="widthPartInputContact">
              <form id="inscrirenewsletterAccueil" method="POST" action="{{ url('/inscrirenewsletter/') }}" style="gap: 10px; display: flex;">
                      <input type="text"                      
                      class="inputEmail inputEmailContact highHeightInputContactCTAForm"                    
                      placeholder="Adresse e-mail"
                      style=" font-family: Azo Sans, sans-serif; "                      
                       name="emailletterAccueil" id="emailletterAccueil" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">                      
                      <button 
                        class="button buttonFollowerContact highHeightInputContactCTAForm"
                        style="
                              color: #000;
                              border-radius: 8px;
                              text-transform: none;
                              background-color: #9E9DFF;
                              font-family: azo-sans-web,sans-serif;
                              font-weight: 900;
                              font-size: 2rem;
                              z-index: 1;
                              border: none;
                            "
                        type="button"  value="ajoutemailletterAccueil" id="ajoutemailletterAccueil">                        
                        S'abonner
                      </button>                       
              </form>
            </div>
            <p
              class="wd-50 font-m"
              style="
                color: #fff;
                line-height: 1.2em;
                margin-bottom: 0.5%;
              "
              id="modifyFont-m-ContactCTAForm"
            >
              Inscrivez-vous à notre newsletter pour être informé.e de nos trouvailles, nos astuces et conseils, l’actu
              des bureaux opérés
            </p>
            <p
              class="wd-50"
              style="
                color: #A5A5A5;
                line-height: 1em;
                margin-bottom: 2%;
                z-index: 1;
                font-size: 1.2rem;
                font-family: Azo Sans, sans-serif;
              "
            >
              En cliquant vous acceptez de recevoir nos derniers articles de blog par courrier électronique et vous
              prenez connaissance de <u>notre politique de confidentialité</u>. Vous pouvez vous désinscrire à tout
              moment à l’aide des liens de désinscription. Vos données personnelles collectées sont uniquement destinées
              à fiu et seront uniquement exploitées dans le cadre de la soumission effective d’un formulaire du site.
            </p>
          </div>
        </div>
      </div>
      <div class="starContactOne">
        <img  src="{{ asset('assets/img/etoileContact-1.png')}}" width="28" height="28" alt="Quatre traits blancs formant un petit X" />
      </div>
      <div class="starContactTwo">
        <img src="{{ asset('assets/img/etoileContact-2.png')}}" width="48" height="48" alt="Quatre traits blancs formant un grand X" />
      </div>
</div> 
@endsection


@section('scripts')
<script src="http://code.jquery.com/jquery-3.6.1.js"></script>
<script src="{{ asset('assets/js/pagination.js')}}"></script>
<script>
  function truncateText(text, maxLength) {
            if (text.length > maxLength) {
                return text.substring(0, maxLength) + "...";
            }
            return text;
  }
  let hiddenBlogId = '{{ $blogID }}';
</script>
<script>
  //let urlPage = '{{ asset('/allBlog')}}'
  //let urlPage = "{{ url('/allBlog')}}"+"/"+hiddenBlogId;
  let urlPage = ""
  if(hiddenBlogId == 1){
    urlPage = "{{ asset('allBlog/1')}}"
  }else{
    urlPage = "{{ asset('allBlog/2')}}"
  }
  

  $('#pagination-container').pagination({
    dataSource: function (done) {
                $.ajax({
                    type: 'GET',
                    url: urlPage,
                    success: function (response) {
                        console.log("response : ", response);
                        response = response.slice(1); // on supprime le premier element du tableau qui est le dernier article ajouté
                        done(response);
                    }
                });
            },
    pageSize: 6,
    callback: function(data, pagination) {
        // template method of yourself
        var html = '';
        $.each(data, function (index, item) {
                    //html += '<p>' + item.title + '</p>'; // Changez 'name' pour votre attribut
              
                    let buttonCategory = "";
                    
                    let categoryName = String(item.categoryName).split(",")
                    let blogCategoriesSlug = String(item.blogCategoriesSlug).split(",")
                    let arrayButtonCategory = [];
                    categoryName.forEach(function(val,i) {
                        arrayButtonCategory.push(`<a href="{{url('tag')}}/${blogCategoriesSlug[i]}" style="background: #7dd175; border: 1px solid #7dd175; border-radius: 31px;font-size: 14px !important;line-height: 28px !important;padding: .8rem .8rem .8rem;">${val}</a>`);
                    });
                    buttonCategory = arrayButtonCategory.join("");

                    let urlBase;
                    if(window.location.href.indexOf("blog") != -1){
                      urlBase = "{{ url('/blog') }}"
                    }else{
                      urlBase = "{{ url('/guide') }}"
                    }

                    let titreImage = ""
                    if(item.titreimage == null){
                      titreImage = ""
                    }else{
                      titreImage = "alt='"+item.titreimage+"'"
                    }
                    

                    html += `<div class="cardDisplayProperty imgRadiusTop bg-blanc centerOneResult" style="
                                max-width: 26vw;
                                max-height: 650;
                                cursor: pointer;
                                box-shadow: 0 11px 30px rgba(154, 161, 177, .2);
                                min-width: 318px;
                                margin-bottom: 8%;
                                cursor: auto;
                              "
                              >
                                <div style="maxHeight: 419px;">
                                  <img src="{{asset('recupereimageBLOG')}}/${item.blog_posts_id}/${item.image_large}/3" class="imgRadiusTop" style="width:100%;height:400px;object-fit: cover;object-position: center center;" ${titreImage}>
                                </div>
                                <div class="bg-blanc addPaddingBottomOnContentProperty" style=" padding-left: 7%; padding-top: 8%; padding-right: 8%; ">
                                  <div style="display: flex; gap: 1%;">${buttonCategory}</div>
                                  <h3 style=" color: #000; font-family: Azo Sans, sans-serif; font-size: 28px; font-style: normal; font-weight: 800; line-height: inherit; text-align: left; ">
                                    `+ item.title +`
                                  </h3>
                                  <p style="color: #000; font-family: abril-text; font-size: 18px !important; font-style: normal; font-weight: 400; line-height: 25px; text-align: left;">
                                    `+truncateText(item.subtitle, 60)+`
                                  </p>
                                  <a style="
                                    font-family: azo-sans-uber, sans-serif;
                                    display: flex;
                                    margin-bottom: 1.3em;
                                    font-weight: 100;
                                    align-items: center;
                                    align-content: center;
                                    padding-top: 4%;
                                    " 
                                    class="discover-arrow font-xs" href="${urlBase}/${item.slug}"
                                  >
                                    <div style=" padding-right: 2%; ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26.311" height="11.61" viewBox="0 7.448 26.311 11.61">
                                          <path d="m21.166 18.73 4.83-4.687c.21-.203.315-.479.315-.783v-.014c0-.304-.105-.58-.314-.784l-4.83-4.686a1.034 1.034 0 0 0-1.511 0 1.157 1.157 0 0 0 0 1.58l2.903 2.778H1.074c-.595 0-1.074.5-1.074 1.119 0 .63.48 1.12 1.07 1.12h21.485l-2.903 2.776a1.157 1.157 0 0 0 0 1.581c.42.437 1.095.437 1.514 0Z" fill="black" fill-rule="evenodd" data-name="Icon ionic-md-arrow-round-forward"></path>
                                        </svg>
                                    </div>
                                    Découvrir
                                  </a>
                                </div>
                              </div>`;
              
        });
        $('#data-container').html(html);
        //affichageRandom();
    }
  })
</script>
<script>
  function affichageRandom(){
        //const url = "{{ asset('/allBlog')}}";
        console.log("hiddenBlogId-2 : "+typeof(hiddenBlogId));
        let url = ""
        if(hiddenBlogId == 1){
          url = "{{ asset('allBlog/1')}}"
        }else{
          url = "{{ asset('allBlog/2')}}"
        }

        fetch(url, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
        })
        .then(response => response.json())
        .then(data => {

            //let oneRandomArticle = data[Math.floor(Math.random() * data.length)];console.log("oneRandomArticle : ", oneRandomArticle);
            let oneRandomArticle = data[0]; //oneRandomArticle correspond au premier element du tableau , qui est le dernier article ajouté
            let buttonCategory = "";
                    
            let categoryName = String(oneRandomArticle['categoryName']).split(",")
            let blogCategoriesSlug = String(oneRandomArticle['blogCategoriesSlug']).split(",")
            let arrayButtonCategory = [];
            categoryName.forEach(function(val,i) {
                        arrayButtonCategory.push(`<a href="{{url('tag')}}/${blogCategoriesSlug[i]}" style="background: #7dd175; border: 1px solid #7dd175; border-radius: 31px;font-size: 14px !important;line-height: 28px !important;padding: .8rem .8rem .8rem;">${val}</a>`);
            });
            buttonCategory = arrayButtonCategory.join("");

            let urlBase2;
            let titleGuideOrBlog = "";
            if(window.location.href.indexOf("blog") != -1){
                      urlBase2 = "{{ url('/blog') }}"
                      titleGuideOrBlog = "Le blog de Flex In Use — tendances, guides & expertises bureaux"
            }else{
                      urlBase2 = "{{ url('/guide') }}"
                      titleGuideOrBlog = "Découvrez tous nos guides sur le bureau flexible et l’immobilier d’entreprise"
            }

            let titreImage = ""
            if(data[0]['titreimage'] == 'null'){
              titreImage = ""
            }else{
              titreImage = "alt='"+data[0]['titreimage']+"'"
            }
            

            html = `<div style="overflow: hidden;" class="col-6 col-lg-12 col-sm-12">
                    <img src="{{asset('recupereimageBLOG')}}/${oneRandomArticle['blog_posts_id']}/${oneRandomArticle['image_large']}/3" style="float: right;height: 62vh; border-top-left-radius: 30px; border-top-right-radius: 30px; object-fit: cover;" class="col-9 marginTopFormat" ${titreImage}>
                </div>
                <div class="items-center justify-content-center col-6">
                    <div style="padding-left: 14%;padding-right: 14%;">
                        <h1 style="color: #1c4151; font-family: azo-sans; font-size: 25px; font-weight: 700; line-height: 40px; margin: 0 0 15px;">${titleGuideOrBlog}</h1>
                        <div style="display: flex; gap: 1%;">${buttonCategory}</div>
                        <h3 style="color: #000; font-family: azo-sans-uber;font-size: 4rem; font-style: normal; font-weight: 400; line-height: 4rem;">`+oneRandomArticle['title']+`</h3>
                        <p style="font-size: 18px;">`+truncateText(oneRandomArticle['subtitle'], 120)+`</p>
                        <a style=" font-family: azo-sans-uber, sans-serif; display: flex; margin-bottom: 1.3em; font-weight: 100; align-items: center; align-content: center;color: #7ddf75;" class="discover-arrow font-xs" href="${urlBase2}/${oneRandomArticle['slug']}" > 
                            <div style=" padding-right: 2%; "> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.311" height="11.61" viewBox="0 7.448 26.311 11.61">
                                    <path d="m21.166 18.73 4.83-4.687c.21-.203.315-.479.315-.783v-.014c0-.304-.105-.58-.314-.784l-4.83-4.686a1.034 1.034 0 0 0-1.511 0 1.157 1.157 0 0 0 0 1.58l2.903 2.778H1.074c-.595 0-1.074.5-1.074 1.119 0 .63.48 1.12 1.07 1.12h21.485l-2.903 2.776a1.157 1.157 0 0 0 0 1.581c.42.437 1.095.437 1.514 0Z" fill="#7dd175" fill-rule="evenodd" data-name="Icon ionic-md-arrow-round-forward"></path>
                                </svg> 
                            </div> 
                            Lire l'article
                        </a>
                    </div>
                </div>`;

            $('#randomArticle').html(html)

        })
  }
  affichageRandom();
</script>
@endsection
