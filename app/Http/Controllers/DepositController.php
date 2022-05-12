<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepositController extends Controller
{
    public function index()
    {

        $user = User::all()->where('role', 'user');
        $users['users'] = $user;

        $plan = Plan::all();
        $plans['plans'] = $plan;

        return view('back_end.deposits.add', $users, $plans);
    }


    public function create(Request $request)
    {

        //dd($request->all());

        if ($request->hasFile('payment_prove')) {
            $file  = $request->file('payment_prove');
            $payment_prove = $file->getClientOriginalName();
            $file->move('images', $payment_prove);
        }

        $plan = Plan::find(request('plan_id'));


        $amount = $request->amount;

        $rules = [];

        if (auth()->user()->role == 'administrator') {
            $rules['user_id'] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);

        $validator->after(function ($validator) use ($amount, $plan) {
            if (($amount < $plan->min) || ($amount > $plan->max)) {
                $validator->errors()->add('amount', 'The amount must be between ' . $plan->min . ' and ' . $plan->max . ' characters');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


        $deposit = new Investment();

        if (auth()->user()->role == 'administrator') {
            $deposit->user_id = request('user_id');
        } else {
            $deposit->user_id = auth()->id();
        }

        $deposit->amount = request('amount');
        $deposit->plan_id = request('plan_id');
        $deposit->status = 'awaiting';
        $deposit->payment_prove = md5($payment_prove);
       
        $deposit->currency = request('currency');
        $deposit->save();

            /* if()
        $wallet = new Wallet;

        $wallet->user_id =  request('user_id');
        $wallet->amount = request('amount');

        $wallet->save() */;

        return redirect()->route('depositlists');
    }

    public function changeStatus($id)
    {

        $deposit = Investment::find($id);

        if (!is_null(request('status'))) {

            if(request('status') == 'approved'){

                $profit_percentage = $deposit->plan->profit_percentage;
                $invested_amount = $deposit->amount;

                $profit = $invested_amount * $profit_percentage / 100;


                $deposit->payout_amount = $profit + $deposit->amount;
                $deposit->start_date = Carbon::now();
                $deposit->payout_date = Carbon::now()->addDays($deposit->plan->days);
            }

            if(request('status') == 'payedout'){

                $user = $deposit->user;

                $balance = $user->balance;

                $user->balance = $balance + $deposit->payout_amount;

                $user->save();

                $wallet = new Wallet;
                $wallet->user_id = $deposit->user_id;
                $wallet->amount = $deposit->payout_amount;
                $wallet->transaction_type = 'credit';
                $wallet->save();
            }


            $deposit->status = request('status');
            $deposit->save();
        }

        return redirect()->back();
    }

    /* public function unapprove_deposit($id)
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
    } */
}
