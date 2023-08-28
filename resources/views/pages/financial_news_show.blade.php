@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/financial_news.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Financial News')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>
                        {{ $new->getTranslatedAttribute('short_desc', app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container p-5">
        <div class="row g-4">
            <div class="col-md-9">
                <h2>
                    {{ $new->getTranslatedAttribute('name', app()->getLocale()) }}
                </h2>
                <img src="{{ Voyager::image($new->image) }}" class="img-fluid rounded-top mt-2 mb-5" alt="">
                <div>
                    {!! $new->getTranslatedAttribute('content', app()->getLocale()) !!}
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection
