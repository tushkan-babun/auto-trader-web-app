<!--
# Site developed by: Aleksei Petukhov
# e-mail: akl02102264269@gmail.com
# page: tushkan-babun.github.io
-->
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
<meta name="keywords" content="quality japanese cars buy for sale christchurch nz new zealand used import cheap cheapest">
<meta name="description" content="Quality Japanese Cars for Sale in Christchurch, New Zealand. Imported directly from Japan. Warranty and Finance.">
<title>Quality Cars for Sale | Auto Trader </title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/3b656fb8da.js"></script>
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->
<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
          <h1>Find the right car for you.</h1>
            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
            <a href="car-listing.php" class="btn">Car Listing <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners -->
<!-- Featured Cars-->
<section class="section-padding gray-bg">
  <div class="container">
      <div class="listing_images_slider" style="text-align: center; font-size: 28px;">
              <div>Certified Low Mileage</div>
              <div>Mechanical Warranty</div>
              <div>Easy onSite Finance</div>
              <div>Low Finance Rate</div>
      </div>
      <div class="row">
      <div class="filter main" id="filter_form">
      <form action="search-carresult.php" method="post">
          <div class="form-group select col-md-3">
          <select class="form-control-landing select" name="brand">
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
          <div class="form-group select col-md-3">
          <select class="form-control-landing select" name="vehiclebody">
          <option value=""> Any Vehicle Body</option>
            <option value="Hatchback" <?php echo ($vehiclebody == "Hatchback"?"selected":""); ?>>Hatchback</option>
            <option value="Sedan" <?php echo ($vehiclebody == "Sedan"?"selected":""); ?>>Sedan</option>
            <option value="SUV" <?php echo ($vehiclebody == "SUV"?"selected":""); ?>>SUV</option>
            <option value="Wagon" <?php echo ($vehiclebody == "Wagon"?"selected":""); ?>>Wagon</option>
            </select>
          </div>
          <div class="form-group select col-md-3">
          <select class="form-control-landing select" name="fueltype">
          <option value=""> Any Fuel Type</option>
<option value="Petrol" <?php echo ($fueltype == "Petrol"?"selected":""); ?>>Petrol</option>
<option value="Diesel" <?php echo ($fueltype == "Diesel"?"selected":""); ?>>Diesel</option>
<option value="EV" <?php echo ($fueltype == "EV"?"selected":""); ?>>EV</option>
<option value="Hybrid" <?php echo ($fueltype == "Hybrid"?"selected":""); ?>>Hybrid</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Find a Car</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Featured Cars</a></li>
        </ul>
      </div>
      <!-- Recently Listed Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">
            <?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.OldPrice,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.Engine,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1,tblvehicles.Notes,tblvehicles.LandingPage from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.LandingPage=1 LIMIT 12";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $results = (array)$results;
            shuffle($results);
            $results = (object)$results;
            $cnt=1;
            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {?>
              <div class="col-list-3">
              <div class="recent-car-list">
              <div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>">
                  <img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a></div>
                  <div class="car-title-m">
                  <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->ModelYear);?> <?php echo htmlentities($result->BrandName);?> <?php echo htmlentities($result->VehiclesTitle);?> <br> <?php echo htmlentities($result->Notes);?> </a></h6>

              <?php if(
                $result->OldPrice=="")
                {

              } else {
              ?>price was <span class="oldprice">$<?php echo htmlentities($result->OldPrice);?> </span>   <?php } ?> <span class="price">$<?php echo htmlentities($result->PricePerDay);?> </span>
              </div>
                      <div class="inventory_info_m">
                      <div class="fueltype">
                      <p><i class="fas fa-gas-pump"></i> <?php echo htmlentities($result->FuelType);?></p>
                      </div>
                      <div class="mileage">
                      <p><i class="fas fa-road"></i> <?php echo htmlentities($result->SeatingCapacity);?> kms</p>
                      </div>
                      <div class="engine">
                      <p><i class="fas fa-car"></i> <?php echo htmlentities($result->Engine);?> cc</p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }}?>
            </div>
          </div>
        </div>
      <div class="allcarslisting">
    <a href="car-listing.php" class="btn">Watch All Cars<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
  </div>
</div>
</section>
<!-- /Resent Cat -->
<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>10+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>50+</h2>
            <p>Cars For Sale</p>
          </div>
        </div>
      </div>
			<div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
            <p>Cars Sold</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fas fa-users" aria-hidden="true"></i><br>1000+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts-->
<!--Extra area -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2> Drive Your Dream Car Home Today</h2>
    </div>
    <div class="row">
      <div id="brands" class="white-text">
        <?php
        $sql = "SELECT tblbrands.BrandName from tblbrands";
        $query = $dbh -> prepare($sql);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {  ?>
      <div class="col-md-2 col-xs-4 col-sm-4">
        <p><?php echo htmlentities($result->BrandName);?></p>
      </div>
        <?php }} ?>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!--Footer -->
<?php include('includes/footer.php');?>
<!-- Footer-->

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top-->
<!-- Scripts -->
<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.listing_images_slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true
      });
    });
  </script>
</body>
</html>
