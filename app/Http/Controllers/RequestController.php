<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    
       public function sendstk(Request $request){
        
            //do your validation of logic here
        
              $consumerKey ="D99J8AFAqkUzOCezpyUb4vCWo9GSyQHN"; //Fill with your app Consumer Key
              $consumerSecret ="SgmRwTbYNLj9OnDX"; // Fill with your app Secret
            
              # define the variales
              # provide the following details, this part is found on your test credentials on the developer account
              $BusinessShortCode ="7436344";
              $Passkey ="7797550fd96fa9a22e0783d8e1a3b536ec7942887cd0f636f9283d3b8753755d";
              
              
              
              $PartyA = $request->mobile; // This is your phone number, 
              $AccountReference = $request->ho;
              $TransactionDesc = $request->account;
              $Amount = $request->amount;
             
              # Get the timestamp, format YYYYmmddhms -> 20181004151020
              $Timestamp = date('YmdHis');    
              
              # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
              $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);
              
              
            
              # header for access token
              $headers = ['Content-Type:application/json; charset=utf8'];
            
                # M-PESA endpoint urls
              $access_token_url = "https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
              $initiate_url = "https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
            
              # callback url
              $CallBackURL = "https://api.essayprowesswriters.com/public/api/v1/response";
            
              $curl = curl_init($access_token_url);
                      curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
                      curl_setopt($curl, CURLOPT_HEADER, FALSE);
                      curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
                      $result = curl_exec($curl);
                      $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                      $result = json_decode($result);
                      $access_token = $result->access_token;  
            
                // $access_token="fZVOQPKhPdG3RkdPcFYXFsmGHkcc";
              curl_close($curl);
            
              # header for stk push
              $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];
            
              # initiating the transaction
              $curl = curl_init();
              curl_setopt($curl, CURLOPT_URL, $initiate_url);
              curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header
            
              $curl_post_data = array(
                //Fill in the request parameters with valid values
                'BusinessShortCode' => $BusinessShortCode,
                'Password' => $Password,
                'Timestamp' => $Timestamp,
                'TransactionType' => 'CustomerPayBillOnline',
                'Amount' => $Amount,
                'PartyA' => $PartyA,
                'PartyB' => $BusinessShortCode,
                'InvoiceNumber'=>'https://lifegeegs.com/status',
                'PhoneNumber' => $PartyA,
                'CallBackURL' => $CallBackURL,
                'AccountReference' => $AccountReference,
                'TransactionDesc' => $TransactionDesc
              );
            
              $data_string = json_encode($curl_post_data);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($curl, CURLOPT_POST, true);
              curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
              $curl_response = curl_exec($curl);
              print_r($curl_response);
            
            //   echo $curl_response;
            $response=json_decode($curl_response);
            
            return response()->json($response,200);
        
    }
    
       public function response(Request $request){
            
            // log the response
        $logFile = "M_PESAConfirmationResponse.txt";
        
        $log = fopen($logFile, "a");
        
        fwrite($log, $request);
        
        fclose($log);
        
       
        $TransactionType     =  $request['TransactionType'];
        $TransID          =$request['TransID'];
        $TransTime           = $request['TransTime'];
        $TransAmount          = $request['TransAmount'];
        $BillRefNumber       = $request['BillRefNumber'];
        $InvoiceNumber       = $request['InvoiceNumber'];
        $ThirdPartyTransID   = $request['ThirdPartyTransID'];
        $MSISDN            = $request['MSISDN'];
        $FirstName          = $request['FirstName'];
        $MiddleName         = $request['MiddleName'];
        $LastName            = $request['LastName'];
        
        
        
        //handle business logic like to insert to the database
        
        
        
        
        }
        
        
       public function registerurl(){
           header("Content-Type:application/json");
            $shortcode='7436344';
            $consumerkey    ="D99J8AFAqkUzOCezpyUb4vCWo9GSyQHN";
            $consumersecret ="SgmRwTbYNLj9OnDX";
            //hapa weka validation url yako
            $validationurl="https://api.essayprowesswriters.com/public/api/v1/response";
            //hapa weka confirmation url e.g below
            $confirmationurl="https://api.essayprowesswriters.com/public/api/v1/response";
            /* testing environment, comment the below two lines if on production */
            $authenticationurl='https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
            $registerurl = 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';
            /* production un-comment the below two lines if you are in production */
            //$authenticationurl='https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
            //$registerurl = 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';
            $credentials= base64_encode($consumerkey.':'.$consumersecret);
            $username=$consumerkey ;
            $password=$consumersecret;
              // Request headers
              $headers = array(  
                'Content-Type: application/json; charset=utf-8'
              );
              // Request
  

          $ch = curl_init($authenticationurl);
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          //curl_setopt($ch, CURLOPT_HEADER, TRUE); // Includes the header in the output
          curl_setopt($ch, CURLOPT_HEADER, FALSE); // excludes the header in the output
          curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password); // HTTP Basic Authentication
          $result = curl_exec($ch);  
          $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);  
        $result = json_decode($result);
        $access_token=$result->access_token;
        curl_close($ch);
        
        //Register urls
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $registerurl);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); 
        $curl_post_data = array(
          //Fill in the request parameters with valid values
          'ShortCode' => $shortcode,
          'ResponseType' => 'Cancelled',
          'ConfirmationURL' => $confirmationurl,
          'ValidationURL' => $validationurl
        );
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        echo $curl_response;
       }
}
