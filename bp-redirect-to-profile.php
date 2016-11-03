<?php
/**
 * Plugin Name: BP Redirect To Profile
 * Description: Redirect Users to their profile when they login
 * Version: 1.2.2
 * Requires at least: 4.0
 * Tested Up to: 4.6.1
 * Author: Brajesh Singh
 * Author URI: https://buddydev.com
 * Plugin URI: https://buddydev.com/buddypress/bp-redirect-to-profile-plugin-redirect-users-to-their-profile-on-login-on-buddypress-sites/
 * License: GPL2 or Later
 */

function bpdev_redirect_to_profile( $redirect_to_calculated, $redirect_url_specified, $user ) {

	if ( ! $user || is_wp_error( $user ) ) {
		return $redirect_to_calculated;
	}
	//If the redirect is not specified, assume it to be dashboard
	if ( empty( $redirect_to_calculated ) ) {
		$redirect_to_calculated = admin_url();
	}

	// if the user is not site admin, redirect to his/her profile
	if ( ! is_super_admin( $user->ID ) ) {
		return bp_core_get_user_domain( $user->ID );
	} else {
		//if site admin or not logged in, do not do anything much
		return $redirect_to_calculated;
	}
}

add_filter( 'login_redirect', 'bpdev_redirect_to_profile', 100, 3 );
