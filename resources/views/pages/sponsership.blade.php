@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/sponsership.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Sponsership')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('text02')</p>
            </div>
        </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-6">
                    <h3 class="display-4 fw-bold">
                        @lang('TradeLive AI ')<br><span class="color2">@lang('SPONSORSHIPS')</span> &<br>@lang('ENDORSEMENTS')
                    </h3>
                    <p class="text-black-50 mt-5">
                        @lang('TOGETHER WE SUCCEED!')
                    </p>
                    <p class="small">@lang('TradeLive AI  takes pride in bringing CFD trading to anyone that is interested in entering multiple markets across the globe. Our sponsorships create mutually beneficial relationships between our partners and us. Our sponsorship partners are chosen because of our shared values, dedication to the people that support us, and a high level of integrity in what we do.')</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://static.TradeLive AI .com/assets/assets/view/eM_Sponsorship_main_img.png?1594628778"
                        class="img-fluid" style="max-width: 260px;" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5"
        style="background-image: url(https://TradeLive AI .com/uploads/pages/about/activity/sponsorship/images/new/kulebin-bg.webp);
    background-size: cover;
    ">
        <div class="container ">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-6">
                    <p class="lead fw-600">
                        @lang('2018 - THROUGH PRESENT')
                    </p>
                    <h3 class="fs-2 fw-bold">
                        @lang('Fighting')
                    </h3>
                    <p class="lead fw-600 fs-3">
                        @lang('Muay Thai fighter and')<br>@lang('coach Andrei Kulebin')
                    </p>
                    <p class="small">@lang('TradeLive AI  is the official sponsor of a successful Belarusian Muay Thai fighter and coach Andrei Kulebin. Kulebin has more than 200 wins; he is a many-time Thai boxing world champion and an Honored Master of Sports of Belarus.')</p>

                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col">
                            <h4 class="display-3 fw-bold">
                                x25
                            </h4>
                            <p>
                                @lang('World champion') <br>(IFMA, IPCC, WAKO, WKN, WMC, WMF)
                            </p>
                        </div>
                        <div class="col">
                            <h4 class="display-3 fw-bold">
                                x4
                            </h4>
                            <p>
                                @lang('Europe champion') <br>(IFMA,WKN)
                            </p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-lg btn-outline-primary ">@lang('Read More')</button>
                    
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
@endsection
