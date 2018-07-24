<?php
/**
 * @package MassamPlugin
 */

 // use namespace
 namespace Inc;

 class Activate{

    public static function activate(){
        flush_rewrite_rules();
    }
 }