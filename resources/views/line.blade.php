 @extends('layouts.adminLayout.admin_design')
@section('content')
 
<?php 

$dbhandle= new mysqli('localhost','root','','covoiturage'); 
  echo $dbhandle -> connect_error  ; 

$query = "SELECT dateRes, count(offrant),count(demandeur) FROM reservations r , offres o  where o.id_offre= r.offreFK  group by dateRes";

$res=  $dbhandle->query($query); 

?>


 <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['id_reservation', 'offreFk', 'demandeur'],
          <?php 

             while ($row=$res->fetch_assoc()) {
               

              echo "['".$row['dateRes']."',".$row['count(offrant)'].",".$row['count(demandeur)']."]," ; 

             
             }

          ?>]);
var options = {
          title: 'Company Performance',
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
    <h1>Statistiques</h1>
  </div>
     
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </div>
</div>
  </body>
</html>




@endsection