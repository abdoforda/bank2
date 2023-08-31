@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/cpa_affiliate.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('TradeLive AI  Affiliate Program')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('Become an TradeLive AI  Affiliate and earn up to $1200 per qualified trader.')</p>
                </div>
            </div>

            <a href="https://portal.TradeLive AI .com/en/auth/register"><button type="button" class="btn btn-primary">@lang('Open Account')</button></a>
            &nbsp;
            <a href="https://portal.TradeLive AI .com/en/auth/login">
                <button type="button" class="btn btn-outline-success">@lang('Free Demo')</button>
            </a>

        </div>
    </div>

    @include('components.benefitting_your_business')

    <section style="background: #42413a17;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="keyFeather">
                        <h5 class="mb-2 text-black fw-600">@lang('Key features of the IB Program')</h5>
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action p-0" href="javascript:void(0);">
                                <div class="featuresflex d-flex">
                                    <span class="feathericon"><img data-src="https://capitalxtend.com/img/feather01.svg"
                                            alt="feather" class="img-fluid lazyload"
                                            src="https://capitalxtend.com/img/feather01.svg"></span>
                                    <span class="feathercontent">
                                        <h4>@lang('Hiring new recruits')</h4>
                                        <p>@lang('According to CapitalXtend’s marketing structure, existing partners will be required to recruit new distributors. By doing this, you will earn a percentage of your recruits’ sales.')</p>
                                    </span>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action p-0" href="javascript:void(0);">
                                <div class="featuresflex d-flex">
                                    <span class="feathericon"><img data-src="https://capitalxtend.com/img/feather02.svg"
                                            alt="feather" class="img-fluid lazyload"
                                            src="https://capitalxtend.com/img/feather02.svg"></span>
                                    <span class="feathercontent">
                                        <h4>@lang('Events')</h4>
                                        <p>@lang('CapitalXtend organizes multiple trading competitions that allow the traders to earn maximum profits.')</p>
                                    </span>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action p-0" href="javascript:void(0);">
                                <div class="featuresflex d-flex">
                                    <span class="feathericon"><img data-src="https://capitalxtend.com/img/feather03.svg"
                                            alt="feather" class="img-fluid lazyload"
                                            src="https://capitalxtend.com/img/feather03.svg"></span>
                                    <span class="feathercontent">
                                        <h4>@lang('Financing')</h4>
                                        <p>@lang('CapitalXtend supports a number of organizations and communities through their global sponsorship programs.')</p>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="brokersright pl-md-5">
                        <h5 class="mb-2 text-black fw-600 section_title">@lang('Introducing Broker')
                            <small class="pt-3">@lang('CapitalXtend’s IB Program is to help its partners earn money through referrals. Every active client brought by you to join CapitalXtend will increase your revenue.')</small>
                        </h5>
                        <h4 class="mt-5">Benefits Of IB Partnership</h4>
                        <ul class="p-0 m-0 Benefitslist">
                            <li><img class="lazyload" data-src="https://capitalxtend.com/img/safety_fund01.svg"
                                    alt="Benefits" src="https://capitalxtend.com/img/safety_fund01.svg">@lang('Flexible pay-outs monitoring and reporting customer accounts with attractive real-time rebate compensations')
                            </li>
                            <li><img class="lazyload" data-src="https://capitalxtend.com/img/safety_fund02.svg"
                                    alt="Benefits" src="https://capitalxtend.com/img/safety_fund02.svg">@lang('No upfront investment and straightforward revenue generation')
                            </li>
                            <li><img class="lazyload" data-src="https://capitalxtend.com/img/safety_fund03.svg"
                                    alt="Benefits" src="https://capitalxtend.com/img/safety_fund03.svg">@lang('Easy-to-use and efficient account setup')
                            </li>
                            <li><img class="lazyload" data-src="https://capitalxtend.com/img/safety_fund04.svg"
                                    alt="Benefits" src="https://capitalxtend.com/img/safety_fund04.svg">@lang('Dedicated managers for all traders')
                            </li>
                            <li><img class="lazyload" data-src="https://capitalxtend.com/img/safety_fund01.svg"
                                    alt="Benefits" src="https://capitalxtend.com/img/safety_fund01.svg">@lang('24/7 support from the CapitalXtend team to handle your queries and feedback')
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <center>
                <h3>
                    @lang('The more clients you refer, the greater your income')
                </h3>
                <p>@lang('Use the slider to calculate the average monthly income you can make as our CPA affiliate partner, based on the number of clients you bring in.')</p>
            </center>

            <div class="row justify-content-center align-items-center g-2 text-center mt-5">
                <div class="col-2">
                    <div class="output">
                        <p>
                            <output id="rangevalue">10</output>
                        </p>
                        <span>@lang('clients')</span>
                    </div>
                </div>
                <div class="col-8 position-relative">
                    <input type="range" class="range_input" value="100" name="range" min="1" max="400"
                        id="range" oninput="rangevalue.value=value">
                    <ul class="bar_number_list">
                        <li>10</li>
                        <li>100</li>
                        <li>200</li>
                        <li>300</li>
                        <li>400</li>
                    </ul>
                </div>
                <div class="col-2">
                    <output class="output" id="rangevalueamount">
                        <p>$600</p>
                        <span>@lang('per month')</span>
                    </output>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-2 small color1 mt-5 text-center">
                <div class="col">1. @lang('The income indicator is calculated for reference.')</div>
                <div class="col">2. @lang('The average of the total statistics is used.') </div>
                <div class="col">3. @lang('The data may differ from the metrics in your account.') </div>
            </div>
        </div>

    </section>

    <section class="bg-g">
        <div class="container text-center">
            <h3>@lang('GET STARTED NOW') </h3>
            <p>@lang("Grow your business with TradeLive AI  Partners' Affiliate Program") </p>
            <div class="row justify-content-center mt-5 g-2">
                <div class="col">
                    <img src="/images/new_images/icons/step1.svg" height="100" alt="">
                    <h5 class="mt-3 color2">@lang('Apply online') </h5>
                    <p>@lang('Fill out our affiliate application form today') </p>
                </div>
                <div class="col">
                    <img src="/images/new_images/icons/step2.svg" height="100" alt="">
                    <h5 class="mt-3 color2">@lang('Place ads') </h5>
                    <p>@lang('Head over to the Marketing Tools section and get your banners, links, and widgets.') </p>
                </div>
                <div class="col">
                    <img src="/images/new_images/icons/step3.svg" height="100" alt="">
                    <h5 class="mt-3 color2">@lang('Get paid') </h5>
                    <p>@lang("Earn high CPAs from your clients' trading") </p>
                </div>
            </div>

            <a href="https://portal.TradeLive AI .com/en/auth/register">
                <button type="button" class="mt-5 btn btn-outline-primary">@lang('Become an affiliate today')</button>
            </a>


        </div>
    </section>

    <section>
        <center>
            <h3 class="">@lang('Frequently asked questions') </h3>
            <h6 class="text-white-50">@lang('Here are our most frequently asked questions about trading forex with Exness.') </h6>
        </center>

        <div class="container mt-4">

            <div class="ask_div p-3">

                <a class="ask_click" data-bs-toggle="collapse" href="#what_is_forex_trading" role="button"
                    aria-expanded="false" aria-controls="what_is_forex_trading">
                    @lang('How does the TradeLive AI  Affiliate Program work?')
                </a>

                <div class="collapse multi-collapse" id="what_is_forex_trading">
                    <div class="p-3">
                        <p>@lang('The TradeLive AI  Affiliate Program allows individuals or businesses to earn commissions by referring new clients to TradeLive AI . Affiliates receive a unique tracking link and promotional materials to share with their audience. When someone clicks on the affiliate link and becomes a TradeLive AI  client, the affiliate earns a commission.') </p>
                    </div>
                </div>
            </div>

            <div class="ask_div ask_div2 p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#how_does_forex_trading_work" role="button"
                    aria-expanded="false" aria-controls="how_does_forex_trading_work">
                    @lang('What are the benefits of joining the TradeLive AI  Affiliate Program?')
                </a>

                <div class="collapse multi-collapse" id="how_does_forex_trading_work">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>@lang('By joining the TradeLive AI  Affiliate Program, you can earn competitive commissions for every referred client who engages in trading activities. Additionally, you\'ll have access to marketing materials, reporting tools, and dedicated support to help you maximize your affiliate earnings.') </p>
                            </div>
                    </div>
                </div>
            </div>

            <div class="ask_div  p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#what_influences_prices_in_forex_trading"
                    role="button" aria-expanded="false" aria-controls="what_influences_prices_in_forex_trading">
                    @lang('How can I become an affiliate for TradeLive AI ?')
                </a>

                <div class="collapse multi-collapse" id="what_influences_prices_in_forex_trading">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>@lang('To become an affiliate for TradeLive AI , you need to sign up through the affiliate registration process. After submitting your application, it will be reviewed by the TradeLive AI  team. Once approved, you will receive your affiliate account details and access to the affiliate dashboard.') </p>
                            </div>
                    </div>
                </div>
            </div>

            <div class="ask_div ask_div2 p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#what_is_forex_trading_software" role="button"
                    aria-expanded="false" aria-controls="what_is_forex_trading_software">
                    @lang('How are affiliate commissions calculated and paid?')
                </a>

                <div class="collapse multi-collapse" id="what_is_forex_trading_software">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>@lang('Affiliate commissions are typically calculated based on the trading activity of the referred clients. The specific commission structure may vary depending on the terms of the affiliate program. Commissions are usually paid out on a regular basis, such as monthly or weekly, and can be withdrawn via various payment methods supported by TradeLive AI .') </p>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="ask_div  p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#who_are_forex_trading_market_participants"
                    role="button" aria-expanded="false" aria-controls="who_are_forex_trading_market_participants">
                    @lang('Can I promote TradeLive AI  through multiple marketing channels?')
                </a>

                <div class="collapse multi-collapse" id="who_are_forex_trading_market_participants">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>@lang('Yes, as an affiliate, you can promote TradeLive AI  through multiple marketing channels such as websites, blogs, social media, email marketing, and more. However, it\'s important to adhere to the guidelines and policies outlined in the affiliate agreement to ensure ethical and compliant promotional activities.') </p>
                            </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection

@section('scripts')
    <script>
        function handleInputChange(e) {
    let target = e.target
    if (e.target.type !== 'range') {
      target = document.getElementById('range')
    } 
    const min = target.min;
    const max = target.max;
    const val = target.value;
    
    $("#rangevalueamount p").text("$"+val * 600);
        updatecommission(val);
  }
  $(function () {
    const rangeInputs = document.querySelectorAll('input[type="range"]');
    rangeInputs.forEach(input => {
    input.addEventListener('input', handleInputChange)
  })
  });
    </script>
@endsection
@section('css')
    <style>
/*! CSS Used from: https://highnessinv.com/css/style.css */




.range_input{width:100%;}
.output p{margin:0;font-size:24px;color:var(--color-main-250);font-weight:700;}
.bar_number_list{position:absolute;left:0px;width:100%;top:34px;padding:0px;margin:0px;display:flex;justify-content:space-between;}
.bar_number_list li{padding:0px;margin:0px;font-size:16px;user-select:none;color:var(--color-main-250);}
input[type="range"]{-webkit-appearance:none;width:100%;height:7px;background:var(--color-main-100);border-radius:5px;background-size:100% 100%;background-repeat:no-repeat;}


/*Chrome*/
@media screen and (-webkit-min-device-pixel-ratio:0) {
    input[type='range'] {
      overflow: hidden;
      width: 100%;
      -webkit-appearance: none;
      background-color: #766432;
    }
    
    input[type='range']::-webkit-slider-runnable-track {
      height: 22px;
      -webkit-appearance: none;
      color: #766432;
      margin-top: -1px;
    }
    
    input[type='range']::-webkit-slider-thumb {
      width: 22px;
      -webkit-appearance: none;
      height: 22px;
      border-radius: 50px;
      cursor: ew-resize;
      background: #c79407;
      box-shadow: -2800px 0 0 2800px #ff9b28;
    }

}
/** FF*/
input[type="range"]::-moz-range-progress {
  background-color: #ff9b28; 
}
input[type="range"]::-moz-range-track {  
  background-color: #9a905d;
}
/* IE*/
input[type="range"]::-ms-fill-lower {
  background-color: #ff9b28; 
}
input[type="range"]::-ms-fill-upper {  
  background-color: #9a905d;
}
    </style>
@endsection