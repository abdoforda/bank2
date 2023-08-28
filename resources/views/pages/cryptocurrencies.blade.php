@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/cryptocurrencies.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Cryptocurrencies')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>
                @lang('Explore trading on the most common cryptocurrencies, including Bitcoin, Ethereum, and other popular digital currencies, from global cryptocurrency markets.') 

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
                                    <td><span>ADAUSD.<br> Cardano vs US Dollar</span></td>
                                    <td><span>0.00150</span></td>
                                    <td><span class="current-spread-value">0.00150</span></td>
                                    <td><span>-12</span></td>
                                    <td><span>-7</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_0"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_0">
                                    <td colspan="7">
                                        <h2>Cardano vs US Dollar</h2>
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
                                                                    ADAUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    10000 
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
                                                                    -12
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -12
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>ALGUSD.<br> Algorand vs US Dollar</span></td>
                                    <td><span>0.0007</span></td>
                                    <td><span class="current-spread-value">0.0007</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>20.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_1"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_1">
                                    <td colspan="7">
                                        <h2>Algorand vs US Dollar</h2>
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
                                                                    ALGUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    10000 
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
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>APEUSD.<br> APE Coin vs US Dollar</span></td>
                                    <td><span>0.0010</span></td>
                                    <td><span class="current-spread-value">0.0015</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_2"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_2">
                                    <td colspan="7">
                                        <h2>APE Coin vs US Dollar</h2>
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
                                                                    APEUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>AVEUSD.<br> Aave vs US Dollar</span></td>
                                    <td><span>0.09</span></td>
                                    <td><span class="current-spread-value">0.18</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_3"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_3">
                                    <td colspan="7">
                                        <h2>Aave vs US Dollar</h2>
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
                                                                    AVEUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    10 
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
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>AVXUSD.<br> Avalanche vs US Dollar</span></td>
                                    <td><span>0.01</span></td>
                                    <td><span class="current-spread-value">0.01</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>-0.7</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>20.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_4"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_4">
                                    <td colspan="7">
                                        <h2>Avalanche vs US Dollar</h2>
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
                                                                    AVXUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>BCHUSD.<br> Bitcoin Cash vs US Dollar</span></td>
                                    <td><span>0.080</span></td>
                                    <td><span class="current-spread-value">0.100</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>-0.7</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_5"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_5">
                                    <td colspan="7">
                                        <h2>Bitcoin Cash vs US Dollar</h2>
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
                                                                    BCHUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>BNBUSD.<br> Binance vs US Dollar</span></td>
                                    <td><span>0.320</span></td>
                                    <td><span class="current-spread-value">0.320</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>-5.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_6"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_6">
                                    <td colspan="7">
                                        <h2>Binance vs US Dollar</h2>
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
                                                                    BNBUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    1 
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
                                                                    -10.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -10.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>BSVUSD.<br> Bitcoin SV vs US Dollar</span></td>
                                    <td><span>0.07</span></td>
                                    <td><span class="current-spread-value">0.15</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_7"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_7">
                                    <td colspan="7">
                                        <h2>Bitcoin SV vs US Dollar</h2>
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
                                                                    BSVUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    10 
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
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>BTCUSD.<br> Bitcoin vs US Dollar</span></td>
                                    <td><span>16.09</span></td>
                                    <td><span class="current-spread-value">16.14</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>-0.7</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>25.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_8"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_8">
                                    <td colspan="7">
                                        <h2>Bitcoin vs US Dollar</h2>
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
                                                                    BTCUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    1 
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
                                                                    -1.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -1.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>CHZUSD.<br> Chilliz vs US Dollar</span></td>
                                    <td><span>0.0003</span></td>
                                    <td><span class="current-spread-value">0.0003</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>100.00</span></td>
                                    <td><span>100.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_9"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_9">
                                    <td colspan="7">
                                        <h2>Chilliz vs US Dollar</h2>
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
                                                                    CHZUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 
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
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>DOGUSD.<br> DogeCoin vs US Dollar</span></td>
                                    <td><span>0.00050</span></td>
                                    <td><span class="current-spread-value">0.00050</span></td>
                                    <td><span>-20.2</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_10"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_10">
                                    <td colspan="7">
                                        <h2>DogeCoin vs US Dollar</h2>
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
                                                                    DOGUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 
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
                                                                    -20.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>DOTUSD.<br> Polkadot vs US Dollar</span></td>
                                    <td><span>0.007</span></td>
                                    <td><span class="current-spread-value">0.007</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_11"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_11">
                                    <td colspan="7">
                                        <h2>Polkadot vs US Dollar</h2>
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
                                                                    DOTUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>DSHUSD.<br> Dash vs US Dollar</span></td>
                                    <td><span>0.110</span></td>
                                    <td><span class="current-spread-value">0.120</span></td>
                                    <td><span>-20.2</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_12"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_12">
                                    <td colspan="7">
                                        <h2>Dash vs US Dollar</h2>
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
                                                                    DSHUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    10 
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
                                                                    -20.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>EOSUSD.<br> EOS vs US Dollar</span></td>
                                    <td><span>0.0110</span></td>
                                    <td><span class="current-spread-value">0.0110</span></td>
                                    <td><span>-20.2</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_13"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_13">
                                    <td colspan="7">
                                        <h2>EOS vs US Dollar</h2>
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
                                                                    EOSUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>ETCUSD.<br> Ethereum Classic vs US Dollar</span></td>
                                    <td><span>0.010</span></td>
                                    <td><span class="current-spread-value">0.010</span></td>
                                    <td><span>-20.2</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_14"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_14">
                                    <td colspan="7">
                                        <h2>Ethereum Classic vs US Dollar</h2>
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
                                                                    ETCUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    1 
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
                                                                    -20.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>ETHUSD.<br> Ethereum vs US Dollar</span></td>
                                    <td><span>2.300</span></td>
                                    <td><span class="current-spread-value">2.300</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>-5.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>25.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_15"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_15">
                                    <td colspan="7">
                                        <h2>Ethereum vs US Dollar</h2>
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
                                                                    ETHUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    1 
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
                                                                    -10.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -10.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>HTHUSD.<br> Huobi Token vs US Dollar</span></td>
                                    <td><span>0.0001</span></td>
                                    <td><span class="current-spread-value">0.0011</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_16"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_16">
                                    <td colspan="7">
                                        <h2>Huobi Token vs US Dollar</h2>
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
                                                                    HTHUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>LNKUSD.<br> Chainlink vs US Dollar</span></td>
                                    <td><span>0.00700</span></td>
                                    <td><span class="current-spread-value">0.00700</span></td>
                                    <td><span>-200.2</span></td>
                                    <td><span>-200.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_17"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_17">
                                    <td colspan="7">
                                        <h2>Chainlink vs US Dollar</h2>
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
                                                                    LNKUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -200.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -200.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>LTCUSD.<br> Litecoin vs US Dollar</span></td>
                                    <td><span>0.0140</span></td>
                                    <td><span class="current-spread-value">0.0240</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>-5.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>25.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_18"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_18">
                                    <td colspan="7">
                                        <h2>Litecoin vs US Dollar</h2>
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
                                                                    LTCUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -10.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -10.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>MNAUSD.<br> Decentraland vs US Dollar</span></td>
                                    <td><span>0.0001</span></td>
                                    <td><span class="current-spread-value">0.0001</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_19"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_19">
                                    <td colspan="7">
                                        <h2>Decentraland vs US Dollar</h2>
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
                                                                    MNAUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>MTCUSD.<br> Polygon Matic vs US Dollar</span></td>
                                    <td><span>0.00100</span></td>
                                    <td><span class="current-spread-value">0.00100</span></td>
                                    <td><span>-200.2</span></td>
                                    <td><span>-100.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_20"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_20">
                                    <td colspan="7">
                                        <h2>Polygon Matic vs US Dollar</h2>
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
                                                                    MTCUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    1000 
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
                                                                    -200.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -200.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>ONEUSD.<br> Harmony vs US Dollar</span></td>
                                    <td><span>0.00013</span></td>
                                    <td><span class="current-spread-value">0.00013</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_21"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_21">
                                    <td colspan="7">
                                        <h2>Harmony vs US Dollar</h2>
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
                                                                    ONEUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 
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
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>SHBUSD.<br> Shiba Inu vs US Dollar</span></td>
                                    <td><span>0.03800000</span></td>
                                    <td><span class="current-spread-value">0.03800000</span></td>
                                    <td><span>-20000.2</span></td>
                                    <td><span>-20000.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>20.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_22"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_22">
                                    <td colspan="7">
                                        <h2>Shiba Inu vs US Dollar</h2>
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
                                                                    SHBUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    1000 
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
                                                                    -20000.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20000.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>SNDUSD.<br> Sandbox vs US Dollar</span></td>
                                    <td><span>0.0005</span></td>
                                    <td><span class="current-spread-value">0.0005</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_23"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_23">
                                    <td colspan="7">
                                        <h2>Sandbox vs US Dollar</h2>
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
                                                                    SNDUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>SOLUSD.<br> Solana vs US Dollar</span></td>
                                    <td><span>0.0200</span></td>
                                    <td><span class="current-spread-value">0.0500</span></td>
                                    <td><span>-200.2</span></td>
                                    <td><span>-200.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_24"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_24">
                                    <td colspan="7">
                                        <h2>Solana vs US Dollar</h2>
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
                                                                    SOLUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    10 
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
                                                                    -200.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -200.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>THTUSD.<br> Theta vs US Dollar</span></td>
                                    <td><span>0.003</span></td>
                                    <td><span class="current-spread-value">0.003</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>20.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_25"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_25">
                                    <td colspan="7">
                                        <h2>Theta vs US Dollar</h2>
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
                                                                    THTUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    1000 
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
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>TRXUSD.<br> Tron vs US Dollar</span></td>
                                    <td><span>0.00007</span></td>
                                    <td><span class="current-spread-value">0.00009</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>20.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_26"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_26">
                                    <td colspan="7">
                                        <h2>Tron vs US Dollar</h2>
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
                                                                    TRXUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    100000 
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
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>UNIUSD.<br> Uniswap vs US Dollar</span></td>
                                    <td><span>0.0090</span></td>
                                    <td><span class="current-spread-value">0.0090</span></td>
                                    <td><span>-20.2</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>20.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_27"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_27">
                                    <td colspan="7">
                                        <h2>Uniswap vs US Dollar</h2>
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
                                                                    UNIUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    1000 
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
                                                                    -20.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>VETUSD.<br> VeChain vs US Dollar</span></td>
                                    <td><span>0.00003</span></td>
                                    <td><span class="current-spread-value">0.00003</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_28"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_28">
                                    <td colspan="7">
                                        <h2>VeChain vs US Dollar</h2>
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
                                                                    VETUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    10000 
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
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>XLMUSD.<br> Stellar Lumens vs US Dollar</span></td>
                                    <td><span>0.00110</span></td>
                                    <td><span class="current-spread-value">0.00110</span></td>
                                    <td><span>-20.2</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_29"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_29">
                                    <td colspan="7">
                                        <h2>Stellar Lumens vs US Dollar</h2>
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
                                                                    XLMUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    10000 
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
                                                                    -20.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>XMRUSD.<br> Monero vs US Dollar</span></td>
                                    <td><span>0.130</span></td>
                                    <td><span class="current-spread-value">0.240</span></td>
                                    <td><span>-20.2</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>50.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_30"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_30">
                                    <td colspan="7">
                                        <h2>Monero vs US Dollar</h2>
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
                                                                    XMRUSD.                                                    </h4>
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
                                                                    0.008%
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -20.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr style="background: #1c1c1cba">
                                    <td><span>XRPUSD.<br> Ripple vs US Dollar</span></td>
                                    <td><span>0.00090</span></td>
                                    <td><span class="current-spread-value">0.00090</span></td>
                                    <td><span>-10.2</span></td>
                                    <td><span>-5.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>25.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_31"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_31">
                                    <td colspan="7">
                                        <h2>Ripple vs US Dollar</h2>
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
                                                                    XRPUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    10000 
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
                                                                    -10.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -10.2
                                                                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                    
                <tr>
                                    <td><span>XTZUSD.<br> Tezos vs US Dollar</span></td>
                                    <td><span>0.003</span></td>
                                    <td><span class="current-spread-value">0.003</span></td>
                                    <td><span>-2.2</span></td>
                                    <td><span>-1.2</span></td>
                                    <td><span>50.00</span></td>
                                    <td><span>20.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_32"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_32">
                                    <td colspan="7">
                                        <h2>Tezos vs US Dollar</h2>
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
                                                                    XTZUSD.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    1000 
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
                                                                    -2.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -2.2
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
                __('Here are our most frequently asked questions about trading cryptocurrencies with Highness Investment LLC.'),
            'items' => [
                [
                    'title' => __('What are cryptocurrencies, and how can I trade in them?'),
                    'bode' =>
                        __('Cryptocurrencies are digital currencies that use encryption techniques to secure their transactions and control the generation of new units. To trade in cryptocurrencies, you will need to open a trading account with a reputable broker that offers cryptocurrency trading, to deposit funds, and then start placing trades on the cryptocurrency market using various order types.'),
                ],
                [
                    'title' => __('What are the risks of cryptocurrency trading?'),
                    'bode' =>
                        __('Cryptocurrency trading can be highly risky, as it involves trading on a relatively new and volatile market. Cryptocurrencies are subject to various factors, such as market sentiment, regulatory changes, and technological developments. Further, cryptocurrencies can be affected by external events, such as cyber attacks and hacking incidents.'),
                ],
                [
                    'title' => __('What strategies can I use for cryptocurrency trading?'),
                    'bode' =>
                        __('There are various strategies that traders use for cryptocurrency trading, such as swing trading, scalping, and day trading. Each strategy has its own pros and cons, and it is important to choose a strategy that fits your trading tactics and risk tolerance.'),
                ],
                [
                    'title' => __('What is the margin requirement for cryptocurrency trading?'),
                    'bode' =>
                        __("The margin requirement for cryptocurrency trading varies depending on the broker and the specific cryptocurrency you are trading in. Margin requirements can range from 20% to 50% or more, depending on the volatility of the cryptocurrency and the broker's risk management policies."),
                ],
                [
                    'title' => __('What are the best cryptocurrencies to trade?'),
                    'bode' =>
                        __('The best cryptocurrencies to trade depend on your trading style and preferences. Some popular cryptocurrencies include Bitcoin, Ethereum, and Litecoin. It is important to conduct your own research and analysis before deciding which cryptocurrencies to trade in. Further, diversifying your portfolio across various cryptocurrencies can help to minimize risk.'),
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
    </script>
@endsection



@section('scripts')
@endsection
