@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/metaTrader_5.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold mt-4" style="letter-spacing: 4px;">
                @lang('MT5 FOR YOUR PC')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p class="lead">@lang('MetaTrader 5 is a comprehensive trading platform suitable for both novice and experienced traders. It offers advanced analytics, automated trading capabilities, and the ability to trade through multiple asset classes. The platform also provides real-time market data, customizable trading preferences, and a community of traders to share ideas with.')</p>
                    <a href="https://download.mql5.com/cdn/web/22146/mt5/TradeLive AIestment5setup.exe"><button type="button" class="btn btn-lg btn-outline-primary transition mb-4">
                        @lang('Download')
                        <i class="fa-solid fa-download hvr-wobble-vertical"></i>
                    </button></a>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <h3>
                @lang('How to install Windows MT5')
            </h3>
            <div class="row mt-2 justify-content-center  g-2">
                <div class="col-md-7">
                    <table class="table table_platform th_arrow mt-4">
                        <tbody>
                            <tr>
                                <th>
                                    <div class="table_platform_step">
                                        <p class="step">@lang('STEP')</p>
                                        <p class="no">01</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_platform_content">
                                        <p>
                                            @lang('Download the MT5 installation file')
                                            <a href="https://download.mql5.com/cdn/web/22146/mt5/TradeLive AIestment5setup.exe">
                                                <button type="button" class="btn btn-outline-primary ms-2"> Download</button>
                                            </a>
                                            
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="table_platform_step">
                                        <p class="step">@lang('STEP')</p>
                                        <p class="no">02</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_platform_content">
                                        <p>@lang('Run the installation file and follow the prompts to install.')</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="table_platform_step">
                                        <p class="step">@lang('STEP')</p>
                                        <p class="no">03</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_platform_content">
                                        <p>@lang('Launch the MT5 platform and log in using your account details.')</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="table_platform_step">
                                        <p class="step">@lang('STEP')</p>
                                        <p class="no">04</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_platform_content">
                                        <p>@lang('Start trading on Windows MT5.')</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-5 p-4">
                    <div class="form-signup p-2 rounded" style="background-color: rgb(68 68 68 / 31%); margin-top: 0;">
                        <h6 class="text-center text-uppercase fw-normal text-white m-2">@lang('Create Account')</h6>
                        <div class="mb-3">
                            <div class="container-fluid">
                                <div class="row m-0">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="{{__('First Name')}}">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="{{__('Last Name')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="container-fluid">
                                <div class="row m-0">
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="{{__('Email')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="container-fluid">
                                <div class="row m-0">
                                    <div class="col-4">
                                        @php
                                            $array = getCode();
                                            $phoneCodes = $array['phoneCodes'];
                                            $countryCode = $array['countryCode'];
                                        @endphp
                                        <select class="form-select" id="inputGroupSelect01">
                                            @foreach ($phoneCodes as $key => $p)
                                            <option value="{{ $p }}" @if ($countryCode == $key)
                                                selected
                                            @endif >+{{ $p }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-8">
                                        <input type="phone" class="form-control" placeholder="{{__('Phone')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="container-fluid">
                                <div class="row m-0">
                                    <div class="col">
                                        <input type="password" class="form-control" placeholder="{{__('Create Password')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="container">
                                <div class="row m-0">
                                    <div class="col d-grid gap-2">
                                        <button type="button" style="width: 80%; margin: auto;"
                                            class="btn btn-primary rounded-pill">
                                            @lang('Create Account')
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section >
        <div class="container">
            <h3 class="text-center">
                @lang('MetaTrader 5 benefits')
            </h3>
            <div class="mt-4 row justify-content-center align-items-center g-4 text-center">
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (1).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Advanced analytics')</h5>
                    <p class="text-white-50">@lang('MetaTrader 5 provides advanced analytical tools for traders to analyze the markets and achieve accurate trading decisions. This platform provides a variety of technical indicators and charting tools, as well as the ability to form strong trading strategies.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (2).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Automated trading capabilities')</h5>
                    <p class="text-white-50">@lang('MetaTrader 5 allows traders to automate their trading strategies using Expert Advisors (EAs). This can help save time and reduce tension when making trading decisions.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (3).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Multi-asset class trading')</h5>
                    <p class="text-white-50">@lang('MetaTrader 5 supports trading in multiple asset classes, including Forex, stocks, futures, and derivatives. This provides traders with a range of investment opportunities and diversification options.')</p>
                </div>
            </div>
            <div class="mt-4 row justify-content-center align-items-center g-4 text-center">
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (4).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Real-time market data')</h5>
                    <p class="text-white-50">@lang('MetaTrader 5 provides real-time market data and news feeds, enabling traders to stay up-to-date with market events and take prompt trading decisions.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (5).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Customizable trading preferences')</h5>
                    <p class="text-white-50">@lang('MetaTrader 5 allows traders to customize their trading preferences, including chart settings, indicators, and order types, to suit their individual needs.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (6).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Community of traders')</h5>
                    <p class="text-white-50">@lang('MetaTrader 5 has a large community of traders who share ideas and strategies through forums and social networks. This can be a valuable resource for both novice and experienced traders who seek to improve their trading skills.')</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h3 class="mb-3">
                @lang('How to Uninstall MT5 for PC ?')
            </h3>

            <ul class="arrows">
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 1:</strong></span>
                    @lang('Open the Control Panel on your Windows device.')
                </li>
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 2:</strong></span>
                    @lang("Select 'Programs and Features' or 'Add or Remove Programs.'")
                </li>
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 3:</strong></span>
                    @lang("Find 'MetaTrader 5' in the list of installed programs.")
                </li>
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 4:</strong></span>
                    @lang("Click 'Uninstall' and follow the prompts to remove MT5.")
                </li>
            </ul>

        </div>
    </section>

    
    @include(
        'components.ask',
    
        [
            'title' => __('Frequently asked questions'),
            'desc' => __('Here are our most frequently asked questions about meta trader 5.'),
            'items' => [
                [
                    'title' => __('How do I access the MT5 platform for trading with Highness Investment LLC?'),
                    'bode' =>
                        __('To start trading on the MT5 platform with Highness Investment LLC, you have to open a MT5 trading account. You can not trade on the MT5 platform using your existing MT4 account. To open an MT5 account, simply click on the provided link.'),
                ],[
                    'title' => __('Can I use the ID of my MT4 account to access MT5 account with Highness Investment LLC?'),
                    'bode' =>
                        __('No, you can’t. You need to have a separate MT5 trading account. To open an MT5 account, click on the provided link.'),
                ],[
                    'title' => __('How can I verify my MT5 account with Highness Investment LLC?'),
                    'bode' =>
                        __('If you are an existing client with Highness Investment LLC using a MT4 account, you may open additional MT5 account from the dashboard of your account without a need to re-submit your verification documents. However, if you are a new client, you will need to provide all the required verification documents, including proof of identity and proof of residency.'),
                ],[
                    'title' => __('Can I trade on stock CFDs using my existing MT4 trading account at Highness Investment LLC?'),
                    'bode' =>
                        __("No, you can't. You need to have an MT5 trading account to trade in stock CFDs with Highness Investment LLC. To open MT5 account, click on the provided link."),
                ],[
                    'title' => __('What are the types of instruments used for trading on MT5 at Highness Investment LLC?'),
                    'bode' =>
                        __('You may trade in all instruments used at Highness Investment LLC on the MT5 platform, including stock CFDs, stock indices CFDs, Forex, CFDs on cryptocurrencies, CFDs on precious metals, and CFDs on energies.'),
                ],
            ],
        ]
    )


@endsection
