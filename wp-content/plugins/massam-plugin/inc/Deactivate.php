<?php
/**
 * @package MassamPlugin
 */

 // use namespace
 namespace Inc;

 class Deactivate{

    public static function deactivate(){
        flush_rewrite_rules();
    }
 }