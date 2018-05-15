<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ; 

class premiumController extends Controller
{
    


    public function premuim(){

      $users = DB::table('membres')

          -> join ('offres', 'lieux.lattitude', '=', 'offres.lieuArvLat')
           
           
            ->select('lieux.nomLieu', 'offres.id_offre', 'offres.emailOffre')
            ->where('offres', 'lieux.longitude', '=', 'offres.lieuArvLong')
           ->get();


    }
}
