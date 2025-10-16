@extends('layouts.defaultFiu')
<!-- ecran = inscrirenewsletterconfirmer.blade.php   -->
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
         <p class="font-s" style="margin-bottom: 2%;">L'équipe de Fiu vous remercie pour l'intérêt que vous portez à  sa newsletter.</p>
         <p class="font-s" style="margin-bottom: 2%;">{{ $message}}</p>
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