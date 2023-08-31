@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/expert_advisor.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('expert advisor')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('Expert Advisor is an automated trading system that uses algorithms to make accurate and more reliable trading decisions. It helps traders to analyze markets and execute trades automatically, based on specific parameters and rules.')</p>
            </div>
        </div>
        </div>
    </div>

    <section class="bg-g">
        <div class="container text-center ">
            <h3>
                <strong>@lang('Benefits of using Expert Advisor with TradeLive AI :')</strong>
                <br>
            </h3>

            <div class="mt-5 row g-0">
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-liquidity.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('utomated trading') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-microlots.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Strategy optimization') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-execution.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Efficient trading') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-product-range.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Reduced emotions') </h6>
                </div>
            </div>
        </div>
    </section>


    
    <section style="background: #4848485e;">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                
                <div class="col-md-7 padding-start-5-pc">
                    <p class="text-black-75">@lang('TradeLive AI  offers an automated Expert Advisor (EA) trading tool for clients, allowing for efficient and reliable trading with customizable parameters. The EA tool integrates with MetaTrader, handles high volumes of trades, and provides real-time monitoring, reporting, and analysis. Dedicated support is also provided for users.')</p>
                    <h3>
                        <strong>@lang("Advantages of TradeLive AI 's Expert Advisor:")</strong>
                    </h3>
                    <div class="list-container">
                        <ul>
                          
                            
                          <li><a class="small text-white">@lang('Automated trading with customizable parameters') </a></li>
                          <li><a class="small text-white">@lang('Reliable and efficient trading execution') </a></li>
                          <li><a class="small text-white">@lang('Seamless integration with MetaTrader client end') </a></li>
                          <li><a class="small text-white">@lang('Handles high volumes of trades simultaneously') </a></li>
                          <li><a class="small text-white">@lang('Real-time monitoring of trade performance') </a></li>
                          <li><a class="small text-white">@lang('Access to market data and price feeds') </a></li>
                          <li><a class="small text-white">@lang('Customizable reporting and analysis') </a></li>
                          <li><a class="small text-white">@lang('Dedicated support from TradeLive AI ') </a></li>
                          <li><a class="small text-white">@lang('Maintains control over investment portfolio') </a></li>
                          <li><a class="small text-white">@lang('Potential for faster execution and fewer errors.') </a></li>
                          
                          
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
                        @lang('Expert Advisor (EA) Account Brokers') 
                    </h2>
                    <p class="small">
                        @lang("TradeLive AI 's Expert Advisor (EA) account brokers allow clients to automate their trading strategies through a single Master Account. Our EA technology ensures efficient and reliable management, with customizable parameters for risk management and lot sizes. Clients benefit from automated trading with maximum convenience and control.") 
                    </p>
                </div>
                
                <div class="col-md-6">
                    <h2 class="fw-700 mb-4">
                        @lang('What is an Expert Advisor (EA)?') 
                    </h2>
                    <p class="small">
                        @lang("An Expert Advisor (EA) is an automated trading system that executes trades based on pre-programmed trading strategies. EAs operate within the MetaTrader client end application, allowing for seamless integration with TradeLive AI 's trading platform. Clients can monitor and adjust their EAs in real-time, with access to market data and price feeds for accurate decision-making.") 
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
