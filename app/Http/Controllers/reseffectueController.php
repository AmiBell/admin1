<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reseffectueController extends Controller
{
    public function liste(){

    	$users = DB::table('reservations')
            ->join('offres', 'reservations.OffreFK', '=', 'offres.id_offre')
            ->select('reservations.demandeur', 'reservations.id_reservation', 'offres.offrant')
            ->where('reservations.etat', '=', 'accepter')
            ->get();


   
          
            
     $users= json_decode(json_encode($users));



    	return view('admin.offre.view-reserve')->with(compact('users'));
    }





    public function liste1(){

    	$user = DB::table('reservations')
            ->join('offres', 'reservations.OffreFK', '=', 'offres.id_offre')
            ->select('reservations.demandeur', 'reservations.id_reservation', 'offres.offrant')
            ->where('reservations.etat', '=', 'refuser')
            ->get();


   
          
            
     $user= json_decode(json_encode($user));



    	return view('admin.offre.view-reservenoneffectue')->with(compact('user'));
    }
}
