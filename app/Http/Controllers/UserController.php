<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {

        if (auth()->user()->role == 'administrator') {
            $user = User::where('role', 'user')->get();

            $users['users'] = $user;
            return view('back_end.users.index', $users);
        }
    }

    public function create(Request $request)
    {
        $user = new User;

        if ($request->hasFile('avatar')) {
            $file  = $request->file('avatar');
            $avatar = $file->getClientOriginalName();
            $file->move('images', $avatar);

            $user->avatar =  $avatar;
        }

        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->role =  request('role');

        $user->save();

        return redirect()->back();
    }

    public function view($id)
    {

        $user = User::find($id);
        $users['users'] = $user;
        return view('back_end.users.show', $users);
    }
    public function edit($id)
    {

        $user = User::find($id);
        $users['users'] = $user;
        return view('back_end.users.edit', $users);
    }



    public function delete($id)
    {

        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        $user =  User::find($id);
        if ($request->hasFile('avatar')) {
            $file  = $request->file('avatar');
            $avatar = $file->getClientOriginalName();
            $file->move('images', $avatar);

            $user->avatar =  $avatar;
        }

        $user->name = request('name');

        $user->gender = request('gender');
        $user->country = request('country');
        $user->address = request('address');
        $user->phone = request('phone');
        $user->bio = request('bio');
        $user->date_of_birth = request('date_of_birth');
        $user->save();

        return redirect()->route('customers');
    }
    public function emailupdate(Request $request)
    {


        $user = Auth::user();

        $rules = [
            'emailaddress' => 'required',
            'confirmemailpassword' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        $validator->after(function ($validator) {

            if (!Hash::check(request('confirmemailpassword'), auth()->user()->password)) {

                $validator->errors()->add('confirmemailpassword', 'The password is incorrect. Email not changed');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user->email = request('emailaddress');
        $user->save();
        return redirect()->back()->with('emailsuccess', 'Your Email has been changed successfully');
    }

    public function password_update(Request $request)
    {

        $user = Auth::user();

        $rules = [
            'currentpassword' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        $validator->after(function ($validator) {

            if (!Hash::check(request('currentpassword'), auth()->user()->password)) {

                $validator->errors()->add('currentpassword', 'The password is incorrect');
            }
        });


        $validator->after(function ($validator) {

            $password = request('password');
           
            $password_confirmation = request('password_confirmation');

            if ($password_confirmation != $password) {

                $validator->errors()->add('password_confirmation', 'The password Confirmation does not match');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user->password = Hash::make(request('password'));
        $user->save();

        return redirect()->back()->with('success', 'Your password has been changed successfully');
    }
}
