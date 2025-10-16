<?php
$API_KEY = getenv('GOOGLE_API_KEY');
?>
@extends('layouts.defaultFiu')
<!-- ecran = mesDemandes.blade.php   -->


@section('title')
  Mes Favoris
@endsection


@section('canonical')
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection


@section('metaDescription')

@endsection



@section('pagetitle')

@endsection

@section('custom_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<style>
  /**Debut test accordion une offre */
  :root {
    --primary: #227093;
    --secondary: #ff5252;
    --background: #eee;
    --highlight: #ffda79;
    /* Theme color */
    --theme: var(--primary);
  }
  *, *::before, *::after {
    box-sizing: border-box;
  }
  /*
  body {
    display: grid;
    place-content: center;
    grid-template-columns: repeat(auto-fit, min(100%, 30rem));
    min-height: 100vh;
    place-items: start;
    gap: 1rem;
    margin: 0;
    padding: 1rem;
    color: var(--primary);
    background: var(--background);
  }
  */

  /* Core styles/functionality */
  .tab_2 input {
    position: absolute;
    opacity: 0;
    z-index: -1;
  }
  .tab__content_2 {
    max-height: 0;
    overflow: hidden;
    transition: all 0.35s;
  }
  .tab_2 input:checked ~ .tab__content_2 {
    /*max-height: 10rem;*/
    max-height: 100%;
  }

  /* Visual styles */
  .accordionOne {
    border-radius: 0.5rem;
    overflow: hidden;
  }
  .tab__label_2,
  .tab__close {
    display: flex;
    color: black;
    cursor: pointer;
  }
  .tab__label_2 {
    justify-content: space-between;
    padding: 1rem;
  }
  .tab__label_2::after {
    content: "\276F";
    width: 1em;
    height: 1em;
    text-align: center;
    transform: rotate(90deg);
    transition: all 0.35s;
  }
  .tab_2 input:checked + .tab__label_2::after {
    transform: rotate(270deg);
  }
  .tab__content_2 p {
    margin: 0;
    padding: 1rem;
  }
  .tab__close {
    justify-content: flex-end;
    padding: 0.5rem 1rem;
    font-size: 0.75rem;
  }
  .accordionOn--radio {
    --theme: var(--secondary);
  }



  @keyframes bounce {
    25% {
      transform: rotate(90deg) translate(.25rem);
    }
    75% {
      transform: rotate(90deg) translate(-.25rem);
    }
  }
  /**Fin test accordion une offre */
</style>
<style>
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  .active, .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }

  .overlayOffreFav {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0);
    pointer-events: all;
    z-index: 1;
    background-color: rgba(255, 255, 255, 0.2);
  }
</style>
<style>
    .dataTables_wrapper{
        width: 90%;
        margin: 0 auto;
    }
    #myTable{
        font-size: 2rem;
    }
    #myTable_info{
        font-size: 2rem;
    }
    a.link-clickable {
      /*color: #4dabf7;*/
      text-decoration: none;
      font-weight: 500;
      transition: color 0.2s ease;
    }

    a.link-clickable:hover {
      /*color: #74c0fc;*/
      text-decoration: underline;
    }
</style>

@endsection

@section('content')

  <div class="row navBarDiv wd-100 items-center content-center justify-content-center hideShowScroll cancelJustifyContent-mobile">
      
          <a
            class="profileNavBar items-center justify-content-center"
            style="
              height: 100%;
              border-left: 1px solid #DDDDDD;
              min-width: 200px;
              background-color: black;
              color: white;
            "
            href="{{ url('mes-demandes') }}"
          >
            Mes recherches
          </a>  
          <a
            class="profileNavBar items-center justify-content-center"
            style="
              height: 100%;
              border-left: 1px solid #DDDDDD;
              min-width: 200px;
            "
            href="{{ url('mes-favoris') }}"
          >
            Favoris
          </a>
          <a
            class="profileNavBar items-center justify-content-center"
            style="
              height: 100%;
              border-left: 1px solid #DDDDDD;
              min-width: 200px;
              border-right: 1px solid #DDDDDD;
            "
            href="{{ url('profile') }}"
          >
            Mon Compte
          </a>
        
  </div>
  <div style="min-height: 100vh;">
    <div class="profileBlock" style="margin-bottom: 50px;">
      <div
        class="col-12 col-m-12 col-s-12 paddingRightProfilePage-Destop"
        style="padding-top: 2%;"
      >
        <div
          id="detail"
          class="row"
          {{--
          style="
            border: 1px solid #DDDDDD;
          "
          --}}
        >
            <table id="myTable" class="display">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nom recherche</th>
                    <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mesRechercheUserFiupartDemande as $uneRechercheFiu)
                    <tr>
                        <td>{{$uneRechercheFiu['demande_id']}}</td>
                        <td>
                          @if($uneRechercheFiu['demande_active'] == 1)
                            <a href="{{ url('/location-bureau-entreprise') }}?demandeID={{$uneRechercheFiu['demande_id']}}" class="link-clickable">{{$uneRechercheFiu['nomRecherche']}}</a>
                          @else
                            <span style="font-family: azo-sans-web, sans-serif; text-decoration: none; font-size: 17px;">{{$uneRechercheFiu['nomRecherche']}}</span>
                          @endif
                        </td>
                        <td>@if($uneRechercheFiu['demande_active'] == 1) active @else fermée @endif</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          
        </div>
        
      </div>
    </div>
  </div>

@endsection

@section('scripts')

  <script type="text/javascript">
    /*
    $(document).ready(function(){
      //-initialize the javascript
      App.init();
      App.formElements();
    });
    */
  </script>
  <script>
    $(".buttonSave").click(function() {
      $.ajax({
          url: "/updateProfileUser",
          type: "POST",
          //data: { nom: "John" },
          error: function(xhr) {
              if (xhr.status === 419) {
                  alert("Erreur 419 : Votre session a expiré !");
                  //window.location.reload(); // Recharger la page
                  window.location.href = baseUrl+"/sessionExpire";
              }
          }
      });
    });
  </script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
        $('#myTable').DataTable({
          language: {
            url: "{{ asset('assets/js/fr.json')}}"
          }
        });
    });
  </script>
  
  


@endsection
