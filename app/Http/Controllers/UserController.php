<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        if (auth()->user()->role == 'administrator') {
            $user = User::where('role', 'user')->get();

            $users['users'] = $user;
            return view('back_end.users.index',$users);
        }
    }

    public function view($id){

        $user = User::find($id);
        $users['users'] = $user;
        return view('back_end.users.show',$users);
    }
}
