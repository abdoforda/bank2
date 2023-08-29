@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/carrers.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Find your suitable position')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('Once you become a member of TradeLive AI Investment LLC team, you will be lucky to work among cooperative and dynamic environment that inspires ambitions and development. We are committed to provide our employees with the necessary tools and resources to play their roles efficiently and to achieve success in their distinguished careers.')</p>
            </div>
        </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h2 class="text-center">@lang('Search for your role among our vacant positions:') </h2>
            <div class="row justify-content-center align-items-center g-2">

                <div class="col-md-4 fixpad">
                    <div class="vacancy-box">
                        <a href="{{ route('support') }}">
                            <h4 class="vacancy-box__title">@lang('Financial Analyst')</h4>
                            <span class="vacancy-box__location d-block">@lang('Cyprus, Ypsonas')</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 fixpad">
                    <div class="vacancy-box">
                        <a href="{{ route('support') }}">
                            <h4 class="vacancy-box__title">@lang('Customer Service Representative')</h4>
                            <span class="vacancy-box__location d-block">@lang('Cyprus, Ypsonas')</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 fixpad">
                    <div class="vacancy-box">
                        <a href="{{ route('support') }}">
                            <h4 class="vacancy-box__title">@lang('Marketing Specialist')</h4>
                            <span class="vacancy-box__location d-block">@lang('Cyprus, Ypsonas')</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 fixpad">
                    <div class="vacancy-box">
                        <a href="{{ route('support') }}">
                            <h4 class="vacancy-box__title">@lang('Sales Manager')</h4>
                            <span class="vacancy-box__location d-block">@lang('Cyprus, Ypsonas')</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 fixpad">
                    <div class="vacancy-box">
                        <a href="{{ route('support') }}">
                            <h4 class="vacancy-box__title">@lang('Business analyst')</h4>
                            <span class="vacancy-box__location d-block">@lang('Cyprus, Ypsonas')</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 fixpad">
                    <div class="vacancy-box">
                        <a href="{{ route('support') }}">
                            <h4 class="vacancy-box__title">@lang('Software Developer')</h4>
                            <span class="vacancy-box__location d-block">@lang('Cyprus, Ypsonas')</span>
                        </a>
                    </div>
                </div>
                

            </div>
        </div>
    </section>

    
    <section>
        <div class="container">
            <div class="mb-5">
                <h4 class="h1">@lang('Diligence at TradeLive AI Investment LLC:') </h4>
                <p class="lead-in margin-bottom-40">@lang('Many of TradeLive AI Investment LLC  employees are working with the firm for at least half of its 14-year history and they are committed to the major principles of TradeLive AI Investment LLC.')</p>
            </div>
            <div class="row  g-3">
                <div class="col-md-6">
                    <span class="border-start border-primary border-5 ps-3 fw-bold fs-5" style="display: table;">
                        @lang('Our commitment to employee improvement:')
                    </span>
                    <p class="mt-3 lead fs-6">
                        @lang('TradeLive AI Investment LLC is committed to the professional development and the improvement of its employees. The company provides training, guidance, and career enhancement to help its staff build prominent careers in  trading industry.')
                    </p>
                </div>
                <div class="col-md-6">
                    <span class="border-start border-primary border-5 ps-3 fw-bold fs-5">
                        @lang('Focus on Client Satisfaction:')
                    </span>
                    <p class="mt-3 lead fs-6">@lang('TradeLive AI Investment LLC places strong emphasis on providing exceptional services to its clients. The company strives to meet and exceed their expectations by offering customized solutions and technical')</p>
                </div>
            </div>
        </div>
    </section>
@endsection
