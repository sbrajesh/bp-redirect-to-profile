=== BP Redirect to Profile ===
Contributors: buddydev, sbrajesh
Donate link: http://buddydev.com/donate/
Tags: buddypress, buddypress login, redirect,redirect to profile, buddypress login redirect
Requires at least: BuddyPress 1.1
Tested up to:BuddyPress 2.3.2.1
Stable tag: 1.2

BuddyPress Redirect to Profile is a buddypress plugin which redirects a user to their profile on login.
== Description ==

BuddyPress Login redirect plugin redirects user to their profile on a login, on a BuddyPress based social site. It's simple and helps to provide a better user experience.

Features include:

* Redirect all normal users to their profile on login
* If the admin logs in from site front page, redirect him back to front page.
* If the Site Admin logs in from site backend, i.e. using http://yoursite.com/wp-login.php, let him go to the WordPress dashboard

== Installation ==

The plugin is simple to install:

1. Download `bp-redirect-to-profile.zip`
1. Unzip
1. Upload `bp-redirect-to-profile` directory to your `/wp-content/plugins` directory
1. Go to the plugin management page and enable the plugin, Activate the plugin sitewide

Otherwise, Use the Plugin browser, upload it and activate, you are done.
Please note, The plugin must be activated network wide if you are using multisite.

== Frequently Asked Questions ==
= Does It stops Users from getting inside the wordpress dashboard =
Yes, and No both.It does not allow user to directly go to the wordpress Mu backend, but if a user manually tries to go to the wordpress backend, It does not stops it.
This plugin's sole purpose is to redirect users to their buddypress profile on login.

== Changelog == 
=== 1.2 ===
Code cleanup and testing with BuddyPress 2.3+

=== 1.1 === 
Support for Buddypress 1.2 added

=== 1.0 ===
Initial release


== Other ==

For more info visit us at [BuddyDev.com](http://buddydev.com/ "The best place for all BuddyPress based plugins, themes tutorials")