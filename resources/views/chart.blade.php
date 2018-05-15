






 @extends('layouts.adminLayout.admin_design')
@section('content')



<?php 
$dbhandle= new mysqli('localhost','root','','covoiturage'); 
  echo $dbhandle -> connect_error  ; 

$query = "SELECT anneeNaiss , count(anneeNaiss) FROM membres group by anneeNaiss";
$res=  $dbhandle->query($query); 
$query1 = "SELECT genre, count(genre) FROM membres group by genre";
$res1=  $dbhandle->query($query1); 


$query2 = "SELECT MONTHNAME(dateRes), count(offrant),count(demandeur) FROM reservations r , offres o  where o.id_offre= r.offreFK  group by MONTHNAME(dateRes)";

$res2=  $dbhandle->query($query2); 

$query3 = "SELECT count(offrant) from offres";
$res3=  $dbhandle->query($query3);


?>









<html>
  <head>
    <script type="text/javascript" src="asset{{('js/backend_js/jquery-3.3.1.min 1.js')}}"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript">
     

    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
     
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['anneeNaiss', 'anneeNaiss'],
         <?php 

             while ($row=$res->fetch_assoc()) {
               

               echo "['".$row['anneeNaiss']."',".$row['count(anneeNaiss)']."],"; 
             }

         ?>
        ]);

        var options = {
          title: 'Membres selon leurs age',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['genre', 'genre'],
         <?php 

             while ($row=$res1->fetch_assoc()) {
               

               echo "['".$row['genre']."',".$row['count(genre)']."],"; 
             }

         ?>
        ]);

        var options = {
          title: 'Membres selon leurs genre ',
           is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['id_reservation', 'offrant', 'demandeur'],
          <?php 
              while ($row1=$res3->fetch_assoc()) {
             while ($row=$res2->fetch_assoc()) {
               

              echo "['".$row['MONTHNAME(dateRes)']."',".$row1['count(offrant)'].",".$row['count(demandeur)']."]," ; 

             
             }}

          ?>]);
var options = {
          title: 'Offrant et demandeur par jour',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Statistique</a> <a href="#" class="current">Voir Statistiques</a> </div>
    <h1>Statistiques sur les membres</h1>
  </div>
     
    <div  id="piechart" style="width: 500px; height: 400px; position:right;display:inline-block" >
      
    </div>
    
    <div  id="piechart1" style="width: 500px; height: 400px; position:left;display:inline-block">
      
    </div>
    
    <div id="curve_chart" style="width: 1000px; height: 400px"></div>
    </div> 
     </div> 
     
   
  </body>
</html>




@endsection