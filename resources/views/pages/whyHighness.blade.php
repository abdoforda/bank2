@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/why.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Why TradeLive AI Investment LLC?')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('Welcome to TradeLive AI Investment LLC , We are dedicated to providing you with the best possible trading experience and helping you achieve your financial goals. Here are just a few reasons why you should choose us:')</p>
            </div>
        </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-md-12">
                    <h1 class="fw-light color">@lang('Why should you trade with  TradeLive AI Investment LLC?')</h1>

                    <p>@lang("At Highnees Investment LLC, we have two core business assets: latest technology and highest services. Our advanced technology is our focus as it increases our clients' trading efficiency and our progress as well, in addition to our business partners. We feel proud to offer you a transparent, safe, and secure trading models. Trading using our  latest technologies enables us improve decision-making process in short time. Besides, we provide a better customer experience. This enables you to have the best possible opportunities to achieve successful online trading in the financial markets.")</p>
                </div>

                <div class="col-md-12">
                    <h1 class="fw-light color">@lang('Efficient patterns of trading')</h1>
                    <p>@lang('You can buy and sell multiple asset operations as CFDs (contracts of differences). We offer you a free VPS (virtual private server) service, well adjusted to your account type, so you can trade freely and efficiently once the trading markets open.')</p>
                </div>

            </div>
        </div>
    </section>

    <section style="background: #16181c;">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-6 d-none d-md-block">
                    <div class="image-container" 
                    style="background:url('/images/new_images/pages/learn_more.webp')no-repeat;background-size:cover;background-position:left bottom; border-radius: 12px;
                    height: 383px;
                    position: relative;">
                    </div>
                    
                </div>
                <div class="col-md-6 ps-5">
                    <h1 class="fw-light color">@lang('Why TradeLive AI different from others?')</h1>
                    <div class="list-container">
                        <ul class="a-context-menu">
                          
                            
                          <li><a>@lang('Diverse set of instruments.')</a></li>
                          <li><a>@lang('Smooth and flexible leverage.')</a></li>
                          <li><a>@lang('Dynamic trading environment.')</a></li>
                          <li><a>@lang('Experience exceeds 13 years.')</a></li>
                          <li><a>@lang('Strict fund protection.')</a></li>
                          <li><a>@lang('+470 trading instruments.')</a></li>
                          
                        </ul>
                      </div>
                </div>
            </div>
        </div>
    </section>

    
    
    <section class=" text-center">
        <div class="container">
            <h2 class="fw-normal text-capitalize gray">
                @lang('Get Started in')  <span class="color">@lang('3 steps')</span>
            </h2>


            <div class="container-sm">

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="account__step__item">
                            <div class="arrow-right">
                                <img class="img-fluid" src="/images/new_images/icons/rights.png"
                                    data-src="/images/new_images/icons/rights.png" alt="long arrow icon">
                            </div>
                            <div class="account__step__item__num">
                                1
                            </div>
                            <div class="account__step__content">
                                <h3>@lang('Provide your info')</h3>
                                <p>@lang('Personal info and trading') <br>@lang('experience.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="account__step__item">
                            <div class="arrow-right">
                                <img class="img-fluid" src="/images/new_images/icons/rights.png"
                                    data-src="/images/new_images/icons/rights.png" alt="long arrow icon">
                            </div>
                            <div class="account__step__item__num">
                                2
                            </div>
                            <div class="account__step__content">
                                <h3>@lang('Fund your account')</h3>
                                <p>@lang('Through deposit, bank transfer, wire') <br>@lang('transfer, or debit card')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="account__step__item">
                            <div class="account__step__item__num">
                                3
                            </div>
                            <div class="account__step__content">
                                <h3>@lang('Start trading')</h3>
                                <p>@lang('After the approval, the trading')<br>@lang('will be open')</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row justify-content-center align-items-center row02 d-none">
                <div class="col-md-4 p-2">
                    <div class="item position-relative shadow border-1 p-2 pb-3 rounded">
                        <img height="60" src="/images/new_images/icons/Fill out.png" alt="" />
                        <h5>@lang('Fill out a simple online form')</h5>
                        <p class="text-white-50">
                            @lang('We will ask a few questions about you and your experience.')
                        </p>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="item position-relative shadow border-1 p-2 pb-3 rounded">
                        <img height="60" src="/images/new_images/icons/Upload docs.png" alt="" />
                        <h5>@lang('Upload docs and wait for verification')</h5>
                        <p class="text-white-50">
                            @lang('In most cases, the verification process is very quick and straightforward.')
                        </p>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="item position-relative shadow border-1 p-2 pb-3 rounded">
                        <img height="60" src="/images/new_images/icons/Fund your account.png"
                            alt="" />
                        <h5>@lang('Fund your account and start trading')</h5>
                        <p class="text-white-50">
                            @lang('You can deposit funds using free and instant payment methods, or via our mobile app.')
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <a href="https://portal.TradeLive AI.com/en/auth/register">
                        <button type="button" class="btn btn-outline-primary">@lang('Create demo account')</button>
                        <button type="button" class="btn btn-primary ">@lang('Create live account')</button>
                    </a>
                </div>
            </div>

        </div>
    </section>



@endsection

@section('css')
    <style>

/*! CSS Used from: https://TradeLive AIinv.com/css/style.css */
ul{list-style:none;}
a{text-decoration:none;}
section{padding-top:40px;padding-bottom:40px;}
.color{color:var(--color-green);}
*{font-family:"Cairo", sans-serif;}
.list-container ul{list-style:none;margin:20px 0;padding:0;text-decoration:none;}
.list-container ul li a{font-size:16px;font-weight:700;line-height:48px;position:relative;color:#3a3a3a;transition:all 0.3s ease-in-out;}
.list-container ul li a{text-decoration:none;}
.list-container ul li a:before{background:url(https://TradeLive AIinv.com/images/new_images/icons/Blue_Arrow_Right.webp) 50% / cover no-repeat;content:"";height:14px;left:-26px;position:absolute;top:8px;transition:all 0.15s ease-in-out;width:14px;}
.list-container ul li a:hover{color:var(--color-main-300);transition:all 0.3s ease-in-out;}
.list-container ul li a:hover::before{left:-22px;}
.list-container ul li{margin-bottom:0;margin-left:43px;}
.a-context-menu a{cursor:context-menu;}


/*! CSS Used from: https://TradeLive AIinv.com/css/style.css */
a{text-decoration:none;}
section{padding-top:40px;padding-bottom:40px;}
section h2{margin-bottom:42px!important;}
.color{color:var(--color-green);}
*{font-family:"Cairo", sans-serif;}
.row02{position:relative;top:32px;}
.section5{background-color:#e9e9e9;}
.section5 .shadow{box-shadow:5px 5px 1rem rgb(0 0 0 / 12%)!important;}
.section5 p{margin-bottom:0;}
.section5 h5{color:var(--color-green);font-weight:400;}
.section5 .item{min-height:166px;transition:background linear 0.3s;-moz-transition:background linear 0.3s;-ms-transition:background linear 0.3s;-o-transition:background linear 0.3s;-webkit-transition:background linear 0.3s;background:transparent -webkit-gradient(linear,             left bottom,             left top,             from(#e4e6f4),             to(#ffffff)) 0 0 no-repeat padding-box;background:transparent linear-gradient(0deg, #e4e6f4 0%, #ffffff 100%) 0 0 no-repeat padding-box;}
.account__step__item__num{height:75px;width:75px;border:2px solid var(--color2);border-radius:55px;display:flex;align-items:center;justify-content:center;margin:0 auto;font-size:30px;font-weight:300;line-height:1;padding-bottom:2px;margin-bottom:21px;color:var(--color2);}
.gray{color:#fff;}
.account__step__content{color:var(--color-main-300);}
.account__step__content p{color:#ffffff85;}
@media only screen and (max-width: 653px) and (min-width: 280px){
.account__step__item__num{height:62px;width:62px;font-size:24px;flex:0 0 auto;margin-right:26px;padding-bottom:2px;margin-bottom:0;margin-top:25px;}
}
@media (min-width: 320px) and (max-width: 767px){
.account__step__item__num{height:62px;width:62px;font-size:24px;flex:0 0 auto;margin-right:26px;padding-bottom:2px;margin-bottom:0;margin-top:25px;}
}
.arrow-right{position:absolute;right:-130px;max-width:230px;top:25px;}
.account__step__item{text-align:center;color:#fff;margin-bottom:45px;position:relative;}
.btn-primary{--bs-btn-color:#fff;--bs-btn-bg:#74b22b;--bs-btn-border-color:#74b22b;--bs-btn-hover-color:#fff;--bs-btn-hover-bg:#74b22b;--bs-btn-hover-border-color:#74b22b;--bs-btn-focus-shadow-rgb:49, 132, 253;--bs-btn-active-color:#fff;--bs-btn-active-bg:#74b22b;--bs-btn-active-border-color:#74b22b;--bs-btn-active-shadow:inset 0 3px 5px rgba(0, 0, 0, 0.125);--bs-btn-disabled-color:#fff;--bs-btn-disabled-bg:#ffefbe;--bs-btn-disabled-border-color:#ffe180;}
@media (max-width: 767.98px){
.account__step__item__num{margin:auto;float:left;}
.account__step__content{text-align:left;width:72%;float:left;margin-left:3%;}
.arrow-right{display:none;}
.account__step__item{margin-bottom:32px;display:table;width:100%;}
}
</style>
@endsection