<?php
/**
 * @package MassamPlugin
 */

 class MassamPluginDeactivate{

    public static function deactivate(){
        echo "AAA";
        flush_rewrite_rules();
    }
 }