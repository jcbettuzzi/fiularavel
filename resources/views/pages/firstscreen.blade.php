@extends('layouts.default3')
<!-- ecran = firstscreen.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('content')
@if (count($errors) > 0)
					<div class="text-danger" >                  
					Attention : 
					@foreach ($errors->all() as $error)
							{{ $error }}<br>
					@endforeach
					</div>
@endif


<div class="flex-wrap-row bloc-one-custom" style="margin-top: 90px;">

<h4>firstscreen.blade.php</h4>
      
           
</div>



@endsection



