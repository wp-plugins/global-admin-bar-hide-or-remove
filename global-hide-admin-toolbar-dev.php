<?php
/*
Plugin Name: Global Hide Toolbar - DEV
Plugin URI: //wordpress.org/plugins/global-admin-bar-hide-or-remove/
Description: Hide Front End Toolbar Manager According to Admin and User Roles (2014-05-28) This could become obsolete if <strong>Core Team</strong> adds its own global options <a title="WordPress features are being developed plugins first" href="//make.wordpress.org/core/features-as-plugins/">features are being developed plugins first</a>.
Version: 1.6.2
Author: <a title="Visit author homepage" href="//slangji.wordpress.com/">sLa NGjI's</a> & <a title="Visit plugin-master-author homepage" href="//www.fischercreativemedia.com/">D.Fischer</a>
License: GPLv2 or later (license.txt)
License URI: //www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: //www.gnu.org/prep/standards/standards.html
 *
Domain Path: /languages/
Text Domain: global-hide-remove-toolbar-plugin
 *
 * LICENSING
 *
 * [Global Hide Admin Tool Bar](//wordpress.org/plugins/global-admin-bar-hide-or-remove/)
 *
 * Global Hide Front and Back End Toolbar Manager According to Admin and User Roles
 *
 * Copyright (C) 2013-2014 [slangjis](//slangji.wordpress.com/) (email: <slangjis [at] googlegmail [dot] com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](//wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * on an "AS IS", but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](//www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](//www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THERMS
 *
 * This global-hide-admin-tool-bar.php uses (or it parts) code derived from:
 *
 * global-admin-bar-hide-or-remove.php by Donald J. Fischer (email: <dfischer [at] fischercreativemedia [dot] com>)
 * Copyright (C) 2011-2013 [prophecy2040](//www.fischercreativemedia.com/) (email: <dfischer [at] fischercreativemedia [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later) this uses or it parts code was derived.
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2014 [slangjis](//slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 * Copyright (C) 2011-2013 Donald J. Fischer (email: <dfischer [at] fischercreativemedia [dot] com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](//www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](//wordpress.org/plugins/about/guidelines/)
 * paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * CODING
 *
 * This software implement [GNU style](//www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to
 * WordPress [Readme Validator](//wordpress.org/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * HUMANS
 *
 * See included humans.txt
 *
 * THANKS
 *
 * To Donald J. Fischer a.k.a prophecy2040 @ www.fischercreativemedia.com for this plugin!
 *
 * TODO
 *
 * End of May 2014
 *
 * Planned for Version 1.6.2 - Ticket [#4937543](//wordpress.org/support/topic/only-partially-works/)
 * Planned for Version 1.6.2 - New Simple but Innovative Plugin Options
 * Planned for Version 1.6.2 - Code Cleanup and Optimization
 * Planned for Version 1.6.2 - New Security Rules
 * Planned for Version 1.6.2 - Making New Interface and Features Screenshots
 *
 * End of June or July 2014
 *
 * Planned for Version 1.6.3 - [Multisite Support](//wordpress.org/support/topic/not-working-with-wp-39-and-bp-2/) if is possible
 * Planned for Version 1.6.3 - Making New Multisite Screenshots
 *
 * August 27, 2014
 *
 * Planned for Version 1.7.0 - [Code Merge Migration](//wordpress.org/support/topic/brute-force-plugin-code-migration/) to WP Admin Bar Removal and WP Toolbar Removal
 * Planned for Version 1.7.0 - Integration of Main Plugin with WP Toolbar Node Removal and WP Admin Bar Node Removal
 * Planned for Version 1.7.0 - New Advanced and Integrated Innovative Plugin Options
 * Planned for Version 1.7.0 - Full WordPress 4.0+ Compatibility and Support
 * Planned for Version 1.7.0 - Making New Options Screenshots
 * Planned for Version 1.7.0 - All changes for Pro Only Version ?
 *
 * December 10, 2014
 *
 * Planned for Version 1.8.0 - Full WordPress 4.1+ Compatibility and Support
 * Planned for Version 1.8.0 - Full sLa NGjI's Keytag Support ?
 * Planned for Version 1.8.0 - Themes Framework Shortcodes Integration Support ?
 */

	/**
	 * @package		WordPress Plugin
	 * @subpackage	Global Hide Admin Tool Bar
	 * @description	Global Hide Front and Back End Toolbar Manager According to Admin and User Roles
	 * @author		slangjis &CO prophecy2040
	 * @since		3.1+
	 * @status		Code in Becoming!
	 * @version		1.6.2
	 * @build		2014-05-28 1ST 2014-04-14
	 * @keytag		74be16979710d4c4e7c6647856088456
	 */

	if ( !function_exists( 'add_action' ) )

		{

			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );

				exit;

		}

	if ( !defined( 'ABSPATH' ) ) exit;

	if ( !defined( 'WPINC' ) ) exit;

	global $wp_version;

	if ( $wp_version < 3.1 )

		{

			wp_die( __( 'This Plugin Requires WordPress 3.1+ or Greater: Activation Stopped!' ) );

		}

	function ghatb_1st_dev()

		{

			$wp_path_to_this_file = preg_replace( '/(.*)plugins\/(.*)$/', WP_PLUGIN_DIR . "/$2", __FILE__ );
			$this_plugin          = plugin_basename( trim( $wp_path_to_this_file ) );
			$active_plugins       = get_option( 'active_plugins' );
			$this_plugin_key      = array_search( $this_plugin, $active_plugins );

			if ( $this_plugin_key )

				{

					array_splice( $active_plugins, $this_plugin_key, 1 );
					array_unshift( $active_plugins, $this_plugin );
					update_option( 'active_plugins', $active_plugins );

				}

		}

	add_action( 'activated_plugin', 'ghatb_1st_dev', 0 );

	function ghatb_activate_dev()

		{

			$getusablecleanroles           = get_usable_clean_roles_dev();
			$hideadmintoolbarcleanup       = get_option( 'global-admin-bar-cleanup' );
			$hideadmintoolbardisable       = get_option( 'global-admin-bar-disable' );
			$hideadmintoolbaroptimize      = get_option( 'global-admin-bar-optimize' );
			$hideadmintoolbarremove        = get_option( 'global-admin-bar-remove' );
			$hideadmintoolbarspeedup       = get_option( 'global-admin-bar-speedup' );
			$pluginsettings                = get_option( 'global-admin-bar-settings' );
			$pluginsettingsresetdefault    = get_option( 'global-admin-bar-default' );
			$pluginsettingsroles           = get_option( 'global-admin-bar-roles' );
			$pluginsettingsrolesadmins     = get_option( 'global-admin-bar-admins' );
			$pluginsettingsrolesanonymous  = get_option( 'global-admin-bar-show' );
			$pluginsettingsrolesusers      = get_option( 'global-admin-bar-users' );

			/**
			 * Don Fischer 2014-04-18
			 * sLa NGjI's  2014-05-18
			 */
			$adminskey = array_search( "administrator", $getusablecleanroles );

			/**
			 * Don Fischer 2014-04-18
			 * sLa NGjI's  2014-05-18
			 */
			if ( $adminskey !== false )

				{

					unset( $getusablecleanroles[ $adminskey ] );

				}

			if ( $pluginsettings == 0 )

				{

					add_option( 'global-admin-bar-settings', '1' );

				}

			if ( $pluginsettingsresetdefault == 0 )

				{

					add_option( 'global-admin-bar-default', '0' );

				}

			if ( $pluginsettingsroles == 0 )

				{

					add_option( 'global-admin-bar-roles', $getusablecleanroles );

				}

			if ( $pluginsettingsrolesadmins == 0 )

				{

					add_option( 'global-admin-bar-admins', '0' );

				}

			if ( $pluginsettingsrolesanonymous == 0 )

				{

					add_option( 'global-admin-bar-show', '0' );

				}

			if ( $pluginsettingsrolesusers == 0 )

				{

					add_option( 'global-admin-bar-users', '1' );

				}

			if ( $hideadmintoolbarcleanup == 0 )

				{

					add_option( 'global-admin-bar-cleanup', '0' );

				}

			if ( $hideadmintoolbardisable == 0 )

				{

					add_option( 'global-admin-bar-disable', '0' );

				}

			if ( $hideadmintoolbaroptimize == 0 )

				{

					add_option( 'global-admin-bar-optimize', '0' );

				}

			if ( $hideadmintoolbarremove == 0 )

				{

					add_option( 'global-admin-bar-remove', '0' );

				}

			if ( $hideadmintoolbarspeedup == 0 )

				{

					add_option( 'global-admin-bar-speedup', '0' );

				}

			/**
			 * update old options when activated to match new options and save customized settings
			 *
			 * sLa NGjI's 2014-05-23
			 */
			update_option( 'global-admin-bar-plugin-setting', 'global-admin-bar-settings' );
			update_option( 'global-admin-bar-plugin-user-setting', 'global-admin-bar-users' );

			/**
			 * remove unnecessary and old options when activated for clean database
			 *
			 * sLa NGjI's 2014-05-16
			 */

			delete_option( 'global-admin-bar-plugin-setting' );
			delete_option( 'global-admin-bar-plugin-user-setting' );
			delete_option( 'global-admin-bar-profiles' );

			if ( get_option( 'global-admin-bar-admins' ) == '0' )

				{

					delete_option( 'global-admin-bar-admins' );

				}

			if ( get_option( 'global-admin-bar-optimize' ) == '0' )

				{

					delete_option( 'global-admin-bar-optimize' );

				}

		}

	register_activation_hook( __FILE__, 'ghatb_activate_dev' );

	function get_usable_clean_roles_dev()

		{

			global $wp_roles;

			$all_roles      = $wp_roles->roles;
			$newArr         = array();
			$editable_roles = apply_filters( 'editable_roles', $all_roles );

			if ( count( $editable_roles ) > 0 )

				{

					foreach ( $editable_roles as $key => $roledata )

						{

							$newArr[] = $key;

						}

				}

			return $newArr;

		}

	function get_usable_roles_dev( $name = 'roles' )

		{

			if ( ( is_multisite() && is_super_admin() ) || ( is_multisite() && is_admin() ) || ( is_multisite() && current_user_can( 'manage_options' ) ) || ( !is_multisite() && current_user_can( 'manage_options' ) ) || ( is_multisite() && current_user_can( 'manage_network_options' ) ) || ( !is_multisite() && current_user_can( 'manage_network_options' ) ) )

				{

					global $wp_roles;

					$theRoles       = get_option( 'global-admin-bar-' . $name );
					$newArr         = array();
					$all_roles      = $wp_roles->roles;
					$editable_roles = apply_filters( 'editable_roles', $all_roles );

					if ( !is_array( $theRoles ) )

						{

							$theRoles = array();

						}

					if ( count( $editable_roles ) > 0 )

						{

							global $wp_version;

							if ( $wp_version < 3.3 )

								{

									$newArr[] = '<div style="clear:both">&nbsp;</div>';

								}

							$newArr[] = '<ul>';

							foreach ( $editable_roles as $key => $roledata )

								{

									if ( in_array( $key, $theRoles ) )

										{

											$newArr[] = '<li style="float:left">&nbsp;&nbsp;<input type="checkbox" name="global-admin-bar-' . $name . '[]" value="' . $key . '" checked="checked"/>' . $key . '</li>';

										}

									else

										{

											$newArr[] = '<li style="float:left">&nbsp;&nbsp;<input type="checkbox" name="global-admin-bar-' . $name . '[]" value="' . $key . '"/>' . $key . '</li>';

										}

								}

							$newArr[] = '</ul>';

							$newArr[] = '<div style="clear:both">&nbsp;</div>';

						}

					return $newArr;

				}

		}

	function get_current_user_role_dev()

		{

			global $wp_roles;

			$current_user = wp_get_current_user();
			$roles        = $current_user->roles;
			$role         = array_shift( $roles );

			return $role;

		}

	function get_profile_user_role_dev_dev()

		{

			global $wp_roles, $user_id;

			$user_id      = (int) $user_id;
			$current_user = wp_get_current_user();
			$profileuser  = get_user_to_edit( $user_id );

			if ( $user_id != $current_user->ID )

				{

					$roles = $profileuser->roles;
					$role  = array_shift( $roles );

					return $role;

				}

			return;

		}

	global $show_admin_bar;

	add_action( 'admin_init', 'ghatb_settings_dev' );

	add_filter( 'show_admin_bar', 'global_show_hide_admin_bar_dev' );

	function global_show_hide_admin_bar_dev( $showvar )

		{

			global $show_admin_bar;

			$theRoles = get_option( 'global-admin-bar-roles' );
			$userRole = get_current_user_role_dev();

			if ( get_option( 'global-admin-bar-settings' ) == '1' && in_array( $userRole, $theRoles ) )

				{

					$show_admin_bar = false;

					return false;

				}

			else

				{

					return $showvar;

				}

		}

	function ghatb_hide_admin_bar_setting()

		{

			echo "\n\n<!--Start Plugin Global Hide Admin Tool Bar Code-->\n\n";
			echo '<style type="text/css">.show-admin-bar{display:none !important}</style>';
			echo "\n\n<!--/ End Plugin Global Hide Admin Tool Bar Code-->\n\n";

		}

//-----------------------------------------------------------------------------------------------------

	function global_hide_admin_tool_bar_cleanup()

		{

	function wptbr_ngr_rbcb()

		{

			if ( has_filter( 'wp_head', '_admin_bar_bump_cb' ) )

				{

					remove_filter( 'wp_head', '_admin_bar_bump_cb' );

				}

		}

	add_filter( 'wp_head', 'wptbr_ngr_rbcb', 1 );

	function wptbr_ngr_rams()
		{
			// WordPress Admin Menu Shadow Removal
			echo "\n<!--Start Plugin ToolBar Removal Node Code-->\n\n";
			echo '<style type="text/css">#adminmenushadow,#adminmenuback{background-image:none}</style>';
			echo "\n\n<!--/ End Plugin ToolBar Removal Node Code-->\n\n";
		}

	if ( ( $wp_version >= 3.2 ) or ( $wp_version <= 3.8 ) )

		{
			add_action( 'admin_head', 'wptbr_ngr_rams' );
		}

	function wptbr_ngr_rbp()
		{
			add_filter( 'show_wp_pointer_admin_bar', '__return_false' );
		}

	if ( $wp_version >= 3.2 )

		{
			add_filter( 'init', 'wptbr_ngr_rbp', 9 );
		}

		}

//--------------------------------------------------------------------

	function global_hide_admin_tool_bar_cleanup_init()

		{

			if ( get_option( 'global-admin-bar-optimize' ) == '1' )

				{

					add_action( 'init', 'global_hide_admin_tool_bar_cleanup', 9 );

				}

		}

	add_action( 'init', 'global_hide_admin_tool_bar_cleanup_init', 9 );

	function ghatb_hide_admin_bar_setting_user_roles_all()

		{
	
			if ( get_option( 'global-admin-bar-admins' ) == '1' )

				{

					if ( current_user_can( 'administrator' ) )

						{

							add_action( 'admin_print_scripts-profile.php', 'ghatb_hide_admin_bar_setting', 9 );

						}

				}

		}

	add_action( 'admin_print_styles-profile.php', 'ghatb_hide_admin_bar_setting_user_roles_all' );
	add_action( 'admin_print_styles-user-edit.php', 'ghatb_hide_admin_bar_setting_user_roles_all' );
	add_action( 'init', 'ghatb_hide_admin_bar_setting_user_roles_all', 9 );

	function ghatb_settings_dev()

		{

			register_setting( 'global-admin-bar-group', 'global-admin-bar-admins' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-cleanup' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-default' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-disable' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-optimize' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-remove' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-roles' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-settings' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-show' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-speedup' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-users' );

			$getusablecleanroles = get_usable_clean_roles_dev();
			$pluginsettingsroles = get_option( 'global-admin-bar-roles' );

			if ( $pluginsettingsroles == '' )

				{

					update_option( 'global-admin-bar-roles', $getusablecleanroles );

				}

		}

	function ghatb_admin_bar_page_dev()

		{

			global $wp_version;

			if ( $wp_version < 3.8 )

				{

					echo "\n<!--Start Plugin Global Hide Admin Tool Bar Code-->\n\n";
					echo '<style type="text/css">.nav-tab-active-hover{background:#ffffff}</style>';
					echo "\n\n<!--/ End Plugin Global Hide Admin Tool Bar-->\n\n";

				}

			global $wp_version;

			if ( $wp_version >= 3.8 )

				{

					echo "\n<!--Start Plugin Global Hide Admin Tool Bar Code-->\n\n";
					echo '<style type="text/css">.nav-tab-active-hover{border-bottom:1px solid #f1f1f1;background:#f1f1f1;color:#000}</style>';
					echo "\n\n<!--/ End Plugin Global Hide Admin Tool Bar-->\n\n";

				}

?>
<div class="wrap">
<h2 class="nav-tab-wrapper">
<a href="?page=global-hide-toolbar" title="Visit plugin settings local page" class="nav-tab nav-tab-active-hover"><?php _e( 'Settings', 'global-hide-remove-toolbar-plugin' ); ?></a>
<a href="//wordpress.org/plugins/global-admin-bar-hide-or-remove/changelog/" title="Visit plugin whatsnew external page on wordpress.org (opened on new tab or page)" class="nav-tab" target="_blank"><?php _e( 'What&#8217;s New', 'global-hide-remove-toolbar-plugin' ); ?></a>
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Global Hide Admin Bar - 1.6.2', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Global Hide Toolbar - 1.6.2', 'global-hide-remove-toolbar-plugin' );

		}

?>
</h2>
<form method="post" action="options.php">
<?php

	settings_fields( 'global-admin-bar-group' );

?>
<table class="form-table">
<tr valign="top">
<td style="text-align:left;vertical-align:top" colspan="2">
<?php

	if ( !is_multisite() )

		{

			_e( '<strong>Single Mode Options</strong>', 'global-hide-remove-toolbar-plugin' );

		}

	if ( is_multisite() )

		{

			_e( '<strong>Multisite Mode Options</strong>', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( ' (requires WordPress 3.1+ to 3.2+)', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( ' (requires WordPress 3.3+ or later)', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-settings" value="1"
<?php

	if ( get_option( 'global-admin-bar-settings' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-settings' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Hide Admin Bar on Front End for the following Logged In Admin and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Hide Toolbar on Front End for the following Logged In Admin and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px">&nbsp;</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	$uroles = get_usable_roles_dev();

	echo implode( $uroles );

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-users" value="1"
<?php

	if ( get_option( 'global-admin-bar-users' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-users' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Hide "Show Admin Bar when viewing site" on <a title="Visit Your Profile Page" href="' . admin_url( 'profile.php' ) . '">Your Profile</a> for all User Roles (except admin and super admin)', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Hide "Show Toolbar when viewing site" on <a title="Visit Your Profile Page" href="' . admin_url( 'profile.php' ) . '">Your Profile</a> for all User Roles (except admin and super admin)', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-admins" value="1"
<?php

	if ( get_option( 'global-admin-bar-admins' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-admins' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Hide "Show Admin Bar when viewing site" on <a title="Visit Your Profile Page" href="' . admin_url( 'profile.php' ) . '">Your Profile</a> for Admins Roles (including admin and super admin)', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Hide "Show Toolbar when viewing site" on <a title="Visit Your Profile Page" href="' . admin_url( 'profile.php' ) . '">Your Profile</a> for Admins Roles (including admin and super admin)', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:left;vertical-align:top" colspan="2">
<?php

	echo __( '<strong>Beta Test Options</strong> (stable but unsupported)', 'global-hide-remove-toolbar-plugin' );

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-cleanup" value="1"
<?php

	if ( get_option( 'global-admin-bar-cleanup' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-cleanup' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Cleanup Admin Bar with totally removing node for all Admin, Anonymous and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Cleanup Toolbar with totally removing node for all Admin, Anonymous and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-optimize" value="1"
<?php

	if ( get_option( 'global-admin-bar-optimize' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-optimize' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Optimize Admin Bar disabling unnecessary passive node for all Admin, Anonymous and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Optimize Toolbar disabling unnecessary passive node for all Admin, Anonymous and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-speedup" value="1"
<?php

	if ( get_option( 'global-admin-bar-speedup' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-speedup' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	_e( 'Speedup Control Panel disabling annoyances for all Admin, Anonymous and User Roles', 'global-hide-remove-toolbar-plugin' );

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	echo __( '<h6>Please noted that: all options was auto cleaned from wp_option database, if unchecked, to reduce size, optimize tables and maintain best performances!</h6>', 'global-hide-remove-toolbar-plugin' );

?>
</td>
</tr>
</table>
<p>
<input title="Save Plugin Configuration Changes" type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'global-hide-remove-toolbar-plugin' ); ?>"/>
</p>
</form>
</div>
<div class="wrap" id="future">
<table class="form-table">
<tr valign="top">
<td style="text-align:left;vertical-align:top" colspan="2">
<?php

	echo __( '<strong>Future v1.7.0 Options</strong> (inactive)', 'global-hide-remove-toolbar-plugin' );

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-disable" value="1"
<?php

	if ( get_option( 'global-admin-bar-disable' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-disable' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Disable Admin Bar on Front and Back End for selected Logged In Admin and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Disable Toolbar on Front and Back End for selected Logged In Admin and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-remove" value="1"
<?php

	if ( get_option( 'global-admin-bar-remove' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-remove' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Remove Admin Bar on Front and Back End for all Logged In and Out Admin, Anonymous and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Remove Toolbar on Front and Back End for all Logged In and Out Admin, Anonymous and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-show" value="1"
<?php

	if ( get_option( 'global-admin-bar-show' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-show' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Show Admin Bar Always Visible on Front End for not authenticated Logged Out Anonymous Roles', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Show Toolbar Always Visible on Front End for not authenticated Logged Out Anonymous Roles', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px;width:25px">
<input type="checkbox" name="global-admin-bar-default" value="1"
<?php

	if ( get_option( 'global-admin-bar-default' ) == '1' )

		{

			echo 'checked="checked"';

		}

	else

		{

			delete_option( 'global-admin-bar-default' );

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	_e( 'Reset to Default Value all Options of this Plugin.', 'global-hide-remove-toolbar-plugin' );

?>
</td>
</tr>
</table>
</div>
<?php

		}

	function ghatb_control_panel_admin_menu_dev()

		{

			$current_user = wp_get_current_user();

			if ( !is_multisite() && is_admin() && current_user_can( 'manage_options' ) )

				{

					global $wp_version;

					if ( $wp_version < 3.3 )

						{

							add_options_page( __( 'Hide Admin Bar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Admin Bar', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global-hide-toolbar', 'ghatb_admin_bar_page_dev' );

						}

					global $wp_version;

					if ( $wp_version >= 3.3 )

						{

							add_options_page( __( 'Hide Toolbar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Toolbar Options', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global-hide-toolbar', 'ghatb_admin_bar_page_dev' );

						}

				}

			elseif ( is_multisite() && is_super_admin() && current_user_can( 'manage_network_options' ) )

				{

					global $wp_version;

					if ( $wp_version < 3.3 )

						{

							add_options_page( __( 'Hide Admin Bar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Admin Bar', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global-hide-toolbar', 'ghatb_admin_bar_page_dev' );

						}

					global $wp_version;

					if ( $wp_version >= 3.3 )

						{

							add_options_page( __( 'Hide Toolbar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Toolbar Options', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global-hide-toolbar', 'ghatb_admin_bar_page_dev' );

						}

				}

		}

	add_action( 'admin_menu', 'ghatb_control_panel_admin_menu_dev' );

	function ghatb_languages()

		{

			load_plugin_textdomain( 'global-hide-remove-toolbar-plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

		}

	function ghatb_filter_plugin_actions_dev( $links )

		{

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			$links[] = '<a title="Visit plugin settings page" href="' . admin_url( 'options-general.php?page=global-hide-toolbar' ) . '">' . __( 'Settings', 'global-hide-remove-toolbar-plugin' ) . '</a>';

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			$links[] = '<a title="Visit plugin settings page" href="' . admin_url( 'options-general.php?page=global-hide-toolbar' ) . '">' . __( 'Settings', 'global-hide-remove-toolbar-plugin' ) . '</a>';

		}

			return $links;

		}

	add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'ghatb_filter_plugin_actions_dev' );

	function ghatb_prml_dev( $links, $file )

		{

			if ( $file == plugin_basename( __FILE__ ) )

				{

					global $wp_version;

					if ( $wp_version < 3.8 )

						{

							$links[] = '<a title="Bugfix and Suggestions" href="//slangji.wordpress.com/contact/">Contact</a>';

						}

					$links[] = '<a title="Offer a Beer to sLa" href="//slangji.wordpress.com/donate/">Donate</a>';

					global $wp_version;

					if ( $wp_version < 3.8 )

						{

							$links[] = '<a title="Visit other author plugins site" href="//slangji.wordpress.com/plugins/">Other Plugins</a>';

						}

					if ( $wp_version >= 3.8 )

						{

							$links[] = '<a title="Visit other author plugins site" href="//slangji.wordpress.com/plugins/">Other</a>';

						}

				}

			return $links;

		}

	add_filter( 'plugin_row_meta', 'ghatb_prml_dev', 10, 2 );

	function ghatb_shfl_dev()

		{

			echo "\n<!--Plugin Global Hide Admin Tool Bar 1.6.2 Build 2014-05-28 Active - Tag ".md5(md5("".""))."-->\n";
			echo "\n<!-- This website is patched against a big core annoyance since WordPress 3.3+ to date -->\n\n";

		}

	add_action( 'wp_head', 'ghatb_shfl_dev', 0 );
	add_action( 'wp_footer', 'ghatb_shfl_dev', 0 );

	function ghatb_deactivate()

		{

			/**
			 * remove unnecessary and old options when deactivated or updated for clean database
			 *
			 * sLa NGjI's 2014-05-16
			 */

			delete_option( 'global-admin-bar-plugin-profiles' );
			delete_option( 'global-admin-bar-plugin-roles' );
			delete_option( 'global-admin-bar-plugin-setting' );
			delete_option( 'global-admin-bar-plugin-user-setting' );
			delete_option( 'global-admin-bar-profiles' );

			/**
			 * delete inactive options when deactivated or updated for clean database
			 *
			 * loosing user settings when deactivated or updated plugin?
			 * add options to delete or not delete custom user settings?
			 *
			 * sLa NGjI's 2014-05-19
			 */

			//delete_option( 'global-admin-bar-admins' );
			//delete_option( 'global-admin-bar-cleanup' );
			//delete_option( 'global-admin-bar-disable' );
			//delete_option( 'global-admin-bar-optimize' );
			//delete_option( 'global-admin-bar-remove' );
			//delete_option( 'global-admin-bar-roles' );
			//delete_option( 'global-admin-bar-settings' );
			//delete_option( 'global-admin-bar-show' );
			//delete_option( 'global-admin-bar-speedup' );
			//delete_option( 'global-admin-bar-users' );

		}

	register_deactivation_hook( __FILE__, 'ghatb_deactivate' );

?>