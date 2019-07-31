<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title> Auto Trader | Vehicle Details</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/3b656fb8da.js"></script>
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cfa35304351e9001264fa38&product=sticky-share-buttons' async='async'></script>
</head>
<body>
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->
<!--Page Header-->
<section class="page-header details_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Car Details</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Car Details</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->
<!--Listing-Image-Slider-->
<?php
$vhid=intval($_GET['vhid']);
$sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id=:vhid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
$_SESSION['brndid']=$result->bid;
?>
<section id="listing_img_slider">
<?php
if ($result->Vimage1 !=""){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage2, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage2);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage3, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage3);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage4, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage4);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage5, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage5);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage6, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage6);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage7, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage7);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage8, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage8);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage9, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage9);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage10, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage10);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage11, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage11);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage12, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage12);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage13, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage13);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage14, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage14);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage15, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage15);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage16, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage16);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage17, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage17);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage18, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage18);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage19, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage19);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php
}
if (strpos($result->Vimage20, '.') !== false){
?>
<div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage20);?>" class="img-responsive" alt="image" width="900" height="560"></div>
<?php }?>
</section>
<!--/Listing-Image-Slider-->
<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2><?php echo htmlentities($result->ModelYear);?> <?php echo htmlentities($result->BrandName);?> <?php echo htmlentities($result->VehiclesTitle);?></h2>
        <h3><?php echo htmlentities($result->Notes);?> </h3>
        <h3><?php echo htmlentities($result->Engine);?>cc</h3>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <?php if(
            $result->OldPrice=="")
            {

          } else {
          ?>price was <span class="oldprice-list">$<?php echo htmlentities($result->OldPrice);?> </span>   <?php } ?> <span class="price-list-details">$<?php echo htmlentities($result->PricePerDay);?> </span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5><?php echo htmlentities($result->FuelType);?></h5>
              <p>Fuel Type</p>
            </li>
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5><?php echo htmlentities($result->SeatingCapacity);?></h5>
              <p>Odometer</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                <p><?php echo ($result->VehiclesOverview);?></p>
              </div>
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories">
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Accessories</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php if($result->AirConditioner==1)
                      {
                      ?>
                      <td>Air Conditioner</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php } else { ?>
                      <?php } ?>
                      </tr>
   <tr>
     <?php if($result->GPS==1)
     {
     ?>
   <td>GPS</td>
   <td><i class="fa fa-check" aria-hidden="true"></i></td>
   <?php } else {?>
   <?php } ?>
   </tr>
   <tr>
     <?php if($result->Fourwd==1)
     {
     ?>
   <td>4WD</td>
   <td><i class="fa fa-check" aria-hidden="true"></i></td>
   <?php } else {?>
   <?php } ?>
   </tr>
   <tr>
     <?php if($result->Twowd==1)
     {
     ?>
   <td>2WD</td>
   <td><i class="fa fa-check" aria-hidden="true"></i></td>
   <?php } else {?>
   <?php } ?>
   </tr>
   <tr>
     <?php if($result->Alloys==1)
     {
     ?>
   <td>Alloys</td>
   <td><i class="fa fa-check" aria-hidden="true"></i></td>
   <?php } else {?>

   <?php } ?>
   </tr>

   <tr>
     <?php if($result->Camera==1)
     {
     ?>
   <td>Camera</td>
   <td><i class="fa fa-check" aria-hidden="true"></i></td>
   <?php } else {?>
   <?php } ?>
   </tr>

   <tr>
     <?php if($result->ParkingSensors==1)
     {
     ?>
   <td>Parking Sensors</td>
   <td><i class="fa fa-check" aria-hidden="true"></i></td>
   <?php } else {?>
   <?php } ?>
   </tr>

   <tr>
     <?php if($result->FogLights==1)
     {
     ?>
   <td>Fog Lights</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
   <?php } else {?>
   <?php } ?>
   </tr>

   <tr>
     <?php if($result->CruiseControl==1)
     {
     ?>
   <td>Cruise Control</td>
   <td><i class="fa fa-check" aria-hidden="true"></i></td>
   <?php } else {?>
   <?php } ?>
   </tr>

  <tr>
    <?php if($result->AntiLockBrakingSystem==1)
    {
    ?>
  <td>AntiLock Braking System</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else {?>
  <?php } ?>
  </tr>

  <tr>
    <?php if($result->PowerSteering==1)
    {
    ?>
  <td>Power Steering</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else { ?>
  <?php } ?>
  </tr>


  <tr>
    <?php if($result->PowerWindows==1)
    {
    ?>
  <td>Power Windows</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else { ?>
  <?php } ?>
  </tr>

   <tr>
     <?php if($result->CDPlayer==1)
     {
     ?>
  <td>CD Player</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else { ?>
  <?php } ?>
  </tr>

  <tr>
    <?php if($result->LeatherSeats==1)
    {
    ?>
  <td>Leather Seats</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else { ?>
  <?php } ?>
  </tr>

  <tr>
    <?php if($result->CentralLocking==1)
    {
    ?>
  <td>Central Locking</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else { ?>
  <?php } ?>
  </tr>

  <tr>
    <?php if($result->PowerDoorLocks==1)
    {
    ?>
  <td>Power Door Locks</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else { ?>
  <?php } ?>
                      </tr>
  <tr>
    <?php if($result->BrakeAssist==1)
    {
    ?>
  <td>Brake Assist</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php  } else { ?>
  <?php } ?>
  </tr>

  <tr>
    <?php if($result->DriverAirbag==1)
    {
    ?>
  <td>Driver Airbag</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else { ?>
  <?php } ?>
   </tr>
   <tr>
     <?php if($result->PassengerAirbag==1)
    {
    ?>
   <td>Passenger Airbag</td>
   <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else {?>
  <?php } ?>
  </tr>
  <tr>
    <?php if($result->CrashSensor==1)
    {
    ?>
  <td>Crash Sensor</td>
  <td><i class="fa fa-check" aria-hidden="true"></i></td>
  <?php } else { ?>
  <?php } ?>
  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
<?php }} ?>
      </div>
      <!--Side-Bar-->
      <aside class="col-md-3">
        <div class="share_vehicle">
          <div>Certified Low Mileage</div>
          <div>Mechanical Warranty</div>
          <div>Easy onSite Finance</div>
          <div>Low Finance Rate</div>
        </div>
        <div class="sharethis-inline-share-buttons"></div>
      </aside>
      <!--/Side-Bar-->
    </div>
    <div class="space-20"></div>
    <div class="divider"></div>
    <!--Similar-Cars-->
    <div class="similar_cars">
      <h3>Similar Cars</h3>
      <div class="row">
        <?php
        $bid=$_SESSION['brndid'];
        $sql="SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.OldPrice,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.Engine,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.VehiclesBrand=:bid LIMIT 4";
        $query = $dbh -> prepare($sql);
        $query->bindParam(':bid',$bid, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        { ?>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image" /> </a>
            </div>
            <div class="product-listing-content">
              <h5><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->ModelYear);?> <br> <?php echo htmlentities($result->BrandName);?>  <?php echo htmlentities($result->VehiclesTitle);?></a></h5>
              <?php if(
                $result->OldPrice=="")
                {

              } else {
              ?>price was <span class="oldprice-similar">$<?php echo htmlentities($result->OldPrice);?> </span>   <?php } ?> <span class="price-similar"> $<?php echo htmlentities($result->PricePerDay);?> </span>
              <ul class="features_list">
              <li><i class="fas fa-gas-pump"></i><?php echo htmlentities($result->FuelType);?></li>
             <li><i class="fas fa-road"></i><?php echo htmlentities($result->SeatingCapacity);?> kms</li>
              </ul>
            </div>
          </div>
        </div>
 <?php }} ?>
      </div>
    </div>
    <!--/Similar-Cars-->
  </div>
</section>
<!--/Listing-detail-->
<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
</body>
</html>
