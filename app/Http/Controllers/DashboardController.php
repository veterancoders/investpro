<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\User;
use App\Models\Withdrawal;

class DashboardController extends Controller
{
    public function index()
    {

        $page = [
            'pageTitle' => 'Dashboard',
            'pageDesc' => 'Dashboard',
        ];

        $customers = User::take(5)->get();

        $deposits = Investment::query()->when(isCUstomer(), function($query){
                $query->where('user_id', auth()->user()->id);
        })->latest('created_at')->take(5)->get();

        $withdrawals = Withdrawal::latest('created_at')->take(5)->get();

        return view('back_end.dashboard', compact('customers', 'page', 'deposits', 'withdrawals'));
       
    }

   
}
