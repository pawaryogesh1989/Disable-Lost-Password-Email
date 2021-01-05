<?php
/*
  Plugin Name: Disable Lost Password Email
  Plugin URI: http://clariontech.com
  Description: Disable Lost Password Email
  Version: 2.2.0
  Author: Yogesh Pawar, Clarion Technologies
  Author URI: http://clariontech.com
  License: GPLv2 or later
  Text Domain: Disable Lost Password Email
 */

//Plugin Constant
defined('ABSPATH') or die('Restricted direct access!');

if (!class_exists('Disable_Lost_Password_Email')) {
    require_once 'classes/class.disable.email.php';
}

?>