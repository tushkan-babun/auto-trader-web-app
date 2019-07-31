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
<title> Auto Trader | Search</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
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

<!-- Fav and touch icons -->
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cfa35304351e9001264fa38&product=sticky-share-buttons' async='async'></script>
</head>
<body>


<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1> Search</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Search</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
<?php
//Query for Listing count
$brand=$_REQUEST['brand'];
$fueltype=$_REQUEST['fueltype'];
$vehiclebody=$_REQUEST['vehiclebody'];
$qry = "SELECT * FROM tblvehicles";
// if($brand == "")
// {
//   if($vehiclebody == "" && $fueltype == "")
//   $qry .= "tblvehicles.VehiclesBrand='$brand' and tblvehicles.VehiclesBody='$vehiclebody' and tblvehicles.FuelType='$fueltype'";
// }
if($brand != "" || $fueltype != "" || $vehiclebody != "")
  $qry .= " where ";
if($brand != "")
  $qry .= "tblvehicles.VehiclesBrand='$brand'";
if($fueltype != "")
{
  if($brand != "")
    $qry .= " and ";
  $qry .= "tblvehicles.FuelType='$fueltype'";
}

if($vehiclebody != "")
{
  if($brand != "" || $fueltype != "")
    $qry .= " and ";
  $qry .= "tblvehicles.VehiclesBody='$vehiclebody'";
}
$query = $dbh -> prepare($qry);

$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
?>
<p><span><?php echo htmlentities($cnt);?> Listings</span></p>
</div>
</div>

<?php

$brand=$_REQUEST['brand'];
$fueltype=$_REQUEST['fueltype'];
$vehiclebody=$_REQUEST['vehiclebody'];
$qry = "SELECT * FROM tblvehicles";
if($brand != "" || $fueltype != "" || $vehiclebody != "")
  $qry .= " where ";
if($brand != "")
  $qry .= "tblvehicles.VehiclesBrand='$brand'";
if($fueltype != "")
{
  if($brand != "")
    $qry .= " and ";
  $qry .= "tblvehicles.FuelType='$fueltype'";
}

if($vehiclebody != "")
{
  if($brand != "" || $fueltype != "")
    $qry .= " and ";
  $qry .= "tblvehicles.VehiclesBody='$vehiclebody'";
}
$query = $dbh -> prepare($qry);

$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>
  <div class="product-listing-m gray-bg">
    <div class="product-listing-img"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="Image" /> </a>
    </div>
    <div class="product-listing-content">
      <h5><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->ModelYear);?> <br> <?php echo htmlentities($result->BrandName);?>  <?php echo htmlentities($result->VehiclesTitle);?></a></h5>
      <h6 class="notes"><?php echo htmlentities($result->Notes);?></h6>
      <?php if(
        $result->OldPrice=="")
        {

      } else {
      ?>price was <span class="oldprice-list">$<?php echo htmlentities($result->OldPrice);?> </span>   <?php } ?> <span class="price-list">$<?php echo htmlentities($result->PricePerDay);?> </span>
      <ul>
        <li><i class="fas fa-road"></i><?php echo htmlentities($result->SeatingCapacity);?> kms</li>
        <li><i class="fas fa-gas-pump"></i><?php echo htmlentities($result->FuelType);?></li>
        <li>
          <?php if(
          $result->Engine=="")
          {

        } else {
        ?><span class="enginecc"><i class="fas fa-car"></i><?php echo htmlentities($result->Engine);?>cc </span>   <?php } ?>
      </li>
      </ul>
      <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
    </div>
  </div>
      <?php }} ?>
         </div>

      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Car </h5>
          </div>
          <div class="sidebar_filter">
          <form action="search-carresult.php" method="post">
              <div class="form-group select">
              <select class="form-control" name="brand">
              <option value="">Any Make</option>

                  <?php $sql = "SELECT * from  tblbrands ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{       ?>
<option value="<?php echo htmlentities($result->id);?>" <?php echo ($brand == $result->id?"selected":""); ?>><?php echo htmlentities($result->BrandName);?></option>
<?php }} ?>

                </select>
              </div>
              <div class="form-group select">
              <select class="form-control" name="vehiclebody">
              <option value=""> Any Vehicle Body</option>
<option value="Hatchback" <?php echo ($vehiclebody == "Hatchback"?"selected":""); ?>>Hatchback</option>
<option value="Sedan" <?php echo ($vehiclebody == "Sedan"?"selected":""); ?>>Sedan</option>
<option value="SUV" <?php echo ($vehiclebody == "SUV"?"selected":""); ?>>SUV</option>
<option value="Wagon" <?php echo ($vehiclebody == "Wagon"?"selected":""); ?>>Wagon</option>
                </select>
              </div>
              <div class="form-group select">
              <select class="form-control" name="fueltype">
              <option value=""> Any Fuel Type</option>
<option value="Petrol" <?php echo ($fueltype == "Petrol"?"selected":""); ?>>Petrol</option>
<option value="Diesel" <?php echo ($fueltype == "Diesel"?"selected":""); ?>>Diesel</option>
<option value="EV" <?php echo ($fueltype == "EV"?"selected":""); ?>>EV</option>
<option value="Hybrid" <?php echo ($fueltype == "Hybrid"?"selected":""); ?>>Hybrid</option>
                </select>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
              </div>
            </form>
          </div>
        </div>

        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
<?php $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand order by id desc limit 4";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>

              <li class="gray-bg">
                <div class="recent_post_img"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> <?php echo htmlentities($result->VehiclesTitle);?></a>
                  <p class="widget_price">$<?php echo htmlentities($result->PricePerDay);?> </p>
                </div>
              </li>
              <?php }} ?>

            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar-->
    </div>
  </div>
  <div class="sharethis-inline-share-buttons"></div>

</section>
<!-- /Listing-->

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top-->


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
