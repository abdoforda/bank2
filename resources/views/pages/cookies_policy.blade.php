@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/fix_api.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('COOKIES POLICY')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('By continuing to use our website, you acknowledge and accept our use of cookies as outlined in this Cookies Policy. We may update this policy from time to time, so we encourage you to review it periodically.') </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pt-5 pb-5">

        <div class="container">
            <h2>@lang('What are Cookies?')</h2>
            <p class="leac">@lang('Cookies are small text files that are placed on your device (computer, tablet, or mobile) when you visit a website. They are used to store information about your browsing activities and preferences. Cookies enable websites to remember your actions and settings, such as login details, language preferences, and personalized content, to enhance your browsing experience.')</p>
            <br>
            <h2>@lang('Our Cookies Policy')</h2>
            <p class="leac">@lang('At TradeLive AI Investment LLC, we use cookies to improve the functionality and performance of our website, as well as to provide personalized content and advertisements. By using our website, you consent to the use of cookies as outlined in this policy.')</p>
            <br>
            <h4>@lang('We use different types of cookies, including:')</h4>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead style="background: #246ab4; color: #fff;">
                        <tr>
                            <th class="text-center hide_in_mobile" style="min-width: 220px;"><b>@lang('Type of cookie')</b></th>
                            <th><b>@lang('Function')</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center hide_in_mobile" style="line-height: 48px;">@lang('Strictly Necessary Cookies')</td>
                            <td>
                                <strong class="show_in_mobile" style="margin-bottom: 8px;">@lang('Strictly Necessary Cookies')</strong>
                                @lang('These cookies are essential for the operation of our website. They enable basic functions such as page navigation, secure login, and access to certain areas of the site. Without these cookies, the website may not function properly.')</td>
                        </tr>
                        <tr>
                            <td class="text-center hide_in_mobile" style="line-height: 48px;">@lang('Performance Cookies')</td>
                            <td><strong class="show_in_mobile" style="margin-bottom: 8px;">@lang('Performance Cookies')</strong>@lang('These cookies collect anonymous information about how visitors use our website. They help us analyze website traffic, identify popular pages, and improve the overall user experience. The data collected is aggregated and does not personally identify individuals.')</td>
                        </tr>
                        <tr>
                            <td class="text-center hide_in_mobile" style="line-height: 48px;">@lang('Functionality Cookies')</td>
                            <td><strong class="show_in_mobile" style="margin-bottom: 8px;">@lang('Functionality Cookies')</strong>@lang('These cookies allow our website to remember your preferences and provide enhanced features. For example, they can remember your language preference or customization settings, making your browsing experience more convenient.')</td>
                        </tr>
                        <tr>
                            <td class="text-center hide_in_mobile" style="line-height: 48px;">@lang('Advertising Cookies')</td>
                            <td><strong class="show_in_mobile" style="margin-bottom: 8px;">@lang('Advertising Cookies')</strong>@lang('We may use advertising cookies to deliver targeted advertisements based on your interests and browsing behavior. These cookies track your visits to our website and other websites, allowing us to display relevant ads. They are used by third-party advertisers and ad networks.')</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="lead mt-4">@lang('You have the option to manage cookies through your browser settings. You can choose to accept or reject cookies, delete existing cookies, or receive a notification when cookies are being used. However, please note that disabling certain cookies may impact the functionality and performance of our website.')</p>

            <p class="lead mt-1">@lang('By continuing to use our website, you acknowledge that you have read and understood our Cookies Policy and consent to the use of cookies as described herein.')</p>
        </div>
    </div>

    <style>
        @media (min-width: 1200px){
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1240px;
}}
    </style>

@endsection
