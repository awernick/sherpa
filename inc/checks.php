<?php
	
	// Check to see if social media options have been created
	$social_media_options = array(
		'facebook_url'		=> 'http://facebook.com/',
		'twitter_url'		=> 'http://twitter.com/',
		'google_plus_url'	=> 'http://plus.google.com/',
		'pinterest_url'		=> 'http://pinterest.com/',
		'linkedin_url'		=> 'http://linkedin.com/',
		'telephone_number'	=> '',
		'home_page_slider'	=> '',
		'typekit'			=> '',
	);
	
	foreach($social_media_options as $key => $value) {
		if(!get_option($key)) {
			add_option($key, $value);
		}
	}