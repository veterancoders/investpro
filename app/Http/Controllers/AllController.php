<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllController extends Controller
{
    //Band_end{Admin section}
    //Plans
    public function addplans()
    {

        if (Auth::user()->role = 'administrator') {

            return view('back_end.plans.create-edit');
        }
    }
    public function manageplans()
    {

        if (Auth::user()->role = 'administrator') {


            $data = Plan::all();


            $view['data'] = $data;

            return view('back_end.plans.index', $view);
        }
    }
    public function plansadd()
    {
        $plan = new Plan;

        $plan->name = request('plan_name');
        $plan->due_date = request('due_date');
        $plan->min = request('min_amount');
        $plan->max = request('max_amount');
        $plan->feature = request('feature');
        $plan->profit_percentage = request('profit_percent');


        $plan->save();

        return redirect()->route('manageplans');
    }

    //Deposits

    //...add deposits
    public function viewadddeposits()
    {

        $user = User::all()->where('role', 'user');
        $users['users'] = $user;

        $plan = Plan::all();
        $plans['plans'] = $plan;

        return view('back_end.deposits.add', $users, $plans);
    }
    public function add_deposit(Request $request)
    {

        if ($request->hasFile('payment_prove')) {
            $file  = $request->file('payment_prove');
            $payment_prove = $file->getClientOriginalName();
            $file->move('images', $payment_prove);
        }



        $deposit = new Investment();

        $deposit->user_id = request('user_id');

        $deposit->amount = request('amount');
        $deposit->plan_id = request('plan_id');
        $deposit->status = 'awaiting';
        $deposit->payment_prove = $payment_prove;
        $deposit->start_date = request('start_date');
        $deposit->payout_date = request('payout_date');
        $deposit->currency = request('currency');
        $deposit->save();

        return redirect()->route('depositlists');
    }
    // Depost Status

    public function approve_deposit($id)
    {

        $status = Investment::find($id);

        $status->status = 'approved';
        $status->save();

        return redirect()->back();

    }
    public function unapprove_deposit($id)
    {

        $status = Investment::find($id);

        $status->status = 'unapproved';
        $status->save();

        return redirect()->back();
        
    }

   public function awaiting_deposit_approval($id)
    {

        $status = Investment::find($id);

        $status->status = 'awaiting';
        $status->save();

        return redirect()->back();
        
    }





    //...deposits list
    public function depositlists()
    {
        $deposit = Investment::all();

        $deposits['deposits'] = $deposit;

        return view('back_end.deposits.lists', $deposits);
    }
}
