<!DOCTYPE html>
<html lang="en">

<head>
  <link href="/css/app.css" rel="stylesheet">
  <!-- Bootstrap CSS & JS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <!-- Bootstrap CSS & JS Online
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      -->
  <script src="/js/bootstrap.bundle.min.js"></script>
  <!-- END Bootstrap -->
  <link rel="stylesheet" href="/css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Management </title>
</head>

<body>
  <!--  Header -->
  <div class="container-fluid p-0">
    <img src="/img/header.jpg" class="resp" style="height: 220px;">
  </div>
  <!-- End Header -->

  <!--  Navbar -->
  <!-- https://getbootstrap.com/docs/5.0/components/navbar/  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">

            <a class="nav-link active" aria-current="page" href="{{ url('/home')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/">News</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Archives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Library</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Formations
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Web Developpement</a></li>
              <li><a class="dropdown-item" href="#">Mobile Developpement</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Desktop Developpement</a></li>
              <li><a class="dropdown-item" href="#">Data Sciences</a></li>

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success mt-3" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Sidenav & Body & Sidbar  -->
  <div class="container" style="margin-top: 20px; margin-left:0px;">
    <div class="row">

      <!-- 4.1)  Sidenav avec 2 colonnes -->
      <div class="col-2" style="margin-right:20px; margin-bottom:5px;">
        <!-- Mettez ici le contenu de votre sidenav: des liens, des boutons de commandes...  -->


        <div class="sidebar">
          <header>Main Menu</header>
          <a href="{{ url('/students')}}" class="active">
   
            <span>Manage Students</span>
          </a>


          <form method="POST" action="{{ route('logout') }}" >
            @csrf
                 
            <a href="route('logout')"
            
                    onclick="event.preventDefault();
                                this.closest('form').submit();"><span>  Logout</span>
                                
                              </a>
        </form>

          {{-- <a href="#">
            <i class="fas fa-link"></i>
            <span>LogOut</span>
          </a> --}}
          
          {{-- @if () --}}
            <a href="#" >
              <i class="fas fa-user"></i>
              <span> Edit Profile</span>
            {{-- </a>
          @else
            
          @endif
          --}}
        

          <a href="#">
            <i class="fas fa-calendar"></i>
            <span>Events</span>
          </a>
          <a href="#">
            <i class="far fa-question-circle"></i>
            <span>About</span>
          </a>
          <a href="#">
            <i class="fas fa-sliders-h"></i>
            <span>Services</span>
          </a>
          <a href="#">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
          </a>
        </div>


      </div>
      <!-- End Sidenav-->


      <!-- BODY avec 9 colonnes-->
      <div class="col-9">
        <div class=" " style="width: 100%; margin-left:75px; margin-right:0px;">
          <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;" style="width: 100%;">
            School Management !
          </div>
          <div class=" mt-3 text-align">
            @if (Route::has('login'))
             
                <div class="col-sm-6 text-align" style="margin-left:40%" >

                  <style>
                    a{
                      text-decoration-style: none;
                      color: green;
                      text-decoration: none;
                    
                    }

                    a:hover
                    {
                      
                      text-decoration-style: none;
                      text-decoration: none;
                      color: lightslategray;
                      padding:8px;
                    }
                  </style>
                    @auth
                      {{-- <div class="btn btn-dark">  <a href="{{ url('/dashboard') }}" >Dashboard</a></div> --}}
                    @else
                      <div class="btn btn-dark">  <a href="{{ route('login') }}"  >Log in</a></div>

                        @if (Route::has('register'))
                          <div class="btn btn-dark ">  <a href="{{ route('register') }}" >Register</a> </div>
                        @endif
                    @endauth
                </div>
            @endif

              <div class="container">
              @yield('content')
              </div>
              <table class="table table-responsive  ">
         
                <tbody>
                   
                    <tr>
                       
                        <td><img src="{{ asset('img/etudiant.jpg') }}"  height="150px" class="img img-rounded" width="400px"  alt="etudiant">
                          <h3> Manage Students</h3>
                        </td>
                        <td> <img src="{{ asset('img/librairy.jpg') }}" height="150px" width="400px"   alt="librairy">
                          <h3> Manage Library</h3></td>
                    </tr>
                    
                      
                    <tr>
                      <td> <img src="{{ asset('img/teacher2.jpg') }}" height="150px" width="400px"  alt="librairy">
                        <h3> Manage teachers</h3>
                      </td>
                      {{-- test --}}
                      @if ( Gate::allows('access-admin'))

                      <td>    <a href="{{ route('admin.index') }}"><img src="{{ asset('img/adminstra.jpg') }}"  height="150px" width="400px"  alt="administration"  ></a>
                        <h3> Settings Administration
                          
                        </h3>
                      </td>
                      @endif
                        {{-- fin test --}}
                         
                    </tr>
        
                </tbody>
            </table>
            
            <div >
              <p class="card-text">
                <a href="#" class="btn btn-primary">Read More !</a>
              </p>
             </div>
            </div>
           
           
            
          </div>
        </div>
      </div>
      <!-- End Body-->



    </div>
  </div>
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example2" class="form-control" />
                <label class="form-label" for="form5Example2">Email address</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"> Travail Collectif </a>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>