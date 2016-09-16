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

// All page option	
Container::make('post_meta', 'Front View Options')
    ->show_on_post_type('page')
    ->add_fields(array(		
	Field::make("radio", "crb_tagline", "Show Tagline?")
		->add_options(array(
			'yes' => 'Yes',
			'no' => 'No'
		)),
	Field::make("radio", "crb_instagram", "Show Instagram Slide?")
	->add_options(array(
		'yes' => 'Yes',
		'no' => 'No'
	))->set_default_value('yes'),
	Field::make('text', 'crb_insta_title' , 'Enter Instagram Title')->help_text('(optional and only shows if Instagram Slide is Yes.)'),
	Field::make("radio", "crb_subscribe", "Show Subscribe Form?")
	->add_options(array(
		'yes' => 'Yes',
		'no' => 'No'
	))->set_default_value('yes'),	
    ));	

// Praise Page Option

Container::make('post_meta', 'Praise Grid')
    ->show_on_template('page-praise.php')
        ->add_fields(array(
		Field::make('complex', 'crb_praise_posts')->add_fields(array(
			Field::make('image', 'Insert Image')->set_value_type('url'),				
			Field::make("textarea", "crb_description", "Add Description")
			->set_rows(4),
			Field::make('text', 'crb_subtitle', "Add Name"),
			Field::make("select", "crb_choose_arw", "Choose Arrow And Its Position(optional)")
				->add_options(array(
					'noarrow'=> 'No Arrow',
					'arrow_tl' => 'Arrow on top left ',
					'arrow_tr' => 'Arrow on top right',
					'arrow_bl' => 'Arrow on bottom left',
					'arrow_br' => 'Arrow on bottom right'
				))
				->help_text('Shows Arrow on Image'),			
		))
	));