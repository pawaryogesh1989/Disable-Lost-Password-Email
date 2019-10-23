<?php

class Disable_Lost_Password_Email
{

    /**
     * Constructor of the class
     * Author : Yogesh Pawar
     * Date : 6th Sept 2019
     */
    function __construct()
    {

        add_filter('allow_password_reset', array(&$this, 'wpPasswordChangeNotification'));
    }

    /**
     * Function to disable lost email notification emails
     * @return boolean
     * Author : Yogesh Pawar
     * Date : 6th Sept 2019
     */
    function wpPasswordChangeNotification()
    {
        return false;
    }
}

//Initialising Class Plugin
new Disable_Lost_Password_Email();

?>