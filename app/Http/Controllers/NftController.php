<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class NftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getreferals($refcode){

        //get the number of referals brought by this user

        $user=User::where('ref',$refcode)
        ->where('status',1)
        ->count();
        return $user;
    }

    public function addpricevalue(){
        //get all nfts with price between 0-50usd

        $tier1nfts=Nft::where('price','<=',env('Tier1'))->where('price','>=','0')->get();


        $owners=[];
        $nftref=[];
        $refcodes=[];
        $refcount=[];
        $nftprices=[];

        $finalprice=[];

        foreach($tier1nfts as $tier1nft){
            
            //get the owners of this nft

            $owners[]=$tier1nft->owner;

            $nftref[]=$tier1nft->ref;

            //check the number of referals by ech of the users above
            
        }

        foreach($owners as $owner){
            
            //get the number of referals by each user in the array

            $refs=User::where('id',$owner)->get();

            foreach($refs as $ref){
                $refcodes[]=$ref->referal_code;
            }

           

        }

        foreach($refcodes as $refcode){

            $count=User::where('ref',$refcode)
            ->where('status',1)
            ->count();

            //since tuko tier 1 we need to add to add 1.0
            
            $refcount[]=('1'.'.'.$count);

            // $refcount[]=$count;
        }


        foreach($nftref as $nftr){

            $prices=Nft::where('ref',$nftr)->get();

            foreach($prices as $price){



                $nftprices[]=$price->price;


            }


        }

        function multiply($a, $b){
            return $a * $b;
        }

        function stuff($arrayOne, $arrayTwo){
            $computed = array();
            for($index = 0; $index < count($arrayOne); $index++){
              array_push($computed, multiply($arrayOne[$index], $arrayTwo[$index]));
            }
            return $computed;
        }





        $finalprice=stuff($nftprices,$refcount);

        for($i=0;$i<sizeof($nftref);$i++){

          

            for($j=0;$j<sizeof($finalprice);$j++){
                

                $update=Nft::where('ref',$nftref[$i])->update(['price'=> $finalprice[$j]]);

                if($update){
                    echo "updated";
                }else{
                    echo "Not updated";
                }

                

            }

        }
        
    } 

    public function caller(){

        return $this->getreferals("uirs1234");

    }
    public function createnft(){

        return view('create');

    }
    function generateRandomString(int $n=0)
    {
      $al = ['a','b','c','d','e','f','g','h','i','j','k'
      , 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u',
      'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E',
      'F','G','H','I','J','K', 'L', 'M', 'N', 'O', 'P',
      'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
      '0', '2', '3', '4', '5', '6', '7', '8', '9'];
    
      $len = !$n ? random_int(7, 12) : $n; // Chose length randomly in 7 to 12
    
      $ddd = array_map(function($a) use ($al){
        $key = random_int(0, 60);
        return $al[$key];
      }, array_fill(0,$len,0));
      return implode('', $ddd);
    }
    public function postnft(Request $request){

        //store the nft in the database
        

        if(($request->hasFile('image'))){


            $file = $request->file('image');

            $destinationPath = 'nfts';
            $file->move($destinationPath,$file->getClientOriginalName());
            

            $nft=new Nft();

            $nft->name=$request->name;

            $nft->price=$request->price;

            $nft->owner=Auth::user()->id;

            $nft->img=$file->getClientOriginalName();

            $nft->ref=$this->generateRandomString(6);

            if($nft->save()){

                return redirect('/home');
                
            }else{
                return "exception happened";
            }




        }

        return view('create');

    }

   

    public function addnft()
    {


        return view('mycollection')->with(compact('mycollections'));
        //
    }
    public function index()
    {

        //get current auth user collections

        $mycollections=Nft::where('owner',Auth::user()->id)
        ->where('status',0)
        ->get();

        return view('mycollection')->with(compact('mycollections'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $code=$request->code;

        return view('nftview');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function show(Nft $nft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function edit(Nft $nft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nft $nft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nft $nft)
    {
        //
    }
}
