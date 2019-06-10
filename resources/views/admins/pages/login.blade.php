<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/adminstyle/img/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/morrisjs/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/metisMenu/metisMenu-vertical.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/calendar/fullcalendar.print.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/form/all-type-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminstyle/css/responsive.css') }}">
    <script src="{{ asset('/adminstyle/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="{{ route('home') }}" class="btn btn-primary">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3 style="color: orange">LOGIN PAGE</h3>
                    <p>This is the best app ever!</p>

  {{--                   @if(Session::has('msg'))
                    <div class="alert alert-danger">
                        {{ Session::get('msg') }}
                    </div>
                    @endif --}}

                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                          @if(Session::has('alert-' . $msg))

                          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="{{ route('login') }}" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                          @endif
                        @endforeach
                    </div> 
                    <!-- end .flash-message -->
                    
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="post"action="{{ route('storelogin') }}" id="loginForm">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="email">Email</label>
                                <input type="email" placeholder="Enter your email" title="Please enter your email" required="" value="" name="email" id="email" class="form-control">
                                <span class="help-block small">Your unique email</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Your password</span>
                            </div>
                            <div class="checkbox col-lg-12">
                                <label>
								    <input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            <button class="btn btn-primary btn-block">Login</button>
                            <a class="btn btn-default btn-block" href="#">Register</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->

    <script src="{{ asset('/adminstyle/js/vendor/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/wow.min.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/jquery-price-slider.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/metisMenu/metisMenu-active.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/tab.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/icheck/icheck-active.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/plugins.js') }}"></script>
    <script src="{{ asset('/adminstyle/js/main.js') }}"></script>
</body>

</html>