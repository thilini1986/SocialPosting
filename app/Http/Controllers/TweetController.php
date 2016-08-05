<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\View;
use Twitter;

class TweetController extends Controller {

    public function postTweet(Request $request) {
       
        //get the message from tweet form
        $message = $request->input('message');

        if (trim($message) != '') {
            try {
                //post tweet
                $response = Twitter::postTweet(array('status' => $message, 'format' => 'json'));
            } catch (\Exception $e) {
                $data['response'] = 'Error: '. $e->getMessage();
            }


            if (isset($response)) {
               // $responseArray = $this->jsonDecode($response);               
                 $data['response'] = "Successfull";
            } 
        } else {
             $data['response'] = "Message is empty.";
        }
        
        return \View::make('tweet.message')->with('data', $data);
    }

}
