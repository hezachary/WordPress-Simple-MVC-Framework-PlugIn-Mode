<?php
/**
 * MVC functions and definitions
 *
 */
define('CONFIG_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'config');

do_action('simple_mvc_framework');

function _d($v, $s = true, $d=false){
    $debug_backtrace = debug_backtrace();
    ToolsExt::_d($v,$s,$d, $debug_backtrace);
}