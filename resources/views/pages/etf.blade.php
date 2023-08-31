@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/etf.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('ETF')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>
                @lang('Explore a wide selection of global treasury bonds and bills, including US Treasury bonds, Eurozone bonds, and other sovereign debt securities.') 

            </p>
            </div>
        </div>
        </div>
    </div>


    <div class="container mt-5">

        @include('components.link_forex')

        <div class="table-responsive">
            <table class="table table01">
            <thead>
                <tr>
                    <td>@lang('Instrument')</td>
                    <td>@lang('Minimum Spread')</td>
                    <td>@lang('Current spread')</td>
                    <td>@lang('Long swap')</td>
                    <td>@lang('Short swap')</td>
                    <td>@lang('Ret. margin %')</td>
                    <td>@lang('Prof. margin %')</td>
                </tr>
            </thead>
            <tbody class="pagination_tbody">

	
                <tr>
                                    <td><span>AGG.<br> iShares Core US Aggregate Bond ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_0"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_0">
                                    <td colspan="7">
                                        <h2>iShares Core US Aggregate Bond ETF</h2>
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
                                                                    AGG.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>BIV.<br> Vanguard Intermediate-Term Bond ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_1"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_1">
                                    <td colspan="7">
                                        <h2>Vanguard Intermediate-Term Bond ETF</h2>
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
                                                                    BIV.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>COPX.<br> Global X Copper Miners ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_2"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_2">
                                    <td colspan="7">
                                        <h2>Global X Copper Miners ETF</h2>
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
                                                                    COPX.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>DIA.<br> SPDR Dow Jones Industrial Average Trust ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_3"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_3">
                                    <td colspan="7">
                                        <h2>SPDR Dow Jones Industrial Average Trust ETF</h2>
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
                                                                    DIA.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>ECH.<br> iShares MSCI Chile ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_4"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_4">
                                    <td colspan="7">
                                        <h2>iShares MSCI Chile ETF</h2>
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
                                                                    ECH.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>EFA.<br> iShares MSCI EAFE ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_5"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_5">
                                    <td colspan="7">
                                        <h2>iShares MSCI EAFE ETF</h2>
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
                                                                    EFA.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EMB.<br> iShares JP Morgan USD Emerging Markets Bond ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_6"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_6">
                                    <td colspan="7">
                                        <h2>iShares JP Morgan USD Emerging Markets Bond ETF</h2>
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
                                                                    EMB.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>EWG.<br> iShares MSCI Germany ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_7"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_7">
                                    <td colspan="7">
                                        <h2>iShares MSCI Germany ETF</h2>
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
                                                                    EWG.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EWJ.<br> iShares MSCI Japan ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_8"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_8">
                                    <td colspan="7">
                                        <h2>iShares MSCI Japan ETF</h2>
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
                                                                    EWJ.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>EWQ.<br> iShares MSCI France ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_9"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_9">
                                    <td colspan="7">
                                        <h2>iShares MSCI France ETF</h2>
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
                                                                    EWQ.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EWT.<br> iShares MSCI Taiwan ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_10"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_10">
                                    <td colspan="7">
                                        <h2>iShares MSCI Taiwan ETF</h2>
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
                                                                    EWT.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>EWU.<br> iShares MSCI UK ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_11"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_11">
                                    <td colspan="7">
                                        <h2>iShares MSCI UK ETF</h2>
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
                                                                    EWU.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EWW.<br> iShares MSCI Mexico Capped ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_12"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_12">
                                    <td colspan="7">
                                        <h2>iShares MSCI Mexico Capped ETF</h2>
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
                                                                    EWW.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>EWY.<br> iShares MSCI South Korea Capped ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_13"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_13">
                                    <td colspan="7">
                                        <h2>iShares MSCI South Korea Capped ETF</h2>
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
                                                                    EWY.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>EWZ.<br> iShares MSCI Brazil Capped ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_14"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_14">
                                    <td colspan="7">
                                        <h2>iShares MSCI Brazil Capped ETF</h2>
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
                                                                    EWZ.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>FAS.<br> Direxion Daily Financial Bull 3x Shares ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_15"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_15">
                                    <td colspan="7">
                                        <h2>Direxion Daily Financial Bull 3x Shares ETF</h2>
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
                                                                    FAS.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>FEZ.<br> SPDR Euro Stoxx 50 ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_16"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_16">
                                    <td colspan="7">
                                        <h2>SPDR Euro Stoxx 50 ETF</h2>
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
                                                                    FEZ.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>FXE.<br> CurrencyShares Euro Trust ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_17"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_17">
                                    <td colspan="7">
                                        <h2>CurrencyShares Euro Trust ETF</h2>
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
                                                                    FXE.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>FXI.<br> iShares China Large-Cap ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_18"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_18">
                                    <td colspan="7">
                                        <h2>iShares China Large-Cap ETF</h2>
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
                                                                    FXI.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>GDX.<br> Market Vectors Gold Miners ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_19"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_19">
                                    <td colspan="7">
                                        <h2>Market Vectors Gold Miners ETF</h2>
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
                                                                    GDX.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>GDXJ.<br> VanEck Vectors Junior Gold Miners ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_20"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_20">
                                    <td colspan="7">
                                        <h2>VanEck Vectors Junior Gold Miners ETF</h2>
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
                                                                    GDXJ.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>GLD.<br> SPDR Gold Shares ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_21"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_21">
                                    <td colspan="7">
                                        <h2>SPDR Gold Shares ETF</h2>
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
                                                                    GLD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>HYG.<br> iShares iBoxx $ High Yield Core ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_22"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_22">
                                    <td colspan="7">
                                        <h2>iShares iBoxx $ High Yield Core ETF</h2>
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
                                                                    HYG.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>IAU.<br> iShares Gold Trust ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_23"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_23">
                                    <td colspan="7">
                                        <h2>iShares Gold Trust ETF</h2>
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
                                                                    IAU.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>IBB.<br> iShares NASDAQ Biotechnology Index ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_24"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_24">
                                    <td colspan="7">
                                        <h2>iShares NASDAQ Biotechnology Index ETF</h2>
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
                                                                    IBB.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>ICLN.<br> iShares Global Clean Energy ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_25"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_25">
                                    <td colspan="7">
                                        <h2>iShares Global Clean Energy ETF</h2>
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
                                                                    ICLN.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>IEF.<br> iShares 7-10 Year Treasury Bonds ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_26"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_26">
                                    <td colspan="7">
                                        <h2>iShares 7-10 Year Treasury Bonds ETF</h2>
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
                                                                    IEF.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>IEV.<br> iShares Europe ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_27"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_27">
                                    <td colspan="7">
                                        <h2>iShares Europe ETF</h2>
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
                                                                    IEV.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>IJH.<br> iShares Core S&amp;P Mid-Cap ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.05</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_28"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_28">
                                    <td colspan="7">
                                        <h2>iShares Core S&amp;P Mid-Cap ETF</h2>
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
                                                                    IJH.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>IJR.<br> iShares Core S&amp;P Small-Cap ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>0.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_29"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_29">
                                    <td colspan="7">
                                        <h2>iShares Core S&amp;P Small-Cap ETF</h2>
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
                                                                    IJR.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>ITA.<br> iShares US Aerospace &amp; Defence ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_30"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_30">
                                    <td colspan="7">
                                        <h2>iShares US Aerospace &amp; Defence ETF</h2>
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
                                                                    ITA.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>ITB.<br> iShares US Home Construction ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_31"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_31">
                                    <td colspan="7">
                                        <h2>iShares US Home Construction ETF</h2>
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
                                                                    ITB.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>ITOT.<br> iShares Core S&amp;P Total US Stock Market ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_32"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_32">
                                    <td colspan="7">
                                        <h2>iShares Core S&amp;P Total US Stock Market ETF</h2>
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
                                                                    ITOT.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>IVE.<br> iShares S&amp;P 500 Value ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.05</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_33"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_33">
                                    <td colspan="7">
                                        <h2>iShares S&amp;P 500 Value ETF</h2>
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
                                                                    IVE.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>IVV.<br> iShares Core S&amp;P 500 ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.07</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_34"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_34">
                                    <td colspan="7">
                                        <h2>iShares Core S&amp;P 500 ETF</h2>
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
                                                                    IVV.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>IWF.<br> iShares Russell 1000 Growth ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.09</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_35"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_35">
                                    <td colspan="7">
                                        <h2>iShares Russell 1000 Growth ETF</h2>
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
                                                                    IWF.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>IWN.<br> iShares Russell 2000 Value ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.07</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_36"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_36">
                                    <td colspan="7">
                                        <h2>iShares Russell 2000 Value ETF</h2>
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
                                                                    IWN.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>JNK.<br> SPDR Barclays High Yield Bond ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_37"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_37">
                                    <td colspan="7">
                                        <h2>SPDR Barclays High Yield Bond ETF</h2>
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
                                                                    JNK.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>LQD.<br> iShares iBoxx $ Investment Grade Corporate Bond ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_38"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_38">
                                    <td colspan="7">
                                        <h2>iShares iBoxx $ Investment Grade Corporate Bond ETF</h2>
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
                                                                    LQD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>MDY.<br> SPDR S&amp;P Mid-Cap 400 ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.15</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_39"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_39">
                                    <td colspan="7">
                                        <h2>SPDR S&amp;P Mid-Cap 400 ETF</h2>
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
                                                                    MDY.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>OEF.<br> iShares S&amp;P 100 ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.05</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_40"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_40">
                                    <td colspan="7">
                                        <h2>iShares S&amp;P 100 ETF</h2>
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
                                                                    OEF.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>PALL.<br> Aberdeen Standard Physical Palladium Shares ETF</span></td>
                                    <td><span>0.20</span></td>
                                    <td><span class="current-spread-value">2.10</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_41"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_41">
                                    <td colspan="7">
                                        <h2>Aberdeen Standard Physical Palladium Shares ETF</h2>
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
                                                                    PALL.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>PPLT.<br> Physical Platinum Shares ETF</span></td>
                                    <td><span>0.08</span></td>
                                    <td><span class="current-spread-value">0.87</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_42"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_42">
                                    <td colspan="7">
                                        <h2>Physical Platinum Shares ETF</h2>
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
                                                                    PPLT.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>PSQ.<br> ProShares Short QQQ ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_43"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_43">
                                    <td colspan="7">
                                        <h2>ProShares Short QQQ ETF</h2>
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
                                                                    PSQ.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>QID.<br> ProShares UltraShort QQQ ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_44"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_44">
                                    <td colspan="7">
                                        <h2>ProShares UltraShort QQQ ETF</h2>
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
                                                                    QID.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>QLD.<br> ProShares Ultra QQQ ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_45"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_45">
                                    <td colspan="7">
                                        <h2>ProShares Ultra QQQ ETF</h2>
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
                                                                    QLD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>QQQ.<br> PowerShares QQQ Trust Series 1 ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_46"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_46">
                                    <td colspan="7">
                                        <h2>PowerShares QQQ Trust Series 1 ETF</h2>
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
                                                                    QQQ.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>REMX.<br> VanEck Vectors Rare Earth Strategic Metals ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.19</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_47"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_47">
                                    <td colspan="7">
                                        <h2>VanEck Vectors Rare Earth Strategic Metals ETF</h2>
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
                                                                    REMX.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>RSP.<br> Guggenheim S&amp;P 500 Equal Weight ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_48"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_48">
                                    <td colspan="7">
                                        <h2>Guggenheim S&amp;P 500 Equal Weight ETF</h2>
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
                                                                    RSP.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>SCHD.<br> Schwab US Dividend Equity ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_49"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_49">
                                    <td colspan="7">
                                        <h2>Schwab US Dividend Equity ETF</h2>
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
                                                                    SCHD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>SIL.<br> Global X Silver Miners ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_50"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_50">
                                    <td colspan="7">
                                        <h2>Global X Silver Miners ETF</h2>
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
                                                                    SIL.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>SLV.<br> iShares Silver Trust ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_51"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_51">
                                    <td colspan="7">
                                        <h2>iShares Silver Trust ETF</h2>
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
                                                                    SLV.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>SOXX.<br> iShares PHLX Semiconductor ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.12</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_52"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_52">
                                    <td colspan="7">
                                        <h2>iShares PHLX Semiconductor ETF</h2>
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
                                                                    SOXX.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>SPLV.<br> PowerShares S&amp;P 500 Low Volatility Portfolio ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_53"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_53">
                                    <td colspan="7">
                                        <h2>PowerShares S&amp;P 500 Low Volatility Portfolio ETF</h2>
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
                                                                    SPLV.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>SPY.<br> SPDR S&amp;P 500 Trust ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_54"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_54">
                                    <td colspan="7">
                                        <h2>SPDR S&amp;P 500 Trust ETF</h2>
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
                                                                    SPY.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>SSO.<br> ProShares Ultra S&amp;P 500 ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_55"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_55">
                                    <td colspan="7">
                                        <h2>ProShares Ultra S&amp;P 500 ETF</h2>
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
                                                                    SSO.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>SVXY.<br> ProShares Short VIX Futures ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_56"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_56">
                                    <td colspan="7">
                                        <h2>ProShares Short VIX Futures ETF</h2>
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
                                                                    SVXY.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>TBT.<br> ProShares UltraShort 20+ Year ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_57"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_57">
                                    <td colspan="7">
                                        <h2>ProShares UltraShort 20+ Year ETF</h2>
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
                                                                    TBT.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>TIP.<br> iShares TIPS Bond ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.05</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_58"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_58">
                                    <td colspan="7">
                                        <h2>iShares TIPS Bond ETF</h2>
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
                                                                    TIP.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>TLT.<br> iShares 20+ Year Treasury Bond ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_59"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_59">
                                    <td colspan="7">
                                        <h2>iShares 20+ Year Treasury Bond ETF</h2>
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
                                                                    TLT.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>TQQQ.<br> ProShares UltraPro QQQ ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_60"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_60">
                                    <td colspan="7">
                                        <h2>ProShares UltraPro QQQ ETF</h2>
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
                                                                    TQQQ.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>UNG.<br> US Natural Gas ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_61"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_61">
                                    <td colspan="7">
                                        <h2>US Natural Gas ETF</h2>
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
                                                                    UNG.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>URA.<br> Global X Uranium ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_62"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_62">
                                    <td colspan="7">
                                        <h2>Global X Uranium ETF</h2>
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
                                                                    URA.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>USO.<br> US Oil ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_63"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_63">
                                    <td colspan="7">
                                        <h2>US Oil ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart63"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    USO.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>VEA.<br> Vanguard FTSE Developed Market ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_64"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_64">
                                    <td colspan="7">
                                        <h2>Vanguard FTSE Developed Market ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart64"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    VEA.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>VGT.<br> Vanguard Information Technology ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.11</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_65"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_65">
                                    <td colspan="7">
                                        <h2>Vanguard Information Technology ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart65"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    VGT.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>VNQ.<br> Vanguard REIT ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_66"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_66">
                                    <td colspan="7">
                                        <h2>Vanguard REIT ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart66"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    VNQ.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>VT.<br> Vanguard Total World Stock ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_67"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_67">
                                    <td colspan="7">
                                        <h2>Vanguard Total World Stock ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart67"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    VT.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>VTI.<br> Vanguard Total Stock Market ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_68"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_68">
                                    <td colspan="7">
                                        <h2>Vanguard Total Stock Market ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart68"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    VTI.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>VWO.<br> Vanguard FTSE Emerging Markets ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_69"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_69">
                                    <td colspan="7">
                                        <h2>Vanguard FTSE Emerging Markets ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart69"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    VWO.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>VXX.<br> iPath S&amp;P 500 VIX Short-Term ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_70"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_70">
                                    <td colspan="7">
                                        <h2>iPath S&amp;P 500 VIX Short-Term ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart70"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    VXX.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>XHB.<br> SPDR S&amp;P Homebuilders ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_71"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_71">
                                    <td colspan="7">
                                        <h2>SPDR S&amp;P Homebuilders ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart71"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XHB.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>XLE.<br> SPDR Energy Select Sector ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_72"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_72">
                                    <td colspan="7">
                                        <h2>SPDR Energy Select Sector ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart72"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XLE.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>XLI.<br> SPDR Industrial Select Sector ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_73"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_73">
                                    <td colspan="7">
                                        <h2>SPDR Industrial Select Sector ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart73"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XLI.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>XLK.<br> SPDR Technology Select Sector ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_74"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_74">
                                    <td colspan="7">
                                        <h2>SPDR Technology Select Sector ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart74"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XLK.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>XLP.<br> SPDR Consumer Staples Select Sector ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_75"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_75">
                                    <td colspan="7">
                                        <h2>SPDR Consumer Staples Select Sector ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart75"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XLP.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>XLU.<br> SPDR Utilities Select Sector ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_76"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_76">
                                    <td colspan="7">
                                        <h2>SPDR Utilities Select Sector ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart76"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XLU.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>XLV.<br> SPDR Healthcare Select Sector ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_77"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_77">
                                    <td colspan="7">
                                        <h2>SPDR Healthcare Select Sector ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart77"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XLV.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>XLY.<br> SPDR Consumer Discretionary Select Sector ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_78"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_78">
                                    <td colspan="7">
                                        <h2>SPDR Consumer Discretionary Select Sector ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart78"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XLY.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>XME.<br> SPDR S&amp;P Metals &amp; Mining ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.03</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_79"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_79">
                                    <td colspan="7">
                                        <h2>SPDR S&amp;P Metals &amp; Mining ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart79"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XME.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>XOP.<br> SPDR S&amp;P Oil &amp; Gas Exploration ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_80"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_80">
                                    <td colspan="7">
                                        <h2>SPDR S&amp;P Oil &amp; Gas Exploration ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart80"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XOP.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>XRT.<br> SPDR S&amp;P Retail ETF</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.04</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>20.00</span></td>
                                    <td><span>10.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_81"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_81">
                                    <td colspan="7">
                                        <h2>SPDR S&amp;P Retail ETF</h2>
                                        <div class="row justify-content-center  g-2">
                                            <div class="col-md-6">
                                                <div>
                                                    <canvas id="myChart81"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="" id="pnl-tot-1">
                                                    <h4>
                                                                    Ticker:
                                                                    XRT.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100 
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
                                                                    0.007%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.6
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                </tbody>
        </table>
        </div>

        <div class="row  g-2">
            <div class="col">
                <ul class="ul_pages">

                    <li class="btn-prev">@lang('Prev')</li>
                    <li class="num-page">1</li>
                    <li class="btn-next">@lang('Next')</li>

                </ul>
            </div>
        </div>

    </div>

    @include(
        'components.ask',
    
        [
            'title' => __('Frequently asked questions'),
            'desc' =>
                __('Here are our most frequently asked questions about trading etf with TradeLive AI  Investment LLC.'),
            'items' => [
                [
                    'title' => __('What are ETFs, and how can I trade them?'),
                    'bode' =>
                        __('ETFs, or exchange-traded funds, are investment funds that trade in stock exchanges like shares. ETFs typically track an index, commodity, or basket of assets, and can be bought and sold through a brokerage account like shares. To trade in ETFs, you will need to open a trading account with a reputable broker, to deposit funds, and then start placing trades on the stock market using various order types.'),
                ],
                [
                    'title' => __('What are the risks of ETF trading?'),
                    'bode' =>
                        __('ETF trading can be subject to various risks, such as market volatility, sector-specific risks, and liquidity risks. Further, ETFs can be affected by external events, such as economic indicators and political developments.'),
                ],
                [
                    'title' => __('What strategies can I use for ETF trading?'),
                    'bode' =>
                        __('There are various strategies that traders use for ETF trading, such as passive investing, active investing, and sector rotation. Each strategy has its own pros and cons, and it is important to choose a strategy that fits your trading tactics and risk tolerance.'),
                ],
                [
                    'title' => __('What is the margin requirement for ETF trading?'),
                    'bode' =>
                        __("The margin requirement for ETF trading varies depending on the broker and the specific ETF you are trading in. Margin requirements can range from 10% to 50% or more, depending on the volatility of the ETF and the broker's risk management policies."),
                ],
                [
                    'title' => __('What are the best ETFs to trade?'),
                    'bode' =>
                        __("The best ETFs to trade depend on your trading style and preferences. Some popular ETFs include those that track major indices, such as the S&P 500 and the Dow Jones Industrial Average, as well as those that track specific sectors, such as technology, healthcare, and energy. It is important to conduct your own research and analysis before deciding which ETFs to trade in. Further, diversifying your portfolio across various sectors and asset classes can help to minimize risk."),
                ],
            ],
        ]
    )

    {{-- ready_to --}}
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


        $(function () {
            
            setTimeout(() => {
                $(".btn-next").click();
                $(".btn-prev").click();
            }, 100);

            
        });

    </script>
@endsection



@section('scripts')
@endsection
