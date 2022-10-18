<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
/**
 * Plugin Name: Aavoya Plugin
 * Author: Pijush Gupta
 * Description: Plugin Architecture 
 */

if (!file_exists(__DIR__ . '/core/app/app.php')) return;

function initiate_plugin() {
	require_once __DIR__ . 	'/core/app/app.php';
}
add_action('plugins_loaded', 'initiate_plugin');
