@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/metaTrader_5.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold mt-4" style="letter-spacing: 4px;">
                @lang('TradeLive AI for All Devices')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p class="lead">@lang('TradeLive AI  is a comprehensive trading platform suitable for both novice and experienced traders. It offers advanced analytics, automated trading capabilities, and the ability to trade through multiple asset classes. The platform also provides real-time market data, customizable trading preferences, and a community of traders to share ideas with.')</p>
                    <a href="https://download.mql5.com/cdn/web/22146/mt5/TradeLive AI estment5setup.exe"><button type="button" class="btn btn-lg btn-outline-primary transition mb-4">
                        @lang('TradeLive Now')
                    </button></a>
                </div>
            </div>
        </div>
    </div>


    <section >
        <div class="container">
            <h3 class="text-center">
                @lang('TradeLive AI  benefits')
            </h3>
            <div class="mt-4 row justify-content-center align-items-center g-4 text-center">
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/aaaaaaaaaa1.png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Advanced analytics')</h5>
                    <p class="text-white-50">@lang('TradeLive AI  provides advanced analytical tools for traders to analyze the markets and achieve accurate trading decisions. This platform provides a variety of technical indicators and charting tools, as well as the ability to form strong trading strategies.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/aaaaaaaaaa2.png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Automated trading capabilities')</h5>
                    <p class="text-white-50">@lang('TradeLive AI  allows traders to automate their trading strategies using Expert Advisors (EAs). This can help save time and reduce tension when making trading decisions.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/aaaaaaaaaa3.png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Multi-asset class trading')</h5>
                    <p class="text-white-50">@lang('TradeLive AI  supports trading in multiple asset classes, including Forex, stocks, futures, and derivatives. This provides traders with a range of investment opportunities and diversification options.')</p>
                </div>
            </div>
            <div class="mt-4 row justify-content-center align-items-center g-4 text-center">
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/aaaaaaaaaa4.png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Real-time market data')</h5>
                    <p class="text-white-50">@lang('TradeLive AI  provides real-time market data and news feeds, enabling traders to stay up-to-date with market events and take prompt trading decisions.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/aaaaaaaaaa5.png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Customizable trading preferences')</h5>
                    <p class="text-white-50">@lang('TradeLive AI  allows traders to customize their trading preferences, including chart settings, indicators, and order types, to suit their individual needs.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/aaaaaaaaaa6.png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Community of traders')</h5>
                    <p class="text-white-50">@lang('TradeLive AI  has a large community of traders who share ideas and strategies through forums and social networks. This can be a valuable resource for both novice and experienced traders who seek to improve their trading skills.')</p>
                </div>
            </div>
        </div>
    </section>

    
    @include(
        'components.ask',
    
        [
            'title' => __('Frequently asked questions'),
            'desc' => __('Here are our most frequently asked questions about meta trader 5.'),
            'items' => [
                [
                    'title' => __('How do I access the TradeLive AI platform for trading with TradeLive AI ?'),
                    'bode' =>
                        __('To start trading on the TradeLive AI platform with TradeLive AI , you have to open a TradeLive AI trading account. You can not trade on the TradeLive AI platform using your existing MT4 account. To open an TradeLive AI account, simply click on the provided link.'),
                ],[
                    'title' => __('Can I use the ID of my MT4 account to access TradeLive AI account with TradeLive AI ?'),
                    'bode' =>
                        __('No, you can’t. You need to have a separate TradeLive AI trading account. To open an TradeLive AI account, click on the provided link.'),
                ],[
                    'title' => __('How can I verify my TradeLive AI account with TradeLive AI ?'),
                    'bode' =>
                        __('If you are an existing client with TradeLive AI  using a MT4 account, you may open additional TradeLive AI account from the dashboard of your account without a need to re-submit your verification documents. However, if you are a new client, you will need to provide all the required verification documents, including proof of identity and proof of residency.'),
                ],[
                    'title' => __('Can I trade on stock CFDs using my existing MT4 trading account at TradeLive AI ?'),
                    'bode' =>
                        __("No, you can't. You need to have an TradeLive AI trading account to trade in stock CFDs with TradeLive AI . To open TradeLive AI account, click on the provided link."),
                ],[
                    'title' => __('What are the types of instruments used for trading on TradeLive AI at TradeLive AI ?'),
                    'bode' =>
                        __('You may trade in all instruments used at TradeLive AI  on the TradeLive AI platform, including stock CFDs, stock indices CFDs, Forex, CFDs on cryptocurrencies, CFDs on precious metals, and CFDs on energies.'),
                ],
            ],
        ]
    )


@endsection
