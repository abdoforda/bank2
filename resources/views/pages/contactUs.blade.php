@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/contactUs.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Contact Us')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('We welcome all inquiries and feedback from our clients and visitors. If you have any questions about our services, want to learn more about our investment opportunities, or need assistance with your account, please do not hesitate to contact us. Our dedicated team is ready to assist you in any way possible.')</p>
            </div>
        </div>
        </div>
    </div>


    <section>
        <div class="container">
            <h3 class="display-5 color2">@lang('Contact Us')</h3>
            <p class="lead text-black-50">
                @lang('FOR ANY QUESTIONS OR FOR ASSISTANCE, CONTACT US DIRECTLY AT ONE OF OUR LOCAL<br>OFFICES OR AT OUR HEADQUARTERS.')
            </p>

            <div class="row mt-5 g-2">
                <div class="col-md-4">
                    <div class="float-start d-none d-md-block">
                        <img style="margin-top: -6px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSI0NCIgdmlld0JveD0iMCAwIDMwIDQ0Ij4KICA8ZGVmcz4KICAgIDxzdHlsZT4KICAgICAgLmNscy0xIHsKICAgICAgICBmaWxsOiAjOGNiYjRjOwogICAgICAgIGZpbGwtcnVsZTogZXZlbm9kZDsKICAgICAgfQogICAgPC9zdHlsZT4KICA8L2RlZnM+CiAgPHBhdGggaWQ9IkZvcm1hXzFfY29weSIgZGF0YS1uYW1lPSJGb3JtYSAxIGNvcHkiIGNsYXNzPSJjbHMtMSIgZD0iTTM3Ny4xMzgsNDE1LjY0NGE1LjYyNiw1LjYyNiwwLDEsMCw1LjQ3NSw1LjYyNEE1LjU1OSw1LjU1OSwwLDAsMCwzNzcuMTM4LDQxNS42NDRabTAsOS42NDFhNC4wMTgsNC4wMTgsMCwxLDEsMy45MTEtNC4wMTdBMy45NywzLjk3LDAsMCwxLDM3Ny4xMzgsNDI1LjI4NVptMTAuNDY4LTE0Ljc2OWExNC43MiwxNC43MiwwLDAsMC0yMS4yMTMsMGMtNS4yNDMsNS4zODQtNS44OTQsMTUuNTE1LTEuNDExLDIxLjY1NEwzNzcsNDUwbDEyLTE3LjhDMzkzLjUsNDI2LjAzMSwzOTIuODQ5LDQxNS45LDM4Ny42MDYsNDEwLjUxNlptMC4xMjUsMjAuNzRMMzc3LDQ0Ny4xNzNsLTEwLjc0OC0xNS45NDJjLTQuMDY3LTUuNTctMy40ODQtMTQuNzE5LDEuMjQ4LTE5LjU3OWExMy4xODUsMTMuMTg1LDAsMCwxLDE5LDBDMzkxLjIzMiw0MTYuNTEyLDM5MS44MTUsNDI1LjY2MSwzODcuNzMxLDQzMS4yNTZaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzYyIC00MDYpIi8+Cjwvc3ZnPgo=" >
                    </div>
                    <div class="float-start ms-4">
                        <h3 class="color1 fw-bold h4">@lang('International')</h3>
                        <strong>@lang('EF Worldwide Limited,')</strong>
                        <p>
                            @lang('CT House, Office No.8F,')<br>
                            @lang('Providence, Mahe, Seychelles')
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="float-start  d-none d-md-block">
                        <img style="margin-top: -6px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSIzMCIgdmlld0JveD0iMCAwIDQ4IDMwIj4KICA8bWV0YWRhdGE+PD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiAgIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAKPD94cGFja2V0IGVuZD0idyI/PjwvbWV0YWRhdGE+CjxkZWZzPgogICAgPHN0eWxlPgogICAgICAuY2xzLTEgewogICAgICAgIGZpbGw6ICM4ZGM3NGI7CiAgICAgICAgZmlsbC1ydWxlOiBldmVub2RkOwogICAgICB9CiAgICA8L3N0eWxlPgogIDwvZGVmcz4KICA8cGF0aCBpZD0iRm9ybWFfMSIgZGF0YS1uYW1lPSJGb3JtYSAxIiBjbGFzcz0iY2xzLTEiIGQ9Ik0xMTcxLjk5LDQxMXYzMGg0OFY0MTFoLTQ4Wm00NC4wOSwyLjAzMS0yMC4wOSwxNi4zMjgtMjAuMDgtMTYuMzI4aDQwLjE3Wm0tNDIsMjUuOTRWNDE0LjE4N0wxMTk1Ljk5LDQzMmwyMS45Mi0xNy44MTd2MjQuNzg4aC00My44M3YwWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTExNzIgLTQxMSkiLz4KPC9zdmc+Cg==" >
                    </div>
                    <div class="float-start ms-4">
                        <h3 class="color1 fw-bold h4">E-mail us</h3>
                        
                        <p class="text-black-75 small m-0 p-0" style="margin-bottom: -4px !important;">Customer Support</p>
                        <strong class="color1 small">Support@Highness.ae</strong>

                        <p class="text-black-75  mt-3 small m-0 p-0" style="margin-bottom: -4px !important;">Affiliates and IBs</p>
                        <strong class="color1 small">Affiliates@Highness.ae</strong>

                        <p class="text-black-75  mt-3 small m-0 p-0" style="margin-bottom: -4px !important;">Compliance Officer</p>
                        <strong class="color1 small">Compliance@Highness.ae</strong>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-8">
                    <div class="border rounded p-5 bg-white style_input_border_bottom">
                        <form action="#" method="POST">

                            <div class="row justify-content-center align-items-center g-4">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <textarea placeholder="Subject" style="border: 0;
                                border-bottom: 1px solid #ddd;s" class="form-control" name="message" id="message" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 ps-5">
                    <h3 class="fs-2">
                        @lang('Highness Investment LLC')
                    </h3>
                    <p class="text-black-50 mt-4">
                        <span class="text-black">@lang('Registered address:')</span>    
                    </p>
                    <a class="rf-contacts__text phone mt-3 fs-2" href="tel:+001 234 529 3543">+001 234 529 3543</a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-3">
                            <img src="https://static.vecteezy.com/system/resources/previews/011/191/869/original/chat-approved-illustration-3d-free-png.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-9 ps-2">
                            <h4 class="fw-600">@lang('Continuous customer support.')</h4>
                            <p class="text-white-50">@lang('Contact us if you have any questions or if you need any assistance. We are available 24/7.')</p>
                            <a class="rf-contacts__text phone mt-3 fs-2" href="tel:+001 234 529 3543">+001 234 529 3543</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-3">
                            <img src="https://static.vecteezy.com/system/resources/previews/020/696/287/large_2x/3d-minimal-spark-creative-ideas-innovative-and-creative-icon-spark-creative-ideas-create-better-ideas-lightbulb-and-message-icon-with-copy-space-3d-illustration-png.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-9 ps-2">
                            <h4 class="fw-600">@lang('Inquire about something.')</h4>
                            <p class="text-white-50">@lang("Also, the Company's personnel can be reached through the online chat feature or the ticket system available in your Members Area.")</p>
                            <a class="rf-contacts__text phone mt-3 fs-2" href="tel:+20 1124 607159">&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.address')
    
@endsection
