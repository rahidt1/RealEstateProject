<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('admins.includes.head')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <div class="left-sidebar-pro">
        @include('admins.includes.sidebar')
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ route('home') }}"><img class="main-logo" src="{{ asset('/adminstyle/img/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            @include('admins.includes.header')

            <!-- Mobile Menu start -->
                @include('admins.includes.mobilemenu')
            <!-- Mobile Menu end (Include in every page)-->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2></h2>
                                                <p>Welcome to <span class="bread-ntd">blusky</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div>
            @include('admins.includes.flashmessage')
        </div>
        <div class="container">
            @yield('abc')
        </div>

        


    <div class="footer-copyright-area">
            @include('admins.includes.footer')
        </div>
    </div>

<!-- Jquery -->
@include('admins.includes.script')
</body>

</html>