<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Theme Option
Container::make('theme_options', 'Theme Options')
    ->add_fields(array(
		Field::make('text', 'crb_mail_link'),
        Field::make('text', 'crb_facebook_link'),
        Field::make('text', 'crb_instagram_link'),
		Field::make('image', 'crb_logo_image')->set_value_type('url')		
    ));
	
// Home Page Option

Container::make('post_meta', 'Home Page Slider')
    ->show_on_template('page-homepage.php')
    ->add_fields(array(
		Field::make('complex', 'crb_home_slide')->add_fields(array(
			Field::make('image', 'Insert Image')->set_value_type('url'),
		))
    ));	
	
Container::make('post_meta', 'Home Image Grid')
    ->show_on_template('page-homepage.php')
    ->add_fields(array(		
		Field::make('image', 'first_image' ,'Insert First Image')->set_value_type('url'),
		Field::make('image','second_image'  ,'Insert Second Image')->set_value_type('url'),
    ));		