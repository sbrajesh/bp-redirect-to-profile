<?php
/*
Plugin Name: BP Redirect to Profile for Buddypress
Description:Redirect user to their profile when they login
Version: 1.1.1
Requires at least: BuddyPress 1.1
Tested up to: BuddyPress 1.2.8+WordPress 3.1
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
Author: Brajesh Singh
Author URI: http://buddydev.com
Plugin URI:http://buddydev.com/buddypress/bp-redirect-to-profile-plugin-redirect-users-to-their-profile-on-login-on-buddypress-sites/
Last updated:16th feb 2010
*/
/***
    Copyright (C) 2009 Brajesh Singh(buddydev.com)

    This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or  any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses>.

    */
/*Add a filter to filter the redirect url for login*/
add_filter("login_redirect","bpdev_redirect_to_profile",100,3);

function bpdev_redirect_to_profile($redirect_to_calculated,$redirect_url_specified,$user){
/*if no redirect was specified,let us think ,user wants to be in wp-dashboard*/
if(empty($redirect_to_calculated))
	$redirect_to_calculated=admin_url();
	
	/*if the user is not super admin,redirect to his/her profile*/
	if(!is_super_admin($user->user_login))
		return apply_filters("bpdev_login_redicrect_url",bp_core_get_user_domain($user->ID ),$user->ID);//allow top redirect at other place if they want
	else
		return $redirect_to_calculated; /*if site admin or not logged in,do not do anything much*/

}
?>