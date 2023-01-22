<?php

namespace App\Http\Controllers;

use App\Models\Marketplace;
use Illuminate\Http\Request;
use Auth;
use App\Models\Nft;
use App\Models\User;
class MarketplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buynft()
    {
        //
        return view('buynft');

    }

    public function purchase(Request $request)
    {

     
        //check if the buyer is equal to the seller and deny if true
        $code=$request->ref;

        $owner=Nft::where('ref',$code)->first();

        $owner=$owner->owner;

        $buyer=Auth::user()->id;
        // notify()->error('You cannot buy from yourself!');

        if($buyer==$owner){

            //refuse the purchase 
            notify()->error('You cannot buy from yourself!');

            return redirect()->back();

        }else{
            //accept the purchase

            //check if the buyer has enough balance

            $buyer_balance=User::where('id',$buyer)->first();

            

            $buyer_balance=$buyer_balance->wallet;

            //check the nfts price in marketplace

            $nftid=Nft::where('ref',$code)->first();

            $nftid=$nftid->id;

            $marketplaceprice=Marketplace::where('nftref',$nftid)->first();

            $marketplaceprice=$marketplaceprice->price;

            if($buyer_balance>=$marketplaceprice){

                //then the buyer has enough balance to buy this nft


                //deduct the price from buyers wallet

                $buyer_balance=User::where('id',$buyer)->first();

                $buyer_balance=$buyer_balance->wallet;

                $buyer_balance=$buyer_balance-$marketplaceprice;

                $buyer_balance=User::where('id',$buyer)->update(['wallet'=>$buyer_balance]);

                if($buyer_balance){

                    //remove the nft from market place
                    // $nftdeletefrommp=Marketplace::where('nftref',$nftid)->delete();

                    if($buyer_balance){

                         //add the balance to sellers wallet

                         $nftowner=Marketplace::where('nftref',$nftid)->first();

                         $nftowner=$nftowner->user_id;

                         $ownerbal=User::where('id',$nftowner)->first();

                         $ownerbal=$ownerbal->wallet;

                         $newownerbalance=$ownerbal+$marketplaceprice;

                         $update=User::where('id',$nftowner)->update(['wallet'=>$newownerbalance]);

                         if($update){

                            //update the new owner of the nft

                            $delete=Marketplace::where('nftref',$nftid)->delete();

                            $update=Nft::where('ref',$code)->update(['owner'=>$buyer,'status'=>0]);

                            //send email notifications to update of the new nft

                            notify()->success('Congratulations the nft is yours!');

                            return redirect('/home');

                         }

                         
                        

                    }else{
                        notify()->error('An error occured!');

                    return redirect()->back();
                    }

                }else{
                    notify()->error('An error occured!');

                    return redirect()->back();
                }




                

               

            }else{

                //tell the buyer he/she has no balance in wallet
                notify()->error('You have insufficient balance! Kindly top up');

                 return redirect('deposit');


            }
            





        }


        //if all checks are true then buyer successfully buys


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
        //store the marketplace item in the dashboard
        $id=Auth::user()->id;

        $nftcode=$request->nftid;
        $price=$request->price;
        $nftid=$request->nftid;
        $duration=$request->duratio;

        //get the nft image src

        $nftimage=Nft::where('id',$nftcode)->first();

        $nftimage=$nftimage->img;

        $Marketplace=new Marketplace();

        $Marketplace->user_id=Auth::user()->id;
        $Marketplace->price=$request->price;
        $Marketplace->nftref=$nftid;
        $Marketplace->duration=$request->duration;
        $Marketplace->image=$nftimage;


        

        //update the status of nft to one/1

        $update=Nft::where('id',$nftid)->update(['status'=>1]);

        if($Marketplace->save() && $update){
            return redirect('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return \Illuminate\Http\Response
     */
    public function show(Marketplace $marketplace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return \Illuminate\Http\Response
     */
    public function edit(Marketplace $marketplace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marketplace  $marketplace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marketplace $marketplace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marketplace $marketplace)
    {
        //
    }
}
