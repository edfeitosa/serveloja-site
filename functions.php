<?php
// Remove a barra de administração do wordpress na página inicial quando logado
function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// Habilita a utilização de imagem destaca nos posts
add_theme_support( 'post-thumbnails' );

// Adiciona scripts ao tema
function scripts()
{
	// Script com funções do tema
	wp_enqueue_script(
		'script_adicionais',
		get_stylesheet_directory_uri().'/scripts/scripts.js',
		array('jquery')
	);
}
// Adicionando a ação a chama da função
add_action('wp_enqueue_scripts', 'scripts');

// Adiciona scripts responsável pela formatação dos campos
function scriptsFormatoCampo()
{
	wp_enqueue_script(
		'script_formatacao_campos',
		get_stylesheet_directory_uri().'/scripts/jquery.maskedinput.js',
		array('jquery')
	);
}
// Adicionando a ação a chama da função
add_action('wp_enqueue_scripts', 'scriptsFormatoCampo');

// Registra os menus que serão usados no site
function menus()
{
	// Os itens irão aparecer na administração do wordpress
	register_nav_menus( array(
		'pagina-inicial' => 'Página Inicial'
	));
}
add_action('init', 'menus');

// Mostra widget adicionados na sidebar
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
} ?>