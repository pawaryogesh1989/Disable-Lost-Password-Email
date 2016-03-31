<?php
/**
 * @package Disable Lost Password Email
 */
/*
  Plugin Name: Disable Lost Password Email
  Plugin URI: http://itsmyworld1989.blogspot.in
  Description: Disable Lost Password Email
  Version: 1.0.0
  Author: Yogesh Pawar
  Author URI: http://itsmyworld1989.blogspot.in
  License: GPLv2 or later
  Text Domain: Disable Lost Password Email
 */

//Plugin Constant
defined('ABSPATH') or die('Restricted direct access!');

if (!class_exists('Disable_Lost_Password_Email')) {
    require_once 'classes/class.disable.email.php';
}

//Initialising Class Plugin
new Disable_Lost_Password_Email();
?>