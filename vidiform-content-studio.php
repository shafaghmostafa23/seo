<?php
/**
 * Plugin Name: VidiForm Content Studio
 * Description: Keyword research, AI-assisted drafts, and editorial calendar in WordPress.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: VidiForm
 */
if (!defined('ABSPATH')) exit;
require_once plugin_dir_path(__FILE__) . 'vidiform-content-studio/vidiform-content-studio.php';
// The implementation file is nested to keep the repository organized. Register activation
// against this root plugin file so its database table is created when this plugin is activated.
register_activation_hook(__FILE__, array('VF_Content_Studio', 'activate'));
