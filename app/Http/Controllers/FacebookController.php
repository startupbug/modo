<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Socialite;
use Auth;

class FacebookController extends Controller
{
 /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
       // dd($user);
        $user_check = User::where('facebook_id', $user->id)->first();

        if(!$user_check){
            //1 - Successfully Registered
            //2 - error not registered
            //3 - already exists
        $user_insertion = User::firstOrCreate([
            'full_name' => $user->name,
            'email' => $user->email,
            'facebook_id' => $user->id
            ]);

                if($user_insertion){
                    //1
                    session()->put('signup_status', 1);
                    session()->put('signup_msg', 'Successfully Registered using Facebook');
                    return redirect()->route('login');                     
                 

                }else{
                
                    //2
                    session()->put('signup_status', 2);
                    session()->put('signup_msg', 'Not Registered due to Some Error');
                    return redirect()->route('signup'); 
                }

        }else{
            //3
               auth()->login($user_check);

               return redirect()->route('home'); 

            // session()->put('signup_status', 3);
            // session()->put('signup_msg', 'User Already Registered');
            // return redirect()->route('signup');            
        }

        
    }
}
