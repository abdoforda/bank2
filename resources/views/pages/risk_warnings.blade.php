@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" 
    style="--img: url(/images/new_images/pages/risk_warnings.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Risk Warning for TradeLive AI ')
            </div>
             <div class="row mt-4">
            <div class="col-md-9 text-white desc_page">
                <p>@lang('Trading in financial markets involves inherent risks. Before engaging in any trading activities, it is important to understand and acknowledge the potential risks involved. Please read and consider the following risk warning carefully .')</p>
            </div>
        </div>
        </div>
    </div>


    <div class="bg-white pt-5 pb-5 cht03">

        <div class="container">

            <h2>@lang('Leverage Risk:')</h2>
            <p class="leac">@lang('Trading on margin or using leverage can amplify both profits and losses. While leverage can increase potential returns, it also exposes clients to higher risks. It is important to understand how leverage works and carefully consider its use.')</p>
            <br>
			
			<h2>@lang('Instability of Financial Instruments:')</h2>
            <p class="leac">@lang('Financial markets can be volatile, and prices of instruments may fluctuate rapidly. This volatility can lead to potential losses if trades are not carefully managed.')</p>
            <br>
			
			<h2>@lang('Technical Risks:')</h2>
            <p class="leac">@lang('While we strive to provide a reliable trading platform, technical issues, system failures, or connectivity problems may occur. These technical risks can affect trade execution and result in financial losses.')</p>
            <br>
			
			<h2>@lang('Market Risk:')</h2>
            <p class="leac">@lang('The value of financial instruments can fluctuate, and there is no guarantee of profits. The market conditions and economic factors can impact the performance of trades, and clients should be prepared for potential losses.')</p>
            <br>
			
			<h2>@lang('Risks Associated with Government Laws:')</h2>
            <p class="leac">@lang('Different countries have varying regulations and legal frameworks that may impact financial markets. These government laws and policies can affect trading activities and expose traders to additional risks.')</p>
            <br>
			
			<h2>@lang('Risks Associated with the Trading Platform:')</h2>
            <p class="leac">@lang('The trading platform used by TradeLive AI  may be subject to technological vulnerabilities, including hacking or cyber-attacks. These risks can impact the security and integrity of client accounts and transactions.')</p>
            <br>
			
			<h2>@lang('Communication Risks:')</h2>
            <p class="leac">@lang('Communication failures, such as internet disruptions or delays, may affect trade execution, order placement, or access to account information. Clients should be aware of these communication risks and have contingency plans in place.')</p>
            <br>
			
			<h2>@lang('Force Majeure Events:')</h2>
            <p class="leac">@lang('Unforeseen events such as natural disasters, political unrest, or global pandemics may disrupt financial markets and trading activities. These force majeure events can lead to significant market volatility and potential financial losses.')</p>
            <br>
			
			<h2>@lang('Cryptocurrency CFDs:')</h2>
            <p class="leac">@lang('Trading cryptocurrency CFDs involves additional risks, including high volatility, regulatory uncertainty, and the potential for rapid price fluctuations. Clients should carefully assess the risks associated with cryptocurrency trading.')</p>
            <br>
			
			<h2>@lang('No Rights to Underlying Assets:')</h2>
            <p class="leac">@lang('Trading financial instruments, including derivatives, does not grant ownership rights to the underlying assets. Clients should be aware that they are speculating on price movements without owning the actual assets.')</p>
            <br>
			
			<h2>@lang('Gapping Risk:')</h2>
            <p class="leac">@lang('During periods of high market volatility or news announcements, price gaps may occur. These gaps can lead to slippage and result in trades being executed at prices different from the expected levels.')</p>
            <br>
			
			<h2>@lang('Stop Loss Orders Cannot Always Protect You:')</h2>
            <p class="leac">@lang('While stop loss orders are designed to limit potential losses, they may not always be executed at the specified price. Market conditions, including rapid price movements, can result in stop loss orders being filled at a different price.')</p>
            <br>
			
			<h2>@lang('Risk of Margin Call and Liquidation:')</h2>
            <p class="leac">@lang('Trading on margin involves the risk of margin calls and liquidation. If account equity falls below the required margin level, positions may be automatically closed, resulting in potential losses.')</p>
            <br>
			
			<h2>@lang('Risk of Loss of Invested Funds:')</h2>
            <p class="leac">@lang('Trading on financial markets carries the risk of losing all invested capital. Clients should only trade with funds they can afford to lose and should not invest money earmarked for essential living expenses.')</p>
            <br>
			
			<h2>@lang('No Guarantee of Profit:')</h2>
            <p class="leac">@lang('Trading on financial markets does not guarantee profits. The performance of trades depends on various factors, including market conditions, economic data, and individual trading decisions.')</p>
            <br>
			
			<h2>@lang('Interest Rate Risk:')</h2>
            <p class="leac">@lang('Changes in interest rates can affect the value of certain financial instruments, such as bonds or currency pairs. Clients should be aware of the potential impact of interest rate fluctuations on their trading positions.')</p>
            <br>
			
			<h2>@lang('Legal and Regulatory Risk:')</h2>
            <p class="leac">@lang('Legal and regulatory changes can affect the operation of financial markets and trading activities. Clients should be aware of the legal and regulatory risks associated with trading in different jurisdictions.')</p>
            <br>
			
			<h2>@lang('Risks Beyond the Control of the Company:')</h2>
            <p class="leac">@lang('There may be risks that are beyond the control of TradeLive AI , such as acts of nature, political instability, or technological')</p>
            <br>
			
			

        </div>
    </div>

<style>

    .cht03 h2{
        color: #246ab4;
    font-weight: 700;
    }
</style>
@endsection
