@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/forex.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Support')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('At TradeLive ai, we pride ourselves on providing excellent customer support to our clients. We understand that trading on financial markets can be a challenging experience, and we are always here to help our clients with any questions or issues they may encounter.')</p>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-g">
        <div class="container">
            <h3 class="text-center h1">
                @lang('Contact us')
            </h3>
            <form class="form ajax_form_support" method="POST" 
            action="{{ route('supportPost', app()->getLocale()) }}">
                @csrf
            <div class="row mt-4 justify-content-center  g-3">
                
                    <div  iv class="col-md-4">
                        <div>
                            <div class="mb-3">
                                <input type="text"
                                class="form-control" name="name" id="" placeholder="{{ __('Your Name') }}">
                            </div>
                            <div class="mb-3">
                                <input type="email"
                                class="form-control" name="email" id="" placeholder="email@example.com">
                            </div>
                            <div class="mb-3">
                                <div class="row m-0 rowc">
                                    <div class="col-4">
                                        @php
                                            $array = getCode();
                                            $phoneCodes = $array['phoneCodes'];
                                            $countryCode = $array['countryCode'];
                                        @endphp
                                        <select name="code" class="form-select" id="inputGroupSelect01" style="padding: 14px; border-radius: 7px 0px 0px 7px; border-right: 0; border: 1px solid #ededed;">
                                            @foreach ($phoneCodes as $key => $p)
                                            <option value="{{ $p }}" @if ($countryCode == $key)
                                                selected
                                            @endif >+{{ $p }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-8">
                                        <input type="phone" name="phone" class="form-control" placeholder="{{ __('Phone') }}" style="padding: 14px; border-radius: 0px 7px 7px 0px">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row m-0 rowc">
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6Ld1RmwmAAAAAOqrIIuWJfRfIgYZBL1cKo81kaMg"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <div class="mb-3">
                                <select name="lang" class="form-select form-select"  style="padding: 14px">
                                    <option  selected value="" disabled>@lang('Prefered language')</option>
                                    <option value="English"> English</option>
                                    <option value="Arabic"> Arabic</option>
                                    <option value="Melayu"> Melayu</option>
                                    <option value="Türkçe">Türkçe</option>
                                    <option value="繁體中文"> 繁體中文</option>
                                    
                                  </select>
                            </div>
                            <div class="mb-3">
                                <input type="text"
                                class="form-control" name="city" id="" placeholder="{{__('Comments / City / Time Zone')}}">
                            </div>

                            <div class="mb-3">
                                <div class="row m-0 rowc">
                                    <div class="col-4">
                                        <select class="form-select" name="whatsapp" id="inputGroupSelect01" style="padding: 14px; border-radius: 7px 0px 0px 7px; border-right: 0; border: 1px solid #ededed;">
                                            <option selected="">Telegram</option>
                                            <option value="1">WhatsApp</option>
                                        </select>
                                    </div>
                                    <div class="col-8">
                                        <input type="phone" class="form-control" placeholder="{{ __('Nickname') }}" style="padding: 14px; border-radius: 0px 7px 7px 0px">
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <button type="submit" class="btn" style="width: 100%; padding: 13px; background: #4848485e; color: #fff;">@lang('Submit')</button>
                            </div>
                        </div>
                    </div>
                
            </div>
        </form>
        </div>
    </section>


    <section >
        <div class="container text-center ">
            <h3 class="display-1">@lang('OR')</h3>
            <p class="display-4 text-white-50 text-center">@lang('Email support')</p>
            <div class="mt-3 row justify-content-center g-4">

                <div class="col-md-3 col-sm-6 col-12">
                    <img style=" width: 60px; " 
                    src="{{ asset('images/new_images/icons/back office.png') }}" />
                    <h5 class="fw-700 mt-2">@lang('Back Office') </h5>
                    <p class="text-white-50">backoffice@TradeLive AI.ae</p>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img style=" width: 60px; " 
                    src="{{ asset('images/new_images/icons/Funding.png') }}" />
                    <h5 class="fw-700 mt-2">@lang('Funding') </h5>
                    <p class="text-white-50">funding@TradeLive AI.ae</p>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img style=" width: 60px; " 
                    src="{{ asset('images/new_images/icons/Partner ship.png') }}" />
                    <h5 class="fw-700 mt-2">@lang('Partnerships') </h5>
                    <p class="text-white-50">partners@TradeLive AI.ae</p>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img style=" width: 60px; " 
                    src="{{ asset('images/new_images/icons/back office 2.png') }}" />
                    <h5 class="fw-700 mt-2">@lang('Customer Support') </h5>
                    <p class="text-white-50">support@TradeLive AI.ae</p>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <img style=" width: 60px; " 
                    src="{{ asset('images/new_images/icons/investment & Research.png') }}" />
                    <h5 class="fw-700 mt-2">@lang('Investment & Research') </h5>
                    <p class="text-white-50">investments@TradeLive AI.ae</p>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img style=" width: 60px; " 
                    src="{{ asset('images/new_images/icons/compliance.png') }}" />
                    <h5 class="fw-700 mt-2">@lang('Compliance') </h5>
                    <p class="text-white-50">compliance@TradeLive AI.ae</p>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img style=" width: 60px; " 
                    src="{{ asset('images/new_images/icons/Marketing.png') }}" />
                    <h5 class="fw-700 mt-2">@lang('Marketing')</h5>
                    <p class="text-white-50">marketing@TradeLive AI.ae</p>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img style=" width: 60px; " 
                    src="{{ asset('images/new_images/icons/trading.png') }}" />
                    <h5 class="fw-700 mt-2">@lang('Trading') </h5>
                    <p class="text-white-50">dealing@TradeLive AI.ae</p>
                </div>
            </div>
        </div>
    </section>


    @include('components.address')
    
    <style>
        .rowc > * {
            padding-right: 0;
            padding-left: 0;
            margin-top: 0;
        }
        .form input{
            border: 1px solid #ededed;
            padding: 14px;
        }
    </style>
@endsection

@section('scripts')
    <script>
        
        var oldSubmit = "";
        $(document).ready(function(e) {
            var forms = $(".ajax_form_support");
            $(forms).ajaxForm({
                beforeSend: function() {
                    oldSubmit = $(forms).find("[type='submit']").text();
                    removeErrors(forms);
                },
                uploadProgress: function(event, position, total, percentComplete) {},
                complete: function(data) {
                    $(forms).find("[type='submit']").text(oldSubmit).removeAttr('disabled');
                    if (data.status == 422) {
                        errors(forms, data.responseJSON);
                    }
                    if (data.status == 200) {
                        forms.html("<h3 style='text-align: center; color: #4848485e;'>{{ __('Your message has been sent We will contact you very soon') }}</h3>").hide().fadeIn();
                    }
                }
            });


        });
    </script>
@endsection
