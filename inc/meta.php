<?php
if($page=="index")
{
	?>
    <title>Connexons</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
	<?php 
}
else if($page=="about")
{
	if(isset($_GET["slug"]))
	{
		if($_GET["slug"]=="our-corporate-ethos")
		{
			?>
            <title>Connexons | About | Our Corporate Ethos</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else if($_GET["slug"]=="why-connexons")
		{
			?>
            <title>Connexons | About | Why Connexons</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else if($_GET["slug"]=="weddings-meetings-and-incentives")
		{
			?>
            <title>Connexons | About | Weddings, Meetings and Incentives</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else
		{
			?>
            <title>Connexons | About</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
            <?php
        }
	}
	else
	{
		?>
        <title>Connexons | About</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
		<?php
    }
}
else if($page=="individual-or-luxury-holidays")
{
	if(isset($_GET["slug"]))
	{
		if($_GET["slug"]=="the-oberoi-motor-vessel-vrinda")
		{
			?>
            <title>Connexons | Individual or Luxury Holidays | The Oberoi Motor Vessel Vrinda</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else if($_GET["slug"]=="brahmaputra-cruise")
		{
			?>
            <title>Connexons | Individual or Luxury Holidays | Brahmaputra Cruise</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else if($_GET["slug"]=="the-place-on-wheels")
		{
			?>
            <title>Connexons | Individual or Luxury Holidays | The Place on Wheels</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else if($_GET["slug"]=="the-deccan-odyssey")
		{
			?>
            <title>Connexons | Individual or Luxury Holidays | The Deccan Odyssey</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else if($_GET["slug"]=="ananda-in-the-himalayas")
		{
			?>
            <title>Connexons | Individual or Luxury Holidays | Ananda in the Himalayas</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else if($_GET["slug"]=="oberoi-amar-vilas-hotel")
		{
			?>
            <title>Connexons | Individual or Luxury Holidays | Oberoi Amar Vilas Hotel</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else
		{
			?>
            <title>Connexons | Individual or Luxury Holidays</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
            <?php
        }
	}
	else
	{
		?>
        <title>Connexons | Individual or Luxury Holidays</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
		<?php
    }
}
else if($page=="blog")
{
	?>
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php
}
else if($page=="tours")
{
	if(isset($_GET["slug"]))
	{
		$con=mysql_connect('localhost', 'connexons_user', 'b;=]r0QA*H+[');
		mysql_select_db("connexons_database",$con);
		$sql = "SELECT ID, post_title, post_content FROM con_posts where post_status='publish' and post_type='page' and post_name='".$_GET["slug"]."' LIMIT 1";
		$result = mysql_query($sql);
		while ($row = mysql_fetch_array($result))
		{
			?>
            <title>Connexons | Tours | <?php echo htmlentities($row['post_title']); ?></title>
            <meta name="keywords" content="">
            <meta name="description" content="">
		    <?php
        }
	}
	else
	{
		?>
        <title>Connexons | Tours</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
		<?php
    }
}
else if($page=="contact")
{
	if(isset($_GET["slug"]))
	{
		if($_GET["slug"]=="reach-us-at")
		{
			?>
            <title>Connexons | Contact | Reach us at</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else if($_GET["slug"]=="enquire-now")
		{
			?>
            <title>Connexons | Contact | Enquire Now</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
			<?php
        }
		else
		{
			?>
            <title>Connexons | Contact</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
            <?php
        }
	}
	else
	{
		?>
        <title>Connexons | Contact</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
		<?php
    }
}?>