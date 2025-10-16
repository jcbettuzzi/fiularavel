@extends('layouts.defaultFiu')
<!-- ecran = modifierMdp.blade.php   -->
@section('title')
  Fiu
@endsection
@section('pagetitle')
  Fiu Laravel
@endsection
@section('content')

<div class="row wd-100" style="gap: 20px;margin-top: 90px;">
            <form method="POST" action="{{ url('/MettreAjourMotdePasse') }}" class="wd-100" style="margin: 0 auto;">
                @if(session('errorUpdateMdp'))
                <div class="column wd-60" style="margin: 0 auto;padding-top: 2%;">
                    <div style="font-size: 2.5rem; font-weight: bold;color: red;padding-bottom: 4%;">
                        {{ session('errorUpdateMdp') }}
                    </div>
                </div>
                @endif 
                <div class="column wd-60" style="margin: 0 auto;padding-top: 2%;">
                  <label>Mot de passe </label>
                  <input class="baseInput" name="inputPassword" id="inputPassword" placeholder="Mot de passe" type="password"  data-msg="Entrez votre mot de passe" >
                  <label>Mot de passe à confirmer </label>
                  <input class="baseInput asoSansRegular wd-100" name="inputPasswordConfirme" id="inputPasswordConfirme" placeholder="Mot de passe" type="password"  data-msg="Entrez votre mot de passe"></div>
                </div>
                <div class="column wd-60" style="margin: 0 auto;padding-bottom:2%;">
                        <button class="wd-100 buttonSave" style="width: 100%; margin-top: 30px;" type="submit" name="submitbutton" value="majmotdepasse">Mettre à jour son mot de passe</button></div>
                        <input type="hidden" name="nomprenom" value="{{ $nomprenom }}">
                        <input type="hidden" name="email" value="{{ $email }}">
                        <input type="hidden" name="uuid" value="{{ $uuid }}">
                        <input type="hidden" name="MajCreation" value="{{ $MajCreation }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </form>
</div>

@endsection