@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/mam_pamm.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('MAM/PAMM') 
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('MAM/PAMM are multi-account management tools that allow traders to manage multiple accounts simultaneously. They enable traders to execute trades across different accounts, and provide a range of customization options.') </p>
            </div>
        </div>
        </div>
    </div>

    <section class="bg-g">
        <div class="container text-center ">
            <h3>
                <strong>@lang('Benefits of using MAM/PAMM with TradeLive ai:') </strong>
                <br>
            </h3>

            <div class="mt-5 row g-4">
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-liquidity.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Efficient management') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-microlots.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Real-time monitoring') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-execution.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Customizable fees') </h6>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img src="https://d2t3t83hvekb.cloudfront.net/globals/icons_secondary/icon-product-range.svg" height="50" alt="">
                    <h6 class="mt-2 fw-bold">@lang('Profit allocation') </h6>
                </div>
            </div>
        </div>
    </section>


    
    <section style="background: #4848485e;">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                
                <div class="col-md-7 padding-start-5-pc">
                    <p class="text-black-75">@lang('At TradeLive ai, our MAM/PAMM trading tool allows for seamless trading of all managed accounts through a single MetaTrader client end application. This integration ensures maximum reliability and speedy execution for all trades. Our centralized and server-based processing allows for quick and reliable integration, with the ability to trade hundreds of accounts at once with minimal delay in distribution.') </p>
                    <h3><br>
                        <strong>@lang("Advantages of TradeLive ai's MAM/PAMM:") </strong>
                    </h3>
                    <div class="list-container">
                        <ul>
                          
                            
                            
                            
                            <li><a class="small text-black-50">@lang('Efficient multi-account management') </a></li>
                            <li><a class="small text-black-50">@lang('Professional portfolio management expertise') </a></li>
                            <li><a class="small text-black-50">@lang('Customizable trade parameters') </a></li>
                            <li><a class="small text-black-50">@lang('High-level data security') </a></li>
                            <li><a class="small text-black-50">@lang('Easy fund allocation') </a></li>
                            <li><a class="small text-black-50">@lang('Automated trading strategies') </a></li>
                            <li><a class="small text-black-50">@lang('Real-time market data') </a></li>
                            <li><a class="small text-black-50">@lang('Customizable trade analysis reporting') </a></li>
                            <li><a class="small text-black-50">@lang('Dedicated user support') </a></li>
                            <li><a class="small text-black-50">@lang('Simultaneous large volume trade execution') </a></li>
                            


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
                        @lang('MAM/PAMM Account Brokers') 
                    </h2>
                    <p class="small">
                        @lang("TradeLive ai's MAM/PAMM account brokers allow clients to manage multiple sub-accounts as a single Master Account. This is facilitated by bespoke MAM/PAMM technology, enabling efficient management with reliable and quick execution. Clients benefit from professional portfolio management and convenience through a single platform.") 
                    </p>
                </div>
                
                <div class="col-md-6">
                    <h2 class="fw-700 mb-4">
                        @lang('What is a MAM/PAMM?') 
                    </h2>
                    <p class="small">
                        @lang('PAMM is an acronym for Percentage Allocation Management Module Manager, a form of forex trading where investors can participate in a set of sub-accounts traded together by a money manager. The money manager is granted permission by clients to trade their accounts under a Limited Power of Attorney (LPOA).') 
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
