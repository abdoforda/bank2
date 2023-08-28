@extends('panel.app')

@section('content')
    <div class="container">
        <div class="content-wrapper mt-4">
            <div class="row content-header"></div>
            <div class="content-body">
                <div>
                    <div class="row justify-content-between align-items-center pagination-bar bg-white"
                        style="padding: 20px; border-top: 1px solid rgb(233, 236, 239);">
                        <div class="text-center text-md-left col-md-2 col-12">
                            <h3>My Cards</h3>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="row">
                                <div class="mb-1 col-sm-6 col-xl-4 col-12">
                                    <div class="d-flex flex-column align-items-center bg-white border rounded p-1">
                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="80px" height="80px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-credit-card">
                                                <rect x="1" y="4" width="22" height="16"
                                                    rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10"></line>
                                            </svg></div>
                                        <h3 class="font-weight-bold">abdo</h3>
                                        <h4 class="font-weight-bold">mohamed</h4>
                                        <div class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                                height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-copy" style="cursor: pointer; margin-right: 8px;">
                                                <rect x="9" y="9" width="13" height="13"
                                                    rx="2" ry="2"></rect>
                                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                            </svg>
                                            <div style="max-width: 13rem; overflow: hidden; font-size: 0.8rem;">
                                                4256874413336262 </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2"><button type="button"
                                                class="btn d-flex justify-content-between align-items-center btn-danger btn-sm"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash"
                                                    style="cursor: pointer; color: white; margin-right: 8px;">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg> Remove </button><button type="sumbit"
                                                class="btn d-flex justify-content-between align-items-center ml-2 btn-primary btn-sm"><span
                                                    class="d-flex align-items-center"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit"
                                                        style="cursor: pointer; color: white; margin-right: 8px;">
                                                        <path
                                                            d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                        </path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                        </path>
                                                    </svg> Edit </span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-right col-md-2 col-12"><button type="button"
                                class="btn btn-primary">Add Card</button></div>
                    </div>
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
