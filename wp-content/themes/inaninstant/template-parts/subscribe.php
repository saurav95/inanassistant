<?php
if(isset($wp_query->queried_object) && isset($wp_query->queried_object->ID))
{
	if($wp_query->queried_object->ID > 0)
	{
		$subscribe = carbon_get_post_meta($wp_query->queried_object->ID, "crb_subscribe");
	}
}



if($subscribe == 'yes')
{	
?>
<section class="subscribe text-center">
	<form class="form-inline">
		<div class="form-group">
			<h3>Want to join the party?</h3>
		</div>	
	  <div class="form-group">
		<label class="sr-only" for="InputText">Password</label>
		<input type="text" class="form-control" id="InputText" placeholder="Text">
	  </div>
	  <div class="form-group">
		<label class="sr-only" for="InputEmail">Email address</label>
		<input type="email" class="form-control" id="InputEmail" placeholder="Email">
	  </div>	  
	  <button type="submit" class="btn btn-default">Sign in</button>
	</form>
</section>
<?php } ?>