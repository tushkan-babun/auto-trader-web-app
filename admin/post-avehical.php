<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{
header('location:index.php');
}
else{
if(isset($_POST['submit']))
  {
$vehicletitle=$_POST['vehicletitle'];
$brand=$_POST['brandname'];
$vehiclesoverview=$_POST['vehiclesoverview'];
$vehiclebody=$_POST['vehiclebody'];
$priceperday=$_POST['priceperday'];
$oldprice=$_POST['oldprice'];
$fueltype=$_POST['fueltype'];
$engine=$_POST['engine'];
$modelyear=$_POST['modelyear'];
$seatingcapacity=$_POST['seatingcapacity'];
$strtotime = strtotime("now");
$six_digit_random_number = mt_rand(100000, 999999);
$vimage1=$strtotime.'_'.$six_digit_random_number.'_img1_'.$_FILES['img1']['name'];
$vimage2=$strtotime.'_'.$six_digit_random_number.'_img2_'.$_FILES["img2"]["name"];
$vimage3=$strtotime.'_'.$six_digit_random_number.'_img3_'.$_FILES["img3"]["name"];
$vimage4=$strtotime.'_'.$six_digit_random_number.'_img4_'.$_FILES["img4"]["name"];
$vimage5=$strtotime.'_'.$six_digit_random_number.'_img5_'.$_FILES["img5"]["name"];
$vimage6=$strtotime.'_'.$six_digit_random_number.'_img6_'.$_FILES["img6"]["name"];
$vimage7=$strtotime.'_'.$six_digit_random_number.'_img7_'.$_FILES["img7"]["name"];
$vimage8=$strtotime.'_'.$six_digit_random_number.'_img8_'.$_FILES["img8"]["name"];
$vimage9=$strtotime.'_'.$six_digit_random_number.'_img9_'.$_FILES["img9"]["name"];
$vimage10=$strtotime.'_'.$six_digit_random_number.'_img10_'.$_FILES["img10"]["name"];
$vimage11=$strtotime.'_'.$six_digit_random_number.'_img11_'.$_FILES["img11"]["name"];
$vimage12=$strtotime.'_'.$six_digit_random_number.'_img12_'.$_FILES["img12"]["name"];
$vimage13=$strtotime.'_'.$six_digit_random_number.'_img13_'.$_FILES["img13"]["name"];
$vimage14=$strtotime.'_'.$six_digit_random_number.'_img14_'.$_FILES["img14"]["name"];
$vimage15=$strtotime.'_'.$six_digit_random_number.'_img15_'.$_FILES["img15"]["name"];
$vimage16=$strtotime.'_'.$six_digit_random_number.'_img16_'.$_FILES["img16"]["name"];
$vimage17=$strtotime.'_'.$six_digit_random_number.'_img17_'.$_FILES["img17"]["name"];
$vimage18=$strtotime.'_'.$six_digit_random_number.'_img18_'.$_FILES["img18"]["name"];
$vimage19=$strtotime.'_'.$six_digit_random_number.'_img19_'.$_FILES["img19"]["name"];
$vimage20=$strtotime.'_'.$six_digit_random_number.'_img20_'.$_FILES["img20"]["name"];
$airconditioner=$_POST['airconditioner'];
$powerdoorlocks=$_POST['powerdoorlocks'];
$antilockbrakingsys=$_POST['antilockbrakingsys'];
$brakeassist=$_POST['brakeassist'];
$powersteering=$_POST['powersteering'];
$driverairbag=$_POST['driverairbag'];
$passengerairbag=$_POST['passengerairbag'];
$powerwindow=$_POST['powerwindow'];
$cdplayer=$_POST['cdplayer'];
$centrallocking=$_POST['centrallocking'];
$crashcensor=$_POST['crashcensor'];
$leatherseats=$_POST['leatherseats'];
$fourwd=$_POST['fourwd'];
$twowd=$_POST['twowd'];
$gps=$_POST['gps'];
$alloys=$_POST['alloys'];
$camera=$_POST['camera'];
$parkingsensors=$_POST['parkingsensors'];
$foglights=$_POST['foglights'];
$cruisecontrol=$_POST['cruisecontrol'];
$notes=$_POST['notes'];

move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img1_'.$_FILES['img1']['name']);
move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img2_'.$_FILES["img2"]["name"]);
move_uploaded_file($_FILES["img3"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img3_'.$_FILES["img3"]["name"]);
move_uploaded_file($_FILES["img4"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img4_'.$_FILES["img4"]["name"]);
move_uploaded_file($_FILES["img5"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img5_'.$_FILES["img5"]["name"]);
move_uploaded_file($_FILES["img6"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img6_'.$_FILES["img6"]["name"]);
move_uploaded_file($_FILES["img7"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img7_'.$_FILES["img7"]["name"]);
move_uploaded_file($_FILES["img8"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img8_'.$_FILES["img8"]["name"]);
move_uploaded_file($_FILES["img9"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img9_'.$_FILES["img9"]["name"]);
move_uploaded_file($_FILES["img10"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img10_'.$_FILES["img10"]["name"]);
move_uploaded_file($_FILES["img11"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img11_'.$_FILES["img11"]["name"]);
move_uploaded_file($_FILES["img12"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img12_'.$_FILES["img12"]["name"]);
move_uploaded_file($_FILES["img13"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img13_'.$_FILES["img13"]["name"]);
move_uploaded_file($_FILES["img14"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img14_'.$_FILES["img14"]["name"]);
move_uploaded_file($_FILES["img15"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img15_'.$_FILES["img15"]["name"]);
move_uploaded_file($_FILES["img16"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img16_'.$_FILES["img16"]["name"]);
move_uploaded_file($_FILES["img17"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img17_'.$_FILES["img17"]["name"]);
move_uploaded_file($_FILES["img18"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img18_'.$_FILES["img18"]["name"]);
move_uploaded_file($_FILES["img19"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img19_'.$_FILES["img19"]["name"]);
move_uploaded_file($_FILES["img20"]["tmp_name"],"img/vehicleimages/".$strtotime.'_'.$six_digit_random_number.'_img20_'.$_FILES["img20"]["name"]);
$sql="INSERT INTO tblvehicles(VehiclesTitle,VehiclesBrand,VehiclesOverview,VehiclesBody,PricePerDay,OldPrice,FuelType,Engine,ModelYear,SeatingCapacity,Vimage1,
	Vimage2,Vimage3,Vimage4,Vimage5,Vimage6,Vimage7,Vimage8,Vimage9,Vimage10,Vimage11,Vimage12,Vimage13,Vimage14,Vimage15,Vimage16,Vimage17,Vimage18,Vimage19,Vimage20,
	AirConditioner,PowerDoorLocks,AntiLockBrakingSystem,BrakeAssist,PowerSteering,DriverAirbag,PassengerAirbag,PowerWindows,CDPlayer,CentralLocking,CrashSensor,
	LeatherSeats,Fourwd,Twowd,GPS,Alloys,Camera,ParkingSensors,FogLights,CruiseControl,Notes) VALUES(:vehicletitle,:brand,:vehiclesoverview,:vehiclebody,:priceperday,
		:oldprice,:fueltype,:engine,:modelyear,:seatingcapacity,:vimage1,:vimage2,:vimage3,
		:vimage4,:vimage5,:vimage6,:vimage7,:vimage8,:vimage9,:vimage10,:vimage11,:vimage12,:vimage13,:vimage14,:vimage15,:vimage16,:vimage17,:vimage18,:vimage19,:vimage20,
		:airconditioner,:powerdoorlocks,:antilockbrakingsys,:brakeassist,:powersteering,:driverairbag,:passengerairbag,:powerwindow,:cdplayer,:centrallocking,:crashcensor,
		:leatherseats,:fourwd,:twowd,:gps,:alloys,:camera,:parkingsensors,:foglights,:cruisecontrol,:notes)";
$query = $dbh->prepare($sql);
$query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
$query->bindParam(':brand',$brand,PDO::PARAM_STR);
$query->bindParam(':vehiclesoverview',$vehiclesoverview,PDO::PARAM_STR);
$query->bindParam(':vehiclebody',$vehiclebody,PDO::PARAM_STR);
$query->bindParam(':priceperday',$priceperday,PDO::PARAM_STR);
$query->bindParam(':oldprice',$oldprice,PDO::PARAM_STR);
$query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
$query->bindParam(':engine',$engine,PDO::PARAM_STR);
$query->bindParam(':modelyear',$modelyear,PDO::PARAM_STR);
$query->bindParam(':seatingcapacity',$seatingcapacity,PDO::PARAM_STR);
$query->bindParam(':vimage1',$vimage1,PDO::PARAM_STR);
$query->bindParam(':vimage2',$vimage2,PDO::PARAM_STR);
$query->bindParam(':vimage3',$vimage3,PDO::PARAM_STR);
$query->bindParam(':vimage4',$vimage4,PDO::PARAM_STR);
$query->bindParam(':vimage5',$vimage5,PDO::PARAM_STR);
$query->bindParam(':vimage6',$vimage6,PDO::PARAM_STR);
$query->bindParam(':vimage7',$vimage7,PDO::PARAM_STR);
$query->bindParam(':vimage8',$vimage8,PDO::PARAM_STR);
$query->bindParam(':vimage9',$vimage9,PDO::PARAM_STR);
$query->bindParam(':vimage10',$vimage10,PDO::PARAM_STR);
$query->bindParam(':vimage11',$vimage11,PDO::PARAM_STR);
$query->bindParam(':vimage12',$vimage12,PDO::PARAM_STR);
$query->bindParam(':vimage13',$vimage13,PDO::PARAM_STR);
$query->bindParam(':vimage14',$vimage14,PDO::PARAM_STR);
$query->bindParam(':vimage15',$vimage15,PDO::PARAM_STR);
$query->bindParam(':vimage16',$vimage16,PDO::PARAM_STR);
$query->bindParam(':vimage17',$vimage17,PDO::PARAM_STR);
$query->bindParam(':vimage18',$vimage18,PDO::PARAM_STR);
$query->bindParam(':vimage19',$vimage19,PDO::PARAM_STR);
$query->bindParam(':vimage20',$vimage20,PDO::PARAM_STR);
$query->bindParam(':airconditioner',$airconditioner,PDO::PARAM_STR);
$query->bindParam(':powerdoorlocks',$powerdoorlocks,PDO::PARAM_STR);
$query->bindParam(':antilockbrakingsys',$antilockbrakingsys,PDO::PARAM_STR);
$query->bindParam(':brakeassist',$brakeassist,PDO::PARAM_STR);
$query->bindParam(':powersteering',$powersteering,PDO::PARAM_STR);
$query->bindParam(':driverairbag',$driverairbag,PDO::PARAM_STR);
$query->bindParam(':passengerairbag',$passengerairbag,PDO::PARAM_STR);
$query->bindParam(':powerwindow',$powerwindow,PDO::PARAM_STR);
$query->bindParam(':cdplayer',$cdplayer,PDO::PARAM_STR);
$query->bindParam(':centrallocking',$centrallocking,PDO::PARAM_STR);
$query->bindParam(':crashcensor',$crashcensor,PDO::PARAM_STR);
$query->bindParam(':leatherseats',$leatherseats,PDO::PARAM_STR);
$query->bindParam(':fourwd',$fourwd,PDO::PARAM_STR);
$query->bindParam(':twowd',$twowd,PDO::PARAM_STR);
$query->bindParam(':gps',$gps,PDO::PARAM_STR);
$query->bindParam(':alloys',$alloys,PDO::PARAM_STR);
$query->bindParam(':camera',$camera,PDO::PARAM_STR);
$query->bindParam(':parkingsensors',$parkingsensors,PDO::PARAM_STR);
$query->bindParam(':foglights',$foglights,PDO::PARAM_STR);
$query->bindParam(':cruisecontrol',$cruisecontrol,PDO::PARAM_STR);
$query->bindParam(':notes',$notes,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Vehicle posted successfully";
}
else
{
$error="Something went wrong. Please try again";
}

}
	?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title> Auto Trader | Admin Post Vehicle</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="nicEdit.js"></script>
	<script type="text/javascript">
		bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	</script>
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Post A Vehicle</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="vehicletitle" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Make<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="brandname" required>
<option value=""> Select </option>
<?php $ret="select id,BrandName from tblbrands";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?></option>
<?php }} ?>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Old Price (in $)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="oldprice" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Body Type</label>
<div class="col-sm-4">
<select class="selectpicker" name="vehiclebody">
<option value=""> Select </option>
<option value="SUV">SUV</option>
<option value="Sedan">Sedan</option>
<option value="Hatchback">Hatchback</option>
<option value="Wagon">Wagon</option>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Price (in $)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="priceperday" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="fueltype" required>
<option value=""> Select </option>
<option value="Petrol">Petrol</option>
<option value="Diesel">Diesel</option>
<option value="EV">EV</option>
<option value="Hybrid">Hybrid</option>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Model Year<br><p class="comments">*YYYY</p></label>
<div class="col-sm-4">
<input type="text" name="modelyear" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Odometer<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="seatingcapacity" class="form-control" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"> Engine Size <br><p class="comments">*in cc</p></label>
<div class="col-sm-4">
<input type="text" name="engine" class="form-control" required>
</div>
<label class="col-sm-2 control-label"> Notes <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="notes" class="form-control" required>
</div>
</div>
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label"><p>Vehical Overview</p><br><p class="comments">*any edited text,<br>pictures are allowed</p></label>
<div class="col-sm-10">
<textarea class="form-control" name="vehiclesoverview" rows="10" id="area"></textarea>
</div>
</div>
<div class="hr-dashed"></div>
<div class="form-group">
<div class="col-sm-3">
<h4><b>Upload Car Images</b></h4>
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
Front Picture<input type="file" name="img1" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 2<input type="file" name="img2" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 3<input type="file" name="img3" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 4<input type="file" name="img4" class="custom-file-input">
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
Image 5<input type="file" name="img5" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 6<input type="file" name="img6" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 7<input type="file" name="img7" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 8<input type="file" name="img8" class="custom-file-input">
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
Image 9<input type="file" name="img9" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 10<input type="file" name="img10" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 11<input type="file" name="img11" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 12<input type="file" name="img12" class="custom-file-input">
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
Image 13<input type="file" name="img13" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 14<input type="file" name="img14" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 15<input type="file" name="img15" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 16<input type="file" name="img16" class="custom-file-input">
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
Image 17<input type="file" name="img17" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 18<input type="file" name="img18" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 19<input type="file" name="img19" class="custom-file-input">
</div>
<div class="col-sm-3">
Image 20<input type="file" name="img20" class="custom-file-input">
</div>
</div>
<div class="hr-dashed"></div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Accessories</div>
<div class="panel-body">
<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="airconditioner" name="airconditioner" value="1">
<label for="airconditioner"> Air Conditioner </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
<label for="powerdoorlocks"> Power Door Locks </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
<label for="antilockbrakingsys"> AntiLock Braking System </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="brakeassist" name="brakeassist" value="1">
<label for="brakeassist"> Brake Assist </label>
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powersteering" name="powersteering" value="1">
<label for="powersteering"> Power Steering </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="driverairbag" name="driverairbag" value="1">
<label for="driverairbag">Driver Airbag</label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
<label for="passengerairbag"> Passenger Airbag </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerwindow" name="powerwindow" value="1">
<label for="powerwindow"> Power Windows </label>
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="cdplayer" name="cdplayer" value="1">
<label for="cdplayer"> CD Player </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox h checkbox-inline">
<input type="checkbox" id="centrallocking" name="centrallocking" value="1">
<label for="centrallocking">Central Locking</label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="crashcensor" name="crashcensor" value="1">
<label for="crashcensor"> Crash Sensor </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="leatherseats" name="leatherseats" value="1">
<label for="leatherseats"> Leather Seats </label>
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="fourwd" name="fourwd" value="1">
<label for="fourwd"> 4WD </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox h checkbox-inline">
<input type="checkbox" id="twowd" name="twowd" value="1">
<label for="twowd"> 2WD </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="gps" name="gps" value="1">
<label for="gps"> GPS </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="alloys" name="alloys" value="1">
<label for="alloys"> Alloys </label>
</div>
</div>
<div class="form-group">
	<div class="col-sm-3">
	<div class="checkbox checkbox-inline">
	<input type="checkbox" id="camera" name="camera" value="1">
	<label for="camera"> Camera </label>
	</div>
	</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="parkingsensors" name="parkingsensors" value="1">
<label for="parkingsensors"> Parking Sensors </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox h checkbox-inline">
<input type="checkbox" id="foglights" name="foglights" value="1">
<label for="foglights"> Fog Lights </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="cruisecontrol" name="cruisecontrol" value="1">
<label for="cruisecontrol"> Cruise Control </label>
</div>
</div>

<div class="hr-dashed"></div>
</div>
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>
