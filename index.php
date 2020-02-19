<?php
ob_start();
$page="index";
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("inc/head.php"); ?>
<?php require_once("inc/meta.php"); ?>
</head>
<body>
<?php require_once("inc/header.php"); ?>
<section id="slider">
  <ul class="slider">
    <li><img src="img/slide-1.jpg" alt="<h1>We&rsquo;re your Travel Experts</h1><h2>For that perfect Indian Experience</h2>"></li>
    <li><img src="img/slide-2.jpg" alt="<h1>We&rsquo;re Dreamweavers</h1><h2>We have an Indian tale to tell, let us share it with you</h2>"></li>
    <li><img src="img/slide-3.jpg" alt="<h1>We are with you</h1><h2>Our meticulous planning ensures smooth journeys</h2>"></li>
  </ul>
</section>
<script>$('.slider').bxSlider({auto:true, mode:'fade', captions: true, pager: false});</script>
<section id="tabs-2" class="clear">
  <article>
    <h1>SAMPLE ITINERARIES</h1>
    <div class="clear">
    <ul>
    <?php
	$con=mysql_connect('localhost', 'connexons_user', 'b;=]r0QA*H+[');
	mysql_select_db("connexons_database",$con);
	$sql = "SELECT post_title, ID, guid, post_content,post_name FROM con_posts where post_status='publish' and post_type='page' ORDER BY post_date DESC LIMIT 4";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result))
	{
		?>
         <li>
		 <a href="../tours/<?php echo $row['post_name']; ?>">
         <figure>
        <?php 
	
			$query=mysql_query("select `guid` from `con_posts` where post_type='attachment' and ID=(select meta_value from con_postmeta where post_id='".$row['ID']."' and meta_key='_thumbnail_id' LIMIT 1)");
			$resultimg=mysql_fetch_array($query);
		?>
         <img src="<?php echo $resultimg[0]; ?>">
         <figcaption><?php echo $row['post_title']; ?></figcaption>
          </figure>
         </a>
         </li>
		<?php
	}
?>
      </ul>
    </div>
  </article>
  <article>
    <h1>From our Blog</h1>
    
    <?php
	$con=mysql_connect('localhost', 'connexons_user', 'b;=]r0QA*H+[');
	mysql_select_db("connexons_database",$con);
	$sql = "SELECT post_title, ID, guid, post_content,post_name FROM con_posts where post_status='publish' and post_type='post' ORDER BY post_date DESC LIMIT 4";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result))
	{
		?>
		 <a href="../blog/<?php echo $row['post_name']; ?>">
         <h2 style="text-transform:uppercase;"><?php echo $row['post_title']; ?></h2>
         <p style="color:#000;"><?php echo substr($row['post_content'],0,250); ?></p>
         </a>
		<?php
	}
?>
    
  </article>
</section>
<section id="tabs" class="clear">
  <div>
    <article>
      <figure><img src="img/tab2-1.jpg"></figure>
      <h1>Individual/Luxury Holidays<br><br></h1>
      <p>We offer a range of carefully selected luxury tours to some of the Indian subcontinent&rsquo;s most exotic and deluxe destinations</p>
      <a href="../individual-or-luxury-holidays" class="button">Read More</a> </article>
    <article>
      <figure><img src="img/tab2-2.jpg"></figure>
      <h1>Weddings, meetings, & incentives</h1>
      <p>These are tourism types in which large groups, usually planned well in advance, are brought together for a particular purpose</p>
      <a href="../about/weddings-meetings-and-incentives" class="button">Read More</a> </article>
    <article>
      <figure><img src="img/tab2-3.jpg"></figure>
      <h1>Why Connexons<br><br></h1>
      <p>We are eager to serve, and are worthy of your business. Here&rsquo;s why<br><br></p>
      <a href="../about/why-connexons" class="button">Read More</a> </article>
    <article>
      <figure><img src="img/tab2-4.jpg"></figure>
      <h1>Contact<br><br></h1>
      <p>Let&rsquo;s connect and do business. We are waiting for your call<br><br></p>
      <a href="../contact" class="button">Read More</a> </article>
  </div>
</section>
<?php require_once("inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>