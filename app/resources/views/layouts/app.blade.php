<hmtl>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$title}}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/jquery-ui-1820custom.css')}}">
   <link href="{{ asset('square/grey.css') }}" rel="stylesheet">
    
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/icheck.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                  <STRONG>RCF OAU</STRONG>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#">
                          Home
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
                        <a class="page-scroll" href="#">live Broadcast</a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('blog') ? 'active' : '' }}">
                        <a class="page-scroll" href="{{ url('/posts') }}">blog</a>
                    </li>
                    <li {{ Route::currentRouteNamed('downloads') ? 'active' : '' }}>
                        <a class="page-scroll" href="{{ url('/downloads') }}">Downloads</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="{{ Route::currentRouteNamed('register') ? 'active' : '' }}">
                    <a class="page-scroll " href="{{ url('/newUser') }}">Register</a>
                  </li>
                  <li class="{{ Route::currentRouteNamed('edit') ? 'active' : '' }}">
                    <a class="page-scroll" href="{{ url('edit') }}">Update Details</a>
                  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

@yield('content')

<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-grey',
    radioClass: 'iradio_square-grey',
    increaseArea: '20%' // optional
  });
  $('#datepicker').datepicker({
                dateFormat: 'dd-mm',
            });
});
</script>
</body>
</html>