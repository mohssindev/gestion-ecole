<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(Auth::check())
    <!-- AJAX URL -->
    @php $role = Auth::user()->role; @endphp
    <meta name="ajx-url" content="{{ url('app') }}">
    <meta name="app-url" content="{{ url('app/'.$role) }}">
    @endif

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @yield('title')

</head>
<body>
    <div class="upper-bar p-2">{{-- start upper bar --}}
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <span class="mr-4"><i class="fas fa-mobile-alt mr-1"></i>+21248184400</span>
                    <span><i class="fas fa-envelope mr-1"></i>agadir_devs@gmail.com</span>
                </div>
                <div class="col-md text-right">
                    <a href="{{ route('faq') }}" class="bar-a"><i class="fas fa-question mr-1"></i>FAQ</a>
                </div>
            </div>
        </div>
    </div>{{-- end upper bar --}}

    <div class="main-nav">{{-- start main navbar --}}
        <div class="container">
            <div class="nav">
                <input type="checkbox" id="nav-check">
                <div class="nav-header">
                  <div class="nav-title">
                    <a class="" href="{{ route('home') }}">
                        <span><i class="fas fa-graduation-cap mr-1"></i>Agadir</span><span>Sms</span>
                    </a>
                  </div>
                </div>

                <div class="nav-links ml-auto">
                  <a class="" href="{{ route('home') }}"><i class="fas fa-home mr-1"></i>Home</a>
                  <a class="active" href="@guest {{ route('stu') }} @else {{ route($role.'-dashboard') }} @endguest"><i class='fas fa-user-graduate mr-1'></i>Student Space</a>
                  <a class="" href="@guest {{ route('ins') }} @else {{ route($role.'-dashboard') }} @endguest"><i class='fas fa-chalkboard-teacher mr-1'></i>Instructor Space</a>
                  <a class="" href="@guest {{ route('adm') }} @else {{ route($role.'-dashboard') }} @endguest"><i class='fas fa-user-tie mr-1'></i>Admin Space</a>
                  <a class="" href="{{ route('con') }}"><i class='fas fa-address-card mr-1'></i>Contact Us</a>
                </div>
              </div>
        </div>
    </div>{{-- end main navbar --}}



    @yield('content')

    <div class="footer">{{-- start footer --}}
        <div class="container">
            <div class="row">
                <div class="col-md text-left">
                    Copyright &copy; 2020 All rights reserved | Made with <span><i class="far fa-heart"></i></span> by AgadirDevs
                </div>
                <div class="col-md text-right social-media">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>{{-- end footer --}}

    <script src="{{ asset('/javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('/javascript/popper.min.js') }}"></script>
    <script src="{{ asset('/javascript/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/javascript/all.js') }}"></script>
    <script src="{{ asset('/javascript/main.js') }}"></script>
    <script type="text/javascript">
      
    $(document).ready(function(){ 
      app_url = $('meta[name="app-url"]').attr('content');

    });

    </script>
</body>
</html>
