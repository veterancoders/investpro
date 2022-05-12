<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlansController extends Controller
{
    public function index()
    {

        if (Auth::user()->role = 'administrator') {

            return view('back_end.plans.create-edit');
        }
    }

    public function create()
    {
        $plan = new Plan;

        $plan->name = request('plan_name');
        $plan->days = request('days');
        $plan->min = request('min_amount');
        $plan->max = request('max_amount');
        $plan->feature = request('feature');
        $plan->profit_percentage = request('profit_percent');


        $plan->save();

        return redirect()->route('manageplans');
    }

}
