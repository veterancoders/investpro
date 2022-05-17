<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
}
