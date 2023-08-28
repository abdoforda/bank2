@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/mision.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Mission')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang("Highness' mission is to provide the traders a reliable, transparent, and secure trading environment so they can achieve their financial objectives. In order to satisfy our customers' changing needs, we work hard to provide the best services and products. By offering outstanding customer service and education, we are dedicated to create long-lasting relationships with our clients. We have been committed to developing a culture of excellence and ethics.")</p>
            </div>
        </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h3>
                @lang('Our employees at Highness Investment LLC are committed to the following three ethical values:')
            </h3>

            <div class="mt-5 row justify-content-center align-items-center g-2">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-2 col-md-1">
                            <img src="/images/new_images/icons/Client comes first 3.png"
                                alt="" class="img-fluid" style="max-height: 70px;">
                        </div>
                        <div class="col-10 col-md-11 ps-4">
                            <h4 class="fw-600">@lang('Client comes first')</h4>
                            <p>@lang('We put the needs of our clients first, and we demonstrate this by providing profound knowledge, close attention to detail, and accurate follow-up  to all our interactions.')</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-2 col-md-1">
                            <img src="/images/new_images/icons/Integrity 3.png"
                                alt="" class="img-fluid" style="max-height: 70px;">
                        </div>
                        <div class="col-10 col-md-11 ps-4">
                            <h4 class="fw-600">@lang('Integrity')</h4>
                            <p>@lang('We work with honesty and transparency in all aspects of our business. We are committed to the highest ethical standards.')</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-2 col-md-1">
                            <img src="/images/new_images/icons/agility 3.png"
                                alt="" class="img-fluid" style="max-height: 70px;">
                        </div>
                        <div class="col-10 col-md-11 ps-4">
                            <h4 class="fw-600">@lang('Agility')</h4>
                            <p>@lang("We quickly adapt to the shifting market conditions and client needs to make sure we're constantly providing the highest services.")</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section style="background: #4848485e;">
        <div class="container">
            <div>

                <h4 class="display-5 fw-600">
                    @lang('Our Purpose')
                </h4>
                <p class="fs-5">@lang('Highness Investment LLC Purpose is Every call, click, or tap is done with the intention of partnering with FX and CFD traders.')</p>
            </div>

            <div class="mt-5">

                <h4 class="display-5 fw-600">
                    @lang('Our strategy')
                </h4>
                <p class="fs-5">
                    @lang('Highness Investment LLC strategy is built to to be dedicated to this goal by making constant adjustments to meet their needs.')
                </p>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <h3 class="display-4">
                    @lang('Life at Highness Investment LLC')
                </h3>
                <p class="fs-5 mt-4">@lang('Many of employees of Highness Investment LLC have worked with Highness Investment LLC for at least half of our 14-year history and they adopt and share the four major values that demonstrate our business.')</p>
            </div>
            <div class="mt-5 item-vision">
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-md-6">
                        <h4 class="fw-600">
                            @lang('Diversified cultures')
                        </h4>
                        <p class="fs-6">
                            @lang('Our belief in diversity enriches our global team with fresh perspectives, collaborative solutions, and unconventional thinking.')
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h4 class="fw-600">
                            @lang('Resilient team')
                        </h4>
                        <p class="fs-6">
                            @lang('Our team members are resilient and adaptable, and they definitely able to overcome any challenge.')
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h4 class="fw-600">
                            @lang('Transparency')
                        </h4>
                        <p class="fs-6">
                            @lang('We operate with transparency in all aspects of our business to gain and sustain the trust of our clients and stakeholders.')
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="fw-600">
                            @lang('Competence Wins')
                        </h4>
                        <p class="fs-6">
                            @lang('We believe that the best ideas and solutions come from those who demonstrate skills and gained higher positions through hard work and merit.')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
