
@extends('layouts.adminLayout.admin_design')
@section('content')


<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

  
                <ul class="site-stats">
                <li class="bg_lh" style="background-color: blue ; height:100px;opacity: .7; width: 400px"><i class="icon-user"></i> <strong>
                 <?php 


                 $users=  DB::table('membres')->count();
                  echo $users ; 
                  ?>
                </strong> <h3>Membres inscrits</h3></li>
                
                <li class="bg_lh" style="background-color:#FF7F50; height:100px;opacity: .7 ; width: 400px" ><i class="icon-user"></i>  <strong>
                 <?php 
                  
               function Pourcentage1($Nombre, $Total) {
       return  ($Nombre *  100)/$Total;
                           }

                  function somme($n1,$n2)  {
                    return $n1 + $n2 ;
                  }       

            $numberoftwits1 = DB::table('reservations')
                     ->select(DB::raw('count(*) as demandeur'))
                     ->groupBy('demandeur')
                     ->get();
                   

             $numberoftwits2 = DB::table('reservations')
            ->join('offres', 'reservations.OffreFK', '=', 'offres.id_offre')

                     ->select(DB::raw('count(*) as offrant'))
                     ->groupBy('offrant')
                     ->get();
                    
       $total = DB::table('membres')->count();
       $somme = count($numberoftwits1)+count($numberoftwits2);
                  $user = Pourcentage1($somme,$total);
                  echo (int)$user.'%' ; 
                     

                  ?>

                </strong> <h3>Membres actifs</h3></li>
                  <li class="bg_lh" style="background-color:green ; height:100px; opacity: .7; width: 400px"><i class=""></i>  <strong>
                 <?php 
                    $users = DB::table('lieux')
            ->join('offres', 'lieux.id_lieu', '=', 'offres.depart')
            ->select('offres.depart')
            ->where('lieux.nom', '=', 'usthb')
            ->count();
            echo $users ; 


                
                  ?>
                </strong> <h3> Départ de l'USTHB </h3></li>


          
                  <li class="bg_lh" style="background-color:#FF4500 ; height:100px; opacity: .7; width: 400px"><i class=""></i>  <strong>
                 <?php 
                    $users = DB::table('lieux')
            ->join('offres', 'lieux.id_lieu', '=', 'offres.arrivee')
            ->select('offres.arrivee')
            ->where('lieux.nom', '=', 'usthb')
            ->count();
            echo $users ; 


                
                  ?>
                </strong> <h3>Destination vers l'USTHB</h3></li>











                <li class="bg_lh" style="background-color: orange ; height:100px;opacity: .7;width: 400px"><i class=""></i> <strong>
                	
                  <?php 
                  $users = DB::table('membres')
            ->join('offres', 'membres.numeroTel', '=', 'offres.offrant')
            ->select('membres.numeroTel')
            ->count();
              echo $users ;  ?>
                </strong> <h3> Offres de covoiturage </h3></li>




                





                <li class="bg_lh" style="background-color: red; height:100px;opacity: .8 ; width:400px" ><i class=""></i>  <strong>
                 <?php 
                    $users = DB::table('reservations')
            ->select('reservations.demandeur')
            ->count();
            echo $users ; 


                
                  ?>
                </strong> <h3>Demandes de covoiturage</h3></li>
              

             
               <li class="bg_lh" style="background-color: #FF1493; height:100px;opacity: .8 ; width: 400px" ><i class=""></i>  <strong>
                 <?php 
                 function Pourcentage($Nombre, $Total) {
       return  (int)($Nombre *100)/$Total;
                           }
                    
                    $users = DB::table('reservations')
            ->select('id_reservation')
            ->where('reservations.etat', '=', 'accepter')
            ->count();
             $user = DB::table('reservations')
            ->select('id_reservation')
            //->where('reservations.etat', '=', 1)
            ->count();
    $data= Pourcentage($users,$user);
            echo (int)$data.'%' ; 


                
                  ?>
                </strong> <h3>Covoiturages effectués </h3></li>
              </ul>



    <hr/>
    <div class="widget-box widget-plain">
      <div class="center">
        <ul class="stat-boxes2">
          <li>
            <div class="left peity_bar_neutral"><span><span style="display: none;">2,4,9,7,12,10,12</span>
              <canvas width="50" height="24"></canvas>
              </span>+10%</div>
            <div class="right"> <strong>15598</strong> Visits </div>
          </li>
          <li>
            <div class="left peity_line_neutral"><span><span style="display: none;">10,15,8,14,13,10,10,15</span>
              <canvas width="50" height="24"></canvas>
              </span>10%</div>
            <div class="right"> <strong>150</strong> New Users </div>
          </li>
          <li>
            <div class="left peity_bar_bad"><span><span style="display: none;">3,5,6,16,8,10,6</span>
              <canvas width="50" height="24"></canvas>
              </span>-40%</div>
            <div class="right"> <strong>4560</strong> Orders</div>
          </li>
          <li>
            <div class="left peity_line_good"><span><span style="display: none;">12,6,9,23,14,10,17</span>
              <canvas width="50" height="24"></canvas>
              </span>+60%</div>
            <div class="right"> <strong>5672</strong> Active Users </div>
          </li>
          <li>
            <div class="left peity_bar_good"><span>12,6,9,23,14,10,13</span>+30%</div>
            <div class="right"> <strong>2560</strong> Register</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<!--end-main-container-part-->
@endsection 