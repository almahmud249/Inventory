<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

        <!-- Base Css Files -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
        <!-- Font Icons -->
        <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('css/animate.css')}}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('css/waves-effect.css')}}" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{ asset('assets/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ asset('css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />

      
        <script src="{{ asset('js/modernizr.min.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'al mahmud') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{asset('assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset(asset'assets/jquery-blockui/jquery.blockUI.js')}}"></script>

        <!-- sweet alerts -->
        <script src="{{asset('assets/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="{{asset('assets/sweet-alert/sweet-alert.init.js')}}"></script>asset

        <!-- flot Chart -->
        <script src="{{asset('assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{asset('assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('js/jquery.app.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{asset('js/jquery.dashboard.js')}}"></script>

        <!-- Chat -->
        <script src="{{asset('js/jquery.chat.js')}}"></script>

        <!-- Todo -->
        <script src="{{asset('js/jquery.todo.js')}}"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    
</body>
</html>




<!-- <tbody>

  @foreach($emp as $row)
    <tr>
      <td>{{ $row->email }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->address }}</td>
      
      <td>{{ $row->phone }}</td>
      <td>{{ $row->salary }}</td>
      
      <td>{{ $row->experience }}</td>
      <td><img src="{{ $row->photo}}"</td>
      <td>
      <a href="{{URL::to('edit-data/'.$row->id)}}" class="btn btn-success">Edit</a>
<a href="{{URL::to('delete-data/'.$row->id)}}" class="btn btn-danger">Danger</a>
</td>
    </tr>
 @endforeach  
    
  </tbody> -->