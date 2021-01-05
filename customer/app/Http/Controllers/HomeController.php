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
  
          return view('Home.customerCreate', ['customername'=>$req->session()->get('CustomerName')]);
          
      }
  
       public function customerlist(){
        /*$user="customer";
           $customers=Manager::where('UserType','LIKE','%'.$user."%")->get();
        return view('Home.customerlist')->with('customers', $customers);
  */
  
        $customers=Manager::where('CustomerType','customer')->get();
        return view('Home.customerlist')->with('customers', $customers);
      }
  
         
  
       public function customerCreate(){
         
        return view('Home.customerCreate');
  
      }
  
        public function customerStore(customerRequest $req){
  
        if($req->hasFile('myimg')){
  
            $file=$req->file('myimg');
  
                 if($file->move('upload', $file->getClientOriginalName())){
                 
                  $user = new Manager();
  
                  $customer->CustomerName     = $req->customername;
                  $customer->Name         = $req->name;
                  $customerr->Password     = $req->password;
                  $customer->Email        = $req->email;
                  $customer->ContactNo    = $req->contno;
                  $customer->Gender       = $req->gender;
                  $customer->UserType     = $req->type;
                  $customer->Address      = $req->address;
                  $customer->Propic       = $file->getClientOriginalName();
  
                  if($customer->save())
                  {
                      return redirect()->route('Home.customerlist');
                  }
  
              }else{
                  echo "error";
              }
        }
         
        return redirect('Home.customerCreate');
  
      }
  
  
      public function customerEdit($id){
         
       $customers=Manager::find($id);
       return view ('Home.customerEdit',$customers);
  
      }
  
        public function customerUpdate($id, Request $req)
      {
        
               /*  $customers = Manager::find($id);
        
                 
                  $customers->customerName     = $req->customername;
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
                 
                  $customer = Manager::find($id);
  
                  $customer->UserName     = $req->username;
                  $customer->Name         = $req->name;
                  $customer->Password     = $req->password;
                  $customer->Email        = $req->email;
                  $customer->ContactNo    = $req->contno;
                  $customer->Gender       = $req->gender;
                  $customer->UserType     = $req->type;
                  $customer->Address      = $req->address;
                  $customer->Propic       = $file->getClientOriginalName();
  
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
           $customer= $req->session()->get('CustomerName');
           $customers=Manager::where('CustomerName', $manager)->get();
           //echo $customers;             	 
             return view('Home.profile')->with('customers', $customers);
           
  
  
            
      }
  
      public function customerDetails($id){
         
       $customers=Manager::find($id);
       return view ('Home.customerDetails',$customers);      
  
      }
  
  }  

