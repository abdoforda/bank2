@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/trading_hours_and_holidays.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Trading Hours and Holidays')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang("Stay informed about trading hours and holidays. Highness Investment LLC provides up-to-date information on market opening and closing times, ensuring you can plan your trades effectively. Don't miss out on opportunities – stay in the know with us.")</p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <center>
                <h3 class="display-5">@lang('TRADING HOURS')</h3>
                <p class="mt-4 text-white-50">@lang("represent the designated time period during which trading activities are conducted in a particular market. The specific hours can differ based on various factors, including the instrument being traded, the exchange it is listed on, and the day of the week. It's important to note that certain markets may have early closure days, impacting the availability of order placement.")</p>
            </center>
            <div class="mt-5">
                <center>
                    <h3>FOREX</h3>
                </center>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="tr1">
                                <th>Type</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>QUOTES</td>
                                <td>00:00 - 00:00</td>
                                <td>00:00 - 00:00</td>
                                <td>00:00 - 00:00</td>
                                <td>00:00 - 00:00</td>
                                <td>00:00- 23:55</td>
                            </tr>
                            <tr>
                                <td>TRADING</td>
                                <td>00:05- 23:59</td>
                                <td>00:01- 23:59</td>
                                <td>00:01- 23:59</td>
                                <td>00:01- 23:59</td>
                                <td>00:01- 23:55</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-5">
                <center>
                    <h3>GOLD & SILVER</h3>
                </center>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="tr1">
                                <th>Type</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>QUOTES</td>
                                <td>01:00 - 00:00</td>
                                <td>01:00 - 00:00</td>
                                <td>01:00 - 00:00</td>
                                <td>01:00 - 00:00</td>
                                <td>01:00- 23:55</td>
                            </tr>
                            <tr>
                                <td>TRADING</td>
                                <td>01:05- 23:59</td>
                                <td>01:01- 23:59</td>
                                <td>01:01- 23:59</td>
                                <td>01:01- 23:59</td>
                                <td>01:01- 23:55</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <center>
                <h3 class="display-5">@lang('Holiday hours and notices')</h3>
                <p class="mt-4 text-white-50">@lang('can have an impact on trading schedules and market volatility. These changes can differ across countries, making it essential to stay informed about upcoming holidays and adjusted trading hours. By keeping track of these updates, traders can effectively plan their trades to align with market conditions.')</p>

            <div class="table-responsive ">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr style="font-size: 12px;">
                                <th style="width: 170px">Instrument</th>
                                <th>Wednesday<br>5 Apr 2023</th>
                                <th>Thursday<br>6 Apr 2023</th>
                                <th>Friday<br>7 Apr 2023</th>
                                <th>Monday<br>10 Apr 2023</th>
                                <th>Tuesday<br>11 Apr 2023</th>
                                <th>Tuesday<br>25 Apr 2023</th>
                            </tr>
                        </thead>
                        <tbody class="small">
                            <tr>
                                <td>FX</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>Metals</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>Platinum</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>Palladium</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>US Stocks</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
    
                            <tr>
                                <td>Canadian Stocks</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>UK Stocks</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>HK Stocks</td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>Paris Stocks</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>SPA Stocks</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>AU Stocks</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                            </tr>
                            <tr>
                                <td>GER Stocks</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>LCOXX - Brent Oil Futures Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>NGXX - Natural Gas Futures Derivatives </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>CLXX - Crude Oil Futures Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>HGXX - Copper Futures Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>UKOUSD - Brent Spot Oil</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>USOUSD - Crude Spot Oil</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>DAX30_XX - Indices Futures Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>UK100_XX - Indices Futures Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-early">
                                    Early Close 16:15
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>WS30_XX, US500_XX, NAS100_XX - Indices Futures Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-early">
                                    Early Close 16:15
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>AUS200 - Indices Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-lateopens">
                                    Late Open 10:10
                                </td>
                            </tr>
                            <tr>
                                <td>DE30 - Indices Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-lateopens">
                                    Late Open 03:15
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>UK100 - Indices Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-lateopens">
                                    Late Open 03:00
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>AUS200 – Indices Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-early">
                                    Early Close 17:00
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-lateopens">
                                    Late Open 10:10
                                </td>
                            </tr>
                            <tr>
                                <td>US30, US500, UT100 - Indices Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-early">
                                    Early Close 16:15
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>ESP35 - Indices Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
    
                            <tr>
                                <td>HK50 - Indices Cash Derivatives</td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>JP225 - Indices Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-early">
                                    Early Close 16:15
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>EUR50 - Indices Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>CAC40 - Indices Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-lateopens">
                                    Late Open 09:00
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>CHINA50 - Indices Cash Derivatives</td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>IND50 - Indinces Cash Derivatives</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-early">
                                    Early Close 16:15
                                </td>
                                <td class="status-lateopens">
                                    Late Open 04:00
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>VIX_XX</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-early">
                                    Early Close 16:30
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>Corn</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>Coffee</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>Cocoa</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>Soybean</td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-closed">
                                    Closed
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                            <tr>
                                <td>Cryptos</td>
    
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                                <td class="status-normal-trading-hours">
                                    Normal Trading Hours
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    
    @include(
        'components.ask',
    
        [
            'title' => __('Frequently asked questions'),
            'desc' => '',
            'items' => [
                [
                    'title' => 'What are trading hours?',
                    'bode' =>
                        'Trading hours refer to the designated time periods during which a specific market is open for trading. These hours can vary depending on the instrument, exchange, and days of the week.',
                ],[
                    'title' => 'Do trading hours differ for different markets?',
                    'bode' =>
                        'Yes, trading hours can vary across different markets and exchanges. Each market has its own designated trading hours, which may overlap or differ from one another.',
                ],[
                    'title' => 'Are trading hours the same for all instruments?',
                    'bode' =>
                        'No, trading hours can vary for different instruments within the same market. For example, the trading hours for stocks may differ from those of commodities or forex.',
                ],[
                    'title' => 'Do trading hours change during holidays?',
                    'bode' =>
                        'Yes, trading hours can be affected by holidays. Some markets may have shortened trading hours or be completely closed on certain holidays. It is important to check the holiday schedule for each market to plan your trading activities accordingly.',
                ],[
                    'title' => 'How can I find out the trading hours for a specific market?',
                    'bode' =>
                        'You can typically find the trading hours for a specific market on the official website of the exchange or through your trading platform. Many financial websites and brokers also provide trading hour information for various markets.',
                ],[
                    'title' => 'What happens if I place an order outside of trading hours?',
                    'bode' =>
                        'If you place an order outside of trading hours, it will generally be queued and executed once the market reopens. However, certain order types may have specific rules regarding execution outside of regular trading hours.',
                ],[
                    'title' => 'How can I stay updated on holiday trading hours and notices?',
                    'bode' =>
                        "It is important to stay informed about upcoming holidays and any changes to trading hours. You can check the official websites of exchanges, financial news sources, or your broker's platform for announcements and notices regarding holiday trading hours.",
                ],[
                    'title' => 'Do all countries observe the same holidays?',
                    'bode' =>
                        'No, different countries may have different holidays and observances. Trading hours and holiday schedules can vary from one country to another. It is important to consider the local holidays and their impact on the markets you are trading.',
                ],[
                    'title' => 'Can holiday trading hours affect market volatility?',
                    'bode' =>
                        'Yes, holiday trading hours can sometimes result in lower liquidity and higher volatility in the markets. During holidays, there may be fewer participants and reduced trading volumes, which can lead to increased price fluctuations.',
                ],[
                    'title' => 'Is it advisable to trade during holidays?',
                    'bode' =>
                        'Trading during holidays can carry higher risks due to reduced liquidity and potentially increased volatility. It is important to assess the market conditions and consider your risk tolerance before making trading decisions during holiday periods.',
                ]
            ],
        ]
    )


    <style>
        table {
            width: 100%;
        }

        thead tr {
            background: #74b22b;
            color: #fff;
        }

        thead tr th {
            padding: 8px;
        }

        tbody tr td {
            padding: 6px;
            background: #f9f9f9;
            border: 1px solid #e7e7e7;
        }
    </style>
@endsection
