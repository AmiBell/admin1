
 @extends('layouts.adminLayout.admin_design')
@section('content')

<?php 
$dbhandle= new mysqli('localhost','root','','covoiturage'); 
  echo $dbhandle -> connect_error  ; 

$query = "SELECT dateRes, count(demandeur) FROM reservations";
$res=  $dbhandle->query($query); 

?>

<html>
<head>  
  
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,  
  title:{
    text: "Company Revenue by Year"
  },
  axisY: {
    title: "Revenue in USD",
    valueFormatString: "#0,,.",
    suffix: "mn",
    prefix: "$"
  },
  data: [{
    type: "splineArea",
    color: "rgba(54,158,173,.7)",
    markerSize: 5,
    xValueFormatString: "YYYY",
    yValueFormatString: "$#,##0.##",
    dataPoints: [
     <?php 

             while ($row=$res->fetch_assoc()) {
               

               echo "['".$row['dateRes']."',".$row['count(demandeur)']."],"; 
             }

         ?>
    ]
  }]
  });
chart.render();

}
</script>
</head>
<body>
  <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Statistique</a> <a href="#" class="current">Voir Statistiques</a> </div>
    <h1>Statistiques sur les membres</h1>
  </div>
<div id="chartContainer" style="height: 400px; width: 800px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</div>
</body>
</html>

@endsection