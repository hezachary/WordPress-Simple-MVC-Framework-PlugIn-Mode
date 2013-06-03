<?php
/**
 * Defined piority of base loading path
 * Loading piority for high to low
 * Example:
 *  array('local','core') 'local' -> 'core'
 *  array('local','community','core') 'local' -> 'community' -> 'core'
 **/
return array('local' => dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'framework','community','core');