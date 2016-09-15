<?php
$tagline = 'no';
if(isset($wp_query->queried_object) && isset($wp_query->queried_object->ID))
{
	if($wp_query->queried_object->ID > 0)
	{
		$tagline = carbon_get_post_meta($wp_query->queried_object->ID, "crb_tagline");
	}
}


if(is_home())
{
	$tagline = "yes";
}
if($tagline == 'yes')
{	
?>

<section class="learn-more"> 
<h3>Sound like your jam? Smile for the camera and learn more.</h3>
</section>

<?php } ?>