@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center"
        style="--img: url(/images/new_images/pages/safety_of_your_funds.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Safety Of Your Funds')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang("At TradeLive AI , we prioritize the safety of our clients' funds. We utilize state-of-the-art security measures and work with reputable financial institutions to ensure that your investments are protected. Your peace of mind is our top priority.")</p>
            </div>
        </div>
        </div>
    </div>


    <section class="text-center">
        <div class="container">
            <div>
                <h3 class="fs-1 fw-normal">
                    @lang('Securing your account from a negative balance is decisive when trading on the Forex market, which is deemed inherently risky.')
                </h3>
                <p class="mt-4 fs-5">@lang('TradeLive AI  provides standard tools to help you do this')</p>
            </div>
            <div class="mt-5 row justify-content-center align-items-center g-4">
                <div class="col-md-4 col-sm-6">
                    <div>
                        <img style="height: 70px"
                        src="/images/new_images/icons/Stop Loss Level.png"
                            class="img-fluid rounded-top" alt="">
                        <h3 class="fs-4">@lang('Stop Loss Level')</h3>
                        <p class="mt-4">@lang('Placing your stop loss at a reasonable level will protect your account from fast price changes and market fluctuations.')</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div>
                        <img style="height: 70px"
                            src="/images/new_images/icons/Transaction Volume.png"
                            class="img-fluid rounded-top" alt="">
                        <h3 class="fs-4">@lang('Transaction Volume')</h3>
                        <p class="mt-4">@lang('It is important to be aware of the volume and number of open positions and orders on your account, as not all transactions may be profitable.')</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div>
                        <img style="height: 70px"
                        src="/images/new_images/icons/Leverage.png"
                            class="img-fluid rounded-top" alt="">
                        <h3 class="fs-4">@lang('Leverage')</h3>
                        <p class="mt-4">@lang("Managing leverage is another principal instrument for  managing risks. Whenever the leverage are higher, the potential risks and profits are higher, so it's important to use it wisely.")</p>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
@endsection
