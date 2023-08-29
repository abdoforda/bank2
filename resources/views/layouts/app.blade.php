<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TradeLive AI</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <!-- media element player -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mediaelementplayer.min.css') }}" />
    <!-- style CSS -->
    @yield('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    
    
</head>

<body data-spy="scroll" data-offset="80">
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <div class='loader loader2'>
                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loading End -->
    <!-- Header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="javascript:void(0)">
                            <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="la la-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 uld_hover">
                                <li class="nav-item dropdown dropdown2">
                                    <a class="nav-link dropdown-toggle" href="#" aria-expanded="false">
                                        @lang('About')
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu2">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h5>@lang('TradeLive AI')</h5>
                                                    <ul class="ul01">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('about-us') }}">@lang('About')
                                                                @lang('TradeLive AI')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('news') }}">
                                                                @lang('TradeLive AI News')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('why-tradeLive') }}">@lang('Why TradeLive AI')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('careers') }}">@lang('Careers')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('vision') }}">@lang('Vision')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('Mission') }}">@lang('Mission')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('contactUs') }}">@lang('Contact Us')</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h5>@lang('Regulation')</h5>
                                                    <ul class="ul01">
                                                        <li> <a class="dropdown-item"
                                                                href="{{ route('terms_and_agreement') }}">@lang('Terms and Agreement')</a>
                                                        </li>
                                                        <li> <a class="dropdown-item"
                                                                href="{{ route('safety_of_your_funds') }}">
                                                                @lang('Safety Of Your Funds')</a> </li>
                                                        <li> <a class="dropdown-item"
                                                                href="{{ route('legal_forms_documents') }}">
                                                                @lang('Legal Forms & Documents')</a></li>
        
                                                        <li> <a class="dropdown-item" href="{{ route('cookies_policy') }}">
                                                                @lang('Cookies Policy')</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h5>@lang('Activity')</h5>
                                                    <ul class="ul01">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('sponsership') }}">@lang('Sponsership')</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('awards') }}">@lang('Awards')</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('exhibitions') }}">@lang('Exhibitions')</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('tradelive_media') }}">@lang('TradeLive AI in Media')</a>
                                                        </li>
                                                    </ul>
                                                </div>
        
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown2">
                                    <a class="nav-link dropdown-toggle" href="#" aria-expanded="false">
                                        @lang('Markets')
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('forex') }}">@lang('Forex')</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('indices') }}">@lang('Indices')</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('commodities') }}">@lang('Commodities')</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('metals') }}">@lang('Metals')</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('energyCommodities') }}">@lang('Energy commodities')</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('shares') }}">@lang('shares')</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('cryptocurrencies') }}">@lang('Cryptocurrencies')</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('etf') }}">@lang('ETF')</a>
                                        </li>
        
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown2">
                                    <a class="nav-link dropdown-toggle" href="#" aria-expanded="false">
                                        @lang('Trading')
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu2">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h5>@lang('Accounts Types')</h5>
                                                    <ul class="ul01">
        
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('standard_account') }}">@lang('Standard Account')</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('tradeLive_account') }}">@lang('TradeLive AI Account')</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('premium_account') }}">@lang('Premium Account')</a>
                                                        </li>
        
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h5>@lang('Trading Platforms')</h5>
                                                    <ul class="ul01">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('metaTrader_5') }}">@lang('MetaTrader 5') </a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('tradeLive_ios') }}">@lang('TradeLive AI Ios')</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('tradeLive_android') }}">@lang('TradeLive AI Android')</a>
                                                        </li>
                                                    </ul>
                                                </div>
        
                                                <div class="col">
                                                    <h5>@lang('Deposit And Withdrawal')</h5>
                                                    <ul class="ul01">
        
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('deposit_withdrawal_methods') }}">@lang('Deposit & Withdrawal Methods')</a>
                                                        </li>
        
                                                    </ul>
                                                </div>
        
        
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" aria-expanded="false">
                                        @lang('Partnership')
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('cpa_affiliate') }}">@lang('Affiliate Program')</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('ib_commission') }}">@lang('IB Commission')</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('white_label') }}">@lang('White label')</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown2">
                                    <a class="nav-link dropdown-toggle" href="#" aria-expanded="false">
                                        @lang('Knowledge Types')
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu2">
                                        <div class="container">
                                            <div class="row rowC01">
                                                <div class="col-xl-2 col-lg-3">
                                                    <h5>@lang('Tools')</h5>
                                                    <ul class="ul01">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('fix_api') }}">@lang('Fix APi')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('mam_pamm') }}">@lang('MAM/PAMM')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('expert_advisor') }}">@lang('Expert Advisor')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('free_vps_hosting') }}">@lang('Free Vps Hosting')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('economic_calendar') }}">@lang('Economic calendar')
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('currency_converter') }}">@lang('Currency Converter')
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('trading_central_web_tv') }}">@lang('Trading Central Web TV')</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-3 col-lg-3">
                                                    <h5>@lang('Trading')</h5>
                                                    <ul class="ul01">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('trading_hours_and_holidays') }}">@lang('Trading Hours and Holidays')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('economic_calendar') }}">@lang('Economic Calendar')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('expiration_dates') }}">@lang('Expiration Dates')</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-2 col-lg-3">
                                                    <h5>@lang('Education')</h5>
                                                    <ul class="ul01">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('how_to_open_account') }}">@lang('How To Open Account')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('how_to_start_trading') }}">@lang('How To Start Trading')</a>
                                                        </li>
                                                    </ul>
                                                </div>
        
                                                <div class="col-xl-3 col-lg-3">
                                                    <h5>@lang('Market Research')</h5>
                                                    <ul class="ul01">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('financial_news') }}">@lang('Financial News')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('technical_analysis_articles') }}">@lang('Technical Analysis Articles')
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('technical_analysis_videos') }}">@lang('Technical Analysis Videos')
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-2 col-lg-3">
                                                    <h5>@lang('Analytics')</h5>
                                                    <ul class="ul01">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('webinars') }}">@lang('Webinars')</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('support') }}">@lang('Support') </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav justify-content-end">
                            <li class="nav-item iq-mlr-0">
                                <a class="nav-link button" data-bs-toggle="modal" data-bs-target=".iq-login"
                                    data-whatever="@mdo" href="javascript:void(0)">Login</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header END -->
    <!-- banner -->
    <div id="wave" class="iq-banner">
        <div class="banner-info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 align-self-center">
                        <div class="banner-text text-left text-white">
                            <h1 class="text-white iq-mb-20">Best Selling ICO Future Of Trading <b
                                    class="iq-font-yellow">TradeLive AI</b></h1>
                            <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="button-play video-popup"><i
                                    class="fa fa-play"></i>
                                <ion-icon name="play"></ion-icon>
                            </a>
                            <a href="javascript:void(0)" class="button bt-white iq-mt-5 iq-ml-10">White Paper</a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-center r9-mt-40">
                        <div class="iq-countdown">
                            <h2 class="iq-tw-8 iq-font-yellow">ICO Ends In:</h2>
                            <ul id="countdown">
                                <li class="border-white"><span class="days">00</span>
                                    <p class="days_text ">Days</p>
                                </li>
                                <li class=" border-white"><span class="hours">00</span>
                                    <p class="hours_text">Hours</p>
                                </li>
                                <li class=" border-white"><span class="minutes">00</span>
                                    <p class="minutes_text">Minutes</p>
                                </li>
                                <li class="border-white"><span class="seconds">00</span>
                                    <p class="seconds_text">Seconds</p>
                                </li>
                            </ul>
                            <div class="iq-progress-bar-linear">
                                <p class="iq-progress-bar-text text-left">Sale Raised
                                    <span>50000 ICOX</span>
                                </p>
                                <div class="iq-progress-bar">
                                    <span data-percent="90"></span>
                                </div>
                            </div>
                            <a class="button iq-mb-20 bt-white" href="javascript:void(0)" role="button">Sign Up &
                                Buy
                                Token Now</a>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="javascript:void(0)"><i
                                            class="fa fa-cc-visa"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i
                                            class="fa fa-paypal"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i
                                            class="fa fa-bitcoin"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i
                                            class="fa fa-credit-card-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->
    <!-- Main-Contain -->
    <div class="main-contain">

        <script>var ua = "\x55\x41\x2D\x33\x36\x33\x35\x39\x36\x33\x2D\x32";</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3635963-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {dataLayer.push(arguments);}
		gtag('js', new Date());
		cfg = {};
		cfg["custom_map"] = {'dimension1': 'Guest'};
		gtag('config', ua, cfg);
	</script>

{{-- if route home --}}
@if (Route::currentRouteName() === 'index')
<script defer src="https://unpkg.com/timeago.js@4.0.2/dist/timeago.full.min.js"></script>
<script>
function w(s){document.write(s);}
function f(s){for(let i=0;i<s.length;i++){w('629,01-+ 34.857'.charAt(s.charCodeAt(i)-66-i))}}
function tzo(){const tzo=new Date().getTimezoneOffset();const o=Math.abs(tzo);return (tzo>0?'-':'+')+Math.floor(o/60).toFixed(0).padStart(2,'0')+':'+(o%60).toString().padStart(2,'0');}
function hhmm(t){let d=new Date(t*1000);return d.getHours().toString().padStart(2,'0')+':'+d.getMinutes().toString().padStart(2,'0');}
function render_ago(){timeago.render(document.querySelectorAll('.timeago'), 'en');}
document.addEventListener('DOMContentLoaded', render_ago);
</script>
@endif


        @yield('content')

        <div class="modal fade iq-login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content blue-bg">
                    <div class="modal-header text-center">
                        <h4 class="modal-title ">Login</h4>
                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form">
                            <div class="section-field">
                                <input class="require" id="contact_name" type="text" placeholder="Name*"
                                    name="name">
                            </div>
                            <div class="section-field">
                                <input class="require" id="contact_email" type="email" placeholder="Email*"
                                    name="email">
                            </div>
                            <a class="button iq-mtb-10" href="javascript:void(0)">Sign In</a>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <a href="javascript:void(0)">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <div> Don't Have an Account? <a href="javascript:void(0)" class="iq-font-yellow">Register
                                Now</a>
                        </div>
                        <ul class="iq-media-blog iq-mt-20">
                            <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                            <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                            <li><a href="# "><i class="fa fa-google "></i></a></li>
                            <li><a href="# "><i class="fa fa-github "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"><i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </a>
    </div>
    <!-- back-to-top End -->
    <!-- bubbly -->
    <canvas id="canvas1"></canvas>
    <!-- bubbly End -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <!-- popper JavaScript -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- All-plugins JavaScript -->
    <script src="{{ asset('js/all-plugins.js') }}"></script>
    <!-- timeline JavaScript -->
    <script src="{{ asset('js/timeline.min.js') }}"></script>
    <!-- wave JavaScript -->
    <script src='{{ asset('js/wave/three.min.js') }}'></script>
    <script src='{{ asset('js/wave/Projector.js') }}'></script>
    <script src='{{ asset('js/wave/CanvasRenderer.js') }}'></script>
    <script src="{{ asset('js/wave/index.js') }}"></script>
    <!-- bubbly JavaScript -->
    <script src="{{ asset('js/bubbly-bg.js') }}"></script>
    <!-- carousel JavaScript -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/ajax.form.js') }}"></script>


    <script>

        
var newSubmit = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';

function removeErrors(form){
    $(form).find("[type='submit']").html(newSubmit).attr("disabled","disabled");
    $(".is-invalid").removeClass("is-invalid");
    $(".invalid-feedback").remove();
}

function errors(form, data) {
    
    obj = data.errors;
    for (var key in data.errors) {
        var value = obj[key];
        console.log(value);
        find_error_name_and_display_message(form, key, value);
    }
  }
  
  function find_error_name_and_display_message(form, key, value) {

    $(form).find("[name='" + key + "']").addClass("is-invalid");
    $(form).find("[name='" + key + "']").after(`<div class="invalid-feedback">${value}</div>`);

  }

        $(function () {
            $(".uld_hover .dropdown").hover(
        function () {
            $(this).find("ul.dropdown-menu").addClass("show");
        },
        function () {
            $(this).find("ul.dropdown-menu").removeClass("show");
        }
    );
    
            $(".signals").find("a").each(function( index ) {
                $( this ).attr('href','#');
            });
        });
    </script>
    @yield('scripts')

</body>

</html>
