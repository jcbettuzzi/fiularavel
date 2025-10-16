@extends('layouts.default3')
<!-- ecran = offredetail.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection



@section('content')
<section>
      <!-- Slider main container-->
      <div class="swiper-container detail-slider slider-gallery">
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper">
          <!-- Slides-->
          @foreach($Images as $UneOffreDocuments)
          
          <div class="swiper-slide"><a href="{{ asset('recupereimageDocumentID/'.$offres['offres_id'].'/'.$UneOffreDocuments['offredocument_id'].'')}}" data-toggle="gallery-top" title="{{$UneOffreDocuments['titredocument']}}"><img class="img-fluid" src="{{ asset('recupereimageDocumentID/'.$offres['offres_id'].'/'.$UneOffreDocuments['offredocument_id'].'')}}" alt="{{$UneOffreDocuments['titredocument']}}"></a></div>                              
          @endforeach
        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
      </div>
</section>
<section class="py-5">
<div class="container">         
                  <p class="text-sm text-muted">Offres ID={{ $offres['offres_id'] }} </p>
                  <table class="table "   style="width:100%" id="tableSurface">
											<thead>
												<tr>																																							
													
                          
													<th class="text-sm text-muted">Surface m²</th>
													<th class="text-sm text-muted">Loyer €/m²/an</th>
													<th class="text-sm text-muted">Nombre de postes</th>
													<th class="text-sm text-muted">Loyer €/poste</th>
													<th class="text-sm text-muted">Loyer €/an</th>													
													<th class="text-sm text-muted">Charges €/m²/an HT</th>
													<th class="text-sm text-muted">Dispo.</th>																										
												</tr>
											</thead>
											<tbody>
                      @foreach($Surfaces as $UneSurfaces)
                      
                      @endforeach 
											</tbody>
										</table>
                    <?php 
                    if ($offres['ParkingInterieur']> 0){
                      echo "Parking Intérieur : ".$offres['ParkingInterieur'];
                    }else{
                      echo "Parking Intérieur : 0";
                    }
                    if ($offres['ParkingExterieur']> 0){                      
                      echo "<br>Parking Extérieur : ".$offres['ParkingExterieur'];
                    }else{
                      echo "<br>Parking Extérieur : 0";
                    }
                    if (!is_null($offres['DivisibleSurface'])){
                      echo "<br>".$offres['DivisibleSurface'];
                    }
                    
                    if (!is_null($offres['DivisiblePoste'])){
                      echo "<br>".$offres['DivisiblePoste'];
                    }                                        
                    ?>
                    <div class="text-center">
                    <?php 
                    if (!is_null($Leclient['errorMess'])){                      
                      echo '<br><h4 class="text-secondary">'.$Leclient['errorMess'].'</h4>';
                      
                    }
                    if (!is_null($Leclient['Message'])){                      
                      echo '<br><h4 class="text-secondary">'.$Leclient['Message'].'</h4>';
                      
                    }
                    ?>
                  </div>
                    
</div>
</section>  

@if (count($errors) > 0)
					<div class="text-danger" >                  
					Attention : 
					@foreach ($errors->all() as $error)
							{{ $error }}<br>
					@endforeach
					</div>
        @endif
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8"> 
          <div class="text-block">
            
            <h1>{{ $offres['nomprogramme'] }}</h1>
            
            
            
            <p class="text-muted fw-light">{{ $offres['descriptionBien'] }} </p>
            
          </div>
          <div class="text-block">
            <h4 class="mb-4">Services inclus</h4>
            <div class="row"> 
              <div class="col-md-6">
              Service(s) de base
              
              <ul class="list-unstyled text-muted">
              @if(isset($Servicedebase))
              @foreach ($Servicedebase as $unservice)                
                  <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">{{ $unservice }}</span></li>                  
                @endforeach
                </ul>
                @endif
              </div>
              <div class="col-md-6">
              Equipement(s)
              @if(isset($ServiceEquipement))
                <ul class="list-unstyled text-muted">
                @foreach ($ServiceEquipement as $unservice)                
                  <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">{{ $unservice }}</span></li>                  
                @endforeach
                </ul>
                @endif
              </div>
            </div>
            <div class="row"> 
              <div class="col-md-6">
              Confort
              
              <ul class="list-unstyled text-muted">
              @if(isset($ServiceConfort))
              @foreach ($ServiceConfort as $unservice)                
                  <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">{{ $unservice }}</span></li>                  
                @endforeach
                </ul>
                @endif
              </div>
              <div class="col-md-6">
              Sécurité
              @if(isset($ServiceSecurite))
                <ul class="list-unstyled text-muted">
                @foreach ($ServiceSecurite as $unservice)                
                  <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">{{ $unservice }}</span></li>                  
                @endforeach
                </ul>
                @endif
              </div>
            </div>
            
          </div>
          <div class="text-block">
            <h4 class="mb-0">Contrat et conditions d'entrée</h4>
            
            <div class="row"> 
              <div class="col-md-6">
              Contrat              
              <ul class="list-unstyled text-muted">
              @if(isset($LesBaux))
              @foreach ($LesBaux as $unBail)     
                 
                  <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">{{ $unBail['titre'] }}</span></li>                  
                  <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">{{ $unBail['texte'] }}</span></li>                  
                @endforeach
                </ul>
              @endif
              </div>
              <div class="col-md-6">
              Conditions d'entrée
              <ul class="list-unstyled text-muted">
              <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">Dépot de garantie {{ $offres['depotGarantie'] }} mois</span></li>                  
              <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">Durée d'engagement minimum    {{ $offres['DureEngagementminimum'] }} mois</span></li>                  
              <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">Durée d'engagement maximum   {{ $offres['DureEngagementmaximum'] }} mois</span></li>                  
              <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">Durée du préavis             {{ $offres['preavis'] }} mois</span></li>                  
              <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">Date disponibilité           {{ $offres['datedisponibilitesurface'] }}</span></li>                                                                          
              </ul>
              </div>
            </div>
            
          </div>
          
          <div class="text-block">
            <h5 class="mb-4">Listing location</h5>
            <div class="map-wrapper-300 mb-3">
              <div class="h-100" id="map"></div>
            </div>
            <div class="row"> 
              <div class="col-md-6">
              DÉTAILS DE l'ESPACE DE TRAVAIL 
              <ul class="list-unstyled text-muted">
              @if(isset($Detailespacedetravail))              
              @foreach ($Detailespacedetravail as $cle => $valeur)     
                 
                  <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">{{ $cle }}</span><span class="text-sm"> : {{ $valeur }}</span></li>                  
                  
                @endforeach
                </ul>
              @endif
              </div>
              <div class="col-md-6">
              ACCÈS
              <ul class="list-unstyled text-muted">
              <li class="mb-2"> <i class="text-secondary w-1rem me-3 text-center"></i><span class="text-sm">{!! $offres['desserte'] !!}</span></li>                                                                                                    
              </ul>
              </div>
            </div>
          </div>
          
     
        </div>
        <div class="col-lg-4">
          <div class="p-4 shadow ms-lg-4 rounded sticky-top" style="top: 100px;">
          <h5 class="mb-4"></h5>          
          <p class="text-muted text-sm text-center">{{ $offres['AdresseComplete'] }}</p>
          
                    

            <hr class="my-4">
            
            <form class="form" id="booking-form" method="POST" action="{{ url('/contacterlegestionnaire') }}" autocomplete="off">
            @if(Session::get('usersigne')==0)                                  
              <div class="mb-4">
                <label class="form-label" for="nom">Nom</label>
                <div class="">
                  <input class="form-control" type="text" name="nom" id="nom" placeholder="Saisir votre nom" value="{{  $Leclient['nom'] }}" required="required">
                </div>
                <label class="form-label" for="prenomnom">Prénom</label>
                <div class="">
                  <input class="form-control" type="text" name="Prenom" id="Prenom" placeholder="Saisir votre Prénom" value="{{  $Leclient['prenom'] }}" required="required">
                </div>
                <label class="form-label" for="email">E-mail</label>
                <div class="">
                  <input class="form-control" type="text" name="email" id="email" placeholder="Saisir votre email" value="{{  $Leclient['email'] }}" required="required">
                </div>
              </div>
              <div class="mb-4">
              <label class="form-label" for="Telephone">Téléphone</label>
                <div class="">
                  <input class="form-control" type="text" name="Telephone" id="Telephone" placeholder="Saisir votre numéro de téléphone" value="{{  $Leclient['Telephone'] }}" >
                </div>
              </div> 
              @else

              @endif
              <div class="d-grid mb-4">
                <button class="btn btn-primary" type="submit" name="submit"  value="contactergestionnaire">Contacter le gestionnaire</button>
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="offreID" value="{{ $offres['offres_id'] }}">
              <input type="hidden" name="refRbmg" value="{{ $offres['ref_rbmg'] }}">
              <input type="hidden" name="FiuID" value="{{ $FiuID }}">
              
              
            </form>
            <!-- <p class="text-muted text-sm text-center">Some additional text can be also placed here.</p> -->
            <hr class="my-4">
            <div class="text-center">
            <!-- $offres['AjouterFavori'] -->
              @if(Session::get('usersigne')==1)                                  
                @if($offres['AjouterFavori']==1)
                    <p> <a class="text-secondary text-sm" href="{{ url('/AjouterOffrefavori/'.$offres['offres_id']) }}"> <i class="fa fa-heart"></i> Ajouter cette offre à mes favoris</a></p>
                @else
                     <p> <a class="text-secondary text-sm" href="{{ url('/SupprimerOffrefavori/'.$offres['offres_id']) }}"> <i class="fa fa-heart"></i> Supprimer cette offre de mes favoris</a></p>
                @endif    
              @endif
              <!-- <p class="text-muted text-sm">79 people bookmarked this place </p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-6 bg-gray-100"> 
      <div class="container">
        <h5 class="mb-0">Vous aimerez aussi</h5>
        
        <!-- Slider main container-->
        <div class="swiper-container swiper-container-mx-negative swiper-init pt-3" data-swiper="{&quot;slidesPerView&quot;:4,&quot;spaceBetween&quot;:20,&quot;loop&quot;:true,&quot;roundLengths&quot;:true,&quot;breakpoints&quot;:{&quot;1200&quot;:{&quot;slidesPerView&quot;:3},&quot;991&quot;:{&quot;slidesPerView&quot;:2},&quot;565&quot;:{&quot;slidesPerView&quot;:1}},&quot;pagination&quot;:{&quot;el&quot;:&quot;.swiper-pagination&quot;,&quot;clickable&quot;:true,&quot;dynamicBullets&quot;:true}}">
          <!-- Additional required wrapper-->
          <div class="swiper-wrapper pb-5">
            <!-- Slides-->
            @foreach($ListeDesoffres as $UneOffre)
            <div class="swiper-slide h-auto px-2">
              <!-- place item-->
              <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e33b1527bfe2abaf92">
                <div class="card h-100 border-0 shadow">
                
                  <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="{{ asset('recupereimageDocumentID/'.$UneOffre['offres_id'].'/0')}}" alt="Modern, Well-Appointed Room"/><a class="tile-link" href="{{ url('offredetail/'.$UneOffre['offres_id']) }}"></a>
                    <div class="card-img-overlay-bottom z-index-20">
                    
                    </div>
                    <div class="card-img-overlay-top text-end"><a class="card-fav-icon position-relative z-index-40" href="javascript: void();"> 
                        <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a></div>
                  </div>
                  <div class="card-body d-flex align-items-center">
                    <div class="w-100">
                      <h6 class="card-title"><a class="text-decoration-none text-dark"  href="{{ url('offredetail/'.$UneOffre['offres_id']) }}" ></a></h6>
                      <div class="d-flex card-subtitle mb-3">
                        <p class="flex-grow-1 mb-0 text-muted text-sm">{{ $UneOffre['AdresseComplete'] }}</p>
                        
                        </p>
                      </div>
                      
                      

                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
 
   
    
            
       
          </div>
          <!-- If we need pagination-->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    @endsection
    @section('scripts')

    <!-- google map api  -->
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhuR1erE3ZS9EEgqm9-czUxo6uPQbR5k8&callback=initMap" type="text/javascript">
    </script>
    <script>
    function initMap() {
    //prepareFiltreMap();
    //console.log("testdgfhdhdhdhfgh")
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: { lat: {{$offres['latitude'] }}, lng: {{$offres['longitude']}} }, //new google.maps.LatLng(point),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    const infoWindow = new google.maps.InfoWindow();
    var markers = new Array();
    var marker = new google.maps.Marker({
      map: map,
      position: {{ $offres['positionMAP'] }},
      title:  {!! json_encode($offres['adresseMAP']) !!}                                 
    });                                
    markers.push(marker);

  }
  </script>
    @endsection
 

    
    