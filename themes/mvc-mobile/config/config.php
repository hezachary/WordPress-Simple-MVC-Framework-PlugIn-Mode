<?php
/**
 * Defined the config files you would like to load
 **/
require_once(dirname(dirname(dirname(__FILE__))).self::DIR_SEP.'mvc-instance'.self::DIR_SEP.'config'.self::DIR_SEP.'config.php' );

$strPath = dirname(__FILE__). self::DIR_SEP;
$this->view_path = require_once( $strPath . 'views_path.config.php');