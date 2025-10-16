@if(Session::get('usersigne')==1 && isset($mesRechercheUserFiu))
<div class="tooltip destop-hideShow-header">
  <a class="headerLink">
    <span style=" float: left; padding-top: 3.5%;">Mes recherches</span>
    <span style="float: right; padding-top: 2.5%;">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path></svg>
    </span>
  </a>
  
  <div
    class="tooltiptext widthMesRecherches"
    style="gap: 0px; display: flex; flex-direction: column;"
  >
    <div style="padding: 5%;">
      <ul style="list-style: none; padding: 0;" class="typeSpaceWork">
        @foreach($mesRechercheUserFiu['data']['result'] as $uneRechercheUserFiu)
          @if($uneRechercheUserFiu['demande_active'] == 1)
          <li style="width: 100%; color: black; text-align: left;">
            <input class="form-check-input" type="checkbox" id="demande-{{$uneRechercheUserFiu['demande_id']}}" style="margin-right: 7%;" value="{{$uneRechercheUserFiu['demande_id']}}">
            <label class="form-check-label" for="demande-{{$uneRechercheUserFiu['demande_id']}}">
              {{$uneRechercheUserFiu['nomRecherche']}} ({{$uneRechercheUserFiu['demande_id']}})
            </label>
          </li>
          @endif
        @endforeach
        @empty($mesRechercheUserFiu['data']['result'])
          <p style="font-size: 1.5rem;">Contactez votre consultant pour les recherches.</p>
        @endempty
      </ul>
    </div>
    <div class="wd-100 items-center mesRecherches-content-space-between paddingLeftButtonMesRechercheMobile minWidthPartButtonMesRecherches">
      <button class="buttonSaveStepper fontSizeAfficherAnnoncesMobile" style="width: 100%; border: none;" id="resultRechercheFiuUser-2">
        Afficher les annonces
      </button>
    </div>
  </div>
</div>
@endif