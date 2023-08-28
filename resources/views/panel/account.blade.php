@extends('panel.app')

@section('content')
    <div class="container">
        <div class="content-wrapper mt-4">
            <div class="row content-header"></div>
            <div class="content-body">
                <div class="pb-3">
                    <div class="card">
                        <!---->
                        <!---->
                        <div class="card-body">
                            <!---->
                            <!---->
                            <div class="d-flex flex-wrap justify-content-between mx-lg-3">
                                <div class="items-wrapper d-flex flex-wrap">
                                    <div class="d-flex flex-column mb-2 mb-lg-0 mr-3">
                                        <div class="tale">Account</div>
                                        <div class="val">1301386298</div>
                                    </div>
                                    <div class="d-flex flex-column mb-2 mb-lg-0 mr-3">
                                        <div class="tale">Account Type</div>
                                        <div class="val">Standard</div>
                                    </div>
                                    <div class="d-flex flex-column mb-2 mb-lg-0 mr-3">
                                        <div class="tale">Leverage</div>
                                        <div class="val">1:1000</div>
                                    </div>
                                    <div class="d-flex flex-column mb-2 mb-lg-0 mr-3">
                                        <div class="tale">Platform</div>
                                        <div class="val">MT4</div>
                                    </div>
                                    <div class="d-flex flex-column mb-2 mb-lg-0">
                                        <div class="tale">Password</div>
                                        <div class="val text-left text-sm-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" title="copy" class="feather feather-copy"
                                                style="cursor: pointer; margin-right: 8px;">
                                                <rect x="9" y="9" width="13" height="13" rx="2"
                                                    ry="2"></rect>
                                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                            </svg></div>
                                    </div>
                                </div>
                                <div class="account-buttons d-flex flex-wrap align-items-center"><button type="button"
                                        class="btn d-flex align-items-center mr-sm-2 mb-1 btn-primary btn-sm"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="mr-1 feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>Change password</button>
                                        <button type="button"
                                        class="btn d-flex align-items-center mb-1 btn-primary btn-sm"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="mr-1 feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>Fund account</button>
                                    </div>
                            </div>
                        </div>
                        <!---->
                        <!---->
                    </div>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                </div>
            </div>
        </div>
    </div>
    <style>
        
    </style>
@endsection
