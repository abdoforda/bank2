@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center"
        style="--img: url(/images/new_images/pages/currency_converter.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Currency Converter')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('Currency converter is a tool that allows traders to convert one currency to another. It provides accurate and up-to-date exchange rates, and helps traders to make informed trading decisions based on currency changes.')</p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row align-items-center g-2">
                <div class="col-md-8">
                    <h3 class="display-5">
                        @lang('Trading Calculator')
                    </h3>


                    <div class="mt-4 calculate__form rounded">
                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col-md-2">
                                <label for="calc_symbol">@lang('Ticker')</label>
                                <select tabindex="0" name="forex_calculator_form[symbol]" id="calc_symbol"
                                    class="js-calculator-symbol">
                                    <option value="AUDCAD" selected="selected">AUDCAD</option>
                                    <option value="AUDCHF">AUDCHF</option>
                                    <option value="AUDJPY">AUDJPY</option>
                                    <option value="AUDNZD">AUDNZD</option>
                                    <option value="AUDUSD">AUDUSD</option>
                                    <option value="CADCHF">CADCHF</option>
                                    <option value="CADJPY">CADJPY</option>
                                    <option value="CHFJPY">CHFJPY</option>
                                    <option value="GBPAUD">GBPAUD</option>
                                    <option value="GBPCAD">GBPCAD</option>
                                    <option value="GBPCHF">GBPCHF</option>
                                    <option value="GBPJPY">GBPJPY</option>
                                    <option value="GBPNZD">GBPNZD</option>
                                    <option value="GBPUSD">GBPUSD</option>
                                    <option value="EURAUD">EURAUD</option>
                                    <option value="EURCAD">EURCAD</option>
                                    <option value="EURCHF">EURCHF</option>
                                    <option value="EURGBP">EURGBP</option>
                                    <option value="EURJPY">EURJPY</option>
                                    <option value="EURNZD">EURNZD</option>
                                    <option value="EURPLN">EURPLN</option>
                                    <option value="EURUSD">EURUSD</option>
                                    <option value="NZDCAD">NZDCAD</option>
                                    <option value="NZDCHF">NZDCHF</option>
                                    <option value="NZDJPY">NZDJPY</option>
                                    <option value="NZDUSD">NZDUSD</option>
                                    <option value="USDCAD">USDCAD</option>
                                    <option value="USDCHF">USDCHF</option>
                                    <option value="USDCNH">USDCNH</option>
                                    <option value="USDJPY">USDJPY</option>
                                    <option value="USDMXN">USDMXN</option>
                                    <option value="USDPLN">USDPLN</option>
                                    <option value="USDZAR">USDZAR</option>
                                    <option value="XAGUSD">XAGUSD</option>
                                    <option value="XAUUSD">XAUUSD</option>
                                    <option value="BTCUSD">BTCUSD</option>
                                    <option value="ETHUSD">ETHUSD</option>
                                    <option value="XRPUSD">XRPUSD</option>
                                    <option value="LTCUSD">LTCUSD</option>
                                    <option value="BCHUSD">BCHUSD</option>
                                    <option value="BTCEUR">BTCEUR</option>
                                    <option value="ETHEUR">ETHEUR</option>
                                    <option value="LINKUSD">LINKUSD</option>
                                    <option value="SOLUSD">SOLUSD</option>
                                    <option value="TRXUSD">TRXUSD</option>
                                    <option value="XMRUSD">XMRUSD</option>
                                    <option value="ADAUSD">ADAUSD</option>
                                    <option value="DOTUSD">DOTUSD</option>
                                    <option value="ATOMUSD">ATOMUSD</option>
                                    <option value="DOGEUSD">DOGEUSD</option>
                                    <option value="XLMUSD">XLMUSD</option>
                                    <option value="LUNAUSD">LUNAUSD</option>
                                    <option value="AVAXUSD">AVAXUSD</option>
                                    <option value="MATICUSD">MATICUSD</option>
                                    <option value="UNIUSD">UNIUSD</option>
                                    <option value="ALGOUSD">ALGOUSD</option>
                                    <option value="MANAUSD">MANAUSD</option>
                                    <option value="BNBUSD">BNBUSD</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="calc_lot">@lang('Lot')</label>
                                <input id="calc_lot" tabindex="1" type="text" name="forex_calculator_form[lot]"
                                    class="input lot_input js-calculator-lot" value="0.1">
                            </div>
                            <div class="col-md-2">
                                <label for="calc_مeverage">@lang('Lot')</label>
                                <select tabindex="0" name="forex_calculator_form[symbol]" id="calc_مeverage"
                                    class="js-calculator-symbol">
                                    <option value="1">1:1</option>
                                    <option value="5">1:5</option>
                                    <option value="10">1:10</option>
                                    <option value="15">1:15</option>
                                    <option value="25">1:25</option>
                                    <option value="30">1:30</option>
                                    <option value="70">1:70</option>
                                    <option value="100">1:100</option>
                                    <option value="200">1:200</option>
                                    <option value="300">1:300</option>
                                    <option value="400">1:400</option>
                                    <option value="500">1:500</option>
                                    <option value="1000">1:1000</option>
                                    <option value="2000">1:2000</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="calc_Currency">@lang('Account Currency')</label>
                                <select tabindex="0" name="forex_calculator_form[symbol]" id="calc_Currency"
                                    class="js-calculator-symbol">
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="GOLD">GOLD</option>
                                    <option value="CNY">CNY</option>
                                    <option value="CZK">CZK</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>@lang('Calculate')</label>
                                <button type="button" class="btn btn-primary">@lang('Calculate')</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        
                        <h4 itemprop="name">@lang('How to use the TradeLive AI Investment LLC Currency Converter?')</h4>
                            <div itemprop="text">
                                <p>@lang('Using the TradeLive AI Investment LLC Currency Converter is simple and straightforward. Follow these steps to make accurate currency conversions:')</p>
                                <ol>

                                    <li>@lang('Visit the TradeLive AI Investment LLC website or access the Currency Converter tool through our trading platform.') </li>
                                    <li>@lang("Select the base currency you wish to convert from in the 'From' field. This is the currency you currently possess.") </li>
                                    <li>@lang("Choose the target currency you want to convert to in the 'To' field. This is the currency you desire to obtain.") </li>
                                    <li>@lang('Enter the amount of the base currency you want to convert.') </li>
                                    <li>@lang("Click on the 'Convert' button to initiate the conversion process.") </li>
                                    <li>@lang('The Currency Converter will display the converted amount in the target currency, based on the latest exchange rates.')</li>
                                    <li>@lang('Take advantage of the accurate and up-to-date exchange rates provided by TradeLive AI Investment LLC to make informed trading decisions.') </li>
                                    <li>@lang("Remember, currency exchange rates may fluctuate in real-time, so it's essential to use the Currency Converter for current rates. Use this valuable tool to streamline your currency conversions and stay informed about exchange rate movements in the dynamic financial markets.") </li>
                                    
                                </ol>
                            </div>

                    </div>

                    <div class="calculator-section mt-4 p-4 bg-white small">
                        <div itemprop="step" itemscope="">
                            <h4 itemprop="name">@lang('How to use the TradeLive AI Investment LLC Currency Converter?') </h4>
                            <div itemprop="text">
                                <p>@lang('Using the TradeLive AI Investment LLC Currency Converter is simple and straightforward. Follow these steps to make accurate currency conversions:') </p>
                                <ol>

                                    
                                    <li>@lang('Visit the TradeLive AI Investment LLC website or access the Currency Converter tool through our trading platform.') </li>
                                    <li>@lang("Select the base currency you wish to convert from in the 'From' field. This is the currency you currently possess.") </li>
                                    <li>@lang("Choose the target currency you want to convert to in the 'To' field. This is the currency you desire to obtain.") </li>
                                    <li>@lang('Enter the amount of the base currency you want to convert.') </li>
                                    <li>@lang("Click on the 'Convert' button to initiate the conversion process.") </li>
                                    <li>@lang('The Currency Converter will display the converted amount in the target currency, based on the latest exchange rates.')</li>
                                    <li>@lang('Take advantage of the accurate and up-to-date exchange rates provided by TradeLive AI Investment LLC to make informed trading decisions.') </li>
                                    <li>@lang("Remember, currency exchange rates may fluctuate in real-time, so it's essential to use the Currency Converter for current rates. Use this valuable tool to streamline your currency conversions and stay informed about exchange rate movements in the dynamic financial markets.") </li>
                                    

                                </ol>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
