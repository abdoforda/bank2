@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/premium_account.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Premium Account')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('A premium trading account is the highest level of accounts provided by TradeLive AI . This type requires a larger initial deposit, and it offers the most advanced trading tools and features available. Premium account typically offers personalized customer support, access to expert trading strategies, advanced charting capabilities, and the fastest trade execution. Premium account also usually offer the lowest trading costs, making them suitable for professional traders who are looking to maximize their profits and minimize their costs.')</p>
            </div>
        </div>
        </div>
    </div>

    
    <section>
        <div class="container">

            <h3 class="mt-2 text-center">
                @lang('Choose from a variety of trading accounts')
            </h3>

            <div class="mt-4 row justify-content-center align-items-center g-4">

                <div class="col-md-8">
                    <div class="row g-0 position-relative ">
                        <div class="col-md-4 "></div>
                        <div class="col-md-12">
                            <div class="row justify-content-center align-items-center g-2">

                                <div class="col">
                                    <div class="account_title">
                                        @lang('Premium Account')
                                    </div>
                                </div>

                            </div>

                            <center>
                                <div class="items_account">
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col col-5 text-center fw-700 border-bottom">@lang('Minium Deposit') </div>
                                        <div class="col col-7 border-bottom bg-g">50,000 USD</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col col-5 text-center fw-700 border-bottom">@lang('Spreads From') </div>
                                        <div class="col col-7 border-bottom bg-g">0.5 Pips</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col col-5 text-center fw-700 border-bottom">@lang('Minimum Lot Size') </div>
                                        <div class="col col-7 border-bottom bg-g">0.01</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col col-5 text-center fw-700 border-bottom">@lang('Leverage Up to') </div>
                                        <div class="col col-7 border-bottom bg-g">1:400</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col col-5 text-center fw-700 border-bottom">@lang('Commission') </div>
                                        <div class="col col-7 border-bottom bg-g">$0.00</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col col-5 text-center fw-700 border-bottom">@lang('Instruments') </div>
                                        <div class="col col-7 border-bottom bg-g">@lang('28 currency pairs, Metals, CFD')</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col col-5 text-center fw-700 border-bottom">@lang('Platforms')</div>
                                        <div class="col col-7 border-bottom bg-g">@lang('TradeLive AI | TradeLive AI  trader')</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col col-5 text-center fw-700 border-bottom">@lang('Stop out')</div>
                                        <div class="col col-7 border-bottom bg-g">10%</div>
                                    </div>


                                </div>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="form-signup rounded"
                        style="background-color: rgb(68 68 68 / 31%); margin-top: 0; padding: 33px 8px;">
                        <h6 class="text-center text-uppercase fw-normal text-white m-2">@lang('Create Account')</h6>
                        @include('components.createAccount')
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container text-center">
            <h3>
                @lang('Switch to TradeLive AI ')
            </h3>

            <div class="mt-1 row justify-content-center align-items-center g-4">
                <div class="col-md-4 col-sm-6 col-12">
                    <img style=" height: 64px; " src="/images/new_images/icons/Over 15 years of experience.png" />
                    <h5 class="fw-600 mt-2">@lang('Over 13 years of experience') </h5>
                    <p class="text-white-50">@lang('TradeLive AI  is among the most significant foreign exchange and CFD brokers worldwide, and it is listed on the stock exchange.') 
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <img style=" height: 64px; " src="/images/new_images/icons/Customer support 24.png" />
                    <h5 class="fw-600 mt-2">@lang('Customer support 24/5') </h5>
                    <p class="text-white-50">@lang('We provide customer support round the clock on official working days, we committed to respond to all your queries and resolving any issues you may encounter. Our utmost priority is to ensure your satisfaction.')</p>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <img style=" height: 64px; " src="/images/new_images/icons/Trusted and regulated broker.png" />
                    <h5 class="fw-600 mt-2">@lang('Secure and regulated brokerage.')</h5>
                    <p class="text-white-50">@lang('We are a regulated Forex company incorporated under the Limited Liability Companies Act in St. Vincent & the Grenadines, providing a secure and transparent trading environment for our clients.')</p>
                </div>

            </div>
        </div>
    </section>


    <section>
        <div class="container rounded-4 p-5">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-6">
                    <h3 class="fw-bold">@lang('How to open a trading account') </h3>
                    <p class="lead mt-3">@lang('Follow this step-by-step guide to learn how to open your trading account.')</p>
                    <a href="https://portal.TradeLive AI .com/en/auth/register">
                        <button type="button" class="btn mt-4 btn-lg btn-outline-primary">@lang('Start Trading')</button>
                    </a>

                </div>
                <div class="col-md-6">
                    <iframe class="float-end" width="460" height="250"
                        src="https://www.youtube.com/embed/z7538iNe2Pw" allowfullscreen=""
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" frameBorder="0"
                        style="display: table; border-radius: 16px;"></iframe>
                </div>
            </div>
        </div>
    </section>


    {{-- ready_to --}}
    
    <style>
        .benefits-slider {
            color: #fff;
            background: url(../images/new_images/benefits-slider-bg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .items-images {
            font-size: 14px;
        }
    </style>

@endsection
