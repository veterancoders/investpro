<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function update_account()
    {

        $user = Auth::user();

        $user->name = request('name');
        $user->phone = request('phone');
        $user->country = request('country');
        $user->address = request('address');
        $user->bio = request('bio');
        $user->date_of_birth = request('date_of_birth');
        $user->gender = request('gender');
        $user->save();
        
        return redirect()->back();
    }
}
