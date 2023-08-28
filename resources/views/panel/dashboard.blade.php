@extends('panel.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="dashboard">
        <div class="upload-documents__window__birthday">
            <div class="col-lg-12 verification-status_dashbord">
                <div class="verification-status_dashbord_header">
                    <div class="verification-status__title">Verification status</div>
                </div>
                <div class="verification-status_visual verification-status_visual__icon-25">
                    <span class="verification-status_visual__icon">
                        <span>
                            @if (auth()->user()->doc_profile == 2)
                            75
                            @else
                            25
                            @endif    
                        </span>%</span>
                </div>
            </div>
        </div>


        <div class="row blockTop_verification">
            <div class="col-lg-12">
                <div class="verification-step background-color-grey d-flex justify-content-center">
                    <div class="verification-step_item verification-step_item__active">
                        <span class="verification-step__img">1</span>
                        <span class="verification-step__title">Register</span>
                    </div>
                    <div
                        class="verification-step_item
                    @if(auth()->user()->doc_profile == 2) verification-step_item__active  @else verification-step_item__curent @endif ">
                        <span class="verification-step__img">2</span>
                        <span class="verification-step__title">Verify</span>
                    </div>
                    <div
                        class="verification-step_item
                                        ">
                        <span class="verification-step__img">3</span>
                        <span class="verification-step__title">Deposit</span>
                    </div>
                </div>
            </div>
        </div>



        <div class="verif-card-account mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card-account_outer card-account_outer-notupload">
                        <div class="card-account_body text-center">

                            
                            @if (auth()->user()->doc_profile == 1)
                            <div class="">
                                <div class="h2">
                                    Your documents will be verified within <br>
                                    <span style="color: #2B63AD;">24 hours</span>
                                </div>
                            </div>
                            @endif

                            @if (auth()->user()->doc_profile == 0)
                            
                            @if (auth()->user()->message != null)
                            <div>
                                <div class="alert alert-danger" role="alert">
                                    <strong>
                                        <i class="fa-solid fa-circle-exclamation"></i> Message:
                                    </strong> {{ auth()->user()->message }}
                                </div>
                            </div>
                            @endif
                            
                            <div class="">
                                <div class="h2"><span>Verify your Documents</span><br>to Open a
                                    Trading Account</div>
                                <div class="text-grey fz-16 text-center mb-2">2-5 minutes</div>
                            </div>
                            <div>
                                <a class="btn btn-primary btn-primary-main btn-primary_transparent"
                                    href="{{ route('uploadDocuments', app()->getLocale()) }}">Upload
                                    Documents</a>
                            </div>
                            @endif


                            {{-- Documents accepted --}}
                            @if (auth()->user()->doc_profile == 2)
                            <div class="">
                                <div class="h2">
                                    <span>Documents accepted</span>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-primary btn-primary-main btn-primary_transparent"
                                    href="{{ route('panel.banking', app()->getLocale()) }}">
                                    Deposit Now
                                </a>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
:root{
    --hr-color-2: #2B63AD;
}
.card-account_outer{display:flex;flex-wrap:wrap;}
.card-account_outer-notupload .btn-primary-main{background:transparent;color:#2b63ad;border:2px solid var(--hr-color-2);font-weight:700;}
.card-account_outer-notupload .btn-primary-main:hover{background:#2b63ad;color:#fff;border:2px solid var(--hr-color-2);}
.card-account_outer-notupload .h2{font-family:'Effra', sans-serif;font-style:normal;font-weight:400;font-size:24px;line-height:34px;text-align:center;color:#000000;margin-top:12px;margin-bottom:40px;}
.card-account_body{padding:25px 20px;}

@media (max-width: 768px){
.card-account_outer{justify-content:center;}
}
@media (max-width: 600px){
.h2{font-size:20px!important;font-weight:900;}
}


div,*{scrollbar-width:thin;scrollbar-color:var(--accent) #EDEEEF;}
::-webkit-scrollbar{width:5px;height:5px;}
::-webkit-scrollbar-track{background-color:#999;}
::-webkit-scrollbar-track-piece{background-color:#ffffff;}
::-webkit-scrollbar-thumb{height:50px;background-color:var(--hr-color);border-radius:3px;}
::-webkit-scrollbar-corner{background-color:var(--accent);}
::-webkit-resizer{background-color:var(--accent);}
a{transition:all 0.4s;}
a:hover{color:var(--accent-hover);text-decoration:none;}
.btn{transition:all 0.4s;font-size:16px;display:flex;align-items:center;justify-content:center;min-height:45px;font-family:Roboto;}
.btn:focus{box-shadow:none!important;}
.btn-primary{color:#fff;background-color:var(--accent);border-color:var(--accent);width:100%;border-radius:4px;max-width:250px;margin-left:auto;margin-right:auto;font-family:'Effra', sans-serif;font-style:normal;font-weight:700;font-size:15px;line-height:140%;text-align:center;letter-spacing:0.02em;padding:20px 10px;padding:18px 10px;border:2px solid #fff;}
.btn-primary:hover,.btn-primary:not(:disabled):not(.disabled):active{background-color:transparent;border-color:var(--accent);color:var(--accent);}
.btn-primary:disabled{background-color:var(--accent-hover);border-color:var(--accent-hover);}
.btn-primary:focus,.btn-primary:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 0.2rem rgba(238, 116, 59, 0.3);}
.btn-primary_transparent{background:#fff;color:var(--accent);font-weight:500;border:2px solid;}
.btn-primary_transparent:hover{border:2px solid var(--accent-hover);}
a{color:var(--accent);}
.background-color-grey{background:var(--background-color-grey);background:transparent linear-gradient(180deg, #F9FAFB 0%, #FCFEFF 100%);}
.text-grey{color:var(--grey);}
.col-12,.col-lg-12{padding-right:10px;padding-left:10px;}
.row{margin-right:-10px;margin-left:-10px;}
.fz-16{font-size:16px;}

.h2{text-align:center;margin:30px 0 20px;}
.h2{font-size:22px;font-weight:900;}
.h2 span{color:var(--accent);}
.verification-step{display:flex;height:70px;align-items:center;}
.verification-step_item{padding:0 30px;position:relative;height:100%;align-items:center;display:flex;flex:0 1 25%;transition:all 0.4s;}
.verification-step_item:first-child:before{display:none;}
.verification-step_item__curent:after{background:url("/images/new_images/svg/panel/dashboard/step-ver.svg") no-repeat right/cover;content:'';width:50%;height:3px;position:absolute;left:0;bottom:-3px;box-shadow:-2px 3px 4px rgba(208, 223, 239, 0.8);}
.verification-step_item::after{content:'';position:absolute;width:91%;height:4px;background:#fff;border-radius:20px;bottom:inherit;top:16px;left:calc(50% - -10px);z-index:-1;}
.verification-step_item__active:after{background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);}
.verification-step_item__active .verification-step__img{background:linear-gradient(180deg, #768AB4 0%, #4B67A2 100%) 0% 0% no-repeat;position:relative;border:none;}
.verification-step_item:last-child::after{content:none;}
.verification-step_item__active .verification-step__img:before,.verification-step_item__active .verification-step__img:after{width:100%;height:100%;content:'';position:absolute;top:0;left:0;border-radius:50%;z-index:10;}
.verification-step_item__active .verification-step__img:before{background:linear-gradient(180deg, #768AB4 0%, #4B67A2 100%) 0% 0% no-repeat;}
.verification-step_item__active .verification-step__img:after{background:url("/images/new_images/svg/panel/dashboard/checked.svg") no-repeat center;}
.verification-step__img{width:37px;height:37px;flex:0 0 37px;border-radius:50%;display:inline-flex;justify-content:center;align-items:center;box-shadow:3px 3px 6px rgba(98, 114, 155, 0.24);margin-inline-end:5px;border:3px solid var(--hr-color-2);background:none;font-size:18px;font-weight:700;background:#fff;color:var(--hr-color-2);}
.verification-step__title{font-weight:600;color:var(--background-color-dark);}
.verification-status_dashbord{display:flex;justify-content:flex-end;font-size:16px;font-weight:600;align-items:center;height:100%;padding:0 15px;}
.verification-status_dashbord_header{text-align:right;margin-inline-end:25px;}
.verification-status__title{margin-bottom:5px;}
.verification-status_visual{flex:0 0 50px;height:50px;border-radius:50%;text-align:center;display:flex;align-items:center;justify-content:center;position:relative;background:linear-gradient(358deg, var(--accent) 0%, #fff 120%);box-shadow:5px 4px 14px #D0DFEF;opacity:1;}
.verification-status_visual{filter:drop-shadow(0px 0px 4px rgba(0, 0, 0, 0.15));box-shadow:none;background:linear-gradient(90deg, #14177200 0%, #2B63AD 100.02%);border:4px solid rgba(0, 0, 0, .05);width:104px;height:104px;border-radius:50%;display:flex;flex:0 0 auto;}
.verification-status_visual__icon{background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);width:100%;height:100%;border-radius:50%;display:flex;align-items:center;justify-content:center;}
.verification-status_visual__icon{font-family:'Gotham Pro', sans-serif;font-style:normal;font-weight:700;font-size:36px;line-height:100%;color:#FFFFFF;}
.verification-status_dashbord{justify-content:center;background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);box-shadow:0px 1px 3px rgb(0 0 0 / 8%);border-radius:12px;max-width:774px;margin:0 auto;padding:18px;margin-bottom:60px;}
.verification-status__title{font-family:'Effra', sans-serif;font-style:normal;font-weight:500;font-size:36px;line-height:140%;text-align:center;letter-spacing:0.02em;color:#FFFFFF;margin-bottom:0;}
.btn-primary-main{background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);border-radius:4px;font-family:'Effra', sans-serif;font-style:normal;font-weight:700;font-size:18px;line-height:140%;color:#FFFFFF;padding:16px 10px;transition:all ease-in-out .4s;}
.btn-primary-main:hover{background:transparent;color:#2b63ad;border:2px solid var(--hr-color-2);}
.dashboard .upload-documents__window__birthday .verification-status_dashbord{margin-bottom:40px;}
.blockTop_verification{max-width:970px;margin:0 auto;}
.verification-step{margin-bottom:40px;background:transparent;overflow:hidden;}
.verification-step_item{padding:0;flex-direction:column;}
.verification-step__title{font-family:'Effra', sans-serif;font-style:normal;font-weight:400;font-size:16px;line-height:100%;color:#000000;margin-top:16px;}
.verification-step_item__active .verification-step__img:before{background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);}
.verif-card-account .card-account_outer{justify-content:center;}
.dashboard .verif-card-account{margin-bottom:70px;}

@media (max-width: 1366px){
.verification-step_item{padding:0 20px;}
}
@media (max-width: 768px){
.dashboard .h2{font-style:20px;font-weight:600;}
}
@media (max-width: 600px){
.verification-step{height:80px;}
.verification-step_item{flex-direction:column;padding:10px 5px;justify-content:space-between;align-items:center;}
.verification-step__title{font-size:10px;margin-top:10px;text-align:center;color:var(--background-color-dark)!important;font-weight:600!important;}
.verification-step_item::after{top:24px;}
}
@media (max-width: 533px){
.verification-status_dashbord{margin-bottom:30px;}
.verification-status_dashbord_header{margin-inline-end:0;margin-right:10px;}
.verification-status__title{font-size:24px;}
.verification-status_visual{width:75px;height:75px;}
.verification-status_visual__icon{font-size:20px;}
.verification-step{height:65px;}
.verification-step__img{width:25px;height:25px;flex:0 0 25px;font-size:12px;}
.verification-step_item::after{top:20px;left:calc(50% - -5px);}
.dashboard .verif-card-account{margin-top:15px!important;margin-bottom:25px;}
.dashboard{width:98%;}
.btn-primary{padding:8px;}
}
</style>
@endsection