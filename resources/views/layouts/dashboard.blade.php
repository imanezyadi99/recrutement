<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{URL::asset('/css/app1.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
    
    

    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
 <!-- Page Wrapper -->
 <div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
          <div class="sidebar-brand-icon rotate-n-10">
              <img src="{{URL::asset('images/logo.png')}}" alt="logo" width="40px" height="40px">
             
          </div>
          <div class="sidebar-brand-text">Finixia Holding</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" href="{{url('dashboard')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Dashboard Candidats</span>
            </a>
      </li>


      <li class="nav-item active">
        <a class="nav-link" href="{{url('dashboard/Emploi')}}">
            <i class="fa fa-suitcase" aria-hidden="true"></i>
            <span>Dashboard Emploi</span>
        </a>
    </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Recrutement
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
          <a class="nav-link " href="{{route('Espace')}}" >
              <i class="fa fa-users" aria-hidden="true"></i>
              <span>Tous candidats</span>
          </a>
     
      </li>

      <li class="nav-item active">
        <a class="nav-link " href="{{route('Espace_candidat')}}" >
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>L'offre d'emploi</span>
        </a>
   
    </li>


    <li class="nav-item active">
        <a class="nav-link " href="{{route('Espace_recruteur')}}" >
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Recruteurs</span>
        </a>
   
    </li> 
      <!-- Nav Item - Utilities Collapse Menu -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
          <a class="nav-link collapsed" href="{{url('/')}}" >
              <i class="fa fa-home" aria-hidden="true"></i>
              <span>Acceuil</span>
          </a>
   
      </li>

 

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

   

   

  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
              </button>

              <!-- Topbar Search -->
              <form
                  class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" type="get" action="{{url('/search')}}" >
                  <div class="input-group">
                      <input type="search" name="query" id="query" class="form-control bg-light border-0 small"  placeholder="checher nom client"
                          aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                          <button class="btn btn-primary" type="submit"> Search </button>
                      </div>
                  </div>
              </form>

              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
         

                  <!-- Nav Item - Messages -->
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        @if(Auth::user()->unreadNotifications->count())
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">({{Auth::user()->unreadNotifications->count() }}) </span>
                        @endif
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Message Center
                        </h6>
                        @foreach(Auth::user()->unreadNotifications as $notification)
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                    alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate"> {{$notification->data['name']}} {{$notification->data['prenom']}}</div>
                                <div class="text-truncate"> {{$notification->data['email']}} </div>
                                <div class="small text-gray-500">{{$notification->created_at }} </div>
                            </div>
                        </a>
                        @endforeach
                    
                    
                        <a class="dropdown-item text-center small text-gray-500" href="{{route('markRead')}} ">Marquer comme lu</a>
                    </div>
                </li>

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">IMANE ZYADI</span>
                         
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                          aria-labelledby="userDropdown">
                       
                          
                          <a class="dropdown-item " href="{{route('logout1')}}" data-toggle="modal" data-target="#logoutModal" >
                              <i class="fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                         </a> 
                         <form id="logout-form" action="{{route('logout1')}}"  method="POST" class="d-none">
                          @csrf
                         </form>
                      </div>
                  </li>

              </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                
              </div>
          
             <div id="app">      

               @yield('content')
                 </div>

                </div>
          <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
          <div class="container my-auto">
              <div class="copyright text-center my-auto">
                  <span>Tous les droits réservés &copy; <a href="/" > Finixia Holding solution IT 2023 </a></span>
              </div>
          </div>
      </footer>
      <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
              <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
              <form id="logout-form" action="{{route('logout1')}}"  method="POST">
                  @csrf
                 <button type="submit" class="btn btn-danger" href="{{route('logout1')}}">
                     <i class="fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                     Logout
                 </button> 
                </form>
          </div>
      </div>
  </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('js/sb-admin-2.min.js')}}"></script>

            <!-- Core plugin JavaScript-->
            <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        
            <!-- Custom scripts for all pages-->

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  
</body>
</html>
