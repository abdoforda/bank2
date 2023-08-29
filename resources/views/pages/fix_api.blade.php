@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/fix_api.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Fix APi')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('Fix API is a protocol used by traders for faster and more reliable trading execution. It enables direct access to liquidity providers, and provides traders with real-time data and fast order processing.') </p>
            </div>
        </div>
        </div>
    </div>

    <section class="bg-g">
        <div class="container text-center ">
            <h3>
                <strong>@lang('Benefits of using Fix API with TradeLive AI Investment LLC:')</strong>
                <br>
            </h3>

            <div class="mt-5 row g-4">
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-liquidity.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Fast execution')</h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-microlots.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Accurate pricing') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-execution.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Accurate pricing') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-product-range.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Risk management') </h6>
                </div>
            </div>
        </div>
    </section>


    
    <section style="background: #4848485e;">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                
                <div class="col-md-7 padding-start-5-pc">
                    <p class="text-black-75">
                        @lang('TradeLive AI Investment LLC offers Fix API trading tool for its clients, which is a popular trading platform widely used by institutional traders and hedge funds. Fix API stands for Financial Information Exchange Application Programming Interface, and it provides direct access to liquidity providers and exchanges, enabling traders to execute trades quickly and efficiently.')
                    </p>
                    <h3>
                        <strong>@lang("Advantages of TradeLive AI Investment LLC's Fix API:")</strong>
                    </h3>
                    <div class="list-container">
                        <ul>
                          
                            
                          <li><a class="small text-black-50">@lang('Low latency for quick and accurate order filling') </a></li>
                          <li><a class="small text-black-50">@lang('Customizable parameters to suit trading strategies') </a></li>
                          <li><a class="small text-black-50">@lang('High security with secure encryption protocols') </a></li>
                          <li><a class="small text-black-50">@lang('Direct market access to multiple liquidity providers') </a></li>
                          <li><a class="small text-black-50">@lang('Automated trading with the ability to execute large volumes of trades') </a></li>
                          <li><a class="small text-black-50">@lang('Real-time market data and price feeds for accurate decision-making') </a></li>
                          <li><a class="small text-black-50">@lang('Easy integration into existing trading systems') </a></li>
                          <li><a class="small text-black-50">@lang('Customizable reporting and analysis of trading activity') </a></li>
                          <li><a class="small text-black-50">@lang('Multi-platform support, including MetaTrader 4 and 5') </a></li>
                          <li><a class="small text-black-50">@lang('Dedicated support for technical assistance and guidance') </a></li>
                          
                          
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
                        @lang('Introduction to Fix API Trading')
                    </h2>
                    <p class="small">
                        @lang('Fix API Trading is a tool that provides access to a direct connection with liquidity providers. It is used by institutional clients and high-frequency traders who require fast and reliable execution. TradeLive AI Investment LLC offers Fix API Trading to clients, providing them with the benefits of direct market access and a range of customizable features.')
                    </p>
                </div>
                
                <div class="col-md-6">
                    <h2 class="fw-700 mb-4">
                        @lang('What is Fix API Trading?') 
                    </h2>
                    <p class="small">
                        @lang('Fix API (Financial Information eXchange Application Programming Interface) is a protocol used by financial institutions to communicate with each other in real-time. Fix API Trading allows clients to connect directly to liquidity providers, bypassing intermediaries such as brokers or market makers. This enables clients to execute trades faster, with lower latency and better pricing.') 
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
