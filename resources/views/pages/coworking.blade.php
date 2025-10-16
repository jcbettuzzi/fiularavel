<?php
$API_KEY = getenv('GOOGLE_API_KEY');
?>
@extends('layouts.defaultFiu')
<!-- ecran = coworking.blade.php   -->


@section('title')
  Tous les espaces de coworking pour votre entreprise
@endsection

@section('metaDescription')
  Trouvez le meilleur espace de coworking pour votre entreprise ! Découvrez nos espaces collaboratifs pour répondre à vos besoins.
@endsection

@section('pagetitle')

@endsection

@section('custom_css')
<style>
  .marginTopStarLine-1{
    margin-top: 23px;
  }
  
  @media only screen and (max-width: 765px){
    .marginTopStarLine-1{
        margin-top: 18px;
    }
  }
</style>

@endsection

@section('content')
    <div class="flex-wrap-row wd-100">
          <div
            class="column col-6 col-m-12 marginTopPartLeftCategory"
            style="
              padding: 0% 2% 1% 2%;
            "
          >
            <div>
              <h1
                class="fontSubTitle"
                style=" line-height: 1em; "
                id="modifyFontCategorieCoworkingParis"
              >
                <span style=" white-space: nowrap; display: block; ">Toutes les espaces</span>
                <span style=" white-space: nowrap; ">de coworking à Paris​</span>
              </h1>
            </div>
            <p class="font-m"> Notre sélection de coworking à Paris par arrondissements et zones ciblées </p>
            @foreach($allTexteCoworking as $keyOneTexte => $oneTexte)
              <div class="col-12 partCategorieCoworkingParis">
                <div class="col-7">
                    <a>
                        <p class="font-m cursorPointer" style=" text-decoration: underline; ">
                          {{$oneTexte['name']}}
                        </p>
                    </a>
                    <p style=" font-family: azo-sans-web,sans-serif; "></p>
                    <a
                        style="
                        font-family: azo-sans-uber, sans-serif;
                        display: flex;
                        //marginBottom: '3em'
                        font-weight: 100;
                        align-items: center;
                        align-content: center;
                        "
                        class="discover-arrow font-xs"
                        href="{{$oneTexte['url']}}"
                    >
                        <div style=" padding-right: 2%; ">
                        <img src="{{ asset('assets/img/Icon-fleche.png')}}" width="26.31px" height="11.61px" alt="flèche noire vers la droite" />
                        </div>
                        Découvrir
                    </a>
                </div>
                <div class="col-5 items-center partStarCategory">
                    <div class="row bg-beige" style="border-radius: 15px;">
                      
                        <div class="col-7">
                            <p style=" padding-right: 2%; padding-left: 20%;margin-bottom: 0;font-size:1.8rem; "> Prix </p>
                            <p style=" padding-right: 2%; padding-left: 20%; margin-top: 5%; margin-bottom: 5%;font-size:1.8rem; "> Accessibilité </p>
                            <p style=" padding-right: 2%; padding-left: 20%; margin-top: 0;font-size:1.8rem; "> Popularité </p>
                        </div>
                        <div class="col-5" style=" min-width: 105px; ">
                            <p style=" white-space: nowrap; padding-left: 30%; margin-bottom: 0; " class="marginTopStarLine-1">
                              @if($oneTexte['price'] == 1)
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #707070;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>    
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #707070;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                              @elseif($oneTexte['price'] == 2)
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>    
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #707070;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                              @elseif($oneTexte['price'] == 3)
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>    
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                              @endif
                            </p>
                            <p style=" white-space: nowrap; margin: 0; padding-left: 30%; margin-top: 10px; margin-bottom: 10px; ">
                              @if($oneTexte['accessibility'] == 1)
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #707070;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>    
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #707070;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                              @elseif($oneTexte['accessibility'] == 2)
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>    
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #707070;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                              @elseif($oneTexte['accessibility'] == 3)
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>    
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                              @endif
                            </p>
                            <p style=" white-space: nowrap; padding-left: 30%; margin-top: 0; ">
                              @if($oneTexte['popularity'] == 1)
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #707070;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>    
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #707070;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                              @elseif($oneTexte['popularity'] == 2)
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>    
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #707070;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                              @elseif($oneTexte['popularity'] == 3)
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>    
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" style="user-select: none;width: 1em;height: 1em;display: inline-block;fill: currentColor;-ms-flex-negative: 0;flex-shrink: 0;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;color: #7DD175;font-size: 1.8rem;"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                              @endif
                            </p>
                        </div>
                    </div>
                    
                </div>
              </div>
              <hr style="margin: 0;flex-shrink: 0; border-width: 0; border-style: solid; border-color: rgba(0, 0, 0, 0.12); border-bottom-width: thin; margin-bottom: 1%;">
            @endforeach
          </div>
          <div
            class="column col-6"
            style="
              margin-top: 4%;
            "
          >
            <div class="col-m-0 col-s-0">
              {{--<MapSearchEngine data={props.properties} center={{ lat: 48.856613, lng: 2.352222 }} />--}}
              <div id="map_2" style="height: 500px;"></div>
            </div>
            <div
              style="
                margin-top: 2%;
              "
            >
                <!-- Debut searchCTA -->
                <div class="row wd-100 bg-violet blanc boxRadiusTopLeft" style=" position: relative; ">
                    <div
                    class="column wd-100"
                    style="
                        padding-left: 8%;
                        padding-top: 2%;
                        min-height: 463px;
                        padding-bottom: 3%;
                    "
                    >
                    <h4 class="mb-1p abrilTextRegular"> Besoin d'aide pour votre recherche de bureau ? </h4>
                    <p
                        class="font-m wd-50 asoSansRegularBase"
                        style="
                        margin-top: 0;
                        "
                    >
                        Pas de panique ! <b><?php echo str_replace("&", " ", getenv('nameFiu')); ?></b> vous aide à identifier vos besoins, orienter votre recherche et trouver la
                        perle rare !
                    </p>
                    
                        <a
                        class="vert-fort"
                        id="wordCustomSearch"
                        onmouseover="changeColorSearch()"
                        onmouseout="normalColorSearch()"
                        style="
                            font-family: azo-sans-uber, sans-serif;
                            font-size: 1.8rem;
                            display: flex;
                            margin-bottom: 1em;
                            font-weight: 100;
                            align-items: center;
                            align-content: center;
                        "
                        href="{{ url('/recherche-sur-mesure') }}"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" id="right-arrow-svg" height="24" viewBox="0 0 24 24" width="24" fill="#1C4151"><path d="M0 0h24v24H0z" fill="none"/><path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4z"/></svg>
                          Recherche sur mesure
                        </a>
                    
                    <div class="emojiFindADestop">
                        <img src="{{ asset('assets/img/220506-FiU-Personnages-08.png')}}" style="width: 100%;" alt="personnage jaune avec un air surpris, consterné" />
                    </div>
                    </div>
                </div>
                <!-- Fin searchCTA -->
            </div>
            <div
              class="bg-vert-fort blanc col-12"
              style="
                padding: 5% 10% 5% 10%;
                position: relative;
              "
            >
              <h2 class="fontSubTitle" id="modifyFontCategorieCoworkingParis">
                <span style=" white-space: nowrap; display: block; ">Notre sélection</span>
                <span style=" display: block; ">par zones ciblées</span>
              </h2>
              <div
                style="
                  margin-left: auto;
                  padding-top: 2%;
                  width: 14%;
                  position: absolute;
                  right: 5%;
                  top: 10%;
                "
              >
                <img src="{{asset('assets/img/Groupe-391.png')}}" width="89.29px" height="61.3px" alt="trois étoiles" />
              </div>
              <div class="column">
                <!-- Debut CoworkingDetailsCTA -->
                <div>
                    <a href="coworking-saint-lazare-paris">
                            <p class="fontS20 cursorPointer" style=" text-decoration: underline; ">
                              Coworking Saint-Lazare Paris
                            </p>
                    </a>
                    <p class="col-10 font-xs" style=" fontFamily: azo-sans-web,sans-serif; ">
                        Découvrez toutes les offres de location de bureau en coworking à Saint-Lazare, Paris. Profitez de bureaux modernes et équipés ainsi que de services adaptés.
                    </p>
                </div>
                <div>
                    <a href="coworking-gare-lyon-paris">
                            <p class="fontS20 cursorPointer" style=" text-decoration: underline; ">
                              Coworking Gare de Lyon Paris
                            </p>
                    </a>
                    <p class="col-10 font-xs" style=" fontFamily: azo-sans-web,sans-serif; ">
                      Besoin d'un espace de coworking près de la Gare de Lyon à Paris ? Découvrez notre sélection d'espaces de travail collaboratifs, modernes et équipés.
                    </p>
                </div>
                <div>
                    <a href="coworking-montparnasse-paris">
                            <p class="fontS20 cursorPointer" style=" text-decoration: underline; ">
                              Coworking Montparnasse Paris
                            </p>
                    </a>
                    <p class="col-10 font-xs" style=" fontFamily: azo-sans-web,sans-serif; ">
                      Besoin d'un espace de coworking près de la Gare de Lyon à Paris ? Découvrez notre sélection d'espaces de travail collaboratifs, modernes et équipés.
                    </p>
                </div>
                <div>
                    <a href="coworking-boulogne-billancourt-paris">
                            <p class="fontS20 cursorPointer" style=" text-decoration: underline; ">
                              Coworking Boulogne-Billancourt
                            </p>
                    </a>
                    <p class="col-10 font-xs" style=" fontFamily: azo-sans-web,sans-serif; ">
                      Envie de travailler dans un espace de coworking convivial et stimulant à Boulogne-Billancourt ? Nos espaces de coworking modernes et bien équipés.
                    </p>
                </div>
                <div>
                    <a href="coworking-levallois-perret">
                            <p class="fontS20 cursorPointer" style=" text-decoration: underline; ">
                              Coworking Levallois
                            </p>
                    </a>
                    <p class="col-10 font-xs" style=" fontFamily: azo-sans-web,sans-serif; ">
                      Découvrez toutes les locations de bureaux en espaces de coworking à Levallois-Perret pour travailler dans un environnement stimulant et convivial.
                    </p>
                </div>
                <div>
                    <a href="coworking-republique-paris">
                            <p class="fontS20 cursorPointer" style=" text-decoration: underline; ">
                              Coworking République Paris
                            </p>
                    </a>
                    <p class="col-10 font-xs" style=" fontFamily: azo-sans-web,sans-serif; ">
                      Découvrez nos espaces de coworking à Paris République pour une location de bureau flexible et adaptée à vos besoins. Profitez d'un environnement stimulant et de services.
                    </p>
                </div>
                <div>
                    <a href="coworking-gare-du-nord-paris">
                            <p class="fontS20 cursorPointer" style=" text-decoration: underline; ">
                              Coworking Gare du Nord Paris
                            </p>
                    </a>
                    <p class="col-10 font-xs" style=" fontFamily: azo-sans-web,sans-serif; ">
                      Trouvez le meilleur espace de coworking Gare du Nord. Profitez de bureaux modernes et abordables pour travailler en toute sérénité.
                    </p>
                </div>
                <!-- Fin CoworkingDetailsCTA -->
              </div>
            </div>
          </div>
    </div>

@endsection

@section('scripts')



<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhuR1erE3ZS9EEgqm9-czUxo6uPQbR5k8&libraries=places&callback=initMap&loading=async" type="text/javascript">
  </script>

<script>
    let map;
    let markers = [];

    async function initMap() {
        try {
            const position = { lat: 48.856613, lng: 2.352222 };
            const { Map } = await google.maps.importLibrary("maps");
            const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
            map = new Map(document.getElementById("map_2"), {
                zoom: 12,
                center: position,
                mapId: "DEMO_MAP_ID",
            });
            // Appeler addAllPoint pour charger les points sur la carte
            addAllPoint();
        } catch (error) {
            console.error("Erreur lors de l'initialisation de la carte : ", error);
        }
    }

    function updateMarkers(properties) {
        class CustomHtmlMarker extends google.maps.OverlayView {
            constructor(position, map, loyerMensuel, offres_id) {
                super();
                this.position = position;
                this.map = map;
                this.div = null;
                this.loyerMensuel = loyerMensuel;
                this.offres_id = offres_id;
                this.setMap(map);
            }

            onAdd() {
                const div = document.createElement('div');
                div.style.position = 'absolute';
                console.log("this.offres_id: ", this.offres_id);
                let urlHref = baseUrl+`location-bureau-entreprise/undefined/${this.offres_id}`;
                div.innerHTML = `<a href="${urlHref}" class="bg-blanc items-center justify-content-center btnMap" style="z-index: 6">${this.loyerMensuel}€</a>`;
                this.getPanes().overlayMouseTarget.appendChild(div);
                this.div = div;
            }

            draw() {
                const overlayProjection = this.getProjection();
                const position = overlayProjection.fromLatLngToDivPixel(this.position);
                const div = this.div;
                if (div) {
                    div.style.left = `${position.x}px`;
                    div.style.top = `${position.y}px`;
                }
            }

            onRemove() {
                if (this.div) {
                    this.div.parentNode.removeChild(this.div);
                    this.div = null;
                }
            }
        }

        // Supprimer les marqueurs existants
        markers.forEach(marker => marker.setMap(null));
        markers = [];

        // Ajouter de nouveaux marqueurs
        properties.forEach(property => {
            if (property.latitude && property.longitude) {
                const position = new google.maps.LatLng(parseFloat(property.latitude), parseFloat(property.longitude));
                const loyerMensuel = Math.round(property.LoyerAnnuelCalcule / 12);
                const offres_id = property.offres_id;
                const customMarker = new CustomHtmlMarker(position, map, loyerMensuel, offres_id);
                markers.push(customMarker);
            }
        });
    }

    function addAllPoint() {
        const url = htmlspecialchars(baseUrl)+`area/search?zipCode=75001,75002,75003,75004,75005,75006,75007,75008,75009,75010,75011,75012,75013,75014,75015,75016,75017,75018,75019,75020&offset=0`;

        fetch(url, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            const properties = data.data.data;
            console.log("properties: ", properties);
            updateMarkers(properties);
        })
        .catch(error => {
            console.error("Erreur lors de la récupération des données : ", error);
        });
    }
</script>

<script>
  function changeColorSearch(){
    document.getElementById("right-arrow-svg").setAttribute("fill", "white");
    document.getElementById("wordCustomSearch").style.color = "white";
  }

  function normalColorSearch(){
    document.getElementById("right-arrow-svg").setAttribute("fill", "#1C4151");
    document.getElementById("wordCustomSearch").style.color = "#1C4151";
  }

</script>

@endsection

