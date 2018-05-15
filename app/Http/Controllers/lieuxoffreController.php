<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class lieuxoffreController extends Controller
{
     public function afficher(){

    	$users = DB::table('lieux')

          -> join ('offres', 'lieux.lattitude', '=', 'offres.lieuArvLat')
           
           
            ->select('lieux.nomLieu', 'offres.id_offre', 'offres.emailOffre')
            ->where('offres', 'lieux.longitude', '=', 'offres.lieuArvLong')
           ->get();



   
          
            
     $users= json_decode(json_encode($users));



    	return view('admin.offres.view-lieuoffre')->with(compact('users'));
}


}
