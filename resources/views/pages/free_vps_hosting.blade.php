@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/free_vps_hosting.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('free vps hosting')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang("Free VPS hosting is a service that enables traders to execute their trading strategies 24/7 without interruption. It provides fast and reliable hosting, and ensures that traders' strategies are executed without any interruption.")</p>
            </div>
        </div>
        </div>
    </div>

    <section class="bg-g">
        <div class="container text-center ">
            <h3>
                <strong>@lang('Benefits of using Free VPS Hosting with TradeLive AI Investment LLC:')</strong>
                <br>
            </h3>


            <div class="mt-5 row g-4">
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-liquidity.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Reliable hosting') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-microlots.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Reduced latency') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-execution.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Automated trading') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-product-range.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Increased flexibility') </h6>
                </div>
            </div>
        </div>
    </section>


    
    <section style="background: #4848485e;">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                
                <div class="col-md-7 padding-start-5-pc">
                    <p class="text-black-75">@lang("TradeLive AI Investment LLC's Free VPS Hosting tool provides reliable and fast connectivity for quick trade execution. Centralized processing allows for easy integration and trading of hundreds of accounts simultaneously, ensuring minimal distribution delay.")</p>
                    <h3>
                        <strong>@lang("Advantages of TradeLive AI Investment LLC's Free VPS Hosting:")</strong>
                    </h3>
                    <div class="list-container">
                        <ul>
                            
                          <li><a class="small text-black-50">@lang('Fast and reliable connectivity.') </a></li>
                          <li><a class="small text-black-50">@lang('Improved trading performance.') </a></li>
                          <li><a class="small text-black-50">@lang('Reduced latency and slippage.') </a></li>
                          <li><a class="small text-black-50">@lang('Increased security for trading.') </a></li>
                          <li><a class="small text-black-50">@lang('Customizable server configurations.') </a></li>
                          <li><a class="small text-black-50">@lang('Free setup and easy installation.') </a></li>
                          <li><a class="small text-black-50">@lang('Remote access to trading accounts.') </a></li>
                          <li><a class="small text-black-50">@lang('24/7 technical support.') </a></li>
                          <li><a class="small text-black-50">@lang('Enhanced risk management.') </a></li>
                          <li><a class="small text-black-50">@lang('No downtime or connection interruptions.') </a></li>
                          
                        </ul>
                      </div>
                </div>

                <div class="col-md-5 ">
                    <img src="https://www.cwgmarkets.com/assets/image/mam.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row justify-content-center g-4">
                
                <div class="col-md-6">
                    <h2 class="fw-700 mb-4">
                        @lang('Free VPS Hosting') 
                    </h2>
                    <p class="small">
                        @lang('TradeLive AI Investment LLC offers free Virtual Private Server (VPS) hosting to clients who meet certain trading requirements. With VPS hosting, clients can run their Expert Advisors (EAs) and automated trading strategies around the clock without interruption.') 
                    </p>
                </div>
                
                <div class="col-md-6">
                    <h2 class="fw-700 mb-4">
                        @lang("What advantage does TradeLive AI Investment LLC's VPS hosting provide in today's fast-paced financial markets?") 
                    </h2>
                    <p class="small">
                        @lang("This provides a significant advantage in today's fast-paced financial markets, where split-second decisions can make all the difference. TradeLive AI Investment LLC's VPS hosting ensures fast and reliable connectivity, allowing clients to execute trades quickly and efficiently.") 
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section style="background: #4848485e;">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                
                <div class="col-md-7">
                    <h2 class="fw-700 mb-4">
                        @lang('Would you like to discuss this further?Lets talk.')
                    </h2>
                    <p class="lead">
                        @lang('Our representatives are available to guide you through our system or address any queries you may have.')
                    </p>
                </div>
                
                <div class="col-md-5">
                    <center>
                            <a href="{{ route('support') }}">
                            <button type="button" class="btn btn-lg btn-primary">@lang('Get in touch') </button>
                        </a>
                    </center>
                </div>

            </div>
        </div>
    </section>
    
@endsection
