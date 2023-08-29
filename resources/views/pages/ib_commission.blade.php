@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/ib_commission.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Affiliate commission') 
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('Receive affiliate commission every day without any limitations on maximum payouts.') </p>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <h3 class="text-center">
                @lang('Calculate your partner commission') 
            </h3>
            <p class="lead text-center">@lang('More your clients invest in financial assets, more partner commission you get')  </p>

            <div class="mt-5 row justify-content-center align-items-center g-2">
                <div class="col-md-6">
                    <div>
                        @lang('Total lots of')
                        <span class="position-relative">
                            <span class="chosse_currencies">
                                <i class="fa-solid fa-dollar-sign"></i> <span class="title_currencies">GBPUSD</span>
                            </span>
                            <div class="position-absolute currencies_ul hide">
                                <div class="row justify-content-center g-2">
                                    <div class="col">
                                        <ul>
                                            <li class="li_head">@lang('Currencies') </li>
                                            <li onclick="change_coste_price(this, 6.5,16,76,1001);">GBPUSD</li>
                                            <li onclick="change_coste_price(this, 6.5,16,76,1001);">EURUSD</li>
                                            <li onclick="change_coste_price(this, 6.14,16,76,1001);">USDJPY</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="li_head">@lang('Metals') </li>
                                            <li onclick="change_coste_price(this, 32.5,5,10,900);">XAGUSD</li>
                                            <li onclick="change_coste_price(this, 8,16,76,1010);">XAUUSD</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="li_head">@lang('Indices') </li>
                                            <li onclick="change_coste_price(this, 0.10,940,1111,1001);">DE40</li>
                                            <li onclick="change_coste_price(this, 0.20,500,1176,1001);">US500</li>
                                            <li onclick="change_coste_price(this, 0.90,110,550,1001);">US30</li>
                                            <li onclick="change_coste_price(this, 0.65,150,766,1001);">USTech</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="li_head">@lang('Crypto') </li>
                                            <li onclick="change_coste_price(this, 47.50,5,11,630);">BTCUSD</li>
                                            <li onclick="change_coste_price(this, 3.34,30,150,1001);">ETHUSD</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="li_head">@lang('Oil') </li>
                                            <li onclick="change_coste_price(this, 20,5,25,1001);">Brent</li>
                                            <li onclick="change_coste_price(this, 20,5,25,1001);">WTI</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </span>

                        <span class="float-end">
                            <output id="rangevalue">
                                1
                            </output>
                        </span>
                    </div>
                    <input type="range" class="range_input input_ib_commission" value="1" name="range"
                        min="1" max="1000" id="range" oninput="rangevalue.value=value">
                        <div class="text-white-50">
                            1
                            <span class="float-end">1 000</span>
                        </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <span class="text-white-50" style="position: relative;
                    top: 8px;">
                        @lang('Loyalty program') 
                    </span>
                    <div class="text-center row justify-content-center align-items-center g-2 row_dis"
                        style="float: right;
                    background: #bfbfbf17;
                    border-radius: 60px;
                    margin: 0;
                    padding: 0px 20px;">

                        <div class="col change_from_input tb1">0%</div>
                        <div class="col change_from_input tb2">10%</div>
                        <div class="col change_from_input tb3">15%</div>
                        <div class="col change_from_input tb4">20%</div>
                    </div>
                </div>

            </div>

            <h3 class="text-center mt-5 mb-4">
                @lang('Total VIP program commission with loyalty income') 
            </h3>
            <div class="row justify-content-center g-4">
                <div class="col-md-10">
                    <div class="text-center fs-10 mt-4">
                        <span class="fw-bold changeLive">
                            6,5
                        </span>
                        <span class="fw-100">USD</span>
                    </div>
                    <div class="calculator__text_subtotal">
                        <div>
                            <p class="lead m-0"><strong class="change_one">6,5</strong> <span class="fw-100">USD</span></p>
                            <p class="lead m-0 text-black-50">@lang('VIP program') </p>
                        </div>
                        <div>
                            <p class="lead m-0"><strong class="fw-bold change_tow">0</strong> <span class="fw-100">USD</span></p>
                            <p class="lead m-0 text-black-50">@lang('Loyalty program') </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-g">
        <div class="container text-center">
            <h3>@lang('GET STARTED NOW') </h3>
            <p>@lang("Grow your business with TradeLive AI Partners' Affiliate Program") </p>
            <div class="row justify-content-center mt-5 g-2">
                <div class="col">
                    <img src="/images/new_images/icons/step1.svg" height="100" alt="">
                    <h5 class="mt-3 color2">@lang('Apply online') </h5>
                    <p>@lang('Fill out our affiliate application form today') </p>
                </div>
                <div class="col">
                    <img src="/images/new_images/icons/step2.svg" height="100" alt="">
                    <h5 class="mt-3 color2">@lang('Place ads')</h5>
                    <p>@lang('Head over to the Marketing Tools section and get your banners, links, and widgets.') </p>
                </div>
                <div class="col">
                    <img src="/images/new_images/icons/step3.svg" height="100" alt="">
                    <h5 class="mt-3 color2">@lang('Get paid')</h5>
                    <p>@lang("Earn high CPAs from your clients' trading") </p>
                </div>
            </div>

            <button type="button" class="mt-5 btn btn-outline-primary">@lang('Become an affiliate today') </button>


        </div>
    </section>


    
    <section>
        <center>
            <h3 class="">@lang('Frequently asked questions') </h3>
            <h6 class="text-white-50">@lang('Here are our most frequently asked questions about trading forex with Exness.') </h6>
        </center>

        <div class="container mt-4">

            <div class="ask_div p-3">

                <a class="ask_click" data-bs-toggle="collapse" href="#what_is_forex_trading" role="button"
                    aria-expanded="false" aria-controls="what_is_forex_trading">
                    @lang('What is Forex Trading?') 
                </a>

                <div class="collapse multi-collapse" id="what_is_forex_trading">
                    <div class="p-3">
                        <p>@lang('Forex trading, also known by the name of currency trading or FX trading, refers to buying a particular currency while selling another in exchange. Trading currencies always involves exchanging one currency for another.') </p>
                        <p>@lang('The ultimate aim can vary and can be any of the below but not limited to the below:')</p>
                        <ul class="ftr-faq">
                            <li>1. @lang('Exchanging currency A (e.g. USD) to currency B (e.g. EUR) for travelling purposes;') </li>
                            <li>2. @lang('Exchanging currency A (e.g. USD) to currency B (e.g. EUR) for trading purposes;') </li>
                            <li>3. @lang('Exchanging currency A (e.g. USD) to currency B (e.g. EUR) for speculative purposes, with the goal to make a profit.') </li>
                        </ul>
                        <p>@lang('Due to all the above, and not limited to the above, the forex trading market is today the world’s most liquid and most volatile market, with over $5 trillion traded daily.') </p>

                    </div>
                </div>
            </div>

            <div class="ask_div ask_div2 p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#how_does_forex_trading_work" role="button"
                    aria-expanded="false" aria-controls="how_does_forex_trading_work">
                    @lang('How Does Forex Trading Work?')
                </a>

                <div class="collapse multi-collapse" id="how_does_forex_trading_work">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>@lang('Forex trading is in essence trading currencies for one another. As such, an XM client sells one currency against another at a current market rate.') </p>
                            <p>@lang('In order to be able to trade, it is required to open an account and hold currency A and then exchange currency A for currency B either for a long term or a short-term trade, with the ultimate goal varying accordingly.') </p>
                            <p>@lang('Since FX trading is performed on currency pairs (i.e. the quotation of the relative value of one currency unit against another currency unit), in which the first currency is the so-called base currency, while the second currency is called the quote currency.') </p>
                            <p>@lang('For example, the quotation EUR/USD 1.2345 is the price of the euro expressed in US dollars, which means that 1 euro equals 1.2345 US dollars.') </p>
                            <p>@lang('Currency trading can be carried out 24 hours a day, from 22.00 GMT on Sunday until 22.00 GMT on Friday, with currencies traded among the major financial centers of London, New York, Tokyo, Zürich, Frankfurt, Paris, Sydney, Singapore and Hong Kong.') </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ask_div  p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#what_influences_prices_in_forex_trading"
                    role="button" aria-expanded="false" aria-controls="what_influences_prices_in_forex_trading">
                    @lang('What Influences Prices in Forex Trading?') 
                </a>

                <div class="collapse multi-collapse" id="what_influences_prices_in_forex_trading">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>@lang('There is an endless number of factors that all contribute and influence the prices in forex trading (i.e. currency rates) daily, but it could be safe to say that there are 6 major factors which contribute the most and are more or less the main driving forces for forex trading price fluctuation:') </p>
                            <ul class="ftr-faq">
                                <li>1. @lang('Differentials in inflation') </li>
                                <li>2. @lang('Differentials in interest rates') </li>
                                <li>3. @lang('Current account deficits') </li>
                                <li>4. @lang('Public debt') </li>
                                <li>5. @lang('Terms of trade') </li>
                                <li>6. @lang('Political and economic stability') </li>
                            </ul>
                            <p>@lang('In order to best comprehend the above 6 factors, you will have to keep in mind that currencies are traded against one another. So when one falls, another one rises as the price denomination of any currency is always stated against another currency.') </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ask_div ask_div2 p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#what_is_forex_trading_software" role="button"
                    aria-expanded="false" aria-controls="what_is_forex_trading_software">
                    @lang('What is Forex Trading Software?') 
                </a>

                <div class="collapse multi-collapse" id="what_is_forex_trading_software">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>@lang('Forex trading software is an online trading platform provided to each XM client, which allows them to view, analyze and trade currencies, or other asset classes') </p>

                            <p>@lang('In simple terms, each XM client is provided access to a trading platform (i.e. software) which is directly connected to the global market price feed and allows them to perform transactions without the help of a third party.') </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ask_div  p-3 mt-2">

                <a class="ask_click" data-bs-toggle="collapse" href="#who_are_forex_trading_market_participants"
                    role="button" aria-expanded="false" aria-controls="who_are_forex_trading_market_participants">
                    @lang('Who are Forex Trading Market Participants?') 
                </a>

                <div class="collapse multi-collapse" id="who_are_forex_trading_market_participants">
                    <div class="p-3">
                        <div class="panel-body gray">
                            <p>@lang('Forex trading market participants can fall in any of the following categories:') </p>
                            <ul class="ftr-faq">
                                <li>1. @lang('Travellers or overseas consumers who exchange money to travel overseas or purchase goods from overseas.') </li>
                                <li>2. @lang('Businesses that purchase raw materials or goods from overseas and need to exchange their local currency to the currency of the country of the seller.') </li>
                                <li>3. @lang('Investors or speculators who exchange currencies, which either require a foreign currency, to perform trading in equities or other asset classes from overseas or either are trading currencies with the aim of making a profit from market changes.') </li>
                                <li>4. @lang('Banking institutions that exchange money to service their clients or to lend money to overseas clients.') </li>
                                <li>5. @lang('Governments or central banks that either buy or sell currencies and try to adjust financial imbalances, or adjust economic conditions.') </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <style>
        .row_dis .col {
            padding: 10px 13px;
            margin: 0;
            border-radius: 91px;
        }
    </style>
@endsection
