@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center"
     style="--img: url(/images/new_images/pages/how_to_start_trading.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('How To Start Trading')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('Begin your trading journey with these essential steps. Learn how to open a trading account, choose the right trading platform, and develop a trading strategy. Gain the knowledge and confidence to enter the financial markets and start trading.')</p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h2 class="text-center">
                @lang('What are the financial markets?')
            </h2>
            <div class="row justify-content-center g-2 text-center">
                <div class="col-md-4">
                    <img style=" height: 64px; " src="{{ asset('images/new_images/icons/how_to_start01.png') }}" />
                    <p class="mt-3">
                        @lang('inancial markets serve as international platforms for the exchange of various market instruments. The Foreign Exchange market, for instance, exemplifies this concept by facilitating the trading of currencies from different countries against one another.')


                    </p>
                </div>

                <div class="col-md-4">
                    <img style=" height: 64px; " src="{{ asset('images/new_images/icons/how_to_start02.png') }}" />
                    <p class="mt-3">@lang('Traders are individuals who engage in transactions within financial markets to gain personal benefits.')

                    </p>
                </div>
                <div class="col-md-4">
                    <img style=" height: 64px; " src="{{ asset('images/new_images/icons/how_to_start03.png') }}" />
                    <p class="mt-3">@lang('On this page, you will find essential information to guide you in taking the initial steps towards financial markets. It will help you become a seasoned trader, build your investment portfolio, and develop a distinctive trading strategy.')

                    </p>
                </div>
            </div>

            <center>
                
                <h3 class="mt-5">
                    @lang('What is Currency market and how to trade on it?')
                </h3>

                <div class="mt-4">
                    <iframe width="80%" height="415" src="https://www.youtube.com/embed/zJbVSbNXSUU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </center>

        </div>
    </section>

    <section>
        <div class="container">
            <h3>
                @lang('What are the ways traders generate income?')
            </h3>
            <div class="mt-3 d-flex align-items-center justify-content-center">
                <img src="https://TradeLive AI .com/uploads/pages/partners/start/how-to-trade-forex/images/money.svg" width="64px" alt="">
                <p class="m-0 ms-2">
                    @lang("The profit earned by traders is based on the variation between the purchase and sale prices of the asset. While this may seem straightforward, it requires the ability to forecast the rise or fall of a financial instrument's price and possess trading expertise to execute such strategies.")
                </p>
            </div>
        </div>
    </section>
@endsection
