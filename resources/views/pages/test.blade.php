@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/forex.webp)">
        <div class="container">

            <div class="display-5 color2 fw-bold mt-4">Trade Forex CFDs Online</div>
        <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>
                    We provide more than 100 forex pairs to utilize the opportunities of the biggest financial market in the world. 
                </p>
            </div>
        </div>

            <div class="row justify-content-center align-items-center g-2 mt-4 mb-4">
                <div class="col-md-6 text-white text-center ">
                    <button type="button" class="btn btn-primary">Open Account</button>
                    &nbsp;
                    <button type="button" class="btn btn-outline-success">Free Demo</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">

        <div class="itemClick mb-5">
            <div class="row justify-content-center align-items-center">

                <div class="col border-end">
                    <a href="{{ route('forex') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/FOREX.jpg.png" alt="">
                        </div>
                        <div class="text-center">
                            Forex
                        </div>
                    </a>
                </div>


                <div class="col border-end">
                    <a href="{{ route('indices') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/INDICES.jpg.png" alt="">
                        </div>
                        <div class="text-center">
                            Indices
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('commodities') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/COMMODITIES.png" alt="">
                        </div>
                        <div class="text-center">
                            Commodities
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('metals') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/SHARES.png" alt="">
                        </div>
                        <div class="text-center">
                            Metals
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('energyCommodities') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/ENERGIES.png" alt="">
                        </div>
                        <div class="text-center">
                            Energy commodities
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('shares') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/CRYPTOCURRENCIES.png" alt="">
                        </div>
                        <div class="text-center">
                            shares
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('cryptocurrencies') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/TREASURIES.png" alt="">
                        </div>
                        <div class="text-center">
                            Cryptocurrencies
                        </div>
                    </a>
                </div>

                <div class="col ">
                    <a href="{{ route('etf') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/METALS.png" alt="">
                        </div>
                        <div class="text-center">
                            ETF
                        </div>
                    </a>
                </div>


            </div>
        </div>


        <table class="table01">
            <thead>
                <tr>
                    <td>Instrument</td>
                    <td>Minimum Spread</td>
                    <td>Current spread</td>
                    <td>Long swap</td>
                    <td>Short swap</td>
                    <td>Ret. margin %</td>
                    <td>Prof. margin %</td>
                </tr>
            </thead>
            <tbody class="pagination_tbody">

	
                <tr>
                                    <td><span>AUDCAD<br> Australian Dollar vs Canadian Dollar</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">1.0</span></td>
                                    <td><span>-4.13</span></td>
                                    <td><span>-1.03</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_0"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_0">
                                    <td colspan="7">
                                        <h2>Australian Dollar vs Canadian Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart0"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    AUDCAD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 AUD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -4.13
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -4.13
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>AUDCHF<br> Australian Dollar vs Swiss Franc</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">0.5</span></td>
                                    <td><span>0.12</span></td>
                                    <td><span>-10.12</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_1"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_1">
                                    <td colspan="7">
                                        <h2>Australian Dollar vs Swiss Franc</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart1"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    AUDCHF                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 AUD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.12
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.12
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>AUDJPY<br> Australian Dollar vs Japanese Yen</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">0.7</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span>-14.92</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_2"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_2">
                                    <td colspan="7">
                                        <h2>Australian Dollar vs Japanese Yen</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart2"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    AUDJPY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 AUD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.1
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.1
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>AUDNZD<br> Australian Dollar vs New Zealand Dollar</span></td>
                                    <td><span>0.7</span></td>
                                    <td><span class="current-spread-value">0.7</span></td>
                                    <td><span>-7.22</span></td>
                                    <td><span>0.02</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_3"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_3">
                                    <td colspan="7">
                                        <h2>Australian Dollar vs New Zealand Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart3"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    AUDNZD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 AUD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -7.22
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -7.22
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>AUDUSD<br> Australian Dollar vs US Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.1</span></td>
                                    <td><span>-5.77</span></td>
                                    <td><span>-1.72</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_4"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_4">
                                    <td colspan="7">
                                        <h2>Australian Dollar vs US Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart4"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    AUDUSD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 AUD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -5.77
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -5.77
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>CADCHF<br> Canadian Dollar vs Swiss Franc</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.3</span></td>
                                    <td><span>0.05</span></td>
                                    <td><span>-12</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_5"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_5">
                                    <td colspan="7">
                                        <h2>Canadian Dollar vs Swiss Franc</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart5"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    CADCHF                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 CAD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.05
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.05
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>CADJPY<br> Canadian Dollar vs Japanese Yen</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.8</span></td>
                                    <td><span>0.16</span></td>
                                    <td><span>-18.02</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_6"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_6">
                                    <td colspan="7">
                                        <h2>Canadian Dollar vs Japanese Yen</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart6"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    CADJPY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 CAD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.16
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.16
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>CADSGD<br> Canadian Dollar vs Singapore Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">1.1</span></td>
                                    <td><span>-5.87</span></td>
                                    <td><span>-2.72</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_7"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_7">
                                    <td colspan="7">
                                        <h2>Canadian Dollar vs Singapore Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart7"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    CADSGD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 CAD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -5.87
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -5.87
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>CHFJPY<br> Swiss Franc vs Japanese Yen</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">1.2</span></td>
                                    <td><span>-0.84</span></td>
                                    <td><span>-6.47</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_8"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_8">
                                    <td colspan="7">
                                        <h2>Swiss Franc vs Japanese Yen</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart8"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    CHFJPY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 CHF
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -0.84
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -0.84
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>CHFNOK<br> Swiss Franc vs Norwegian Krone</span></td>
                                    <td><span>1.9</span></td>
                                    <td><span class="current-spread-value">96.0</span></td>
                                    <td><span>-60</span></td>
                                    <td><span>0</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_9"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_9">
                                    <td colspan="7">
                                        <h2>Swiss Franc vs Norwegian Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart9"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    CHFNOK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 CHF
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -60
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -60
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>CHFSGD<br> Swiss Franc vs Singapore Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">3.6</span></td>
                                    <td><span>-28.97</span></td>
                                    <td><span>0.14</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_10"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_10">
                                    <td colspan="7">
                                        <h2>Swiss Franc vs Singapore Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart10"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    CHFSGD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 CHF
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -28.97
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -28.97
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>EURAUD<br> Euro vs Australian Dollar</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">0.6</span></td>
                                    <td><span>-11.95</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_11"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_11">
                                    <td colspan="7">
                                        <h2>Euro vs Australian Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart11"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURAUD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -11.95
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -11.95
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EURCAD<br> Euro vs Canadian Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.7</span></td>
                                    <td><span>-13.37</span></td>
                                    <td><span>0.12</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_12"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_12">
                                    <td colspan="7">
                                        <h2>Euro vs Canadian Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart12"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURCAD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -13.37
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -13.37
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>EURCHF<br> Euro vs Swiss Franc</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.3</span></td>
                                    <td><span>0.13</span></td>
                                    <td><span>-11.78</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_13"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_13">
                                    <td colspan="7">
                                        <h2>Euro vs Swiss Franc</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart13"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURCHF                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.13
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.13
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EURCZK<br> Euro vs Czech Koruna</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">7.2</span></td>
                                    <td><span>-50.21</span></td>
                                    <td><span>0.14</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_14"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_14">
                                    <td colspan="7">
                                        <h2>Euro vs Czech Koruna</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart14"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURCZK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -50.21
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -50.21
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>EURGBP<br> Euro vs Great Britain Pound</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.2</span></td>
                                    <td><span>-8.4</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_15"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_15">
                                    <td colspan="7">
                                        <h2>Euro vs Great Britain Pound</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart15"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURGBP                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -8.4
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -8.4
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EURHKD<br> Euro vs Hong Kong Dollar</span></td>
                                    <td><span>2.2</span></td>
                                    <td><span class="current-spread-value">20.8</span></td>
                                    <td><span>-33.66</span></td>
                                    <td><span>-19.3</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_16"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_16">
                                    <td colspan="7">
                                        <h2>Euro vs Hong Kong Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart16"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURHKD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -33.66
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -33.66
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>EURHUF<br> Euro vs Hungarian Forint</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">34.0</span></td>
                                    <td><span>-220.31</span></td>
                                    <td><span>0.15</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_17"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_17">
                                    <td colspan="7">
                                        <h2>Euro vs Hungarian Forint</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart17"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURHUF                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -220.31
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -220.31
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EURJPY<br> Euro vs Japanese Yen</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.5</span></td>
                                    <td><span>0.11</span></td>
                                    <td><span>-18.42</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_18"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_18">
                                    <td colspan="7">
                                        <h2>Euro vs Japanese Yen</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart18"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURJPY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.11
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.11
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>EURNOK<br> Euro vs Norwegian Krone</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">24.4</span></td>
                                    <td><span>-39</span></td>
                                    <td><span>-9.8</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_19"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_19">
                                    <td colspan="7">
                                        <h2>Euro vs Norwegian Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart19"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURNOK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -39
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -39
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EURNZD<br> Euro vs New Zealand Dollar</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">2.5</span></td>
                                    <td><span>-19.39</span></td>
                                    <td><span>0.12</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_20"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_20">
                                    <td colspan="7">
                                        <h2>Euro vs New Zealand Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart20"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURNZD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -19.39
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -19.39
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>EURPLN<br> Euro vs Polish Zloty</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">14.0</span></td>
                                    <td><span>-88.94</span></td>
                                    <td><span>0.2</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_21"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_21">
                                    <td colspan="7">
                                        <h2>Euro vs Polish Zloty</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart21"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURPLN                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -88.94
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -88.94
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EURSEK<br> Euro vs Swedish Krone</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">27.6</span></td>
                                    <td><span>-43.2</span></td>
                                    <td><span>-13.2</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_22"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_22">
                                    <td colspan="7">
                                        <h2>Euro vs Swedish Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart22"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURSEK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -43.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -43.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>EURSGD<br> Euro vs Singapore Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">2.6</span></td>
                                    <td><span>-17.99</span></td>
                                    <td><span>0.11</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_23"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_23">
                                    <td colspan="7">
                                        <h2>Euro vs Singapore Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart23"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURSGD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -17.99
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -17.99
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EURTRY<br> Euro vs Turkish Lira</span></td>
                                    <td><span>19.7</span></td>
                                    <td><span class="current-spread-value">182.6</span></td>
                                    <td><span>-1382.12</span></td>
                                    <td><span>0.9</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_24"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_24">
                                    <td colspan="7">
                                        <h2>Euro vs Turkish Lira</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart24"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURTRY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1382.12
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1382.12
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>EURUSD<br> Euro vs US Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.1</span></td>
                                    <td><span>-11.38</span></td>
                                    <td><span>-0.09</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_25"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_25">
                                    <td colspan="7">
                                        <h2>Euro vs US Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart25"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURUSD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -11.38
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -11.38
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EURZAR<br> Euro vs South African Rand</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">92.0</span></td>
                                    <td><span>-427.72</span></td>
                                    <td><span>0.95</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_26"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_26">
                                    <td colspan="7">
                                        <h2>Euro vs South African Rand</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart26"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    EURZAR                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 EUR
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -427.72
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -427.72
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>GBPAUD<br> Great Britain Pound vs Australian Dollar</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">0.6</span></td>
                                    <td><span>-6.83</span></td>
                                    <td><span>-8.33</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_27"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_27">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs Australian Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart27"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPAUD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -6.83
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -6.83
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>GBPCAD<br> Great Britain Pound vs Canadian Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">1.3</span></td>
                                    <td><span>-9.08</span></td>
                                    <td><span>-5.05</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_28"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_28">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs Canadian Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart28"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPCAD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -9.08
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -9.08
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>GBPCHF<br> Great Britain Pound vs Swiss Franc</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.6</span></td>
                                    <td><span>0.2</span></td>
                                    <td><span>-22.42</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_29"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_29">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs Swiss Franc</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart29"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPCHF                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>GBPDKK<br> Great Britain Pound vs Danish Krone</span></td>
                                    <td><span>5.4</span></td>
                                    <td><span class="current-spread-value">30.0</span></td>
                                    <td><span>0.16</span></td>
                                    <td><span>-75.37</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_30"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_30">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs Danish Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart30"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPDKK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.16
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.16
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>GBPJPY<br> Great Britain Pound vs Japanese Yen</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.8</span></td>
                                    <td><span>0.02</span></td>
                                    <td><span>-29.68</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_31"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_31">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs Japanese Yen</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart31"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPJPY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.02
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.02
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>GBPNOK<br> Great Britain Pound vs Norwegian Krone</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">32.2</span></td>
                                    <td><span>0.56</span></td>
                                    <td><span>-97.7</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_32"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_32">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs Norwegian Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart32"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPNOK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.56
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.56
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>GBPNZD<br> Great Britain Pound vs New Zealand Dollar</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">3.0</span></td>
                                    <td><span>-15</span></td>
                                    <td><span>-2.78</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_33"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_33">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs New Zealand Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart33"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPNZD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -15
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -15
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>GBPSEK<br> Great Britain Pound vs Swedish Krone</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">35.7</span></td>
                                    <td><span>0.31</span></td>
                                    <td><span>-99.26</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_34"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_34">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs Swedish Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart34"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPSEK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.31
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.31
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>GBPSGD<br> Great Britain Pound vs Singapore Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">2.8</span></td>
                                    <td><span>-11.74</span></td>
                                    <td><span>-2.84</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_35"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_35">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs Singapore Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart35"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPSGD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -11.74
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -11.74
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>GBPUSD<br> Great Britain Pound vs US Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.2</span></td>
                                    <td><span>-8.6</span></td>
                                    <td><span>-2.02</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_36"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_36">
                                    <td colspan="7">
                                        <h2>Great Britain Pound vs US Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart36"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    GBPUSD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 GBP
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -8.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -8.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>NOKSEK<br> Norwegian Krone vs Swedish Krone</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">3.4</span></td>
                                    <td><span>-2.4</span></td>
                                    <td><span>-4.8</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_37"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_37">
                                    <td colspan="7">
                                        <h2>Norwegian Krone vs Swedish Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart37"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    NOKSEK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 NOK
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.4
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.4
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>NZDCAD<br> New Zealand Dollar vs Canadian Dollar</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">0.6</span></td>
                                    <td><span>-1</span></td>
                                    <td><span>-4.19</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_38"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_38">
                                    <td colspan="7">
                                        <h2>New Zealand Dollar vs Canadian Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart38"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    NZDCAD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 NZD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>NZDCHF<br> New Zealand Dollar vs Swiss Franc</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">0.6</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span>-11.59</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_39"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_39">
                                    <td colspan="7">
                                        <h2>New Zealand Dollar vs Swiss Franc</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart39"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    NZDCHF                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 NZD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.1
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.1
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>NZDJPY<br> New Zealand Dollar vs Japanese Yen</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">1.0</span></td>
                                    <td><span>0.15</span></td>
                                    <td><span>-16.55</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_40"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_40">
                                    <td colspan="7">
                                        <h2>New Zealand Dollar vs Japanese Yen</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart40"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    NZDJPY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 NZD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.15
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.15
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>NZDSGD<br> New Zealand Dollar vs Singapore Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">2.4</span></td>
                                    <td><span>-3.38</span></td>
                                    <td><span>-4.87</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_41"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_41">
                                    <td colspan="7">
                                        <h2>New Zealand Dollar vs Singapore Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart41"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    NZDSGD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 NZD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -3.38
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -3.38
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>NZDUSD<br> New Zealand Dollar vs US Dollar</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span class="current-spread-value">0.2</span></td>
                                    <td><span>-2.26</span></td>
                                    <td><span>-3.07</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_42"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_42">
                                    <td colspan="7">
                                        <h2>New Zealand Dollar vs US Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart42"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    NZDUSD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 NZD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.26
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.26
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>SGDJPY<br> Singapore Dollar vs Japanese Yen</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">2.7</span></td>
                                    <td><span>0.07</span></td>
                                    <td><span>-20.27</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_43"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_43">
                                    <td colspan="7">
                                        <h2>Singapore Dollar vs Japanese Yen</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart43"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    SGDJPY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 SGD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.07
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.07
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDBRL<br> US Dollar vs Brazilian Real</span></td>
                                    <td><span>1.2</span></td>
                                    <td><span class="current-spread-value">2.2</span></td>
                                    <td><span>-120</span></td>
                                    <td><span>-4</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_44"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_44">
                                    <td colspan="7">
                                        <h2>US Dollar vs Brazilian Real</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart44"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDBRL                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -120
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -120
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>USDCAD<br> US Dollar vs Canadian Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.3</span></td>
                                    <td><span>-1.67</span></td>
                                    <td><span>-6.14</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_45"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_45">
                                    <td colspan="7">
                                        <h2>US Dollar vs Canadian Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart45"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDCAD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1.67
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1.67
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDCHF<br> US Dollar vs Swiss Franc</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.3</span></td>
                                    <td><span>0.15</span></td>
                                    <td><span>-18.23</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_46"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_46">
                                    <td colspan="7">
                                        <h2>US Dollar vs Swiss Franc</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart46"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDCHF                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.15
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.15
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>USDCNH<br> US Dollar vs Chinese Renminbi Yuan</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">3.7</span></td>
                                    <td><span>0.9</span></td>
                                    <td><span>-82</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_47"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_47">
                                    <td colspan="7">
                                        <h2>US Dollar vs Chinese Renminbi Yuan</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart47"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDCNH                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.9
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.9
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDCZK<br> US Dollar vs Czech Koruna</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">62.0</span></td>
                                    <td><span>-274</span></td>
                                    <td><span>0.9</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_48"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_48">
                                    <td colspan="7">
                                        <h2>US Dollar vs Czech Koruna</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart48"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDCZK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -274
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -274
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>USDDKK<br> US Dollar vs Danish Krone</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">4.1</span></td>
                                    <td><span>0.55</span></td>
                                    <td><span>-67.78</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_49"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_49">
                                    <td colspan="7">
                                        <h2>US Dollar vs Danish Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart49"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDDKK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.55
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.55
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDHKD<br> US Dollar vs Hong Kong Dollar</span></td>
                                    <td><span>0.2</span></td>
                                    <td><span class="current-spread-value">1.1</span></td>
                                    <td><span>0.7</span></td>
                                    <td><span>-78.37</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_50"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_50">
                                    <td colspan="7">
                                        <h2>US Dollar vs Hong Kong Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart50"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDHKD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.7
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.7
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>USDHUF<br> US Dollar vs Hungarian Forint</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">36.0</span></td>
                                    <td><span>-176.45</span></td>
                                    <td><span>0.6</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_51"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_51">
                                    <td colspan="7">
                                        <h2>US Dollar vs Hungarian Forint</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart51"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDHUF                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -176.45
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -176.45
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDILS<br> US Dollar vs Israeli Shekel</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">25.7</span></td>
                                    <td><span>-9.6</span></td>
                                    <td><span>-10.8</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_52"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_52">
                                    <td colspan="7">
                                        <h2>US Dollar vs Israeli Shekel</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart52"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDILS                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -9.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -9.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>USDJPY<br> US Dollar vs Japanese Yen</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.5</span></td>
                                    <td><span>0.4</span></td>
                                    <td><span>-26.9</span></td>
                                    <td><span>3.33</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_53"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_53">
                                    <td colspan="7">
                                        <h2>US Dollar vs Japanese Yen</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart53"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDJPY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.4
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.4
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDMXN<br> US Dollar vs Mexican Peso</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">31.9</span></td>
                                    <td><span>-630</span></td>
                                    <td><span>0.3</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_54"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_54">
                                    <td colspan="7">
                                        <h2>US Dollar vs Mexican Peso</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart54"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDMXN                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -630
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -630
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>USDNOK<br> US Dollar vs Norwegian Krone</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">14.0</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span>-92</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_55"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_55">
                                    <td colspan="7">
                                        <h2>US Dollar vs Norwegian Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart55"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDNOK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.1
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.1
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDPLN<br> US Dollar vs Polish Zloty</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">15.5</span></td>
                                    <td><span>-47.72</span></td>
                                    <td><span>0.12</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_56"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_56">
                                    <td colspan="7">
                                        <h2>US Dollar vs Polish Zloty</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart56"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDPLN                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -47.72
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -47.72
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>USDRON<br> US Dollar vs Romanian Leu</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">12.8</span></td>
                                    <td><span>-6</span></td>
                                    <td><span>0.1</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_57"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_57">
                                    <td colspan="7">
                                        <h2>US Dollar vs Romanian Leu</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart57"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDRON                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDSEK<br> US Dollar vs Swedish Krone</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">23.0</span></td>
                                    <td><span>0.7</span></td>
                                    <td><span>-91.87</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_58"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_58">
                                    <td colspan="7">
                                        <h2>US Dollar vs Swedish Krone</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart58"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDSEK                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.7
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    0.7
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>USDSGD<br> US Dollar vs Singapore Dollar</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.8</span></td>
                                    <td><span>-5.64</span></td>
                                    <td><span>-5.71</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_59"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_59">
                                    <td colspan="7">
                                        <h2>US Dollar vs Singapore Dollar</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart59"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDSGD                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -5.64
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -5.64
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDTHB<br> US Dollar vs Thai Baht</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">0.3</span></td>
                                    <td><span>-3.6</span></td>
                                    <td><span>-3.4</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_60"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_60">
                                    <td colspan="7">
                                        <h2>US Dollar vs Thai Baht</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart60"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDTHB                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -3.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -3.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #ddd">
                                    <td><span>USDTRY<br> US Dollar vs Turkish Lira</span></td>
                                    <td><span>3.5</span></td>
                                    <td><span class="current-spread-value">35.0</span></td>
                                    <td><span>-920.25</span></td>
                                    <td><span>1</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_61"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_61">
                                    <td colspan="7">
                                        <h2>US Dollar vs Turkish Lira</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart61"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDTRY                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -920.25
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -920.25
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>USDZAR<br> US Dollar vs South African Rand</span></td>
                                    <td><span>0.0</span></td>
                                    <td><span class="current-spread-value">35.5</span></td>
                                    <td><span>-276.16</span></td>
                                    <td><span>1</span></td>
                                    <td><span>5.00</span></td>
                                    <td><span>1.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_62"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_62">
                                    <td colspan="7">
                                        <h2>US Dollar vs South African Rand</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart62"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USDZAR                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 USD
                                                                                                        </p>
            
                                                    <p class="m-0">
                                                        
                                                                        Hedging:
                                                                        100,00%
                                                                                                            </p>
            
                                                    <p>
                                                        
                                                                    Execution:
                                                                    Market execution
                                                                                                        </p>
                                                    
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">Bid</div>
                                                            <div class="col">Ask</div>
                                                            <div class="col">Spread</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">82.576</div>
                                                            <div class="col">82.594</div>
                                                            <div class="col">0.018</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="m-0 mt-3">
                                                        
                                                                    Commission:
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -276.16
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -276.16
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                </tbody>
        </table>

        <div class="row  g-2">
            <div class="col">
                <ul class="ul_pages">

                    <li class="btn-prev">Prev</li>
                    <li class="num-page">1</li>
                    <li class="btn-next">Next</li>

                </ul>
            </div>
        </div>

    </div>

    <section>
        <center>
            <h3 class="">Frequently asked questions</h3>
            <h6 class="text-white-50">Here are our most frequently asked questions about trading forex with Exness.</h6>
        </center>

        <div class="container mt-4">

            <div class="ask_div p-3">

                <a class="ask_click" data-bs-toggle="collapse" href="#what_is_forex_trading" role="button"
                    aria-expanded="false" aria-controls="what_is_forex_trading">
                    What is Forex Trading?
                </a>

                <div class="collapse multi-collapse" id="what_is_forex_trading">
                    <div class="p-3">
                        <p>Forex trading, also known by the name of currency trading or FX trading, refers to buying a
                            particular currency while selling another in exchange. Trading currencies always involves
                            exchanging one currency for another.</p>
                        <p>The ultimate aim can vary and can be any of the below but not limited to the below:</p>
                        <ul class="ftr-faq">
                            <li>1. Exchanging currency A (e.g. USD) to currency B (e.g. EUR) for travelling purposes;</li>
                            <li>2. Exchanging currency A (e.g. USD) to currency B (e.g. EUR) for trading purposes;</li>
                            <li>3. Exchanging currency A (e.g. USD) to currency B (e.g. EUR) for speculative purposes, with
                                the goal to make a profit.</li>
                        </ul>
                        <p>Due to all the above, and not limited to the above, the forex trading market is today the world’s
                            most liquid and most volatile market, with over $5 trillion traded daily.</p>

                    </div>
                </div>
            </div>

            <div class="ask_div ask_div2 p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#how_does_forex_trading_work" role="button"
                    aria-expanded="false" aria-controls="how_does_forex_trading_work">
                    How Does Forex Trading Work?
                </a>

                <div class="collapse multi-collapse" id="how_does_forex_trading_work">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>Forex trading is in essence trading currencies for one another. As such, an XM client sells
                                one currency against another at a current market rate.</p>
                            <p>In order to be able to trade, it is required to open an account and hold currency A and then
                                exchange currency A for currency B either for a long term or a short-term trade, with the
                                ultimate goal varying accordingly.</p>
                            <p>Since FX trading is performed on currency pairs (i.e. the quotation of the relative value of
                                one currency unit against another currency unit), in which the first currency is the
                                so-called base currency, while the second currency is called the quote currency.</p>
                            <p>For example, the quotation EUR/USD 1.2345 is the price of the euro expressed in US dollars,
                                which means that 1 euro equals 1.2345 US dollars.</p>
                            <p>Currency trading can be carried out 24 hours a day, from 22.00 GMT on Sunday until 22.00 GMT
                                on Friday, with currencies traded among the major financial centers of London, New York,
                                Tokyo, Zürich, Frankfurt, Paris, Sydney, Singapore and Hong Kong.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ask_div  p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#what_influences_prices_in_forex_trading"
                    role="button" aria-expanded="false" aria-controls="what_influences_prices_in_forex_trading">
                    What Influences Prices in Forex Trading?
                </a>

                <div class="collapse multi-collapse" id="what_influences_prices_in_forex_trading">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>There is an endless number of factors that all contribute and influence the prices in forex
                                trading (i.e. currency rates) daily, but it could be safe to say that there are 6 major
                                factors which contribute the most and are more or less the main driving forces for forex
                                trading price fluctuation:</p>
                            <ul class="ftr-faq">
                                <li>1. Differentials in inflation</li>
                                <li>2. Differentials in interest rates</li>
                                <li>3. Current account deficits</li>
                                <li>4. Public debt</li>
                                <li>5. Terms of trade</li>
                                <li>6. Political and economic stability</li>
                            </ul>
                            <p>In order to best comprehend the above 6 factors, you will have to keep in mind that
                                currencies are traded against one another. So when one falls, another one rises as the price
                                denomination of any currency is always stated against another currency.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ask_div ask_div2 p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#what_is_forex_trading_software" role="button"
                    aria-expanded="false" aria-controls="what_is_forex_trading_software">
                    What is Forex Trading Software?
                </a>

                <div class="collapse multi-collapse" id="what_is_forex_trading_software">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>Forex trading software is an online trading platform provided to each XM client, which allows
                                them to view, analyze and trade currencies, or other asset classes</p>

                            <p>In simple terms, each XM client is provided access to a trading platform (i.e. software)
                                which is directly connected to the global market price feed and allows them to perform
                                transactions without the help of a third party.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ask_div  p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#who_are_forex_trading_market_participants"
                    role="button" aria-expanded="false" aria-controls="who_are_forex_trading_market_participants">
                    Who are Forex Trading Market Participants?
                </a>

                <div class="collapse multi-collapse" id="who_are_forex_trading_market_participants">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>Forex trading market participants can fall in any of the following categories:</p>
                            <ul class="ftr-faq">
                                <li>1. Travellers or overseas consumers who exchange money to travel overseas or purchase
                                    goods from overseas.</li>
                                <li>2. Businesses that purchase raw materials or goods from overseas and need to exchange
                                    their local currency to the currency of the country of the seller.</li>
                                <li>3. Investors or speculators who exchange currencies, which either require a foreign
                                    currency, to perform trading in equities or other asset classes from overseas or either
                                    are trading currencies with the aim of making a profit from market changes.</li>
                                <li>4. Banking institutions that exchange money to service their clients or to lend money to
                                    overseas clients.</li>
                                <li>5. Governments or central banks that either buy or sell currencies and try to adjust
                                    financial imbalances, or adjust economic conditions.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section style="background-color: #333; height: 0px;" class="mt-5">
        <div class="container bg-w1 height_postion_50 rounded">
            <div class="row justify-content-between align-items-center m-0 p-4">
                <div class="col-md-9">
                    <h2 class="m-0 fw-800">Ready to <span class="color2">trade?</span></h2>
                    <p class="m-0 mt-2 fs-14 text-black-50">Opening an account takes less than 5 minutes. Start your
                        trading <br>journey with TradeLive AI 
                        today.</p>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary">Open Account</button>
                    &nbsp;
                    <button type="button" class="btn btn-outline-success">Free Demo</button>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        function chartt(myid) {
            const ctx = document.getElementById(myid);

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['2014-Nov', '2014-Dec', '2015-Jan', '2015-Feb', '2015-Apr', '2015-May', '2015-Jun',
                        '2015-Jul', '2015-Aug', '2015-Sep', '2015-Oct', '2015-Oct', '2015-Nov', '2015-Dec',
                        '2016-Jan', '2016-Feb', '2016-Apr', '2016-May', '2016-Jun', '2016-Jul', '2016-Aug',
                        '2016-Sep', '2016-Oct', '2016-Oct', '2016-Nov', '2016-Dec', '2017-Jan', '2017-Feb',
                        '2017-Apr', '2017-May', '2017-Jun', '2017-Jul', '2017-Aug', '2017-Sep', '2017-Oct',
                        '2017-Oct', '2017-Nov', '2017-Dec', '2018-Jan', '2018-Feb', '2018-Apr', '2018-May',
                        '2018-Jun', '2018-Jul', '2018-Aug', '2018-Sep', '2018-Oct', '2018-Oct', '2018-Nov',
                        '2018-Dec', '2019-Jan', '2019-Feb', '2019-Apr', '2019-May', '2019-Jun', '2019-Jul',
                        '2019-Aug', '2019-Sep', '2019-Oct', '2019-Oct', '2019-Nov', '2019-Dec', '2020-Jan',
                        '2020-Feb', '2020-Apr', '2020-May', '2020-Jun', '2020-Jul', '2020-Aug', '2020-Sep',
                        '2020-Oct', '2020-Oct', '2020-Nov', '2020-Dec', '2021-Jan', '2021-Feb', '2021-Apr',
                        '2021-May', '2021-Jun', '2021-Jul', '2021-Aug', '2021-Sep', '2021-Oct', '2021-Oct',
                        '2021-Nov', '2021-Dec', '2022-Jan', '2022-Feb', '2022-Apr', '2022-May', '2022-Jun',
                        '2022-Jul', '2022-Aug', '2022-Sep', '2022-Oct', '2022-Oct', '2022-Nov', '2022-Dec',
                        '2023-Jan', '2023-Feb'
                    ],
                    datasets: [{
                        label: 'CADCHF',
                        data: [0.8447, 0.8545, 0.729, 0.7625, 0.7663, 0.7728, 0.755, 0.7481, 0.738, 0.7356,
                            0.7305, 0.7549, 0.7698, 0.7195, 0.731, 0.7369, 0.7402, 0.7638, 0.7585,
                            0.7535,
                            0.7431, 0.75, 0.7397, 0.7369, 0.7567, 0.7579, 0.7589, 0.7558, 0.7526, 0.728,
                            0.7168, 0.7386, 0.7739, 0.76718, 0.7783, 0.7734, 0.76212, 0.77509, 0.75597,
                            0.73587, 0.73929, 0.77146, 0.76036, 0.75363, 0.76079, 0.74182, 0.76087,
                            0.76568,
                            0.75395, 0.72114, 0.75748, 0.75731, 0.74512, 0.76012, 0.74024, 0.74535,
                            0.75325,
                            0.743, 0.75344, 0.74933, 0.75281, 0.74554, 0.72772, 0.71694, 0.68256,
                            0.69247,
                            0.69814, 0.69746, 0.68124, 0.69242, 0.69039, 0.68695, 0.69677, 0.69294,
                            0.6961,
                            0.71283, 0.75082, 0.74135, 0.74446, 0.74548, 0.72416, 0.72509, 0.73369,
                            0.73835,
                            0.71832, 0.71973, 0.72924, 0.72299, 0.73761, 0.75721, 0.75849, 0.74155,
                            0.74301,
                            0.74444, 0.7137, 0.73504, 0.70401, 0.68027, 0.68784, 0.69024
                        ],
                        borderWidth: 1,
                        fill: 'start'
                    }]
                },
                options: {
                    plugins: {
                        filler: {
                            propagate: false,
                        },
                    },
                    elements: {
                        line: {
                            tension: 0.4
                        }
                    }
                }
            });
        }

        @for ($i = 0; $i < 70; $i++)
            chartt("myChart{{ $i }}");
        @endfor
    </script>
@endsection



@section('scripts')
@endsection
