<?php
ob_start();
$page="services";
if(!isset($_GET["slug"]))
{
	$_GET["slug"]="";
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
      <li><a href="../services/individual-or-luxury-holidays"><span class="fa fa-share"></span>Individual or Luxury Holidays</a></li>
      <li><a href="../about/our-corporate-ethos"><span class="fa fa-share"></span>Our Corporate Ethos</a></li>
      <li><a href="../about/why-connexons"><span class="fa fa-share"></span>Why Connexons</a></li>
    </ul>
  </article>
  <article>
     <?php if($_GET["slug"]=="individual-or-luxury-holidays"){ ?>
    <h1>Individual or Luxury Holidays</h1>
    <p>Our company stands on the pillars of Integrity, Reliability, Fair Value, Trust, care, Excellence and Honesty.
      We are committed to providing the highest level of services to our clients. To our colleagues and associates we offer a conducive work atmosphere, continuous training and empowerment. It is our belief that if we look after our people they will look after our clients.<br>
      <br>
      To us the means are as important as the end.</p>
     <?php } else if($_GET["slug"]=="why-connexons"){ ?>
    <h1>Why Connexons</h1>
    <ul>
      <li>We strive for excellence and value our clients business.</li>
      <li>We deliver whatever we assure. There is no deviation in our services from what we commit.</li>
      <li>We maintain the highest level of proffessionality integrity – with no false assurances or promises made.</li>
      <li>We deliver value for money, with clear and transparent financial dealings.</li>
      <li>We pride ourselves in our highly motivated and professional team.</li>
      <li>For all queries recived by us we assure a response within 24 hour.</li>
      <li>Our offices are installed with advanced and automated tour management software. This helps us maintain consistency in our quality and pricing .</li>
      <li>We produce innovative and flexible programs in line with a clients area of interst.</li>
    </ul>
    <?php } else { ?>
    <h1>About</h1>
    <p>Connexons, established in October 1995, offers comprehensive tourism services with its head office in New Delhi and major branch office in Mumbai, Kolkata and Bangalore. Besides these offices we also have a network of over 30 (Thirty) representative and agency offices located at all major tourist destinations in India/Nepal. So, throughout the length and breadth of India, our representatives are there to assist and just a phone call away. We are proud of our professional tour management team- for cultural tours, beach holidays, educational tours, adventure tours or specially designed ala carte programs.<br>
      <br>
      Besides our inbound tours department, Connexons also has an independent department specializing in sales and marketing of tourism related products and services in the India Sub-continent. We currently service a network of over 2,000 active travel agents and more than 5,000 corporate clients all over India.</p>
      <?php } ?>
  </article>
  
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>