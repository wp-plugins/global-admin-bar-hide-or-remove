<?php
/*
Plugin Name: Global Hide Admin Toolbar - DEV
Plugin URI: //wordpress.org/plugins/global-admin-bar-hide-or-remove/
Description: Hide Front End Toolbar Manager According to Admin and User Roles (2014-05-18)
Version: 1.6.2
Author: <a title="Visit author homepage" href="//slangji.wordpress.com/">sLa NGjI's</a> & <a title="Visit plugin-master-author homepage" href="//www.fischercreativemedia.com/">Don Fischer</a>
License: GPLv2 or later (license.txt)
License URI: //www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: //www.gnu.org/prep/standards/standards.html
 *
Domain Path: /languages/
Text Domain: global-hide-remove-toolbar-plugin
Network: true
 *
 * LICENSING
 *
 * [Global Hide Admin Toolbar](//wordpress.org/plugins/global-admin-bar-hide-or-remove/)
 *
 * Hide Front End Admin Toolbar Manager According to User Roles
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
 * HUMANS (humans.txt)
 *
 * Thanks to Donald J. Fischer a.k.a prophecy2040 @ www.fischercreativemedia.com for this plugin!
 */

	/**
	 * @package		WordPress Plugin
	 * @subpackage	Global Hide Admin Toolbar
	 * @description	Hide Front End Admin Toolbar Manager According to User Roles
	 * @author		slangjis &CO prophecy2040
	 * @since		3.1+
	 * @status		Code in Becoming!
	 * @version		1.6.2
	 * @build		2014-05-18 1ST 2014-04-16
	 * @keytag		74be16979710d4c4e7c6647856088456
	 */

	if ( !function_exists( 'add_action' ) )

		{

			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );

				exit();

		}

	if ( !defined( 'WPINC' ) )

		{

			die();

		}

	if ( !defined( 'ABSPATH' ) ) exit();

	global $wp_version;

	if ( $wp_version < 3.1 )

		{

			wp_die( __( 'This Plugin Requires WordPress 3.1+ or Greater: Activation Stopped!' ) );

		}

	function ghatb_1st()

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

	add_action( 'activated_plugin', 'ghatb_1st', 0 );

	function ghatb_activate()

		{

			$getusablecleanroles       = get_usable_clean_roles();
			$hideadmintoolbarcleanup   = get_option( 'global-admin-bar-cleanup' );
			$pluginsettings            = get_option( 'global-admin-bar-settings' );
			$pluginsettingsroles       = get_option( 'global-admin-bar-roles' );
			$pluginsettingsrolesadmins = get_option( 'global-admin-bar-admins' );
			$pluginsettingsrolesusers  = get_option( 'global-admin-bar-users' );

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

			if ( $pluginsettingsroles == 0 )

				{

					add_option( 'global-admin-bar-roles', $getusablecleanroles );

				}

			if ( $hideadmintoolbarcleanup == 0 )

				{

					add_option( 'global-admin-bar-cleanup', '0' );

				}

			if ( $pluginsettings == 0 )

				{

					add_option( 'global-admin-bar-settings', '1' );

				}

			if ( $pluginsettingsrolesadmins == 0 )

				{

					add_option( 'global-admin-bar-admins', '0' );

				}

			if ( $pluginsettingsrolesusers == 0 )

				{

					add_option( 'global-admin-bar-users', '1' );

				}

			/**
			 * remove unnecessary and old options when activated for clean database
			 *
			 * sLa NGjI's 2014-05-16
			 */

			delete_option( 'global-admin-bar-plugin-setting' );
			delete_option( 'global-admin-bar-plugin-user-setting' );
			delete_option( 'global-admin-bar-profiles' );
			delete_option( 'global-admin-bar-users-roles' );

		}

	register_activation_hook( __FILE__, 'ghatb_activate' );

	function get_usable_clean_roles()

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

	function get_usable_roles( $name = 'roles' )

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

	function get_current_user_role()

		{

			global $wp_roles;

			$current_user = wp_get_current_user();
			$roles        = $current_user->roles;
			$role         = array_shift( $roles );

			return $role;

		}

	function get_profile_user_role()

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

	add_action( 'admin_init', 'global_adminbar_settings' );
	add_action( 'admin_menu', 'global_adminbar_menu' );
	add_action( 'network_admin_menu', 'global_adminbar_menu' );

	add_filter( 'show_admin_bar', 'global_show_hide_admin_bar' );

	function global_show_hide_admin_bar( $showvar )

		{

			global $show_admin_bar;

			$theRoles = get_option( 'global-admin-bar-roles' );
			$userRole = get_current_user_role();

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

			echo "\n\n<!--Start Plugin Global Hide Admin Tool Bar 1.6.2 Code-->\n\n";
			echo '<style type="text/css">.show-admin-bar{display:none !important}</style>';
			echo "\n\n<!--/ End Plugin Global Hide Admin Tool Bar 1.6.2 Code-->\n\n";

		}

	function ghatb_hide_admin_bar_setting_user_roles()

		{

			if ( get_option( 'global-admin-bar-users' ) == '1' )

				{

					if ( !current_user_can( 'administrator' ) )

						{

							add_action( 'admin_print_scripts-profile.php', 'ghatb_hide_admin_bar_setting', 9 );

						}

				}

		}

	add_action( 'admin_print_styles-profile.php', 'ghatb_hide_admin_bar_setting_user_roles' );
	add_action( 'admin_print_styles-user-edit.php', 'ghatb_hide_admin_bar_setting_user_roles' );
	add_action( 'init', 'ghatb_hide_admin_bar_setting_user_roles', 9 );

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

	function global_adminbar_settings()

		{

			register_setting( 'global-admin-bar-group', 'global-admin-bar-admins' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-cleanup' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-roles' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-settings' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-users' );

			$getusablecleanroles = get_usable_clean_roles();
			$pluginsettingsroles = get_option( 'global-admin-bar-roles' );

			if ( $pluginsettingsroles == '' )

				{

					update_option( 'global-admin-bar-roles', $getusablecleanroles );

				}

		}

	function ghatb_admin_bar_page()

		{

?>
<div class="wrap">
<h2 class="nav-tab-wrapper">
<a title="Visit plugin settings local page" href="?page=global_hide_toolbar_settings" class="nav-tab"><?php _e( 'Settings', 'global-hide-remove-toolbar-plugin' ); ?></a>
<a title="Visit plugin whatsnew external page on wordpress.org" href="//wordpress.org/plugins/global-admin-bar-hide-or-remove/changelog/" target="_blank" class="nav-tab"> <?php _e( 'What&#8217;s New', 'global-hide-remove-toolbar-plugin' ); ?></a>
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
<?php settings_fields( 'global-admin-bar-group' ); ?>
<table class="form-table">
<tr valign="top">
<td style="text-align:left;vertical-align:top" colspan="2">
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			echo '<p class="about-description">' . __( '<h3>Hide (turn off) front end Admin Bar displayed for logged in admins and user roles</h3>', 'global-hide-remove-toolbar-plugin' ) . "</p>\n";

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			echo '<p class="about-description">' . __( '<h3>Hide (turn off) front end Toolbar displayed for logged in admins and user roles</h3>', 'global-hide-remove-toolbar-plugin' ) . "</p>\n";

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

			_e( 'Hide Admin Bar on Front End for the following Logged In User Roles: (requires WordPress 3.1+ to 3.2+)', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Hide Toolbar on Front End for the following Logged In User Roles: (requires WordPress 3.3+ or later)', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;line-height:14px">&nbsp;</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<?php

	$uroles = get_usable_roles();

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

			_e( 'Hide "Show Admin Bar when viewing site" on <a title="Visit Your Profile Page" href="' . admin_url( 'profile.php' ) . '">Your Profile</a> for all User Roles - (except admin and super admin)', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Hide "Show Toolbar when viewing site" on <a title="Visit Your Profile Page" href="' . admin_url( 'profile.php' ) . '">Your Profile</a> for all User Roles - (except admin and super admin)', 'global-hide-remove-toolbar-plugin' );

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

			_e( 'Hide "Show Admin Bar when viewing site" on <a title="Visit Your Profile Page" href="' . admin_url( 'profile.php' ) . '">Your Profile</a> for Admins Roles - (including admin and super admin)', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Hide "Show Toolbar when viewing site" on <a title="Visit Your Profile Page" href="' . admin_url( 'profile.php' ) . '">Your Profile</a> for Admins Roles - (including admin and super admin)', 'global-hide-remove-toolbar-plugin' );

		}

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

			_e( 'Cleanup Admin Bar removing unnecessary passive links for all Admins and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Cleanup Toolbar removing unnecessary passive links for all Admins and User Roles', 'global-hide-remove-toolbar-plugin' );

		}

?>
</td>
</tr>
</table>
<!--//codex.wordpress.org/Creating_Options_Pages-->
<br>
<br>
<input title="Save Your Plugin Configuration Changes" type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'global-hide-remove-toolbar-plugin' ); ?>"/>
<!--<input title="Reset Plugin Default Configuration Settings" type="submit" class="button-primary" value="<?php //_e( 'Reset Default', 'global-hide-remove-toolbar-plugin' ); ?>"/>-->
</form>
</div>
<?php

		}

	function global_adminbar_menu()

		{

			$current_user = wp_get_current_user();

			if ( current_user_can( 'manage_options' ) )
			//if ( is_multisite() && current_user_can( 'manage_options' ) )
			//if ( is_multisite() && is_admin() )
			//if ( is_multisite() && is_super_admin() )
			//elseif ( !is_multisite() && current_user_can( 'manage_options' ) )

				{

					global $wp_version;

					if ( $wp_version < 3.3 )

						{

							add_options_page( __( 'Hide Admin Bar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Admin Bar UCMO', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global_hide_toolbar_settings', 'ghatb_admin_bar_page' );

						}

					global $wp_version;

					if ( $wp_version >= 3.3 )

						{

							add_options_page( __( 'Hide Toolbar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Toolbar Options UCMO', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global_hide_toolbar_settings', 'ghatb_admin_bar_page' );

						}

				}

			elseif ( is_multisite() && !is_super_admin() )

				{

					$theRoles = get_option( 'global-admin-bar-roles' );

					if ( !is_array( $theRoles ) )

						{

							$theRoles = array();

						}

					if ( !in_array( get_current_user_role(), $theRoles ) )

						{

							global $wp_version;

							if ( $wp_version < 3.3 )

								{

									add_options_page( __( 'Hide Admin Bar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Admin Bar', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global_hide_toolbar_settings', 'ghatb_admin_bar_page' );

								}

							global $wp_version;

							if ( $wp_version >= 3.3 )

								{

									add_options_page( __( 'Hide Toolbar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Toolbar Options', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global_hide_toolbar_settings', 'ghatb_admin_bar_page' );

								}

						}

				}

			elseif ( is_multisite() && current_user_can( 'manage_network_options' ) )

				{

					global $wp_version;

					if ( $wp_version < 3.3 )

						{

							add_options_page( __( 'Hide Admin Bar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Admin Bar', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global_hide_toolbar_settings', 'ghatb_admin_bar_page' );

						}

					global $wp_version;

					if ( $wp_version >= 3.3 )

						{

							add_options_page( __( 'Hide Toolbar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Toolbar Options UCMNO', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global_hide_toolbar_settings', 'ghatb_admin_bar_page' );

						}
	
				}

			elseif ( !is_multisite() && current_user_can( 'manage_options' ) )

				{

					global $wp_version;

					if ( $wp_version < 3.3 )

						{

							add_options_page( __( 'Hide Admin Bar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Admin Bar', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global_hide_toolbar_settings', 'ghatb_admin_bar_page' );

						}

					global $wp_version;

					if ( $wp_version >= 3.3 )

						{

							add_options_page( __( 'Hide Toolbar Options', 'global-hide-remove-toolbar-plugin' ), __( 'Hide Toolbar Options UCMO', 'global-hide-remove-toolbar-plugin' ), 'manage_options', 'global_hide_toolbar_settings', 'ghatb_admin_bar_page' );

						}
	
				}

			return;

		}

	function ghatb_action_init()
		{

			load_plugin_textdomain( 'global-hide-remove-toolbar-plugin', false, dirname( plugin_basename( __FILE__ ) ) . 'languages/' );

		}

	function global_adminbar_filter_plugin_actions( $links )

		{

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			$links[] = '<a title="Visit plugin settings page" href="' . admin_url( 'options-general.php?page=global_hide_toolbar_settings' ) . '">' . __( 'Settings', 'global-hide-remove-toolbar-plugin' ) . '</a>';

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			$links[] = '<a title="Visit plugin settings page" href="' . admin_url( 'options-general.php?page=global_hide_toolbar_settings' ) . '">' . __( 'Settings', 'global-hide-remove-toolbar-plugin' ) . '</a>';

		}

			return $links;

		}

	add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'global_adminbar_filter_plugin_actions' );

	function ghatb_prml( $links, $file )

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

							$links[] = '<a title="Visit other author plugins" href="//slangji.wordpress.com/plugins/">Other Plugins</a>';

						}

					if ( $wp_version >= 3.8 )

						{

							$links[] = '<a title="Visit other author plugins" href="//slangji.wordpress.com/plugins/">Other</a>';

						}

				}

			return $links;

		}

	add_filter( 'plugin_row_meta', 'ghatb_prml', 10, 2 );

	function ghatb_shfl()

		{

			echo "\n<!--Plugin Global Hide Admin Tool Bar 1.6.2 Active - Tag ".md5(md5("".""))."-->\n";
			echo "\n<!-- This website is patched against a big core annoyance since WordPress 3.3+ to date -->\n\n";

		}

	add_action( 'wp_head', 'ghatb_shfl', 0 );
	add_action( 'wp_footer', 'ghatb_shfl', 0 );

	function ghatb_deactivate()

		{

			/**
			 * remove unnecessary and old options when deactivated or updated for clean database
			 *
			 * sLa NGjI's 2014-05-16
			 */

			delete_option( 'global-admin-bar-plugin-setting' );
			delete_option( 'global-admin-bar-plugin-user-setting' );
			delete_option( 'global-admin-bar-profiles' );

			/**
			 * delete inactive options when deactivated or updated for clean database
			 *
			 * loosing user settings when deactivated or updated plugin?
			 * add options to delete or not delete custom user settings?
			 *
			 * sLa NGjI's 2014-05-18
			 */

			//delete_option( 'global-admin-bar-admins' );
			//delete_option( 'global-admin-bar-cleanup' );
			//delete_option( 'global-admin-bar-roles' );
			//delete_option( 'global-admin-bar-settings' );
			//delete_option( 'global-admin-bar-users' );

		}

	register_deactivation_hook( __FILE__, 'ghatb_deactivate' );

?>