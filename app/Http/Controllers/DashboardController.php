<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {

        $page = [
            'pageTitle' => 'Dashboard',
            'pageDesc' => 'Dashboard',
        ];

        $customers = User::take(5)->get();

        return view('back_end.dashboard', compact('customers', 'page'));
       
    }

   
}
