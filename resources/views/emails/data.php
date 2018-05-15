<?php 
$dbhandle= new mysqli('localhost','root','','covoiturage'); 
  echo $dbhandle -> connect_error  ; 

$query = "SELECT anneeNaiss , count(anneeNaiss) FROM membres group by anneeNaiss";
$res=  $dbhandle->query($query); 



?>

