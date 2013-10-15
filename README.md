Plugin for YOURLS 1.6

This plugin hooks every action trigger and prints out the 
trigger name to a file /tmp/yourls_actions.log. 

The primary use for this plugin is to debug execution of the code. 
It easy to lookup action names in the code to see the execution path.

Sample output: 

 action_log_plugins_loaded
 action_log_admin_init
 action_log_require_auth
 action_log_pre_login
 action_log_pre_login_cookie
 action_log_login
 action_log_auth_successful
 action_log_pre_html_head
 action_log_admin_headers
 action_log_html_head
 action_log_pre_html_logo
 action_log_html_logo
 action_log_admin_menu
 action_log_admin_notices
 action_log_admin_notice
 action_log_social_bookmarklet_buttons_after
 action_log_html_footer
 action_log_shutdown
