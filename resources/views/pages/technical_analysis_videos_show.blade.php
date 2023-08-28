@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/technical_analysis_videos.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Technical Analysis Videos')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>
                        {{ $video->getTranslatedAttribute('short_desc', app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container p-5">
        <div class="row g-4">
            <div class="col-md-9">
                <h2>
                    {{ $video->getTranslatedAttribute('name', app()->getLocale()) }}
                </h2>
                <div class="pt-5 pb-5">
                    <iframe width="100%" height="420" src="https://www.youtube.com/embed/{{ $video->youtube_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div>
                    {!! $video->getTranslatedAttribute('content', app()->getLocale()) !!}
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection
