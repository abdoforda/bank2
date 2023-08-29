@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/tradeLiveios.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('TradeLive AI ios')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('TradeLive AI iOS is a user-friendly trading platform that provides real-time market data and customizable trading preferences. It offers push notifications for important market events, a secure trading environment, and the flexibility to access the markets from anywhere at any time. It is an ideal option for busy traders who are looking for a reliable and feature-rich trading platform.')</p>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <h3>
                @lang('How to install TradeLive AI ios ?')
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
                                            @lang('Download TradeLive AI ios installation file')
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
                                        <p>@lang('Start trading on TradeLive AI iOS.')</p>
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
                @lang('TradeLive AI iOS benefits')
            </h3>
            <div class="mt-4 row justify-content-center align-items-center g-4 text-center">
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (1).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('User-friendly interface')</h5>
                    <p class="text-white-50">@lang('TradeLive AI iOS has a user-friendly interface that is easy to navigate, making it practical and flexible for traders of all experience levels.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (2).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Real-time market data')</h5>
                    <p class="text-white-50">@lang('TradeLive AI iOS provides real-time market data, including price quotes, charts, and news feeds, to assist traders in making successful trading decisions.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (3).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Customizable trading preferences')</h5>
                    <p class="text-white-50">@lang('TradeLive AI iOS allows traders to customize their trading preferences, including chart settings, indicators, and order types, to suit their individual needs.')</p>
                </div>
            </div>
            <div class="mt-4 row justify-content-center align-items-center g-4 text-center">
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (4).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Convenient trading')</h5>
                    <p class="text-white-50">@lang('TradeLive AI iOS enables traders to access the markets from anywhere and at any time, making it an ideal option for busy traders.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (5).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Push notifications')</h5>
                    <p class="text-white-50">@lang('TradeLive AI iOS provides push notifications for important market events, helping traders stay informed and up-to-date.')</p>
                </div>
                <div class="col-md-4">
                    <img width="64" src="/images/new_images/icons/mt5 (6).png" alt="">
                    <h5 class="fw-600 mt-2">@lang('Security')</h5>
                    <p class="text-white-50">@lang("TradeLive AI iOS employs advanced security protocols to protect traders' data and transactions, providing a safe and secure trading environment.")</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h3 class="mb-3">
                @lang('How to Uninstall TradeLive AI ios ?')
            </h3>

            <ul class="arrows">
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 1:</strong></span>
                    @lang('Press and hold the TradeLive AI Investment LLC app icon.')
                </li>
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 2:</strong></span>
                    @lang("Tap the 'Delete App' option that appears.") 
                </li>
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 3:</strong></span>
                    @lang("Confirm that you want to delete the app.") 
                </li>
                <li>
                    <span class="red mt4_steps"><strong>@lang('STEP') 4:</strong></span>
                    @lang("The app will be uninstalled from your iOS device.") 
                </li>
            </ul>

        </div>
    </section>

    @include(
        'components.ask',
    
        [
            'title' => __('Frequently asked questions'),
            'desc' =>
                __('Here are our most frequently asked questions about TradeLive AI ios.'),
            'items' => [
                [
                    'title' => __('How can I download the TradeLive AI App for iOS devices?'),
                    'bode' =>
                        __("To download the TradeLive AI App for iOSvdevices, search for 'TradeLive AI Investment LLC' in the App Store and follow the account opening procedures. Once your account is verified, you can make a deposit and start trading."),
                ],[
                    'title' => __('What are the devices compatible with the TradeLive AI App for iOS?'),
                    'bode' =>
                        __('TradeLive AI App for iOS is compatible with iPhones and iPads devices that are operating iOS 11.0 system or later versions.'),
                ],[
                    'title' => __('Can I access the same features of TradeLive AI App for iOS devices as it runs on the desktop version?'),
                    'bode' =>
                        __('Yes, you can access the same features on the TradeLive AI App for iOS devices as it runs on the desktop version, including trading Forex, Indices, Commodities, Metals, Energy Commodities, Shares, Cryptocurrencies, and ETFs.'),
                ],[
                    'title' => __('Is TradeLive AI App secure for the iOS devices?'),
                    'bode' =>
                        __("Yes, TradeLive AI App which is designed for iOS devices is secure. It uses 128-bit SSL encryption to ensure the highest level of security to protect your personal and financial information."),
                ],[
                    'title' => __('Can I use TradeLive AI App for iOS devices to deposit and withdraw funds?'),
                    'bode' =>
                        __('Yes, you can use TradeLive AI App for iOS devices to deposit and withdraw funds, as well as manage all your trading accounts and view your transaction history.'),
                ],
            ],
        ]
    )


@endsection
