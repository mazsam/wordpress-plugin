<?php
/**
 * @package MassamPlugin
 */

 namespace Inc\Base;

 class Enqueue{

    function __construct(){

    }

    public function register(){
        add_action('admin_menu', array($this,'add_admin_pages'));
        add_action('admin_enqueue_scripts', array($this,'enqueue'));
    }

    function enqueue(){
        // Enqueue all our script
        wp_enqueue_style('pluginstyle', PLUGIN_URL . 'assets/style.css');
        wp_enqueue_script('pluginscript', PLUGIN_URL . 'assets/script.js');
    }
 }