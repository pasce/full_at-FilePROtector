<?php
/**
 * @package FilePROtectorPlugin
 */

/*
Plugin Name: File PROtector
Plugin URI: https://www.full.at/wp-plugins/fileprotector
Description: Wordpress Plugin to protect assets from direct access.
Version: 1.0
Author: Pascal Werkl
Author URI: https://www.full.at/pasce
License: GPL2v2 or later
Text Domain: fileprotector
*/

/*
ADD LICENSE

*/

defined('ABSPATH') or die;

class FileProtector
{
    public function __construct()
    {

    }

    public function activation()
    {
        //flush_rewrite_rules();
    }

    public function deactivation()
    {
        //flush_rewrite_rules();
    }

    private function uninstall(){}

    protected function register_admin_scripts() {
        //add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    protected function register_frontend_scripts() {
        //add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    private function enqueue() {
            //wp_enqueue_scripts(...);
            //wp_enqueue_styles(...);
    }
}

if (class_exists('FileProtector')) {
    $fileprotector = new FileProtector();
}

register_activation_hook(__FILE__, array($fileprotector, 'activation' ));
register_deactivation_hook(__FILE__, array($fileprotector, 'deactivation' ));
// register_uninstall_hook(__FILE__, array($fileprotector, 'uninstall' ));