<?php
/**
 * @package MassamPlugin
 */

 // use namespace
 namespace Inc\Base;

 class Deactivate{

    public static function deactivate(){
        flush_rewrite_rules();
    }
 }