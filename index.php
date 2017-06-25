<?php
/*
Plugin Name: Grid Sallo
Description: Controle de lojas Sallo
Version: 1.0
Author: Dumon
Author URI: http://www.lojasite.com.br
*/


//Administracao

function menu(){
	add_menu_page( 'Grid', 'Grid Sallo', 10, 'grid-sallo/grid.php');
	add_submenu_page('grid-sallo/grid.php','Grid', 'Contato', 10, 'grid-sallo/grid.php');
}

add_action('admin_menu', 'menu');



//Layout

function criacao_tela(){

include('tela/html/tela.php');


}
    add_shortcode('grid_sallo', 'criacao_tela');
?>