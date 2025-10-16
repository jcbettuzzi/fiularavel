
@extends('layouts.defaultFiu')
<!-- ecran = erreur2.blade.php   -->


@section('title')
  erreur page
@endsection


@section('pagetitle')

@endsection

@section('custom_css')

@endsection


@section('content')
<div style="max-width: 1750px; padding: 0 3%; margin: 0 auto;margin-top: 90px;">
         <div style="text-align: center; font-size: 7rem; padding-top: 10%; padding-bottom: 10%;">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
         </div>
</div>
@endsection


@section('scripts')
