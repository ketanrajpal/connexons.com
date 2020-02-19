<?php
ob_start();
$page="cars";
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
<section id="main-content" class="clear">
<article style="width:90%;margin:auto !important;float:left">

<h1>Transport</h1>

<p>We are one of the leading tourist transporters of Delhi duly approved by the Department of Tourism, Govt. of India. We service with a large fleet of luxury cars and air-conditioned luxury executive coaches of all types and of the very latest models and are in this trade since 1995.<br><br>At present we have business relations with reputed companies, large business houses, and consulates including ICICI Lombard, Toyota Motor Corporation, Itochu Corporation, Johnson & Johnson, Cargill India Limited, Marico Industries, Bosch & Lomb, Mico, HCC, The Canadian High Commission, The Japan Embassy, The Royal Norwegian Embassy, The Philippines Embassy and all leading five star deluxe hotels, and many, many more.<br><br>We take part in a host of events (WOW Awards, TMF Delegates, Medical Forums and Travel Missions) and were also accredited as a transporter during the POTUS visit earlier this year.<br><br>Our performance with these organizations has been nothing short of remarkable and praiseworthy.<br><br>We have experienced, dedicated, professional office staff as well as well behaved, disciplined, English speaking professional chauffeurs, who understand the needs of our valued clients.<br><br>We have the expertise to make and handle tailor-made tours for all kind of corporate and leisure tourists as per their interest, available for any number of days and any type of budget. We make sure that all our clients get the value of every penny spent by them.<br><br>For your information standard features of our all luxury cars and coaches are:</p>

<style>
 .list li
{
list-style: disc;
	margin-left: 20px;
}
</style>

<ul class="list"><li>All drivers and cars have mobile phones and are GPS Tracked.</li>
 <li>All the vehicles have clean white covers with first aid boxes and fire extinguishers.</li>
 <li>All drivers of these cars are trained and possess years of experience in the field of Driving and Road Safety and are professional, well aware of all routes and can understand and communicate in English and are always in uniform.</li>
 <li>Mineral water, soft drinks and newspapers are provided in all these cars.</li>
 <li>All vehicles are new and well maintained.</li>
</ul>

<p>We sincerely hope that you will extend your support and establish a mutually beneficial business relationship with us.<br><br>Please get in touch with Mr. Sushil Thakur (Manager - Transport Division) at +919650272707 or <a href="mailto:sushil@connexons.com">sushil@connexons.com</a> for your bookings.</p>
<br><br>
<h1>Our Cars</h1>
<br><br>
<div class="slidecar">
 <ul>
  <li><img src="../img/cars/car-1.jpg"><h2>Merc S Class</h1></a></li>
  <li><img src="../img/cars/car-2.jpg"><h2>Merc E Class</h1></li>
  <li><img src="../img/cars/car-3.jpg"><h2>Toyota Fortuner</h1></li>
  <li><img src="../img/cars/car-4.jpg"><h2>Toyota Camry</h1></li>
  <li><img src="../img/cars/car-5.jpg"><h2>Toyota Corolla</h1></li>
  <li><img src="../img/cars/car-6.jpg"><h2>Toyota Innova</h1></li>
  <li><img src="../img/cars/car-7.jpg"><h2>Honda city</h1></li>
  <li><img src="../img/cars/car-8.jpg"><h2>Swift Dzire</h1></li>
    <li><img src="../img/cars/car-10.jpg"><h2>Tata Indigo</h1></li>
 </ul>
</div>
<script>$(document).ready(function(){
  $('.slidecar ul').bxSlider({
	  slideWidth: 250,
    minSlides: 1,
    maxSlides: 4,
	moveSlides: 1,
    slideMargin: 50,
	pager:false,
	infiniteLoop:false,
	hideControlOnEnd: true
  });
});</script>
</article>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>