<?php
session_start();
error_reporting(0);
include('includes/config.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set('Etc/UTC');
require 'vendor/autoload.php';
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$qfinance=$_POST['qfinance'];
$testdrive=$_POST['testdrive'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Finance,Testdrive,Message) VALUES(:name,:email,:contactno,:qfinance,:testdrive,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':qfinance',$qfinance,PDO::PARAM_STR);
$query->bindParam(':testdrive',$testdrive,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
sendMail($name,$email,$contactno,$qfinance,$testdrive,$message);
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else
{
$error="Something went wrong. Please try again";
}

}

function sendMail($name,$email,$contactno,$qfinance,$testdrive,$msg)
{
  $message = "Name: ".$name."<br>";
  $message .= "EMail: ".$email."<br>";
  $message .= "Phone Number: ".$contactno."<br>";
  $message .= "Finance: ".$qfinance."<br>";
  $message .= "Preferred Test Drive Time: ".$testdrive."<br>";
  $message .= "Message: ".$msg;

  $mail = new PHPMailer(true);

try{
  // Instantiation and passing `true` enables exceptions
  //Enable SMTP debugging.
  $mail->SMTPDebug = 0;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = true;
  //Provide username and password
  $mail->Username = "************";
  $mail->Password = "************";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "tls";
  //Set TCP port to connect to
  $mail->Port = 587;
  //$mail->Authentication = "plain";
  $mail->From = "********************";
  $mail->FromName = "Auto Trader";
  $mail->addAddress("*****************", "Recepient Name");
  $mail->isHTML(true);
  $mail->Subject = "New_Customer's_Message";
  $mail->Body = $message;
  $mail->AltBody = "This is the plain text version of the email content";
  $mail->send();
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error:";
  }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title> Auto Trader | Contact Us</title>
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
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
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
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->
<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Contact Us</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->
<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3>Get in touch using the form below</h3>
          <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <div class="contact_form gray-bg">
          <form  method="post">
              <div class="form-group">
              <label class="control-label">Full Name <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number </label>
              <input type="text" name="contactno" class="form-control white_bg" id="phonenumber">
            </div>
            <div class="form-group">
              <label class="control-label"> Are you looking for finance option? </label>
              <input type="text" name="qfinance" class="form-control white_bg" id="questionfinance">
            </div>
            <div class="form-group">
              <label class="control-label"> Preferred time for Test Drive </label>
              <input type="text" name="testdrive" class="form-control white_bg" id="testdrivetime">
            </div>
            <div class="form-group">
              <label class="control-label"> Message <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Send Message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>

          </form>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Contact Info</h3>
        <div class="contact_detail">
              <?php
              $pagetype=$_GET['type'];
              $sql = "SELECT Address,EmailId,ContactNo from tblcontactusinfo";
              $query = $dbh -> prepare($sql);
              $query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
              $query->execute();
              $results=$query->fetchAll(PDO::FETCH_OBJ);
              $cnt=1;
              if($query->rowCount() > 0)
              {
              foreach($results as $result)
              { ?>
          <ul>
            <li>
              <div class="icon_wrap big-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m3"><?php   echo htmlentities($result->Address); ?></div>
            </li>
            <li>
              <div class="icon_wrap big-icon"><i class="fas fa-envelope-open-text"></i></div>
              <div class="contact_info_m2"><a href="mailto:**************"><?php   echo htmlentities($result->EmailId); ?></a></div>
            </li>
            <li>
              <div class="icon_wrap big-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m2"><?php   echo htmlentities($result->ContactNo); ?></a></div>
            </li>
          </ul>
        <?php }} ?>
        </div>
        <div class="mapouter1"><div class="gmap_canvas1"><iframe width="360" height="500" id="gmap_canvas1"
        src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"
        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
        <style>.mapouter{position:relative;text-align:right;height:500px;width:360px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:360px;}
        </style>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Contact-us-->
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
