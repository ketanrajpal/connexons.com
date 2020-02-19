<?php
ob_start();
$page="about";
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
      <li><a href="../about"><span class="fa fa-share"></span>About</a></li>
      <li><a href="../about/our-corporate-ethos"><span class="fa fa-share"></span>Our Corporate Ethos</a></li>
      <li><a href="../about/why-connexons"><span class="fa fa-share"></span>Why Connexons</a></li>
      <li><a href="../about/weddings-meetings-and-incentives"><span class="fa fa-share"></span>Weddings, meetings, and incentives</a></li>
    </ul>
  </article>
  <article>
     <?php if($_GET["slug"]=="our-corporate-ethos"){ ?>
    <h1>Our Corporate Ethos</h1>
    <p>Our company stands on the pillars of Integrity, Reliability, Fair Value, Trust, care, Excellence and Honesty.
      We are committed to providing the highest level of services to our clients. To our colleagues and associates we offer a conducive work atmosphere, continuous training and empowerment. It is our belief that if we look after our people they will look after our clients.<br>
      <br>
      To us the means are as important as the end.</p>
     <?php } else if($_GET["slug"]=="why-connexons"){ ?>
    <h1>Why Connexons</h1>
    <ul class="list">
      <li>We strive for excellence and value our clients business.</li>
      <li>We deliver whatever we assure. There is no deviation in our services from what we commit.</li>
      <li>We maintain the highest level of proffessionality integrity – with no false assurances or promises made.</li>
      <li>We deliver value for money, with clear and transparent financial dealings.</li>
      <li>We pride ourselves in our highly motivated and professional team.</li>
      <li>For all queries recived by us we assure a response within 24 hour.</li>
      <li>Our offices are installed with advanced and automated tour management software. This helps us maintain consistency in our quality and pricing .</li>
      <li>We produce innovative and flexible programs in line with a clients area of interst.</li>
    </ul>
    <?php } else if($_GET["slug"]=="weddings-meetings-and-incentives"){ ?>
    <h1>Weddings</h1>
    <p>Planning a wedding can be an intimidating task for anybody, especially when you have to overcome language, and logistical/operational barriers. Steeped in the history of the Matrimonial Bond itself, the Indian sub-continent is a one of a kind place where millions either dream or have dreamt of getting married. This is where we are your experts. We bring equal amounts of style and detail to every event – be it consulting, designing and/or coordination. We are part of a rare breed today, who can assimilate and bring together all those intricate things required to make a successful wedding. And we take pride in our ability to create the perfect experience, blending Indian traditions with the latest international trends. Our services cater to all cultures, budgets, styles and measurements. Rest assured, we bring the best vendors in the business together, to make your event, a truly memorable one.</p>
    
    <h1>Meetings and Incentives</h1>
    <p>India is emerging as an important MICE destination in Asia. With the advent of globalization, state of the art convention venues, including models hotels and resorts with meeting facilities come up. India with its ancient civilization, rich cultural and historical past as well as amazing architectural wonders, golden beaches, Ayurvedic spas and its vast range of cuisine makes it a favorable destination for pre and post conference tours.<br><br>India has a large number of convention centers spread all over the country. Most of these are located around famous tourist attractions and at major cities like New Delhi, Agra, Jaipur, Mumbai, Goa, Cochin, Hyderabad and Kolkata with capacity up to 2000 people. Besides, some leading hotels also offer excellent conference facilities at various cities. India has a large network of domestic airlines, Air charter companies, Railways and tourist transport. The majority of urban population is English Speaking and makes overseas delegates feel at home.<br><br>We at Connexons have a fully equipped team to handle your incentive or business meetings in India. We have an impeccable record of organizing and handling large and medium size events on a regular basis.<br><br>These include:</p>
    
    <ul class="list">
      <li>VIP meet and greet services.</li>
      <li>Specials theme evenings and Gala dinners – Including classical Indian Music, dance recitals, outdoors activities etc.</li>
      <li>Arrangements for chauffer driven luxury cars, aircrafts and helicopters.</li>
      <li>And highly trained Tour Directors and Escorts.</li>
      <li>Team Building Activities</li>
    </ul>
    <div class="clear"></div>
      <a href="../contact/enquire-now" class="button" style="width:300px">Contact for More Details</a>

    <?php } else { ?>
    <h1>About</h1>
    <p>Connexons, established in October 1995, offers comprehensive tourism services with its head office in New Delhi and major branch offices in Mumbai, and Chennai. Besides these offices we also have a network of over 30 (Thirty) representative and agency offices located at all major tourist destinations in India/Nepal. So, throughout the length and breadth of India, our representatives are there to assist and just a phone call away. We are proud of our professional tour management team- for cultural tours, beach holidays, educational tours, adventure tours or specially designed ala carte programs.<br>
      <br>
      Besides our inbound tours department, Connexons also has an independent department specializing in sales and marketing of tourism related products and services in the India Sub-continent. We currently service a network of over 2,000 active travel agents and more than 5,000 corporate clients all over India.</p>
      <br><br><br>
      
      <center>
       <iframe src="https://www.haikudeck.com/e/mvrmaInYhU/?isUrlHashEnabled=false&isPreviewEnabled=false&isHeaderVisible=false" width="640" height="541" frameborder="0" marginheight="0" marginwidth="0"></iframe>
      </center>
      
      <?php } ?>
  </article>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>