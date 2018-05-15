
  @extends('layouts.adminLayout.admin_design')
@section('content')
<?php 
$dbhandle= new mysqli('localhost','root','','covoiturage'); 
  echo $dbhandle -> connect_error  ; 

$query = "SELECT dateRes, count(id_reservation) FROM  reservations  group by dateRes";

$res=  $dbhandle->query($query); 



?>

<!DOCTYPE html>
<html>
<head>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMaterial);

function drawMaterial() {
      var data = google.visualization.arrayToDataTable([
        ['Reservation Effectué', 'Nombre'],
        <?php 

             while ($row=$res->fetch_assoc()) {
               

               echo "['".$row['dateRes']."',".$row['count(id_reservation)']."],"; 
             }

            


         ?>
      ]);

      var materialOptions = {
        chart: {
          title: 'Reservation Effectué'
        },
        hAxis: {
          title: 'Total Population',
          minValue: 0,
        },
        vAxis: {
          title: 'Chart'
        },
        bars: 'Vertical'
      };
      var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
      materialChart.draw(data, materialOptions);
    }
  </script>
</head>
<body>
  <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Statistique</a> <a href="#" class="current">Voir Statistiques</a> </div>
    <h1>Reservations Effectuées</h1>
  </div>
   <div id="chart_div" style="width: 1100px; height: 600px; position:right"></div>
       </div> 
     </div> 
</body>
</html>


   @endsection