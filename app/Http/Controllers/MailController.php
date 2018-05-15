<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    
   public function  basic_email(){

          $data=['name'=>'Selekni Covoiturage'];
          Mail::send(['text'=>'mail'], $data ,function($message){

                   $message->to('miratou96@hotmail.com','Amira Bellili')->subject('send message from laraval');

                    $message->from('miratou96@gmail.com','SeLekni');
          });
          echo 'Basic email was sent !';


   }





   public function html_email(){

     $data=['name','SeLekni covoiturage'];
     Mail::send(['text'->'mail'],$data,function($message){
           
           $message->to('miratou96@hotmail.com','Amira Bellili')->subject('send message Html from laraval');

           $message->from('miratou96@gmail.com','SeLekni');

     });

                  echo 'html email was sent !';

            
   }






}
