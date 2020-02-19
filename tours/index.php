<?php
ob_start();
$page="tours";

function slide_image()
{
	$con=mysql_connect('localhost', 'connexons_user', 'b;=]r0QA*H+[');
	mysql_select_db("connexons_database",$con);
	$sql = "SELECT ID FROM con_posts where post_status='publish' and post_type='page' and post_name='".$_GET["slug"]."'";
	$result = mysql_fetch_array(mysql_query($sql));
	$sql = "SELECT meta_value FROM con_postmeta where post_id='".$result[0]."' and meta_key='slide_image' LIMIT 1";
	$result = mysql_fetch_array(mysql_query($sql));
	$sql = "SELECT meta_value FROM con_postmeta where post_id='".$result[0]."' and meta_key='_wp_attached_file' LIMIT 1";
	$result = mysql_fetch_array(mysql_query($sql));
	mysql_close($con);
	return $result[0];
}

function itinerary_no()
{
	$con=mysql_connect('localhost', 'connexons_user', 'b;=]r0QA*H+[');
	mysql_select_db("connexons_database",$con);
	$sql = "SELECT ID FROM con_posts where post_status='publish' and post_type='page' and post_name='".$_GET["slug"]."'";
	$result = mysql_fetch_array(mysql_query($sql));
	$sql = "SELECT meta_value FROM con_postmeta where post_id='".$result[0]."' and meta_key='itinerary' LIMIT 1";
	$result = mysql_fetch_array(mysql_query($sql));
	return $result[0];
}

function itenarycontent($no, $slug)
{
	$con=mysql_connect('localhost', 'connexons_user', 'b;=]r0QA*H+[');
	mysql_select_db("connexons_database",$con);
	$sql = "SELECT ID FROM con_posts where post_status='publish' and post_type='page' and post_name='".$_GET["slug"]."'";
	$result = mysql_fetch_array(mysql_query($sql));
	$sql = "SELECT meta_value FROM con_postmeta where post_id='".$result[0]."' and meta_key='".$slug."' LIMIT 1";
	$result = mysql_fetch_array(mysql_query($sql));
	return $result[0];
}


?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("../inc/head.php"); ?>
<?php require_once("../inc/meta.php"); ?>
<link rel="stylesheet" type="text/css" href="../css/timeline.css">
</head>
<body>
<?php require_once("../inc/header.php"); ?>
<section id="main-content" class="clear"><article>
    <h1>Quick Links</h1>
    <ul>
    <?php
	$con=mysql_connect('localhost', 'connexons_user', 'b;=]r0QA*H+[');
	mysql_select_db("connexons_database",$con);
	$sql = "SELECT post_title, ID, guid, post_content,post_name FROM con_posts where post_status='publish' and post_type='page' ORDER BY post_date DESC";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result))
	{
		?>
         <li>
		 <a href="../tours/<?php echo $row['post_name']; ?>">
          <span class="fa fa-share"></span><?php echo $row['post_title']; ?>
         </a>
         </li>
		<?php
	}
?>
    </ul>
  </article>
  <article>
     <?php if(isset($_GET["slug"])){ 
	$con=mysql_connect('localhost', 'connexons_user', 'b;=]r0QA*H+[');
	mysql_select_db("connexons_database",$con);
	
	$sql = "SELECT ID, post_title, post_content FROM con_posts where post_status='publish' and post_type='page' and post_name='".$_GET["slug"]."' LIMIT 1";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result))
	{
		?><h1><?php echo $row['post_title']; ?></h1>
		<p><?php echo $row['post_content']; ?></p>
		<?php
	}
	
	$itenary=itinerary_no();
	$day=1;
	?><ul id='timeline'><?php
	for($i=0;$i<$itenary;$i++)
	{
		
		?>
        <li class='work'>
    <input class='radio' id='work<?php echo $day; ?>' name='works' type='radio' checked>
    <div class="relative">
      <label for='work<?php echo $day; ?>'><?php echo itenarycontent($i,"itinerary_".$i."_title"); ?></label>
      <span class='date'>Day <?php echo $day; ?></span>
      <span class='circle'></span>
    </div>
    <div class='content'>
      <p>
        <?php echo itenarycontent($i,"itinerary_".$i."_content"); ?>
      </p>
    </div>
  </li>
        <?php
		$day++;
	}
	
	
	?>
     </ul>
    <?php } else { ?>
    <h1>Our Programmes</h1>
    <p></p>
    
    <ul id="inner-tabs">
        <?php
	$con=mysql_connect('localhost', 'connexons_user', 'b;=]r0QA*H+[');
	mysql_select_db("connexons_database",$con);
	$sql = "SELECT post_title, ID, guid, post_content,post_name FROM con_posts where post_status='publish' and post_type='page' ORDER BY post_date DESC";
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
    
    
    
      <?php } ?>
  </article>
  
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>