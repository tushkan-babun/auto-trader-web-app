<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{
header('location:index.php');
}
else{
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
	<title> Auto Trader | Admin Manage Landing Page   </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
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
</head>
<body>
	<?php include('includes/header.php');?>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
    <div class="container">
            <br />
   <div class="table-responsive">
    <h3 align="center">Manage featured cars on the landing page here. Quick multiple updates are functional</h3><br />
    <form method="post" id="update_form">
                    <div align="left">
                        <input type="submit" name="multiple_update" id="multiple_update" class="btn btn-info" value="Multiple Update" />
                    </div>
                    <br />
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th width="5%"></th>
                                <th width="20%">Vehicle Title</th>
                                <th width="20%">Price</th>
                                <th width="35%">Display on the Landing Page</th>
                                <th width="20%">Mileage</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </form>
   </div>
  </div>
</div>
</div>
</div>
</div>
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
<script>
$(document).ready(function(){
    function fetch_data()
    {
        $.ajax({
            url:"includes/select.php",
            method:"POST",
            dataType:"json",
            success:function(data)
            {
                var html = '';
                for(var count = 0; count < data.length; count++)
                {
                    html += '<tr>';
                    html += '<td><input type="checkbox" id="'+data[count].id+'" data-vehicletitle="'+data[count].VehiclesTitle+'" data-price="'+data[count].PricePerDay+'" data-mileage="'+data[count].SeatingCapacity+'" data-landing="'+data[count].LandingPage+'" class="check_box"  /></td>';
                    html += '<td>'+data[count].VehiclesTitle+'</td>';
                    html += '<td>'+data[count].PricePerDay+'</td>';
										html += '<td>'+data[count].LandingPage+'</td>';
                    html += '<td>'+data[count].SeatingCapacity+'</td>';
                }
                $('tbody').html(html);
            }
        });
    }
    fetch_data();
    $(document).on('click', '.check_box', function(){
        var html = '';
        if(this.checked)
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-vehicletitle="'+$(this).data('vehicletitle')+'" data-price="'+$(this).data('price')+'" data-mileage="'+$(this).data('mileage')+'" data-landing="'+$(this).data('landing')+'" class="check_box" checked /></td>';
            html += '<td><input type="text" name="vehicletitle[]" class="form-control" value="'+$(this).data("vehicletitle")+'" /></td>';
            html += '<td><input type="text" name="price[]" class="form-control" value="'+$(this).data("price")+'" /></td>';
						html += '<td><select name="landing[]" id="landing_'+$(this).attr('id')+'" class="form-control"><option value="1">Yes</option><option value="0">No</option></select></td>';
            html += '<td><input type="text" name="mileage[]" class="form-control" value="'+$(this).data("mileage")+'" /><input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';
        }
        else
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-vehicletitle="'+$(this).data('vehicletitle')+'" data-price="'+$(this).data('price')+'" data-landing="'+$(this).data('landing')+'" data-mileage="'+$(this).data('mileage')+'" class="check_box" /></td>';
            html += '<td>'+$(this).data('vehicletitle')+'</td>';
            html += '<td>'+$(this).data('price')+'</td>';
						html += '<td>'+$(this).data('landing')+'</td>';
            html += '<td>'+$(this).data('mileage')+'</td>';
        }
        $(this).closest('tr').html(html);
        $('#landing_'+$(this).attr('id')+'').val($(this).data('landing'));
    });
    $('#update_form').on('submit', function(event){
        event.preventDefault();
        if($('.check_box:checked').length > 0)
        {
            $.ajax({
                url:"includes/multiple-update.php",
                method:"POST",
                data:$(this).serialize(),
                success:function()
                {
									//console.log("stop"); return false;
                alert('Data Updated');
                fetch_data();
                }
            });
        }
    });
});
</script>
<?php } ?>
