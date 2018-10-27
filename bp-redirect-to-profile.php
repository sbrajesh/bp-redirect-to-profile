<?php
/**
 * Plugin Name: BuddyPress Login Redirect to Profile
 * Description: Redirect Users to their BuddyPress profile when they login.
 * Version: 1.2.3
 * Requires at least: 4.0
 * Tested Up to: 4.9.8
 * Author: Brajesh Singh
 * Author URI: https://buddydev.com
 * Plugin URI: https://buddydev.com/buddypress/bp-redirect-to-profile-plugin-redirect-users-to-their-profile-on-login-on-buddypress-sites/
 * License: GPL2 or Later
 */

// Do not allow direct access over web.
defined( 'ABSPATH' ) || exit;

/**
 * Redirect user to their profile if they are not admin.
 *
 * @param string  $redirect_to_calculated calculated redirect.
 * @param string  $redirect_url_specified specified redirect.
 * @param WP_User $user user.
 *
 * @return string
 */
function bpdev_redirect_to_profile( $redirect_to_calculated, $redirect_url_specified, $user ) {

	if ( ! $user || is_wp_error( $user ) ) {
		return $redirect_to_calculated;
	}

	// If the redirect is not specified, assume it to be dashboard.
	if ( empty( $redirect_to_calculated ) ) {
		$redirect_to_calculated = admin_url();
	}

	// if the user is not site admin, redirect to his/her profile.
	if ( function_exists( 'bp_core_get_user_domain' ) && ! is_super_admin( $user->ID ) ) {
		return bp_core_get_user_domain( $user->ID );
	}

	// if site admin or not logged in, do not do anything much.
	return $redirect_to_calculated;
}

add_filter( 'login_redirect', 'bpdev_redirect_to_profile', 100, 3 );
