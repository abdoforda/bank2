@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/economic_calendar.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Economic Calendar')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('Economic calendar is a tool that provides traders with information about important economic events and their potential impact on global and local markets. It enables traders to be fully aware  about market-moving events and adjust their trading strategies accordingly.')</p>
            </div>
        </div>
        </div>
    </div>

    <section>
        <div class="container">
            <center>
                <h3 class="h1">
                    @lang('Created by traders for traders') 
                </h3>
                <p class="lead text-black-75 mt-4">
                    @lang('Keep up to date with all the upcoming economic releases and events around the world. Windsor’s Economic Calendar is automatically updated during live announcements to provide you with all the important information that may affect your trading.') 
                </p>
            </center>
           
            <center class="mt-5">
                <iframe scrolling="no" allowtransparency="true" frameborder="0" width="100%" height="800" src="https://www.tradays.com/en/economic-calendar/widget?mode=2&amp;utm_source=en.windsorbrokers.com" __idm_id__="138272769"></iframe>
            </center>

        </div>
    </section>


@endsection
