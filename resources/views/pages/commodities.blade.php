@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/commodities.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Commodities')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>
                @lang('Explore a diverse range of commodities, including precious metals such as gold and silver, energy commodities such as oil and natural gas, and agricultural commodities like wheat and corn.') 
            </p>
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
                            @lang('Forex')
                        </div>
                    </a>
                </div>


                <div class="col border-end">
                    <a href="{{ route('indices') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/INDICES.jpg.png" alt="">
                        </div>
                        <div class="text-center">
                            @lang('Indices')
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('commodities') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/COMMODITIES.png" alt="">
                        </div>
                        <div class="text-center">
                            @lang('Commodities')
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('metals') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/SHARES.png" alt="">
                        </div>
                        <div class="text-center">
                            @lang('Metals')
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('energyCommodities') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/ENERGIES.png" alt="">
                        </div>
                        <div class="text-center">
                            @lang('Energy commodities')
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('shares') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/CRYPTOCURRENCIES.png" alt="">
                        </div>
                        <div class="text-center">
                            @lang('Shares')
                        </div>
                    </a>
                </div>

                <div class="col border-end">
                    <a href="{{ route('cryptocurrencies') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/TREASURIES.png" alt="">
                        </div>
                        <div class="text-center">
                            @lang('Cryptocurrencies')
                        </div>
                    </a>
                </div>

                <div class="col ">
                    <a href="{{ route('etf') }}">
                        <div class="icon ps-4 pe-4 mb-1 text-center">
                            <img class="img-fluid" src="/images/new_images/icons/METALS.png" alt="">
                        </div>
                        <div class="text-center">
                            @lang('ETF')
                        </div>
                    </a>
                </div>


            </div>
        </div>


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
                                    <td><span>COCOA.<br> US Cocoa (ICE)</span></td>
                                    <td><span>0.00</span></td>
                                    <td><span class="current-spread-value">0.50</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>-2.6</span></td>
                                    <td><span>10.00</span></td>
                                    <td><span>5.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_0"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_0">
                                    <td colspan="7">
                                        <h2>US Cocoa (ICE)</h2>
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
                                                                    COCOA.                                                    </h4>
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
                                    <td><span>COFFEE.<br> Coffee C Arabica (ICE)</span></td>
                                    <td><span>0.00</span></td>
                                    <td><span class="current-spread-value">0.02</span></td>
                                    <td><span>-0.2</span></td>
                                    <td><span>-0.2</span></td>
                                    <td><span>10.00</span></td>
                                    <td><span>5.00</span>                            <button class="crcl tggl min toggle-row" type="button" data-id="hide_tr_1"></button>
                                    </td>
                                </tr>
                                <tr class="hide" id="hide_tr_1">
                                    <td colspan="7">
                                        <h2>Coffee C Arabica (ICE)</h2>
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
                                                                    COFFEE.                                                    </h4>
                                                    <p class="m-0">
                                                        
                                                                    Lot size:
                                                                    375 
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
                                                                    -0.2
                                                                                                        </p>
                                                    <p class="m-0">
                                                        
                                                                    Long swap:
                                                                    -0.2
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
                __('Here are our most frequently asked questions about trading commodities with TradeLive ai.'),
            'items' => [
                [
                    'title' => __('What are commodities, and how can I trade in them?'),
                    'bode' =>
                        __('Commodities are raw materials or primary agricultural products that can be bought and sold, such as gold, silver, oil, wheat, and corn. To trade in commodities, you will need to open a trading account with a reputable broker, to deposit funds, and then start placing trades using derivatives such as contracts for difference (CFDs).'),
                ],
                [
                    'title' => __('What are the risks of commodities trading?'),
                    'bode' =>
                        __('Commodities trading can be highly risky, as it involves trading on leverage, which means you can potentially lose more than your initial investment. Further, the value of commodities is affected by various factors, such as supply and demand, geopolitical events, and weather conditions.'),
                ],
                [
                    'title' => __('What strategies can I use for commodities trading?'),
                    'bode' =>
                        __('There are various strategies that traders use for commodities trading, such as following a trend, mean reversion, and fundamental analysis. Each strategy has its own pros and cons, and it is important to choose a strategy that fits your trading tactics and risk tolerance.'),
                ],
                [
                    'title' => __('What is the margin requirement for commodities trading?'),
                    'bode' =>
                        __("The margin requirement for commodities trading varies depending on the broker and the specific commodity you are trading in. Margin requirements can range from 1% to 20% or more, depending on the volatility of the commodity and the broker's risk management policies."),
                ],
                [
                    'title' => __('What are the best commodities to trade?'),
                    'bode' =>
                        __('The best commodities to trade in depend on your trading tactics and preferences. Some popular commodities include gold, silver, crude oil, natural gas, and agricultural products such as corn, wheat, and soybeans. It is important to conduct your own research and analysis before deciding which commodities to trade in.'),
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
