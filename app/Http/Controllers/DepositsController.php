<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
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

    public function approve(Request $request){
            //get the deposit id

            $deposit=Deposits::where('id',$request->id)->first();

            $user_id=$deposit->user_id;

            $user=User::where('id',$user_id)->first();



            $user_balance=$user->wallet;

            

            $new_user_balance=$user_balance+$deposit->amount;

           

            //update the user

            $wallet_update=User::where('id',$user_id)->update(['wallet'=>$new_user_balance]);

            //update the deposit to status 1

            $deposit_update=Deposits::where('id',$request->id)->update(['status'=>1]);
            
            if($wallet_update && $deposit_update){

                notify()->success('Deposit updated !');


                return redirect()->back();

            }else{

                notify()->error('Deposit error');


                return redirect()->back();

            }


    }

    public function reject(Request $request){

            $deposit=Deposits::where('id',$request->id)->first();

            $user_id=$deposit->user_id;

            $user=User::where('id',$user_id)->first();



            $user_balance=$user->wallet;

            

            $new_user_balance=$user_balance+$deposit->amount;

           

            //update the user

            // $wallet_update=User::where('id',$user_id)->update(['wallet'=>$new_user_balance]);

            //update the deposit to status 1

            $deposit_update=Deposits::where('id',$request->id)->update(['status'=>2]);
            
            if($deposit_update){

                notify()->success('Deposit rejected !');


                return redirect()->back();

            }else{

                notify()->error('Deposit error');


                return redirect()->back();

            }
        
    }

    public function confirm(){
        $deposits=Deposits::where('status','>=',0)
        ->orderBy('id','DESC')
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

        ]);

       
        $user = Auth::user()->id;

        $amount = $request->amount;

        $create = Deposits::create(
            [
                'user_id' => $user,
                'amount' => $amount,
                'status' => 0

            ]
        );

        if ($create) {

            notify()->success('Deposit request created !');


            return redirect('user/deposits');

        } else {

            notify()->success('An error occured!');


            return redirect()->back();
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

        $deposits=Deposits::where('user_id',Auth::user()->id)
        ->orderBy('id','DESC')
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
