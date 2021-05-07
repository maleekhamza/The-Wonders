<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
   
    <title>clubs</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

<!-- Bootstrap core CSS -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">



<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">




<!-- Custom styles for this template -->
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  </head>
  <body id="body">
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>
    <div class="container">
    <main>
                
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name club</th>
                            <th scope="col">nb membres</th>
                            <th scope="col">Delete User</th>
                            <th scope="col">Update User</th>
                        </tr>
                    </thead>
                    <tbody id="result">
                    @foreach ($clubs as $club)
                      <tr>
                            <th scope="row">{{$club->id}}</th>
                            <th scope="row">{{$club->nom_club}}</th>
                            <th scope="row">{{$club->nb_membres}}</th>
                            <th> <a href=""> <i class="fa fa-ban" aria-hidden="true"></i> </a></th>
                            <th> <a href=""> <i class="fa fa-pencil" aria-hidden="true"></i> </a></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
      </main>
     
    @include('layouts.sidebar');
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
      <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">

      <script src="{{ asset('js/admin.js') }}" defer></script>
    </body>

</html>