@extends('layouts.defaultFiu')
<!-- ecran = mentionsLegales.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('content')

<section class="py-5">
      <div
        class="row items-center justify-content-center boxRadiusTopLeft"
        style="
          position: relative;
          min-height: 80vh;
          margin-top: 100px;
          background-color: #F6CEDE;
      "
      >
        <div class="items-center justify-content-center">
          <div style=" color: white; zIndex: 1; text-align: center; width: 80%">
            <h1 style=" font-family: Azo-Sans-Uber" class="mainTitleCoworking">
              MENTIONS LEGALES
            </h1>
          </div>
        </div>
      </div>
      <div class="flex-wrap-row" style=" height: 100%">
        <div class="col-4">
          <div style=" position: sticky; top: 10%">
            <ul
              style="
                font-size: 2.6rem;
                gap: 15px;
                display: flex;
                flex-direction: column;
                list-style-type: none;
                padding-right: 7%;
                margin-top: 10.5%;
            "
              class="listCoworking"
            >
              <li>
                <a href="#titleOne">Version 1.01 du 01/03/2023</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-8">
          <div style=" padding-left: 5%; padding-right: 5%; margin-top: 6%" class="font-m">
              <p>
                
                <b>FLEX IN USE</b> société par actions simplifiée au capital de 1.800 €, immatriculée au RCS de Paris sous le numéro 893 340 125 et ayant son siège 
                social au 25 rue de Ponthieu à 75008 Paris, est une agence immobilière dont le numéro de carte professionnelle transaction délivrée par Chambre 
                de commerce et d’industrie sous le numéro CPI 9201 2024 000 000 089,
              </p>
              <p>
                La Société édite une plateforme web hébergé chez OVH CLOUD 2 rue Kellermann - 59100 Roubaix -www.ovhcloud.com
              </p>
              <div>
                <a href="{{url('/confidentialite')}}">Politique de confidentialité </a>
              </div>
              <div>
                <a href="{{url('/cgu')}}">Conditions générales d’utilisation et de vente </a>
              </div>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection