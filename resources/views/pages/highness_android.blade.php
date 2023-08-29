@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/tradeLiveandroid.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('TradeLive AI Android')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('TradeLive AI Android is a flexible trading platform that provides real-time market data, customizable trading preferences, and push notifications for important market events. It is a convenient option for traders who want to access the markets from a wide range of Android devices. It offers a secure trading environment and is suitable for both novice and experienced traders.')</p>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <h3>
                @lang('How to install TradeLive AI Android ?')
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
                                            @lang('Download TradeLive AI Android installation file')
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
                                        <p>@lang('Launch the app and log in using your account details.')</p>
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
                                        <p>@lang('Start trading on TradeLive AI Android.')</p>
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
                @lang('TradeLive AI Android benefits')
            </h3>
            <div class="mt-4 row justify-content-center align-items-center g-4 text-center">
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (1).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Flexibility')</h5>
                    <p class="text-white-50">@lang('TradeLive AI Android provides flexibility to its clients in terms of where and when they can access the markets, as it can be used on a wide range of Android devices.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (2).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Real-time market data')</h5>
                    <p class="text-white-50">@lang('TradeLive AI Android provides real-time market data, including price quotes, charts, and news feeds, to help traders make successful trading decisions.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (3).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Customizable trading preferences')</h5>
                    <p class="text-white-50">@lang('TradeLive AI Android allows traders to customize their trading preferences, including chart settings, indicators, and order types, to suit their individual needs.')</p>
                </div>
            </div>
            <div class="mt-4 row justify-content-center align-items-center g-4 text-center">
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (4).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Convenient trading')</h5>
                    <p class="text-white-50">@lang('TradeLive AI Android enables traders to access the markets from anywhere and at any time, making it an ideal option for busy traders.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (5).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Push notifications')</h5>
                    <p class="text-white-50">@lang('TradeLive AI Android provides push notifications for important market events, helping traders stay informed and up-to-date.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (6).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Security')</h5>
                    <p class="text-white-50">@lang("TradeLive AI Android employs advanced security protocols to protect traders' data and transactions, providing a safe and secure trading environment.")</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h3 class="mb-3">
                @lang('How to Uninstall TradeLive AI android ?')
            </h3>

            <ul class="arrows">
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 1:</strong></span>
                    @lang("Go to 'Settings' on your Android device.") 
                </li>
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 2:</strong></span>
                    @lang("Select 'Apps' or 'Applications.'") 
                </li>
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 3:</strong></span>
                    @lang("Find the TradeLive AI Investment LLC app.") 
                </li>
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 4:</strong></span>
                    @lang("Tap 'Uninstall' and confirm to remove the app.") 
                </li>
            </ul>

        </div>
    </section>
    
    @include(
        'components.ask',
    
        [
            'title' => __('Frequently asked questions'),
            'desc' =>
                __('Here are our most frequently asked questions about TradeLive AI android.'),
            'items' => [
                [
                    'title' => __('How can I access  TradeLive AI App?'),
                    'bode' =>
                        __("To access  TradeLive AI App, you can download it from the Google Play Store by searching for 'TradeLive AI Investment LLC'. Once you complete downloading, follow the account opening procedures, make your initial deposit and start trading immediately. You can also open a demo  account to try the practice."),
                ],[
                    'title' => __('What devices are compatible with TradeLive AI App for Android?'),
                    'bode' =>
                        __('TradeLive AI App for Android is compatible with smartphones and tablets devices running Android 6.0 or later versions.'),
                ],[
                    'title' => __('Can I access the same features of  TradeLive AI App for Android as on the desktop version?'),
                    'bode' =>
                        __('Yes, you can access the same features of TradeLive AI App for Android as on the desktop version, including trading Forex, Indices, Commodities, Metals, Energy Commodities, Shares, Cryptocurrencies, and ETFs.'),
                ],[
                    'title' => __('Is TradeLive AI App for Android secure?'),
                    'bode' =>
                        __("Yes, TradeLive AI App for Android is secure. It uses 128-bit SSL encryption to ensure the highest security level of your personal and financial information."),
                ],[
                    'title' => __('Can I use TradeLive AI App for Android to deposit and withdraw funds?'),
                    'bode' =>
                        __('Yes, you can use TradeLive AI App for Android to deposit and withdraw funds, as well as manage your trading accounts and view your transaction history.'),
                ],
            ],
        ]
    )


@endsection
