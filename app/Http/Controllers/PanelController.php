<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PanelController extends Controller
{

    // pabel
    public function panel()
    {
        return view('panel.dashboard');
    }
    public function panel_dashboard()
    {
        return view('panel.dashboard');
    }

    public function uploadDocuments()
    {
        return view('panel.uploadDocuments');
    }
    public function uploadDocumentsPost(Request $request)
    {
        
        $array = ['passport','emirates_id','driving_license','bank_statement','utility_bill','other_documents'];
        
        foreach($array as $item){
            if($request->has($item)){

                $request->validate([
                    $item => 'required|mimes:jpg,jpeg,png|max:5120',
                ]);
                
                $path = public_path('documents/');
                !is_dir($path) &&
                    mkdir($path, 0777, true);

                $imageName = time() . '.' . $request->$item->extension();
                $request->$item->move($path, $imageName);
    
                    auth()->user()->$item = $imageName;
                    auth()->user()->save();
                    $extension = pathinfo(auth()->user()->$item, PATHINFO_EXTENSION);
                    return auth()->user()->updated_at->format('d M Y h:i:s A').'.'.$extension.'^'.asset(auth()->user()->$item);

                
            }
        }

        return 'error';

    }
    public function updateDocProfile(Request $request){
        $user = auth()->user();
        $files = ['passport','emirates_id','driving_license','bank_statement','utility_bill','other_documents'];
        $check = false;
        foreach($files as $file){
            if($user->$file != null){
                $check = true;
            }
        }
        if($check){
            $user->doc_profile = 1;
            $user->save();
            return response()->json(['message' => __('Your data has been sent and the documents will be verified within 24 hours'),'redirect'=>route('panel_dashboard', app()->getLocale()),'confirmText'=>__('OK')], 200);
        }else{
            return response()->json(['message' => __('Please upload at least one file to verify your account')], 401);
        }
        
    }
    public function account(){
        return view('panel.account');
    }
    public function bank_card(){
        return view('panel.bank-card');
    }
    public function wallet(){
        return view('panel.wallet');
    }
    public function banking(){
        return view('panel.banking');
    }
    public function verification(){
        return view('panel.verification');
    }

}
