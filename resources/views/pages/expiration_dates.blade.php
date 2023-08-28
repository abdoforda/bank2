@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/expiration_dates.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Expiration Dates')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('Expiration dates refer to the specified dates when certain financial instruments, such as options or futures contracts, expire. Traders need to be aware of these dates as they mark the end of the contract and can impact trading strategies and positions.')</p>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <h3 class="h2">
                @lang('Forward Expiration Dates - Stock indices')
            </h3>

            <div class="table-responsive mt-3">
                <table class="table block-table stripe pricing-table advanced-table" data-page-length="100">
                    <thead>
                        <tr>
                            <th>@lang('Forward CFD') </th>
                            <th>@lang('Platform Symbol') </th>
                            <th>@lang('Contract Month') </th>
                            <th>@lang('First Trading day') </th>
                            <th>@lang('Last Trading day') </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="6">US 30</td>
                        </tr>
                        <tr>
                            <td>#US30H</td>
                            <td>March 2023</td>
                            <td>13.12.22</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#US30M</td>
                            <td>June 2023</td>
                            <td>14.03.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#US30U</td>
                            <td>September 2023</td>
                            <td>13.06.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#US30Z</td>
                            <td>December 2023</td>
                            <td>12.09.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#US30H</td>
                            <td>March 2024</td>
                            <td>12.12.23</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6">US Tech 100</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#NAS100H</td>
                            <td>March 2023</td>
                            <td>13.12.22</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#NAS100M</td>
                            <td>June 2023</td>
                            <td>14.03.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#NAS100U</td>
                            <td>September 2023</td>
                            <td>13.06.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#NAS100Z</td>
                            <td>December 2023</td>
                            <td>12.09.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#NAS100H</td>
                            <td>March 2024</td>
                            <td>12.12.23</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="background-color:#f0f0f0;">US 500</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#US500H</td>
                            <td>March 2023</td>
                            <td>13.12.22</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#US500M</td>
                            <td>June 2023</td>
                            <td>14.03.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#US500U</td>
                            <td>September 2023</td>
                            <td>13.06.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#US500Z</td>
                            <td>December 2023</td>
                            <td>12.09.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#US500H</td>
                            <td>March 2024</td>
                            <td>12.12.23</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6">US Small Cap 2000</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#RUSH</td>
                            <td>March 2023</td>
                            <td>13.12.22</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#RUSM</td>
                            <td>June 2023</td>
                            <td>14.03.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#RUSU</td>
                            <td>September 2023</td>
                            <td>13.06.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#RUSZ</td>
                            <td>December 2023</td>
                            <td>12.09.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#RUSH</td>
                            <td>March 2024</td>
                            <td>12.12.23</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="background-color:#f0f0f0;">Germany 30</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#DE40H</td>
                            <td>March 2023</td>
                            <td>13.12.22</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#DE0M</td>
                            <td>June 2023</td>
                            <td>14.03.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#DE40U</td>
                            <td>September 2023</td>
                            <td>13.06.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#DE40Z</td>
                            <td>December 2023</td>
                            <td>12.09.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#DE40H</td>
                            <td>March 2024</td>
                            <td>12.12.23</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6">Switzerland 20</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#CHH</td>
                            <td>March 2023</td>
                            <td>13.12.22</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#CHM</td>
                            <td>June 2023</td>
                            <td>14.03.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#CHU</td>
                            <td>September 2023</td>
                            <td>13.06.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#CHZ</td>
                            <td>December 2023</td>
                            <td>13.09.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#CHH</td>
                            <td>March 2024</td>
                            <td>12.12.23</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="background-color:#f0f0f0;">EU Stocks 50</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#EU50H</td>
                            <td>March 2023</td>
                            <td>13.12.22</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#EU50M</td>
                            <td>June 2023</td>
                            <td>14.03.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#EU50U</td>
                            <td>September 2023</td>
                            <td>13.06.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#EU50Z</td>
                            <td>December 2023</td>
                            <td>12.09.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#EU50H</td>
                            <td>March 2024</td>
                            <td>12.12.23</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="background-color:#f0f0f0;">UK 100</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#GB100H</td>
                            <td>March 2023</td>
                            <td>13.12.22</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#GB100M</td>
                            <td>June 2023</td>
                            <td>14.03.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#GB100U</td>
                            <td>September 2023</td>
                            <td>13.06.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#GB100Z</td>
                            <td>December 2023</td>
                            <td>12.09.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#GB100H</td>
                            <td>March 2024</td>
                            <td>12.12.23</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="16" style="background-color:#f0f0f0;">Netherlands 25</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#NLF</td>
                            <td>January 2023</td>
                            <td>13.12.22</td>
                            <td>19.01.23</td>
                        </tr>
                        <tr>
                            <td>#NLG</td>
                            <td>February 2023</td>
                            <td>17.01.23</td>
                            <td>16.02.23</td>
                        </tr>
                        <tr>
                            <td>#NLH</td>
                            <td>March 2023</td>
                            <td>14.02.23</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#NLJ</td>
                            <td>April 2023</td>
                            <td>14.03.23</td>
                            <td>20.04.23</td>
                        </tr>
                        <tr>
                            <td>#NLK</td>
                            <td>May 2023</td>
                            <td>18.04.23</td>
                            <td>18.05.23</td>
                        </tr>
                        <tr>
                            <td>#NLM</td>
                            <td>June 2023</td>
                            <td>16.05.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#NLN</td>
                            <td>July 2023</td>
                            <td>13.06.23</td>
                            <td>20.07.23</td>
                        </tr>
                        <tr>
                            <td>#NLQ</td>
                            <td>August 2023</td>
                            <td>18.07.23</td>
                            <td>17.08.23</td>
                        </tr>
                        <tr>
                            <td>#NLU</td>
                            <td>September 2023</td>
                            <td>15.08.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#NLV</td>
                            <td>October 2023</td>
                            <td>12.09.23</td>
                            <td>19.10.23</td>
                        </tr>
                        <tr>
                            <td>#NLX</td>
                            <td>November 2023</td>
                            <td>17.10.23</td>
                            <td>16.11.23</td>
                        </tr>
                        <tr>
                            <td>#NLZ</td>
                            <td>December 2023</td>
                            <td>14.11.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#NLF</td>
                            <td>January 2024</td>
                            <td>12.12.23</td>
                            <td>18.01.24</td>
                        </tr>
                        <tr>
                            <td>#NLG</td>
                            <td>February 2024</td>
                            <td>16.01.24</td>
                            <td>16.02.23</td>
                        </tr>
                        <tr>
                            <td>#NLH</td>
                            <td>March 2024</td>
                            <td>13.02.24</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td rowspan="16" style="background-color:#f0f0f0;">France 40</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#FR40F</td>
                            <td>January 2023</td>
                            <td>13.12.22</td>
                            <td>19.01.23</td>
                        </tr>
                        <tr>
                            <td>#FR40G</td>
                            <td>February 2023</td>
                            <td>17.01.23</td>
                            <td>16.02.23</td>
                        </tr>
                        <tr>
                            <td>#FR40H</td>
                            <td>March 2023</td>
                            <td>14.02.23</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#FR40J</td>
                            <td>April 2023</td>
                            <td>14.03.23</td>
                            <td>20.04.23</td>
                        </tr>
                        <tr>
                            <td>#FR40K</td>
                            <td>May 2023</td>
                            <td>18.04.23</td>
                            <td>18.05.23</td>
                        </tr>
                        <tr>
                            <td>#FR40M</td>
                            <td>June 2023</td>
                            <td>16.05.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#FR40N</td>
                            <td>July 2023</td>
                            <td>13.06.23</td>
                            <td>20.07.23</td>
                        </tr>
                        <tr>
                            <td>#FR40Q</td>
                            <td>August 2023</td>
                            <td>18.07.23</td>
                            <td>17.08.23</td>
                        </tr>
                        <tr>
                            <td>#FR40U</td>
                            <td>September 2023</td>
                            <td>15.08.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#FR40V</td>
                            <td>October 2023</td>
                            <td>12.09.23</td>
                            <td>19.10.23</td>
                        </tr>
                        <tr>
                            <td>#FR40X</td>
                            <td>November 2023</td>
                            <td>17.10.23</td>
                            <td>16.11.23</td>
                        </tr>
                        <tr>
                            <td>#FR40Z</td>
                            <td>December 2023</td>
                            <td>14.11.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#FR40F</td>
                            <td>January 2024</td>
                            <td>12.12.23</td>
                            <td>18.01.24</td>
                        </tr>
                        <tr>
                            <td>#FR40G</td>
                            <td>February 2024</td>
                            <td>16.01.24</td>
                            <td>15.02.24</td>
                        </tr>
                        <tr>
                            <td>#FR40H</td>
                            <td>March 2024</td>
                            <td>13.02.24</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="16" style="background-color:#f0f0f0;">Spain 35</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#ESF</td>
                            <td>January 2023</td>
                            <td>13.12.22</td>
                            <td>19.01.23</td>
                        </tr>
                        <tr>
                            <td>#ESG</td>
                            <td>February 2023</td>
                            <td>17.01.23</td>
                            <td>16.02.23</td>
                        </tr>
                        <tr>
                            <td>#ESH</td>
                            <td>March 2023</td>
                            <td>14.02.23</td>
                            <td>16.03.23</td>
                        </tr>
                        <tr>
                            <td>#ESJ</td>
                            <td>April 2023</td>
                            <td>14.03.23</td>
                            <td>20.04.23</td>
                        </tr>
                        <tr>
                            <td>#ESK</td>
                            <td>May 2023</td>
                            <td>18.04.23</td>
                            <td>18.05.23</td>
                        </tr>
                        <tr>
                            <td>#ESM</td>
                            <td>June 2023</td>
                            <td>16.05.23</td>
                            <td>15.06.23</td>
                        </tr>
                        <tr>
                            <td>#ESN</td>
                            <td>July 2023</td>
                            <td>13.06.23</td>
                            <td>20.07.23</td>
                        </tr>
                        <tr>
                            <td>#ESQ</td>
                            <td>August 2023</td>
                            <td>18.07.23</td>
                            <td>17.08.23</td>
                        </tr>
                        <tr>
                            <td>#ESU</td>
                            <td>September 2023</td>
                            <td>15.08.23</td>
                            <td>14.09.23</td>
                        </tr>
                        <tr>
                            <td>#ESV</td>
                            <td>October 2023</td>
                            <td>12.09.23</td>
                            <td>19.10.23</td>
                        </tr>
                        <tr>
                            <td>#ESX</td>
                            <td>November 2023</td>
                            <td>17.10.23</td>
                            <td>16.11.23</td>
                        </tr>
                        <tr>
                            <td>#ESZ</td>
                            <td>December 2023</td>
                            <td>14.11.23</td>
                            <td>14.12.23</td>
                        </tr>
                        <tr>
                            <td>#ESF</td>
                            <td>January 2024</td>
                            <td>12.12.23</td>
                            <td>18.01.24</td>
                        </tr>
                        <tr>
                            <td>#ESG</td>
                            <td>February 2024</td>
                            <td>16.01.24</td>
                            <td>15.02.24</td>
                        </tr>
                        <tr>
                            <td>#ESH</td>
                            <td>March 2024</td>
                            <td>13.02.24</td>
                            <td>14.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="background-color:#f0f0f0;">Autralian 200</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#AU200H</td>
                            <td>March 2023</td>
                            <td>12.12.22</td>
                            <td>15.03.23</td>
                        </tr>
                        <tr>
                            <td>#AU200M</td>
                            <td>June 2023</td>
                            <td>13.03.23</td>
                            <td>14.06.23</td>
                        </tr>
                        <tr>
                            <td>#AU200U</td>
                            <td>September 2023</td>
                            <td>12.06.23</td>
                            <td>20.09.23</td>
                        </tr>
                        <tr>
                            <td>#AU200Z</td>
                            <td>December 2023</td>
                            <td>18.09.23</td>
                            <td>20.12.23</td>
                        </tr>
                        <tr>
                            <td>#AU200H</td>
                            <td>March 2024</td>
                            <td>18.12.23</td>
                            <td>20.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="background-color:#f0f0f0;">Japan 225</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#NIK225H</td>
                            <td>March 2023</td>
                            <td>06.12.22</td>
                            <td>09.03.23</td>
                        </tr>
                        <tr>
                            <td>#NIK225M</td>
                            <td>June 2023</td>
                            <td>07.03.23</td>
                            <td>08.06.23</td>
                        </tr>
                        <tr>
                            <td>#NIK225U</td>
                            <td>September 2023</td>
                            <td>06.06.23</td>
                            <td>07.09.23</td>
                        </tr>
                        <tr>
                            <td>#NIK225Z</td>
                            <td>December 2023</td>
                            <td>05.09.23</td>
                            <td>07.12.23</td>
                        </tr>
                        <tr>
                            <td>#NIK225H</td>
                            <td>March 2024</td>
                            <td>05.12.23</td>
                            <td>07.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="16" style="background-color:#f0f0f0;">Hong Kong 50</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#HSIF</td>
                            <td>January 2023</td>
                            <td>26.12.22</td>
                            <td>27.01.23</td>
                        </tr>
                        <tr>
                            <td>#HSIG</td>
                            <td>February 2023</td>
                            <td>25.01.23</td>
                            <td>24.02.23</td>
                        </tr>
                        <tr>
                            <td>#HSIH</td>
                            <td>March 2023</td>
                            <td>22.02.23</td>
                            <td>29.03.23</td>
                        </tr>
                        <tr>
                            <td>#HSIJ</td>
                            <td>April 2023</td>
                            <td>27.03.23</td>
                            <td>26.04.23</td>
                        </tr>
                        <tr>
                            <td>#HSIK</td>
                            <td>May 2023</td>
                            <td>24.04.23</td>
                            <td>29.05.23</td>
                        </tr>
                        <tr>
                            <td>#HSIM</td>
                            <td>June 2023</td>
                            <td>25.05.23</td>
                            <td>28.06.23</td>
                        </tr>
                        <tr>
                            <td>#HSIN</td>
                            <td>July 2023</td>
                            <td>26.06.23</td>
                            <td>27.07.23</td>
                        </tr>
                        <tr>
                            <td>#HSIQ</td>
                            <td>August 2023</td>
                            <td>25.07.23</td>
                            <td>29.08.23</td>
                        </tr>
                        <tr>
                            <td>#HSIU</td>
                            <td>September 2023</td>
                            <td>25.08.23</td>
                            <td>27.09.23</td>
                        </tr>
                        <tr>
                            <td>#HSIV</td>
                            <td>October 2023</td>
                            <td>25.09.23</td>
                            <td>27.10.23</td>
                        </tr>
                        <tr>
                            <td>#HSIX</td>
                            <td>November 2023</td>
                            <td>25.10.23</td>
                            <td>28.11.23</td>
                        </tr>
                        <tr>
                            <td>#HSIZ</td>
                            <td>December 2023</td>
                            <td>24.11.23</td>
                            <td>27.12.23</td>
                        </tr>
                        <tr>
                            <td>#HSIF</td>
                            <td>January 2024</td>
                            <td>25.12.23</td>
                            <td>29.01.24</td>
                        </tr>
                        <tr>
                            <td>#HSIG</td>
                            <td>February 2024</td>
                            <td>25.01.24</td>
                            <td>27.02.24</td>
                        </tr>
                        <tr>
                            <td>#HSIH</td>
                            <td>March 2024</td>
                            <td>23.02.24</td>
                            <td>26.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="16" style="background-color:#f0f0f0;">China A50</td>
                        </tr>
                        <tr style="display:none"></tr>
                        <tr>
                            <td>#CHINA50F</td>
                            <td>January 2023</td>
                            <td>26.12.22</td>
                            <td>27.01.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50G</td>
                            <td>February 2023</td>
                            <td>25.01.23</td>
                            <td>24.02.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50H</td>
                            <td>March 2023</td>
                            <td>22.02.23</td>
                            <td>29.03.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50J</td>
                            <td>April 2023</td>
                            <td>27.03.23</td>
                            <td>26.04.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50K</td>
                            <td>May 2023</td>
                            <td>24.04.23</td>
                            <td>29.05.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50M</td>
                            <td>June 2023</td>
                            <td>24.05.23</td>
                            <td>28.06.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50N</td>
                            <td>July 2023</td>
                            <td>26.06.23</td>
                            <td>27.07.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50Q</td>
                            <td>August 2023</td>
                            <td>25.07.23</td>
                            <td>29.08.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50U</td>
                            <td>September 2023</td>
                            <td>25.08.23</td>
                            <td>26.09.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50V</td>
                            <td>October 2023</td>
                            <td>22.09.23</td>
                            <td>27.10.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50X</td>
                            <td>November 2023</td>
                            <td>25.10.23</td>
                            <td>28.11.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50Z</td>
                            <td>December 2023</td>
                            <td>24.11.23</td>
                            <td>27.12.23</td>
                        </tr>
                        <tr>
                            <td>#CHINA50F</td>
                            <td>January 2024</td>
                            <td>25.12.23</td>
                            <td>29.01.24</td>
                        </tr>
                        <tr>
                            <td>#CHINA50G</td>
                            <td>February 2024</td>
                            <td>25.01.24</td>
                            <td>27.02.24</td>
                        </tr>
                        <tr>
                            <td>#CHINA50G</td>
                            <td>March 2024</td>
                            <td>23.02.24</td>
                            <td>26.03.24</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <h3 class="h2 mt-5">@lang('Forward Expiration Dates - Commodities')</h3>

            <div class="table-responsive mt-3">
                <table class="table block-table stripe pricing-table advanced-table" data-page-length="100">
                    <thead>
                        <tr>
                            <th>Forward CFD</th>
                            <th>Platform Symbol</th>
                            <th>Contract Month</th>
                            <th>First Trading day</th>
                            <th>Last Trading day</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="14" style="background-color: #f0f0f0;" width="120">WTI Crude Oil Forward CFD
                            </td>
                        </tr>
                        <tr>
                            <td>#USOILG</td>
                            <td>February 2023</td>
                            <td>14.12.22</td>
                            <td>18.01.23</td>
                        </tr>
                        <tr>
                            <td>#USOILH</td>
                            <td>March 2023</td>
                            <td>16.01.23</td>
                            <td>17.02.23</td>
                        </tr>
                        <tr>
                            <td>#USOILJ</td>
                            <td>April 2023</td>
                            <td>15.02.23</td>
                            <td>17.03.23</td>
                        </tr>
                        <tr>
                            <td>#USOILK</td>
                            <td>May 2023</td>
                            <td>15.03.23</td>
                            <td>18.04.23</td>
                        </tr>
                        <tr>
                            <td>#USOILM</td>
                            <td>June 2023</td>
                            <td>14.04.23</td>
                            <td>18.05.23</td>
                        </tr>
                        <tr>
                            <td>#USOILN</td>
                            <td>July 2023</td>
                            <td>16.05.23</td>
                            <td>16.06.23</td>
                        </tr>
                        <tr>
                            <td>#USOILQ</td>
                            <td>August 2023</td>
                            <td>14.06.23</td>
                            <td>18.07.23</td>
                        </tr>
                        <tr>
                            <td>#USOILU</td>
                            <td>September 2023</td>
                            <td>14.07.23</td>
                            <td>18.08.23</td>
                        </tr>
                        <tr>
                            <td>#USOILV</td>
                            <td>October 2023</td>
                            <td>16.08.23</td>
                            <td>18.09.23</td>
                        </tr>
                        <tr>
                            <td>#USOILX</td>
                            <td>November 2023</td>
                            <td>14.09.23</td>
                            <td>18.10.23</td>
                        </tr>
                        <tr>
                            <td>#USOILZ</td>
                            <td>December 2023</td>
                            <td>16.10.23</td>
                            <td>16.11.23</td>
                        </tr>
                        <tr>
                            <td>#USOILF</td>
                            <td>January 2023</td>
                            <td>14.11.23</td>
                            <td>15.12.23</td>
                        </tr>
                        <tr>
                            <td>#USOILG</td>
                            <td>February 2024</td>
                            <td>13.12.23</td>
                            <td>18.01.24</td>
                        </tr>
                        <tr>
                            <td rowspan="14" style="background-color: #f7f7f7;" width="120">Brent Crude Oil Forward CFD
                            </td>
                        </tr>
                        <tr style="display:none;"></tr>
                        <tr>
                            <td>#UKOILH</td>
                            <td>March 2023</td>
                            <td>23.12.22</td>
                            <td>27.01.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILJ</td>
                            <td>April 2023</td>
                            <td>25.01.23</td>
                            <td>24.02.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILK</td>
                            <td>May 2023</td>
                            <td>22.02.23</td>
                            <td>29.03.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILM</td>
                            <td>June 2023</td>
                            <td>27.03.23</td>
                            <td>26.04.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILN</td>
                            <td>July 2023</td>
                            <td>24.04.23</td>
                            <td>29.05.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILQ</td>
                            <td>August 2023</td>
                            <td>25.05.23</td>
                            <td>28.06.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILU</td>
                            <td>September 2023</td>
                            <td>26.06.23</td>
                            <td>27.07.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILV</td>
                            <td>October 2023</td>
                            <td>25.07.23</td>
                            <td>29.08.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILX</td>
                            <td>November 2023</td>
                            <td>25.08.23</td>
                            <td>27.09.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILZ</td>
                            <td>December 2023</td>
                            <td>25.09.23</td>
                            <td>27.10.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILF</td>
                            <td>January 2024</td>
                            <td>25.10.23</td>
                            <td>28.11.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILG</td>
                            <td>February 2024</td>
                            <td>24.11.23</td>
                            <td>26.12.23</td>
                        </tr>
                        <tr>
                            <td>#UKOILH</td>
                            <td>March 2024</td>
                            <td>22.12.23</td>
                            <td>29.01.24</td>
                        </tr>
                        <tr>
                            <td rowspan="14" style="background-color: #f0f0f0;" width="120">Natural Gas Forward CFD
                            </td>
                        </tr>
                        <tr style="display:none;"></tr>
                        <tr>
                            <td>#NGG</td>
                            <td>February 2023</td>
                            <td>22.12.22</td>
                            <td>25.01.23</td>
                        </tr>
                        <tr>
                            <td>#NGH</td>
                            <td>March 2023</td>
                            <td>23.01.23</td>
                            <td>22.02.23</td>
                        </tr>
                        <tr>
                            <td>#NGJ</td>
                            <td>April 2023</td>
                            <td>20.02.23</td>
                            <td>27.03.23</td>
                        </tr>
                        <tr>
                            <td>#NGK</td>
                            <td>May 2023</td>
                            <td>23.03.23</td>
                            <td>24.04.23</td>
                        </tr>
                        <tr>
                            <td>#NGM</td>
                            <td>June 2023</td>
                            <td>20.04.23</td>
                            <td>24.05.23</td>
                        </tr>
                        <tr>
                            <td>#NGN</td>
                            <td>July 2023</td>
                            <td>22.05.23</td>
                            <td>26.06.23</td>
                        </tr>
                        <tr>
                            <td>#NGQ</td>
                            <td>August 2023</td>
                            <td>22.06.23</td>
                            <td>25.07.23</td>
                        </tr>
                        <tr>
                            <td>#NGU</td>
                            <td>September 2023</td>
                            <td>21.07.23</td>
                            <td>25.08.23</td>
                        </tr>
                        <tr>
                            <td>#NGV</td>
                            <td>October 2023</td>
                            <td>23.08.23</td>
                            <td>25.09.23</td>
                        </tr>
                        <tr>
                            <td>#NGX</td>
                            <td>November 2023</td>
                            <td>21.09.23</td>
                            <td>25.10.23</td>
                        </tr>
                        <tr>
                            <td>#NGZ</td>
                            <td>December 2023</td>
                            <td>23.10.23</td>
                            <td>24.11.23</td>
                        </tr>
                        <tr>
                            <td>#NGF</td>
                            <td>January 2024</td>
                            <td>22.11.23</td>
                            <td>25.12.23</td>
                        </tr>
                        <tr>
                            <td>#NGG</td>
                            <td>February 2024</td>
                            <td>21.12.23</td>
                            <td>25.01.24</td>
                        </tr>
                        <tr>
                            <td rowspan="14" style="background-color: #f7f7f7;" width="120">Gasoil Forward CFD</td>
                        </tr>
                        <tr style="display:none;"></tr>
                        <tr>
                            <td>#GSOG</td>
                            <td>February 2023</td>
                            <td>06.01.23</td>
                            <td>08.02.23</td>
                        </tr>
                        <tr>
                            <td>#GSOH</td>
                            <td>March 2023</td>
                            <td>06.02.23</td>
                            <td>08.03.23</td>
                        </tr>
                        <tr>
                            <td>#GSOJ</td>
                            <td>April 2023</td>
                            <td>06.03.23</td>
                            <td>10.04.23</td>
                        </tr>
                        <tr>
                            <td>#GSOK</td>
                            <td>May 2023</td>
                            <td>06.04.23</td>
                            <td>09.05.23</td>
                        </tr>
                        <tr>
                            <td>#GSOM</td>
                            <td>June 2023</td>
                            <td>05.05.23</td>
                            <td>08.06.23</td>
                        </tr>
                        <tr>
                            <td>#GSON</td>
                            <td>July 2023</td>
                            <td>06.06.23</td>
                            <td>10.07.23</td>
                        </tr>
                        <tr>
                            <td>#GSOQ</td>
                            <td>August 2023</td>
                            <td>06.07.23</td>
                            <td>08.08.23</td>
                        </tr>
                        <tr>
                            <td>#GSOU</td>
                            <td>September 2023</td>
                            <td>04.08.23</td>
                            <td>08.09.23</td>
                        </tr>
                        <tr>
                            <td>#GSOV</td>
                            <td>October 2023</td>
                            <td>06.09.23</td>
                            <td>10.10.23</td>
                        </tr>
                        <tr>
                            <td>#GSOX</td>
                            <td>November 2023</td>
                            <td>06.10.23</td>
                            <td>08.11.23</td>
                        </tr>
                        <tr>
                            <td>#GSOZ</td>
                            <td>December 2023</td>
                            <td>06.11.23</td>
                            <td>08.12.23</td>
                        </tr>
                        <tr>
                            <td>#GSOF</td>
                            <td>January 2024</td>
                            <td>06.12.23</td>
                            <td>09.01.24</td>
                        </tr>
                        <tr>
                            <td>#GSOG</td>
                            <td>February 2024</td>
                            <td>05.01.24</td>
                            <td>08.02.24</td>
                        </tr>
                        <tr>
                            <td rowspan="14" style="background-color: #f0f0f0;" width="120">Heating Oil Forward CFD
                            </td>
                        </tr>
                        <tr style="display:none;"></tr>
                        <tr>
                            <td>#HGG</td>
                            <td>February 2023</td>
                            <td>26.12.22</td>
                            <td>27.01.23</td>
                        </tr>
                        <tr>
                            <td>#HGH</td>
                            <td>March 2023</td>
                            <td>25.01.23</td>
                            <td>24.02.23</td>
                        </tr>
                        <tr>
                            <td>#HGJ</td>
                            <td>April 2023</td>
                            <td>22.02.23</td>
                            <td>29.03.23</td>
                        </tr>
                        <tr>
                            <td>#HGK</td>
                            <td>May 2023</td>
                            <td>27.03.23</td>
                            <td>26.04.23</td>
                        </tr>
                        <tr>
                            <td>#HGM</td>
                            <td>June 2023</td>
                            <td>24.04.23</td>
                            <td>29.05.23</td>
                        </tr>
                        <tr>
                            <td>#HGN</td>
                            <td>July 2023</td>
                            <td>26.05.23</td>
                            <td>28.06.23</td>
                        </tr>
                        <tr>
                            <td>#HGQ</td>
                            <td>August 2023</td>
                            <td>26.06.23</td>
                            <td>27.07.23</td>
                        </tr>
                        <tr>
                            <td>#HGU</td>
                            <td>September 2023</td>
                            <td>25.07.23</td>
                            <td>29.08.23</td>
                        </tr>
                        <tr>
                            <td>#HGV</td>
                            <td>October 2023</td>
                            <td>25.08.23</td>
                            <td>27.09.23</td>
                        </tr>
                        <tr>
                            <td>#HGX</td>
                            <td>November 2023</td>
                            <td>25.09.23</td>
                            <td>27.10.23</td>
                        </tr>
                        <tr>
                            <td>#HGZ</td>
                            <td>December 2023</td>
                            <td>25.10.23</td>
                            <td>28.11.23</td>
                        </tr>
                        <tr>
                            <td>#HGF</td>
                            <td>January 2024</td>
                            <td>24.11.23</td>
                            <td>27.12.23</td>
                        </tr>
                        <tr>
                            <td>#HGG</td>
                            <td>February 2024</td>
                            <td>25.12.23</td>
                            <td>29.01.23</td>
                        </tr>
                        <tr>
                            <td rowspan="14" style="background-color: #f7f7f7;" width="120">Gasoline Forward CFD</td>
                        </tr>
                        <tr style="display:none;"></tr>
                        <tr>
                            <td>#GASG</td>
                            <td>February 2023</td>
                            <td>26.12.22</td>
                            <td>27.01.23</td>
                        </tr>
                        <tr>
                            <td>#GASH</td>
                            <td>March 2023</td>
                            <td>25.01.23</td>
                            <td>24.02.23</td>
                        </tr>
                        <tr>
                            <td>#GASJ</td>
                            <td>April 2023</td>
                            <td>22.02.23</td>
                            <td>29.03.23</td>
                        </tr>
                        <tr>
                            <td>#GASK</td>
                            <td>May 2023</td>
                            <td>27.03.23</td>
                            <td>26.04.23</td>
                        </tr>
                        <tr>
                            <td>#GASM</td>
                            <td>June 2023</td>
                            <td>25.04.23</td>
                            <td>29.05.23</td>
                        </tr>
                        <tr>
                            <td>#GASN</td>
                            <td>July 2023</td>
                            <td>25.05.23</td>
                            <td>28.06.23</td>
                        </tr>
                        <tr>
                            <td>#GASQ</td>
                            <td>August 2023</td>
                            <td>26.06.23</td>
                            <td>27.07.23</td>
                        </tr>
                        <tr>
                            <td>#GASU</td>
                            <td>September 2023</td>
                            <td>25.07.23</td>
                            <td>29.08.23</td>
                        </tr>
                        <tr>
                            <td>#GASV</td>
                            <td>October 2023</td>
                            <td>25.08.23</td>
                            <td>27.09.23</td>
                        </tr>
                        <tr>
                            <td>#GASX</td>
                            <td>November 2023</td>
                            <td>25.09.23</td>
                            <td>27.10.23</td>
                        </tr>
                        <tr>
                            <td>#GASZ</td>
                            <td>December 2023</td>
                            <td>25.10.23</td>
                            <td>28.11.23</td>
                        </tr>
                        <tr>
                            <td>#GASF</td>
                            <td>January 2024</td>
                            <td>24.11.23</td>
                            <td>27.12.23</td>
                        </tr>
                        <tr>
                            <td>#GASG</td>
                            <td>February 2024</td>
                            <td>25.12.23</td>
                            <td>29.01.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="background-color: #f7f7f7;" width="120">Copper Forward CFD</td>
                        </tr>
                        <tr style="display:none;"></tr>
                        <tr>
                            <td>#HGCK</td>
                            <td>May 2023</td>
                            <td>22.02.23</td>
                            <td>26.04.23</td>
                        </tr>
                        <tr>
                            <td>#HGCN</td>
                            <td>July 2023</td>
                            <td>24.04.23</td>
                            <td>28.06.23</td>
                        </tr>
                        <tr>
                            <td>#HGCU</td>
                            <td>September 2023</td>
                            <td>26.06.23</td>
                            <td>29.08.23</td>
                        </tr>
                        <tr>
                            <td>#HGCZ</td>
                            <td>December 2023</td>
                            <td>25.08.23</td>
                            <td>28.11.23</td>
                        </tr>
                        <tr>
                            <td>#HGCH</td>
                            <td>March 2024</td>
                            <td>24.11.23</td>
                            <td>27.02.24</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3 class="h2 mt-5">@lang('Forward Expiration Dates - Bonds')</h3>

            <div class="table-responsive mt-3">
                <table class="table block-table stripe pricing-table advanced-table" data-page-length="100">
                    <thead>
                        <tr>
                            <th>Forward CFD</th>
                            <th>Platform Symbol</th>
                            <th>Contract Month</th>
                            <th>First Trading day</th>
                            <th>Last Trading day</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="6" style="background-color: #f7f7f7;" width="120">US. T- Bund Forward CFD
                            </td>
                        </tr>
                        <tr>
                            <td>#USBNDH</td>
                            <td>March 2023</td>
                            <td>24.11.22</td>
                            <td>24.02.23</td>
                        </tr>
                        <tr>
                            <td>#USBNDM</td>
                            <td>June 2023</td>
                            <td>22.02.23</td>
                            <td>29.05.23</td>
                        </tr>
                        <tr>
                            <td>#USBNDU</td>
                            <td>September 2023</td>
                            <td>25.05.23</td>
                            <td>29.08.23</td>
                        </tr>
                        <tr>
                            <td>#USBNDZ</td>
                            <td>December 2023</td>
                            <td>25.08.23</td>
                            <td>28.11.23</td>
                        </tr>
                        <tr>
                            <td>#USBNDH</td>
                            <td>March 2024</td>
                            <td>24.11.23</td>
                            <td>27.02.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="background-color: #f0f0f0;" width="120">Bund Forward CFD</td>
                        </tr>
                        <tr style="display:none;"></tr>
                        <tr>
                            <td>#BUNDH</td>
                            <td>March 2023</td>
                            <td>02.12.22</td>
                            <td>06.03.23</td>
                        </tr>
                        <tr>
                            <td>#BUNDM</td>
                            <td>June 2023</td>
                            <td>02.03.23</td>
                            <td>06.06.23</td>
                        </tr>
                        <tr>
                            <td>#BUNDU</td>
                            <td>September 2023</td>
                            <td>02.06.23</td>
                            <td>05.09.23</td>
                        </tr>
                        <tr>
                            <td>#BUNDZ</td>
                            <td>December 2023</td>
                            <td>01.09.23</td>
                            <td>05.12.23</td>
                        </tr>
                        <tr>
                            <td>#BUNDH</td>
                            <td>March 2024</td>
                            <td>01.12.23</td>
                            <td>06.03.24</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="background-color: #f7f7f7;" width="120">Long Gilt Forward CFD</td>
                        </tr>
                        <tr style="display:none;"></tr>
                        <tr>
                            <td>#LGILTH</td>
                            <td>March 2023</td>
                            <td>23.11.22</td>
                            <td>23.02.23</td>
                        </tr>
                        <tr>
                            <td>#LGILTM</td>
                            <td>June 2023</td>
                            <td>21.02.23</td>
                            <td>26.05.23</td>
                        </tr>
                        <tr>
                            <td>#LGILTU</td>
                            <td>September 2023</td>
                            <td>24.05.23</td>
                            <td>28.08.23</td>
                        </tr>
                        <tr>
                            <td>#LGILTZ</td>
                            <td>December 2023</td>
                            <td>24.08.23</td>
                            <td>27.12.23</td>
                        </tr>
                        <tr>
                            <td>#LGILTH</td>
                            <td>March 2024</td>
                            <td>25.12.23</td>
                            <td>26.02.24</td>
                        </tr>
                    </tbody>
                </table>
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
                    'title' => __('What are expiration dates in trading?'),
                    'bode' => __(
                        'Expiration dates in trading refer to the predetermined dates when certain financial instruments, such as options or futures contracts, expire.'),
                ],
                [
                    'title' => __('Why are expiration dates important in trading?'),
                    'bode' => __(
                        'Expiration dates are important because they mark the end of a contract, which can impact the value and trading strategies associated with the instrument.'),
                ],
                [
                    'title' => __('What happens when a contract reaches its expiration date?'),
                    'bode' => __(
                        'When a contract reaches its expiration date, it becomes invalid, and traders need to either close their positions or roll over to a new contract if available.'),
                ],
                [
                    'title' => __('Can expiration dates be extended?'),
                    'bode' => __(
                        'In some cases, expiration dates can be extended if there is an option to roll over the contract or if there is sufficient liquidity in the market for a new contract.'),
                ],
                [
                    'title' => __('How do expiration dates affect options trading?'),
                    'bode' => __(
                        'Expiration dates are crucial for options trading as they determine the timeframe within which the option holder can exercise their right to buy or sell the underlying asset.'),
                ],
                [
                    'title' => __('How can I find the expiration date of a specific financial instrument?'),
                    'bode' => __(
                        "The expiration date of a financial instrument can usually be found in the instrument's specifications or contract details provided by the exchange or trading platform."),
                ],
                [
                    'title' => __('Are there different expiration dates for different financial instruments?'),
                    'bode' => __(
                        'Yes, different financial instruments can have varying expiration dates, depending on the type of instrument and the market on which it is traded.'),
                ],
                [
                    'title' => __('Can I trade an instrument after its expiration date?'),
                    'bode' => __(
                        'No, once an instrument reaches its expiration date, it is typically no longer tradable. Traders need to close or settle their positions before the expiration date.'),
                ],
                [
                    'title' => __('What risks are associated with trading close to expiration dates?'),
                    'bode' => __(
                        'Trading close to expiration dates can involve increased risks, such as reduced liquidity, higher volatility, and potential price gaps due to changing market dynamics.'),
                ],
                [
                    'title' => __('How can I stay informed about upcoming expiration dates?'),
                    'bode' => __(
                        'Traders can stay informed about upcoming expiration dates by regularly checking trading calendars, market announcements, or using trading platforms that provide expiration date information.'),
                ],
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
