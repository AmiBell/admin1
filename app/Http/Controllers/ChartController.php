<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\SampleChart;
use App\Http\Controllers\Controller;
use DB ; 

class ChartController extends Controller
{
 
  function chart(){
  	
  
return view('chart');
}


function chartgenre(){


	return view('chartgenre');
}



      function chartRes(){


	return view('ChartRes');
}



  
      function chartRes1(){


	return view('resmois');
}

   function line(){
   	return view('line');
   }





}
