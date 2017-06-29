<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="JoanMarwa" />

    <!-- Page Title -->
    <title>Afro Crowdfunding</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('assets')
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
<div class="body-overlay"></div>
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <div class="preloader-dot-loading">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        {{--<div class="header-top bg-theme-colored sm-text-center">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-8">--}}
                        {{--<div class="widget no-border m-0">--}}
                            {{--<ul class="list-inline sm-text-center mt-5">--}}
                                {{--<li>--}}
                                    {{--<a href="#" class="text-white">FAQ</a>--}}
                                {{--</li>--}}
                                {{--<li class="text-white">|</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#" class="text-white">Help Desk</a>--}}
                                {{--</li>--}}
                                {{--<li class="text-white">|</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#" class="text-white">Support</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div id="side-panel-trigger" class="side-panel-trigger pull-right sm-pull-none mt-5"><a href="#"><i class="fa fa-bars font-24 text-white"></i></a></div>--}}
                        {{--<div class="widget no-border m-0">--}}
                            {{--<ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-right sm-pull-none sm-text-center mt-sm-15">--}}
                                {{--<li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="header-middle p-0 bg-lightest xs-text-center">
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-5">
                        <div class="widget no-border m-0">
                            <a class="menuzord-brand xs-pull-center mb-15" href="javascript:void(0)"><img src="" alt="Afro Crowdfunding"></a>
                        </div>
                    </div>
                    {{--<div class="col-xs-12 col-sm-4 col-md-4">--}}
                        {{--<div class="widget no-border m-0">--}}
                            {{--<div class="mt-10 mb-10 text-right sm-text-center">--}}
                                {{--<div class="font-20 text-black-333 text-uppercase mb-5 font-weight-600"><i class="fa fa-phone-square text-theme-colored font-24"></i> +(012) 345 6789</div>--}}
                                {{--<a class="font-12 text-gray" href="#">Call us for more details!</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-12 col-sm-4 col-md-3">--}}
                        {{--<div class="widget no-border m-0">--}}
                            {{--<div class="mt-10 mb-10 text-right sm-text-center">--}}
                                {{--<div class="font-20 text-black-333 text-uppercase mb-5 font-weight-600"><i class="fa fa-envelope text-theme-colored font-24"></i> Mail us today</div>--}}
                                {{--<a class="font-12 text-gray" href="#"> info@yourdomain.com</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
                <div class="container">
                    <nav id="menuzord" class="menuzord orange bg-light">
                        <ul class="menuzord-menu onepage-nav">
                            @if (Route::has('login'))
                                @if (Auth::check())
                            <li class="active"><a href="#home">Home</a> </li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#client">Client</a></li>
                            <li><a href="#blog">News</a></li>
                            <li><a href="#contact">Contact</a></li>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                            @else
                            <li class="active"><a href="#home">Home</a> </li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#client">Client</a></li>
                            <li><a href="#blog">News</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li> <a href="{{ url('/register') }}">Register</a></li>
                            @endif
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        @yield('header')
    </header>

    @yield('content')

<!-- Footer -->
    <footer id="footer" class="footer pb-0" data-bg-img="" data-bg-color="#25272e">
        <div class="container pb-20">
            <div class="row multi-row-clearfix">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark"> <img alt="Afro Crowdfunding" src="">
                        <p class="font-12 mt-20 mb-10"> is a library of Crowdfunding and Charity templates with predefined elements which helps you to build your own site. Lorem ipsum dolor sit amet consectetur.</p>
                        <a class="text-gray font-12" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                        <ul class="styled-icons icon-dark mt-20">
                            <li><a href="https://twitter.com/" target="_blank" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Pages</h5>
                        <ul class="list-border list theme-colored angle-double-right">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Donor Privacy Policy</a></li>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Copyright Notice</a></li>
                            <li><a href="#">Media Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Quick Links</h5>
                        <ul class="list-border list theme-colored angle-double-right">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Donor Privacy Policy</a></li>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Copyright Notice</a></li>
                            <li><a href="#">Media Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Quick Contact</h5>
                        <ul class="list-border">
                            <li><a href="#">+(012) 345 6789</a></li>
                            <li><a href="#">hello@yourdomain.com</a></li>
                            <li><a href="#" class="lineheight-20">121 King Street, Melbourne Victoria 3000, Australia</a></li>
                        </ul>
                        <p class="text-white mb-5 mt-15">Subscribe to our newsletter</p>
                        <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                            <label class="display-block" for="mce-EMAIL"></label>
                            <div class="input-group">
                                <input type="email" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
                                <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
                            </div>
                        </form>
                        <!-- Mailchimp Subscription Form Validation-->
                        <script type="text/javascript">
                            $('#footer-mailchimp-subscription-form').ajaxChimp({
                                callback: mailChimpCallBack,
                                url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                            });

                            function mailChimpCallBack(resp) {
                                // Hide any previous response text
                                var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                                    $response = '';
                                $mailchimpform.children(".alert").remove();
                                if (resp.result === 'success') {
                                    $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                } else if (resp.result === 'error') {
                                    $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                }
                                $mailchimpform.prepend($response);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-theme-colored p-20">
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="text-white font-11 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    @yield('footer')
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>


</body>
@yield('scripts')
</html>
