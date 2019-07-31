<?php
//print_r($_POST); die;
include('config.php');

  if(isset($_POST['hidden_id']))
  {

   $vehicletitle = $_POST['vehicletitle'];
   $price = $_POST['price'];
   $landing = $_POST['landing'];
   $mileage = $_POST['mileage'];
   $id = $_POST['hidden_id'];
   for($count = 0; $count < count($id); $count++)
   {
    $data = array(
     ':vehicletitle'   => $vehicletitle[$count],
     ':price'  => $price[$count],
     ':mileage'  => $mileage[$count],
     ':landing' => $landing[$count],
     ':id'   => $id[$count]
    );
    $query = "UPDATE tblvehicles
    SET VehiclesTitle = :vehicletitle, PricePerDay = :price, SeatingCapacity = :mileage, LandingPage = :landing
    WHERE id = :id
    ";
    $statement = $dbh->prepare($query);
    $statement->execute($data);
   }
 }

  ?>
