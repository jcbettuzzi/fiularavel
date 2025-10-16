@extends('layouts.defaultFiu')
<!-- ecran = erreur.blade.php   -->


@section('title')
  Erreur
@endsection

@section('pagetitle')
  
@endsection

@section('custom_css')
@endsection

@section('content')
  <div class="main-content container-fluid be-error ">
    <div class="error-container">
      <div class="error-number">500</div>
      <div class="error-description"> Internal Server Error ! </div>
      <div class="error-goback-text">
        @foreach ($errors->all() as $error)
          {{ $error }}<br>
        @endforeach
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
    })
  </script>
@endsection