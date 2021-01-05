<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){

    	return view('login.login');
    }


    public function verify(Request $req){

    // $user=Manager::all();
        $user=Manager::where('UserName',$req->username)
                     ->where('Password',$req->password)
                     ->first();


      if(count((array)$user) > 0){

            $req->session()->put('UserName', $req->username);
            
            return redirect('/home');
        }else{
            $req->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
        }
    
   /*  if($req->username == $req->password){
            $req->session()->put('username', $req->username);
            return redirect('/home');
        }else{
            $req->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
            
        }*/
    }
}
