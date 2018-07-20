<?php
/**
 * @package MassamPlugin
 */

 class MassamPluginActivate{

    public static function activate(){
        flush_rewrite_rules();
    }
 }