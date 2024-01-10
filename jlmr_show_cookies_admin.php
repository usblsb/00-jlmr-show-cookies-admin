<?php
/**
 * Plugin Name: 000 JLMR Show Cookies
 * Plugin URI: https://webyblog.es/
 * Description: Una vez activado muestra las cookies en la parte superior de cada página a los administradores.
 * Version: 10-01-2024
 * Author: Juan Luis Martel
 * Author URI: https://www.webyblog.es
 * License: GPLv3 or later
 */


// Asegúrate de que este archivo no sea accedido directamente.
if (!defined('ABSPATH')) {
    exit;
}

function jlmr_show_cookies() {
    if (current_user_can('manage_options')) { // Solo para usuarios que tienen capacidad para gestionar opciones (normalmente, administradores)
        echo '<div style="position: fixed; top: 0; left: 0; background: #fff; z-index: 9999; width: 100%; padding: 10px; border-bottom: 1px solid #ccc;">';
        echo '<strong>Cookies:</strong><pre>';
        print_r($_COOKIE);
        echo '</pre></div>';
    }
}
add_action('wp_footer', 'jlmr_show_cookies');
