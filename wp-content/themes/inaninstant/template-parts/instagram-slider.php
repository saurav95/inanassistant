<?php
if(isset($wp_query->queried_object) && isset($wp_query->queried_object->ID))
{
	if($wp_query->queried_object->ID > 0)
	{
		$instagram_slider = carbon_get_post_meta($wp_query->queried_object->ID, "crb_instagram");
		$instagram_title = carbon_get_post_meta($wp_query->queried_object->ID, "crb_insta_title");
	}
}



if($instagram_slider == 'yes')
{	
?>

<section class="instagram-slider"> 
<?php if($instagram_title != ""){ ?> <h3><?php echo $instagram_title; ?></h3> <?php } ?>
<div class="instagram-wrapper">
	<div id="instafeed" class="owl2row-plugin"></div>
</div>	
</section>

<?php } ?>