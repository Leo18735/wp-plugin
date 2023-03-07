<?php
/**
* Plugin Name: Markus Plugin
* Description: Hope it works
* Version: 4.20
* Author: Simon Lang
**/

if (!defined('ABSPATH')) {
	exit;
}

require_once "Classes/MarkusPlugin.php";

$markusPlugin = new MarkusPlugin();
$markusPlugin->register();


// activation
register_activation_hook(__FILE__, [$markusPlugin, "activate"]);
// deactivation
register_deactivation_hook(__FILE__, [$markusPlugin, "deactivate"]);
?>