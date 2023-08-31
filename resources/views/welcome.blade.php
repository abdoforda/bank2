@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center align-items-center g-2">
    <div class="col">
        <div class="signals">
            <center>
                <h1 class="text-white iq-mb-20">Free Forex Signals</h1>
            </center>
            @foreach ($signals as $item)
                {!! $item !!}
            @endforeach
        </div>
    </div>
</div>
</div>

<section class="section02 prim-six-box">
    <div class="container">
        <h2 class="text-center h1 color">
            <span class="color2">Discover</span> Eight Assets Classes            </h2>
        <div class="six-boxes">
            <div class="row justify-content-center align-items-center g-2 text-center">
                <div class="col-sm-12 col-md-4 col-lg-3 feature-box ">
                    <img src="/images/icons/FOREX.jpg.png" width="34" height="42" alt="instruments.3f233676">
                    <h6 class="primary-head-six">Forex</h6>
                    <div class="description js-description">
                        <div class="box-paragraph">
                            <div>
                                <div>
                                    <div>
                                        <span>We provide more than 100 forex pairs to utilize the opportunities of the biggest financial market in the world.</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 feature-box">
                    <img src="/images/icons/INDICES.jpg.png" width="34" height="42" alt="instruments.3f233676">
                    <h6 class="primary-head-six">Indices</h6>
                    <div class="description js-description">
                        <div class="box-paragraph">
                            <div>
                                <div>
                                    <div>
                                        <span>We provide a wide range of popular global indices, such as the FTSE 100, S&amp;P 500, Dow Jones Industrial Average, and others.</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 feature-box">
                    <img src="/images/icons/COMMODITIES.png" width="34" height="42" alt="instruments.3f233676">
                    <h6 class="primary-head-six">Commodities</h6>
                    <div class="description js-description">
                        <div class="box-paragraph">
                            <div>
                                <div>
                                    <div>
                                        <span>Discover various commodities like precious metals (gold, silver), energy (oil, natural gas), and agriculture (wheat, corn).</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 feature-box">
                    <img src="/images/icons/SHARES.png" width="34" height="42" alt="instruments.3f233676">
                    <h6 class="primary-head-six">Shares</h6>
                    <div class="description js-description">
                        <div class="box-paragraph">
                            <div>
                                <div>
                                    <div>
                                        <span>Trade on a wide range of shares from the biggest companies working in various sectors, such as banking, technology, healthcare, manufacturing, and more.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-divider"></div>
            <div class="row justify-content-center align-items-center g-2 text-center">
                <div class="col-sm-12 col-md-4 col-lg-3 feature-box">
                    <img src="/images/icons/ENERGIES.png" width="34" height="42" alt="instruments.3f233676">
                    <h6 class="primary-head-six">Energies</h6>
                    <div class="description js-description">
                        <div class="box-paragraph">
                            <div>
                                <div>
                                    <div>
                                        <span>Trade on a variety of energy commodities, including oil, natural gas, and other energy commodities from major global markets.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 feature-box">
                    <img src="/images/icons/CRYPTOCURRENCIES.png" width="34" height="42" alt="instruments.3f233676">
                    <h6 class="primary-head-six">
                        Cryptocurrencies                        </h6>
                    <div class="description js-description">
                        <div class="box-paragraph">
                            <div>
                                <div>
                                    <div>
                                        <span>Explore trading on the most common cryptocurrencies, including Bitcoin, Ethereum, and other popular digital currencies, from global cryptocurrency markets.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 feature-box">
                    <img src="/images/icons/TREASURIES.png" width="34" height="42" alt="instruments.3f233676">
                    <h6 class="primary-head-six">Treasures</h6>
                    <div class="description js-description">
                        <div class="box-paragraph">
                            <div>
                                <div>
                                    <div>
                                        <span>Explore a wide selection of global treasury bonds and bills, including US Treasury bonds, Eurozone bonds, and other sovereign debt securities.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 feature-box">
                    <img src="/images/icons/METALS.png" width="34" height="42" alt="instruments.3f233676">
                    <h6 class="primary-head-six">Metals</h6>
                    <div class="description js-description">
                        <div class="box-paragraph">
                            <div>
                                <div>
                                    <div>
                                        <span>Trade on a wide selection of precious metals , including gold, silver, copper, and other metals, from global markets.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('css')
    <style>
.signals a, .signal-title{
    color: #000;
}
.card{word-wrap:break-word;background-clip:border-box;background-color:#fff;border:1px solid rgba(0,0,0,.125);border-radius:.25rem;display:flex;flex-direction:column;min-width:0;position:relative;}
.card-body{flex:1 1 auto;padding:1rem;}
.card-header{background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125);margin-bottom:0;padding:.5rem 1rem;}
.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0;}
.d-flex{display:flex!important;}
.flex-row{flex-direction:row!important;}
.flex-wrap{flex-wrap:wrap!important;}
.flex-nowrap{flex-wrap:nowrap!important;}
.me-2{margin-right:.5rem!important;}
.mb-1{margin-bottom:.25rem!important;}
.ms-auto{margin-left:auto!important;}
.fw-normal{font-weight:400!important;}
.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;user-select:all!important;}
.bi{display:inline-block;vertical-align:-.125em;}

@media (min-width:768px){
.signal-group{display:flex;gap:.5%;}
.signal-group>.signal-card{width:33%;}
}
@media (max-width:768px){
.signal-group>.signal-card{margin-bottom:.75rem;}
}
.signal-card{border:1px solid gray;border-radius:0;}
.signal-card .signal-header{border-radius:0;font-size:1.5em;font-weight:700;}
@media (max-width:768px){
.signal-card .signal-header{padding:.5rem;}
}
.signal-card .signal-header a{text-decoration:none;}
.signal-card .signal-header .flag-icon{height:22.4px;height:1.4rem;width:32px;width:2rem;}
@media (max-width:768px){
.signal-card .card-body{padding:.5rem;}
}
.signal-card .card-body .signal-row:not(:last-of-type){border-bottom:1px dotted;}
.signal-card .card-body .signal-row.signal-status{font-size:1.6em;font-weight:700;padding:.4rem 0;text-align:center;}
.signal-card .card-body .signal-row .signal-value{font-weight:700;vertical-align:middle;white-space:nowrap;}
.signal-card.buy{border-color:#006400;}
.signal-card.buy .signal-color{color:#006400;}
.signal-card.buy .card-header{background-color:#80cf80;}
.signal-card.buy .card-body{background-color:#90ee90;}
.signal-card.buy .card-body .signal-row{border-color:green;}
.signal-card.sell{border-color:darkred;}
.signal-card.sell .signal-color{color:darkred;}
.signal-card.sell .card-header{background-color:#e097a2;}
.signal-card.sell .card-body{background-color:#ffb6c1;}
.signal-card.sell .card-body .signal-row{border-color:darkred;}
.signal-card.filled .signal-color{color:#666;}
.signal-card.filled .profit-color{color:#006400;}
.signal-card.filled .card-header{background-color:#eee;}
.signal-card.filled .card-body{background-color:#f8f8f8;}
.signal-card.filled .card-body .signal-row{border-color:gray;}

section{padding-top:40px;padding-bottom:40px;}
section h2{margin-bottom:42px!important;}
.prim-six-box .six-boxes .feature-box{text-align:center;transition:all 0.2s;border-right:1px solid rgba(29, 49, 68, 0.1);overflow:hidden;height:240px;padding:36px;border-radius:14px;}
.prim-six-box .six-boxes .feature-box:nth-child(4){border-right:0;}
.prim-six-box .six-boxes .feature-box:hover{box-shadow:0 25px 50px 0 rgb(29 49 68 / 15%);z-index:9999;border-right:1px solid transparent;background-color:#f9b707;}
.prim-six-box .six-boxes .feature-box img{fill:#1d3144;width:50px;height:50px;transition:width 0.2s, height 0.2s;}
.prim-six-box .six-boxes .feature-box:hover img{fill:#00b276;width:40px;height:40px;transition:width 0.2s, height 0.2s;}
.prim-six-box img:not(:root){overflow:hidden;}
.prim-six-box .six-boxes .feature-box .box-paragraph{display:none;color:rgba(29, 49, 68, 0.65);}
.prim-six-box .six-boxes .feature-box:hover .box-paragraph{display:inline-block;line-height:17px;width:100%;color:rgb(2 36 68 / 83%);font-family:din-2014, sans-serif;font-style:normal;font-weight:300;font-size:14px;}
.prim-six-box .six-boxes .h-divider{border-top:1px solid rgba(29, 49, 68, 0.1);}
@media (max-width: 991px){
.prim-six-box .six-boxes .feature-box:not(:last-child){border-bottom:1px solid rgba(29, 49, 68, 0.1);}
.prim-six-box .six-boxes .feature-box h6{margin-top:0;margin-bottom:0;}
.prim-six-box .six-boxes .feature-box{text-align:left;border-right:0;height:auto;padding:30px 80px 10px 80px;position:relative;}
.prim-six-box .six-boxes .feature-box:hover{transform:scale(1, 1);box-shadow:0 0 0 0;border-right:0;background-color:transparent;padding:30px 80px 10px 80px;}
.prim-six-box .six-boxes .feature-box img{position:absolute;left:0;width:50px;height:50px;top:18px;}
.prim-six-box .six-boxes .feature-box:hover img{fill:#1d3144;width:25px;height:25px;}
.prim-six-box .six-boxes .feature-box:hover .box-paragraph{display:inline-block;font-size:14px;line-height:17px;color:rgba(29, 49, 68, 0.65);width:100%;}
.prim-six-box .six-boxes .feature-box .description .box-paragraph{display:none;margin:25px 0 0px;line-height:21px;}
.prim-six-box .six-boxes .feature-box:hover img{fill:#1d3144;width:50px;height:50px;}
.prim-six-box .six-boxes{margin:30px 0;}
}
@media (min-width: 992px){
.prim-six-box .primary-head-six{margin-top:12px;height:54px;overflow:hidden;text-overflow:ellipsis;}
.prim-six-box .six-boxes .feature-box:hover .primary-head-six{height:auto;color:#000;}
.prim-six-box .six-boxes .feature-box img{fill:#1d3144;width:80px;height:80px;transition:width 0.2s, height 0.2s;margin:0 auto;}
.prim-six-box .six-boxes .feature-box{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;flex-direction:column;justify-content:center;align-content:center;text-align:center;}
}
.section02{background:#664d0a47;}
.color2{color:#74b22b;}
/*! CSS Used from: https://TradeLive AI .com/css/smallscreen.css ; media=screen and (max-width: 600px) */
@media screen and (max-width: 600px){
.prim-six-box .six-boxes .feature-box{min-height:86px;}
.prim-six-box .six-boxes .feature-box img{top:16px;}
}


    </style>
@endsection