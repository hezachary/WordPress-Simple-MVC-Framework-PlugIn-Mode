<?php
/**
 * The main template file.
 *
 * @package 
 * @subpackage 
 * @since 
 */
$post->post_name = 'home';
echo mvc::app()->run('page', $post);
?>
