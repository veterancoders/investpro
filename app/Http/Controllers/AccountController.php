<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function update_account(Request $request)
    {
        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $file  = $request->file('avatar');
            $avatar = $file->getClientOriginalName();
            $file->move('images', $avatar);

            $user->avatar =  $avatar;
        }

        $user->name = request('name');
        $user->phone = request('phone');
        $user->country = request('country');
        $user->address = request('address');
        $user->bio = request('bio');

        //$user->date_of_birth = request('date_of_birth');
        $user->gender = request('gender');
        $user->save();

        return redirect()->back();
    }


    public function update_email(Request $request){

        $password = Auth::user()->password;

        $confirmpassword = $request->confirmemailpassword;
      dd($confirmpassword);

        $newconfirm = $confirmpassword;

        
        dd($newconfirm);
  

    }
}
