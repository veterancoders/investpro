<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function changeStatus($id)
    {

        if(!is_null(request('status'))) {
            $status = Investment::find($id);
            $status->status = request('status');
            $status->save();
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
