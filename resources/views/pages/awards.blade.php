@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/awards.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Awards')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('text03')</p>
            </div>
        </div>
        </div>
    </div>
    
    <section>
        <div class="container ">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-6">
                    
                    <h3 class="display-5 fw-bold color2 text-uppercase text-center text-md-start">
                        @lang('Highness')<br>
                        @lang('AWARDS')
                    </h3>
                    <p class="lead text-black-50 mt-4">
                        @lang('OUR AWARDS')
                    </p>
                    <p class="small">
                        @lang('These aren’t ours, these are everyone’s that have supported easyMarkets since 2001. The reason we have been able to achieve anything is due to the people that joined us in this journey as employees, as clients and as partners.')
                    </p>
                </div>

                <div class="col-md-6 d-none d-md-block">
                    <img src="https://static.easymarkets.com/assets/assets/view/awards-masthead-bg.png?1518791401" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>@lang('Forex Services Awards')</h2>
            <div class="row justify-content-center align-items-center g-4">
                

                @for ($i = 0; $i < 8; $i++)
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="border p-3 text-center rounded">
                        <img src="https://cloud.xm-cdn.com/static/xm/pages/awards/finexpo2022.png" class="img-fluid" alt="">
                        <h5 class="mt-5">
                            @lang('The Best Crypto Highness')
                        </h5>
                        <p class="mt-5">
                            @lang('Awarded by Financial Expo Egypt 2023')
                        </p>
                        <hr class="mt-5">
                        <p class="color2 m-1">
                            @lang('Financial Expo Egypt')
                        </p>
                    </div>
                </div>
                @endfor
                
            </div>
        </div>
    </section>

@endsection
