<?php
/**
 * @package MassamPlugin
 */

 class MassamPluginDeactivate{

    public static function deactivate(){
        flush_rewrite_rules();
    }
 }