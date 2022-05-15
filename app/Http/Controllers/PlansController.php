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

            return view('back_end.plans.create');
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

    public function edit($id)
    {
        if (Auth::user()->role = 'administrator') {

            $plan = Plan::find($id);
            $data['data'] = $plan;
            return  view('back_end.plans.edit',$data);
        }
    }
    public function update($id)
    {
        $plan = Plan::find($id);

        $plan->name = request('plan_name');
        $plan->days = request('days');
        $plan->min = request('min_amount');
        $plan->max = request('max_amount');
        $plan->feature = request('feature');
        $plan->profit_percentage = request('profit_percent');


        $plan->save();

        return redirect()->route('manageplans');
    }
    public function delete($id){

        $plan = Plan::find($id);
        $plan->delete();

        return redirect()->back();

    }
}
