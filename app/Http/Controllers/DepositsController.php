<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use App\Models\User;
use App\Mail\AdminDepositrequest;
use App\Mail\Depositrequest;
use App\Models\Deposits;
use Illuminate\Http\Request;

class DepositsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('deposits');
    }

    public function approve(Request $request)
    {
        //get the deposit id

        $deposit = Deposits::where('id', $request->id)->first();

        $user_id = $deposit->user_id;

        $user = User::where('id', $user_id)->first();



        $user_balance = $user->wallet;



        $new_user_balance = $user_balance + $deposit->amount;



        //update the user

        $wallet_update = User::where('id', $user_id)->update(['wallet' => $new_user_balance]);

        //update the deposit to status 1

        $deposit_update = Deposits::where('id', $request->id)->update(['status' => 1]);

        if ($wallet_update && $deposit_update) {

            notify()->success('Deposit updated !');


            return redirect()->back();
        } else {

            notify()->error('Deposit error');


            return redirect()->back();
        }
    }

    public function reject(Request $request)
    {

        $deposit = Deposits::where('id', $request->id)->first();

        $user_id = $deposit->user_id;

        $user = User::where('id', $user_id)->first();



        $user_balance = $user->wallet;



        $new_user_balance = $user_balance + $deposit->amount;



        //update the user

        // $wallet_update=User::where('id',$user_id)->update(['wallet'=>$new_user_balance]);

        //update the deposit to status 1

        $deposit_update = Deposits::where('id', $request->id)->update(['status' => 2]);

        if ($deposit_update) {

            notify()->success('Deposit rejected !');


            return redirect()->back();
        } else {

            notify()->error('Deposit error');


            return redirect()->back();
        }
    }

    public function confirm()
    {
        $deposits = Deposits::where('status', '>=', 0)
            ->orderBy('id', 'DESC')
            ->get();

        return view('userdeposits')->with(compact('deposits'));
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
        //



        $fields = $request->validate([
            'amount' => 'required',
            'hash' => 'required',

        ]);


        $user = Auth::user()->id;

        $amount = $request->amount;

        $hash = $request->hash;

        //check if hash has already been used before

        $check_if_hash_exists = Deposits::where('hash', $hash)->count();

        if (($check_if_hash_exists) <= 0) {
            $create = Deposits::create(
                [
                    'user_id' => $user,
                    'amount' => $amount,
                    'hash' => $hash,
                    'status' => 0

                ]
            );

            if ($create) {
                //mailing to the user about the deposit
                Mail::to(Auth::user()->email)->send(new Depositrequest($amount,$hash,Auth::user()->name));


                Mail::to("lincolnmunene37@gmail.com")->send(new AdminDepositrequest($amount,$hash,Auth::user()->name));

                // Mail::to(Auth::user()->email)->send(new Depositrequest($amount,$hash,Auth::user()->name));

                notify()->success('Deposit request created !');


                return redirect('user/deposits');
            } else {

                notify()->success('An error occured!');


                return redirect()->back();
            }
        } else {
            notify()->error('The hash already exists in our records!');


            return redirect('user/deposits');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deposits  $deposits
     * @return \Illuminate\Http\Response
     */
    public function show(Deposits $deposits)
    {
        //

        $deposits = Deposits::where('user_id', Auth::user()->id)
            ->orderBy('id', 'DESC')
            ->get();

        return view('mydeposits')->with(compact('deposits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deposits  $deposits
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposits $deposits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deposits  $deposits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposits $deposits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deposits  $deposits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposits $deposits)
    {
        //
    }
}
