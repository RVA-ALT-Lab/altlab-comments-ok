<?php 
/*
Plugin Name: ALT Lab Comments OK!
Plugin URI:  https://github.com/
Description: Allow comments from logged in users without requiring approved first comment
Version:     1.0
Author:      ALT Lab
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

//from https://wordpress.stackexchange.com/questions/47172/allowing-logged-in-users-to-comment-without-moderation-across-a-multisite-instal

function alt_approve_logged_in_users( $approved, $commentdata )
	{
		if ($commentdata['user_ID']>0){
			return 1;
		}
		return $approved;
	   
	}

add_filter( 'pre_comment_approved', 'alt_approve_logged_in_users', 99, 2 );

