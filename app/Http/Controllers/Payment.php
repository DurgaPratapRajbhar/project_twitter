<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use payment2;

use Auth;
use Socialite;
Use App\User;
use App\SocialIdentity;
 use Twitter;
class Payment extends Controller
{
      
   public   static $ab=10;
   public  function abc(){




//return Socialite::driver('twitter')->redirect();



//print_r(payment2::getFacadeAccessor());
 
            

        // return payment2::getFacadeAccessor() ;

           // print_r($val->getFacadeAccessor());

 
        return view('welcome');

   }


// function dp1($twitter){  


 

      
//  //return Socialite::driver('facebook')->redirect();

// return Socialite::driver('twitter')->redirect();


// }

 

//   public function callback(Request $req){

        
//    //$user = \Socialite::driver('twitter')->user();    

// $account = User::whereProvider('twitter')
//             ->provider_id($providerUser->getId())
//             ->first();

//   	//  $ss=Socialite::driver('facebook');

//   }





 public function redirectToProvider($provider)
   {

     return Twitter::postTweet(array('status' => 'Tweet sent using Laravel and the Twitter API!', 'format' => 'json'));


      // return Socialite::driver($provider)->redirect();
   }

   public function handleProviderCallback($provider='twitter')
   {
       try {
           $user = Socialite::driver($provider)->user();
       } catch (Exception $e) {
           return redirect('/login');
       }

       $authUser = $this->findOrCreateUser($user, $provider);
       Auth::login($authUser, true);
       return redirect($this->redirectTo);
   }


   public function findOrCreateUser($providerUser, $provider)
   {
       $account = SocialIdentity::whereProviderName($provider)
                  ->whereProviderId($providerUser->getId())
                  ->first();

       if ($account) {
           return $account->user;
       } else {
           $user = User::whereEmail($providerUser->getEmail())->first();

           if (! $user) {
               $user = User::create([
                   'email' => $providerUser->getEmail(),
                   'name'  => $providerUser->getName(),
               ]);
           }

           $user->identities()->create([
               'provider_id'   => $providerUser->getId(),
               'provider_name' => $provider,
           ]);

           return $user;
       }
   }






}
