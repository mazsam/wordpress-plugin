<?php

/**
 * @package MassamPlugin
 */

 // use namespace
 namespace Inc;

 class Init{

    /**
     * Store all the classes inside an array
     * @return  array list of classes
     */
    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class
        ];
    }

    /**
     * loop the classes, initialize them, 
     * and call the register() method if exists
     * @return
     */
    public static function register_services(){
        foreach( self::get_services() as $class){
            # Code...
            $service = self::instantiate( $class );
            if( method_exists( $service, 'register') ){
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param class $class    class from the services array
     * @return the class instance  new instance of the class
     */
    private static function instantiate( $class ) {
        $service = new $class();
        
        return $service;
    }
 }

// use namespace
// use Inc\Base\Activate;
// use Inc\Base\Deactivate;
// use Inc\Pages\Admin;

// if(! class_exists('MassamPlugin')){
//     class MassamPlugin {
        
//         public $plugin;

//         function __construct(){

//             $this->plugin = plugin_basename( __FILE__ );
//         }
        
//         function register(){
//              // move to enqueue            
//             add_action('admin_enqueue_scripts', array($this,'enqueue'));
            
//             add_action('admin_menu', array($this,'add_admin_pages'));
            
//             add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
//         }

//         public function settings_link($links){
//             $settings_link = '<a href="admin.php?page=massam_plugin">Settings</a>';
// 			array_push( $links, $settings_link );
// 			return $links;
//         }
        
//         function add_admin_pages(){
//             add_menu_page('Massam Plugin', 'Massam', 'manage_options','massam_plugin', array($this, 'admin_index'), 'dashicons-store', null);
//         }

//         function admin_index(){
//             // Require Template
//             require_once plugin_dir_path(__FILE__).'templates/admin.php';
            
//         }

//         // function activate(){
//             //     /**
//             //      * Generate a CPT
//             //      * Flush rewrite rules
//             //      */
//             //     $this->custom_post_type();
            
//             //     flush_rewrite_rules();
            
//             // }
            
//             // function deactivate(){
//                 //     /**
//                 //      * Flush rewrite rules
//                 //      */
                
//                 //      flush_rewrite_rules();
                
//                 // }
                
//                 /**
//                  * Custom Post
//                  */
                
//         protected function create_post_type(){
//             add_action('init', array($this,'custom_post_type'));
//         }
        
//         function custom_post_type(){
//             register_post_type('book', ['public' => true, 'label' => 'Books']);
//         }

//          // move to enqueue 
//         function enqueue(){
//             // Enqueue all our script
//             wp_enqueue_style('pluginstyle', plugins_url('assets/style.css', __FILE__));
//             wp_enqueue_script('pluginscript', plugins_url('assets/script.js', __FILE__));
//         }
        
//         // Another way
//         function activate(){
//             // require_once plugin_dir_path(__FILE__).'inc/massam-plugin-activate.php';
//             Activate::activate();
//         }
//     }

//     $massamPlugin = new MassamPlugin();
//     $massamPlugin->register();
//     /**
//      * Activated Plugin
//      */
//     register_activation_hook(__FILE__, array($massamPlugin, 'activate'));
//     // require_once plugin_dir_path(__FILE__).'inc/massam-plugin-activate.php';
//     // register_activation_hook(__FILE__, array('MassamPluginActivate', 'activate'));
    
//     /**
//      * Deactivation Plugin
//      */
//     // require_once plugin_dir_path(__FILE__).'inc/Deactivate.php';
//     //  register_deactivation_hook(__FILE__, array($massamPlugin, 'deactivate'));
//     register_deactivation_hook(__FILE__, array('Deactivate', 'deactivate'));
// }

