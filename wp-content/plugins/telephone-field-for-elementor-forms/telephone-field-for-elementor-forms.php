<?php

/**
 * Plugin Name: Telephone field for Elementor Forms
 * Plugin URI: https://wordpress.org/plugins/telephone-field-for-elementor-forms/
 * Description: Elementor International Telephone Input easy phone number input
 * Version: 1.5.6
 * Requires Plugins: elementor
 * Author: add-ons.org
 * Domain Path: /languages
 * Elementor tested up to: 3.35
 * Elementor Pro tested up to: 3.35
 * Author URI: https://add-ons.org/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
if (! defined('ABSPATH')) exit; // Exit if accessed directly
if (!defined('ELEMENTOR_TELEPHONE_PLUGIN_PATH')) {
    define('ELEMENTOR_TELEPHONE_PLUGIN_PATH', plugin_dir_path(__FILE__));
    define('ELEMENTOR_TELEPHONE_PLUGIN_URL', plugin_dir_url(__FILE__));
    add_action('elementor_pro/forms/fields/register', 'yeeaddons_add_new_telephone_field');
    function yeeaddons_add_new_telephone_field($form_fields_registrar)
    {
        require_once(ELEMENTOR_TELEPHONE_PLUGIN_PATH . "fields/telephone.php");
        $form_fields_registrar->register(new \Superaddons_Telephone_Field());
    }
    include ELEMENTOR_TELEPHONE_PLUGIN_PATH . "yeekit/document.php";
}
