<?php
/*
Plugin Name: yourls_action_log
Plugin URI: 
Description: logs debug output in /tmp/yourls_actions.log when an action is triggered
Version: 1.0
Author: lkang
Author URI: 
*/

// Hook custom function into each action
yourls_add_action('activated_','action_log_activated_' );
yourls_add_action('activated_plugin','action_log_activated_plugin' );
yourls_add_action('add_new_link_already_stored','action_log_add_new_link_already_stored' );
yourls_add_action('add_new_link_create_keyword','action_log_add_new_link_create_keyword' );
yourls_add_action('add_new_link_custom_keyword','action_log_add_new_link_custom_keyword' );
yourls_add_action('add_option','action_log_add_option' );
yourls_add_action('admin_headers','action_log_admin_headers' );
yourls_add_action('admin_init','action_log_admin_init' );
yourls_add_action('admin_menu','action_log_admin_menu' );
yourls_add_action('admin_notice','action_log_admin_notice' );
yourls_add_action('admin_notices','action_log_admin_notices' );
yourls_add_action('admin_page_after_table','action_log_admin_page_after_table' );
yourls_add_action('admin_page_before_content','action_log_admin_page_before_content' );
yourls_add_action('admin_page_before_form','action_log_admin_page_before_form' );
yourls_add_action('admin_page_before_table','action_log_admin_page_before_table' );
yourls_add_action('api','action_log_api' );
yourls_add_action('api_output','action_log_api_output' );
yourls_add_action('auth_successful','action_log_auth_successful' );
yourls_add_action('bookmarklet','action_log_bookmarklet' );
yourls_add_action('check_ip_flood','action_log_check_ip_flood' );
yourls_add_action('deactivated_','action_log_deactivated_' );
yourls_add_action('deactivated_plugin','action_log_deactivated_plugin' );
yourls_add_action('delete_link','action_log_delete_link' );
yourls_add_action('delete_option','action_log_delete_option' );
yourls_add_action('deprecated_function','action_log_deprecated_function' );
yourls_add_action('get_keyword_not_cached','action_log_get_keyword_not_cached' );
yourls_add_action('html_addnew','action_log_html_addnew' );
yourls_add_action('html_footer','action_log_html_footer' );
yourls_add_action('html_head','action_log_html_head' );
yourls_add_action('html_logo','action_log_html_logo' );
yourls_add_action('html_tfooter','action_log_html_tfooter' );
yourls_add_action('infos_keyword_not_found','action_log_infos_keyword_not_found' );
yourls_add_action('infos_no_keyword','action_log_infos_no_keyword' );
yourls_add_action('init','action_log_init' );
yourls_add_action('insert_link','action_log_insert_link' );
yourls_add_action('ip_flood','action_log_ip_flood' );
yourls_add_action('load_template_go','action_log_load_template_go' );
yourls_add_action('load_template_infos','action_log_load_template_infos' );
yourls_add_action('load_template_redirect_admin','action_log_load_template_redirect_admin' );
yourls_add_action('load_textdomain','action_log_load_textdomain' );
yourls_add_action('loader_failed','action_log_loader_failed' );
yourls_add_action('login','action_log_login' );
yourls_add_action('login_failed','action_log_login_failed' );
yourls_add_action('logout','action_log_logout' );
yourls_add_action('plugins_loaded','action_log_plugins_loaded' );
yourls_add_action('post_add_new_link','action_log_post_add_new_link' );
yourls_add_action('post_page','action_log_post_page' );
yourls_add_action('post_redirect_javascript','action_log_post_redirect_javascript' );
yourls_add_action('post_yourls_info_location','action_log_post_yourls_info_location' );
yourls_add_action('post_yourls_info_sources','action_log_post_yourls_info_sources' );
yourls_add_action('post_yourls_info_stats','action_log_post_yourls_info_stats' );
yourls_add_action('pre_add_new_link','action_log_pre_add_new_link' );
yourls_add_action('pre_api_output','action_log_pre_api_output' );
yourls_add_action('pre_check_ip_flood','action_log_pre_check_ip_flood' );
yourls_add_action('pre_edit_link','action_log_pre_edit_link' );
yourls_add_action('pre_get_keyword','action_log_pre_get_keyword' );
yourls_add_action('pre_get_request','action_log_pre_get_request' );
yourls_add_action('pre_html_head','action_log_pre_html_head' );
yourls_add_action('pre_html_logo','action_log_pre_html_logo' );
yourls_add_action('pre_load_template','action_log_pre_load_template' );
yourls_add_action('pre_login','action_log_pre_login' );
yourls_add_action('pre_login_cookie','action_log_pre_login_cookie' );
yourls_add_action('pre_login_signature','action_log_pre_login_signature' );
yourls_add_action('pre_login_signature_timestamp','action_log_pre_login_signature_timestamp' );
yourls_add_action('pre_login_username_password','action_log_pre_login_username_password' );
yourls_add_action('pre_page','action_log_pre_page' );
yourls_add_action('pre_redirect','action_log_pre_redirect' );
yourls_add_action('pre_redirect_javascript','action_log_pre_redirect_javascript' );
yourls_add_action('pre_share_redirect','action_log_pre_share_redirect' );
yourls_add_action('pre_stats_countries_map','action_log_pre_stats_countries_map' );
yourls_add_action('pre_stats_line','action_log_pre_stats_line' );
yourls_add_action('pre_stats_pie','action_log_pre_stats_pie' );
yourls_add_action('pre_yourls_info_location','action_log_pre_yourls_info_location' );
yourls_add_action('pre_yourls_info_sources','action_log_pre_yourls_info_sources' );
yourls_add_action('pre_yourls_info_stats','action_log_pre_yourls_info_stats' );
yourls_add_action('pre_yourls_infos','action_log_pre_yourls_infos' );
yourls_add_action('redirect_keyword_not_found','action_log_redirect_keyword_not_found' );
yourls_add_action('redirect_no_keyword','action_log_redirect_no_keyword' );
yourls_add_action('redirect_shorturl','action_log_redirect_shorturl' );
yourls_add_action('require_auth','action_log_require_auth' );
yourls_add_action('require_no_auth','action_log_require_no_auth' );
yourls_add_action('set_DB_driver','action_log_set_DB_driver' );
yourls_add_action('setcookie_failed','action_log_setcookie_failed' );
yourls_add_action('share_links','action_log_share_links' );
yourls_add_action('share_redirect_','action_log_share_redirect_' );
yourls_add_action('shareboxes_after','action_log_shareboxes_after' );
yourls_add_action('shareboxes_before','action_log_shareboxes_before' );
yourls_add_action('shareboxes_middle','action_log_shareboxes_middle' );
yourls_add_action('shutdown','action_log_shutdown' );
yourls_add_action('social_bookmarklet_buttons_after','action_log_social_bookmarklet_buttons_after' );
yourls_add_action('status_header','action_log_status_header' );
yourls_add_action('unload_textdomain','action_log_unload_textdomain' );
yourls_add_action('update_clicks','action_log_update_clicks' );
yourls_add_action('update_next_decimal','action_log_update_next_decimal' );
yourls_add_action('update_option','action_log_update_option' );
yourls_add_action('yourls_ajax_','action_log_yourls_ajax_' );
yourls_add_action('yourls_die','action_log_yourls_die' );


// custom function that will be triggered when the action occurs. 
//   (add args as needed)
function action_log_activated_                      ( $args ) { action_log( __FUNCTION__ ); }
function action_log_activated_plugin                ( $args ) { action_log( __FUNCTION__ ); }
function action_log_add_new_link_already_stored     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_add_new_link_create_keyword     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_add_new_link_custom_keyword     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_add_option                      ( $args ) { action_log( __FUNCTION__ ); }
function action_log_admin_headers                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_admin_init                      ( $args ) { action_log( __FUNCTION__ ); }
function action_log_admin_menu                      ( $args ) { action_log( __FUNCTION__ ); }
function action_log_admin_notice                    ( $args ) { action_log( __FUNCTION__ ); }
function action_log_admin_notices                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_admin_page_after_table          ( $args ) { action_log( __FUNCTION__ ); }
function action_log_admin_page_before_content       ( $args ) { action_log( __FUNCTION__ ); }
function action_log_admin_page_before_form          ( $args ) { action_log( __FUNCTION__ ); }
function action_log_admin_page_before_table         ( $args ) { action_log( __FUNCTION__ ); }
function action_log_api                             ( $args ) { action_log( __FUNCTION__ ); }
function action_log_api_output                      ( $args ) { action_log( __FUNCTION__ ); }
function action_log_auth_successful                 ( $args ) { action_log( __FUNCTION__ ); }
function action_log_bookmarklet                     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_check_ip_flood                  ( $args ) { action_log( __FUNCTION__ ); }
function action_log_deactivated_                    ( $args ) { action_log( __FUNCTION__ ); }
function action_log_deactivated_plugin              ( $args ) { action_log( __FUNCTION__ ); }
function action_log_delete_link                     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_delete_option                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_deprecated_function             ( $args ) { action_log( __FUNCTION__ ); }
function action_log_get_keyword_not_cached          ( $args ) { action_log( __FUNCTION__ ); }
function action_log_html_addnew                     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_html_footer                     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_html_head                       ( $args ) { action_log( __FUNCTION__ ); }
function action_log_html_logo                       ( $args ) { action_log( __FUNCTION__ ); }
function action_log_html_tfooter                    ( $args ) { action_log( __FUNCTION__ ); }
function action_log_infos_keyword_not_found         ( $args ) { action_log( __FUNCTION__ ); }
function action_log_infos_no_keyword                ( $args ) { action_log( __FUNCTION__ ); }
function action_log_init                            ( $args ) { action_log( __FUNCTION__ ); }
function action_log_insert_link                     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_ip_flood                        ( $args ) { action_log( __FUNCTION__ ); }
function action_log_load_template_go                ( $args ) { action_log( __FUNCTION__, $args ); }
function action_log_load_template_infos             ( $args ) { action_log( __FUNCTION__ ); }
function action_log_load_template_redirect_admin    ( $args ) { action_log( __FUNCTION__ ); }
function action_log_load_textdomain                 ( $args ) { action_log( __FUNCTION__ ); }
function action_log_loader_failed                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_login                           ( $args ) { action_log( __FUNCTION__ ); }
function action_log_login_failed                    ( $args ) { action_log( __FUNCTION__ ); }
function action_log_logout                          ( $args ) { action_log( __FUNCTION__ ); }
function action_log_plugins_loaded                  ( $args ) { action_log( __FUNCTION__ ); }
function action_log_post_add_new_link               ( $args ) { action_log( __FUNCTION__ ); }
function action_log_post_page                       ( $args ) { action_log( __FUNCTION__ ); }
function action_log_post_redirect_javascript        ( $args ) { action_log( __FUNCTION__ ); }
function action_log_post_yourls_info_location       ( $args ) { action_log( __FUNCTION__ ); }
function action_log_post_yourls_info_sources        ( $args ) { action_log( __FUNCTION__ ); }
function action_log_post_yourls_info_stats          ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_add_new_link                ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_api_output                  ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_check_ip_flood              ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_edit_link                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_get_keyword                 ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_get_request                 ( $args ) { action_log( __FUNCTION__, $args ); } 
function action_log_pre_html_head                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_html_logo                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_load_template               ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_login                       ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_login_cookie                ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_login_signature             ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_login_signature_timestamp   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_login_username_password     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_page                        ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_redirect                    ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_redirect_javascript         ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_share_redirect              ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_stats_countries_map         ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_stats_line                  ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_stats_pie                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_yourls_info_location        ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_yourls_info_sources         ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_yourls_info_stats           ( $args ) { action_log( __FUNCTION__ ); }
function action_log_pre_yourls_infos                ( $args ) { action_log( __FUNCTION__ ); }
function action_log_redirect_keyword_not_found      ( $args ) { action_log( __FUNCTION__ ); }
function action_log_redirect_no_keyword             ( $args ) { action_log( __FUNCTION__ ); }
function action_log_redirect_shorturl               ( $args ) { action_log( __FUNCTION__ ); }
function action_log_require_auth                    ( $args ) { action_log( __FUNCTION__ ); }
function action_log_require_no_auth                 ( $args ) { action_log( __FUNCTION__ ); }
function action_log_set_DB_driver                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_setcookie_failed                ( $args ) { action_log( __FUNCTION__ ); }
function action_log_share_links                     ( $args ) { action_log( __FUNCTION__ ); }
function action_log_share_redirect_                 ( $args ) { action_log( __FUNCTION__ ); }
function action_log_shareboxes_after                ( $args ) { action_log( __FUNCTION__ ); }
function action_log_shareboxes_before               ( $args ) { action_log( __FUNCTION__ ); }
function action_log_shareboxes_middle               ( $args ) { action_log( __FUNCTION__ ); }
function action_log_shutdown                        ( $args ) { action_log( __FUNCTION__ ); }
function action_log_social_bookmarklet_buttons_after( $args ) { action_log( __FUNCTION__ ); }
function action_log_status_header                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_unload_textdomain               ( $args ) { action_log( __FUNCTION__ ); }
function action_log_update_clicks                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_update_next_decimal             ( $args ) { action_log( __FUNCTION__ ); }
function action_log_update_option                   ( $args ) { action_log( __FUNCTION__ ); }
function action_log_yourls_ajax_                    ( $args ) { action_log( __FUNCTION__ ); }
function action_log_yourls_die                      ( $args ) { action_log( __FUNCTION__ ); }

function action_log( $t, $args=[''] ) {
  $f = fopen( '/tmp/yourls_actions.log', 'a' );
  fwrite( $f, $t . "," . $args[0] . "\n" );
  fclose( $f );
}