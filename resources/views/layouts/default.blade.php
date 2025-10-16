<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title> @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  @yield('custom_css')  
</head>
  <body>
    

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid text-white">
     @yield('pagetitle')
    <ul class="navbar-nav">
      <li class="nav-item">
            @if(Session::get('usersigne')==1)                  
                <a class="nav-link active" href="{{ url('logout') }}">Déconnexion</a>                  
            @else 
                <a class="nav-link active" href="{{ url('Sesigner') }}">Se Connecter</a>                                 
            @endif

        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>


    
    <div >
        @yield('content')        
    </div>
      
    
    <!--  Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
      var baseUrl = '{{ url('/') }}/';
    </script>

    @yield('scripts')
    

  </body>
</html>