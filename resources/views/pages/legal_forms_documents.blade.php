@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center"
        style="--img: url(/images/new_images/pages/legal_forms_documents.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Legal Forms Documents')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('TradeLive AI  provides a range of legal forms and documents to facilitate various business activities and ensure compliance with regulatory requirements. These documents are designed to protect the rights and interests of all parties involved. Some of the key legal forms and documents offered by TradeLive AI  include')</p>
            </div>
        </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h3>
                @lang('TradeLive AI  Agreement')
            </h3>
            <div class="mt-4 row justify-content-center g-2">
                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-2">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA3MC41OTQgNzYuOSIgZmlsbD0iI2NkZDJkNSI+PHBhdGggZD0iTTM1LjM3NSAxOS4yaC02LjRhMy4yIDMuMiAwIDAgMCAwIDYuNGg2LjRhMy4yIDMuMiAwIDEgMCAwLTYuNFoiLz48cGF0aCBkPSJNNjkuNjc1IDIwLjEgNTAuNDc1LjlhMy4xNjggMy4xNjggMCAwIDAtMi4zLS45aC0zMi4xYTMuMTYgMy4xNiAwIDAgMC0zLjIgMy4ydjE3LjlMLjk3NSAzMi45YTMuMDgzIDMuMDgzIDAgMCAwIDAgNC41bDExLjkgMTJ2MjQuM2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmg1MS4zYTMuMTYgMy4xNiAwIDAgMCAzLjItMy4yVjIyLjRhMi41NCAyLjU0IDAgMCAwLS45LTIuM1ptLTE4LjMtOS4yIDguMyA4LjNoLTguM1ptLTEyLjggNDYuN2gtOC4zbC0zLjItMy4yIDguMy04LjMgMy4yIDMuMlptLTcuOC0xNi04LjMgOC4zLTE0LjctMTQuNyA4LjMtOC4zWm0tNC4xIDIxLjVhMy4xNjggMy4xNjggMCAwIDAgMi4zLjloMjUuN2EzLjIgMy4yIDAgMSAwIDAtNi40aC05LjZ2LTYuNGg5LjZhMy4yIDMuMiAwIDAgMCAwLTYuNGgtMTEuNmwtNi40LTYuNGgxNy45YTMuMiAzLjIgMCAwIDAgMC02LjRoLTI0LjNsLTEwLjktMTAuOS0uMS0uMVY2LjNoMTkuMmE2LjQ0NSA2LjQ0NSAwIDAgMSA2LjQgNi40djkuN2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmgxNnY0NC45aC00NC44VjU1LjhaIi8+PC9zdmc+"
                                class="img-fluid" style="max-width: 60px" alt="">
                        </div>
                        <div class="col-10">
                            <a download href="{{ asset('storage/files/Trading Agreement 2.pdf') }}" download="TradeLive AI  Agreement.pdf">
                                <h4 class="h6 color2">@lang('TradeLive AI  Agreement')</h4>
                            </a>
                            <p class="small">@lang('As a partner or client of TradeLive AI , it is essential to review and accept the terms and conditions outlined in the agreement before conducting any business activities.')</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-2">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA3MC41OTQgNzYuOSIgZmlsbD0iI2NkZDJkNSI+PHBhdGggZD0iTTM1LjM3NSAxOS4yaC02LjRhMy4yIDMuMiAwIDAgMCAwIDYuNGg2LjRhMy4yIDMuMiAwIDEgMCAwLTYuNFoiLz48cGF0aCBkPSJNNjkuNjc1IDIwLjEgNTAuNDc1LjlhMy4xNjggMy4xNjggMCAwIDAtMi4zLS45aC0zMi4xYTMuMTYgMy4xNiAwIDAgMC0zLjIgMy4ydjE3LjlMLjk3NSAzMi45YTMuMDgzIDMuMDgzIDAgMCAwIDAgNC41bDExLjkgMTJ2MjQuM2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmg1MS4zYTMuMTYgMy4xNiAwIDAgMCAzLjItMy4yVjIyLjRhMi41NCAyLjU0IDAgMCAwLS45LTIuM1ptLTE4LjMtOS4yIDguMyA4LjNoLTguM1ptLTEyLjggNDYuN2gtOC4zbC0zLjItMy4yIDguMy04LjMgMy4yIDMuMlptLTcuOC0xNi04LjMgOC4zLTE0LjctMTQuNyA4LjMtOC4zWm0tNC4xIDIxLjVhMy4xNjggMy4xNjggMCAwIDAgMi4zLjloMjUuN2EzLjIgMy4yIDAgMSAwIDAtNi40aC05LjZ2LTYuNGg5LjZhMy4yIDMuMiAwIDAgMCAwLTYuNGgtMTEuNmwtNi40LTYuNGgxNy45YTMuMiAzLjIgMCAwIDAgMC02LjRoLTI0LjNsLTEwLjktMTAuOS0uMS0uMVY2LjNoMTkuMmE2LjQ0NSA2LjQ0NSAwIDAgMSA2LjQgNi40djkuN2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmgxNnY0NC45aC00NC44VjU1LjhaIi8+PC9zdmc+"
                                class="img-fluid" style="max-width: 60px" alt="">
                        </div>
                        <div class="col-10">
                            <a href="{{ asset('storage/files/Trading Conditions.pdf') }}" download="Preventing illegal financial activities.pdf">
                                <h4 class="h6 color2">@lang('Preventing illegal financial activities')</h4>
                            </a>
                            <p class="small">@lang('TradeLive AI  adheres to strict guidelines and regulations to prevent any involvement in illegal financial activities. These measures are in place to ensure the integrity and legality of all transactions.')</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-2">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA3MC41OTQgNzYuOSIgZmlsbD0iI2NkZDJkNSI+PHBhdGggZD0iTTM1LjM3NSAxOS4yaC02LjRhMy4yIDMuMiAwIDAgMCAwIDYuNGg2LjRhMy4yIDMuMiAwIDEgMCAwLTYuNFoiLz48cGF0aCBkPSJNNjkuNjc1IDIwLjEgNTAuNDc1LjlhMy4xNjggMy4xNjggMCAwIDAtMi4zLS45aC0zMi4xYTMuMTYgMy4xNiAwIDAgMC0zLjIgMy4ydjE3LjlMLjk3NSAzMi45YTMuMDgzIDMuMDgzIDAgMCAwIDAgNC41bDExLjkgMTJ2MjQuM2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmg1MS4zYTMuMTYgMy4xNiAwIDAgMCAzLjItMy4yVjIyLjRhMi41NCAyLjU0IDAgMCAwLS45LTIuM1ptLTE4LjMtOS4yIDguMyA4LjNoLTguM1ptLTEyLjggNDYuN2gtOC4zbC0zLjItMy4yIDguMy04LjMgMy4yIDMuMlptLTcuOC0xNi04LjMgOC4zLTE0LjctMTQuNyA4LjMtOC4zWm0tNC4xIDIxLjVhMy4xNjggMy4xNjggMCAwIDAgMi4zLjloMjUuN2EzLjIgMy4yIDAgMSAwIDAtNi40aC05LjZ2LTYuNGg5LjZhMy4yIDMuMiAwIDAgMCAwLTYuNGgtMTEuNmwtNi40LTYuNGgxNy45YTMuMiAzLjIgMCAwIDAgMC02LjRoLTI0LjNsLTEwLjktMTAuOS0uMS0uMVY2LjNoMTkuMmE2LjQ0NSA2LjQ0NSAwIDAgMSA2LjQgNi40djkuN2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmgxNnY0NC45aC00NC44VjU1LjhaIi8+PC9zdmc+"
                                class="img-fluid" style="max-width: 60px" alt="">
                        </div>
                        <div class="col-10">
                            <a href="{{ asset('storage/files/KYC Corporate TradeLive AI  - to view.pdf') }}" download="KYC Corporate TradeLive AI .pdf">
                                <h4 class="h6 color2">@lang('KYC Corporate TradeLive AI ')</h4>
                            </a>
                            <p class="small">@lang('For corporate clients, TradeLive AI  follows a Know Your Customer (KYC) process to verify the identity and legitimacy of the corporate entity. This process ensures compliance with regulatory requirements and helps maintain the security and transparency of financial transactions.')</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-2">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA3MC41OTQgNzYuOSIgZmlsbD0iI2NkZDJkNSI+PHBhdGggZD0iTTM1LjM3NSAxOS4yaC02LjRhMy4yIDMuMiAwIDAgMCAwIDYuNGg2LjRhMy4yIDMuMiAwIDEgMCAwLTYuNFoiLz48cGF0aCBkPSJNNjkuNjc1IDIwLjEgNTAuNDc1LjlhMy4xNjggMy4xNjggMCAwIDAtMi4zLS45aC0zMi4xYTMuMTYgMy4xNiAwIDAgMC0zLjIgMy4ydjE3LjlMLjk3NSAzMi45YTMuMDgzIDMuMDgzIDAgMCAwIDAgNC41bDExLjkgMTJ2MjQuM2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmg1MS4zYTMuMTYgMy4xNiAwIDAgMCAzLjItMy4yVjIyLjRhMi41NCAyLjU0IDAgMCAwLS45LTIuM1ptLTE4LjMtOS4yIDguMyA4LjNoLTguM1ptLTEyLjggNDYuN2gtOC4zbC0zLjItMy4yIDguMy04LjMgMy4yIDMuMlptLTcuOC0xNi04LjMgOC4zLTE0LjctMTQuNyA4LjMtOC4zWm0tNC4xIDIxLjVhMy4xNjggMy4xNjggMCAwIDAgMi4zLjloMjUuN2EzLjIgMy4yIDAgMSAwIDAtNi40aC05LjZ2LTYuNGg5LjZhMy4yIDMuMiAwIDAgMCAwLTYuNGgtMTEuNmwtNi40LTYuNGgxNy45YTMuMiAzLjIgMCAwIDAgMC02LjRoLTI0LjNsLTEwLjktMTAuOS0uMS0uMVY2LjNoMTkuMmE2LjQ0NSA2LjQ0NSAwIDAgMSA2LjQgNi40djkuN2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmgxNnY0NC45aC00NC44VjU1LjhaIi8+PC9zdmc+"
                                class="img-fluid" style="max-width: 60px" alt="">
                        </div>
                        <div class="col-10">
                            <a href="{{ asset('storage/files/KYC REQUIREMENTS  (1).pdf') }}" download="KYC Requirements.pdf">
                                <h4 class="h6 color2">@lang('KYC Requirements')</h4>
                            </a>
                            <p class="small">@lang('The KYC requirements set forth by TradeLive AI  outline the necessary documentation and information that clients and partners need to provide in order to comply with regulatory obligations. These requirements are aimed at preventing fraudulent activities and maintaining the highest standards of due diligence.')</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-2">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA3MC41OTQgNzYuOSIgZmlsbD0iI2NkZDJkNSI+PHBhdGggZD0iTTM1LjM3NSAxOS4yaC02LjRhMy4yIDMuMiAwIDAgMCAwIDYuNGg2LjRhMy4yIDMuMiAwIDEgMCAwLTYuNFoiLz48cGF0aCBkPSJNNjkuNjc1IDIwLjEgNTAuNDc1LjlhMy4xNjggMy4xNjggMCAwIDAtMi4zLS45aC0zMi4xYTMuMTYgMy4xNiAwIDAgMC0zLjIgMy4ydjE3LjlMLjk3NSAzMi45YTMuMDgzIDMuMDgzIDAgMCAwIDAgNC41bDExLjkgMTJ2MjQuM2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmg1MS4zYTMuMTYgMy4xNiAwIDAgMCAzLjItMy4yVjIyLjRhMi41NCAyLjU0IDAgMCAwLS45LTIuM1ptLTE4LjMtOS4yIDguMyA4LjNoLTguM1ptLTEyLjggNDYuN2gtOC4zbC0zLjItMy4yIDguMy04LjMgMy4yIDMuMlptLTcuOC0xNi04LjMgOC4zLTE0LjctMTQuNyA4LjMtOC4zWm0tNC4xIDIxLjVhMy4xNjggMy4xNjggMCAwIDAgMi4zLjloMjUuN2EzLjIgMy4yIDAgMSAwIDAtNi40aC05LjZ2LTYuNGg5LjZhMy4yIDMuMiAwIDAgMCAwLTYuNGgtMTEuNmwtNi40LTYuNGgxNy45YTMuMiAzLjIgMCAwIDAgMC02LjRoLTI0LjNsLTEwLjktMTAuOS0uMS0uMVY2LjNoMTkuMmE2LjQ0NSA2LjQ0NSAwIDAgMSA2LjQgNi40djkuN2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmgxNnY0NC45aC00NC44VjU1LjhaIi8+PC9zdmc+"
                                class="img-fluid" style="max-width: 60px" alt="">
                        </div>
                        <div class="col-10">
                            <a href="{{ asset('storage/files/High Risk Investment Warning.pdf') }}" download="Risk warning.pdf">
                                <h4 class="h6 color2">@lang('Risk warning')</h4>
                            </a>
                            <p class="small">@lang('Trading and investing in financial markets involve inherent risks. It is important to understand and acknowledge these risks before engaging in any trading activities with TradeLive AI . The risk warning provides detailed information about the potential risks involved.')</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-2">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA3MC41OTQgNzYuOSIgZmlsbD0iI2NkZDJkNSI+PHBhdGggZD0iTTM1LjM3NSAxOS4yaC02LjRhMy4yIDMuMiAwIDAgMCAwIDYuNGg2LjRhMy4yIDMuMiAwIDEgMCAwLTYuNFoiLz48cGF0aCBkPSJNNjkuNjc1IDIwLjEgNTAuNDc1LjlhMy4xNjggMy4xNjggMCAwIDAtMi4zLS45aC0zMi4xYTMuMTYgMy4xNiAwIDAgMC0zLjIgMy4ydjE3LjlMLjk3NSAzMi45YTMuMDgzIDMuMDgzIDAgMCAwIDAgNC41bDExLjkgMTJ2MjQuM2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmg1MS4zYTMuMTYgMy4xNiAwIDAgMCAzLjItMy4yVjIyLjRhMi41NCAyLjU0IDAgMCAwLS45LTIuM1ptLTE4LjMtOS4yIDguMyA4LjNoLTguM1ptLTEyLjggNDYuN2gtOC4zbC0zLjItMy4yIDguMy04LjMgMy4yIDMuMlptLTcuOC0xNi04LjMgOC4zLTE0LjctMTQuNyA4LjMtOC4zWm0tNC4xIDIxLjVhMy4xNjggMy4xNjggMCAwIDAgMi4zLjloMjUuN2EzLjIgMy4yIDAgMSAwIDAtNi40aC05LjZ2LTYuNGg5LjZhMy4yIDMuMiAwIDAgMCAwLTYuNGgtMTEuNmwtNi40LTYuNGgxNy45YTMuMiAzLjIgMCAwIDAgMC02LjRoLTI0LjNsLTEwLjktMTAuOS0uMS0uMVY2LjNoMTkuMmE2LjQ0NSA2LjQ0NSAwIDAgMSA2LjQgNi40djkuN2EzLjE2IDMuMTYgMCAwIDAgMy4yIDMuMmgxNnY0NC45aC00NC44VjU1LjhaIi8+PC9zdmc+"
                                class="img-fluid" style="max-width: 60px" alt="">
                        </div>
                        <div class="col-10">
                            <a href="{{ asset('storage/files/Privacy Policy .pdf') }}" download="Privacy policy.pdf">
                                <h4 class="h6 color2">@lang('Privacy policy')</h4>
                            </a>
                            <p class="small">@lang('TradeLive AI  is committed to protecting the privacy and confidentiality of personal information provided by clients and partners. The privacy policy outlines how personal information is collected, used, and protected in accordance with applicable privacy laws.')</p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
@endsection
