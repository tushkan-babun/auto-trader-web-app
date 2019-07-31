<?php
include('config.php');
$query = "SELECT tblvehicles.id,tblvehicles.VehiclesTitle,tblvehicles.PricePerDay,tblvehicles.SeatingCapacity,tblvehicles.LandingPage FROM tblvehicles ORDER BY id DESC";
$statement = $dbh->prepare($query);
if($statement->execute()) {
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);}?>
