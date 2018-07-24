<?php
/**
 * @package MassamPlugin
 */

 namespace Inc\Pages;

 class Admin{

    function __construct(){

    }

    public function register(){
        add_action('admin_menu', array($this,'add_admin_pages'));
    }

    function add_admin_pages(){
        add_menu_page('Massam Plugin', 'Massam', 'manage_options','massam_plugin', array($this, 'admin_index'), 'dashicons-store', null);
    }

    function admin_index(){
        // Require Template
        require_once PLUGIN_PATH . 'templates/admin.php';
        
    }
 }