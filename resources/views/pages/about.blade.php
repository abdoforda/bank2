@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/about.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold">@lang('Welcome to TradeLive AI')</div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>
                        @lang('We are a leading global investment platform that are specialized in providing highest financial services to clients around the world since 2009. We operates in the United States, United Kingdom, United Arab Emirates, Turkey, and Malaysia. We are licensed by the ACT for financial services under license no. 1465 LLC 2021.')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-a-15 LightBackground">
        <div class="container">
            <div class="topBoxContain text-align-c320">
                <div class="topBoxContainInner">
                    <h3><span>@lang('over')</span> 3,500,000</h3>
                    <div>@lang('Live Accounts Opened')</div>
                </div>
            </div>

            <div class="topBoxContain hidden990">
                <div class="topBoxContainInner">
                    <h3><span>@lang('Established since') </span> 2009</h3>
                    <div>@lang('As a Global Market Leader')</div>
                </div>
            </div>
            <div class="topBoxContain text-align-c320">
                <div class="topBoxContainInner">
                    <h3><span>@lang('more than') </span> 200+</h3>
                    <div>@lang('Employees Globally')</div>
                </div>
            </div>

            <div class="topBoxContain text-align-c320">
                <div class="topBoxContainInner">
                    <h3><span>@lang('over') </span>60</h3>
                    <div>@lang('Industry Awards')</div>
                </div>
            </div>

            <div class="topBoxContain text-align-c320 centerIsMobile">
                <div class="topBoxContainInner">
                    <h3><span>@lang('more than')</span> 27</h3>
                    <div>@lang('Supported Languages')</div>
                </div>
            </div>
        </div>
    </div>


    <div class="container pt-4 pb-4">

        <h2 class="h4 color1">@lang('Who we are?')</h2>

        <p class="color-5d fs-14">@lang('TradeLive AI is a famous Forex platform to provides exceptional trading services to both retail and professional clients. We specialize in multi-asset brokerage to provide unrestricted access to our liquidity, ensuring the best possible trading options for our clients. Our brand is recognized globally for its prominent presence. We are proud for our persistent commitment to excellence, which has made us an ideal choice for many traders worldwide. TradeLive AI provides the highest standards of quality and skills to both brokers and traders utilizing professional advisors to maintain reliable and efficient trading experiences.')</p>

        <br clear="all">

        <h2 class="h4 color1">@lang('Brief on our services')</h2>

        <p class="color-5d fs-14">@lang('At TradeLive AI, we provide a wide range of trading methods, including trading software, and tools to fulfill the needs of both individuals and institutions. Our CFD trading services cover Forex, Spot Metals, Energies, Commodities, Indices, Bonds, and popular exchange stocks. Clients can access various digital markets and financial resources through state-of-the-art automated trading platforms, regardless of whether they are retail, affiliate, or white-label clients. Our distinguished  variety of account options is designed to provide a customized trading experience that perfectly suits the needs of each client. Our superior trading facilities and quick execution provide all the tools and services necessary to help clients of any background achieve their trading targets.')</p>


    </div>

    <div class="container-fluid LightBackground quotation">
        <div class="container content">
            <h2 class="color250">@lang("Not just a mission, it's a promise")</h2>
            <br clear="all">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-12">
                    <p class="p02" style="width: 97%;">
                        <img src="/images/new_images/icons/quotation1.png" class="img-fluid rotate180"
                            style="
     width: 32px;
 "> @lang('Our Mission is to offer our clients the best possible customer service through a superb client-centric culture, which helps us maintain our position as a market leader well recognized for the exceptional customer services.') <img
                            src="/images/new_images/icons/quotation1.png" class="img-fluid rotate180"
                            style="
     width: 32px;
     transform: rotate(180deg);
 ">
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-color-light">
        <div class="container content">

            <div class="col-md-12 text-align-c768 m-b-20">

                <h2>@lang('Our Values')</h2><br>
                <p>@lang("Our Values guide our Mission's consistent achievement.")</p>

                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-md-6">
                        <ul class="list-unstyled m-l-15 small">
                            <li class="bullets"><b>@lang('Results and Growth:') </b><br>@lang("We're driven by ambitious targets and passionate spirit to exceed your expectations.")</li>
                            <li class="bullets"><b>@lang('Commitment to Clients :') </b><br>@lang('Our target is to deliver a first-class experience and services.')</li>
                            <li class="bullets"><b>@lang('Speed and Efficiency:') </b><br>@lang("We value the company's reputation and results, which motivates us to act with urgency.")</li>
                            <li class="bullets"><b>@lang('Diligent Collaboration:')</b><br>@lang('We work hard together, leaving egos and political agendas aside.')</li>
                            <li class="bullets"><b>@lang('Honesty, Openness, Transparency:') </b><br>@lang('Our communication is clear and open with our team, clients, and partners.')</li>
                            <li class="bullets"><b>@lang('Persistent Improvement:') </b><br>@lang('We relentlessly seek ways to enhance our products and services.')</li>
                            <li class="bullets"><b>@lang('Teamwork and Responsibility:') </b><br>@lang('We believe that we commitment as a team entitles accountability towards our actions and practices.')</li>

                        </ul>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12 text-align-c768 gray-box rounded small">
                        <h3 class="color250">@lang('Extending our horizons:') </h3><br>
                        <p style="line-height: 30px;">@lang('The experienced and dynamic management team at TradeLive AI, sharpened by years of effective trading across various platforms and markets, faced a growing challenges through the traditional web-based Forex brokers, including the delay of performing trading, system failures, and poor customer services. In response, TradeLive AI seeks to forge a path forward with cutting-edge technology, innovative systems solutions, competitive commission rates, and unparalleled customer support.')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
