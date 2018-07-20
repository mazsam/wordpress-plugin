<?php
/**
 * @package MassamPlugin
 */

 class MassamPluginActivate{

    public static function activate(){
        echo "SAM";
        flush_rewrite_rules();
    }
 }