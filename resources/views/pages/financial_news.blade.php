@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/financial_news.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Financial News')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('Stay updated with the latest financial news. Access timely and relevant information on market trends, economic indicators, and global events that can impact your trading decisions.') </p>
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
                <div class="col-md-8 position-relative">
                    <img class="d-none d-md-block" src="/images/new_images/sections/d-1.webp"
                        style="position: absolute;
    top: 0%;
    right: 0;
    left: 0;
    transform: translateY(-50%);" />
                </div>
            </div>
        </div>
    </section>

    <section>

        <div>
            <div class="container">
                <div class="row justify-content-center align-items-center gy-0 gx-3 news-box">

                    @php
                        $news = App\FinancialNews::paginate(15);
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

                    <div class="col-12 pb-3">
                        {{ $news->links() }}
                    </div>

                </div>
            </div>
    </section>
@endsection
