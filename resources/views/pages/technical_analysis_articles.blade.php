@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center"
        style="--img: url(/images/new_images/pages/technical_analysis_videos.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Technical Analysis Articles') 
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('Explore our range of informative articles on technical analysis. Expand your knowledge and understanding of different analysis techniques and strategies that can help improve your trading decisions.') </p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-md-8 order-5">


                    <div class="youtube_video_result">
                        <iframe width="100%" height="440" src="https://www.youtube.com/embed/zTBWxeZ34Lw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    
                    <h4 class="mt-4 hr">
                        @lang('Lesson') 4.2 <br>
                        @lang('Chart Construction') 
                    </h4>

                    <p class="mt-3">
                        @lang('In this video we will explain about different ways to view price charts and elaborate on what constitutes them. Viewers can thus become familiar with how to read different chart types such as line charts, bar charts and candlestick charts, and will learn how they can interpret market data and information essential for their trades.') 
                    </p>
                </div>
                <div class="col-md-4 order-1">

                    <section class="p-0">
                        <div class="container">

                            @foreach ($cats as $index => $item)
                                <div class="ask_div @if ($index % 2) ask_div2 @endif  p-3 mt-2">
                                    <a class="ask_click" data-bs-toggle="collapse" href="#tab{{ $index }}"
                                        role="button" aria-expanded="false" aria-controls="tab{{ $index }}">
                                        {{ $item->getTranslatedAttribute('name', app()->getLocale()) }}
                                    </a>
                                    <div class="collapse multi-collapse" id="tab{{ $index }}">
                                        <div class="p-3 pb-0">
                                            <ul class="ftr-faq list_title_video small m-0 p-0">
                                                @foreach ($item->videos as $video)
                                                    <li class="ps-3" data-url="{{ $video->youtube_id }}">
                                                        {{ $video->getTranslatedAttribute('name', app()->getLocale()) }} <br>
                                                        <span>
                                                            {{ $video->getTranslatedAttribute('desc', app()->getLocale()) }}
                                                        </span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection


