<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
   
    <title>DASHBOARD
    </title>
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
                            <th scope="col">Name</th>
                            <th scope="col">numCin</th>
                            <th scope="col">username</th>
                            <th scope="col">Delete User</th>
                            <th scope="col">Update User</th>
                        </tr>
                    </thead>
                    <tbody id="result">
                    @foreach ($utilisateurs as $user)
                      <tr>
                            <th scope="row">{{$user->id}}</th>
                            <th scope="row">{{$user->name}}</th>
                            <th>{{$user->numCin }}</th>
                            <th>{{$user->username }}</th>
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

    </body>
</html>