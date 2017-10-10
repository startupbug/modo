<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\User;
use Validator;

class AuthController extends Controller
{
    public function loginIndex(){
    	return view('auth.login');
    }

    public function signupIndex(){
    	return view('auth.signup');
    }


    /* Normal Authenticaition */

    public function register(Request $request){

       $validator = Validator::make($request->all(), [
            'email' =>  'required|unique:users,email',
        ]);

         if ($validator->fails()) {
        
        //pass validator errors as errors object for ajax response
            return \Response::json(array('success' => true, 'msg' => 'Email is already taken'), 422);
          //  return \Response::json(array('success' => false, 'msg' => $validator->errors()), 422);
          //return response()->json(['errors'=>$validator->errors()], 422);
        }       

        // if ($validator->fails()) {
        //      return \Response::json(array('success' => false, 'msg' => 'Couldnot be Registered'), 404);
        // }


      if($request->ajax()) {
         $user = new User();
         $user->full_name = $request->full_name;
         $user->email = $request->email;
         $user->password = bcrypt($request->password);

         if($user->save()){
            return \Response::json(array('success' => true, 'msg' => 'Successfully Registered'), 200);
         }else{
            return \Response::json(array('success' => false, 'msg' => 'Couldnot be Registered'), 422);
         }
      }  
    }

    public function login_post(Request $request){
        //dd($request->all());    //username //password
        //return 123;//$request->input('email');
         $this->validate($request, [
                  'username' => 'required|email',
                  'password' => 'required',
              ]);

      if(Auth::attempt(['email' => $request->username, 'password' => $request->password] )) {

          // Authentication passed...
          $username = Auth::user()->full_name;
          $responseText = 'Hi, '.$username.' You have Succesfully Logged In.';

         return \Response::json(array('success' => true, 'responseText' => $responseText), 200);
       
    }else{
        $responseText = 'Error! Invalid Email or Password';
          return \Response::json(array('success' => false, 'responseText' => $responseText), 422);
    }

   } 

    public function logout(){
    	Auth::logout();
    	return redirect()->route('home');
    }

}
