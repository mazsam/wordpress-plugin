<?php

/**
 * @package MassamPlugin
 */

/*
Plugin Name: Massam Plugin
Plugin URI: mazsam.github.io/massam-plugin-wordpress
Description: My first attempt on writing  a custom plugin
Version: 1.0.0
Author: Samsul "Massam" Arifin
Author URI: mazsam.github.io
License: GPLv2 or later
Text Domain: massam-plugin
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
Copyright 2005-2015 Automattic, Inc.
*/

// Make sure we don't expose any info if called directly

// if ( ! define('ABSPATH')) {
//     die;
// }

// Or
defined('ABSPATH') or die ( 'Hey, you can\t access this file, you silly humman! ');

// Or
// if( !function_exists('add_action')){
//     echo 'Hey, you can\t access this file, you silly humman';
//     exit;
// }

if(! class_exists('MassamPlugin')){
    class MassamPlugin {
        
        function __construct(){
            add_action('init', array($this,'custom_post_type'));
        }
        
        function register(){
            add_action('admin_enqueue_scripts', array($this,'enqueue'));
        }

        // function activate(){
        //     /**
        //      * Generate a CPT
        //      * Flush rewrite rules
        //      */
        //     $this->custom_post_type();

        //     flush_rewrite_rules();

        // }

        // function deactivate(){
        //     /**
        //      * Flush rewrite rules
        //      */

        //      flush_rewrite_rules();

        // }

        /**
         * Custom Post
         */

        function custom_post_type(){
            register_post_type('book', ['public' => true, 'label' => 'Books']);
        }

        function enqueue(){
            // Enqueue all our script
            wp_enqueue_style('pluginstyle', plugins_url('assets/style.css', __FILE__));
            wp_enqueue_script('pluginscript', plugins_url('assets/script.js', __FILE__));
        }

        // Another way
        function activate(){
            require_once plugin_dir_path(__FILE__).'inc/massam-plugin-activate.php';
            MassamPluginActivate::activate();
        }
    }

    $massamPlugin = new MassamPlugin();
    $massamPlugin->register();
    /**
     * Activated Plugin
     */
    register_activation_hook(__FILE__, array($massamPlugin, 'activate'));
    // require_once plugin_dir_path(__FILE__).'inc/massam-plugin-activate.php';
    // register_activation_hook(__FILE__, array('MassamPluginActivate', 'activate'));
    
    /**
     * Deactivation Plugin
     */
    require_once plugin_dir_path(__FILE__).'inc/massam-plugin-deactivate.php';
    //  register_deactivation_hook(__FILE__, array($massamPlugin, 'deactivate'));
    register_deactivation_hook(__FILE__, array('MassamPluginDeactivate', 'deactivate'));
}

