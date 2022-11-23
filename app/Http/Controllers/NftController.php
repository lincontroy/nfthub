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

    public function getreferals($refcode)
    {

        //get the number of referals brought by this user

        $user = User::where('ref', $refcode)
            ->where('status', 1)
            ->count();
        return $user;
    }

    public function addpricevaluetier1()
    {
        //get all nfts with price between 0-50usd

        $max = env('Tier1', 50);

        $min = env('MinTier1', 0);

        $tier1nfts = Nft::where('price', '<=', intval($max))->where('price', '>=', intval($min))->get();

        // return $tier1nfts;

        $owners = [];
        $nftref = [];
        $refcodes = [];
        $refcount = [];
        $nftprices = [];

        $finalprice = [];

        foreach ($tier1nfts as $tier1nft) {

            //get the owners of this nft

            $owners[] = $tier1nft->owner;

            $nftref[] = $tier1nft->ref;

            //check the number of referals by ech of the users above

        }

        foreach ($owners as $owner) {

            //get the number of referals by each user in the array

            $refs = User::where('id', $owner)->get();

            foreach ($refs as $ref) {
                $refcodes[] = $ref->referal_code;
            }
        }

        foreach ($refcodes as $refcode) {
            $tier = 1;

            $count = User::where('ref', $refcode)
                ->where('status', 1)
                ->count();

            if ($count >= 10) {
                $tier + 1;
            }

            //since tuko tier 1 we need to add to add 1.0

            $refcount[] = ($tier . '.' . $count);

            // $refcount[]=$count;
        }


        foreach ($nftref as $nftr) {

            $prices = Nft::where('ref', $nftr)->get();

            foreach ($prices as $price) {



                $nftprices[] = $price->price;
            }
        }

        function multiply($a, $b)
        {
            return $a * $b;
        }

        function stuff($arrayOne, $arrayTwo)
        {
            $computed = array();
            for ($index = 0; $index < count($arrayOne); $index++) {
                array_push($computed, multiply($arrayOne[$index], $arrayTwo[$index]));
            }
            return $computed;
        }





        $finalprice = stuff($nftprices, $refcount);

        for ($i = 0; $i < sizeof($nftref); $i++) {



            // echo $nftref[$i] ?? null;

            //search for the nft in the database then update with the key same
            $check = Nft::where('ref', $nftref[$i])->first();

            $update = $check->update(['price' => $finalprice[$i]]);

            if ($update) {
                echo "updated";
            } else {
                echo "Not updated";
            }
        }
    }

    public function addpricevaluetier2()
    {
        //get all nfts with price between 51-100usd


        $max = env('Tier2', 100);

        $min = env('MinTier2', 51);


        $tier1nfts = Nft::where('price', '<=', intval($max))
            ->where('price', '>=', intval($min))
            ->get();

        // return $tier1nfts;


        $owners = [];
        $nftref = [];
        $refcodes = [];
        $refcount = [];
        $nftprices = [];
        $finalprice = [];

        foreach ($tier1nfts as $tier1nft) {

            //get the owners of this nft

            $owners[] = $tier1nft->owner;

            $nftref[] = $tier1nft->ref;

            //check the number of referals by ech of the users above

        }

        foreach ($owners as $owner) {

            //get the number of referals by each user in the array

            $refs = User::where('id', $owner)->get();

            foreach ($refs as $ref) {
                $refcodes[] = $ref->referal_code;
            }
        }

        foreach ($refcodes as $refcode) {

            $tier = 2;

            $count = User::where('ref', $refcode)
                ->where('status', 1)
                ->count();

            if ($count >= 10) {
                $tier + 1;
            }

            //since tuko tier 2 we need to add to add 2.0

            $refcount[] = ($tier . '.' . $count);

            // $refcount[]=$count;
        }


        foreach ($nftref as $nftr) {

            $prices = Nft::where('ref', $nftr)->get();

            foreach ($prices as $price) {



                $nftprices[] = $price->price;
            }
        }

        function multiply($a, $b)
        {
            return $a * $b;
        }

        function stuff($arrayOne, $arrayTwo)
        {
            $computed = array();
            for ($index = 0; $index < count($arrayOne); $index++) {
                array_push($computed, multiply($arrayOne[$index], $arrayTwo[$index]));
            }
            return $computed;
        }





        $finalprice = stuff($nftprices, $refcount);

        for ($i = 0; $i < sizeof($nftref); $i++) {



            // echo $nftref[$i] ?? null;

            //search for the nft in the database then update with the key same
            $check = Nft::where('ref', $nftref[$i])->first();

            $update = $check->update(['price' => $finalprice[$i]]);

            if ($update) {
                echo "updated";
            } else {
                echo "Not updated";
            }
        }
    }

    public function addpricevaluetier3()
    {
        //get all nfts with price between 101-200usd

        $max = env('Tier3', 200);

        $min = env('MinTier3', 101);

        $tier1nfts = Nft::where('price', '<=', intval($max))->where('price', '>=', intval($min))->get();

        // return $tier1nfts;

        $owners = [];
        $nftref = [];
        $refcodes = [];
        $refcount = [];
        $nftprices = [];

        $finalprice = [];

        foreach ($tier1nfts as $tier1nft) {

            //get the owners of this nft

            $owners[] = $tier1nft->owner;

            $nftref[] = $tier1nft->ref;

            //check the number of referals by ech of the users above

        }

        foreach ($owners as $owner) {

            //get the number of referals by each user in the array

            $refs = User::where('id', $owner)->get();

            foreach ($refs as $ref) {
                $refcodes[] = $ref->referal_code;
            }
        }

        foreach ($refcodes as $refcode) {

            $tier = 3;

            $count = User::where('ref', $refcode)
                ->where('status', 1)
                ->count();

            if ($count >= 10) {
                $tier + 1;
            }

            //since tuko tier 3 we need to add to add 3.0

            $refcount[] = ($tier . '.' . $count);

            // $refcount[]=$count;
        }


        foreach ($nftref as $nftr) {

            $prices = Nft::where('ref', $nftr)->get();

            foreach ($prices as $price) {



                $nftprices[] = $price->price;
            }
        }

        function multiply($a, $b)
        {
            return $a * $b;
        }

        function stuff($arrayOne, $arrayTwo)
        {
            $computed = array();
            for ($index = 0; $index < count($arrayOne); $index++) {
                array_push($computed, multiply($arrayOne[$index], $arrayTwo[$index]));
            }
            return $computed;
        }





        $finalprice = stuff($nftprices, $refcount);

        for ($i = 0; $i < sizeof($nftref); $i++) {



            // echo $nftref[$i] ?? null;

            //search for the nft in the database then update with the key same
            $check = Nft::where('ref', $nftref[$i])->first();

            $update = $check->update(['price' => $finalprice[$i]]);

            if ($update) {
                echo "updated";
            } else {
                echo "Not updated";
            }
        }
    }

    public function caller()
    {

        return $this->getreferals("uirs1234");
    }
    public function createnft()
    {

        return view('create');
    }
    function generateRandomString(int $n = 0)
    {
        $al = [
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u',
            'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E',
            'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
            'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            '0', '2', '3', '4', '5', '6', '7', '8', '9'
        ];

        $len = !$n ? random_int(7, 12) : $n; // Chose length randomly in 7 to 12

        $ddd = array_map(function ($a) use ($al) {
            $key = random_int(0, 60);
            return $al[$key];
        }, array_fill(0, $len, 0));
        return implode('', $ddd);
    }
    public function postnft(Request $request)
    {

        //store the nft in the database


        if (($request->hasFile('image'))) {


            $file = $request->file('image');

            $destinationPath = 'nfts';
            $file->move($destinationPath, $file->getClientOriginalName());


            $nft = new Nft();

            $nft->name = $request->name;

            $nft->price = $request->price;

            $nft->owner = Auth::user()->id;

            $nft->img = $file->getClientOriginalName();

            $nft->ref = $this->generateRandomString(6);

            if ($nft->save()) {

                return redirect('/home');
            } else {
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

        $mycollections = Nft::where('owner', Auth::user()->id)
            ->where('status', 0)
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
        $code = $request->code;

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
