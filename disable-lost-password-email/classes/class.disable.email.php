<?php

if (!class_exists('Disable_Lost_Password_Email')) {

    class Disable_Lost_Password_Email {

        function __construct() {

            add_filter('allow_password_reset', array($this, 'wp_password_change_notification'));
        }

        public function wp_password_change_notification() {
            return false;
        }

    }

}
?>