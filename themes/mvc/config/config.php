<?php
/**
 * Defined the config files you would like to load
 **/
$strPath = dirname(__FILE__). self::DIR_SEP;

$this->view_path = require_once( $strPath . 'views_path.config.php');
$this->aryPathList = require_once( $strPath . 'path.config.php');
$this->aryClassDefine = require_once( $strPath . 'class_path.config.php');
$this->aryImageSizeList = require_once( $strPath . 'image.config.php');
$this->aryRouterList = require_once( $strPath . 'router.config.php');
$this->aryTaxonomyList = require_once( $strPath . 'taxonomy.config.php');
$this->aryCDNSettings = require_once( $strPath . 'cdn.config.php');
$this->blnReqProjectSecurity = require_once( $strPath . 'project_security.config.php');