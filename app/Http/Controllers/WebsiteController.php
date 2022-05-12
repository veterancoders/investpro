<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Plan;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{

    //Plans

    public function plans()
    {

        if (Auth::user()->role = 'administrator') {


            $data = Plan::all();


            $view['data'] = $data;

            return view('back_end.plans.index', $view);
        }
    }

    // deposits
    public function deposits()
    {


        if (Auth::user()->role == 'administrator') {

            $deposit = Investment::all();

            $deposits['deposits'] = $deposit;

            return view('back_end.deposits.lists', $deposits);
        }

        if (Auth::user()->role == 'user') {

            $deposit = Investment::where('user_id', auth()->id())->get();

            $deposits['deposits'] = $deposit;

            return view('back_end.deposits.lists', $deposits);
        }
    }


    //Withdrawal

    public function withdrawals()
    {

        if (Auth::user()->role == 'administrator') {
           
            $withdrawal = Withdrawal::all();
            $withdrawals['withdrawal'] = $withdrawal;
            return view('back_end.withdrawal.list', $withdrawals); 
        } else {

            $withdrawal = Withdrawal::where('user_id', auth()->id())->get();
            $withdrawals['withdrawal'] = $withdrawal;
            return view('back_end.withdrawal.list', $withdrawals);
        }
    }

    //settings
    public function settings(){

        return view('back_end.settings');
    }
    //account_settings

    public function account_settings(){

        return view('back_end.account_settings');
    }
}
