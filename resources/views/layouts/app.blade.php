<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TradeLive AI </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon2.png') }}" />
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
                        <a class="navbar-brand" href="/">
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
                                        @lang('Technology')
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
                                                    <h5>@lang('Trading Platforms')</h5>
                                                    <ul class="ul01">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('metaTrader_5') }}">@lang('TradeLive AI ') </a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('tradeLive_ios') }}">@lang('TradeLive AI  IOS')</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('tradeLive_android') }}">@lang('TradeLive AI  Android')</a>
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
                                        @lang('About')
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu2" style="left: 50%;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h5>@lang('TradeLive AI ')</h5>
                                                    <ul class="ul01">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('about-us') }}">@lang('About')
                                                                @lang('TradeLive AI ')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('news') }}">
                                                                @lang('TradeLive AI  News')</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('why-tradeLive') }}">@lang('Why TradeLive AI ')</a>
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
                                                                href="{{ route('tradelive_media') }}">@lang('TradeLive AI  in Media')</a>
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
                                    data-whatever="@mdo" href="javascript:void(0)">Trade Now</a>
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
                    <div class="col-lg-6 align-self-center">
                        <div class="banner-text text-left text-white">
                            <h1 class="text-white iq-mb-20">Generate Money Using <b
                                    class="iq-font-yellow">TradeLive AI </b></h1>
                            <p>Absolutely! Trading live using AI offers you a thrilling opportunity to harness your financial potential and cultivate a deep understanding of global economies. Embrace each trade as a chance to grow, adapt, and refine your strategies. With dedication and the right mindset, you have the power to navigate the market's challenges and unlock the rewards of your efforts.</p>
                            <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="button-play video-popup"><i
                                    class="fa fa-play"></i>
                                <ion-icon name="play"></ion-icon>
                            </a>
                            <a href="javascript:void(0)" class="button bt-white iq-mt-5 iq-ml-10">TradeLive Now!</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center r9-mt-40">
                        
                        <img src="{{ asset('images/lap.png') }}" class="img-fluid rounded-top" style="padding: 16px;" alt="">
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

    <footer class="pb-4 bg-black">
        <div class="pt-3 pb-3 bg-footer1">
            <div class="container text-capitalize">
                <div class="row links-footer small">

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>TradeLive AI </strong>
                                <div class="dis5"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/about-us">About                                    TradeLive AI </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/news">
                                    TradeLive AI  News</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/why-tradeLive">Why TradeLive AI </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/careers">Careers</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/vision">Vision</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/Mission">Mission</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/contact-us">Contact Us</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>Markets</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="/forex">Forex</a></li>
                            <li><a href="/indices">Indices</a></li>
                            <li><a href="/commodities">Commodities</a></li>
                            <li><a href="/metals">Metals</a></li>
                            <li><a href="/cryptocurrencies">Crypto</a></li>
                            <li><a href="/shares">Share</a></li>


                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>Accounts Types</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="https://portal.TradeLive AI inv.com/en/auth/register">Demo Account</a></li>
                            <li><a href="https://portal.TradeLive AI inv.com/en/auth/register">standard Account</a></li>
                            <li><a href="https://portal.TradeLive AI inv.com/en/auth/register">TradeLive AI  Account</a></li>
                            <li><a href="https://portal.TradeLive AI inv.com/en/auth/register">Premium Account</a></li>
                            <li><a href="https://portal.TradeLive AI inv.com/en/auth/register">Client Portal</a></li>


                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>Partnership</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="#aaaaaaaaaaaaa">Introducing Brokers</a></li>
                            <li><a href="/cpa_affiliate">Affiliate Program</a></li>
                            <li><a href="/ib_commission">IB Commission</a></li>
                            <li><a href="/white_label">White label</a></li>



                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>Market Research</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="/financial_news">Financial News</a></li>
                            <li><a href="/technical_analysis_articles">Analysis Articles</a></li>
                            <li><a href="/technical_analysis_videos">Analysis Videos</a></li>
                            <li><a href="/webinars">Webinars</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>Education</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="https://portal.TradeLive AI inv.com/en/auth/register">Open Account</a></li>
                            <li><a href="https://portal.TradeLive AI inv.com/en/auth/register">Start Trading</a></li>
                            <li><a href="/support">TradeLive AI &nbsp;FAQ</a></li>


                        </ul>
                    </div>


                </div>
                <div class="dis30"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-3 pb-0">
                    <div class="row">
                        <div class="col-sm-8 d-flex align-items-center img_in_footer text-center text-sm-start overflow-auto">
                            <img class="m-2" src="https://cloud.xm-cdn.com/assets/img/common/logo/meta-quotes.png?v1.1" width="136" height="26" alt="metaquotes">
                            <img class="m-2" src="/images/shap/icon-site.png" height="26" alt="metaquotes">
                            <img class="m-2" src="/images/shap/trustpilot.png" height="28" alt="metaquotes">
                        </div>
                        <div class="col-sm-3 mt-sm-0 mt-4 text-center text-sm-start">
                            <div class="social-icons">
                                <div class="img06">
                                    <img src="/images/new_images/oscar/ww.png" class="img-fluid hvr-grow" alt="">
                                </div>
                                <div class="img06">
                                    <img src="/images/new_images/oscar/d.png" class="img-fluid hvr-grow" alt="">
                                </div>
                                <div class="img06">
                                    <img src="/images/new_images/oscar/num3.png" class="img-fluid hvr-grow" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hidden-xs hidden-sm">
            <div class="small desk-footer">
                <div class="widget-area col-xs-12 col-sm-12 col-md-12 col-lg-10">
                    <div id="block-10" class="widget hr widget_block small">
                        <div class="titlemax mb-0">
                            <strong>Incumbency Certificate</strong>
                        </div>
                        <p>
                            We, Euro-Caribbean Trustees Ltd., of Kingstown, St. Vincent &amp; the Grenadines, being the duly appointed Registered Agent of TradeLive AI  Investment LLC hereby confirm that as at the date of this Certificate:<br>
                        </p>
                        <ol style="list-style: disc">
                            <p></p>
                            <li>The Company is in good legal standing.</li>
                            <li>The Registered Office address of the Company is: Euro House, Richmond Hill Road, Kingstown, VC0100, Saint Vincent and&nbsp;the&nbsp;Grenadines.</li>
                            <li>TradeLive AI  Investment FZE, Our Address in Dubai: the Iridium building, Office No 227.039 Umm-Suqeim St. Al Barsha-&nbsp;Dubai&nbsp;-&nbsp;UAE</li>
                            <li>The Company was incorporated in St. Vincent &amp; the Grenadines under the Limited Liability Companies Act Chapter 151 of Saint Vincent and the Grenadines 2009 (the Act), on the 5 th October 2021, and its Limited Liability Company Number is 1465 LLC 2021.</li>
                        </ol>
                        <div class="titlemax mb-0">
                            <strong>Risk Warning:</strong>
                        </div>
                        <p>Trading derivatives carries significant risks. It is not suitable for all investors and if you are a professional client, you could lose substantially more than your initial investment. When acquiring our derivative products, you have no entitlement, right or obligation to the underlying financial assets. Past performance is no indication of future performance and tax laws are subject to change. The information on this website is general in nature and doesn't take into account your personal objectives, financial circumstances, or needs. Accordingly, before acting on the advice, you should consider whether the advice is suitable for you having regard to your objectives, financial situation and needs. We encourage you to seek independent advice if necessary. Please read our legal documents and ensure that you fully understand the risks before you make any trading&nbsp;decisions.</p>
                        <div class="titlemax mb-0 mt-3">
                            <strong>Disclaimer</strong>
                        </div>
                        <p>This site contains external links to websites controlled or offered by third parties. the information contained on this site is intended for information purposes only and it should not be regarded as advice nor as a recommendation to buy, sell or otherwise deal with any particular currency or precious metal trade. TradeLive AI inv hereby disclaims responsibility for any information or materials posted at any of the sites linked to this site. TradeLive AI  Investments Ltd does not endorse or recommend any products or services offered on that website. Clients carry the sole responsibility for all transactions or investments carried out at TradeLive AI inv.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-sm-12 col-md-10 d-flex align-items-center">
                    <p class="mb-0 href-link-footer">
                        <a class="small" href="/legal_forms_documents">Legal Forms &amp; Documents</a>
                        |
                        <a class="small" href="/risk_warnings">Risk Warnings</a> |
                        <a class="small" href="/cookies_policy">Cookies Policy</a> |
                        <a class="small" href="/privacy_policy">PRIVACY POLICY</a>
                    </p>
                </div>
                <div class="col-sm-3 col-md-2 d-sm-block d-none">
                    <img src="/storage/settings/August2023/0j6EWUnlHgf446vfXr98.png" class="pull-right img-fluid">
                </div>
            </div>
        </div>
    </footer>

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
            if($(this).find("ul.dropdown-menu").width() <= 430){
                $(this).find("ul.dropdown-menu").css({"left":"auto"});
            }
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
