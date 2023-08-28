@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center"
     style="--img: url(/images/new_images/pages/how_to_open_account.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('How to Open an Account')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('To begin your journey in the financial markets, you will need to open an account with Highness Investment LLC. Follow these simple steps to get started')</p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row  g-2">
                <div class="col-md-8">
                    <h3 class="h1">
                        @lang('Opening a Highness Account')
                    </h3>
                    <p class="mt-3">
                        @lang("Are you eager to start capitalizing on the opportunities of financial markets? Whether you're interested in trading various assets, the initial step as a trader is to register a Members Area and open a trading account.") 
                        <br><br>
                        @lang("This page provides beginner traders with guidance on how to open their first trading account, along with recommendations to help select the most suitable parameters.") 
                         <br><br>
                         @lang("Watch our concise video tutorial for step-by-step instructions, and explore further details below for comprehensive information.") 
                    </p>

                    <div class="mt-4">
                        <iframe width="100%" height="415" src="https://www.youtube.com/embed/zJbVSbNXSUU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background: #4848485e;">
        <div class="container">
            <h2 class="text-center">
                @lang('Opportunities of Members Area') 
            </h2>
            <div class="row justify-content-center g-2 text-center">
                <div class="col">
                    <img style=" height: 64px; " src="/images/new_images/icons/Over 15 years of experience.png" />
                    <h6 class="fw-600 mt-3">@lang('Managing accounts') </h6>
                </div>
                <div class="col">
                    <img style=" height: 64px; " src="/images/new_images/icons/Over 15 years of experience.png" />
                    <h6 class="fw-600 mt-3">@lang('Depositing/withdrawing') <br>@lang('funds')</h6>
                </div>
                <div class="col">
                    <img style=" height: 64px; " src="/images/new_images/icons/Over 15 years of experience.png" />
                    <h6 class="fw-600 mt-3">@lang('Accessing') <br>@lang('transaction history') </h6>
                </div>
                <div class="col">
                    <img style=" height: 64px; " src="/images/new_images/icons/Over 15 years of experience.png" />
                    <h6 class="fw-600 mt-3">@lang('Investing') </h6>
                </div>
                <div class="col">
                    <img style=" height: 64px; " src="/images/new_images/icons/Over 15 years of experience.png" />
                    <h6 class="fw-600 mt-3">@lang('Studying new') <br>@lang('instruments') </h6>
                </div>

            </div>

            <center>
                <a href="https://portal.TradeLive AI.com/en/auth/register">
                    <button type="button" class="mt-4 btn btn-lg btn-outline-primary">@lang('Registration') </button>
                </a>
            </center>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <h3 class="h2">@lang('Selecting a Trading Terminal') </h3>
                    <p class="mt-3">@lang('Before embarking on your journey into the financial markets, it is crucial to choose a trading terminal, which serves as an essential tool for traders. The trading terminal is the interface through which you execute trades, analyze market data, and manage your trading activities. In this section, we provide valuable insights and considerations to help you choose the right trading terminal for your trading needs. We outline key features, functionality, and compatibility factors that can influence your decision-making process. Discover our comprehensive information below to make an informed choice when selecting a trading terminal for your trading endeavors.') 


                    </p>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-md-6">
                            <h4>@lang('Popular Trading Platform:') </h4>
                            <ul class="terminal__details small p-0  ">
                                <li>@lang('User-friendly interface, educational materials.') </li>
                                <li>@lang('Accessible on desktop, mobile, and web.') </li>
                                <li>@lang('Built-in shop for Expert Advisors.') </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="/images/new_images/platforms/mt4-screen.jpg" class="img-fluid rounded-top"
                                alt="">
                        </div>
                    </div>

                    <div class="mt-5 row justify-content-center align-items-center g-2">
                        <div class="col-md-6">
                            <h4>@lang('Updated MT4 Platform:') </h4>
                            <ul class="terminal__details small p-0">
                                <li>@lang('Gaining popularity among traders.') </li>
                                <li>@lang('Streamlined strategy testing system.') </li>
                                <li>@lang('Intuitive and user-friendly interface.') </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="/images/new_images/platforms/mt5-screen.jpg" class="img-fluid rounded-top"
                                alt="">
                        </div>
                    </div>

                    <div class="mt-5 row justify-content-center align-items-center g-2">
                        <div class="col-md-6">
                            <h4>@lang('Highness Trading Terminal:') </h4>
                            <ul class="terminal__details small p-0">
                                <li>@lang('Seamless access to major financial markets via browser.') </li>
                                <li>@lang('Build trading robots effortlessly with built-in strategy builder, no programming required.') </li>
                                <li>@lang("'One-Click Trading' for faster and easier position opening.") </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="/images/new_images/platforms/rtareder-screen.jpg" class="img-fluid rounded-top"
                                alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <h3 class="h2">@lang('Which account type is recommended for beginners?') </h3>

                    <p class="fw-600 mt-4">
                        @lang('Upon registering a Members Area, the first trading account will be automatically opened for the client. For beginners, it is advisable to first practice on a demo account, which allows trading with virtual funds and gaining valuable experience. If using MT4 or MT5 platforms, the options include Demo ECN or Demo Pro accounts. Alternatively, for those who want to start with a real account but trade with smaller amounts, the live account is available on both MT4 and MT5 platforms.') 
                    </p>
                    <div class="mt-4 row  g-2">
                        <div class="col-md-10">
                            <div class="row  g-4">
                                <div class="col-md-6">
                                    <h4 class="fw-700 color2">@lang('Standard') </h4>
                                    <p class="small mt-2">@lang('Standard is more often used for testing trading strategies by experienced traders.') </p>

                                    <h4 class="fw-700 color2 mt-5">@lang('Highness') </h4>
                                    <p class="small mt-2">@lang('Highness is created especially for beginners with less than 1 year of trading experience.') </p>

                                </div>
                                <div class="col-md-6">
                                    <h4 class="fw-700 color2">@lang('Premium') </h4>
                                    <p class="small mt-2">@lang('Premium account provides a trader with access to transactions with small sums of money, because the monetary unit of this account type a cent (0.01 USD). To start trading, 10 USD on your account will be suffice.') </p>

                                </div>
                            </div>

                            <div class="row  g-4">
                                <div class="col-md-6">
                                    
                                    <a href="https://portal.TradeLive AI.com/en/auth/register">
                                    <button type="button" class="btn btn-lg btn-outline-primary">@lang('Open Demo account')</button>
                                        </a>
                                </div>
                                <div class="col-md-6">

                                    
                                    <a href="https://portal.TradeLive AI.com/en/auth/register">
                                    <button type="button" class="btn btn-lg btn-primary">@lang('Open live account') </button>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="background: #4848485e;">
        <div class="container">
            <center>
                <h2>
                    @lang('What currency to choose for opening an account?') 
                </h2>

                <p class="">@lang('It is recommended to begin trading on an account with one of the widely used currencies. As you gain experience, you can opt for a different base currency when opening a new trading account.') </p>

                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-md-10">
                        <div class="row justify-content-center align-items-center g-4">
                            <div class="col-md-6">
                                <img style=" height: 64px; " src="/images/new_images/icons/american-dollar-symbol.png" />
                                <h3 class="fw-600 mt-3 color2">USD</h3>
                                <p class="small text-black-50">@lang('The US Dollar (USD) is widely regarded as the most popular base currency for trading on financial markets. Its prevalence is attributed to its widespread use in educational resources and tutorials, making it a convenient choice for traders seeking ample learning materials.') </p>
                            </div>

                            <div class="col-md-6">
                                <img style=" height: 64px; " src="/images/new_images/icons/euro-currency-sign.png" />
                                <h3 class="fw-600 mt-3 color2">EUR</h3>
                                <p class="small text-black-50">@lang('EUR serves as a convenient base currency for residents of the European Union, allowing them to deposit and withdraw funds without the need for additional conversions. While not as prevalent as the USD, EUR remains a popular choice among traders in the region.') </p>
                            </div>
                        </div>
                    </div>
                </div>
            </center>



        </div>
    </section>


    <section>
        <div class="container">
            <h3>
                @lang('How do I deposit funds to my account?') 
            </h3>
            <p class="mt-2">
                @lang('Login to your Members Area and go to') 
            </p>

            <div class="mt-5">
                <ul class="steps listDownInMobile">
                    <li class="steps_item-1 text-black">@lang('Funds') <br>
                        @lang('management') </li>
                    <li class="steps_item-2 text-black">@lang('Deposit/Withdrawal') </li>
                    <li class="steps_item-3 text-black">@lang('Deposit funds') </li>
                </ul>

                <p class="lead m-0 mt-3">
                    @lang('Choose a convenient payment system and make a payment.') 
                </p>
                <p class="lead">
                    @lang("The deposited funds will be displayed in 'My accounts' section and the trading terminal interface.") 
                </p>

                <a href="https://portal.TradeLive AI.com/en/auth/register">
                <button type="button" class="mt-3 btn btn-lg btn-primary">
                    @lang('Go to Members Area') 
                </button>
            </a>
            </div>
        </div>
    </section>
@endsection
