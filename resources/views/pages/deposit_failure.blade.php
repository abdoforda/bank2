@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/about.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold">@lang('Deposit')</div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>
                        @lang('')
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-color-light">
        <div class="container content">
            <div class="col-md-12 text-align-c768 m-b-20">
                <div class="alert alert-danger " role="alert">
                    <strong>Error</strong> Payment declined
                </div>
                
            </div>
        </div>
    </div>
@endsection
