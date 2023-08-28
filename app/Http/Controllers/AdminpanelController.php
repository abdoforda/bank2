<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminpanelController extends Controller
{
    public function index(){
        return view('adminpanel.index');
    }
    public function verificationUser(){
        $users = User::where('doc_profile',1)->get();
        return view('adminpanel.verificationUser', compact('users'));
    }
    public function showProfile($locale, User $user){
        return view('adminpanel.user.profile', compact('user'));
    }
    // cancelProfile
    public function cancelProfile($locale, User $user, $message){
        if($message == ''){
            return response()->json(['message' => 'Message is empty', 'error'=> 'asdasd'], 404);
        }
        $user->doc_profile = 0;
        $user->message = $message;
        $user->save();
        return response()->json(['message' => 'Profile is canceled'], 200);
    }
    // confirmProfile
    public function confirmProfile($locale, User $user){
        $user->doc_profile = 2;
        $user->save();
        return response()->json(['message' => 'Profile is confirmed'], 200);
    }
    public function getDataNumbers(){
        $users = User::where('doc_profile',1)->count();
        return [
            'num_users_ver' => $users,
        ];
    }
}
