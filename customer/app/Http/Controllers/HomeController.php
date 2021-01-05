<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
     
        /* if($req->session()->has('username')){
            
              return view('Home.index', ['username'=>$req->session()->get('username')]);
          }else{
              $req->session()->flash('msg', 'invalid request...');
              return redirect('/login');
          }*/
  
          return view('Home.index', ['username'=>$req->session()->get('UserName')]);
          
      }
  
       public function customerlist(){
        /*$user="customer";
           $customers=Manager::where('UserType','LIKE','%'.$user."%")->get();
        return view('Home.customerlist')->with('customers', $customers);
  */
  
        $customers=Manager::where('UserType','customer')->get();
        return view('Home.customerlist')->with('customers', $customers);
      }
  
         
  
       public function customerCreate(){
         
        return view('Home.customerCreate');
  
      }
  
        public function customerStore(empRequest $req){
  
        if($req->hasFile('myimg')){
  
            $file=$req->file('myimg');
  
                 if($file->move('upload', $file->getClientOriginalName())){
                 
                  $user = new Manager();
  
                  $user->UserName     = $req->username;
                  $user->Name         = $req->name;
                  $user->Password     = $req->password;
                  $user->Email        = $req->email;
                  $user->ContactNo    = $req->contno;
                  $user->Gender       = $req->gender;
                  $user->UserType     = $req->type;
                  $user->Address      = $req->address;
                  $user->Propic       = $file->getClientOriginalName();
  
                  if($user->save())
                  {
                      return redirect()->route('Home.customerlist');
                  }
  
              }else{
                  echo "error";
              }
        }
         
        return redirect('Home.customerCreate');
  
      }
  
  
      public function empEdit($id){
         
       $customers=Manager::find($id);
       return view ('Home.customerEdit',$customers);
  
      }
  
        public function customerUpdate($id, Request $req)
      {
        
               /*  $customers = Manager::find($id);
        
                 
                  $customers->UserName     = $req->username;
                  $customers->Name         = $req->name;
                  $customers->Password     = $req->password;
                  $customers->Email        = $req->email;
                  $customers->ContactNo    = $req->contno;
                  $customers->Gender       = $req->gender;
                  $customers->UserType     = $req->type;
                  $customers->Address      = $req->address;
                  //$user->Propic       = $file->getClientOriginalName();
                  
                  $customers->save();
                  return redirect()->route('Home.customerlist');
  */
                if($req->hasFile('myimg')){
  
                  $file=$req->file('myimg');
  
                if($file->move('upload', $file->getClientOriginalName())){
                 
                  $user = Manager::find($id);
  
                  $user->UserName     = $req->username;
                  $user->Name         = $req->name;
                  $user->Password     = $req->password;
                  $user->Email        = $req->email;
                  $user->ContactNo    = $req->contno;
                  $user->Gender       = $req->gender;
                  $user->UserType     = $req->type;
                  $user->Address      = $req->address;
                  $user->Propic       = $file->getClientOriginalName();
  
                  if($user->save())
                  {
                      return redirect()->route('Home.customerlist');
                  }
  
              }else{
                  echo "error";
              }
        }
      }
  
      public function customerDestroyView($id){
         
       $customers=Manager::find($id);
       return view ('Home.customerDelete',$customers);
  
      }
  
        public function customerDestroy($id){
         
       $customers=Manager::find($id);
       $customers->delete();
       return redirect()->route('Home.customerlist');
  
      }
  
  
      public function profile(Request $req)
      {
           $user= $req->session()->get('UserName');
           $customers=Manager::where('UserName', $manager)->get();
           //echo $customers;             	 
             return view('Home.profile')->with('customers', $customers);
           
  
  
            
      }
  
      public function customerDetails($id){
         
       $customers=Manager::find($id);
       return view ('Home.customerDetails',$customers);      
  
      }
  
  }  

