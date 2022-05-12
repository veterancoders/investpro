<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WithdrawalController extends Controller
{
    public function index()
    {

        return view('back_end.withdrawal.add');
    }

    public function create(Request $request)
    {

        $balance = Auth::user()->balance;


        $amount = $request->withdrawal_amount;


        $rules = [];

        $validator = Validator::make($request->all(), $rules);

        $validator->after(function ($validator) use ($amount, $balance) {
            if (($amount > $balance)) {
                $validator->errors()->add('amount', 'Please select a valid amount within your balance');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $withdrawal = new Withdrawal;

        if (auth()->user()->role == 'administrator') {
            $withdrawal->user_id = request('user_id');
        } else {
            $withdrawal->user_id = auth()->id();
        }

        $withdrawal->status = 'awaiting';

        $withdrawal->amount = $request->withdrawal_amount;
        $withdrawal->eth_address = $request->etherum_address;

        $withdrawal->save();


        return redirect()->route('withdrawals');
    }

    public function changeStatus($id)
    {

        $withdrawal = Withdrawal::find($id);

        if (!is_null(request('status'))) {

            if (request('status') == 'approved') {

                $user = $withdrawal->user;
                $user->balance = $user->balance - $withdrawal->amount;
                //$user->eth_address =  $withdrawal->eth_address;
                $user->save();
            }

            $withdrawal->status = request('status');
            $withdrawal->save();
        }

        return redirect()->back();
        
    }
}
