@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/webinars.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold mt-4" style="letter-spacing: 4px;">
                @lang('Webinars')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p class="lead">
                        @lang('Webinars are interactive online seminars conducted by TradeLive AI Investment LLC experts, covering various topics such as trading strategies, market analysis, and risk management. These webinars provide valuable insights and educational resources to help traders enhance their knowledge and skills in the financial markets.')
                    </p>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-md-7">
                        <h3 class="h5 mb-4">
                            @lang('Drawing from decades of expertise in analyzing the financial markets, TradeLive AI Investment LLC brings you the assimilated knowledge and skills gained over')
                        </h3>
                        <p class="m-0 mt-1">@lang('20 years of experience as an analyst, professional trader, and money manager.')</p>
                        <p class="m-0 mt-1">@lang('Our specialists excel in FX, equities, indexes, and stocks analysis,') <br>
                            @lang('providing dedicated support in trading psychology, strategy, and risk management.')</p>
                    </div>
                    <div class="col-md-5 p-4">
                        <div class="form-signup p-2 rounded" style="background-color: rgb(68 68 68 / 31%); margin-top: 0;">
                            <h6 class="text-center text-uppercase fw-normal text-white m-2">@lang('Create Account')</h6>
                            <div class="mb-3">
                                <div class="container-fluid">
                                    <div class="row m-0">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="{{ __('First Name') }}">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="{{ __('Last Name') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="container-fluid">
                                    <div class="row m-0">
                                        <div class="col">
                                            <input type="email" class="form-control" placeholder="{{ __('Email') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="container-fluid">
                                    <div class="row m-0">
                                        <div class="col-4">
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected>+20</option>
                                                <option value="1">+669</option>
                                                <option value="2">+221</option>
                                                <option value="3">+1</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input type="phone" class="form-control" placeholder="{{__('Phone')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="container-fluid">
                                    <div class="row m-0">
                                        <div class="col">
                                            <input type="password" class="form-control" placeholder="{{__('Create Password')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="container">
                                    <div class="row m-0">
                                        <div class="col d-grid gap-2">
                                            <button type="button" style="width: 80%; margin: auto;"
                                                class="btn btn-primary rounded-pill">
                                                @lang('Create Account')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
    </section>

    
    <section>
        <div>
            <div class="container">
                <center>
                    <h3>
                        @lang('Access our webinars at your convenience.')
                    </h3>
                    <p>
                        @lang("If you missed a live webinar, don't worry! We have recorded sessions available for you to watch at your convenience and continue your learning. Take advantage of the TradeLive AI Referral Marathon Contest, which has commenced for our valued partners.")
                    </p>
                </center>
                <div class="row justify-content-center align-items-center gy-0 gx-3 news-box">
    
                    @php
                        $videos = App\Video::latest()->paginate(6);
                    @endphp
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

                </div>
            </div>
        </section>


        
    <section>
        <div>
            <div class="container">
                <center>
                    <h3>
                        @lang('Here are some articles we believe will interest you.') 
                    </h3>
                    <p>
                        @lang('We have curated a selection of articles for you based on your visit to this page. Take a look and delve deeper into the topics that interest you.') 
                    </p>
                </center>

                <div class="row justify-content-center align-items-center gy-0 gx-3 news-box">

                    @php
                        $news = App\News::latest()->paginate(6);
                    @endphp

@foreach ($news as $item)
<div class="col-md-4">
    <div class="blog_detail_card">
        <a href="{{ $item->slug }}">
        <div class="blog_detail_image">
            <img data-src="{{ Voyager::image($item->image) }}"
                alt="Highnees Referral Marathon Contest has begun for Partners" class="img-fluid"
                src="{{ Voyager::image($item->image) }}">
        </div>
    </a>
        <div class="blog_shortdetails_card">
            <a href="{{ $item->slug }}"><h4 class="shortdetails_title">{{ $item->getTranslatedAttribute('name', app()->getLocale()) }}</h4></a>
            <p class="mb-0 shortdetails_text small2">
                {{ getWordFromString(strip_tags($item->getTranslatedAttribute('short_desc', app()->getLocale())), 20) }}
            </p>
        </div>
        <div class="card-footer small">
            <div class="">
                <h4 class="blog_addtime">
                    {{ $item->created_at->diffForHumans() }}
                </h4>
            </div>

            <a class="readmore ml-auto" href="{{ $item->slug }}">
                @lang('Read More')&nbsp;&gt;
            </a>

        </div>
    </div>
</div>
@endforeach

                </div>

            </div>
        </div>
    </section>


@endsection
