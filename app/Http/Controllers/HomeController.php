<?php

namespace App\Http\Controllers;

use App\CatVideo;
use App\FinancialNews;
use App\Models\User;
use App\News;
use App\Question;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Str;
use App\Rules\ReCaptcha;
use DOMDocument;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    
    public function home()
    {
        return view('welcome');
    }

    public function register(Request $request)
    {

        $request->validate([
            'type' => ['required'],
            'username' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'code_phone' => ['required'],
            'phone' => ['required'],
            'password' => ['required_if:type,live'],
            'accept' => ['required'],
        ]);

        if ($request->type == 1) {
            $request->validate([
                'password' => ['string', 'min:8', 'confirmed'],
            ]);
        }


        $number = $request->code_phone . $request->phone;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api-portal.TradeLive AI .com/api/v2/lead',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "personalInformation": {
      "email":"' . $request->email . '",
      "firstName": "' . $request->username . '",
      "lastName": "' . $request->lastname . '",
      "companyName": "",
      "vatNo": "",
      "eType": 1,
      "title": "Mr",
      "gender": "",
      "birthday": "1990-10-25",
      "countryOfResidence": "JO",
      "nationalityCountryCode": "JO",
      "preferredLanguageCode": "EN",
      "timezone": "gmt+3",
      "telephones": [
          {
              "number": "' . $number . '"
          }
      ],
      "addresses": [
          {
              "street": "Gardenz Street",
              "streetNum": "422",
              "city": "JO",
              "postalCode": "00962",
              "state": "Amman",
              "countryCode": "JO",
              "typeOf": "residential"
          }
      ]
    },
    "password": "' . $request->password . '",
    "utmDetails": {
        "utmCampaign": "Website Reigstration",
        "utmMedium": "Website Homepage",
        "utmSource": "Webpage",
        "registrationUrl": "https://TradeLive AI .com",
        "sourcePage": "Website Homepage"
    },
    "metadata": {
        "additionalMeta": "additionalMeta1",
        "additionalMeta2": "additionalMeta2"
    }
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Date: Wed, 20 Dec 2017 07:28:00 GMT',
                'X-Api-Key: b023b073-60c2-4da9-a3a1-19081cd917fb'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;

         
        $user = new User();
        $user->name = $request->username;
        $user->username = $request->username;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->code_phone = $request->code_phone;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->type = $request->type;
        $user->save();

        $user->sendEmailVerificationNotification();

        Auth::login($user);
        return "Done";
    }

    public function withdrawUsdt(Request $request)
    {
        $request->validate([
            'usdt' => ['required'],
            'phone' => ['required'],
            'user_id' => ['required'],
        ]);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $to_emails = ['support@tradelive.ai'];
        foreach ($to_emails as $to_email) {
            $to_name = 'TradeLive AI ';
            $data = array('user_id' => $request->user_id, 'usdt' => $request->usdt, 'track' => $randomString, 'phone' => $request->phone);
            Mail::send('emails.withdraw', $data, function ($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject('TradeLive AI  Deposit');
                $message->from('support@tradelive.ai', 'TradeLive AI  Deposit');
            });
        }


        $uu = $request->usdt;
        return view('components.successUsdt', compact(['randomString', 'uu']));
    }

    public function sendUsdt(Request $request)
    {
        $request->validate([
            'usdt' => ['required'],
            'phone' => ['required'],
            'user_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'image' => 'required|mimes:jpeg,png,jpg,pdf|max:10240',
        ]);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $url = $image->move(public_path('uploads'), $imageName);
        $url = "https://TradeLive AI .com/uploads/" . $imageName;
        $uu = $request->usdt;

        $to_name = 'TradeLive AI ';
        
        $list = [$request->email, 'support@tradelive.ai'];
        $data = array('name'=>$request->name ,'uu' => $uu, 'image' => $url, 'usdt' => $request->usdt, 'randomString' => $randomString, 'phone' => $request->phone,'email'=>$request->email,'user_id'=>$request->user_id);
        foreach($list as $to_email){
            Mail::send('emails.successUsdtSales', $data, function ($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject('TradeLive AI  Deposit');
                $message->from('support@tradelive.ai', 'TradeLive AI  Deposit');
            });
        }

        
        return view('components.successUsdt', compact(['randomString', 'uu']));
    }

    public function index()
    {
        $signals = [];
        $file_content = file_get_contents("https://foresignal.com/en/");
        $dom = new DOMDocument();
        @$dom->loadHTML(mb_convert_encoding($file_content, "HTML-ENTITIES", "UTF-8"));
        foreach ($dom->getElementsByTagName("div") as $div) {
            if($div->getAttribute("class") == "signal-group mb-1"){
                $h = str_replace('<![CDATA[','',$div->ownerDocument->saveXML($div));
                $h = str_replace(']]>','',$h);
                $signals[] = $h;
            }
        } // end foreach
        return view('welcome', compact('signals'));
    }


    public function about()
    {
        return view('pages.about');
    }

    public function news()
    {
        return view('pages.news2');
        return view('pages.news');
    }

    public function new()
    {
        return view('panel.new');
    }

    public function test()
    {
        return view('pages.test');
    }
    public function whytradeLive()
    {
        return view('pages.whyHighness');
    }
    public function careers()
    {
        return view('pages.careers');
    }
    public function vision()
    {
        return view('pages.vision');
    }
    public function Mission()
    {
        return view('pages.mission');
    }
    public function contactUs()
    {
        return view('pages.support');
    }

    public function forex()
    {
        return view('pages.forex');
    }
    public function indices()
    {
        return view('pages.indices');
    }
    public function commodities()
    {
        return view('pages.commodities');
    }
    public function metals()
    {
        return view('pages.metals');
    }
    public function energyCommodities()
    {
        return view('pages.energyCommodities');
    }
    public function shares()
    {
        return view('pages.shares');
    }
    public function cryptocurrencies()
    {
        return view('pages.cryptocurrencies');
    }
    public function etf()
    {
        return view('pages.etf');
    }

    public function terms_and_agreement()
    {
        return view('pages.terms_and_agreement');
    }
    public function safety_of_your_funds()
    {
        return view('pages.safety_of_your_funds');
    }
    public function legal_forms_documents()
    {
        return view('pages.legal_forms_documents');
    }
    public function risk_warnings()
    {
        return view('pages.risk_warnings');
    }
    public function cookies_policy()
    {
        return view('pages.cookies_policy');
    }
    public function privacy_policy()
    {
        return view('pages.privacy_policy');
    }
    public function sponsership()
    {
        return view('pages.sponsership');
    }
    public function awards()
    {
        return view('pages.awards');
    }
    public function exhibitions()
    {
        return view('pages.exhibitions');
    }
    public function tradeLive_in_media()
    {
        return view('pages.highness_in_media');
    }

    public function standard_account()
    {
        $clientIP = \Request::ip();
        if ($clientIP == "127.0.0.1") {
            $clientIP = "156.222.68.255";
        }
        $position = Location::get($clientIP);
        $country = $position->countryName;
        $countryCode = $position->countryCode;
        return view('pages.standard_account', compact(['country', 'countryCode']));
    }
    public function tradeLive_account()
    {
        $clientIP = \Request::ip();
        if ($clientIP == "127.0.0.1") {
            $clientIP = "156.222.68.255";
        }
        $position = Location::get($clientIP);
        $country = $position->countryName;
        $countryCode = $position->countryCode;
        return view('pages.highness_account', compact(['country', 'countryCode']));
    }
    public function premium_account()
    {
        $clientIP = \Request::ip();
        if ($clientIP == "127.0.0.1") {
            $clientIP = "156.222.68.255";
        }
        $position = Location::get($clientIP);
        $country = $position->countryName;
        $countryCode = $position->countryCode;
        return view('pages.premium_account', compact(['country', 'countryCode']));
    }

    public function metaTrader_5()
    {
        return view('pages.metaTrader_5');
    }
    public function tradeLive_ios()
    {
        return view('pages.highness_ios');
    }
    public function tradeLive_android()
    {
        return view('pages.highness_android');
    }
    public function deposit_withdrawal_methods()
    {
        return view('pages.deposit_withdrawal_methods');
    }
    public function fees()
    {
        return view('pages.fees');
    }
    public function police()
    {
        return view('pages.police');
    }

    public function cpa_affiliate()
    {
        return view('pages.cpa_affiliate');
    }
    public function ib_commission()
    {
        return view('pages.ib_commission');
    }
    public function white_label(Request $request)
    {
        // if request post
        if ($request->isMethod('post')) {
            $request->validate([
                'username' => ['required'],
                'email' => ['required'],
                'phone' => ['required'],
                'message' => ['required']
            ]);

            $Question = new Question();
            $Question->username = $request->username;
            $Question->email = $request->email;
            $Question->phone = $request->phone;
            $Question->message = $request->message;
            $Question->save();
            return "Done";

        }
            
        return view('pages.white_label');
    }

    public function fix_api()
    {
        return view('pages.fix_api');
    }
    public function mam_pamm()
    {
        return view('pages.mam_pamm');
    }
    public function expert_advisor()
    {
        return view('pages.expert_advisor');
    }
    public function free_vps_hosting()
    {
        return view('pages.free_vps_hosting');
    }
    public function economic_calendar()
    {
        return view('pages.economic_calendar');
    }
    public function currency_converter()
    {
        return view('pages.currency_converter');
    }
    public function trading_central_web_tv()
    {
        return view('pages.trading_central_web_tv');
    }
    public function trading_hours_and_holidays()
    {
        return view('pages.trading_hours_and_holidays');
    }
    public function expiration_dates()
    {
        return view('pages.expiration_dates');
    }
    public function how_to_open_account()
    {
        return view('pages.how_to_open_account');
    }
    public function how_to_start_trading()
    {
        return view('pages.how_to_start_trading');
    }

    public function financial_news()
    {
        return view('pages.financial_news');
    }
    public function financial_news_show($locale, $name)
    {

        $new = false;
        $edus = FinancialNews::select(['id', 'name'])->get();
        foreach ($edus as $i) {
            if (Str::slug($i->getTranslatedAttribute('name', 'en')) == $name) {
                $new = FinancialNews::find($i->id);
            }
        }
        if ($new) {
            return view('pages.financial_news_show', compact('new'));
        }

        return abort(404);
    }

    public function news_show($locale, $slug)
    {

        $new = News::where('slug', $slug)->first();
        
        if ($new) {
            return view('pages.news_show', compact('new'));
        }

        return abort(404);
    }


    
    public function technical_analysis_articles()
    {

        $cats = CatVideo::all();

        return view('pages.technical_analysis_articles', compact(['cats']));
    }

    public function technical_analysis_videos()
    {
        $videos = Video::paginate(6);
        return view('pages.technical_analysis_videos', compact('videos'));
    }
    public function technical_analysis_videos_show($locale, $name)
    {

        $video = false;
        $edus = Video::select(['id', 'name'])->get();
        foreach ($edus as $i) {
            if (Str::slug($i->getTranslatedAttribute('name', 'en')) == $name) {
                $video = Video::find($i->id);
            }
        }
        if ($video) {
            return view('pages.technical_analysis_videos_show', compact('video'));
        }

        return abort(404);
    }
    public function webinars()
    {
        return view('pages.webinars');
    }

    public function support()
    {
        return view('pages.support_new');
    }

    // pabel
    public function panel()
    {
        return view('panel.dashboard');
    }
    public function panel_dashboard()
    {
        return view('panel.dashboard');
    }

    public function upload_documents()
    {
        return view('panel.uploadDocuments');
    }


    public function supportPost(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'code' => ['required'],
            'email' => ['required'],
            'city' => ['required'],
            'lang' => ['required'],
            'g-recaptcha-response' => ['required'],
        ]);

        $to_emails = ['abdelrahmaan3@gmail.com', 'support@tradelive.ai'];
        foreach ($to_emails as $to_email) {
            $to_name = 'TradeLive AI  contact us';
            $data = array('name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'code' => $request->code, 'whatsapp' => $request->whatsapp, 'city' => $request->city, 'lang' => $request->lang);
            Mail::send('emails.contactUs', $data, function ($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject('TradeLive AI  contact us');
                $message->from('support@tradelive.ai', 'TradeLive AI  contact us');
            });
        }

        return "Done";
    }
    public function deposit_success(){

        $email = session()->get('email');
        if($email == null){
            return redirect()->route('deposit_withdrawal_methods', app()->getLocale());
        }
        
        //get user_id, phone and amount from session
        $name = '';
        $user_id = '';
        $email = '';
        $phone = '';
        $amount = '';

        $name = session()->get('name');
        $user_id = session()->get('account_number');
        $email = session()->get('email');
        $phone = session()->get('phone');
        $amount = session()->get('amount');
        $date = date('Y-m-d H:i:s');
        // delete user_id, phone and amount from session
        session()->forget('name');
        session()->forget('user_id');
        session()->forget('phone');
        session()->forget('amount');
        session()->forget('email');
        
        $to_name = 'TradeLive AI ';
        $data = array('name'=>$name, 'user_id' => $user_id, 'phone' => $phone, 'amount' => $amount, 'email' => $email,'date'=>$date);
        $list = [$email];
        $list[] = 'support@tradelive.ai';
        foreach($list as $ll){
            Mail::send('emails.deposit', $data, function ($message) use ($to_name, $ll) {
                $message->to($ll, $to_name)
                    ->subject('TradeLive AI  Deposit');
                $message->from('support@tradelive.ai', 'TradeLive AI  Deposit');
            });
        }
        return view('pages.deposit_success');
    }
    public function deposit_failure(){
        return view('pages.deposit_failure');
    }
    public function callback(){
        return view('pages.callback');
    }
    public function depositVisaOrMaster($locale, Request $request){
        
        $request->validate([
            'email' => ['required', 'email', 'max:255',],
            'amount' => ['required','min:1','max:50000','numeric'],
        ]);

        

        $request->session()->put('name', $request->name);
        $request->session()->put('user_id', $request->user_id);
        $request->session()->put('amount', $request->amount);
        $request->session()->put('phone', $request->phone);
        $request->session()->put('email', $request->email);

        return "Done";

    }

    // depositSticpay
    public function depositSticpay($locale, Request $request){
        
        $request->validate([
            'account_number' => ['required', 'string', 'max:255',],
            'name' => ['required', 'string', 'max:255',],
            'email' => ['required', 'email', 'max:255',],
            'phone' => ['required', 'max:255',],
            'amount' => ['required','min:1','max:50000','numeric'],
        ]);

        

        
        $request->session()->put('account_number', $request->account_number);
        $request->session()->put('name', $request->name);
        $request->session()->put('email', $request->email);
        $request->session()->put('phone', $request->phone);
        $request->session()->put('amount', $request->amount);
        
        // API endpoint URL
$apiUrl = "https://api.sticpay.com/rest_pay/pay";

$dateTime = date('Y-m-d H:i:s');
$email = "ansari@highnessltd.com";
$order_no = "abc1234"; // example "12345"
$order_time = "$dateTime";
$order_amount = "".$request->amount.""; // example "50"
$order_currency = "USD"; // example "USD"
$passphrase = "969a8561d43da3bc51d7c39ebeb7fa6deaa58794c09f931b5c561b2184088410";

$to_hash = "merchant_email=" . $email
    . "&order_no=" . $order_no
    . "&order_time=" . $order_time
    . "&order_amount=" . $order_amount
    . "&order_currency=" . $order_currency
    . "&key=" . $passphrase;


$signature = md5($to_hash);

// Data to send (in JSON format)
$data = array(
    "order_no"=> $order_no,
    "merchant_email"=> $email,
    "order_time"=> $dateTime,
    "order_amount"=> $order_amount,
    "order_currency"=> $order_currency,
    "sign"=> $signature,
    "sign_type"=> "md5",
    "interface_version"=>"live"
);

// Convert data to JSON format
$jsonData = json_encode($data);

// cURL initialization
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// Execute cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Process the response
if ($response) {
	$response = json_decode($response, true);
    if($response['success']){
        return response()->json(['url'=>$response['link']], 200);
    }
    return response()->json(['message' => __('Please upload at least one file to verify your account')], 401);
} 


return response()->json(['message'=> __('Error response')], 400);

    }

    public function bankDeposit($locale, Request $request){
        
        $request->validate([
            'name' => ['required', 'string', 'max:255',],
            'email' => ['required', 'email', 'max:255',],
            'account_number' => ['required'],
        ]);


        $email = $request->email;
        $to_name = 'TradeLive AI ';
        $data = array('name' => $request->name, 'account_number' => $request->account_number);
    
        Mail::send('emails.bank', $data, function ($message) use ($to_name, $email) {
            $message->to($email, $to_name)
                ->subject('TradeLive AI  Deposit');
            $message->from('support@tradelive.ai', 'TradeLive AI  Deposit');
        });

        $data = array('name' => $request->name, 'email' => $request->email, 'account_number' => $request->account_number);
        
        $email= 'support@tradelive.ai';

        Mail::send('emails.bank_sales', $data, function ($message) use ($to_name, $email) {
            $message->to($email, $to_name)
                ->subject('TradeLive AI  Deposit');
            $message->from('support@tradelive.ai', 'TradeLive AI  Deposit');
        });

        $request->session()->put('email', $request->email);

        return "Done";

    }
}
