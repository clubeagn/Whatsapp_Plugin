<?php
/**
* Plugin Name: Whatsapp Botão Flutuante
* Description: Este plugin mostra um botão flutuante do Whatsapp.
* Author: Alisson Custodio
* Author URI: www.alissonoportifolio.com
* Version: 2.0.0	
* License: GPLv2 or later
*/

// PLUGIN URL
define('AC_ZAP_PATH', plugins_url('/', __FILE__));
define('AC_ZAP_PATH_SERVER', WP_PLUGIN_DIR);


// INCLUDES
include_once('includes/init.php');
include_once('includes/functions.php');
include_once('admin/init.php');



// VERIFICA SE O POPUP DEVE SER EXIBIDO
if (isset($ac_zap_config['data']['active'])  && $ac_zap_config['data']['active'] != 1) {
	add_action('wp_footer','wc_function_zap');
}

// HOOKS
add_action('admin_menu', 'ac_zap_config'); 								// PAGINA DE CONFIGURAÇÃO

// AJAX
add_action('admin_enqueue_scripts', 'ac_zap_adm_enqueue_scripts', 100); // JQUERY NO PAINEL ADM
add_action('wp_ajax_ac_zap_save_config', 'ac_zap_admin_zap'); 			// SALVA FORMULARIO DE CONFIGURAÇÕES

/*
╔════════════════════════════════════════════════════════════════════════════════════════╗
║░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░║
║░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░< DESENVOLVIDO POR />░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░║
║░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░║
║░░░░██████████║░░░███║░░░░░░░░███║░░░██████║░░░██████║░░░░███████║░░░░██████║░░░███║░░░░║
║░░░░███║░░░███║░░░███║░░░░░░░░███║░░░██║░░░░░░░██║░░░░░░░██║░░░░██║░░░███║███║░░███║░░░░║
║░░░░███║░░░███║░░░███║░░░░░░░░███║░░░██║░░░░░░░██║░░░░░░░██║░░░░██║░░░███║░███║░███║░░░░║
║░░░░██████████║░░░███║░░░░░░░░███║░░░██████║░░░██████║░░░██║░░░░██║░░░███║░███║░███║░░░░║
║░░░░███║░░░███║░░░███║░░░░░░░░███║░░░░░░░██║░░░░░░░██║░░░██║░░░░██║░░░███║░███║░███║░░░░║
║░░░░███║░░░███║░░░███║░░░░░░░░███║░░░░░░░██║░░░░░░░██║░░░██║░░░░██║░░░███║░███║░███║░░░░║
║░░░░███║░░░███║░░░████████║░░░███║░░░██████║░░░██████║░░░░███████║░░░░███║░░██████║░░░░░║
║░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░║
║░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░║
║░░░░░░░░░░░░░░░░░░░░░░░░░░░.:░WWW.ALISSONOPORTIFOLIO.COM░:.░░░░░░░░░░░░░░░░░░░░░░░░░░░░░║
║░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░║
╚════════════════════════════════════════════════════════════════════════════════════════╝
*/


?>