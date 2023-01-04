<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use Auth;
use App\Models\Withdrawals;
use Illuminate\Http\Request;

class WithdrawalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function approve(Request $request)
    {

        $id_to_approve = $request->id;

        //check if the status is zero

        $check = Withdrawals::where('id', $id_to_approve)->first();

        if ($check->status == 0) {

            //approve the withdrawal

            $approve = $check->update(['status' => 1]);

            if ($approve) {

                notify()->success('Approved');

                return redirect()->back();
            } else {

                notify()->error('Not approved');

                return redirect()->back();
            }
        } else {
            //request was already approved

            notify()->error('The request was already approved');

            return redirect()->back();
        }
    }

    public function reject(Request $request)
    {

        $id_to_reject = $request->id;

        //check if the status is zero

        $check = Withdrawals::where('id', $id_to_reject)->first();

        if ($check->status == 0) {

            //approve the withdrawal

            $approve = $check->update(['status' => 2]);

            if ($approve) {

                notify()->success('Rejected');

                return redirect()->back();
            } else {

                notify()->error('Not rejected');

                return redirect()->back();
            }
        } else {
            //request was already approved

            notify()->error('The request was already approved');

            return redirect()->back();
        }
    }


    public function confirm()
    {


        $withdrawals = Withdrawals::where('status', '>=', 0)->orderBy('id', 'DESC')->get();

        return view('allwithdrawals')->with(compact('withdrawals'));
    }

    public function index()
    {
        //

        return view('withdraw');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate the store request
        $validated = $request->validate([
            'wallet' => 'required',
            'amount' => 'required'
        ]);

        //check if this authenticated user has enough balance in his/her wallet

        $user = Auth::user();

        $user_balance = Auth::user()->wallet;

        if ($request->amount > $user_balance) {

            //user has a less balance
            notify()->error('You have insufficient balance! Kindly top up');

            return redirect()->back();
        } else {

            //user has enough balance to withdraw hence process the withdrawal
            $new_balance = $user_balance - $request->amount;
            //check the last deposit by this user

            $deposits_checker = Deposits::where('user_id', Auth::user()->id)
                ->OrderBy('created_at', 'desc')
                ->first();



            if ($deposits_checker) {

                $diff = now()->diffInDays($deposits_checker->created_at);

                if ($diff >= 10) {

                    $withdrawals = new Withdrawals();

                    $withdrawals->user_id = $user->id;
                    $withdrawals->wallet_address = $request->wallet;
                    $withdrawals->amount = $request->amount;
                    $withdrawals->status = 0;

                    $update = Auth::user()->update(['wallet' => $new_balance]);

                    if ($withdrawals->save() && $update) {

                        notify()->success('Withdrawal was successful ! Await confirmation');

                        return redirect('user/withdrawals');
                    } else {

                        notify()->error('An error has occured');

                        return redirect()->back();
                    }
                } else {

                    $actual_difference=10-$diff;
                    $message="Hello there, Kindly wait for $actual_difference days before trying a withdrawal";
                    notify()->error($message);

                    return redirect()->back();
                }
            } else {
                notify()->error('You need to make atleast one deposit!');

                return redirect('user/withdrawals');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    public function show(Withdrawals $withdrawals)
    {
        //
        $user = Auth::user();


        $withdrawals = Withdrawals::where('user_id', $user->id)->get();


        return view('userwithdrawals')->with(compact('withdrawals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    public function edit(Withdrawals $withdrawals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdrawals $withdrawals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withdrawals $withdrawals)
    {
        //
    }
}
