<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    //
    public function create_transaction(Request $request){

    $req = array();
    $cmd="create_transaction";

        //validate the data
        // Fill these in from your API Keys page
    $public_key = 'cef809b94e576ec8afbb81be0afd7d7ae84866e36356ca665fe8813ec4a7a1b2';
    $private_key = '708520CEC3fdbF29CF8254CE56Dc028d0A6a6a159a1904358f3Fae534f805041';


    // Set the API command and required fields
    $req['version'] = 1;
    $req['cmd'] = $cmd;
    $req['key'] = $public_key;
    $req['amount'] = $request->amount;
    $req['currency1'] = 'USD';
    $req['currency2'] = 'BTC';
    
    $req['ipn_url'] = "http://127.0.0.1:8000/callback";


    $req['format'] = 'json'; //supported values are json and xml

    // Generate the query string
    $post_data = http_build_query($req, '', '&');

    // Calculate the HMAC signature on the POST data
    $hmac = hash_hmac('sha512', $post_data, $private_key);

    // Create cURL handle and initialize (if needed)
    static $ch = NULL;
    if ($ch === NULL) {
        $ch = curl_init('https://www.coinpayments.net/api.php');
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('HMAC: '.$hmac));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

    // Execute the call and close cURL handle
    $data = curl_exec($ch);
    // Parse and return data if successful.



        return response()->json(json_decode($data));


    }

}
