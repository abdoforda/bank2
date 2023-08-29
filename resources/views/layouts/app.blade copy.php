<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if (app()->getLocale() == 'ar') dir="rtl" @endif>

<head>
    <title>{{ setting('site.title') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap CSS v5.2.1 -->

    <link href="/css/hover/hover.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" />
    
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    @else
        <link href="/css/bootstrap/bootstrap.css" rel="stylesheet" />
    @endif

    <link rel="stylesheet" href="/css/style.css" />
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="/css/style_rtl.css" />
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    @endif

    <link rel="stylesheet" media="screen and (max-width: 600px)" href="/css/smallscreen.css">
    @yield('css')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>  
    <header>
        <nav class="navbar navbar-expand-lg nav-main animation3 navmain">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img class="logo_navbar" src="{{ Voyager::image(setting('site.logo')) }}" height="40px" alt=""
                        style="padding-right: 24px;" />
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse position-relative" id="collapsibleNavId">
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
                                                        href="{{ route('why-TradeLive AI') }}">@lang('Why TradeLive AI')</a>
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
                                                        href="{{ route('tradeLive_in_media') }}">@lang('TradeLive AI in Media')</a>
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
                                                        href="{{ route('tradeLiveaccount') }}">@lang('TradeLive AI Account')</a>
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
                                                        href="{{ route('tradeLiveios') }}">@lang('TradeLive AI Ios')</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('tradeLiveandroid') }}">@lang('TradeLive AI Android')</a>
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

                    <div class="d-flex">
                        @auth
                        <div class="dropdown lang02">
                            <button class="btn btn-secondary dropdown-toggle" id="dr01" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="background: #74b22b; color: #fff;">
                                
                                @lang('Welcome:')
                                @if (auth()->user()->username == null)
                                {{ auth()->user()->name }}
                                @endif
                                {{ auth()->user()->username }}

                            </button>
                            <div class="dropdown-menu sub_lang">
                                @admin
                                <a class="dropdown-item" href="{{ route('admin.index', app()->getLocale()) }}">
                                    @lang('Admin Panel')
                                    <i class="fa-solid fa-file-invoice-dollar float-end m-1"></i>
                                </a>
                                @endadmin
                                <a class="dropdown-item" href="{{ route('panel_dashboard', app()->getLocale()) }}">
                                    @lang('Panel')
                                    <i class="fa-solid fa-file-invoice-dollar float-end m-1"></i>
                                </a>
                                <a class="dropdown-item" href="{{ route('signOut', app()->getLocale()) }}">
                                    @lang('Logout')
                                    <i class="fa-solid fa-arrow-right-from-bracket float-end m-1"></i>
                                </a>
                                
                            </div>
                        </div>
                        @else
                        <a href="https://portal.TradeLive AI.com/en/auth/register"><button type="button" class="btn "
                            style="background-color: #4848485e  !important; color: #fff; border: 1px solid #0c4c74;">@lang('Open Account')</button></a>
                    &nbsp;
                    <a href="https://portal.TradeLive AI.com/en/auth/login"><button type="button" class="btn bgpx pp">
                            @lang('Login')
                        </button></a>
                        @endauth
                        


                        <div class="dropdown lang02">
                            <button class="btn btn-secondary dropdown-toggle" id="dr01" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                @if (app()->getLocale() == 'ar')
                                    <span class="flag-icon flag-icon-sa"></span>
                                    Arabic
                                @else
                                    <span class="flag-icon flag-icon-us"></span>
                                    English
                                @endif

                            </button>
                            <div class="dropdown-menu sub_lang">
                                <a class="dropdown-item" href="#">
                                    <span class="flag-icon flag-icon-my"></span>
                                    Melayu
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="flag-icon flag-icon-tr"></span>
                                    Türkçe
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="flag-icon flag-icon-cn"></span>
                                    繁體中文
                                </a>
                                @if (app()->getLocale() == 'ar')
                                    <a class="dropdown-item" href="{{ str_replace('/ar', '/en', url()->full()) }}">
                                        <span class="flag-icon flag-icon-us"></span>
                                        English
                                    </a>
                                @else
                                    <a class="dropdown-item" href="{{ str_replace('/en', '/ar', url()->full()) }}">
                                        <span class="flag-icon flag-icon-sa"></span>
                                        Arabic
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>


    @if (!in_array(Route::currentRouteName(), ['home', 'index']))
        @include('components.ready_to')

        <div class="registerFormFixed">
            <a class="bt04_close">x</a>
            <button class="bt04" type="button">
                Register
            </button>
            <form action="{{ route('registerSite', app()->getLocale()) }}" class="ajax_form_register" method="post">
                @csrf
                <input type="hidden" name="type" class="input_type">
                <div class="form-signup p-2 rounded" style="margin-bottom: 53px;">
                    <h6 class="text-center text-uppercase fw-normal text-white m-2" style="color: #333 !important;">@lang('Create Account')</h6>
                    <div class="mb-3">
                        <div class="container-fluid">
                            <div class="row m-0 mt-4">
                                <div class="col">
                                    <button class="bt03 active" type="button" data-type="demo_account">@lang('Demo account')</button>
                                </div>
                                <div class="col">
                                    <button class="bt03" type="button" data-type="live_account">@lang('Live account')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="container-fluid">
                            <div class="row m-0">
                                <div class="col">
                                    <input type="text" name="username" id="firstName" class="form-control" placeholder="@lang('First Name')">
                                </div>
                                <div class="col">
                                    <input type="text" name="lastname" id="lastName" class="form-control" placeholder="@lang('Last Name')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="container-fluid">
                            <div class="row m-0">
                                <div class="col">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="@lang('Email')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="container-fluid">
                            <div class="row m-0">
                                <div class="col-4">
                                    <select class="form-select" name="code_phone" id="nationalityCountryCode phoneCountryCode">
                                        {!! countryCode() !!}
                                    </select>
                                </div>
                                <div class="col-8">
                                    <input type="phone" name="phone" id="phone" class="form-control" placeholder="@lang('Phone')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 hide input_password">
                        <div class="container-fluid">
                            <div class="row m-0">
                                <div class="col">
                                    <input type="password" name="password"  id="password" class="form-control" placeholder="@lang('Create Password')">
                                </div>
                                <div class="col">
                                    <input type="password" name="password_confirmation" id="confirmp" class="form-control" placeholder="@lang('Confirm Password')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="container">
                            <div class="v1 input-box ">
                                <input id="checkbox-201" class="inputAccept" name="accept" type="checkbox" id="tandc">
                                <label for="checkbox-201" > @lang('I read & agree the') <a href="{{ route('terms_and_agreement') }}" class="a-color-green" target="_blank" rel="noopener noreferrer">@lang('terms & conditions.')</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col d-grid gap-2">
                                    <button type="submit" style="width: 80%; margin: auto;"
                                        class="btn btn-primary rounded-pill">
                                        @lang('Create Account')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </form>
        </div>
    @endif

    

    <footer class="pb-4 bg-black">
        <div class="pt-3 pb-3 bg-footer1">
            <div class="container text-capitalize">
                <div class="row links-footer small">

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>@lang('TradeLive AI')</strong>
                                <div class="dis5"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('about-us') }}">@lang('About')
                                    @lang('TradeLive AI')</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('news') }}">
                                    @lang('TradeLive AI News')</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('why-TradeLive AI') }}">@lang('Why TradeLive AI')</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('careers') }}">@lang('Careers')</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('vision') }}">@lang('Vision')</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('Mission') }}">@lang('Mission')</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('contactUs') }}">@lang('Contact Us')</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>@lang('Markets')</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="{{ route('forex') }}">@lang('Forex')</a></li>
                            <li><a href="{{ route('indices') }}">@lang('Indices')</a></li>
                            <li><a href="{{ route('commodities') }}">@lang('Commodities')</a></li>
                            <li><a href="{{ route('metals') }}">@lang('Metals')</a></li>
                            <li><a href="{{ route('cryptocurrencies') }}">@lang('Crypto')</a></li>
                            <li><a href="{{ route('shares') }}">@lang('Share')</a></li>


                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>@lang('Accounts Types')</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="https://portal.TradeLive AI.com/en/auth/register">@lang('Demo Account')</a></li>
                            <li><a href="https://portal.TradeLive AI.com/en/auth/register">@lang('standard Account')</a></li>
                            <li><a href="https://portal.TradeLive AI.com/en/auth/register">@lang('TradeLive AI Account')</a></li>
                            <li><a href="https://portal.TradeLive AI.com/en/auth/register">@lang('Premium Account')</a></li>
                            <li><a href="https://portal.TradeLive AI.com/en/auth/register">@lang('Client Portal')</a></li>


                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>@lang('Partnership')</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="#aaaaaaaaaaaaa">@lang('Introducing Brokers')</a></li>
                            <li><a href="{{ route('cpa_affiliate') }}">@lang('Affiliate Program')</a></li>
                            <li><a href="{{ route('ib_commission') }}">@lang('IB Commission')</a></li>
                            <li><a href="{{ route('white_label') }}">@lang('White label')</a></li>



                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>@lang('Market Research')</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="{{ route('financial_news') }}">@lang('Financial News')</a></li>
                            <li><a href="{{ route('technical_analysis_articles') }}">@lang('Analysis Articles')</a></li>
                            <li><a href="{{ route('technical_analysis_videos') }}">@lang('Analysis Videos')</a></li>
                            <li><a href="{{ route('webinars') }}">@lang('Webinars')</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                        <ul>
                            <li>
                                <strong>@lang('Education')</strong>
                                <div class="dis5"></div>
                            </li>
                            <li><a href="https://portal.TradeLive AI.com/en/auth/register">@lang('Open Account')</a></li>
                            <li><a href="https://portal.TradeLive AI.com/en/auth/register">@lang('Start Trading')</a></li>
                            <li><a href="{{ route('support') }}">@lang('TradeLive AI FAQ')</a></li>


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
                        <div
                            class="col-sm-8 d-flex align-items-center img_in_footer text-center text-sm-start overflow-auto">
                            <img class="m-2"
                                src="https://cloud.xm-cdn.com/assets/img/common/logo/meta-quotes.png?v1.1"
                                width="136" height="26" alt="metaquotes" />
                            <img class="m-2" src="/images/shap/icon-site.png" height="26" alt="metaquotes" />
                            <img class="m-2" src="/images/shap/trustpilot.png" height="28" alt="metaquotes" />
                        </div>
                        <div class="col-sm-3 mt-sm-0 mt-4 text-center text-sm-start">
                            <div class="social-icons">
                                <div class="img06">
                                    <img src="/images/new_images/oscar/ww.png" class="img-fluid hvr-grow"
                                        alt="" />
                                </div>
                                <div class="img06">
                                    <img src="/images/new_images/oscar/d.png" class="img-fluid hvr-grow"
                                        alt="" />
                                </div>
                                <div class="img06">
                                    <img src="/images/new_images/oscar/num3.png" class="img-fluid hvr-grow"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hidden-xs hidden-sm" />
            <div class="small desk-footer">
                <div class="widget-area col-xs-12 col-sm-12 col-md-12 col-lg-10">
                    <div id="block-10" class="widget hr widget_block small">
                        <div class="titlemax mb-0">
                            <strong>@lang('Incumbency Certificate')</strong>
                        </div>
                        <p>
                            @lang('We, Euro-Caribbean Trustees Ltd., of Kingstown, St. Vincent') & @lang('the Grenadines, being the duly appointed Registered Agent of TradeLive AI Investment LLC hereby confirm that as at the date of this Certificate:')<br />
                        </p>
                        <ol style="list-style: disc">
                            <p></p>
                            <li>@lang('The Company is in good legal standing.')</li>
                            <li>@lang('The Registered Office address of the Company is: Euro House, Richmond Hill Road, Kingstown, VC0100, Saint Vincent and the Grenadines.')</li>
                            <li>@lang('TradeLive AI Investment FZE, Our Address in Dubai: the Iridium building, Office No 227.039 Umm-Suqeim St. Al Barsha- Dubai - UAE')</li>
                            <li>@lang('The Company was incorporated in St. Vincent & the Grenadines under the Limited Liability Companies Act Chapter 151 of Saint Vincent and the Grenadines 2009 (the Act), on the 5 th October 2021, and its Limited Liability Company Number is 1465 LLC 2021.')</li>
                        </ol>
                        <div class="titlemax mb-0">
                            <strong>@lang('Risk Warning:')</strong>
                        </div>
                        <p>@lang("Trading derivatives carries significant risks. It is not suitable for all investors and if you are a professional client, you could lose substantially more than your initial investment. When acquiring our derivative products, you have no entitlement, right or obligation to the underlying financial assets. Past performance is no indication of future performance and tax laws are subject to change. The information on this website is general in nature and doesn't take into account your personal objectives, financial circumstances, or needs. Accordingly, before acting on the advice, you should consider whether the advice is suitable for you having regard to your objectives, financial situation and needs. We encourage you to seek independent advice if necessary. Please read our legal documents and ensure that you fully understand the risks before you make any trading decisions.")</p>
                        <div class="titlemax mb-0 mt-3">
                            <strong>@lang('Disclaimer')</strong>
                        </div>
                        <p>@lang('This site contains external links to websites controlled or offered by third parties. the information contained on this site is intended for information purposes only and it should not be regarded as advice nor as a recommendation to buy, sell or otherwise deal with any particular currency or precious metal trade. TradeLive AI hereby disclaims responsibility for any information or materials posted at any of the sites linked to this site. TradeLive AI Investments Ltd does not endorse or recommend any products or services offered on that website. Clients carry the sole responsibility for all transactions or investments carried out at TradeLive AI.')</p>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-sm-12 col-md-10 d-flex align-items-center">
                    <p class="mb-0 href-link-footer">
                        <a class="small" href="{{ route('legal_forms_documents') }}">@lang('Legal Forms & Documents')</a>
                        |
                        <a class="small" href="{{ route('risk_warnings') }}">@lang('Risk Warnings')</a> |
                        <a class="small" href="{{ route('cookies_policy') }}">@lang('Cookies Policy')</a> |
                        <a class="small" href="{{ route('privacy_policy') }}">@lang('PRIVACY POLICY')</a>
                    </p>
                </div>
                <div class="col-sm-3 col-md-2 d-sm-block d-none">
                    <img src="{{ Voyager::image(setting('site.logo_blue')) }}" class="pull-right img-fluid" />
                </div>
            </div>
        </div>
    </footer>

   

    <div class="chat-right-b position-fixed">
        <a href="{{ route('support') }}">
            <img src="/images/icons/life chat3.png" class="rounded-circle" alt="" />
        </a>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

        <script src="/js/ajax.form.js"></script>
        <script src="/js/main.js"></script>
    <script src="{{ asset('js/splide.min.js') }}"></script>

    @yield('scripts')


    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var forms = $(".ajax_form_register");
        $(forms).ajaxForm({
            beforeSend: function() {
                oldSubmit = $(forms).find("[type='submit']").text();
                removeErrors(forms);
            },
            uploadProgress: function(event, position, total, percentComplete) {},
            complete: function(data) {
                $(forms).find("[type='submit']").text(oldSubmit).removeAttr('disabled');
                if (data.status == 422) {
                    errors(forms, data.responseJSON);
                }
                if (data.status == 200) {
                    Swal.fire(
                        'Success',
                        'Account has been successfully registered',
                        'success'
                    );
                    setTimeout(() => {
                        window.location.href = "{{ route('panel.index', app()->getLocale()) }}";
                    }, 3000);
                }
            }
        });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        $(".bt03").click(function(){
            $(".bt03").removeClass("active");
            $(this).addClass("active");
            var ty = $(this).attr("data-type");

            if(ty == "demo_account"){   
                
                $(".form-signup").animate({"margin-bottom":"53px"}, 0);
                $(".input_type").val(0);
                $(".input_password").slideUp(0);
                return;
            }
            
            $(".input_password").slideDown(0);
            $(".form-signup").animate({"margin-bottom":"0px"}, 0);
            $(".input_type").val(1);
        });

        });
    </script>
</body>

</html>
