<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membre;
use App\Offre ;
use App\Reservation;
use DB;

class MembreController extends Controller
{
     public function addMembre(Request $request){

     	if($request->isMethod('post')){

     		$data= $request->all();
     		echo "<pre>" ; print_r($data); die; 
     	}
     	return view('admin.membres.add_membre');
     }
     

public function viewmembres(){

     $membres = Membre::get();
      $membres= json_decode(json_encode($membres));

  return view('admin.membres.view_membres')->with(compact('membres'));
     
}
   



   public static function  deleteMembre($email=null){

      
     if(!empty($email)){
          
            
          
            Membre::where(['email'=> $email])->delete();
          return redirect()->back()->with('flash_message_success','Membre deleted Successfully !!'); 
     }

   

   }

    public function stat(){ 
     	return view('admin.membres.statistique');
     }
   

   public function all(){


      $count = membres::count(); 
       $count = json_decode(json_encode($count));



   }




 }

