
  @extends('layouts.adminLayout.admin_design')
@section('content')
<?php 

$dbhandle= new mysqli('localhost','root','','covoiturage'); 
  echo $dbhandle -> connect_error  ; 

$query = "SELECT offrant, count(id_reservation) FROM offres o , reservations r where  o.id_offre= r.offreFK and r.etat=0 group by offrant";

$res=  $dbhandle->query($query); 

$query1 = "SELECT MONTHNAME(dateRes), count(id_reservation) FROM  reservations where dateRes  group by MONTHNAME(dateRes)";

$res1=  $dbhandle->query($query1);

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

             while ($row=$res1->fetch_assoc()) {
               

               echo "['".$row['MONTHNAME(dateRes)']."',".$row['count(id_reservation)']."],"; 
             }

            


         ?>
      ]);

      var materialOptions = {
        chart: {
          title: 'Covoiturage Effectué par mois '
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
  <script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMaterial);

function drawMaterial() {
      var data = google.visualization.arrayToDataTable([
        ['Reservation Effectué', 'Nombre'],
        <?php 

             while ($row=$res->fetch_assoc()) {
               

               echo "['".$row['offrant']."',".$row['count(id_reservation)']."],"; 
             }

            


         ?>
      ]);

      var materialOptions = {
        chart: {
          title: 'Covoiturage Effectué pour chaque conducteur'
        },
        hAxis: {
          title: 'Total Population',
          minValue: 0,
        },
        vAxis: {
          title: 'City'
        },
        bars: 'horizontal'
      };
      var materialChart = new google.charts.Bar(document.getElementById('chart_div1'));
      materialChart.draw(data, materialOptions);
    }
  </script>
  <script type="text/javascript" src="asset{{('js/backend_js/jquery-3.3.1.min 1.js')}}"></script>
  
</head>
<body>

  <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Statistique</a> <a href="#" class="current">Voir Statistiques</a> </div>
    <h1>Statistiques sur les covoiturages effectuées</h1>
  </div>
   <div id="chart_div1" style="width: 1000px; height: 400px; position:right;display:inline-block"></div>
   <div id="chart_div" style="width: 1000px; height: 400px; position:right"></div>
       </div> 
     </div> 
</body>
</html>


   @endsection




