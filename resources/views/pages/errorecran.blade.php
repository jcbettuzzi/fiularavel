@extends('layouts.defaultFiu')
<!-- ecran = errorecran.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('content')

<section class="">
<div class="flex-wrap-row height-firstBloc-contact" style="width: 100%; padding-top: 90px; padding-bottom: 0px;">
        
        <h2 class="hero-heading mb-0">
        @foreach ($errors->all() as $error)
          {{ $error }}<br>
        @endforeach
        </h2>
        
      
      </div>


  
</section>



@endsection