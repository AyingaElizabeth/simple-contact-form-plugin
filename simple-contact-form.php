<?php
/**
 * Plugin Name:       Simple Contact Form
 * Plugin URI:        https://lizaBet.com/plugins/the-basics/
 * Description:       simple contact form
 * Text Domain:       simple-contact-form
 */

if (!defined('ABSPATH')) {
    exit;
}

if(!class_exists('SimpleContactForm ')){
class SimpleContactForm {

    public function __construct()
    {
        define('MY_PLUGIN_PATH',plugin_dir_path( __FILE__ ));
        require_once(MY_PLUGIN_PATH.'/vendor/autoload.php');
    }

    public function intialize(){
        include_once MY_PLUGIN_PATH.'includes/utilities.php';
        include_once MY_PLUGIN_PATH.'includes/optionsPage.php';
        include_once MY_PLUGIN_PATH.'includes/simple-contact-form.php';


    }

   
}

// Instantiate the class
$simpleContactForm=new SimpleContactForm();
$simpleContactForm->intialize();
}


