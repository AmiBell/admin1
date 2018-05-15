<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL ; 
use Illuminate\Support\Facades\DB ; 
use Auth; 
use Session ;


class UserController extends Controller
{
    public function store(request $request){



      // print_r($request->input());

    	$email=$request->input('email');
    	$password=$request->input('password');

    	$name=$request->input('name');


    echo 	DB::insert('insert into users (id,name,email,password) values (?,?,?,?)',[null,$name,$email,$password]);
    	
          return redirect('/login');
          
    }






  public function logs(request $request){



      // print_r($request->input());

    	
    	$password=$request->input('password');
    	
    	$name=$request->input('name');
      $data1 = $request->input();

   $data = DB::select('select id from  users where name=? and password=? ',[$name,$password]);

   if(count($data)){
    Session::put('adminSession',$data1['name']);
                   return redirect('/login/dashboard');
   }else {
            return redirect('/login')->with('flash_message_error','invalid username or password');
            
   }
       return view('login');

    }

    	
    




    public function dashboard(){
       
        return view('admin.dashboard');
    }



    public function logout(){
           Session::flush();
            return redirect('/login')->with('flash_message_success','Logged out Successfully');
    }



     public function settings(){
           return view('admin.settings');
    }

    public function chkPassword(Request $request){
        $data= $request->all();
        $current_password = $data['current_pwd'];
        $check_password = User::where(['admin'=>'1'])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo 'true'; die;
        }else {
            echo 'false' ; die;
        }
    }

    public function updatePassword(Request $request){

       if($request->isMethod('post')){
        $data = $request->all();
      //  echo '<pre>'; print_r($data); die; 
        $check_password = User::where(['email' => Auth::user()->email])->first();
        $current_password = $data['current_pwd'];
        if(Hash::check($current_password,$check_password->password)){
             $password = bcrypt($data['new_pwd']);
              User::where('id','1')->update(['password'=>$password]);
              return redirect('/admin/settings')->with('flash_message_success','Password update Successfully !');
        } else {
         return redirect('/admin/settings')->with('flash_message_error','  Incorrect Current Password !'); 
       }
    }}




    public function Event(){
      return view('Event');
    }
  }
