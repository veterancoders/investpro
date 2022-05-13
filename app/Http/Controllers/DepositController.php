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


        $plan = Plan::find(request('plan_id'));


        $amount = $request->amount;

        $rules = [];

        if (auth()->user()->role == 'administrator') {
            $rules['user_id'] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);

        $validator->after(function ($validator) use ($amount, $plan) {
            if (($amount < $plan->min) || ($amount > $plan->max)) {
                $validator->errors()->add('amount', 'The amount must be between ' . $plan->min . ' and ' . $plan->max);
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


        $deposit = new Investment();

        if (isAdmin()) {
            $deposit->user_id = request('user_id');
        } else {
            $deposit->user_id = auth()->id();
        }

        $deposit->amount = request('amount');
        $deposit->payment_prove = request('payment_prove');
        $deposit->plan_id = request('plan_id');
        $deposit->status = 'awaiting';

        $deposit->save();

        if (isCUstomer()) {
            return redirect()->route('paymentDetails', $deposit->id);
        }

        return redirect()->route('depositlists');
    }

    public function paymentDetails($id)
    {

        $investment = Investment::find($id);

        return view('back_end.deposits.payment-details', compact('investment'));
    }
    public function payment_prove(Request $request, $id)
    {

        $investment = Investment::find($id);

        $payment = '';

        if ($request->hasFile('pay_prove')) {
            $file  = $request->file('pay_prove');
            $payment = $file->getClientOriginalName();
            $file->move('images/payment_prove', $payment);
        }

        //d($payment);


        $investment->payment_prove = $payment;
        $investment->save();

        return redirect()->route('depositlists');
    }



    public function changeStatus($id)
    {

        $deposit = Investment::find($id);

        if (!is_null(request('status'))) {

            if (request('status') == 'approved') {

                $profit_percentage = $deposit->plan->profit_percentage;
                $invested_amount = $deposit->amount;

                $profit = $invested_amount * $profit_percentage / 100;


                $deposit->payout_amount = $profit + $deposit->amount;
                $deposit->start_date = Carbon::now();
                $deposit->payout_date = Carbon::now()->addDays($deposit->plan->days);
            }

            if (request('status') == 'payedout') {

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

    public function veiwdeposit($id)
    {

        $investments = Investment::find($id);

        $investment['investment'] = $investments;

        $date = Carbon::parse($investments->payout_date);

        $investment['countdown'] = $date->month . '/' . $date->day . '/' . $date->year . ' ' . $date->hour . ':' .  $date->minute . ':' . $date->second;

//dd($investment);


        return view('back_end.deposits.view', $investment);
    }
}
