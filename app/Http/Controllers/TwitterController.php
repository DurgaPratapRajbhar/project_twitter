<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Redirect;
 
use URL;
use Mail;
use DB;
use Cache;
use Socialite;
use Twitter;
use Session;
class TwitterController extends Controller
{




    public function twitterlogin(){

                 return view('twitterindex');
    }

    
     public function twitter(Request $req){  

            return Socialite::driver('twitter')->redirect();

     }
 
     public function twittercallback(Request $req){
               

    try {
              $user = Socialite::driver('twitter')->user();

               
              $account=DB::table('twitter_t')->where('provider_name','=','twitter')
             ->where('provider_id','=',$user->getId())->first();
 
 
             
Session::put('nickname',$user->getNickname());
 

      if ($account) { 
          return redirect()->intended('twitter-dashbord');
       } else {
           $user1 = DB::table('twitter_t')->where('name','=',$user->getEmail())->first();

           if (! $user1) {
               DB::table('twitter_t')->insert([
                   'email' => $user->getEmail(),
                   'name'  => $user->getName(),
                   'provider_name'  => 'twitter',
                   'provider_id'  => $user->getId(),
               ]);

               return redirect()->intended('twitter-dashbord');
           }

         }
       
 
       } catch (Exception $e) {
           return redirect('/twitter-login');
       }
             
             

     }


     public function twittertweet(){
 

  if(Session::get('nickname')){

  $tweets = Twitter::getUserTimeline(array('screen_name' =>Session::get('nickname'), 'count' => 50, 'format' => 'object'));

 

 return view('twitteriDashboard',['tweets'=>$tweets]);

}else{

  return redirect('/twitter-login');
}

//return Twitter::postTweet(array('status' => 'Tweet sent using Laravel and the Twitter API!',  'format' => 'json'));


//RajbharDp

     	//return Twitter::getUserTimeline(['screen_name' => 'thujohn', 'count' => 20, 'format' => 'json']);
     }



     public function twittertweetpost(Request $req){
 
                  if(Session::get('nickname')){

                Twitter::postTweet(array('status' => $req->postname,  'format' => 'json'));

              return redirect()->intended('twitter-dashbord');

              }else{

  return redirect('/twitter-login');
}
    }


}
