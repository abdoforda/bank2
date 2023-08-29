@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/exhibitions.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Exhibitions')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('text04')</p>
            </div>
        </div>
        </div>
    </div>


    <section class="pt-5 pb-5"
        style="background-image: url(https://roboforex.com/uploads/pages/about/activity/exhibition/images/exhibitions_main-bg_2.png); background-size: inherit; background-position: center right; background-repeat: no-repeat; background-color: #fff; 
    ">
        <div class="container ">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-6">
                    <h3 class="h1">
                        @lang('TradeLive AI') @lang('Exhibitions')
                    </h3>
                    <p>
                        @lang('Every year, RoboForex Ltd not only increases the number and improves the quality of its services, but also takes part in big field-specific events. RoboForex is a permanent participant of different international and Russian exhibitions dedicated to the Forex market-related services.')
                    </p></div>
                <div class="col-md-6" style="min-height: 400px;"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h3 class="mt-4">@lang('Past exhibitions of the TradeLive AI')</h3>
            <div class="row mt-2 justify-content-center align-items-center g-4">
                @for ($i = 0; $i < 8; $i++)
                <div class="col-md-6">
                    <div class="position-relative rounded shadow-sm p-4 exhibitions_item">

                    <img src="https://roboforex.com/uploads/pages/about/activity/exhibition/images/ifx_bg.png" class="img-fluid exhibitions_img" alt="">
                    <span class="exhibitions__place">@lang('Hong Kong Convention') &amp; @lang('Exhibition Centre')</span>
                    <div class="display-2 fw-bold exhibitions_year">2012</div>
                    
                    
                    <h3>@lang('TradeLive AI') EXPO</h3>
                    <p class="mb-0 mt-1 small"><i class="fa-solid fa-calendar-days color2"></i> 26/01 - 28/01</p>
                    <p class="mb-0 mt-1 small"><i class="fa-solid fa-location-dot color2"></i> @lang('Hong Kong')</p>
                    <p class="mb-0 mt-1 small"><i class="fa-solid fa-star color2"></i>  @lang('Gold sponsor')</p>

                        
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
