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
		$vehicleoverview=$_POST['vehicalorcview'];
		$vehiclebody=$_POST['vehiclebody'];
		$priceperday=$_POST['priceperday'];
		$oldprice=$_POST['oldprice'];
		$fueltype=$_POST['fueltype'];
		$engine=$_POST['engine'];
		$modelyear=$_POST['modelyear'];
		$seatingcapacity=$_POST['seatingcapacity'];
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
		$landing=$_POST['landing'];
$id=intval($_GET['id']);
$sql="update tblvehicles set VehiclesTitle=:vehicletitle,VehiclesBrand=:brand,VehiclesOverview=:vehicleoverview,VehiclesBody=:vehiclebody,PricePerDay=:priceperday,OldPrice=:oldprice,FuelType=:fueltype,Engine=:engine,ModelYear=:modelyear,SeatingCapacity=:seatingcapacity,AirConditioner=:airconditioner,PowerDoorLocks=:powerdoorlocks,AntiLockBrakingSystem=:antilockbrakingsys,BrakeAssist=:brakeassist,PowerSteering=:powersteering,DriverAirbag=:driverairbag,PassengerAirbag=:passengerairbag,PowerWindows=:powerwindow,CDPlayer=:cdplayer,CentralLocking=:centrallocking,CrashSensor=:crashcensor,LeatherSeats=:leatherseats,Fourwd=:fourwd,Twowd=:twowd,GPS=:gps,Alloys=:alloys,Camera=:camera,ParkingSensors=:parkingsensors,FogLights=:foglights,CruiseControl=:cruisecontrol,Notes=:notes,LandingPage=:landing where id=:id ";
$query = $dbh->prepare($sql);
$query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
$query->bindParam(':brand',$brand,PDO::PARAM_STR);
$query->bindParam(':vehicleoverview',$vehicleoverview,PDO::PARAM_STR);
$query->bindParam(':vehiclebody',$vehiclebody,PDO::PARAM_STR);
$query->bindParam(':priceperday',$priceperday,PDO::PARAM_STR);
$query->bindParam(':oldprice',$oldprice,PDO::PARAM_STR);
$query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
$query->bindParam(':engine',$engine,PDO::PARAM_STR);
$query->bindParam(':modelyear',$modelyear,PDO::PARAM_STR);
$query->bindParam(':seatingcapacity',$seatingcapacity,PDO::PARAM_STR);
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
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->bindParam(':landing',$landing,PDO::PARAM_STR);
$query->execute();
$msg="Data updated successfully";
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
	<title> Auto Trader | Admin Edit Vehicle Info</title>
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
	<link rel="stylesheet" href="css/fileinput.min.css">
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
						<h2 class="page-title">Edit Vehicle</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
									<div class="panel-body">
<?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
<?php
$id=intval($_GET['id']);
$sql ="SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id=:id";
$query = $dbh -> prepare($sql);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="vehicletitle" class="form-control" value="<?php echo htmlentities($result->VehiclesTitle)?>" required>
</div>
<label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="brandname" required>
<option value="<?php echo htmlentities($result->bid);?>"><?php echo htmlentities($bdname=$result->BrandName); ?> </option>
<?php $ret="select id,BrandName from tblbrands";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$resultss = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($resultss as $results)
{
if($results->BrandName==$bdname)
{
continue;
} else{
?>
<option value="<?php echo htmlentities($results->id);?>"><?php echo htmlentities($results->BrandName);?></option>
<?php }}} ?>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Old Price (in NZD)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="oldprice" class="form-control" value="<?php echo htmlentities($result->OldPrice);?>" required>
</div>
<label class="col-sm-2 control-label">Select Body Type<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="vehiclebody">
	<option value="<?php echo htmlentities($result->VehiclesBody);?>"><?php echo htmlentities($vehiclebody=$result->VehiclesBody); ?> </option>
	<?php if($results->VehiclesBody==$vehiclebody)
	{
	continue;
	} else{
	?>
	<option value="SUV">SUV</option>
<option value="Sedan">Sedan</option>
<option value="Hatchback">Hatchback</option>
<option value="Wagon">Wagon</option>
	<?php } ?>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Price (in NZD)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="priceperday" class="form-control" value="<?php echo htmlentities($result->PricePerDay);?>" required>
</div>
<label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="fueltype">
	<option value="<?php echo htmlentities($result->FuelType);?>"><?php echo htmlentities($fueltype=$result->FuelType); ?> </option>
	<?php	if($results->FuelType==$fueltype)
	{
	continue;
	} else{
	?>
	<option value="Petrol">Petrol</option>
	<option value="Diesel">Diesel</option>
	<option value="EV">EV</option>
	<option value="Hybrid">Hybrid</option>
	<?php } ?>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Model Year</label>
<div class="col-sm-4">
<input type="text" name="modelyear" class="form-control" value="<?php echo htmlentities($result->ModelYear);?>">
</div>
<label class="col-sm-2 control-label">Odometer<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="seatingcapacity" class="form-control" value="<?php echo htmlentities($result->SeatingCapacity);?>" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"> Engine Size <br><p class="comments">*in cc</p></label>
<div class="col-sm-4">
<input type="text" name="engine" class="form-control" value="<?php echo htmlentities($result->Engine);?>">
</div>
<label class="col-sm-2 control-label"> Notes <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="notes" class="form-control" value="<?php echo htmlentities($result->Notes);?>" required>
</div>
</div>
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Vehical Overview<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="vehicalorcview" rows="3"><?php echo htmlentities($result->VehiclesOverview);?></textarea>
</div>
</div>
<div class="hr-dashed"></div>
<div class="form-group">
<div class="col-sm-12">
<h4><b>Vehicle Images</b></h4>
</div>
</div>
<div class="form-group">
<div class="col-sm-4">
Image 1 <img src="img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage1.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 1</a><br>
<a href="changeimage1.php?imgid=<?php echo htmlentities($result->id)?>">Delete Image 1</a>
</div>
<div class="col-sm-4">
Image 2<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage2);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage2.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 2</a>
</div>
<div class="col-sm-4">
Image 3<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage3);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage3.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 3</a>
</div>
</div>
<div class="form-group">
<div class="col-sm-4">
Image 4<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage4);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage4.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 4</a>
</div>
<div class="col-sm-4">
Image 5
<?php if($result->Vimage5=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage5);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage5.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 5</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 6
<?php if($result->Vimage6=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage6);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage6.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 6</a>
<?php } ?>
</div>
</div>
<div class="form-group">
<div class="col-sm-4">
Image 7
<?php if($result->Vimage7=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage7);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage7.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 7</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 8
<?php if($result->Vimage8=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage8);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage8.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 8</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 9
<?php if($result->Vimage9=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage9);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage9.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 9</a>
<?php } ?>
</div>
</div>
<div class="form-group">
<div class="col-sm-4">
Image 10
<?php if($result->Vimage10=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage10);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage10.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 10</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 11
<?php if($result->Vimage11=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage11);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage11.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 11</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 12
<?php if($result->Vimage12=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage12);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage12.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 12</a>
<?php } ?>
</div>
</div>
<div class="form-group">
<div class="col-sm-4">
Image 13
<?php if($result->Vimage13=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage13);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage13.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 13</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 14
<?php if($result->Vimage14=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage14);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage14.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 14</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 15
<?php if($result->Vimage15=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage15);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage15.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 15</a>
<?php } ?>
</div>
</div>
<div class="form-group">
<div class="col-sm-4">
Image 16
<?php if($result->Vimage16=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage16);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage16.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 16</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 17
<?php if($result->Vimage17=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage17);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage17.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 17</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 18
<?php if($result->Vimage18=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage18);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage18.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 18</a>
<?php } ?>
</div>
</div>
<div class="form-group">
<div class="col-sm-4">
Image 19
<?php if($result->Vimage19=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage19);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage19.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 19</a>
<?php } ?>
</div>
<div class="col-sm-4">
Image 20
<?php if($result->Vimage20=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage20);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage20.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 20</a>
<?php } ?>
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
<?php if($result->AirConditioner==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="airconditioner" checked value="1">
<label for="inlineCheckbox1"> Air Conditioner </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="airconditioner" value="1">
<label for="inlineCheckbox1"> Air Conditioner </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->PowerDoorLocks==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="powerdoorlocks" checked value="1">
<label for="inlineCheckbox2"> Power Door Locks </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-success checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="powerdoorlocks" value="1">
<label for="inlineCheckbox2"> Power Door Locks </label>
</div>
<?php }?>
</div>
<div class="col-sm-3">
<?php if($result->AntiLockBrakingSystem==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="antilockbrakingsys" checked value="1">
<label for="inlineCheckbox3"> AntiLock Braking System </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="antilockbrakingsys" value="1">
<label for="inlineCheckbox3"> AntiLock Braking System </label>
</div>
<?php } ?>
</div>
<?php if($result->BrakeAssist==1)
{
	?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="brakeassist" checked value="1">
<label for="inlineCheckbox4"> Brake Assist </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="brakeassist" value="1">
<label  for="inlineCheckbox4"> Brake Assist </label>
</div>
<?php } ?>
</div>
<div class="form-group">
	<div class="col-sm-3">
<?php if($result->PowerSteering==1)
{
	?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="powersteering" checked value="1">
<label for="inlineCheckbox1"> Power Steering </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="powersteering" value="1">
<label for="inlineCheckbox1"> Power Steering </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->DriverAirbag==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="driverairbag" checked value="1">
<label for="inlineCheckbox2">Driver Airbag</label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="driverairbag" value="1">
<label for="inlineCheckbox2">Driver Airbag</label>
<?php } ?>
</div>
</div>
<div class="col-sm-3">
<?php if($result->DriverAirbag==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="passengerairbag" checked value="1">
<label for="inlineCheckbox3"> Passenger Airbag </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="passengerairbag" value="1">
<label for="inlineCheckbox3"> Passenger Airbag </label>
</div>
<?php } ?>
</div>
<?php if($result->PowerWindows==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="powerwindow" checked value="1">
<label for="inlineCheckbox4"> Power Windows </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="powerwindow" value="1">
<label for="inlineCheckbox4"> Power Windows </label>
</div>
<?php } ?>
</div>
<div class="form-group">
<div class="col-sm-3">
<?php if($result->CDPlayer==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="cdplayer" checked value="1">
<label for="inlineCheckbox1"> CD Player </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="cdplayer" value="1">
<label for="inlineCheckbox1"> CD Player </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->CentralLocking==1)
{
?>
<div class="checkbox  checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="centrallocking" checked value="1">
<label for="inlineCheckbox2">Central Locking</label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-success checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="centrallocking" value="1">
<label for="inlineCheckbox2">Central Locking</label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->CrashSensor==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="crashcensor" checked value="1">
<label for="inlineCheckbox3"> Crash Sensor </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="crashcensor" value="1">
<label for="inlineCheckbox3"> Crash Sensor </label>
</div>
<?php } ?>
</div>
<?php if($result->CrashSensor==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="leatherseats" checked value="1">
<label for="inlineCheckbox4"> Leather Seats </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="leatherseats" value="1">
<label for="inlineCheckbox4"> Leather Seats </label>
</div>
<?php } ?>
</div>
<div class="form-group">
<div class="col-sm-3">
<?php if($result->Fourwd==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="fourwd" checked value="1">
<label for="inlineCheckbox1"> 4WD </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="fourwd" value="1">
<label for="inlineCheckbox1"> 4WD </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->Twowd==1)
{
?>
<div class="checkbox  checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="twowd" checked value="1">
<label for="inlineCheckbox2"> 2WD </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-success checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="twowd" value="1">
<label for="inlineCheckbox2"> 2WD </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->GPS==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="gps" checked value="1">
<label for="inlineCheckbox3"> GPS </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="gps" value="1">
<label for="inlineCheckbox3"> GPS </label>
</div>
<?php } ?>
</div>
<?php if($result->Alloys==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="alloys" checked value="1">
<label for="inlineCheckbox4"> Alloys </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="alloys" value="1">
<label for="inlineCheckbox4"> Alloys </label>
</div>
<?php } ?>
</div>
<div class="form-group">
<div class="col-sm-3">
<?php if($result->Camera==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="camera" checked value="1">
<label for="inlineCheckbox1"> Camera </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="camera" value="1">
<label for="inlineCheckbox1"> Camera </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->ParkingSensors==1)
{
?>
<div class="checkbox  checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="parkingsensors" checked value="1">
<label for="inlineCheckbox2"> Parking Sensors </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-success checkbox-inline">
<input type="checkbox" id="inlineCheckbox2" name="parkingsensors" value="1">
<label for="inlineCheckbox2"> Parking Sensors </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->FogLights==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="foglights" checked value="1">
<label for="inlineCheckbox3"> Fog Lights </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox3" name="foglights" value="1">
<label for="inlineCheckbox3"> Fog Lights </label>
</div>
<?php } ?>
</div>
<?php if($result->CruiseControl==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="cruisecontrol" checked value="1">
<label for="inlineCheckbox4"> cruisecontrol </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox4" name="cruisecontrol" value="1">
<label for="inlineCheckbox4"> Cruise Control </label>
</div>
<?php } ?>
</div>
<div class="hr-dashed"></div>
<div class="form-group">
<div class="col-sm-12">
<?php if($result->LandingPage==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="landing" checked value="1">
<label for="inlineCheckbox1"> Uncheck this box if you don't want to show this car on the Landing Page </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="landing" value="1">
<label for="inlineCheckbox1"> Check this box to show the car on the Landing Page </label>
</div>
<?php } ?>
</div>
</div>
<div class="hr-dashed"></div>
<?php }} ?>
<div class="form-group">
<div class="col-sm-8 col-sm-offset-2" >
<button class="btn btn-primary" name="submit" type="submit" style="margin-top:4%">Save changes</button>
</div>
</div>
<div class="hr-dashed"></div>
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
