@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/trading_central_web_tv.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Trading Central Web TV')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('Trading Central Web TV is an educational resource that provides traders with live market analysis and commentary. It enables traders to be fully aware about market trends, and helps them to improve their trading skills and performance.')</p>
            </div>
        </div>
        </div>
    </div>

    <section style="background: #4848485e;">
        <div class="container">
            <h3 class="display-4">
                @lang('Trading Central WebTV')
            </h3>
            <p class="lead text-black-75 mt-4 fs-4">
                @lang('Stay up-to-date with the latest news and insights from the New York Stock Exchange floor through TradeLive AI. Our daily videos, featuring market commentary and trading ideas from Trading Central, a renowned investment research provider, will keep you informed and empowered in your investment decisions.')

            </p>
        </div>
    </section>

    <section>
        <div class="container p-5">
            <center>
                <iframe width="100%" style="min-height: 500px" src="https://www.youtube.com/embed/videoseries?list=PLl_EHtw2h7QSAogk96baPCBiz3IOvVT7E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </center>
        </div>
    </section>

    <section style="background: #fff">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-7">
                    <h3 class="display-6">
                        @lang('Key highlights of the Trading')
                        <br> @lang('Central WebTV ')
                    </h3>
                    <p class="text-black-75 mt-4">
                        @lang('Discover the exceptional features of Trading Central WebTV offered by TradeLive AI. Access live video streams of financial news directly from the New York Stock Exchange. Stay informed with market commentary and actionable trade ideas from Trading Central, a trusted name in financial investment research. Our videos are updated daily, around 12:00 GMT, providing timely updates before or during the NYSE opening. Enjoy the convenience of multiple language options, including English, Simplified Chinese, and Arabic, for a truly global perspective.')
                    </p>
        
                </div>
            </div>
        </div>
    </section>

@endsection
