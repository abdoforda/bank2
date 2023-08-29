@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center"
        style="--img: url(/images/new_images/pages/technical_analysis_articles.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Technical Analysis Videos')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('Watch our collection of technical analysis videos. Enhance your trading skills by learning various analysis techniques and strategies through these informative videos.')</p>
                </div>
            </div>
        </div>
    </div>


    <section>

        <div class="container p-5"
            style="background-image: url(/images/new_images/sections/tradelive_media_section01.webp);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover; border-radius: 16px;">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-4 text-white">
                    <h3 class="h2">
                        @lang('TradeLive AI Launches Global Trading Race')
                    </h3>
                    <p class="mt-4">
                        @lang('TradeLive AI has announced the launch of a Global Trading Competition with a prize pool of $500,000 for 33 winners in 3 rounds.*')
                    </p>
                    <button type="button" class="btn btn-outline-primary mt-1">@lang('Read More') </button>
                    <p class="mt-4">
                        @lang('*Terms and conditions apply') <br>
                        @lang('All trading involves risk. It is possible to lose all your capital.')
                    </p>
                </div>
                <div class="d-none d-md-block col-md-8 position-relative">
                    <img src="/images/new_images/sections/d-1.webp" style="position: absolute; transform: translateY(-50%);" />
                </div>
            </div>
        </div>

    </section>

    <section>
            <div class="container">
                <div class="row justify-content-center align-items-center gy-0 gx-3 news-box">
                    @foreach ($videos as $video)
                        <div class="col-md-4">
                            <div class="blog_detail_card hover_video">
                                <div class="blog_detail_image position-relative cp">

                                    <a href="{{ $video->slug }}">
                                        
                                    <svg class="svg_play" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="163.839" height="163.839"
                                        viewBox="0,0,256,256">
                                        <g fill="#74b22b" fill-rule="evenodd" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <g transform="scale(0.05905,0.05905)">
                                                <path
                                                    d="M3277,1739l-2105,-1540c0,0 -292,-178 -573,-32c-190,129 -235,339 -235,339v1678v32v1678c0,0 44,209 235,339c281,148 573,-32 573,-32l2105,-1540c434,-317 434,-605 0,-923v2z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>

                                    
                                        <img data-src="{{ Voyager::image($video->image) }}"
                                        alt="Highnees Referral Marathon Contest has begun for Partners" class="img-fluid"
                                        src="{{ Voyager::image($video->image) }}">
                                    </a>
                                </div>
                                <div class="blog_shortdetails_card">
                                    <h4 class="shortdetails_title">
                                        {{ $video->getTranslatedAttribute('name', app()->getLocale()) }}</h4>
                                    <p class="mb-0 shortdetails_text small2">
                                        {{ $video->getTranslatedAttribute('short_desc', app()->getLocale()) }}</p>
                                </div>
                                <div class="card-footer small">
                                    <div class="">
                                        <h4 class="blog_addtime">
                                            {{ $video->created_at->format('F j, Y') }}
                                        </h4>
                                    </div>

                                    <a class="readmore ml-auto" href="{{ $video->slug }}">
                                        Play Video&nbsp;&gt;
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-outline-primary btn-lg w-100">@lang('Load More')</button>
                    </div>
                </div>
            </div>
    </section>
@endsection
