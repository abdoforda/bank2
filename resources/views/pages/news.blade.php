@extends('layouts.app')

@php
    $news = App\News::paginate(15);
@endphp

@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center"
     style="--img: url(/images/new_images/pages/news.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('TradeLive AI News')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>
                        @lang('Be updated about all relevant market news and company updates in one spot. Stay up-to-date about our latest news, releases, recognitions, events, and promotions, market alerts, and much more.')
                    </p>
                </div>
            </div>
        </div>
    </div>



    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-lg-8 pr-lg-1">
                    <div class="trading_blog_block latestblog_first1 company-news">
                        <div class="range_trading_icon">

                            <img src="{{ Voyager::image($news[0]->image) }}" class="img-fluid">
                        </div>
                        <div class="latest_blog_text_sec">
                            <h3 class="latest_blog_title_recent">{{ $news[0]->getTranslatedAttribute('name', app()->getLocale()) }}</h3>
                            <p class="small2">
                                {{ getWordFromString(strip_tags($news[0]->getTranslatedAttribute('short_desc', app()->getLocale())), 30) }}
                            </p>
                            <div class="latestfist_blog_details">
                                <div class="blog-author">
                                    <div class="blog-timedetails">
                                        <h4 class="blog_addtime small2">
                                            <span>
                                                &nbsp;
                                                {{ $news[0]->created_at->diffForHumans() }}
                                            </span>
                                            <a class="readmore small2"
                                                href="{{ $news[0]->slug }}">
                                                @lang('Read More')&nbsp;&gt;
                                            </a>
                                        </h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-none d-lg-block ">
                        <div class="height454">
                            <a class="twitter-timeline" href="https://twitter.com/TradeLive AIar?ref_src=twsrc%5Etfw">
                                @lang('Tweets By Highnees')
                            </a>
                        </div>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </section>

    <div>
        <div class="container">
            <div class="row justify-content-center align-items-center gy-0 gx-3 news-box">

            
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

            <div class="col-12 pb-3">
                {{ $news->links() }}
            </div>

            </div>
        </div>
    </div>
@endsection
