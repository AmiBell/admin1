<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class memOffreController extends Controller
{
    public function afficher(){

    	$users = DB::table('offres')
            ->join('lieux','offres.depart','=','lieux.id_lieu')
            ->select('offres.offrant', 'offres.id_offre','lieux.nom')
            ->get();

$users1 = DB::table('offres')
           
            ->join('lieux','offres.arrivee','=','lieux.id_lieu')
            ->select('offres.offrant', 'offres.id_offre','lieux.nom')
            ->get();
   
            
     $users= json_decode(json_encode($users));
      $users1= json_decode(json_encode($users1));


    	return view('admin.offre.view-offre')->with(compact('users'));
    	//return view('admin.offre.view-offre')->with(compact('users1'));
    }

}
