@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/fix_api.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('PRIVACY POLICY')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('At TradeLive AI Investment LLC, we understand the importance of collecting personal information to effectively provide our clients and prospective clients with our products and services. This enables us to meet their specific needs and deliver relevant information to enhance their experience with us.') </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pt-5 pb-5">

        <div class="container cht03">
            
            <h2>@lang('Introduction:')</h2>
            <p class="leac">@lang('At TradeLive AI Investment LLC, we are committed to protecting your privacy and safeguarding your personal information. This Privacy Policy explains how we collect, use, and protect your personal information when you use our services and visit our website. By accessing and using our services, you consent to the terms outlined in this Privacy Policy.')</p>
            <br>

            <h2>@lang('Who are we?')</h2>
            <p class="leac">@lang('TradeLive AI Investment LLC is a financial services company specializing in investment management. Our registered address is [address]. As a data controller, we are responsible for the collection and processing of your personal information in accordance with applicable data protection laws.')</p>
            <br>
            
            <h2>@lang('Personal information we collect:')</h2>
            <p class="leac">@lang('We may collect various types of personal information from you, including but not limited to your name, contact details, financial information, and other relevant data necessary for providing our services. We collect this information through various means, including when you fill out forms, interact with our website, or communicate with us.')</p>
            <br>

            <h2>@lang('Who may we disclose personal information to?')</h2>
            <p class="leac">@lang('We may disclose your personal information to trusted third parties who assist us in providing our services. These may include our affiliates, service providers, regulatory authorities, or other parties as required by law. We take appropriate measures to ensure the security and confidentiality of your personal information when sharing it with third parties.')</p>
            <br>

            <h2>@lang('When and how do we obtain your consent?')</h2>
            <p class="leac">@lang('By providing your personal information to us, you consent to its collection, use, and disclosure as outlined in this Privacy Policy. We obtain your consent either explicitly, such as through consent checkboxes, or implicitly when you provide us with your personal information voluntarily.')</p>
            <br>

            <h2>@lang('Transfers outside of the European Economic Area (EEA):')</h2>
            <p class="leac">@lang('In some cases, your personal information may be transferred and stored outside the EEA. We take appropriate safeguards to ensure that such transfers comply with applicable data protection laws and provide adequate protection for your personal information.')</p>
            <br>

            <h2>@lang('Cookies:')</h2>
            <p class="leac">@lang('Our website may use cookies and similar technologies to enhance your browsing experience. These technologies collect certain information about your browsing activities. By using our website, you consent to the use of cookies as described in our Cookies Policy.')</p>
            <br>

            <h2>@lang('Legal Disclaimer:')</h2>
            <p class="leac">@lang('The information provided on our website is for general informational purposes only. It does not constitute financial advice or an offer to buy or sell any securities. We recommend consulting a qualified financial advisor before making any investment decisions.')</p>
            <br>

            <h2>@lang('Changes in this Privacy Policy:')</h2>
            <p class="leac">@lang('We may update or modify this Privacy Policy from time to time. Any changes will be posted on our website, and it is your responsibility to review this Privacy Policy periodically.')</p>
            <br>

            <h2>@lang('If you have a complaint:')</h2>
            <p class="leac">@lang('If you have any concerns or complaints regarding the handling of your personal information, please contact us. We will promptly investigate and address your concerns in accordance with applicable data protection laws.')</p>
            <br>

            <p>@lang('If you have any questions or require further information about our Privacy Policy, please contact our customer support team.')</p>
            
        </div>
    </div>

    <style>

        .cht03 h2{
            color: #246ab4;
        font-weight: 700;
        }
    </style>

@endsection
