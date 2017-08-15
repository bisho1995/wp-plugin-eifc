<?php
  /**
  *Plugin Name:Email Id From Comments
  *Plugin URI:http://the-tinker-project.co.in/project/wp-plugin/email-id-from-comments/
  *Author: Bisvarup Mukherjee
  *Author URI:http://bisho.the-tinker-project.co.in/
  *Version: 1.2
  *Lisence:GPLv2
  *Description: This plugin gets all the emails ids which belong to the people who commented on your site.
  */

add_action('admin_menu','eifc_25042017_my_admin_menu');
function eifc_25042017_my_admin_menu()
{
  add_menu_page('Email List','Email List','manage_options','footer_setting_page','eifc_25042017_bm_footer_text','dashicons-email',2);
}
function eifc_25042017_bm_footer_text()
{
  require("eifc_25042017_main.php");
}

?>
