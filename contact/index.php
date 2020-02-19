<?php
ob_start();
$page="contact";
if(!isset($_GET["slug"]))
{
	$_GET["slug"]="";
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$name="name: ".$_POST["name"]."\n";
$phone="phone: ".$_POST["phone"]."\n";
$email="email: ".$_POST["email"]."\n";
$message="message: ".$_POST["message"]."\n";
$subject="subject: ".$_POST["subject"]."\n";
$client_ip="client_ip ".$_POST["client_ip"]."\n";
$fullmessage="Enquiry from Connexons.\n\n".$name.$phone.$email.$subject.$message.$client_ip;
mail("zareen@connexons.com","Enquiry from Connexons",$fullmessage,"From: online.enquiries@connexons.com");
mail("munish@connexons.com","Enquiry from Connexons",$fullmessage,"From: online.enquiries@connexons.com");
header("Location: http://www.connexons.com");	
}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("../inc/head.php"); ?>
<?php require_once("../inc/meta.php"); ?>
</head>
<body>
<?php require_once("../inc/header.php"); ?>
<section id="main-content" class="clear"><article>
  
   <h1>Quick Links</h1>
    <ul>
      <li><a href="../contact/reach-us-at"><span class="fa fa-share"></span>Reach us at</a></li>
      <li><a href="../contact/enquire-now"><span class="fa fa-share"></span>Enquire Now</a></li>
    </ul>
  
  </article>
  <article>
  <?php if($_GET["slug"]=="enquire-now"){ ?>
  <h1>Enquire Now</h1>
  <p>You can write to us regarding any queries you may have regarding the services. You are also welcome to provide us with your valuable Feedback. We will respond to you within 24 hours' time.</p>
  <form id="contact-page" method="post" action="" onSubmit="return alert('Thankyou for your Enquiry.\n We will get back to you within 24-48hrs.')">
    <fieldset>
      <label for="name">Name</label>
      <input type="text" name="name" id="name" required>
    </fieldset>
    <fieldset>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
    </fieldset>
    <fieldset>
      <label for="phone">Phone</label>
      <input type="text" name="phone" id="phone" required>
    </fieldset>
    <fieldset>
      <label for="subject">Subject</label>
      <input type="text" name="subject" id="subject" required>
    </fieldset>
    <div class="clear"></div>
    <br>
    <fieldset>
      <label for="message">Message</label>
      <textarea id="message" name="message"></textarea>
    </fieldset>
    <input type="hidden" id="client_ip" name="client_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <input type="submit" value="Submit">
  </form>
  <?php } else { ?>
  
  <h1>Reach us at</h1>
  
  <h2>Regd. Office:</h2>
  <p>Connexons Tourism Services<br>261, 1st Floor, Lane no 5, Westend Marg, Saidulajab, New Delhi - 110030, India<br/>
      Phone : +91-7290050766 <br>Email: <a href="mailto:munish@connexons.com">munish@connexons.com</a> / <a href="mailto:zareen@connexons.com">zareen@connexons.com</a>
  </p>
  <?php } ?>
   
  </article>
  
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>