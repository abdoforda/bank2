<?php

use App\Http\Controllers\AdminpanelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/clear', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return "done";
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::prefix('{lang?}')->middleware('locale')->group(function () {

    Route::get('deposit_success',              [HomeController::class, "deposit_success"])->name('deposit_success');
    Route::get('deposit_failure',              [HomeController::class, "deposit_failure"])->name('deposit_failure');
    Route::get('callback',              [HomeController::class, "callback"])->name('callback');
    Route::post("depositVisaOrMaster", [HomeController::class, "depositVisaOrMaster"])->name('depositVisaOrMaster');
    Route::post("depositSticpay", [HomeController::class, "depositSticpay"])->name('depositSticpay');
    Route::post("bankDeposit", [HomeController::class, "bankDeposit"])->name('bankDeposit');


    // stripe 
    Route::get('stripe',              [StripeController::class, "index"])->name('stripe.index');
    Route::get('stripe/checkout',              [StripeController::class, "checkout"])->name('stripe.checkout');
    Route::get('stripe/success',              [StripeController::class, "success"])->name('stripe.success');

    // Home
    Route::get('/',                     [HomeController::class, "index"])->name('index');

    // navbar > about > Highness Us
    Route::get('about-us',              [HomeController::class, "about"])->name('about-us');
    Route::get('news',                  [HomeController::class, "news"])->name('news');
    Route::get('why-highness',          [HomeController::class, "whyHighness"])->name('why-highness');
    Route::get('careers',               [HomeController::class, "careers"])->name('careers');
    Route::get('vision',                [HomeController::class, "vision"])->name('vision');
    Route::get('Mission',                [HomeController::class, "Mission"])->name('Mission');
    Route::get('contact-us',            [HomeController::class, "contactUs"])->name('contactUs');

    // navbar > about > Regulation
    Route::get('terms_and_agreement',   [HomeController::class, "terms_and_agreement"])->name('terms_and_agreement');
    Route::get('safety_of_your_funds',  [HomeController::class, "safety_of_your_funds"])->name('safety_of_your_funds');
    Route::get('legal_forms_documents', [HomeController::class, "legal_forms_documents"])->name('legal_forms_documents');
    Route::get('risk_warnings',         [HomeController::class, "risk_warnings"])->name('risk_warnings');
    Route::get('cookies_policy',        [HomeController::class, "cookies_policy"])->name('cookies_policy');
    Route::get('privacy_policy',        [HomeController::class, "privacy_policy"])->name('privacy_policy');
    
    // navbar > about > Activity
    Route::get('sponsership',           [HomeController::class, "sponsership"])->name('sponsership');
    Route::get('awards',                [HomeController::class, "awards"])->name('awards');
    Route::get('exhibitions',           [HomeController::class, "exhibitions"])->name('exhibitions');
    Route::get('highness_in_media',     [HomeController::class, "highness_in_media"])->name('highness_in_media');

    // navbar > Markets
    Route::get('forex',                 [HomeController::class, "forex"])->name('forex');
    Route::get('indices',               [HomeController::class, "indices"])->name('indices');
    Route::get('commodities',           [HomeController::class, "commodities"])->name('commodities');
    Route::get('metals',                [HomeController::class, "metals"])->name('metals');
    Route::get('energy_commodities',    [HomeController::class, "energyCommodities"])->name('energyCommodities');
    Route::get('shares',                [HomeController::class, "shares"])->name('shares');
    Route::get('cryptocurrencies',      [HomeController::class, "cryptocurrencies"])->name('cryptocurrencies');
    Route::get('etf',                   [HomeController::class, "etf"])->name('etf');

    //navbar > Trading > Accounts Types

    Route::get('standard_account',      [HomeController::class, "standard_account"])->name('standard_account');
    Route::get('highness_account',      [HomeController::class, "highness_account"])->name('highness_account');
    Route::get('premium_account',       [HomeController::class, "premium_account"])->name('premium_account');

    //navbar > Trading > Trading Platforms
    Route::get("metaTrader_5",          [HomeController::class, "metaTrader_5"])->name("metaTrader_5");
    Route::get("highness_ios",          [HomeController::class, "highness_ios"])->name("highness_ios");
    Route::get("highness_android",      [HomeController::class, "highness_android"])->name("highness_android");
    
    //navbar > Trading > Deposit and Withdrawal
    Route::get("deposit_withdrawal_methods", [HomeController::class, "deposit_withdrawal_methods"])->name("deposit_withdrawal_methods");
    Route::get("fees",                       [HomeController::class, "fees"])->name("fees");

    //navbar > Trading > Contract Specifications
    Route::get("police",                     [HomeController::class, "police"])->name("police");

    //navbar > Trading > Partnership 
    Route::get("cpa_affiliate",              [HomeController::class, "cpa_affiliate"])->name("cpa_affiliate");
    Route::get("ib_commission",              [HomeController::class, "ib_commission"])->name("ib_commission");
    Route::get("white_label",                [HomeController::class, "white_label"])->name("white_label");
    Route::post("white_label",                [HomeController::class, "white_label"])->name("white_label");
    
    //navbar > Knowledge Types > Fix APi 
    Route::get("fix_api",                               [HomeController::class, "fix_api"])->name("fix_api");
    Route::get("mam_pamm",                              [HomeController::class, "mam_pamm"])->name("mam_pamm");
    Route::get("expert_advisor",                        [HomeController::class, "expert_advisor"])->name("expert_advisor");
    Route::get("free_vps_hosting",                      [HomeController::class, "free_vps_hosting"])->name("free_vps_hosting");
    
    Route::get("economic_calendar",                     [HomeController::class, "economic_calendar"])->name("economic_calendar");
    Route::get("trading_central_web_tv",                [HomeController::class, "trading_central_web_tv"])->name("trading_central_web_tv");
    Route::get("currency_converter",                    [HomeController::class, "currency_converter"])->name("currency_converter");
    Route::get("faq",                                   [HomeController::class, "currency_converter"])->name("faq");
    Route::get("trading_hours_and_holidays",            [HomeController::class, "trading_hours_and_holidays"])->name("trading_hours_and_holidays");
    Route::get("expiration_dates",                      [HomeController::class, "expiration_dates"])->name("expiration_dates");
    Route::get("how_to_open_account",                   [HomeController::class, "how_to_open_account"])->name("how_to_open_account");
    Route::get("how_to_start_trading",                  [HomeController::class, "how_to_start_trading"])->name("how_to_start_trading");
    Route::get("financial_news",                        [HomeController::class, "financial_news"])->name("financial_news");
    Route::get("financial_news/{name}",                 [HomeController::class, "financial_news_show"])->name("financial_news.show");
    Route::get("news/{name}",                           [HomeController::class, "news_show"])->name("news.show");
    Route::get("technical_analysis_articles",           [HomeController::class, "technical_analysis_articles"])->name("technical_analysis_articles");
    Route::get("technical_analysis_videos",             [HomeController::class, "technical_analysis_videos"])->name("technical_analysis_videos");
    Route::get("technical_analysis_videos/{name}",             [HomeController::class, "technical_analysis_videos_show"])->name("technical_analysis_videos_show");
    Route::get("webinars",                              [HomeController::class, "webinars"])->name("webinars");
    Route::get("analisis_and_forcost",                  [HomeController::class, "analisis_and_forcost"])->name("analisis_and_forcost");
    Route::get("blogs",                                 [HomeController::class, "blogs"])->name("blogs");
  

    Route::get("support",                    [HomeController::class, "support"])->name("support");
    Route::post("support",                    [HomeController::class, "supportPost"])->name("supportPost");
    
    Route::post("sendUsdt", [HomeController::class, "sendUsdt"])->name('sendUsdt');
    Route::post("withdrawUsdt", [HomeController::class, "withdrawUsdt"])->name('withdrawUsdt');

    // panel

    
        
    Route::prefix('panel')->group(function () {

        Route::group(['middleware' => ['auth', 'verified']], function () {
            Route::get("/",                              [PanelController::class, "panel"])->name("panel.index");
            Route::get("dashboard",                      [PanelController::class, "panel_dashboard"])->name("panel_dashboard");
            Route::get("upload-documents",               [PanelController::class, "uploadDocuments"])->name("uploadDocuments");
            Route::post("upload-documents",               [PanelController::class, "uploadDocumentsPost"])->name("uploadDocumentsPost");
            Route::post("updateDocProfile",               [PanelController::class, "updateDocProfile"])->name("updateDocProfile");
            Route::get("tickets",                        [PanelController::class, "tickets"])->name("tickets");
            
            //pages
            Route::get("account",                        [PanelController::class, "account"])->name("panel.account");
            Route::get("bank-card",                        [PanelController::class, "bank_card"])->name("panel.bank_card");
            Route::get("wallet",                        [PanelController::class, "wallet"])->name("panel.wallet");
            Route::get("banking",                        [PanelController::class, "banking"])->name("panel.banking");
            Route::get("verification",                        [PanelController::class, "verification"])->name("panel.verification");
        
        });

    });

    Route::prefix('adminPanel')->group(function () {

        Route::group(['middleware' => ['auth', 'verified', 'admin']], function () {
            Route::get("/", [AdminpanelController::class, "index"])->name("admin.index");
            Route::get("verificationUser", [AdminpanelController::class, "verificationUser"])->name("admin.verificationUser");
            Route::get("showProfile/{user}", [AdminpanelController::class, "showProfile"])->name("admin.showProfile");
            Route::get("getDataNumbers", [AdminpanelController::class, "getDataNumbers"])->name("admin.getDataNumbers");
            // cancel profile
            Route::get("cancelProfile/{user}/{message}", [AdminpanelController::class, "cancelProfile"])->name("admin.cancelProfile");
            Route::get("confirmProfile/{user}", [AdminpanelController::class, "confirmProfile"])->name("admin.confirmProfile");
        });

    });
    


    //navbar > Knowledge Types > Tools
    //navbar > Knowledge Types > Trading
    //navbar > Knowledge Types > Education
    //navbar > Knowledge Types > Market Research
    //navbar > Knowledge Types > Analytics


    Route::get('test',                          [HomeController::class, "test"])->name('test');

    Auth::routes();
    Route::post('registerSite', [HomeController::class, 'register'])->name('registerSite');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/signOut', [AuthController::class, 'signOut'])->name('signOut');
});

Auth::routes(['verify' => true]);
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
